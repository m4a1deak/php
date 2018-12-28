<?php 
$fn = fopen('./jishiben.txt','a');
$str = $_POST[title].",".$_POST[content]."\n";
fwrite($fn, $str);
fclose($fn);
echo "OK";
 ?>