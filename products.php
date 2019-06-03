<?php
include_once 'conn.php';
$type = $_GET['type'];
$demand = $_GET['demand'];
$sql="SELECT mask_id, path, price, tekst FROM masks WHERE type = '$type' and demand = '$demand'";
$mask_id;
$image_path;
$price;
$tekst;
   $result=mysqli_query($conn,$sql);
   if (mysqli_num_rows($result) > 0) {
   	$row = mysqli_fetch_assoc($result);
   	$mask_id = $row["mask_id"];
   	$image_path = $row["path"];
   	$price = $row["price"];
   	$tekst = $row["tekst"];
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
	<link rel="stylesheet" href="css/style2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<?php include 'header2.php'; ?>
	


	

	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2></h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a class="fh5co-entry" href="#">
						<figure>
						<img src="<?php echo $image_path ?>" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
						</figure>
						
					</a>
				</div>
				<div class="col-md-4">
					<span class="fh5co-entry" >
						<div class="fh5co-copy">
							<h3><?php echo $mask_id?></h3>
							<p><?php echo $tekst?></p>
							<div class="price"><sup class="currency">$</sup><?php echo $price?><small>/200ml</small></div>
							<!--<div class="col-md-12 text-center">-->
								
								<a href="addtocart.php?mask=<?php echo $mask_id?>" class="btn btn-primary btn-outline with-arrow" name="add">Add to Cart <i class="icon-arrow-right"></i></a>
							<!--</div>-->
						</div>
					</span>
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

