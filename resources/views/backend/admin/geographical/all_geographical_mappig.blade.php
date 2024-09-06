@extends('layout.app')
<!-- Main Content -->
@section('content')
<?php
use App\Models\ZGeographicalMapping;
use App\Models\User;
$userinfo = new User();

$country = new ZGeographicalMapping();
$country = $country->getCountries();
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Location Mapping</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Location Mapping</li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>All Location Mapping</h2>

                    </div>
                    <div class="body">
                        <form action="{{ route('assign.user')}}" method="GET" data-toggle="modal"
                            data-target="#largeModal" class="text-end" style="float:right;" onclick="clear_input()">
                            <button class="btn btn-primary">New Location Mapping</button>
                        </form> <br>

                        <div class="table-responsive">

                            <div id="getView"></div>

                        </div>
                    </div>
                </div>
            </div>
</section>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Reassign Geographical Mapping  (<span id="full_name"></span>)</h4>
                <!-- <h4 id="full_name"></h4> -->
                <span style="color:red; float:right;">required *</span>
            </div>
            <form id="form" onsubmit="save(event)" enctype="form-data/multipart">
                @csrf

                <input type="hidden" class="form-control" id="hidden_id" name="hidden_id">
                <input type="hidden" class="form-control" id="user_id" name="user_id">
                <div class="modal-body">


                    <div class="row">
                        <div class="col-md-6">
                            <br><label class="form-label">Country<span style="color:red;">*</span></label>
                            <select class="form-control" id="country_id" name="country_id" required
                                onchange="getCountryRegion(this.value)">
                                <option value="">Select</option>


                                @foreach($country as $docu)
                                <option value="{{$docu->id}}">{{$docu->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-6">
                            <br><label class="form-label">Region<span style="color:red;">*</span></label>
                            <select class="form-control" id="region_id" name="region_id" required
                                onchange="getRegionDistrict(this.value)">
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <br><label class="form-label">District<span style="color:red;">*</span></label>
                            <select class="form-control" id="district_id" name="district_id" required onchange="getDistrictVillage(this.value)">
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <br><label class="form-label">Location<span style="color:red;">*</span></label>
                            <select class="form-control" id="village_id" name="village_id" required>
                                <option value="">Select</option>
                            </select>

                        </div>
                        <div class="col-lg-12 ">
                            <b>Description</b>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="3" class="form-control no-resize" name="description" id="description"
                                        placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                        </div>
                        </div>
                    <br>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"
                        id="submitBtn">Save</button>
                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect"
                        data-dismiss="modal">CLOSE</button>
                </div>

            </form>
        </div>
    </div>
</div>


@include('.dependences.datatable')
<script>
    $(document).ready(function () {
        getView();
    });



    function getView() {
        jQuery.ajax({
            type: "GET",
            url: '/admin/all-geographical-mapping-view',
            dataType: 'html',
            cache: false,
            success: function (data) {
                $("#getView").html(data)
            }
        });
    }

    function clear_input() {
        getView()
        document.getElementById('form').reset();

    }

    function deleteGeographicalMapping(id) {
        var conf = confirm("Are you sure you want to delete Data Collector  ?");
        if (!conf) {
            return;
        }

        jQuery.ajax({
            type: "GET",
            url: "/admin/delete-geographical-mapping/" + id,
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

    function viewGeographicalMapping(id) {
    window.location.href = '/admin/single-geographical-mapping/' + id;
}


    function getCountryRegion(id) {
           
           $("#region_id").html("")
           jQuery.ajax({
                 type: "GET",
                 url: "/location/getCountryRegion/"+id,
                 dataType: 'json',
                 success: function (data) {
                       var div="";
                       $.each(data,function(index,row){
                             
                             div+="<option value='"+row.id+"'>"+row.name+"</option>";
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
                 url: "/location/getRegionDistrict/"+id,
                 dataType: 'json',
                 success: function (data) {
                       var div="";
                       $.each(data,function(index,row){
                             
                             div+="<option value='"+row.id+"'>"+row.name+"</option>";
                       })

                       $("#district_id").html("<option value=''>Select District</option>")
                       $("#district_id").append(div)
                       $("#district_id").select2()
                 }
           });
     }

     function getDistrictVillage(id) {
           
           $("#village_id").html("")
           jQuery.ajax({
                 type: "GET",
                 url: "/location/getDistrictVillage/"+id,
                 dataType: 'json',
                 success: function (data) {
                       var div="";
                       $.each(data,function(index,row){
                             
                             div+="<option value='"+row.id+"'>"+row.name+"</option>";
                       })

                       $("#village_id").html("<option value=''>Select Location</option>")
                       $("#village_id").append(div)
                       $("#village_id").select2()
                 }
           });
     }

    function editGeographicalMapping(id) {
        document.getElementById('form').reset();
        $("#hidden_id").val("")

        jQuery.ajax({
            type: "GET",
            url: "/admin/editGeographicalMapping/" + id,
            dataType: 'json',
            success: function (data) {
                $("#hidden_id").val(data.id)

                // console.log('Dataaa', data);

                var rowData = data.data;
                var region = data.region;
                var district = data.district;
                var village = data.village;
                var full_name = data.fullName;

                $("#country_id").val(region.country_id)
                $("#region_id").html("<option value='" + rowData.region_id + "'>" + region.name + "</option>")
                $("#district_id").html("<option value='" + rowData.district_id + "'>" + district.name + "</option>")
                $("#village_id").html("<option value='" + rowData.village_id + "'>" + village.name + "</option>")
                $("#full_name").text(full_name);
                $("#description").val(rowData.description);
                $("#user_id").val(rowData.id);
                $("#name").val(rowData.name);
                

                // Update the button text
                $("#submitBtn").html("Update");

                // Open the modal
                $('#largeModal').modal('show');
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
                  url: "/admin/updateGeographical-mapping/",
                  data: formData,
                  dataType: 'json',
                  processData: false,
                  contentType: false,
                  cache: false,
                  success: function (data) {
                    console.log('New Data',data);
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





</script>

@endsection