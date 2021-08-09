<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cari Cafe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="user/img/favicon.png" rel="icon">
  <link href="user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="user/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="user/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="user/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="user/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Cari Cafe</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="user/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="book-a-table text-center"><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <section id="hero">
    <div class="hero-container">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

        
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(user/img/slide/roti.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Cari</span> Cafe</h2>
                  <form action="{{ url('homeuser/search') }}" method="GET" class="form-inline">
					          <input class="form-control-sm" type="text" name="search" placeholder="search" value="{{ old('search') }}">
                      <button type="submit" class="btn btn-primary " title="Search" style="margin-right:5px;">
						            <i class="fa fa-search"></i>
					            </button>
                    </input>
					            
				          </form>
                <!-- <div class="form-group has-search bg-transparant">
                  <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div> -->
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>

        </div>

    </div>
  </section>

  <main id="main">
    <!-- ======= Filtering ======= -->
    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Cari Cafe <span>di Tangerang Selatan?</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <div class="card shadow" style="width: 18rem;">
            {!! Form::open(['url' => 'homeuser/cari', 'method' => 'GET', 'id' => 'form-pencarian']) !!}
              <div class="card-body shadow">
                <h3 class="card-title">
                  <div class="row">
                    <div class="col-8">
                      <b>Filter</b> 
                    </div>
                    <div class="col-4">
                      <a href="{{url('homeuser')}}" class="btn btn-xs btn-danger">Reset</a>
                    </div>
                  </div>
              </h3> 
                <div><a href="#" class="card-link">Ranking - Tinggi ke Rendah </a></div>
                <div><a href="#" class="card-link">Ranking - Rendah ke Tinggi </a></div>
              </div>

              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Fasilitas</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" name="w" type="radio" value="wifi" id="defaultCheck1" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck1">
                      Wifi
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="sk" type="radio" value="stop kontak" id="defaultCheck2" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck2">
                      Stop Kontak
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="sf" type="radio" value="spot foto" id="defaultCheck3" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck3">
                      Spot Foto
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="lv" type="radio" value="live music" id="defaultCheck4" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck4">
                      Live Music
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="p" type="radio" value="permainan" id="defaultCheck5" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck5">
                      Menyediakan Permainan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="fu" type="radio" value="fasilitas umum (mushollah, wc)" id="defaultCheck6" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck6">
                      Fasilitas Umum (Mushollah dan toilet)
                    </label>
                  </div>
                </li>
              </ul>
    
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Lokasi</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="dekat jalan utama" id="defaultCheck7" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck7">
                      Dekat Jalan Utama
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Dekat area kampus" id="defaultCheck8" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck8">
                      Dekat Area Kampus
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="dekat area perumahan" id="defaultCheck9" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck9">
                      Dekat Area Perumahan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Dekat area pusat perbelanjaan" id="defaultCheck10" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck10">
                      Dekat Pusat Perbelanjaan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Di dalam mall" id="defaultCheck11" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck11">
                      Di Dalam Mall
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Dekat kota" id="defaultCheck12" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck12">
                      Dekat Kota
                    </label>
                  </div>
                </li>
              </ul>
    
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Variasi Menu</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="makanan utama" id="defaultCheck13" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck13">
                      Makanan Utama
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="makanan ringan" id="defaultCheck14" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck14">
                      Makanan Ringan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="coffee" id="defaultCheck15" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck15">
                      Coffee
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="non coffee" id="defaultCheck16" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck16">
                      Non-Coffee
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="dessert" id="defaultCheck17" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck17">
                      Dessert
                    </label>
                  </div>
                </li>
              </ul>
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Kisaran Harga</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="15000-40000" id="defaultCheck18" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck18">
                      Rp. 15.000 - Rp. 40.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="20000-45000" id="defaultCheck19" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck19">
                      Rp. 20.000 - Rp. 45.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="25000-50000" id="defaultCheck20" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck20">
                      Rp. 25.000 - Rp. 50.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="35000-50000" id="defaultCheck21" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck21">
                      Rp. 35.000 - Rp. 50.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="50000-75000" id="defaultCheck22" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck22">
                      Rp. 50.000 - Rp. 75.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="50000-100000" id="defaultCheck23" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck23">
                      Rp. 50.000 - Rp. 100.000
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value=">100000" id="defaultCheck24" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck24">
                      > Rp. 100.000
                    </label>
                  </div>
                </li>
              </ul>
    
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Area Cafe</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="indoor area" id="defaultCheck25" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck25">
                      Indoor Area
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="outdoor area" id="defaultCheck26" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck26">
                      Outdoor Area
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="smooking area" id="defaultCheck27" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck27">
                      Smooking Area
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="non smooking area" id="defaultCheck28" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck28">
                      Non-Smooking Area
                    </label>
                  </div>
                </li>
              </ul>
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Waktu Operasional Cafe</b></li>
                <li class="list-group-item">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Pagi-Malam" id="defaultCheck29" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck29">
                      Pagi - Malam
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Siang-Malam" id="defaultCheck30" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck30">
                      Siang - Malam
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Sore-Malam" id="defaultCheck31" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck31">
                      Sore - Malam
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Pagi-Sore" id="defaultCheck32" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck32">
                      Pagi - Sore
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Siang-Sore" id="defaultCheck33" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck33">
                      Siang - Sore
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Malam-Pagi" id="defaultCheck34" onclick="submitConfirm()">
                    <label class="form-check-label" for="defaultCheck34">
                      Malam - Pagi
                    </label>
                  </div>
                </li>
              </ul>
            </div>
            {!! Form::close() !!}
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            @if (!empty($homeuser_list))
            @foreach($homeuser_list as $homeuser)
              <div class="box">
                <div class="row">
                  <div class="col-md-4">
                    <img src="user/img/slide/download.jpg" class="card-img img-fluid" alt="...">
                  </div>
                  <div class="col-md-8">
                    <span>01</span>
                    <h4>{{ $homeuser->nama_cafe }}</h4>
                    <p>{{ $homeuser->alamat }}</p>
                    <p class="card-text"><small>No Telepon      : {{ $homeuser->telepon }}</small></p>
                    <p class="card-text"><small>Jam Operasional : {{ $homeuser->deskripsi }}</small></p>
                    <p class="card-text"><small>Kisaran Harga   : {{ $homeuser->id_harga }}</small></p>
                  </div>
                </div>
              </div>
            @endforeach
            @else
              <p>Tidak ada data Cafe</p>
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- End Whu Us Section -->
    <!-- End Filtering -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CariCafe</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script>
    // var form = document.getElementById("form-pencarian");

    // document.getElementById("your-id").addEventListener("click", function () {
    //   form.submit();
    // });

    function submitConfirm() {
      document.getElementById("form-pencarian").submit();
    }
  </script>
  
  <!-- Vendor JS Files -->
  <script src="user/vendor/jquery/jquery.min.js"></script>
  <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="user/vendor/php-email-form/validate.js"></script>
  <script src="user/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="user/vendor/venobox/venobox.min.js"></script>
  <script src="user/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="user/js/main.js"></script>

  <script>
    $(document).ready(function().on('click', function() {
                // console.log($(this).data('id'))
                $('.btn-updatehutang').attr("disabled", "true");
                let id = $('#formatdata').find('#id_data').val()
                let FormData = $('#formatdata').serialize()
                console.log(FormData)
                $.ajax({
                    url: `/hutang/${id}`,
                    method: "PATCH",
                    data: FormData,
                    success: function(data) {
                        console.log(data)
                        // $('#modal-editpemasukan').find('.modal-body').html(data)
                        window.location.assign('hutang');
                        
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            })
  </script>
  
  
</body>

</html>