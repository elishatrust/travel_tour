<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Login | ZANZIBAR Homecare</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/znz_logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
</head>

<style>
    .authentication .company_detail h5 {
        font-weight: 700;
        text-transform: uppercase;
        opacity: 0.8;
        letter-spacing: 1px;
    }
    .authentication .company_detail{
        text-align: center;
    }
    @media only screen and (max-width: 500px) {
        .authentication .company_detail img{
            width: 250px;
        }
        .authentication .company_detail h5 {
            letter-spacing: 1px;
            font-size: 22px;
        }
    }

</style>
<body class="theme-black" style="backgound:#313740!important;">
    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="company_detail">
                            <h4 class="logo" style="text-align: center"><img src="{{ asset('assets/images/znz_logo.png')}}" alt="#" style="width:300px;"></h4>
                            <h5 style="text-align: center">MINISTRY OF HEALTH ZANZIBAR</h5>
                            <p style="text-align: center"><span>COMMUNITY HEALTH WORKERS</span></p>
                        </div>


                    </div>
                    <div class="col-lg-5 col-md-12 offset-lg-1">
                        <div class="card-plain">
                            <div class="header">
                                <h5>Log in</h5>
                            </div>
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="email" >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                                    </div>
                                </div>
                                @if ($errors->has('loginError'))
                                    <p class="text-danger">{{ $errors->first('loginError') }}</p>
                                @endif

                                <div class="footer">
                                    <button type="submit" class="btn btn-primary btn-round btn-block">Login</button>
                            </form>
                            {{-- <a href="#" class="btn btn-primary btn-simple btn-round btn-block">SIGN
                                UP</a> --}}
                        </div>
                        <br>
                        {{-- <a href="#" class="link">Forgot Password?</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
</body>

</html>
