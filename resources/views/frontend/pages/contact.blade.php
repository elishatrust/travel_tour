@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.inc_contact')


<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4 mb-5">
      <div class="col-lg-4 wow123 fadeInUp" data-wow123-delay="0.1s">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-5 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-map-marker-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2">#</span>Address</p>
            <h5 class="mb-0"><a href="javascript:(0)">Moshi Town, Kilimanjaro, TZ</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow123 fadeInUp" data-wow123-delay="0.3s">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-5 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-phone-alt text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2">#</span>Call Now</p>
            <h5 class="mb-0"><a href="tel:+255687829070">+255 687 829 070</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow123 fadeInUp" data-wow123-delay="0.5s">
        <div class="h-100 shadow-sm bg-light d-flex align-items-center px-5 py-4">
          <div class="btn-lg-square bg-white flex-shrink-0">
            <i class="fa fa-envelope-open text-primary"></i>
          </div>
          <div class="ms-4">
            <p class="mb-2"><span class="text-primary me-2">#</span>Mail Now</p>
            <h5 class="mb-0"><a href="mailto:upzonesafaris@gmail.com">upzonesafaris@gmail.com</a></h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.1s">
        <h1 class="display-512 h3 mb-4">Get In Touch!</h1>
        <form>
          <div class="row g-3">
            <div class="col-md-6 col-sm-12">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name"/>
                <label for="name">Name</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-floating">
                <input type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email"/>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-floating">
                <input type="number" class="form-control bg-light border-0"id="phone" min="0" placeholder="Phone number"/>
                <label for="phone">Phone</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-floating">
                <input type="text" class="form-control bg-light border-0"id="subject" placeholder="Subject"/>
                <label for="subject">Subject</label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-floating">
                <textarea class="form-control bg-light border-0" placeholder="Leave a message here"id="message" style="height: 100px"></textarea>
                <label for="message">Message</label>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <button class="btn btn-primary w-100 py-3" type="submit">
                    Send Message
                </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6 wow123 fadeInUp" data-wow123-delay="0.5s">
          <div class="h-100" style="min-height: 400px">
              <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4159371.9176977407!2d34.0069042239643!3d-3.3551450558754334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371dc27c5ddf5d%3A0xe14adf20d1bf3cb0!2sTourism%20and%20traveling!5e0!3m2!1sen!2stz!4v1725029985744!5m2!1sen!2stz"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
              </iframe>
          </div>
      </div>
    </div>
  </div>
</div>




<!-- Media Start -->
{{-- @include('frontend.layouts.social-media') --}}
<!--- Media End -->

@endsection
