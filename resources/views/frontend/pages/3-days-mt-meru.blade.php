@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-12 col-sm-12 mb-4">
                <div class="gallery">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2a.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2b.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2c.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2d.jpeg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Trekking Overview</h4>
                <p class="" style="text-align: justify">
                    Mount Meru is the highest peak in Tanzania, It stands tall at an elevation of 4,966 meters 
                    (15,505 feet) above sea level, making it the highest peak in Africa and the highest single 
                    free-standing mountain above sea level in the world. 
                    Around 500,000 years ago, a massive eruption reshaped Mount Meru, 
                    destroying its original cone and creating a horseshoe-shaped crater 
                    with its eastern side blown away. The mountain’s summit now lies on 
                    the western side, and its inner walls soar more than 1,500 meters above the crater floor, 
                    making them among the tallest cliffs in Africa.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
                <i class="fa fa-walking me-2"></i>
                <span class="" style="color: #f1671e">Trekking Itinerary</span>
            </div>
            <div class="col-lg-4 col-sm-12">
                <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    Book Now
                    <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0028.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 1: Momella Gate to Miriakamba Hut</h5>
                            <span style="text-align: justify">
                                Transfer from your hotel to Momella Gate. Trek through lush forest and cross the 
                                Ngare Nanyuki River to reach Miriakamba Hut for an overnight camp.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~10 km (~6 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,500m to 2,514m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Wildlife encounters, lush forests, Miriakamba Hut.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 2: Miriakamba Hut to Saddle Hut</h5>
                            <span style="text-align: justify">
                                Ascend through scenic forest and giant heather to Saddle Hut. 
                                Optional hike to Little Meru for stunning views. Overnight at Saddle Hut.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~8 km (~5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,514m to 3,570m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Elephant Ridge views, Little Meru sunset hike.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/Mt-Meru.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 3: Saddle Hut to Summit and Descent</h5>
                            <span style="text-align: justify">
                                Start early for Rhino Point and continue to Mount Meru’s summit. 
                                Descend to Momella Gate and transfer back to your hotel for dinner and rest.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~19 km (~12 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 10–12 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,570m to 4,566m to 1,500m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Summit sunrise, scenic descent, wildlife sightings.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div class="p-5">
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
            <div class="col-lg-4 col-sm-12">
                <div class="tour-hightligh mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Trek Highlights</h5>
                    </div>
                    <div class="">
                        <li class="mb-2"><strong>Day 0 :</strong> Arrival (Pick up) from Kilimanjaro International Airport → Moshi.</li>
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Momella Gate</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Momella Gate → Miriakamba Hut</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Saddle Hut</li>                      
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
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            International flights
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Insurance fees
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
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
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Waterproof jacket, warm layers, hiking boots.
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Headlamp, trekking poles, hydration system.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Sunscreen, first-aid kit, snacks.
                        </li>                      
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection