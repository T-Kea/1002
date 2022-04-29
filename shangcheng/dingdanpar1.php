<?php
session_start();
include "conn.php";
$sql=mysqli_query($conn,"select * from tb_dingdan where id='".$_GET['id']."'");
$info=mysqli_fetch_array($sql);
$spc=$info['spc'];
$slc=$info['slc'];
$arraysp=explode("@",$spc);
$arraysl=explode("@",$slc);
?>
<table width="500" border="0" align="center">
<td height="25" bgcolor="#FFFFFF"><div align="left"><span>&nbsp;订单号：</span><?php echo $info['dingdanhao']; ?></div></td>
<table border="1" align="center">
  
  <tr>
        <td width="500" height="25"  bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
        <td width="125" height="25"  bgcolor="#FFFFFF"><div align="center">商品单价</div></td>
        <td width="125" height="25"  bgcolor="#FFFFFF"><div align="center">数量</div></td>
        <td width="125" height="25"  bgcolor="#FFFFFF"><div align="center">小计</div></td>

  </tr>


<?php
$total=0;
for($i=0;$i<count($arraysp)-1;$i++){
  if($arraysp[$i]!=" "){
    $sqll=mysqli_query($conn,"select * from tb_shangpin where id='".$arraysp[$i]."'");
    $info1=mysqli_fetch_array($sqll);
    $total=$total+=$arraysl[$i]*$info1['jianjie'];
    ?>
    <tr bgcolor="#FFFFFF">
      <tr>
        <td height="25"><div align="center"><?php echo $info1['mingcheng'];?></div></td>
        <td height="25"><div align="center"><?php echo $info1['jianjie'];?></div></td>
        <td height="25"><div align="center"><?php echo $arraysl[$i];?></div></td>
        <td height="25"><div align="center"><?php echo $arraysl[$i]*$info1['jianjie'];?></div></td>
      
      </tr>

      <?php
  }
}
        ?>
        

<tr bgcolor="#FFFFFF">
  <td height="25" colspan="5"><div align="right"><span>总计费用：</span><?php echo $total;?></div></td>
</tr>
</table>

  <tr><th><div align="center"><span>用户账号：</span><?php echo $info['xiadanrenzh'];?></div></th></tr>
    <tr><th><div align="center"><span>收货人姓名：</span><?php echo $info['shouhuoren'];?></div></th></tr>
    <tr><th><div align="center"><span>收货人地址：</span><?php echo $info['dizhi'];?></div></th></tr>
    <tr><th><div align="center"><span>收货人电话：</span><?php echo $info['tel'];?></div></th></tr>
</table>
<a href="yuangdingdan.php">关闭窗口</a><br/>
    <?php
    $_SESSION['producelist']=" ";
    $_SESSION['quatity']=" ";
    ?>