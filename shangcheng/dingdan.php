<?php
session_start();
date_default_timezone_set('PRC');
include "conn.php";
$dingdanhao = date("YmjHis").'123';
$spc=$_SESSION['producelist'];
$slc=$_SESSION['quatity'];
$xiadanrenzh=$_SESSION['uid'];
$time = date("Y-m-j H:i:s");
$zt="未做如何处理";
$total=$_SESSION['total'];

	$sqla="insert into tb_dingdan(`dingdanhao`,`spc`,`slc`,`time`,`xiadanrenzh`,`zt`,`total`) values ('$dingdanhao','$spc','$slc','$time','$xiadanrenzh','$zt','$total')";
    $rel=mysqli_query($conn,$sqla);
         if ($rel) {
 	         echo "<script type='text/javascript'>
	        javascript:location.href='mydingdan2.php'
	        </script>";
 	       

           }
         else{
	       echo "添加失败";
             }
	
$_SESSION['dingdanhao']=$dingdanhao;
?>