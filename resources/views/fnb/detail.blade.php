@extends('master')
@section('content')

<style>
  .title span{
    font-size: 100px;
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

  <div class="container title">
    <h1 class="text-left mt-2"><span class="big">Salapan</span><br>Djati</h1>
    <hr>
  </div>

  <div class="container mt-2">
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
  </div>
@endsection