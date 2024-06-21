<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.head_admin')
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- ======= Sidebar ======= -->
    @include('admin.template.nav_admin')


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Status Kerja</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Status Kerja</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('tambah_status'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('tambah_status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session()->has('delete_status'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('delete_status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('edit_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('edit_status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <h5 class="card-title">Daftar Status Kerja</h5>
                                <div class="card-tools my-3">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah_status">
                                        <i class="bi bi-plus-square"></i> Tambah Status Kerja
                                    </button>
                                </div>
                            </div>
                            <div class="modal fade" id="tambah_status" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="/tambah_status" id="rooms-setting" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Status Kerja</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label fw-bold">Nama Status Kerja</label>
                                                        <input type="text" name="nama_status" class="form-control shadow-none" placeholder="Masukkan status Anda" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-success text-white shadow-none">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Status Kerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp
                                        @foreach ($status as $item)
                                            <tr>
                                                <td>{{ $counter++ }}</td>
                                                <td>{{ $item->nama_status}}</td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#edit_status{{ $item->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <div class="modal fade" id="edit_status{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('edit_status', ['id' => $item->id]) }}" id="rooms-setting" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Status Kerja</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label class="form-label fw-bold">Nama Status Kerja</label>
                                                                                <input type="text" name="nama_status" class="form-control shadow-none" placeholder="Masukkan nama status Anda" value="{{ $item->nama_status}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Kembali</button>
                                                                        <button type="submit" class="btn btn-success text-white shadow-none">Kirim</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#hapus{{ $item->id }}">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                    <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Hapus</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah benar Anda ingin menghapus Data Status Kerja ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                                    @method('delete')
                                                                    @csrf
                                                                    <a type="button" href="{{ route('delete_status', ['id' => $item->id]) }}" class="btn btn-primary">Iya</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.template.footer_admin')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main_admin.js') }}"></script>

</body>

</html>
