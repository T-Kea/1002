<?php
header("Content-type:text/html;charset=utf-8");
include "conn.php";
$a=@$_REQUEST['mingcheng'];
$b=@$_REQUEST['jianjie'];
$c=@$_REQUEST['addtime'];
$d=@$_REQUEST['xinghao'];
$e=@$_REQUEST['tupian'];
$f=@$_REQUEST['shuliang'];
$g=@$_REQUEST['cishu'];
$h=@$_REQUEST['tuijian'];
$i=@$_REQUEST['typeid'];
$j=@$_REQUEST['pinpai'];
if($_POST['action']=="update") {	
	 if (!($a and $b and $c and $d and $e and $f and $g and $h and $i and $j)) {
	 	echo "输入不为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	 }
	 else{
	 	$sqld="update tb_shangpin set mingcheng='$a',jianjie='$b',addtime='$c',xinghao='$d',tupian='$e',shuliang='$f',cishu='$g',tuijian='$h',typeid='$i',pinpai='$j' where id=".$_POST['id'];
	    $re5=mysqli_query($conn,$sqld);
	    if ($re5) {
	    echo "修改成功，点击<a href='yuangshouye.php'>这里</a>查看";
         }
         else{
	     echo "修改失败.<br>$sqld";
	     }
    }

}
?>