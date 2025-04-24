<div class="container-fluid bg-dark text-light footer py-5">
<div class="container">
  <div class="row g-5">
    <div class="col-lg-3 col-md-6">
      <img src="{{ asset('assets/frontend/img/logo/logo.png') }}" style="width: 300px;height:auto" alt="Start-Little">
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Address</h5>
      <p class="mb-2">
        <i class="fa fa-map-marker-alt me-3"></i>Lumumba Road Kigoma, TZ
      </p>
      <p class="mb-2">
        <i class="fa fa-phone-alt me-3"></i><a href="tel:+255 695 731 886" class="text-white">+255 695 731 886</a><br>
        <i class="fa fa-phone-alt me-3"></i><a href="tel:+255 622 885 887" class="text-white">+255 622 885 887</a>
      </p>
      <p class="mb-2">
        <i class="fa fa-envelope me-3"></i><a href="mailto:info@darkland-org.com" class="text-white">info@darkland-org.com</a>
      </p>
      <div class="d-flex pt-2">
        <a class="btn btn-outline-light btn-social" href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-social" href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-light btn-social" href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-social" href="#" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Quick Links</h5>
      <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
      <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
      <a class="btn btn-link" href="{{ route('services') }}">Our Services</a>
      <a class="btn btn-link" href="#">Latest News</a>
    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-light mb-4">Newsletter</h5>
      <p>Provide your email for updates.</p>
      <form action="#" method="post">
        <div class="position-relative mx-auto" style="max-width:100%;">
            <input class="form-control w-100 py-3 ps-4 pe-5" style="border-radius: 10px;border: 1px solid var(--dark);" type="email" placeholder="Enter your email" required/>
            <button type="submit" class="btn btn-outline-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
        </div>
      </form>
      <p class="text-uppercase text-white mt-4">Number of Visitors  :  (<span id="visit_no"></span>)</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="copyright">
    <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <a class="border-bottom" href="{{ route('welcome') }}">DarkLand</a> &copy; {{ date('Y') }}, All Right Reserved.
      </div>
      <div class="col-md-6 text-center text-md-end">Designed By
        <a class="border-bottom" href="https://elishatrust.github.io/mysite/" target="_blank">ELISHATRUST</a>
      </div>
    </div>
  </div>
</div>
</div>