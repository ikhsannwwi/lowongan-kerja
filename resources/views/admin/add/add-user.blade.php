@extends('admin.layout.header')

@section('title')
    Add Data Lowongan Kerja
@endsection

@section('content')
<main id="main" class="main">

      <div class="pagetitle">
        <h1>Add Data User</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/harga-jual">Data User</a></li>
            <li class="breadcrumb-item active">Add Data User</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    
    
    
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form User</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/admin-user/insert-user" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Email</label>
                          <input type="email" name="email" placeholder="Masukan Email " class="form-control @error('email') is-invalid @enderror" id="inputName5">
                          @error('email')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Username</label>
                          <input type="text" name="name" placeholder="Masukan Username " class="form-control @error('name') is-invalid @enderror" id="inputName5">
                          @error('name')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Password</label>
                          <input type="password" name="password" placeholder="Masukan Password " class="form-control @error('password') is-invalid @enderror" id="inputName5">
                          @error('password')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Foto</label>
                          <input type="file" name="foto" placeholder="Masukan Foto " class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                          @error('foto')
                            <span class="invalid-feedback d-block">{{$message}}</span>
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

