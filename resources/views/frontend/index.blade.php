@extends('frontend.layouts.app')
<style>

</style>
@section('content')
@include('frontend.layouts.header')

<!-- Welcome -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Welcome To UpzoneSafaris</p>
                <h1 class="display-5123 h2 mb-4">
                    Experience The Best<span class="text-primary"> Safaris</span>
                </h1>
                <p class="mb-4 text-justify-all">
                    At TravelTour, we are passionate about creating unforgettable travel experiences that inspire, relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, affordable, and extraordinary for everyone.
                </p>
                <p class="mb-4 text-justify-all">
                    At the heart of our business is a simple philosophy: Travel should be accessible, enriching, and above all, a joyful experience. We strive to offer more than just trips; we curate experiences that resonate on a personal level. Whether it’s a serene escape to a tropical paradise, a thrilling adventure in the mountains, or an immersive cultural journey, our goal is to craft memories that last a lifetime.
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
            <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/more/6.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DNA -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.1s">
                <div class="card-card p-4 bg-blend-lighten shadow h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Vision</h5>
                    <span>
                        To be the world’s most trusted and innovative travel company, 
                        inspiring people to explore and experience the beauty of the world.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 sha col-sm-12 wow123 fadeInUp" data-wow123-delay="0.3s">
                <div class="card-card p-4 bg-blend-lighten shadow h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Mission</h5>
                    <span>
                        We are committed to offering personalized service, reliable travel solutions, 
                        and unforgettable journeys that enrich lives and create lasting memories.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="card-card p-4 bg-blend-lighten shadow h-100">
                    <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Core Value</h5>
                    <span>
                        Our top priority is the satisfaction and happiness of our clients by 
                        conducting our business with the highest ethical standards, honesty, and transparency.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts -->
<div class="container-xxl bg-primary py-5 facts wow123 fadeInUp" data-wow123-delay="0.1s">
    <div class="container">
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
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p><span class="text-primary me-2">#</span>Packages</p>
                <h1 class="display-5123 h2 mb-5">Special Offers & Discounts</h1>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.3s">
                <div class="membership-item position-relative shadow">
                    {{-- <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">Basic</h1>
                    <h4 class="text-dark mb-3">500,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>2 adult and 2 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="membership-item position-relative shadow">
                    {{-- <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-2.jpg') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">Standard</h1>
                    <h4 class="text-dark mb-3">1,500,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>4 adult and 4 child </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.7s">
                <div class="membership-item position-relative shadow">
                    {{-- <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">Premium</h1>
                    <h4 class="text-dark mb-3">3,000,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>6 adult and 6 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.7s">
                <div class="membership-item position-relative shadow">
                    {{-- <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">Platinum</h1>
                    <h4 class="text-dark mb-3">5,000,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>6 adult and 6 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Proudness -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="img-border123 h-100">
                    <img class="img-fluid h-100" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-8 wow123 fadeInUp" data-wow123-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Our Proudness</p>
                <h1 class="display-5123 h2 mb-4">Why Choosing Us!</h1>
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
            </div>
        </div>
    </div>
</div>

<!-- Visiting Hours -->
{{-- <div class="container-xxl bg-primary visiting-hours bg-light my-5 py-5 wow123 fadeInUp" data-wow123-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow123 fadeIn" data-wow123-delay="0.3s">
                <h1 class="display-6123 h2 text-white mb-5">Visiting Hours</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>Monday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Tuesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Wednesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Thursday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Friday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Saturday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-light wow123 fadeIn" data-wow123-delay="0.5s">
                <h1 class="display-6123 h2 text-white mb-5">Contact Info</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Office</td>
                            <td>123 Street, New York, USA</td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>123 Street, New York, USA</td>
                        </tr>
                        <tr>
                            <td>Ticket</td>
                            <td>
                                <p class="mb-2">+012 345 6789</p>
                                <p class="mb-0">ticket@example.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>
                                <p class="mb-2">+012 345 6789</p>
                                <p class="mb-0">support@example.com</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}


<!-- Testimonial -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p><span class="text-primary me-2">#</span>Testimonial</p>
                <h1 class="display-5123 h2 text-center mb-5 wow123 fadeInUp" data-wow123-delay="0.1s">Our Travellers Say! </h1>
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
                {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/backend/avatar.jpg') }}" style="width: 100px; height: 100px"/> --}}
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
