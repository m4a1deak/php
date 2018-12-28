<?php
//mysql系列操作函数

/**
 * 连接数据库
 * @return reseouce 连接成功返回数据库资源
 */
function mConn(){
    //声明静态变量
    static $conn =null;
    if($conn === null){
        //声明$cfg成语concfg.php返回的数组
        $cfg = require(ROOT . '/lib/config.php');
        //连接数据库
        $conn = mysql_connect($cfg['host'],$cfg['user'],$cfg['pwd']);
        //选库
        mysql_query('use '.$cfg['db'],$conn);
        //设置数据库编码
        mysql_query('set names '.$cfg['charset'],$conn);
    }
    //返回资源
    return $conn;
}
//var_dump(mConn());
//resource(5) of type (mysql link)

/**
 * 查询函数
 * @return mixed(混合类型) resoure/bool
 */
function mQuery($sql){
    //调用$sql语句在数据库内
    $rs = mysql_query($sql,mConn());
    if($rs){
        //成功打印$sql语句到日志中
        mLog($sql);
    }else{
        //失败打印$sql语句及错误到日志中
        mLog($sql . "\n" .mysql_error());
    }
    return $rs;
}

/**
 * select查询返回一个结果
 * @param str $sql 待查询的select语句
 * @return mixed 成功返回结果 失败返回false
 */
function mGetOne($sql){
    //执行$sql语句
    $rs = mQuery($sql);
    if(!$rs){
        return false;
    }
    //返回的是一维索引数组的第一个值
    return mysql_fetch_row($rs)[0];
}

/**
 *select取出一行数据
 * @param str $sql 待查询的sql语句
 * @return arr/false 查询成功返回一个一维数组
 */
function mGetRow($sql){
    //执行$sql语句
    $rs = mQuery($sql);
    if(!$rs){
        return false;
    }
    //返回的是一行关联数组
    return mysql_fetch_assoc($rs);
}

/**
 * select查询多行数据
 * @param str $sql 待查询的sql语句
 * @return arr/false 返回一个二维数组
 */
function mGetAll($sql){
    //执行$sql语句
    $rs = mQuery($sql);
    if(!$rs){
        return false;
    }
    //定义$data为一个数组
    $data = array();
    //循环取出$rs里所有的值 并将每行赋值给给$row
    while($row = mysql_fetch_assoc($rs)){
        //将$row值循环到数组$data里
        $data[] = $row;
    }
    return $data;
}
//$sql = "select * from art";
//print_r(mGetAll($sql));

/**
 * 自动拼接 insert 和 update 语句,并且调用mQuery()去执行
 *@param str $table 表名
 *@param arr $data 接收到的数据是个一维数组
 *@param str $act 动作 默认是'insert'
 *@param str $where 防止update更改时少加where条件
 *@return bool insert 或 update 成功 或 失败
 */
function mExec($table,$data,$act='insert',$where=0){
    if($act == 'insert'){
        //insert时进行拼接
        //implode 用什么字符串 将一个一维数组转换成字符串
        $sql = "insert into $table (";
        $sql .= implode(',',array_keys($data)) . ") values ('";
        $sql .= implode("','",array_values($data)) . "')";
    }else if($act == 'update'){
        //update拼接
        $sql = "update $table set ";
        //遍历出键与值
        foreach($data as $k=>$v){
            $sql .= $k . "='" . $v . "',";
        }
        //删除字符串末端的字符 啥字符
        $sql = rtrim($sql ,',') . " where " .$where;
    }
    return mQuery($sql);
}
//$data = array('title'=>'今天的空气','content'=>'空气质量优','pubtime'=>12345678);
//insert into art (title,content,pubtime,author) values ('今天的空气','空气质量优','12345678','baibai')
//update art set title='今天的空气',content='空气质量优',pubtime='12345678'author='baibai' where art_id=1;
//echo mExec('art',$data);
//echo mExec('art',$data,'update','cat_id=1');

/**
 * log日志记录功能
 * @param str $str 待记录的字符串
 */
function mLog($str){
    //定义log文件
    $filename = ROOT . '/log/' . date('Ymd') . '.txt';
    //字符串拼接
    $log = "-----------------------------\n" . date('Y/m/d H:i:s') . "\n" . $str . "\n" . "----------------------------------------\n\n";
    //file_put_content() 讲一个字符串写入文件
    //要被写入的文件名,要写入的数据,FILE_APPEND (如果文件存在,追加数据而不是覆盖)
    return file_put_contents($filename,$log,FILE_APPEND);
}


/**
 * //addslashes() 函数返回在预定义字符之前添加反斜杠的字符串
 * 使用反斜线 转义字符串
 * @param arr 带转义的数组
 * @return arr 转义后的数组
 */
function _addslashes($arr){
    //遍历数组
    foreach($arr as $k=>$v){
        if(is_string($v)){
            //如果 值 是一个字符串 进行转义
            $arr[$k] = addslashes($v);
        }else if(is_array($v)){
            //如果 值 还是数组 那么进行递归继续调用函数
            $arr[$k] = _addslashes($v);
        }
    }
    return $arr;
}
//$a = array("ds'f","s'af",array("a's","f's"));
//print_r(_addslashes($a));
//Array ( [0] => ds\'f [1] => s\'af [2] => Array ( [0] => a\'s [1] => f\'s ) )
?>
