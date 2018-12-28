<?php
function showDir($path,$lev=0){
    $fh = opendir($path);
    while( ($row = readdir($fh)) !==false ){
        if( ($row =='.') || ($row =='..') ){
            continue;
        }
        echo str_repeat('&nbsp;',$lev),$row,"<br>";
        if(is_dir($path.'/'.$row)){
            showDir($path.'/'.$row,$lev+1);
        }
    }
    closedir($fh);
}
showDir('.');
?>
