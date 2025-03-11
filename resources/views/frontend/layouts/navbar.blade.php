<nav class="navbar card shadow navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5">
    <div class="container">
        <a href="{{ route('welcome') }}" class="navbar-brand p-0" title="UpzoneSafari Co Ltd.">
            <img class="img-fluid me-3" src="{{ asset('assets/frontend/img/more/logo2.png') }}" alt="UpzoneSafari" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li> --}}
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Safari
                    </a>
                    <div class="dropdown-menu mega-menu">
                        <div class="row g-3">
                            <div class="col-lg-4 col-sm-12">
                                <h6 class="dropdown-header text-uppercase">Northern Circuit</h6>
                                <a class="dropdown-item wide-item" href="{{ route('2-days-safari') }}">2 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-safari') }}">3 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('4-days-safari') }}">4 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-safari') }}">5 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-safari') }}">6 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-safari') }}">7 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-safari') }}">8 Days Wildlife Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('9-days-safari') }}">9 Days Wildlife Safari</a>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <h6 class="dropdown-header text-uppercase">Southern Circuit</h6>
                                <a class="dropdown-item wide-item" href="{{ route('2-days-mikumi-national-park') }}">2 Days Mikumi National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('2-days-ruaha-national-park') }}">2 Days Ruaha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mikumi-national-park') }}">3 Days Mikumi National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-ruaha-national-park') }}">3 Days Ruaha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-selous-game-reserve') }}">3 Days Selous Game Reserve</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-udzungwa-mikumi-national-park') }}">3 Days Udzungwa & Mikumi National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('4-days-selous-mikumi-national-park') }}">4 Days Selous & Mikumi National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-mikumi-ruaha-national-park') }}">5 Days Mikumi & Ruaha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-selous-mikumi-ruaha-national-park') }}">6 Days Selous, Mikumi & Ruaha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('10-days-selous-mikumi-ruaha-udzungwa-national-park') }}">10 Days Selous, Mikumi, Ruaha & Udzungwa</a>
                                <a class="dropdown-item wide-item" href="{{ route('14-days-ruaha-national-park') }}">14 Days Ruaha National Park</a>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <h6 class="dropdown-header text-uppercase">Destinations</h6>
                                <a class="dropdown-item wide-item" href="{{ route('mount-meru') }}">Mount Meru</a>
                                <a class="dropdown-item wide-item" href="{{ route('mount-kilimanjaro') }}">Moun Kilimanjaro</a>
                                <a class="dropdown-item wide-item" href="{{ route('arusha-national-park') }}">Arusha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('serengeti-national-park') }}">Serengeti National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('tarangire-national-park') }}">Tarangire National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('ngorongoro-crater') }}">Ngorongoro Crater</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trekking
                    </a>
                    <div class="dropdown-menu mega-menu container">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header text-uppercase">Mount Kilimanjaro-Short Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-umbwe-trek') }}">5 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-umbwe-trek') }}">6 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-marangu-trek') }}">5 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-marangu-trek') }}">6 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-machame-trek') }}">6 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-rongai-trek') }}">6 Days Rongai Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header text-uppercase">Mount Kilimanjaro-Long Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-machame-trek') }}">7 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-rongai-trek') }}">7 Days Rongai Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-lemosho-trek') }}">7 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-lemosho-trek') }}">8 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-northern-circuit-trek') }}">8 Days Northern Circuit Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('9-days-northern-circuit-trek') }}">9 Days Northern Circuit Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header text-uppercase">Mount Meru Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">3 Days Mount Meru</a>
                                <a class="dropdown-item wide-item" href="{{ route('4-days-mount-meru-trek') }}">4 Days Mount Meru</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown position-static123">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Day Tour
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row g-3">
                            <div class="col-md-12 col-sm-12">                                
                                <a class="dropdown-item" href="{{ route('day-tour') }}">Day Trip  Packages</a>
                                <a class="dropdown-item" href="{{ route('cultural-tour') }}">Cultural Tour</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li class="nav-item dropdown position-static123">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row g-3">
                            <div class="col-md-12 col-sm-12">                                
                                <a class="dropdown-item" href="{{ route('culture') }}">Culture</a>
                                <a class="dropdown-item" href="{{ route('terms-and-conditions') }}">Terms & Conditions</a>
                                <a class="dropdown-item" href="{{ route('faqs') }}">FAQs</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('latest-news') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <a href="{{ route('plan-trip') }}" class="btn btn-outline-primary text-uppercase">Plan a Trip</a>
        </div>
    </div>
</nav>
