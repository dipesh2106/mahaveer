<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>MAHAVEER CLINIC - BLOGS</title>
        <meta name="description" content="LeadGen is a conversion ratio and speed optimized multi-purpose marketing landing page template with drag & drop page builder and tons of readymade elements and demos with greater level of customization possibilities." />
        <meta name="keywords" content="Marketing, landing page, creative, html5, css3, page builder, drag & drop, multi-purpose, one page, aweber, mailchimp, active campaign, campaign monitor, get response, mailer lite, custom form, product, hotel and resort, resume, personal, restaurant, corporate business, interior design, software, spa salon, travel agency, app landing page, design agency, start-up, e-learning, sports and gym, seo, wedding invitation, hosting, online shopping, yoga and fitness, music show, finance and account, e-book, event, medical, real estate, portfolio, digital marketing, inner content page, sign-up, 404 not found, coming soon" />
        <meta name="author" content="lgauthor">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/icon/favicon.ico">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify-icons -->
        <link rel="stylesheet" href="css/themify-icons.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.transitions.css" />
        <link rel="stylesheet" href="css/owl.carousel.css" /> 
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" /> 
        <!-- base -->
        <link rel="stylesheet" href="css/base.css" /> 
        <!-- elements -->
        <link rel="stylesheet" href="css/elements.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
		<style>
		#blog{
			width:750px;
		    height:280px;
		}
		#expert{
			width:750px;
		    height:480px;
		}
		#content{
			width:280px;
		    height:200px;
		}
		#foot{
			width:280px;
		    height:90px;
		}
		</style>
    </head>
    <body>
       <?php include("header.php");?>
	   
	    <!-- blog -->
        <section class="padding-110px-tb xs-padding-60px-tb bg-yellowish-gray builder-bg blog-style2" id="blog-section3">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="section-title-large sm-section-title-medium xs-section-title-large text-white font-weight-600 alt-font margin-three-bottom xs-margin-fifteen-bottom tz-text">All Blogs</h2>
                        <div class="text-medium width-60 margin-lr-auto md-width-70 sm-width-100 text-white margin-nine-bottom  xs-margin-nineteen-bottom">Here are all the blogs posted from the beginning.</div>
                    </div>
                </div>
                <!-- end section title -->
                <div class="row">
						<?php 
							require_once("connection.php");
							extract($_REQUEST);
							$q=mysql_query("select * from blogs order by id desc");
							while($a=mysql_fetch_array($q))
							{
						?>
                    <!-- blog item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-nineteen-bottom">
                        <!-- blog image -->
                        <div class="post-thumbnail overflow-hidden margin-twelve-bottom">
                            <img src="admin/<?php echo $a['image'];?>" alt="" id="blog" />
                        </div>
                        <!-- end blog image -->
                        <!-- blog details -->
                        <div class="post-details no-margin-lr no-margin-bottom">
                            <a class="tz-text btn btn-very-small bg-chrome-yellow border-radius-0 text-white alt-font margin-nine-bottom font-weight-500"><?php echo $a['category'];?></a>
                            <a class="tz-text text-white text-medium alt-font font-weight-600 display-block margin-four-bottom md-text-medium"><?php echo $a['title'];?></a>
                            <div class="text-medium text-white" id="content"><p><?php echo $a['details'];?></p></div>
                            <div class="separator-line-full bg-middle-gray margin-ten-bottom"></div>
                            <div class="text-extra-small alt-font" id="foot"><a class="tz-text text-white"><?php echo $a['date'];?></a>   /   <span class="text-white">POSTED BY</span> <a class="tz-text text-white">MAHAVEER HOMEO CLINIC</a></div>
                        </div>
                        <!-- end blog details -->
                    </div>
                    <!-- end blog item -->
					
						<?php
						}
						?>
                </div>
            </div>
        </section>
        <!-- end blog -->
	   
	   <?php include("footer.php");?>

        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- isotope -->
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- navigation -->
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- number counter -->
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="js/twitterFetcher_min.js"></script>
        <!-- main -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
