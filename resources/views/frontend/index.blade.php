@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.header')

<!-- Welcome -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Welcome</p>
                <h1 class="display-5123 h2 mb-5">Experience The Best Safari</h1>
                <p class="mb-4 text-justify-all">
                    At UpzoneSafaris, we are passionate about creating unforgettable travel experiences that inspire, 
                    relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, 
                    affordable, and extraordinary for everyone.
                </p>
                <p class="mb-4 text-justify-all">
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
            <div class="col-lg-6 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="img-border h-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/safari/42.jpg') }}" alt="#About" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- DNA -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <div class="card-card p-4 bg-blend-lighten shadow-sm w-100 h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Vision</h5>
                    <span>
                        To be the world’s most trusted and innovative travel company, 
                        inspiring people to explore and experience the beauty of the world.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <div class="card-card p-4 bg-blend-lighten shadow-sm w-100 h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Mission</h5>
                    <span>
                        We are committed to offering personalized service, reliable travel solutions, 
                        and unforgettable journeys that enrich lives and create lasting memories.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <div class="card-card p-4 bg-blend-lighten shadow-sm w-100 h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Mission</h5>
                    <span>
                        We are committed to offering personalized service, reliable travel solutions, 
                        and unforgettable journeys that enrich lives and create lasting memories.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts -->
<div class="container-xxl123 bg-primary py-5 facts wow123 fadeInUp" data-wow123-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow123 fadeIn"
                data-wow123-delay="0.3s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">450</h1>
                <p class="text-white mb-0">Daily Vigitors</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow123 fadeIn"
                data-wow123-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12000</h1>
                <p class="text-white mb-0">Total Membership</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow123 fadeIn"
                data-wow123-delay="0.7s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">200000</h1>
                <p class="text-white mb-0">Save Wild Life</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow123 fadeIn"
                data-wow123-delay="0.1s">
                <i class="fa fa-trophy fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">45</h1>
                <p class="text-white mb-0">Awards Achieved</p>
                <hr class=" border-bottom border-primary ">
            </div>
        </div>
    </div>
</div>

<!-- Packages -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Packages</p>
                <h1 class="display-5123 h2 mb-5">Special Offers & Discounts</h1>
            </div>
        </div>
        <div class="row g-5" style="justify-content:center">
            @foreach ( $data as $item )
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.3s" style="border-radius: 10px;">
                <div class="membership-item position-relative shadow-sm bg-light w-100 h-100">
                    {{-- <img class="img-fluid" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/t2.webp') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">{{ $item->title }}</h1>
                    <h4 class="text-dark mb-3">$ {{ $item->cost }}</h4>
                    <p><i class="fa fa-check text-primary me-2"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-2"></i>{{ $item->adult }} adult, {{ $item->child }} child</p>
                    <p><i class="fa fa-check text-primary me-2"></i>{{ $item->more }}</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')

<!-- Proudness -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="img-border123 h-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/safari/1008.jpg') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Our Proudness</p>
                <h1 class="display-5123 h2 mb-5">Why Choosing Us!</h1>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Personalized Services: </span>
                    We tailor your travel experiences based on your preferences.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Expert Guidance: </span>
                    Our experienced team offers insights and advice for the perfect trip.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>24/7 Support: </span>
                    We provide around-the-clock customer support, ensuring a worry-free experience.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Sustainable Travel: </span>
                    We promote eco-friendly tourism that respects the environment and local cultures.
                </p>
                <p class="mb-3">
                    <span class="fw-bold"><i class="far fa-check-circle text-primary me-3"></i>Customized Packages for Every Traveler: </span>
                    Whether you’re traveling solo, with a partner, or in a group, we offer flexible packages that cater to all types of travelers. 
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl">
    <div class="container"><hr></div>
</div>

<!-- Testimonial -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Testimonial</p>
                <h1 class="display-5123 h2 mb-5 text-center wow123 fadeInUp" data-wow123-delay="0.1s">Our Travellers Say! </h1>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="testimonial-item text-center">
                {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/backend/avatar.jpg') }}" style="width: 100px; height: 100px"/> --}}
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
                {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/backend/avatar.jpg') }}" style="width: 100px; height: 100px"/> --}}
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
                {{-- <img class="img-fluid style="border-radius:10px; width:100%;height:250px;" rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/backend/avatar.jpg') }}" style="width: 100px; height: 100px"/> --}}
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
