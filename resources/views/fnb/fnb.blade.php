@extends('master')
@section('title','| food & beverages')
@section('subtitle','Food and Beverages')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Foods And Beverages</h1>
		<p class="lead">All you need about Foods and Beverages is here!</p>
	</div>
</div>
{{-- card --}}
<div class="container-md container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 18rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center">Card title</h5>
					<hr>
					<p class="card-text">08:00 - 22:00 <br>
						instagram <br>
						089887889778899 <br>
						Address</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 18rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title text-center">Name</h5>
					<hr>
					<p class="card-text">08:00 - 22:00 <br>
						instagram <br>
						089887889778899 <br>
						Address</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 18rem;">
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
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Footer --}}
<footer>
<div class="container-fluid">
	<div class="row row-footer ">
		<div class="col-lg-2 mb-4 mb-md-0 text-center text-md-left">
			<h2>Guidekrw</h2>
		</div>
		<div class="col-md-7">
			<h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, odio.</h5>
			<hr>
			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum error quibusdam laboriosam illo perferendis odio tempore eius doloremque in impedit.
			</p>
		</div>
		<div class="col-md-3">
			<h5>Lorem ipsum dolor sit.</h5>
			<hr>
			<p>Lorem</p>
			<p>ipsum.</p>
		</div>
	</div>
</div>
</footer>
@endsection

@push('mycss')
		<link rel="stylesheet" href="{{ asset('assets/css/fnb.css') }}">
@endpush