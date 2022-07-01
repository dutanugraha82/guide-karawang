@extends('master')
@section('title','| food & beverages')
@section('subtitle','Food and Beverages')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4 text-white text-center text-md-left"><b>Foods And Beverages</b></h1>
		<p class="lead text-white"><b> All you need about Foods and Beverages is here!</b></p>
	</div>
</div>
{{-- card --}}
<div class="container-md container-fluid">
	<div class="row">
		<div class="col">
			<div class="card mx-auto" style="width: 16rem;">
				<img src="{{ asset('assets/img/logoSalapanDjati.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center">Salapan Djati</h5>
					<hr>
					<p class="card-text">08:00 - 22:00 <br>
						instagram <br>
						089887889778899 <br>
						Address
					</p>
					<a href="/detail/food&beverages" class="btn btn-dark d-block"> Detail </a> 
					{{-- <a href="/detail/fnb" class="btn btn-dark d-block"> Detail </a>  --}}
					{{-- Nanti urlnya disesuaikan, ini hanya contoh untuk direct ke salah satu tempat untuk detailnya --}}
					{{-- Oke Dut, Nice  --}}

				</div>
				
			</div>
		</div>
		<div class="col">
			<div class="card mx-auto my-4 my-sm-0" style="width: 16rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center">Name</h5>
					<hr>
					<p class="card-text">08:00 - 22:00 <br>
						instagram <br>
						089887889778899 <br>
						Address
					</p>
					<a href="#" class="btn btn-dark d-block"> Detail </a>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card mx-auto my-4 my-lg-0" style="width: 16rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center">Card title</h5>
					<hr>
					<p class="card-text">
						08:00 - 22:00 <br>
						instagram <br>
						089887889778899 <br>
						Address
					 </p>
					 <a href="#" class="btn btn-dark d-block"> Detail </a>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Footer --}}

@endsection

@push('mycss')
		
@endpush