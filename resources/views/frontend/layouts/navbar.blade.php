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
                            <div class="col-lg-6 col-sm-12">
                                <h6 class="dropdown-header">Accommodation Safari:</h6>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-umbwe-trek') }}">4 Days Tanzania Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-umbwe-trek') }}">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-marangu-trek') }}">4 Days Wildebeest Migration Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-marangu-trek') }}">5 Days Tanzania Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-machame-trek') }}">7 Days Tanzania Safari</a>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h6 class="dropdown-header">Camping Safari:</h6>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-umbwe-trek') }}">4 Days Tanzania Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-umbwe-trek') }}">4 Days Tanzania Big Five Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-marangu-trek') }}">4 Days Wildebeest Migration Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-marangu-trek') }}">5 Days Tanzania Safari</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-machame-trek') }}">7 Days Tanzania Safari</a>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h6 class="dropdown-header">Short Safaris</h6>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-machame-trek') }}">7 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-rongai-trek') }}">7 Days Rongai Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-lemosho-trek') }}">7 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-lemosho-trek') }}">8 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-northern-circuit-trek') }}">8 Days Northern Circuit Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('9-days-northern-circuit-trek') }}">9 Days Northern Circuit Route</a>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <h6 class="dropdown-header">Destinations</h6>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Mount Meru</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Moun Kilimanjaro</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Arusha National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Serengeti National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Tarangire National Park</a>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">Ngorongoro Crater</a>
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
                                <h6 class="dropdown-header">Mount Kilimanjaro-Short Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-umbwe-trek') }}">5 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-umbwe-trek') }}">6 Days Umbwe Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('5-days-marangu-trek') }}">5 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-marangu-trek') }}">6 Days Marangu Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-machame-trek') }}">6 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('6-days-rongai-trek') }}">6 Days Rongai Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header">Mount Kilimanjaro-Long Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-machame-trek') }}">7 Days Machame Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-rongai-trek') }}">7 Days Rongai Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('7-days-lemosho-trek') }}">7 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-lemosho-trek') }}">8 Days Lemosho Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('8-days-northern-circuit-trek') }}">8 Days Northern Circuit Route</a>
                                <a class="dropdown-item wide-item" href="{{ route('9-days-northern-circuit-trek') }}">9 Days Northern Circuit Route</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h6 class="dropdown-header">Mount Meru Trek</h6>
                                <a class="dropdown-item wide-item" href="{{ route('3-days-mount-meru-trek') }}">3 Days Mount Meru</a>
                                <a class="dropdown-item wide-item" href="{{ route('4-days-mount-meru-trek') }}">4 Days Mount Meru</a>
                                <div class="p-2">
                                    <img src="{{ asset('assets/frontend/img/safari/50.jpg') }}" style="width:100%;border-radius:10px;" alt="#UpzoneSafari">
                                </div>
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



{{-- 
Lodging Safari:
4 Days Tanzania Big Five Safari
4 Days Wildebeest Migration safari
4 Days Tanzania Safari
5 Days Tanzania Safari
7 Days Tanzania Safari

Camping Safaris:
4 Days Tanzania Big Five Safari
4 Days Serengeti Ngorongoro Wildebeest migration safari
4 Days Tanzania Safari In Serengeti tarangire and Ngorongoro
5 Days Ngorongoro crater, Empakai crater,accacia camp and Lake Natron
6 Days Lake Manyara, Serengeti,Ngorongoro crater and Tarangire
Short Safaris:
2 Days Tanzania Lake Manyara and Tarangire budget wildlife safari
2 Days Tanzania Budget Safari in Tarangire and Ngorongoro crater
3 Days Serengeti Ngorongoro Migration Safari
3 Days Tanzania Safari in Tarangire, Ngorongoro and lake Manyara
Combo Safaris:
14 Days Kilimanjaro Trekking and Tanzania wildlife safaris

1. Safari - Wanyama tu, 
2. Trek - Milima, Watu


Northern Circuit
2 Days Wildlife Safaris
3 Days Wildlife Safari
4 Days Wildlife Safaris
5 Days Wildlife Safaris
6 Days Wildlife Safaris
7 Days Wildlife Safari
8 Days Wildlife Safari
9 Days Wildlife Safari

Southern Circuit
2 Days Mikumi National Park
2 Days Ruaha National Park
3 Days Mikumi National Park
3 Days Ruaha National Park
3 Days Udzungwa and Mikumi National Park
3 Days Selous Game Reserve
4 Days Selous & Mikumi National Park
5 Days Mikumi & Ruaha National Park
6 Days Selous, Mikumi and Ruaha National Park
10 Days Selous, Mikumi, Ruaha & Udzungwa
14 Days Ruaha National Park




Ngorongoro Conservation Area
Lake Manyara National Park
Tarangire National Park
Arusha National Park
Ruaha National Park
Selous Game Reserve

 --}}
