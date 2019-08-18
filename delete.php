<?php

include('config.php');
$id=$_POST['id'];

$query="DELETE FROM student  WHERE id='$id'";

        $query_run=mysqli_query($conn,$query);

        if($query_run){
            echo "<script>alert('data Delete succesfully')";
            header('location:index.php');
        }
        else{
            echo "<script>alert('data not Delete ')";
        }



?>
