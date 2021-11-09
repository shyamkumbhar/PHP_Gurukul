<?php
/* mysql connectivity */
$con = new mysqli("localhost", "root", "", "reg_10am");

/* write Query */
$query = "SELECT * FROM users WHERE is_deleted = 0";

/* Execute the Query  */
$result = $con->query($query);

/* // fetch data from database
while($data = $result -> fetch_object()) {

    // echo "<pre>";
    // print_r($data);
}
 */



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Archive Data Table</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col ">
                <h2>This is Your Archive Data....</h2>
                <a href="./register.php" class="btn btn-primary float-right mb-4">Register Here</a>
                <a href="./view.php" class="btn btn-success float-right mr-3">View Data</a>
                <table class="table table-dark">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                       <?php
                        while($data = $result -> fetch_object()) {

                            echo "<tr>";
                                echo "<td>$data->id</td>";
                                echo "<td>$data->NAME</td>";
                                echo "<td>$data->EMAIL</td>";
                                echo "<td>$data->PASSWORD</td>";
                                echo "<td>$data->MOBILE</td>";
                                echo "<td>";
                                   

                                echo "<a href='recover.php?recoverId=$data->id' class='btn btn-primary btn-sm mr-1'>Recover</a>";
                                echo "<a href='delete.php?hardDelId=$data->id' class='btn btn-danger btn-sm'>Delete</a>";
                               
                                  
                                echo"</td>";
    
                            echo "</tr>";
                            }
                       
                       ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>