{{-- <div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow123 fadeIn" data-wow123-delay="0.1s">
            <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <h1 class="display-4 text-light mb-5">Enjoy Wonderful Day With Your Family</h1>
                <div class="d-flex align-items-center pt-4 animated slideInDown">
                    <a href="{{ route('about') }}" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow123 fadeIn" data-wow123-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-1.jpg') }}" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-2.jpg') }}" alt="" />
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-3.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- Hero Start -->
<div class="container-fluid bg-dark p-0 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center  g-0 flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-primary text-uppercase">100% Travel & Tour</h4>
                <h1 class="mb-5 display-3 text-light text-start">Experience Mountain Trekking & Safaris</h1>
                {{-- <h1 class="mb-5 display-3 text-light text-start">Explore the Beauty of the Beautiful World</h1> --}}
                <div class="position-relative mx-auto">
                    <a href="{{ route('about') }}" class="btn btn-primary border-secondary py-3 px-4 rounded-pill text-white">Explore Now</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/more/a.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Travel</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/more/b.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Tour</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/more/c.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/more/d.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/more/e.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
