<?php
header("Content-type:text/html;charset=utf-8");
include "conn.php";

//删除
if($_GET['action']=="del") {
	
	$sqlb="delete from tb_user where uid=".$_GET['uid'];
	$re2=mysqli_query($conn,$sqlb);
	if ($re2) {
	echo "<script type='text/javascript'>
	       javascript:location.href='yuangke.php'
	       </script>";
         }
    else{
	echo "删除失败";
       }
}
?>





				         
				         