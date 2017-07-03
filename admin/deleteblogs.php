<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header("location:index.php");
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
		<style>
		#image{
			width:280px;
		    height:230px;
		}
		#content{
			width:280px;
		    height:200px;
		}
		</style>
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
					<li>
	                    <a href="addblogs.php">
	                        <i class="material-icons">queue</i>
	                        <p>Add Blogs</p>
	                    </a>	                </li>
	                <li class="active">
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
						<a class="navbar-brand" href="#">Delete Blogs</a>					</div>
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

						<?php 
							require_once("../connection.php");
							extract($_REQUEST);
							$q=mysql_query("select * from blogs order by id desc");
							while($a=mysql_fetch_array($q))
							{
						?>
					<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart">
									<img src="<?php echo $a['image'];?>" id="image"/>
								</div>
								<div class="card-content" id="content">
									<h4 class="title"><?php echo $a['title'];?></h4>
									<p class="category"><span class="text-success"><?php echo $a['category'];?> </span> <br><?php echo $a['details'];?></p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i><?php echo $a['date'];?>
									</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="stats">
										<a href="delete.php?id1=<?php echo $a['id'];?>" class="btn btn-primary btn-round" onClick="return confirm('Are you sure you want to delete the blog permanently ??')">DELETE</a>
									</div>
								</div>
							</div>
						</div>
					<?php 
					}
					?>
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
