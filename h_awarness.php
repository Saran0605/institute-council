<?php
include("db.php");
$query = "SELECT * FROM awarenessprogram";
$result = mysqli_query($conn, $query);
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
                    <a class="navbar-brand" href="index.html">
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

                        <!--Ragul work don't enter-->
                        <div class="tab-pane fade" id="journal" role="tabpanel" aria-labelledby="journal-tab">
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#journalModal">Add Journal</button>
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
                                                <input type="file" id="jFile" name="jFile" placeholder="upload journal">
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
                        <!------awareness tab------>
                        <div class="tab-pane fade" id="awareness_program" role="tabpanel" aria-labelledby="awareness_program-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#awarnessModal">Add +</button>
                            <br>
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
                                    <?php
                                    $s = 1;
                                    while ($row = mysqli_fetch_array($result)) {


                                    ?>
                                        <tr>
                                            <td><?php echo $s ?></td>
                                            <td><?php echo $row["faculty_name"] ?></td>
                                            <td><?php echo $row["faculty_id"] ?></td>
                                            <td><?php echo $row["organiserName"] ?></td>
                                            <td><?php echo $row["programName"] ?></td>
                                            <td><?php echo $row["placeHeld"] ?></td>
                                            <td><?php echo $row["programDetails"] ?></td>
                                            <td><?php echo $row["speaker"] ?></td>
                                            <td><?php echo $row['uploadfile'] ?></td>
                                            <td><?php echo $row["status"] ?> </td>
                                        </tr>
                                    <?php
                                        $s++;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <!------awareness modal----->
                        <div class="modal fade" id="awarnessModal" tabindex="-1" role="dialog" aria-labelledby="awarnessModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="awarnessModalLabel">Awarness Program</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewprogram">
                                        <div class="modal-body">

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Faculty Name</label>
                                                    <input type="text" id="afName" name="afName" placeholder="Faculty Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Organiser Name</label>
                                                    <input type="text" id="OName" name="OName" placeholder="Organiser Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Name of the program</label>
                                                    <input type="text" id="apName" name="apName" placeholder="Name of the program">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Date</label><br>
                                                    <input type="date" id="date" name="date" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Place Held</label>
                                                    <input type="text" id="place" name="place" placeholder="Place Held">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Details of the Program</label>
                                                    <input type="text" id="pdetails" name="pdetails" placeholder="Details of the Program">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Speaker</label>
                                                    <input type="text" id=">Speaker" name="speaker" placeholder="Speaker Name">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label>Upload file</label>
                                                        <input type="text" id="afile" name="afile" placeholder="Upload file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary " id="add-new-program">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="conference" role="tabpanel" aria-labelledby="conference-tab">
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
    <!-- jQuery -->
    <script src="path/to/jquery.min.js"></script>
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

            $.ajax({
                type: "POST",
                url: "backend.php",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    var res = jQuery.parseJSON(response);

                    if (res.status == 200) {

                        alert("Sucessfully!!");
                        $("#principalModal").modal("hide");
                        $("#principal_Form")[0].reset();
                    } else if (res.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                },
            });


        })

        $(document).on("submit", "#add-new-program", function(e) {
            e.preventDefault();
            var data = new Formdata(this);
            data.append("add-program", true);
            console.log(data);
            $.ajax({
                type: "POST",
                url: "backend.php",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    var res = jQuery.parseJSON(response);
                    console.log("res")
                    if (res.status == 200) {
                        alert("added sucessfully!!");
                        $("#awarnessModal").modal("hide");
                        $("#addNewprogram")[0].reset();
                        $("#awareness_program").load(location.herf + "#awareness_program")
                    } else if (res.status == 500) {
                        alert("something something");
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