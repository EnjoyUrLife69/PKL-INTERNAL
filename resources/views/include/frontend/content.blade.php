<!-- Caroussel -->
<section class="bannerv2-section position-relative fix" id="scrollUp">
    <div class="carousel-container swiper">
        <div class="carousel swiper-wrapper" data-aos="fade-up">
            <div class="carousel-slide active swiper-slide">
                <div class="content">
                    <br><br><br>
                    <h2 data-wow-delay=".3s">Explore Excellence with <b style="color: orange">BimbelKu</b></h2><br>
                    <p style="font-size: 20px; margin-left:10px; line-height: 35px;"><b
                            style="color: rgb(255, 166, 0);">BimbelKu</b> fokus
                        pada
                        peningkatan
                        prestasi
                        akademik di bidang Bahasa Inggris dan Matematika
                        dengan bimbingan dari pengajar berpengalaman dan metode pengajaran inovatif.</p>
                    <br>
                    <a href="{{ route('about') }}" class="theme-btn round100 p2-bg">
                        <span class="white fw-medium" style="hight: 10px;">
                            Read More
                        </span>
                    </a>
                </div>
                <img src="{{ asset('assets2/img/aicon/vector2.png') }}" data-wow-delay=".5s" alt="Gambar Slide Pertama"
                    style="margin-top: 1%; height: 40%;">
            </div>
            <div class="carousel-slide active swiper-slide">
                <img src="{{ asset('assets2/img/aicon/vector3.png') }}" data-wow-delay=".5s" alt="Gambar Slide Pertama"
                    style="margin-top: 1%; height: 40%;">
                <div class="content">
                    <br><br><br>
                    <h2 data-wow-delay=".3s">Join with <br><b style="color: orange; margin-left: 0px;">BimbelKu</b></h2>
                    <br>
                    <p style="font-size: 20px; margin-left:10px; line-height: 35px;"><b
                            style="color: rgb(255, 166, 0);"></b> Capai
                        prestasi terbaik Anda dalam <b>Bahasa Inggris</b> dan <b>Matematika</b> dengan bantuan pengajar
                        berpengalaman
                        dan metode pengajaran inovatif dengan bergabung dengan <b
                            style="color: rgb(255, 166, 0);">BimbelKu</b></p>
                    <br>
                    <a href="{{ route('daftar') }}" class="theme-btn round100 p2-bg">
                        <span class="white fw-medium" style="hight: 10px;">
                            Daftar Sekarang
                        </span>
                    </a>
                </div>
            </div>
            <button class="arrow left" onclick="changeSlide(-1)">&#9664;</button>
            <button class="arrow right" onclick="changeSlide(1)">&#9654;</button>
        </div>
    </div>
    <img src="{{ asset('assets2/img/abanner/banner-shadow.png') }}" alt="img" class="banner-shadow">
</section>

<!-- About Activities Section Start -->
<section class="about-sectionv02 space-top position-relative overflow-hidden" style="margin-top: -6%">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 col-md-9">
                <div class="about-contentv02">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp p2-clr">
                            About Us
                        </span>
                        <h3 class="m-title mb-3 wow fadeInUp black" data-wow-delay=".3s">
                            Invest in education invest <br> in the future
                        </h3>
                        <p class="mb-3 pra wow fadeInUp" data-wow-delay=".4s" style="font-size: 20px;">
                            Di <b style="color: orange;">BimbelKu</b>, kami percaya bahwa pendidikan adalah investasi
                            terbaik untuk masa depan. <br><br> Kami
                            berdedikasi untuk meningkatkan prestasi akademik siswa dalam <b
                                style="color: orange;">Bahasa Inggris</b> dan <b style="color: orange;">Matematika</b>
                            melalui pendekatan yang inovatif dan bimbingan pengajar berpengalaman. Kami berkomitmen
                            untuk membantu setiap siswa mencapai potensi penuh mereka.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-thumb-innerv2">
                    <div class="thumb-left-cont">
                        <div class="thumb-cont wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="{{ asset('assets2/img/about/about-icon.png') }}" alt="img" class="aicon">
                            <div class="contents">
                                <h4>
                                    <span class="countss">1230</span>+
                                </h4>
                                <span class="pra">
                                    Students
                                </span>
                            </div>
                        </div>
                        <div class="thumb wow fadeInUp" data-wow-delay=".4s">
                            <img src="{{ asset('assets2/img/about/aboutv2-1.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="right-thumb d-sm-block d-none wow fadeInDown" data-wow-delay=".5s">
                        <img src="{{ asset('assets2/img/about/aboutv2-2.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blogs Start -->
