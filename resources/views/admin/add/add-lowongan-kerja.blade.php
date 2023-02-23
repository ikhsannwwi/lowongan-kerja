@extends('admin.layout.header')

@section('title')
    Add Data Lowongan Kerja
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/administrator">Dashboard</a></li>
            <li class="breadcrumb-item"> Lowongan Kerja</li>
            <li class="breadcrumb-item active">Add Data Lowongan Kerja</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Form Lowongan Kerja</h5>
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-lowongan-kerja/insert-lowongan-kerja" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Nama Perusahaan</label>
                      <input placeholder="Masukan Nama Perusahaan" type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="inputName5">
                      @error('nama_perusahaan') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Email Perusahaan</label>
                      <input placeholder="Masukan Email Perusahaan" type="text" name="email_perusahaan" class="form-control @error('email_perusahaan') is-invalid @enderror" id="inputName5">
                      @error('email_perusahaan') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-3 col-12">
                      <label for="inputName5" class="form-label">Foto</label>
                      <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                      @error('foto') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-3 col-12">
                      <label for="inputName5" class="form-label">Tanggal</label>
                      <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputName5">
                      @error('tanggal') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="inputHarga-jual1" class="form-label">Kategori</label>
                        <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" aria-label="Default select example">
                          <option value="" selected>Open this select menu</option>
                          @foreach ($kategori as $row)
                          <option value="{{$row->id}}">{{$row->kategori}}</option>
                          @endforeach
                        </select>
                        @error('kategori_id')
                        <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                      </div>
                      <div class="row mt-3">
                        <label for="inputPassword" class="col-sm-1 col-form-label">Kualifikasi</label>
                        <div class="col-sm-11">
                          <textarea placeholder="Masukan Kualifikasi Perusahaan" class="form-control @error('kualifikasi') is-invalid @enderror" name="kualifikasi" style="height: 100px"></textarea>
                          @error('kualifikasi')
                          <span class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        </div>
                      </div>
                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End Multi Columns Form -->
    
                </div>
              </div>
        </div>
    </div>
</section>
</main> <!-- end main-->
@endsection