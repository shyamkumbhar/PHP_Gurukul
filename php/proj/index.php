<?php


/* step-1 Db Connection */
$con = new mysqli('localhost', 'root', '', 'proj');

/* step-2 check Database Connection */
if ($con->client_info) {
    echo "Database is Connected <br>";
} else {
    echo "Database is Fail..<br>";
}


/* step3- Write Query */
$sql = "SELECT * from cities";


/* Step-4 Quey Exicute/query fire */
$result = $con->query($sql);


/* Step-5 fetch data */
$data = $result->fetch_object();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Handling</title>
    <style type="text/css">
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Registeration Form</h2>
    <form action="getdata.php">

        <p><input type="email" name="email" placeholder="Email"></p>
        <p><input type="password" name="password" placeholder="Password"></p>
        <P>City:
            <select name="city">
                <?php 
                while ($data = $result->fetch_object()) {
                    echo "<option value='$data->id'>$data->city_name</option>";
                }
                ?>
               
 
            </select>
        </P>
        <p><input type="text" name="mobile" placeholder="mobile"></p>
        <p><input type="submit" value="Submit"></p>
    </form>
    <h2><a href="view.php">View Data</a></h2>
</body>

</html>