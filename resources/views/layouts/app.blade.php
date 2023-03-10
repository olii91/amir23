<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/css/style.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">


    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="{{ url('') }}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
        <a class="nav-item nav-link btn btn-primary text-white tombol" href="{{ route('login') }}">Login</a>
      </div>
    </div>
  </div>
</nav>
<!-- akhir Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4"> Selamat datang di <span><br>Website Pengaduan</span> <br> Masyarakat</h2>
    <a href="#" class="btn btn-info btn-lg tombol">Selengkapnya</a>
  </div>
</div>
<!-- akhir Jumbotron -->

<!-- container -->
<div class="container">
  
  <!-- info panel -->
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-sm">
          <img src="css/img/employee.png" alt="Employee" class="img-fluid float-left">
          <h4>24 Hours</h4>
          <p>Siap melayani anda dimanapun dan kapanpun </p>
        </div>
        <div class="col-lg">
          <img src="css/img/security.png" alt="Security" class="img-fluid float-left">
          <h4>Keamanan</h4>
          <p>Dijamin Data Anda Terpercaya</p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir info panel -->

  <!-- Testimonial -->
  <section class="testimonial">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p>"Kami Ingin Menciptakan Lingkungan Yang Aman Dan Tentram"</p>
      </div>
    </div>
    <div class="row justify-content-center info-text">
      <div class="col-lg text-center">
        <h5>Adriansyah amir</h5>
        <p>Dirjen PT MENCARI CINTA SEJATI</p>
      </div>
    </div>
  </section>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
