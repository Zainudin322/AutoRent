@extends('layout.tamplate')
@section('content')
<div class="pagetitle">
      <h1>Metode Pembayaran</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/dashboard"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="/detmob">Detail Sewa</a></li>
          <li class="breadcrumb-item active">Metode Pembayaran</li>
        </ol>
      </nav>
 
      <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Slides with indicators -->
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
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
              <p class="fs-4">Mitshubishi Xpander Ultimate</p>
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
                    <td>Surat</td>
                    <td>Lengkap</td>
                  </tr>
                  <tr>
                    <td>Pajak</td>
                    <td>s/d 2025</td>
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
                </li>
              </ul><!-- End Default List group -->
</div>
          </div>
        </div>
      </div>

      <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Sewa</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jaminan</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>KTP</option>
                      <option value="1">SIM</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Driver</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Tanpa Driver</option>
                      <option value="1">Driver</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Durasi Sewa</label>
                  <div class="col-sm-10">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Durasi</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                      <label for="floatingSelect">Hitungan persatu hari</label>
                    </div>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembayaran</h5>

              <!-- Advanced Form Elements -->
              <form>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Pilih Metode</label>
                  <div class="col-sm-10">
                    <div class="form-floating mb-3">
                  <!-- Default Accordion -->
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Pilih Opsi
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row row-cols-2 row-cols-md-4 g-2">
  <div class="col" data-bs-toggle="modal" data-bs-target="#verticalycentered">
  <img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/mandiri.png')}}" class="card-img-top" alt="...">
  <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/mandiri.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">00018776647xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
  </div>
  <div class="col" data-bs-toggle="modal" data-bs-target="#bca">
  <img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/bca.png')}}" class="card-img-top" alt="...">
  <div class="modal fade" id="bca" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/bca.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">57898xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
  </div>
  <div class="col" data-bs-toggle="modal" data-bs-target="#bri">
  <img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/bri.png')}}" class="card-img-top" alt="...">
  <div class="modal fade" id="bri" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/bri.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">23187766xxxxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
  </div>
  <div class="col" data-bs-toggle="modal" data-bs-target="#bni">
 <img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/bni.jpg')}}" class="card-img-top" alt="...">
 <div class="modal fade" id="bni" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/bni.jpg')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">451877664xxxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
  </div>
  <div class="col" data-bs-toggle="modal" data-bs-target="#jenius">
<img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/jenius.png')}}" class="card-img-top" alt="...">
<div class="modal fade" id="jenius" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/jenius.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">08213456xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
</div>
<div class="col" data-bs-toggle="modal" data-bs-target="#gopay">
<img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/gopay.png')}}" class="card-img-top" alt="...">
<div class="modal fade" id="gopay" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/gopay.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">021877698xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
</div>
<div class="col" data-bs-toggle="modal" data-bs-target="#dana">
<img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/dana.png')}}" class="card-img-top" alt="...">
<div class="modal fade" id="dana" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/dana.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">02118666647xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
</div>
<div class="col" data-bs-toggle="modal" data-bs-target="#ovo">
<img style="max-height: 70px; max-width: 70px;" src="{{asset('niceadmin/assets/img/ovo.png')}}" class="card-img-top" alt="...">
<div class="modal fade" id="ovo" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Detail Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <small>Lakukan pembayaran dengan menggunakan no dibawah ini</small>
                    <br>
                    <div class="text-center">
  <img style="max-height: 200px; max-width: 200px;" src="{{asset('niceadmin/assets/img/ovo.png')}}" class="rounded" alt="...">
</div>
<div class="text-center">
<p class="fs-1 fw-bold">02118772890xxx</p>
</div>
<small>Sistem akan otomatis apabila pembayaran berhasil</small>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="ri-arrow-left-s-line"></i> Kembali</button>
                    </div>
                    </div>
                    </div>
</div>
</div>
                    </div>
                  </div>
                </div>
              </div><!-- End Default Accordion Example -->

                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                <p class="text-start text-danger">Catatan :</p>
                 <small>Pengguna yang tidak menyewa dengan driver harap datang ke showroom rental yang dipilih dan sertakan jaminan untuk dibawa.</small>
                </div>
              </form><!-- End General Form Elements -->
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-danger" href="/detmob"></span> Batal</a>
  <!-- <button href="/history" class="btn btn btn-outline-secondary" type="button">Button</button> -->
</div>
          </div>
      </div>
    </section>

@endsection