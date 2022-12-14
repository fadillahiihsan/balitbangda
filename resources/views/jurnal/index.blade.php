<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link href="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/favicon.png" rel="icon">
    <title>Dashboard - Balitbangda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="{{ asset ('/tema/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 10px;
        }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset ('/tema/css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard">Balitbangda</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/berita">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/galeri">
              <span data-feather="image" class="align-text-bottom"></span>
              Galeri
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="jurnal">
              <span data-feather="file" class="align-text-bottom"></span>
              Jurnal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/peneliti">
              <span data-feather="user" class="align-text-bottom"></span>
              Peneliti
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/" target="_blank">
              <span data-feather="chrome" class="align-text-bottom"></span>
              Lihat Website
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">
              <span data-feather="log-out" class="align-text-bottom"></span>
              Log Out
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Jurnal</h1>
      </div>
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('jurnal.create') }}" class="btn btn-md btn-success mb-3">TAMBAH JURNAL</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">PENERBIT</th>
                                <th scope="col">NO ISSN/ISBN</th>
                                <th scope="col">TAHUN TERBIT</th>
                                <th scope="col">DESKRIPSI FISIK</th>
                                <th scope="col">DESKRIPSI</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($jurnals as $jurnal)
                                <tr>
                                    <td>{{ $jurnal->id }}</td>

                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/images/').$jurnal->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $jurnal->title }}</td>
                                    <td>{{ $jurnal->penerbit }}</td>
                                    <td>{{ $jurnal->no }}</td>
                                    <td>{{ $jurnal->tahun }}</td>
                                    <td>{{ $jurnal->deskripsi }}</td>
                                    <td>{!! $jurnal->content !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jurnal.destroy', $jurnal->id) }}" method="POST">
                                            <a href="{{ route('jurnal.edit', $jurnal->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data berita belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $jurnals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset ('/tema/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="tema/js/dashboard.js"></script>
  </body>
</html>
