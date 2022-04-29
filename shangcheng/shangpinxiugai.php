<?php

include "conn.php";

if($_GET['action']=="update") {
     $sqlc="select * from tb_shangpin where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);
     $re4=mysqli_fetch_row($re3);
 }
 ?>


 <form name="xgd" method="post" action="shangpinxiugai1.php">
 	<table class="table" align="center">
	    <tr><td>商品名称：<input type="text" name="mingcheng" value="<?php echo $re4[1] ?>"></td></tr>
		<tr><td>商品价格：<input type="text" name="jianjie" value="<?php echo $re4[2] ?>"></td></tr>
		<tr><td>上市时间：<input type="text" name="addtime" value="<?php echo $re4[3] ?>"></td></tr>
		<tr><td>商品型号：<input type="text" name="xinghao" value="<?php echo $re4[4] ?>"></td></tr>
		<tr><td>图片路径：<input type="text" name="tupian" value="<?php echo $re4[5] ?>"></td></tr>
		<tr><td>商品数量：<input type="text" name="shuliang" value="<?php echo $re4[6] ?>"></td></tr>
		<tr><td>购买次数：<input type="text" name="cishu" value="<?php echo $re4[7] ?>"></td></tr>
		<tr><td>推荐次数：<input type="text" name="tuijian" value="<?php echo $re4[8] ?>"></td></tr>
		<tr><td>类型id：<input type="text" name="typeid" value="<?php echo $re4[9] ?>"></td></tr>
		<tr><td>商品品牌：<input type="text" name="pinpai" value="<?php echo $re4[10] ?>"></td></tr>
	    <tr><td><input type="hidden" name="action" value="update"></td></tr>
	    <tr><td><tr><td><input type="hidden" name="id" value="<?php echo $re4[0] ?>"></td></tr>
	    <tr><td><input type="submit" name="submit" value="修改">&nbsp; &nbsp;&nbsp;<input type="reset" name="reset" value="重置"></td></tr>
	    </table>
   </form>
  ?>
        
