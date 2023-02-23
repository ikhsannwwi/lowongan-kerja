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
                      <form action="/admin-user/update-user-password/{{$data->id}}" method="POST" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        <div class="col12">
                          <h3>{{$data->email}}</h3>
                        </div>
                        <div class="col12">
                          <label for="inputName5" class="form-label">Password</label>
                          <input type="password" name="password" placeholder="Masukan Password " class="form-control @error('password') is-invalid @enderror" id="inputName5">
                          @error('password')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        
                        
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                          <a href="/admin-user" class="btn btn-success">Back to User</a>
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

