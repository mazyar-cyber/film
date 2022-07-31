<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\imdb;
use App\Models\News;
use App\Models\Serial;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        $films = imdb::all();
        $news = News::all();
        $genres = "همه";
        foreach ($films as $film) {
            if ($film->genre) {
                $genres = $genres . '،' . $film->genre;
            }
        }
        $genres = array_unique(explode('،', $genres));
        array_shift($genres);
        return view('FrontEnd.main.index', compact('films', 'news', 'genres'));
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

    public function search(Request $request)
    {
        // return $request->all();
        $films = imdb::where('title', 'LIKE', "%$request->searchWord%")->get();
        $serials = Serial::where('title', 'LIKE', "%$request->searchWord%")->get();
        if (count($films) == 0 && count($serials) == 0) {
            \Illuminate\Support\Facades\Session::flash('search-done', "نتیجه ای مطابق با جستجوی شما یافت نشد!");
        }
        return view('FrontEnd.search.index', compact('films', 'serials'));
        // return ['films' => $model1, 'serials' => $model2];
    }

    public function advancedSearch(Request $request)
    {
        // return $request->all();
        // return $request->genres;
        $genres = $request->genres;


        $films = imdb::Where(function ($query) use ($genres) {
            for ($i = 0; $i < count($genres); $i++) {
                $query->orwhere('genre', 'like',  '%' . $genres[$i] . '%');
            }
        })->where('country', 'like', "%$request->country%")->where('lang', "like", "%$request->lang%")->where('dubbing', $request->dubbed)
            ->where('imDbRating', "$request->star", 5)
            ->whereBetween('production_year', [$request->from_year, $request->end_year])->get();

        $serials = [];
        // $serials = Serial::where('title', 'LIKE', "%$request->searchWord%")->get();
        // if (count($films) == 0 && count($serials) == 0) {
        //     \Illuminate\Support\Facades\Session::flash('search-done', "نتیجه ای مطابق با جستجوی شما یافت نشد!");
        // }
        return view('FrontEnd.search.index', compact('films', 'serials'));
    }
}
