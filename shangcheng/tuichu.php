<?php
session_start();
session_unset();
session_destroy();
echo "<script>alter('您已退出登录!');location.href='gukeshouye1.php';</script>";
?>