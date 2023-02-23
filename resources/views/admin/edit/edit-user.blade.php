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
                        <div class="row">
                            <div class="col-lg-10">
                              <h5 class="card-title">Form User</h5>
                            </div>
                            <div class="col-lg-2">
                              <a href="/admin-user/add-user" type="button" class="btn  mt-lg-3">
                                <i class="bx bxs-duplicate bx-sm"></i>
                              </a>
                              <a href="#" data-id="{{$data->id}}" data-title="{{$data->name}}"  type="button" class="btn  mt-lg-3 delete">
                                <i class="bx bxs-trash-alt bx-sm"></i>
                              </a>
                            </div>
                          </div>
        
                      <!-- Multi Columns Form -->
                      <form action="/admin-user/update-user/{{$data->id}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Email</label>
                          <input type="email" value="{{$data->email}}" name="email" placeholder="Masukan Email " class="form-control @error('email') is-invalid @enderror" id="inputName5">
                          @error('email')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Username</label>
                          <input type="text" value="{{$data->name}}" name="name" placeholder="Masukan Username " class="form-control @error('name') is-invalid @enderror" id="inputName5">
                          @error('name')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputName5" value="{{$data->foto}}" class="form-label">Foto</label>
                            <input type="file" name="foto" placeholder="Masukan Foto " class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                            @error('foto')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 text-center">
                          <img width="150px" src="{{asset('images/user/'.$data->foto)}}" alt="{{$data->foto}}">
                        </div>
                        
                        
                        
                        
                        
                        
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                          <a href="/admin-user/edit-user-password/{{$data->id}}" class="btn btn-success">Edit Password</a>
                        </div>
                      </form><!-- End Multi Columns Form -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
</main> <!-- end main-->
@push('script')

    <script>
      $('.delete').click(function () {
          var id = $(this).attr('data-id');
          var title = $(this).attr('data-title');
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
          swalWithBootstrapButtons.fire({
            title: 'Yakin?',
            text: "Kamu akan menghapus data User dengan Nama " + title + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "/admin-user/delete-user/" + id + ""
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Data '+ title +' has been deleted.',
                'success'
              )
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelled',
                'Data '+ nama +' is safe :)',
                'error'
              )
            }
          })
          
      });
    </script>
    @endpush
@endsection

