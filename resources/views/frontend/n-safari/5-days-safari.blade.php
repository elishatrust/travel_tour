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
                        <img src="{{ asset('assets/frontend/img/park/109.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/119.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/117.jpg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/1001.jpg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Safari Overview</h4>
                <p class="" style="text-align: justify">
                    Embark on an unforgettable 5-day adventure through Tanzania’s Northern Circuit, a region renowned for its diverse ecosystems, breathtaking landscapes, and exceptional wildlife experiences. This well-curated itinerary takes you through Tarangire National Park, Serengeti National Park, the Ngorongoro Crater, and Lake Manyara National Park. Witness massive elephant herds in Tarangire, experience the thrill of the Great Migration in Serengeti, marvel at the rich wildlife concentration within the Ngorongoro Crater, and admire the tree-climbing lions of Lake Manyara. Whether you are a seasoned safari enthusiast or a first-time traveler, this safari offers an incredible opportunity to see the Big Five and other iconic African wildlife in their natural habitat.
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
                                Your safari adventure begins with a morning departure from Arusha, heading south toward Tarangire National Park, a scenic two-hour drive. Known as the "Land of Giants" due to its massive elephant herds and ancient baobab trees, Tarangire is a prime wildlife destination. Upon arrival, embark on an exciting game drive, exploring the park’s diverse landscapes, seasonal swamps, and open savannas. Expect to see elephants, lions, leopards, giraffes, zebras, wildebeests, and an abundance of birdlife. The Tarangire River, the park’s lifeline, attracts animals throughout the year, providing excellent opportunities for predator sightings. After a picnic lunch in the wilderness, continue your exploration before driving to your lodge or tented camp in Karatu for a delicious dinner and overnight stay.
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
                                After breakfast, set off for the Serengeti National Park, a journey that takes you through the scenic landscapes of the Great Rift Valley and the Ngorongoro Conservation Area. Enjoy a brief stop at the Ngorongoro viewpoint, where you can admire the vast crater from above before continuing to the Serengeti. Upon arrival, enjoy an afternoon game drive in the Seronera region, famous for its diverse wildlife, big cats, and open plains that stretch as far as the eye can see. Depending on the season, you may witness the Great Migration as thousands of wildebeests and zebras traverse the Serengeti in search of fresh grazing lands. As the sun sets, head to your lodge or tented camp in the heart of the Serengeti for dinner and an overnight stay.
                            </p>
                        </div>
                    </div>   
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 3: Serengeti National Park (Full-Day Game Drive & Big Cat Sightings)
                            </h5>
                            <p style="text-align: justify">
                                Begin your day with an early morning game drive, a prime time for spotting predators in action as lions, cheetahs, and leopards take advantage of the cooler temperatures to hunt. The Serengeti is home to an astonishing variety of wildlife, including elephants, giraffes, buffalos, hippos, and crocodiles along the rivers. Enjoy a picnic breakfast in the bush, surrounded by the sounds of the African wilderness. Continue exploring different regions of the park, depending on wildlife movements and seasonal highlights. After a picnic lunch, embark on another game drive, capturing the magic of the Serengeti before returning to your lodge or camp in the evening for a relaxing dinner and overnight stay.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 4: Serengeti → Ngorongoro Crater (Big Five Safari & Scenic Views)
                            </h5>
                            <p style="text-align: justify">
                                After an early breakfast, embark on a final morning game drive in the Serengeti before heading toward the Ngorongoro Conservation Area, one of Africa’s most breathtaking natural wonders. Upon arrival, descend 600 meters into the Ngorongoro Crater, a vast caldera teeming with diverse wildlife. This natural enclosure supports an incredible concentration of animals, including lions, elephants, buffalos, hippos, cheetahs, hyenas, and the rare black rhino. The crater floor’s varied landscapes—grasslands, swamps, and lakes—provide excellent game viewing throughout the day. Enjoy a picnic lunch near a hippo pool, taking in the stunning scenery before ascending from the crater and driving to your lodge or camp for dinner and overnight accommodation.
                            </p>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                              <i class="fa fa-calendar-day me-2"></i>
                              Day 5: Lake Manyara National Park (Final Game Drive) → Return to Arusha
                            </h5>
                            <p style="text-align: justify">
                                On the final day, depart early for Lake Manyara National Park, a compact yet diverse park nestled at the base of the Great Rift Valley escarpment. Famous for its tree-climbing lions, Lake Manyara also boasts lush forests, open savannas, and a shallow soda lake that attracts thousands of flamingos and other bird species. Enjoy a half-day game drive, spotting elephants, giraffes, hippos, buffalos, and troops of baboons. Stop for a scenic picnic lunch, enjoying the panoramic views before making your way back to Arusha, marking the end of an incredible 5-day Northern Circuit safari.
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