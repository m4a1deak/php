<?php
//php封装函数

/**
 * 成功的提示细信息
 * @param srt $res
 */
function succ($res){
    $result = "succ";
    require(ROOT . '/view/admin/info.html');
    exit();
}

/**
 * 失败的提示细信息
 * @param srt $res
 */
function fail($res){
    $result = "fail";
    require(ROOT . '/view/admin/info.html');
    exit();
}

//获取来访者真是ip
function getRealIp(){
    //定义静态变量$realip
    static $realip = null;
    if($realip!==null){
        return $realip;
    }
    //getenv 获取一个环境变量的值
    if(getenv('REMOTR_ADDR')){
        $realip = getenv('REMOTR_ADDR');
    }else if(getenv('HTTP_CLIENT_IP')){
        $realip = getenv('HTTP_CLIENT_IP');
    }else if(getenv('HTTP_X_FROWARD_FOR')){
        $realip = getenv('HTTP_X_FROWARD_FOR');
    }
    return $realip;
}

/**
 * 生成分页代码
 * @param int $sum 文章总数
 * @param int $curr 当前显示页码数
 * $curr-2 $curr-2 $curr $curr+1 $curr+2
 * @param int $cut 每页显示的条数
 */
function getPage($sum,$curr,$cut){
    //计算最大页码数
    //ceil() 向上取整
    //五页的算法
    $max = ceil($sum/$cut);
    //最左侧页码
    $left = max(1,$curr-2);
    //最右侧代码
    $right = min($left+4,$max);
    //同时满足
    $left = max(1,$right-4);

    // (1 [2] 3 4 5) 6 7 8 9
    // 1 2 (3 4 [5] 6 7) 8 9
    // 1 2 3 4 (5 6 7 [8] 9)

    //声明数组
    $page = array();
    //循环出五页
    for($i=$left;$i<=$right;$i++){
        $_GET['page']=$i;
        //http_build_query  生成 URL-encode 之后的请求字符串
        $page[$i] =http_build_query($_GET);
    }
    return $page;
}
//print_r(getPage(100,5,10));
/**
 * 生成随机字符串
 * @param int $num 生产的随机字符串个数;
 * @return str 生成的随机字符串
 */
function randStr($num=6){
    //str_shuffle() 随机打乱一个字符串
    $str = str_shuffle(abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ);
    return substr($str,0,$num);;
}

//创建目录
function createDir(){
    //中间目录
    $path = '/upload/' . date("Y/m/d");
    //绝对目录
    $fpath = ROOT . $path;
    //判读是否是个目录 mkdir新建目录 0777最高权限
    if(is_dir($fpath) || mkdir($fpath,0777,true)){
        return $path;
    }else{
        return false;
    }
}

/**
 * 获取文件后缀
 * @param str $filename 文件名
 * @return str 文件的后缀名 带点
 */
function getExt($filename){
    //strrchr 返回字符串中的一部分，这部分以第二个参数的最后出现位置开始，直到第一个参数末尾。
    return strrchr($filename,'.');
}

//检测用户是否登录
function acc(){
    //如果name为空 取反为真 则返回false
    //如果name不为空 取反为假
    // 判断code 如果cccode为空 取反为真 返回false
    //ccode不为空 取反为假 继续往下执行
    if(!isset($_COOKIE['name']) || !isset($_COOKIE['ccode'])) {
        return false;
    }
        return $_COOKIE['ccode'] === cCode($_COOKIE['name']);

}

/**
 * 生成缩略图
 * @param str $oimg
 * @param int $sw 生成缩略图的宽
 * @param int $sh 生产缩略图的高
 * @return str $path 生成缩略图的路径
 */
