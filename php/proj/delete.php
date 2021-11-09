<?php

/* fetch id */
$user_id = $_GET['id'];

/* step-1 Db Connection */
$con = new mysqli('localhost', 'root', '', 'proj');

/* step-2 check Database Connection */
if ($con->client_info) {
    echo "Database is Connected <br>";
} else {
    echo "Database is Fail..<br>";
}


/* step3- Write Query */
$sql = "DELETE  FROM users WHERE id='$user_id'";


/* Step-4 Quey Exicute/query fire */
$result = $con->query($sql);

/* Step-5 fetch data/Output */
if($result){
    header("location:view.php"); // redirect
}else{
 echo mysqli_error($con);
}


?>