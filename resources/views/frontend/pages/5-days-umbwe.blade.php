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
                <h4 class="mb-3" style="color:#f1671e">Overview</h4>
                <p class="">
                    The Umbwe Route is the shortest and steepest path to the 
                    summit of Mount Kilimanjaro (5,895m / 19,341ft). Known 
                    for its challenging terrain and rapid ascent, 
                    it is best suited for experienced trekkers who are comfortable 
                    with high-altitude hiking. 
                </p>
                <p class=""> 
                    Due to its steep slopes and limited acclimatization time, 
                    the success rate for reaching Uhuru Peak on this route is 
                    lower than others like Machame or Lemosho. However, Umbwe 
                    is one of the most scenic and least crowded trails on Kilimanjaro.
                </p>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="start-cost py-4">
                    <h6 class="my-3 text-primary">Starting from</h6>
                    <p class="h3 animated-underline">$1000.00</p>
                </div>
                <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    Book Now
                    <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h4 class="mt-4">
                    <i class="fa fa-list me-2"></i>
                    <span class="" style="color: #f1671e">Trekking Itinerary</span>
                </h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/52.jpg') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3" style="color:#f1671e!important">
                        Day 1: Umbwe Gate to Cave Bivouac Camp
                    </h5>
                    <span style="text-align: justify">
                        The journey begins at Umbwe Gate (1,800m), where you complete 
                        registration with Kilimanjaro National Park authorities. 
                        The trail ascends steeply through dense rainforests, 
                        with towering trees, tangled vines, and moss-covered rocks. 
                    </span>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 11 km (6.8 miles)</li>
                        <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–6 Hours</li>
                        <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,800m (5,905ft) to 2,850m (9,350ft)</li>
                        <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Lush rainforest teeming with wildlife and unique vegetation.</li>
                        <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3" style="color:#f1671e!important">
                        Day 2: Cave Bivouac to Barranco Camp
                    </h5>
                    <span style="text-align: justify">
                        The second day starts with a steep climb, leaving the rainforest behind 
                        as you enter the moorland zone. The trees become smaller, replaced by giant 
                        Senecio plants and rugged terrain. As you continue ascending, you'll see 
                        breathtaking views of Uhuru Peak and Kibo in the distance.
                    </span>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 12.5 km (7.8 mi)</li>
                        <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                        <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,850m (9,350ft) to 3,950m (12,960ft)</li>
                        <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Panoramic views of Mawenzi Peak, Kibo, and the Masai steppe.</li>
                        <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/41.jpg') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3" style="color:#f1671e!important">
                        Day 3: Barranco Camp to Karanga Valley 
                    </h5>
                    <span style="text-align: justify">
                        Today’s trek begins with an exciting challenge – climbing the Barranco Wall 
                        (also called the "Breakfast Wall"). 
                        The trail descends slightly and continues with undulating terrain toward Karanga Camp (4,035m).
                    </span>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 9.5 km (5.9 mi)</li>
                        <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~7 Hours</li>
                        <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,950m (12,960ft) to 4,200m (13,780ft)</li>
                        <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Crossing the Saddle, a barren yet striking alpine desert.</li>
                        <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/31.jpg') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3" style="color:#f1671e!important">
                        Day 4: Barafu Camp to Mweka Camp
                    </h5>
                    <span style="text-align: justify">
                        The route continues through barren, rocky landscapes toward Barafu Camp (4,673m). 
                        The air is noticeably thinner, and temperatures drop. You will arrive at Barafu 
                        Camp in the afternoon and rest early, as the summit push begins around midnight.
                    </span>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6.5 km (~4 miles)</li>
                        <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–7 Hours</li>
                        <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 4,600m (15,300 ft) to 5,895m (19,341 ft)</li>
                        <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Sunrise at Uhuru Peak, Kilimanjaro’s highest point, with breathtaking views.</li>
                        <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/49.jpg') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3" style="color:#f1671e!important">
                        Day 5: Mweka Camp to Mweka Gate to Moshi
                    </h5>
                    <span style="text-align: justify">
                        Around midnight, you begin the final push toward the summit, navigating through 
                        steep switchbacks, icy terrain, and extreme cold (-10°C to -20°C). The first milestone 
                        is Stella Point (5,756m), where you witness an incredible sunrise over Africa.
                    </span>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 20.8 km (12.9 mi)</li>
                        <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~8 Hours</li>
                        <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,100m (10,190ft) to 1,800m (5,102ft)</li>
                        <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Descent through heath and rainforest zones.</li>
                        <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-4">
                <div class="tour-hightligh mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Trek Highlights</h5>
                    </div>
                    <div class="">
                        <li class="mb-2"><strong>Day 0 :</strong> Arrival (Pick up) from Kilimanjaro International Airport → Moshi.</li>
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Umbwe Gate → Umbwe Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Umbwe camp → Barranco camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Barranco Camp → Karanga Camp → Barafu Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Barafu Camp → Uhuru Peak (summit point) → Back to Barafu Camp - Mweka Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Mweka Camp → Mweka Gate → Back to Moshi</li>                      
                    </div>
                </div>
            </div> 
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
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
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
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
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
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
            </div>
        </div>
    </div>
</div>


<div class="container section-top-border"></div>


@include('frontend.layouts.key-features')

@include('frontend.layouts.destinations')

@endsection