@extends('layout.app')
<!-- Main Content -->
@section('content')

<head>
    <!-- ... other head elements ... -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<?php
use App\Models\MeasurementModel;
$measurementModell = new MeasurementModel();
$data_collection_coordinates = $measurementModell->getDataCollectionCoordinates();
$data_coordinates = json_encode($data_collection_coordinates);

$all_patient_measurement = $ServicesModel->getPatientMeasurementCreatedBy($user->id);
$json_all_positive = json_encode($all_patient_measurement);
$all_patient_measurement_admin = $ServicesModel->getPatientMeasurementAll();
$json_all_positive_admin = json_encode($all_patient_measurement_admin);

// dd($json_all_positive_admin);
$patient_by_month = $ServicesModel->getPatientsByMonth($user->id);

$data_collector_visitation = json_encode($patient_by_month);

$admin_patient_by_month = $ServicesModel->getAdminPatientsByMonth();

$admin_data_collector_visitation = json_encode($admin_patient_by_month);
// dd($admin_data_collector_visitation);

$all_patient_card = $ServicesModel->getAllPatientPercentage();
$all_patient_card_measurement = $ServicesModel->getPatientCardMeasurementCreatedBy($user->id);

$user_json = json_encode($user);

$visited_region = $ServicesModel->visitedRegion();
// dd($visited_region);

