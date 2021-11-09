<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration form</title>
</head>

<body>
   <center>
    <form method ="post" action="getdata.php">
        <p>
            <label >First Name</label>
            <input type="text" name="fname" placeholder="First Name">
        </p>
        <p>
            <label >Last Name</label>
            <input type="text" name="lname" placeholder="last Name">
        </p>
        <p>
            <label >email</label>
            <input type="text" name="email" placeholder="Enter your Emial">
        </p>
        <p>
        
            <input type="submit" value="Display Values">
        </p>
        
    </form>

   </center>
</body>

</html>