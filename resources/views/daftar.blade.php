<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    {{-- poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
            margin: 0;

        }

        nav {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 97px;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        nav ul img {
            display: flex;
            list-style: none;
            justify-content: flex-start;
            margin-right: 46%;
            margin-top: 1.2%;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: flex-end;
            margin-right: 12%;
        }

        nav li {
            margin-top: 3%;
            margin-left: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 17px;
            font-weight: bold;
        }

        .orange {
            width: 100%;
            height: 89.5px;
            margin-top: 0.8%;
            background-color: #F7941E;
            position: fixed;
            top: 0;
            z-index: -1;
        }

        /* button */
        /* CSS */
        .button-37 {
            background-color: orange;
            border: 1px solid orange;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-37:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 5px 11px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
            .button-37 {
                padding: 10px 30px;
            }
        }
    </style>


</head>

<body>
    {{-- header start --}}
    <nav>
        <ul>
            <img src="{{ asset('assets2/img/logo/logo5.png') }}" alt="">
            <li><a href="{{ route('welcome') }}"><b>Home</b></a></li>
            <li><a href="{{ route('about') }}"><b>About Us</b></a></li>
            <li><a href="{{ route('blog') }}"><b>Blog</b></a></li>
            <li><a href="{{ route('daftar') }}"><b>Daftar</b></a></li>
        </ul>
    </nav>
    <div class="orange"></div>
    {{-- header end --}}

    <section style="margin-top: 10%;">
        <div class="container" style="width: 90%; height: 100px; margin-right: auto; margin-left: auto;">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <h3 style="color: rgb(0, 0, 0); font-size: 35px; margin-top: 20%;">
                        Bimbingan Belajar
                    </h3><br>
                    <p>
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quibusdam ex nesciunt
                            laboriosam praesentium eius itaque error. Porro, error voluptates!</b>
                        <br><br>
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quibusdam ex nesciunt
                            laboriosam praesentium eius itaque error. Porro, error voluptates!</b>
                    </p><br>
                    <a href="{{ route('daftar-form') }}">
                        <button class="button-37" style="color: black; font-family:">
                            Daftar Sekarang
                        </button>
                    </a>
                </div>
                <div class="col-md-6 col-xl-7">
                    <img class="poppins-medium" style="width: 100%; margin-left: 6%; margin-top: -6%;"
                        src="{{ asset('assets2/img/logo/vektor1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>























</body>

</html>
