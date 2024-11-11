<?php 
include("db.php");
if(isset($_POST['add_patents'])){
    $faculty_name = $_POST['facultyNamePatent'];
    $faculty_ID = $_POST['facultyIdPatent'];
    $PatentTitle = $_POST['patentTitle'];
    $fieldofInnovation = $_POST['fieldofInnovation'];
    $fillingDate = $_POST['fillingDate'];
    $noofAuthors = $_POST['noofAuthors'];
    $authorsPosition = $_POST['AuthorsPosition'];
    $uploadFile = $_POST['patentFile'];

    $query = "INSERT INTO patents (faculty_name,faculty_id,title,field_of_innovation,date,no_of_authors,authors_position,file_name) VALUES ('$faculty_name', '$faculty_ID', '$PatentTitle', '$fieldofInnovation', '$fillingDate', '$noofAuthors', '$authorsPosition', '$uploadFile')";
    if (mysqli_query($conn, $query)){
        $response = ['status' => 200, 'message' => 'Patent added sucessfully'];
        echo json_encode($response);
        return;
    } else {
        $response = ['status' => 500, 'message' => 'Failed to add patent'];
        echo json_encode($response);
    }
}
?>