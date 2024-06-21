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
                    @if (session()->has('edit_pegawai'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('edit_pegawai') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <h5 class="card-title">Daftar Pegawai</h5>
                            </div>
                            <form action="{{ route('edit_pegawai', ['id' => $pegawai->id]) }}" id="rooms-setting" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Pegawai</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap" class="form-control shadow-none" placeholder="Masukkan nama lengkap Anda" value="{{ $pegawai->nama_lengkap}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">NPWP</label>
                                                <input type="text" name="npwp" class="form-control shadow-none" placeholder="Masukkan NPWP Anda" value="{{ $pegawai->npwp}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Jabatan</label>
                                                <select name="jabatan_id" id="jabatan_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                    <option selected hidden>Pilih jabatan</option>
                                                    @foreach ($jabatan as $p)
                                                        <option value="{{ $p->id }}" {{ $pegawai->jabatan_id == $p->id ? 'selected' : '' }}>{{ $p->nama_jabatan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Departemen</label>
                                                <select name="departemen_id" id="departemen_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                    <option selected hidden>Pilih departemen</option>
                                                    @foreach ($departemen as $p)
                                                    <option value="{{ $p->id }}" {{ $pegawai->departemen_id == $p->id ? 'selected' : '' }}>{{ $p->nama_departemen }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control shadow-none" value="{{ $pegawai->tgl_lahir}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                    <option hidden>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-laki" {{ $pegawai->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="Perempuan" {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Alamat</label>
                                                <input type="text" name="alamat" class="form-control shadow-none" placeholder="Masukkan alamat Anda" value="{{ $pegawai->alamat}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">No Telpon</label>
                                                <input type="text" name="no_telp" class="form-control shadow-none" placeholder="Masukkan no telepon Anda" value="{{ $pegawai->no_telp}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Email</label>
                                                <input type="email" name="email" class="form-control shadow-none" placeholder="Masukkan email Anda" value="{{ $pegawai->email}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Tanggal Gabung</label>
                                                <input type="date" name="tgl_gabung" class="form-control shadow-none" value="{{ $pegawai->tgl_gabung}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Status</label>
                                                <select name="status_id" id="status_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                    <option selected hidden>Pilih status</option>
                                                    @foreach ($status as $p)
                                                    <option value="{{ $p->id }}" {{ $pegawai->status_id == $p->id ? 'selected' : '' }}>{{ $p->nama_status }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Pendidikan</label>
                                                <select name="pendidikan_id" id="pendidikan_id" class="form-select form-select-lg mb-0" aria-label=".form-select-sm example" style="font-size: 16px">
                                                    <option selected hidden>Pilih pendidikan</option>
                                                    @foreach ($pendidikan as $p)
                                                    <option value="{{ $p->id }}" {{ $pegawai->pendidikan_id == $p->id ? 'selected' : '' }}>{{ $p->nama_pendidikan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">nama Sekolah/Univ</label>
                                                <input type="text" name="nama_sekolah" class="form-control shadow-none" placeholder="Masukkan nama sekolah/univ Anda" value="{{ $pegawai->nama_sekolah}}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label fw-bold">Gaji</label>
                                                <input type="text" name="gaji" class="form-control shadow-none" placeholder="Masukkan gaji Anda" value="{{ $pegawai->gaji}}">
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label fw-bold">Foto</label>
                                                <input type="file" name="foto" id="site_title_inp" class="form-control shadow-none" accept="image/*">
                                                <label>Foto Saat Ini</label>
                                                <br>
                                                <img src="{{ asset('assets/img/upload/'.$pegawai->foto) }}" alt="foto saat ini" width="100px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn text-secondary shadow-none" href="/daftar_pegawai" >Kembali</a>
                                        <button type="submit" class="btn btn-success text-white shadow-none">Kirim</button>
                                    </div>
                                </div>
                            </form>


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
