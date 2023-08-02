@extends('layout.tamplate')
@section('content')
<div class="pagetitle">
      <h1>Riwayat Sewa</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/dashboard"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><Td>Transaksi</Td></li>
          <li class="breadcrumb-item active">Riwayat Sewa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 <h5>Transaksi Yang Sudah Selesai</h5>

 <!-- Kartu dengan perataan teks kiri default -->

 <small class="text-muted">Kamis, 22 Juni 2023</small>
<div class="card">
	<div class="row g-0">
		<div class="col-md-4">
			<img src="{{asset('niceadmin/assets/img/avanza.png')}}" class="card-img img-fluid" alt="...">
		</div>
		<div class="col-md-4" >
			<div class="card-body">
			<a href="/hisrent"><h5 class="card-title">Toyota Avanza</h5>
				<p class="card-text text-dark">Tahun Rilis : 2023</p>
                <p class="card-text text-dark">Nama Penyewa : Muhammad Abdullah</p>
                <p class="card-text text-dark">Lama Sewa : 1 Hari</p>
				<p class="card-text text-dark"><small class="text-muted">Sewa Selesai</small></p>
</a>
			</div>
		</div>
	</div>
</div>

 <small class="text-muted">Kamis, 01 Juni 2023</small>
<div class="card">
	<div class="row g-0">
		<div class="col-md-4">
			<img src="{{asset('niceadmin/assets/img/Pajero.png')}}" class="card-img img-fluid" alt="...">
		</div>
		<div class="col-md-4" >
			<div class="card-body">
				<h5 class="card-title">Mitshubitshi Pajero Sport Dakar</h5>
				<p class="card-text">Tahun Rilis : 2023</p>
                <p class="card-text">Nama Penyewa : Muhammad Abdullah</p>
                <p class="card-text">Lama Sewa : 1 Hari</p>
				<p class="card-text"><small class="text-muted">Sewa Selesai</small></p>
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