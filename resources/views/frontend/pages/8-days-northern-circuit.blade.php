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
                    The Northern Circuit Route is the longest and most scenic route on Mount Kilimanjaro (5,895m / 19,341ft). It offers excellent acclimatization and the highest summit success rate. Unlike other routes, it follows a circular path around the mountain, providing 360-degree views and a less crowded experience.
                </p>
                <p class="">
                
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

        <div class="row g-5">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 1: Londorossi Gate (2,100m) to Mti Mkubwa Camp (2,820m)
                            </h5>
                            <p style="text-align: justify">
                                Our journey begins with a drive from Moshi to Londorossi Gate, which takes about 3–4 hours. After registration, a short drive leads to the trailhead. The trek starts in a dense rainforest, where you might spot colobus monkeys. The day’s hike is short and easy, ending at Mti Mkubwa (Big Tree) Camp.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 6 km (3.7 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  3–4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 720m (2,362 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Mti Mkubwa Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Mti Mkubwa (2,820m) to Shira 1 Camp (3,500m)
                            </h5>
                            <p style="text-align: justify">
                                Leaving the rainforest behind, you ascend into the heath and moorland zone. The trail climbs steadily with a few steep sections. As you gain elevation, you will get your first views of Kilimanjaro’s glaciers. The camp is situated on the Shira Plateau, offering stunning panoramic views.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 8 km (5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  5–6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong>  680m (2,231ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Shira 1 Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Shira 1 Camp (3,505m) to Moir Hut (4,200m)
                            </h5>
                            <p style="text-align: justify">
                                You continue across the Shira Plateau, passing Shira 2 Camp. The landscape is now barren and volcanic, with lava formations scattered throughout. The route turns north toward the rarely visited Moir Hut Camp, an excellent place for acclimatization. A short optional hike can be done in the afternoon.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong>  695m (2,280ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Moir Hut (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Moir Hut (4,200m) to Buffalo Camp (4,020m)
                            </h5>
                            <p style="text-align: justify">
                                The trek now joins the Northern Circuit, moving away from the crowded routes. You ascend to Lent Hills (4,375m) for stunning views before descending slightly to Buffalo Camp. The landscape becomes more desert-like, with strong winds and sparse vegetation.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 12 km (7.5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 320m (1,050ft), then descent</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert Trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Buffalo Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Buffalo Camp (4,020m) to Third Cave Camp (3,800m)
                            </h5>
                            <p style="text-align: justify">
                                The trail follows the northern slopes of Kilimanjaro, offering uninterrupted views of Kenya. This part of the trek is less steep, allowing for a relaxed pace. You descend slightly to Third Cave Camp, where you rest and prepare for higher altitudes.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 8 km (5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  4–6   Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 220m (722ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Semi-Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Third Cave Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Third Cave Camp (3,800m) to School Hut (4,800m)
                            </h5>
                            <p style="text-align: justify">
                                This day involves a steady ascent to School Hut Camp, your final base before the summit. The environment is harsh, with strong winds and freezing temperatures. You rest in the afternoon, have an early dinner, and prepare for summit night.
                             </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 6 km (3.7 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,000m (3,280ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong>  Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Barafu Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong>  Breakfast, Lunch & Dinner.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 7: School Hut (4,800m) to Uhuru Peak (5,895m), then descent to Mweka Camp (3,100m)
                            </h5>
                            <p style="text-align: justify">
                                Summit night starts at midnight. The ascent is the most challenging, climbing steep scree slopes toward Gilman’s Point (5,681m). You continue along the crater rim to Uhuru Peak (5,895m), the highest point in Africa.
                            </p>
                            <p style="text-align: justify">
                                After celebrating, you descend quickly to Mweka Camp, stopping at Barafu Camp for lunch. This day is long and demanding, but reaching the summit is a life-changing experience.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 17 km (10.5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 10–14  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,222m (4,009ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,827m (9,275ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Arctic to Rainforest</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 8: Mweka Camp (3,100m) to Mweka Gate (1,640m), drive to Moshi
                            </h5>
                            <p style="text-align: justify">
                                The final descent takes you through lush rainforest, where you receive your summit certificates at Mweka Gate. From here, a short drive takes you back to Moshi, where you can relax and celebrate your incredible achievement.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 1,428m (4,685ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Hotel in Moshi</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch</li>
                            </ul>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 p-4 mt-4">
                        <div class="Acclimatization-list mb-4">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Northern Circuit Route(8 Days)?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ Highest Summit Success Rate – More days allow for better acclimatization.
                                </p>      
                                <p>
                                    ✅ Scenic & Remote – Offers 360-degree views and avoids crowds.
                                </p>      
                                <p>
                                    ✅ Unique Experience – Follows a less-traveled route with diverse landscapes.
                                </p>  
                                <p>
                                    ✅ Climb High, Sleep Low" – Helps with altitude adjustment, reducing sickness.
                                </p>      
                            </div>
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Londorossi Gate → Mti Mkubwa Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Mti Mkubwa Camp → Shira 1 Camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Shira 1 Camp → Moir Hut</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Moir Hut → Buffalo Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Buffalo Camp → Third Cave Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Third Cave Camp → School Hut</li>                      
                        <li class="mb-2"><strong>Day 7 :</strong> School Hut → Uhuru Peak → Mweka Camp</li>                      
                        <li class="mb-2"><strong>Day 8 :</strong> Mweka Camp → Mweka Gate → Moshi</li>                      
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
                            Hot water for washing
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Filtered drinking water throughout the trek
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            VAT fees and charges
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
                                June to October (Best weather, popular season, safety, and high summit success rates)
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