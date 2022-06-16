<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
include("config.php");
$pid = $_GET['id'];
	$query = "UPDATE request1 SET rstatus = 'Approved' WHERE pid = '$pid'";
  
	$result = $con->query($query) or die(mysqli_error($con));
	
		/*$query1 = mysqli_query($con, "INSERT INTO property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor,date,request)
    select title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor,date,request from request WHERE pid = '$pid'") or die(mysqli_error($con));

	$query2=mysqli_query($con,"select * from request");
													while($row=mysqli_fetch_row($query2))
													{
	
	$error="";
$msg="";
	$title=$row['title'];
	$content=$row['pcontent'];
	$ptype=$row['type'];
	$bhk=$row['bhk'];	
	$stype=$row['stype'];
	$bed=$row['bedroom'];
	$bath=$row['bathroom'];
	$balc=$row['balcony'];
	$kitc=$row['kitchen'];
	$hall=$row['hall'];
	$floor=$row['floor'];	
	$asize=$row['size'];
	$price=$row['price'];
	$loc=$row['location'];
	$city=$row['city'];
	$state=$row['state'];	
	$feature=$row['feature'];
	$status=$row['status'];
	$uid=$_SESSION['uid'];
		
	$totalfloor=$row['totalfloor'];
	$date=$row['date'];


	

	$aimage=$row['pimage']['name'];
	$aimage1=$row['pimage1']['name'];
	$aimage2=$row['pimage2']['name'];
	$aimage3=$row['pimage3']['name'];
	$aimage4=$row['pimage4']['name'];
	
	$fimage=$row['mapimage']['name'];
	$fimage1=$row['topmapimage']['name'];
	$fimage2=$row['groundmapimage']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	move_uploaded_file($temp_name5,"admin/property/$fimage");
	move_uploaded_file($temp_name6,"admin/property/$fimage1");
	move_uploaded_file($temp_name7,"admin/property/$fimage2");
	
	$query1=mysqli_query($conn, "insert into property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor,date)
	values('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
	'$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$totalfloor','$date' WHERE pid = '$rid'") or die(mysqli_error($con));
	
	
													}*/
	
	
	if($result){
	  ?>
	  <script>
	  window.alert("Approved successfully");
	  window.location.href="request1.php";	  
	  </script>
		<?php
	?>
		<meta content="4; propertyapprove.php" http-equiv="refresh" />
	<?php
	}
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>George_Meelalii Real Estate</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>