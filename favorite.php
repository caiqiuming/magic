<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>家电销售平台</title>   
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <script type="text/javascript" src="js/wwwnet.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
    </head>
    <body background="images/background.gif">
    <iframe src="header.php" height="40px" width="100%" scrolling="no" frameborder="0" ><a href="header.php">你的浏览器不支持iframe标签，请点击浏览</a></iframe>     
    <div class="container" style="padding-top: 50px;height: 870px;">
            <div class="col-md-12">

                <?php   
                session_start();
                echo "<fieldset>"; 
                echo "<legend><b>".$_SESSION['name']."的收藏</b></legend><br><br>";
                require 'php/connect_db.php';              
                $_username=$_SESSION['name'];
                $sql="SELECT fav_name FROM fav WHERE user_name='$_username'";
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_row($result)){
                    echo "<form action='php/un_fav.php' method='post'>";
                    echo "<div class='container'>";
                    echo "<div class='col-md-3'>";
                    echo "<a class='thumbnail' href='buy_+.php?id=$row[0]'><img height='100px' width='100px' src='images/count/".$row[0]."1.jpg' ></a>";
                    echo "</div>";              
                    echo "<div class='col-md-7'><br><br>"; for($i=0;$i<=5;$i++){echo '&nbsp;&nbsp;&nbsp;&nbsp;';}
                    echo "<a href='buy_+.php?id=$row[0]'><font size='4'>商品物美价廉童叟无欺，欢迎选购！</font></a></div>"; 
                    echo "<input style='display:none' type='text' name='id' value='$row[0]' >  ";            
                    echo "<div class='col-md-2' style='margin-top:30px;'><button type='submit' class='btn btn-primary btn-lg' >删除</button></div>";
                    echo "</div><br><br>"; 
                    echo "</form>";
                }
                mysqli_free_result($result);
                          
              echo "</fieldset>";
              ?>  
            </div>
    </div>
<iframe style="margin-bottom:-34px;" src="footer.php" height="40px" width="100%"  scrolling="no" frameborder="0">
    <a href="footer.php">你的浏览器不支持iframe标签，请点击浏览</a>
</iframe>
    </body>
</html>