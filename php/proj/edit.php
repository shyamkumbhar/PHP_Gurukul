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
$sql = "SELECT * FROM users WHERE id='$user_id'";


/* Step-4 Quey Exicute/query fire */
$result = $con->query($sql);

/* Step-4 Quey Exicute/query fire */
$sql2 = "SELECT * from cities";
$result2 = $con->query($sql2);

/* Step-5 fetch data/Output */
$data = $result->fetch_object();
// print_r($data)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Form</title>
    <style type="text/css">
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Edit Form</h2>
        <form action="update.php" method="GET">
            <input type="hidden" name="user_id" value="<?php echo $data->id?>"> 
            <p>Email:<input type="email" name="email" placeholder="Email" value="<?php echo $data->email ?>"></p>
            <p>Password:<input type="text" name="password" placeholder="Password" value="<?php echo $data->password ?>"></p>
            <P>City:
            <select name="city_id">
                <?php 
                while ($data2 = $result2->fetch_object()) {

                    if ($data->city_id ==$data2->id) {
                    echo "<option value='$data2->id' selected = 'selected' >$data2->city_name</option>";
                    # code...
                    } else {
                    echo "<option value='$data2->id'>$data2->city_name</option>";
                    # code...
                    }
                    
                }
                ?>
               
 
            </select>
        </P>
            <p>Mobile:<input type="text" name="mobile" placeholder="mobile" value="<?php echo $data->mobile ?>"></p>
            <p><input type="submit"   value="Update"></p>
        </form>
    <h2><a href="view.php">View Data</a></h2>
</body>
</html> 