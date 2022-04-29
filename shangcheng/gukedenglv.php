<!DOCTYPE html>
<html>
<head>
	<title>电子商城</title>
	<link rel="stylesheet" href="css/1.css">
	<style type="text/css">
	body {
		background-image:url(images/1.png);
	}
</style>
</head>
<body>
 <div class="form-wrapper">
        <div class="header">
            登录
        </div>
        <form action="gukedenglvcaozuo.php" method="post"> 
        <div class="input-wrapper">
        	
        	
            <div class="border-wrapper">
                <input type="text" name="uid" placeholder="用户账号" class="border-item">
            </div>
            <div class="border-wrapper">
                <input type="password" name="password" placeholder="密码" class="border-item">
            </div>

        </div>

        <div class="action">
             <input type="submit" value="登录" class="btn" >
        </div>
       
        </form>

        <div class="icon-wrapper">
            <p>新用户?<a href="gukezhuce.php">在这注册!</a></p>
        </div>

    </div>

<?php 
    //接受错误信息
    if (!empty($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 1) {
            echo "<font color='#e8198b' size='5'>您的用户名或者密码错误!</font>";
        }
    }
?>
</body>
</html>