@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.include')


<!-- Service -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-12 col-sm-12 text-center">
                {{-- <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Services</p> --}}
                <h1 class="display-5123 h2 mb-3" style="">Our Special Products & Services</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h4 class="text-start">1. Agricultural Products </h4>
                <hr class=" border-bottom border-primary">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/seeds.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Crops & Seeds</h5>
                    <span style="text-align: justify">
                        We offer a wide variety of high-quality seeds for fruits, vegetables, grains, and pulses, ensuring that farmers have access to the best options for their land.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/fertilizers.jpeg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Fertilizers</h5>
                    <span style="text-align: justify">
                        Our premium fertilizers are tailored for various soil types and crops to ensure high yields and long-term soil fertility.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/livestock.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Livestock Products</h5>
                    <span style="text-align: justify">
                        We provide healthy livestock, breeding services, and animal feed to support the growth of the livestock industry in Tanzania.
                    </span>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 col-sm-12">
                <h4 class="text-start">2. Farm Management Services </h4>
                <hr class=" border-bottom border-primary">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/consulting.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Consulting</h5>
                    <span style="text-align: justify">
                        Our team of experts provides tailored consulting services to farmers, helping them optimize their farm operations and increase productivity.
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/training.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Training</h5>
                    <span style="text-align: justify">
                        We offer training programs for farmers, focusing on best practices in crop production, livestock management, and sustainable farming.
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/Research.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Research</h5>
                    <span style="text-align: justify">
                        We invest in agricultural research to develop better seeds, farming techniques, sustainable practices, climate change-related technologies, communication technologies, and other cutting-edge innovations.
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/supply-chain-soln.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Supply Chain Solutions</h5>
                    <span style="text-align: justify">
                        From procurement to distribution, we provide integrated solutions for the agricultural supply chain, ensuring timely delivery and quality assurance.
                    </span>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-lg-12 col-sm-12">
                <h4 class="text-start">3. Equipment and Machinery </h4>
                <hr class=" border-bottom border-primary">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/Tools.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Agricultural Tools</h5>
                    <span style="text-align: justify">
                        We supply a range of tools, equipment and services for small to large-scale farming operations, including plows, harrows, and planters.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/Equipment.webp') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Tractors</h5>
                    <span style="text-align: justify">
                        Our fleet of tractors and other farm machinery are available for sale and lease, designed to meet the needs of all types of agricultural operations.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 shadow-sm p-3">
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/img/Irrigation.jpg') }}" alt="Icon" />
                <div>
                    <h5 class="mb-3 text-center" style="color:#f1671e!important">Irrigation Systems</h5>
                    <span style="text-align: justify">
                        We provide modern irrigation solutions that help conserve water while maximizing crop output, ensuring sustainable farming practices.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection
