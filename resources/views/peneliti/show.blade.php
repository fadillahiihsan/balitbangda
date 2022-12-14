@extends('layouts/template')


@section('judul')
Peneliti
@endsection

<link href="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/favicon.png" rel="icon">
<link href="https://balitbangda.kalselprov.go.id/wp-content/themes/balitbangda_red/favicon.png" rel="apple-touch-icon">

<section id="struktur-organisasi" class="struktur-organisasi">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <br>
    <p>Data Peneliti</p>
  </header>
  <div class="row">
  <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th> 
                                <th scope="col">Nama</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Tempat Tanggal Lahir</th>
                                <th scope="col">Pangkat</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Kepakaran</th>
                                <th scope="col">Foto</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($penelitis as $peneliti)
                                <tr>
                                    <td>{{ $peneliti->id }}</td>

                                    <td>{{ $peneliti->nama }}</td>
                                    <td>{{ $peneliti->nip }}</td>
                                    <td>{{ $peneliti->ttl }}</td>
                                    <td>{{ $peneliti->pangkat }}</td>
                                    <td>{{ $peneliti->jabatan }}</td>
                                    <td>{{ $peneliti->kepakaran }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/images/').$peneliti->image }}" style="width: 50px">
                                    </td>
                              @endforeach
                            </tbody>
                          </table>  
</section>