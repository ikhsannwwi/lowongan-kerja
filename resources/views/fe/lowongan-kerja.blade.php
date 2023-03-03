@extends('fe.layout.header')

@section('title')
    Lowongan Kerja
@endsection
@push('css')
    <style>
        
.shadow-sm,
.shadow-sm--on-hover:hover {
    box-shadow: 0 0.125rem 0.25rem rgba(132, 138, 163, 0.1) !important
}
        .gradient-light--lean-left {
    background-image: -webkit-linear-gradient(110deg, #f2f3fa 0%, #fcfdff 100%);
    background-image: -ms-linear-gradient(110deg, #f2f3fa 0%, #fcfdff 100%)
}

.color--heading {
    color: #101f41 !important
}

.color--text {
    color: #4f5464 !important
}

/* ===== Career ===== */
.career-form {
  background-color: #4761FF;
  border-radius: 5px;
  padding: 0 16px;
}

.career-form .form-control {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: #fff;
}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

.career-form .custom-select {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}
.career-form .custom-select option{
    color: #000
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}



.badge-circle {
    border-radius: 50%;
    height: 2.5rem;
    width: 2.5rem;
    font-size: 1rem;
    line-height: 2.5rem;
    padding: 0
}

.text-white {
    color: #fff!important;
}


.background--white,
.bg-white {
    background-color: #fff !important
}

.background--brand,
.background--primary,
.bg-brand,
.bg-primary {
    background-color: #4d5bed !important;
    color: #fff
}

.background--dark,
.bg-dark {
    background: #0c2050 !important;
    color: #939eb8
}

.background--secondary,
.bg-secondary {
    background-color: #939eb8 !important
}

.background--tertiary,
.bg-tertiary {
    background-color: #9779e3 !important
}

.background--danger,
.bg-danger {
    background-color: #f53d55 !important
}

.background--success,
.bg-success {
    background-color: #66df7c !important
}

.background--warning,
.bg-warning {
    background-color: #f6c460 !important
}

.background--warning2,
.bg-warning2 {
    background-color: #f89c59 !important
}

.background--info,
.bg-info {
    background-color: #52bbd3 !important
}

.background--light,
.bg-light {
    background-color: #f6f8fb !important
}

a {
    text-decoration: none !important;
}
    </style>
@endpush
@section('content')
    <section id="sectionJobList" class="section section-job-list gradient-light--lean-left">
      <div class="container">

        <div class="row row-grid justify-content-center">

          {{-- <div class="col-md-8 col-lg-7 col-xl-6 text-center">
            <h2 class="section__title mb-5">Jobs Openings at Fluxo</h2>

            <p>We’re always searching for amazing people to join our team. Take a look at our current openings.</p>

          </div> --}}

          <div class="col-md-10">

            <form action="#" class="career-form my-5">
                <div class="row">
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="input-group position-relative">
                            <input type="text" class="form-control" placeholder="Enter Your Keywords" id="keywords">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="select-container">
                            <select class="custom-select">
                                <option selected="">Location</option>
                                <option value="1">Jaipur</option>
                                <option value="2">Pune</option>
                                <option value="3">Bangalore</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="select-container">
                            <select class="custom-select">
                                <option selected="">Select Job Type</option>
                                <option value="1">Ui designer</option>
                                <option value="2">JS developer</option>
                                <option value="3">Web developer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-3">
                        <button type="button" class="btn btn-lg btn-block btn-light btn-custom" id="contact-submit">
                            Search
                        </button>
                    </div>
                </div>
            </form>

            <div class="job-list__wrapper mb-5">
              <h3 class="mb-5">Design</h3>

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--danger text-white mr-3">GD</span> Senior Graphic Designer
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Full time
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> San Fransisco, US
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--tertiary text-white mr-3">UX</span> UI/UX Designer
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Remote
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> Anywhere
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--warning text-white mr-3">AN</span> Multimedia Artist &amp; Animator
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Full time
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> Birmingham, UK
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->
            </div>

            <div class="job-list__wrapper mb-5">
              <h3 class="mb-5">Development</h3>

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--success text-white mr-3">FE</span> Front End Developer
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Part time
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> Sydney, AU
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--warning2 text-white mr-3">MD</span> Mobile Developer
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Full-time
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> San Fransisco, US
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->

              <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                <div class="card-body">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 color--heading">
                      <span class="badge badge-circle background--info text-white mr-3">NT</span> .NET Developer
                    </span>

                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-clock mr-1"></i> Full time
                    </span>

                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                      <i class="fas fa-map-marker-alt mr-1"></i> Manchester, UK
                    </span>

                    <span class="d-none d-md-block col-1 text-center color--text">
                      <small><i class="fas fa-chevron-right"></i></small>
                    </span>
                  </span>
                </div>
              </a> <!-- Job Card -->
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection