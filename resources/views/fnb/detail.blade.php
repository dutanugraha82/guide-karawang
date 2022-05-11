@extends('master')
@section('content')

<style>
  .card-title span{
    font-size: 4em;
  }

  .card-text {
    color: #8d8d8d;
  }

</style>

<div class="container carousel">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/img/salapanDjatii.jpg') }}" class="d-block w-100 mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/salapanDjatii.jpg') }}" class="d-block w-100 mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/salapanDjatiii.jpg') }}" class="d-block w-100 mx-auto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><span>salapan</span><br>Djatii</h5>
          <hr>
          <p class="card-text"><span>(*)</span> Alamat</p>
          <p class="card-text"><span>(*)</span> Open at 6 amtill 9 pm</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link " aria-current="true" href="#">Foods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="#">Beverages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="true" href="#">About</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
</div>

  {{-- <div class="container sub-menu mt-2">
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Foods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Beverages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
  </div> --}}
@endsection