<?php
include "connect.php";

$edit_id = $_POST['edit_id'];
$edit_title = $_POST['edit_title'];
$edit_isbn = $_POST['edit_isbn'];
$edit_author = $_POST['edit_author'];
$edit_date = $_POST['edit_date'];
$edit_publisher = $_POST['edit_publisher'];
$edit_genre = $_POST['edit_genre'];

$sql = "UPDATE `books` 
SET 
`title`='$edit_title',
`isbn` ='$edit_isbn',
`author`='$edit_author',
`date`='$edit_date',
`publisher`='$edit_publisher',
`genre`='$edit_genre' 
WHERE `id`='$edit_id' ";

if( mysqli_query($conn,$sql)){
    echo json_encode(array("statusCode" => 200));
}else{
    echo json_encode(array("statusCode" => 201));
}

mysqli_close($conn);

?>