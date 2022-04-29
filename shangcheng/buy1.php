<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
include "conn.php";
session_start();
$id=@$_GET["id"];
$sqlc="select * from tb_shangpin where id='".$id."'";
$re3=mysqli_query($conn,$sqlc);
$info=mysqli_fetch_array($re3);
if($info['shuliang']<=0) {
     echo "<script>alter('该商品已经售空！');history.back();</script>";
     exit;
}
$array=explode("@",isset($_SESSION['producelist'])?$_SESSION['producelist']:" ");
if(count( $array )==1) {
     $_SESSION['producelist']=$_SESSION['producelist'].$id."@";
     $_SESSION['quatity']=$_SESSION['quatity']."1@";
}
if(count($array)!=1) {
  if(!in_array($id,$array)){
    $_SESSION['producelist']=$_SESSION['producelist'].$id."@";
     $_SESSION['quatity']=$_SESSION['quatity']."1@";

}else{
     $arrayquatity=explode("@",$_SESSION['quatity']);
     $key=array_search($id,$array);
     $arrayquatity[$key]=$arrayquatity[$key]+1;
     $_SESSION['quatity']=implode("@",$arrayquatity);
}
}
header("location:car.php");
?>