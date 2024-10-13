@extends('frontend.layouts.app')
<style>
  .section-top-border {
    padding: 50px 0;
    border-top: 1px dotted #eee
}
.generic-blockquote{padding:30px 50px 30px 30px;background:#f9f9ff;border-left:2px solid #222}
  
</style>
@section('content')

@include('frontend.layouts.inc_about')


<div class="container-xxl py-5">
    <div class="container pt-5">
      <div class="row g-5">
          <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.1s">
              <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Our Background</p>
              <h1 class="display-5123 h2 mb-5">We are Holiday Destination Support Company</h1>
              <p class="mb-4 text-justify-all">
                  At UpzoneSafaris, we believe that travel is more than just visiting new places it's 
                  about creating stories, connecting with different cultures, and discovering the wonders 
                  of the world with fresh eyes. Since our inception in 2000, we have been dedicated to turning 
                  travel and tour dreams into reality by offering a wide array of personalized and high-quality 
                  travel services.
              </p>
              <p class="mb-4 text-justify-all">
                  The company founded by a group of passionate travelers who wanted to share their love for 
                  exploration with the world. Starting as a small local operator, we grew through our unwavering 
                  commitment to customer satisfaction and our innovative approach to travel planning. 
                  Today, we are proud to serve thousands of travelers for tour each year, offering everything from bespoke 
                  travel itineraries to guided tours across some of the world’s most breathtaking destinations.
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
          </div>
          <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.5s">
            <div class="img-border h1-100">
              <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/safari/1008.jpg') }}" style="border-radius:10px;" alt="" />
            </div>
          </div>
      </div>
    </div>
</div>


<div class="container section-top-border">
  <h3 class="mb-30">Innovation and Growth</h3>
  <div class="row">
    <div class="col-lg-12">
      <blockquote class="generic-blockquote">
        "Recently, We continually invest in new technologies and innovative travel solutions to 
        enhance our service offerings. By embracing the latest trends and listening to 
        customer feedback, we adapt and evolve to meet the changing needs of modern travelers. 
        Our user-friendly website, mobile app, and dedicated customer support team make 
        planning and managing your travel easier than ever."
      </blockquote>
    </div>
  </div>
</div>


<!-- DNA -->
<div class="container-xxl pb-5">
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
          <div class="col-lg-4 col-md-4 sha col-sm-12 wow123 fadeInUp" data-wow123-delay="0.3s">
              <div class="card-card p-4 bg-blend-lighten shadow-sm w-100 h-100">
                  <h5 class="mb-3 text-center text-uppercase" style="color:#f1671e!important">Mission</h5>
                  <span>
                      We are committed to offering personalized service, reliable travel solutions, 
                      and unforgettable journeys that enrich lives and create lasting memories.
                  </span>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.5s">
              <div class="card-card p-4 bg-blend-lighten shadow-sm w-100 h-100">
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
<!-- Destination -->
@include('frontend.layouts.destinations')

@endsection
