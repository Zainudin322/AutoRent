@extends('layout.tamplate')
@section('content')
<div class="pagetitle">
      <h1>Tipe Motor Matik</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/dashboard"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item">Tipe Motor</li>
          <li class="breadcrumb-item active">Matik</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
  <div class="card h-100 gfg">
      <img style="max-height: 200px;"src="{{asset('niceadmin/assets/img/beat.png')}}" class="card-img-top" alt="...">
      <h3 class="second-txt"><button type="button" class="btn btn-danger btn-sm" disabled>20%</button></h3>
      <div class="card-body">
      <a href="/detmob">
        <h5 class="card-title">Honda Beat</h5></a>
        <div class="row">
          <small class="text-decoration-line-through fw-light">Rp. 100.000</small>
        <a class="fs-5 fw-bold text-dark" href="/detmob">Rp. 80.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Nodi Mobilindo</a>
        <div class="row">
 <a class="text-dark" href="/detmob">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.9 | Tersewa 2000</a></div>
 <div class="row">
 <a class="text-dark" href="/detmob">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> Kota Bekasi</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/vario.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/detmob">
        <h5 class="card-title">Honda Vario 160cc</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/detmob">Rp. 130.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Nodi Mobilindo</a>
        <div class="row">
 <a class="text-dark" href="/detmob">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.9 | Tersewa 1800</a></div>
 <div class="row">
 <a class="text-dark" href="/detmob">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> Kota Bekasi</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/nmax.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Yamaha Nmax 155cc</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 110.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Rent Byke</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.5 | Tersewa 1000</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> D.I. Yogyakarta</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/aerox.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Yamaha Aerox 155cc</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 100.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Rent Byke</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.5 | Tersewa 1000</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> D.I. Yogyakarta</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/pcx.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Honda Pcx 160cc</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 115.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Rent Byke</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.6 | Tersewa 1100</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> D.I. Yogyakarta</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/adrees.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Suzuki Address</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 90.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> RentCar</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.7 | Tersewa 500</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> Jakarta Timur</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/adv.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Honda Adv 160cc</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 120.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Setia Mobilindo</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.0 | Tersewa 500</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> Kota Bogor</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"style="max-height: 200px;"src="{{asset('niceadmin/assets/img/vespa.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/blank">
        <h5 class="card-title">Vespa</h5></a>
        <div class="row">
        <a class="fs-5 fw-bold text-dark" href="/blank">Rp. 115.000</a></div>
        <a class="text-dark" href="/blank"><img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/cek.png')}}" alt="..."> Rent Byke</a>
        <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/star.png')}}" alt="..."> 4.6 | Tersewa 800</a></div>
 <div class="row">
 <a class="text-dark" href="/blank">
 <img style="max-height: 20px; max-width: 20px;"src="{{asset('niceadmin/assets/img//logo/loc.png')}}" alt="..."> D.I. Yogyakarta</a></div>
      </div>
    </div>
  </div>
</div>
@endsection