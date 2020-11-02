
<?php 
include "connect.php";
	if (isset($_POST['submit'])) {
		
			
		$cname=$_POST['cname'];	
		$mobile=$_POST['mobile'];		
		$add=$_POST['address'];
		$servid=$_POST['serv'];
		
		
         $sql1="insert into contractors(service_id,c_name,c_contact,c_address) values('$servid','$cname','$mobile','$add') ";	
		
          if($con->query($sql1)==FALSE){
		echo "<h3>Record Not Added</h3><br/>";
	} 
		          
	}
?>