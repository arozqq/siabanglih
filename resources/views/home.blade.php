@include('layouts.partials.header')

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0" id="home">
    @include('layouts.partials.navbar')
    @include('layouts.partials.hero-header')
</div>
<!-- Navbar & Hero End -->

<!-- Kandidat & Peserta Start -->
<div class="container-xxl py-5" id="kandidat">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h5 class="text-primary-gradient fw-medium">Kandidat & Peserta</h5> --}}
                <h1 class="mb-2">Kandidat & Peserta</h1>
                <p class="mb-4">Informasi total data kandidat dan data peserta</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <i class="fa fa-users fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                            <div class="ms-3">
                                <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                <p class="text-primary-gradient mb-0">Total Kandidat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <i class="fa fa-clipboard-check fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                            <div class="ms-3">
                                <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                <p class="text-secondary-gradient mb-0">Peserta Memilih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <i class="fa fa-user-times fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                            <div class="ms-3">
                                <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                <p class="text-secondary mb-0">Peserta Belum Memilih</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="{{asset('asset/img/hero-img.png')}}" width="500">
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5" id="kandidat">
    <div class="container py-5 px-lg-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">Visi & Misi</h5>
            <h1 class="mb-5">Apa Kata Para Peserta ?</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('asset/img/testimonial-1.jpg')}}" style="width: 85px; height: 85px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="mb-1">Profession</p>
                        <div>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('asset/img/testimonial-2.jpg')}}" style="width: 85px; height: 85px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="mb-1">Profession</p>
                        <div>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('asset/img/testimonial-3.jpg')}}" style="width: 85px; height: 85px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="mb-1">Profession</p>
                        <div>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="{{asset('asset/img/testimonial-4.jpg')}}" style="width: 85px; height: 85px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <p class="mb-1">Profession</p>
                        <div>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Kandidat End -->

<!-- QC Start -->
<div class="container-xxl py-5" id="qc">
    <div class="container py-5 px-lg-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">Perolehan Data</h5>
            <h1 class="mb-5">Quick Count</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded p-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                        <i class="fa fa-pen text-white fs-4"></i>
                    </div>
                    <h5 class="mb-3">Dummy</h5>
                    <p class="m-0">Dummy Quick Count</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- QC End -->


@include('layouts.partials.footer')