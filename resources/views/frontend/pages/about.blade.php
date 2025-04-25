@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.include')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-sm-12">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span> Background</p>
                <h1 class="display-5123 h2 mb-5">Company Overview</h1>
                <p class="mb-4" style="text-align: justify">                                        
                    Company History: Founded in 2023, Darkland Company Limited has grown to become one of Tanzania's leading agricultural enterprises. From our humble beginnings as a small farm-focused company, we have expanded our operations to include seed production, agricultural products, and specialized machinery, with a strong commitment to quality and customer satisfaction. Over the years, we have built strong relationships with local and international partners, creating a significant impact on Tanzania's agricultural economy.
                </p>
                <p class="mb-4" style="text-align: justify">
                    At Darkland, we strive to be at the forefront of agricultural innovation, offering a range of services that span from soil analysis, seed production, crop cultivation and livestock breeding to machinery, equipment supply, and farm consultancy, research and training. Our vision is to be a catalyst for the growth of the agricultural industry in Tanzania and beyond, fostering sustainable practices and empowering farmers to achieve their full potential.
                </p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="img-border123 h1-100">
                    <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:100%;" src="{{ asset('assets/frontend/img/img/Technology.webp') }}" style="border-radius:10px;" alt="" />
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                <p class="mb-4" style="text-align: justify">
                    Our expansion was fueled by partnerships with research institutions and government agricultural programs, which enabled us to pilot modern farming technologies and best practices. This collaborative spirit led to the successful introduction of mechanized farming tools, making it easier for both small and large-scale farmers to improve efficiency and productivity.
                </p>
                <p class="mb-4" style="text-align: justify">
                    Today, Darkland is not just a supplier but a strategic ally to thousands of farmers, agribusinesses, and organizations across Tanzania. Our focus on sustainability, technology adoption, and capacity-building has made us a key player in the mission to ensure food security and economic empowerment through agriculture. With every harvest, we continue to sow seeds of growth, innovation, and lasting change.
                </p>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Empower Innovation
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Guide Integrity
                </h5>
                <h5 class="mb-3">
                    <i class="far fa-check-circle text-primary me-3"></i>Farmer-Centric
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="mb-30">Growth through Innovation & Impact</h3>
    <div class="row">
        <div class="col-lg-12 p-3">
            <blockquote class="generic-blockquote feature-box blue" style="text-align: justify">
                "Through dedication and hard work, we have cultivated strong relationships with both local farmers and international partners, building a network that enables us to deliver cutting-edge solutions and stay aligned with global agricultural standards. Our work has contributed significantly to improving food security, enhancing farming efficiency, and supporting the economic empowerment of rural communities. We take pride in being part of Tanzania’s agricultural transformation. Our impact is visible in: (a) The increased productivity of smallholder and commercial farmers (b) The spread of sustainable farming practices. (c) Trusted partnerships with NGOs, cooperatives, and agri-tech innovators"
            </blockquote>
        </div>
    </div>
</div>


<div class="container-xxl pb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-sm-12">
                <div class="card-card123 p-4 shadow-sm w-100 h-100" style="background: #f3f4f5!important; border-bottom:5px solid red; border-radius:5px;">
                    <h5 class="mb-3 text-center text-uppercase animated-underline123">Vision</h5>
                    <span style="text-align: justify">
                        To be the leading provider of innovative agricultural solutions in Tanzania, driving sustainable growth and supporting farmers and agricultural businesses through cutting-edge technology, education, and expertise.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card-card123 p-4 shadow-sm w-100 h-100" style="background: #f3f4f5!important; border-bottom:5px solid blue; border-radius:5px;">
                    <h5 class="mb-3 text-center text-uppercase animated-underline123">Mission</h5>
                    <span style="text-align: justify">
                        To improve the agricultural sector by providing top-quality products and services that promote sustainable farming, enhance productivity, and support economic growth.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card-card123 p-4 shadow-sm w-100 h-100" style="background: #f3f4f5!important; border-bottom:5px solid green; border-radius:5px;">
                    <h5 class="mb-3 text-center text-uppercase animated-underline123">Core Value</h5>
                    <span style="text-align: justify">
                        Our work is rooted in strong values that guide every decision, partnership, and service we offer. These values shape our identity and define the way we serve farmers, communities, and the agricultural industry at large.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @include('frontend.layouts.destinations') --}}

@endsection
