@extends('WEB.layout.app')
@section('title','Spk Cafe Admin')
@section('content')
@include('WEB.home.navbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h2 class="mt-4 mb-4">Data Alternatif cafe</h2>
                        <div class="card mb-4">

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Data Cafe
                            </div>
                            <div class="card-body">
                              <form>
                              <div class="form-group mt-4 ">
                                  <label for="inputid">Id Cafe</label>
                                  <input type="text" class="form-control" id="idcafe" placeholder="Id Cafe">
                                </div>
                                <div class="form-group mt-4 ">
                                  <label for="inputnama">Nama Cafe</label>
                                  <input type="nama" class="form-control" id="namacafe" placeholder="Nama Alternatif Cafe">
                                </div>
                                <div class="form-group mt-4 ">
                                  <label for="inputalamat">Alamat Cafe</label>
                                  <textarea class="form-control" id="alamatcafe" rows="3"></textarea>
                                </div>
                                <div class="form-group mt-4 ">
                                  <label for="inputnotelp">No Telepon</label>
                                  <input type="text" class="form-control" id="notelpcafe" placeholder="Nomer Telepon Cafe">
                                </div>
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4 ">
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
                                <div class="form-group mt-4 ">
                                  <label for="inputdes">Deskripsi</label>
                                  <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                                </div>
                                <form>
                                  <div class="form-group mt-4 ">
                                    <label for="uploadimage">Upload Image</label>
                                    <input type="file" class="form-control-file" id="uploadimage">
                                  </div>
                                </form>
                                <div class="form-group mt-4 mb-4">
                                  <input class="btn btn-success form-control" type="submit" value="Update">
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </main>
                @include('WEB.home.footer')
            </div>
@endsection