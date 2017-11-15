<?php 

require 'connect_db.php';
session_start();
$user_name=$_SESSION['name'];
$cart_id=$_POST['id'];
$sql="DELETE  FROM cart WHERE cart_id='$cart_id'";
mysqli_query($conn,$sql);
header("Location: http://localhost/magic/cart.php"); 
?>