<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteSelectedRequest;
use App\Models\Vippack;
use Illuminate\Http\Request;

class AdminVIPPackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vippack::all();
        return view('admin.vipPack.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vipPack.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $model = new Vippack();
        $model->name = $request->name;
        $model->time = $request->time;
        $model->price = $request->price;
        $model->save();
        \Illuminate\Support\Facades\Session::flash('vippack-save', "رکورد موردنظر با موفقیت ذخیره شد!!");
        return redirect()->back();
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
        return $model = Vippack::find($id);
        $model->delete();
        \Illuminate\Support\Facades\Session::flash('record-delete', "رکورد شما با موفقیت حذف شد");
        return redirect()->back();
    }
    public function deleteSelected(DeleteSelectedRequest $request)
    {
        //        return $request->all();
        foreach ($request->checkBoxArray as $id) {
            $record = Vippack::find($id);
            $record->delete();
        }
        \Illuminate\Support\Facades\Session::flash('record-delete', "موارد انتخاب شده با موفقیت حذف شدند!");
        return redirect()->back();
    }
}
