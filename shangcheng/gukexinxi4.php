<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include "conn.php";
$a=@$_POST['password'];


if($_POST['action']=="update1") {	
	 if (!($a)) {
	 	echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	 }
	 else{
	    $sqld="update tb_user set password='$a' where uid='".$_SESSION['uid']."'";
	    $re5=mysqli_query($conn,$sqld);
	    if ($re5) {
	    echo "修改成功，点击<a href='gukexinxi.php'>这里</a>返回";
         }
         else{
	     echo "修改失败.<br>$sqld";
	     }
    }

}
?>