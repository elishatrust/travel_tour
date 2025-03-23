<div id="hero" class="container-fluid bg-dark hero ">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="{{ asset('assets/frontend/img/park/b.jpeg') }}" alt="">
            <div class="container-fluid">
            <p class="h4 fw-bold">Experience Mountain Trekking & Safari Adventures</p>
            <a href="{{ route('about') }}" class="btn btn-primary text-light">Explore More <i class="fa fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/img/park/h.jpg') }}" alt="">
            <div class="container-fluid">
            <p class="h4 fw-bold">Unforgettable Tanzanian Safaris & Tours</p>
            <a href="{{ route('about') }}" class="btn btn-primary text-light">Explore More <i class="fa fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/img/park/c.jpg') }}" alt="">
            <div class="container-fluid">
            <p class="h4 fw-bold">Explore the Beauty of the Beautiful World</p>
            <a href="{{ route('about') }}" class="btn btn-primary text-light">Explore More <i class="fa fa-arrow-right ms-1"></i></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"><li data-bs-target="#hero-carousel" data-bs-slide-to="0" class=""></li><li data-bs-target="#hero-carousel" data-bs-slide-to="1" class=""></li><li data-bs-target="#hero-carousel" data-bs-slide-to="2" class="active" aria-current="true"></li></ol>
    </div>
</div> 
    
<div class="container-fluid below-slides"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h4 class="text-center text-uppercase">
                        <i class="fa fa-walking me-2 fw-bold"></i>
                        MOUNTAIN TREKKING
                    </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h4 class="text-center text-uppercase">
                        <i class="fa fa-tree me-2 fw-bold"></i>
                        WILDLIFE SAFARIS
                    </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h4 class="text-center text-uppercase">
                        <i class="fa fa-umbrella-beach me-2 fw-bold"></i>
                        BEACH HOLIDAYS
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
