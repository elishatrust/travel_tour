

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
                <h4 class="title" id="largeModalLabel">Package </h4><strong class="text-danger float-right">Required *</strong>
            </div>
            <div class="modal-body">

                <form id="form" onsubmit="save(event)"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="">Package <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="package" name="package" class="form-control" placeholder="Eg. Tanzanite" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Cost <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="cost" name="cost" class="form-control" placeholder="Eg. 1300" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Travelers (Adult)<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="adult" name="adult" class="form-control" placeholder="Eg. 10" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Travelers (Child)<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="child" name="child" class="form-control" placeholder="Eg. 10" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Others (option)<span class="text-danger"></span></label>
                            <div class="form-group">
                                <input type="text" id="more" name="more" class="form-control" placeholder="Eg. photos, exhibition" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Order No.<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="order_number" name="order_number" class="form-control" placeholder="Eg. 1" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="aStatus" id="aStatus" class="form-control show-tick" required>
                                <option>Select--</option>
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


function getView() {
    jQuery.ajax({
        type: "GET",
        url: "{{ route('package-view') }}",
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

function deletePackage(id){
    var conf = confirm("Are you Sure you want to DELETE ?");
    if (!conf) {
        return;
    }

    jQuery.ajax({
            type: "GET",
            url: "/admin/package-delete/"+id,
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

function editPackage(id){
    document.getElementById('form').reset();
    $("#hidden_id").val("")

    $("#submitBtn").html("Update");
    $('#largeModal').modal('show');

    jQuery.ajax({
        type: "GET",
        url: "/admin/package-edit/"+id,
        dataType: 'json',
        success: function (data) {
            $("#hidden_id").val(data.id)

            var rowData=data.data;

            $("#package").val(rowData.title);
            $("#adult").val(rowData.adult);
            $("#child").val(rowData.child);
            $("#cost").val(rowData.cost);
            $("#more").val(rowData.more);
            $("#order_number").val(rowData.order_number);
            $("#more").val(rowData.more);
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
        url: "{{ route('package-save') }}",
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
