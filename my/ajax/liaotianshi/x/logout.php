<?php
$username = $_GET['username'];
//echo $username;
session_start();
session_unset($_SESSION['name'][$username]);
//session_destroy();
echo "退出成功";

?>
