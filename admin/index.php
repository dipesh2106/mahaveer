<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel Login</title>

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
		<div class="sidebar" data-color="purple" data-image="img/sidebar-3.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<font size="+1"><u>MAHAVEER HOMEO CLINIC</u></font>			</div>

	    	<div class="sidebar-wrapper">	    	</div>
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
						<a class="navbar-brand" href="#"><u>HELLO ADMIN</u></a>					</div>
					<div class="collapse navbar-collapse">
					</div>
				</div>
			</nav>
<br><br>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-6">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="../images/dr.jpg" />    								</a>    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Founder/Owner</h6>
    								<h4 class="card-title">Dr. Hemant Jain(BHMS)</h4>
    								<p class="card-content">
    									Dr. Hemant Jain are few of the eminent consulting homoeopaths practicing classical Homoeopathy in the city of kota from the last 3 years. Born and brought up in kota, he receive his medical education in jaipur.    								</p>
    								<a href="https://www.facebook.com/The-Puppet-Mafiaz-431958213634797/" class="btn btn-primary btn-round">Follow</a>    							</div>
    						</div>
		    			</div>

						<div class="col-md-6" align="center">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">ADMIN LOGIN</h4>
									<p class="category">Enter your Login Details</p>
	                            </div>
                              <div class="card-content">
								<?php 
								session_start();
								extract($_REQUEST);
								$user="mahaveerhomeoclinic";
								$pass="mahaveerhomeoclinic";
								if(isset($Submit))
								{
									if($user==$username && $pass==$password)
									{
										$_SESSION["user"]="Admin";
										header("location:blogs.php");
										exit();
									}
								}
								?>
	                                <form action="" method="post" enctype="multipart/form-data">
	                                    <div class="row">
	                                       <div class="col-md-12">
												<div class="form-group label-floating">
													<input type="text" class="form-control" placeholder="Username" name="username" required="true">
												</div>
                                          </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<input type="password" class="form-control" placeholder="Password" name="password" required="true">
												</div>
	                                        </div>
	                                    </div><br>
	                                    <input type="submit" class="btn btn-primary pull-center" name="Submit" value="Submit">
	                                    <div class="clearfix">
										</div>
										
	                                </form><br><br>
							 </div>
	                    </div>
				</div>
			</div>
			<br><br><br><br><br><br><br><br>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="www.mahaveerclinic.com">
									Website								</a>							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="">Mahaveer Homeo Clinic</a>, working for the betterment of humanity.
					</p>
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
