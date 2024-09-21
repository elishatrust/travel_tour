@extends('frontend.layouts.app')
<style>
  .section-top-border {
    padding: 50px 0;
    border-top: 1px dotted #eee
}
.generic-blockquote{padding:30px 50px 30px 30px;background:#f9f9ff;border-left:2px solid #222}
  
</style>
@section('content')

@include('frontend.layouts.include')


<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
          <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.1s">
              <p><span class="text-primary me-2">#</span>Our Background</p>
              <h1 class="display-5123 h2 mb-4">
                We are Holiday Destination Support Company
              </h1>
              <p class="mb-4 text-justify-all">
                  At UpzoneSafaris, we are passionate about creating unforgettable travel experiences that inspire, relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, affordable, and extraordinary for everyone.
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
            <div class="img-border">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/more/support-img.jpg') }}" alt="" />
            </div>
          </div>
      </div>
    </div>
</div>

<div class="container py-5 section-top-border">
  <h3 class="mb-30">Block Quotes</h3>
  <div class="row">
    <div class="col-lg-12">
      <blockquote class="generic-blockquote">
        “Recently, the US Federal government banned online casinos from operating in America by
        making it illegal to
        transfer money to them through any US bank or payment system. As a result of this law, most
        of the popular
        online casino networks such as Party Gaming and PlayTech left the United States. Overnight,
        online casino
        players found themselves being chased by the Federal government. But, after a fortnight, the
        online casino
        industry came up with a solution and new online casinos started taking root. These began to
        operate under a
        different business umbrella, and by doing that, rendered the transfer of money to and from
        them legal. A major
        part of this was enlisting electronic banking systems that would accept this new
        clarification and start doing
        business with me. Listed in this article are the electronic banking”
      </blockquote>
    </div>
  </div>
</div>

@endsection
