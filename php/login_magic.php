<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录页面脚本</title>   
    </head>
<body>
<?php
require 'connect_db.php';
$name=isset($_POST['name'])?htmlspecialchars($_POST['name']):exit;
$password=isset($_POST['password'])?htmlspecialchars($_POST['password']):exit;
$sql ="SELECT * FROM user WHERE name='$name' and password='$password' "; 
$query_run=mysqli_query($conn,$sql);
for ($a=1;$a<8;$a++){
    echo '<br>';
}
if (mysqli_num_rows($query_run)) {
	session_start();
	$_SESSION['name']=$name;
	$_SESSION['password']=$password;
	header("Location: http://localhost/magic/index.php"); 
}
else {
    header("Location: http://localhost/magic/login_err.php"); 
	}
$conn->close();
?>


    </body> 
</html>