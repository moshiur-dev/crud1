<?php

$host="localhost";
$user="root";
$pass="mysql";
$db="pari";

$conn=mysqli_connect($host,$user,$pass);

$db_d=mysqli_select_db($conn,$db);




?>