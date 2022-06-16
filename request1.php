<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

 if(isset($_SESSION['uemail']))
										{ 					

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
			$pid=$_REQUEST['pid1'];
		$message=$_REQUEST['message'];
	$status='requested';
	if(!empty($name) && !empty($email) && !empty($message) && !empty($phone))
	{
		$sql="insert into request1 (rname,remail,rphone,pid,rmessage,rstatus) values('$name','$email','$phone','$pid','$message','$status')";
		$result=mysqli_query($con,$sql);
		if($result)
			{    	
					  ?>

										
				<script>
	  window.alert("Request successfully approved");	
	  window.location.href="property.php";	  
	  </script>		
				
			<?php			
			}
			else
			{ 

					
					  ?>
							
						<script>
	  window.alert("Request Unsuccessfully Try Again");
	  	  window.location.href="property.php";
	  //window.location.href="propertydetail.php?pid=<?php echo $row['0'];?>";	  
	  </script>	<?php
			}
	}
	else{
		$error="* Please Fill all the Fields!";
	}
	
	
										}}
										else{
											header("location: login.php");
										}
?>