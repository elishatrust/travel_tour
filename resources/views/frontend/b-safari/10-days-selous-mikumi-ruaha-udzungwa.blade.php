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
                        <img src="{{ asset('assets/frontend/img/park/2b.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/ruaha.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/ruaha5.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/udz.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p style="text-align: justify">
                    Regardless of the season, this 10-day adventure takes you deep into Tanzania’s lesser-explored wildlife havens, including Selous Game Reserve, Mikumi National Park, Ruaha National Park, and Udzungwa Mountains National Park. The safari offers an immersive experience with thrilling game drives, breathtaking landscapes, diverse ecosystems, and mountain trekking adventures.
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
                                Day 1: Dar es Salaam – Selous Game Reserve
                            </h5>
                            <p style="text-align: justify">
                                Your journey begins with an early morning departure from Dar es Salaam after breakfast. You will embark on a scenic drive towards Selous Game Reserve, Africa’s largest wildlife sanctuary, covering 55,500 square kilometers. Despite its vast size, Selous remains one of the least crowded reserves, ensuring an exclusive safari experience.
                                A packed lunch will be enjoyed en route, and upon arrival, you will check into your camp or lodge. Later in the afternoon, embark on a two- to three-hour boat safari along the Rufiji River, offering close encounters with hippos, crocodiles, and a variety of bird species while enjoying a spectacular sunset over the water.
                                Dinner and overnight stay at the lodge/camp.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 2: Exploring Selous – Walking & Game Drives
                            </h5>
                            <p style="text-align: justify">
                                Start the day with an early morning walking safari, a thrilling opportunity to explore the African bush on foot under the guidance of an expert ranger. This unique experience allows you to observe animal tracks, insects, and smaller wildlife often missed on game drives.
                                After breakfast back at the camp, you will set off for a full-day game drive with a packed lunch, venturing deeper into Selous’ diverse landscapes of savannah, forests, and riverine ecosystems. The reserve is home to elephants, lions, wild dogs, buffaloes, and over 400 bird species.
                                Return to camp for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 3: Morning & Evening Game Drives in Selous
                            </h5>
                            <p style="text-align: justify">
                                Embark on an early morning game drive before the sun rises, when predators such as lions, hyenas, and leopards are most active. After approximately four hours, return to camp for a late breakfast and a leisurely morning.
                                After lunch, venture out for an afternoon game drive until sunset, exploring different parts of the reserve and maximizing your chances of encountering large herds of elephants, giraffes, and elusive leopards.
                                Dinner and overnight at the lodge/camp.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 4: Selous – Mikumi National Park
                            </h5>
                            <p style="text-align: justify">
                                After an early morning breakfast, pack your belongings and set out for Mikumi National Park, enjoying a game drive en route. Lunch will be served along the way.
                                Mikumi is known for its diverse wildlife and open savannah plains, often compared to the Serengeti. The park is home to elephants, zebras, giraffes, buffaloes, lions, and large troops of baboons. Upon arrival, check in at your lodge or tented camp for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>

                                Day 5: Full-Day Safari in Mikumi National Park
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, embark on a full-day game drive, exploring the rich wildlife that Mikumi has to offer. The park’s Mkata floodplain is particularly known for hosting large numbers of buffaloes, wildebeest, and elephants.
                                Lunch will be served at a scenic picnic site within the park, allowing you to take in the natural beauty of the landscape. After an afternoon break, set out for an evening game drive, returning to the lodge just after sunset.
                                Dinner and overnight stay at the lodge/hotel.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 6: Mikumi – Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, depart for Ruaha National Park, Tanzania’s largest national park, covering 20,226 square kilometers. Enjoy the stunning scenery along the way, with a lunch stop in Iringa, a historic town in the Southern Highlands.
                                Upon arrival, check in at your accommodation before setting off on an evening game drive, where you might spot cheetahs, leopards, and elephants roaming the vast wilderness.
                                Dinner and overnight stay at the lodge/camp.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 7: Exploring Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                An early morning game drive provides an opportunity to witness the breathtaking African sunrise while observing wildlife in action. Ruaha is famous for its high concentration of predators, including lions, leopards, wild dogs, and hyenas.
                                After a mid-morning break and breakfast, continue exploring the park, breaking for lunch before embarking on a late afternoon game drive until sundown.
                                Dinner and overnight at the lodge/camp.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 8: More Wildlife Adventures in Ruaha
                            </h5>
                            <p style="text-align: justify">
                                Spend another full day in Ruaha National Park, with both morning and evening game drives. The park is also home to one of the largest populations of elephants in East Africa, as well as hippos, antelopes, and over 570 bird species.
                                A hot lunch will be served at the camp, allowing for some relaxation before your sunset game drive, the perfect time to witness predators hunting and herbivores gathering at water sources.
                                Dinner and overnight at the lodge/camp.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 9: Ruaha – Udzungwa Mountains National Park
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, pack your belongings and depart for Udzungwa Mountains National Park, enjoying a game drive en route. Stop for lunch in Iringa town, known for its vibrant markets and cultural heritage.
                                Upon arrival, check in at Twiga Hotel, where you will have dinner and spend the night. 
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 10: Udzungwa Trekking & Return to Dar es Salaam
                            </h5>
                            <p style="text-align: justify">
                                Start the day with an early morning trek into the Udzungwa Mountains, a tropical rainforest rich in biodiversity. The hike leads to stunning viewpoints overlooking vast sugarcane plantations and rolling hills.
                                During the trek, you will have the chance to see endemic primates such as the Udzungwa red colobus monkey, along with a variety of medicinal plants and rare bird species.
                                Lunch will be served at the mountaintop, offering breathtaking panoramic views before descending for the return journey to Dar es Salaam, marking the end of an unforgettable safari adventure.
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
                                    ✅ Diverse Wildlife Experience – Enjoy both land-based and water-based safari activities.
                                </p>      
                                <p>
                                    ✅ Off-the-Beaten-Path Adventure – Explore two of Tanzania’s most underrated wildlife destinations.
                                </p>      
                                <p>
                                    ✅ Perfect for Short Getaways – Ideal for travelers with limited time but seeking maximum adventure.
                                </p>      
                                <p>
                                    ✅  Expert Safari Guides – Gain insightful knowledge from professional safari guides.
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


@include('frontend.layouts.destinations')

@endsection