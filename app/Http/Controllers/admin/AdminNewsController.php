<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteSelectedRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::all();
        return view('admin.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('pic')->getClientOriginalName();
        $filename = time() . $request->file('pic')->getClientOriginalName();
        $path =   'uploads' . '\\' . 'images' . '\\' . 'news' . '\\';
        // file_put_contents($path, $request->file('pic'));
        // Storage::disk('local')->put($path, $request->file('pic'));
        Storage::disk('public')->putFileAs($path, $request->file('pic'), $filename);
        $model = new News();
        $model->title = $request->title;
        $model->text = $request->text;
        $model->pic = $filename;
        $model->save();
        \Illuminate\Support\Facades\Session::flash('record-save', "رکورد شما با موفقیت  ذخیره شد!");
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
        //
    }
    public function deleteSelected(DeleteSelectedRequest $request)
    {
        //        return $request->all();
        foreach ($request->checkBoxArray as $id) {
            $record = News::find($id);
            $record->delete();
        }
        \Illuminate\Support\Facades\Session::flash('record-delete', "موارد انتخاب شده با موفقیت حذف شدند!");
        return redirect()->back();
    }
}