?>


    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard </li>
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

                    <div class="col-lg-7 col-md-7 col-sm-12">
                          <header class="d-flex flex-wrap justify-content-between align-items-center py-3 mb-4 border-bottom">
                            <div class="d-flex d-md-none w-100">
                               <a href="/patient/new_patient" class="w-100 btn me-2 d-md-none btn-primary col-md-auto col-6 mb-2 mb-md-0">Register Patient</a>
                               <a href="/measurement/measurement" class="w-100 btn btn-secondary col-md-auto col-6 mb-2 mb-md-0">Data Collection</a>
                            </div>
                          </header>
                          
                    </div>  

                </div>
            </div>

            <div class="row clearfix">

            @if ($user_session->role == 1 || $user_session->role == 2 || $user_session->role == 5)
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/patient/all_patients">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#607D8B;">group_add</i></span>
                                </p>
                                <span>Patients </span>
                                <h3 class="m-b-10" id="number_of_patients">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_patients"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/services/services">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#009688;">apps</i></span>
                                </p>
                               <span>Services</span>
                                <h3 class="m-b-10" id="number_of_services">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_services"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-zoom-effect info-box-2 s-widget">
                        <a href="/facility/all_facility">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;">gavel</i>
                                </p>
                                <span>Facilities & Referrals</span>
                                <h3 class="m-b-10" id="number_of_facilities">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_facilities"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/admin/geographical-mapping-view">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#795548;">map</i></span>
                                </p>
                                <span>Location Mapping</span>
                                <h3 class="m-b-10" id="number_of_geo_mapping">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_geo_mapping"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/measurement/measurement">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#00BCD4;">straighten</i></span>
                                </p>
                                <span>Measurements</span>
                                <h3 class="m-b-10" id="number_of_measurements">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_measurements"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/admin/geographical-mapping-view">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#0e0028;">developer_board                                    </i></span>
                                </p>
                                <span>Data Collectors</span>
                                <h3 class="m-b-10" id="number_of_data_collector">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_data_collector"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/facility/all_facility">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#3b4d50;">location_city</i></span>
                                </p>
                                <span>Health Facilities</span>
                                <h3 class="m-b-10" id="number_of_health_facilities">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_data_collector"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <a href="/facility/referral">
                            <div class="body">
                                <p class="demo-google-material-icon">
                                    <i class="material-icons" style="font-size:3em;color:#FF5722;">sync_problem</i></span>
                                </p>
                                <span>Patients Referrals</span>
                                <h3 class="m-b-10" id="number_of_patients_referrals">
                                    <span class="number count-to" data-from="0" data-to=""
                                    data-speed="2000" data-fresh-interval="700" id="number_of_patients_referrals"></span>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            {{-- <div id="graphAndMap"></div> --}}


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>Data Collection</strong> & Visit Statistics</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 
                        <div class="body m-b-10">
                        <canvas id="m_area_chart"></canvas>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <div id="map"  style="height: 400px;" class="m-b-10"></div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <tbody>
                                                @foreach($visited_region as $vsit_reg)
                                                <tr>
                                                    <th><i class="zmdi zmdi-circle col-cyan"></i></th>
                                                    <td>{{$vsit_reg['regionName']}}</td>
                                                    <td><span>{{$vsit_reg['regionCount']}} visited</span></td>
                                                    <td><span>35% <i class="zmdi zmdi-caret-up"></i></span></td>
                                                </tr>
                                                @endforeach
                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Rainfall and Evaporation</h2>
                    </div>
                    <div class="body">
                        <div class="e_chart" id="echart-rainfall" style="height: 400px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Services Chart</h2>
                    </div>
                    <div class="body">
                        <div class="e_chart" id="echart-doughnut" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
            </div>



            @endif      

            @if ($user_session->role == 3)   
             <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>All</strong> Patients</h2>
                        
                        </div>
                        <div class="body align-center">
                            <div class="row">
                            <div class="col-4">
                                    <h4 class="margin-0">{{$all_patient_card['totalMale'] + $all_patient_card['totalFemale'] }}</h4>
                                    <p>All</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">{{$all_patient_card['totalMale'] }}</h4>
                                    <p>Male</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">{{$all_patient_card['totalFemale']}}</h4>
                                    <p>Female</p>
                                </div>
                                
                            </div>
                            <div class="sparkline-pie">{{ $all_patient_card['totalMale'] }},{{ $all_patient_card['totalFemale'] }}</div>
                        </div>
                    </div>
                </div>

                @foreach($all_patient_card_measurement as $card_measure)
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>{{$card_measure['service_name']}}</strong> Tests</h2>
                            <!-- <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body align-center">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="margin-0">{{$card_measure['total_positive'] + $card_measure['total_negative'] }}</h4>
                                    <p>All</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">{{$card_measure['total_positive'] }}</h4>
                                    <p>Positive</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">{{ $card_measure['total_negative'] }}</h4>
                                    <p>Negative</p>
                                </div>
                            </div>
                            <div class="sparkline-pie">{{$card_measure['total_positive'] }},{{ $card_measure['total_negative'] }}</div>
                        </div>
                    </div>
                </div>

                @endforeach

            

            
                <div class="col-lg-12 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>Monthly User Visitation </strong> Analytics</h2>
                        </div>
                        <div class="body m-b-10">
                        <canvas id="m_area_chart"></canvas>
                        </div>
                    </div>
                </div>
          
      
                {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Campaign</strong> Performance</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body align-center">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="margin-0">60%</h4>
                                    <p>Monthly</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">20%</h4>
                                    <p>Weekly</p>
                                </div>
                                <div class="col-4">
                                    <h4 class="margin-0">30%</h4>
                                    <p>Daily</p>
                                </div>
                            </div>
                            <div class="sparkline-pie">6,1,3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Pregnants</strong> Usage</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a role="button" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="doughnut">
                                <canvas id="canvas" height="200"></canvas>
                                <canvas id="tooltip-canvas" width="150" height="100"></canvas>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 m-t-20">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small>Page Views</small>
                                                <h5 class="m-b-0">32,211</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">2,3,5,6,9,8,7,8,7</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Site Visitors</small>
                                                <h5 class="m-b-0">2,516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">8,5,3,2,2,3,5,6,4</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Total Clicks</small>
                                                <h5 class="m-b-0">4,536</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">6,5,4,6,5,1,8,4,2</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Total Returns</small>
                                                <h5 class="m-b-0">516</h5>
                                            </td>
                                            <td>
                                                <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                                    data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                                    data-bar-Color="#2b314a">8,2,3,5,6,4,5,7,5</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
              
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>My </strong> Inventory <small> Status</small></h2>
                            </div>
                            <div class="body sales_report">
                                <div class="table-responsive">
                                    <table class="table m-b-0 table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Serial No</th>
                                                <th>Category</th>
                                                <th>Item Name</th>
                                                <th>Available</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; ?>
                                            
                                            @foreach($inventory as $invty)

                                            <tr>
                                                <td>
                                                    <h6>{{$n++}}</h6>
                                                    <!-- <span>WrapTheme To By Again</span> -->
                                                </td>
                                                <td>{{$invty->serial_number}}
                                                </td>
                                                <td>
                                                    {{ $invty->category_name }}
                                                </td>
                                                <td>{{ $invty ->inventory_name }}</td>
                                                <td>0</td>
                                                <td><strong>{{ $invty->total_quantity }}</strong></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Incidents</strong> Summary</h2>
                            {{-- <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                        <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body"> 
                                <!-- <div class="body"> -->
                                    <div id="echart-doughnut" style="height: 400px;"></div>
                                <!-- </div> -->
                        
                            <table class="table m-t-15 m-b-0">
                               
                                <tbody>
                                @foreach($all_patient_measurement as $patientss)
                                
                                    <tr>
                                        <td>{{$patientss->service_name}}</td>
                                        <td>{{$patientss->service_status}}</td>
                                        <td>{{$patientss->total_count}}</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
                @endif
           



        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
     <script src="{{ asset('js/map.js') }}"></script>




    <script type="text/javascript">

        $(document).ready(function () {
            number_of_patients();
            number_of_services();
            number_of_facilities();
            number_of_geo_mapping();
            number_of_measurements();
            number_of_data_collector();
            number_of_health_facilities();
            number_of_patients_referrals();
           
            echartDonutee();
            loadMap();


        });

        function number_of_patients() {
            $.ajax({
                url: "{{ route('dashboard.number_of_patients')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_patients').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_services() {
            $.ajax({
                url: "{{ route('dashboard.number_of_services')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_services').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_facilities() {
            $.ajax({
                url: "{{ route('dashboard.number_of_facilities')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_facilities').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_geo_mapping() {
            $.ajax({
                url: "{{ route('dashboard.number_of_geo_mapping')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_geo_mapping').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_measurements() {
            $.ajax({
                url: "{{ route('dashboard.number_of_measurements')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_measurements').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_data_collector() {
            $.ajax({
                url: "{{ route('dashboard.number_of_data_collector')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_data_collector').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_health_facilities() {
            $.ajax({
                url: "{{ route('dashboard.number_of_health_facilities')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_health_facilities').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }
        function number_of_patients_referrals() {
            $.ajax({
                url: "{{ route('dashboard.number_of_patients_referrals')}} ",
                type: "GET",
                dataType: "html",
                success: function (data) {
                    $('#number_of_patients_referrals').html(data);
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }


        var ctx = document.getElementById('m_area_chart').getContext('2d');

        
        var user_data1 = <?= $user_json?>;
            

        if (user_data1.role == 1) {
        var admin_visitation = <?= $admin_data_collector_visitation ?>;

        var monthlyVisitationData1 = [];

        for (var i = 0; i < 12; i++) {
            monthlyVisitationData1.push(0);
        }

        for (var i = 0; i < admin_visitation.length; i++) {
            var monthIndex = admin_visitation[i].month - 1;
            monthlyVisitationData1[monthIndex] = admin_visitation[i].patient_count;
        }

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Monthly User Visitation',
                    data: monthlyVisitationData1,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    } else if (user_data1.role == 3) {
            var visitation = <?= $data_collector_visitation ?>;

            var monthlyVisitationData = [];

            for (var i = 0; i < 12; i++) {
                monthlyVisitationData.push(0);
            }

            for (var i = 0; i < visitation.length; i++) {
                var monthIndex = visitation[i].month - 1;
                monthlyVisitationData[monthIndex] = visitation[i].patient_count;
            }

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Monthly User Visitation',
                        data: monthlyVisitationData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function echartDonutee() {
          

                var doughnutChart = echarts.init(document.getElementById('echart-doughnut'));

                

                
                var positive_patient_admin = <?= $json_all_positive_admin ?>;
                var positive_patient = <?= $json_all_positive ?>


                var user_data = <?= $user_json?>;
            //    console.log('user data',user_data.role);

               if (user_data.role == 1) {
                var sumTotalCount = positive_patient_admin.reduce(function (sum, patient) {
                    return sum + patient.total_count;
                }, 0);

                // console.log('Sum of total_count:', sumTotalCount);

                var chartData = [];

                positive_patient_admin.forEach(function (patient) {
                    var percentage = (patient.total_count / sumTotalCount) * 100;

                    chartData.push({
                        value: parseFloat(percentage.toFixed(2)),
                        name: patient.service_name,
                        itemStyle: {color: getRandomColor()}
                    });
                });

                function getRandomColor() {
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                var option = {
                    series: [
                        {
                            name: 'Access source',
                            type: 'pie',
                            radius: ['50%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                                normal: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    show: true,
                                    textStyle: {
                                        fontSize: '30',
                                        fontWeight: 'bold'
                                    }
                                },
                            },
                            labelLine: {
                                normal: {
                                    show: false
                                }
                            },
                            data: chartData
                        }
                    ]
                };

                doughnutChart.setOption(option, true);
            } else if(user_data.role == 3){
                var sumTotalCount = positive_patient.reduce(function (sum, patient) {
                    return sum + patient.total_count;
                }, 0);

                // console.log('Sum of total_count:', sumTotalCount);

                var chartData = [];

                positive_patient.forEach(function (patient) {
                    var percentage = (patient.total_count / sumTotalCount) * 100;

                    chartData.push({
                        value: parseFloat(percentage.toFixed(2)),
                        name: patient.service_name,
                        itemStyle: {color: getRandomColor()}
                    });
                });

                function getRandomColor() {
                    var letters = '0123456789ABCDEF';
                    var color = '#';
                    for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                var option = {
                    series: [
                        {
                            name: 'Access source',
                            type: 'pie',
                            radius: ['50%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                                normal: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    show: true,
                                    textStyle: {
                                        fontSize: '30',
                                        fontWeight: 'bold'
                                    }
                                },
                            },
                            labelLine: {
                                normal: {
                                    show: false
                                }
                            },
                            data: chartData
                        }
                    ]
                };

                doughnutChart.setOption(option, true);
            }

            };

            function loadMap(){

                var map = L.map('map').setView([-6.165, 39.239], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

var dataPoints = <?= $data_coordinates ?>;
// console.log('pointss', dataPoints);

    dataPoints.forEach(function (point) {
        
           // Extract information from the data point
var latitude = point.latitude;
var longitude = point.longitude;
var name = point.name;
var description = point.description;

var patientMeasurement = point.patient_measurement;
var patient = point.patient;
var patientService = point.patient_service;
var service = point.service;



var popupContent = "Latitude: " + latitude + "<br>Longitude: " + longitude +
               "<br><br><b>Patient Info:</b><br>" +
               "Full Name: " + patient.first_name + " " +patient.middle_name + " " +patient.last_name + "<br>" +
            //    "Middle Name: " + patient.middle_name + "<br>" +
            //    "Last Name: " + patient.last_name + "<br>" +
               "Gender: " + patient.gender + "<br>" +
               "Date of Birth: " + patient.dob + "<br>" +
               "ID Number: " + patient.id_number + "<br>" +
               "Phone: " + patient.phone + "<br>" +
               "Email: " + patient.email + "<br>" +
               "Address: " + patient.address + "<br>" +
               "<br><br><b>Patient Measurement:</b><br>" +
               "Height: " + patientMeasurement.measurement_height + "<br>" +
               "Weight: " + patientMeasurement.measurement_weight + "<br>" +
               "Blood Pressure: " + patientMeasurement.measurement_bp + "/" + patientMeasurement.measurement_bp_systolic + "<br>" +
               "Casualty: " + patientMeasurement.measurement_casualty + "<br>" +
               "Allergies: " + patientMeasurement.measurement_allergies + "<br>" +
               "Remarks: " + patientMeasurement.measurement_remark + "<br>" +
               "Blood Group: " + patientMeasurement.measurement_blood_group + "<br>" +
               "Pulse Oxygen: " + patientMeasurement.measurement_pulse_oxygen + "<br>" +
               "Vital Signs: " + patientMeasurement.measurement_vital_signs + "<br>" +
               "Temperature: " + patientMeasurement.measurement_temperature + "<br>" +
               "Symptoms: " + patientMeasurement.measurement_symptoms + "<br>" +
               "Medical History Illness: " + patientMeasurement.medical_history_illness + "<br>"+
               "<br><br><b>Patient Service:</b><br>" +
               "Service Name: " + service.name + "<br>" +
               "Service Gender: " + service.gender + "<br>" +
               "Service Gender: " + service.description + "<br>" +
               "Service Result: " + patientService.service_result + "<br>" +
               "Service Comments: " + patientService.service_comments + "<br>" +
               "Service Status: " + patientService.service_status;

        L.marker([point.latitude, point.longitude]).addTo(map).bindPopup(popupContent)
            .openPopup();
    });

            }


    </script>
@endsection
