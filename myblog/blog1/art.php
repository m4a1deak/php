<?php
require('./lib/init.php');
//获取地址栏信息
$art_id = $_GET['art_id'];
//判断是否合法
if(!is_numeric($art_id)){
    header("location:index.php");
}
$sql = "select count(*) from art where art_id='$art_id'";
//判断是否有这篇文章
if(mGetOne($sql)==0){
    header("location:index.php");
}

//栏目
$sql = "select * from cat";
$cats = mGetAll($sql);

//文章
$sql = "select art_id,catname,pic,big,title,content,pubtime,comm from art left join cat on art.cat_id=cat.cat_id where art.art_id='$art_id'";
$arts = mGetRow($sql);
//分页
//获取文章总数
$sql = "select count(*) from comment";
$sum = mGetOne($sql);
//一页显示几个
$cut = 3;
//当前页码
$curr = isset($_GET['page'])? $_GET['page']:1;
if(!is_numeric($curr)){
    echo "页数不合法";
}
if(($curr>ceil($sum/$cut))&&$curr>2){
   echo "没有这一页";
}
$page = getPage($sum,$curr,$cut);
//查询留言
$sql = "select * from comment where art_id='$art_id' order by comment_id desc limit ".($curr-1)*$cut.",".$cut;
$comms = mGetAll($sql);
//增加留言
//判断post
if(!empty($_POST)){
    $aaa = array('111.png','222.png','333.png','444.png','555.png');
    $com['pic'] = $aaa[array_rand($aaa)];
    $com['art_id']=$art_id;
    $com['nick'] = $_POST['nick'];
    $com['email'] = $_POST['email'];
    //将特殊字符转换为HTML实体
    $com['content'] = htmlspecialchars($_POST['content']);
    $com['pubtime'] = time();



//转换ip
    function ToInt($ip){
        $iparr = explode('.',$ip);
        $num = 0;
        for($i=0;$i<count($iparr);$i++){
            $num += intval($iparr[$i]) * pow(256,count($iparr)-($i+1));
        }
        return $num;
    }
//获取ip
    function Ip(){
        static $realip = NULL;
        if ($realip !== NULL) {
            return $realip;
        }
        if (getenv('HTTP_X_FORWARDED_FOR')){
            $realip = getenv('HTTP_X_FORWARDED_FOR');
        }else if(getenv('HTTP_CLIENT_IP')){
            $realip = getenv('HTTP_CLIENT_IP');
        }else{
            $realip = getenv('REMOTE_ADDR');
        }
        return $realip;
    }
//sprintf 将负数转成正数
//ip2long 将iPv4的字符串 互联网ip转换成数字格式要求
    $aip = Ip();
    $com['ip']=ToInt($aip);






print_r($com);












    if(empty($com['art_id'])){
        echo "名字不能为空";
        exit();
    }
    if(empty($com['content'])){
        echo "内容不能为空";
        exit();
    }
    if(mExec('comment',$com)){
        //添加成功则art表上的comm+1
        $sql = "update art set comm=comm+1 where art_id='$art_id'";
        if(mQuery($sql)){
            //跳转上一个页面
            $ref = $_SERVER['HTTP_REFERER'];
            header("location:$ref");
        }
    }
}
require(ROOT .'/view/front/art.html');
?>
