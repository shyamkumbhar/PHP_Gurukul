<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Image Uploading Form</title>
  </head>
  <body>
        <div class="container">
        <h2 class="text-center mb-4 mt-4">Image Uploading Form</h2>

       <div class="row">
           <div class=" col-4 offset-4 ">
           <form method="post" action="getdata.php"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Please Upload Image</label>
                <input type="file" name="image" id="image" class="form-control" >
            </div>
         
            <button type="submit" name="regSubmit" class="btn btn-primary w-100" >Upload</button>
        </form>
           </div>
       </div>
    </div>

    
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>