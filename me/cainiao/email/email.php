<?php
$to = '1030657055@qq.com';
$subject = '参数邮件';
$message = 'Hello,这是邮件内容';
$from = 'admin@admin.com';
$headers = 'From'.$frin;
if(mail($to,$subject,$message,$headers)){
    echo '已发送';
}else{
    echo 123;
}


?>
