<html>
<meta charset="utf-8">

<?php    

    require 'connect_db.php';
    session_start();
    echo ("进入文件");
    $user_name=$_SESSION['name'];
    $fav_name=$_SESSION['temp'];
if ($_SESSION['j_fav']==2) {//添加收藏
    echo ("进入添加收藏");
    $_SESSION['j_fav']=3;
    $sql="INSERT INTO fav (user_name,fav_name) VALUES ('$user_name','$fav_name')";
}
else{//取消收藏
    echo ("进入取消收藏");
    $sql="DELETE FROM fav WHERE user_name='$user_name' AND fav_name='$fav_name'";
}   
if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/magic/buy_+.php"); 
}
?>
</html>