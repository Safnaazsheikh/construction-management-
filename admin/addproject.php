<!DOCTYPE HTML>
<?php
include "connect.php";
?>
<html>
<head>
    <title>Add Project</title>
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
    <link href="css/stylee.css" rel='stylesheet' type='text/css' />
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
<div class="container" id="container">


<!-- Jumbotron Header -->
    
	<br>
      <!-- Page Features -->
<div class="panel panel-primary col-md-7 col-xs-offset-3 col-xs-6">
            <div class="panel-heading"><center>Add Project</center></div>
            <div class="panel-body">
	
				 <form  enctype="multipart/form-data" method="post" onsubmit="return validateForm()">
				 	
				  <div class="form-group">
					<label>Project Name</label>
					<input type="text" class="form-control" id="desig" name="sername" Placeholder="Service Name">
				  </div>
		
				  <div class="form-group">
					<label>Project Image</label>
					<input type="file" class="form-control-file"  name="image" >
				  </div>
				   
				   
					
					<div class="form-group">
						<label>Add Description</label>
					  <textarea class="form-control"  id="content" name="content"> 
					
				  </textarea></div>
				  <script type="text/javascript">
					CKEDITOR.replace( 'content' );
				  </script>
            </div>
            <div class="card-footer">
             <center><button type="submit" name="submit" style="margin-left:5px;margin-right:5px;" class="btn btn-danger btn-block text-center">Submit</button></center> 
          

            
			
             </form> 	
			
            </div>
          </div>
        </div>
	<?php
$path="img/portfolio/";
if(isset($_POST['submit']))
{
// Posted Values    
$descp=$_POST["content"];
$imgtitle=$_POST['sername'];
$imgfile=$_FILES["image"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;  
// Code for move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"C:/xampp/htdocs/construction/img/portfolio/".$imgnewfile);
// Query for insertion data into database  
$imagefileappend=$path.$imgnewfile;
$query=mysqli_query($con,"insert into projects(project_name,project_image,project_desc) values('$imgtitle','$imagefileappend','$descp') ");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}}

}
 ?>
			
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
    


    						<script>				
		function validateForm() {
		var areg=/[^a-zA-Z ]/;
			var noreg=/[^0-9'-]/;
			var sername=document.getElementById("sername").value;
			var image=document.getElementById("image").value;
			var mobile=document.getElementById("mobile").value;
			var email=document.getElementById("email").value;

			var desc=document.getElementById("content").value;
			var marital=document.getElementById("marital").value;
			

			
			if(sername==""){
				alert(" Service Name field should not be blank");
				return false;	
			}
			
			
			
			if(desc==""){
				alert(" Enter the description");
				return false;	
			}
		
			if(mobile==""){
				alert(" Mobile number field should not be blank");
				return false;	
			}
			if(mobile.match(noreg)){
				alert(" Mobile number field should only number");
				return false;	
			}
			if(mobile.length!=10){
				alert(" Mobile number should not less than 10 digits");
				return false;	
			}
			
			if (gender=="0") {
				alert(" Please Select Gender");
				return false;
			}
			if (marital=="0") {
				alert(" Please Select Marital Status");
				return false;
			}

			return true;
	}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
$(document).ready(function(){
   $('#chk').click(function() {
    var c=$('#addr1').val();
    $("#addr2").val(c);
	
});
});
</script>


<script>
$(document).ready(function(){
   $('#marital').click(function() {
    var c1=$('#marital').val();
  
    if(c1=='Single'){

    	 $('#h').attr("disabled", "disabled");
    	 $('#w').attr("disabled", "disabled");
    $('#nname').attr("disabled", "disabled");
    }
});


 $('#marital1').click(function() {
    var c2=$('#marital1').val();
    
  
     if(c2=='Married'){
     	
    	 $('#h').removeAttr("disabled", "disabled");
    	 $('#w').removeAttr("disabled", "disabled");
    $('#nname').removeAttr("disabled", "disabled");
    }

});

});
</script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script type="text/javascript">
    $( function() {
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '-100:+0'

    });
  } );

  </script>
<style type="text/css">
    .ui-datepicker {
        background: beige;
        border: 1px solid #555;

    }
</style>

<button class="back-to-top waves-effect waves-effect show" type="button"></button>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>

<script src="js/scroller.js"></script>
<script src='js/waves.min.js'></script>
<script  src="js/index.js"></script>
</div>
</body>
</html>