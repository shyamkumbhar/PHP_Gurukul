<?php

extract ($_POST);
if(isset($loginSubmit)){
    /* mysql connectivity */
$con = new mysqli("localhost", "root", "", "reg_10am");

/* write Query */
$query = "SELECT * FROM users WHERE EMAIL = '$uemail'  ";
}


?>



<!-- Array  // FOR DEVLOPMENT PROCESS
(
    [uemail] => 
    [upassword] => 
    [loginSubmit] => 
) -->