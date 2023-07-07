<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');

include 'config.php';

$idToDelete = isset($_GET['id'])?$_GET['id']:die();


$sql = "DELETE FROM students WHERE id = {$idToDelete}";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Student Record Deleted.','status' => true));
}else{
    echo json_encode(array('message' => 'Student Record Not Deleted.','status' => false));
}


?>
