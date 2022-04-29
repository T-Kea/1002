<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
</style>
<link rel="stylesheet" href="css/xingxin.css">
<link rel="stylesheet" href="css/8.css">
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
			<li><a href="gukeshouye1">壹洞洞俩</a></li>
			<li><a href="">CHANEL 香奈儿</a></li>
      <li><a href="">Armani 阿玛尼</a></li>
			<li><a href="">CPB 肌肤之钥</a></li>
			<li><a href="">CL 路铂廷</a></li>
			<li><a href="">HR 赫莲娜</a></li>
      <li><a href="">YSL 圣罗兰</a></li>
		</ul>
	</div>

<?php
session_start();
include "conn.php";
$sql=mysqli_query($conn,"select * from tb_dingdan where id='".$_GET['id']."'");
$info=mysqli_fetch_row($sql);
$spc=$info[2];
$slc=$info[3];
$arraysp=explode("@",$spc);
$arraysl=explode("@",$slc);
$total=0;
for($i=0;$i<count($arraysp)-1;$i++){
	if($arraysp[$i]!=" "){
		$sqll=mysqli_query($conn,"select * from tb_shangpin where id='".$arraysp[$i]."'");
		$info1=mysqli_fetch_array($sqll);
		$total=$total+=$arraysl[$i]*$info1['jianjie'];
?>

  <div class="column">
  <div class="photo1">
      <p>收货人姓名：<?php echo $info[4];?></p>
      <p>收货人电话：<?php echo $info[6];?></p>
      <p>收货人地址：<?php echo $info[5];?></p>
	  <a href=gukexinxi5.php?id=<?php echo $info[0];?> class="cart-bottom-btn" style="float: right;">修改地址</a>
    </div>
  </div>
  <div class="column" >
    <div class="photo1">
	  <p>订单号：<?php echo $info[1]; ?></p>
	  <p>用户账号：<?php echo $info[4];?></p>
	  <hr>
      <p>商品名称：<?php echo $info1['mingcheng'];?></p>
      <p>商品单价：<?php echo $info1['jianjie'];?></p>
      <p>数量：<?php echo $arraysl[$i];?></p>
      <p>小计：<?php echo $arraysl[$i]*$info1['jianjie'];?></p>
    </div>
</div>
<?php
  }
}
        ?>
    <?php
    $_SESSION['producelist']=" ";
    $_SESSION['quatity']=" ";
    ?>
</body>
</html>


