<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<style>
        .bg-nav-pills {
            background-color: #f8f9fa;
        }

        .nav-pills .nav-link {
            color: #000;
            font-weight: 500;
            padding: 12px 2x;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: #fff;
            transition: 0.3s;
        }

        .nav-justified .nav-item {
            flex: 1;
            text-align: center;
        }

        /* table class name */
        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .table {
            margin-top: 10px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Institute Council</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!--   datatable link -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <style>
        .basic-nav {

            text-decoration: none;
            color: black;
            margin: 0;
            padding: 10px 240px;
            border: 2px solid while;
            text-align: center;
            background-color: white;


        }


        .nav a:hover {
            background-color: blue;
            color: white;
        }

        .haii{
            text-decoration: none;
            color: black;
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
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10" style="padding-left: 5px;">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <span class="logo-text">
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="principal.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Research</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="p_reports.php" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu">Reports</span></a>
                                </li>
                                <li class="sidebar-item"><a href="p_journal.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Journal</span></a>
                                </li>
                                <li class="sidebar-item"><a href="p_consultancy.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Consultancy</span></a>
                                </li>
                                <li class="sidebar-item"><a href="p_funds.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Funded
                                            Projects</span></a></li>
                                <li class="sidebar-item"><a href="p_awareness.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Awareness
                                            Program</span></a></li>
                                <li class="sidebar-item"><a href="p_conference.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Conferences</span></a>
                                </li>
                                <li class="sidebar-item"><a href="p_patterns.php" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu">Patterns</span></a>
                                </li>




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
                        <h4 class="page-title">Reports</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <br>
                    <ul class="nav nav-pills bg-nav-pills nav-justified my-3" id="researchTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0 active nav-bas" id="rag1-tab" data-toggle="pill" href="#rag1" role="tab" aria-controls="Entries" aria-selected="true">Department Report</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="rag2-tab" data-toggle="pill" href="#rag2" role="tab" aria-controls="Report" aria-selected="false">Faculty Wise Report</a>
                        </li>
                    </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active card" id="rag1" role="tabpanel" aria-labelledby="rag1-tab">
                        &nbsp;
                        <h4 style="margin-left: 10px; color:black;"> Faculty Report</h4>
                        <br>
                        <table id="report1" class="table table-striped table-bordered">
                            <thead style="background-color:black;color:white">
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Awareness Program</th>
                                    <th>Conference</th>
                                    <th>Consultancy</th>
                                    <th>Funded Projects</th>
                                    <th>Journals</th>
                                    <th>Patents</th>
                                </tr>
                            </thead>

                        </table>
                        <br>
                    </div>


                    <div class="tab-pane fade card" id="rag2" role="tabpanel" aria-labelledby="rag2-tab">
                        &nbsp;
                        <h4 style="margin-left: 10px; color:black;">Faculty Wise Report</h4>
                        <br>
                        <table id="report2" class="table table-striped table-bordered">
                            <thead style="background-color:black;color:white">
                                <tr>
                                    <th>S.No</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Awareness Program</th>
                                    <th>Conference</th>
                                    <th>Consultancy</th>
                                    <th>Funded Projects</th>
                                    <th>Journals</th>
                                    <th>Patents</th>



                                </tr>
                            </thead>

                        </table>
                        <br>
                    </div>

                </div>



            </div>
            <footer class="footer text-center">
                2024 © M.Kumarasamy College of Engineering All Rights Reserved.
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
    <!--   datatable link -->
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#report1').DataTable();
            $('#report2').DataTable();
        });
    </script>

</body>

</html>