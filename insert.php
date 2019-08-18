<?php

include('config.php');

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];

    $query="INSERT INTO student (fname,lname,contact,country)VALUES('$fname','$lname','$contact','$country')";

    $query_run=mysqli_query($conn,$query);

    if($query_run){
        echo "<script>alert('Data insert successfully');</script>";
        header('location:index.php');
    }
    else{
        echo "<script>alert('Data not insert ');</script>";
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add data</title>
  </head>
  <body>
    <div class="container">
    <form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">First Name</label>
      <input type="text" class="form-control"  placeholder="First Name" name="fname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Last Name</label>
      <input type="text" class="form-control"  placeholder="last Nmae" name="lname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Contact</label>
      <input type="text" class="form-control"  placeholder="Contact" name="contact" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Country</label>
      <input type="text" class="form-control"  placeholder="Country" name="country" required>
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
  <a href="index.php" class="btn btn-danger">Cancel</a>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>