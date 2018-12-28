<?php
require('./lib/init.php');
//判断post提交
if(empty($_POST)){
    //如果没有post
    //获取栏目
    $sql = "select catname,cat_id from cat";
    $catname = mGetAll($sql);
    //post为空时加载HTML页面
    require(ROOT . '/view/admin/artadd.html');
}else{
    //表单进行提交时
    //trim 去掉字符串首尾处的空白字符
    //判断标题是否为空
    if(empty(trim($_POST['title']))){
        fail("标题不能为空");
    }
    //判断文章名是否存在
    $sql = "select count(*) from art where title='$_POST[title]'";
    if(mGetOne($sql) != 0){
        fail("文章名已经存在");
    }
    //判断文章内容是否为空
    if(empty(trim($_POST['content']))){
        fail("内容不能为空");
    }else{
        //添加文章
        //都去掉前后空格
        $art['title'] = trim($_POST['title']);
        $art['cat_id'] = trim($_POST['cat_id']);
        $art['content'] = trim($_POST['content']);
        $art['title'] = trim($_POST['title']);
        //获取发布时间
        $art['pubtime'] = time();
        //如果图片名字不为空 并且错误error为0 则上传成功
        //form的method要为 post 类型
        //form一定要加 **enctype=multipart/form-data**
        if(!($_FILES['pic']['name'] =='')&& $_FILES['pic']['error']==0){
            //创建目录 重新命名文件
            $filename = createDir() . '/' . randStr() . getExt($_FILES['pic']['name']);
            if(move_uploaded_file($_FILES['pic']['tmp_name'],ROOT .$filename)){
                $art['pic']=$filename;
                //生成较小的缩略图
                $art['thumb']=makeThumb($filename);
                //生成较大的图
                $art['big']=big($filename);
            }
        }
        //添加到数据库
        if(mExec('art',$art)){
            //添加成功则将文章数+1
            $sql = "update cat set num=num+1 where cat_id='$_POST[cat_id]'";
            if(mQuery($sql)){
                succ("文章发布成功");
            }
        }
    }
}



?>
