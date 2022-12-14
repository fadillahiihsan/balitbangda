<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield ('judul') - Balitbangda</title>
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
              <li><a href="/profilkaban">Data Kepala Badan</a></li>
              <li><a href="/tentang-kami">Mengenal Balitbangda Kalsel</a></li>
              <li><a href="/visi-misi">Visi Misi</a></li>
              <li><a href="/tugas-pokok-dan-fungsi">Tupoksi</a></li>
              <li><a href="/data-peneliti">Peneliti</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="#jurnal">Jurnal & Laporan</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#recent-blog-posts">Berita</a></li>
              <li><a href="#contact">Kontak</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Pernik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Penghargaan</a></li>
              <li><a href="#">Kerja Sama</a></li>
              <li><a href="#">Konsorium</a></li>
              <li><a href="#">Forum Litbang</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Mitra</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Dewan Riset</a></li>
              <li><a href="#">Bappeda Kabupaten/Kota di Kalsel</a></li>
              <li><a href="#">Litbang Kementrian</a></li>
              <li><a href="#">Lemit Perguruan Tinggi</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Sekretariat</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Sekretariat</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Artikel</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Serba-Serbi</a></li>
                </ul>
                <li class="dropdown"><a href="#"><span>Bxidang Ekonomi, SDA dan Teknologi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Hasil Penelitian dan Pengembangan</a></li>
                  <li><a href="#">Artikel</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Serba-Serbi</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Bidang Pemerintahan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Hasil Penelitian dan Pengembangan</a></li>
                  <li><a href="#">Artikel</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Serba-Serbi</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Bidang Sosial Budaya</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Hasil Penelitian dan Pengembangan</a></li>
                  <li><a href="#">Artikel</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Serba-Serbi</a></li>
                  <li><a href="#">Jarit Bidang Pendidikan</a></li>
                  <li><a href="#">Jarit Bidang Kesehatan</a></li>
                </ul>
              </li>
            </ul>
          </li> -->
            
            <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 @yield('hero')

  <main id="main">
   
  @yield('main')

  </main><!-- End #main -->

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
              <li><i class="bi bi-facebook" style="font-size: 20px;color:blue;"></i> <a href="/">Facebook</a></li>
              <li><i class="bi bi-twitter" style="font-size: 20px;color:deepskyblue"></i> <a href="/">Twitter</a></li>
              <li><i class="bi bi-instagram" style="font-size: 20px;"></i> <a href="https://www.instagram.com/balitbangdakalsel/" target="_blank">Instagram</a></li>
              <li><i class="bi bi-youtube" style="font-size: 20px;color:red;"></i> <a href="https://www.youtube.com/channel/UC1Dh2etWKKxKqA7kFBIeRPg" target="_blank">Youtube</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>KANTOR BALITBANGDA KALSEL</h4>
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

</body>

</html>