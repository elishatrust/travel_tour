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
                    <img src="{{ asset('assets/frontend/img/safari/50.jpg') }}" alt="Image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/frontend/img/safari/42.jpg') }}" alt=" Image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/frontend/img/safari/41.jpg') }}" alt="Image">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('assets/frontend/img/safari/29.jpg') }}" alt="Image">
                </div>          
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Trekking Overview</h4>
                <p class="" style="text-align: justify">
                    The Marangu Route, also known as the “Coca-Cola Route,” is the easiest and most popular path to Mount Kilimanjaro's summit. It is the only route featuring comfortable mountain huts equipped with solar lighting and beds, offering a more convenient and social trekking experience. The shared dining huts foster an engaging atmosphere among climbers from around the world.
                    While typically completed in five days, an extra day is recommended for better acclimatization, increasing summit success rates. The route is also the most budget-friendly option and provides access to basic amenities, including running water and latrines at lower camps.
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
                                <i class="fa fa-calendar-day me-2"></i>Day :1 Marangu Gate (1860m) to Mandara Hut (2700m)
                            </h5>
                            <span style="text-align: justify">
                                The trek begins at Marangu Gate, where climbers complete registration formalities before starting the ascent through the lush rainforest. This 5-hour hike is relatively gentle, leading through towering trees, dense foliage, and a variety of wildlife, including blue monkeys and colobus monkeys. 
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~8.3 km (~5.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,860m to 2,700m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest trek, possible sightings of primates, optional Maundi Crater visit for panoramic views.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Mandara Hut (2700m) to Horombo Hut (3700m)
                            </h5>
                            <span style="text-align: justify">
                                Leaving Mandara Hut, the landscape transitions from rainforest to heath and moorland. Trekkers will notice the shrinking tree cover, replaced by giant heathers and Senecio plants. The climb is gradual yet demanding, taking approximately 9 hours, with incredible views of Mawenzi and Kibo peaks. 
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~12.5 km (~7.8 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,700m to 3,700m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Transition from rainforest to moorland, breathtaking views of Mawenzi & Kibo peaks.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Acclimatization Day – Horombo Hut → Zebra Rocks → Return  to Horombo Hut
                            </h5>
                            <span style="text-align: justify">
                                This acclimatization day is crucial for adjusting to the altitude and increasing summit success rates. A short trek to Zebra Rocks (4,020m) helps trekkers adapt while offering an opportunity to explore unique striped rock formations formed by lava deposits. The return to Horombo Hut allows for a hot lunch and relaxation, ensuring climbers are well-rested before ascending further. 
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~5 km (~3.1 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,700m to 4,020m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Acclimatization trek to Zebra Rocks, crucial for summit success.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Horombo Hut (3700m) to Kibo Hut (4700m)
                            </h5>
                            <span style="text-align: justify">
                                This is a challenging trekking day, as climbers ascend through the alpine desert zone. The trail crosses the “Last Water Point”, marking the final natural water source before the summit. The path leads through the Saddle, a vast, barren plateau between Mawenzi and Kibo peaks, with strong winds and extreme temperature fluctuations. The 7-hour trek ends at Kibo Hut, where trekkers have an early dinner before resting. 
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~10 km (~6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,700m to 4,700m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Trek across the saddle plateau, a barren landscape between Mawenzi and Kibo.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Kibo Hut (4,700m) to Uhuru Peak (5,895m) to Descend to Horombo Hut (3,700m)
                            </h5>
                            <span style="text-align: justify">
                                Summit day begins at midnight, as climbers embark on the most demanding section of the trek. The steep ascent leads past Hans Meyer Cave (5,220m) before reaching Gillman’s Point (5,681m) at sunrise. The final push to Uhuru Peak (5,895m) takes 1–2 additional hours, offering breathtaking sunrise views over glaciers and the African plains. After celebrating at the summit, climbers descend back to Kibo Hut for a short rest, then continue down to Horombo Hut, experiencing warmer air and increasing oxygen levels
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~22 km (~13.7 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 12–15 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 4,700m → 5,895m → 3,700m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Summit push at midnight, reaching Gillman’s Point (5,681m) at sunrise, final ascent to Uhuru Peak for breathtaking views.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Horombo Hut to Marangu Gate
                            </h5>
                            <span style="text-align: justify">
                                The final descent retraces the moorland and rainforest paths, providing trekkers with a last chance to enjoy Kilimanjaro’s stunning scenery. A stop at Mandara Hut for lunch allows time to reflect on the journey before the final stretch back to Marangu Gate. Here, climbers receive summit certificates before being transferred back to Moshi, where they can enjoy a hot shower and well-earned celebration.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~20.8 km (~12.9 mi) </li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 3,570m to 1,600m</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest descent, summit certificates, return to Moshi.</li>
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Marangu Gate → Mandara Hut.</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Mandara Hut → Horombo Hut</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Horombo Hut → Zebra Rocks → Return</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Horombo Hut → Kibo Hut</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Kibo Hut → Uhuru Peak → Descend to Horombo Hut</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Horombo Hut → Marangu Gate</li>                      
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
                        <h5 class="h6 text-muted py-3 text-uppercase">Acclimatization & Precautions</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Extra day at Horombo Hut recommended
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Hydration, slow ascent, and recognizing altitude sickness symptoms are crucial
                        </li>                      
                    </div>
                </div>   
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Trek</h5>
                        <div class="">                  
                            <li class="mb-2">
                                <i class="far fa-check-circle text-primary me-1"></i> 
                                January–March, June–October (Stable weather, better summit success)
                            </li>                     
                            <li class="mb-2">
                                <i class="far fa-check-circle text-primary me-1"></i> 
                                Ensure you're fully equipped for the adventure. Key items include
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