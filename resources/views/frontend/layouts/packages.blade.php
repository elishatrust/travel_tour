<div class="container-xxl py-5 package">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Packages</p>
                <h1 class="display-5123 h2 mb-5">Special Offers & Discounts</h1>
            </div>
        </div>
        <div class="row g-5" style="justify-content:center">
            @foreach ( $data as $item )
            <div class="col-lg-3 col-md-6 col-sm-12" style="border-radius: 10px!important;">
                <div class="package-item position-relative shadow-sm">
                    <h1 class="display-1 fs-1">{{ $item->title }}</h1>
                    <h4 class="text-dark mb-3">$ {{ $item->cost }}</h4>
                    <p><i class="fa fa-check text-primary me-1"></i>10% discount</p>
                    <p><i class="fa fa-check text-primary me-1"></i>{{ $item->adult }} adult, {{ $item->child }} child</p>
                    <p><i class="fa fa-check text-primary me-1"></i>{{ $item->more }}</p>                
                    <a href="#bookingModal" class="btn btn-sm btn-outline-primary " data-bs-toggle="modal" data-bs-target="#bookingModal">
                        Get Started
                        <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
