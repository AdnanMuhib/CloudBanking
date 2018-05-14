<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title') - Cloud Banking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="dash/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="dash/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="dash/css/component.css" />
    <link rel="stylesheet" type="text/css" href="dash/css/owl.carousel.css" />

    <link href="dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dash/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="dash/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="dash/css/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="dash/css/webarch.css " rel="stylesheet " type="text/css " />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class=" ">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner ">
            <div class="header-seperation ">
                <ul class="nav pull-left notifcation-center visible-xs visible-sm ">
                    <li class="dropdown ">
                        <a href="#main-menu " data-webarch="toggle-left-side ">
                            <i class="material-icons ">menu</i>
                        </a>
                    </li>
                </ul>
                <!-- BEGIN LOGO -->
                <a href="index.html ">
                    <h3 style="color:white; padding-left: 20px; padding-top:5px; font-weight:500">
                        Cloud Banking
                    </h3>
                    <!-- <img src="assets/img/logo.png " class="logo " alt=" " data-src="assets/img/logo.png " data-src-retina="assets/img/logo2x.png "
                      width="106 " height="21 " /> -->
                </a>
                <!-- END LOGO -->

            </div>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <div class="header-quick-nav ">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="pull-right ">
                    <ul class="nav quick-section" style="padding-top:5px; padding-right:10px; font-size:15px">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                       </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    </ul>

                </div>
                <div id="notification-list " style="display:none ">
                    <div style="width:300px ">
                        <div class="notification-messages info ">
                            <div class="user-profile ">
                                <img src="assets/img/profiles/d.jpg " alt=" " data-src="assets/img/profiles/d.jpg " data-src-retina="assets/img/profiles/d2x.jpg "
                                     width="35 " height="35 ">
                            </div>
                            <div class="message-wrapper ">
                                <div class="heading ">
                                    David Nester - Commented on your wall
                                </div>
                                <div class="description ">
                                    Meeting postponed to tomorrow
                                </div>
                                <div class="date pull-left ">
                                    A min ago
                                </div>
                            </div>
                            <div class="clearfix "></div>
                        </div>
                        <div class="notification-messages danger ">
                            <div class="iconholder ">
                                <i class="icon-warning-sign "></i>
                            </div>
                            <div class="message-wrapper ">
                                <div class="heading ">
                                    Server load limited
                                </div>
                                <div class="description ">
                                    Database server has reached its daily capicity
                                </div>
                                <div class="date pull-left ">
                                    2 mins ago
                                </div>
                            </div>
                            <div class="clearfix "></div>
                        </div>
                        <div class="notification-messages success ">
                            <div class="user-profile ">
                                <img src="assets/img/profiles/h.jpg " alt=" " data-src="assets/img/profiles/h.jpg " data-src-retina="assets/img/profiles/h2x.jpg "
                                     width="35 " height="35 ">
                            </div>
                            <div class="message-wrapper ">
                                <div class="heading ">
                                    You haveve got 150 messages
                                </div>
                                <div class="description ">
                                    150 newly unread messages in your inbox
                                </div>
                                <div class="date pull-left ">
                                    An hour ago
                                </div>
                            </div>
                            <div class="clearfix "></div>
                        </div>
                    </div>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid ">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar " id="main-menu ">
            <!-- BEGIN MINI-PROFILE -->
            <div class="page-sidebar-wrapper scrollbar-dynamic " id="main-menu-wrapper ">
                <div class="user-info-wrapper sm ">

                    <div class="user-info sm ">
                        <div class="username ">
                            {{ ucfirst(Auth::user()->name) }}
                        </div>
                    </div>
                </div>
                <!-- END MINI-PROFILE -->
                <!-- BEGIN SIDEBAR MENU -->

                <ul>
                    <li class=" active ">
                        <a href="index.html ">
                            <i class="fa fa-home "></i>
                            <span class="title ">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html ">
                            <i class="fa fa-money "></i>
                            <span class="title ">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html ">
                            <i class="material-icons ">home</i>
                            <span class="title ">Cheque</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html ">
                            <i class="material-icons ">home</i>
                            <span class="title ">Drafts</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.html ">
                            <i class="material-icons ">home</i>
                            <span class="title ">Employees</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.html ">
                            <i class="material-icons ">home</i>
                            <span class="title ">Currency Rate</span>
                        </a>
                    </li>

                </ul>
                </li>
                <li class="hidden-lg hidden-md hidden-xs " id="more-widgets ">
                    <a href="javascript:; ">
                        <i class="material-icons "></i>
                    </a>


                    <div class="side-bar-widgets ">
                        <p class="menu-title sm ">
                            FOLDER
                            <span class="pull-right ">
                                <a href="# " class="create-folder ">
                                    <i class="material-icons ">add</i>
                                </a>
                            </span>
                        </p>
                        <ul class="folders ">
                            <li>
                                <a href="# ">
                                    <div class="status-icon green "></div>
                                    My quick tasks
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    <div class="status-icon red "></div>
                                    To do list
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    <div class="status-icon blue "></div>
                                    Projects
                                </a>
                            </li>
                            <li class="folder-input " style="display:none ">
                                <input type="text " placeholder="Name of folder " class="no-boarder folder-name " name=" ">
                            </li>
                        </ul>
                        <p class="menu-title ">PROJECTS </p>
                        <div class="status-widget ">
                            <div class="status-widget-wrapper ">
                                <div class="title ">
                                    Freelancer
                                    <a href="# " class="remove-widget ">
                                        <i class="material-icons ">close</i>
                                    </a>
                                </div>
                                <p>Redesign home page</p>
                            </div>
                        </div>
                        <div class="status-widget ">
                            <div class="status-widget-wrapper ">
                                <div class="title ">
                                    envato
                                    <a href="# " class="remove-widget ">
                                        <i class="material-icons ">close</i>
                                    </a>
                                </div>
                                <p>Statistical report</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix "></div>
                    <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <a href="# " class="scrollup ">Scroll</a>
        <div class="footer-widget ">
            <div class="progress transparent progress-small no-radius no-margin ">
                <div class="progress-bar progress-bar-success animate-progress-bar " data-percentage="79% " style="width: 79%; "></div>
            </div>

        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content ">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config " class="modal hide ">
                <div class="modal-header ">
                    <button data-dismiss="modal " class="close " type="button "></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body "> Widget settings form goes here </div>
            </div>
            <div class="clearfix "></div>
            <div class="content sm-gutter ">
                <div class="page-title ">
                </div>
                <!-- BEGIN DASHBOARD TILES -->
                <div class="row ">
                    <div class="col-md-4 col-vlg-3 col-sm-6 ">
                        <div class="tiles green m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL SALES </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Visits</span>
                                        <span class="item-count animate-number semi-bold " data-value="2415 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="751 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1547 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="64.8% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 col-sm-6 ">
                        <div class="tiles blue m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL VISITS </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Visits</span>
                                        <span class="item-count animate-number semi-bold " data-value="15489 " data- animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="551 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1450 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="54% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 col-sm-6 ">
                        <div class="tiles purple m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">SERVER LOAD </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Load</span>
                                        <span class="item-count animate-number semi-bold " data-value="5695 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="568 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="12459 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="90% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-vlg-3 visible-xlg visible-sm col-sm-6 ">
                        <div class="tiles red m-b-10 ">
                            <div class="tiles-body ">
                                <div class="controller ">
                                    <a href="javascript:; " class="reload "></a>
                                    <a href="javascript:; " class="remove "></a>
                                </div>
                                <div class="tiles-title text-black ">OVERALL SALES </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Overall Sales</span>
                                        <span class="item-count animate-number semi-bold " data-value="5669 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper transparent ">
                                        <span class="item-title ">Today's</span>
                                        <span class="item-count animate-number semi-bold " data-value="751 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="widget-stats ">
                                    <div class="wrapper last ">
                                        <span class="item-title ">Monthly</span>
                                        <span class="item-count animate-number semi-bold " data-value="1547 " data-animation-duration="700 ">0</span>
                                    </div>
                                </div>
                                <div class="progress transparent progress-small no-radius m-t-20 " style="width:90% ">
                                    <div class="progress-bar progress-bar-white animate-progress-bar " data-percentage="64.8% "></div>
                                </div>
                                <div class="description ">
                                    <span class="text-white mini-description ">
                                        4% higher
                                        <span class="blend ">than last month</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD TILES -->
                <!-- END ANIMATED TILES -->

                <div>
                    @section('body')
                    @show
                </div>

                <div class="chat-input-wrapper " style="display:none ">
                    <textarea id="chat-message-input " rows="1 " placeholder="Type your message "></textarea>
                </div>
                <div class="clearfix "></div>
            </div>
        </div>
    </div>
    <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN CORE JS FRAMEWORK-->
    <script src="dash/js/pace.min.js " type="text/javascript "></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="dash/js/jquery-1.11.3.min.js " type="text/javascript "></script>
    <script src="dash/js/bootstrap.min.js " type="text/javascript "></script>
    <script src="dash/js/jquery.blockui.min.js " type="text/javascript "></script>
    <script src="dash/js/jquery.unveil.min.js " type="text/javascript "></script>
    <script src="dash/js/jquery.scrollbar.min.js " type="text/javascript "></script>
    <script src="dash/js/jquery.animateNumbers.js " type="text/javascript "></script>
    <script src="dash/js/jquery.validate.min.js " type="text/javascript "></script>
</body>

</html>
