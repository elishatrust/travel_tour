<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-end wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Packages</p>
                <h1 class="display-5123 h2 mb-5">Special Offers & Discounts</h1>
            </div>
        </div>
        <div class="row g-5" style="justify-content:center">
            @foreach ( $data as $item )
            <div class="col-lg-3 col-md-6 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.3s" style="border-radius: 10px!important;">
                <div class="membership-item position-relative shadow-sm bg-light w-100 h-100" style="border-radius: 10px!important;">
                    {{-- <img class="img-fluid" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/t2.webp') }}" alt="" /> --}}
                    <h1 class="display-1 fs-1">{{ $item->title }}</h1>
                    <h4 class="text-dark mb-3">$ {{ $item->cost }}</h4>
                    <p><i class="fa fa-check text-primary me-2"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-2"></i>{{ $item->adult }} adult, {{ $item->child }} child</p>
                    <p><i class="fa fa-check text-primary me-2"></i>{{ $item->more }}</p>
                    <a class="btn btn-outline-primary px-4 mt-3" href="#bookingModal"  data-bs-toggle="modal" data-bs-target="#bookingModal">Get Started</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
