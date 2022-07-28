@extends('FrontEnd.layouts.master')
@section('context')
    <!-- movies -->
    <div class="moives">
        <div class="row px-2">
            <div class="col-sm-9 ml-3 col-12 pb-5">
                <div class="row w-100 justify-content-between">
                    @foreach ($films as $film)
                        <div
                            class="moives-item mx-3 mb-2 border-radius-5rem d-flex flex-sm-row flex-sm-wrap justify-content-sm-start  flex-column justify-content-center movies-item p-0 bg-white">
                            <h2 class="movie-name w-100 col-12">
                                فیلم {{ $film->title }}
                            </h2>
                            <div class="px-5 px-sm-0 py-3 border-radius-5rem movies-img-box col-sm-4  col-12">
                                <img src="{{ $film->photo }}" class="img-fluid border-radius-5rem" alt="film_pic" />
                            </div>
                            <ul class="px-5 movie-info-menu col-7">
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کیفیت</span>
                                    <span>WEB-DL 1080</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>ژانر</span>
                                    <span>{{ $film->genre }}</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کشور سازنده</span>
                                    <span>{{ $film->country }}</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کارگردان</span>
                                    <span>{{ $film->director }}</span>
                                </li>
                                <li class="d-flex start justify-content-between py-1 border-bottom">
                                    <span>ستارگان</span>
                                    <span>{{ $film->stars }}</span>
                                </li>
                            </ul>
                            <p class="px-4">
                                {{ $film->briefStory }}
                            </p>
                            <div
                                class="px-5 movies-more-option pb-5 pt-1 col-12 d-flex justify-content-between align-items-center">
                                <span class="d-inline-block">
                                    <a href="#" class="btn btn-download">جزئیات و دانلود</a>
                                    <span>لیست تماشا +</span>
                                </span>

                                <span class="d-inline-block">
                                    <span class="d-inline-block IMDB-box border-radius-5rem">
                                        IMDB
                                    </span>
                                    <span class="d-inline-block">
                                        <small>10/</small>
                                        @if ($film->imDbRating)
                                            {{ $film->imDbRating }}
                                        @else
                                            n
                                        @endif

                                    </span>
                                </span>
                            </div>
                        </div>
                    @endforeach
                    <!-- 2 -->

                    <div
                        class="moives-item moives-pagantion mx-1 mb-2 border-radius-5rem w-80 m-auto d-flex justify-content-center movies-item p-0 bg-white">
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">Last</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">...</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">20</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">10</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">...</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">4</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">3</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">2</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">1</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-12 d-flex">
                <div class="row flex-column w-100">
                    <!-- **********************The best dubbled*************************** -->
                    <div class="col-12 mb-3 flex-grow-1 border-radius-5rem bg-white p-0">
                        <h2 class="movie-name">
                            فیلم where the scary things are 2022
                        </h2>
                        <div
                            class="px-1 pt-3 px-3 border-radius-5rem movies-box-side d-flex flex-column justify-content-center align-items-center">
                            <img src="frontAssest/images/movies-poster/where-the-scary-things-are.jpg"
                                class="img-fluid border-radius-5rem" alt="" />
                            <a href="#" class="d-inline-block mt-3">
                                مشاهده سایر فیلم های دوبله فارسی
                            </a>
                            <a href="#" class="d-inline-block">
                                مشاهده سریال های دوبله فارسی
                            </a>
                        </div>
                    </div>
                    <!-- **********************Last week box office*************************** -->
                    <div class="col-12 mb-3 flex-grow-1 border-radius-5rem bg-white p-0">
                        <!-- start -->
                        <h2 class="movie-name">باکس آفیس هفته ی گذشته</h2>
                        <!-- 1 -->
                        <div class="row py-3 box-office-item m-auto">
                            <ul class="col-9 movie-side-menu-info">
                                <li>The Bad Guys</li>
                                <li>فروش آخر هفته : 24 میلیون دلار</li>
                                <li>فروش کل 24.0 میلیون دلار</li>
                                <li>اولین اکران هفته</li>
                            </ul>
                            <div class="col-3 movie-side-img">
                                <img src="frontAssest/images/movies-poster/the-bad-guys.jpg" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row py-3 box-office-item m-auto">
                            <ul class="col-9 movie-side-menu-info">
                                <li>The Bad Guys</li>
                                <li>فروش آخر هفته : 24 میلیون دلار</li>
                                <li>فروش کل 24.0 میلیون دلار</li>
                                <li>اولین اکران هفته</li>
                            </ul>
                            <div class="col-3 movie-side-img">
                                <img src="frontAssest/images/movies-poster/the-bad-guys.jpg" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="row py-3 box-office-item m-auto">
                            <ul class="col-9 movie-side-menu-info">
                                <li>The Bad Guys</li>
                                <li>فروش آخر هفته : 24 میلیون دلار</li>
                                <li>فروش کل 24.0 میلیون دلار</li>
                                <li>اولین اکران هفته</li>
                            </ul>
                            <div class="col-3 movie-side-img">
                                <img src="frontAssest/images/movies-poster/the-bad-guys.jpg" alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- **********************Movies category*************************** -->
                    <div class="col-12 mb-3 flex-grow-1 movies-category position-relative border-radius-5rem bg-white p-0">
                        <h2 class="movie-name ">دسته بندی فیلم ها</h2>
                        <!-- categories title -->
                        <div class="row">
                            <div
                                class="days-of-week border-radius-5rem w-80 m-auto d-flex justify-content-around p-0 align-items-center">
                                <span
                                    class="categories btn-movies-genre d-inline-block py-2 border-radius-5rem">ژانر</span>
                                <span
                                    class="categories btn-movies-country d-inline-block py-2 border-radius-5rem">کشور</span>
                                <span class="categories btn-movies-R d-inline-block py-2 border-radius-5rem">رده
                                    سنی</span>
                                <span
                                    class="categories btn-movies-point d-inline-block py-2 border-radius-5rem">امتیاز</span>
                                <span class="categories btn-movies-year d-inline-block py-2 border-radius-5rem">سال</span>
                            </div>
                        </div>
                        <!-- categories content *** year *** -->
                        <div class="row movies-genre position-absolute bg-info w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** country *** -->
                        <div class="row movies-country position-absolute bg-success w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** R *** -->
                        <div class="row movies-R position-absolute bg-warning w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** point *** -->
                        <div class="row movies-point position-absolute bg-danger w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** year *** -->
                        <div class="row movies-year position-absolute bg-primary w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- **********************Series category*************************** -->
                    <div
                        class="col-12 mb-3 position-relative series-category flex-grow-1 border-radius-5rem bg-white p-0">
                        <h2 class="movie-name">دسته بندی سریال ها</h2>
                        <!-- categories title -->
                        <div class="row">
                            <div
                                class="days-of-week border-radius-5rem w-80 m-auto d-flex justify-content-around p-0 align-items-center">
                                <span
                                    class="categories btn-series-genre d-inline-block py-2 border-radius-5rem">ژانر</span>
                                <span
                                    class="categories btn-series-country d-inline-block py-2 border-radius-5rem">کشور</span>
                                <span class="categories btn-series-R d-inline-block py-2 border-radius-5rem">رده
                                    سنی</span>
                                <span
                                    class="categories btn-series-point d-inline-block py-2 border-radius-5rem">امتیاز</span>
                                <span class="categories btn-series-year d-inline-block py-2 border-radius-5rem">سال</span>
                            </div>
                        </div>
                        <!-- categories content *** year *** -->
                        <div class="row series-genre position-absolute bg-info w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** country *** -->
                        <div class="row series-country position-absolute bg-success w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** R *** -->
                        <div class="row series-R position-absolute bg-warning w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** point *** -->
                        <div class="row series-point position-absolute bg-danger w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  -->
                        <!-- categories content *** year *** -->
                        <div class="row series-year position-absolute bg-primary w-80 m-auto py-2">
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اجتماعی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">انیمیشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">ترسناک</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="categories-menu">
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">اکشن</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">تاریخی</a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-inline-block border-radius-5rem">جنایی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- **********************Asking movies*************************** -->
                    <div class="col-12 flex-grow-1 border-radius-5rem bg-white p-0">
                        <h2 class="movie-name">
                            فیلم where the scary things are 2022
                        </h2>
                        <div class="asking-imgs-box m-auto d-flex">
                            <!-- img 1 -->
                            <a href="#" class="d-inline-block">
                                <img src="frontAssest/images/movies-poster/asking-movie-1.jpg" class="img-fluid"
                                    alt="" />
                            </a>
                            <!-- img 2 -->
                            <a href="#" class="d-inline-block">
                                <img src="frontAssest/images/movies-poster/asking-movie-2.jpg" class="img-fluid"
                                    alt="" />
                            </a>
                            <!-- img 3 -->
                            <a href="#" class="d-inline-block">
                                <img src="frontAssest/images/movies-poster/asking-movie-3.jpg" class="img-fluid"
                                    alt="" />
                            </a>
                            <!-- img 4 -->
                            <a href="#" class="d-inline-block">
                                <img src="frontAssest/images/movies-poster/asking-movie-4.jpg" class="img-fluid"
                                    alt="" />
                            </a>
                            <!-- img 5 -->
                            <a href="#" class="d-inline-block">
                                <img src="frontAssest/images/movies-poster/asking-movie-5.jpg" class="img-fluid"
                                    alt="" />
                            </a>
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="d-inline-block mt-3">
                                مشاهده سایر فیلم های دوبله فارسی
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
