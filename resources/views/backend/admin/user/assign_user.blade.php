@extends('layout.app')
<!-- Main Content -->
@section('content')

<head>
    <style>
        #searchResults {
            position: absolute;
            width: 95%;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1000;
        }
    
        .scrollable-content {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                    class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item">All Users</li>
                        <li class="breadcrumb-item active">Assign User</li>
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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <div role="tabpanel" class="tab-pane" id="usersettings">
                    <div class="card">
                        <div class="header">
                            <h2>Assign User to <strong>Location</strong> Mapping</h2>
                        </div>
                        <div class="body">
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
                            <form action="{{ route('assgin.geographic.mapping') }}" method="POST">
                                @csrf

                                <input type="hidden" id="ward_id" class="form-control" name="ward_id[]" multiple>

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <b>Data Collector</b>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="dataCollectorSearch"
                                                placeholder="Search Data Collector">
                                        </div>
                                        <input hidden type="text" class="form-control" name="datacollector_id"
                                            id="dataCollectorId">
                                        <div id="searchResults"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <b>Select Country</b>
                                        <div class="form-group">
                                            <select class="form-control show-tick" id="countrySelect" name="country_id">
                                                <option value="">select</option>
                                                @foreach($country as $cntry)
                                                <option value="{{ $cntry->id }}">{{ $cntry->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <b>Select Region</b>
                                        <div class="form-group">
                                            <select id="regionSelect" class="form-control show-tick" name="region_id">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <b>Select District</b>
                                        <div class="form-group">
                                            <select id="districtSelect" class="form-control show-tick" name="district_id">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <b>Select Ward</b>
                                        <div class="form-group">
                                            <select id="villageSelect" class="form-control show-tick">
                                            </select>
                                            <input type="hidden" id="villageIdInput" name="village_id">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                    <b>Description</b>
                                        <div class="form-group mb-6">
                                            <div class="form-line">
                                                <textarea rows="3" class="form-control no-resize" name="description" placeholder="Please type what you want..."></textarea>
                                            </div>
                                        </div>
                                        <div id="locationMappingData" class="scrollable-content"></div>
                                    </div>

                                    

                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round" onclick="gatherFormData();" id="myButtonId">Assign Location</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        var currentPage = 1;

        $('#dataCollectorSearch').on('input', function () {
            currentPage = 1; 
            fetchDataCollectors();
        });

        function fetchDataCollectors() {
            var searchTerm = $('#dataCollectorSearch').val();

            if (searchTerm.length >= 1) {
                $.ajax({
                    type: 'GET',
                    url: '/admin/fetch-data-collectors',
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
                    resultsDiv.append('<p class="search-result" data-user-id="' + user.id + '">' + user.first_name + ' ' + user.last_name + '</p>');
                });

                // Add click event for search results
                $('.search-result').on('click', function () {
                    var userId = $(this).data('user-id');

                    console.log('Userr id',userId);
                    var userName = $(this).text();
                    $('#dataCollectorSearch').val(userName);
                    $('#dataCollectorId').val(userId);

                    $.ajax({
                        url: '/admin/fetch-location-mapping-data/' + userId,
                        method: 'GET',
                        cache: false,
                        dataType: 'json',
                        success: function (response) {
                            console.log('location mapping', response);
                            var locationMappingData = $('#locationMappingData');
                            locationMappingData.empty()

                            var wardIds = [];
                            for (var i = 0; i < response.data.length; i++) {
                                var currentItem = response.data[i];
                                var itemHtml =
                                    '<h4>Already Assigned: (' + currentItem.village.name + ')</h4>' +
                                    '<p><strong>Country Name: </strong>' + currentItem.country.name + '</p>' +
                                    '<p><strong>Region Name: </strong>' + currentItem.region.name + '</p>' +
                                    '<p><strong>District: </strong>' + currentItem.district.name + '</p>' +
                                    '<p><strong>Ward: </strong>' + currentItem.village.name + '</p>' +
                                    '<p><strong>Description: </strong>' + currentItem.description + '</p>' +
                                    '<hr>';

                                locationMappingData.append(itemHtml);
                                wardIds.push(currentItem.village.id);
                            }

                            var button = document.getElementById('myButtonId');

                            if (response) {
                                $('#ward_id').val(wardIds);
                                button.innerHTML = 'Reassign Location';
                            } else {
                                button.innerHTML = 'Assign Location';
                            }

                        }
                    })
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
            $('#regionSelect, #districtSelect, #villageSelect').empty().prop('disabled', true);

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
            $('#districtSelect, #villageSelect').empty().prop('disabled', true);

            if (regionId) {
                // Fetch districts based on the selected region
                $.ajax({
                    url: '/admin/fetch-districts/' + regionId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Received districts data:', data);
                        $('#districtSelect').append('<option value="">Select District</option>');

                        // Populate the district dropdown
                        $.each(data, function (key, value) {
                            $('#districtSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        // Enable the district dropdown
                        $('#districtSelect').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching districts:', error);
                        alert('Error fetching districts. Please check the console for details.');
                    }
                });
            }
        });

        $('#districtSelect').change(function () {
            var districtId = $(this).val();

            // Clear and disable the village dropdown
            $('#villageSelect').empty().prop('disabled', true);

            if (districtId) {
                // Fetch villages based on the selected district
                $.ajax({
                    url: '/admin/fetch-villages/' + districtId,
                    type: 'GET',
                    success: function (data) {
                        console.log('Received villages data:', data);
                        $('#villageSelect').append('<option value="">Select Ward</option>');

                        // Populate the village dropdown
                        $.each(data, function (key, value) {
                            $('#villageSelect').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });

                        // Enable the village dropdown
                        $('#villageSelect').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching villages:', error);
                        alert('Error fetching villages. Please check the console for details.');
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