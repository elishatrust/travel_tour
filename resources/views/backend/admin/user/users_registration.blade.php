@extends('layout.app')
<!-- Main Content -->
@section('content')

<?php
use Illuminate\Support\Facades\DB;
$user_role = DB::table('z_roles')->get();
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>User Registration</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">registration Form</li>
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
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    {{-- <div class="header">
                        <h2><strong>System users Registration</strong> <small>Different sizes and widths</small> </h2>
                    </div> --}}
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                    <div class="body">
                        {{-- <h2 class="card-inside-title">Different Widths</h2> --}}
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form id="registrationForm">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <b>First Name</b>
                                    <div class="form-group">
                                        <input name="first_name" type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <b>Last Name</b>
                                    <div class="form-group">
                                        <input name="last_name" type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <b>Email</b>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <b>Phone Number</b>
                                    <div class="form-group">
                                        <input name="phone_number" name="phone_number" type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">

                                <div class="col-sm-6 ">
                                    <b>Select Country</b>
                                    <div class="form-group">
                                        <select class="form-control show-tick" id="countrySelect" name="countrySelect">
                                            <option value="">Select Country</option>
                                            @foreach($country as $cntry)
                                            <option value="{{ $cntry->id }}">{{ $cntry->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                    <b>Select Region</b>
                                    <div class="form-group">
                                        <select id="regionSelect" name="regionSelect" class="form-control show-tick">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                      
                                <div class="col-sm-6">
                                    <b>Select District</b>
                                    <div class="form-group">
                                        <select id="districtSelect" name = "districtSelect" class="form-control show-tick" onchange="getWardDistrict(this.value)">
                                        </select>
                                        {{-- <select id="districtSelect" class="form-control show-tick">
                                        </select> --}}
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                    <b>Select Ward</b>
                                    <div class="form-group">
                                        <select id="wardSelect" name="wardSelect" class="form-control show-tick">
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6">
                                    <b>Location(Site)</b>
                                    <div class="form-group">
                                        <select id="villageSelect" class="form-control show-tick">
                                        </select>
                                        <input type="hidden" id="villageIdInput" name="village_id">
                                    </div>
                                </div> --}}
                                <div class="col-sm-12">
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
                                        <select name="gender" id ="gender" class="form-control show-tick">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <b>Role</b>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="role" id="roleSelect">
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
                                        <input type="text" hidden class="form-control" name="facility_id"
                                            id="facilityID">
                                        <input type="text" class="form-control" id="searchFality"
                                            placeholder="Search facility Name" />
                                        <div id="searchResults"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="districtField" style="display: none;">
                                    <b>District</b>
                                    <div class="form-group">
                                        <input name="district_name" type="text" class="form-control" id="searchDistrict"
                                            placeholder="District Name" readonly />
                                        <input hidden name="district_id" type="text" class="form-control"
                                            id="districtID" placeholder="District Name" />
                                    </div>
                                </div> -->
                                <!-- </div> -->
                            </div>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success" id="registerBtn">Register User</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->



    </div>
</section>

