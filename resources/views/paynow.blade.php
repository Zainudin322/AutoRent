@extends('layout.tamplate')
@section('content')
<div class="pagetitle">
      <h1>Sedang Sewa</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/dashboard"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><Td>Transaksi</Td></li>
          <li class="breadcrumb-item active">Sedang Sewa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 <h5>Transaksi Yang Sedang Berjalan</h5>

 <!-- Kartu dengan perataan teks kiri default -->

<div class="card">
	<div class="row g-0">
		<div class="col-md-4">
			<img src="  assets/img/xpander.jpg  " class="card-img img-fluid" alt="...">
		</div>
		<div class="col-md-4" >
			<div class="card-body">
			<a href="/rent"><h5 class="card-title">Mitshubishi Xpander Ultimate</h5>
				<p class="card-text text-dark">Tahun Rilis : 2023</p>
                <p class="card-text text-dark">Nama Penyewa : Muhammad Abdullah</p>
                <p class="card-text text-dark">Lama Sewa : 3 Hari</p>
				<p class="card-text text-dark"><small class="text-muted">Sisa Waktu 2 Hari</small></p>
				</a>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection