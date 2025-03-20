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
                        <img src="{{ asset('assets/frontend/img/park/2a.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2b.jpeg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2c.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2d.jpeg') }}" alt="Image">
                    </div>
                </div>            
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Trekking Overview</h4>
                <p style="text-align: justify">
                    Embarking on a 2-day safari in Ruaha National Park offers an immersive experience into one of 
                    Tanzania's largest and most diverse wildlife sanctuaries. Established in 1964, Ruaha spans 
                    approximately 20,226 square kilometers, making it one of the largest national parks in Tanzania 
                    and East Africa.
                    <span class="text-uppercase">Wildlife and Scenery: </span>
                    Ruaha's landscape is characterized by rugged semi-arid bushland, with the Great Ruaha River flowing 
                    along its southeastern boundary. The park is home to a significant elephant population, with estimates 
                    around 10,000 individuals. Predators such as lions, leopards, cheetahs, and endangered wild dogs are 
                    also present. Additionally, over 571 bird species have been identified, making it a paradise for bird enthusiasts.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
                <i class="fa fa-walking me-2"></i>
                <span class="">
                    <i class="fa fa-walking me-2"></i>
                    Safari Itinerary
                </span>
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
                                Day 1: Transfer to Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                After enjoying a hearty breakfast, you will be collected from your hotel and embark on your journey to Ruaha National Park by midday. After lunch, embark on an afternoon game drive to explore the park's diverse habitats and observe its wildlife. Conclude the day with dinner and an overnight stay at a lodge or campsite within the park.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div>
                            <h5 class="mb-3 h4" style="color:#f1671e!important">
                                <i class="fa fa-calendar-day me-2"></i>
                                Day 2: Game viewing in Ruaha National Park
                            </h5>
                            <p style="text-align: justify">
                                Begin with an early morning game drive to witness the park's wildlife during their most active period. After breakfast, visit the Great Ruaha River to observe hippos and crocodiles. Post-lunch, commence the return journey to your point of origin, arriving by early evening.
                            </p>
                        </div>
                    </div>    
                    <div class="col-lg-12 col-sm-12 shadow-sm p-4">
                        <div class="best-time mt-4">
                            <div class="">
                                <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Travel</h5>
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
                            Headlamp, trekking poles, hydration system.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Sunscreen, first-aid kit, snacks.
                        </li>                      
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection