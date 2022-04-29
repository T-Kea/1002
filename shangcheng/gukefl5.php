<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>化妆品网站首页</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/5.css">
</head>
<body>
<!-- 头部 -->
    <div class="header">
        <div class="left"><img src="images/logo5.png"/></div><hr>
        <div class="right"><a href="gukedenglv.php">登录</a> | <a href="gukezhuce.php">注册 | <a href="car.php">我的购物车 | <a href="mydingdan1.php">我的订单 | <a href="gukexinxi.php">个人信息 |</a> <a href="yuangdelv.php">后台管理</a></div>
    </div>

<!-- 导航栏 -->
    <div >
		<ul class=daohang>
			<li><a href="gukeshouye1.php">壹洞洞俩</a></li>
			<li><a href="gukefl.php">CHANEL 香奈儿</a></li>
      <li><a href="gukefl2.php">Armani 阿玛尼</a></li>
			<li><a href="gukefl3.php">CPB 肌肤之钥</a></li>
			<li><a href="gukefl4.php">CL 路铂廷</a></li>
			<li><a href="#gukefl5.php">HR 赫莲娜</a></li>
      <li><a href="gukefl6.php">YSL 圣罗兰</a></li>
		</ul>
	</div>
    
<!-- 限时秒杀 -->
    <div class="qingchu">  
        <div class="fu">
                <div>    
                    <div class="box">
                        <div id="d"></div>     
                        <div id="h"></div>  
                        <div id="m"></div>        
                        <div id="s"></div> 
                    </div>
                    <div> <img src="images/msct.jpg"/> </div> 
                </div>
<!-- 滚动字幕 --> 
           <marquee height = "35px" width = "100%" behavior = "alaternate" bgcolor = "#f7b499" font-family="Microsoft Yahei">
            一年一度壹洞洞俩特惠节将在2022年1月1日正式开始，更多优惠等你来探索哦！
            </marquee> 
        </div>      
    </div>
    <script>
        var endtime = new Date('2022-1-1 18:00:00'), endseconds = endtime.getTime();
        var d = h = m = s = 0;
        var id = setInterval(seckill, 1000);
        function seckill() {
          var nowtime = new Date(); 
          var remaining = parseInt((endseconds - nowtime.getTime()) / 1000);
          if (remaining > 0) {
            d = parseInt(remaining / 86400);     
            h = parseInt((remaining / 3600) % 24); 
            m = parseInt((remaining / 60) % 60);   
            s = parseInt(remaining % 60);          
            d = d < 10 ? '0' + d : d;
            h = h < 10 ? '0' + h : h;
            m = m < 10 ? '0' + m : m;
            s = s < 10 ? '0' + s : s;
          } else {
            clearInterval(id);         
            d = h = m = s = '00';
          }
          document.getElementById('d').innerHTML = d + '天';
          document.getElementById('h').innerHTML = h + '时';
          document.getElementById('m').innerHTML = m + '分';
          document.getElementById('s').innerHTML = s + '秒';
        }
      </script>

<!-- 商品展示 -->
    <div class="content">
        <div align="center">
            <img src="images/fenge.png">
        </div>
        
        <?php
                   header("Content-type:text/html;charset=utf-8");
                   include "conn.php";
                   $sqla="select * from tb_shangpin where pinpai='HR'";
                   $rel=mysqli_query($conn,$sqla);
                  while ($a2=mysqli_fetch_array($rel)) {
                ?>
            
            <div class="responsive">
                <div class="xxxx">
                    <img src="<?php echo $a2["tupian"] ?>" class="img_li"><hr>
                    <div class="info" align="center">
                        <a href="par.php?action=select&id=<?php echo $a2["id"] ?>" style="color:#f09b7a">
                            <?php echo $a2["mingcheng"] ?>
                        </a>
                        <div class="img_btn">
                            <!-- 价格，购买logo -->
                            <div class="price" >¥<?php echo $a2["jianjie"]?></div>
                            <!-- 购物车按钮 -->
                            <!-- <div class="btn">
                                <a href="#" class="cart">
                                    <img src="">
                                </a>
                            </div> -->
                        </div>
                    </div>
                    </div>
            </div>


           
            <?php
                        }
                    ?> 
          
    </div>
    
</body>
</html>
