<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Form</title>
    {{-- poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
            margin: 0;
        }

        /* header */
        nav {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 97px;
            position: fixed;
            top: 0;
            z-index: 1001;
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
        }

        /* header end*/

        .info {
            background-color: #FDFBF8;
            margin-top: 9%;
            margin-left: auto;
            margin-right: auto;
            width: 87%;
            height: 200px;
            border-radius: 5px;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .info h4 {
            font-size: 25px;
            padding: 3%;
            color: Black;
        }

        .info p {
            font-size: 20px;
            font-weight: 600;
            padding: 3%;
            color: rgb(86, 85, 85);
            margin-top: -5%;
        }

        .button-37 {
            background-color: rgb(255, 213, 0);
            border: 1px solid rgb(255, 213, 0);
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
            margin-left: 30px;
            margin-top: -5%;

        }

        .button-37:hover {
            box-shadow: rgb(255, 213, 0);
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
            .button-37 {
                padding: 10px 30px;
            }
        }

        .button-38 {
            background-color: rgb(255, 83, 83);
            border: 1px solid rgb(255, 83, 83);
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
            margin-left: 15px;
            margin-top: 10px;

        }

        .button-38:hover {
            box-shadow: rgba(255, 0, 0, 0.15) 0 5px 11px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
            .button-38 {
                padding: 10px 30px;
            }
        }

        /* daftar */
        .form-daftar {
            background-color: rgb(253, 251, 248);
            margin-top: 2%;
            margin-left: auto;
            margin-right: auto;
            width: 87%;
            height: 580px;
            border-radius: 5px;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form-daftar h4 {
            font-size: 25px;
            padding: 3%;
            color: Black;
            text-align: center;
        }

        /* form */
        .form-daftar .container {
            width: 85%;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 150px;
            /* Adjust the width as needed */
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 1;
            padding: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

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
    <div class="orange" id="scrollUp"></div>
    {{-- header end --}}

    <section>
        <div class="info">
            <h4>INFORMATION</h4>
            <p>If you have already registered, please check your email for further information</p>
            <a href="{{ route('daftar') }}">
                <button class="button-37" style="color: black; font-family:">
                    Kembali Ke Home
                </button>
            </a>
        </div>
    </section>

    <section>
        <div class="form-daftar">
            <h4>REGISTRATION FORM</h4>
            <div class="container">
                <form action="{{ route('pendaftar.store') }}" method="post"
                    role="form"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Fullname</b><b
                                style="color: red;">*</b></label>
                        <input type="text" id="judulArtikel" name="nama" placeholder="Fullname" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Gender</b><b
                                style="color: red;">*</b></label>
                        <select id="jenisKelamin" name="jenis_kelamin" required
                            style="color: black; padding-left: 10px;">
                            <option value="">Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Grades</b><b
                                style="color: red;">*</b></label>
                        <select id="jenisKelamin" name="kelas" required style="color: black; padding-left: 10px;">
                            <option style="color: gray;" value="">What Grade are you in</option>
                            <option value="5 (SD)">5 (SD)</option>
                            <option value="6 (SD)">6 (SD)</option>
                            <option value="7 (SMP)">7 (SMP)</option>
                            <option value="8 (SMP)">8 (SMP)</option>
                            <option value="9 (SMP)">9 (SMP)</option>
                            <option value="10 (SMA)">10 (SMA)</option>
                            <option value="11 (SMA)">11 (SMA)</option>
                            <option value="12 (SMA)">12 (SMA)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">School</b><b
                                style="color: red;">*</b></label>
                        <input type="text" id="judulArtikel" name="asal_sekolah"
                            placeholder="Which School are you in" required style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Student's Phone Number</b><b
                                style="color: red;">*</b></label>
                        <input type="text" id="judulArtikel" name="nomor_telp_siswa" placeholder="+ 62"
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Parent's Phone Number</b></label>
                        <input type="text" id="judulArtikel" name="nomor_telp_ortu" placeholder="+ 62" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Email</b><b
                                style="color: red;">*</b></label>
                        <input type="email" id="judulArtikel" name="email" placeholder="Email" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group row" style="margin-left: 66%;">
                        <div class="col-sm-6">
                            <button type="reset" class="button-38 btn btn-secondary"
                                style="color: black; margin-left: 40%;">
                                RESET
                            </button>
                        </div>
                        <div class="col-sm-6" style="margin-top: 15px;">
                            <button type="submit" class="button-37 btn btn-primary" style="color: black;">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <br><br><br><br><br>
    {{-- <script>
        Swal.fire({
            title: 'Registration Successful',
            html: '<b>Thank you for registering with our tutoring center!</b><br>We will contact you soon via email or phone for the payment details.</a>',
            icon: 'success',
            showConfirmButton: true,
            confirmButtonText: 'OK',
            allowOutsideClick: false
        });
    </script> --}}
</body>

</html>
