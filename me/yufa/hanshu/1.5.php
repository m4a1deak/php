<?php
$s =2;
$x = 1;
$sum = 0;
$a = 0;
for($i = 1;$i<=20;$i++){
    $sum = $sum + $s/$x;
    echo $sum,"<br>";
    $c = $x;
    $x = $s;
    $s = $s+$c;

}

/*$a = 1;
$b = 1;
$c = 0;
$sum = 0;
for($i = 1;$i<=20;$i++)
{
    $c = $a+$b;
    $sum = $sum + $c/$a;
    echo $sum,"<br>";
    $b = $a;
    $a =$c;
}*/


?>
