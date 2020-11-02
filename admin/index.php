<!DOCTYPE html>
<?php  
session_start();//session starts here  
  
?>  
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>
<script src="js/jquery.js"></script>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	<style>
	.button{
		
    background-color: #212529; 
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
		
	
	</style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Admin Menu</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          
          <div class="input-group-append">
            
            
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span><?php echo "Hi, ".$_SESSION["admin"]; ?><i class="fas fa-user-circle fa-fw"></i></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="logout.php">Logout</a>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" id="content">
       
		 <li class="nav-item active">
		<a href="index.php"><button   class="nav-link button button-block"><i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</button></a>
        </li>
        <li class="nav-item">
		<button id="viewusers"  class="nav-link button button-block"><i class="glyphicon glyphicon-user"></i> View Users</button>
        </li>
		 <li class="nav-item">
		<button id="viewcon"  class="nav-link button button-block"><i class="glyphicon glyphicon-user"></i> View Contractors</button>
        </li>
		 <li class="nav-item">
		<button id="viewservices"  class="nav-link button button-block"><i class="glyphicon glyphicon-user"></i> View Services</button>
        </li>
		 <li class="nav-item">
		<button id="viewpro"  class="nav-link button button-block"><i class="glyphicon glyphicon-user"></i> View Projects</button>
        </li>
		<li class="nav-item">
		<button id="viewtest"  class="nav-link button button-block"><i class="glyphicon glyphicon-envelope"></i> View Testimonials</button>
        </li>
		<li class="nav-item">
		<button id="mail"  class="nav-link button button-block"><i class="glyphicon glyphicon-envelope"></i> View Mails</button>
        </li>
		<li class="nav-item">
		<a href="addproject.php"><button id="addproject"  class="nav-link button button-block"><i class="glyphicon glyphicon-plus"></i>Add Project</button></a>
        </li>
		<li class="nav-item">
		<a href="addservice.php"><button id="addservices"  class="nav-link button button-block"><i class="glyphicon glyphicon-plus"></i>Add Services</button></a>
        </li>
		<li class="nav-item">
		<a href="addcontractor.php"><button id="addcontractor"  class="nav-link button button-block"><i class="glyphicon glyphicon-plus"></i>Add Contractor</button></a>
        </li>
		<li class="nav-item">
		<a href="addlabour.php"><button id="addlabour"  class="nav-link button button-block"><i class="glyphicon glyphicon-plus"></i>Add Labour</button></a>
        </li>
       
		
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
		   <div class="main-content">            
            <div class="panel panel-default"> 
            	<!-- Title -->       	
                <div class="panel-heading text-center"><h3>Admin</h3></div>
                <!-- Content -->
                <div class="panel-body" id="display">
                	<h3 class="text-center"><small>Welcome...</small></h3>
                </div>        
            </div>
        </div>
          <!-- Icon Cards-->
         
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>
  <script>
 $(document).ready(function(){
    $("#viewusers").click(function(){
        $("#display").load("view_users.php");
    });
	 
	$("#addcontractor").click(function(){
        $("#display").load("addcontractor.php");
    });
	$("#addlabour").click(function(){
        $("#display").load("addlabour.php");
    });
	$("#viewcon").click(function(){
        $("#display").load("view_contractors.php");
    });
	$("#viewservices").click(function(){
        $("#display").load("viewservices.php");
    });
	$("#viewpro").click(function(){
        $("#display").load("viewprojects.php");
    });
	$("#viewtest").click(function(){
        $("#display").load("viewtestimonial.php");
    });
	$("#mail").click(function(){
        $("#display").load("viewemail.php");
    });
});
</script>
  
  
 

</html>
