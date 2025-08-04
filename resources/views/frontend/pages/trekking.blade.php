@extends('frontend.layouts.app')
<style>
    .accordion-item .accordion-button{
        cursor: pointer;
    }
    .accordion-item .accordion-button:hover{
        background-color: var(--primary);
        color: white;
    }
</style>
@section('content')
@include('frontend.layouts.inc_trekking')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Tanzania Safaris</p>
                {{-- <h1 class="display-5123 h2 mb-3" style="">Special <span style="color:#f1671e!important">Trekking</span></h1> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="accordion" id="accordionExample">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Service -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5Up">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>What We Do</p>
                <h1 class="display-5123 h2 mb-3" style="">Special Services For <span style="color:#f1671e!important">Upzone</span><span class="text-dark">Safaris</span></h1>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3Up">
                <img class="img-fluid mb-3" src="{{ asset('assets/frontend/img/icon/icon-2.png') }}" alt="Icon" />
                <h5 class="mb-3" style="color:#f1671e!important">Car Parking</h5>
                <span style="text-align: justify">
                    Safe and secure car parking services for travelers at hotels, 
                    attractions, and event venues.
                </span>
            </div> --}}
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/8.jpg') }}" alt="Icon" />
                <div class="p-3">
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Rest House</h5>
                    <span style="text-align: justify">
                        Booking accommodations ranging from budget hotels to luxury resorts worldwide.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/1.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Group Tours</h5>
                    <span style="text-align: justify">
                        Organized group tours for families, friends, and special interest groups
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/2.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Animal Photos</h5>
                    <span style="text-align: justify">
                        Capture beautiful memories with wildlife through professional 
                        animal photography services.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/6.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Free High Speed Wi-Fi</h5>
                    <span style="text-align: justify">
                        Ensuring that travelers stay connected with free, high-speed Wi-Fi at hotels, 
                        rest houses, and tour vehicles.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/7.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Food & Beverages</h5>
                    <span style="text-align: justify">
                        Variety of food and beverage options for travelers, including local delicacies, 
                        snacks, and drinks at tour destinations.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/5.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Guide Services</h5>
                    <span style="text-align: justify">
                        Offering professional guide services to ensure travelers have knowledgeable
                        experts to help them explore destinations.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/11.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Zoo Shopping</h5>
                    <span style="text-align: justify">
                        Offering gift shops and souvenir outlets at zoo and wildlife locations, allowing 
                        visitors to purchase animal-themed products and local crafts.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:15px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/services/9.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Playground Facilities</h5>
                    <span style="text-align: justify">
                        Safe and fun playground areas for children at select destinations, 
                        ensuring that families with young kids have a space for play and relaxation.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection