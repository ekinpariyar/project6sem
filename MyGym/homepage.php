<?php 

session_start();

include ("includes/db.php");
include ("functions/functions.php");
?>


<?php
  if (isset($_SESSION['user_email'])) {
	  header('location: index.php');
  } else{
?>

<html>
<head>
	<title>MyGym | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
			<a href="index.php"><img src="images/logo.jpg"></a>
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
<div id="navbar">
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php">Contact Us</a></li>
		<?php
			if (isset($_SESSION['user_email'])) {
			}else {
		?>	
				<li><a href="signup.php">Signup</a></li>
				<li><a href="login.php">Login</a></li>
		<?php
			}
		?>
	</ul>
		<div id="login-btn-signup">
		</div>

</div>
<!-- NavBar End -->

		<!-- Content Start -->
		<div class="content_wrapper">
    
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: yellow; text-align:center;"><center>No pain no gain</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
                <div id="products_box" style="background-image: url(images/bg1.jpg)">
                </div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2023 all rights reserved | Developed By: <a href="https://www.facebook.com/ekinpariyar/">Ekin pariyar</a></h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>

<?php
  }
?>