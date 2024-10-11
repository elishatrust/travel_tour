@extends('frontend.layouts.app')
<style>
    .accordion-item .accordion-button{
        cursor: pointer;
    }
    .accordion-item .accordion-button:hover{
        background-color: var(--primary);
        color: white;
    }
</style>
@section('content')
@include('frontend.layouts.inc_trekking')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3 wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Mount Kilimanjaro Routes</p>
                {{-- <h1 class="display-5123 h2 mb-3" style="">Special <span style="color:#f1671e!important">Trekking</span></h1> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.7s">
                <div class="accordion card shadow-sm" id="accordionExample">
                    
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Overview
                            </button>
                        </h1>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <strong class="">Mount Kilimanjaro Ascent Routes</strong><br><br>
                                        <p>
                                            Kilimanjaro is the highest peak in Africa, It stands tall at an elevation of 5,895 meters 
                                            (19,341 feet) above sea level, making it the highest peak in Africa and the highest single 
                                            free-standing mountain above sea level in the world. 
                                            The northernmost part of the mountain range is called the Northern Circuit.
                                        </p>
                                        <p>
                                            The Mountain has Seven main routes which lead to the summit, 
                                            Uhuru Peak, one of which starts on the Northern side of the mountain and 
                                            the rest on the Southern side. <br>
                                            The routes are Marangu, Machame, Lemosho, Shira, 
                                            Rongai, Northern Circuit and Umbwe.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtKili.webp') }}" alt="Mount Kilimanjaro" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            1. Northern Circuit Route
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <strong>Northern Circuit Route </strong> <br><br>
                                        <p>
                                            Longest and newest route, traversing nearly the entire mountain. 
                                            Very low traffic, great views, and a high success rate.
                                        </p>
                                        <p>
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 9 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 90 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/NorthernCircuit.jpg') }}" alt="Northern Circuit Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            2. Lemosho Route
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <strong>Lemosho Route</strong> <br><br>
                                        <p>
                                            This route is often considered the most beautiful on Kilimanjaro and 
                                            is one of the most popular. It starts on the mountain's western slopes, 
                                            offering scenic views as it curves around the southern face of Kibo Peak. 
                                            The descent follows the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p>
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 8 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 56 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/Lemosho.jpg') }}" alt="Lemosho Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            3. Machame Route
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <strong>Machame Route</strong> <br><br>
                                        <p>
                                            Machame is the highest peak in the Northern Circuit, and this route is 
                                            the most scenic and popular on Kilimanjaro. It starts at the highest point 
                                            of the circuit and descends along the southeastern slopes, taking you down 
                                            along the Mweka route.
                                        </p>
                                        <p>
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 7 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 49 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/Machame.jpg') }}" alt="Machame Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Marangu Route
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Marangu Route: Most popular route, gentle gradients, and long sections above 4,700m. Not very scenic, comfortable huts.
                                Duration: 6 days
                                Distance: 64 km
                                Descent Route: Mweka
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Rongai Route
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Rongai Route: Long access drive, remote, and less frequented. Some fine views, wild, and least scenic, camping.
                                Duration: 5-6 days
                                Distance: 65 km
                                Descent Route: Mweka
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Umbwe Route
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Umbwe Route: Shortest and steepest route, very physically demanding and requires serious endurance.
                                Duration: 6 days
                                Distance: 37 km
                                Descent Route: Mweka
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Lemosho Route
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Shira Route: Included for completeness, though it’s now a road for emergency vehicles.
                                Duration: N/A
                                Distance: N/A
                                Descent Route: N/A 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="img-border123 h-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/more/0.jpg') }}" alt="#" />
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <h1 class="display-5123 h4 mb-3">Features & Key Considerations</h1>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Acclimatization days : 
                    </span>
                    Longer routes offer more opportunities for acclimatization, 
                    increasing the chances of reaching the summit.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Scenic views : 
                    </span>
                    Routes like Northern Circuit, Lemosho, and Machame offer more scenic views, 
                    while Rongai and Umbwe are less scenic.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Traffic : 
                    </span>
                    Northern Circuit and Lemosho are less crowded, while Marangu and Machame are more popular.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Camping vs Huts : 
                    </span>
                    Routes like Lemosho, Machame, and Rongai involve camping, while Marangu has huts.
                </p>
            </div>            
        </div>
    </div>
</div>

<!-- Service -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>What We Do</p>
                <h1 class="display-5123 h2 mb-3" style="">Special Services For <span style="color:#f1671e!important">Upzone</span><span class="text-dark">Safaris</span></h1>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3 wow123 fadeInUp" data-wow123-delay="0.7s">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/8.jpg') }}" alt="Icon" />
                <div class="p-3">
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Rest House</h5>
                    <span style="text-align: justify">
                        Booking accommodations ranging from budget hotels to luxury resorts worldwide.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3 wow123 fadeInUp" data-wow123-delay="0.1s">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/1.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Group Tours</h5>
                    <span style="text-align: justify">
                        Organized group tours for families, friends, and special interest groups
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection