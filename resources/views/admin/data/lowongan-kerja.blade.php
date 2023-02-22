@extends('admin.layout.header')

@section('title')
    Lowongan Kerja - 
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Lowongan Kerja</li>
            <li class="breadcrumb-item active">Lowongan Kerja</li>
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
                              <h5 class="card-title">Data Lowongan Kerja</h5>
                            </div>
                            <div class="col-lg-1 ">
                              <a href="/admin-lowongan-kerja/add-lowongan-kerja" type="button" class="btn  mt-lg-3">
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
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Email Perusahaan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Kualifikasi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Foto</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = 1;
                              @endphp
                                @foreach ($data as $row)
                                <tr>
                                  <th scope="row"><a href="/admin-lowongan-kerja/edit-lowongan-kerja/{{$row->id}}">{{$row->id}}</a></th>
                                  <td>{{$row->nama_perusahaan}}</td>
                                  <td>{{$row->email_perusahaan}}</td>
                                  <td>{{$row->kategori_loker->kategori}}</td>
                                  <td>{{$row->kualifikasi}}</td>
                                  <td>{{$row->tanggal}}</td>
                                  <td><img src="{{asset('images/lowongan-kerja/.')}}" alt=""></td>
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