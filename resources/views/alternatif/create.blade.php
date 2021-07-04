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
                        <!-- <h1 class="mt-4">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Cafe di Kota Tangerang Selatan Menggunakan Metode AHP (Analytical Hierarchy Process)</h1>
                        <ol class="breadcrumb mt-4 mb-4">
                            <li class="breadcrumb-item active">Sistem pendukung keputusan ini adalah sistem yang dapat digunakan untuk membantu konsumen dalam memilih cafe di Kota Tangerang Selatan
                            yang ingin dikunjungi berdasarkan kriteria pertimbangan konsumen. untuk dapat memberikan keputusan, sistem ini menggunakan metode AHP (Analytical Hierarchy Process)</li>
                        </ol> -->
                        <h2 class="mb-4">Create Data Cafe</h2>
                        <div class="card mb-4">

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Create Data Cafe
                            </div>
                            <div class="card-body">
                              <form>
                                <div class="form-group">
                                  <label for="inoutnama">Nama Alternatif Cafe</label>
                                  <input type="nama" class="form-control" id="namacafe" placeholder="Nama Alternatif Cafe">
                                </div>
                                <div class="form-group">
                                  <label for="formfasilitas">Fasilitas Cafe</label>
                                  <select class="form-control" id="fasilitas">
                                    <option>Pilih</option>
                                    <option>wifi, stop kontak tiap meja, permainan, live music, tersedia banyak spot foto</option>
                                    <option>wifi, stop kontak tiap meja</option>
                                    <option>wifi, stop kontak tiap meja,dan tersedia banyak spot foto</option>
                                    <option>wifi, stop kontak tiap meja, live music, tersedia banyak spot foto</option>
                                    <option>wifi, stop kontak tiap meja, live music</option>
                                    <option>wifi, stop kontak tiap meja, menyediakan permainan, dan live music</option>
                                    <option>wifi, stop kontak tiap meja, fasilitas umum (musollah, wc)</option>
                                    <option>wifi, live music</option>
                                    <option>wifi, stop kontak tiap meja, live music dan menyediakan permainan</option>
                                    <option>wifi, stop kontak tiap meja, dan menyediakan permainan</option>
                                    <option>wifi, dan menyediakan permainan</option>
                                    <option>stop kontak tiap meja, live music, terdapat banyak spot foto</option>
                                    <option>wifi, stop kontak tiap meja, terdapat banyak spot foto,live music, fasilitas umum (mushollah dan toilet)</option>
                                    <option>wifi, stop kontak tiap meja, live music, fasilitas umum (mushollah dan toilet)</option>
                                    <option>wifi, terdapat banyak spot foto, dan menyediakan permainan</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formlokasi">Lokasi Cafe</label>
                                  <select class="form-control" id="lokasi">
                                    <option>Pilih</option>
                                    <option>Dekat Area kampus, perumahan, dan jalan utama</option>
                                    <option>Dekat kota</option>
                                    <option>Dekat Area Kampus (Jalan Sepi)</option>
                                    <option>Dekat area kampus dan Jalan utama (Jalan Ramai)</option>
                                    <option>Di dalam mall</option>
                                    <option>Dekat area Perumahan</option>
                                    <option>Dekat area pusat perbelanjaan</option>
                                    <option>Dekat area kampus, jalan utama, perumahan dan kota</option>
                                    <option>Dekat area kampus, perumahan, jalan utama, dan pusat perbelanjaan</option>
                                    <option>Dekat area kampus, jalan utama,dan pusat perbelanjaan</option>
                                    <option>dekat area perumahan dan jalan utama</option>
                                    <option>dekat jalan utama dan pusat perbelanjaan</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formvariasi">Variasi Menu</label>
                                  <select class="form-control" id="variasi">
                                    <option>Pilih</option>
                                    <option>makanan utama, makanan ringan, coffee, non coffee, dan dessert</option>
                                    <option>makanan ringan, coffee, non coffee, dan dessert</option>
                                    <option>makanan ringan, dan coffee</option>
                                    <option>coffee</option>
                                    <option>coffee, dan dessert</option>
                                    <option>makanan utama, makanan ringan, dan coffee</option>
                                    <option>makanan utama, makanan ringan, coffee, dan non coffee</option>
                                    <option>makanan ringan, coffee, dan non coffee</option>
                                    <option>makanan utama, dan coffee</option>
                                    <option>makanan ringan, coffee, dan dessert</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formrasa">Rasa</label>
                                  <select class="form-control" id="rasa">
                                    <option>Pilih</option>
                                    <option>sangat enak</option>
                                    <option>enak</option>
                                    <option>cukup enak</option>
                                    <option>kurang enak</option>
                                    <option>sangat kurang enak</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formharga">Harga</label>
                                  <select class="form-control" id="harga">
                                    <option>Pilih</option>
                                    <option>Rp.15.000-Rp.40.000</option>
                                    <option>Rp.20.000-Rp.45.000</option>
                                    <option>Rp.25.000-Rp.50.000</option>
                                    <option>Rp.35.000-Rp.50.000</option>
                                    <option>Rp.50.000-Rp.75.000</option>
                                    <option>Rp.50.000-Rp.100.000</option>
                                    <option>>Rp.100.000</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formpelayanan">Pelayanan</label>
                                  <select class="form-control" id="pelayanan">
                                    <option>Pilih</option>
                                    <option>sangat baik</option>
                                    <option>baik</option>
                                    <option>cukup baik</option>
                                    <option>kurang baik</option>
                                    <option>sangat kurang baik</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formarea">Area Cafe</label>
                                  <select class="form-control" id="area">
                                    <option>Pilih</option>
                                    <option>outdoor area dan indoor area</option>
                                    <option>outdoor area, indoor area, non smooking area</option>
                                    <option>indoor area</option>
                                    <option>outdoor area, indoor area, smooking area dan non smooking area</option>
                                    <option>indoor area, dan non smooking area</option>
                                    <option>outdoor area, indoor area dan smooking area</option>
                                    <option>indoor area, dan smooking area</option>
                                    <option>indoor area, smooking area, dan non smooking area</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formwaktu">Waktu Operasional</label>
                                  <select class="form-control" id="waktu">
                                    <option>Pilih</option>
                                    <option>Pagi-Malam</option>
                                    <option>Siang-Malam</option>
                                    <option>Sore-Malam</option>
                                    <option>Pagi-Sore</option>
                                    <option>Siang-Sore</option>
                                    <option>Malam-Pagi</option>
                                    <option>Pagi-Dini hari</option>
                                    <option>24 Jam</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="formrating">Rating</label>
                                  <select class="form-control" id="rating">
                                    <option>Pilih</option>
                                    <option>sangat di rekomendasikan</option>
                                    <option>di rekomendasikan</option>
                                    <option>cukup di rekomendasikan</option>
                                    <option>tidak di rekomendasikan</option>
                                    <option>sangat tidak di rekomendasikan</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <input class="btn btn-primary form-control" type="submit" value="Create">
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CariCafe 2021</div>
                        </div>
                    </div>
                </footer>
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
