<!DOCTYPE php>
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
    <div class="container" style="padding-top: 150px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="php/login_magic.php" method="post" >
                <center>
                  <fieldset>
                    <legend><b>登录</b></legend>
                    <br><br>
                    <div class="input-group">
                        <span style="padding-left: 160px;" class="input-group-btn">
                            <button class="btn btn-default" type="button" disabled="disabled">账号</button>
                        </span>
                        <input style="width: 170px;"type="text" class="form-control" name="name">
                    </div>
                    <br><br>
                    <div class="input-group">
                        <span style="padding-left: 160px;" class="input-group-btn" >
                            <button class="btn btn-default" disabled="disabled" type="button">密码</button>
                        </span>
                        <input style="width: 170px;"type="password" class="form-control" name="password">
                    </div>
                    <br><br><br>
                    <button type="submit" class="btn btn-primary btn-lg">提交</button>
                  </fieldset>
                  </center>
                </form>
            </div>
            <div class="col-md-3"></div>
    </div>
<iframe style="position:absolute;bottom:0;" src="footer.php" height="40px" width="100%"  scrolling="no" frameborder="0">
    <a href="footer.php">你的浏览器不支持iframe标签，请点击浏览</a>
</iframe>

    </body>
</html>