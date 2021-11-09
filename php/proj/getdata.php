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

$email = $_GET['email'];
$password = $_GET['password'];
$city = $_GET['city'];
$mobile = $_GET['mobile'];

// query 

$query ="INSERT INTO users VALUES (NULL, '$email', '$password', '$city','$mobile')";


//query fire
if($con->query($query)){
 echo "Data Register Sucessfully";
  header("Location:view.php");
}else{
    echo mysqli_error($con);
}




?>