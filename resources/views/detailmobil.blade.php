@extends('layout.tamplate')
@section('content')
<div class="pagetitle">
      <h1>Detail Sewa</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/dashboard"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item active">Detail Sewa</li>
        </ol>
      </nav>
 
      <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Slides with indicators -->
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active text-center">
                    <img style="max-height: 300px; max-width: 500px;" src="{{asset('niceadmin/assets/img/xpander.jpg')}}" class="img-fluid" alt="...">
                  </div>
                  <div class="carousel-item text-center">
                    <img style="max-height: 300px; max-width: 500px;" src="{{asset('niceadmin/assets/img/xp1.png')}}" class="img-fluid" alt="...">
                  </div>
                  <div class="carousel-item text-center">
                    <img style="max-height: 300px; max-width: 500px;" src="{{asset('niceadmin/assets/img/xp2.png')}}" class="img-fluid" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div><!-- End Slides with indicators -->
              <br>
              <small class="text-decoration-line-through fw-light">Rp. 700.000</small>
              <p class="fs-3 fw-bold">Rp. 700.000</p>
              <p class="fs-4">Mitshubishi Xpander Ultimate</p>
 <small>Tersewa 1.500</small>
 <a class="btn btn-outline-secondary btn-sm" href="/blank">
  <span class="bi bi-star text-warning"></span> 4.5 (1000)</a>
  <a class="btn btn-outline-secondary btn-sm" href="/blank">
  <span class="bi bi-camera-fill"></span> 500</a>
  <br>
  <br>
  <ul class="list-group">
  <li class="list-group-item">
<p class="fs-5 fw-bold">Detail Mobil</p>
               <!-- Default Table -->
               <table class="table table-responsive  container-s">
                <tbody>
                    
                  <tr>
                    <td>Tahun</td>
                    <td>2023</td>
                  </tr>
                  <tr>
                    <td>Stok Unit</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>Kondisi Mesin</td>
                    <td>Prima</td>
                  </tr>
                  <tr>
                    <td>Surat</td>
                    <td>Lengkap</td>
                  </tr>
                  <tr>
                    <td>Tipe</td>
                    <td>Lmpv</td>
                  </tr>
                </tbody>
              </table>
</li>
                <li class="list-group-item">
  <!-- Card with an image on left -->
            <div class="row g-0">
              <div class="col-md-1">
              <img src="{{asset('niceadmin/assets/img/user.png')}}"  class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-6">
                  <p class="fs-6 fw-bold">Nodi Mobilindo</p>
                  <small>Kota Bekasi </small>
                </div>
                <i class="ri-star-s-line"><small> 4.0 Ulasan Rata-Rata</small></i>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="/blank">
  <span class="ri-add-line me-md-2"></span>Follow</a>
</div>
          </div><!-- End Card with an image on left -->
                </li>

                <li class="list-group-item">
                <p class="fs-5 fw-bold">Deskripsi</p>
              <p>Mitshubishi Xpander Ultimate</p>
              <p>Kondisi mobil prima tidak ada yang lecet</p>
              <p> Cocok untuk mobil keluarga </p>
              <p>Dapat menyewa plus driver maupun tanpa driver</p>
              <p> Surat perlengkapan ada</p>
              <p> Pajak hidup</p>
                </li>
              </ul><!-- End Default List group -->
              <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="blank"  type="button" class="btn btn-outline-secondary" type="button"><i class="bi bi-chat-left-text-fill"></i></a>
  <a href="/pay"  type="button" class="btn btn-outline-primary" type="button">Sewa</a>
  <a href="blank"  type="button" class="btn btn-primary" type="button"><i class="ri-heart-add-fill"></i> Favorit</a>
</div>
</div>
          </div>
        </div>
      </div>
@endsection