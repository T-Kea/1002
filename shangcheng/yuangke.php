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
  <li><a href="yuangdingdan"><h5 align="center">订单管理</h5></a></li>
  <hr>
  <li><a class="active" href="#yuangke.php"><h5 align="center">用户管理</h5></a></li>
  <hr>
  <li><a href="yuangdelv.php"><h5 align="center">退出系统</h5></a></li>
  <hr>
</ul>

<form action="yuangkeoper.php" method="post">
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

    $sql = "select count(uid) from tb_user";
    $res1 =mysqli_query($conn,$sql);
    //取出总行数
    if($row1 = mysqli_fetch_row($res1)){
        $rowCount = $row1[0];
    }

    //计算 数据总页数
    $pageCount = ceil($rowCount/$pageSize);
    //显示某页 员工数据信息条
    $sql = "select * from tb_user order by uid limit ".($pageNow-1)*$pageSize.",$pageSize";//注意limit后面要有空格

  

    $res =mysqli_query($conn,$sql);
    

    echo "<table border= '1px' align='center'>";
    echo "<th>用户账号</th><th>用户名</th><th>密码</th><th>身份证号码</th><th>联系电话</th><th>地址</th><th>真实姓名</th><th>操作</th></tr>";

  while ($a2=mysqli_fetch_row($res)) {

    echo "
    <tr>
   
    <td>$a2[0]</td>
    <td>$a2[1]</td>
    <td>$a2[2]</td>
    <td>$a2[3]</td>
    <td>$a2[4]</td>
    <td>$a2[5]</td>
    <td>$a2[6]</td>
   
   
    <td><a href=yuangkeoper.php?action=del&uid=".$a2[0]." onclick='return del()'>注销用户</td>


    </tr>

    ";

}



echo "</table>";

?>
<div align="center">
							共 <b><?php echo $rowCount?></b> 个用户,共<?php echo $pageCount;?>页
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



