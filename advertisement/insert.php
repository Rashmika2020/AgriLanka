<html>
	<body>
<img style="width: 600px; height: 250px;">



<?php
	$subject = $_POST['subject'];
	$body = stripslashes($_POST['body']);
	
	require("include/connect.php");
	
	if(empty($subject)){
		$message = "Subject is required!";
		header("location: form.php?message=".$message);
	}else if(empty($body)){
		$message = "Body is required!";
		header("location: form.php?message=".$message);
	}else{
		mysqli_query($con, "INSERT INTO content (subject, body)
					VALUES ('$subject', '$body')");
		$message = "Ads successfully saved!";
		header("location: view.php");
	}
?>
</body>
</html>