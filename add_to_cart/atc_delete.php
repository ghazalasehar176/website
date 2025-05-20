<?php
include "db.php";
echo "User ID: ".$_GET['id'];
 


$id = $_GET['id'];
$query = "DELETE from view_pro where id = $id";
$query_run = mysqli_query($con,$query);



header("location:atc_read.php");

?>

 