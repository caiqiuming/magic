<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>家电销售平台</title>   
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
    </head>
    <body>
<div class="mynav">
    <div class="container">
        <div class="row">
            <ul>
                <div class="col-md-1">
                    <li><a href="index.php" target="_top">首页</a></li>
                </div>
                <div class="col-md-1">
                    
                    <li>
                    <?php 
                    session_start();
                    if (isset($_SESSION['name'])) {
                        echo '<a  href="php/exit.php"  target="_top" >';
                        echo '退出';                       
                        echo '</a>';
                     } 
                    else{
                        echo '<a id="no_login" href="login.php"  target="_top" >';
                        echo '登录';
                        echo '</a>';
                    }
                    ?>
                        </a></li>
                </div>
                <div class="col-md-1">
                    <li><a id='register' href="register.php" target="_top">注册</a></li>
                </div>
                <div class="col-md-6">
                    <center>
                        <?php
                            if (isset($_SESSION['name'])){
                            echo "<font size='4'>";
                            echo '欢迎用户 '.$_SESSION['name'].' 登录！';
                            echo '</font>';
                        }else{}
                        ?>
                    </center>
                </div>
                <div class="col-md-1">
                    <li><a id='fav'onclick='check_user()' href="favorite.php" target="_top">我的收藏</a></li>
                </div>
                <div class="col-md-1">
                    <li><a id='cart' onclick='check_user()' href="cart.php" target="_top">购物车</a></li>
                </div>
                <div class="col-md-1">
                    <li><a id='address' onclick='check_user()' href="address.php" target="_top">收货地址</a></li>
                </div>
            </ul>
        </div>
    </div>        
</div>
<script type="text/javascript">
function check_user(){
    if(document.getElementById('no_login')){
    alert("请先登录！");     
    $("#fav,#cart,#address,#fav_1,#fav_2,#fav_3,#add_cart").attr("href","http://localhost/magic/login.php"); 
    }
}
</script>
    </body>
</html>