<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jurnal - Balitbangda</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Favicons -->
  <link href="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/favicon.png" rel="icon">
  <link href="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('tema/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('tema/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('tema/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('tema/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('tema/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset ('tema/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset ('tema/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset ('/tema/img/logo-kalsel.png') }}" alt="">
        <span>BALITBANGDA</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('profilkaban') }}">Data Kepala Badan</a></li>
              <li><a href="{{ url('/tentang-kami') }}">Mengenal Balitbangda Kalsel</a></li>
              <li><a href="{{ url('/visi-misi') }}">Visi Misi</a></li>
              <li><a href="{{ url('/tugas-pokok-dan-fungsi') }}">Tupoksi</a></li>
              <li><a href="{{ url('/data-peneliti') }}">Peneliti</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/#berita') }}">Berita</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#portfolio') }}">Galeri</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Kontak</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#jurnal') }}">Jurnal & Laporan</a></li>
            <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br>

  @foreach ($jurnals as $jurnal)

  <section>
  <div class="blog-detail">
    <div class="container-fluid blog-detail-content">
        <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs"></div>
            <div class="col-md-8">
                <div class="height40"></div>                    
                <div><img src="{{ Storage::url('public/images/').$jurnal->image }}" class="rounded" style="width: 250px" ></div>
                <div>Judul&nbsp;&nbsp;&nbsp;: <strong>{{ $jurnal->title }}</strong></div>
                <div>No ISSN/ISBN&nbsp;&nbsp;&nbsp;: {{ $jurnal->no }}</div>
                <div>Tahun terbit&nbsp;&nbsp;&nbsp;&nbsp;: {{ $jurnal->tahun }}</div>
                <div>Deskripsi fisik&nbsp;&nbsp;&nbsp;: {{ $jurnal->deskripsi }}</div>
                <br>
                <div class="btr bt-content">{!! $jurnal->content !!}</div>
            </div>
        </div>
    </div>
  </div>
</section>

  @endforeach


<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="{{ asset ('/tema/img/logo-kalsel.png') }}" alt="">
              <span>BALITBANGDA</span>
            </a>
            <p>Badan Penelitan dan Pengembangan Daerah</p>
            <p>Provinsi Kalimantan Selatan</p>
            <p>Jl. Dharma Praja I, Komplek Perkantoran Pemerintah Provinsi Kalimantan Selatan Banjarbaru</p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>MEDIA SOSIAL</h4>
            <ul>
              <li><i class="bi bi-facebook" style="font-size: 20px;color:blue;"></i> <a href="#">Facebook</a></li>
              <li><i class="bi bi-twitter" style="font-size: 20px;color:deepskyblue"></i> <a href="#">Twitter</a></li>
              <li><i class="bi bi-youtube" style="font-size: 20px;color:red;"></i> <a href="#">Youtube</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>KANTOR BALITBANG KALSEL</h4>
            <p>
            Jl. Dharma Praja I, Komplek Perkantoran Pemerintah Provinsi Kalimantan Selatan Banjarbaru
              <a href="mailto:kalselbalitbangda@gmail.com">kalselbalitbangda@gmail.com</a>
            </p>

          </div>
          <div class="col-lg-2 col-6 footer-widget">
            <a href="https://goo.gl/maps/8UeqAneKowx6Ari67" target="_blank">
            <img src="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/images/map.png" width="180" height="180">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset ('/tema/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset ('/tema/vendor/aos/aos.js') }}"></script>
<script src="{{ asset ('/tema/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('/tema/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset ('/tema/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset ('/tema/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset ('/tema/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset ('/tema/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="tema/js/dashboard.js"></script>

</body>

</html>