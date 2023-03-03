@extends('fe.layout.header')

@section('title')
    Prosedur untuk Perusahaan
@endsection

@section('content')
<section id="about-section" class="pt-5 pb-5">
    <div class="container wrapabout">
        <div class="red"></div>
        <div class="row">
            <div class="col-lg-6 align-items-center justify-content-left d-flex mb-5 mb-lg-0">
                <div class="blockabout">
                    <div class="blockabout-inner text-center text-sm-start">
                        <div class="title-big pb-3 mb-3">
                            <h3>ABOUT ME</h3>
                        </div>
                        <p class="description-p text-muted pe-0 pe-lg-0">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.
                        </p>
                        <p class="description-p text-muted pe-0 pe-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere.</p>
                        <div class="sosmed-horizontal pt-3 pb-3">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <a href="#" class="btn rey-btn mt-3">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <figure class="potoaboutwrap">
                    <img src="https://bootdey.com/image/400x700/FF7F50/000000" alt="potoabout" />
                </figure>
            </div>
        </div>
    </div>
</section>
@endsection
@push('css')
    <style>
         
#about-section {
    position: relative;
}

.blockabout {
    padding: 20px;
    background: white;
    box-shadow: 0 0 45px rgb(0 0 0 / 8%);

}

.blockabout-inner {
    padding: 30px;
    border: 1px solid rgba(32, 33, 36, 0.1);
}

.sosmed-horizontal a i {
    border: 1px solid #070707;
    border-radius: 50%;
    color: #070707;
    display: inline-block;
    height: 30px;
    width: 30px;
    line-height: 30px;
    margin: auto 3px;
    font-size: 15px;
    text-align: center;
    transition: all 0.3s;
}

.rey-btn {
    border: 2px solid #070707;
    padding: 10px 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 13px;
    font-weight: 700;
    border-radius: 50px;
    transition: all 0.3s;
}
    </style>
@endpush