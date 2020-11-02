<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  <a class=".btn-primary" href="index.php">Back</a>
<div class="table-scrol">  
    <h1 align="center">All the Contractors</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Contractor Id</th>  
            <th>Contractor Name</th>  
			<th>Service Name</th> 
            <th>Contractor Contact</th>    
			<th>Contractor Address</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("../database/db_conection.php");  
        $view_users_query="SELECT c.c_id,s.service_name,c.c_name,c.c_contact,c.c_address FROM contractors c 
		INNER JOIN services s ON c.service_id=s.service_id;";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $cid=$row[0];  
            $sname=$row[1];  
            $cname=$row[2];
			$contact=$row[3];	
			$add=$row[4];	
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $cid;  ?></td>  
            <td><?php echo $cname;  ?></td> 
			 <td><?php echo $sname;  ?></td>  
			<td><?php echo $contact;  ?></td> 
			<td><?php echo $add;  ?></td> 
    
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>