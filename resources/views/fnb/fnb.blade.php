@extends('master')
@section('title','| food & beverages')
@section('subtitle','Food and Beverages')

@section('content')
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Fluid jumbotron</h1>
		<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
</div>
{{-- card --}}
<div class="container">
	<div class="row">
		<div class="col-sm-4 mr-sm-4 mr-md-0">
			<div class="card" style="width: 18rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<hr>
					<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perferendis magni quisquam laboriosam molestiae tempora libero nobis. Totam ipsa nihil ullam tenetur, iste delectus autem earum dicta beatae nesciunt! Repellendus quisquam molestiae accusamus officiis doloribus sint perferendis id, saepe mollitia, pariatur earum culpa nam sit dolor consequuntur nobis, ad ducimus.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card" style="width: 18rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<hr>
					<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perferendis magni quisquam laboriosam molestiae tempora libero nobis. Totam ipsa nihil ullam tenetur, iste delectus autem earum dicta beatae nesciunt! Repellendus quisquam molestiae accusamus officiis doloribus sint perferendis id, saepe mollitia, pariatur earum culpa nam sit dolor consequuntur nobis, ad ducimus.</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card" style="width: 18rem;">
				<img src="{{ asset('assets/img/tes.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<hr>
					<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perferendis magni quisquam laboriosam molestiae tempora libero nobis. Totam ipsa nihil ullam tenetur, iste delectus autem earum dicta beatae nesciunt! Repellendus quisquam molestiae accusamus officiis doloribus sint perferendis id, saepe mollitia, pariatur earum culpa nam sit dolor consequuntur nobis, ad ducimus.</p>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Footer --}}
<footer>
<div class="container-fluid text-center text-md-left">
	<div class="row row-footer ">
		<div class="col-md-2">
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