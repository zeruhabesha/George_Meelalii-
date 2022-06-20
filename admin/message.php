         <?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:index.php");
}    
////// code
$error='';
$msg='';
if(isset($_POST['submit']))
{
$aid = $_GET['aid'];
		$uid=$_POST['uid'];

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	$message=$_POST['messages'];
	
	
	$status='0';
	if(!empty($name) && !empty($phone) && !empty($message))
	{
		
		$sql="INSERT INTO message (uid,name,email,phone,messages,aid,status) VALUES ('$uid','$name','$email','$phone','$message','$aid','$status')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}				?>   				

<!DOCTYPE html>
<html lang="en">

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
   <style>
   .row1{
	 margin-left:400px;  
		 margin-top:-400px;  
 
   }
   .row{
	    margin-right:370px;  
	   
   }
   </style>
   </head>
    <body>
<!-- Main Wrapper -->
		
		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
                       <h3 class="page-title">Message</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Message</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Message List</h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
										?>
								</div>
                </div>
            </div>
        </div>


<div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Message</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                    <form action="#" method="post">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Message Form</h5>
						<?php echo $msg; ?><?php echo $error; ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
							<div class="form-group">
                                    <input type="text" name="uid" class="form-control" name="uid" placeholder="Enter UID">
                                </div>  
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" name="name" placeholder="Enter Name">
                                </div>                
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
										<textarea class="form-control" name="messages" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <div class="form-group mt-4">
                                        <button type="submit" name="submit" class="btn btn-primary w-100">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
						 </div>
                            </div>
							
							
							
							
							
								<div class="row1">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">New Message</h4>
									
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
													<th>User Name</th>
													<th>User Email</th>
                                                    <th > Message</th>
													<th>Phone</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
											<?php
											$aid=$_SESSION['aid'];
													$query=mysqli_query($con,"select * from message WHERE aid='$uid'");
												
												while($row=mysqli_fetch_row($query))
													{
														if($aid == $row['1'])
														{
											?>
                                                <tr>
                                                    
                                                    <td><?php echo $row['1']; ?></td>
													<td><?php echo $row['2']; ?></td>
                                                    <td><?php echo $row['3']; ?></td>
													<td><?php echo $row['5']; ?></td>
													<td><?php echo $row['4']; ?></td>
													<td><a href="messagedelete.php?id=<?php echo $row['0']; ?>">Delete</a></td>
                                                </tr>
													<?php } } ?>

                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>							</div>						</div>			