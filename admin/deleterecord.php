<?php

global $conn;
include('../dbcon.php');
$delete_id = $_GET['Delete'];
$profile_pic = $_GET['Picture'];


$sql = "delete  from `student` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	unlink("../databaseimg/".$profile_pic);
	echo '<script>window.open("deletestudent.php?deleted=تم حذف السجل","_self")</script>';
}

 ?>