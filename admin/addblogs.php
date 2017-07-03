<?php
session_start();
require_once("../connection.php");
if(!isset($_SESSION["user"]))
{
	header("location:index.php");
	exit();
}
extract($_REQUEST);
if(isset($Submit))
{
				$name = $_FILES['image']['name'];
				$type = $_FILES['image']['type'];
				$size = $_FILES['image']['size'];
				$error = $_FILES['image']['error'];
				$path="mhc_images/".$name;	
				mysql_query("insert into blogs set title='".$title."', category='".$category."', date='".$date."', image='".$path."', details='".$details."'");
				move_uploaded_file($_FILES['image']['tmp_name'],"$path");
				header("location:addblogs.php");
				exit();			
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mahaveer Homeo Clinic</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<font size="+1"><u>MAHAVEER HOMEO CLINIC</u></font>			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="blogs.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Your Blogs</p>
	                    </a>	                </li>
					<li class="active">
	                    <a href="addblogs.php">
	                        <i class="material-icons">queue</i>
	                        <p>Add Blogs</p>
	                    </a>	                </li>
	                <li>
	                    <a href="deleteblogs.php">
	                        <i class="material-icons">remove_from_queue</i>
	                        <p>Delete Blogs</p>
	                    </a>	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>						</button>
						<a class="navbar-brand" href="#">Add Blogs</a>					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">account_box</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>	
								<ul class="dropdown-menu">
									<li><a href="logout.php">LOGOUT</a></li>
								</ul>						
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="card">
								<div class="card-header" data-background-color="purple">
	                                <h4 class="title">ADD BLOG</h4>
									<p class="category">Fill in the details for your blog.</p>
	                            </div>
							</div>
								<form method="post" enctype="multipart/form-data">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Title</label>
													<input type="text" class="form-control" name="title" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<select class="form-control" name="category">
													<option value="General">General</option>
													<option value="Educational">Eduational</option>
													<option value="News">News</option>
													<option value="Medical Camp">Medical Camp</option>
													<option value="Service">Service</option>
													</select>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<input type="date" class="form-control" placeholder="MM/DD/YYYY" name="date" >
												</div>
	                                        </div>
											<div class="col-md-4">
												<span class="btn btn-primary btn-file">
													<span class="control-label">Select Image</span>
													<input type="file" name="image">
												</span>
                                        	</div>
                                        </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
													<div class="form-group label-floating">
									    				<label class="control-label">Details</label>
								    					<textarea class="form-control" rows="5" name="details"></textarea>
		                        					</div>
	                                        </div>
	                                    </div>
	                      <input name="Submit" value="ADD BLOG" type="submit" class="btn btn-primary pull-right">
	                     <div class="clearfix"></div>
	                 </form>
					</div>
				</div>
			</div><br><br><br><br><br><br><br><br><br><br><br>
			<footer class="footer">
				<div class="container-fluid">
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.mahaveerclinic.com">Mahaveer Homeo Clinic</a>, working for the betterment of humanity.					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
