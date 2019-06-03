<?php
$type = $_GET['type'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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

	

	</head>
	<body>
	
	
	<div id="fh5co-page">
	 <?php include 'header.php'; ?>

	
	<?php
		if (isset($_POST['action'])) {
			if($_POST['action'] == 'straight' || $_POST['action'] == 'wavy') $myJS = "<script>
		$(document).ready(function(){
    		 $('.btn btn-primary with-arrow').click(function(){
        	var clickBtnValue = $(this).val(); 
        	clickBtnValue + '1';
        	var ajaxurl = 'products.php',
        	data =  {'action': clickBtnValue};
        	$.post(ajaxurl, data, function (response) {
            	// Response div goes here.
            	
        	});
    	});
	});
	</script>";
				else $type = "<script>
		$(document).ready(function(){
    		 $('.btn btn-primary with-arrow').click(function(){
        	var clickBtnValue = $(this).val(); 
        	clickBtnValue + '2';
        	var ajaxurl = 'products.php',
        	data =  {'action': clickBtnValue};
        	$.post(ajaxurl, data, function (response) {
            	// Response div goes here.
            	
        	});
    	});
	});
	</script>";

	echo $myJS;
		}


	?>

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/stars2.gif); -webkit-filter: grayscale(100%); filter: grayscale(100%);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2><span style="font-size:80px; font-family:VivaBeautiful;">Custom hair mask</span></h2>
		   					<p class="fh5co-lead">Scroll down to find the perfect mask for your hair.</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	  	
	</aside>
<div class="container-fluid animate-box line-3colors"> </div> 
<div class="fh5co-services">
<div class="container" id="scroll">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2><span  style="font-size:50px; font-family:VivaBeautiful;">We can help you, but only on one conditioner!</span></h2>
					<p>What do you want for your hair?</p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/zvucnik.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'VSH'?>" class="btn btn-primary-black with-arrow" value="volume">Volume <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/zvezdi.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'VSH'?>" class="btn btn-primary-black with-arrow" value="shine">Shine <i class="icon-arrow-right"></i></a></p>
				</div>

				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/cvet.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'FGM'?>" class="btn btn-primary-black with-arrow" value="fg">Faster growth <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/kapka.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'FGM'?>" class="btn btn-primary-black with-arrow" value="moist">Moisture <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/teg.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'STNSE'?>" class="btn btn-primary-black with-arrow" value="strength">Strength <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/baterija.gif" alt="Free HTML5 Templates" class="img-responsive"></span>
					<p><a href="products.php?type=<?php echo $type?>&demand=<?php echo 'STNSE'?>" class="btn btn-primary-black with-arrow" value="nse">No split ends <i class="icon-arrow-right"></i></a></p>
				</div>
				<!--<div class="col-md-4 text-center item-block animate-box">
					<span class="icon"><img src="images/9.svg" alt="Free HTML5 Templates" class="img-responsive"></span>
					<h3>Expertise</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
					<p><a href="#" class="btn btn-primary with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>-->
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

