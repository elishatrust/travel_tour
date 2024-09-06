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
                        <li class="breadcrumb-item">Inventory</li>
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
                            <h2><strong>Assign User</strong> Inventory</h2>
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
                        <form action="{{ route('user.inventory.add') }}" method="POST">
                            @csrf
                            <div class="row">
                        
                                <!-- Data Collector Section -->
                                <div class="col-lg-8 col-md-12">
                                    <b>Data Collector</b>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="dataCollectorSearch" placeholder="Search Data Collector">
                                    </div>
                                    <input hidden type="text" class="form-control" name="datacollector_id" id="dataCollectorId">
                                    <div id="searchResults"></div>
                        
                                    <input type="hidden" name="formData" id="formDataInput">
                                </div>
                        
                                <!-- Inventory Form Section -->
                                <div class="col-lg-8">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tableID2">
                                            <tr>
                                                <th><label for="item" class="form-label"> Inventory Category </label></th>
                                                <th><label for="item" class="form-label">Inventory Name</label></th>
                                                <th><label for="item" class="form-label"> Quantity Required</label></th>
                                                <th><label for="item" class="form-label"> Action</label></th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control show-tick" id="inventoryCategory">
                                                        <option value="">select</option>
                                                        @foreach($inventory_category as $invtry)
                                                        <option value="{{ $invtry->id }}">{{ $invtry->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control show-tick" id="inventoryList">
                                                        <option value="">select</option>
                                                    </select>
                                                </td>
                                                <input type="text" hidden class="form-control" name="inventory_category_id"
                                                    id="inventoryCategoryInput" placeholder="Inventory Category" readonly>
                                                <input hidden type="text" class="form-control" name="inventory_id" id="inventoryIdInput">
                                                <td>
                                                    <input type="number" class="form-control" name="quantity_number" id="quantityNumberInput">
                                                </td>
                                                <td id="addButton2">
                                                    <button type="button" onclick="addMore2()" class="btn btn-success closebtn">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                        
                                <div class="col-lg-4 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <b>Already Assigned Inventory</b>
                                            <hr>
                                            <div id="userInventoryResult" class="scrollable-content"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>View Selected Inventory</b>
                                            <hr>
                                            <div id="inventoryResult"></div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-round" onclick="gatherFormData();">Save Changes</button>
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
            currentPage = 1; // Reset current page when searching
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

                    // console.log('Userr id',userId);
                    var userName = $(this).text();
                    $('#dataCollectorSearch').val(userName);
                    $('#dataCollectorId').val(userId);


                    $.ajax({
                        url: '/admin/data-collector-inventory/' + userId,
                        method: 'GET',
                        cache: false,
                        dataType: 'json',
                        success: function (response) {
                            // console.log('user-invetoryyy', response);
                            var userInventoryResult = $('#userInventoryResult');
                            userInventoryResult.empty(); 

                            for (var i = 0; i < response.data.length; i++) {
                                var currentItem = response.data[i];
                                var itemHtml =
                                    '<h5><strong>' + currentItem.inventory_name +  '</strong></h5>' +
                                    '<p><strong>Category Name: </strong>' + currentItem.category_name + '</p>' +
                                    '<p><strong>Inventory Name: </strong>' + currentItem.inventory_name + '</p>' +
                                    '<p><strong>Model: </strong>' + currentItem.model + '</p>' +
                                    '<p><strong>Serial Number: </strong>' + currentItem.serial_number + '</p>' +
                                    '<p><strong>Sku: </strong>' + currentItem.sku + '</p>' +
                                    '<p><strong>Total Quantity: </strong>' + currentItem.total_quantity + '</p>' +
                                    '<hr>';
                                   
                                userInventoryResult.append(itemHtml);
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


        //Select inventory 
        $('#inventoryCategory').change(function () {
            var categoryId = $(this).val();
            // console.log('category id', categoryId);


            if (categoryId) {
                $.ajax({
                    url: '/admin/fetch-inventory/' + categoryId,
                    type: 'GET',
                    success: function (data) {
                        // console.log('Received inventory data:', data);

                        // Ensure data is not empty
                        if (data && data.length > 0) {
                            // Enable and set the inventoryList select element
                            var options = data.map(row => {
                                    // $('#inventoryIdInput').val(row.id);

                                return `<option value="${row.id}">${row.name}</option>`;
                            }).join('');

                            $('#inventoryList').html('<option value="">Select inventory</option>' + options).select2();
                            
                           
                        } else {
                            console.error('Empty data received for inventoryBachSelect');
                            alert('Empty data received for inventoryBachSelect');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching inventoryBachSelect:', error);
                        alert('Error fetching inventoryBachSelect. Please check the console for details.');
                    }
                });
                $('#inventoryCategoryInput').val(categoryId);
            }
        });

        $('#inventoryList').change(function () {
            var selectedInventoryId = $(this).val();
            $('#inventoryIdInput').val(selectedInventoryId);

            if (selectedInventoryId) {
                $.ajax({
                    url: '/admin/fetch-single-inventory/' + selectedInventoryId,
                    type: 'GET',
                    success: function (data) {
                        if (data && data.inventory && data.inventory_batch) {
                            var inventoryInfo = data.inventory;
                            var inventoryBatchInfo = data.inventory_batch;

                            var resultHtml = `
                              <p><strong>Inventory Name:</strong> ${inventoryInfo.name}</p>
                              <p><strong>Model:</strong> ${inventoryInfo.model}</p>
                              <p><strong>Serial Number:</strong> ${inventoryInfo.serial_number}</p>
                              <p><strong>SKU:</strong> ${inventoryInfo.sku}</p>
                              <p><strong>Description:</strong> ${inventoryInfo.description || 'N/A'}</p>
                              
                              <h5>Inventory Batch Information:</h5>
                              <p><strong>Quantity:</strong> ${inventoryBatchInfo.quantity}</p>
                              <p><strong>Price:</strong> ${inventoryBatchInfo.price}</p>
                          `;

                            $('#inventoryResult').html(resultHtml);
                        } else {
                            console.error('Empty or invalid data received for inventory or inventory_batch');
                            alert('Empty or invalid data received for inventory or inventory_batch');
                        }

                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching inventoryBachSelect:', error);
                        alert('Error fetching inventoryBachSelect. Please check the console for details.');
                    }
                });
            }
        });

    });



            function addMore2() {
                var table = document.getElementById("tableID2");
                var id = table.rows.length;

                // Create the inventory category dropdown
                var inventoryCategory = `<td><select class="form-control show-tick" name="inventory_category_id[]" onchange="updateInventoryList(${id}, this)"><option value="">Select inventory</option>@foreach($inventory_category as $invtry)<option value="{{ $invtry->id }}">{{ $invtry->name }}</option>@endforeach</select></td>`;

                // Create the inventory list dropdown
                var inventoryList = '<td><select class="form-control show-tick" name="inventory_id[]" id="inventoryListSelect"><option value="">Select inventory</option></select></td>';

                // Create the input field for quantity
                var quantityNeed = `<td><input type="number" class="form-control" name="quantity_number[]" id="quantityNumberInput'+ ${id}+'" required></td>`;

                // Create the delete button
                var deleteButton = `<td><button type="button" onclick="delete_row2(${id})" class="closebtn"><i class="material-icons">remove</i></button></td>`;

                // Construct the new row
                var newRow = `<tr>${inventoryCategory}${inventoryList}${quantityNeed}${deleteButton}</tr>`;

                // Insert the new row into the table
                table.insertRow(id).outerHTML = newRow;
            }




            function delete_row2(id) {
                var table = document.getElementById("tableID2");
                table.deleteRow(id);
            }

            function updateInventoryList(id, selectElement) {
                // Get the selected option value
                var selectedValue = selectElement.value;
                $.ajax({
                    url: '/admin/fetch-inventory/' + selectedValue,
                    type: 'GET',
                    success: function (data) {
                        // console.log('Received inventory list data:', data);

                        // Ensure data is not empty
                        if (data && data.length > 0) {
                            var inventoryList = document.querySelector(`#tableID2 tr:nth-child(${id + 1}) select[name="inventory_id[]"]`);

                            inventoryList.options.length = 1;
                            data.forEach(row => inventoryList.options.add(new Option(row.name, row.id)));

                            $('#inventoryListSelect').on('change', function () {
                                var selectedValue = $(this).val();

                                // console.log('Selected value here', selectedValue);
                                if (selectedValue) {
                                    $.ajax({
                                        url: '/admin/fetch-single-inventory/' + selectedValue,
                                        type: 'GET',
                                        success: function (data) {
                                            if (data && data.inventory && data.inventory_batch) {
                                                var inventoryInfo = data.inventory;
                                                var inventoryBatchInfo = data.inventory_batch;
                                                var resultHtml = `
                              <p><strong>Name:</strong> ${inventoryInfo.name}</p>
                              <p><strong>Model:</strong> ${inventoryInfo.model}</p>
                              <p><strong>Serial Number:</strong> ${inventoryInfo.serial_number}</p>
                              <p><strong>SKU:</strong> ${inventoryInfo.sku}</p>
                              <p><strong>Description:</strong> ${inventoryInfo.description || 'N/A'}</p>
                              
                              <h5>Inventory Batch Information:</h5>
                              <p><strong>Quantity:</strong> ${inventoryBatchInfo.quantity}</p>
                              <p><strong>Price:</strong> ${inventoryBatchInfo.price}</p>
                          `;

                                                $('#inventoryResult').html(resultHtml);
                                            } else {
                                                console.error('Empty or invalid data received for inventory or inventory_batch');
                                                alert('Empty or invalid data received for inventory or inventory_batch');
                                            }

                                        },
                                        error: function (xhr, status, error) {
                                            console.error('Error fetching inventoryBachSelect:', error);
                                            alert('Error fetching inventoryBachSelect. Please check the console for details.');
                                        }
                                    });
                                }
                            });



                            // Trigger change event on inventoryList to update other fields if needed
                            $(inventoryList).trigger('change');

                        } else {
                            console.error('Empty or invalid data received for inventory list');
                            alert('Empty or invalid data received for inventory list');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching inventory list:', error);
                        alert('Error fetching inventory list. Please check the console for details.');
                    }
                });
            }


    function gatherFormData() {
    var formData = [];

    // Add data from the first row manually
    var firstCategoryId = $('#inventoryCategoryInput').val();
    var firstInventoryId = $('#inventoryIdInput').val();
    var firstQuantityNumber = $('#quantityNumberInput').val();

    if (firstCategoryId && firstInventoryId && firstQuantityNumber) {
        formData.push({
            inventory_category_id: firstCategoryId,
            inventory_id: firstInventoryId,
            quantity_number: firstQuantityNumber,
        });
    }

    // Iterate through each row in the table
    $('#tableID2 tbody tr').each(function (index, row) {
        var categoryId = $(row).find('select[name="inventory_category_id[]"]').val();
        var inventoryId = $(row).find('select[name="inventory_id[]"]').val();
        var quantityNumber = $(row).find('input[name="quantity_number[]"]').val();

        // Skip empty rows
        if (categoryId && inventoryId && quantityNumber) {
            // Push the data to the formData array
            formData.push({
                inventory_category_id: categoryId,
                inventory_id: inventoryId,
                quantity_number: quantityNumber,
            });
        }
    });

    // Store the formData array in a hidden input field
    $('#formDataInput').val(JSON.stringify(formData));
}







</script>



@endsection