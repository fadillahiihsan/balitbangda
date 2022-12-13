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
          <a href="tentang-kami" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Detail</span>
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

  @foreach($beritas as $berita)

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="{{ Storage::url('public/images/').$berita->image }}" class="img-fluid" alt=""></div>
        <span class="post-date">{{ $berita->tanggal }}</span>
        <h3 class="post-title">{{ $berita->title }}</h3>
        <a href="{{ route('detail-berita.show', $berita->id) }}" class="readmore stretched-link mt-auto"><span>Baca Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  @endforeach

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

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

  @foreach ($galeris as $galeri)

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{ Storage::url('public/images/').$galeri->image }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>{{ $galeri->title }}</h4>
          <div class="portfolio-links">
            <a href="{{ Storage::url('public/images/').$galeri->image }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{ $galeri->title }}"><i class="bi bi-eye"></i></a>
          </div>
        </div>
      </div>
    </div>

  @endforeach
  </div>

</div>

</section><!-- End Portofolio Section -->

<section id="jurnal" class="jurnal">

<style>

img {
  float: left;
  margin-right: 15px;
}

</style>

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Jurnal & Laporan</h2>
    <p>Jurnal & Laporan</p>
  </header>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

  @foreach ($jurnals as $jurnal)

  <div class="row">
    <ul>
                <div><img src="{{ Storage::url('public/images/').$jurnal->image }}" class="rounded" style="width: 150px" ></div>
                <div>Judul&nbsp;&nbsp;&nbsp;: <strong>{{ $jurnal->title }}</strong></div>
                <div>No ISSN/ISBN&nbsp;&nbsp;&nbsp;: {{ $jurnal->no }}</div>
                <div>Tahun terbit&nbsp;&nbsp;&nbsp;&nbsp;: {{ $jurnal->tahun }}</div>
                <div>deskripsi fisik&nbsp;&nbsp;&nbsp;: {{ $jurnal->deskripsi }}</div>
                <div><a href="{{ route('detail-jurnal.show', $jurnal->id) }}"><strong>Detail&raquo;&raquo;</strong></a></div>
            </div>
            </ul>
          </div>
          
          @endforeach
</div>

</section><!-- End Jurnal Section -->

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
            <p>Jl. Dharma Praja I, Komplek Perkantoran Pemerintah Provinsi Kalimantan Selatan Banjarbaru</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Telepon</h3>
            <p>05116749271</p>
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
            <p>Senin - Jumat<br>08:00 WITA - 16:30 WITA</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="#" method="post" class="php-email-form">
        
        @csrf

        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" id="name" class="form-control" placeholder="Nama" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" id="message" rows="6" placeholder="Pesan" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <button type="submit" value="Send Message">Kirim Pesan</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->
@endsection