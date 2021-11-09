<?php
/* Db Connection */
$con = new mysqli('localhost','root','','proj');

/* check Database Connection */
if($con->client_info){
    echo "Database is Connected <br>";
   }else{
    echo "Database is Fail..<br>";

   }


//fetch data from the from 
$user_id = $_GET['user_id'];
$email = $_GET['email'];
$password = $_GET['password'];
$city_id = $_GET['city_id'];
$mobile = $_GET['mobile'];

// query 

$query ="UPDATE users SET email='$email',password='$password',city_id='$city_id',mobile='$mobile' WHERE id = '$user_id'";

/* Step-4 Quey Exicute/query fire */
$result = $con->query($query);

/* Step-5 fetch data/Output */
if($result){
  
 header("Location:view.php");
}else{
    echo mysqli_error($con);
}

?>