<!-- Jquery Core Js -->
{{--
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> --}}
<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {

        // Disable the street input initially
        $('#street_name').prop('disabled', true);

        $('#villageSelect').on('change', function () {
            var selectedVillage = $(this).val();
            $('#street_name').prop('disabled', !selectedVillage);
        });


        $('#registerBtn').on('click', function () {
            event.preventDefault();
            var formData = $('#registrationForm').serializeArray();
            $.ajax({
                url: '/admin/update-fetch-users/',
                type: 'POST',
                data: formData,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
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
        });

    
        //Select role function
        function toggleFieldVissibility() {
            var selectedRole = $('#roleSelect').val();
            if (selectedRole == 4) {
                $("#facilityNameField, #districtField").show();
            } else {
                $("#facilityNameField, #districtField").hide();
            }
        }
        toggleFieldVissibility();

        $('#roleSelect').on('change', function () {
            toggleFieldVissibility();
        });


        //Fetch facilities
        var currentPage = 1;

        $('#searchFality').on('input', function () {
            currentPage = 1;
            fetchDataCollectors();
        });

        function fetchDataCollectors() {
            var searchTerm = $('#searchFality').val();

            if (searchTerm.length >= 1) {
                $.ajax({
                    type: 'GET',
                    url: '/admin/fetch-facilities',
                    data: {search: searchTerm, page: currentPage},
                    success: function (data) {
                        displaySearchResults(data);
                    }
                });
            } else {
                $('#searchResults').empty();
            }
        }

        function displaySearchResults(data) {
            var resultsDiv = $('#searchResults');
            resultsDiv.empty();

            if (data.data.length > 0) {
                data.data.forEach(function (user) {
                    resultsDiv.append('<p class="search-result" data-user-id="' + user.id + '" data-district-id="' + user.district_id + '">' + user.name + '</p>');
                });

                // Add click event for search results
                $('.search-result').on('click', function () {
                    var facilityIdd = $(this).data('user-id');

                    var districtId = $(this).data('district-id');
                    // console.log('District ID:', districtId);

                    // console.log('Userr id',facilityIdd);
                    var facilityName = $(this).text();
                    $('#searchFality').val(facilityName);
                    $('#facilityID').val(facilityIdd);
                    $('#districtID').val(districtId);


                    // Make an AJAX request to fetch the district name
                    $.ajax({
                        url: '/admin/get-district/' + districtId,
                        method: 'GET',
                        success: function (response) {
                            if (response.name) {
                                // Update the district_name input field
                                $('#searchDistrict').val(response.name);

                                // Update the district_id input field
                                $('#districtID').val(districtId);
                            } else {
                                console.error('Error fetching district name.');
                            }
                        },
                        error: function (error) {
                            console.error('AJAX error:', error);
                        }
                    });

                    resultsDiv.empty();
                });

                // Display pagination information
                resultsDiv.append('<div class="pagination">' + generatePaginationLinks(data) + '</div>');
            } else {
                resultsDiv.html('<p>No results found</p>');
            }
        }

        function generatePaginationLinks(data) {
            var links = '';
            for (var i = 1; i <= data.last_page; i++) {
                //Hide for now
                // links += '<a href="#" class="pagination-link" data-page="' + i + '">' + i + '</a>';
            }

            // Add click event for pagination links
            $('.pagination-link').on('click', function () {
                currentPage = $(this).data('page');
                fetchDataCollectors();
            });

            return links;
        }

        //for region
        $('#countrySelect').change(function () {
            var countryId = $(this).val();

            // Clear and disable other dropdowns
            $('#regionSelect, #districtSelect, #villageSelect,#wardSelect').empty().prop('disabled', true);

            if (countryId) {
                // Fetch regions based on the selected country
                $.ajax({
                    url: '/admin/fetch-regions/' + countryId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Received regions data:', data);
                        $('#regionSelect').append('<option value="">Select Region</option>');

                        // Populate the region dropdown
                        $.each(data, function (key, value) {
                            $('#regionSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        // Enable the region dropdown
                        $('#regionSelect').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching regions:', error);
                        alert('Error fetching regions. Please check the console for details.');
                    }
                });
            }
        });

        $('#regionSelect').change(function () {
            var regionId = $(this).val();

            // Clear and disable other dropdowns
            $('#wardSelect, #villageSelect').empty().prop('disabled', true);

            if (regionId) {
                // Fetch districts based on the selected region
                $.ajax({
                    url: '/admin/fetch-districts/' + regionId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Received District data:', data);
                        $('#districtSelect').append('<option value="">Select District</option>');

                        // Populate the district dropdown
                        $.each(data, function (key, value) {
                            $('#districtSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        // Enable the district dropdown
                        $('#districtSelect').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching District:', error);
                        alert('Error fetching District. Please check the console for details.');
                    }
                });
            }
        });

        $('#districtSelect').change(function () {
            var districtId = $(this).val();

            // Clear and disable the village dropdown
            $('#wardSelect').empty().prop('disabled', true);

            if (districtId) {
                // Fetch Wards based on the selected district
                $.ajax({
                    url: '/admin/fetch-wards/' + districtId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Received Ward data:', data);
                        $('#wardSelect').append('<option value="">Select Ward</option>');

                        // Populate the wards dropdown
                        $.each(data, function (key, value) {
                            $('#wardSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        // Enable the wards dropdown
                        $('#wardSelect').prop('disabled', false);
                        $('#street_name').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching wards:', error);
                        alert('Error fetching wards . Please check the console for details.');
                    }
                });
            }
        });

        $('#villageSelect').change(function () {
            var villageId = $(this).val();

            // Set the hidden input value
            $('#villageIdInput').val(villageId);

            // console.log('Select vilage id',villageId);
        });


    });
</script>
@endsection