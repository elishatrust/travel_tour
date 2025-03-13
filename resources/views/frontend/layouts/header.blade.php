{{-- <div class="container-fluid bg-dark hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-7 col-sm-12">
                <h3 class="mb-4 text-dark text-center text-uppercase">100% Travel & Tour</h3> --}}
                {{-- <h1 class="mb-5 display-3 text-light text-start">Experience Mountain Trekking & Safari Adventures</h1> --}}
                {{-- <h1 class="mb-5 display-3 text-light text-start">Explore the Beauty of the Beautiful World</h1> --}}
                {{-- <h2 class="text-center display-3 text-light">
                    <a href="#" 
                        class="typewrite" 
                        data-period="2000" 
                        data-type='[ "Welcome to Life Care", "Experience Mountain Trekking & Safari Adventures", "Explore the Beauty of the Beautiful World" ]'>
                    </a>
                 </h2>
                <div class="position-relative mx-auto mt-4">
                    <a href="{{ route('about') }}" class="btn btn-outline-primary py-sm-3 px-3 px-sm-5 me-5">Explore More</a>
                </div>
            </div> --}}
            {{-- <div class="col-lg-5 col-sm-12">
                <div id="carouselId" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/a.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/b.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/c.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                        </div>
                        <div class="carousel-item rounded" style="border-radius: 10px !important">
                            <img src="{{ asset('assets/frontend/img/services/d.jpg') }}" style="border-radius: 10px !important" class="img-fluid w-100 h-100 rounded" alt="Second slide">
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
            </div> --}}
        {{-- </div>
    </div>
</div> --}}



{{-- 
<div id="hero" class="container-fluid bg-dark hero section">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item">
        <img src="{{ asset('assets/frontend/img/services/a.jpg') }}" alt="">
        <div class="container">
          <h2>Welcome to Medicio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/frontend/img/services/b.jpg') }}" alt="">
        <div class="container">
          <h2>At vero eos et accusamus</h2>
          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="{{ asset('assets/frontend/img/services/c.jpg') }}" alt="">
        <div class="container">
          <h2>Temporibus autem quibusdam</h2>
          <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
          <a href="#about" class="btn-get-started">Read More</a>
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
--}}


<div id="hero" class="hero section">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="{{ asset('assets/frontend/img/services/a.jpg') }}" alt="">
        <div class="container me-0">
            <h2 class="text-center h6 text-light">
                <a href="#" 
                    class="typewrite" 
                    data-period="2000" 
                    data-type='[ "Welcome to Life Care", "Experience Mountain Trekking & Safari Adventures", "Explore the Beauty of the Beautiful World" ]'>
                </a>
            </h2>
            <a href="{{ route('about') }}" class="btn btn-outline-primary py-sm-3 px-3 px-sm-5 me-5">Explore More</a>
        </div>
      </div>
    </div>
</div>







<div class="container-fluid p-5 m-0" style="background: #e4e4e4;"> 
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h2 class="h5 text-center text-uppercase">
                        <i class="fa fa-walking fa-2x me-2"></i>
                        MOUNTAIN TREKKING
                    </h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h2 class="h5 text-center text-uppercase">
                        <i class="fa fa-tree fa-2x me-2"></i>
                        WILDLIFE SAFARIS
                    </h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="inner-focus">
                    <h2 class="h5 text-center text-uppercase">
                        <i class="fa fa-umbrella-beach fa-2x me-2"></i>
                        BEACH HOLIDAYS
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
