<?php
session_start();
include("db.php");

 
$pro_id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
$qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 0;
$session_id = session_id();

 
$select = "SELECT * FROM cart WHERE pro_id = $pro_id AND session_id = '$session_id'";
$select_run = mysqli_query($con, $select);

$count_row = mysqli_num_rows($select_run);

if ($count_row > 0) {
    
    $update = "UPDATE cart SET qty = qty + $qty WHERE pro_id = $pro_id AND session_id = '$session_id'";
    mysqli_query($con, $update);
} else {
    
    $query = "INSERT INTO cart (pro_id, session_id, qty) VALUES ($pro_id, '$session_id', $qty)";
    mysqli_query($con, $query);
}

 
header("Location:atc_cart.php");
?>
