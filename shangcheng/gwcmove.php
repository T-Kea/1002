<?php


session_start();//启动session


$id=$_GET["id"];
$arraysp=explode("@",$_SESSION['producelist']);
$arraysl=explode("@",$_SESSION['quatity']);

for($i=0;$i<count($arraysp);$i++){
	if ($arraysp[$i]==$id) {
		
     unset($arraysp[$i]);
	 unset($arraysl[$i]);	
	}
}

$_SESSION['producelist']=implode("@",$arraysp);
$_SESSION['quatity']=implode("@",$arraysl);

header("location:car.php");//跳转到购物车

?>