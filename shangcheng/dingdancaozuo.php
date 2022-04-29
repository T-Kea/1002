<?php
include "conn.php";


if($_GET['action']=="update") {
 
     $sqlc="update tb_dingdan set zt='已支付' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
	    echo "<script type='text/javascript'>
       javascript:alert('支付成功');location.href='mydingdan1.php'
	       </script>";
         }
         else{
	     echo "支付失败.<br>$sqld";
	     }
   
  }
  //取消
  if($_GET['action']=="quxiao") {
 
     $sqlc="update tb_dingdan set zt='取消订单' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
	    
	      echo "<script type='text/javascript'>
         javascript:alert('订单取消成功');location.href='mydingdan1.php'
         </script>";
         }
         else{
	     echo "订单取消失败.<br>$sqld";
	     }
   
  }


  //删除
  if($_GET['action']=="del") {
	
	$sqlb="delete from tb_dingdan where id=".$_GET['id'];
	$re2=mysqli_query($conn,$sqlb);
	if ($re2) {
	echo "<script type='text/javascript'>
	       javascript:location.href='mydingdan1.php'
	       </script>";
         }
    else{
	echo "删除失败";
       }
}

 ?>