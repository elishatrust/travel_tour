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
                        <img src="{{ asset('assets/frontend/img/park/107.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/112.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/116.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1004.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an unforgettable 3-day safari through Tanzania’s Northern Circuit, exploring some of the country’s most famous wildlife destinations—Tarangire National Park, Ngorongoro Crater, and Lake Manyara National Park. This tour is designed for travelers who want to experience diverse landscapes, incredible wildlife encounters, and breathtaking scenery in a short timeframe. From the towering baobab trees and elephant herds of Tarangire to the Big Five sightings in Ngorongoro Crater and the tree-climbing lions of Lake Manyara, this safari promises an action-packed wildlife adventure.
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
                                Your adventure begins with an early morning departure from Arusha, heading towards Tarangire National Park, approximately a 2-hour drive away. This park is famous for its vast elephant herds, ancient baobab trees, and diverse wildlife. Upon arrival, embark on a full-day game drive, exploring Tarangire’s savannah plains, woodlands, and seasonal swamps. You will have the chance to see lions, leopards, giraffes, zebras, wildebeests, and more, as well as over 500 bird species that inhabit the park. A picnic lunch will be served at a scenic spot inside the park, where you may spot animals gathering near the Tarangire River, a vital water source during the dry season. In the late afternoon, continue with the game drive before heading to Karatu or a lodge near Ngorongoro Crater, where you will enjoy dinner and overnight accommodation.
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
                                Start your day early with breakfast at the lodge before driving to Ngorongoro Crater, a UNESCO World Heritage Site and one of Africa’s most remarkable wildlife sanctuaries. Upon arrival, descend 600 meters into the crater for a full-day game drive across its diverse landscapes, which include open grasslands, acacia forests, and a soda lake. The crater is home to over 25,000 large animals, including the Big Five (lion, elephant, buffalo, rhino, and leopard), along with cheetahs, hyenas, hippos, and flamingos at Lake Magadi. Enjoy a picnic lunch at the hippo pool, where you can admire the stunning views of this breathtaking natural wonder. In the afternoon, continue your wildlife exploration before ascending from the crater and returning to your lodge for dinner and overnight stay.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Lake Manyara National Park (Half-Day Game Drive) → Return to Arusha
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, drive to Lake Manyara National Park, a scenic gem known for its lush forests, acacia woodlands, and expansive alkaline lake. The park is famous for its tree-climbing lions, which are often spotted lounging on tree branches, as well as large troops of baboons, giraffes, elephants, and buffalo. The shallow Lake Manyara attracts thousands of flamingos and other water birds, making it a paradise for bird lovers. Enjoy a half-day game drive, followed by a picnic lunch at a picturesque viewpoint. In the early afternoon, begin your return journey to Arusha, arriving by late afternoon, marking the end of your incredible 3-day Northern Circuit safari.
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