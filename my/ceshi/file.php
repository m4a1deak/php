<meta charset=utf8>
<?php
//$path = '.';
$path = isset($_GET['dir'])?$_GET['dir']:'.';
//当前目录
$fh = opendir($path);

/*//echo $row = readdir($fh),'<br>';
while (($row = readdir($fh)) !== false) {
    echo $row, '<br>';
}
closedir($fh);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<body>
<h1>文件管理系统</h1>
<table border="1">
    <tr>
        <td>名称</td>
        <td>操作</td>
    </tr>
    <?php while(($row = readdir($fh)) !== false){?>
    <tr>
        <td><?php echo $row; ?></td>
        <td><a href="file.php?dir=<?php
 echo $path,'/',$row; ?>">查看</a></td>
    </tr>
    <?php }?>
</table>
</body>
</html>
<?php
closedir($fh);
?>