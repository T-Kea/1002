<?php

include "conn.php";

if($_GET['action']=="update") {
 
     $sqlc="update tb_dingdan set zt='已支付' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
	    echo "支付成功，点击<a href='mydingdan1.php'>这里</a>查看";
         }
         else{
	     echo "支付失败.<br>$sqld";
	     }
   
  }
 ?>
