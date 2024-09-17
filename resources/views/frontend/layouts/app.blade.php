
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($page_title && $meta_title) ? Str::upper($page_title.' | '.$meta_title) : "" }}</title>
    
    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/logo/favicon.png') }}" rel="icon" />
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"rel="stylesheet"/>

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
    @include('frontend.layouts.spinner')

    <!-- Topbar -->
    @include('frontend.layouts.topbar')

    <!-- Navbar -->
    @include('frontend.layouts.navbar')
    
    <!-- Main -->
    @yield('content')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Booking Modal Start -->
    <div class="modal fade" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white text-uppercase" id="bookingModalLabel">Plan Your Journey</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="date">Departure Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="travelers">Travelers <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="travelers" name="travelers" min="1" placeholder="Number of travelers" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="accommodation">Accommodation <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="accommodation" name="accommodation" required>
                                        <option value="">~Select~</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="resort">Resort</option>
                                        <option value="hostel">Hostel</option>
                                        <option value="guesthouse">Guesthouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                                    <label class="form-check-label" for="agree">I agree to the I agree to the <a href="#">terms and conditions</a>.</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Modal End -->

    <!-- Back to Top -->
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
