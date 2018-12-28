<?php
$i = 3;
$n = 0;
if(--$n || ++$i){
    var_dump($n);
    echo $n;
    echo $i;
}
echo "<br/>";
$a = 3;
$b = 6;
If($a=5||$b=3){
    var_dump($a);
    $a++;
    $b++;
}
echo $a."<br/>";
echo $b;
$a=0;
$b=0;
echo "<br/>";
if(($a=3)>0||($b=3)>0){
    $a++;
    $b++;
}
var_dump($a,$b);

function test($n){
    if($n>0){
        echo $n,",";
        test($n-1);
        echo $n,",";
    }
}
test(10);
echo "<br/>";
class A{
    function __construct(){
        echo "a";
    }
}
class B extends A{
    function __construct(){
        echo 'b';
    }
}
$b=new B();
?>
