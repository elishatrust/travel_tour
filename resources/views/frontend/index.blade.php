@extends('frontend.layouts.app')
@section('content')


@include('frontend.layouts.header')

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9"ass="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item"
                                src=""
                                id="video"
                                allowfullscreen
                                allowscriptaccess="always"
                                allow="autoplay">
                            </iframe>
                        </div>
                    </div>
                </div>
                    <iframe class="embed-responsive-item"
                        src=""
                        id="video"
                        allowfullscreen
                        allowscriptaccess="always"
                        allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- About Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.1s">
                {{-- <p><span class="text-primary me-2">#</span>Welcome To TravelTour</p> --}}
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
<!-- About End -->


<!-- DNA Start -->
<div class="container-xxl pb-5 pt-5">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-4 col-sm-12 shadow wow123 fadeInUp" data-wow123-delay="0.1s">
                <div class="p-3 bg-blend-lighten">
                    <h5 class="mb-3">Vision</h5>
                    <span>
                        To be the world’s most trusted and innovative travel company, 
                        inspiring people to explore and experience the beauty of the world.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  shadow wow123 fadeInUp" data-wow123-delay="0.3s">
                <div class="p-3">
                    <h5 class="mb-3">Mission</h5>
                    <span>
                        We are committed to offering personalized service, reliable travel solutions, 
                        and unforgettable journeys that enrich lives and create lasting memories.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  shadow wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="p-3">
                    <h5 class="mb-3">Core Value</h5>
                    <span>
                        Our top priority is the satisfaction and happiness of our clients by 
                        conducting our business with the highest ethical standards, honesty, and transparency.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DNA End -->

<!-- Facts Start -->
<div class="container-fluid bg-primary facts my-5 py-5 wow123 fadeInUp" data-wow123-delay="0.1s">
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
<!-- Facts End -->


<!-- Animal Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5 mb-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
        <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Our Animals</p>Awes
        <h1 class="display-5 mb-0">
            Let`s See Our <span style="color:#0059c5!important">UPZONE</span><span class="text-primary">Safaris</span> Awesome
            Animals
        </h1>
        </div>
        <div class="col-lg-6 text-lg-end">
        <a class="btn btn-primary py-3 px-5" href=""
            >Explore More Animals</a
        >
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.1s">
        <div class="row g-4">
            <div class="col-12">
            <a
                class="animal-item"
                href="{{ asset('assets/frontend/img/animal-md-1.jpg') }}"
                data-lightbox="animal"
            >
                <div class="position-relative">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-md-1.jpg') }}" alt="" />
                <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                </div>
                </div>
            </a>
            </div>
            <div class="col-12">
                <a class="animal-item" href="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" data-lightbox="animal">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="" />
                        <div class="animal-text p-4">
                            <p class="text-white small text-uppercase mb-0">Animal</p>
                            <h5 class="text-white mb-0">Elephant</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.3s">
        <div class="row g-4">
            <div class="col-12">
                <a class="animal-item" href="{{ asset('assets/frontend/img/animal-lg-2.jpg') }}" data-lightbox="animal">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-2.jpg') }}" alt="" />
                        <div class="animal-text p-4">
                            <p class="text-white small text-uppercase mb-0">Animal</p>
                            <h5 class="text-white mb-0">Elephant</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12">
                <a class="animal-item" href="{{ asset('assets/frontend/img/animal-md-2.jpg') }}" data-lightbox="animal">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-md-2.jpg') }}" alt="" />
                        <div class="animal-text p-4">
                            <p class="text-white small text-uppercase mb-0">Animal</p>
                            <h5 class="text-white mb-0">Elephant</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.5s">
            <div class="row g-4">
                <div class="col-12">
                    <a class="animal-item" href="{{ asset('assets/frontend/img/animal-md-3.jpg') }}" data-lightbox="animal">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-md-3.jpg') }}" alt="" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Animal</p>
                                <h5 class="text-white mb-0">Elephant</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <a class="animal-item" href="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" data-lightbox="animal">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Animal</p>
                                <h5 class="text-white mb-0">Elephant</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div> --}}
<!-- Animal End -->

<!-- Visiting Hours Start -->
{{-- <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow123 fadeInUp" data-wow123-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow123 fadeIn" data-wow123-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
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
                <h1 class="display-6 text-white mb-5">Contact Info</h1>
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
<!-- Visiting Hours End -->

<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-6">
                {{-- <p><span class="text-primary me-2">#</span>Membership</p> --}}
                <h1 class="display-5123 h4 mb-0">Special Packages <span style="color:#0059c5!important">UPZONE</span><span class="text-primary">Safaris</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="#">Special Pricing</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.3s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="" />
                    <h1 class="display-1 fs-1">Standard</h1>
                    <h4 class="text-white mb-3">500,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>2 adult and 2 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.5s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-2.jpg') }}" alt="" />
                    <h1 class="display-1 fs-1">Excutive</h1>
                    <h4 class="text-white mb-3">1,000,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>4 adult and 4 child </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow123 fadeInUp" data-wow123-delay="0.7s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" />
                    <h1 class="display-1 fs-1">Premium</h1>
                    <h4 class="text-white mb-3">2,000,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>6 adult and 6 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Membership End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="display-5 text-center mb-5 wow123 fadeInUp" data-wow123-delay="0.1s">Our Clients Say! </h1>
        <div class="owl-carousel testimonial-carousel wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/frontend/img/testimonial-1.jpg') }}" style="width: 100px; height: 100px"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                        duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                        clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.
                    </p>
                    <h5 class="mb-1">Patient Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/frontend/img/testimonial-2.jpg') }}" style="width: 100px; height: 100px"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                        duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                        clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.
                    </p>
                    <h5 class="mb-1">Patient Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('assets/frontend/img/testimonial-3.jpg') }}" style="width: 100px; height: 100px"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                        duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                        clita erat magna elitr erat sit sit erat at rebum justo sea
                        clita.
                    </p>
                    <h5 class="mb-1">Patient Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Media Start -->
@include('frontend.layouts.social-media')
<!--- Media End -->

@endsection
