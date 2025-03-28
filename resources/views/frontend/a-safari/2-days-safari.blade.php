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
                        <img src="{{ asset('assets/frontend/img/park/106.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/106.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/002.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1003.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an exciting 2-day adventure through Tanzania’s Northern Safari Circuit, home to some of Africa’s most famous wildlife destinations. This short yet thrilling safari offers an incredible opportunity to witness the Big Five—lions, elephants, leopards, buffalo, and rhinos—while exploring breathtaking landscapes.
                    This tour is ideal for travelers with limited time but eager to experience Tanzania’s diverse ecosystems, abundant wildlife, and stunning scenery. You will visit Tarangire National Park or Lake Manyara National Park on the first day and then head to Ngorongoro Crater, one of the world’s most spectacular natural wonders, on the second day.
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
                              Day 1: Arusha/Moshi – Tarangire National Park
                            </h5>
                            <div class="">
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Early Morning: Pick-up from Arusha or Moshi and drive to Tarangire National Park (~ 2-3 hours).
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Morning Game Drive: Spot elephants, giraffes, lions, zebras, wildebeests, and impalas roaming around. Tarangire is famous for its massive elephant herds and iconic baobab trees.
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Lunch: Picnic lunch inside the park at a scenic spot.
                                </li> 
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Afternoon Game Drive: More wildlife viewing, looking for predators like cheetahs, leopards, and lions.
                                </li> 
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Evening: Drive to Karatu or Mto wa Mbu for dinner and overnight stay at a safari lodge or tented camp.
                                </li> 
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Alternative Option: Visit Lake Manyara National Park instead of Tarangire if you prefer a mix of wildlife and birdwatching, including tree-climbing lions and flamingos.
                                </li> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 2: Ngorongoro Crater – Arusha/Moshi
                            </h5>
                            <div class="">
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Early Morning: Breakfast and drive to Ngorongoro Crater (~1 hour).
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Game Drive in the Crater: Descend into the world’s largest unbroken volcanic caldera. This is one of the best places in Africa to see the Big Five (especially black rhinos).
                                </li>
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Lunch: Picnic lunch near Hippo Pool while watching hippos in the water.
                                </li> 
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Afternoon: More wildlife viewing and then start the drive back to Arusha or Moshi.
                                </li> 
                                <li class="mb-2">
                                    <i class="fa fa-arrow-right text-primary me-1"></i> 
                                    Evening: Arrive back at your hotel or drop-off at the airport (if needed).
                                </li>  
                            </div>
                        </div>
                    </div>        
                    <div class="col-lg-12 col-sm-12 p-4">
                        <div class="Acclimatization-list">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Why Choose This Safari?</h5>
                            </div>
                            <div class="">
                                <p>
                                    ✅ Perfect for Short Trips – Ideal for travelers with limited time who want to experience Tanzania’s incredible wildlife.
                                </p>      
                                <p>
                                    ✅ High Chances of Spotting the Big Five – Ngorongoro Crater offers one of the best opportunities to see the Big Five in one day.
                                </p>      
                                <p>
                                    ✅ Stunning Landscapes & Unique Ecosystems – From baobab-studded savannas to the lush crater floor, this tour offers breathtaking scenery.
                                </p>      
                                <p>
                                    ✅  Great Combination of Parks – Tarangire/Lake Manyara + Ngorongoro ensures a diverse safari experience.
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