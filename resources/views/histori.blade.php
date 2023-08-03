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
 <!-- Kartu dengan perataan teks kiri default -->
 <div class="position-relative m-4">
  <div class="progress" style="height: 1px;">
    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">0</button>
  <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
</div>
  <!-- Default Card -->
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Penyewa</h5>
              <div class="row">
              <div class="text-center">
              <img style="max-height: 400px; max-width: 400px;" src=" assets/img/avanza.png " class="card-img img-fluid" alt="...">
                </div>
                </div>
                <br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama Penyewa</div>
                <div class="col-lg-9 col-md-8">Muhammad Abdullah</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Alamat</div>
                <div class="col-lg-9 col-md-8">Jl. Hj DJalo Padurenan Kecamatan Mustika Jaya Kota Bekasi 171519</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">No Hp</div>
                <div class="col-lg-9 col-md-8">(+62) 813-098-890</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Unit Sewa</div>
                <div class="col-lg-9 col-md-8">Toyota Avanza</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tipe</div>
                <div class="col-lg-9 col-md-8">LMPV</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Harga Sewa</div>
                <div class="col-lg-9 col-md-8">Rp. 500.000</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tahun Rilis</div>
                <div class="col-lg-9 col-md-8">2023</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">No Polisi</div>
                <div class="col-lg-9 col-md-8">B 0099 XX</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tanggal Sewa</div>
                <div class="col-lg-9 col-md-8">Kamis, 22 Juni 2023</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tanggal Kembali</div>
                <div class="col-lg-9 col-md-8">Jum'at, 23 Juni 2023</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Jaminan</div>
                <div class="col-lg-9 col-md-8">KTP</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Pembayaran</div>
                <div class="col-lg-9 col-md-8">Transfer Bank</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Sisa Pembayaran</div>
                <div class="col-lg-9 col-md-8">Rp. 0</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Status Pembayaran</div>
                <div class="col-lg-9 col-md-8 text-danger">Lunas</div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-secondary" href="/history">
  <span class="ri-arrow-left-s-line"></span> Kembali</a>
  <!-- <button href="/history" class="btn btn btn-outline-secondary" type="button">Button</button> -->
</div>
            </div>
            </div>
          </div><!-- End Default Card -->
@endsection