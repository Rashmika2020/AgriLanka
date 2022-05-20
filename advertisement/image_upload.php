<?php
$data = array();
 
if(isset($_GET['files'])){  
	$error = false;
	$files = array();
	
 
	$uploaddir = './images/';
	foreach($_FILES as $file)
	{
		$temp = explode(".", $file["name"]);
		$extension = end($temp);
		$random = rand();
		$path = "images/".$random.".".$extension;
		$random_name = $random.".".$extension;
		
		move_uploaded_file($file['tmp_name'], $uploaddir .basename($random .".".$extension));
		echo $path;
	}
}
?>