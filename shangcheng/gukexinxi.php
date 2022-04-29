<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
</style>
<link rel="stylesheet" type="text/css" href="css/xingxin.css">
<link rel="stylesheet" type="text/css" href="css/8.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- 头部 -->
<div class="header">
        <div class="left"><img src="images/logo5.png"/></div><hr>
        <div class="right"><a href="car.php">我的购物车 | <a href="mydingdan1.php">我的订单 | <a href="gukexinxi.php">个人信息 |</a> <a href="yuangdelv.php">后台管理</a></div>
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


<?php
session_start();
include "conn.php";

     $sqlc="select * from tb_user where uid='".$_SESSION['uid']."'";
     $re3=mysqli_query($conn,$sqlc);
     $re4=mysqli_fetch_row($re3);
 ?>

  <div class="column" style="padding: 100px;">
  <div class="middle">
      <p>用户名称：<?php echo $re4[1]; ?></p>
      <a href=gukexinxi3.php?action=updates&uid=".$re4[0]." class="cart-bottom-btn" style="float: right;">修改名称</a>
      <p>美妆号：<?php echo $re4[0]; ?></p>
      <hr>
      <p>我的收货地址：<?php echo $re4[5]; ?></p>
      <p>收货人：<?php echo $re4[6]; ?></p>
      <p>手机号码：<?php echo $re4[4]; ?></p>
      <p>地址：<?php echo $re4[5]; ?></p>
      <a href=gukexinxi1.php?action=update&uid=".$re4[0]." class="cart-bottom-btn" style="float: right;">更改地址</a>
    </div>
  </div>

</body>
</html>


