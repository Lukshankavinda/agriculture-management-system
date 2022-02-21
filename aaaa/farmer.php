<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fid=$_GET['fid'];
$result = mysqli_query($conn, "select * from farmer where fid='$fid'");

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
      .tableFixHead {
        overflow-y: auto;
        height: 500px;
        
      }
      .tableFixHead thead th {
        position: sticky;
        top: 0;
      }
</style>
	<title>Farm an Agriculture Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
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

<body >
	<!-- banner -->
	<div class="banner1" id="home" style="background-image: url('h4.jpg');">
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
						<h1><a class="navbar-brand" href=""><span>F</span>armer</a></h1>
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
									<li class="m_nav_item" id="moble_nav_item_4"> <a href="farmermessage.php?fid=<?php echo $fid; ?>" class="link link--kumya"><i class="fa fa-comment" aria-hidden="true"></i><span data-letters="Message">Message</span></a></li>
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
						<h3 class="agileinfo_sign">Update Harvest Details</h3>
						<div class="login-form">
							<form action="update.php" method="post" enctype="multipart/form-data">
								<input name="fid" class="w3-input w3-border" value="<?php echo $fid; ?>" type="hidden">
								<input name="hid" id="hid" class="w3-input w3-border" type="hidden">
								<input type="file" name="photo" placeholder="National ID" required="">
								<input type="text" name="weight" placeholder="Enter Harvest Weight" required="">
								<div class="tp">
									<input name="update" type="submit" value="Update">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Harvest image</h3>
						<div class="login-form">
							
							<img id="image" style="width:50%;height:auto;margin-left:25%;margin-right:25%">
							
						</div>
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
						<h3 class="agileinfo_sign">Add Harvest Details</h3>
						<div class="login-form">
							<form action="add.php" method="post"  enctype="multipart/form-data">
							<input name="fid" class="w3-input w3-border" value="<?php echo $fid; ?>" type="hidden">
								<input type="text" name="htype" placeholder="Harvest Type" required="">
								<input type="text" name="hname" placeholder="Harvest Name" required="">
								<input type="file" name="photo" placeholder="Image" required="">
								<input type="text" name="weight" placeholder="Weight(Kg)" required="">
								<input type="submit" value="Add" name="add">
							</form>
						</div>
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
				<li>Farmer</li>
			</ul>
		</div>
	</div>
	<!-- gallery -->
	<div class="banner-bottom">
	


		<div class="container">
			<h2 class="title-w3-agileits inner">Farmer</h2>
			<p class="quia"><?php if(!empty($_GET['message'])) {
	$m1=$_GET['message'];
?>
<?php echo $m1; ?>
   
<?php } ?></p><br><br><br>


		
			<div class="banner_bottom_agile_grids">
				<div class="wthree_banner_bottom_right_grids">
				
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-eye" aria-hidden="true"></i><br><br>
								  <h4 class="w3-center">My Profile</h4><br>
         
								 <?php while ($row1 = mysqli_fetch_array($result)) { ?>
								 <p style="font-size: 15px;">🆔<?php echo "  ".$row1['fid']; ?></p>
								 <p style="font-size: 15px;">👤<?php echo "  ".$row1['fname']." ".$row1['lname']; ?></p>
								 <p style="font-size: 15px;">🏠<?php echo "  ".$row1['homeno'].$row1['village'].$row1['faddress']; ?></p>
								 <p style="font-size: 15px;">☎️<?php echo "  ".$row1['phone']; ?></p>
								 <?php } ?>
								
							</div>
						</div>
					</div>
					
			<div style="float:right;width:70%">
<?php

				
if(!empty($_GET['fid'])) {
	$fid=$_GET['fid'];
}

       $results1 = mysqli_query($conn, "select * from harvest where fid='$fid' ORDER BY date DESC");
?>
				
			<div class="tableFixHead">
<h2 align="center">Harvests</h2>
<a style="float:right;margin-bottom:10px;margin-right:10px" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Add Harvest</a>

<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:98%">
		<thead>
			<tr>
				<th>Harvest ID</th>
				<th>Harvest Type</th>
				<th>Harvest Name</th>
				<th>Weight(Kg)</th>
				<th>Photo</th>
				<th>Flag</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($results1)) { ?>
			<tr>
				<td><?php echo $row['hid']; ?></td>
				<td><?php echo $row['htype']; ?></td>
				<td><?php echo $row['hname']; ?></td>
				<td><?php echo $row['weight']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('image').src='<?php echo $row['photo']; ?>'" data-toggle="modal" data-target="#myModal4">View</button></td>
				<td><?php echo $row['flag']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('hid').value='<?php echo $row['hid']; ?>'" data-toggle="modal" data-target="#myModal2">Update</button></td>
				<td><a class="btn btn-danger" href="delete.php?del=<?php echo $row['hid']; ?>&fid=<?php echo $fid; ?>">Delete</a></td>
			</tr>
			</tbody>
		<?php } ?>
</table>
</div>

			</div>
				
					
					
				</div>
				<div class="clearfix"> </div>
				
			</div>
			
			
			
			
		</div>
	</div>
	<!-- //gallery -->


	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!---->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //load-more -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
</body>

</html>