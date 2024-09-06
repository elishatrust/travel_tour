

<!-- Left Sidebar -->

<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img
                    src="{{ asset('assets/images/avatar/avatar-1.png') }}" alt="ZData"></a>
        </li>
        @if ($user_session->role != 3)
        <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a></li>
       @endif
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="notifications badgebit" id="loadRecentReferrals">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-notifications">  </i>
               @if(checkNotifications() !=0)  {{--  Function from the Helper  --}}
            
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
                @endif
            </a>
        </li>
        @if ($user_session->role != 3)
        <li class="task badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-flag"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li><a href="#" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="#" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="#" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li><a href="#"><i class="zmdi zmdi-comments"></i></a></li>
        @endif
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i
                    class="zmdi zmdi-fullscreen"></i></a></li>

        {{-- Profile & Logout --}}
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{ route('user.profile') }}" class=""><i class="zmdi zmdi-account"></i></a>
            <a href="{{ route('logout') }}" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
             
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File
                                    Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
    </div>
    <div class="notif-menu">

        <div id="recentReferralsContainer"></div>

    </div>
 
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29"
                                aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78"
                                aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68"
                                aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                </div>

                @if ($user_session->role != 3)
                <div class="card">
                    <div class="header">
                        <h2><strong>Config</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <div class="menu">
                            <ul class="setting-list list m-b-0">

                                <li><a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">group</i>
                                        <span> Users</span><span
                                            class="badge badge-success float-right"><?php echo DB::table('z_users')
                                                ->where('status', '1')
                                                ->count(); ?></span></a>
                                    <ul class="ml-menu">

                                        <li>

                                            <div class="sl-content">
                                                <a href="{{ route('user_roles') }}">Roles</a>

                                            </div>



                                        </li>

                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">apps</i>
                                        <span>Services</span><span class="badge badge-default float-right"></span></a>
                                    <ul class="ml-menu">
                                        <li><a href="/services/categories">All Categories</a></li>
                                        <li><a href="/services/services">All Services</a></li>
                                    </ul>
                                </li>



                                <li><a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">map</i>
                                        <span>Location </span><span class="badge badge-warning float-right"></span></a>
                                    <ul class="ml-menu">
                                        <li><a href="/location/country">Country</a></li>
                                        <li><a href="/location/region">Region</a></li>
                                        <li><a href="/location/district">District</a></li>
                                       <!-- <li><a href="/location/ward">Ward</a></li> -->
                                        <li><a href="/location/village">Ward</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and
                                        discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and
                                        discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and
                                        discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and
                                        discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and
                                        discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    use Illuminate\Support\Facades\DB;
    $user_session = Auth::user();
    ?>

    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="/user/profile"><img src="{{ asset('assets/images/avatar/avatar-1.png') }}"
                                    alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>{{ $loggedInUser->first_name }}</h6>
                            <a href="mailto:{{ $loggedInUser->email }}">{{ $loggedInUser->email }}</a>

                            @if ($user_session->role == 1)
                                <p class="col-brown">Super Admin</p>
                            @elseif($user_session->role == 2)
                                <p class="col-brown">Admin</p>
                            @elseif($user_session->role == 3)
                                <p class="col-brown">Data Collector</p>
                            @elseif($user_session->role == 4)
                                <p class="col-brown">Facility Specialist</p>
                            @elseif($user_session->role == 5)
                                <p class="col-brown">Administrator</p>
                            @endif
                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>



                <li class="active open"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

                <li><a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group_add</i>
                        <span>Patients & Data</span><span class="badge badge-default float-right"></span></a>
                    <ul class="ml-menu">
                        <li><a href="/patient/new_patient">New Patient</a></li>
                        @if ($user_session->role == 3)
                        <li><a href="/patient/all_patients">My Patients</a></li>
                        <li><a href="#">Assigned Locations</a></li>
                        @else
                        <li><a href="/patient/all_patients">All Patients</a></li>
                        @endif
                        <li><a href="/measurement/measurement">Data Collection</a></li>
                    </ul>
                </li>


                <li><a href="javascript:void(0);" class="menu-toggle">
                        <i class="zmdi zmdi-balance"></i>
                        <span>Inventory Control</span></a>
                    <ul class="ml-menu">
                        @if ($user_session->role == 3)
                        <li><a href="/inventory/inventory_category">My Items</a></li>
                        @else
                        <li><a href="/inventory/inventory_category">Categories</a></li>
                        <li><a href="/inventory/inventory">All Inventory</a></li>
                        <li><a href="{{ route('user.inventory-view') }}">Assign Inventory</a></li>
                        @endif
                    </ul>
                </li>


                <li><a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">gavel</i>
                        <span>Facilities & Referrals</span> </a>
                    <ul class="ml-menu">
                        @if ($user_session->role == 3)
                        <li><a href="/facility/referral">Patients Referals</a></li>
                        @else
                        <li><a href="/facility/all_facility">Health Facilities</a></li>
                        <li><a href="/facility/all_facility_type">Facility Types</a></li>
                        <li><a href="/facility/referral">All Referals</a></li>
                        @endif
                       
                        
                    </ul>
                </li>

                @if ($user_session->role != 3)

                <li><a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group</i>
                        <span> Users & Staff</span><span
                            class="badge badge-success float-right"><?php echo DB::table('z_users')
                                ->where('status', '1')
                                ->count(); ?></span></a>
                    <ul class="ml-menu">
                        <!-- <li><a href="{{ route('user_registration') }}">New Staff</a></li> -->
                        <li><a href="{{ route('all_users') }}">All Staff</a></li>
                        <li><a href="{{ route('geographical.mapping.all') }}">Location Mapping</a></li>


                    </ul>
                </li>
                @endif

                <li><a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">group</i>
                    <span> Reports</span><span
                        class="badge badge-success float-right"></span></a>
                <ul class="ml-menu">
                    <li><a href="/map/data-collection">Data Collection(Map)</a></li>
                    <li><a href="#">All Data </a></li>
                    <li><a href="#">Inventory Report</a></li>


                </ul>
            </li>
            @if ($user_session->role != 3)
                <li class="open">
                    <a href="/settings/settings" class="js-right-sidebar">
                        <i class="material-icons">wb_iridescent</i>
                        <span>System Settings</span></a>
                </li>
             @endif



            </ul>
        </div>
    </div>
</aside>

<script>
    document.getElementById('loadRecentReferrals').addEventListener('click', function () {
        axios.get('/get-recent-referrals')
            .then(function (response) {
                document.getElementById('recentReferralsContainer').innerHTML = response.data;
            })
            .catch(function (error) {
                console.error('Error loading recent referrals:', error);
            });
    });
</script>

