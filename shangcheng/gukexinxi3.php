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

if($_GET['action']=="updates") {
     $sqlc="select * from tb_user where uid='".$_SESSION['uid']."'";
     $re3=mysqli_query($conn,$sqlc);
     $re4=mysqli_fetch_row($re3);
   }
 ?>

  <div class="column" style="padding: 100px;"><br><br><br>
  <form name="xgd" method="post" action="gukexinxi2.php" align="center">
  <div class="middle">
      <p>用户名称:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" value="<?php echo $re4[1] ?>"></p>
	  <p><input type="hidden" name="action" value="updates"><p>
	  <p ><input type="submit" name="submit" value="提交" class="cart-bottom-btn ">
	  <input type="reset" name="reset" value="重置" class="cart-bottom-btn "></p>
    </div>
  </form>
  </div>

</body>
</html>


