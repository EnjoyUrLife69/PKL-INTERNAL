<!DOCTYPE html>
<html lang="en">

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

        #col0 {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

        #cardi {
            width: 90%;
            height: 250px;
            box-shadow: 0 0 10px 10px rgba(213, 213, 213, 0.3);
            background-color: rgba(255, 166, 0, 0.882);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #cardi img{
            margin-top: 15px;
            margin-bottom: 25px;
        }
        #cardi:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
    </style>

    @yield('styles')

</head>

<body>
    <div id="scrollUp">.</div>
    {{-- HEADER START --}}
    @include('include.frontend.header')
    {{-- HEADER END --}}

    <section>
        <div class="container" data-aos="fade-up" style="margin-top: 8%; width: 83.5%;" >
            <img src="{{ asset('assets2/img/aicon/hitam3.png') }}" style="width: 101%;" alt="">
            {{-- <img style="margin-left: -10px; width: 101%; height: 500px;" src="{{ asset('assets2/img/aicon/shcool.jpg') }}" alt=""> --}}
        </div><br>
        <div>
            <div class="container">
                <h2 data-aos="fade-right">About Us</h2>
                <div style="background-color: #fe832b; height: 5px; width: 20%; margin-top: 1.5px; border-radius: 5px;">
                </div><br>
                <div data-aos="fade-right" data-aos-duration="1000" class="text">
                    <p style="font-size: 20px;">
                        Welcome to <b style="color: orange;">BimbelKu</b>, where quality education is our top priority.
                        We are a dedicated
                        English tutoring center committed to providing the best education for students from elementary
                        to high school levels. With a structured curriculum focused on developing academic skills and
                        critical thinking, we are ready to help students achieve their highest potential in mastering
                        the English language.
                        <br><br>
                    </p>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Our Vision</h2>
                        <div class="text">
                            <div
                                style="background-color: #fe832b; height: 5px; width: 50%; margin-top: 1.5px; border-radius: 5px;">
                            </div><br>
                            <p style="font-size: 20px;" data-aos="fade-up-left" data-aos-duration="1500">
                                To be the leading English tutoring center that nurtures intelligent, high-achieving
                                generations ready to face global challenges.<br><br>
                            </p>
                            <center><img src="{{ asset('assets2/img/aicon/wow.png') }}" style="width: 500px; margin-right: 40px;"
                                    alt=""></center>
                        </div>
                    </div>
                    <div class="col-md-1" data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 7.5%;">
                        <br>
                        <div style="border-left: 4px solid #fe832b; height: 310px; border-radius: 1px;"></div>
                    </div>
                    <div class="col-md-5">
                        <h2>Our Mission</h2>
                        <div
                            style="background-color: #fe832b; height: 5px; width: 50%; margin-top: 1.5px; border-radius: 5px;">
                        </div><br>
                        <ul class="d-grid gap-xxl-2 gap-2" style="font-size: 20px;">
                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                <i class="fa-solid fa-check p3-clr"></i>
                                To provide enjoyable and effective English learning with innovative methods.
                            </li><br>
                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                <i class="fa-solid fa-check p3-clr"></i>
                                To give personalized attention to each student through small class sizes.
                            </li><br>
                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                <i class="fa-solid fa-check p3-clr"></i>
                                To enhance students' English abilities with a comprehensive and relevant curriculum.
                            </li><br>
                            <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                <i class="fa-solid fa-check p3-clr"></i>
                                To develop critical thinking and analytical skills to help students succeed in various
                                fields.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="extra-sectionv position-relative fix section-padding">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp p5-clr" style="font-size: 50px;">
                Why Choose Us?
            </span><br>
            <div class="container mt-5" style="width: 90%;">
                <div class="row">
                    <div class="col-md-6" id="col0">
                        <div class="card" id="cardi">
                            <center><img src="{{ asset('assets2/img/aicon/students.png') }}" style=" width: 100px"
                                    alt=""></center>
                            <div class="text" style="width: 90%; margin-left: auto; margin-right: auto;">
                                <p style="font-size: 20px; color: black;">
                                    <b>Personalized Approach</b>: We understand that every student is unique, so we offer an
                                    approach tailored to each student's needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: flex; justify-content: center; flex-direction: row;">
                        <div class="card" id="cardi">
                            <center><img src="{{ asset('assets2/img/aicon/teacher.png') }}" style=" width: 100px"
                                    alt=""></center>
                            <div class="text" style="width: 90%; margin-left: auto; margin-right: auto;">
                                <p style="font-size: 20px; color: black;">
                                    <b>Experienced Teachers</b>: Our team of educators consists of experienced and dedicated
                                    professionals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6" id="col0"
                        style="display: flex; justify-content: center; flex-direction: row;">
                        <div class="card" id="cardi">
                            <center><img src="{{ asset('assets2/img/aicon/education.png') }}" style=" width: 100px" m
                                    alt=""></center>
                            <div class="text" style="width: 90%; margin-left: auto; margin-right: auto;">
                                <p style="font-size: 20px; color: black;">
                                    <b>Structured Curriculum</b>: Our curriculum is designed to meet the learning needs of
                                    students thoroughly and deeply.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="col0"
                        style="display: flex; justify-content: center; flex-direction: row;">
                        <div class="card" id="cardi">
                            <center><img src="{{ asset('assets2/img/aicon/blackboard.png') }}" style=" width: 100px"
                                    alt=""></center>
                            <div class="text" style="width: 90%; margin-left: auto; margin-right: auto;">
                                <p style="font-size: 20px; color: black;">
                                    <b>Small Classes</b>: The number of students in each class is limited to ensure each
                                    student receives maximum attention.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    {{-- Footer --}}
    @include('include.frontend.footer')
    {{-- End --}}

</body>
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


</html>
