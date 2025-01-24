<nav class="navbar card shadow navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5">
    <div class="container">
        <a href="{{ route('welcome') }}" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/more/logo2.png') }}" alt="UpzoneSafari" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Safari
                    </a>
                    <div class="dropdown-menu mega-menu">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header">Mount Kilimanjaro-Short Trek</h6>
                                <a class="dropdown-item wide-item" href="#">5 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="#">6 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="#">5 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="#">6 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="#">6 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="#">6 Days Rongai Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header">Mount Kilimanjaro-Long Trek</h6>
                                <a class="dropdown-item wide-item" href="#">7 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="#">7 Days Rongai Route</a>
                                <a class="dropdown-item wide-item" href="#">7 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="#">8 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="#">8 Days Northern Circuit Route</a>
                                <a class="dropdown-item wide-item" href="#">9 Days Northern Circuit Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header">Mount Meru Trek</h6>
                                <a class="dropdown-item wide-item" href="#">3 Days Mount Meru</a>
                                <a class="dropdown-item wide-item" href="#">4 Days Mount Meru</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown position-static123">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trekking
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row g-3">
                            <div class="col-md-12 col-sm-12">                                
                                <a class="dropdown-item" href="{{ route('mt-meru-trek') }}">Mount Meru</a>
                                <a class="dropdown-item" href="{{ route('mt-kilimanjaro-trek') }}">Mount Kilimanjaro</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li class="nav-item dropdown position-static123">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Culture
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row g-3">
                            <div class="col-md-12 col-sm-12">
                                <a class="dropdown-item wide-item" href="#">7 Days Tanzania Safari</a>
                                <a class="dropdown-item wide-item" href="#">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item wide-item" href="#">4 Days Wildebeest Migration Safari</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('latest-news') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <a href="{{ route('plan-trip') }}" class="btn btn-outline-primary text-uppercase btn-action">Plan a Trip</a>
        </div>
    </div>
</nav>