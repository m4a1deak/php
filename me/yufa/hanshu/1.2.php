<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
   第一个数: <input type="text" name="a">
   第二个数: <input type="text" name="b">
   第三个数: <input type="text" name="c">
    <input type="submit" value="提交">
</form>
</body>
</html>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
//echo $a+$b+$c;
echo $a > $b ? ($a > $c ? $a: $c):($b > $c ? $b: $c);
?>