<section class="blog-sectionv2 position-relative fix section-padding" style="margin-top: -50px;">
    <div class="container">
        <div class="row justify-content-center mb-50">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp p5-clr">
                        Our Blogs
                    </span>
                    <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        Discover Your Passion Pursue <br>Your Dreams
                    </h3>
                </div>
            </div>
        </div>

        <div class="row g-lg-4 g-4">
            @php
                $limitedArtikel = $artikel->take(3);
            @endphp
            @foreach ($limitedArtikel as $data)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ url('tampil', $data->id) }}">
                        <div class="news-card-items">
                            <div style="height: 250px;" class="news-image mb-xxl-4 mb-4">
                                <img src="{{ asset('images/artikel/' . $data->cover) }}" alt="img">
                            </div>
                            <div class="news-content">
                                <h4 class="mb-3">
                                    <a href="blog-details.html" class="black">
                                        {{ $data->judul }}
                                    </a>
                                </h4>
                                <p class="pra mb-4">
                                    {{ $data->deskripsi }}
                                </p>
                                <a href="{{ url('tampil', $data->id) }}" class="theme-btn-2 fw-medium black">Read
                                    More
                                    <i class="fas fa-long-arrow-right p2-clr"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br><br><br>
        <div class="heros-btn">
            <a href="{{ route('blog') }}" style="align-items: center; width: 100%; height: 50px;"
                class="theme-btn round100 p2-bg">
                <b>Load More Article's</b>
            </a>
        </div>
    </div>
    <!-- Element -->
    <img src="{{ asset('assets2/img/ablog/car-element.png') }}" alt="img" class="car-element">
</section>

<!-- Student Counting Section Start -->
<section class="student-counting space-top mb-xxl-5 mb-lg-4" style="margin-top: -100px;">
    <div class="container">
        <div class="row g-xxl-4 g-3">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="student-count-item">
                    <div class="icon">
                        <img src="{{ asset('assets2/img/aicon/team-count1.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h1>
                            <span class="count">1230</span>+
                        </h1>
                        <p>Team member</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="student-count-item">
                    <div class="icon">
                        <img src="{{ asset('assets2/img/aicon/team-count2.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h1>
                            <span class="count">210</span>+
                        </h1>
                        <p>Client review</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="student-count-item">
                    <div class="icon">
                        <img src="{{ asset('assets2/img/aicon/team-count3.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h1>
                            <span class="count">1200</span>+
                        </h1>
                        <p>Winning award</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="student-count-item">
                    <div class="icon">
                        <img src="{{ asset('assets2/img/aicon/team-count4.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h1>
                            <span class="count">230</span>+
                        </h1>
                        <p>Complete project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Alumni -->
