<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\UserTransaction;
use App\Models\Vippack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class VipPackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vippack::all();
        return view('front.vipPack.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function checkForPay(Request $request)
    {
        // return $request->all();
        $api = Http::post('https://ipg.vandar.io/api/v3/send', [
            'api_key' => $request->api_key,
            'amount' => $request->amount,
            'callback_url' => $request->callback_url,
        ]);
        $result = $api->json();
        if ($result['status'] == 0) {
            throw \Illuminate\Validation\ValidationException::withMessages(['payment_error' => $result['errors']]);
        }
        $token = $result['token'];
        if ($result['status'] == 1) {
            //redirect user to payment page
            return redirect()->to("https://ipg.vandar.io/v3/$token");
        } else {
            return $result['errors'];
        }
    }
    public function callback()
    {
        $token = $_GET['token'];
        $payment_status = $_GET['payment_status'];
        if ($payment_status != 'OK') {
            //in here whe should send validation errors also
            throw \Illuminate\Validation\ValidationException::withMessages(['payment_error' => 'پرداخت شما ناموفق بود']);
        } else {
            //send api to server and save user transation data:
            $api = Http::post('https://ipg.vandar.io/api/v3/transaction', [
                'api_key' => env('VANDARVIPKEY'),
                'token' => $token
            ]);
            $result = $api->json();
            $model = new UserTransaction();
            $model->user_id = 1;
            $model->amount = $result['amount'];
            $model->transId = $result['transId'];
            $model->refnumber = $result['refnumber'];
            $model->trackingCode = $result['trackingCode'];
            $model->factorNumber = $result['factorNumber'];
            $model->mobile = $result['mobile'];
            $model->description = $result['description'];
            $model->cardNumber = $result['cardNumber'];
            $model->CID = $result['cid'];
            $model->paymentDate = $result['paymentDate'];
            $model->code = $result['code'];
            $model->save();
            //in the last we should verify payment
            $api2 = Http::post('https://ipg.vandar.io/api/v3/verify', [
                'api_key' => env('VANDARVIPKEY'),
                'token' => $token
            ]);
            $result2 = $api2->json();
            if ($result2['status'] = '1') {
                return redirect()->to('vippack');
            } else {
                throw \Illuminate\Validation\ValidationException::withMessages(['payment_error' => $result2['errors']]);
            }
        }
    }
}
