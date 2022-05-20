<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>View</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../project/css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../project/css/style.css" rel="stylesheet">
   <style>
		img{
			width:300px;
			height: 180px;
			padding: auto;
			align: center;
		}
   </style> 
	</head>

<body onLoad="iFrameOn();" >
<?php include('../header.php'); ?>
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3" >Advertiesment</h1>
		</div>
	</div>
    <!-- Page Content -->
<div class="onlybody">

<div class="container">
		<div class="breadcrumb-main"  style="font-family:Font Awesome 5 Free; font-size:17px;">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="http://localhost/agrilanka/Home/index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Advertisement</li>
			</ol>
		</div>
</div>

<div class="d-flex justify-content-center" ">
<div  style="width: 700px;">
  <div class="card-body">
    <p class="card-title">
	<?php
	require("include/connect.php");
	
	$query = mysqli_query($con, "SELECT * FROM content");
	while($row = mysqli_fetch_array($query)){
		echo "<div class='card'>";
		echo 	$row['body'];
		echo "</div>";
		echo "<br><br>";
	}
?>
    </p>
  </div>
</div>

</div>
</div>
<?php include('../footer.php'); ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>