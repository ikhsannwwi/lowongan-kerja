@extends('admin.layout.header')

@section('title')
    Edit Data Berita
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Berita</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/administrator">Dashboard</a></li>
            <li class="breadcrumb-item"> Berita</li>
            <li class="breadcrumb-item active">Edit Data Berita</li>
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
                          <h5 class="card-title">Form Berita</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/admin-berita/add-berita" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-title="{{$data->judul_berita}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-berita/update-berita/{{$data->id}}" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Judul Berita</label>
                      <input placeholder="Masukan Judul Berita" value="{{$data->judul_berita}}" type="text" name="judul_berita" class="form-control @error('judul_berita') is-invalid @enderror" id="inputName5">
                      @error('judul_berita') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Author</label>
                      <input placeholder="Masukan Author" value="{{$data->author}}" type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="inputName5">
                      @error('author') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-2 col-4 text-center">
                        <img width="150px" src="{{asset('images/berita/'.$data->foto)}}" alt="{{$data->foto}}">
                    </div>
                    <div class="col-md-5 col-8">
                      <label for="inputName5" class="form-label">Foto</label>
                      <input type="file" name="foto" value="{{$data->foto}}" class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                      @error('foto') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-5 col-12">
                      <label for="inputName5" class="form-label">Tanggal</label>
                      <input type="date" name="tanggal" value="{{$data->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror" id="inputName5">
                      @error('tanggal') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    
                      <div class="row mt-3">
                        <label for="inputPassword" class="col-sm-1 col-form-label">Isi Berita</label>
                        <div class="col-sm-11">
                          <textarea placeholder="Masukan Isi Berita" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" style="height: 100px">{{$data->isi_berita}}</textarea>
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
            text: "Kamu akan menghapus data Berita dengan Judul " + title + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "/admin-berita/delete-berita/" + id + ""
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