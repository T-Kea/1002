<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <li><a href="gukeshouye1.php">壹洞洞俩</a></li>
			<li><a href="gukefl.php">CHANEL 香奈儿</a></li>
            <li><a href="gukefl2.php">Armani 阿玛尼</a></li>
			<li><a href="gukefl3.php">CPB 肌肤之钥</a></li>
			<li><a href="gukefl4.php">CL 路铂廷</a></li>
			<li><a href="gukefl5.php">HR 赫莲娜</a></li>
            <li><a href="gukefl6.php">YSL 圣罗兰</a></li>
		</ul>
	</div>
<br><br><br><br>

    <div class="cart">
        <div class="cart-title"> 我的购物车</div>
    <table>
  	<form name="form1" method="get" action="car.php">
  		<?php
  		if(isset($_GET['qk']) && $_GET['qk']=="yes"){
  			$_SESSION['producelist']=" ";
  			$_SESSION['quatity']=" ";
  		}
  		$arraygwc=explode("@",isset($_SESSION['producelist'])?$_SESSION['producelist']:"");
  		$s=0;
  		for($i=0;$i<count($arraygwc);$i++){
  			$s+=intval($arraygwc[$i]);
  		}
  		if($s==0){
  			echo "<tr>";
  			echo "<td height='25' colspan='6'  align='center'>你的购物车为空！</td>";
  			echo "</tr>";
  		}
  		else{
  			?>
  	
	    <thead>
            <tr>
                <th><input type="checkbox" id="ckAll" onclick="checkAll()">全选</th>
                <th>图片</th>   
                <th>商品</th>
                <th>单价</th>
                <th>数量</th>
                <th>小计</th>
                <th>操作</th>
            </tr>
        </thead>
  		<?php
  		ini_set("error_reporting","E_ALL & ~E_NOTICE");
  		include "conn.php";
  		$array=explode("@",$_SESSION['producelist']);
  		$arrayquatity=explode("@",$_SESSION['quatity']);
  		$_SESSION['quatity']=implode("@",$arrayquatity);
  		for($i=0;$i<count($array)-1;$i++){
  			$id=$array[$i];
  			$num=$arrayquatity[$i];
  		
  		if($id!=""){
  			 $sqlc="select * from tb_shangpin where id='".$id."'";
             $re3=mysqli_query($conn,$sqlc);
             $info=mysqli_fetch_array($re3);

             //订单缓存
             $total1=$num*$info['jianjie'];
             $total+=$total1;
             $_SESSION["total"]=$total;
  		?>
  		 <tbody>
            <tr class="inline">
                <td><input type="checkbox" name="ck" onclick="check()"></td>
                <td><img src="<?php echo $info['tupian'];?>" style="width:100px; hight: 100px;"></td>
                <td><?php echo $info['mingcheng']; ?></td>
                <td><?php echo $info['jianjie'];?></td>
                <td>
                    <span class="reduce" onclick="reduceCount(this)">-</span>
                    <input type="text" class="count-input" name="num"  value="<?php echo $num; ?>">
               <span class="add" onclick="addCount(this)">+</span>
                </td>
                <td class="cart-subtotal" name="jianjie"><?php echo $info['jianjie'];?></td>
                <td>
				<div align="center"><a href="gwcmove.php?id=<?php echo $info["id"] ?>" class="cart-bottom-btn">删除</a></div>
				</td>
            </tr>
        </tbody>
  		<?php
  	}
  }
 
  ?>
  <tfoot id="foot">
            <tr>
                <td colspan="6">
                  <span class="cart-bottom-span">已选择 <span id="allCount"></span> 件商品</span>
                  <span class="cart-bottom-span">总计:<span id="allPrice"></span></span>
                  <span><a href="dingdan.php"  class="cart-bottom-btn" >提交订单</a></span>
                </td>

              </tr>
            </tfoot> 
</form>
<?php
}
?>
</table>
</div><br>
<div align="center">
<a href="car.php?qk=yes" class="cart-bottom-btn">清空购物车</a>&nbsp&nbsp
</div>
<script src="js/1.js"></script>     
</body>
</html>
   