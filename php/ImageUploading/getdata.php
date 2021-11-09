<?php
echo "<pre>";
print_r($_FILES);

$img_name = $_FILES['image']['name'];
$img_type = $_FILES['image']['type'];
$img_tmp_name = $_FILES['image']['tmp_name'];
$destination = "uploads/".$img_name;


/* Database Connectivity */
$con = new mysqli("localhost","root","","reg_10am");
 
/* write Query */
$query = "INSERT INTO gallery VALUES (NULL,'$img_name') ";

if(move_uploaded_file($img_tmp_name,$destination)){
    if($con->query($query)){
      header('location:view.php');
    }else{
        echo "Your File Uploaded but not Submitted";
    }
    

}else{
    echo "Your File Does not Uploaded but not Submitted";

}

?>