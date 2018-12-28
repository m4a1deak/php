<?php
$str = 'tom李';
$patt = '/^[\x{4e00}-\x{9fa5}]$/u';
echo preg_match_all($patt,$str)?'纯的':'咋的';

?>
