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
                        <img src="{{ asset('assets/frontend/img/park/new4.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/rhino3.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mo3.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/a1.webp') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on a 9-day adventure through Tanzania’s Northern Circuit, exploring some of the world’s most renowned wildlife destinations. This expertly curated safari will take you through Tarangire National Park, Lake Manyara National Park, Serengeti National Park, Ngorongoro Crater, and Arusha National Park, offering a rich diversity of landscapes, abundant wildlife, and incredible game-viewing opportunities. Witness the Big Five (lion, leopard, elephant, buffalo, and rhino), experience the Great Migration (seasonal), and immerse yourself in breathtaking sceneries. With luxurious lodges, expert guides, and immersive activities, this safari is a perfect blend of adventure and comfort.
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
                                Your safari begins with your arrival in Arusha, the gateway to Tanzania’s legendary national parks. Upon landing, you will be welcomed by your safari guide and transferred to your hotel. After a short briefing on the itinerary, you can explore Arusha National Park with a walking safari or a game drive. Alternatively, visit a local Maasai village or the Cultural Heritage Center to learn about Tanzania’s rich traditions. In the evening, relax and enjoy a welcome dinner at your lodge.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 2: Arusha → Tarangire National Park (Elephants & Wildlife Safari)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, depart for Tarangire National Park, home to Tanzania’s largest elephant herds and ancient baobab trees. The park is also home to lions, leopards, cheetahs, giraffes, zebras, and various antelope species. Enjoy a thrilling game drive along the Tarangire River, where animals congregate for water. A picnic lunch will be served in a scenic location before continuing your exploration of this remarkable park. In the evening, check into your luxury lodge or tented camp for dinner and relaxation.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Tarangire → Lake Manyara National Park (Tree-Climbing Lions & Birdlife)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, head towards Lake Manyara National Park, a stunning wildlife haven set against the backdrop of the Great Rift Valley escarpment. This park is famous for its tree-climbing lions, which can be seen resting on acacia tree branches. The alkaline lake attracts thousands of flamingos, pelicans, and storks, making it a birdwatcher’s paradise. Enjoy a game drive, spotting elephants, giraffes, hippos, and large troops of baboons. After a full day of exploration, retreat to your lodge for a well-deserved rest.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Lake Manyara → Serengeti National Park (Scenic Drive & Afternoon Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                Today, you’ll journey to Serengeti National Park, one of the most famous wildlife reserves in the world. Pass through the Ngorongoro Conservation Area, stopping at the crater rim for breathtaking views. Upon entering the Serengeti, embark on an afternoon game drive, where you may spot lions, cheetahs, elephants, zebras, and vast herds of wildebeest. As the sun sets, check into your luxury tented camp for a magical evening under the African sky.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 5: Full-Day Game Drive in Serengeti (Big Cats & Great Migration Viewing)
                            </h5>
                            <p style="text-align: justify">
                                Begin your day with an early morning game drive, the best time to witness predators in action. Depending on the season, you may witness the Great Migration, where thousands of wildebeests and zebras traverse the Serengeti in search of greener pastures. Spend the day exploring different regions of the park, encountering elephants, giraffes, buffalo, and diverse bird species. After a picnic lunch, continue your adventure before returning to your lodge for dinner and relaxation.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 6: Serengeti → Ngorongoro Crater (UNESCO World Heritage Site & Big Five Safari)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, enjoy a final morning game drive in the Serengeti before departing for Ngorongoro Crater, one of Africa’s most wildlife-dense areas. Upon arrival, descend into the volcanic caldera, where you’ll encounter rhinos, large lion prides, elephants, hippos, and thousands of grazing animals. Enjoy a picnic lunch near a hippo pool, followed by more wildlife exploration. In the evening, check into your lodge on the crater rim for a scenic overnight stay.
                            </p>
                        </div>
                    </div>      
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 7: Ngorongoro → Arusha National Park (Walking Safari & Wildlife Viewing)
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, travel back towards Arusha National Park, known for its lush rainforest, Momella Lakes, and Mount Meru’s scenic beauty. Enjoy a guided walking safari, where you can observe giraffes, buffalo, warthogs, and monkeys up close. This experience allows for a deeper connection with nature. After a relaxing lunch, continue exploring the park before heading to your lodge in Arusha for the night.
                            </p>
                        </div>
                    </div>      
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 8: Arusha → Maasai Village & Coffee Tour
                            </h5>
                            <p style="text-align: justify">
                                Today, immerse yourself in Tanzanian culture with a visit to a traditional Maasai village. Experience their way of life, witness their iconic jumping dance, and learn about their customs. Later, take a tour of a local coffee plantation, where you’ll learn about coffee cultivation and enjoy fresh Tanzanian coffee. Spend the rest of the day at leisure in Arusha, shopping for souvenirs or relaxing at your hotel.
                            </p>
                        </div>
                    </div>      
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 9: Departure from Arusha – End of Safari
                            </h5>
                            <p style="text-align: justify">
                                After breakfast, enjoy some leisure time before being transferred to Kilimanjaro International Airport for your departure flight. This marks the end of your unforgettable 9-day Northern Circuit Safari, leaving you with lifelong memories of Tanzania’s extraordinary wildlife and landscapes.
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