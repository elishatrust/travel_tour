@extends('layout.app')
<!-- Main Content -->
@section('content')
<?php
$user_session=Auth::user();
?>
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                <div class="card">
                    <div class="body bg-dark profile-header">
                        <div class="row">
                            <div class="col-lg-10 col-md-12">
                                <img src="{{ asset('assets/images/avatar/avatar-1.png') }}" class="user_pic rounded img-raised" alt="User" style="width:200px;200px;bottom:0;">
                                <div class="detail">
                                    <div class="u_name">
                                        <h4><strong>{{ $user->last_name}},</strong> {{ $user->first_name}}</h4>
                                    </div>
                                    <div id="m_area_chart"></div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 user_earnings">
                                <h6>Total Patients</h6>
                                <h4><small class="number count-to" data-from="0" data-to="2124" data-speed="1500" data-fresh-interval="1000">2124</small></h4>
                                <input type="text" class="knob" value="39" data-width="80" data-height="80" data-thickness="0.1" data-bgcolor="#485058" data-fgColor="#f97c53">
                                <span>Average 39% <i class="zmdi zmdi-caret-up text-success"></i></span>
                            </div>
                        </div>
                    </div><br>
                    <ul class="nav nav-tabs profile_tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#overview"><i class="zmdi zmdi-home"></i> Overview</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#schedule"><i class="zmdi zmdi-calendar"></i> Schedule</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings"><i class="zmdi zmdi-settings"></i> Settings</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="overview">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="card text-center">
                                    <div class="body">
                                        <i class="material-icons" style="font-size:2em;color:#607D8B;">group_add</i></span>
                                        <h5 class="m-b-0 number count-to" id="number_of_patients" data-from="0" data-to="" data-speed="1000" data-fresh-interval="700">0</h5>
                                        <small>Patients Served</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="card text-center">
                                    <div class="body">
                                        <i class="material-icons" style="font-size:2em;color:#009688;">apps</i></span>
                                        <h5 class="m-b-0 number count-to" id="number_of_services" data-from="0" data-to="" data-speed="1000" data-fresh-interval="700">0</h5>
                                        <small>Provided Services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="card text-center">
                                    <div class="body">
                                        <i class="material-icons" style="font-size:2em;">gavel</i>
                                        <h5 class="m-b-0 number count-to" id="number_of_facilities" data-from="0" data-to="" data-speed="1000" data-fresh-interval="700">0</h5>
                                        <small>Facilities Used</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="card text-center">
                                    <div class="body">
                                        <i class="material-icons" style="font-size:2em;color:#795548;">map</i></span>
                                        <h5 class="m-b-0 number count-to" id="number_of_geo_mapping" data-from="0" data-to="" data-speed="1000" data-fresh-interval="700">0</h5>
                                        <small>Geo-Mapping</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Info</strong></h2>
                                    </div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <small class="text-muted">Address: </small>
                                                <p>Ministry of Health, Mtoro Rd, Zanzibar</p><hr>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <small class="text-muted">Email address: </small>
                                                <p>{{ $user->email}}</p><hr>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <small class="text-muted">Phone: </small>
                                                <p>{{ $user->phone_number}}</p><hr>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <small class="text-muted">Mobile: </small>
                                                <p>{{ $user->phone_number}}</p><hr>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <small class="text-muted">Birth Date: </small>
                                                <p class="m-b-0">October 22th, 1990</p><hr>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <small class="text-muted">Title: </small>
                                                <p class="m-b-0"></p><hr>
                                            </div>
                                        </div>
                                        <div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31733.832533022753!2d39.15470121083983!3d-6.167024599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd05e0a774d49%3A0x9dcfda25cdf8cc58!2sMinistry%20of%20Health!5e0!3m2!1sen!2stz!4v1702889658604!5m2!1sen!2stz" width="100%" height="200" frameborder="0" style="border:0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Latest</strong> Patients</h2>
                                    </div>
                                    <div class="body">
                                        <ul class="follow_us list-unstyled m-b-0">
                                            <li class="online">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="{{ asset('assets/images/avatar/avatar-1.png')}}" alt="Patient">
                                                        <div class="media-body">
                                                            <span class="name">Chris Fox</span>
                                                            <span class="message">Designer, Blogger</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="{{ asset('assets/images/avatar/avatar-1.png')}}" alt="Patient">
                                                        <div class="media-body">
                                                            <span class="name">Alexander</span>
                                                            <span class="message">Writter, Mag Editor</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane page-calendar" id="schedule">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="card">
                                    <div class="body m-b-20">
                                        <div class="event-name b-lightred row">
                                            <div class="col-3 text-center">
                                                <h4>09<span>Dec</span><span>2017</span></h4>
                                            </div>
                                            <div class="col-9">
                                                <h6>Repeating Event</h6>
                                                <p>It is a long established fact that a reader will be distracted</p>
                                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="event-name b-greensea row">
                                            <div class="col-3 text-center">
                                                <h4>16<span>Dec</span><span>2017</span></h4>
                                            </div>
                                            <div class="col-9">
                                                <h6>Repeating Event</h6>
                                                <p>It is a long established fact that a reader will be distracted</p>
                                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body m-b-20 l-blue">
                                        <div class="event-name row">
                                            <div class="col-3 text-center">
                                                <h4>28<span>Dec</span><span>2017</span></h4>
                                            </div>
                                            <div class="col-9">
                                                <h6>Google</h6>
                                                <p>It is a long established fact that a reader will be distracted</p>
                                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body m-b-5 l-green">
                                        <div class="event-name row">
                                            <div class="col-3 text-center">
                                                <h4>13<span>Dec</span><span>2017</span></h4>
                                            </div>
                                            <div class="col-9">
                                                <h6>Birthday</h6>
                                                <p>It is a long established fact that a reader will be distracted</p>
                                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-round btn-primary m-t-15" data-toggle="modal" data-target="#addevent">Add Events</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="card">
                                    <div class="body">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <p><small class="text-danger">
                                    *Note: You can leave the "Current Password" field empty
                                    if you do not want to set a new password</small>
                                </p>
                                <form id="verifyPassword" action="{{ route('update-password', ['id' => $user_session->id]) }}" method="post" enctype="form-data/multipart">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm New Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-info btn-round" id="saveBtn">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <form action="#" method="post"></form>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <b>First name</b>
                                                <input type="text" class="form-control" placeholder="First Name" value="{{ $user->first_name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <b>Last name</b>
                                                <input type="text" class="form-control" placeholder="Last Name" value="{{ $user->last_name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <b>Email</b>
                                                <input type="email" class="form-control" placeholder="E-mail" value="{{ $user->email}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <b>Phone</b>
                                                <input type="text" class="form-control" placeholder="Phone number" value="{{ $user->phone_number}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <b>Gender</b>
                                                <select name="gender" class="form-control show-tick" required>
                                                    <option value="" select="selected">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-2">
                                            <div class="form-group">
                                                <b>Title</b>
                                                <input type="text" class="form-control" placeholder="Title" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-round">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
