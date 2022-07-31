<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteSelectedRequest;
use App\Models\FilmResolutionLink;
use App\Models\imdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminImdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = imdb::all();
        return view('admin.imdb.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->all();
        $model = new imdb();
        $model->imdb_id = $request->IMDB_ID;
        $model->title = $request->title;
        $model->photo = $request->pic;
        $model->slidePhoto = $request->sliderPic;
        $model->briefStory = $request->brief;
        $model->trailer_video_link = $request->trailer_video_link;
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
        $model->imDbRating = $request->imDbRating;
        $model->save();
        //in here we should create another model

        for ($i = 1; $i <= $request->numberOfDivs; $i++) {
            $model2 = new FilmResolutionLink();
            $res = "quality$i";
            $link = "link$i";
            $model2->resoultion = $request->$res;
            $model2->link = $request->$link;
            $model2->film_id = $model->id;
            $model2->save();
        }
        \Illuminate\Support\Facades\Session::flash('record-save', "رکورد شما با موفقیت به صورت دستی ذخیره شد!");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = imdb::find($id);
        return view('admin.imdb.edit', compact('model'));
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
        $model = imdb::find($id);
        $model->imdb_id = $request->IMDB_ID;
        $model->title = $request->title;
        $model->photo = $request->pic;
        $model->slidePhoto = $request->sliderPic;
        $model->briefStory = $request->brief;
        $model->trailer_video_link = $request->trailer_video_link;
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
        $model->save();

        //in here we should create another model
        //first of all we should check the existance probility of model and delete all of them:
        $model2 = FilmResolutionLink::where('film_id', $model->id)->get();
        foreach ($model2 as $m2) {
            $m2->delete();
        }
        for ($i = 1; $i <= $request->numberOfDivs; $i++) {
            $model2 = new FilmResolutionLink();
            $res = "quality$i";
            $link = "link$i";
            $model2->resoultion = $request->$res;
            $model2->link = $request->$link;
            $model2->film_id = $model->id;
            $model2->save();
        }

        \Illuminate\Support\Facades\Session::flash('record-save', "رکورد شما با موفقیت  ویرایش شد!");
        return redirect()->to('/admin/imdb');
        // return redirect()->back();
        // return 'yesss';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = imdb::find($id);
        $model->delete();
        \Illuminate\Support\Facades\Session::flash('record-delete', "رکورد شما با موفقیت حذف شد");
        return redirect()->back();
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
        $model = new imdb();
        $model->imdb_id = $imdbId;
        $model->title = $result['title'];
        $model->photo = $result['image'];
        $model->slidePhoto = $result['image'];
        $model->briefStory = $result['plot'];
        if (count($result['trailer']) > 0) {
            $model->trailer_video_link = $result['trailer']['linkEmbed'];
        }
        $model->description = $result['wikipedia']['plotFull']['plainText'];
        $model->genre = $result['genres'];
        $model->author = $result['writers'];
        $model->production_year = $result['year'];
        $model->lang = $result['languages'];
        $model->country = $result['countries'];
        $model->stars = $result['stars'];
        $model->director = $result['directors'];
        $model->imDbRating = $result['imDbRating'];
        $model->save();

        \Illuminate\Support\Facades\Session::flash('record-save', " رکورد شما ذخیره شد،در صورت تمایل میتوانید اطلاعات دریافتی را اینجا ویرایش کنید");
        return $this->edit($model->id);
        // return redirect()->back();
    }


    public function deleteSelected(DeleteSelectedRequest $request)
    {
        //        return $request->all();
        foreach ($request->checkBoxArray as $id) {
            $record = imdb::find($id);
            $record->delete();
        }
        \Illuminate\Support\Facades\Session::flash('record-delete', "موارد انتخاب شده با موفقیت حذف شدند!");
        return redirect()->back();
    }
}
