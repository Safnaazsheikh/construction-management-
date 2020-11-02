<html>  
<?php
session_start();
?>
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css\bootstrap.css">  
    <title>Testimonial</title> 
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
                    <h3 class="panel-title">Testimonial</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" name="myForm" onsubmit="return(validate());">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <textarea  class="form-control" placeholder="Write your testimonial here" name="test" autofocus> </textarea>
                            </div>  
                            
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="register" >  
  
                        </fieldset>  
                    </form>  
                    
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
  
</html>  
  
<?php  
  $email=$_SESSION["email"];
include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.    
    $test=$_POST['test'];//same  
  
  
  

//insert the user into the database.  
    $insert_user="insert into testimonial (name,email,message) VALUE ('$user_name','$email','$test')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('profile.php','_self')</script>";  
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
         
         if( document.myForm.test.value == "" )
         {
            alert( "Please Enter Your Testimonial!" );
            document.myForm.lname.focus() ;
            return false;
         }
         
         
         
         return( true );
      }
   //-->
</script>