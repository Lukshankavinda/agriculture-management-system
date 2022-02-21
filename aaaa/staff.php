<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$eid=$_GET['eid'];
$result = mysqli_query($conn, "select * from staff where eid='$eid'");

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Farm an Agriculture Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //custom-theme -->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner1" id="home" style="background-image: url('h2.jpg');">>
		<div class="center-container inner_agile">
			<!-- top_header_agile_info_w3ls -->
			<div class="top_header_agile_info_w3ls">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						<h1><a class="navbar-brand" href=""><span>S</span>taff</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<div class="w3l_header_left">
							
						</div>
						<div class="clearfix"> </div>

						<div id="m_nav_container" class="m_nav wthree_bg">
							<nav class="menu menu--sebastian">
								<ul id="m_nav_list" class="m_nav menu__list">
									<li class="m_nav_item active" id="m_nav_item_1"> <a href="" class="link link--kumya"><i class="fa fa-user" aria-hidden="true"></i><span data-letters="Profile">Profile</span></a></li>
									<li class="m_nav_item" id="moble_nav_item_3"> <a href="map.php?eid=<?php echo $eid?>" class="link link--kumya"><i class="fa fa-map" aria-hidden="true"></i><span data-letters="Map">Map</span></a></li>
									<li class="m_nav_item" id="moble_nav_item_4"> <a href="message.php?eid=<?php echo $eid?>" class="link link--kumya"><i class="fa fa-comment" aria-hidden="true"></i><span data-letters="Message">Message</span></a></li>
									<li class="m_nav_item" id="moble_nav_item_4"> <a href="login.php" class="link link--kumya"><i class="fa fa-sign-out" aria-hidden="true"></i><span data-letters="Logout">Logout</span></a></li>

								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>

			<!--// top_header_agile_info_w3ls -->
		</div>
	</div>
	<!-- //banner -->

	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="Username" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<input type="password" name="password" placeholder="Confirm Password" required="">
								<input type="submit" value="Sign Up">
							</form>
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->
	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="home.php">Home</a><i>|</i></li>
				<li>Staff </li>
			</ul>
		</div>
	</div>
	<!-- contact -->
	<div class="banner-bottom">
		<div class="container">
			<h2 class="title-w3-agileits inner">Profile</h2>
			<br><br>

			
			<div style="margin:10% 25%" class="col-md-4 wthree_contact_left">
				
				
				<ul>
				<?php while ($row1 = mysqli_fetch_array($result)) { ?>
                 <li><span class="fa fa-user" aria-hidden="true"></span><?php echo " ".$row1['efname']." ".$row1['elname']; ?></li>
				 <li><span class="fa fa-home" aria-hidden="true"></span><?php echo " ".$row1['eaddress']; ?></li>
				 <li><span class="fa fa-phone" aria-hidden="true"></span><?php echo " ".$row1['pnum']; ?></li>
				  <?php } ?>
				</ul><br><br>
				
			</div>
			
			<div class="clearfix"> </div>

		</div>
	</div>
	<!-- //contact -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- //load-more -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
</body>

</html>