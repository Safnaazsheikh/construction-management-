<?php  
  
include("connect.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from services WHERE service_id='$delete_id'";//delete query  
$run=mysqli_query($con,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('viewservices.php?deleted=user has been deleted','_self')</script>";  
}else{
	
	echo "ed";
}  
  
?> 