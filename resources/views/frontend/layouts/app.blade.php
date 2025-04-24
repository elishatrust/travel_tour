
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($page_title && $meta_title) ? Str::upper($meta_title.' | '.$page_title) : "" }}</title>
    <link href="{{ asset('assets/frontend/img/logo/logo.png') }}" rel="icon" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"rel="stylesheet"/>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Roboto:wght@300;500;600&family=Georgia&display=swap" rel="stylesheet"/> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> 
    <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />  
</head>
<body>

    {{-- @include('frontend.layouts.spinner') --}}

    @include('frontend.layouts.topbar')

    @include('frontend.layouts.navbar')
    
    @yield('content')

    @include('frontend.layouts.footer')

 
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            log_visitor();
            count_visitor();
        });


        /*====== CONTENT PROTECTED ======*/
        // function showAlert(message) {
        //     var alertBox = document.getElementById("customAlert");
        //     alertBox.textContent = message;
        //     alertBox.style.display = "block";
        //     alertBox.style.opacity = "1";
        
        //     setTimeout(function() {
        //         alertBox.style.opacity = "0";
        //         setTimeout(() => {
        //             alertBox.style.display = "none";
        //         }, 1000);
        //     }, 1500);
        // }
        
        // document.addEventListener("contextmenu", function(event) {
        //     event.preventDefault();
        //     showAlert("Content is protected!");
        // });
        
        // document.addEventListener("keydown", function(event) {
        //     if (
        //         event.ctrlKey && 
        //         (event.key === "c" || event.key === "x" || event.key === "u" || event.key === "Shift" || event.key === "i")
        //     ) {
        //         event.preventDefault();
        //         showAlert("Content is protected!");
        //     }
        // });
        
        // document.addEventListener("selectstart", function(event) {
        //     event.preventDefault();
        //     showAlert("Content is protected!");
        // });

        /*====== START OF (Tawk.to) SCRIPT ======*/
        // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        // (function(){
        //     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        //     s1.async=true;
        //     s1.src='https://embed.tawk.to/66cdfec550c10f7a00a0fa80/1i6aamdk7';
        //     s1.charset='UTF-8';
        //     s1.setAttribute('crossorigin','*');
        //     s0.parentNode.insertBefore(s1,s0);
        // })();

        /*====== Countdown Timer ======*/
        function log_visitor(){            
            $.ajax({
                url: "{{ route('log-visit') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Visit logged successfully.');
                },
                error: function(response) {
                    console.log('Error logging visit.');
                }
            });
        }

        /*====== Visitor Count ======*/
        function count_visitor() {
            jQuery.ajax({
                type: "GET",
                url: "{{ route('visitor-count') }}",
                success: function(data) {
                    var visit = data.data;
                    $("#visit_no").html(visit);
                }
            });
        }

        /*====== Whatsapp chat widget ======*/
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?21528';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled":true,
            "chatButtonSetting":{
                "backgroundColor":"#4dc247",
                "ctaText":"Live Chat",
                "borderRadius":"25",
                "marginRight":"0",
                "marginBottom":"50",
                "marginLeft":"20",
                "position":"left",
            },
            "brandSetting":{
                "brandName":"DarkLand",
                "brandSubTitle":"Typically replies within a day",
                "brandImg":"{{ asset('assets/frontend/img/logo/logo.png') }}",
                "welcomeText":"Hi there!\nWelcome to DarkLand.\nHow can I help you?",
                "messageText":"Hello DarkLand,%0A I have a question about services",
                "backgroundColor":"#0a5f54",
                "ctaText":"Start Chat",
                "borderRadius":"25",
                "autoShow":false,
                "phoneNumber":"255695731886"
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
    <script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    
</body>
</html>
