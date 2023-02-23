@extends('admin.layout.header')

@section('title')
    Berita 
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Berita</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Berita</li>
            <li class="breadcrumb-item active">Berita</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-11 ">
                              <h5 class="card-title">Data Berita</h5>
                            </div>
                            <div class="col-lg-1 ">
                              <a href="/admin-berita/add-berita" type="button" class="btn  mt-lg-3">
                                <i class="bx bxs-duplicate bx-sm"></i>
                              </a>
                            </div>
                          </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="card-body">
                        <table class="table table-hover" id="table1">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Author</th>
                                <th scope="col">Isi Berita</th>
                                <th scope="col">slug</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Tanggal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = 1;
                              @endphp
                                @foreach ($data as $row)
                                <tr>
                                  <th scope="row"><a href="/admin-berita/edit-berita/{{$row->id}}">{{$row->id}}</a></th>
                                  <td>{{$row->judul_berita}}</td>
                                  <td>{{$row->author}}</td>
                                  <td>{{$row->isi_berita}}</td>
                                  <td>{{$row->slug}}</td>
                                  <td>{{$row->tanggal}}</td>
                                  <td><img width="100px" src="{{asset('images/berita/'.$row->foto)}}" alt="{{$row->foto}}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                      </div>
                      <!-- End Table with hoverable rows -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
  </main>
  @push('script')
@if (session()->has('success'))
<script>
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["success"]("{{ Session::get('success') }}")
      @endif
      </script>
    <script>
        @if (session()->has('error'))
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["error"]("{{ Session::get('error') }}")
      @endif
    </script>
@endpush
@endsection