@extends('admin.layout.header')

@section('title')
    Add Data Berita
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Berita</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/administrator">Dashboard</a></li>
            <li class="breadcrumb-item"> Berita</li>
            <li class="breadcrumb-item active">Add Data Berita</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Form Berita</h5>
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-berita/insert-berita" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Judul Berita</label>
                      <input placeholder="Masukan Judul Berita" type="text" name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror" id="inputName5">
                      @error('judul_berita') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Author</label>
                      <input placeholder="Masukan Author" type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="inputName5">
                      @error('author') 
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
                    
                      <div class="row mt-3">
                        <label for="inputPassword" class="col-sm-1 col-form-label">Isi Berita</label>
                        <div class="col-sm-11">
                          <textarea placeholder="Masukan Isi Berita" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" style="height: 100px"></textarea>
                          @error('isi_berita')
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