<?php
$email = $_POST['email'];
$password = $_POST['password'];


/* step-1 Db Connection */
$con = new mysqli('localhost', 'root', '', 'proj');

/* step-2 check Database Connection */
if ($con->client_info) {
    // echo "Database is Connected <br>";
} else {
    echo "Database is Fail..<br>";
}

/* step3- Write Query */
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";


/* Step-4 Quey Exicute/query fire */
$result = $con->query($sql);


/* Step-5 fetch data/Output */
// $data = $result->fetch_object();
// print_r($result);

if ($result->num_rows ==1) {
    // echo "Valied User .<br>";
    header("location:welcome.php");

} else {
    echo "InValied User .<br>";

}



?>
