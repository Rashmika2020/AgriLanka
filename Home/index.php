<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home</title>
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

    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/officer.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                     
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/farmer.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                    
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/paddyfield.jpeg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    

        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
               <br><br>
                  <h2>WELCOME TO AGRI LANKA... </h2>
                  <p> Our aim is to provide you the best services regarding our Institution. </p>
                  <br><h5> We are providing, </h5>
                  <ul>
                     <li>Update about ongoing activities.   </li>
                     <li>Information about  seeds and other services available. </li>
                     <li>Find a better price for your harvest </li>
                     <li>Manage online delivery process of  the fruits and vegetables in Your area. </li>
                     
                  </ul>
                  <p>And we are here to answer your questions to support You anytime</p>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <div class="row">
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="http://localhost/agrilanka/form/display.php">
                           <img class="card-img-top" src="images/seeds.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="http://localhost/form/display.php">Seeds</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="http://localhost/agrilanka/form/plants_display.php">
                           <img class="card-img-top" src="images/plants.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">plants</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="http://localhost/agrilanka/form/fertilizer_display.php">
                           <img class="card-img-top" src="images/fertilizers.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Fertilizers</a>
                        </h4>
                     </div>
                  </div>
               </div>
              

        <hr>
     
    <!-- /.container -->
    <!--footer starts from here-->
    <?php include('../footer.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>