$(document).ready(function(){
    number_of_patients();
    number_of_services();
    number_of_facilities();
    number_of_geo_mapping();
});
$('form#verifyPassword').submit(function (e) {
    e.preventDefault();

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });

    jQuery.ajax({
        type: 'PUT',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            console.log(data);
            if (data.status == 200) {
                showFlashMessage("success", data.message);
                clear_input();
            } else {
                showFlashMessage("warning", data.message);
            }

            disableBtn("saveBtn", false);
            $("#saveBtn").html("Save Changes")
        },
        error: function (error) {
            console.log(error);
            showFlashMessage("warning", error.message);
        }
    });
});

function clear_input() {
    document.getElementById('verifyPassword').reset();
    $("#saveBtn").html("Save Changes")
}
function verifyPassword() {
    if($('form#verifyPassword input[name=new_password]').val() === $('#verifyPassword input[name=confirm_new_password]').val()){
        $('form#verifyPassword input[name=confirm_new_password]').removeClass('border-danger');

    }else{
        $('#verifyPassword input[name=confirm_new_password]').addClass('border-danger');
        // alert('Confirm password not match. Try Again');
    }
}

$('input[name=new_password]').keyup(function(){verifyPassword();});
$('input[name=confirm_new_password]').keyup(function(){verifyPassword();});

function number_of_patients() {
    $.ajax({
        url: "{{ route('dashboard.number_of_patients')}} ",
        type: "GET",
        dataType: "html",
        success: function(data) {
            $('#number_of_patients').html(data);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}
function number_of_services() {
    $.ajax({
        url: "{{ route('dashboard.number_of_services')}} ",
        type: "GET",
        dataType: "html",
        success: function(data) {
            $('#number_of_services').html(data);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}
function number_of_facilities() {
    $.ajax({
        url: "{{ route('dashboard.number_of_facilities')}} ",
        type: "GET",
        dataType: "html",
        success: function(data) {
            $('#number_of_facilities').html(data);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}
function number_of_geo_mapping() {
    $.ajax({
        url: "{{ route('dashboard.number_of_geo_mapping')}} ",
        type: "GET",
        dataType: "html",
        success: function(data) {
            $('#number_of_geo_mapping').html(data);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}


</script>

@endsection
