<?php
include("db.php");

if(isset($_POST['data'])){
    $fname = $_POST["facName"];
    $title = $_POST["title"];
    $indtype = $_POST["industryType"];
    $date = $_POST["date"];
    $mou = $_POST["isMousigned"];
    $earn = $_POST["earnings"];
    
    // Handling file upload
    if (isset($_FILES['consultuploadFile']) && $_FILES['consultuploadFile']['error'] === 0) {
        $upldfile = $_FILES['consultuploadFile']['name'];
        $tempname = $_FILES['consultuploadFile']['tmp_name'];
        
        // Ensure the 'uploads' directory exists and is writable
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        move_uploaded_file($tempname, $upload_dir . $upldfile);
    } else {
        $upldfile = ""; // Handle cases where no file is uploaded
    }

    $query = "INSERT INTO consultancy(type, title, date, earnings, moe, uploadfile, faculty_name) VALUES('$indtype','$title','$date','$earn','$mou','$upldfile','$fname')";
    
    if (mysqli_query($conn, $query)) {
        $res = [
            "status" => 200,
            "message" => "success"
        ];
        echo json_encode($res);
    } else {
        $res = [
            "status" => 500,
            "message" => "failure"
        ];
        echo json_encode($res);
    }
}
?>
