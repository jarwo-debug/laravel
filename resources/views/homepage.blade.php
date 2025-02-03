    <!DOCTYPE html>
    <html lang="en" class="h-full bg-gray-100">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="canonical" href="" />
        <link rel="stylesheet" href="js/swiper.min.css" />
        <link rel="stylesheet" href="js/styles.min.css?r=1604914972" />

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/custom.min.js"></script>

    </head>

    <!--BANNER POPUP-->



    <!--BANNER POPUP-->


    <body>


        <!-- header -->


        <meta http-equiv="Cache-Control" content="max-age=3600" />


        <header class="header ">


            <div class="header__wrapper">
                <div class="header__menubar">
                    <img id="open-nav" width="25px" src="img/icon/menu.png" />
                    <span>MENU</span>
                </div>

                <h1 class="header__logo">
                    <a href="" class="header__logo--ttv" style=""></a>
                </h1>

                <div class="header__nav">
                    <ul class="header__nav__item">
                        <li class="header__nav__item--active">
                            <a href="">home</a>
                        </li>
                        <li>
                            <a href="live" class="anim-text">live</a>
                        </li>
                        <li><a href="/posts">Blog</a></li>

                        <li class="header__nav__subnav ">
                            <a href="program">program</a>
                            <div class="subnav">

                            </div>
                        </li>
                        <li><a href="/contact">contact us</a></li>


                        <li class="header__nav__item--search">
                            <div class="btn-se">
                                <img class="sm-btn" width="25px" src="img/glass.png" />
                            </div>
                        </li>


                        <form name="myform" class="inputan-search" action="searching" method="post"
                            style="display: none;">
                            <input type="text" name="cari" autofocus="autofocus" class="form-control pos-search"
                                placeholder="Press Enter for Search...">
                        </form>

                    </ul>
                </div>

                <div class="header__search">
                    <img class="sm-btn" width="25px" src="img/icon/glass.png" />
                    <div>

                    </div>
                </div>
                <form class="inputan-search-mobile" action="searching" method="post">
                    <input type="text" name="cari" autofocus="autofocus"
                        class="form-control pos-search animated bounceInLeft faster"
                        placeholder="Press Enter for Search ...">
                    <span class="arrow-down animated zoomIn faster"></span>
                </form>

            </div>
            <!--MENU NAVBAR-->
            <div id="mob-nav-menu">
                <div class="nav-menu-wrap">
                    <div class="animated bounceInDown">
                        <div class="circle"></div>
                    </div>
                    <div class="mnav-list">
                        <img id="close-nav" class="animated fadeInLeftBig faster" src="img/cross.png" />
                        <ul>
                            <li><a href="">home</a></li>
                            <li><a href="live" class="anim-text">live</a></li>
                            <li><a href="program">program</a></li>
                            <li><a href="video">video</a></li>
                            <li><a href="schedule">schedule</a></li>
                            <li><a href="corporate">corporate</a></li>
                            <li><a href="contact">contact us</a></li>
                        </ul>
                    </div>

                    <div class="mlogin animated bounceInUp">
                        <div id="msu" class="blue mob-sign-up"><a href="member/register">sign up</a></div>
                        <div id="msi" class="pink mob-sign-in"><a href="member">sign in</a></div>
                    </div>
                </div>
            </div>
        </header>
        <!--DIVIDER-->
        <!-- header -->

        <!-- MAIN VIDEO -->
        <div class="main-video">
            <div class="video-head">

                <video class="video-poster video-poster-desk" src="img/betv.mp4" autoplay="" loop=""
                    playsinline="" muted=""></video>
                <div class="video-title vt-desktop"><a href="program/86/brownis">

                </div>
                <video class="video-poster video-poster-mobile" src="img/betv.mp4" autoplay="" loop=""
                    playsinline="" muted=""></video>
                <div class="video-title vt-mobile"><a href="">

                    </a>

                    <div class="scroll__down">
                        <a href="#wrap__all">
                            <img src="img/arrowd.png" alt="">
                        </a>
                    </div>
                    <script>
                        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                            anchor.addEventListener('click', function(e) {
                                e.preventDefault();

                                document.querySelector(this.getAttribute('href')).scrollIntoView({
                                    behavior: 'smooth'
                                });
                            });
                        });
                    </script>

                </div>
            </div>
        </div> <!-- video header-->

        <div class="wrapper-all" id="wrap__all">
            <!-- MAIN CONTENT -->
            <section class="main-content">

                <div class="main-content-box">
                    <a href="#"><img width="100%" src="layout/ttvnew/src/images/betv-banner-new.jpg"></a>
                </div>
                <!-- SCHEDULE HOMEPAGE -->
                <div class="main-content-box">
                    <div class="mc-schedule">
                        <img width="100%" src="layout/ttvnew/src/images/bgschedule.png" alt="schedule"
                            title="schedule">
                        <div class="mc-schedule-box">
                            <div class="mc-schedule-title">
                                <h2>schedule</h2>
                                <h4>November 2020</h4>
                            </div>
                            <div id="style-3" class="mc-schedule-list">
                                <!-- SCHEDULE -->
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>08:00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">Ngopi Khas Bengkulu</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>10.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>LEJEL</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>12.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR METROPOLIS RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>12.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BEKASUS RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>13.OO</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR DAERAH RE RUN</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>14.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="program/141/safana">EKSMUS</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>15.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="program/56/insert">KANG DUL CARI TAU</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>15.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KOMEDI SEMAKU</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>16.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">BETANDANG</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>16.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR REJANG </h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>17.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR METROPOLIS LIVE</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>17:30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">SYIAR </a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>18:00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">ADZAN MAGHRIB / LAGU RELIGI</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>18.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4><a href="#!">BEKASUS</a></h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>19.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR DAERAH</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>20.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BENGKULU TALK SHOW</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>21.00</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>BETANDANG</h4>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="mc-schedule-item">
                                    <div class="hours">
                                        <h4>21.30</h4>
                                    </div>
                                    <div class="name-program">
                                        <h4>KABAR REJANG</h4>
                                        <p></p>
                                    </div>
                                    <!-- </div><div class="mc-schedule-item">
                                <div class="hours">
                                    <h4>02:30</h4>
                                </div>
                                <div class="name-program"><h4>CNN INDONESIA CONNECTED</h4><p></p>
                                </div>
                                </div>
                                SCHEDULE -->
                                </div>
                            </div>
                            <div class="mc-schedule-link">
                                <a href="schedule">
                                    <p>FULL SCHEDULE</p>
                                    <img src="img/play-icon-pink.png" alt="schedule" title="schedule">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- BANNER MOBILE -->

                    <!-- ACARA PROGRAM -->
                    <!-- <div class="main-content-box">
                <a href="#!"><img width="100%" src="layout/ttvnew/src/images/slider/bekasus.png" alt="Masak Masak" title="Masak Masak"/></a>
            </div><div class="main-content-box">
                <a href="#!"><img width="100%" src="layout/ttvnew/src/images/slider/metro.png" alt="Favorite Drama" title="Favorite Drama"/></a>
            </div>         -->
            </section>

            <!-- end main content -->


            <!-- BANNER MOBILE  -->




    </body>
    <script src="js/swiper.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper('.swiper1', {
            slidesPerView: 1,
            spaceBetween: 5,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                240: {
                    slidesPerView: 'auto',
                    spaceBetween: 5,
                },

                800: {
                    slidesPerView: 1,
                    spaceBetween: 2,
                },
            }
        });

        var swiper = new Swiper('.swiper2', {
            slidesPerView: 4,
            spaceBetween: 5,
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 'auto',
                    spaceBetween: 5,
                },
                800: {
                    slidesPerView: 4,
                    spaceBetween: 5,
                },
            }
        });

        var swiper = new Swiper('.swiper3', {
            slidesPerView: 4,
            spaceBetween: 5,
            pagination: {
                el: '.swiper-pagination3',
                clickable: true,
            },
            breakpoints: {
                240: {
                    slidesPerView: 'auto',
                    spaceBetween: 5,
                },
                800: {
                    slidesPerView: 4,
                    spaceBetween: 5,
                },
            }
        });
    </script>

    </html>
