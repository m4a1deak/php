<?php
function open($path){
    $fh = opendir($path);
    return $fh;
}
print_r(open('.'));
print_r(open('.'));
print_r(open('.'));
/*function open($path){
    static $fh = null;
    if($fh === null){
        $fh = opendir($path);
    }
return $fh;
}
print_r(open('.'));
print_r(open('./'));
print_r(open('./'));*/
?>
