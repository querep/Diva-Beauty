
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<link rel="icon" href="images/cvet.png" type="images" sizes="16x16">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diva Beauty</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
    		 $('.btn btn-primary with-arrow').click(function(){
        	var clickBtnValue = $(this).val(); 
        	var ajaxurl = 'gifovi.php',
        	data =  {'action': clickBtnValue};
        	$.post(ajaxurl, data, function (response) {
            	// Response div goes here.
            	alert("action performed successfully");
        	});
    	});
	});
	</script>

	</head>
	<body>
	
	
	<div id="fh5co-page">
	 <?php include 'header.php'; ?>
	

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/stars2.gif); -webkit-filter: grayscale(100%); filter: grayscale(100%);">x
		   		<div class="overlay-gradient"></div>
		   		<div class="container-fluid">
		   			<div class="col-md-4 " > 
		   				<img class="avocado1" src="images/avocado.png">
		   			</div>	
		   			<div class="col-md-4 " > 
		   				
		   			</div>	
		   			<div class="col-md-4 " > 
		   				<img class="honey1" src="images/honey.png">
		   			</div>	
		   		</div>
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2><span  style="font-size:80px; font-family:VivaBeautiful;">Custom hair mask</span></h2>
		   					<p class="fh5co-lead">Scroll down to find the perfect mask for your hair.</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
<div class="container-fluid animate-box line-3colors"> </div> 
	
	<div class="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2><span  style="font-size:50px; font-family:VivaBeautiful;">Hair Here, Hair There, Hair Hair Everywhere</span></h2>
					<p>What is your hair type?</p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/straight.jpg" class="img-responsive"></span>
					<p><a href="gifovi.php?type=<?php echo 1?>#scroll" class="btn btn-primary with-arrow id" value="straight">Straight <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/wavy.jpg" class="img-responsive"></span>
					<p><a href="gifovi.php?type=<?php echo 1?>#scroll" class="btn btn-primary with-arrow" value="wavy">Wavy <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/curly.jpg" class="img-responsive"></span>
					<p><a href="gifovi.php?type=<?php echo 2?>#scroll" class="btn btn-primary with-arrow" value="curly">Curly <i class="icon-arrow-right"></i></a></p>
				</div>

				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/coily.jpg" class="img-responsive"></span>
					<p><a href="gifovi.php?type=<?php echo 2?>#scroll" class="btn btn-primary with-arrow" value="coily">Coily <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/kinky.jpg" class="img-responsive"></span>
					<p><a href="gifovi.php?type=<?php echo 2?>#scroll" class="btn btn-primary with-arrow" value="kinky">Kinky <i class="icon-arrow-right"></i></a></p>
				</div>
				
			</div>
		</div>
	</div>

	
	<div class="container-fluid animate-box line-3colors"> </div> 
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>About Us</h3>
				<p><span style="color: #00B906;">Ana</span>, <span style="color: #00B906;">Ana</span>, <span style="color: #00B906;">Elena</span> and <span style="color: #00B906;">Andrej</span> created this site for a project for their course <span style="color: #00B906;">Network and Internet Applications</span>.</p>
				<!--<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">I'm button <i class="icon-arrow-right"></i></a></p>-->
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>What We Used</h3>
				<ul class="float">
					<li>HTML</li>
					<li>Bootstrap</li>
					<li>PHP</li>
				</ul>
				<ul class="float">
					<li>CSS</li>
					<li>JavaScript</li>
					<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

