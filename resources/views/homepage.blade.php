@extends('layouts/template')


@section('judul')
Badan Penelitan dan Pengembangan Daerah
@endsection


@section('hero')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Selamat Datang disitus Balitbangda Provinsi Kalimantan Selatan</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Jl. Dharma Praja I, Komplek Perkantoran Pemerintah Provinsi Kalimantan Selatan Banjarbaru</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Lebih Lanjut</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/assets/images/awal.jpg" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->
@endsection

@section('main')
 <!-- ======= About Section ======= -->
 <section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        <h3>Tentang Kami</h3>
        <h2>Badan Penelitian dan Pengembangan Daerah Provinsi Kalimantan Selatan</h2>
        <p>
        Adalah Perangkat Daerah yang melaksanakan fungsi penelitian dan pengembangan di bidang pemerintahan di daerah provinsi dan kabupaten/kota berdasarkan peraturan perUndang-Undangan.
        </p>
        <div class="text-center text-lg-start">
          <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Beranda</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="https://balitbangda.kalselprov.go.id/wp-content/uploads/photo-gallery/IMG_3719.JPG" class="img-fluid" alt="">
    </div>

  </div>
</div>

</section><!-- End About Section -->


<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Berita</h2>
    <p>Berita Terkini</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="http://balitbangda.kalselprov.go.id/wp-content/uploads/2022/01/Menerima-Tamu-dari-DPRD-Kabupaten-Kotabaru-Cover.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Kamis, 27 Januari 2022</span>
        <h3 class="post-title">Menerima Tamu dari DPRD Kabupaten Kotabaru</h3>
        <a href="/berita" class="readmore stretched-link mt-auto"><span>Baca Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="http://balitbangda.kalselprov.go.id/wp-content/uploads/2021/11/Ekspose-Akhir-Kajian-Penyusunan-Dokumen-BLUD-1.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Kamis, 4 November 2021</span>
        <h3 class="post-title">Ekspose Akhir Kajian Penyusunan Dokumen Blud</h3>
        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="http://balitbangda.kalselprov.go.id/wp-content/uploads/2021/10/Sosialisasi-Nilai-nilai-Dasar-ASN-Cover-2.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Senin, 25 Oktober 2021</span>
        <h3 class="post-title">Kegiatan Sosialisasi Nilai-Nilai Dasar ASN</h3>
        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Baca Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Galeri</h2>
    <p>Galeri Kami</p>
  </header>

  <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
      </ul>
    </div>
  </div> -->

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-10.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-11.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-12.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-12.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-13.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-13.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-14.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-14.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-15.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-15.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-16.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-16.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-17.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-17.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="assets/img/portfolio/portfolio-18.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/portfolio-18.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- End Portfolio Section -->

 <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Kontak</h2>
    <p>Kontak Kami</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Alamat</h3>
            <p>Jl. Trikora Komplek <br>
                Perkantoran Pemerintah<br>
                Provinsi Kalimantan Selatan <br>
                Banjarbaru<br></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Telepon</h3>
            <p>+62 6969 6969<br>+62 7211 7211</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p>kalselbalitbangda@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-clock"></i>
            <h3>Jam Kerja</h3>
            <p>Senin - Jumat<br>9:00 WITA - 17:00 WITA</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Kirim Pesan</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->
@endsection