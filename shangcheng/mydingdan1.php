<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/8.css">
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
$sql="select * from tb_dingdan where xiadanrenzh ='".$_SESSION['uid']."'";
$a1=mysqli_query($conn,$sql);
echo "<div style='margin-top:100px;'>";
echo "<table border= '1px' width = '700px' align='center' >";
echo "<tr><th>订单号</th><th>状态</th><th>总计</th><th>操作</th><th>操作</th><th>操作</th></tr>";
while ($a2=mysqli_fetch_row($a1)) {

	echo "
	<tr>
	<td >$a2[1]</td>
	<td>$a2[9]</td>
	<td>$a2[10]</td>
	<td><a href=dingdancaozuo.php?action=update&id=".$a2[0]." style='color:#f09b7a' >支付</a></td>
	<td><a href=dingdanpar.php?id=".$a2[0]." style='color:#f09b7a'>订单详情</td>
	<td><a href=dingdancaozuo.php?action=del&id=".$a2[0]." onclick='return del()' style='color:#f09b7a'>删除</a></td>

	";

}
echo "</table>";
echo "</div>";
?>
</div>
</body>

</html>