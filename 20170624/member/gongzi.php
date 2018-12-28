<?php
include_once("../class/bonus_class.php");
session_start();
$bonus_cl=new bonus_class();
$bonus_cl->b8bonus($_SESSION['ID']);
$bonus_cl->b0bonus();
echo "<script language=javascript>alert('工资已领取.');window.location.href='right.php'</script>";	
?>
