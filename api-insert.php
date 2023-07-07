<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);



$sname = $data['sname'];
$sage = $data['sage'];
$scity = $data['scity'];


$sql = "INSERT INTO students(student_name,age,city) VALUES ('{$sname}','{$sage}','{$scity}')";


if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Student Record Inserted.','status' => true));
}else{
    echo json_encode(array('message' => 'Student Record Not Inserted.','status' => false));
}



?>
