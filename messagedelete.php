<?php
include("config.php");
$uid = $_GET['id'];
$sql = "DELETE FROM message WHERE mid = {$uid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Message Deleted</p>";
	header("Location:message.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Message Not Deleted</p>";
	header("Location:message.php?msg=$msg");
}
mysqli_close($con);
?>
