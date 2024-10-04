

@extends('backend.layouts.app')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@section('content')

<section class="content contact">
    <div class="container-fluid">

        @include('backend.layouts.header')

        <div class="row clearfix">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="body" id="getView">
                        <img src="{{ asset('assets/backend/loader.svg') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function () {
    getView();
});


function getView() {
    jQuery.ajax({
        type: "GET",
        url: "{{ route('booking-view') }}",
        dataType: 'html',
        cache: false,
        success: function (data) {
            $("#getView").html(data)
        }
    });
}

function deleteBooking(id){
    var conf = confirm("Are you Sure you want to DELETE ?");
    if (!conf) {
        return;
    }

    jQuery.ajax({
        type: "GET",
        url: "/admin/booking-delete/"+id,
        dataType: 'json',
        success: function (data) {
            if (data.status == 200) {
                showFlashMessage("success", data.message);
                getView();
            } else {
                showFlashMessage("warning", data.message);
            }

            disableBtn("submitBtn", false);
            $("#submitBtn").html("Save ")
        }
    });
}

</script>
@endsection
