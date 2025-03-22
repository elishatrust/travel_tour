@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl pt-5">
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
                    The Machame Route, also known as the “Whiskey Route”, is one of the most popular trails on Mount Kilimanjaro due to its scenic beauty, diverse landscapes, and high summit success rate. The 7-day itinerary provides a more gradual ascent compared to the 6-day version, allowing for better acclimatization and improving the chances of reaching Uhuru Peak (5,895m).
                    This trek takes hikers through dense rainforests, moorlands, alpine deserts, and glaciers, offering stunning panoramic views throughout the journey.
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
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 1: Machame Gate (1,640m) to Machame Camp (2,835m)
                            </h5>
                            <p style="text-align: justify">
                                The trek starts with a scenic drive from Moshi to Machame Gate, taking about 1 hour. After registration at Kilimanjaro National Park, the hike begins through lush rainforest, home to colobus monkeys, exotic birds, and rich vegetation.
                            </p>
                            <p class="">
                                The trail is muddy and steep in places, with giant ferns and towering trees providing a cool and humid environment. After 5 to 7 hours, trekkers arrive at Machame Camp (2,835m), where they settle in for the night.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 11 km (6.8 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  5–7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,195m (3,921 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Machame Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Machame Camp (2,835m) to Shira Camp (3,850m)
                            </h5>
                            <p style="text-align: justify">
                                The trek continues with a steep ascent through the moorland zone, where trees give way to giant heather, lobelias, and unique volcanic rock formations. The route crosses a rocky ridge before leading to the Shira Plateau, which provides breathtaking views of Mount Meru and Kibo Peak.
                            </p>
                            <p style="text-align: justify">
                                Trekkers reach Shira Camp (3,850m) after 4 to 6 hours, where they relax, enjoy the stunning sunset, and spend the night under the starry African sky.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 5 km (3.1 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,015m (3,330 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Shira Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Shira Camp (3,850m) to Lava Tower (4,630m) to Barranco Camp (3,976m)
                            </h5>
                            <p style="text-align: justify">
                                This is a key acclimatization day, following the principle of “climb high, sleep low”. The trail leads to Lava Tower (4,630m), a striking volcanic rock formation where trekkers take a short rest before descending to Barranco Camp (3,976m).
                            </p>
                            <p style="text-align: justify">
                                The descent offers amazing views of the Western Breach and passes through the “Garden of the Senecios,” filled with giant groundsels. Although the day ends at almost the same elevation as the morning, it helps the body adjust to higher altitudes.
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
                                The trek starts with a challenging climb up Barranco Wall, a steep rock face that requires some scrambling but rewards hikers with stunning views.
                            </p>
                            <p style="text-align: justify">
                                After reaching the top of the wall, the trail continues with a series of small ascents and descents before arriving at Karanga Camp (4,035m), which serves as another acclimatization point before the final ascent.
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
                                Trekkers continue the steep ascent towards Barafu Camp (4,673m), the final campsite before the summit attempt. The landscape here is barren and rocky, with little vegetation due to the harsh alpine desert climate.
                            </p>
                            <p style="text-align: justify">
                                Upon reaching Barafu Camp, climbers rest, hydrate, and prepare for the midnight summit push.
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
                                The summit attempt begins at midnight. Trekkers slowly ascend through the dark, making their way up the steep switchbacks and scree slopes to Stella Point (5,756m), where they take a short break.
                            </p>
                            <p style="text-align: justify">
                                From here, it’s a final 1-hour push to Uhuru Peak (5,895m), the highest point in Africa. Climbers witness a breathtaking sunrise over the glaciers, take photos, and celebrate their achievement.
                            </p>
                            <p style="text-align: justify">
                                After a short time at the summit, trekkers begin the long descent to Mweka Camp (3,100m), passing through Barafu Camp for a quick rest.
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
                                The final day involves a gentle descent through the lush rainforest, where hikers may see colobus monkeys, exotic birds, and vibrant plant life.
                            </p>
                            <p style="text-align: justify">
                                Upon reaching Mweka Gate, climbers receive their summit certificates before returning to Moshi for a well-deserved rest.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–7  Hours</li>
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
                                    ✅ More time for acclimatization → Higher success rates
                                </p>      
                                <p>
                                    ✅ Spectacular scenery → Diverse landscapes
                                </p>      
                                <p>
                                    ✅ Challenging but rewarding → A true adventure
                                </p>                 
                            </div>
                            <br>
                            <p>
                                <i>
                                    This 7-day Machame trek is the perfect balance of adventure and acclimatization, maximizing summit success while offering a memorable trekking experience! 🏔️
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Machame Gate → Machame Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Machame Camp → Shira Camp</li>
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