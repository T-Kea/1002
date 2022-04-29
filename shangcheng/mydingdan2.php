<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include "conn.php";
$sqlc="select * from tb_user where uid='".$_SESSION['uid']."'";
$re3=mysqli_query($conn,$sqlc);
$re4=mysqli_fetch_array($re3);
$c=$re4['tel'];
$d=$re4['dizhi'];
$e=$re4['truenam'];
$sqld="update tb_dingdan set tel='$c',dizhi='$d',shouhuoren='$e' where dingdanhao='".$_SESSION['dingdanhao']."'";
$re5=mysqli_query($conn,$sqld);
 if ($re5) {
	echo "<script type='text/javascript'>
	    javascript:location.href='showdd.php'
	    </script>";
	}
else{
	echo "修改失败.<br>$sqld";
	}
    
?>