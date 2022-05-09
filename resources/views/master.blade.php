<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fnb.css') }}">

  {{-- Style Footer --}}
    <style>
      footer {
        padding: 35px;
        color: white;
        background-color: black ;
        margin-top: 100px;
      }
    </style>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    @stack('mycss')

    <title>{{ config('app.name') }} @yield('title')</title>
  </head>
  <body>
    @include('navbar')
    @yield('content')

    {{-- Start Footer --}}
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
    {{-- End footer --}}
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>