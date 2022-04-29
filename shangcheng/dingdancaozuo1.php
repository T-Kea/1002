<?php
include "conn.php";
//修改信息
$a=@$_POST['shouhuoren'];
$b=@$_POST['dizhi'];
$c=@$_POST['tel'];
if($_POST['action']=="update") {  
   if (!($a and $b and $c)) {
    echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
   }
   else{
      $sqld="update tb_dingdan set shouhuoren='$a' dizhi='$b',tel='$c' where id=".$_POST['id'];
      $re5=mysqli_query($conn,$sqld);
      if ($re5) {
      echo "修改成功，点击<a href='yuangdingdan.php'>这里</a>查看";
         }
         else{
       echo "修改失败.<br>$sqld";
       }
    }

}


 //审核
if($_GET['action']=="update1") {
 
     $sqlc="update tb_dingdan set zt='请尽快支付' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
      echo "<script type='text/javascript'>
         javascript:location.href='yuangdingdanzt.php'
         </script>";
         }
         else{
       echo "支付失败.<br>$sqld";
       }
   
  }

  //发货
  if($_GET['action']=="update2") {
 
     $sqlc="update tb_dingdan set zt='已发货' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
      echo "<script type='text/javascript'>
         javascript:location.href='yuangdingdanzt5.php'
         </script>";
         }
         else{
       echo "支付失败.<br>$sqld";
       }
   
  }
//已发货
 if($_GET['action']=="update5") {
 
     $sqlc="update tb_dingdan set zt='订单已完成' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
      echo "<script type='text/javascript'>
         javascript:location.href='yuangdingdanzt4.php'
         </script>";
         }
         else{
       echo "支付失败.<br>$sqld";
       }
   
  } 
  //无效单
  if($_GET['action']=="update3") {
 
     $sqlc="update tb_dingdan set zt='无效单' where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);

  if ($re3) {
      echo "<script type='text/javascript'>
         javascript:location.href='yuangdingdan.php'
         </script>";
         }
         else{
       echo "支付失败.<br>$sqld";
       }
   
  }


  //删除
  if($_GET['action']=="del") {
	
	$sqlb="delete from tb_dingdan where id=".$_GET['id'];
	$re2=mysqli_query($conn,$sqlb);
	if ($re2) {
	echo "<script type='text/javascript'>
	       javascript:location.href='yuangdingdan.php'
	       </script>";
         }
    else{
	echo "删除失败";
       }
}

 ?>