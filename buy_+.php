﻿<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>商品详情</title>
<link rel="shortcut icon" href="images/tubiao.ico" type="image/x-icon">
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/grid.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
<script src="js/jquery-1.7.2.min.js" ></script>
<script src="js/html5.js" ></script>
<script src="js/jflow.plus.js" ></script>
<script src="js/jquery.carouFredSel-5.2.2-packed.js"></script>
<script src="js/checkbox.js"></script>
<script src="js/radio.js"></script>
<script src="js/selectBox.js"></script>
<script src="js/jquery.jqzoom-core.js" ></script>
<script src="js/get.js"></script>
</head>
<body style="background-image:url(images/background.gif)">
<iframe src="header.php" height="40px" width="100%" scrolling="no" frameborder="0" ><a href="header.php">你的浏览器不支持iframe标签，请点击浏览</a></iframe> 
<section id="main">
<div class="container_12">
  <div id="sidebar" class="grid_4">
    <br><br>
  <aside id="tags">
        <iframe src="leftnav.php"- frameborder="0" scrolling="no" height="360px" ></iframe>
  </aside>
</div>
   <div id="content" class="grid_8">
    <h1 class="page_title"></h1>
<div class="product_page">
  <div class="grid_4 img_slid" id="products">
    <img class="sale" src="images/sale.png" alt="Sale"/>
    <div class="preview slides_container">
      <div class="prev_bg"> <!-- 预选图片 -->
      <?php 
        session_start();
        if(isset($_GET['id'])){
           $q=$_SESSION['temp']=$_GET['id'];
        }
        else{
          $q=$_SESSION['temp'];
        }
        $one=substr($q,0,-1);//获取url的两位字符
        $two=substr($q,1);
        for($i=1;$i<=4;$i++){$_SESSION['temp_q'.$i]=$one.$two.$i;}
        $_SESSION['temp_q6']="2400";
        $_SESSION['temp_q7']="2900";
        $q1=$_SESSION['temp_q1'];
        $q2=$_SESSION['temp_q2'];
        $q3=$_SESSION['temp_q3'];
        $q4=$_SESSION['temp_q4'];        
        echo "<a  href='images/count/".$q1.".jpg' class='jqzoom' rel='gal1'>";
        echo "<img src='images/count/".$q1.".jpg' />";
        echo "</a>";
      ?>
      </div>
    </div><!-- .prev -->
    <ul class="pagination clearfix" id="thumblist">
        <?php 
          $q_q="<a href='' class=\"zoomThumbActive\"  rel=\"{gallery: 'gal1', smallimage:'images/count/";
          $q_1="<a href='' rel=\"{gallery: 'gal1', smallimage:'images/count/";
          $q_2=".jpg',largeimage:'images/count/";
          $q_3=".jpg'}\">";
          echo '<li>';//图片一
          echo "<a href='' rel=\"{gallery: 'gal1', smallimage:'images/count/".$q1.".jpg',largeimage:'images/count/".$q1.".jpg'}\">";
          echo "<img src='images/count/".$q1.".jpg' >";
          echo "</li>"; 
          echo '<li>';//图片二
          echo "<a href='' rel=\"{gallery: 'gal1', smallimage:'images/count/".$q2.".jpg',largeimage:'images/count/".$q2.".jpg'}\">";
          echo "<img src='images/count/".$q2.".jpg' >";
          echo "</a>";
          echo "</li>";  
          echo '<li>';//图片三
          echo "<a href='' rel=\"{gallery: 'gal1', smallimage:'images/count/".$q3.".jpg',largeimage:'images/count/".$q3.".jpg'}\">";
          echo "<img src='images/count/".$q3.".jpg' >";
          echo "</a>";
          echo "</li>";  
          echo '<li>';//图片四
          echo "<a href='' rel=\"{gallery: 'gal1', smallimage:'images/count/".$q4.".jpg',largeimage:'images/count/".$q4.".jpg'}\">";
          echo "<img src='images/count/".$q4.".jpg' >";
          echo "</a>";
          echo "</li>";                              
        ?>
    </ul>
      <div class="next_prev">        
        <a id="img_prev" class="arows"  ><span> 2017.11.14 </span></a>
        <a id="img_next" class="arows"  ><span>    CQM     </span></a>
      </div><!-- . -->
    </div><!-- .grid_4 -->
    <div class="grid_5">
      <div class="entry_content">
        <div class="review">
          <a  class="add_review"   >商品介绍</a>
        </div>
        <p>&nbsp;&nbsp;&nbsp;
        商品物美价廉童叟无欺，欢迎选购！</p>
        <div class="ava_price">
          <div class="availability_sku">
            <div class="availability">
              卖家信用: <span>可靠</span>
            </div>
            <div class="sku">
              发货地: <span>深圳</span>
            </div>
          </div><!-- .availability_sku -->
          <div class="price">
          <?php 
            $q6=$_SESSION['temp_q6'];
            $q7=$_SESSION['temp_q7'];
            echo "<div class='price_new'>"."¥".$q6."</div>";
            echo "<div class='price_old'>"."¥".$q7."</div>";
          ?> 
          </div><!-- .price -->
        </div><!-- .ava_price -->
        <br><br><br><br><br><br><br><br>  
        <div class="block_cart">
          <div class="obn_like">
            <div class="like">
            <?php 
            require 'php/connect_db.php';
            if(isset($_SESSION['name'])){
              $user_name=$_SESSION['name'];
              $fav_name=$_SESSION['temp'];                      
              $sql="SELECT * FROM fav WHERE user_name='$user_name' AND fav_name='$fav_name'";             
            if(mysqli_num_rows(mysqli_query($conn,$sql))==0){//未收藏时
                $_SESSION['j_fav']=2;          
                echo "<a onclick='check_user()' id='fav_1'href='php/favorite_magic.php' class='like'>";
                echo '加入收藏';
                echo "</a>";
              } 
              else{ //已收藏时
                $_SESSION['q_fav']=2;
                echo "<a onclick='check_user()' id='fav_2'href='php/favorite_magic.php' class='like'>";
                echo '取消收藏';
                echo "</a>";
              }
            }
            else{//未登录时
                echo "<a href='' id='fav_3' onclick='check_user()' class='like'>";
                echo '加入收藏';
                echo "</a>";
            }                  
             ?>
            </div>
					</div>
					<div class="cart">
          <?php 
              if (isset($_SESSION['name'])){
                echo "<form action='php/add_cart.php' method='post'>
                <a class='bay'>";
                echo "<input onclick='ture()' style='width: 120px;'  type='submit' value='添加购物车'>";
              }
              else{
                echo "<form>
                <a class='bay'>";
                echo "<input onclick='fault()' style='width: 120px;'  type='submit' value='添加购物车'>";
              }              
            echo "</a>
						<input type='text' id='number'  class='number'  name='number' value='1' />
						<span>数量:</span>
            </form>";
            ?>
					</div>
				</div><!-- .block_cart -->
			</div><!-- .entry_content -->
		</div>
      </div>
  </div>
</div>
</section>
		<div class="clear"></div>
<iframe style="position:absolute;bottom:0;" src="footer.php" height="40px" width="100%"  scrolling="no" frameborder="0">
  <a href="footer.php">你的浏览器不支持iframe标签，请点击浏览</a>
</iframe>
<script type="text/javascript">

  function check_user(){
    if(document.getElementById('fav_3')){
    alert("请先登录！");     
    $("#register,#fav,#cart,#address,#fav_1,#fav_2,#fav_3").attr("href","#"); 
    }
}
    function ture(){
        alert('添加成功！');  
}
  function fault(){
    alert('请先登录！');
  }


</script>

</body>

</html>
