<!-- Caroussel -->
<section class="bannerv2-section position-relative fix" id="scrollUp">
    <div class="container">
        <div class="carousel" data-aos="fade-up" >
            <div class="carousel-slide active">
                <div class="content">
                    <h2 data-wow-delay=".3s">Informasi Slide Pertama</h2>
                    <p>Ini adalah informasi untuk slide pertama.</p>
                    <br><br><br><br><br><br><br>
                     <a href="#" class="theme-btn round100 p2-bg" >
                                <span class="white fw-medium" style="hight: 10px;">
                                    Read More
                                </span>
                    </a>
                </div>
                <img src="https://via.placeholder.com/400x300" data-wow-delay=".5s" alt="Gambar Slide Pertama">
            </div>
            <div class="carousel-slide">
                <img src="https://via.placeholder.com/400x300" alt="Gambar Slide Kedua">
                <div class="content">
                    <h2>Informasi Slide Kedua</h2>
                    <p>Ini adalah informasi untuk slide kedua.</p>
                    <br><br><br><br><br><br><br><br><br><br>
                     <a href="#" class="theme-btn round100 p2-bg" style="">
                                <span class="white fw-medium">
                                    Read More
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
                        <p class="mb-3 pra wow fadeInUp" data-wow-delay=".4s">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                            Imperdiet massa turpis sit proin
                            metus volutpat loren ipsum Lorem ipsum dolor sit amet consectetur. Amet lectus mi
                            ultricies dictum
                        </p>
                        <p class="pra wow fadeInUp" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet cons Amet lectus mi ultricies dictum facilisis sem Lorem
                            ipsum dolor sit amet consectetur.
                            Amet lectus mi ultricies
                        </p>
                        <div class="d-flex align-items-center gap-xl-3 gap-2 mt-40 wow fadeInUp" data-wow-delay=".6s">
                            <a href="about.html" class="theme-btn round100 p2-bg">
                                <span class="white fw-medium">
                                    Read More
                                </span>
                            </a>
                            <a href="contact.html" class="theme-btn cart-btn round100">
                                <span class="black fw-semibold">
                                    Contact Us
                                </span>
                            </a>
                        </div>
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
            @foreach ($artikel as $data)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
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
                            <a href="blog-details.html" class="theme-btn-2 fw-medium black">Read More <i
                                    class="fas fa-long-arrow-right p2-clr"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br><br>
        <div class="heros-btn">
            <a href="#" style="align-items: center; width: 100%; height: 50px;" class="theme-btn round100 p2-bg">
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

<!-- News Section Start -->
<section class="extra-sectionv position-relative fix section-padding">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp p2-clr">
                        Extra Curricular
                    </span>
                    <h3 class="m-title wow fadeInUp black" data-wow-delay=".3s">
                        Building a strong foundation <br> through education
                    </h3>
                </div>
            </div>
        </div>
        <div class="row g-lg-4 g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="news-card-items extra-class-item">
                    <div class="news-image mb-xxl-4 mb-4">
                        <img src="{{ asset('assets2/img/ablog/class1.png') }}" alt="img">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class1.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class1.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class1.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class1.png') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4 class="mb-3">
                            <a href="service-details.html" class="black">
                                Tutoring Services
                            </a>
                        </h4>
                        <p class="pra mb-3">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                            Imperdiet massa turpis sit proin loren
                            ipsum
                        </p>
                        <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                            <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                    class="fas fa-long-arrow-right p3-clr"></i></a>
                            <img src="{{ asset('assets2/img/ablog/class-icon1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="news-card-items extra-class-item">
                    <div class="news-image mb-xxl-4 mb-4">
                        <img src="{{ asset('assets2/img/ablog/class2.png') }}" alt="img">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class2.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class2.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class2.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class2.png') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4 class="mb-3">
                            <a href="service-details.html" class="black">
                                Language Lessons
                            </a>
                        </h4>
                        <p class="pra mb-3">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                            Imperdiet massa turpis sit proin
                            loren
                            ipsum
                        </p>
                        <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                            <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                    class="fas fa-long-arrow-right p3-clr"></i></a>
                            <img src="{{ asset('assets2/img/ablog/class-icon2.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="news-card-items extra-class-item">
                    <div class="news-image mb-xxl-4 mb-4">
                        <img src="{{ asset('assets2/img/ablog/class3.png') }}" alt="img">
                        <div class="news-layer-wrapper">
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class3.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class3.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class3.png') }}');">
                            </div>
                            <div class="news-layer-image"
                                style="background-image: url('{{ asset('assets2/img/ablog/class3.png') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4 class="mb-3">
                            <a href="service-details.html" class="black">
                                Study Skills Coaching
                            </a>
                        </h4>
                        <p class="pra mb-3">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisi
                            Imperdiet massa turpis sit proin
                            loren
                            ipsum
                        </p>
                        <div class="d-flex align-items-center justify-content-between gap-xxl-2">
                            <a href="service-details.html" class="theme-btn-2 fw-medium black">learn more <i
                                    class="fas fa-long-arrow-right p3-clr"></i></a>
                            <img src="{{ asset('assets2/img/ablog/class-icon3.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Element -->
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

<!-- Stay Success Section Start -->
<section class="stay-section pt-50 pb-50 cmn-bg overflow-hidden position-relative">
    <div class="container">
        <div class="row justify-content-between align-items-center g-4">
            <div class="col-lg-5 col-md-6 col-sm-7">
                <div class="stay-content">
                    <div class="section-title">
                        <span class="sub-title wow fadeInUp black">
                            Stay With Us
                        </span>
                        <h3 class="m-title wow fadeInUp black mb-sm-3 mb-2" data-wow-delay=".3s">
                            The path to success starts with education
                        </h3>
                        <p class="mb-24 pra wow fadeInUp" data-wow-delay=".4s">
                            Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem.
                            Imperdiet massa turpis sit proin
                            metus volutpat.
                        </p>
                        <a href="contact.html" class="theme-btn round100 p2-bg py-3">
                            <span class="white fw-medium">
                                Read More
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 me-xl-5 col-sm-5">
                <div class="stay-thumb w-100">
                    <img src="{{ asset('assets2/img/aservices/stay-thumb.png') }}" alt="img" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- Element-->
    <img src="{{ asset('assets2/img/aservices/stay-shape.png') }}" alt="img" class="stay-element">
</section>
