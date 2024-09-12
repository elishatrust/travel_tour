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
<div class="container-fluid bg-dark p-0 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5123 align-items-center123  g-0 flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-dark">100% Travel & Tour</h4>
                <h1 class="mb-5 display-3 text-light">Explore the Beauty of the Beautiful World</h1>
                <div class="position-relative mx-auto">
                    <a href="{{ route('about') }}" class="btn btn-primary border-secondary py-3 px-4 rounded-pill text-white" style="top: 0; right: 25%;">Explore Now</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/animal-md-1.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Travel</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/animal-md-2.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Tour</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/animal-md-3.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
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


<!-- Map Begin -->
{{-- <div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
        height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>New York</h4>
            <ul>
                <li>Phone: +12-345-6789</li>
                <li>Add: 16 Creek Ave. Farmingdale, NY</li>
            </ul>
        </div>
    </div>
</div> --}}
<!-- Map End -->