<div class="container-fluid bg-dark hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-7 col-sm-12">
                <h4 class="mb-4 text-primary text-uppercase">100% Travel & Tour</h4>
                <h1 class="mb-5 display-3 text-light text-start">Experience Mountain Trekking & Safaris Adventures</h1>
                {{-- <h1 class="mb-5 display-3 text-light text-start">Explore the Beauty of the Beautiful World</h1> --}}
                <div class="position-relative mx-auto mt-4">
                    <a href="{{ route('about') }}" class="btn btn-outline-primary py-sm-3 px-3 px-sm-5 me-5">Explore More</a>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div id="carouselId" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/a.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Travel</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/b.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Tour</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/c.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/d.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        </div>
                        {{-- <div class="carousel-item rounded" style="border-radius: 10px !important"> --}}
                            {{-- <img src="{{ asset('assets/frontend/img/services/e.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide"> --}}
                            {{-- <a href="#" class="btn px-4 py-2 text-white rounded">Enjoy</a> --}}
                        {{-- </div> --}}
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
