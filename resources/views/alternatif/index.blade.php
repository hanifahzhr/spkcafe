<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin SPK-Cafe</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

        <!-- wajib pake ini di setiap view biar db nya kepanggil -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      @include('navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Cafe di Kota Tangerang Selatan Menggunakan Metode AHP (Analytical Hierarchy Process)</h1>
                        <ol class="breadcrumb mt-4 mb-4">
                            <li class="breadcrumb-item active">Sistem pendukung keputusan ini adalah sistem yang dapat digunakan untuk membantu konsumen dalam memilih cafe di Kota Tangerang Selatan
                            yang ingin dikunjungi berdasarkan kriteria pertimbangan konsumen. untuk dapat memberikan keputusan, sistem ini menggunakan metode AHP (Analytical Hierarchy Process)</li>
                        </ol>
                    </div>
                </main>
                @include('WEB.home.footer')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>