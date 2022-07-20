@extends('admin.layouts.master')
@section('context')
    <div class="row row-sm mt-5 " id="app">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <label class="main-content-label mb-0 pt-1">ایجاد رکورد</label>
                        <div class="mr-auto float-right">
                            <a href="{{ route('imdb.index') }}" class="btn btn-info"> <i
                                    class="fa fa-arrow-right mx-2"></i>برگشت به
                                لیست</a>
                        </div>
                    </div>
                    <p class="tx-12 tx-gray-500 mt-0 mb-2">api / درج فیلم و سریال </p>
                    <div class="col-sm-12">
                        @if (\Illuminate\Support\Facades\Session::has('record-save'))
                            <div class="alert alert-success text-center">
                                {{ session('record-save') }}
                            </div>
                        @endif
                        <form action="{{ route('send.api.imdb') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <h4 for="addres-article" class="addres-article my-2">ثبت از طریق IMDB: </h4>
                                {{-- @if ($errors->any())
                                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                                @endif --}}
                                <input type="text" class="form-control " required name="IMDBId"
                                    placeholder="آیدی IMDB سریال یا فیلم مورد نظر را لطفا اینجا وارد کنید.    مثال:tt0110413" />
                                @error('IMDBId')
                                    <div class="form-control">
                                        <span class="alert alert-danger col-sm-12">{{ $message }}</span>
                                    </div>
                                @enderror
                                <input type="submit" value="دریافت" class="btn btn-success col-sm-12">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <hr>
                    <form action="{{ route('imdb.store') }}" method="POST" class="my-5" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex row ">
                            <div class="col-sm-12">
                                <h4>ثبت دستی</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="آیدی IMDB" name="IMDB_ID"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="عنوان" name="title"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">عکس </label>
                                    <input class="form-control" placeholder="لینک عکس را اینجا وارد کنید" type="text"
                                        name="pic" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">ژانر ها </label>
                                    <input class="form-control" placeholder="لطفا ژانر ها را با '،' از هم جدا کنید"
                                        type="text" name="genres" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">نویسنده</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا نویسنده ها را با '،' از هم جدا کنید" name="author" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">کارگردان</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا کارگردان ها را با '،' از هم جدا کنید" name="director" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">کشور سازنده</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا کشور ها را با '،' از هم جدا کنید" name="countries" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">ستارگان</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا ستارگان را با '،' از هم جدا کنید" name="stars" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">زبان</label>
                                    <input class="form-control" type="text"
                                        placeholder="لطفا زبان ها را با '،' از هم جدا کنید" name="languages" required />
                                </div>

                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">سال تولید</label>
                                    <input class="form-control" type="text" name="production_year" required />
                                </div>


                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">عکس اسلایدر </label>
                                    <input type="text" id="addres-article" placeholder="لینک عکس را اینجا وارد کنید"
                                        class="form-control addres-article-input" name="sliderPic" />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">لینک ویدیو تریلر </label>
                                    <input type="text" id="addres-article" placeholder="لینک ویدیو را اینجا وارد کنید"
                                        class="form-control addres-article-input" name="trailer_video_link" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " name="brief" placeholder="خلاصه"
                                        required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="توضیحات" name="description" required /></textarea>
                                </div>

                                {{-- <div class="border-0">
                                    <div>
                                        <label for="addres-article" class="addres-article my-2">کیفیت</label>
                                        <input type="text" id="addres-article"
                                            placeholder="کیفیت ویدیو  را اینجا وارد کنید"
                                            class="form-control addres-article-input" name="quality1" />
                                        <label for="addres-article" class="addres-article my-2">لینک دانلود</label>
                                        <input type="text" id="addres-article"
                                            placeholder="کیفیت ویدیو  را اینجا وارد کنید"
                                            class="form-control addres-article-input" name="link1" />
                                    </div>
                                    <hr>
                                </div> --}}

                                <create-film></create-film>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class=" my-2">به زودی</label>
                                    <input type="checkBox" name="soon">
                                    <label for="exampleFormControlSelect1" class=" my-2">دوبله</label>
                                    <input type="checkBox" name="dubbing">
                                    <label for="exampleFormControlSelect1" class=" my-2">درخواستی</label>
                                    <input type="checkBox" name="requested">
                                    <label for="exampleFormControlSelect1" class=" my-2">زیرنویس چسپیده</label>
                                    <input type="checkBox" name="stickedSubtitle">
                                    <label for="exampleFormControlSelect1" class=" my-2">بهترین فیلم های جدید</label>
                                    <input type="checkBox" name="bestFilms">

                                </div>
                                <input type="submit" class="btn btn-info" value="ثبت">
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
