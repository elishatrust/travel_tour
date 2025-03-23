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
                        <img src="{{ asset('assets/frontend/img/park/a3.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/bird2.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/3c.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/3d.jpeg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p style="text-align: justify">
                    Embark on an exciting 3-day safari adventure in Mikumi National Park, one of Tanzania’s most accessible and wildlife-rich reserves. Located just a few hours’ drive from Dar es Salaam, Mikumi offers an incredible opportunity to experience the beauty of the African wilderness within a short timeframe.
                    Covering over 3,230 square kilometers, Mikumi is part of the greater Selous ecosystem, making it a prime destination for big game viewing. The park is home to lions, elephants, buffalo, giraffes, zebras, wildebeests, hippos, crocodiles, and a variety of antelope species. Additionally, bird enthusiasts will be delighted by the over 400 bird species found in the park.
                    This 3-day safari is ideal for those seeking a memorable wildlife experience, featuring game drives across the stunning savannah landscapes, encounters with diverse wildlife, and breathtaking scenery.
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
                                Day 1: Dar es Salaam → Mikumi National Park (Afternoon Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                Depart from Dar es Salaam in the morning (approximately 5-6 hours' drive to Mikumi).
                                Arrive at your lodge/camp in time for lunch and relaxation.
                                Embark on an afternoon game drive, exploring Mikumi’s vast plains and spotting iconic wildlife:
                                Lions, elephants, giraffes, buffalo, wildebeests, and zebras.
                                Visit the Mkata floodplain, known as Mikumi’s Serengeti, where large herds roam freely.
                                Return to the lodge for dinner and an overnight stay.
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
                                Begin with an early morning game drive, when predators like lions and leopards are most active.
                                Explore different habitats within the park, including open savannah, woodlands, and riverbanks.
                                Enjoy a picnic lunch at a scenic location, surrounded by nature.
                                Continue with an afternoon game drive, where you may encounter:
                                Hippos and crocodiles in the park’s waterholes.
                                Elusive leopards and wild dogs in the denser bush areas.
                                Return to the lodge for dinner and overnight stay.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Morning Game Drive → Return to Dar es Salaam
                            </h5>
                            <p style="text-align: justify">
                                Start with an early morning game drive, maximizing wildlife sightings before departure.
                                Return to the lodge for breakfast and check-out.
                                Begin your journey back to Dar es Salaam, arriving in the late afternoon.
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
                                    ✅ Perfect for a Short Getaway – Ideal for travelers with limited time who want a true African safari experience.
                                </p>      
                                <p>
                                    ✅ Abundant Wildlife – Home to big cats, elephants, giraffes, hippos, and a wide range of antelope species.
                                </p>      
                                <p>
                                    ✅ Stunning Landscapes – Mikumi’s scenery is reminiscent of Serengeti’s vast plains.
                                </p>      
                                <p>
                                    ✅  Easily Accessible – Located close to Dar es Salaam, making it a convenient safari destination.
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