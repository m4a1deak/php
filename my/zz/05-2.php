<?php
$str = 'a                b               hello             world';
$patt = '/\s{1,}/';
echo preg_replace($patt,' ',$str);


?>
