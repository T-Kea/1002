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
            注册
        </div>
        <form action="gukezhucecaozuo.php" method="post"> 
        <div class="input-wrapper">
        	
            <div class="border-wrapper">
                <input type="text" name="uid" placeholder="填写账号(六位数）" class="border-item" >
            </div>
            <div class="border-wrapper">
                <input type="password" name="password" placeholder="填写密码" class="border-item" >
            </div>
        </div>
      
        <div class="action">
         <input type="submit" value="注册" class="btn" >
        </div>
        </form>
        <div class="icon-wrapper">
            <p>注册成功后自动跳转到登录页面</p>
        </div>

    </div>


</body>
</html>