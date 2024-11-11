 <th>Faculty Name</th>
 <th> Faculty ID</th>
 <th>Type</th>
 <th>Title</th>
 <th>Volume</th>
 <th> Issue Number</th>
 <th>Pages</th>
 <th>Date</th>
 <th>Link</th>
 <th>No of Author</th>
 <th> Authors Position</th>
 <th>Status</th>
 <th>File</th>

<?php
 if (isset($_POST["add-program"])){
 $afname = $_POST['afName'];
 $afid = $_POST['afid'];
 $oname = $_POST['OName'];
 $pname = $_POST['apName'];
 $data = $_POST['date'];
 $place = $_POST['place'];
 $details = $_POST['pdetails'];
 $sp = $_POST['speaker'];
 $file = $_POST['afile'];

 $insertQuery = "INSERT INTO awarenessprogram (organiserName,programName,placeHeld,programDetails,speaker,uplodfile,date,faculty_id,status,faculty_name) VALUE('$oname','$pname','$place','$details','$speaker','$file','$data','$afid','$status','$afname')";
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
 ?>