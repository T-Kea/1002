<?php

include "conn.php";

if($_GET['action']=="select") {
     $sqlc="select * from tb_shangpin where id=".$_GET['id'];
     $re3=mysqli_query($conn,$sqlc);
     $re4=mysqli_fetch_row($re3);
     echo "<table border= '1px' align='center'>";
     echo "<tr><td>商品名称：：$re4[1]</td></tr>
               <tr><td>商品价格：$re4[2]</td></tr>
               <tr><td>上市时间：$re4[3]</td></tr>
               <tr><td>商品型号：$re4[4]</td></tr>
               <tr><td>图片路径：$re4[5]</td></tr>
               <tr><td>商品数量：$re4[6]</td></tr>
               <tr><td>购买次数：$re4[7]</td></tr>
               <tr><td>推荐次数：$re4[8]</td></tr>
               <tr><td>类型id：$re4[9]</td></tr>
               <tr><td>商品品牌：$re4[10]</td></tr>";
     echo "</table>";
   
   
 }
 ?>