<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>商城管理系统</title>
	<link rel="stylesheet" href="css/4.css">
	<style type="text/css">
	
		.table {
			height: 400px;
			border: 30px;
			background-color: #eef4f8;
			
		}
	</style>
</head>
<body>

<ul>
  <h3 align="center" style="color:#f7b499">壹洞洞俩后台管理</h3>
  <hr>
  <li><a href="yuangshouye.php"><h5 align="center">商品管理</h5></a></li>
  <hr>
  <li><a class="active" href="#addshangpin.php"><h5 align="center">添加商品</h5></a></li>
  <hr>
  <li><a href="yuangdingdan"><h5 align="center">订单管理</h5></a></li>
  <hr>
  <li><a href="yuangke.php"><h5 align="center">用户管理</h5></a></li>
  <hr>
  <li><a href="yuangdelv.php"><h5 align="center">退出系统</h5></a></li>
  <hr>
</ul>
   
	
	<form action="shangpinoper.php" method="post">
		<table class="table" align="center">
			<tr><td>商品名称：<input type="text" name="mingcheng" value=""></td></tr>
			<tr><td>商品价格：<input type="text" name="jianjie" value=""></td></tr>
			<tr><td>上市时间：<input type="text" name="addtime" value=""></td></tr>
			<tr><td>商品型号：<input type="text" name="xinghao" value=""></td></tr>
			<tr><td>图片路径：<input type="text" name="tupian" value=""></td></tr>
			<tr><td>商品数量：<input type="text" name="shuliang" value=""></td></tr>
			<tr><td>购买次数：<input type="text" name="cishu" value=""></td></tr>
			<tr><td>推荐次数：<input type="text" name="tuijian" value=""></td></tr>
			<tr><td>类型id：<input type="text" name="typeid" value=""></td></tr>
			<tr><td>商品品牌：<input type="text" name="pinpai" value=""></td></tr>

			<tr><td><input type="submit" name="submit" value="提交">&nbsp; &nbsp;&nbsp;<input type="reset" name="reset" value="重置"></td></tr>
		

		</table>
		
	</form>



</body>
</html>