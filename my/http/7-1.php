<?php
$fk = fsockopen('localhost',80,$errno,$errstr,5);
$s = array(
    'GET /my/http/6.html HTTP/1.1',
    'host:localhost',
    'cookie:name=damin',
    '',
    ''
);
$str = implode("\n",$s);
fwrite($fk,$str);
while($row = fread($fk,32)){
    echo $row;
}
fclose($fk);

?>
