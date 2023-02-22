@extends('admin.layout.header')

@section('title')
    Kategori Lowongan Kerja - 
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kategori Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Lowongan Kerja</li>
            <li class="breadcrumb-item active">Kategori Lowongan Kerja</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11 ">
                              <h5 class="card-title">Data Kategori Lowongan Kerja</h5>
                            </div>
                            <div class="col-lg-1 ">
                              <a href="/admin-kategori-loker/add-kategori-loker" type="button" class="btn  mt-lg-3">
                                <i class="bx bxs-duplicate bx-sm"></i>
                              </a>
                            </div>
                          </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="overflow__x">
                        <table class="table table-hover" id="table1">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Jenis Produk</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                <tr>
                                  <th scope="row"><a href="/admin-kategori-loker/edit-kategori-loker/{{$row->id}}">{{$row->id}}</a></th>
                                  <td>{{$row->kategori}}</td>
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