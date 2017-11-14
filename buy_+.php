<!DOCTYPE HTML>
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

      </div>
    </div><!-- .prev -->
    <ul class="pagination clearfix" id="thumblist">

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

          </div><!-- .price -->
        </div><!-- .ava_price -->
        <br><br><br><br><br><br><br><br>  
        <div class="block_cart">
          <div class="obn_like">
            <div class="like">

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
