<?php session_start(); ?>
<?php require_once('Login/inc/connection.php'); ?>
<?php require_once('Login/inc/functions.php'); ?>

<?php

      // checking if a user is logged in
	   if (!isset($_SESSION['user_id'])) {
		header('Location: http://localhost/agrilanka/Login/login.php');
	   }

		// getting the user information
		$query = "SELECT * FROM user WHERE id = {$_SESSION['user_id']} LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_num_rows($result_set) == 1) {
				// user found
				$result = mysqli_fetch_assoc($result_set);
			} 
		} 
?>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/agrilanka/Home/index.php">
            <img src="../project/images/logoAgriLanka.png" style="width: 60px; height:60px;" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">

               <li class="nav-item">
                     <a class="nav-link" href="http://localhost/agrilanka/Home/index.php">Home</a>
                  </li>

               <?php
                  if($result['type']=='Officer'){
                    echo '<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Forms
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                       
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/seeds.php">Seeds</a>
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/plants.php">plants</a>
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/fertilizer.php">Fertilizer</a>
                       
                    </div>
                 </li>';}
                  
                  ?>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    tables
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                       
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/display.php">Seeds</a>
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/plants_display.php">plants</a>
                       <a class="dropdown-item" href="http://localhost/agrilanka/form/fertilizer_display.php">Fertilizer</a>
                       
                    </div>
                 </li>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Advertiesment
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                     
                     <a class="dropdown-item" href="http://localhost/agrilanka/advertisement/form.php">Create</a>
                     <a class="dropdown-item" href="http://localhost/agrilanka/advertisement/view.php">View</a>
                  </div>
               </li>

                  <li class="nav-item">
                     <a class="nav-link" href="http://localhost/agrilanka/project/about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="http://localhost/agrilanka/project/faq.php">FAQ</a>
                  </li>
                  <li class="nav-item" >
                     <a class="nav-link" href="http://localhost/agrilanka/project/contactus.php">Contact Us</a>
                  </li>
  
                  <a href="http://localhost/agrilanka/Login/logout.php" class="btn btn-danger btn-md">
                 <span class="glyphicon glyphicon-log-out"></span> Log out </a>
                
                  </ul>
                  
               
            </div>
        </div>
    </nav>
   
    <br>

    <div class="container">
      <div class="row">
         <h4 style="color:#105e21;"> Welcome </h4> <h4 style="color:#08034d;"> &nbsp;&nbsp;<?php echo $_SESSION['name']; ?>...</h4>
      </div>
   </div>


