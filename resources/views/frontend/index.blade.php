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
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>Welcome To TravelTour</p>
            <h1 class="display-5 mb-4">
                About <span style="color:#0059c5!important">Travel</span><span class="text-primary">Tour</span>
            </h1>
            <p class="mb-4 text-justify-all">
                At TravelTour, we are passionate about creating unforgettable travel experiences that inspire, relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, affordable, and extraordinary for everyone.
            </p>
            <p class="mb-4 text-justify-all">
                At the heart of our business is a simple philosophy: Travel should be accessible, enriching, and above all, a joyful experience. We strive to offer more than just trips; we curate experiences that resonate on a personal level. Whether it’s a serene escape to a tropical paradise, a thrilling adventure in the mountains, or an immersive cultural journey, our goal is to craft memories that last a lifetime.
            </p>
            <p class="mb-4 text-justify-all">
                At the heart of our business is a simple philosophy: Travel should be accessible, enriching, and above all, a joyful experience. We strive to offer more than just trips; we curate experiences that resonate on a personal level. Whether it’s a serene escape to a tropical paradise, a thrilling adventure in the mountains, or an immersive cultural journey, our goal is to craft memories that last a lifetime.
            </p>
            <h5 class="mb-3">
                <i class="far fa-check-circle text-primary me-3"></i>Natural Environment
            </h5>
            <h5 class="mb-3">
                <i class="far fa-check-circle text-primary me-3"></i>Professional Guide & Security
            </h5>
            <h5 class="mb-3">
                <i class="far fa-check-circle text-primary me-3"></i>World Best Animals
            </h5>
            <a class="text-primary py-5" href="{{ route('about') }}">Read More..</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/about.jpg') }}" alt="" />
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
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="mb-3">Vision</h5>
                <span>
                    To be the world’s most trusted and innovative travel company, 
                    inspiring people to explore and experience the beauty of the world.
                </span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="mb-3">Mission</h5>
                <span>
                    We are committed to offering personalized service, reliable travel solutions, 
                    and unforgettable journeys that enrich lives and create lasting memories.
                </span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <h5 class="mb-3">Core Value</h5>
                <span>
                    Our top priority is the satisfaction and happiness of our clients by 
                    conducting our business with the highest ethical standards, honesty, and transparency.
                </span>
            </div>
        </div>
    </div>
</div>
<!-- DNA End -->

<!-- Facts Start -->
<div class="container-fluid bg-primary facts my-5 py-5 wow fadeInUp"
    data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn"
                data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">450</h1>
                <p class="text-white mb-0">Daily Vigitors</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn"
                data-wow-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12000</h1>
                <p class="text-white mb-0">Total Membership</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn"
                data-wow-delay="0.7s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">200000</h1>
                <p class="text-white mb-0">Save Wild Life</p>
                <hr class=" border-bottom border-primary ">
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn"
                data-wow-delay="0.1s">
                <i class="fa fa-trophy fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">45</h1>
                <p class="text-white mb-0">Awards Achieved</p>
                <hr class=" border-bottom border-primary ">
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Our Services</p>
        <h1 class="display-5 mb-0">
            Special Services For
            <span style="color:#0059c5!important">Travel</span><span class="text-primary">Tour</span> Visitors
        </h1>
        </div>
        <div class="col-lg-6">
        <div
            class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5"
        >
            <i class="fa fa-3x fa-mobile-alt text-white"></i>
            <div class="ms-4">
            <p class="text-white mb-0">Call for more info</p>
            <h2 class="text-white mb-0">+012 345 6789</h2>
            </div>
        </div>
        </div>
    </div>
    <div class="row gy-5 gx-4">
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.1s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-2.png') }}" alt="Icon" />
        <h5 class="mb-3">Car Parking</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.3s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-3.png') }}" alt="Icon" />
        <h5 class="mb-3">Animal Photos</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.5s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-4.png') }}" alt="Icon" />
        <h5 class="mb-3">Guide Services</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.7s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-5.png') }}" alt="Icon" />
        <h5 class="mb-3">Food & Beverages</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.1s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-6.png') }}" alt="Icon" />
        <h5 class="mb-3">Zoo Shopping</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.3s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-7.png') }}" alt="Icon" />
        <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.5s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-8.png') }}" alt="Icon" />
        <h5 class="mb-3">Play Ground</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
        <div
        class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp"
        data-wow-delay="0.7s"
        >
        <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-9.png') }}" alt="Icon" />
        <h5 class="mb-3">Rest House</h5>
        <span
            >Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
            sed diam stet diam sed stet.</span
        >
        </div>
    </div>
    </div>
</div>
<!-- Service End -->

<!-- Animal Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Our Animals</p>Awes
        <h1 class="display-5 mb-0">
            Let`s See Our <span style="color:#0059c5!important">Travel</span><span class="text-primary">Tour</span> Awesome
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
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
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
</div>
<!-- Animal End -->

<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
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
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
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
</div>
<!-- Visiting Hours End -->

<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Membership</p>
                <h1 class="display-5 mb-0">You Can Be A Proud Member Of <span style="color:#0059c5!important">Travel</span><span class="text-primary">Tour</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="#">Special Pricing</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="" />
                    <h1 class="display-1 fs-1">Popular</h1>
                    <h4 class="text-white mb-3">500,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>2 adult and 2 child</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-2.jpg') }}" alt="" />
                    <h1 class="display-1 fs-1">Standard</h1>
                    <h4 class="text-white mb-3">1,000,000 TZS</h4>
                    <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                    <p><i class="fa fa-check text-primary me-3"></i>4 adult and 4 child </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                    <a class="btn btn-outline-light px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
        <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say! </h1>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
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
<div class="container-xxl py-5">
    <div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">

			<div class="row">
				<div class="col-lg-12 col-sm-12  wow fadeInUp" data-wow-delay="0.3s">
					<hr class=" border-bottom border-primary"><h4 class="text-start">Follow <strong>@TravelTourLtd</strong> on Social Media </h4><hr class=" border-bottom border-primary">
				</div>

				<div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
					<span class="text-center text-dark fw-bold mb-3">Facebook</span>
					<div class="bg-white" style="margin:5px!important;overflow-y: auto;overflow-x: auto; height:300px;border:1px dotted #3c2313;">

						<iframe class="bg-white" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fzillicltd%2Fposts%2Fpfbid02yhtptbeYoL99MNruCbUmSDb9o6JCzw8iUpMmywxEpGUMu7kwuzfLEazeoNb4kD5kl&show_text=true&width=500" 
							style="width:100%;height:540px;background:#fff;border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

					</div>
				</div>

				<div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
					<span class="text-center text-dark fw-bold mb-3">Instagram</span>
					<div class="bg-white" style="margin:5px!important;overflow-y: auto;overflow-x: auto; height:300px;border:1px dotted #3c2313;">

						<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CyitUivqHNp/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" 
						style="width:100%;height:540px; background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
						<div style="padding:16px;"> 
						<a href="https://www.instagram.com/p/CyitUivqHNp/?utm_source=ig_embed&amp;utm_campaign=loading" 
							style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> 
							<div style=" display: flex; flex-direction: row; align-items: center;"> 
							<div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> 
							<div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CyitUivqHNp/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Zillic East Africa Limited (@zillicltd)</a></p></div></blockquote> 
							<script async src="//www.instagram.com/embed.js"></script>
					</div>
				</div>
				
				<div class="col-md-3 wow fadeInUp" data-wow-delay="0.9s">
					<span class="text-center text-dark fw-bold mb-3"> X (Formerly Twitter)</span>
					<div class="bg-white" style="margin:5px!important;height:100px;overflow-y: auto;overflow-x: auto; height:300px;border:1px dotted #3c2313;">
						<blockquote class="twitter-tweet" style="overflow-y: hidden;overflow-x: auto; height:300px;"><p lang="en" dir="ltr">
							After a year of hard work and striving to reach our goals, 
							the fourth quarter provides the ideal opportunity for some much-needed outdoor team building. 
							<a href="https://t.co/lrwhTNoyP4">pic.twitter.com/lrwhTNoyP4</a></p>&mdash; Zillic East Africa Ltd (@zillicltd) 
							<a href="https://twitter.com/zillicltd/status/1719692272051097888?ref_src=twsrc%5Etfw">November 1, 2023</a>
						</blockquote> 
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>				
				
				<div class="col-md-3 wow fadeInUp" data-wow-delay="1.2s">
					<span class="text-center text-dark fw-bold mb-3">Linkedin</span>
					<div class="bg-white" style="margin:5px!important;overflow-y: hidden;overflow-x: auto; height:300px;border:1px dotted #3c2313;">

						<iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:7120364821799137281" style="width:100%;height:540px;" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
						
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!--- Media End -->

@endsection