<section class="extra-sectionv position-relative fix section-padding">
    <div class="section-title text-center">
        <span class="sub-title wow fadeInUp p5-clr">
            Testimoni Alumni
        </span>
        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
            Discover Your Passion Pursue <br>Your Dreams
        </h3>
    </div>
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @foreach ($testimoni as $data)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="{{ asset('images/testimoni/' . $data->cover) }}" alt="image"
                                    class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="name">{{ $data->nama }}</h3>
                            <p class="profession">{{ $data->jabatan }}</p><br>
                            <p class="description">{{ $data->pesan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Carft Section Start -->
<section class="carft-section section-padding cmn-bg overflow-hidden position-relative">
    <div class="container">
        <div class="row flex-row-reverse align-items-md-center g-4">
            <div class="col-lg-6 col-md-6 col-sm-7">
                <div class="carft-content">
                    <div class="section-title mb-30">
                        <span class="sub-title wow fadeInUp p2-clr">
                            Craft
                        </span>
                        <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                            Education is the key to success Knowledge is power
                        </h3>
                    </div>
                    <div class="singletab">
                        <div class="protfolio-tabs mb-30">
                            <ul class="tablinks">
                                <li class="nav-links active">
                                    <button class="tablink">1-4 year</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink">5-7 year</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink">8-12 year</button>
                                </li>
                                <li class="nav-links">
                                    <button class="tablink">13-15 year</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tabcontents">
                            <div class="tabitem active">
                                <div class="cart-cont-box">
                                    <p class="pra mb-3">
                                        Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                        sem.
                                        Imperdiet massa turpis sit proin metus
                                        volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                        dictum facilisis
                                        sem. Imperdiet massa
                                    </p>
                                    <ul class="d-grid gap-xxl-2 gap-2">
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Nurturing Young Minds
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Unlocking Potential Through Education
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Empowering Children Through Education
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="cart-cont-box">
                                    <p class="pra mb-3">
                                        Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                        sem.
                                        Imperdiet massa turpis sit proin metus
                                        volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                        dictum facilisis
                                        sem. Imperdiet massa
                                    </p>
                                    <ul class="d-grid gap-xxl-2 gap-2">
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Nurturing Young Minds
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Unlocking Potential Through Education
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Empowering Children Through Education
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="cart-cont-box">
                                    <p class="pra mb-3">
                                        Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                        sem.
                                        Imperdiet massa turpis sit proin metus
                                        volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                        dictum facilisis
                                        sem. Imperdiet massa
                                    </p>
                                    <ul class="d-grid gap-xxl-2 gap-2">
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Nurturing Young Minds
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Unlocking Potential Through Education
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Empowering Children Through Education
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tabitem">
                                <div class="cart-cont-box">
                                    <p class="pra mb-3">
                                        Lorem ipsum dolor sit amet consectetur. Amet le ultricies dictum facilisis
                                        sem.
                                        Imperdiet massa turpis sit proin metus
                                        volut.Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies
                                        dictum facilisis
                                        sem. Imperdiet massa
                                    </p>
                                    <ul class="d-grid gap-xxl-2 gap-2">
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Nurturing Young Minds
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Unlocking Potential Through Education
                                        </li>
                                        <li class="d-flex align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fa-solid fa-check p3-clr"></i>
                                            Empowering Children Through Education
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
                <div class="carft-thumb p-sm-0 p-3 w-100 pe-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <img src="{{ asset('assets2/img/ainspair/carft-thumb.png') }}" alt="img" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- Element-->
    <img src="{{ asset('assets2/img/ainspair/carft-man.png') }}" alt="img" class="carft-man">
</section>

<!-- Maps -->
<section class="stay-section pt-50 pb-50 cmn-bg overflow-hidden position-relative">
    <div class="container">
        <h3 style="font-size: 40px;">Maps</h3>
        <div class="row">
            <div class="col-xl-9">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.701929897443!2d-1.2565939471756638!3d51.75677384369348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sid!4v1720458420187!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-xl-3">
                <div class="stay-cont">
                    <h3>Visit Us</h3>
                    <hr style="width: 45%;height: 5px; background-color: rgb(0, 0, 0);">
                    <p class="pra">You can know more about us by visiting this address </p><br><br>
                    <div class="row">
                        <div class="col-xl-3">
                            <img style="width: 35px;" src="{{ asset('assets2/img/aicon/location.png') }}"
                                alt="">
                        </div>
                        <div class="col-xl-9">
                            <p><b>Jl. Lorem ipsum dolor sit amet</b></p>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-xl-3">
                            <img style="width: 35px;" src="{{ asset('assets2/img/aicon/phone.png') }}"
                                alt="">
                        </div>
                        <div class="col-xl-9">
                            <p style="margin-top: 5px;"><b>+67 123 456 789</b></p>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-xl-3">
                            <img style="width: 35px;" src="{{ asset('assets2/img/aicon/email.png') }}"
                                alt="">
                        </div>
                        <div class="col-xl-9">
                            <p style="margin-top: 5px;"><b>loremipsum@gmail.com</b></p>
                        </div>
                    </div>
                </div>
            </div>
</section>
