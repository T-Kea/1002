<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<?php
    //接受用户的数据
    //1.id
    $uid = $_POST['uid'];
    //2.密码
    $password = $_POST['password'];
    //3.数据库验证 
    include "conn.php";
    //通过输入的id号获取数据库中的密码 然后再 和输入的密码比对

    $sql = "select password from tb_user where uid = $uid";

    $res = mysqli_query($conn,$sql);

    if ($row = mysqli_fetch_assoc($res)) {
        //查询到数据库密码
        if ($row['password'] == $password) {
            session_start();
            $_SESSION['uid']=$_POST['uid'];
            header("Location: gukeshouye1.php");
            exit();
            return;
        };
    }
    header("Location: gukedenglv.php?error=1&uid=$uid&password=$password");
    exit();

    //关闭资源
    mysqli_free_result($res);
    mysqli_close($conn);

?>