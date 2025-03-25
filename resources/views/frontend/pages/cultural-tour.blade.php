@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Tour Overview</h4>
                <p style="text-align: justify">
                    Ol Doinyo Lengai, meaning the “Mountain of God” in the Maasai language, is an active volcano situated in the eastern Rift Valley. It is the only volcano in the world that produces Natrocarbonatite lava, a unique and rare type of lava.
                    Located approximately four hours’ drive from Arusha, Ol Doinyo Lengai rises dramatically from the dry Rift Valley floor to an elevation of 2,886 meters (9,469 feet). The climb to the summit begins around midnight, allowing hikers to reach the crater rim in time for a breathtaking sunrise view. After exploring the crater, the descent back to the base takes about four hours, concluding this adventurous hike.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
                <span class="" style="color: #f1671e">
                    <i class="fa fa-walking me-2"></i>
                    Tour Itinerary
                </span>
            </div>
            <div class="col-lg-4 col-sm-12">
                <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    Book Now
                    <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px;width:100%;height:300px;" src="{{ asset('assets/frontend/img/tour/natron3.webp') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 1: Arusha/Moshi – Lake Natron (Ol Doinyo Lengai Hike)</h5>
                    <p style="text-align: justify">
                        After breakfast, you will receive a detailed briefing about the upcoming adventure before departing for Lake Natron, a journey that takes approximately 5–6 hours from Arusha. Lunch will be served at a designated picnic site along the way.
                    </p>
                    <p style="text-align: justify">
                        The climb up Ol Doinyo Lengai begins at midnight, offering a unique opportunity to experience the African night sky. The ascent typically takes 4–6 hours, while the descent back to the base takes 2–3 hours. This night climb allows hikers to witness the majestic sunrise from the crater rim, creating a truly unforgettable experience.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px;width:100%;height:300px;" src="{{ asset('assets/frontend/img/tour/natron2.webp') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 2: Lake Natron Exploration</h5>
                    <p style="text-align: justify">
                        Following a late morning descent, a vehicle will pick you up and transfer you back to the camp, where a hot lunch will be served.
                    </p>
                    <p style="text-align: justify">
                        In the afternoon, you will explore the Engaresero River waterfalls, a hidden oasis in the arid Rift Valley. Later, you will visit Lake Natron, home to thousands of lesser flamingos, making it a paradise for birdwatchers and nature lovers. After a relaxing evening, you will return to the camp for dinner and an overnight stay.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 shadow-sm p-4">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px;width:100%;height:300px;" src="{{ asset('assets/frontend/img/tour/natron1.webp') }}" alt="me-2" />
                <div>
                    <h5 class="mb-3 h4" style="color:#f1671e!important"><i class="fa fa-calendar-day me-2"></i>Day 3: Lake Natron – Arusha/Moshi</h5>
                    <p style="text-align: justify">
                        After breakfast, you will have the chance to visit a traditional Maasai Boma, where you will experience Maasai dancing and learn about their rich culture and traditions.
                    </p>
                    <p style="text-align: justify">
                        Following this cultural experience, you will begin your return journey to Arusha or Moshi, with lunch served en route. For those departing Tanzania, you will be transferred directly to Kilimanjaro International Airport for your onward flight.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 p-4">
                <div class="">
                    <h5 class="h6 text-muted py-3 text-uppercase">Why Choose Ol Doinyo Lengai Trek?</h5>
                    <div class="">
                        <p  style="text-align: justify">
                            ✅ Unique Lava Experience – Witness the only active Natrocarbonatite lava volcano in the world.
                        </p> 
                        <p  style="text-align: justify">
                            ✅ Midnight Climb – Reach the summit just in time for a stunning sunrise over the Rift Valley.
                        </p> 
                        <p  style="text-align: justify">
                            ✅ Scenic & Cultural Highlights – Explore Lake Natron, waterfalls, and Maasai culture.
                        </p> 
                        <p  style="text-align: justify">
                            ✅ Challenging & Rewarding Adventure – A steep and thrilling ascent, perfect for experienced hikers.
                        </p> 
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection