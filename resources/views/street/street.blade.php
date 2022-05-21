@extends('master')
@section('title','| street foods')
@section('subtitle','Street Foods')

@section('content')
    <div class="container content-mt">
        <div class="row">
            <div class="col-lg">
                <div class="media">
                    <img src="{{ asset('assets/img/street1.jpeg') }}" class="mr-3" alt="..." style="max-width: 190px">
                    <div class="media-body">
                      <h5 class="mt-0">Sate Kelinci Klari</h5>
                      <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                      <a href="#">
                          <p class="text-right"><small>Read More</small></p>
                      </a>
                    </div>
                  </div>
            </div>

            <div class="col-lg mt-4 mt-lg-0">
                <div class="media">
                    <img src="{{ asset('assets/img/street1.jpeg') }}" class="mr-3" alt="..." style="max-width: 190px">
                    <div class="media-body">
                      <h5 class="mt-0">Nasi Uduk Tuparev</h5>
                      <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                      <a href="#">
                          <p class="text-right"><small>Read More</small></p>
                      </a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

@push('mycss')
<link rel="stylesheet" href="{{ asset('assets/css/street.css') }}">
@endpush