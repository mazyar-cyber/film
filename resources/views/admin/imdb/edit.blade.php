@extends('admin.layouts.master')
@section('context')
    <div class="row row-sm mt-5 " id="app">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <label class="main-content-label mb-0 pt-1">ویرایش رکورد</label>
                        <div class="mr-auto float-right">
                            <a href="{{ route('imdb.index') }}" class="btn btn-info"> <i
                                    class="fa fa-arrow-right mx-2"></i>برگشت به
                                لیست</a>
                        </div>
                    </div>
                    <p class="tx-12 tx-gray-500 mt-0 mb-2">api / ویرایش فیلم و سریال </p>
                    <div class="col-sm-12">
                        @if (\Illuminate\Support\Facades\Session::has('record-save'))
                            <div class="alert alert-success text-center">
                                {{ session('record-save') }}
                            </div>
                        @endif
                    </div>
                    <hr>
                    <hr>
                    <form method="post" action="{{ route('imdb.update', $model->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('patch')


                        <div class="d-flex row ">
                            <div class="col-sm-12">
                                <h4>ویرایش</h4>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">آیدی IMDB </label>
                                    <input type="text" class="form-control " placeholder="آیدی IMDB" name="IMDB_ID"
                                        value="{{ $model->imdb_id }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">عنوان </label>

                                    <input type="text" class="form-control " placeholder="عنوان" name="title"
                                        value="{{ $model->title }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">عکس </label>
                                    <input class="form-control" placeholder="لینک عکس را اینجا وارد کنید" type="text"
                                        name="pic" value="{{ $model->photo }}" required />
                                </div>



                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">ژانر ها </label>
                                    <input class="form-control" placeholder="لطفا ژانر ها را با '،' از هم جدا کنید"
                                        type="text" name="genres" value="{{ $model->genre }}" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">نویسنده</label>
                                    <input class="form-control" type="text" value="{{ $model->author }}"
                                        placeholder="لطفا نویسنده ها را با '،' از هم جدا کنید" name="author" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">کارگردان</label>
                                    <input class="form-control" type="text" value="{{ $model->director }}"
                                        placeholder="لطفا کارگردان ها را با '،' از هم جدا کنید" name="director" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">کشور سازنده</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا کشور ها را با '،' از هم جدا کنید" name="countries"
                                        value="{{ $model->country }}" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">ستارگان</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا ستارگان را با '،' از هم جدا کنید" name="stars"
                                        value="{{ $model->stars }}" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">زبان</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا زبان ها را با '،' از هم جدا کنید" name="languages"
                                        value="{{ $model->lang }}" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">سال تولید</label>
                                    <input class="form-control" type="text" name="production_year"
                                        value="{{ $model->production_year }}" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">عکس اسلایدر </label>
                                    <input type="text" id="addres-article" placeholder="لینک عکس را اینجا وارد کنید"
                                        class="form-control addres-article-input" name="sliderPic"
                                        value="{{ $model->slidePhoto }}" />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">لینک ویدیو تریلر </label>
                                    <input type="text" id="addres-article" placeholder="لینک ویدیو را اینجا وارد کنید"
                                        class="form-control addres-article-input" name="trailer_video_link"
                                        value="{{ $model->trailer_video_link }}" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class=" my-2">خلا صه</label>
                                    <textarea type="text" class="form-control " name="brief" placeholder="خلاصه" required />{{ $model->briefStory }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class=" my-2">توضیحات</label>
                                    <textarea class="form-control" placeholder="توضیحات" name="description" required />{{ $model->description }}</textarea>
                                </div>
                                <create-film></create-film>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class=" my-2">به زودی</label>
                                    <input type="checkBox" name="soon"
                                        @if ($model->soon != null) checked @endif>
                                    <label for="exampleFormControlSelect1" class=" my-2">دوبله</label>
                                    <input type="checkBox" name="dubbing"
                                        @if ($model->dubbing != null) checked @endif>
                                    <label for="exampleFormControlSelect1" class=" my-2">درخواستی</label>
                                    <input type="checkBox" name="requested"
                                        @if ($model->requested != null) checked @endif>
                                    <label for="exampleFormControlSelect1" class=" my-2">زیرنویس چسپیده</label>
                                    <input type="checkBox" name="stickedSubtitle"
                                        @if ($model->stickedSubtitle != null) checked @endif>
                                    <label for="exampleFormControlSelect1" class=" my-2">بهترین فیلم های جدید</label>
                                    <input type="checkBox" name="bestFilms"
                                        @if ($model->bestFilms != null) checked @endif>

                                </div>
                                <input type="submit" class="btn btn-info col-sm-12" value="ویرایش">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- row closed  -->
    </div>
@endsection
