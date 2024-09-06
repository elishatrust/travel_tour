<script src="{{url('assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<!-- <script src="{{url('assets/bundles/mainscripts.bundle.js')}}"></script>  -->
<!-- Custom Js -->
<script src="{{ url('assets/js/pages/forms/basic-form-elements.js') }}"></script>

<script src="{{url('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->

<script src="{{url('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{url('assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{url('assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{url('assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
<script src="{{url('assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js -->
<script src="{{url('assets/bundles/doughnut.bundle.js')}}"></script>

<script src="{{url('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{url('assets/js/pages/index.js')}}"></script>
<script src="{{url('assets/js/pages/forms/form-wizard.js')}}"></script>

<script src="{{url('assets/bundles/fullcalendarscripts.bundle.js')}}"></script><!--/ calender javascripts -->
<script src="{{url('assets/js/pages/calendar/calendar.js')}}"></script>

<!-- Javascript -->
<script src="{{url('assets/plugins/echart/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/charts/echart.js')}}"></script>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- THOSE ONLINE RESOUCES I WILL DOWNLOAD TO OFFLINE BY EMA SHAO -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<div id="forFlash"></div>
<script type="text/javascript">
      function showWarningToast(title,message){
            Swal.fire({
					icon: 'warning',
					title: title,
					text: message,
					showConfirmButton: true,
					timer: 5000
				});
      }

      function showSuccessToast(title,message){
            Swal.fire({
					icon: 'success',
					title: title,
					text: message,
					showConfirmButton: false,
					timer: 6000
				});
      }

      function showErrorToast(title,message){
            Swal.fire({
					icon: 'error',
					title: title,
					text: message,
					showConfirmButton: true,
					timer: 10000
				});
      }

      function disableBtn(btn,access){

            if(access){
                $('#'+btn).prop("disabled", true);
                // add spinner to button
                $('#'+btn).html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
                );
            }else{
                $('#'+btn).prop("disabled", false);
                // add spinner to button
                $('#'+btn).html("Save")
            }

     }

     function removeSpecialCharacter(text){
        var sanitizedValue = text.replace(/[!@#$%^&*()\-_=+\[\]{}|\\;:'",.<script>\/?]/g, "");
        return sanitizedValue
     }

      function showFlashMessage(indicator,message) {

            if(indicator=="danger"){
            $("#forFlash").html('<div id="flash-message"><span class="flashmessage"></span></div>')
            var flashMessage = document.getElementById('flash-message');
            }
            if(indicator=="success"){
            $("#forFlash").html('<div id="flash-message-success"><span class="flashmessage"></span></div>')
            var flashMessage = document.getElementById('flash-message-success');
            }
            if(indicator=="warning"){
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

</script>

