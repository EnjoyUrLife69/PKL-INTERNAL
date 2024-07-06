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

        .blur-image img {
            display: block;
            max-width: 100%;
            height: auto;
            box-shadow: 0 0 15px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    @php
        use Carbon\Carbon;
        Carbon::setLocale('id');

        $formattedDate = Carbon::parse($artikel->tanggal)->translatedFormat('d F Y');
    @endphp

    {{-- Header --}}
    @include('include.frontend.header')
    {{-- Header End --}}

    <section>
        <div class="container"
            style="background-color: orange; margin-top: 130px; height: 10vh; width: 84%; border-radius: 6px;">
            <div style="padding: 16px; margin-top: 20px;">
                <h3 style="color: black">Stay Informed on Our News or Events !</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style=" height: 230vh; margin-top: 40px; width: 85%;">
            <div class="row">
                <div class="col-md-6 col-xl-8 ">
                    <div class="card" style="width: 101%; margin-left: -6px;">
                        <div class="card-body">
                            <img src="{{ asset('images/artikel/' . $artikel->cover) }}" class="blur-image"
                                style="width: 700px; height: 400px; box-shadow: 0 0 10px 5px rgba(0,0,0,0.3);">
                            <div class="row" style="margin-left: 0.3px; width: 108.3%;">
                                <div class="col-md-6 ">
                                    <div style="margin-top: 30px; font-size: 14px; margin-left: -8px;">Writed By :
                                        <b>Admin</b><br>
                                        Category :
                                        <b>{{ $artikel->kategori->nama_kategori }}</b>
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <div style="margin-top: 30px; font-size: 15px; text-align: end;">
                                        <b>{{ $formattedDate }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <div
                                        style="margin-top: 30px; font-size: 30px; margin-left: -6px; margin: 0;
                                         max-width: fit-content; margin-inline: auto;">
                                        <h2 style="font-size: 40px; color: #2c2929">{{ $artikel->judul }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <div
                                        style="margin-top: 30px; font-size: 18px; margin-left: 2px; justify-content: center">
                                        <p>{!! nl2br(e($artikel->isi)) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card" style="box-shadow: 0 0 5px 5px rgba(213, 213, 213, 0.3);">
                        <div class="card-body" style="margin-top: 5px; margin-left: 55px;">
                            <img src="{{ asset('assets2/img/logo/logo5.png') }}" alt="logo-img">
                        </div>
                        <div class="text" style="margin-left: 30px;">
                            <p class="pre-pragraph" style="text-align: left">
                                <b style="color: orange">BimbelKu</b> berkomitmen membantu siswa
                                meraih prestasi terbaik dengan metode pengajaran inovatif
                                dan tim pengajar berpengalaman.
                            </p>
                        </div><br>
                        <a href="{{ route('about') }}" class="theme-btn round100 p2-bg"
                            style="height: 40px; width: 40%; margin-left: 105px; display: flex; align-items: center; justify-content: center;">
                            <span class="white fw-medium">
                                Read More
                            </span>
                        </a>
                        <br>
                    </div>
                    <div class="card" style="margin-top: 10px; box-shadow: 0 0 5px 5px rgba(213, 213, 213, 0.3);">
                        <div class="card-body">
                            <b>Latest News</b>
                            <hr style="border: none; border-top: 3px solid orange;">
                            @php
                                $limitedArtikel = $artikelLainnya;
                            @endphp
                            @foreach ($limitedArtikel as $data)
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/artikel/' . $data->cover) }}"
                                            style="width: 55px; height: 55px; border-radius: 50%; border: 1px solid black;"
                                            alt="img">
                                    </div>
                                    <div class="col-md-9" style="margin-left: 13px;">
                                        <a href="{{ url('tampil', $data->id) }}" class="black">
                                            <b>{{ $data->judul }}</b>
                                        </a><br>
                                        <b style="font-size: 12px; color: rgb(174, 170, 170)">{{ $formattedDate }}</b>

                                    </div>
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('include.frontend.footer')


</body>


</html>
