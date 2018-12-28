<?php
$arr =array('请选择','宝马','奥迪','奔驰','摩托','拖拉机','dada'=>array('123','21312','234'));
require('./2.html');
$a = $_GET['name'];
$b = $_GET['cars'];
echo $a.$b;
print_r($arr);
?>
