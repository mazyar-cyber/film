<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteSelectedRequest;
use App\Models\Serial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminSerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Serial::all();
        return view('admin.serial.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.serial.create');
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
        $model = new Serial();
        $model->imdb_id = $request->IMDB_ID;
        $model->title = $request->title;
        $model->Fa_title = $request->Fa_title;
        $model->photo = $request->pic;
        $model->photo_hor = $request->hor_pic;
        $model->lastUpdate = $request->lastUpdate;
        $model->slidePhoto = $request->sliderPic;
        $model->playStatus = $request->playStatus;
        $model->channel = $request->channel;
        $model->briefStory = $request->brief;
        $model->requested = $request->requested;
        $model->stickedSubtitle = $request->stickedSubtitle;
        $model->bestFilms = $request->bestFilms;
        $model->description = $request->description;
        $model->soon = $request->soon;
        $model->dubbing = $request->dubbing;
        $model->genre = $request->genres;
        $model->author = $request->writers;
        $model->director = $request->directors;
        $model->production_year = $request->year;
        $model->lang = $request->languages;
        $model->country = $request->countries;
        $model->stars = $request->stars;
        $model->type = $request->type;
        $model->save();
        \Illuminate\Support\Facades\Session::flash('record-save', "سریال شما با موفقیت به صورت دستی ذخیره شد!");
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
        $model = Serial::find($id);
        return view('admin.serial.edit', compact('model'));
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
        // return $request->all();
        $model = Serial::find($id);
        $model->imdb_id = $request->IMDB_ID;
        $model->title = $request->title;
        $model->Fa_title = $request->Fa_title;
        $model->photo = $request->pic;
        $model->photo_hor = $request->hor_pic;
        $model->lastUpdate = $request->lastUpdate;
        $model->slidePhoto = $request->sliderPic;
        $model->playStatus = $request->playStatus;
        $model->channel = $request->channel;
        $model->briefStory = $request->brief;
        $model->requested = $request->requested;
        $model->stickedSubtitle = $request->stickedSubtitle;
        $model->bestFilms = $request->bestFilms;
        $model->description = $request->description;
        $model->soon = $request->soon;
        $model->dubbing = $request->dubbing;
        $model->genre = $request->genres;
        $model->author = $request->author;
        $model->director = $request->director;
        $model->production_year = $request->production_year;
        $model->lang = $request->languages;
        $model->country = $request->countries;
        $model->stars = $request->stars;
        $model->type = $request->type;
        $model->save();
        \Illuminate\Support\Facades\Session::flash('record-save', "سریال شما با موفقیت به صورت دستی ویرایش شد!");
        return redirect()->back();
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

    public function sendApi(Request $request)
    {
        $imdbId = $request->IMDBId;
        $apiKey = env('IMDB_API_KEY');
        // return $request->all();
        $api = Http::get("https://imdb-api.com/fa/API/Title/$apiKey/$imdbId/Trailer,Wikipedia,");
        $result = $api->json();
        // return  $result['genres'];
        if ($result['errorMessage'] != null) {
            throw \Illuminate\Validation\ValidationException::withMessages(['IMDBId' => $result['errorMessage']]);
        }

        $model = new Serial();
        $model->imdb_id = $imdbId;
        $model->title = $result['title'];
        $model->photo = $result['image'];
        $model->slidePhoto = $result['image'];
        $model->briefStory = $result['plot'];
        // $model->trailer_video_link = $result['trailer']['linkEmbed'];
        $model->description = $result['wikipedia']['plotFull']['plainText'];
        $model->genre = $result['genres'];
        $model->author = $result['writers'];
        $model->production_year = $result['year'];
        $model->lang = $result['languages'];
        $model->country = $result['countries'];
        $model->stars = $result['stars'];
        $model->director = $result['directors'];
        $model->save();

        \Illuminate\Support\Facades\Session::flash('record-save', "سریال شما با موفقیت به صورت دستی ذخیره شد!");
        return redirect()->back();
    }
    public function deleteSelected(DeleteSelectedRequest $request)
    {
        //        return $request->all();
        foreach ($request->checkBoxArray as $id) {
            $record = Serial::find($id);
            $record->delete();
        }
        \Illuminate\Support\Facades\Session::flash('record-delete', "موارد انتخاب شده با موفقیت حذف شدند!");
        return redirect()->back();
    }
}
