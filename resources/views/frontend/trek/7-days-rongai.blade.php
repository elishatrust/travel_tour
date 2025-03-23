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
                    The Rongai Route is the only trail that approaches Mount Kilimanjaro from the northern side, near the Kenyan border. It is a less crowded, scenic, and gradual ascent, making it an excellent choice for trekkers looking for better acclimatization and higher summit success rates.
                    This 7-day itinerary includes an extra acclimatization day at Mawenzi Tarn, which significantly improves the chances of reaching Uhuru Peak (5,895m). The trek passes through diverse landscapes, including rainforests, moorlands, alpine deserts, and glaciers.
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
                                <i class="fa fa-calendar-day me-2"></i>Day :1 Rongai Gate (1,950m) to Simba Camp (2,650m)
                            </h5>
                            <p style="text-align: justify">
                                The adventure begins with a scenic drive from Moshi to Rongai Gate, which takes about 3–4 hours. After registering at the Kilimanjaro National Park, the trek starts through a beautiful rainforest, home to colobus monkeys, birds, and rich vegetation.
                            </p>
                            <p class="">
                                The trail ascends gently, providing a less steep start compared to other routes. After 3 to 4 hours, hikers reach Simba Camp (2,650m), located on the edge of the moorland zone, where they enjoy dinner and rest overnight.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~8 km (~5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 700m (2,297 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Simba Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 2: Simba Camp (2,650m) to Second Cave Camp (3,450m)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, the trek continues with a steady ascent into the moorland zone, where vegetation changes to shrubs, giant lobelias, and rocky landscapes. Trekkers will enjoy incredible views of the Kenyan plains while gradually adjusting to the altitude.
                            </p>
                            <p style="text-align: justify">
                                After about 3 to 4 hours of hiking, climbers reach Second Cave Camp (3,450m), where they have lunch and spend the afternoon resting to help with acclimatization.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~7 km (~4.3 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~9 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 800m (2,625 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Second Cave (Tents)</li>
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
                            <p style="text-align: justify">
                                The trek becomes steeper as the route leads towards Kikelewa Camp, passing through rocky terrain with sparse vegetation. The air is thinner at this point, and climbers may start to feel the effects of altitude.
                            </p>
                            <p style="text-align: justify">
                                After 3 to 4 hours, hikers reach Kikelewa Camp (3,600m), which is located in a small, scenic valley surrounded by towering hills. The rest of the afternoon is spent relaxing and acclimatizing before dinner.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~5 km (~3.1 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~3–4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 150m (492 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Kikelewa Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 4: Kikelewa Camp (3,600m) to Mawenzi Tarn Camp (4,330m) (Acclimatization Day)
                            </h5>
                            <p style="text-align: justify">
                                The climb continues with a steep ascent towards Mawenzi Tarn Camp (4,330m), a breathtaking campsite located beneath the dramatic Mawenzi Peak.
                            </p>
                            <p style="text-align: justify">
                                This is an important acclimatization day, allowing trekkers to adjust to the altitude before the summit attempt. In the afternoon, hikers take a short hike to higher elevations and return to camp for rest and dinner.                    
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~6 km (~3.7 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 3–4 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 730m (2,395 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert Trek</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Mawenzi Tarn Camp (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 5: Mawenzi Tarn Camp (4,330m) to Kibo Hut (4,700m)
                            </h5>
                            <p style="text-align: justify">
                                The trail crosses the saddle between Mawenzi and Kibo, entering the alpine desert zone, where temperatures drop significantly, and vegetation is scarce.
                            </p>
                            <p style="text-align: justify">
                                Trekkers reach Kibo Hut (4,700m) by mid-afternoon, where they eat, hydrate, and rest before the midnight summit attempt.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 8 km (5 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–6  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,565m (5,134 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,175m (7,135 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Kibo Hut (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 6: Kibo Hut (4,700m) to Uhuru Peak (5,895m) to Horombo Hut (3,720m)
                            </h5>
                            <p style="text-align: justify">
                                At midnight, the final push to the summit begins. The climb to Uhuru Peak (5,895m) is the most challenging section, requiring perseverance and mental strength.
                            </p>
                            <p style="text-align: justify">
                                Trekkers first reach Gilman’s Point (5,685m), where they take a short break before continuing along the crater rim to Uhuru Peak, the highest point in Africa.
                            </p>
                            <p style="text-align: justify">
                                After celebrating the achievement and taking photos, hikers descend to Kibo Hut for a short rest, then continue to Horombo Hut (3,720m) for the night.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 21 km (13 miles) </li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Gain:</strong> 1,195m (3,921 ft)</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 2,175m (7,135 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Arctic</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Horombo Hut (Tents)</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>Day 7: Horombo Hut (3,720m) to Marangu Gate (1,860m) to Moshi
                            </h5>
                            <p style="text-align: justify">
                                The trail crosses the saddle between Mawenzi and Kibo, entering the alpine desert zone, where temperatures drop significantly, and vegetation is scarce.
                            </p>
                            <p style="text-align: justify">
                                Trekkers reach Kibo Hut (4,700m) by mid-afternoon, where they eat, hydrate, and rest before the midnight summit attempt.
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 19 km (11.8 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–7  Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation Loss:</strong> 1,860m (6,102 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest</li>
                                <li><i class="fa fa-home me-2"></i><strong>Accommodation:</strong> Hotel in Moshi</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast & Lunch</li>
                            </ul>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 p-4 mt-4">
                        <div class="Acclimatization-list mb-4">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose the Rongai Route(7 Days)?</h5>
                            </div>
                            <div class="">
                                <li class="mb-2">
                                    <i class="far fa-check-circle text-primary me-1"></i> 
                                    Less Crowded – Fewer trekkers compared to other routes
                                </li>                   
                                <li class="mb-2">
                                    <i class="far fa-check-circle text-primary me-1"></i> 
                                    Drier Trail – Ideal during the rainy season
                                </li>                 
                                <li class="mb-2">
                                    <i class="far fa-check-circle text-primary me-1"></i> 
                                    Gradual Ascent – Better acclimatization for a higher summit success rate
                                </li>                 
                                <li class="mb-2">
                                    <i class="far fa-check-circle text-primary me-1"></i> 
                                    Unique Approach – The only route starting from the north
                                </li>                      
                            </div>
                            <br>
                            <p>
                                <i>
                                    This 7-day Rongai Route is perfect for climbers seeking a quiet, scenic, and well-paced ascent while maximizing their chances of reaching Uhuru Peak! 🏔️
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Rongai Gate → Simba Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Simba Camp → Second Cave Camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Second Cave Camp → Kikelewa Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Kikelewa Camp → Mawenzi Tarn Camp(Acclimatization Day)</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Mawenzi Tarn Camp → Kibo Hut</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Kibo Hut → Uhuru Peak → Horombo Hut</li>                      
                        <li class="mb-2"><strong>Day 7 :</strong> Horombo Camp → Marangu Gate → Moshi</li>                      
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