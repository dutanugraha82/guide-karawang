<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>input-data-fnb</title>
  </head>
  <style>
      .bg-body{
          background-image: url('../assets/img/bg1.jpg');
          background-repeat: repeat;
      }
      .mt-card{
          margin-top: 8rem;
      }

      .card-header{
          border: 4px;
      }
  </style>
  <body class="bg-body">
    <div class="container">
    <div class="card mx-auto mt-card" style="max-width: 750px">
        <div class="card-header text-center" style="background-color: white; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size:25px;color:black;">
          Input Data FNB
        </div>
        <div class="card-body">
            <form action="">

                <label for="namaTempat">Name</label>
                <input type="text" class="form-control mb-3" id="namaTempat" name="name" required autofocus>

                <label for="alamatTempat">Address</label>
                <input type="text" class="form-control mb-3" id="alamatTempat" name="address" required>

                <label for="contactTempat">Contact</label>
                <input type="text" class="form-control mb-3" id="contactTempat">

                <a href="#" class="btn btn-primary" style="width: 130px; font-size:15px; font-family:Verdana, Geneva, Tahoma, sans-serif">Submit</a>

            </form>
        </div>
      </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>