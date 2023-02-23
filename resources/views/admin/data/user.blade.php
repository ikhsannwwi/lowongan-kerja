
@extends('admin.layout.header')

@section('title')
    User 
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>User</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">User</li>
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
                              <h5 class="card-title">Data User</h5>
                            </div>
                            <div class="col-lg-1 ">
                              <a href="/admin-user/add-user" type="button" class="btn  mt-lg-3">
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">foto</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $row)
                                  <tr>
                                    <th scope="row"><a href="/admin-user/edit-user/{{$row->id}}">{{$row->id}}</a></th>
                                    <td>{{$row->name}}</td>                       
                                    <td>{{$row->email}}</td>                       
                                    <td>{{$row->password}}</td>
                                    <td><img width="100px" src="{{asset('images/user/'.$row->foto)}}" alt="{{$row->foto}}"></td>                       
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
