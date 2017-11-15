<meta charset="utf-8">
<?php 
	require 'connect_db.php'; 
    session_start(); 

    $user_name=$_SESSION['name']; 
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $address_sum=$address1."/".$address2;
    $sql="INSERT INTO address (user_name,address_info) VALUES ('$user_name','$address_sum')";
	if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/magic/address.php"); 
	}
 ?>