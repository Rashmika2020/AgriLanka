<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>

<?php 

	// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($connection, $_POST['email']);
			$password 	= mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			verify_query($result_set);

			if (mysqli_num_rows($result_set) == 1) {
				// valid user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['name'] = $user['name'];
				// updating last login
				$query = "UPDATE user SET last_login = NOW() ";
				$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";

				$result_set = mysqli_query($connection, $query);

				verify_query($result_set);

				// redirect to home.php
           header('Location: http://localhost/agrilanka/Home/index.php');
          
			} else {
				// user name and password invalid
				$errors[] = 'Invalid Username / Password';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<form action="login.php" method="post">

  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>

      <?php 
					if (isset($errors) && !empty($errors)) {
						echo '<p class="error">Invalid Username / Password</p>';
					}
				?>

				<?php 
					if (isset($_GET['logout'])) {
						echo '<p class="info">You have successfully logged out from the system</p>';
					}
				?>

      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit" type="submit" name="submit">Sign In</button>

</form>
      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>

      <form action="inc/register.php" method="post" >
      
      <label> 
          <input type="text" placeholder="Name" name="name">
        </label>
        <label>
          <input type="email" placeholder="Email" name="email">
        </label>
        <label  >
        <select name="type" class="custom-select">
        <option value="-1">select user type</option>
       <option value="officer">officer</option>
       <option value="farmer">farmer</option>
   </select>
      </label>
        <label> 
          <input type="text" placeholder="Grama Niladari Division" name="code">
        </label>
        <label>
          <input type="password" placeholder="Set Your Password" name="password">
        </label>
        <button type="submit" name="submit" class="submit">Sign Up Now</button>
          </form>
      </div>

    </div>
  </div>
<script type="text/javascript" src="JS/login.js"></script>
</body>
</html>
<?php mysqli_close($connection); ?>