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
            <h1>Detail Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Detail Pegawai</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="container-fluid">
            <div class="container mt-3 p-5 bg-white shadow-lg d-flex flex-column gap-5" style="width: 800px; height:1000px">
                <div class="container m-0 p-0 d-flex justify-content-evenly">
                    <img src="{{ asset('assets/img/upload/'.$pegawai->foto)}}" class="img-fluid mb-2" alt="..." width="150" height="150">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="fw-bold">{{$pegawai->nama_lengkap}}</h1>
                        <h3 class="fw-semibold">{{$pegawai->jabatan->nama_jabatan}}</h3>
                    </div>
                </div>
                <hr class="border border-black border-3 opacity-100 p-0 m-0 ">
                <div class="d-flex align-items-center">
                    <div class="p-2 flex-fill">
                        <p class="fw-semibold" style="font-size: 16px">Tanggal Lahir :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->tgl_lahir}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Jenis Kelamin :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->jenis_kelamin}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Nomer Telepon :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->no_telp}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Email :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->email}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Alamat :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->alamat}}</p>
                    </div>
                    <div class="p-2 flex-fill">
                        <p class="fw-semibold" style="font-size: 16px">Departemen :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->departemen->nama_departemen}}</p>
                        <p class="fw-semibold" style="font-size: 16px">NPWP :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->npwp}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Tanggal Gabung :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->tgl_gabung}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Pendidikan Terakhir :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->pendidikan->nama_pendidikan}}</p>
                        <p class="fw-semibold" style="font-size: 16px">Nama Sekolah/Universitas :</p>
                        <p class="" style="font-size: 16px">{{$pegawai->nama_sekolah}}</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <p class="fs-4 fw-semibold" style="font-size: 16px">Gaji Pegawai :</p>
                        <p class="fs-5" style="font-size: 16px">{{ 'Rp ' . number_format($pegawai->gaji, 0, ',', '.') }}</p>
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
