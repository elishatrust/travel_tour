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
                    The Lemosho Route is considered one of the most scenic and successful routes to the summit of Mount Kilimanjaro (5,895m / 19,341ft). The 8-day itinerary allows for gradual acclimatization, improving summit success rates. It offers breathtaking views, diverse landscapes, and a less crowded experience compared to other routes.
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
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Shira 1 (3,500m) to Shira 2 Camp (3,850m)
                            </h5>
                            <p style="text-align: justify">
                                The trail continues across the Shira Plateau, offering spectacular views of Kibo Peak. You pass through volcanic rock formations and enjoy a relaxed hike with gentle ascents. Shira 2 Camp is located at a higher elevation, helping with acclimatization.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 7 km (4.3 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 350m (1,148ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Shira 2 Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Shira 2 (3,850m) to Lava Tower (4,630m) to Barranco Camp (3,976m)
                            </h5>
                            <p style="text-align: justify">
                                This is an important acclimatization day. The route gradually ascends to Lava Tower (4,630m / 15,190ft), where you take a break before descending to Barranco Camp. This "climb high, sleep low" strategy significantly boosts your acclimatization, improving your chances of reaching the summit.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 780m (2,559ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 654m (2,145ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert Trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Barranco Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Barranco Camp (3,976m) to Karanga Camp (3,995m)
                            </h5>
                            <p style="text-align: justify">
                                The day begins with climbing the Barranco Wall, a steep but non-technical climb offering incredible views. After reaching the top, the trail descends slightly before leading to Karanga Camp, which sits in a valley. This is a shorter day, allowing for rest and acclimatization.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 5 km (3.1 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  4–5   Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 19m (62ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Karanga Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Karanga Camp (3,995m) to Barafu Camp (4,673m)
                            </h5>
                            <p style="text-align: justify">
                                The trek to Barafu Camp is relatively short but steep, passing through an alpine desert. Upon arrival, you rest and prepare for summit night. Early dinner and sleep are crucial, as the final ascent begins at midnight.
                             </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 4 km (2.5 mi) </li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 678m (2,224ft)</li>
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
                                <i class="fa fa-calendar-day me-2"></i>Day 7: Barafu Camp (4,673m) to Uhuru Peak (5,895m) to Mweka Camp (3,068m)
                            </h5>
                            <p style="text-align: justify">
                                Summit day! The climb begins around midnight, with a challenging ascent through steep scree slopes to Stella Point (5,756m / 18,885ft). After a short rest, you continue along the crater rim to Uhuru Peak (5,895m / 19,341ft), the highest point in Africa. After celebrating, you descend to Mweka Camp, stopping at Barafu Camp for lunch.
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
                                <i class="fa fa-calendar-day me-2"></i>Day 8: Mweka Camp (3,068m) to Mweka Gate (1,640m), drive to Moshi
                            </h5>
                            <p style="text-align: justify">
                                The final descent takes you through the lush rainforest to Mweka Gate, where you receive your summit certificates. From here, a short drive returns you to Moshi, where you can relax and celebrate your achievement.
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
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Lemosho Route(8 Days)?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ High Success Rate – Longer duration improves acclimatization.
                                </p>      
                                <p>
                                    ✅ Less Crowded – Starts on the quieter western side of Kilimanjaro.
                                </p>      
                                <p>
                                    ✅ Scenic Views – Diverse landscapes, from rainforest to glaciers.
                                </p>  
                                <p>
                                    ✅ Good Acclimatization – "Climb high, sleep low" approach increases success.
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
                        <li class="mb-2"><strong>Day 3 :</strong> Shira 1 Camp → Shira 2 Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Shira 2 Camp → Lava Tower Camp → Barranco Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Barranco Camp → Karanga Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Karanga Camp → Barafu Camp</li>                      
                        <li class="mb-2"><strong>Day 7 :</strong> Barafu Camp → Uhuru Peak → Mweka Camp</li>                      
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