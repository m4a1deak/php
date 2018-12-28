
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
    获得奖金:<input type="text" name="text">
    <input type="submit" value="提交">
</form>
</body>
</html>
<?php
$text = $_POST['text'];
$x1 = 100000 * 0.1;
$x2 = $x1 + 100000*0.075;
$x4 = $x2 + 200000*0.05;
$x6 = $x4 + 200000*0.03;
$x10 = $x6 + 400000*0.015;
if($text<=100000){
    echo "小于10万时",$text*0.1;
}else if($text<=200000){
    echo "小于20万时",$x1+($text - 100000)*0.075;
}else if($text<=400000){
    echo "小于40万时",$x2+($text - 200000)*0.05;
}else if($text<=600000){
    echo "小于60万时",$x4+($text - 200000)*0.03;
}else if($text<=1000000){
    echo "小于100万时",$x6+($text - 400000)*0.015;
}else if($text>1000000){
    echo "大于100万时",$x10 + ($text-1000000)*0.01;
}
?>