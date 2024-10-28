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
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
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
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="zmdi-format-valign-top">
                            <div class="card-body">
                                <div class="card">
                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab" href="#dashboard"
                                                role="tab" aria-selected="true"><span class="hidden-sm-up"></span>
                                                <span class="hidden-xs-down"><i
                                                        class="mdi mdi-view-grid"></i><b>&nbsp Dashboard</b></span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#pending"
                                                role="tab" aria-selected="false"><span class="hidden-sm-up"></span>
                                                <div id="navref1">
                                                    <span class="hidden-xs-down">
                                                        <i class="fas fa-clock"></i>
                                                         Pending
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#approved" role="tab"
                                                aria-selected="false"><span class="hidden-sm-up"></span>
                                                <div id="navref2">
                                                    <span class="hidden-xs-down">
                                                        <i class="fas fa-check"></i> Approved 
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#completed" role="tab"
                                                aria-selected="false"><span class="hidden-sm-up"></span>
                                                <div id="navref3">
                                                    <span class="hidden-xs-down">
                                                        <i class="mdi mdi-check-all"></i> Completed
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#rejected" role="tab"
                                                aria-selected="false"><span class="hidden-sm-up"></span>
                                                <div id="navref4">
                                                    <span class="hidden-xs-down">
                                                        <i class="mdi mdi-close-circle"></i> Rejected
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-------------------------dashboard------------------------------>
                                    <div class="tab-content tabcontent-border">
                                        <div class="tab-pane p-20 active show" id="dashboard" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <div class="card-header"> -->
                                                    <h4 class="card-title m-b-0"><b></b></h4><br>

                                                    <br>
                                                    <div class="row">
                                                        <!-- Pending -->
                                                        <div class="col-12 col-md-3" style="margin-bottom: 40px">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:orange;">
                                                                            <i class="fas fa-clock"></i>

                                                                            <small class="font-light">Pending</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Faculty infra Pending -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:red;">
                                                                            <i class="fas fa-exclamation"></i>

                                                                            <small class="font-light">Faculty Incharge Pending</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Approved -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:rgb(14, 86, 239);">
                                                                            <i class="fas fa-check"></i>

                                                                            <small class="font-light">Approved</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Completed -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:rgb(70, 160, 70);">
                                                                            <i class="mdi mdi-check-all"></i>

                                                                            <small class="font-light">Completed</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-------------------------pending tab---------------------------->
                                        <div class="tab-pane p-20" id="pending" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>
                                                                Approve All
                                                                <button type="button" style="float:right; font-size:20px;"
                                                                    class="btn btn-success mdi mdi-check-all btnapproveall"></button><br>
                                                            </h4>
                                                        </div>

                                                        <div class="card-body">
                                                            <div class="table-container">
                                                                <table id="myTable1" class="table table-bordered table-striped fixed-size-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="pending status text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                <b>S.No</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                <b>Date Registered</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                <b>Faculty Name</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Problem Description</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Image</b>
                                                                            </th>

                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Action</b>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--------------approved tab-------------------->
                                        <div class="tab-pane p-20" id="approved" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-container">
                                                                <table id="myTable2" class="table table-bordered table-striped fixed-size-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="pending status text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                <b>S.No</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                <b>Date Registered</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                <b>Faculty Name</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Problem Description</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Image</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Status</b>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-----------completed tab----------->
                                        <div class="tab-pane p-20" id="completed" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-container">
                                                                <table id="myTable3" class="table table-bordered table-striped fixed-size-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="pending status text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                <b>S.No</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                <b>Date Registered</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                <b>Faculty Name</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Problem Description</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Before Image</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>After Image</b>
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!----------rejected tab------->
                                        <div class="tab-pane p-20" id="rejected" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-container">
                                                                <table id="myTable4" class="table table-bordered table-striped fixed-size-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="pending status text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 40px;">
                                                                                <b>S.No</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 80px;">
                                                                                <b>Date Registered</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white; width: 70px;">
                                                                                <b>Faculty Name</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Problem Description</b>
                                                                            </th>
                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Image</b>
                                                                            </th>

                                                                            <th class="text-center"
                                                                                style="background-color: #7460ee; background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color: white;">
                                                                                <b>Status</b>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        <b>
            2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
            Developed and Maintained by Technology Innovation Hub.
        </b>
    </footer>
    </div>
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

</body>

</html>