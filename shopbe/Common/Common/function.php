<?php

function jm($a){
    return md5($a);
}
function che(){
    return jm(cookie('username').cookie('userid').C('COO_KIE'))===cookie('key');
}
?>
