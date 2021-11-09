<?php
extract($_POST);
if (isset($regSubmit)){
// echo "Received data Succesfully"; //for testing Perpose only
echo "<pre>";  // for testing
print_r($_POST); // for testing


/* Database Connectivity */
 $con = new mysqli("localhost","root","","reg_10am");
 
/* write Query */
$query = "INSERT INTO users VALUES (NULL,'$fname','$uemail','$upassword','$umobile')";

$result = $con->query($query);
if($result){
    // echo "Data Has been Store Succesfully"; //testing perpose
 header('location:view.php');

}
else{
    echo mysqli_error($con);
}

}


?>
