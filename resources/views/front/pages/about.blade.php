@extends('front.layouts.app')
@section('content')

@include('front.layouts.include')


<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <p><span class="text-primary me-2">#</span>Background To GoTrip</p>
              <h1 class="display-5 mb-4">
                Experience The Best from <span class="text-primary">GoTrip</span>
              </h1>
              <p class="mb-4 text-justify-all">
                  At GoTrip, we are passionate about creating unforgettable travel experiences that inspire, relax, and rejuvenate. Founded in 2000, our journey began with a vision to make travel accessible, affordable, and extraordinary for everyone.
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
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/animal-lg-3.jpg') }}" alt="" />
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection
