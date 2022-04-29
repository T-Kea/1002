<?php

include "conn.php";

if($_GET['action']=="update") {
     $sqlc="select * from tb_dingdan where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);
     $re4=mysqli_fetch_row($re3);
 }
 ?>


 <form name="xgd" method="post" action="dingdancaozuo1.php">
 	
	    收货人姓名：<input type="text" name="shouhuoren" value="<?php echo $re4[4] ?>">
	    收货人地址：<input type="text" name="dizhi" value="<?php echo $re4[5] ?>">
	    联系电话：<input type="text" name="tel" value="<?php echo $re4[6] ?>">
	    <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo $re4[0] ?>">
	    <input type="submit" name="submit" value="修改">
	    <input type="reset" name="reset" value="重置">
   </form>
