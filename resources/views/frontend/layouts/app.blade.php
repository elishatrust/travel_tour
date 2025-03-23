
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ !empty($page_title && $meta_title) ? Str::upper($meta_title.' | '.$page_title) : "" }}</title>
    <link href="{{ asset('assets/frontend/img/logo/giraffe-128.gif') }}" rel="icon" />
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

    @include('frontend.layouts.spinner')

    @include('frontend.layouts.topbar')

    @include('frontend.layouts.navbar')
    
    @yield('content')

    @include('frontend.layouts.footer')


    @php
    use App\Models\PackageModel;
    $packages = PackageModel::getPackage();
    @endphp

    <div class="modal fade" id="bookingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-2 booking-modal">
                <div class="modal-header">
                    <h3 class="modal-title text-dark text-uppercase" id="bookingModalLabel">
                        Plan Your Journey
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" id="form" action="javascript:void(0)"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="nationality">Nationality <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality/Country" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="date">Arrival Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="date">Departure Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="departure_date" name="departure_date" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="travelers">Travelers (Adult)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="adults" name="adults" min="1" placeholder="Number of adults" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="travelers">Travelers (Child)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="children" name="children" min="0" placeholder="Number of children" required>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="fw-bold" for="accommodation">Accommodation <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="accommodation" name="accommodation" required>
                                        <option value="">~Select~</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Resort">Resort</option>
                                        <option value="GuestHouse">GuestHouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="fw-bold" for="package">Budget/Package <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="package_id" name="package_id" required>
                                        <option value="">~Select~</option>
                                        @if (!empty( $packages))
                                            @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->title .' - $'.$package->cost }}</option>                                                
                                            @endforeach                                            
                                        @else
                                            <option value="">No option</option>                                            
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="fw-bold" for="message">Message</label>
                                    <textarea class="form-control" type="text" name="message" id="message" cols="30" rows="5" placeholder="Message (Optional)"></textarea>                                    
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                                    <label class="form-check-label" for="agree">I agree to the I agree to the <a href="{{ route('terms-and-conditions') }}">terms and conditions</a>.</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12" id="loader"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark text-uppercase" onclick="closeModel()" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-primary text-uppercase">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <div id="customAlert"></div>

    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            log_visitor();
            count_visitor();
            closeModel();
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

        /*====== TEXT AUTO WRITER ======*/
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };
        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };



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

        /*====== Close Modal, Clear Form  ======*/
        function closeModel(){
            $("#form")[0].reset();
            $('#bookingModal').modal('hide');
        }


        /*====== Save Booking  ======*/
        $("#form").on("submit", function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('booking.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                beforeSend: function() {
                    $("#loader").html('Saving...').show();
                },
                success: function(response) {
                    $("#loader").fadeIn().html("<div class='alert alert-success text-center alert-dismissable w-100'>"+response.message+"</div>").delay(3000).fadeOut("slow"); 
                    $("#form")[0].reset();
                },
                error: function(response) {
                    $("#loader").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>Something went wrong. Please check your input.</div>").delay(3000).fadeOut("slow"); 
                }
            });
        });


        /*====== Save Contacts  ======*/
        $("#form").on("submit", function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('contact.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                beforeSend: function() {
                    $("#loader").html('Saving...').show();
                },
                success: function(response) {
                    $("#loader").fadeIn().html("<div class='alert alert-success text-center alert-dismissable w-100'>"+response.message+"</div>").delay(3000).fadeOut("slow"); 
                    $("#form")[0].reset();
                },
                error: function(response) {
                    $("#loader").fadeIn().html("<div class='alert alert-danger text-center alert-dismissable w-100'>Something went wrong. Please check your input.</div>").delay(3000).fadeOut("slow"); 
                }
            });
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
                "phoneNumber":"255672331239"
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
