
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="">
<title>{{ !empty(strtoupper($data['header']).' | '.strtoupper($data['title'])) ? strtoupper($data['header']).' | '.strtoupper($data['title']) : ''}}</title>

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/morrisjs/morris.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/backend/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/css/flash.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/css/color_skins.css') }}">

<style>
    #clock {
        font-size: 1.5em;
        font-weight: 700;
        background: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
</style>

<script src="{{ asset('assets/backend/plugins/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/backend/plugins/jquery.min.js')}}"></script>
</head>
<body class="theme-black">       


<!-- Sidebar -->
@include('backend.layouts.sidebar')

<!-- Main Content -->
@yield('content')

</body>

<!-- jQuery Core Js -->
<script src="{{ asset('assets/backend/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/sparkline.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/doughnut.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>

<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var seconds = now.getSeconds().toString().padStart(2, '0');
        document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
    }

    setInterval(updateClock, 1000);
    updateClock(); 
    
</script>

<div id="forFlash"></div>
<script type="text/javascript">
    function showWarningToast(title, message) {
        Swal.fire({
            icon: 'warning',
            title: title,
            text: message,
            showConfirmButton: true,
            timer: 5000
        });
    }

    function showSuccessToast(title, message) {
        Swal.fire({
            icon: 'success',
            title: title,
            text: message,
            showConfirmButton: false,
            timer: 6000
        });
    }

    function showErrorToast(title, message) {
        Swal.fire({
            icon: 'error',
            title: title,
            text: message,
            showConfirmButton: true,
            timer: 10000
        });
    }

    function disableBtn(btn, access) {

        if (access) {
            $('#' + btn).prop("disabled", true);
            // add spinner to button
            $('#' + btn).html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
            );
        } else {
            $('#' + btn).prop("disabled", false);
            // add spinner to button
            $('#' + btn).html("Save")
        }

    }

    function removeSpecialCharacter(text) {
        var sanitizedValue = text.replace(/[!@#$%^&*()\-_=+\[\]{}|\\;:'",.<script>\/?]/g, "");
        return sanitizedValue
    }

    function showFlashMessage(indicator, message) {

        if (indicator == "danger") {
            $("#forFlash").html('<div id="flash-message"><span class="flashmessage"></span></div>')
            var flashMessage = document.getElementById('flash-message');
        }
        if (indicator == "success") {
            $("#forFlash").html('<div id="flash-message-success"><span class="flashmessage"></span></div>')
            var flashMessage = document.getElementById('flash-message-success');
        }
        if (indicator == "warning") {
            $("#forFlash").html('<div id="flash-message-warning"><span class="flashmessage"></span></div>')
            var flashMessage = document.getElementById('flash-message-warning');
        }

        var messageElement = flashMessage.querySelector('.flashmessage');

        messageElement.innerText = message;
        flashMessage.style.display = 'block';

        var secondsLeft = 10;
        var countdown = setInterval(function() {
            secondsLeft--;

            if (secondsLeft >= 0) {
                messageElement.innerText = message + ' (' + secondsLeft + 's)';
            } else {
                clearInterval(countdown);
                flashMessage.style.display = 'none';
                $("#forFlash").html('')
            }
        }, 1000);
    }

    function formatDate(dateString) {
        const date = new Date(dateString);

        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();

        const formattedDate = `${day}/${month}/${year}`;

        return formattedDate;
    }
</script>

</html>
