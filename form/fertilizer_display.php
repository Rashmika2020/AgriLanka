<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Fertilizer table </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="../project/css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="../project/css/style.css" rel="stylesheet">
  <style type="text/css">
    table{
       
        width: 100%;
        color: #5ad692;
        font-family: monospace;
        font-size: 25px;
        text-align: left:
        border:2px solid #ccc;
        
        

    }
    th{
        background-color: #575154;
        color: white;
        border:2px solid black;
    }
    tr:nth-child(even){
        background-color: white;
    }

    tr:nth-child(odd){
        background-color: black;
    }
    

</style>
</head>
<body>

<body>
    <!-- Navigation -->
    <?php include('../header.php'); ?>
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Fertilizer AgriLanka
				
			</h1>
            
		</div>
	</div>

    <form mehod="post">
    <label>Search</label>
    <input type="text" name="search">
    <input type="submit" name="submit">
</form>
<table style= "background-color:red;">
     <tr>
      <th>Id</th>
      <th>type</th>
      <th>unit_price</th>
      <th>amount</th>
     </tr>
     <?php
    $conn = mysqli_connect("localhost:3307", "root", "", "login");
    if($conn-> connect_error){
        die("connection field:". $conn-> connect_error);
    }
    $sql = "SELECT Id , type , unit_price, amount from fertilizer_table ";
    $result = $conn-> query($sql);
    
    if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["Id"]."</td><td>". $row["type"]."</td><td>". $row["unit_price"]."</td><td>". $row["amount"] ."</td></tr>";


        }
        echo "</table>";

    }
    else {
        echo "o result";
    }
    if(isset($_POST['submit']))
    {
        $query="SELECT * from fertilizer_table where type='$_POST[type]'" ;
        $run = mysqli_query($conn,$query) or die(mysqli_error());
    }
    $conn-> close();
    ?>
       <!--footer starts from here-->
       <?php include('../footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
   
</table>
</body>
</html>