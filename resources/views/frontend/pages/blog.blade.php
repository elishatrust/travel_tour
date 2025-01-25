@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.inc_blog')

<div class="container-xxl py-5 blog">
    <div class="container py-5">
        <div class="row g-5Up">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase">
                    <span class="text-primary me-2">#</span>Latest News
                </p>
                <h1 class="display-5123 h2 mb-3" style="">Latest Travel News </h1>
            </div>
        </div>
        <div class="row g-5 blog-row">
            @foreach ($blogs as $blog)                
            <div class="col-lg-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-lg-5 col-sm-12 blog-img-tab">
                        @if ($blog->file_path)
                            <img src="{{ asset('storage/'.$blog->file_path) }}" class="w-100" style="border-radius:5px; width:100%;height:200px; object-fit:cover;"  alt="Blog Image">
                        @else
                            <img src="{{ asset('assets/frontend/img/safari/12.jpg') }}" class="w-100" style="border-radius:5px; width:100%;height:200px; object-fit:cover;"  alt="Fallback Image">
                        @endif
                    </div>
                    <div class="col-lg-7 col-sm-12 blog-content-tab">
                        <h6>{{ $blog->title }}</h6>
                        {{-- <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>({{ rand(1,99) }})</small></i>  <i class="fas fa-comments"><small>({{ rand(0,9) }})</small></i></p> --}}
                        <hr>
                        <p class="">
                            <i class="fas fa-calendar-alt">
                                <small class="p-3">
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                </small>
                            </i> 
                        </p>
                        <p class="blog-desic" style="text-align:justify">
                            @php
                                $text = $blog->content;
                                $words = explode(' ', $text);
                                $firstTenWords = array_slice($words, 0, 30);
                                echo implode(' ', $firstTenWords);
                            @endphp 
                        </p>
                        <a href="{{ url('read-more-news/'.Crypt::encrypt($blog->tokens)) }}">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Media Start -->
{{-- @include('frontend.layouts.social-media') --}}
<!--- Media End -->

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection

