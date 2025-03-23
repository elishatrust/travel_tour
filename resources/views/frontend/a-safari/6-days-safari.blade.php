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
                        <img src="{{ asset('assets/frontend/img/park/112.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/wildlife/wild-2.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/118.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1001.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an extraordinary 6-day safari adventure through Tanzania’s world-renowned Northern Circuit, exploring some of Africa’s most iconic national parks. This journey takes you through Tarangire National Park, Serengeti National Park, Ngorongoro Crater, and Lake Manyara National Park, offering unparalleled opportunities to witness the Big Five and the breathtaking natural beauty of Tanzania. From the ancient baobab-dotted landscapes of Tarangire to the endless golden plains of the Serengeti, the wildlife-rich Ngorongoro Crater, and the scenic wonders of Lake Manyara, this safari ensures an immersive and unforgettable experience in the heart of Africa’s wilderness.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-7 col-sm-12 h2" style="color: #f1671e">
                <i class="fa fa-walking me-2"></i>
                <span class="" style="color: #f1671e">Safari Itinerary</span>
            </div>
            <div class="col-lg-5 col-sm-12">
                <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    Book Now
                    <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-7 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 1: Arusha → Tarangire National Park (Full-Day Game Drive & Elephant Encounters)
                            </h5>
                            <p style="text-align: justify">
                                Your adventure begins with an early morning departure from Arusha, heading toward Tarangire National Park, a two-hour scenic drive through the Great Rift Valley landscapes. Known for its vast elephant population, ancient baobab trees, and diverse wildlife, Tarangire is a must-visit destination. Upon arrival, embark on an exciting game drive, encountering large herds of elephants, lions, leopards, giraffes, wildebeests, and various antelope species. The Tarangire River, the park’s lifeline, attracts a variety of animals, making it a prime location for predator sightings. Enjoy a picnic lunch in the wild, followed by an afternoon exploring different sections of the park before heading to your lodge or tented camp for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 2: Tarangire → Serengeti National Park (Scenic Drive & Afternoon Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, set off for the legendary Serengeti National Park, passing through the Ngorongoro Conservation Area along the way. En route, stop at the Ngorongoro Crater viewpoint, offering breathtaking panoramic views of the crater floor below. Continue toward the Serengeti’s Seronera region, where vast open plains stretch endlessly, home to abundant wildlife and dramatic predator-prey interactions. Upon arrival, enjoy an afternoon game drive, where you may spot lions resting on rocky outcrops, cheetahs sprinting across the savanna, and herds of zebras and wildebeests grazing peacefully. As the sun sets over the Serengeti, settle into your lodge or tented camp for an overnight stay, enjoying the sounds of the African wilderness.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Full-Day Game Drive in Serengeti (Great Migration & Predator Sightings)
                            </h5>
                            <p style="text-align: justify">
                                Begin your day with an early morning game drive, the best time to witness predators in action as lions, cheetahs, and leopards take advantage of the cool temperatures to hunt. Depending on the season, you may experience the thrill of the Great Migration, where millions of wildebeests and zebras traverse the Serengeti in search of greener pastures. Enjoy a picnic breakfast in the bush, followed by further exploration of different areas of the park, where you may spot elephants, buffalos, hippos, crocodiles, and an array of birdlife. After a picnic lunch, continue your game drive, capturing unforgettable wildlife moments before returning to your lodge or tented camp for a relaxing evening under the African night sky.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Serengeti → Ngorongoro Crater (Big Five Safari & Unique Ecosystems)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, enjoy a final morning game drive in the Serengeti before heading toward the Ngorongoro Conservation Area, home to the world-famous Ngorongoro Crater. Upon arrival, descend 600 meters into the crater, a UNESCO World Heritage Site teeming with diverse wildlife. The crater’s unique ecosystem supports an astonishing concentration of animals, including lions, elephants, buffalos, hippos, cheetahs, hyenas, and the rare black rhino. Stop for a picnic lunch near a hippo pool, taking in the breathtaking scenery before continuing your exploration of the crater floor. As the sun begins to set, ascend from the crater and transfer to your lodge or camp on the crater rim for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 5: Ngorongoro → Lake Manyara National Park (Tree-Climbing Lions & Birdwatching)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, depart for Lake Manyara National Park, a small yet incredibly diverse park located at the base of the Great Rift Valley escarpment. Known for its lush groundwater forests, open grasslands, and shallow soda lake, Manyara is home to tree-climbing lions, large elephant herds, hippos, giraffes, and a variety of bird species, including flamingos and pelicans. Embark on a half-day game drive, exploring the park’s diverse landscapes and watching wildlife congregate along the lake’s shores. Stop for a picnic lunch with stunning views, before continuing your exploration of the park’s rich biodiversity. In the late afternoon, drive to your lodge or tented camp for dinner and overnight accommodation.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 6: Lake Manyara → Return to Arusha (Final Game Drive & Scenic Drive Back)
                            </h5>
                            <p style="text-align: justify">
                                On the final day of your safari, enjoy a relaxed morning at the lodge, followed by a short game drive in Lake Manyara National Park. Take in the last moments of Tanzania’s stunning wildlife and landscapes before beginning your scenic drive back to Arusha. Arrive in the afternoon, marking the end of an incredible 6-day Northern Circuit wildlife safari.
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
                                    ✅ Covers Four Iconic Parks – Experience Tarangire, Ngorongoro, Serengeti, and Lake Manyara in just four days
                                </p>      
                                <p>
                                    ✅ High Wildlife Density – Ngorongoro and Serengeti offer some of the best game-viewing opportunities in Africa.                    
                                </p>      
                                <p>
                                    ✅ Diverse Landscapes – From savannas and volcanic craters to forests and soda lakes, witness Tanzania’s natural beauty.
                                </p>      
                                <p>
                                    ✅ Perfect for First-Time Safari Travelers – A well-balanced itinerary that includes game drives, cultural experiences, and relaxation.
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
            <div class="col-lg-5 col-sm-12">
                <div class="tour-hightligh mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Safari Highlights</h5>
                    </div>
                    <div class="">                              
                         <li><i class="far fa-check-circle text-primary me-1"></i>See the Big Five (Lion, Elephant, Buffalo, Leopard, Rhino)</li>
                         <li><i class="far fa-check-circle text-primary me-1"></i>Explore Tanzania’s top wildlife parks in a short time </li>
                         <li><i class="far fa-check-circle text-primary me-1"></i>Enjoy scenic landscapes, including savannas, lakes, and craters</li>
                         <li><i class="far fa-check-circle text-primary me-1"></i>Perfect for those arriving in Arusha or Moshi with limited time</li>
                         <li><i class="far fa-check-circle text-primary me-1"></i>Opportunities for cultural experiences (Maasai Villages)</li> 
                    </div>
                </div>
                <div class="include-pack mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Safari Inclusions</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Transportation in a 4x4 safari vehicle
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Park entry fees
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Professional English-speaking guide
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Meals (Breakfast, Lunch, Dinner)
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Bottled water
                        </li> 
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Game drives
                        </li> 
                    </div>
                </div>
                <div class="exclude-packs mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Safari Exclusions</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Flights to/from Tanzania
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Personal expenses & tips
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Travel insurance
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Alcoholic drinks
                        </li>                      
                    </div>
                </div>
                <div class="packing-list mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Who is This Safari For?</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            First-time safari travelers who want a short but immersive experience
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Business travelers or visitors with a limited schedule
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Families, couples, and solo travelers looking for an affordable adventure
                        </li>                      
                    </div>
                </div>   
                <div class="best-time mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase"> Best Time for Safari</h5>
                        <div class="">
                            <p  style="text-align: justify">
                              Dry Season (June–October): Best for game viewing, animals gather around water sources.
                            </p>
                            <p  style="text-align: justify">
                              Wet Season or Green Season (November – March) : Lush landscapes, best for birdwatching, and fewer crowds.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>


@include('frontend.layouts.destinations')

@endsection