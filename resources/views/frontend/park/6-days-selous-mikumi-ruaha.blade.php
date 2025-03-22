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
                        <img src="{{ asset('assets/frontend/img/park/a1.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi2.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikum1.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi4.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p style="text-align: justify">
                    Embark on an unforgettable 6-day safari adventure through two of Tanzania’s most spectacular wildlife destinations—Selous Game Reserve and Ruaha National Park. This journey offers a blend of thrilling wildlife encounters, breathtaking landscapes, and immersive experiences. From a boat safari along the Rufiji River to exhilarating game drives and a guided walking safari, you’ll have the chance to witness Africa’s incredible biodiversity, including the Big Five, big cats, and other remarkable species.
                    The tour begins and ends in Dar es Salaam, making it a convenient getaway into Tanzania’s pristine wilderness.
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
                                Day 1: Dar es Salaam → Selous Game Reserve
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, meet your safari guide and depart from Dar es Salaam for Selous Game Reserve (approx. 6-hour drive, 218 km).
                                Arrive at your lodge/camp in time for lunch and a short rest.
                                In the late afternoon, embark on an exciting boat safari along the Rufiji River, where you can spot hippos, crocodiles, and various bird species.
                                Enjoy a scenic sunset before heading back for dinner and an overnight stay at the lodge.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 2: Full-Day Game Drive in Selous Game Reserve
                            </h5>
                            <p style="text-align: justify">
                                Start the day with an early morning breakfast.
                                Embark on a full-day game drive with a packed lunch, exploring the vast landscapes of Selous.
                                Spot a variety of wildlife, including lions, elephants, giraffes, buffalo, zebras, wild dogs, and numerous bird species.
                                After lunch, continue your game drive, capturing the beauty of the reserve before returning to the lodge in the evening.
                                Dinner and overnight stay at the lodge.
                            </p>
                        </div>
                    </div> 
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Selous → Iringa Town (Transit to Ruaha)
                            </h5>
                            <p style="text-align: justify">
                                After an early morning breakfast, depart Selous and begin your scenic drive towards Iringa.
                                Travel via Morogoro town, passing through breathtaking landscapes, valleys, and rolling hills.
                                Enjoy a picnic lunch en route.
                                Arrive in Iringa town in the evening and check into your lodge/hotel for dinner and an overnight stay.
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
                                Enjoy breakfast at the lodge, then depart for Ruaha National Park.
                                Embark on a full-day game drive with a packed lunch, exploring the diverse habitats of Ruaha.
                                Encounter a rich variety of wildlife, including greater kudu, wildebeests, elephants, zebras, lions, hippos, hartebeests, impalas, giraffes, buffaloes, and more.
                                Enjoy panoramic views of the Ruaha River Valley, where animals gather to drink.
                                Return to the lodge for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 5: Game Drive & Walking Safari in Ruaha
                            </h5>
                            <p style="text-align: justify">
                                Another full day of adventure, starting with a morning game drive.
                                Enjoy lunch in the wild at a scenic picnic site.
                                In the late afternoon, participate in a guided walking safari (approx. 3 hours), where expert rangers will introduce you to the smaller wonders of the bush, from medicinal plants to tracking techniques.
                                Return to the lodge for dinner and overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 6: Ruaha → Dar es Salaam
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, begin your journey back to Dar es Salaam (approx. 8-hour drive).
                                Enjoy lunch en route and take in the final scenic views of the Tanzanian countryside.
                                Arrive in Dar es Salaam in the evening, marking the end of your safari adventure.
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

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection