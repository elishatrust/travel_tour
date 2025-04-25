{{-- <div class="container-fluid include py-5">
    <div class="container">
        <h1 class="display-4 h3 text-center text-white mb-3">{{ $page_title }}</h1>
    </div>
</div> --}}


<div class="uni-banner-default uni-background-1">
    <div class="container">
        <div class="page-title">
            <div class="page-title-inner">
                <h1>{{ $page_title }}</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{ route('welcome') }}">home</a></li>
            <li><a href="#">{{ $page_title }}</a></li>
        </ul>
    </div>
</div>