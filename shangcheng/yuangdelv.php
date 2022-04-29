<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<TITLE>商城管理系统</TITLE>
<link rel="stylesheet" href="css/3.css">

	
</style>


</head>

<body>
<h1 align="center"> 商城管理系统</h1>
<div class="logo_box"><img class="logo_img" src="images/pic04.png"></div>
<div class="login_box">
<h2 class="title">管理员登录</h2>
<form action="yuangdelvcaozuo.php" method="post">
        <input  class="input_box" type="text" name="id" placeholder="请输入账号" />
        <input  class="input_box" type="password" name="password"  placeholder="请输入密码" />
   
        <input  class="button_box" type="submit" value="登录">
        
       
</form>
</div>

<?php 
    //接受错误信息
    if (!empty($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 1) {
            echo "<font color='red' size='5'>您的用户名或者密码错误!</font>";
        }
    }
?>
 
</body>
</html>
