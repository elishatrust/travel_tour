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
                        <img src="{{ asset('assets/frontend/img/park/110.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/108.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/118.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1000.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an extraordinary 4-day safari adventure through Tanzania’s Northern Circuit, a region renowned for its diverse ecosystems, abundant wildlife, and breathtaking landscapes. This safari covers Tarangire National Park, the Ngorongoro Crater, Lake Manyara National Park, and Serengeti National Park, offering a well-rounded wildlife experience. Whether you’re eager to spot the Big Five (lion, leopard, elephant, rhino, and buffalo), witness the famous Serengeti plains, or admire the tree-climbing lions of Lake Manyara, this safari guarantees unparalleled game viewing opportunities in some of Africa’s most celebrated parks.
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
                              Day 1: Arusha → Tarangire National Park (Full-Day Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                Your journey begins with an early morning departure from Arusha, heading southwest to Tarangire National Park, approximately 2 hours away. Upon arrival, embark on a full-day game drive through this wildlife-rich park, which is famous for its large elephant herds, ancient baobab trees, and diverse landscapes. The Tarangire River attracts a wide variety of wildlife, including lions, leopards, giraffes, zebras, wildebeests, and numerous bird species. Enjoy a picnic lunch at a scenic spot overlooking the river, where elephants and other animals frequently gather to drink. In the late afternoon, continue exploring the park before heading to your lodge in Karatu or near Ngorongoro Crater, where you will have dinner and overnight accommodation.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 2: Ngorongoro Crater (Full-Day Game Drive)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, drive to the Ngorongoro Conservation Area, a UNESCO World Heritage Site and home to the world-famous Ngorongoro Crater, an ancient volcanic caldera that harbors one of the highest concentrations of wildlife in Africa. Descend 600 meters into the crater, where you will spend the day on a thrilling game drive, witnessing lions, rhinos, elephants, buffalo, and large herds of zebras and wildebeests. The crater’s diverse ecosystems range from grasslands and forests to lakes and wetlands, creating ideal conditions for a wide variety of animals. A picnic lunch will be served at a designated site, allowing you to relax while surrounded by stunning scenery. In the afternoon, continue your exploration before ascending from the crater and heading to your lodge for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Serengeti National Park (Game Drive & Exploration)
                            </h5>
                            <p style="text-align: justify">
                                On this exciting day, set off early for Serengeti National Park, Tanzania’s most famous wildlife reserve and home to the Great Migration. The drive from Ngorongoro to Serengeti takes approximately 3 to 4 hours, but the journey itself is a wildlife experience, as you pass through endless plains dotted with acacia trees and occasional wildlife sightings. Upon arrival, enjoy a game drive in the Serengeti’s central region, where big cats, large herbivores, and diverse bird species thrive. Depending on the season, you may witness part of the Great Migration, where thousands of wildebeests and zebras cross the Serengeti in search of fresh grazing lands. Enjoy a picnic lunch in the park, followed by more game viewing in the afternoon. Later, head to your lodge or tented camp for dinner and a relaxing overnight stay under the Serengeti’s star-lit sky.
                            </p>
                        </div>
                    </div>    
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Lake Manyara National Park (Half-Day Game Drive) → Return to Arusha
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, depart for Lake Manyara National Park, a stunning reserve famous for its tree-climbing lions, diverse birdlife, and lush vegetation. Upon arrival, embark on a half-day game drive, exploring the park’s forested areas, open savannahs, and alkaline lake, which attracts thousands of flamingos and other water birds. Keep an eye out for elephants, buffalo, giraffes, and playful baboon troops that inhabit the park. A picnic lunch will be served at a scenic location, allowing you to enjoy the beauty of Manyara’s landscapes. In the early afternoon, begin your journey back to Arusha, marking the end of your incredible 4-day Northern Circuit safari.
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