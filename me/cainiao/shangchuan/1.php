<?php
var_dump($_FILES);
define('ROOT' , dirname(__DIR__));
if($_FILES['file']['name']!='' && $_FILES['file']['error']==0){
    $filename = createDir() . '/' . suiji() . getExt($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], ROOT .  $filename)){
        echo '成功';
    }else{
        echo '1xzx';
    }
}else{
    echo 333;
}
function suiji(){
    $str = str_shuffle('abcdeFGHFGHJkmnpqfgHJKMNPQFGHJKMNPqjkmnpqrstuvwxyz');
    return substr($str,0,6);
}
function createDir(){
    $path="/upload/".date('Y-m-d');
    $fpath = ROOT . $path;
    if(is_dir($fpath) || mkdir($fpath ,0777,true)){
        return $path;
    }else{
        return false;
    }
}
function getExt($filename){
    return strrchr($filename,'.');
}