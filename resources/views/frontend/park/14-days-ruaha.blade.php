@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 col-sm-12" style="justify-content: space-between">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-12 col-sm-12 mb-4">
                <div class="gallery">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi8.png') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi3.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/ruaha2.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi7.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">safari Overview</h4>
                <p style="text-align: justify">
                    uaha National Park, originally gazetted in the early 1950s, spans an impressive area of approximately 10,300 square kilometers. The primary motivation for its establishment was the preservation of the Miombo woodlands, a unique and ecologically significant forest type characterized by the presence of two dominant tree species: Julbernardia and Brachystegia. These woodlands serve as a crucial habitat for diverse wildlife species, supporting a rich biodiversity.
                    Over time, the park was expanded to encompass vital water catchment areas, ensuring a sustainable water supply for both wildlife and ecosystems. Notably, it plays a critical role in conserving the Great Ruaha River, preventing its seasonal drying and maintaining a continuous water flow essential for the survival of various species within the park.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
                <i class="fa fa-walking me-2"></i>
                <span class="">Safari Itinerary</span>
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
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 1: Journey from Iringa to Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                Following breakfast at the hotel, you will embark on a scenic drive to Ruaha National Park. The journey typically takes approximately 2.5 hours, though travel time may vary based on wildlife sightings and road conditions. Upon arrival, you will check in and set up camp before enjoying a hot lunch. After a brief period of leisure, the adventure begins with an evening game drive, offering an introduction to the park’s remarkable wildlife, including antelopes, giraffes, buffaloes, lions, leopards, elephants, cheetahs, and many more species.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 2: Full-Day Game Drive Exploration
                            </h5>
                            <p style="text-align: justify">
                                An early breakfast will be followed by a full-day game drive, allowing for an immersive experience in the park’s diverse landscapes. A picnic lunch will be served at a designated site within the park, after which the game drive will continue until evening. The day concludes with a return to the camp for dinner and an overnight stay at the lodge.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Walking Safari and Evening Game Drive
                            </h5>
                            <p style="text-align: justify">
                                Begin the day with a morning coffee or tea before setting out on a guided walking safari lasting 3 to 4 hours. This exhilarating experience offers an up-close encounter with nature, providing insights into the smaller, often overlooked details of the ecosystem that are not typically observed during game drives. Following the walk, a delightful bush breakfast will be served. The afternoon will be spent at leisure at the camp, followed by an evening game drive lasting approximately three hours. Dinner and overnight stay at the lodge.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 4: Sunrise and Sunset Game Drives
                            </h5>
                            <p style="text-align: justify">
                                The day starts with an early morning game drive from 06:30 to 09:30, with breakfast served en route. The drive continues until lunchtime, after which you will return to the camp for a hot lunch and a relaxing afternoon. In the evening, another game drive will be conducted, offering breathtaking sunset views. Dinner and overnight stay at the lodge.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 5: Trekking on Kilimatonge Hill and Wildlife Safari
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, you will embark on an adventurous trek up Kilimatonge Hill, a three-hour excursion offering panoramic views of the surrounding landscapes. Following the trek, a picnic lunch will be provided before proceeding with an extended game drive, continuing until evening. Dinner and overnight at the camp.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Days 6-13: In-Depth Exploration of Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                Each day will begin with an early morning game drive, with breakfast served in the park. The morning drive will be followed by a return to camp for lunch and an afternoon period of relaxation. In the evening, another game drive will take place, offering opportunities to witness the park’s wildlife in different settings. Each day’s itinerary will vary to explore different regions of the park, maximizing your chances of encountering rare species and diverse landscapes.
                            </p>
                        </div>
                    </div>          
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 14: Final Game Drive and Return to Iringa
                            </h5>
                            <p style="text-align: justify">
                                On the final day, you will wake up to a captivating sunrise game drive, followed by breakfast at the camp. The adventure continues with a farewell game drive, offering a final opportunity to spot any missed wildlife. A bush lunch will be provided before exiting the park in the afternoon. You will then travel back to Iringa, where dinner and an overnight stay at a pre-arranged lodge will conclude the safari experience.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 p-4">
                        <div class="Acclimatization-list">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose This Safari?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ Diverse Destinations – Explore a mix of savannah, wetlands, and tropical rainforests.
                                </p>      
                                <p>
                                    ✅ Exclusive Wildlife Experiences – Visit less crowded parks with abundant game.
                                </p>      
                                <p>
                                    ✅ Variety of Activities – Enjoy game drives, boat safaris, walking safaris, and trekking.
                                </p>      
                                <p>
                                    ✅ Breathtaking Scenery – Experience open plains, river systems, and mountain landscapes.
                                </p> 
                            </div>
                            <br>
                            <p>
                                <i>
                                    This itinerary offers an authentic and immersive Tanzanian safari, perfect for wildlife lovers, adventure seekers, and those looking to explore off-the-beaten-path destinations.
                                </i>
                            </p>
                        </div>  
                    </div>            
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 pl-5">
                <div class="include-pack mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Included Packages</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Private professional safari guide
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Destinations transfers (airport transfer)
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Private 4 x 4 safari with roof for game viewing
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Daily bottle of mineral water during Safari
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            All meals during safari (breakfast, lunch, dinner)
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Entrance, park fees and 18% VAT to our entrance fees
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
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Tip to the driver guide and hoteliers
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Bank transfer charges & card payments processing fee.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Expenses belong to person nature e.g Drinks not included on the meal plans, personal purchases, Laundry etc.
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
                            Headlamp, Safari poles, hydration system.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Sunscreen, first-aid kit, snacks.
                        </li>                      
                    </div>
                </div>   
                <div class="safari-activities mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Safari Activities</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Game Drives – Explore vast landscapes teeming with wildlife.
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Boat Safari – Cruise along the Rufiji River, spotting hippos, crocodiles, and aquatic birds.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Walking Safari – Experience nature up close with expert guides.
                        </li>                      
                    </div>
                </div>
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Trek</h5>
                        <div class="">
                            <p  style="text-align: justify">
                                The dry season (June–October and January–February) offers clear skies and is ideal for wildlife viewing as animals gather around water sources.
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


@include('frontend.layouts.destinations')

@endsection