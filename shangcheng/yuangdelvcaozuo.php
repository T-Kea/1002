<?php
   
    //1.id
    $id = $_POST['id'];
    //2.密码
    $password = $_POST['password'];
    //3.简单验证
    if ($id == "112233" && $password == "123456") {
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['password']=$password;

      header("Location: yuangshouye.php");
            exit();
            return;
        };
    
    header("Location: yuangdelv.php?error=1&id=$id&password=$password");
    exit();
?>