<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>注册页面脚本</title>   
    </head>
<body style="background-image:url(../images/background.gif);">
<?php
require 'connect_db.php';
$mysqltime=date('Y-m-d H:i:s');
$name=isset($_POST['name'])?htmlspecialchars($_POST['name']):exit;
$password=isset($_POST['password'])?htmlspecialchars($_POST['password']):exit;

if (!preg_match('/^[\w,_]{3,6}$/', $name)||empty($_POST['password'])){//用户名合法性判断
    header("Location: http://localhost/magic/register_err.php"); 
}
else {
    for ($a=1;$a<8;$a++){ echo '<br>';}
    $sql="INSERT INTO user (name,password,reg_date) VALUES ('$name','$password','$mysqltime')";
    if (mysqli_query($conn,$sql)){
        session_start();
        if (isset($_SESSION['name'])) {
        echo '<center><font size="5"><a href="../index.php">注册成功! 您已登录了其他账号，点击返回首页</a></font></center>';
        }
        else{echo '<center><font size="5"><a href="../login.php">注册成功! 点击前往登录页面</a></font></center>';
        }
    }
    else {
        header("Location: http://localhost/magic/register_err.php"); 
    }
}
$conn->close();
?>


    </body> 
</html>