<?php

include('config.php');

$query="SELECT * FROM student";
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

    <title>CRUD PROJECT</title>
  </head>
  <body>
    
    <div class="container">
        <h1 class="text-center">This is crud project</h1>

    <div class="ab text-right" style="margin-bottom:20px">
        <a href="insert.php" class="btn btn-success">Add Data</a>
    </div>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Country</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if($query_run){
        while($row=mysqli_fetch_array($query_run)){
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['contact'] ?></td>
                    <td><?php echo $row['country'] ?></td>

                    
                    <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <td><input type="submit"  class="btn btn-primary" value="Edit" name="edit"></td>
                    </form>
                    <form action="delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <td><input type="submit"  class="btn btn-danger" value="Delete" name="delete"></td>
                    </form>

                </tr>
            <?php
        }
    }
    else{
        echo "No Record Found";
    }
  ?>
    
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>