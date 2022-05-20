<!DOCTYPE html>
<html lang="en">

	<?php 
	$RegNum=filter_input(INPUT_POST, 'number');
	$FullName=filter_input(INPUT_POST, 'name');
	$Question=filter_input(INPUT_POST, 'question');
	
	
	if(!empty($RegNum) && !empty($FullName) &&  !empty($Question)){
	
	
	
	
	$con=  mysqli_connect('localhost:3307','root','','login');/*($host,$dbusername, $dbpassword , $dbname);*/
	
	if($con){
	
	$query="INSERT INTO faq (Register_Number,Customer_name,Question)VALUES('$RegNum','$FullName','$Question')";
			if(mysqli_query($con,$query)){
				echo 'Your message is sucessfully delivered. Thank you for contacting us... ';
	
			}else{
				die(mysqli_error($con));
			echo 'Error occured...';	
			}
	
	}else{
		echo 'Eroor!!! connection failed';
	}
	
	}
	
	 ?>



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>FAQ</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include('../header.php'); ?>

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">FAQ AgriLanka
				
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="http://localhost/agrilanka/Home/index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">FAQ</li>
			</ol>
		</div>

		<div class="faq-main">
			<div class="" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
					  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to add an advertiesment into AgriLanka web page?</a>
					</h5>
				  </div>

				  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
					<div class="card-body">
					  First you need to click advertisement tab and then you can see the form. You need to fill the form according to your preference. Finally click submit button.</div>
				  </div>
				</div>
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingTwo">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How we find availability of the goods,which are willing to purchase?</a>
					</h5>
				  </div>
				  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="card-body">
					 When you click the Home tab you can see drop down list. Then you can see various pages such as seeds, plants and fertilizer.As well as bottom of the Home page you can see 
					 availability. Through these options you can find your choice. </div>
				  </div>
				</div>
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingThree">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can we contact officer from the AgriLanka Agrarian Service Center. </a>
					</h5>
				  </div>
				  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="card-body">
					  First you need to click "contact" tab and in here there is a contact form which is given by officers who are in AgriLanka Agrarian Service Center.
					 or in here  google map and contact number are visible for you.</div>
				  </div>
				</div>
				
			</div>
		</div>

   

	<form id="formal" name="formal" method="post" action="faq.php">
           
		<div class="control-group form-group">
		  <div class="controls">
			<label>Register Number:</label>
			<input type="text" class="form-control" id="number" name="number"required data-validation-required-message="Please enter your registratian number.">
			<p class="help-block"></p>
		  </div>
		</div>

		<div class="control-group form-group">
			<div class="controls">
			  <label>Full Name:</label>
			  <input type="text" class="form-control" id="name" name="name"required data-validation-required-message="Please enter your name.">
			  <p class="help-block"></p>
			</div>
		  </div>

		  <div class="control-group form-group">
			<div class="controls">
			  <label>Question:</label>
			  <textarea rows="5" cols="100" class="form-control" id="question" name="question" required data-validation-required-message="Please enter your question" maxlength="999" style="resize:none"></textarea>
			</div>
		  </div>

		  <button type="submit" class="btn btn-primary" id="sendMessageButton" >
			Enter</button>
	  </form>

      </div>

    <!-- /.container -->

    <?php include('../footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
