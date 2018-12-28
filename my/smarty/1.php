<?php
$tit = "下起了雨 嘎嘎嘎";
function tit($name){
    $str = file_get_contents($name);
    $str = str_replace('{$','<?php echo $',$str);
    $str = str_replace('}',';?>',$str);
    $filename = $name.".php";
    file_put_contents($filename,$str);
    return $filename;
}
include(tit('1.html'));

?>
