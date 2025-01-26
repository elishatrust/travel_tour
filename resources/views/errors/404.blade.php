<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>404 | ERROR</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/logo/logo.png') }}" rel="icon" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
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
{{-- @include('frontend.layouts.spinner') --}}

<!-- Topbar -->
@include('frontend.layouts.topbar')

<!-- Navbar -->
@include('frontend.layouts.navbar')


<div class="container-xxl py-5">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <p class="mb-4">
                    We’re sorry, the page you have looked for does not exist in our
                    website! Maybe go to our home page?
                </p>
                <a class="btn btn-outline-primary px-5" href="{{ route('welcome') }}">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('frontend.layouts.footer')

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>


<script>

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
</body>
</html>
