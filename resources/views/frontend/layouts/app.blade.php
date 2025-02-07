
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($page_title && $meta_title) ? Str::upper($meta_title.' | '.$page_title) : "" }}</title>
    <link href="{{ asset('assets/frontend/img/logo/favicon.png') }}" rel="icon" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    
    {{-- <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/frontend/css/aos.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />
    <script>
        // $(document).ready(function () {
        //     document.addEventListener('contextmenu', event => event.preventDefault());
        //     document.addEventListener('selectstart', event => event.preventDefault());
        //     document.addEventListener('copy', event => event.preventDefault());
        // });
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-3" style="background: #f3f4f5!important; border-radius:5px;">
                <div class="modal-header">
                    <h5 class="modal-title text-dark text-uppercase" id="bookingModalLabel">Plan Your Journey</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" id="booking_form" action="javascript:void(0)"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="text" class="form-control" id="booking_tour" name="booking_tour" placeholder="Booking Tour Name" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date" placeholder="Arrival Date" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <input type="number" class="form-control" id="number_travelers" name="number_travelers" min="1" placeholder="Number of Travellers" required>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Enter Message.." cols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div id="msg_notification" class="col-md-12.col-sm-12 d-flex justify-content-center align-items-center d-none" >
                                <img src="{{ asset('assets/backend/loader.svg') }}" alt="Loading...">
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="closeModel()" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-primary save-btn">Submit</button>
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
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/js/aos.js') }}"></script> --}}

    <script type="text/javascript">


        $(document).ready(function() {
            log_visitor();
            count_visitor();
            closeModel();
        });


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


        /*====== FAQ ======*/
        document.querySelectorAll('.faq-item h3').forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('open');
            });
        });

        
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

        /*====== Date Picker ======*/
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('arrival_date').setAttribute('min', today);
        // document.getElementById('departure_date').setAttribute('min', today);
        $('.save-btn').prop('disabled', false);

        /*====== Close Modal, Clear Form  ======*/
        function closeModel(){
            // $('form#form')[0].reset();
            $('#bookingModal').modal('hide');
        }


        /*====== Save Booking  ======*/
        $("div#msg_notification img").hide();
        $("form#booking_form").submit(function(e){
            e.preventDefault();
            
            $.ajaxSetup({ headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            
            // let formData = new FormData(this);
            let formData = document.getElementById("booking_form");
            // $('.save-btn').prop('disabled', true);
            $("div#msg_notification img").show();
            
            $.ajax({
                type: "POST",
                url: "{{ route('save-bookings') }}",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(data){
                    // $('.save-btn').prop('disabled', false);
                    $("div#msg_notification img").hide();
                    if(data.status === 200){
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-success text-center alert-dismissable w-100'>"+data.message+"</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                            $("form#booking_form")[0].reset(); 
                            $('#bookingModal').modal('hide');
                        },5000);
                    }else if(data.status === 500){
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>"+data.message+"</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                        },5000);
                    }else{
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>Error validation occurred. Please try again</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                        },5000);
                    }
                }
            })

        })
        

        /*====== Save Trip  ======*/
        $("div#msg_notification img").hide();
        $("form#form").submit(function(e){
            e.preventDefault();
            
            $.ajaxSetup({ headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});

            let cost = $('#cost').val().replace(/,/g, '');
            $('#cost').val(cost);
            
            let formData = new FormData(this);
            // $('.save-btn').prop('disabled', true);
            $("div#msg_notification img").show();
            
            $.ajax({
                type: "POST",
                url: "{{ route('save-trip') }}",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(data){
                    //$('.save-btn').prop('disabled', false);
                    $("div#msg_notification img").hide();
                    if(data.status === 200){
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-success text-center alert-dismissable w-100'>"+data.message+"</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                            $("form#form")[0].reset(); 
                            $('#bookingModal').modal('hide');
                        },5000);
                    }else if(data.status === 500){
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>"+data.message+"</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                        },5000);
                    }else{
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>Error validation occurred. Please try again</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                        },5000);
                    }
                },
                error: function(response) {
                    if (response.status === 500) {
                        var errors = response.responseJSON.errors;
                        var errorHtml = '<ul>';

                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>'; 
                        });

                        errorHtml += '</ul>';
                        $("div#msg_notification").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>"+errorHtml+"</div>");
                        setTimeout(function(){
                            $("div#msg_notification").fadeOut("slow").html(""); 
                        },5000);
                    }
                }
            })

        });


        /*====== Change Package ======*/
        $("div#loader").hide();
        $("div#package_cost").hide();
        $("#package").change(function(event){
            event.preventDefault();

            $.ajaxSetup({ headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});

            var div = "";
            var package = $(this).val();
            $("div#package_cost").html("");
            $.ajax({
                type: "POST",
                url: "{{ route('get-package') }}",
                data: {package:package},
                dataType: "json",
                success: function(data) {
                    setTimeout(() => {
                        $("div#loader").show();
                    }, 500);
                    setTimeout(() => {
                        $("div#loader").hide();
                        $("div#package_cost").show();
                        div += '<div class="input-group mt-4 mb-3"><label class="input-group-text" for="cost">Cost ($)</label><input type="text" class="form-control" id="cost" name="cost" value="' + parseFloat(data.cost).toLocaleString() + '" readonly></div>';
                        $("div#package_cost").html(div);
                    }, 1000);
                },
                error:function(data){
                    console.log(data);
                }
            })
        });


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
                "brandName":"UpzoneSafaris",
                "brandSubTitle":"Typically replies within a day",
                "brandImg":"{{ asset('assets/frontend/img/more/20a.jpg') }}",
                "welcomeText":"Hi there!\nWelcome to UpzoneSafaris.\nHow can I help you?",
                "messageText":"Hello UpzoneSafaris,%0A I have a question about services",
                "backgroundColor":"#0a5f54",
                "ctaText":"Start Chat",
                "borderRadius":"25",
                "autoShow":false,
                "phoneNumber":"255764367351"
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
