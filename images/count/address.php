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
        <link href="css/city-picker.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">        
        <script src="js/wwwnet.js" type="text/javascript"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/city-picker.data.js"></script>
        <script src="js/city-picker.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body background="images/background.gif">
    <iframe src="header.php" height="40px" width="100%" scrolling="no" frameborder="0" ><a href="header.php">你的浏览器不支持iframe标签，请点击浏览</a></iframe>     
<div class="container" style="padding-top: 50px;height: 870px;">
    <div class="col-md-12">
        <?php   
        require 'php/connect_db.php'; 
        session_start();             
        $user_name=$_SESSION['name'];      
        echo "<fieldset>"; 
        echo "<legend><b>".$_SESSION['name']."的地址管理</b></legend><br><br>";
        echo "<form class='form-inline' action='php/address_magic.php' method='post'>";
        echo "<div class='container'>";
        echo "<div id='distpicker' class='col-md-6' style='margin-left:30px;'>
                <div class='form-group'>
                    <div style='position: relative;'>
                        <input name='address1'id='city-picker3' class='form-control' readonly type='text' value='辽宁省/大连市/沙河口区' data-toggle='city-picker'>
                    </div>
                </div>
                <div class='form-group'>
                    <button class='btn btn-info' id='destroy' type='button'>默认</button>
                    <button class='btn btn-success' id='reset' type='button'>重置</button>
                </div>
             </div>
            <div class='col-md-4'>
            <div class='input-group'>
                <input type='text' class='form-control' name='address2'>
                <span class='input-group-btn'>
                    <button class='btn btn-primary' type='submit'>添加</button>
                </span>
             </div>
             </div>
             <div class='col-md-1'></div>";
        echo "</div>";
        echo "</form>";
        $sql="SELECT address_info FROM address WHERE user_name='$user_name'";
        $result=mysqli_query($conn,$sql); 
        while ($row=mysqli_fetch_row($result)){
            echo "<br><form action='php/address_delete.php' method='post' >";
            echo "<div class='container'>";            
            echo "<div class='col-md-10'><br><br>"; for($i=0;$i<=5;$i++){echo '&nbsp;&nbsp;&nbsp;&nbsp;';}
            echo "<font size='5'>$row[0]</font></div>"; 
            echo "<input style='display:none' type='text' name='address3' value='$row[0]' >  ";            
            echo "<div class='col-md-2' style='margin-top:30px;'><button type='submit' class='btn btn-primary btn-lg' >删除</button></div>";
            echo "</div>"; 
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
    <script>
        $(function(){
            $('select').searchableSelect();
        });
    </script>    
</html>