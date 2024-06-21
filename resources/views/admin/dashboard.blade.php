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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card tetap-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pegawai Tetap <span>| Semua</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-vcard-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$tetap}} Orang</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card magang-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pegawai Magang <span>| Semua</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$magang}} Orang</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card kontrak-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pegawai Kontrak<span>| Semua</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-video"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$kontrak}} Orang</h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">

                            <div class="card info-card admin-card">

                                <div class="card-body">
                                    <h5 class="card-title">Akun Admin <span>| Semua</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$admin}} Akun</h6>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pendidikan Terakhir<span>| Semua</span></h5>
                                    <div id="reportsChart"></div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        const data = JSON.parse(`{!! $json_data1 !!}`);
                                        const pendidikan = data.map(item => item.nama_pendidikan);
                                        const totals = data.map(item => item.total);

                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Jumlah',
                                                data: totals,
                                            }],
                                            chart: {
                                                height: 365,
                                                type: 'bar',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    columnWidth: '65%',
                                                    endingShape: 'rounded'
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                show: true,
                                                width: 2,
                                                colors: ['transparent']
                                            },
                                            xaxis: {
                                                categories: pendidikan,
                                            },
                                            fill: {
                                                opacity: 1
                                            },
                                            colors: ['#4154f1'],
                                            tooltip: {
                                                y: {
                                                    formatter: function (val) {
                                                        return val;
                                                    }
                                                }
                                            }
                                        }).render();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card table-dash overflow-auto">
                                <div class="card-body">
                                    <a href="/daftar_pegawai">
                                        <h5 class="card-title">Tabel Pegawai <span>| Semua</span></h5>
                                    </a>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">jabatan</th>
                                                <th scope="col">Departemen</th>
                                                <th scope="col">Status Kerja</th>
                                                <th scope="col">Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $item)
                                                <tr>
                                                    <td>{{ $item->nama_lengkap}}</td>
                                                    <td>{{ $item->jabatan->nama_jabatan}}</td>
                                                    <td>{{ $item->departemen->nama_departemen }}</td>
                                                    <td>{{ $item->status->nama_status}}</td>
                                                    <td>{{ $item->pendidikan->nama_pendidikan}}</td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Grafik Status<span>| Semua</span></h5>
                            <div id="grafik_status" style="min-height: 400px;" class="echart"></div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const data = {!! $json_data2 !!};
                            const grafikStatus = echarts.init(document.querySelector("#grafik_status"));

                            const seriesData = data.map(item => ({
                                value: item.total,
                                name: item.nama_status
                            }));

                            grafikStatus.setOption({
                                tooltip: {
                                    trigger: 'item',
                                    formatter: '{b}: {c} ({d}%)'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Status',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: seriesData
                                }]
                            });
                        });
                    </script>
                    <div class="card table-dash overflow-auto">
                        <div class="card-body">
                            <a href="/daftar_profil">
                                <h5 class="card-title">Tabel Akun Admin<span>| Semua</span></h5>
                            </a>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $item->nama}}</td>
                                            <td>{{ $item->email}}</td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main_admin.js') }}"></script>

</body>

</html>
