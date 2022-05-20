<?php
/*$server = "localhost";
$username = "root";
$password = " ";
$dbname = "seed_form";*/

$conn = mysqli_connect('localhost:3307' , 'root', '', 'login');

if(isset($_POST['submit'])){
    if(!empty($_POST['Id']) && !empty($_POST['type']) && !empty($_POST['unit_price']) && !empty($_POST['amount'])   ){
        $Id = $_POST['Id'];
        $type = $_POST['type'];
        $unit_price = $_POST['unit_price'];
        $amount = $_POST['amount'];

        $query = "insert into plants_table(Id,type,unit_price,amount) values('$Id', '$type', '$unit_price', '$amount')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo "form submitted succesfully" ;

        }
        else{
            echo"form not submitted";
        }
    }
    else{
        echo "all fields required";
    }
}

?>