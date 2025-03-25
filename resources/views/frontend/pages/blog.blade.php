@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.inc_blog')

<div class="container-xxl py-5 blog">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase">
                    <span class="text-primary me-2">#</span>Latest News
                </p>
                <h1 class="display-5123 h2 mb-3" style="">Latest Travel News </h1>
            </div>
        </div>
        <div class="row">

            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-sm-12 shadow-sm p-4">
                    @if ($blog->file_path && file_exists(public_path($blog->file_path)))
                        <img src="{{ asset($blog->file_path) }}" class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:350px; object-fit:cover;"  alt="Blog Image">
                    @else
                        <img src="{{ asset('assets/frontend/img/safari/12.jpg') }}" class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:350px; object-fit:cover;"  alt="Fallback Image">
                    @endif
                    <div>
                        <h5 class="mb-3 text-muted">
                            {{ $blog->title }}
                        </h5><hr>
                        <span style="text-align: justify">
                            @php
                                $text = $blog->content;
                                $words = explode(' ', $text);
                                $firstTenWords = array_slice($words, 0, 30);
                                echo implode(' ', $firstTenWords);
                            @endphp 
                        </span>
                        <div class="d-flex mt-4 justify-content-between">
                            <span class="float-left">
                                <i class="fas fa-1x fa-calendar-alt">
                                    <small class="p-3">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                    </small>
                                </i> 
                            </span>
                            <a href="{{ url('read-more-news/'.Crypt::encrypt($blog->tokens)) }}" class="float-right">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>                
            @endforeach
            <div class="col-lg-12 col-sm-12 mt-5 d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>


@include('frontend.layouts.destinations')

@endsection

