<?php
include("db.php");

if(isset($_POST['data'])){
    $fname = $_POST["facultyName"];
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


if(isset($_POST['editu'])){
    $id = mysqli_real_escape_string($conn,$_POST['user_id']);
    $query="SELECT * FROM consultancy WHERE id='$id'";
    $data = mysqli_query($conn,$query);
    $row = mysqli_fetch_array(($data));
    if($data){
        $res=[
            "status"=>200,
            "message"=>"fetched succesfully",
            "data"=>$row

        ];
        echo json_encode(($res));
        return;
    }
    else{
        $res=[
            "status"=>500,
            "message"=>"no data found for this id"
        ] ; 
        echo json_encode(($res));  
        return;
    }
}

if(isset($_POST['save_edited'])){
    $id=$_POST['id'];
    $fname = mysqli_real_escape_string($conn, $_POST['efacName']);
    $title = mysqli_real_escape_string($conn, $_POST['etitle']);
    $indtype = mysqli_real_escape_string($conn, $_POST['eindustryType']);
    $date = mysqli_real_escape_string($conn, $_POST['edate']);
    $mou = mysqli_real_escape_string($conn, $_POST['eisMousigned']);
    $earnings = mysqli_real_escape_string($conn, $_POST['eearnings']);

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

    $query = "UPDATE consultancy SET type='$indtype', title='$title', date='$date',earnings='$earnings', moe='$mou', uploadfile='$upldfile', faculty_name=='$fname'";
    
    if (mysqli_query($conn, $query)) {
        $res = [
            "status" => 200,
            "message" => "updated successfully"
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
