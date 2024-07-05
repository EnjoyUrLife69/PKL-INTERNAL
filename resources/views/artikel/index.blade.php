<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Artikel Tables </title>
    <link rel="icon" href="{{ asset('assets/images/graduation-hat.png') }}">
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

            {{-- TABEL --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- FILTER --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-7 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p style="font-size: 30px; text-align: center; margin-top: 6%">Halaman Data Artikel
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 grid-margin stretch-card ml-auto" style="">
                            <div class="card">
                                <div class="card-body">
                                    <p>Filter by Category</p>
                                    <form method="GET" action="{{ route('artikel.index') }}">
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
                                        <button type="submit" class="btn btn-primary mt-3">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($artikel->isEmpty())
                        <p style="font-size: 20px; text-align: center;">Tidak ada Artikel untuk Kategori ini.</p>
                    @else
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Tabel Artikel</h4>
                                            <a href="{{ route('artikel.create') }}" class="btn btn-primary">+ Add
                                                Data</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><b>
                                                                <h5>No</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Judul Artikel</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Tanggal Publikasi</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Kategori</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Cover</h5>
                                                            </b></th>
                                                        <th><b>
                                                                <h5>Action</h5>
                                                            </b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no=1; @endphp
                                                    @foreach ($artikel as $data)
                                                        <tr class="odd gradeX">
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $data->judul }}</td>
                                                            <td>{{ $data->formatted_tanggal }}</td>
                                                            <td>{{ $data->kategori->nama_kategori }}</td>
                                                            <td>
                                                                <img src="{{ asset('images/artikel/' . $data->cover) }}"
                                                                    width="100">
                                                            </td>
                                                            <form action="{{ route('artikel.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <td>
                                                                    <a href="{{ route('artikel.edit', $data->id) }}"
                                                                        class="btn  btn-success">Edit</a>
                                                                    <a href="{{ route('artikel.show', $data->id) }}"
                                                                        class="btn  btn-warning">Detail</a>
                                                                    <button class="btn  btn-danger" type="submit"
                                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
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
