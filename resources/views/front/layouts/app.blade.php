
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($page_title && $meta_title) ? Str::upper($page_title.' | '.$meta_title) : "" }}</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/logo/logo.png') }}" rel="icon" />

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

<body>
    <!-- Spinner -->
    @include('front.layouts.spinner')

    <!-- Topbar -->
    @include('front.layouts.topbar')

    <!-- Navbar -->
    @include('front.layouts.navbar')
    
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
