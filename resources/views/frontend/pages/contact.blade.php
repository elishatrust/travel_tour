@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.include')


<div class="container-xxl py-5">
  <div class="container py-3">
    <p style="color: #f1671e;" class="text-uppercase text-center">
      <span class="text-primary me-2 fw-bold">#</span>Get In Touch!
    </p>
    <p class="p-3 text-center">
      We’d love to hear from you! Whether you have a question, need more information about our products and services, or want to inquire about partnership opportunities, our team is here to assist you.
    </p>
    <div class="row g-5">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-3 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-map-marker-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2 fw-bold">#</span>Address</p>
            <h5 class="mb-0" style="font-size:1.0rem!important;">
              <a href="#">Lumumba Road Kigoma, TZ</a>  <br>
              <a href="#">P.O. Box 192</a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-3 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fas fa-city text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2 fw-bold">#</span>Office</p>
            <h5 class="mb-0" style="font-size:1.0rem!important;">
              <a href="#">House No 240</a> <br>
              <a href="#">Postal code 47101, Plot No 150</a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-3 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0 p-2 rounded-1">
            <i class="fa fa-phone-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2 fw-bold">#</span>Call Now</p>
            <h5 class="mb-0" style="font-size:1.0rem!important;">
              <a href="tel:+255695731886">+255 695 731 886</a><br>
              <a href="tel:+255622885887">+255 622 885 887</a>
            </h5>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-3 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-envelope-open text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2 fw-bold">#</span>Mail Now</p>
            <h5 class="mb-0" style="font-size:1.0rem!important;"><a href="mailto:info@darkland-org.com">info@darkland-org.com</a></h5>
          </div>
        </div>
      </div>          
    </div>
  </div>
</div>


<div class="google-map">
  <div class="row">
    <div class="col-lg-12 col-sm-12Up">
        <div class="h-100" style="min-height: 600px">
            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.3201300053142!2d29.632487484093552!3d-4.88595618242933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19bf1b0b9098fda5%3A0x587d3bb7757a4aa8!2sLumumba%20Road%2C%20Kigoma%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1745577529639!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
  </div>
</div>

@endsection
