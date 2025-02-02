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
                <h4 class="mb-3" style="color: #f1671e">Trekking Overview</h4>
                <p class="">
                    The Rongai Route is the only trail that approaches Mount Kilimanjaro from the northern side, close to the Kenyan border. It is one of the less crowded and drier routes, making it a great option for trekkers looking for a quieter and more remote experience. The 6-day itinerary allows for a gradual ascent, providing better acclimatization while passing through diverse landscapes, including rainforests, moorlands, and alpine deserts.
                </p>
                <p class="">
                
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

        <h4 class="mt-5 mb-3 h2">
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
                                <i class="fa fa-calendar-day me-2"></i>Day :1 Rongai Gate (1,950m) to Simba Camp (2,650m)
                            </h5>
                            <span style="text-align: justify">
                                The journey begins with a scenic drive from Moshi to Rongai Gate, taking about 3–4 hours. After registration at the Kilimanjaro National Park Gate, the trek starts through dense rainforest, home to colobus monkeys and exotic birds. The trail is gently sloping with less mud than other routes. After 3 to 4 hours of hiking, trekkers arrive at Simba Camp (2,650m) on the edge of the moorland zone, where they rest and enjoy their first night on the mountain.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~8 km (~5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 700m (2,297 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest trek</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Simba Camp (2,650m) to Second Cave Camp (3,450m)
                            </h5>
                            <span style="text-align: justify">
                                After breakfast, the trek continues with a steady ascent into the moorland zone. The vegetation becomes shorter and sparser, revealing panoramic views of the Kenyan plains. The route passes through rocky landscapes, and the temperature begins to drop. After 3 to 4 hours of trekking, climbers arrive at Second Cave Camp (3,450m), where they have lunch and spend the rest of the day acclimatizing.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~7 km (~4.3 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 800m (2,625 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Second Cave Camp (3,450m) to Kikelewa Camp (3,600m)
                            </h5>
                            <span style="text-align: justify">
                                This day involves a short but steep climb as the trail winds through rocky outcrops and scattered giant lobelias. The landscape starts transitioning into alpine desert, with breathtaking views of the mountain peaks. After 3 to 4 hours of trekking, hikers reach Kikelewa Camp (3,600m), a beautiful valley campsite surrounded by towering peaks. This afternoon is spent resting and preparing for higher altitudes.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~5 km (~3.1 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 150m (492 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland trek</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Kikelewa Camp (3,600m) to Mawenzi Tarn Camp (4,330m)
                            </h5>
                            <span style="text-align: justify">
                                The trek continues steeply upward into the alpine desert zone, where vegetation becomes scarce and temperatures drop significantly. This is an important acclimatization day, allowing trekkers to adjust to the altitude before the summit push. After reaching Mawenzi Tarn Camp (4,330m), hikers enjoy spectacular views of Mawenzi Peak, one of Kilimanjaro’s three volcanic cones.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6 km (~3.7 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 730m (2,395 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert Trek</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Mawenzi Tarn Camp (4,330m) to Kibo Hut (4,700m) to Uhuru Peak (5,895m) to Horombo Camp (3,720m)
                            </h5>
                            <span style="text-align: justify">
                                The summit attempt begins just after midnight. The climb from Kibo Hut (4,700m) to Uhuru Peak (5,895m) is the most challenging part of the trek, as it involves hiking in freezing temperatures over loose scree. Trekkers reach Gilman’s Point (5,685m) before continuing along the crater rim to Uhuru Peak, the highest point in Africa.
                                <br>
                                After celebrating at the summit and taking in the incredible sunrise over the glaciers, hikers descend to Kibo Hut for a short rest, then continue further down to Horombo Camp (3,720m) for the night.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 21 km (~13.7 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 12–15 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,565m (5,134 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,175m (7,135 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Arctic</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Horombo Camp (3,720m) to Marangu Gate (1,860m) to Moshi
                            </h5>
                            <span style="text-align: justify">
                                The final day is a long descent through the heath and moorland, eventually re-entering the rainforest. Trekkers arrive at Marangu Gate (1,860m), where they receive summit certificates before returning to Moshi for a hot shower and a well-earned rest.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 19 km (11.8 miles) </li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 1,860m (6,102 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest descent</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch.</li>
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Rongai Gate → Simba Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Simba Camp → Second Cave Camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Second Cave Camp → Kikelewa Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Kikelewa Camp → Mawenzi Tarn Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Mawenzi Tarn Camp → Kibo Hut → Uhuru Peak → Horombo Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Horombo Camp → Marangu Gate → Moshi</li>                      
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
                            Travel insurance
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
                <div class="Acclimatization-list mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Rongai Route?</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Less Crowded – Fewer climbers than other routes
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Drier & More Scenic – Best for trekking in the rainy season
                        </li>                 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Gradual Ascent – Allows for better acclimatization
                        </li>                 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Unique Approach – The only route that starts from the north
                        </li>                      
                    </div>
                </div>   
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Trek</h5>
                        <div class="">                  
                            <li class="mb-2">
                                <i class="far fa-check-circle text-primary me-1"></i> 
                                January to March (Dry and quiet, but colder)
                            </li>                     
                            <li class="mb-2">
                                <i class="far fa-check-circle text-primary me-1"></i> 
                                June to October (Best weather, popular season)
                            </li>  
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