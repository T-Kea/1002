<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>商城管理系统</title>
  <link rel="stylesheet" href="css/4.css">
</head>
<body>
<ul>
  <h3 align="center" style="color:#f7b499">壹洞洞俩后台管理</h3>
  <hr>
  <li><a href="yuangshouye.php"><h5 align="center">商品管理</h5></a></li>
  <hr>
  <li><a href="addshangpin.php"><h5 align="center">添加商品</h5></a></li>
  <hr>
  <li><a class="active" href="#yuangdingdan"><h5 align="center">订单管理</h5></a></li>
  <hr>
  <li><a href="yuangke.php"><h5 align="center">用户管理</h5></a></li>
  <hr>
  <li><a href="yuangdelv.php"><h5 align="center">退出系统</h5></a></li>
  <hr>
</ul>


<form action="shangpinoper.php" method="post">
<?php 
    //显示所有员工信息(表格的形式)
    //查询数据库
 include "conn.php";
 $rowCount = 0;//表数据总行数
 $pageSize = 8;//每页显示3行数据
    //获取当前页 来自身超链接 用户的点击
    if (empty($_GET['pageNow'])) {
        $pageNow = 1;
    }else{
        $pageNow = $_GET['pageNow'];//当前页
    }

    $pageCount = 0;//一共多少页数据

    $sql = "select count(id) from tb_dingdan";
    $res1 =mysqli_query($conn,$sql);
    //取出总行数
    if($row1 = mysqli_fetch_row($res1)){
        $rowCount = $row1[0];
    }
    //计算 数据总页数
    $pageCount = ceil($rowCount/$pageSize);
    //显示某页 员工数据信息条
    $sql = "select * from tb_dingdan order by id desc limit ".($pageNow-1)*$pageSize.",$pageSize";//注意limit后面要有空格

  

    $res =mysqli_query($conn,$sql);
    echo "<table border= '1px'  align='center'>";
    echo "<th>序号</th><th>订单号</th><th>收货人姓名</th><th>收货地址</th><th>联系电话</th><th>下单人账号</th><th>订单状态</th><th>操作</th><th>操作</th><th>操作</th></tr>";

  while ($a2=mysqli_fetch_row($res)) {

    echo "
    <tr>
   
    <td>$a2[0]</td>
    <td>$a2[1]</td>
    <td>$a2[4]</td>
    <td>$a2[5]</td>
    <td>$a2[6]</td>
    <td>$a2[8]</td>
    <td>$a2[9]</td>
   
    <td><a href=dingdanmod.php?action=update&id=".$a2[0]." >修改</a></td>
    <td><a href=dingdancaozuo1.php?action=del&id=".$a2[0]." onclick='return del()'>删除</a></td>
    <td><a href=dingdanpar1.php?id=".$a2[0].">订单详情</td>


    </tr>

    ";

}



echo "</table>";

?>
<div align="center">
              共 <b><?php echo $rowCount?></b> 个商品,共<?php echo $pageCount;?>页
              <a href="<?php echo $_SERVER['PHP_SELF']."?pageNow=1"?>">首页</a>
    
              <a href="<?php echo $_SERVER['PHP_SELF']?>?pageNow=<?php if($pageNow<1) echo $pageNow-1;else echo $pageNow=1;?>">上一页</a>
              <?php
              for($i=1;$i<=$pageCount;$i++){    //$i<=$pagecount(必须是<=)
                echo "<a href=".$_SERVER['PHP_SELF']."?pageNow=$i".">[".$i."]</a>";
              }
              
              ?>
              <a href="<?php echo $_SERVER['PHP_SELF']?>?pageNow=<?PHP if($pageNow<$pageCount-1) echo $pageNow+1; else echo $pageCount;?>">下一页</a>
              <a href="<?php echo $_SERVER['PHP_SELF']."?pageNow={$pageCount}"?>">尾页</a>
</div>


</form>
</div>
</body>

</html>
