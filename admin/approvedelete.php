<?php
include("config.php");
$rid = $_GET['id'];
$sql = "DELETE FROM request WHERE rid = {$rid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Request Deleted</p>";
	header("Location:propertyapprove.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Request Not Deleted</p>";
	header("Location:propertyapprove.php?msg=$msg");
}
mysqli_close($con);
?>