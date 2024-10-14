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
                @if($token->file_path)
                    <img src="{{ asset('storage/' . $token->file_path) }}" class="w-100" style="border-radius: 10px;" alt="#UpzoneSafaris">
                @else
                    <img src="{{ asset('assets/frontend/img/safari/12.jpg') }}" class="w-100" style="border-radius: 10px;" alt="#UpzoneSafaris">
                @endif
                <p class="my-4">
                    <i class="fas fa-calendar-alt">
                        <small class="p-3">
                        {{ \Carbon\Carbon::parse($token->created_at)->format('M d, Y') }}
                        </small>
                    </i> 
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 blog-content-tab">
                <h6 class="h3 mb-4">{{ $token->title }}</h6>
                <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>({{ rand(1,99) }})</small></i>  <i class="fas fa-comments"><small>({{ rand(0,9) }})</small></i></p>
                <p class="blog-desic" style="font-size:20px;text-align:justify">
                    {{ $token->content }}
                </p>
            </div>
        </div>

        <hr>
        
        <div class="row g-5 blog-row">
            @foreach ($blogs as $blog)                
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        @if($blog->file_path)
                            <img src="{{ asset('storage/'.$blog->file_path) }}" class="w-100" style="border-radius:10px;width:100%;height:250px;" alt="#UpzoneSafaris">
                        @else
                            <img src="{{ asset('assets/frontend/img/safari/12.jpg') }}" class="w-100" style="border-radius:10px;width:100%;height:250px;" alt="#UpzoneSafaris">
                        @endif
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h6>{{ $blog->title }}</h6>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>({{ rand(1,99) }})</small></i>  <i class="fas fa-comments"><small>({{ rand(0,9) }})</small></i></p>
                        <p class="blog-desic">
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

