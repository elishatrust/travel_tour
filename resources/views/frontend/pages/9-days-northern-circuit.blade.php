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
                        <img src="{{ asset('assets/frontend/img/safari/0030.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/safari/0037.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/safari/29.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Trekking Overview</h4>
                <p class="" style="text-align: justify">
                    The 9-day Northern Circuit Route is the longest and most scenic trail on Mount Kilimanjaro. It offers excellent acclimatization, diverse landscapes, and fewer crowds, making it one of the best routes for a successful summit.
                    Total Distance: ~96 km (60 mi) while Duration: 9 Days / 8 Nights                
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
                                Leaving the rainforest behind, the trail enters the moorland zone, where vegetation becomes sparse, and temperatures drop. The ascent is gradual but becomes steeper as you approach the Shira Plateau, a vast, high-altitude desert.
                            </p>
                            <p style="text-align: justify">
                                From here, you have breathtaking views of Kilimanjaro's western slopes and Shira Ridge, an ancient volcanic caldera. By late afternoon, you reach Shira 1 Camp, where you enjoy your first night in a high-altitude environment.
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
                                <i class="fa fa-calendar-day me-2"></i>Day 3: Shira 1 Camp (3,610m) to Shira 2 Camp (3,850m)
                            </h5>
                            <p style="text-align: justify">
                                This day features a gradual trek across the Shira Plateau, one of the most scenic parts of Kilimanjaro. You walk on rocky terrain, passing giant lobelias and groundsels, plants adapted to the high-altitude environment.
                            </p>
                            <p style="text-align: justify">
                                In the afternoon, you reach Shira 2 Camp, a campsite with panoramic views of Mount Meru and the Great Rift Valley. Since the elevation gain is low today, it helps with acclimatization.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 7 km (4.3 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 240m (790ft)</li>
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
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Shira 2 Camp (3,850m) to Lava Tower (4,630m) to Buffalo Camp (4,020m)
                            </h5>
                            <p style="text-align: justify">
                                This is a challenging acclimatization day, featuring a trek to Lava Tower (4,630m), also known as the Shark’s Tooth. The ascent is gradual, with changing landscapes from moorland to alpine desert.
                            </p>
                            <p style="text-align: justify">
                                After lunch at Lava Tower, you descend slightly into the Northern Circuit, reaching Buffalo Camp in the afternoon. The descent aids acclimatization and allows the body to adjust to high altitudes.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 15 km (9.3 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 7–9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 780m (2,560ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 610m (2,000ft)</li>
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
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Buffalo Camp (4,020m) to Third Cave Camp (3,870m)
                            </h5>
                            <p style="text-align: justify">
                                The trek continues eastward around the northern slopes of Kilimanjaro, offering stunning views of Kenya’s Amboseli National Park. The terrain is rocky and barren, and the air becomes thinner.
                            </p>
                            <p style="text-align: justify">
                                By afternoon, you reach Third Cave Camp, a remote campsite offering peaceful surroundings and spectacular night skies.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 8 km (5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong>  5–7   Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 150m (490ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Third Cave Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Third Cave Camp (3,870m) to School Hut (4,800m)
                            </h5>
                            <p style="text-align: justify">
                                Today’s trek is short but steep, leading to School Hut, the final base camp before the summit attempt. The landscape is barren and dry, resembling a lunar desert.
                            </p>
                            <p style="text-align: justify">
                                Upon arrival, you rest early in preparation for summit night.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 5 km (3.1 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–5  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 930m (3,050ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong>  Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> School Hut (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong>  Breakfast, Lunch & Dinner.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 7: School Hut (4,800m) to Uhuru Peak (5,895m) to Crater Camp (5,730m)
                            </h5>
                            <p style="text-align: justify">
                                Summit night begins at midnight. The climb is steep and physically demanding, passing Gilman’s Point (5,681m) before reaching Uhuru Peak (5,895m), the highest point in Africa!
                            </p>
                            <p style="text-align: justify">
                                After a brief celebration and photos, you descend slightly to Crater Camp (5,730m), one of the most unique and extreme campsites in the world.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 6 km ascent (3.7 mi) / 3 km descent (1.9 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–8  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong>  1,095m (3,590ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 165m (540ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Arctic</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 8: Crater Camp (5,730m) to Mweka Camp (3,100m)
                            </h5>
                            <p style="text-align: justify">
                                After a spectacular sunrise over Kilimanjaro, you begin your descent. The terrain is rocky and dusty, requiring trekking poles. By afternoon, you reach Mweka Camp, located in the lush rainforest.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 12 km (7.5 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 7–9  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,630m (8,630ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert to Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Mweka Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 9: Mweka Camp (3,100m) to Mweka Gate (1,640m) – Drive to Moshi
                            </h5>
                            <p style="text-align: justify">
                                The final trek is through dense rainforest, with chances to see wildlife. Upon reaching Mweka Gate, you receive your summit certificates and return to Moshi (or Arusha) for celebrations! 🎉
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10 km (6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 1,460m (4,790ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Hotel in Moshi</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch</li>
                            </ul>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 p-4 mt-4">
                        <div class="Acclimatization-list mb-4">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Northern Circuit Route(9 Days)?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ Highest Success Rate – Best acclimatization with a 99% summit success rate
                                </p>      
                                <p>
                                    ✅ Scenic & Remote – Less crowded than other routes
                                </p>      
                                <p>
                                    ✅ Best for Acclimatization – Gradual ascent reduces altitude sickness risk
                                </p>  
                                <p>
                                    ✅ Unique Crater Camp Experience – One of the few routes that allows overnight stays near the summit
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
                        <li class="mb-2"><strong>Day 4 :</strong> Shira 2 Camp → Lava Tower Camp → Buffalo Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Buffalo Camp → Third Cave Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Third Cave Camp → School Hut</li>                      
                        <li class="mb-2"><strong>Day 7 :</strong> School Hut → Uhuru Peak → Crater Camp</li>                      
                        <li class="mb-2"><strong>Day 8 :</strong> Crater Camp → Mweka Camp</li>                      
                        <li class="mb-2"><strong>Day 9 :</strong> Mweka Camp → Mweka Gate → Moshi</li>                      
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