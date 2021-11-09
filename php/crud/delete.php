<?php
if(isset($_GET['deleteId'])){
    
$deleteId = $_GET['deleteId'];
/* Database Connectivity */
$con = new mysqli("localhost", "root", "", "reg_10am");

/* write Query */
$query = "UPDATE users SET  is_deleted = 0 WHERE id = '$deleteId' ";
//execute Query
$result = $con->query($query);



if ($result) {
    header('location:view.php');
} else {
    echo mysqli_error($con);
}
}

elseif (isset($_GET['hardDelId'])) {
$hardDelId = $_GET['hardDelId'];

    /* Database Connectivity */
    $con = new mysqli("localhost", "root", "", "reg_10am");

    /* write Query */
    $query = "DELETE from users  WHERE id = '$hardDelId' ";
    //execute Query
    $result = $con->query($query);

    if ($result) {
        header('location:archieve.php');
    } else {
        echo mysqli_error($con);
    }
}
