<?php
echo "<pre>";
print_r($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Your Name is : $email";
    echo "Your Password is : $password";

?>