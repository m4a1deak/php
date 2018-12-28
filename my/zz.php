<?php
$str = '1234aaA';
$patt='/^(?=.*?[A-Za-z]+)(?=.*?[0-9]+)(?=.*?[A-Z]).{6,8}$/';
preg_match_all($patt,$str,$a);
echo empty($a[0][0])? 'k' :'bk';
print_r($a);

?>
