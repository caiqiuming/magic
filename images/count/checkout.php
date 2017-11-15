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
              <fieldset>  
                <?php  
                session_start();
                echo "<legend><b><span>".$_SESSION['name']."</span>的结算页面</b></legend><br><br>";                
                 ?>   
                
                 <div style="height: 450px;width: 1100px" >
                     <div style="text-align: center;" >
                             <img  style="margin-right: 50px;" src="images/checkout/zhifubao.jpg" height="350px" width="260px" title="支付宝扫码支付" alt="支付宝扫码支付">
                             <img style="margin-left: 50px;"src="images/checkout/weixin.png" height="350px" width="260px" alt="微信扫码支付">
                     </div>
                 </div>
              </fieldset>
              <hr> 
              <a style="margin-left: auto;display: block;" id="back"type="button" href='cart.php'class='btn btn-success btn-lg'>返回</a>    
            </div>
    </div>
<iframe style="margin-bottom:-34px;" src="footer.php" height="40px" width="100%"  scrolling="no" frameborder="0">
    <a href="footer.php">你的浏览器不支持iframe标签，请点击浏览</a>
</iframe>
    </body>
</html>