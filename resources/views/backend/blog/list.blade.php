

@extends('backend.layouts.app')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@section('content')



<section class="content blog-page">   
    <div class="container-fluid">
        
        
        @include('backend.layouts.header')


        <div class="row clearfix">
            <div class="col-lg-12 col-sm-12">
                <div class="body">
                    <div class="row" id="getView">
                        <img src="{{ asset('assets/backend/loader.svg') }}"  alt="Loading...">
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
                <h4 class="title" id="largeModalLabel">Blog </h4><strong class="text-danger float-right">Required *</strong>
            </div>
            <div class="modal-body">

                <form id="form" onsubmit="save(event)"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="_title" name="_title" class="form-control" placeholder="Enter title" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="">Content <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="content" id="content" cols="30" rows="3" placeholder="Enter content.." required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Upload File <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="file" name="file" id="file" accept="image/*,application/pdf" placeholder="Upload File">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="aStatus" id="aStatus" class="form-control show-tick" required>
                                <option>~Select~</option>
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
        url: "{{ route('blog-view') }}",
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

function deleteBlog(id){
    var conf = confirm("Are you Sure you want to DELETE ?");
    if (!conf) {
        return;
    }

    jQuery.ajax({
            type: "GET",
            url: "/admin/blog-delete/"+id,
            dataType: 'json',
            success: function (data) {
                if (data.status == 200) {
                    showFlashMessage("success", data.message);
                    clear_input();
                    closeModel();
                } else {
                    showFlashMessage("warning", data.message);
                }

                disableBtn("submitBtn", false);
                $("#submitBtn").html("Save ")
            }
    });
}

function editBlog(id){
    document.getElementById('form').reset();
    $("#hidden_id").val("")

    $("#submitBtn").html("Update");
    $('#largeModal').modal('show');

    jQuery.ajax({
        type: "GET",
        url: "/admin/blog-edit/"+id,
        dataType: 'json',
        success: function (data) {
            $("#hidden_id").val(data.id)

            var rowData=data.data;

            $("#_title").val(rowData.title);
            $("#content").val(rowData.content);
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
        url: "{{ route('blog-save') }}",
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            if (data.status == 200) {
                showFlashMessage("success", data.message);
                clear_input();
                closeModel();
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
