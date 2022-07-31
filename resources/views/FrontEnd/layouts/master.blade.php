<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="frontAssest/css/bootstrap-reboot.rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="frontAssest/css/bootstrap.rtl.min.css" />

    <link rel="stylesheet" type="text/css" href="frontAssest/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="frontAssest/css/basic.css" />
    <link rel="stylesheet" type="text/css" href="frontAssest/css/style.css" />
    <title>Sky Film</title>
</head>

<body>
    <!-- start content -->
    <main>

        <div class="container-fluid">
            <!-- header -->
            <header class="bg-white mb-4">

                <nav class="navbar">
                    <div class="brand-img-box py-3 px-5 col-sm-3 col-12">
                        <img src="frontAssest/images/logo/nlogo.png" class="img-fluid" alt="" />
                    </div>
                    <ul class="top-menu d-flex py-3 px-5 col-sm-9 col-12 justify-content-end">
                        <li><a href="#">خرید اشتراک</a></li>
                        <li><a href="#">حساب کاربری</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">درخواست فیلم</a></li>
                    </ul>
                </nav>

                <nav class="navbar navbar-expand-lg justigy-content-between main-nav mx-3 rounded py-3 px-2">
                    <div class="navbar justify-content-between w-100 navbar-sm">
                        <ul class="navbar-nav mr-auto nav-menu nav-menu-sm">
                            <li class="nav-item">
                                <a class="nav-link nav-link-sm" href="/">صفحه ی اصلی</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sm" href="#">هنرمندان</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sm" href="#">فیلم ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sm" href="#">فیلم های دوبله فارسی</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sm" href="#">سریال ها</a>
                            </li>
                        </ul>
                        <form class="form w-sm-25" method="post" action="/search">
                            @csrf
                            <div
                                class="form-control d-flex justify-content-center bg-transparent frm-sm align-items-center">
                                <input name="searchWord" type="text" class="search-input bg-transparent"
                                    placeholder="جستجو ..." />
                                <button class="btn" href="#"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </nav>

                <div class="custom-carousel">
                    <div class="row flex-nowrap custom-carousel-content p-5 responsive">

                        <div class="custom-carousel-item d-flex justify-content-center">

                            <div class="col-sm-2 m-2 slider-img-box">
                                <a href="#">
                                    <img src="frontAssest/images/movies-poster/Jadoogar.jpg" class="img-fluid"
                                        alt="" />
                                </a>

                            </div>
                            <div class="col-sm-2 m-2 slider-img-box">
                                <a href="#">
                                    <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                        alt="" />
                                </a>
                            </div>
                            <div class="col-sm-2  m-2 slider-img-box">
                                <a href="#">
                                    <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                        class="img-fluid" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-2  m-2 slider-img-box">
                                <a href="#">
                                    <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                        alt="" />
                                </a>
                            </div>
                            <div class="col-sm-2 m-2 slider-img-box">
                                <a href="">
                                    <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                        class="img-fluid" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="custom-carousel-item d-flex justify-content-center">

                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Jadoogar.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                    class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="custom-carousel-item d-flex justify-content-center">

                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Jadoogar.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/Morbius.jpg" class="img-fluid"
                                    alt="" />
                            </div>
                            <div class="col-2 m-2 slider-img-box">
                                <img src="frontAssest/images/movies-poster/THE-BATMAN-2022-2 (1).jpg"
                                    class="img-fluid" alt="" />
                            </div>
                        </div>

                    </div>
                    <!-- <button id="prev">
              <i class="fa fa-arrow-left"></i>
            </button>
            <button id="next">
              <i class="fa fa-arrow-right"></i>
            </button> -->


            </header>

            @yield('context')

            <footer class="mt-5">
                <div class="row">
                    <div class="footer-content w-80 m-auto d-flex justify-content-between">
                        <!-- right -->
                        <div class="d-flex w-sm-50 justify-content-around">
                            <ul class="footer-menu">
                                <li><a href="#">خانه</a></li>
                                <li><a href="#">پنل کاربری</a></li>
                                <li><a href="#">ثبت نام</a></li>
                                <li><a href="#">ورود</a></li>
                            </ul>
                            <ul class="footer-menu">
                                <li><a href="#">اخبار</a></li>
                                <li><a href="#">درخواست فیلم</a></li>
                                <li><a href="#">تماس با ما</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                        <!-- left -->
                        <div>
                            <h2 class="text-white">اسکای فیلم</h2>
                            <p class="mb-3 text-white text-footer">مرجع دانلود فیلم و سریال در ایران</p>
                            <div>
                                <a href="#" class="icon-btn"><img src="frontAssest/images/icons/Instagram.png"
                                        class="img-fluid" alt=""></a>
                                <a href="#" class="icon-btn"><img src="frontAssest/images/icons/telegram.png"
                                        class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>






    <script src="frontAssest/js/jquery-3.6.0.min.js"></script>
    <script src="frontAssest/js/bootstrap.min.js"></script>
    <script src="frontAssest/js/index.js"></script>
    <script>
        $(document).ready(function() {
            $c = 0;
            $('#prev').click(function() {
                if ($c == 0) {
                    $c = 1250;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });

                } else if ($c == 1250) {
                    $c = 2500;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });

                } else if ($c == 2500) {
                    $c = 0;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });
                }

            });

            $('#next').click(function() {
                if ($c == 0) {
                    $c = 2500;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });

                } else if ($c == 2500) {
                    $c = 1250;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });

                } else if ($c == 1250) {
                    $c = 0;
                    $('.custom-carousel-item').css({
                        'transform': 'translateX(' + $c + 'px)'
                    });
                }

            });

            $('#select_all').click(function() {
                $('#genres option').prop('selected', true);
            });

        });
    </script>
</body>

</html>
