<?php

$recoverId = $_GET['recoverId'];
/* Database Connectivity */
 $con = new mysqli("localhost","root","","reg_10am");
 
/* write Query */
$query = "UPDATE users SET  is_deleted = 1 WHERE id = '$recoverId' ";

$result = $con->query($query);
if($result){
 header('location:view.php');

}
else{
    echo mysqli_error($con);
}

?>
