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
                        <img src="{{ asset('assets/frontend/img/park/122.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/rhino1.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mo1.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1003.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on a 7-day journey through Tanzania’s Northern Circuit, home to some of the most spectacular wildlife destinations in Africa. This safari takes you deep into Tarangire National Park, Serengeti National Park, Ngorongoro Crater, and Lake Manyara National Park, offering you the chance to witness the Big Five, the Great Migration (seasonal), and diverse landscapes ranging from endless savannas to lush forests and volcanic craters. With expertly guided game drives, breathtaking scenery, and luxury or mid-range accommodation options, this safari promises an unforgettable African wildlife experience.
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
                              Day 1: Arusha → Tarangire National Park (Elephant Encounters & Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                Your adventure begins with an early morning departure from Arusha, heading to Tarangire National Park, a two-hour drive through breathtaking landscapes. Known for its large elephant herds and towering baobab trees, Tarangire is one of Tanzania’s hidden gems. Upon arrival, embark on a game drive, where you can spot elephants, lions, leopards, zebras, giraffes, and various antelope species. The Tarangire River, a year-round water source, attracts a wide array of wildlife, making it an ideal location for predator-prey interactions. Enjoy a picnic lunch in the wild, followed by an afternoon of further exploration before heading to your lodge or tented camp for dinner and an overnight stay.
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
                                After breakfast, embark on a scenic journey to Serengeti National Park, passing through the Ngorongoro Conservation Area. Stop at the Ngorongoro Crater rim viewpoint, where you can take in breathtaking panoramic views. Continue into the Serengeti’s vast plains, a wildlife haven teeming with predators and prey. Upon arrival, enjoy an afternoon game drive, where you may encounter lions basking in the sun, cheetahs on the hunt, and herds of wildebeest grazing. As the sun sets over the Serengeti, check in to your lodge or tented camp, where you will enjoy a warm meal and overnight accommodation in the heart of the wilderness.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Full-Day Game Drive in Serengeti (Big Cats & Great Migration Experience)
                            </h5>
                            <p style="text-align: justify">
                                Rise early for a sunrise game drive, when predators are most active. Witness lions, leopards, and cheetahs in action, along with hyenas scavenging for leftovers from the night’s hunt. Depending on the time of year, you may have the chance to witness the Great Migration, where millions of wildebeest and zebras cross the plains in search of greener pastures. Enjoy a bush breakfast, followed by a full day of exploration in different areas of the Serengeti. Spot elephants, buffalos, giraffes, hippos, and a variety of birdlife, with breaks for lunch and photography. Return to your lodge or tented camp in the evening for a relaxing night under the African stars.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Serengeti → Ngorongoro Crater (Big Five Safari & Unique Ecosystem)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, enjoy a final morning game drive in the Serengeti before departing for Ngorongoro Conservation Area. Arrive at the Ngorongoro Crater, a UNESCO World Heritage Site, and descend into the caldera for an unforgettable safari experience. This natural wonder is home to one of the highest concentrations of wildlife in Africa, including the rare black rhino, large lion prides, elephants, buffalos, and cheetahs. Enjoy a picnic lunch near a hippo pool, while taking in the breathtaking views. In the afternoon, continue exploring the crater floor before ascending to your lodge or tented camp on the crater rim for dinner and an overnight stay.
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
                                After breakfast, drive toward Lake Manyara National Park, an ecological paradise located along the Great Rift Valley escarpment. This park is famous for its tree-climbing lions, which can often be spotted resting on acacia branches. Other wildlife includes elephants, hippos, giraffes, zebras, and large troops of baboons. The lake itself attracts thousands of flamingos and other migratory birds, making it an excellent destination for birdwatching enthusiasts. Enjoy a half-day game drive, stopping for a picnic lunch before exploring more of the park’s diverse landscapes. In the evening, check in to your lodge or tented camp, where you will enjoy a relaxing night surrounded by nature.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 6: Lake Manyara → Arusha (Final Game Drive & Cultural Experience)
                            </h5>
                            <p style="text-align: justify">
                                Start your day with a leisurely breakfast before heading out for a morning game drive in Lake Manyara National Park. Take in the last moments of Tanzania’s breathtaking wildlife before beginning your scenic journey back to Arusha. Along the way, you may opt for a cultural visit to a Maasai village, where you can learn about the traditional way of life, customs, and dances of the Maasai people. Arrive in Arusha in the afternoon, marking the end of an incredible 7-day Northern Circuit safari.
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