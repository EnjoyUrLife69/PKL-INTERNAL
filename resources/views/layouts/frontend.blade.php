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
    <title>Bimbel Ku</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets2/img/faveicon.png') }}">
    <link rel="icon" href="{{ asset('assets2/img/logo/logo-web.svg') }}">
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
    {{-- Carousell --}}
    <style>
        .carousel {
            position: relative;
            width: 100%;
            max-width: 1120px;
            margin: auto;
            overflow: hidden;
            margin-top: -5%;
        }

        .carousel-slide {
            display: none;
            width: 100%;
            transition: opacity 0.5s ease, transform 0.5s ease;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
        }

        .carousel-slide img {
            width: 50%;
            height: auto;
        }

        .carousel-slide .content {
            display: inline-block;
            width: 50%;
            vertical-align: top;
            padding: 20px;
        }

        .carousel-slide.active {
            display: flex;
            opacity: 1;
            position: relative;
        }

        .carousel-slide.next,
        .carousel-slide.prev {
            display: flex;
        }

        .carousel-slide.next {
            transform: translateX(100%);
        }

        .carousel-slide.prev {
            transform: translateX(-100%);
        }

        .carousel-container .button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .carousel-container .arrow {
            position: absolute;
            top: 50%;
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            transform: translateY(-50%);
            border-radius: 50%;
            z-index: 1;
        }

        .carousel-container .arrow.left {
            left: 50px;
        }

        .carousel-container .arrow.right {
            right: 50px;
        }
    </style>
    {{-- slider --}}
    <style>
        .slide-container {
            margin-left: auto;
            margin-right: auto;
            max-width: 1120px;
            width: 100%;
            padding: 40px 0;
        }

        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }

        .card {
            border-radius: 25px;
            background-color: #efefef;
            width: 25%;
        }

        .image-content,
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 14px;
        }

        .image-content {
            position: relative;
            row-gap: 5px;
            padding: 25px 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 25px 25px 0 25px;
            background-color: orange;
        }

        .overlay::before,
        .overlay::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            background-color: orange;
        }

        .overlay::after {
            border-radius: 0 25px 0 0;
            background-color: #EFEFEF;
        }

        .card-image {
            position: relative;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            backgorund: #fff;
            padding: 3px;
        }

        .card-image .card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #4070f4;
        }

        .name {
            font-size: 25px;
            font-weight: 500;
            color: #333;
        }

        .description {
            font-size: 14px;
            color: #707070;
            text-align: center;
        }

        .swiper-navBtn {
            color: rgb(197, 152, 67);
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: rgb(255, 173, 21);
        }

        .swiper-navBtn:before,
        .swiper-navBtn:after {
            font-size: 40px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: rgb(197, 152, 67);
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: rgb(255, 173, 21);
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

    <!-- Header Section Start -->
    @include('include.frontend.header')
    <!-- Header Section End -->

    {{-- Content Start --}}
    @include('include.frontend.content')
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
    {{-- Carousel JS --}}
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const slideInterval = 10000;

        function showSlide(index) {
            slides[currentSlide].classList.remove('active', 'next', 'prev');
            const nextSlide = (index + slides.length) % slides.length;

            slides.forEach((slide, i) => {
                slide.classList.remove('next', 'prev');
                if (i === nextSlide) {
                    slide.classList.add(index > currentSlide ? 'next' : 'prev');
                }
            });

            setTimeout(() => {
                slides[currentSlide].classList.remove('active');
                slides[nextSlide].classList.remove('next', 'prev');
                slides[nextSlide].classList.add('active');
                currentSlide = nextSlide;
            }, 20); // Perhatikan bahwa durasi harus sesuai dengan durasi animasi CSS
        }

        function changeSlide(direction) {
            showSlide(currentSlide + direction);
        }

        function autoSlide() {
            changeSlide(1);
        }

        setInterval(autoSlide, slideInterval);
    </script>
    {{-- Slider --}}
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            currentSlide: true,
            fade: true,
            grabCursor: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".carousel", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            currentSlide: true,
            fade: true,
            grabCursor: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>




</body>

</html>
