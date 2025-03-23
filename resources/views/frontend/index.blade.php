@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.header')

<!-- WELCOME -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-sm-12">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Welcome</p>
                <h1 class="display-5123 h2 mb-5">Experience The Best Safari</h1>
                <p style="text-align: justify">
                    At UpzoneSafaris, we are passionate about creating unforgettable travel experiences that inspire, 
                    relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, 
                    affordable, and extraordinary for everyone.
                </p>
                <p class="mb-4" style="text-align: justify">
                    At the heart of our business the company is accessible, enriching, 
                    and above all, a joyful experience. We strive to offer more than just trips; we curate experiences 
                    that resonate on a personal level. Whether it’s a serene escape to a tropical paradise, a thrilling 
                    adventure in the mountains, or an immersive cultural journey, our goal is to craft memories that last a lifetime.
                </p>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>World Best Animals
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Natural Environment
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Professional Guide & Security
                </h5>
                <a class="text-primary py-5" href="{{ route('about') }}">Read More..</a>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="img-border123 h-100 mt-4">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;" src="{{ asset('assets/frontend/img/safari/1008.jpg') }}" alt="#About" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- KEY FEATURES -->
{{-- <div class="container-xxl">
    <div class="container my-5">
        <div class="row g-5 flex-column-reverse123">       
            <div class="col-lg-4 col-sm-12">
                <div class="img-border123 h-100">
                    <a target="_blank" href="https://earth.google.com/web/@-3.09344655,37.38195524,4627.36994853a,50242.59166852d,35y,0h,60t,0r/data=CgRCAggBOgMKATBKDQj___________8BEAA">
                        <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/KilimanjaroMapRotes2.png') }}" alt="#" />
                    </a>
                    <p class="mt-2"><i>Click the image above to explore Kilimanjaro in Google Earth</i></p>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <h1 class="h2 mb-4">Features & Key Considerations</h1>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Acclimatization days : 
                    </span>
                    Longer routes offer more opportunities for acclimatization, 
                    increasing the chances of reaching the summit.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Scenic views : 
                    </span>
                    Routes like Northern Circuit, Lemosho, and Machame offer more scenic views, 
                    while Rongai and Umbwe are less scenic.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Traffic : 
                    </span>
                    Northern Circuit and Lemosho are less crowded, while Marangu and Machame are more popular.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Camping vs Huts : 
                    </span>
                    Routes like Lemosho, Machame, and Rongai involve camping, while Marangu has huts.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Success rate : 
                    </span>
                    70-80% average, depending on route and individual factors
                </p>
            </div>   
        </div>
    </div>
</div> --}}


<!-- Facts -->
<div class="container-xxl123 py-5 bg-primary facts">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center"
               >
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">450</h1>
                <p class="text-white text-uppercase mb-0">Daily Vigitors</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center"
               >
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12000</h1>
                <p class="text-white text-uppercase mb-0">Total Membership</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">200000</h1>
                <p class="text-white text-uppercase mb-0">Save Wild Life</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center"
               >
                <i class="fa fa-trophy fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">45</h1>
                <p class="text-white text-uppercase mb-0">Awards Achieved</p>
                <hr class=" border-bottom border-primary ">
            </div>
        </div>
    </div>
</div>

<!-- Packages -->
@include('frontend.layouts.packages')


<!-- Destination -->
@include('frontend.layouts.destinations')

<!-- Proudness -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 col-sm-12">
                <div class="img-border123 h-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/safari/27.jpg') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Our Proudness</p>
                <h1 class="display-5123 h2 mb-5">Why Trek With Us!</h1>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Personalized Services: </span>
                    <br>We tailor your travel experiences based on your preferences.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Expert Guidance: </span>
                    <br>Our experienced team offers insights and advice for the perfect trip.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>24/7 Support: </span>
                    <br>We provide around-the-clock customer support, ensuring a worry-free experience.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Sustainable Travel: </span>
                    <br>We promote eco-friendly tourism that respects the environment and local cultures.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Customized Packages for Every Traveler: </span>
                    <br>Whether you’re traveling solo, with a partner, or in a group, we offer flexible packages that cater to all types of travelers. 
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>We Use Top-Notch Equipments: </span>
                    <br>Expedition grade alpine sleeping tents Stand-up dining tents with durable tables and chairs Hygienic private toilets Four-season, warm, cozy sleeping bags
                </p>                
            </div>
        </div>
    </div>
</div>

<div class="container section-top-border"></div>

<!-- Testimonial -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Testimonial</p>
                <h1 class="display-5123 h2 mb-5 text-center">Our Travelers Say! </h1>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/backend/avatar2.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        "The Company planned the perfect honeymoon for us. 
                        We loved every moment and appreciated their attention to detail."
                    </p>
                    <h5 class="mb-1">Justine & Caro</h5>
                    <span class="fst-italic">Paris, FRANCE</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/backend/avatar2.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        "We had the best safari experience, thanks to their knowledgeable 
                        guides and well-organized itinerary. Highly recommend them!"
                    </p>
                    <h5 class="mb-1">Victoria Paul</h5>
                    <span class="fst-italic">New York, USA</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/backend/avatar2.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        "I’ve been booking my corporate travels with them for the past five years. 
                        They handle everything professionally and efficiently."
                    </p>
                    <h5 class="mb-1">Adam Kwasa</h5>
                    <span class="fst-italic">Cairo, EGYPT</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Media -->
{{-- @include('frontend.layouts.social-media') --}}

@endsection
