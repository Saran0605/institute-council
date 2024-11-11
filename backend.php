<?php
include("db.php");

//Accept reason
if (isset($_POST['add_Journal'])) {
    $fname = $_POST['fName'];
    $fid = $_POST['fId'];
    $type = $_POST['jType'];
    $title = $_POST['jTitle'];
    $volume = $_POST['jvolume'];
    $issue_no = $_POST['jisno'];
    $pages = $_POST['jPages'];
    $date = $_POST['jDate'];
    $link = $_POST['jLink'];
    $no_of_aut = $_POST['jNoAuth'];
    $aut_pos = $_POST['jAuthPos'];
    $file = $_POST['jFile'];
    $status = $_POST['jstatus'];
    $insertQuery = "INSERT INTO journal (type,title,volume,issuenumber,page,date,link,noauthor,position,uploadfile,faculty_name,faculty_id,status) VALUES ('$type', '$title', '$volume','$issue_no', '$pages', '$date','$link', '$no_of_aut', '$aut_pos','$file', '$fname', '$fid','$status')";
    if (mysqli_query($conn, $insertQuery)) {

        $response = ['status' => 200, 'message' => 'Complaint accepted and status updated successfully!'];
        echo json_encode($response);
        return;
    } else {
        $response = ['status' => 500, 'message' => 'Failed to insert data into manager table.'];
        echo json_encode($response);
        return;

    }
    
}

//data insert for awarness table






?>
