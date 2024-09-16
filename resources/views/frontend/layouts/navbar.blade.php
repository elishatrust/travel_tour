<nav class="navbar shadow navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow123 fadeIn" data-wow123-delay="0.1s">
    <a href="{{ route('welcome') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/more/logo2.png') }}" alt="Icon" />
        {{-- <h1 class="m-0 text-primary h3"><span style="color:#0059c5!important">UPZONE</span>Safaris</h1> --}}
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('latest-news') }}" class="nav-item nav-link">Latest News</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active123" data-bs-toggle="dropdown">More</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="animal.html" class="dropdown-item">FAQ</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" class="btn btn-primary text-uppercase">Plan a Trip</a>
    </div>
</nav>