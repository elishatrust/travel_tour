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
                        <img src="{{ asset('assets/frontend/img/park/mikumi1.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikum1.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi4.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi2.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p style="text-align: justify">
                    This 5-day safari adventure takes you deep into Tanzania’s stunning wilderness, exploring the diverse landscapes and incredible wildlife of Mikumi National Park and Ruaha National Park. Mikumi, known for its vast savannahs and easy wildlife spotting, is often compared to the Serengeti, while Ruaha offers a more rugged, less crowded safari experience with dramatic landscapes and exceptional predator sightings.
                    During this journey, you will embark on thrilling game drives, witness the Big Five and other iconic African wildlife, and experience breathtaking scenery. Whether it’s the open plains of Mikumi or the remote wilderness of Ruaha, this safari provides an unforgettable adventure.
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
                                Day 1: Dar es Salaam → Mikumi National Park
                            </h5>
                            <p style="text-align: justify">
                                Depart Dar es Salaam early in the morning for a 5-hour drive (280 km) to Mikumi National Park.
                                Enjoy a scenic drive through the Tanzanian countryside.
                                Arrive at Mikumi National Park in time for lunch at the lodge.
                                In the afternoon, set off on a game drive, where you will spot elephants, giraffes, zebras, wildebeests, buffaloes, lions, and a variety of antelope species.
                                Dinner and overnight stay at a lodge/camp inside the park.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 2: Full-Day Game Drive in Mikumi National Park
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, embark on a full-day game drive in Mikumi.
                                Visit the Mkata floodplain, an area teeming with wildlife, often compared to the Serengeti.
                                Spot predators such as lions, leopards, and hyenas as they roam the park.
                                Enjoy a picnic lunch in the bush, surrounded by the breathtaking scenery of the park.
                                Continue your game drive in the afternoon, searching for hippos, crocodiles, and diverse bird species near the waterholes.
                                Return to your lodge/camp for dinner and an overnight stay.
                            </p>
                        </div>
                    </div> 
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Mikumi → Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, depart Mikumi and embark on a 5 to 6-hour drive towards Ruaha National Park.
                                Enjoy stunning landscapes as you travel through Baobab Valley and the Rift Valley escarpments.
                                Stop for lunch in Iringa, a historic town in southern Tanzania.
                                Arrive at Ruaha National Park in the afternoon, check in at your lodge, and enjoy a sunset game drive.
                                Dinner and overnight stay at a lodge/camp in Ruaha.
                            </p>
                        </div>
                    </div> 
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 4: Full-Day Game Drive in Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                Start the day with an early morning game drive to witness the African sunrise and catch predators in action.
                                Return to the lodge for breakfast, then continue with a mid-morning game drive.
                                Ruaha is famous for its large elephant population, as well as lions, cheetahs, leopards, and African wild dogs.
                                Lunch at the lodge/camp, followed by some time to relax and enjoy the stunning views.
                                Depart for an evening game drive, capturing the park’s beauty at sunset.
                                Return to the lodge for dinner and an overnight stay.
                            </p>
                        </div>
                    </div> 
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 5: Ruaha → Dar es Salaam
                            </h5>
                            <p style="text-align: justify">
                                Enjoy one last early morning game drive, then return to the lodge for breakfast.
                                Begin the 8-hour journey back to Dar es Salaam, with lunch en route.
                                Arrive in Dar es Salaam in the evening, marking the end of your unforgettable safari.
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
                        <h5 class="h6 text-muted py-3 text-uppercase">Best Time For Safari</h5>
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

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection