<?php

session_start();
$isloggedin = isset($_SESSION["username"]);

?>
	<link rel="icon" href="images/cvet.png" type="images" sizes="16x16">

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