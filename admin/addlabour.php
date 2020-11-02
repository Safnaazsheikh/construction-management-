<!DOCTYPE HTML>
<html>
<head>
    <title>Add Labour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
	 <script src="ckeditor/ckeditor.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/jquery.countdown.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel='stylesheet prefetch' href='css/waves.min.css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!----font-Awesome----->
    <script>
        $(document).ready(function () {
            $('html,body').animate({
                scrollTop:$('#container').offset().top
            },'fast');
        })
    </script>
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('#c', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('#c', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
            $(".dropdown").hover(
                function() {
                    $('#admission', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('#admission', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
            $(".dropdown").hover(
                function() {
                    $('#it', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('#it', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
            $(".dropdown").hover(
                function() {
                    $('#activity', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('#activity', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
            $(".dropdown-submenu").hover(
                function() {
                    $('#h1', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('#h1', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>

    <style>
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
        .dropdown-submenu {
            position: relative;
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
<a class=".btn-primary" href="index.php">Back</a>
<?php 
include "connect.php";
?>
<div class="container" id="container">


<!-- Jumbotron Header -->
    
	<br>
      <!-- Page Features -->
<div class="panel panel-primary col-md-7 col-xs-offset-3 col-xs-6">
            <div class="panel-heading"><center>Add Labour</center></div>
            <div class="panel-body">
	
				 <form  action="" method="POST" name="myForm" onsubmit="return(validate());">
				 	 <div class="form-group">
					<label>Under Contractor</label>
					 <?php
                                $result=$con->query("select * from contractors");
								echo "<select name='contr'>";
								echo "<option value='-1' selected>[choose contractor]</option>";
                            while ($row = mysqli_fetch_array($result)){
                                echo "<option value='". $row['c_id'] ."'>" .$row['c_name'] ."</option>" ;
                            }
                            echo "</select>" ;

                            ?>
				  </div>
				  <div class="form-group">
					<label> Labour Name</label>
					<input type="text" class="form-control" id="desig" name="lname" Placeholder="Labour Name">
				  </div>
		
				  <div class="form-group">
					<label>Contact</label>
					<input type="" class="form-control" id="mobile" name="mobile" Placeholder="Contact">
				  </div>
				   
				   <div class="form-group">
					<label>Daily Wage</label>
					<input type="text" class="form-control" id="wage" name="wage" Placeholder="Daily Wage">
				  </div>
				   
				  
				  <div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"></textarea>
				  </div>
				  	
            </div>
            <div class="card-footer">
             <center><button type="submit" name="submit" style="margin-left:5px;margin-right:5px;" class="btn btn-danger btn-block text-center">Submit</button></center> 
          

          
<?php 
include "connect.php";
	if (isset($_POST['submit'])) {
		
			
		$lname=$_POST['lname'];	
		$mobile=$_POST['mobile'];
		$wage=$_POST['wage'];
		$add=$_POST['address'];
		$conid=$_POST['contr'];
		
		
         $sql1="insert into labour(con_id,l_name,l_contact,l_wage,l_address) values('$conid','$lname','$mobile','$wage','$add') ";	
		
          if($con->query($sql1)==FALSE){
		echo "<h3>Record Not Added</h3><br/>";
	} 
		          
	}
?>
			
             </form> 	
			
            </div>
          </div>
        </div>
		
		
<div class="col-sm-3"></div>
      <!-- /.row -->
    </div>
      </div>
<br>
    <!-- /.container -->

    <!-- Footer -->
	


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    


    			
		<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.contr.value == "-1" )
         {
            alert( "Please select Contractor!" );
            document.myForm.contr.focus() ;
            return false;
         }
         
         if( document.myForm.lname.value == "" )
         {
            alert( "Please provide Contractor Name!" );
            document.myForm.lname.focus() ;
            return false;
         }
         
         if( document.myForm.mobile.value == "" ||
         document.myForm.mobile.value.length != 10 )
         {
            alert( "Please provide a Mobile in the format 7411######." );
            document.myForm.mobile.focus() ;
            return false;
         }
         
         if( document.myForm.address.value == "" )
         {
            alert( "Please provide Address!" );
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>






<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   


<button class="back-to-top" type="button"></button>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>

<script src="js/scroller.js"></script>
<script src='js/waves.min.js'></script>
<script  src="js/index.js"></script>
</div>
</body>
</html>
