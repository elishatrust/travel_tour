

@extends('backend.layouts.app')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@section('content')

<section class="content contact">
    <div class="container-fluid">

        @include('backend.layouts.header')

        <div class="row clearfix">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="body">

                        <div id="getView">
                            <img src="{{ asset('assets/backend/loader.svg') }}"  alt="Loading...">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">User </h4><strong class="text-danger float-right">Required *</strong>
            </div>
            <div class="modal-body">

                <form id="form" onsubmit="save(event)" enctype="form-data/multipart">
                    @csrf
                    <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter full name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Phone <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter phone number" min="0" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="email" id="email_2" name="email_2" class="form-control" placeholder="Enter email" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-8">
                                    <label for="">Password <span class="text-danger">*</span></label>
                                    <div class="form-group" id="show_hide_password">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                                        <small class="text-danger password-note"></small>
                                    </div>
                                </div>
                                <div class="col-4 mt-5">
                                    <div class="checkbox" id="show_hide_pwd">
                                        <input id="checkbox" type="checkbox" class="mx-1">
                                        <label for="checkbox">Show</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Address <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="address" name="address" class="form-control" placeholder="Enter address/location" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="aStatus" id="aStatus" class="form-control show-tick" required>
                                <option>Select --</option>
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="closeModel()" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" id="submitBtn" class="btn btn-raised btn-primary btn-round waves-effect">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    getView();
    closeModel();
});

$("#show_hide_pwd input").on('click', function (event) {
    if ($('#show_hide_password input').attr("type") == "text") {
        $('#show_hide_password input').attr('type', 'password');
    } else if ($('#show_hide_password input').attr("type") == "password") {
        $('#show_hide_password input').attr('type', 'text');
    }
});


function getView() {
    jQuery.ajax({
        type: "GET",
        url: "{{ route('user-view') }}",
        dataType: 'html',
        cache: false,
        success: function (data) {
            $("#getView").html(data)
        }
    });
}

function clear_input() {
    document.getElementById('form').reset();
    $("#hidden_id").val("")
    getView()
}

function closeModel(){
    $('#largeModal').modal('hide');
}

function deleteUser(id){
    var conf = confirm("Are you Sure you want to DELETE ?");
    if (!conf) {
        return;
    }

    jQuery.ajax({
        type: "GET",
        url: "/admin/user-delete/"+id,
        dataType: 'json',
        success: function (data) {
            if (data.status == 200) {
                showFlashMessage("success", data.message);
                clear_input()
            } else {
                showFlashMessage("warning", data.message);
            }

            disableBtn("submitBtn", false);
            $("#submitBtn").html("Save ")
        }
    });
}

function editUser(id){
    document.getElementById('form').reset();
    $("#hidden_id").val("")

    $("#submitBtn").html("Update");
    $('#largeModal').modal('show');
    $(".password-note").html("Note* Enter password, if you want to update").addClass("text-danger");

    jQuery.ajax({
        type: "GET",
        url: "/admin/user-edit/"+id,
        dataType: 'json',
        success: function (data) {
            $("#hidden_id").val(data.id)

            var rowData=data.data;

            $("#full_name").val(rowData.name);
            $("#phone").val(rowData.phone);
            $("#email_2").val(rowData.email);
            $("#address").val(rowData.address);
            // $("#password").val(rowData.password);
            $("#aStatus").val(rowData.status);
            $("#submitBtn").html("Update");
        }
    });
}


function save(e) {
    e.preventDefault();

    var form = document.getElementById('form');
    var formData = new FormData(form);

    jQuery.ajax({
        type: "POST",
        url: "{{ route('user-save') }}",
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            if (data.status == 200) {
                showFlashMessage("success", data.message);
                clear_input()
            } else {
                showFlashMessage("warning", data.message);
            }

            disableBtn("submitBtn", false);
            $("#submitBtn").html("Save")
        }
    });
}
</script>
@endsection
