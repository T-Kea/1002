<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include "conn.php";
$f=@$_POST['tel'];
$h=@$_POST['dizhi'];
$i=@$_POST['truenam'];
	if (!($f and $h and $i)) {
		echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}
	else{
	   $sqld="update tb_dingdan set tel='$f',dizhi='$h',shouhuoren='$i' where dingdanhao='".$_POST['dingdanhao']."'";
	   $re5=mysqli_query($conn,$sqld);
	   if ($re5) {
	   echo "<script type='text/javascript'>
	   javascript:alert('修改成功');onclick=history.go(-2)
	   </script>";
		}
		else{
		echo "修改失败.<br>$sqld";
		}
   }	


?>