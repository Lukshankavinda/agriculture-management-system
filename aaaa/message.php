<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$inbox = mysqli_query($conn, "select * from message where mfrom='farmer'  ORDER BY date DESC");
$sent = mysqli_query($conn, "select * from message where mfrom='staff'  ORDER BY date DESC");
$eid=$_GET['eid'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<style>
      .tableFixHead {
        overflow-y: auto;
        height: 450px;
        
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
	<div class="banner1" id="home" style="background-image: url('zx.jpg');">
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
									<li class="m_nav_item" id="m_nav_item_1"> <a href="staff.php?eid=<?php echo $eid?>" class="link link--kumya"><i class="fa fa-user" aria-hidden="true"></i><span data-letters="Profile">Profile</span></a></li>
									<li class="m_nav_item" id="moble_nav_item_3"> <a href="map.php?eid=<?php echo $eid?>" class="link link--kumya"><i class="fa fa-map" aria-hidden="true"></i><span data-letters="Map">Map</span></a></li>
									<li class="m_nav_item active" id="moble_nav_item_4"> <a href="" class="link link--kumya"><i class="fa fa-comment" aria-hidden="true"></i><span data-letters="Message">Message</span></a></li>
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
						<div class="login-form">
							
								<b><p>MESSAGE:</p></b>
								<p id="sentmessage"></p><br>
								<b><p>FEEDBACK:</p></b>
								<p id="feedback"></p>
							
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
						<h3 class="agileinfo_sign">Send Message</h3>
						<div class="login-form">
						<form action="staffsend.php" method="post">
						<select name="fid" class="form-control">
						  <option value="none" selected disabled hidden> 
						  Select A Farmer
						  </option>
						<?php  
						$results3 = mysqli_query($conn, "select fid,fname,lname from farmer");
								 while ($row1 = mysqli_fetch_array($results3)) { 
									$name=$row1['fname']." ".$row1['lname'];
									$fid1=$row1['fid'];
								 
						?>		
								   <option value="<?php echo $fid1; ?>"><?php echo $name; ?></option>
						<?php  } ?>		 
							 </select><br>
							 <input name="eid" class="w3-input w3-border" type="hidden" value="<?php echo $eid; ?>">
								<input type="text" name="message" placeholder="Type your message here" required="">
								<input type="submit" value="Send" name="send">
							</form>
							
							
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
						<div class="login-form">
							<form action="staffreply.php" method="post">
							<b><p>MESSAGE:</p></b>
							<p id="inboxmessage"></p><br>
								<input name="id" id="id" class="w3-input w3-border" type="hidden">
								<input name="eid" class="w3-input w3-border" type="hidden" value="<?php echo $eid; ?>">
								<input type="text" id="reply" name="reply" placeholder="Reply here...." required="">
								<input type="submit" value="Reply" name="replym">
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
			<h2 class="title-w3-agileits inner">Staff Message</h2>
			<p class="quia"><?php if(!empty($_GET['message'])) {
	$m1=$_GET['message'];
?>

<?php echo $m1; ?>

<?php } ?></p><br><br><br>
			


		
			<div class="banner_bottom_agile_grids">
				<div class="wthree_banner_bottom_right_grids">
				
					<div style="float:left;width:48%">

					<h2 align="center">INBOX</h2>
<div class="tableFixHead">
<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:97%">
		<thead>
			<tr>
				<th>Farmer ID</th>
				<th>Date</th>
				<th>Message</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($inbox)) { 
		$fid=$row['fid'];
		$results1 = mysqli_query($conn, "select fname,lname from farmer where fid='$fid'");
		 while ($row1 = mysqli_fetch_array($results1)) { 
			$name=$row1['fname']." ".$row1['lname'];
		 }
		?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('inboxmessage').innerText='<?php echo $row['msg']; ?>';document.getElementById('reply').value='<?php echo $row['reply']; ?>';document.getElementById('id').value='<?php echo $row['id']; ?>'" data-toggle="modal" data-target="#myModal3">View</button></td>
			</tr>
			
		<?php } ?>
		</tbody>
</table>
</div>       

			</div>
					
					
					
			<div style="float:right;width:48%">
			
<h2 align="center">SENTBOX</h2>
<div class="tableFixHead">
<button class="btn btn-success" style="float:right;margin-bottom:10px;margin-right:10px" data-toggle="modal" data-target="#myModal4">Send a message</button>
<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:97%">
		<thead>
			<tr>
				<th>Farmer ID</th>
				<th>Date</th>
				<th>Message</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($sent)) { 
		$fid=$row['fid'];
		$results2 = mysqli_query($conn, "select fname,lname from farmer where fid='$fid'");
		 while ($row1 = mysqli_fetch_array($results2)) { 
			$name=$row1['fname']." ".$row1['lname'];
		 }
		?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('sentmessage').innerText='<?php echo $row['msg']; ?>';document.getElementById('feedback').innerText='<?php echo $row['reply']; ?>';" data-toggle="modal" data-target="#myModal2">View</button></td>
			</tr>
			
		<?php } ?>
		</tbody>
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