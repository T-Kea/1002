<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/cssreset.css">
	<link rel="stylesheet" href="css/shop 1.css">
	<script src="js/jquery-3.0.0.min.js"></script>
</head>
<body>
<!-- 头部 -->
<div class="header">
        <div class="left"><img src="images/logo5.png"/></div><hr>
        <div class="right"><a href="car.php">我的购物车 | <a href="mydingdan1.php">我的订单 | <a href="gukexinxi.php">个人信息</a> </div>
    </div>

<!-- 导航栏 -->
    <div >
		<ul class=daohang>
		<li><a href="gukeshouye1.php">壹洞洞俩</a></li>
			<li><a href="gukefl.php">CHANEL 香奈儿</a></li>
            <li><a href="gukefl2.php">Armani 阿玛尼</a></li>
			<li><a href="gukefl3.php">CPB 肌肤之钥</a></li>
			<li><a href="gukefl4.php">CL 路铂廷</a></li>
			<li><a href="gukefl5.php">HR 赫莲娜</a></li>
            <li><a href="gukefl6.php">YSL 圣罗兰</a></li>
		</ul>
	</div>
<!-- 广告浮动 -->
<div class="bottommob" id="bottommob">
    <div class="bottom-con">
    <div class="bottom-pic">
    <img src="images/logo.jpg"/>
    </div>
    <div class="bottom-text" id="bottomText"></div>
    </div>
    <a id="bottomLink" href="gukeshouye1.php"></a>
</div>

<?php

include "conn.php";

if($_GET['action']=="select") {
     $sqlc="select * from tb_shangpin where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);
     $a2=mysqli_fetch_array($re3);
?>
	<main><br>
		<div class="center"><br>
			<div class="up">
				<div class="left"></div>
				<div class="more">
					<div class="big">
						<div class="photo">
						  <img class="show1"  src="<?php echo $a2["tupian"] ?>" alt="1">
						</div>
						<div class="box"></div>
					</div>
					<div class="pho">
		                <img class="show1"  src="<?php echo $a2["tupian"] ?>" alt="1">
	                </div>
				</div>
				<div class="right">
					<h2><i class="self">自营</i><?php echo $a2["mingcheng"] ?></h2>
					<div class="section_1">
						<div class="up">
							<i class="time"></i>
							<div class="timer"></div>
						</div>
						<div class="down">
						    <div class="price-wrap">
						    	<i class="before">￥</i>
						    	<i class="price"><?php echo $a2["jianjie"] ?></i>
						    	<i class="dels">￥<?php echo $a2["jianjie"] ?></i>
						    	<i class="fes">壹洞洞俩特惠节</i>
							</div>
						</div>
						<div class="section_2">
							<h3>优惠</h3>
							<div class="con">
								<i class="icon4">送小样</i>
								<p>最高送豪华礼盒小样</p><br>
								<i class="icon4">送积分</i>
								<p>最高赠送500vip点数</p>
							</div>
						</div>
						<div class="section_3">
							<h3>领劵</h3>
							<div class="con">
								<div class="con_left">
									<i class="bg1"></i>
									<i class="text">满1000减30</i>
								</div>
								<div class="con_right">
									
									<i class="text">领取</i>
									<i class="bg2"></i>
								</div>
						    </div>
						</div>
						<div class="section_5">
							<h3>颜色</h3>
							<div class="con">
									<img src="<?php echo $a2["tupian"] ?>" alt="">
									<u class="text">图片色</u>
							</div>
						</div>
						<div class="section_6">
							<h3>规格</h3>
							<div class="con">
								<ul>
									<li><?php echo $a2["xinghao"] ?></li>
									<li>常规款</li>
								</ul>
							</div>
						</div>
						<div class="section_8">
							<h3>数量</h3>
							<div class="con">
								<p class="minus"><i class="minus_1">-</i></p><input type="text" value="1" pattern="[0-9]" cachenum="5"><p class="plus"><i class="plus_1">+</i></p>
							</div>
						</div>
						<div class="section_11">
							<h3>供货商</h3>
							<div class="con">壹洞洞俩美妆屋商城</div>
						</div>

					</div>
					<button class="final" ><a  href="buy1.php?id=<?php echo $a2["id"] ?>" style="color: white;">加入购物车</a></button>
				</div>
			</div>
		
	</main>
	
	
		
	
     <?php
}
?>


<script src="js/shop 1.js"></script>
</body>
</html>