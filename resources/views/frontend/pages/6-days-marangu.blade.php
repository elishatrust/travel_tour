@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-9 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Overview</h4>
                <p class="">
                    The Marangu Route is the oldest and most established route on Mount Kilimanjaro. 
                    It is often referred to as the "Coca-Cola Route" because it is considered one of 
                    the easiest due to its gradual slope. However, it has a low success rate due to 
                    poor acclimatization since climbers ascend and descend using the same route.
                </p>
                <p class="">
                    The 6-day Marangu Route itinerary allows for better acclimatization compared to 
                    the 5-day option, increasing your chances of reaching the summit.
                </p>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="start-cost py-4">
                    <h6 class="my-3 text-primary">Starting from</h6>
                    <p class="h3 animated-underline">$900.00</p>
                </div>
                <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    Book Now
                    <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <h4 class="mt-5 mb-3">
            <i class="fa fa-list me-2"></i>
            <span class="" style="color: #f1671e">Trekking Itinerary</span>
        </h4>

        <div class="row g-5">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                Day 1: Momella Gate to Miriakamba Hut
                            </h5>
                            <span style="text-align: justify">
                                Start with a transfer to Arusha National Park, where registration at Momella Gate is completed. 
                                Trek through lush forests with opportunities to spot wildlife like buffalo, 
                                and admire the scenic beauty of strangler figs and forest clearings. 
                                End the day at Miriakamba Hut for dinner and overnight stay.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~14 km (~9 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,600m to 2,514m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Wildlife encounters, lush forests, Miriakamba Hut.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                Day 2: Miriakamba Huts to Saddle Hut
                            </h5>
                            <span style="text-align: justify">
                                Begin the ascent through forest trails, transitioning into alpine desert as you reach Saddle Hut by midday. 
                                After lunch, enjoy a hike to Little Meru’s summit for panoramic views before returning to Saddle Hut for dinner.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~8 km (~5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,514m to 3,570m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Transition to alpine desert, views of Meru Crater, optional hike to Little Meru</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                Day 3: Miriakamba Hut
                            </h5>
                            <span style="text-align: justify">
                                Rise early to witness a breathtaking sunrise and clear views of Kilimanjaro. 
                                Descend to Saddle Hut for brunch, then continue down to Miriakamba Hut for a relaxed evening and dinner.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6.5 km (~4 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,570m to 1,500m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Summit sunrise, scenic descent, wildlife sightings.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                Day 4: Descend to Momella Gate
                            </h5>
                            <span style="text-align: justify">
                                Complete the trek descent to Momella Gate. 
                                Bid farewell to your trekking crew, enjoy a short picnic lunch, and possibly a 
                                game drive before returning to Arusha or Moshi for a refreshing shower and well-deserved rest.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6.5 km (~4 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,570m to 1,600m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Final descent, picnic lunch, and optional game drive in Arusha National Park.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 pl-5">
                <div class="tour-hightligh mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Trek Highlights</h5>
                    </div>
                    <div class="">
                        <li class="mb-2"><strong>Day 0 :</strong> Arrival (Pick up) from Kilimanjaro International Airport → Moshi.</li>
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Miriakamba Hut.</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Saddle Hut</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Miriakamba</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Descend to Momella Gate</li>                      
                    </div>
                </div>
                <div class="include-pack mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Included Packages</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Transportation to & from the mountain gate
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Professional guides, cooks and porters
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Pre & Post Trek accommodation
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Park fees, camping fees & rescue fees
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            3 meals daily while on the mountain
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Portable toilets and toilets tents
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Fair wages for the mountain crew
                        </li> 
                    </div>
                </div>
                <div class="exclude-packs mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Excluded Packages</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            International flights
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Insurance fees
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Cost of Visas.
                        </li>                      
                    </div>
                </div>
                <div class="packing-list mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Packing List</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Waterproof jacket, warm layers, hiking boots.
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Headlamp, trekking poles, hydration system.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Sunscreen, first-aid kit, snacks.
                        </li>                      
                    </div>
                </div>   
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Trek</h5>
                        <div class="">
                            <p  style="text-align: justify">
                                The dry season (June–October and January–February) offers clear skies and stable weather, making it the best time to hike.
                                Avoid the rainy season (March–May and November–December).
                            </p> 
                            <p class="">Ensure you're fully equipped for the adventure. Key items include:</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.key-features')

@include('frontend.layouts.destinations')

@endsection