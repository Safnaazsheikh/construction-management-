<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Labour</title>  
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
    <h1 align="center">All the Services</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Labour Id</th>  
            <th>Labourt Name</th>  
            <th>Labour Contact</th>
			<th>Labour wage</th>  
            <th>Labour address</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("../database/db_conection.php");  
        $view_users_query="select * from labour";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[2];  
            $user_email=$row[3];  
			$wage=$row[4];
			$address=$row[5];
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
			<td><?php echo $wage;  ?></td>  
			<td><?php echo $address;  ?></td>  
    
            <td><a href="deletelabour.php?del=<?php echo $user_id; ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>