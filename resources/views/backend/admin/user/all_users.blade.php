
@extends('layout.app')
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>All Users</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Users</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Exportable</strong> Examples </h2>
                        </div>
                        <div class="body">

                        <a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="text-end" style="float:right;"
                            onclick="clear_input()">
                            <button class="btn btn-primary">New User</button>
                        </a> <br>

                          <div id="getView"></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="largeModalLabel">User Management </h4>
                    <span style="color:red; float:right;">required *</span>
                </div>
                <form id="form" onsubmit="save(event)" enctype="form-data/multipart">
                    @csrf

                    <input type="hidden" class="form-control" id="hidden_id" name="hidden_id">
                
                    <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <b>First Name</b>
                            <div class="form-group">
                                <input name="first_name" id="first_name" type="text" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Last Name</b>
                            <div class="form-group">
                                <input name="last_name" id="last_name" type="text" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <b>Email</b>
                            <div class="form-group">
                                <input name="email" type="email" id="email" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Phone Number</b>
                            <div class="form-group">
                                <input name="phone_number" id="phone_number" type="text" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6 ">
                            <b>Select Country</b>
                            <div class="form-group">
                                <select class="form-control show-tick" id="country_id" name="country_id" required
                                onchange="getCountryRegion(this.value)">
                                    <option value="">select</option>
                                    @foreach($country as $cntry)
                                    <option value="{{ $cntry->id }}">{{ $cntry->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <b>Select Region</b>
                            <div class="form-group">
                                <select class="form-control show-tick" id="region_id" name="region_id" required
                                onchange="getRegionDistrict(this.value)">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <b>Select District</b>
                            <div class="form-group">
                                <select class="form-control show-tick" id="district_id" name="district_id" required onchange="getDistrictVillage(this.value)">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Ward</b>
                            <div class="form-group">
                                <select class="form-control show-tick" id="ward_id" name="ward_id" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Street Name</b>
                            <div class="form-group">
                                <input type="text" name="street_name" id="street_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <b>Gender</b>
                            <div class="form-group">
                                <select name="gender" id="gender" class="form-control show-tick">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Role</b>
                            <div class="form-group">
                                <select class="form-control show-tick" name="role" id="role">
                                    <option value="">Select Role</option>
                                    @foreach($user_role as $role)
                                    <option value="{{ $role->id }}">{{$role->role_name}}</option>
                                    @endforeach
                
                                </select>
                            </div>
                        </div>
                
                        <!-- <div class="row clearfix"> -->
                        <!-- <div class="col-sm-6" id="facilityNameField" style="display: none;">
                            <b>Facility Name</b>
                            <div class="form-group">
                                <input type="text" hidden class="form-control" name="facility_id" id="facility_id">
                                <input type="text" class="form-control" id="searchFality" placeholder="Search facility Name" />
                                <div id="searchResults"></div>
                            </div>
                        </div>
                        <div class="col-sm-6" id="districtField" style="display: none;">
                            <b>District</b>
                            <div class="form-group">
                                <input name="district_name" type="text" class="form-control" id="searchDistrict"
                                    placeholder="District Name" readonly />
                                <input hidden name="district_id" type="text" class="form-control" id="districtID"
                                    placeholder="District Name" />
                            </div>
                        </div>  -->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" id="submitBtn">Save</button>
                        <button type="button" class="btn btn-danger btn-simple btn-round waves-effect"
                            data-dismiss="modal">CLOSE</button>
                    </div>
                    </div>
                
                </form>
        </div>
    </div>
    </div>
    @include('.dependences.datatable')
<script>
    $(document).ready(function () {
        getView()
    });

    function getView() {


        jQuery.ajax({
            type: "GET",
            url: "/all_user_view",
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
        $("#submitBtn").html("Save")
        getView()
    }


    function getCountryRegion(id) {

            $("#region_id").html("")
            jQuery.ajax({
                type: "GET",
                url: "/location/getCountryRegion/" + id,
                dataType: 'json',
                success: function (data) {
                    var div = "";
                    $.each(data, function (index, row) {

                        div += "<option value='" + row.id + "'>" + row.name + "</option>";
                    })

                    $("#region_id").html("<option value=''>Select Region</option>")
                    $("#region_id").append(div)
                    $("#region_id").select2()
                }
            });
        }

        function getRegionDistrict(id) {

            $("#district_id").html("")
            jQuery.ajax({
                type: "GET",
                url: "/location/getRegionDistrict/" + id,
                dataType: 'json',
                success: function (data) {
                    var div = "";
                    $.each(data, function (index, row) {

                        div += "<option value='" + row.id + "'>" + row.name + "</option>";
                    })

                    $("#district_id").html("<option value=''>Select District</option>")
                    $("#district_id").append(div)
                    $("#district_id").select2()
                }
            });
        }

        function getDistrictVillage(id) {

            $("#ward_id").html("")
            jQuery.ajax({
                type: "GET",
                url: "/location/getDistrictVillage/" + id,
                dataType: 'json',
                success: function (data) {
                    var div = "";
                    $.each(data, function (index, row) {

                        div += "<option value='" + row.id + "'>" + row.name + "</option>";
                    })

                    $("#ward_id").html("<option value=''>Select Ward</option>")
                    $("#ward_id").append(div)
                    $("#ward_id").select2()
                }
            });
        }
    function save(e) {
        e.preventDefault();

        disableBtn("submitBtn", true);
        var form = document.getElementById('form');
        var formData = new FormData(form);

        jQuery.ajax({
            type: "POST",
            url: "/admin/update-fetch-users/",
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                // console.log('New Data', data);
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

    function editUser(userId) {
        document.getElementById('form').reset();
        $("#hidden_id").val("")

        jQuery.ajax({
            type: "GET",
            url: "/admin/fetch-users/" + userId,
            dataType: 'json',
            success: function (data) {
                $("#hidden_id").val(data.id)

                console.log('Dataaa', data);

                var rowData = data.data;
                var region = data.region;
                var district = data.district;
                var village = data.village;

                $("#country_id").val(region.country_id)
                $("#region_id").html("<option value='" + rowData.region_id + "'>" + region.name + "</option>")
                $("#district_id").html("<option value='" + rowData.district_id + "'>" + district.name + "</option>")
                $("#ward_id").html("<option value='" + rowData.location_id + "'>" + village.name + "</option>")
                $("#first_name").val(rowData.first_name);
                $("#last_name").val(rowData.last_name);
                $("#email").val(rowData.email);
                $("#phone_number").val(rowData.phone_number);
                $("#street_name").val(rowData.street_name);
                $("#gender").val(rowData.gender);
                $("#role").val(rowData.role);


                // Update the button text
                $("#submitBtn").html("Update");

                // Open the modal
                $('#largeModal').modal('show');
            }
        });
    }

    function deleteUser(id) {
        var conf = confirm("Are you sure you want to a User?");
        if (!conf) {
            return;
        }

        jQuery.ajax({
            type: "GET",
            url: "/admin/delete-user/" + id,
            dataType: 'json',
            success: function (data) {
                if (data.status == 200) {
                    showSuccessToast("Process finished", data.message);
                    clear_input()
                } else {
                    showWarningToast("Warning", data.message);
                }
            }
        });
    }


    function formatDate(dateString) {
        const options = {day: 'numeric', month: 'short', year: 'numeric'};
        const formattedDate = new Date(dateString).toLocaleDateString('en-US', options);
        return formattedDate;
    }

</script>

@endsection