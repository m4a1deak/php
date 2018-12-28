<?php
/*$abc = $_GET['page'];
echo $abc;
*/
require('./blog1/lib/init.php');
function Code($name){
    $salt = require(ROOT . '/lib/config.php');
    return md5($name.'|'.$salt['salt']);
}
//$/a = "abc";
//echo Code($a);
echo "nihao";
echo md5('123');
?>
