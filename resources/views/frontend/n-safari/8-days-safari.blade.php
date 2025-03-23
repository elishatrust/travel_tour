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
                        <img src="{{ asset('assets/frontend/img/park/rhino2.webp') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mo2.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1003.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an unforgettable 8-day wildlife safari through Tanzania’s Northern Circuit, exploring its most iconic national parks and breathtaking landscapes. This well-crafted itinerary takes you on a journey through Tarangire National Park, Serengeti National Park, Ngorongoro Crater, Lake Manyara National Park, and Arusha National Park, offering exceptional game-viewing opportunities, diverse ecosystems, and cultural experiences. Witness the Big Five, observe the Great Migration (seasonal), and immerse yourself in the raw beauty of Tanzania’s wilderness. With expert guides, comfortable accommodations, and thrilling game drives, this safari promises an adventure of a lifetime.
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
                              Day 1: Arrival in Arusha – Welcome & Cultural Experience
                            </h5>
                            <p style="text-align: justify">
                                Your adventure begins with your arrival in Arusha, Tanzania’s safari hub. Upon landing, you’ll be greeted by your safari guide and transferred to your hotel for check-in and a short briefing about the upcoming safari. If time allows, you can explore Arusha National Park, where you can enjoy a short walking safari or a game drive. Alternatively, you may choose to visit a local Maasai village or a cultural heritage center to learn about Tanzania’s rich traditions. Relax and enjoy a welcome dinner at your lodge before resting for the night.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 2: Arusha → Tarangire National Park (Elephants & Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, set off for Tarangire National Park, a two-hour scenic drive from Arusha. This park is renowned for its large elephant herds, towering baobab trees, and diverse wildlife, including lions, leopards, cheetahs, giraffes, zebras, and numerous antelope species. Enjoy a game drive along the Tarangire River, where wildlife gathers for water. After a picnic lunch in the park, continue exploring before heading to your lodge or tented camp for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Tarangire → Serengeti National Park (Scenic Drive & Afternoon Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, journey towards Serengeti National Park, passing through the Ngorongoro Conservation Area. Stop at the Ngorongoro Crater rim viewpoint for panoramic views before continuing into the endless plains of the Serengeti. Upon arrival, embark on an afternoon game drive, where you may encounter lions, leopards, cheetahs, elephants, and massive herds of wildebeest and zebras. As the sun sets over the savannah, check into your luxury lodge or tented camp for a relaxing evening under the stars.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Full-Day Game Drive in Serengeti (Big Cats & Great Migration Experience)
                            </h5>
                            <p style="text-align: justify">
                                Rise early for a sunrise game drive, the best time to witness predators in action. Depending on the season, you may witness the Great Migration, where thousands of wildebeests and zebras traverse the plains in search of fresh grazing. Throughout the day, explore different regions of the park, spotting elephants, buffalo, giraffes, and various bird species. After a picnic lunch, continue your safari adventure before returning to your accommodation for dinner and rest.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 5: Serengeti → Ngorongoro Crater (Big Five & Unique Ecosystem)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, enjoy a final morning game drive in the Serengeti before departing for Ngorongoro Conservation Area. Descend into the Ngorongoro Crater, a UNESCO World Heritage Site and one of Africa’s most wildlife-rich areas. This ancient volcanic caldera is home to rhinos, large lion prides, elephants, hippos, and numerous other species. Enjoy a picnic lunch near a hippo pool, then continue your exploration before heading to your lodge on the crater rim for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 6: Ngorongoro → Lake Manyara National Park (Tree-Climbing Lions & Birdlife)
                            </h5>
                            <p style="text-align: justify">
                                Depart for Lake Manyara National Park, a lush wildlife sanctuary located along the Great Rift Valley escarpment. This park is famous for its tree-climbing lions, which can often be seen resting on acacia branches. The lake itself is home to thousands of flamingos, pelicans, and other migratory birds. During your game drive, spot elephants, hippos, giraffes, zebras, and large troops of baboons. After an eventful day, check into your lodge or tented camp for an overnight stay.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                                Day 7: Lake Manyara → Arusha National Park (Walking Safari & Wildlife Viewing)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, return to Arusha National Park, a diverse park known for its lush rainforests, Momella Lakes, and Mount Meru’s scenic landscapes. Here, you will enjoy a guided walking safari, allowing you to get closer to wildlife, including giraffes, buffalo, warthogs, and various primates. This is a unique experience that complements traditional game drives. Enjoy lunch at a scenic location before transferring to your hotel in Arusha for a farewell dinner.
                            </p>
                        </div>
                    </div>       
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 8: Departure from Arusha – End of Safari
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, enjoy some leisure time in Arusha, where you can visit local markets or relax at your hotel before being transferred to Kilimanjaro International Airport for your onward flight. This marks the end of your incredible 8-day Northern Circuit Safari.
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