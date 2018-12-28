<?php

function t(){
    static $a = 3;
    $a = $a+1;
    return $a;
}
echo t(),'<br>';
echo t(),'<br>';
?>
