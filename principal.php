<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Institute-Council</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <style>
        /* css for card boady boder */
        .cardbox {

            border-radius: 20px;

        }
        .isize{
            width: 35px;
            height: 35px;
            margin-bottom: 10;
        }
    </style>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="principal.php">
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
                            <img src="assets\images\logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="assets\images\logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="principal.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Research</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="p_reports.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Reports</span></a></li>
                                <li class="sidebar-item"><a href="p_journal.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Journal</span></a></li>
                                <li class="sidebar-item"><a href="p_consultancy.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Consultancy</span></a></li>
                                <li class="sidebar-item"><a href="p_funds.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Funded Projects</span></a></li>
                                <li class="sidebar-item"><a href="p_awareness.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Awareness Program</span></a></li>
                                <li class="sidebar-item"><a href="p_conference.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Conferences</span></a></li>
                                <li class="sidebar-item"><a href="p_patterns.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Patterns</span></a></li>




                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 ">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/hindex.png" class="isize">
                                <h6 class="text-black">HIndex</h6>
                                <h3>1003</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/Citations.png"alt="citations" class="isize">
                                <h6 class="text-black">Citations</h6>
                                <h3>10</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/Awareness Programs.png"alt="Awareness Programs" class="isize">
                                <h6 class="text-black">Awareness Programs</h6>
                                <h3>103</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/conference.png" alt="Conference" class="isize">
                                <h6 class="text-black">Conference</h6>
                                <h3>03</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/Consultancy.png" alt="Consultancy" class="isize">
                                <h6 class="text-black">Consultancy</h6>
                                <h3>10</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                                <img src="assets/images/Funded Projects.png" alt="Funded Projects" class="isize">
                                <h6 class="text-black">Funded Projects</h6>
                                <h3>100i3</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover  cardbox">
                            <div class="box bg-light text-center">
                               <img src="assets/images/Journal.png" alt="Journal" class="isize">
                                <h6 class="text-black">Journal</h6>
                                <h3>100883</h3>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover cardbox">
                            <div class="box bg-light text-center">
                               <img src="assets/images/Patents.png" alt="Patents" class="isize">
                                <h6 class="text-black">Patents</h6>
                                <h3>1003</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 row">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="header-title">Overall Target Stats (By Count)</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h4 class="header-title">Awareness Program</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="6.666666666666667"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 6.667%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 1</span><span>Target: 15</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4 class="header-title">Conference</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="18.181818181818183"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 18.182%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 2</span><span>Target: 11</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4 class="header-title">Consultancy</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="7.6923076923076925"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 7.692%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 1</span><span>Target: 13</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4 class="header-title">Funded Projects</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="5" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 5%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 1</span><span>Target: 20</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4 class="header-title">Journal</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="2.631578947368421"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 2.632%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 1</span><span>Target: 38</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h4 class="header-title">Patents</h4>
                                <div class="progress" style="height:15px">
                                    <div role="progressbar" class="progress-bar bg-dark" aria-valuenow="4.166666666666666"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 4.167%;"></div>
                                </div>
                                <div class="d-flex justify-content-between"><span>Count: 1</span><span>Target: 24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>