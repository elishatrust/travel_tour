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
                    The Machame Route, also known as the “Whiskey Route”, is one of the most scenic and popular paths to Mount Kilimanjaro’s summit. It offers a gradual acclimatization process, diverse landscapes, and stunning views. The 6-day trek is physically demanding, but it provides excellent acclimatization opportunities through its climb high, sleep low strategy. Unlike the Marangu Route, this trek requires camping, making it a more immersive wilderness experience.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
                <i class="fa fa-list me-2"></i>
                <span class="" style="color: #f1671e">Safari Itinerary</span>
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
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 1: Machame Gate to Machame Camp
                            </h5>
                            <span style="text-align: justify">
                                The trek begins at Machame Gate (1,800m), where registration is completed before entering Kilimanjaro National Park. The trail starts with a gradual ascent through the dense rainforest, where trekkers may encounter blue monkeys and colobus monkeys. The path can be muddy and slippery, so trekking poles and proper footwear are recommended. After 5 to 7 hours of trekking, climbers arrive at Machame Camp (2,835m) for the first night in tents.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~11 km (~6.8 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 5–7 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,035m (3,396 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Rainforest zone, lush vegetation, wildlife.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/51.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 2: Miriakamba Huts to Saddle Hut
                            </h5>
                            <span style="text-align: justify">
                                The day begins with a steep ascent as the rainforest transitions into the moorland zone, where the vegetation becomes more sparse. Trekkers climb over rocky ridges and volcanic formations, offering spectacular views of Mount Meru and the Shira Plateau. By midday, the group reaches Shira Camp (3,750m), an open space with breathtaking views of Kilimanjaro’s peaks. The afternoon is spent resting and acclimatizing to the higher altitude.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~5 km (~3.1 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 4–6 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 915m (3,002 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Moorland zone, scenic views of Shira Plateau</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 3: Shira Camp to Lava Tower, then to Barranco Camp
                            </h5>
                            <span style="text-align: justify">
                                This day follows the “climb high, sleep low” acclimatization strategy. The trail ascends towards Lava Tower (4,630m), a volcanic rock formation where trekkers rest and enjoy lunch. This high-altitude exposure helps the body adjust to lower oxygen levels. After spending time at Lava Tower, the trail descends into the beautiful Barranco Valley (3,900m), passing through unique Senecio plants. Trekkers arrive at Barranco Camp, known for its stunning sunset views and towering cliffs.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~10 km (~8 miles)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 6–8 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong>  12,500ft → 13,000ft (with a climb to 15,190ft at Lava Tower)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Semi-Desert.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 4: From Barranco Camp to Karanga Camp to Barafu Camp
                            </h5>
                            <span style="text-align: justify">
                                After breakfast, the journey begins with a steep climb up the Barranco Wall, requiring some light rock scrambling. The trail continues through the Karanga Valley, where a short break is taken. Moving onward, the trek connects with the Mweka Trail and ascends towards Barafu Camp (15,000ft). This marks the completion of the Southern Circuit, providing panoramic views of Mawenzi and Kibo Peaks. At Barafu, climbers rest, eat, and prepare for the final summit attempt.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~9 km (5.6 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 8–10 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 773m (2,537 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Alpine Desert.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 5: Barafu Camp to Uhuru Peak, then down to Mweka Camp
                            </h5>
                            <span style="text-align: justify">
                                This is the most challenging and rewarding day of the trek. The summit push begins at midnight, climbing in the dark under freezing temperatures. The trail passes Stella Point (5,756m) before reaching Uhuru Peak (5,895m), the highest point in Africa. Witnessing the sunrise over the glaciers is a truly unforgettable moment. After celebrating and taking photos, trekkers descend to Barafu Camp for a short rest before continuing down to Mweka Camp (3,100m) for the night.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~17 km (~10.6 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> 12–16 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 2,795m (9,169 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Summit sunrise, glaciers, breathtaking views.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch & Dinner Included.</li>
                            </ul>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        {{-- <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="me-2" /> --}}
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                Day 6: Mweka Camp to Mweka Gate
                            </h5>
                            <span style="text-align: justify">
                                The final day is a gradual descent through the tropical rainforest, where trekkers may spot colobus monkeys and exotic birds. Upon reaching Mweka Gate (1,640m), climbers receive summit certificates before being transported back to Moshi, where they can enjoy a hot shower and well-deserved rest.
                            </span>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> ~10 km (~6.2 mi)</li>
                                <li><i class="fa fa-clock me-2"></i><strong>Time:</strong> ~5 Hours</li>
                                <li><i class="fa fa-mountain me-2"></i><strong>Elevation:</strong> 1,460m (4,790 ft)</li>
                                <li><i class="fa fa-star me-2"></i><strong>Highlights:</strong> Lush rainforest, Kilimanjaro National Park exit.</li>
                                <li><i class="fa fa-coffee me-2"></i><strong>Meals:</strong> Breakfast, Lunch.</li>
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
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi → Machame Gate to Machame Camp</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Machame Camp to Shira Camp</li>
                        <li class="mb-2"><strong>Day 3 :</strong> Shira Camp to Lava Tower, then to Barranco Camp</li>                      
                        <li class="mb-2"><strong>Day 4 :</strong> Barranco Camp to Barafu Camp</li>                      
                        <li class="mb-2"><strong>Day 5 :</strong> Barafu Camp to Uhuru Peak, then down to Mweka Camp</li>                      
                        <li class="mb-2"><strong>Day 6 :</strong> Mweka Camp to Mweka Gate</li>                      
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
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Trek</h5>
                        <div class="">
                            <p  style="text-align: justify">
                                The dry season (June–October and January–February) offers clear skies and stable weather, making it the best time to hike.
                                Avoid the rainy season (March–May and November–December).
                            </p> 
                            <p class="">Ensure you're fully equipped for the adventure. Key items include:</p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection