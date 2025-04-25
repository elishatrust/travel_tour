@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.header')

<!-- WELCOME -->
<div class="container-xxl py-5">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-lg-6 col-sm-12">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Welcome</p>
                <h1 class="display-5123 h2 mb-5">Empowering Agriculture, Enriching Lives</h1>
                <p style="text-align: justify">
                    Welcome to Darkland Company Limited, a leading player in the agricultural, horticultural, and farming sectors in Tanzania. We are dedicated to improving the agricultural landscape by offering innovative solutions for farming, crop production, livestock management and farm machinery. With a focus on sustainability and efficiency, we deliver high-quality products and services aimed at boosting agricultural productivity and ensuring the growth and success of our partners.
                </p>
                <p style="text-align: justify">
                    From day one, our focus was clear: support Tanzanian farmers with the tools, knowledge, and resources they need to thrive. We started with basic crop support and quickly evolved, recognizing the critical need for locally produced, high-quality seeds, farm machinery, and modern agricultural techniques. That journey led us to expand into:
                </p>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Increase Agricultural Productivity
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Access to Knowledge & Training
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Market Access & Linkages
                </h5>
                <a class="text-primary py-5" href="{{ route('about') }}">Read More..</a>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="img-border123 h-100 mt-4">
                    <img class="img-fluid w-100 mb-5" style="border-radius:10px; width:100%;" src="{{ asset('assets/frontend/img/img/supply-chain-soln.jpg') }}" alt="#About" />

                    <div class="experience-badge floating">
                        <h3>15+ <span>Years</span></h3>
                        <p>Of experience in Agricultural Sector</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts -->
<div id="features-cards" class="features-cards section">
    <div class="container py-3">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-box green">
              <i class="fas fa-seedling fa-3x"></i>
              <h1 class="text-dark mb-2" data-toggle="counter-up">10</h1>
              <p class="text-dark text-uppercase mb-0">Total Crops</p>
              <hr class=" border-bottom border-primary ">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="feature-box blue">
            <i class="fa fa-users fa-3x"></i> 
            <h1 class="text-dark mb-2" data-toggle="counter-up">12000</h1>
            <p class="text-dark text-uppercase mb-0">Total Clients</p>
            <hr class=" border-bottom border-primary ">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-box red">
              <i class="fa fa-cogs fa-3x"></i> 
              <h1 class="text-dark mb-2" data-toggle="counter-up">500</h1>
              <p class="text-dark text-uppercase mb-0">Strategic Partnerships</p>
              <hr class=" border-bottom border-primary ">
            </div>
        </div>  
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="feature-box orange">
            <i class="fa fa-award fa-3x"></i>
            <h1 class="text-dark mb-2" data-toggle="counter-up">45</h1>
            <p class="text-dark text-uppercase mb-0">Awards Achieved</p>
            <hr class=" border-bottom border-primary ">
          </div>
        </div>      
      </div>
    </div>
</div>

<!-- Proudness -->
<div class="container-xxl123 py-5 our-courses123">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-lg-5 col-sm-12">
                <div class="img-border123 h-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/img/Research.jpg') }}" alt="" />
                </div>
            </div>     
            <div class="col-lg-7 col-sm-12">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Our Proudness</p>
                <h1 class="display-5123 h2 mb-5">Why Choose Us!</h1>
                <p class="mb-3">
                    <span class="fw-bold">🌍 Local Expertise, Global Standards: </span>
                    <br>We blend local knowledge with international best practices.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">🌱 Commitment to Sustainability: </span>
                    <br>We prioritize eco-friendly and responsible farming.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">🤝 Client-Centered Approach: </span>
                    <br>Your success is our mission. We tailor every solution to your needs.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">📈 Proven Track Record: </span>
                    <br>Trusted by hundreds of farmers, organizations, and partners across Tanzania.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">🔬 Innovation-Led Growth: </span>
                    <br>We invest in the latest technologies to stay ahead. 
                </p>               
            </div>
        </div>
    </div>
</div>

<!-- Crops -->
@include('frontend.layouts.crops')

