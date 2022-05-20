
    <?php 
$RegNum=filter_input(INPUT_POST, 'number');
$FullName=filter_input(INPUT_POST, 'name');
$PhoneNum=filter_input(INPUT_POST, 'phone');
$Email=filter_input(INPUT_POST, 'email');
$Message=filter_input(INPUT_POST, 'message');


if(!empty($RegNum) && !empty($FullName) && !empty($PhoneNum) && !empty($Email) && !empty($Message)){




$con=  mysqli_connect('localhost:3307','root','','login');/*($host,$dbusername, $dbpassword , $dbname);*/

if($con){

$query="INSERT INTO custinformation (CustRegistNum,CustFullName,CustPhoneNumber,CustEmail,CustMessage)VALUES('$RegNum','$FullName','$PhoneNum','$Email','$Message')";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Contact Us</title>
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
			<h1 class="mt-4 mb-3">Contact
				AgriLanka
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
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</div>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31726.689866763852!2d81.2687014181572!3d6.285246808853622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae69cf60fdb4ae7%3A0x85fb3380b084b28a!2sTissamaharama!5e0!3m2!1sen!2slk!4v1616502356374!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 contact-right">
          <h3>Contact Us</h3>
          <p>
            No.266
            <br>Agrarian Service Centre,<br> Tissamaharama.
            <br>
          </p>
          <p>
            <abbr title="Phone">Phone</abbr>: (047)-2236368
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">Hours</abbr>: Monday - Friday: 8:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4 contact-left">
          <h3>Contact AgriLanka</h3>
          <form id="formal" name="formal" method="post" action="contactus.php">
           
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
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="5" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton" >
                Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer starts from here-->
    <?php include('../footer.php');?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</body>
</html>
