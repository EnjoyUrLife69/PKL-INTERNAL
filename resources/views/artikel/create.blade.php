<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>P5 | Dashboard </title>
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
        @include('.include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- FORM --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Data Artikel</h4>
                                <p class="card-description"> Masukkan data Artikel yang ingin anda tambahkan </p>
                                <form class="forms-sample" action="{{ route('artikel.store') }}" method="post"
                                    role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama
                                            Artikel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="putih" name="judul"
                                                placeholder="Judul artikel" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal
                                            Publikasi</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tanggal" class="form-control" id="putih"
                                                placeholder="dd/mm/yyyy" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="id_kategori" id="putih"
                                                id="exampleSelectGender">
                                                <option value="" selected>Pilih Kategori</option>

                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="deskripsi" id="putih" rows="4" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Isi
                                            Artikel</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="isi" id="putih" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cover</label>
                                        <input type="file" name="cover" class="file-upload-default">
                                        <div class="input-group col-sm-9">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a href="{{ url('artikel') }}" class="btn btn-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.querySelector('.file-upload-browse');
            const fileInput = document.querySelector('.file-upload-default');

            uploadButton.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function() {
                const fileName = fileInput.files[0] ? fileInput.files[0].name : '';
                document.querySelector('.file-upload-info').value = fileName;
            });
        });
    </script>

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
