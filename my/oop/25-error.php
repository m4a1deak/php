<?php
function t1(){
    if(rand(1,10)>5){
        //发送错误
        throw new Exception("第一次就错了"."1");
    }else{
        return t2();
    }
}
function t2(){
    if(rand(1,10)>5){
        //发送错误
        throw new Exception("第二次就错了"."2");
    }else{
        return t3();
    }
}
function t3(){
    if(rand(1,10)>5){
        //发送错误
        throw new Exception("第三次就错了"."3");
    }else{
        return true;
    }
}
try{
    var_dump(t1());
}catch(Exception $error){
    //var_dump($error);
    echo $error->getFile();
    echo $error->getLine();
    echo $error->getCode();
    echo $error->getMessage();
}



?>
