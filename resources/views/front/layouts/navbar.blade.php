<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('welcome') }}" class="navbar-brand p-0">
        {{-- <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/icon/icon-10.png') }}" alt="Icon" /> --}}
        <h1 class="m-0 text-primary">GoTrip</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary">Book Now<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>