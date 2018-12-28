<?php
$news = array(
    array('id'=>1,'title'=>'天气放晴'),
    array('id'=>2,'title'=>'鹅毛备战'),
    array('id'=>3,'title'=>'北约开会')
);
//echo json_encode($news);
foreach($news as $n){
    echo '<li><a href="new.php?id=',$n['id'],'">',$n['title'],'</a></li>';
}


?>
