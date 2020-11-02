<!DOCTYPE html>
<?php
//include 'connect.php';
$con = mysqli_connect("localhost","root","","edwin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home page</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">HOME</a>
      <div class="phone"><span>Call Today</span>+91 9876543210</div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Projects</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
		
	
                <li class="dropdown ">
                    <a href="" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown "><i class="fa fa-user"></i><span>Login</span></a>
                    <ul class="dropdown-menu " role="menu" id="it">
                        <li><a href="admin/admin_login.php"><b>Admin Login</b></a></li>
                        <li><a href="login.php"><b>User Login</b></a></li>

                    </ul>



                </li>

            </ul>
        </div>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Construction<br>
              Management System</h1>
            <p>From complete turn key to project manager. Leave the building to the professionals..</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/download.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>Construction Managed System Based in Ponda-Goa, We undertake contracts for Appartments,Villas,Row Houses,Buildings and make a Dream Home for you, We have 10 years of experience in the field of Constructon and providing the best available services.</p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Years of Experience</li>
                <li>Fully Insured</li>
                <li>Cost Control Experts</li>
                <li>100% Satisfaction Guarantee</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Consultation</li>
                <li>Satisfied Customers</li>
                <li>Project Management</li>
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->

<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
	
	<?php
	$sql="SELECT * FROM services";
	if (!$result = $con->query($sql)) {
    	die ('There was an error running query[' . $con->error . ']');
	}	
	$rows = $result->num_rows;
	if($rows > 0) {
		$cols = 3;    // Define number of columns
		$counter = 1;     // Counter used to identify if we need to start or end a row
		$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
		
		$container_class = 'container';  // Parent container class name
		$row_class = 'row';    // Row class name
		$col_class = 'col-md-4'; // Column class name
		$service_media='service-media';
		$service_desc='service-desc';
		
 while ($item = $result->fetch_array()) {
    if(($counter % $cols) == 1) { 
		echo '<div class="'.$row_class.'">';
	}
	
echo '<div class="'.$col_class.'"><div class="'.$service_media.'"><img src="'.$item['service_pic'].'"/></div><div class="'.$service_desc.'">
<h3>'.$item['service_name'].'</h3><p>'.$item['service_info'].'</p></div></div>'; 
	
	if(($counter % $cols) == 0) {
		echo '</div>';
		}
			$counter++;
	}
		$result->free();
		if($nbsp > 0) {
			for ($i = 0; $i < $nbsp; $i++)	{ 
				echo '<div class="'.$col_class.'">&nbsp;</div>';		
			}
			echo '</div>';  // Close the row
		}
       // echo '</div>';  // Close the container
	}
	?>
  </div>  
  </div>
  
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our Works</h2>
    </div>
	
	
	<?php
	$sql="SELECT * FROM projects";
	if (!$result = $con->query($sql)) {
    	die ('There was an error running query[' . $con->error . ']');
	}	
	$rows = $result->num_rows;
	if($rows > 0) {
		$cols = 3;    // Define number of columns
		$counter = 1;     // Counter used to identify if we need to start or end a row
		$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
		
		$container_class = 'container';  // Parent container class name
		$row_class = 'row';    // Row class name
		$col_class = 'col-md-4'; // Column class name
		$service_media='service-media';
		$service_desc='service-desc';
		$portfolio_items='portfolio-items';
		$portfolio_item='portfolio-item';
		$hover_bg='hover-bg';
		$hover_text='hover-text';
		
		
 while ($item = $result->fetch_array()) {
    if(($counter % $cols) == 1) { 
		echo '<div class="'.$row_class.'">';
		echo '<div class="'.$portfolio_items.'">';
	}
	?>
<div class="col-sm-6 col-md-4 col-lg-4">
<?php	echo '<div class="'.$portfolio_item.'"><div class="'.$hover_bg.'">
<a href="'.$item['project_image'].'" title="'.$item['project_name'].'" data-lightbox-gallery="gallery1"/>
<div class="'.$hover_text.'"><h4>'.$item['project_name'].'</h4></div>
<img class="img-responsive" src="'.$item['project_image'].'"/></a></div>
</div>
</div>';
	
	if(($counter % $cols) == 0) {
		echo '</div></div>'; //row
		}
			$counter++;
	}
		$result->free();
		if($nbsp > 0) {
			for ($i = 0; $i < $nbsp; $i++)	{ 
				echo
				'<div class="'.$col_class.'">&nbsp;</div>';		
			}
			echo '</div></div>';  // Close the row
		}
         
	}
	 echo' </div>
</div>';
	?>
	
   

<!-- Testimonials Section -->

	


<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
	<?php
	$sql="SELECT * FROM testimonial";
	if (!$result = $con->query($sql)) {
    	die ('There was an error running query[' . $con->error . ']');
	}	
	$rows = $result->num_rows;
	if($rows > 0) {
		$cols = 3;    // Define number of columns
		$counter = 1;     // Counter used to identify if we need to start or end a row
		$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
		
		 while ($item = $result->fetch_array()) {
    if(($counter % $cols) == 1) { 
		echo '<div class="row">';
	}
	
    
      echo '<div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/avatar.png" alt=""> </div>
          <div class="testimonial-content">
            <p>"'.$item['message'].'"</p>
            <div class="testimonial-meta"> - '.$item['name'].' </div>
          </div>
        </div>
      </div>';
	  if(($counter % $cols) == 0) {
		echo '</div>';
		}
			$counter++;
	}
		$result->free();
		if($nbsp > 0) {
			for ($i = 0; $i < $nbsp; $i++)	{ 
				echo '<div class="'.$col_class.'">&nbsp;</div>';		
			}
			echo '</div>';  // Close the row
		}
       // echo '</div>';  // Close the container
	}
	?>
      
    </div>
  </div>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <h1>Signup with us to know more about<br> Construction Management System.</h1>
        </div>
    <!--   <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>-->
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span> Alvas Institute of Engineering and Technology <br>
          Mijar Moodbidri </p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +91 9876543210</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> info@construction.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2018 Design by Akshay</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>



</body>
</html>