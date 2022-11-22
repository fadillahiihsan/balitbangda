@extends('layouts.template')

@section('judul')
Berita
@endsection

@section('main')
<section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
  <br/>
    <h2>Berita</h2>
    <p>Berita Terkini</p>
  </header>

  <div class="row">

    <div class="col-md-5">
      <div class="post-box">
        <div class="post-img"><img src="http://balitbangda.kalselprov.go.id/wp-content/uploads/2022/01/Menerima-Tamu-dari-DPRD-Kabupaten-Kotabaru-Cover.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Kamis, 27 Januari 2022</span>
        <h3 class="post-title">Menerima Tamu dari DPRD Kabupaten Kotabaru</h3>
        <!-- <a href="/detail-berita" class="readmore stretched-link mt-auto"><span>Baca Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a> -->
      </div>
    </div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->
@endsection