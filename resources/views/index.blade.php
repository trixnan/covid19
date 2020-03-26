<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"/>
    <title>Persebaran Corona di Indonesia</title>
  </head>
  <body>
    <h4 class="text-center">Persebaran Corona di Wilayah Indonesia</h4>

<div class="container">
  <div class="d-flex justify-content-end">
      <h5>{{ tanggal_indonesia(date('Y-m-d')) }}</h5>
  </div><br>
  @foreach($data2 as $d)
<div class="row mb-3 pb-3">
   <div class="col-sm-4 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-warning">
            <i class="fas fa-plus-circle display-3"></i>
            <span class="display-3 float-right">{{ $d['positif'] }}</span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=jabatan" class="nav-link text-white">Positif</a>
         </li>
      </ul>
   </div>
   <div class="col-sm-4 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-success">
            <i class="fas fa-check-circle display-3"></i>
            <span class="display-3 float-right">{{ $d['sembuh'] }}</span>
         </li>
         <li class="list-group-item bg-success">
            <a href="?hal=jabatan" class="nav-link text-white">Sembuh</a>
         </li>
      </ul>
   </div>
   <div class="col-sm-4 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-danger">
            <i class="fas fa-times-circle display-3"></i>
            <span class="display-3 float-right">{{ $d['meninggal'] }}</span>
         </li>
         <li class="list-group-item bg-danger">
            <a href="?hal=jabatan" class="nav-link text-white">Meninggal</a>
         </li>
      </ul>
   </div>
</div>
  @endforeach
  <div class="table-responsive">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Positif</th>
      <th scope="col">Sembuh</th>
      <th scope="col">Positif</th>
      <th scope="col">Meninggal</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item['attributes']['Provinsi'] }}</td>
      <td>{{ $item['attributes']['Kasus_Posi'] }}</td>
      <td>{{ $item['attributes']['Kasus_Semb'] }}</td>
      <td>{{ $item['attributes']['Kasus_Meni'] }}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
