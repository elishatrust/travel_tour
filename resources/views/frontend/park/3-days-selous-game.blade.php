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
                        <img src="{{ asset('assets/frontend/img/park/new3.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2b.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/bird5.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi2.webp') }}" alt=" Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p style="text-align: justify">
                    Immerse yourself in the heart of Selous Game Reserve, Africa’s largest protected wildlife area, on this 3-day adventure. The Selous, a UNESCO World Heritage Site, covers over 50,000 square kilometers and is home to a diverse range of wildlife, including elephants, lions, leopards, hippos, crocodiles, wild dogs, and over 400 bird species.
                    This short yet action-packed safari offers a blend of thrilling game drives, an unforgettable boat safari along the Rufiji River, and an adventurous walking safari, allowing you to experience the African wilderness up close. Whether you're a wildlife enthusiast, photographer, or first-time visitor, this tour promises a truly immersive safari experience.
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
                                Day 1: Dar es Salaam → Selous Game Reserve (Boat Safari)
                            </h5>
                            <p style="text-align: justify">
                                Morning departure from Dar es Salaam (approx. 5-6 hour drive to Selous).
                                Arrive at your lodge/camp in time for lunch.
                                In the afternoon, embark on a relaxing boat safari along the Rufiji River.
                                Witness hippos, crocodiles, and a variety of bird species up close.
                                Enjoy the breathtaking sunset over the water.
                                Return to the lodge for dinner and an overnight stay.
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
                                Early morning breakfast, then set out on a full-day game drive in a 4x4 safari vehicle.
                                Explore Selous' diverse landscapes, including woodlands, savannahs, and riverine forests.
                                Encounter elephants, lions, buffalo, leopards, giraffes, zebras, and wild dogs.
                                Enjoy a picnic lunch in the bush, surrounded by nature.
                                Continue the game drive until sunset, maximizing your chances of incredible wildlife sightings.
                                Return to the lodge for dinner and overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Walking Safari → Return to Dar es Salaam
                            </h5>
                            <p style="text-align: justify">
                                Begin the day with an early morning walking safari, guided by an experienced ranger.
                                Get up close with nature, learning about animal tracks, plants, and smaller wildlife species.
                                A chance to encounter giraffes, impalas, and other wildlife on foot.
                                Return to the lodge for breakfast.
                                Check out and drive back to Dar es Salaam, arriving by the late afternoon.
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
                                    ✅ Ideal for a Short Getaway – Perfect for travelers with limited time.
                                </p>      
                                <p>
                                    ✅ Diverse Safari Experience – Enjoy game drives, boat safari, and walking safari.
                                </p>      
                                <p>
                                    ✅ Abundant Wildlife – Spot the Big Five, wild dogs, and over 400 bird species.
                                </p>      
                                <p>
                                    ✅ Scenic Beauty – From vast open plains to the Rufiji River, the landscapes are breathtaking.
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