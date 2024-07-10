<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mugli">
    <meta name="description" content="Ascent - Kids Kindergarden School HTML Template">
    <!-- ======== Page title ============ -->
    <title>Ascent - Chindcare & Kids School HTML Template</title>
    <link rel="icon" href="{{ asset('assets2/img/logo/logo-web.svg') }}">
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets2/img/faveicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/animate.css') }}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/icomoon.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets2/css/main.css') }}">
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            background-color: #FFF0E5;
        }
    </style>

</head>

<body>
    <!-- Preloader Start -->
    {{-- <div id="preloader" class="preloader">
        <span></span>
        <span></span>
        <span class="man-pre">
            <img src="{{ asset('assets2/img/aservices/kids.png') }}" alt="img">
        </span>
    </div> --}}

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('assets2/img/logo/logo.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">6391 Elgin St. Celina, 10299</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 06am -02pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">(629) 555-0129</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn p2-bg text-center">
                                <span>
                                    Get A Quote
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <div id="scrollUp">.</div>
    <!-- Header Section Start -->
    <header class="header-1 header-2">
        <div class="container">
            <div class="mega-menu-wrapper white-bg">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('assets2/img/logo/logo5.png') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('welcome') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('blog') }}"> Blog </a>
                                        </li>
                                        <li>
                                        <a href="{{ route('daftar') }}">Join Now</a>
                                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- HEADER END --}}

    {{-- Content Start --}}
    <h3 id="scrollUp" style="font-size: 40px ;margin-top: 12%; color: #000;" class="text-center" data-aos="fade-up">Blogs</h3><br>
    <h5 class="text-center" data-aos="fade-up" style="color: rgb(80, 54, 6);">Welcome to the <b style="color: orange">BimbelKu</b> Blog! Here, you'll find a wealth of information,<br> tips, and resources to help students excel in their English studies.
    </h5>

    <!-- Blogs Start -->
    <section class="blog-sectionv2 position-relative fix section-padding" style="margin-top: -50px;">
        <div class="container">
            <div class="row g-lg-4 g-4">
                @php
                    $limitedArtikel = $artikel->take(6);
                @endphp
                @foreach ($limitedArtikel as $data)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp">
                        <a href="{{ url('tampil', $data->id) }}">
                            <div class="news-card-items" data-aos="zoom-in" style="background-color: #FFF0E5;">
                                <div style="height: 250px;" class="news-image mb-xxl-4 mb-4">
                                    <img src="{{ asset('images/artikel/' . $data->cover) }}" alt="img">
                                </div>
                                <div class="news-content">
                                    <h4 class="mb-3">
                                        <a href="{{url('tampil', $data->id)}}" class="black">
                                            {{ $data->judul }}
                                        </a>
                                    </h4>
                                    <p class="pra mb-4">
                                        {{ $data->deskripsi }}
                                    </p>
                                    <a href="{{ url('tampil', $data->id) }}" class="theme-btn-2 fw-medium black">Read
                                        More <i class="fas fa-long-arrow-right p2-clr"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets2/img/ablog/car-element.png') }}" alt="img" class="car-element">
    </section>
    {{-- Content End --}}

    {{-- Footer Start --}}
    @include('include.frontend.footer')
    {{-- Footer End --}}

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('assets2/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('assets2/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('assets2/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('assets2/js/jquery.counterup.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('assets2/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('assets2/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('assets2/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('assets2/js/wow.min.js') }}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('assets2/js/main.js') }}"></script>
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
