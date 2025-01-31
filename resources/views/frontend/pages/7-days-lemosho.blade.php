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
                    The Lemosho Route is one of the most scenic and successful routes to the summit of Mount Kilimanjaro. It offers stunning landscapes, diverse ecosystems, and excellent acclimatization opportunities, making it a preferred route for climbers. The 7-day version of the trek provides a slightly faster ascent than the 8-day option, but still allows for proper acclimatization, which increases summit success rates.
                </p>
                <p class="">
                    This trek crosses dense rainforests, open moorlands, volcanic ridges, and glaciers, with breathtaking panoramic views throughout.
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
                                <i class="fa fa-calendar-day me-2"></i>Day 1: Londorossi Gate (2,100m) to Mti Mkubwa Camp (2,820m)
                            </h5>
                            <p style="text-align: justify">
                                The trek begins with a drive from Moshi to Londorossi Gate, which takes about 3-4 hours. After registration and permit clearance, a short drive takes trekkers to the Lemosho trailhead.
                            </p>
                            <p class="">
                                The hike starts in the lush rainforest, where climbers can spot colobus monkeys, blue monkeys, and a variety of birds. The trail is sometimes muddy and slippery, requiring gaiters and trekking poles.
                            </p>
                            <p class="">
                                After 3 to 4 hours of hiking, trekkers arrive at Mti Mkubwa Camp (2,820m) for the first night on the mountain.
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
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Mti Mkubwa Camp (2,820m) to Shira 2 Camp (3,850m)
                            </h5>
                            <p style="text-align: justify">
                                The trek leaves the rainforest behind and enters the heath and moorland zone, where the landscape becomes rockier and drier. The trail passes through the Shira Plateau, one of the largest high-altitude plateaus in the world, offering stunning views of Mount Meru and Kibo Peak.
                            </p>
                            <p style="text-align: justify">
                                Trekkers will reach Shira 1 Camp (3,505m) and then continue to Shira 2 Camp (3,850m), where they will spend the night. This longer hike helps with acclimatization, making the next day's altitude gain easier to handle.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 16 km (9.9 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  6–8 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,030m (3,379 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Shira 2 Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Shira 2 Camp (3,850m) to Lava Tower (4,630m) to Barranco Camp (3,976m)
                            </h5>
                            <p style="text-align: justify">
                                This is an important acclimatization day, following the “climb high, sleep low” technique. The trek ascends to Lava Tower (4,630m), a striking volcanic rock formation, where trekkers stop for lunch and rest.
                            </p>
                            <p style="text-align: justify">
                                After Lava Tower, the trail descends to Barranco Camp (3,976m), passing through the "Garden of the Senecios," filled with giant groundsels and lobelias. Although the day ends at a similar elevation as it started, the time spent at high altitude helps the body adjust.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–8 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 780m (2,560 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 654m (2,145 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Semi-Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Barranco Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Barranco Camp (3,976m) to Karanga Camp (4,035m)
                            </h5>
                            <p style="text-align: justify">
                                The day begins with a challenging ascent up the Barranco Wall, a steep rock face that requires some scrambling but is not technical. At the top of the wall, climbers are rewarded with incredible panoramic views of the valley below.
                            </p>
                            <p style="text-align: justify">
                                The trail then descends into the Karanga Valley before reaching Karanga Camp (4,035m), a key acclimatization stop before summit night.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 5 km (3.1 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 59m (194 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert Trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Karanga Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Karanga Camp (4,035m) to Barafu Camp (4,673m)
                            </h5>
                            <p style="text-align: justify">
                                The trail continues to Barafu Camp (4,673m), the final campsite before the summit attempt. The landscape here is rocky, barren, and windswept, with little vegetation due to the harsh climate.
                            </p>
                            <p style="text-align: justify">
                                Trekkers arrive at Barafu Camp by mid-afternoon, allowing time to rest, hydrate, and prepare for the summit push.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 4 km (2.5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 638m (2,093 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,175m (7,135 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Barafu Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Barafu Camp (4,673m) to Uhuru Peak (5,895m) to Mweka Camp (3,100m)
                            </h5>
                            <p style="text-align: justify">
                                The summit attempt begins at midnight. Trekkers ascend through the steep, rocky terrain, making their way to Stella Point (5,756m) on the crater rim. After a short rest, they continue for another hour to reach Uhuru Peak (5,895m), the highest point in Africa.
                            </p>
                            <p style="text-align: justify">
                                After celebrating summit success, trekkers begin their long descent to Mweka Camp (3,100m), passing through Barafu Camp for a quick break.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 17 km (10.5 miles) </li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,222m (4,009 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,795m (9,170 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Arctic (Summit), Moorland (Descent)</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Mweka Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong>  Breakfast, Lunch & Dinner.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 7: Mweka Camp (3,100m) to Mweka Gate (1,640m) to Moshi
                            </h5>
                            <p style="text-align: justify">
                                The final day involves a gentle descent through the rainforest, where hikers may see colobus monkeys and tropical birds.
                            </p>
                            <p style="text-align: justify">
                                At Mweka Gate (1,640m), climbers receive their summit certificates before returning to Moshi for a well-earned rest.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 1,460m (4,790 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Hotel in Moshi</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch</li>
                            </ul>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 p-4 mt-4">
                        <div class="Acclimatization-list mb-4">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Machame Route(7 Days)?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ Gradual ascent → Better acclimatization
                                </p>      
                                <p>
                                    ✅  Diverse scenery → Stunning landscapes
                                </p>      
                                <p>
                                    ✅ Higher summit success rate
                                </p>                 
                            </div>
                            <br>
                            <p>
                                <i>
                                    This 7-day Lemosho trek offers a perfect balance of adventure and altitude adaptation, maximizing summit success rates! 🏔️
                                </i>
                            </p>
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
                        <li class="mb-2"><strong>Day 2 :</strong> Mti Mkubwa Camp → Shira Camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Shira Camp → Lava Tower → Barranco Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Barranco Camp → Karanga Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Karanga Camp → Barafu Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Barafu Camp → Uhuru Peak → Mweka Camp</li>                      
                        <li class="mb-2"><strong>Day 7 :</strong> Mweka Camp → Mweka Gate → Moshi</li>                      
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