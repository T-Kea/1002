<?php
header("Content-type:text/html;charset=utf-8");
include "conn.php";
$a=@$_REQUEST['uid'];
$b=@$_REQUEST['password'];




if ($a and $b) {
	$sqla="insert into tb_user(`uid`,`password`)values('$a','$b')";
    $rel=mysqli_query($conn,$sqla);
         if ($rel) {
 	       echo "注册成功，点击<a href='gukedenglv.php'>这里</a>登录";
           }
         else{
	       echo "注册失败";
             }
	
}
?>