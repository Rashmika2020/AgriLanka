<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Plants Form </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../project/css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../project/css/style.css" rel="stylesheet">

    <style>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
 
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-image: linear-gradient(to bottom right,lawngreen, green, white);
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


        </style>

</head>
<body>
    <!-- Navigation -->
    <?php include('../header.php'); ?>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Plants AgriLanka</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="http://localhost/agrilanka/Home/index.php">Home</a>
				</li>
				<!--<li class="breadcrumb-item active">vegatables</li>-->
			</ol>
		</div>
	<div class="">
		<!-- Project One -->
		<div class="row">
			<div class="col-md-7">
				<a href="#">
					<img class="img-fluid rounded mb-3 mb-md-0" src="images/plantsform.jpg" alt="" />
				</a>
			</div>
			<div class="col-md-5">
            <form action="plantsForm.php"method="post">
    <label>Id:</label><input type="text" name="Id"><br>
    <label>type:</label><input type="text" name="type"><br>
    <label>unit_price:</label><input type="text" name="unit_price"><br>
    <label>amount:</label><input type="text" name="amount"><br>
    <button type="submit" name="submit">submit</button>
    <button type="submit" name="Delete">Delete</button>
    </form>
			</div>
		</div>
		<!-- /.row -->
	</div>
    <hr>
	
		

    
	
		<hr>

		
    </div>
    <!-- /.container -->

    <!--footer starts from here-->
    <?php include('../footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>



  

    
  
