<?php
//单引号转义
function danyinhao($data){
    if(empty($data)){
        return $data;
    }
    return is_array($data)?array_map('danyinhao',$data):addslashes($data);
}
//批量实体转义
function deepspecialchars($data){
    if(empty($data)){
        return $data;
    }
    //中级写法
    return is_array($data)? array_map('deepspecialchars',$data):htmlspecialchars($data) ;
    //初级写法
    /*if(is_array($data)){
        //数组
        foreach($data as $k=>$v){
            $data[$k]=deepspecialchars($v);
            return $data;
        }
    }else{
        //单个变量
        return htmlspecialchars($data);
    }*/
}