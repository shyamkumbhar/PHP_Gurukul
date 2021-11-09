<?php
extract($_POST);
if (isset($regUpdate)) {
// echo "Received data Succesfully"; //for testing Perpose only
echo "<pre>";  // for testing
print_r($_POST); // for testing


/* Database Connectivity */
 $con = new mysqli("localhost","root","","reg_10am");
 
/* write Query */
$query = "UPDATE users SET NAME = '$fname', EMAIL = '$uemail',PASSWORD = '$upassword',MOBILE = '$umobile' WHERE id = '$userId' ";

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
