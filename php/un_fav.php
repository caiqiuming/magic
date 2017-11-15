
<?php 
require 'connect_db.php';
session_start();
$user_name=$_SESSION['name'];
$fav_name=$_POST['id'];
$sql="DELETE FROM fav WHERE user_name='$user_name' AND fav_name='$fav_name'";
mysqli_query($conn,$sql);
header("Location: http://localhost/magic/favorite.php"); 
?>