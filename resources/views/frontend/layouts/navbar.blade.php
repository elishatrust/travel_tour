<nav class="navbar shadow navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow123 fadeIn" data-wow123-delay="0.1s">        
    <div class="container">
        <a href="{{ route('welcome') }}" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/more/logo2.png') }}" style="width: 170px!important; border-radius: 30px; border-bottom: 2px solid wheat; margin-bottom:3px;" alt="Icon" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Safari
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row">
                            <div class="col">
                                <h6 class="dropdown-header">Lodging Safari:</h6>
                                <a class="dropdown-item" href="#">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item" href="#">4 Days Wildebeest Migration Safari</a>
                                <a class="dropdown-item" href="#">4 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">5 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">7 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">5 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">7 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">5 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">7 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">5 Days Tanzania Safari</a>
                                <a class="dropdown-item" href="#">7 Days Tanzania Safari</a>
                            </div>
                            <div class="col">
                                <h6 class="dropdown-header">Camping Safaris:</h6>
                                <a class="dropdown-item" href="#">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item" href="#">4 Days Serengeti Ngorongoro Safari</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                                <a class="dropdown-item" href="#">5 Days Ngorongoro Crater</a>
                            </div>
                            <div class="col">
                                <h6 class="dropdown-header">Short Safaris:</h6>
                                <a class="dropdown-item" href="#">2 Days Tanzania Lake Manyara</a>
                                <a class="dropdown-item" href="#">3 Days Serengeti Migration Safari</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                                <a class="dropdown-item" href="#">3 Days Tanzania Safari in Tarangire</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                
                <div class="nav-item dropdown">
                    <a href="javascript:" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trekking</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ route('mt-meru-trek') }}" class="dropdown-item">Mount Meru</a>
                        <a href="{{ route('mt-kilimanjaro-trek') }}" class="dropdown-item">Mount Kilimanjaro</a>
                    </div>
                </div>
                    
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Culture
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="dropdown-item" href="#">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item" href="#">4 Days Wildebeest Migration Safari</a>
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
            <a href="{{ route('plan-trip') }}" class="btn btn-outline-primary1 text-uppercase btn-action1">Plan a Trip</a>
            {{-- <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" class="btn btn-outline-primary1 text-uppercase btn-action1">Plan a Trip</a> --}}
        </div>
    </div>
</nav>