<nav class="navbar shadow navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow123 fadeIn" data-wow123-delay="0.1s">
    <a href="{{ route('welcome') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/more/logo2.png') }}" style="width: 170px!important; border-radius: 30px; border-bottom: 2px solid wheat; margin-bottom:3px;" alt="Icon" />
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
            {{-- <div class="collapse navbar-collapse" id="navbarExampleOnHover">
                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                    <li class="nav-item dropdown dropdown-hover position-static">
                        <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">Trekking</a>
                        <div class="dropdown-menu mt-0 me-0" style="width:30%;" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;border-top-right-radius: 0;"> 
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                    <div class="list-group list-group-flush w-100">
                                        <h6>Mount Kilimanjaro </h6>
                                        <a href="" class="list-group-item list-group-item-action">5 Days UMBWE Route</a>
                                        <a href="" class="list-group-item list-group-item-action">6 Days UMBWE Route</a>
                                        <a href="" class="list-group-item list-group-item-action">5 Days MARANGU Route</a>
                                        <a href="" class="list-group-item list-group-item-action">6 Days MARANGU Route</a>
                                        <a href="" class="list-group-item list-group-item-action">6 Days MACHAME Route</a>
                                        <a href="" class="list-group-item list-group-item-action">7 Days MACHAME Route</a>
                                        <a href="" class="list-group-item list-group-item-action">9 Days NORTHERN Circuit Route</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                    <div class="list-group list-group-flush w-100">
                                        <h6>Mount Menu </h6>
                                        <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                                        <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                                        <a href="" class="list-group-item list-group-item-action">Est iure</a>
                                        <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                                        <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </li>
                </ul>
            </div> --}}
            <div class="nav-item dropdown">
                <a href="javascript:" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trekking</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ route('mt-meru-trek') }}" class="dropdown-item">Mount Meru</a>
                    <a href="{{ route('mt-kilimanjaro-trek') }}" class="dropdown-item">Mount Kilimanjaro</a>
                </div>
            </div>
            <a href="{{ route('latest-news') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" class="btn btn-outline-primary text-uppercase btn-action">Plan a Trip</a>
    </div>
</nav>