function makeThumb($oimg,$sw=200,$sh=200){
    //缩略图存放的路径和名称
    $simg = dirname($oimg) . '/' .randStr() . '.png';
    //获取大图绝对路径
    $opath = ROOT . $oimg;
    //获取缩略图的绝对路径
    $spath = ROOT . $simg;
    //创建小画布
    $spic = imagecreatetruecolor($sw,$sh);
    //创建白色
    $white=imagecolorallocate($spic,255,255,255);
    //填充白色背景
    imagefill($spic,0,0,$white);
    //获取大图资源信息
    //list 把数组中的值赋给一些变量
    //getimagesize获取图形大小 第一个值是图像宽度的像素值,第二个是图像高度的像素值,第三个是图像类型的标记
    list($bw,$bh,$btype) = getimagesize($opath);
    //1 = GIF，2 = JPG，3 = PNG，4 = SWF，5 = PSD，6 = BMP
    //7 = TIFF(intel byte order)，8 = TIFF(motorola byte order)
    //9 = JPC，10 = JP2，11 = JPX，12 = JB2，13 = SWC
    //14 = IFF，15 = WBMP，16 = XBM
    //生成数组
    $map = array(
        1=>'imagecreatefromgif',
        2=>'imagecreatefromjpeg',
        3=>'imagecreatefrompng',
        15=>'imagecreatefrombmp'
    );
    //判读图像类型
    if(!isset($map[$btype])){
        return false;
    }
    $opic = $map[$btype]($opath);//大图资源
    //var_dump($spic);
    //var_dump($opic);
    //imagecreatefromjpeg()
    //计算缩略比例
    $rate = min($sw/$bw,$sh/$bh);
    $zw = $bw*$rate;//最终返回的小图的宽
    $zh = $bh*$rate;//最终返回的小图的高
    //缩小
    imagecopyresampled($spic,$opic,($sw-$zw)/2,($sh-$zh)/2,0,0,$zw,$zh,$bw,$bh);
    //画出来
    imagepng($spic,$spath);
    //释放画布
    imagedestroy($spic);
    imagedestroy($opic);
    return $simg;
}

function big($oimg,$sw=700,$sh=700){
    //缩略图存放的路径和名称
    $simg = dirname($oimg) . '/' .randStr() . '.png';
    //获取大图绝对路径
    $opath = ROOT . $oimg;
    //获取缩略图的绝对路径
    $spath = ROOT . $simg;
    //创建小画布
    $spic = imagecreatetruecolor($sw,$sh);
    //创建白色
    $white=imagecolorallocate($spic,255,255,255);
    //填充白色背景
    imagefill($spic,0,0,$white);
    //获取大图资源信息
    //list 把数组中的值赋给一些变量
    //getimagesize获取图形大小 第一个值是图像宽度的像素值,第二个是图像高度的像素值,第三个是图像类型的标记
    list($bw,$bh,$btype) = getimagesize($opath);
    //1 = GIF，2 = JPG，3 = PNG，4 = SWF，5 = PSD，6 = BMP
    //7 = TIFF(intel byte order)，8 = TIFF(motorola byte order)
    //9 = JPC，10 = JP2，11 = JPX，12 = JB2，13 = SWC
    //14 = IFF，15 = WBMP，16 = XBM
    //生成数组
    $map = array(
        1=>'imagecreatefromgif',
        2=>'imagecreatefromjpeg',
        3=>'imagecreatefrompng',
        15=>'imagecreatefrombmp'
    );
    //判读图像类型
    if(!isset($map[$btype])){
        return false;
    }
    $opic = $map[$btype]($opath);//大图资源
    //var_dump($spic);
    //var_dump($opic);
    //imagecreatefromjpeg()
    //计算缩略比例
    $rate = min($sw/$bw,$sh/$bh);
    $zw = $bw*$rate;//最终返回的小图的宽
    $zh = $bh*$rate;//最终返回的小图的高
    //缩小
    imagecopyresampled($spic,$opic,($sw-$zw)/2,($sh-$zh)/2,0,0,$zw,$zh,$bw,$bh);
    //画出来
    imagepng($spic,$spath);
    //释放画布
    imagedestroy($spic);
    imagedestroy($opic);
    return $simg;
}

/**
 * 加密用户名
 * @param str $name 登录时输入的用户名
 * @return str md5(用户名+salt) => md5码
 */

function cCode($name){
    $salt = require(ROOT . '/lib/config.php');
    return md5($name.'|'.$salt['salt']);
}
?>
