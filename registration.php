<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css\bootstrap.css">  
    <title>Registration</title> 
<style>  
    .login-panel {  
        margin-top: 150px;  
	}
	body, html {
    height: 100%;
}

.bg { 
    /* The image used */
    background-image: url("back.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style> 	
</head>  
 
<body>  
  <div class="bg">
<div class="container" ><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php" name="myForm" onsubmit="return(validate());">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
							<div class="form-group">  
                                <input class="form-control" placeholder="Re-enter Password" name="repass" type="password" value="">  
                            </div> 
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
  
</html>  
  
<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
  
  
  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  

	<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please Provide Name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide Email!" );
            document.myForm.lname.focus() ;
            return false;
         }
         
         
         if( document.myForm.pass.value == "" )
         {
            alert( "Please provide Password!" );
			document.myForm.pass.focus() ;
            return false;
         }
		 if(document.myForm.pass.value.length<6){  
			alert("Password must be at least 6 characters long."); 
			document.myForm.pass.focus() ;
			return false;  
		}
			if(document.myForm.pass.value == document.myForm.repass.value){  
				return true;  
			}  
			else{  
				alert("password must be same!");
				document.myForm.repass.focus() ;
			return false;  
			}  
		 if( document.myForm.wage.value == "" )
         {
            alert( "Please Enter Labour Wage!" );
            return false;
         }
         return( true );
      }
   //-->
</script>