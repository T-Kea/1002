
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
var_dump($a);
var_dump($b);
//添加
if ($a and $b and $c and $d and $e and $f and $g and $h and $i and $j) {
	$sqla="insert into tb_shangpin(`mingcheng`,`jianjie`,`addtime`,`xinghao`,`tupian`,`shuliang`,`cishu`,`tuijian`,`typeid`,`pinpai`)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
    $rel=mysqli_query($conn,$sqla);
         if ($rel) {
 	       echo "<script type='text/javascript'>
	        javascript:location.href='yuangshouye.php'
	        </script>";
           }
         else{
	       echo "添加失败";
             }
	
}



// 删除
if($_GET['action']=="del") {
	
	$sqlb="delete from tb_shangpin where id=".$_GET['id'];
	$re2=mysqli_query($conn,$sqlb);
	if ($re2) {
	echo "<script type='text/javascript'>
	       javascript:location.href='yuangshouye.php'
	       </script>";
         }
    else{
	echo "删除失败";
       }
}
?>





				         
				         