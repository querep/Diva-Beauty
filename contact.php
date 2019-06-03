<?php



include_once 'conn.php';
session_start();
$isloggedin = isset($_SESSION["username"]);


$userexists = false;
$res = false;
$namme;
if (isset($_POST['save']))
{
// variables for input data

  $review=$_POST['review'];

  
    $password=password_hash($password,PASSWORD_DEFAULT);
    $sql= sprintf("SELECT Username FROM users where Username= '%s'", mysqli_real_escape_string($conn, $username));
    $result=mysqli_query($conn,$sql);
 
$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM reviews"));
 

    if ( isset($_SESSION["username"])) {
  $namme=$_SESSION["username"];
  	$sql1 = "SELECT * FROM orders";
			$result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
			
			$resultCheck = mysqli_num_rows($result);
  
  if($resultCheck > 0){
  	$order_exists = false;
  	while($row = mysqli_fetch_array($result)){
  		if($row['Username'] === $namme){
  			$order_exists = true;
  			break;
  		}
  	} 
  		if($order_exists) {
      $sql = sprintf("INSERT INTO reviews(Numbers,Username,Review) VALUES('%d','%s','%s')",  mysqli_real_escape_string($conn, $count),  
       mysqli_real_escape_string($conn, $namme),  
      mysqli_real_escape_string($conn, $review));
      mysqli_query($conn,$sql);
      mysqli_close($conn);
       die(header("Location: index.php#pomosna")); } else {
   		echo '<script language="javascript">';
		echo 'alert("Your have not made an order yet !")';
		echo '</script>';
//refresh the page
header("Refresh:0; url=services.php");
   } 
   }


    }else
    {

    	echo '<script language="javascript">';
echo 'alert("Please Log In !")';
echo '</script>';
//refresh the page
header("Refresh:0; url=login.php");

    
    }


  
}

?>





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



  	<!-- Facebook and Twitter integration -->
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

	</head>
	<body>
	
	
	<div id="fh5co-page">
<header id="fh5co-header" role="banner">
	<div class="container">
		<div class="header-inner">
			<span class="logo-h1"><a href="index.php"><img class="logo" src="images/logo.png"><span><img src="images/cvet.png" height="20px" width="20px"></span></a></span>
			<nav role="navigation">
				<ul>
					<li><a href="services.php">Mask</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Leave a review</a></li>
					<?php if (!$isloggedin): ?>
						<li class="cta"><a href="login.php">Log In</a></li>
					<?php else: ?>
						<li class="cta"><a href="logout.php">Log Out</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</div>
</header>
	

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">

			<ul class="slides">
		   	<li style="background-image: url(images/stars2.gif); -webkit-filter: grayscale(100%); filter: grayscale(100%);">

		   		<div class="overlay-gradient"></div>
		   		<div class="container">

		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">

		   				<div class="slider-text-inner">
		   					<h2><span  style="font-size:80px; font-family:VivaBeautiful;">Get in touch. Don't be shy.</span></h2>

		   				</div>

		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>

	</aside>
	<div class="container-fluid animate-box line-3colors"> </div> 
	

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Address: Rugjer Boshkovikj, Skopje 1000</li>
						<li><i class="icon-phone"></i>+ 02 309 9191</li>
						<li><i class="icon-envelope"></i>diva.beauty@gmail.com</li>
						<li><i class="icon-globe"></i><a href="index.html">www.diva_beauty.com</a></li>					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					 <form method="post">
						<div class="col-md-12">
						<h3>Leave a Review </h3>
    	<div class="container ">
 <?php if (!$isloggedin): ?>
     <b> Please Log In to Leave a Review !  </b>
    <?php endif; ?>
    </div>

<br>
							<div class="form-group">
								<textarea name="review" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="save">Send</button>
								
							
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>	
	</div>
<div class="container-fluid animate-box line-3colors"> </div> 
	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

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
					<li><a href="https://www.twitter.com/"><i class="icon-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/"><i class="icon-facebook"></i></a></li>
					<li><a href="https://plus.google.com/discover"><i class="icon-google-plus"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="icon-instagram"></i></a></li>
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
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfXiJszZq6I-u7n5ycX1W2toIsSRq5hCI&sensor=true"></script>
	<script src="js/google_map.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

