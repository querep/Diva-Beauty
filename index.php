<?php
include_once 'conn.php';
$admin=false;
session_start();
$isloggedin = isset($_SESSION["username"]);
   if ( isset($_SESSION["username"])) {
$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM reviews"));

if($_SESSION["username"]==="admin" && $count>0 )
{
	$admin=true;


}





}
  
    $password=password_hash($password,PASSWORD_DEFAULT);
     $sql= sprintf("SELECT * FROM reviews WHERE Username= '%s'", mysqli_real_escape_string($conn, $username));
    $result=mysqli_query($conn,$sql);
$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM reviews"));


 if ($count>=0) {

 	$count1=$count-1;
    $sqlp1="SELECT * from reviews where Numbers='".$count1."'";
    $query1=mysqli_query($conn,$sqlp1);
    $array1=mysqli_fetch_array($query1);


 	$count2=$count-2;
    $sqlp2="SELECT * from reviews where Numbers='".$count2."'";
    $query2=mysqli_query($conn,$sqlp2);
    $array2=mysqli_fetch_array($query2);


 	$count3=$count-3;
    $sqlp3="SELECT * from reviews where Numbers='".$count3."'";
    $query3=mysqli_query($conn,$sqlp3);
    $array3=mysqli_fetch_array($query3);

   }

  if (isset($_POST['bin1']))
  {
  	$count1=$count-1;
  	$sql = "DELETE FROM reviews WHERE Numbers='".$count1."'";
  	mysqli_query($conn, $sql);
  	    	echo '<script language="javascript">';
echo 'alert("Deleted!")';
echo '</script>';
//refresh the page
header("Refresh:0; url=login.php");

    
  }
  if (isset($_POST['bin2']))
  { 
  	$count2=$count-2;
  	$sql = "DELETE FROM reviews WHERE Numbers='".$count2."'";
  	mysqli_query($conn, $sql);

  	$sql = "UPDATE reviews SET Numbers='".$count2."' WHERE Numbers='".$count1."'";
  	mysqli_query($conn, $sql);
    	    	echo '<script language="javascript">';
echo 'alert("Deleted!")';
echo '</script>';
//refresh the page
header("Refresh:0; url=login.php");

    
  }


  if (isset($_POST['bin3']))
  {
  	$count1=$count-3;
  
$sql = "DELETE FROM reviews WHERE Numbers='".$count3."'";
  	mysqli_query($conn, $sql);

		$sql = "UPDATE reviews SET Numbers='".$count2."' WHERE Numbers='".$count1."'";
  	mysqli_query($conn, $sql);

  	$sql = "UPDATE reviews SET Numbers='".$count3."' WHERE Numbers='".$count2."'";
  	mysqli_query($conn, $sql);
  



  	    	echo '<script language="javascript">';
echo 'alert("Deleted!")';
echo '</script>';
//refresh the page
header("Refresh:0; url=login.php");

    
  }





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
	<style type="text/css">
		.line-3colors {
    background-image: repeating-linear-gradient( 135deg, #333333, #333333 5%, #ffffff 2%, #ffffff 5%, #ffffff 6% , #00B906 5%,#00B906 11%, #ffffff 5%, #ffffff 12%, #ffffff 10% ,white 9% );
    height: 20px;
    border:solid 0.1px #333333;
}
	</style>

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
	

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2><span  style="font-size:80px; font-family:VivaBeautiful;">Find the perfect mask for your hair</span></h2>
		   					<p><a href="services.php" class="btn btn-primary btn-lg">Get yours here</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/3.jpeg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2><span  style="font-size:80px; font-family:VivaBeautiful;">Find the perfect mask for your hair</span></h2>
		   					<p><a href="services.php" class="btn btn-primary btn-lg">Get yours here</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/1.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2><span  style="font-size:80px; font-family:VivaBeautiful;">Find the perfect mask for your hair</span></h2>
		   					<p><a href="services.php" class="btn btn-primary btn-lg">Get yours here</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
<div class="container-fluid animate-box line-3colors"> </div> 
<div id="pomosna">
	<div id="fh5co-testimonial" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2 i>Clients' Reviews</h2>
					<!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>-->
				</div>
				<div class="col-md-4 text-center item-block">
					<blockquote>
						<p>&ldquo; <?php echo $array1[2] ?> &rdquo;</p>
						<p><span class="fh5co-author"><cite>  <?php echo $array1[1] ?>   </cite></span></p>
							<?php if ($admin): ?>
					
						 <form method="post">
						<button type="submit" class="btn bin" name="bin1"> <img src="images/bin.png"> </button>
					</form>
	<?php endif; ?>
					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
					<blockquote>
						<p>&ldquo; <?php echo $array2[2] ?> &rdquo;</p>
						<p><span class="fh5co-author"><cite> <?php echo $array2[1] ?> </cite></span></p>
							<?php if ($admin): ?>
					
						 <form method="post">
						<button type="submit" class="btn bin" name="bin2"> <img src="images/bin.png"> </button>
					</form>
	<?php endif; ?>
					</blockquote>
				</div>
				<div class="col-md-4 text-center item-block">
						
					<blockquote>
						<p>&ldquo;  <?php echo $array3[2] ?> &rdquo;</p>
						<p><span class="fh5co-author"><cite>  <?php echo $array3[1] ?> </cite></span></p>
							<?php if ($admin): ?>
					
						 <form method="post">
						<button type="submit" class="btn bin" name="bin3"> <img src="images/bin.png"> </button>
					</form>
	<?php endif; ?>
					</blockquote>
				</div>
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

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

