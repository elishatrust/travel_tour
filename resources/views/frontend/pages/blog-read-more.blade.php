@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.inc_blog')

<div class="container-xxl py-5 blog">
    <div class="container">
        <div class="gallary-header text-center">
            <p style="color: #f1671e;" class="text-uppercase">
                <span class="text-primary me-2">#</span>Travel News from all over the world
            </p>
        </div>
        <div class="row g-5 p-5">
            <div class="col-lg-6 col-md-6 col-sm-12 blog-img-tab">
                @if ($token->file_path )
                    <img src="{{ asset('storage/'.$token->file_path) }}" class="w-100" style="border-radius:5px; object-fit:cover;" alt="Blog Image">
                @else
                    <img src="{{ asset('assets/frontend/img/safari/12.jpg') }}" class="w-100" style="border-radius:5px; object-fit:cover;" alt="Fallback Image">
                @endif                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 blog-content-tab">
                <h6 class="h4 mb-3">{{ $token->title }}</h6>
                {{-- <p>
                    <i class="fas fa-user"><small>Admin</small></i>  
                    <i class="fas fa-eye"><small>({{ rand(1,99) }})</small></i>  
                    <i class="fas fa-comments"><small>({{ rand(0,9) }})</small></i>
                </p> --}}
                <hr>

                <p class="">
                    <i class="fas fa-calendar-alt">
                        <small class="p-3">
                        {{ \Carbon\Carbon::parse($token->created_at)->format('M d, Y') }}
                        </small>
                    </i> 
                </p>
                <p class="blog-desic" style="text-align:justify">
                    {{ $token->content }}
                </p>
                <p class="mt-4">
                    <a href="{{ route('latest-news') }}" class="btn btn-outline-primary px-4"><i class="fa fa-arrow-left me-2"></i> Back</a>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Media Start -->
{{-- @include('frontend.layouts.social-media') --}}
<!--- Media End -->

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection

