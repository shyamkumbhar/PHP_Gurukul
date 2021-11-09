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
$sql = "SELECT users.*,cities.city_name from users INNER JOIN cities ON users.city_id=cities.id ";


/* Step-4 Quey Exicute/query fire */
$result = $con->query($sql);




/* Step-5 fetch data */



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view.php</title>
</head>

<body>
    <h2 align="center"><a href="index.php">Register</a></h2>
    <h2 align="center" > View Data from Database</h2>
    <table border="1" align="center">
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Mobile</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        /* Step-5 fetch data */

        while ($data = $result->fetch_object()) {
           /*  echo "<pre>";
            print_r($data); */
            echo "<tr>";
            echo "<td> $data->id</td>";
            echo "<td> $data->email</td>";
            echo "<td> $data->password</td>";
            echo "<td> $data->city_name</td>";
            echo "<td> $data->mobile</td>";
            echo "<td><a href='delete.php?id=$data->id'>Delete</a> </td>";
            echo "<td><a href='edit.php?id=$data->id'>Edite</a> </td>";
            echo "</tr>";

        }
        ?>

    </table>
    </table>
</body>

</html>