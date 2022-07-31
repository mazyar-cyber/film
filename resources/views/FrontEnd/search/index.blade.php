@extends('FrontEnd.layouts.master')
@section('context')
    <!-- movies -->
    @if (\Illuminate\Support\Facades\Session::has('search-done'))
        <div class="alert alert-danger text-center">
            {{ session('search-done') }}
        </div>
    @else
        <div class="col-sm-12 alert alert-success text-center">جستجو با موفقیت انجام شد</div>
    @endif
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
                    @foreach ($serials as $serial)
                        <div
                            class="moives-item mx-3 mb-2 border-radius-5rem d-flex flex-sm-row flex-sm-wrap justify-content-sm-start  flex-column justify-content-center movies-item p-0 bg-white">
                            <h2 class="movie-name w-100 col-12" style="background-color: #fec574">
                                سریال {{ $serial->title }}
                            </h2>
                            <div class="px-5 px-sm-0 py-3 border-radius-5rem movies-img-box col-sm-4  col-12">
                                <img src="{{ $serial->photo }}" class="img-fluid border-radius-5rem" alt="serial_pic" />
                            </div>
                            <ul class="px-5 movie-info-menu col-7">
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کیفیت</span>
                                    <span>WEB-DL 1080</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>ژانر</span>
                                    <span>{{ $serial->genre }}</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کشور سازنده</span>
                                    <span>{{ $serial->country }}</span>
                                </li>
                                <li class="d-flex justify-content-between py-1 border-bottom">
                                    <span>کارگردان</span>
                                    <span>{{ $serial->director }}</span>
                                </li>
                                <li class="d-flex start justify-content-between py-1 border-bottom">
                                    <span>ستارگان</span>
                                    <span>{{ $serial->stars }}</span>
                                </li>
                            </ul>
                            <p class="px-4">
                                {{ $serial->briefStory }}
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
                                        @if ($serial->imDbRating)
                                            {{ $serial->imDbRating }}
                                        @else
                                            n
                                        @endif

                                    </span>
                                </span>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div
                        class="moives-item moives-pagantion mx-1 mb-2 border-radius-5rem w-80 m-auto d-flex justify-content-center movies-item p-0 bg-white">
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">Last</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">...</a>
                        <a href="#" class="d-inline-block border border-radius-5rem mx-1 movies-page-sm">20</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
