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
            <h1>Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Pegawai</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('tambah_pegawai'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('tambah_pegawai') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session()->has('delete_pegawai'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('delete_pegawai') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('edit_pegawai'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('edit_pegawai') }}
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
                                <h5 class="card-title">Daftar Pegawai</h5>
                                <div class="card-tools my-3">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah_pegawai">
                                        <i class="bi bi-plus-square"></i> Tambah Pegawai
                                    </button>
                                </div>
                            </div>
                            <div class="modal fade" id="tambah_pegawai" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="/tambah_pegawai" id="rooms-setting" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Pegawai</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Nama Lengkap
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>
                                                        <input type="text" name="nama_lengkap" class="form-control shadow-none" placeholder="Masukkan nama lengkap Anda" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold">NPWP
                                                        </label>
                                                        <input type="text" name="npwp" id="npwp" class="form-control shadow-none" placeholder="xx.xxx.xxx.x-xxx.xxx" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Jabatan
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <select name="jabatan_id" id="jabatan_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                            <option selected hidden>Pilih jabatan</option>
                                                            @foreach ($jabatan as $p)
                                                                <option value="{{ $p->id }}">{{ $p->nama_jabatan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Departemen
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <select name="departemen_id" id="departemen_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                            <option selected hidden>Pilih departemen</option>
                                                            @foreach ($departemen as $p)
                                                                <option value="{{ $p->id }}">{{ $p->nama_departemen }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Tanggal Lahir
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="date" name="tgl_lahir" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Jenis Kelamin
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                            <option selected hidden>Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Alamat
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="text" name="alamat" class="form-control shadow-none" placeholder="Masukkan alamat Anda" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">No Telpon
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="text" name="no_telp" id="no_telp" class="form-control shadow-none" placeholder="Masukkan no telepon Anda" required>
                                                        <small id="no_telp_error" class="text-danger d-none">Nomor telepon harus terdiri dari 10-15 digit.</small>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Email
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="email" name="email" class="form-control shadow-none" placeholder="Masukkan email Anda" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Tanggal Gabung
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="date" name="tgl_gabung" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Status
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <select name="status_id" id="status_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                            <option selected hidden>Pilih status</option>
                                                            @foreach ($status as $p)
                                                                <option value="{{ $p->id }}">{{ $p->nama_status }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Pendidikan
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <select name="pendidikan_id" id="pendidikan_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                            <option selected hidden>Pilih pendidikan</option>
                                                            @foreach ($pendidikan as $p)
                                                                <option value="{{ $p->id }}">{{ $p->nama_pendidikan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Nama Sekolah/Univ
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="text" name="nama_sekolah" class="form-control shadow-none" placeholder="Masukkan nama sekolah/univ Anda" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold position-relative">Gaji
                                                            <span class="text-danger position-absolute">*</span>
                                                        </label>

                                                        <input type="text" name="gaji" class="form-control shadow-none" placeholder="Masukkan gaji Anda" required>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label fw-bold">Foto
                                                        </label>

                                                        <input type="file" name="foto" id="site_title_inp" class="form-control shadow-none" accept="image/*" required>
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
                                <table class="table-pegawai datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NPWP</th>
                                            <th>Jabatan</th>
                                            <th>Departemen</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Email</th>
                                            <th>Tanggal Gabung</th>
                                            <th>Status Kerja</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Nama Sekolah/Univ</th>
                                            <th>Gaji</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp
                                        @foreach ($pegawai as $item)
                                            <tr>
                                                <td>{{ $counter++ }}</td>
                                                <td>{{ $item->nama_lengkap}}</td>
                                                <td>{{ $item->npwp}}</td>
                                                <td>{{ $item->jabatan->nama_jabatan}}</td>
                                                <td>{{ $item->departemen->nama_departemen }}</td>
                                                <td>{{ $item->tgl_lahir}}</td>
                                                <td>{{ $item->jenis_kelamin}}</td>
                                                <td>{{ $item->alamat}}</td>
                                                <td>{{ $item->no_telp}}</td>
                                                <td>{{ $item->email}}</td>
                                                <td>{{ $item->tgl_gabung}}</td>
                                                <td>{{ $item->status->nama_status}}</td>
                                                <td>{{ $item->pendidikan->nama_pendidikan}}</td>
                                                <td>{{ $item->nama_sekolah}}</td>
                                                <td>{{ $item->gaji}}</td>
                                                <td><img src="{{ asset('assets/img/upload/'.$item->foto)}}" width="100px"></td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info" href="{{ route('detail_pegawai', ['id' => $item->id]) }}">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a class="btn btn-success" href="{{ route('update_pegawai', ['id' => $item->id]) }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
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
                                                                    Apakah benar Anda ingin menghapus Data Pegawai ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                                    @method('delete')
                                                                    @csrf
                                                                    <a type="button" href="{{ route('delete_pegawai', ['id' => $item->id]) }}" class="btn btn-primary">Iya</a>
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
                            <style>

                            </style>
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

    <script src="{{ asset('assets/js/pegawai.js') }}"></script>


</body>

</html>
