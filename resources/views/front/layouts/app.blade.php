
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($meta_title) ? Str::upper($meta_title) : "" }}</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="{{ asset('assets/frontend/css/fonts.googleapis.css') }}" rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />

    <script>
        $(document).ready(function () {
            document.addEventListener('contextmenu', event => event.preventDefault());
            document.addEventListener('selectstart', event => event.preventDefault());
            document.addEventListener('copy', event => event.preventDefault());
        });
    </script>
</head>

<style>
    .preloader {
        background-color: #f7f7f7;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999999;
        transition: .6s;
        margin: 0 auto;
    }

    .preloader .preloader-circle {
        width: 100px;
        height: 100px;
        position: relative;
        border-style: solid;
        border-width: 3px;
        border-top-color: #014b85;
        border-bottom-color: transparent;
        border-left-color: transparent;
        border-right-color: transparent;
        z-index: 10;
        border-radius: 50%;
        box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
        background-color: #ffffff;
        animation: zoom 2000ms infinite ease;
        transition: .6s;
    }

    .preloader .preloader-circle2 {
        border-top-color: #0078ff;
    }

    .preloader .preloader-img {
        position: absolute;
        top: 50%;
        z-index: 200;
        left: 0;
        right: 0;
        margin: 0 auto;
        text-align: center;
        display: inline-block;
        transform: translateY(-50%);
        padding-top: 6px;
        transition: .6s;
    }

    .preloader .preloader-img img {
        max-width: 55px;
    }

    .preloader .pere-text strong {
        font-weight: 800;
        color: #dca73a;
        text-transform: uppercase;
    }

    @keyframes zoom {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <!-- Spinner -->
    @include('front.layouts.spinner')

    <!-- Topbar -->
    @include('front.layouts.topbar')

    <!-- Navbar -->
    @include('front.layouts.navbar')

    <!-- Header -->
    @include('front.layouts.header')
    
    <!-- Main -->
    @yield('content')

    <!-- Footer -->
    @include('front.layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
</body>
</html>
