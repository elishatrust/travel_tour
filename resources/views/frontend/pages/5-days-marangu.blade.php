@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-9 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color:#f1671e">Trekking Overview</h4>
                <p class="">
                    The Marangu Route, known as the "Coca-Cola Route," is the oldest and 
                    most popular trail on Mount Kilimanjaro. With its gradual ascent and 
                    dormitory-style hut accommodations, it is considered the easiest and 
                    most comfortable route. However, it is also the most crowded, as both 
                    ascent and descent follow the same path.
                </p>
                <p class=""> 
                    An additional acclimatization day is highly recommended to increase summit success. While the route 
                    is less scenic compared to others, it is a good choice during the rainy season due to the sheltered huts.
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


        <h4 class="mt-5 mb-3 h2">
            <i class="fa fa-list me-2"></i>
            <span class="" style="color: #f1671e">Trekking Itinerary</span>
        </h4>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/52.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 1: Marangu Gate to Mandara Hut
                            </h5>
                            <span style="text-align: justify">
                                Your trek begins after breakfast with a transfer to Marangu Gate for registration. From here, you’ll hike through a dense rainforest, home to unique plants and wildlife like colobus monkeys. 
                                The lush greenery and fresh air make this part of the trek serene and enjoyable.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 8.3 km (5.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,860m (6,102 ft) to 2,700m (8,858 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Lush rainforest teeming with wildlife and unique vegetation.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Mandara Hut to Horombo Hut
                            </h5>
                            <span style="text-align: justify">
                                This day starts with a hearty breakfast before entering 
                                the heath and moorland zone. The scenery changes dramatically, 
                                with rolling hills, heather shrubs, and open landscapes replacing 
                                the forest. The trail is moderate but longer than Day 1.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 12.5 km (7.8 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,700m (8,858 ft) to 3,700m (12,139 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Panoramic views of Mawenzi Peak, Kibo, and the Masai steppe.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/41.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Horombo Hut to Kibo Hut
                            </h5>
                            <span style="text-align: justify">
                                This section is more challenging, leading to the Kibo Hut, 
                                located at the base of Kilimanjaro’s crater wall. You’ll pass 
                                the “Last Water Point” and traverse the barren, rocky Saddle, 
                                a high-altitude plateau with minimal vegetation.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 9.5 km (5.9 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,700m (12,139 ft) to 4,700m (15,419 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Crossing the Saddle, a barren yet striking alpine desert.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/31.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Kibo Hut to Uhuru Peak and Back to Horombo Hut
                            </h5>
                            <span style="text-align: justify">
                                This is the most demanding day of the trek, starting 
                                around midnight for the final ascent. The trail is steep and rocky, 
                                with the cold and thin air adding to the difficulty. 
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6.5 km (~4 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 12–15 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 4,700m (15,419 ft) to 5,895m (19,341 ft), then back to 3,700m (12,139 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Sunrise at Uhuru Peak, Kilimanjaro’s highest point, with breathtaking views.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/49.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Horombo Hut to Marangu Gate
                            </h5>
                            <span style="text-align: justify">
                                The final descent leads back to Marangu Gate through 
                                the heath and rainforest zones. This is an easier day with gentler slopes, 
                                offering a chance to reflect on your accomplishment.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 20.8 km (12.9 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~8 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,700m (12,139 ft) to 1,860m (6,102 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Descent through heath and rainforest zones.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Marangu Gate → Mandara Hut</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Marangu Gate → Mandara Hut</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Mandara Hut → Horombo Hut</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Horombo Hut → Kibo Hut</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Uhuru Peak → Marangu gate</li>                      
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
            </div>
        </div>
    </div>
</div>


@include('frontend.layouts.key-features')

@include('frontend.layouts.destinations')

@endsection