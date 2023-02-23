@extends('admin.layout.header')

@section('title')
    Edit Data Lowongan Kerja
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Lowongan Kerja</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/administrator">Dashboard</a></li>
            <li class="breadcrumb-item"> Lowongan Kerja</li>
            <li class="breadcrumb-item active">Edit Data Lowongan Kerja</li>
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
                      <h5 class="card-title">Form Lowongan Kerja</h5>
                    </div>
                    <div class="col-lg-2">
                      <a href="/admin-lowongan-kerja/add-lowongan-kerja" type="button" class="btn  mt-lg-3">
                        <i class="bx bxs-duplicate bx-sm"></i>
                      </a>
                      <a href="#" data-id="{{$data->id}}" data-title="{{$data->nama_perusahaan}}"  type="button" class="btn  mt-lg-3 delete">
                        <i class="bx bxs-trash-alt bx-sm"></i>
                      </a>
                    </div>
                  </div>
    
                  <!-- Multi Columns Form -->
                  <form action="/admin-lowongan-kerja/update-lowongan-kerja/{{$data->id}}" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Nama Perusahaan</label>
                      <input placeholder="Masukan Nama Perusahaan" value="{{$data->nama_perusahaan}}" type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="inputName5">
                      @error('nama_perusahaan') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                      <label for="inputName5" class="form-label">Email Perusahaan</label>
                      <input placeholder="Masukan Email Perusahaan" value="{{$data->email_perusahaan}}" type="text" name="email_perusahaan" class="form-control @error('email_perusahaan') is-invalid @enderror" id="inputName5">
                      @error('email_perusahaan') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-1 col-12">
                      <img width="100px" src="{{asset('images/lowongan-kerja/'.$data->foto)}}" alt="{{$data->foto}}">
                    </div>
                    <div class="col-md-2 col-12">
                      <label for="inputName5" class="form-label">Foto</label>
                      <input type="file" name="foto" value="{{$data->foto}}" class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                      @error('foto') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-3 col-12">
                      <label for="inputName5" class="form-label">Tanggal</label>
                      <input type="date" name="tanggal" value="{{$data->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror" id="inputName5">
                      @error('tanggal') 
                      <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="inputHarga-jual1" class="form-label">Kategori</label>
                        <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" aria-label="Default select example">
                          <option value="{{$data->kategori_id}}" selected>{{$data->kategori_loker->kategori}}</option>
                          @foreach ($kategori as $row)
                          <option value="{{$row->id}}">{{$row->kategori}}</option>
                          @endforeach
                        </select>
                        @error('kategori_id')
                        <span class="invalid-feedback d-block">{{$message}}</span>
                      @enderror
                      </div>
                      <div class="row mt-3">
                        <label for="inputPassword" class="col-sm-1 col-form-label">Kualifikasi</label>
                        <div class="col-sm-11">
                          <textarea placeholder="Masukan Kualifikasi Perusahaan" class="form-control @error('kualifikasi') is-invalid @enderror" name="kualifikasi" style="height: 100px">{{$data->kualifikasi}}</textarea>
                          @error('kualifikasi')
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
            text: "Kamu akan menghapus data Lowoongan Kerja dengan Nama Perusahaan " + title + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "/admin-lowongan-kerja/delete-lowongan-kerja/" + id + ""
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