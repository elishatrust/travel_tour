<div class="container-fluid bg-dark text-light footer py-5 wow123 fadeIn" data-wow123-delay01234="0.1s">
<div class="container py-5">
  <div class="row g-5">
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Address</h5>
      <p class="mb-2">
        <i class="fa fa-map-marker-alt me-3"></i>Moshi Town, Kilimanjaro, TZ
      </p>
      <p class="mb-2">
        <i class="fa fa-phone-alt me-3"></i>+012 345 67890
      </p>
      <p class="mb-2">
        <i class="fa fa-envelope me-3"></i>info@upzonesafaris.com
      </p>
      <div class="d-flex pt-2">
        <a class="btn btn-outline-light btn-social" href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social" href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        {{-- <a class="btn btn-outline-light btn-social" href="#" title="Twitter" target="_blank">
          <svg  style="fill: white; font-size: 20px; font-family:'Font Awesome 5 Brands';" xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512">
              <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
          </svg>
        </a> --}}
        <a class="btn btn-outline-light btn-social" href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        {{-- <a class="btn btn-outline-light btn-social" href="#" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a> --}}
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Quick Links</h5>
      <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
      <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
      <a class="btn btn-link" href="{{ route('services') }}">Our Services</a>
      <a class="btn btn-link" href="{{ route('blog') }}">Latest News</a>
      <a class="btn btn-link" href="{{ route('terms-and-conditions') }}">Terms & Condition</a>
      <a class="btn btn-link" href="{{ route('login') }}">Staff</a>
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Popular Destination</h5>
      <a class="btn btn-link" href="#">Mount Meru</a>
      <a class="btn btn-link" href="#">Mount Kilimanjaro</a>
      <a class="btn btn-link" href="#">Ngorongoro Crater</a>
      <a class="btn btn-link" href="#">Arusha National Park</a>
      <a class="btn btn-link" href="#">Serengeti National Park</a>
      <a class="btn btn-link" href="#">Tarangire National Park</a>
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Newsletter</h5>
      <p>Provide your email for updates.</p>
      <form action="#" method="post">
        <div class="position-relative mx-auto" style="max-width: 400px">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5"
              type="email" placeholder="Enter your email" required/>
            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="copyright">
    <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <a class="border-bottom" href="{{ route('welcome') }}">UPZONESafaris</a> &copy; {{ date('Y') }}, All Right Reserved.
      </div>
      <div class="col-md-6 text-center text-md-end">Designed By
        <a class="border-bottom" href="https://elishatrust.github.io/mysite/" target="_blank">ELISHATRUST</a>
      </div>
    </div>
  </div>
</div>
</div>