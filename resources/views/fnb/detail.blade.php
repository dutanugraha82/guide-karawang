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
          <h5 class="card-title"><span>salapan</span><br>Djati</h5>
          <hr>
          <p class="card-text"><span>(*)</span> Alamat</p>
          <p class="card-text"><span>(*)</span> Open at 6 amtill 9 pm</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item text-center" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item text-center" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Beverages</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">About</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">

        {{-- Foods Menu Start --}}
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nasi Goreng</td>
                <td>Rp 24,000</td>
                <td>Main Course</td>
              </tr>
              <tr>
                <td>Pisang Keju Alaska</td>
                <td>Rp 25,000</td>
                <td>Snack</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- Foods Menu End --}}

        {{-- Beverages Menu Start --}}
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>V60</td>
                <td>Rp 24,000</td>
                <td>Coffee</td>
              </tr>
              <tr>
                <td>Matcha</td>
                <td>Rp 21,000</td>
                <td>SoftDrink</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- Beverages Menu End --}}

        {{-- About Start --}}
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolor consequuntur animi sint rerum, illo, maxime perferendis iure repellat omnis soluta inventore! Corrupti sunt omnis voluptatem dolores, reiciendis in doloribus?
        </div>
        {{-- About End --}}
      </div>
    </div>
    
  </div>
</div>
@endsection