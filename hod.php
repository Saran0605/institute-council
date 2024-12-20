<?php
include("db.php");
?>

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

        /* Modal Overlay */
        .modal.fade {
            background-color: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
        }

        /* Modal Dialog */
        .modal-dialog {
            max-width: 600px;
            /* Set max width for larger screens */
            margin: 1.75rem auto;
            /* Center modal vertically */
        }

        /* Modal Content */
        .modal-content {
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
        }

        /* Modal Header */
        .modal-header {
            background-color: #007bff;
            /* Bootstrap primary color */
            color: white;
            /* White text color */
            border-bottom: none;
            /* Remove border */
        }

        .modal-title {
            font-weight: 600;
            /* Bold title */
        }

        /* Close Button */
        .close {
            color: white;
            /* White close button */
        }

        /* Modal Body */
        .modal-body {
            background-color: #f8f9fa;
            /* Light background color */
            padding: 20px;
            /* Padding around content */
        }

        /* Form Labels */
        .modal-body label {
            font-weight: 500;
            /* Semi-bold labels */
        }

        /* Form Row */
        .form-row {
            display: flex;
            /* Flexbox layout */
            flex-wrap: wrap;
            /* Wrap on smaller screens */
        }

        /* Form Group */
        .form-group {
            flex: 1;
            /* Take available space */
            min-width: 250px;
            /* Minimum width for each input */
            margin-bottom: 15px;
            /* Spacing between inputs */
        }

        /* Input Fields */
        .modal-body input[type="text"],
        .modal-body input[type="number"],
        .modal-body input[type="file"] {
            width: 100%;
            /* Full width inputs */
            padding: 10px;
            /* Padding inside inputs */
            border: 1px solid #ced4da;
            /* Light border */
            border-radius: 4px;
            /* Rounded input corners */
            transition: border-color 0.3s;
            /* Transition effect */
        }

        .modal-body input[type="text"]:focus,
        .modal-body input[type="number"]:focus {
            border-color: #007bff;
            /* Change border color on focus */
            outline: none;
            /* Remove outline */
        }

        /* Modal Footer */
        .modal-footer {
            border-top: none;
            /* Remove border */
        }

        .modal-footer .btn {
            width: 100px;
            /* Set a fixed width for buttons */
        }

        .modal-footer .btn-secondary {
            background-color: #6c757d;
            /* Secondary button color */
        }

        /* Add a hover effect for buttons */
        .modal-footer .btn:hover {
            opacity: 0.9;
            /* Slightly fade on hover */
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="hod.php">
                        <b class="logo-icon p-l-1">
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
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#consultancytab" role="tab" aria-controls="consultancy" aria-selected="false">Consultancy</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#funded_projects" role="tab" aria-controls="consultancy" aria-selected="false">Funded Projects</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#awareness_program" role="tab" aria-controls="consultancy" aria-selected="false">Awareness Programs</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#conferencetab" role="tab" aria-controls="consultancy" aria-selected="false">Conferences</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#patent" role="tab" aria-controls="consultancy" aria-selected="false">Patents</a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="tab-content" id="researchTabContent">

                        <!------Target Tab--------->
                        <div class="tab-pane fade show active" id="targets" role="tabpanel" aria-labelledby="targets-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="header-title">Current Month Target</h4><button class="btn btn-dark" data-toggle="modal" data-target="#targetModal">Set Month's Target</button>
                                            </div><br>
                                            <li class="list-group-item d-flex justify-content-between align-items-center"><span class="text-danger">Target not set for the current month</span></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------Modal for targets---->
                        <div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="targetModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                        <div>
                                            <div class="modal-body">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label>Awareness Programs</label>
                                                        <input type="number" value="0" id="awarenessprogram" name="awarenessprogram" fdprocessedid="6iga4g">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Conference</label>
                                                        <input type="number" value="0" id="conference" name="conference" fdprocessedid="zgm22i">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Consultancy</label>
                                                        <input type="number" value="0" id="consultancy" name="consultancy" fdprocessedid="zgm22i">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Funded Projects</label>
                                                        <input type="number" value="0" id="fundedprojects" name="fundedprojects" fdprocessedid="zgm22i">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Journals</label>
                                                        <input type="number" value="0" id="journals" name="journals" fdprocessedid="zgm22i">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Patents</label>
                                                        <input type="number" value="0" id="patents" name="patents" fdprocessedid="zgm22i">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Set Target</button><br>

                                                    <div class="modal-footer" style="background-color:white">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!------journel tab------>
                        <?php
                        $sql1 = "SELECT * FROM journal"; 
                        $result1 = mysqli_query($conn,$sql1);
                        ?>

                        <div class="tab-pane fade" id="journal" role="tabpanel" aria-labelledby="journal-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#journalModal">Add +</button>
                            <br> <br>
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
                                    <?php
                                    $s=1;
                                    while($row = mysqli_fetch_assoc($result1)){ 
                                    ?>

                                    <?php
                                     $s++;
                                    }
                                     ?>

                                </tbody>
                            </table>
                        </div>

                        <!--Modal for Journal-->
                        <div class="modal fade" id="journalModal" tabindex="-1" role="dialog" aria-labelledby="journalModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="journalModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewJournal">
                                        <div class="modal-body">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fName">Enter Name:</label>
                                                    <input type="text" id="fName" name="fName" placeholder="enter your name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fId">Enter Id:</label>
                                                    <input type="number" id="fId" name="fId" placeholder="enter your id">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="jType">Journal Type:</label>
                                                <input type="text" id="jType" name="jType" placeholder="enter journal type">
                                            </div>
                                            <div class="form-group">
                                                <label for="jTitle">Journal Title:</label>
                                                <input type="text" id="jTitle" name="jTitle" placeholder="enter journal title">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="jvolume">Journal Volume:</label>
                                                    <input type="text" id="jvolume" name="jvolume" placeholder="enter journal volume">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="jisno">Issue Number:</label>
                                                    <input type="text" id="jisno" name="jisno" placeholder="enter journal issue no">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="jPages">Pages:</label>
                                                    <input type="text" id="jPages" name="jPages" placeholder="enter no of pages">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="jDate">Date:</label>
                                                    <input type="text" id="jDate" name="jDate" placeholder="enter journal Date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jLink">Link:</label>
                                                <input type="text" id="jLink" name="jLink" placeholder="enter journal link">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="jNoAuth">No of Authors:</label>
                                                    <input type="text" id="jNoAuth" name="jNoAuth" placeholder="enter no of authors">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="jAuthPos">Author Position:</label>
                                                    <input type="text" id="jAuthPos" name="jAuthPos" placeholder="enter author position">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jFile">Upload File:</label>
                                                <input type="text" id="jFile" name="jFile" placeholder="upload journal">
                                            </div>

                                            <input type="hidden" id="jstatus" name="jstatus" value="pending">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!----------Consultancy tab------->
                        <div class="tab-pane fade" id="consultancytab" role="tabpanel" aria-labelledby="consultancy-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#consultancyModal">Add +</button>
                            <br> <br>
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

                        <!-----Consultancy modal---->
                        <div class="modal fade" id="consultancyModal" tabindex="-1" role="dialog" aria-labelledby="journalModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="journalModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Faculty Name</label>
                                                <input type="text" id="facName" name="facName" placeholder="enter faculty's name">
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="title" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="industryType">Industry type</label>
                                                <select id="industryType" name="industryType" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Technology">Technology</option>
                                                    <option value="Healthcare">Healthcare</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control" id="date" name="date">
                                            </div>
                                            <div class="form-group">
                                                <label for="isMousigned">Is MOU Signed</label>
                                                <select id="isMousigned" name="isMousigned" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Earnings</label>
                                                <input type="number" id="earnings" name="earnings">
                                            </div>
                                            <div class="form-group">
                                                <label>Upload File</label>
                                                <input type="file" id="consultuploadFile" name="consultuploadFile" placeholder="upload journal">
                                            </div>
                                            <input type="hidden" id="jstatus" name="jstatus" value="pending">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--------funded projects tab------------->
                        <div class="tab-pane fade" id="funded_projects" role="tabpanel" aria-labelledby="funded_projects-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#fundedprojectsModal">Add +</button>
                            <br><br>
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
                        <!-------funded projects modal--------->
                        <div class="modal fade" id="fundedprojectsModal" tabindex="-1" role="dialog" aria-labelledby="journalModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="journalModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form >
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Faculty Name</label>
                                                <input type="text" id="facNamefund" name="facNamefund" placeholder="enter faculty's name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Type">Type</label>
                                                <select id="Type" name="Type" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Funded Projects">Funded Projects</option>
                                                    <option value="Sponsored Research">Sponsored Research</option>
                                                    <option value="Grants">Grants</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" id="fundtitle" name="fundtitle">
                                            </div>
                                            <div class="form-group">
                                                <label for="funddate">Date</label>
                                                <input type="date" class="form-control" id="funddate" name="funddate">
                                            </div>
                                            <div class="form-group">
                                                <label>Project Id</label>
                                                <input type="text" id="projectId" name="projectId">
                                            </div>
                                            <div class="form-group">
                                                <label>Funding Agency</label>
                                                <input type="text" id="fundagency" name="fundagency">
                                            </div>
                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="url" class="form-control" id="link" name="link">
                                            </div>
                                            <div class="form-group">
                                                <label>Requested Amount</label>
                                                <input type="number" id="reqamount" name="reqamount">
                                            </div>
                                            <div class="form-group">
                                                <label>Upload File</label>
                                                <input type="file" id="consultuploadFile" name="consultuploadFile" placeholder="upload journal">
                                            </div>
                                            <input type="hidden" id="jstatus" name="jstatus" value="pending">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

                        <div class="tab-pane fade" id="conferencetab" role="tabpanel" aria-labelledby="conference-tab">
                            <br>
                            <div class="table-responsive">
                                <table id="conferenceTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Tittle</th>
                                            <th>Organizer</th>
                                            <th>Publisher Name</th>
                                            <th>Indexing-Details</th>
                                            <th>Level</th>
                                            <th>Date</th>
                                            <th>Title of papers</th>
                                            <th>ISBN</th>
                                            <th>No of Authors</th>
                                            <th>Authors position</th>
                                            <th>Link</th>
                                            <th>Upload</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
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
            $('#conferenceTable').DataTable({
                "lengthChange": true,
                "ordering": false,
                "autoWidth": true,
                "responsive": true,
            });
            $('#patentTable').DataTable();
        });

        $(document).on('submit', "#addNewJournal", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            data.append("add_Journal", true);
            console.log("response anupurathuku munadiii!!");

            $.ajax({
                type: "POST",
                url: "backend.php",
                data: data,
                processData: false,
                contentType: false,            
                success: function(response) {
                    
                    var res = jQuery.parseJSON(response);
                    console.log("response vathute");
                    if (res.status == 200) {

                        alert("Sucessfully!!");
                        $("#journalModal").modal("hide");
                        $("#addNewJournal")[0].reset();
                    } else if (res.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                },
            });


        })
    </script>

</body>

</html>