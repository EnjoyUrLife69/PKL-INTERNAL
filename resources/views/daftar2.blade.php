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
            background-color: rgb(255, 159, 34);
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
            padding: 1%;
            color: Black;
        }

        .info p {
            font-size: 20px;
            font-weight: 600;
            padding: 1%;
            color: rgb(86, 85, 85);
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
            margin-left: 15px;
            margin-top: 10px;

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

    <section>
        <div class="info">
            <h4>INFORMASI</h4>
            <p>Apabila anda sudah melakukan pendaftaran , silahkan untuk mengecek email anda untuk informasi lebih
                lanjut</p>
            <a href="{{ route('daftar') }}">
                <button class="button-37" style="color: black; font-family:">
                    Kembali Ke Home
                </button>
            </a>
        </div>
    </section>

    <section>
        <div class="form-daftar">
            <h4>Formulir Pendaftaran</h4>
            <div class="container">
                <form action="/submit" method="POST">
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Nama Lengkap</b></label>
                        <input type="text" id="judulArtikel" name="judul" placeholder="Nama Lengkap" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Jenis Kelamin</b></label>
                        <select id="jenisKelamin" name="jenis_kelamin" required
                            style="color: black; padding-left: 10px;">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin"><b style="color: black;">Kelas</b></label>
                        <select id="jenisKelamin" name="jenis_kelamin" required
                            style="color: black; padding-left: 10px;">
                            <option style="color: gray;" value="">Pilih Kelas</option>
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
                        <label for="judulArtikel"><b style="color: black;">Asal Sekolah</b></label>
                        <input type="text" id="judulArtikel" name="judul" placeholder="Asal Sekolah" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">No Telp Siswa</b></label>
                        <input type="text" id="judulArtikel" name="judul" placeholder="+ 62" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">No Telp Orang Tua</b></label>
                        <input type="text" id="judulArtikel" name="judul" placeholder="+ 62"
                            required style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="judulArtikel"><b style="color: black;">Email</b></label>
                        <input type="email" id="judulArtikel" name="judul" placeholder="Email" required
                            style="color: black; padding-left: 10px;">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="button-37" style="color: black; margin-left: 84%;">
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <br><br><br><br><br>
</body>

</html>
