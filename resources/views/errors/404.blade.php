<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>404</title>
    
    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/logo/logo.png') }}" rel="icon" />
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

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


@include('frontend.layouts.include')


<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
        <div class="col-lg-6">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1">404</h1>
            <h1 class="mb-4">Page Not Found</h1>
            <p class="mb-4">
                We’re sorry, the page you have looked for does not exist in our
                website! Maybe go to our home page or try to use a search?
            </p>
            <a class="btn btn-primary py-3 px-5" href="{{ route('welcome') }}">Go Back To Home</a>
        </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>


<script>
    //   Date picker
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').setAttribute('min', today);

    //   Whatsapp chat widget
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?21528';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled":true,
        "chatButtonSetting":{
            "backgroundColor":"#4dc247",
            "ctaText":"",
            "borderRadius":"25",
            "marginRight":"0",
            "marginBottom":"50",
            "marginLeft":"20",
            "position":"left",
        },
        "brandSetting":{
            "brandName":"GoTrip Company Limited",
            "brandSubTitle":"Typically replies within a day",
            "brandImg":"{{ asset('assets/frontend/img/logo/logo.png') }}",
            "welcomeText":"Hi there!\nWelcome to GoTrip Company Limited.\nHow can I help you?",
            "messageText":"Hello GoTrip Company Limited,%0A I have a question about services",
            "backgroundColor":"#0a5f54",
            "ctaText":"Start Chat",
            "borderRadius":"25",
            "autoShow":false,
            "phoneNumber":"255653064129"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> 
<script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
</body>
</html>
