@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
	<div class="col-lg">
		<div class="jumbotron">
		@role('admin|petugas')
		  <h1 class="display-4"><i class="bi bi-person-video"></i> Selamat Datang, {{ Universe::petugas()->nama_petugas }}!</h1>
		@endrole

		@role('siswa')
		  <h1 class="display-4"><i class="bi bi-person-fill"></i> Selamat Datang, {{ Universe::siswa()->nama_siswa }}!</h1>
		@endrole
		  <p class="lead">Selamat datang di WEB SPP</p>
		  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/img1.jpeg" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/img2.jpeg" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/img3.jpeg" class="d-block w-100" alt="...">
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>
		  <hr class="my-4">
		</div>
	</div>
</div>
@endsection