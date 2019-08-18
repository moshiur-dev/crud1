<?php

include('config.php');

$id=$_POST['id'];
$query="SELECT * FROM student WHERE id='$id' ";
$query_run=mysqli_query($conn,$query);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit data</title>
  </head>
  <body>
    <div class="container">
    <?php
    
        if($query_run){
            while($row=mysqli_fetch_array($query_run)){
                ?>
                <form method="POST">
                <div class="form-row">
                <input type="hidden" name="id" value="<?php echo $row['id'] ;?>">
                    <div class="form-group col-md-6">
                    <label for="">First Name</label>
                    <input type="text" class="form-control"  placeholder="First Name" name="fname" value="<?php echo $row['fname'] ;?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control"  placeholder="last Nmae" name="lname" value="<?php echo $row['lname'] ;?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="">Contact</label>
                    <input type="text" class="form-control"  placeholder="Contact" name="contact" value="<?php echo $row['contact'] ;?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="" >Country</label>
                    <input type="text" class="form-control"  placeholder="Country" name="country" value="<?php echo $row['country'] ;?>" >
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary" name="update">Update Data</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
                </form>
                <?php
            }
        }
    ?>

    <?php
    
    if(isset($_POST['update'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $contact=$_POST['contact'];
        $country=$_POST['country'];

        $query="UPDATE student SET fname='$fname',lname='$lname',contact='$contact',country='$country' WHERE id='$id'";

        $query_run=mysqli_query($conn,$query);

        if($query_run){
            echo "<script>alert('data update succesfully')";
            header('location:index.php');
        }
        else{
            echo "<script>alert('data not update ')";
        }
    }
    
    ?>
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>