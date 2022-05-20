<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php require_once('functions.php'); ?>
<?php 

	$errors2 = array();
	$name = '';
	$email = '';
	$password = '';
	$type = '';
	$code = '';

	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		 $code = $_POST['code'];

		// checking required fields
		$req_fields = array('name', 'email', 'password','type','code');

		foreach ($req_fields as $field) {
			if (empty(trim($_POST[$field]))) {
				$errors2[] = $field . ' is required';
			}
		}

		// checking max length
		$max_len_fields = array( 'name' =>100, 'email' => 100, 'password' => 40, 'code' =>8);

		foreach ($max_len_fields as $field => $max_len) {
			if (strlen(trim($_POST[$field])) > $max_len) {
				$errors2[] = $field . ' must be less than ' . $max_len . ' characters';
			}
		}

		// checking email address
		if (!is_email($_POST['email'])) {
			$errors2[] = 'Email address is invalid.';
		}

		// checking if email address already exists
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_num_rows($result_set) == 1) {
				$errors2[] = 'Email address already exists';
			}
		}

		if (empty($errors2)) {
			// no errors2 found... adding new record
			$name = mysqli_real_escape_string($connection, $_POST['name']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$type = mysqli_real_escape_string($connection, $_POST['type']);
			$code = mysqli_real_escape_string($connection, $_POST['code']);
			// email address is already sanitized
			$hashed_password = sha1($password);

			$query = "INSERT INTO user ( ";
			$query .= "name, email, password, type, code, is_deleted";
			$query .= ") VALUES (";
			$query .= "'{$name}', '{$email}', '{$hashed_password}', '{$type}', '{$code}', 0";
			$query .= ")";

			$result = mysqli_query($connection, $query);

			if ($result) {
				// query successful... redirecting to users page
				header('Location: ../login.php?user_added=true');
			} else {
				$errors2[] = 'Failed to add the new record.';
			}

			
		}

	}

?>
