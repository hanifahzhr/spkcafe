@if (!empty($homeuser_list))
          <div class="col-lg-8 mt-4"> 
            <div class="card shadow mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="user/img/slide/download.jpg" class="card-img img-fluid" alt="...">
                </div>
              <div class="col-lg-8 mt-4">
                <div class="card-body">
                @foreach($homeuser_list as $homeuser)
                  <h5 class="card-title">{{ $homeuser->nama_cafe }}</h5>
                  <p class="card-text">{{ $homeuser->alamat }}</p>
                  <hr size="5px">
                  <p class="card-text"><small>No Telepon      : {{ $homeuser->telepon }}</small></p>
                  <p class="card-text"><small>Jam Operasional : {{ $homeuser->deskripsi }}</small></p>
                  <p class="card-text"><small>Kisaran Harga   : {{ $homeuser->id_harga }}</small></p>
                @endforeach
                </div>
                @else
                  <p>Tidak ada data Cafe</p>
                @endif