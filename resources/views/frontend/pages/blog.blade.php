@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.include')

<div class="container-xxl py-5 blog">
    <div class="container">
        {{-- <div class="gallary-header text-center">
            <h1 class="display-5 mb-4"> Latest News</h1>
            <p>Travel News from all over the world</p>
        </div> --}}
        <div class="row g-5 blog-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Curabit finibus dui sem.</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Excepteur sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Treatmnkl sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="{{ asset('assets/frontend/img/animal-lg-1.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Orcidinodal sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Media Start -->
{{-- @include('frontend.layouts.social-media') --}}
<!--- Media End -->


@endsection

