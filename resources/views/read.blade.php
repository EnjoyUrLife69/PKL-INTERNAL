<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bimbel Ku</title>
    <link rel="icon" href="{{ asset('assets2/img/logo/logo-web.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        {{-- SIDEBAR --}}
        @include('include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- ARTIKEL --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- FILTER --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-7 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 6%">Our Blogs
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p>Sort by Category</p>
                                    <form method="GET" action="{{ route('read') }}">
                                        <select class="form-control" name="id_kategori" id="putih"
                                            id="exampleSelectGender">
                                            <option value=""
                                                {{ is_null(request()->get('id_kategori')) ? 'selected' : '' }}>
                                                Tampilkan Semua Artikel</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ request()->get('id_kategori') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary mt-3">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($artikel->isEmpty())
                        <p style="font-size: 20px; text-align: center;">Tidak ada Artikel untuk Kategori ini.</p>
                    @else
                        <div class="row">
                            @foreach ($artikel as $data)
                                <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                                    {{-- <a style="text-decoration: none" href="#"> --}}
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $data->judul }}</h4>
                                            <div class="item">
                                                <img src="{{ asset('images/artikel/' . $data->cover) }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex py-4">
                                                <div class="preview-list w-100">
                                                    <div class="preview-item p-0">
                                                        <div class="preview-thumbnail">
                                                            <img src="{{ asset('assets/images/admin.jpg') }}"
                                                                class="rounded-circle" alt="">
                                                        </div>
                                                        <div class="preview-item-content d-flex flex-grow">
                                                            <div class="flex-grow">
                                                                <div
                                                                    class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                    <h6 class="preview-subject">
                                                                        Admin</h6>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <p class="text-muted text-small mt-1">
                                                                        {{ $data->tanggal }}</p>
                                                                </div>
                                                                <p class="text-muted">{{ $data->deskripsi }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button disabled type="button"
                                                class="btn btn-outline-secondary btn-icon-text">
                                                {{ $data->kategori->nama_kategori }}
                                        </div>
                                    </div>
                                    {{-- </a> --}}


                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
