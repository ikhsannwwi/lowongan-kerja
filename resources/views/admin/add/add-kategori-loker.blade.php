@extends('admin.layout.header')

@section('title')
    Add Data Kategori Lowongan Kerja
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Kategori Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/administrator">Dashboard</a></li>
            <li class="breadcrumb-item">Kategori Lowongan Kerja</li>
            <li class="breadcrumb-item active">Add Data Kategori Lowongan Kerja</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Form Kategori Lowongan Kerja</h5>
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-kategori-loker/insert-kategori-loker" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                      <label for="inputName5" class="form-label">Kategori</label>
                      <input type="text" name="kategori" class="form-control @if('kategori') is-invalid @enderror" id="inputName5">
                      @if('kategori') 
                      <span class="invalid-feedback d-block">Data tidak boleh kosong</span>
                      @enderror
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