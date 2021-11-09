<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Registeration Form</title>
  </head>
  <body>
        <div class="container">
       <div class="row">
           <div class="  col-4 offset-4 ">
               <h2 class="text-center mb-4 mt-4">Registration Form</h2>
           <form method="post" action="getdata.php" >
            <div class="form-group">
                <label for="fname">Full Name</label>
                <input type="text" name="fname" id="fname" class="form-control" >
            </div>
            <div class="form-group">
                <label for="uemail">Email</label>
                <input type="email" name="uemail" id="uemail" class="form-control" >
            </div>
            <div class="form-group">
                <label for="upassword">Password</label>
                <input type="password" name="upassword" id="upassword" class="form-control" >
            </div>
            <div class="form-group">
                <label for="umobile">Mobile</label>
                <input type="text" name="umobile" id="umobile" class="form-control" >
            </div>
            <button type="submit" name="regSubmit" class="btn btn-primary float-right" >Submit</button>
        </form>
           </div>
       </div>
    </div>

    
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>