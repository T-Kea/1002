<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include "conn.php";
$a=@$_POST['username'];
$c=@$_POST['tel'];
$d=@$_POST['dizhi'];
$e=@$_POST['truenam'];
if($_POST['action']=="update") {	
	 if (!($c and $d and $e)) {
	 	echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	 }
	 else{
	    $sqld="update tb_user set tel='$c',dizhi='$d',truenam='$e' where uid='".$_SESSION['uid']."'";
	    $re5=mysqli_query($conn,$sqld);
	    if ($re5) {
	    echo "<script type='text/javascript'>
		javascript:alert('修改成功');location.href='gukexinxi.php'
		</script>";
         }
         else{
	     echo "修改失败.<br>$sqld";
	     }
    }	
}
if($_POST['action']=="updates") {	
	if (!($a)) {
		echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}
	else{
	   $sqld="update tb_user set username='$a' where uid='".$_SESSION['uid']."'";
	   $re5=mysqli_query($conn,$sqld);
	   if ($re5) {
	   echo "<script type='text/javascript'>
	   javascript:alert('修改成功');location.href='gukexinxi.php'
	   </script>";
		}
		else{
		echo "修改失败.<br>$sqld";
		}
   }	
}

?>