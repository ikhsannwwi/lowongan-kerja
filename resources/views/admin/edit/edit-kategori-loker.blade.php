@extends('admin.layout.header')

@section('title')
    Edit Data Kategori Lowongan Kerja
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Kategori Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Kategori Lowongan Kerja</li>
            <li class="breadcrumb-item active">Edit Data Kategori Lowongan Kerja</li>
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
                          <h5 class="card-title">Form Harga Jual</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-harga-jual" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-title="{{$data->kategori}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>
                  
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-kategori-loker/update-kategori-loker/{{$data->id}}" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                      <label for="inputName5" class="form-label">Kategori</label>
                      <input type="text" name="kategori" value="{{$data->kategori}}" class="form-control @if('kategori') is-invalid @enderror" id="inputName5">
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
            text: "Kamu akan menghapus data Kategori Loker dengan Nama " + title + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "/admin-kategori-loker/delete-kategori-loker/" + id + ""
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