<!-- Team -->
<div class="container-xxl py-5" id="team">
    <div class="container py-3">
        <div class="row g-5 align-items-end">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Team</p>
                <h1 class="display-5123 h2 mb-5">Key Executives and Founders</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 li-item">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div align="center">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/img/img/avatar.png') }}" alt="Profile">
                                    </div>
                                    <h4 class="h4 mt-2 text-color">Martin Mchembe</h4>
                                    <em>Founder & CEO</em>
                                    <p class="card-text fs16 text-dark lh22">
                                        Bringing a wealth of experience in the agriculture and farming sectors. With a passion for innovation and sustainability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4><a href="#" class="h4 mt-2 link-color" title="Martin Mchembe">Martin Mchembe</a></h4>
                                <p class="card-text fs16 text-dark lh22">
                                    Mchembe focuses on enhancing agricultural practices that benefit both the environment and the farmers. His leadership aims to drive growth, improve productivity, and create lasting positive change within the industry.
                                </p>
                                <ul class="list-inline pastor-social">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Facebook" target="_blank" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Instagram" target="_blank" href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Linkedin" target="_blank" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>	

                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 li-item">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div align="center">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/img/img/avatar.png') }}" alt="Profile">
                                    </div>
                                    <h4 class="h4 mt-2 text-color">Masoud Sultan</h4>
                                    <em>Founder & CEO</em>
                                    <p class="card-text fs16 text-dark lh22">
                                        The visionary founder and CEO of Darkland Company Limited, Salehe, has over 20 years of experience in agriculture and farming.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4><a href="#" class="h4 mt-2 link-color" title="Masoud Sultan">Masoud Sultan</a></h4>
                                <p class="card-text fs16 text-dark lh22">
                                    He is dedicated to creating sustainable and profitable farming systems that improve the livelihoods of farmers and contribute to the agricultural sector's overall growth.
                                </p>
                                <ul class="list-inline pastor-social">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Facebook" target="_blank" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Instagram" target="_blank" href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Linkedin" target="_blank" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>	

                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 li-item">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div align="center">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/img/img/avatar.png') }}" alt="Profile">
                                    </div>
                                    <h4 class="h4 mt-2 text-color">Mhoja Chalula</h4>
                                    <em>Chief Operations Officer</em>
                                    <p class="card-text fs16 text-dark lh22">
                                        Is responsible for overseeing the day-to-day operations of the company, ensuring that all services are delivered to the highest standards. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4><a href="#" class="h4 mt-2 link-color" title="Mhoja Chalula">Mhoja Chalula</a></h4>
                                <p class="card-text fs16 text-dark lh22">
                                    With extensive experience in farm management and agricultural supply chains, Chalula plays a crucial role in driving operational excellence and efficiency.
                                </p>
                                <ul class="list-inline pastor-social">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Facebook" target="_blank" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Instagram" target="_blank" href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Linkedin" target="_blank" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>	

                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 li-item">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div align="center">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/img/img/avatar.png') }}" alt="Profile">
                                    </div>
                                    <h4 class="h4 mt-2 text-color">Beatrice Moris JOAN</h4>
                                    <em>Chief Financial Officer</em>
                                    <p class="card-text fs16 text-dark lh22">
                                        Manages the financial health of Darkland Company Limited, ensuring strategic investments and sustainable growth. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4><a href="#" class="h4 mt-2 link-color" title="Beatrice Moris JOAN">Beatrice Moris JOAN</a></h4>
                                <p class="card-text fs16 text-dark lh22">
                                    She has a solid background in corporate finance and risk management and plays a key role in guiding the company's long-term financial strategy.
                                </p>
                                <ul class="list-inline pastor-social">
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Facebook" target="_blank" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Instagram" target="_blank" href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                                                        
                                    <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" title="Linkedin" target="_blank" href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>	

                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	   
    </div>
</div>

<!-- Testimonial -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Testimonial</p>
                <h1 class="display-5123 h2 mb-5 text-center">Our Clients Say! </h1>
            </div>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/frontend/img/img/avatar.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        "Darkland completely transformed how we manage our farm. From the training to the equipment — they helped us double our yields in just one season."
                    </p>
                    <h5 class="mb-1">James M. Ngussa — Farmer</h5>
                    <span class="fst-italic">Iringa, Tanzania</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/frontend/img/img/avatar.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        “The livestock breeding program is a game changer. Healthy animals, better productivity, and constant support.”
                    </p>
                    <h5 class="mb-1">Victoria Paul — Livestock Owner</h5>
                    <span class="fst-italic">Dodoma, Tanzania</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle border border-2 p-1 mx-auto mb-2" src="{{ asset('assets/frontend/img/img/avatar.png') }}" style="width: 50px; height: 50px;border:2px solid #f1671e!important;"/>
                <div class="testimonial-text rounded text-center p-4">
                    <p>
                        “Professional, knowledgeable, and dedicated. They are a true partner in every sense.”
                    </p>
                    <h5 class="mb-1">Dr. Selemani Adam — Agricultural Researcher</h5>
                    <span class="fst-italic">Nairobi, Kenya</span>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- @include('frontend.layouts.social-media') --}}

@endsection
