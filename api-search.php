<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'config.php';

$searchTerm = isset($_GET['search'])?$_GET['search']:die();

$sql = "SELECT * FROM students WHERE student_name LIKE '%{$searchTerm}%' OR city LIKE '%{$searchTerm}%'";

$result = mysqli_query($conn,$sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result) > 0 ){
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array('message' => 'No Record Found.','status' => false));
}


?>
