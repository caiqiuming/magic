<meta charset="utf-8">
<?php 
	require 'connect_db.php'; 
    session_start(); 
    $user_name=$_SESSION['name']; 
    $address3=$_POST['address3'];
    $sql="DELETE  FROM address WHERE user_name='$user_name' AND address_info='$address3'";
	if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/magic/address.php"); 
	}
 ?>