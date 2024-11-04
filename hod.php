<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Institute Council App</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
     <!--   datatable link -->
     <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
</head>

<body>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
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
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="c" style="width: 100%;">

                    <ul class="nav nav-pills bg-nav-pills nav-justified my-3" id="researchTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0 active nav-bas" id="targets-tab" data-toggle="pill" href="#targets" role="tab" aria-controls="targets" aria-selected="true">Targets</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="journal-tab" data-toggle="pill" href="#journal" role="tab" aria-controls="journal" aria-selected="false">Journal</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#consultancy" role="tab" aria-controls="consultancy" aria-selected="false">Consultancy</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#funded_projects" role="tab" aria-controls="consultancy" aria-selected="false">Funded Projects</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#awareness_program" role="tab" aria-controls="consultancy" aria-selected="false">Awareness Programs</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#conference" role="tab" aria-controls="consultancy" aria-selected="false">Conferences</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#patent" role="tab" aria-controls="consultancy" aria-selected="false">Patents</a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="tab-content" id="researchTabContent">
                        <div class="tab-pane fade show active" id="targets" role="tabpanel" aria-labelledby="targets-tab">

                        </div>

                        <div class="tab-pane fade" id="journal" role="tabpanel" aria-labelledby="journal-tab">
                            <br>
                            <table id="journalTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Type</th>
                                        <th>Tittle</th>
                                        <th>Volume</th>
                                        <th>Issue Number</th>
                                        <th>Pages</th>
                                        <th>Date</th>
                                        <th>Link</th>
                                        <th>No.of Author</th>
                                        <th>Authors Position</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="consultancy" role="tabpanel" aria-labelledby="consultancy-tab">
                        <br>
                            <table id="consultancyTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Tittle</th>
                                        <th>Industry Type</th>
                                        <th>MOU Signed</th>
                                        <th>earnings</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="funded_projects" role="tabpanel" aria-labelledby="funded_projects-tab">
                        <br>
                            <table id="funded_projectsTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Project ID</th>
                                        <th>Funding Agency</th>
                                        <th>Link</th>
                                        <th>Requested Amount</th>
                                        <th>Tittle</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="awareness_program" role="tabpanel" aria-labelledby="awareness_program-tab">
                        <br>
                            <table id="awareness_programTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Organiser Name</th>
                                        <th>Name of the program</th>
                                        <th>Place Held</th>
                                        <th>Details of the program</th>
                                        <th>Speaker</th>
                                        <th>Photos</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="conference" role="tabpanel" aria-labelledby="conference-tab">
                        <br>
                            <table id="conferenceTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Tittle</th>
                                        <th>Organizer</th>
                                        <th>Publisher-Name</th>
                                        <th>Indexing-Details</th>
                                        <th>Level</th>
                                        <th>Date</th>
                                        <th>Title-of-papers</th>
                                        <th>ISBN</th>
                                        <th>No-of-Authors</th>
                                        <th>Authors-position</th>
                                        <th>Link</th>
                                        <th>Upload</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="patent" role="tabpanel" aria-labelledby="patent-tab">
                        <br>
                            <table id="patentTable" class="table table-striped table-bordered">
                                <thead style="background-color:black;color:white;width:50px;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>TItle</th>
                                        <th>Faculty Name</th>
                                        <th>Faculty ID</th>
                                        <th>Field of Innovation</th>
                                        <th>Filling Date</th>
                                        <th>Status</th>
                                        <th>No.of Authors</th>
                                        <th>Authors Position</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">
            2024 © M.Kumarasamy College of Engineering All Rights Reserved.
        </footer>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Side nav button and logout dropdown -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- DataTables -->
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>


    <script>
        $(document).ready(function() {
            // Initialize DataTables for each table
            $('#journalTable').DataTable();
            $('#consultancyTable').DataTable();
            $('#funded_projectsTable').DataTable();
            $('#awareness_programTable').DataTable();
            $('#conferenceTable').DataTable();
            $('#patentTable').DataTable();




        });
    </script>

</body>

</html>