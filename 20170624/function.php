<?php
include("conn.php");
//获取当前时间
function now(){
	date_default_timezone_set('PRC');
	return date('Y-m-d H:i:s',time());
}
//周封顶
function getdaybonus2($id,$riQi){
	$zhou1=date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
	$zhou7=date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));
	$sql = "select * from `bonus` where bdate<='$zhou7' and bdate>='$zhou1'  and uid = ".$id."";
	$result = mysql_query($sql);
	return mysql_fetch_assoc($result);
}

//日封顶
function getdaybonus($id,$riQi){
	$sql = "select *from `bonus` where bdate like '%$riQi%' and uid = ".$id."";
	$result = mysql_query($sql);
	return mysql_fetch_assoc($result);
}

function systemstatus(){
	$sql="SELECT xtkg FROM `systemparameters` where id=1";	
	$query=mysql_query($sql);
	$row=mysql_fetch_row($query);
	if ($row[0]==1){
		return true;
	}else{
		return false;	
	}
}
//商品插入
//$id商品id，$arr订单里所有商品的 信息，$member用户信息，$member_update用户扣除电子情况

function store($FileID,$id,$arr,$nickname,$member_update,$lsk,$username,$useraddress,$usertel,$lx){
	
	$orders=array('ordersnumber'=>$FileID,'uid'=>$id,'userid'=>$nickname,
			'username'=>$username,'usertel'=>$usertel,'useraddress'=>$useraddress,
			'goods'=>serialize($arr),'cdate'=>now(),'sgb'=>$lsk,'lx'=>$lx,'isqr'=>1
	);
	add_insert_cl('orders',$orders);
	edit_update_cl('member',$member_update,$id);
	return $FileID;
}
//消息框函数
function alert($msg,$url=""){ 
$str = "<script type='text/javascript'>"; 
$str.="alert('".$msg."');"; 
if ($url != "") 
{ 
$str.="window.location.href='{$url}';"; 
} 
else 
{ 
$str.="window.history.back();"; 
} 
echo $str.='</script>'; 
}

function getProvincebyid($pid){
	$where="where provinceid=".$pid;
	$province=que_select_cl_where('province',$where);
	return $province['province'];
}

function getCitybyid($cid){
	$where="where cityid=".$cid;
	$city=que_select_cl_where('city',$where);
	return $city['city'];
}

/*
树状图输出逻辑
@reid 推荐人
return 输出格式
*/
function tree($id){
	$shuchu = "<ul>";
	$sql = "SELECT * FROM `member` WHERE reid=".$id." order by rdt asc";
	$query = mysql_query($sql);
	if (mysql_num_rows($query)>0){
		while($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
			$shuchu.="<li>".$row['nickname']."[".$ul['lvname']."]";
			$shuchu.=tree($row['id']);
			$shuchu.="</li>";
		}
		$shuchu .= "</ul>";
	}else{
		$shuchu="";
	}
	return $shuchu;
}
function tree1($id,$uid){
	$rs=getMemberbyID($uid);
	$plevel=$rs['plevel'];
	$shuchu = "<ul>";
	$sql = "SELECT * FROM `member` WHERE reid=".$id."   ";
// 	echo $sql;
	$query = mysql_query($sql);
	if (mysql_num_rows($query)>0){
		while($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
			if ($ul['ulevel']){
			$shuchu.="<li>".$row['nickname']."[".$ul['lvname']."]";
			}else {
			$shuchu.="<li>".$row['nickname']."[零级会员]";
			}
			
				$shuchu.=tree1($row['id'],$uid);
				
			$shuchu.="</li>";
		}
		$shuchu .= "</ul>";
	}else{
		$shuchu="";
	}
	return $shuchu;
}

//检查会员编号是否存在
function checkUserID($UserID){
	$sql="select * from `member` where userid='".$UserID."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//级别是否存在
function checklingji($FatherName){
	$sql="select * from `member` where ulevel=0 and userid='".$FatherName."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) < 1){
		return false;
	}else{
		return true;
	}
}
//检查推荐人是否存在
function checkrName($rName){
	$sql="select * from `member` where userid='".$rName."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) < 1){
		return true;
	}else{
		return false;
	}
}
//检查接点人是否存在
function checkFatherName($FatherName){
	$sql="select * from `member` where userid='".$FatherName."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) < 1){
		return true;
	}else{
		return false;
	}
}
//检查会员手机号
function checkUserTel($UserTel){
	$sql="select * from `member` where UserTel='".$UserTel."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}
//检查会员微信号
function checkcaifutong($caifutong){
	$sql="select * from `member` where caifutong='".$caifutong."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}
//检查会员编号是否存在
function checkID($ID){
	$sql="select * from `member` where id='$ID'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return false;
	}else{
		return true;
	}
}
//检查会员昵称是否存在
function checkNickName($NickName){
	$sql = "SELECT * FROM `member` WHERE nickname='".$NickName."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}

//检查会员编号是否是服务中心
function checkIsbd($NickName){
	$sql = "SELECT * FROM `member` WHERE nickname='".$NickName."' and isbd>=2 ";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}

//检查会员编号是否激活
function checkNickNamebyispay($NickName){
	$sql = "SELECT * FROM `member` WHERE nickname = '$NickName' and ispay > 0  and ulevel>0 ";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//会员密码找回
function checkLogin2($NickName,$PassWord,$PassWord2){

	$sql="select * from `Member` where nickname= '$NickName' AND passquestion= '$PassWord' AND passanswer= '$PassWord2'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}


//会员登录验证
function checkLogin($NickName,$PassWord){
	$PassWord = md5($PassWord);
	$sql="select * from `Member` where nickname= '$NickName' AND password1= '$PassWord'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//会员二级密码验证
function checkPassword2($NickName,$PassWord2){
	$PassWord2 = md5($PassWord2);
	$sql="select * from `Member` where nickname='".$NickName."' AND password2='".$PassWord2."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//会员三级密码验证
function checkPassword3($NickName,$PassWord3){
	$PassWord3 = md5($PassWord3);
	$sql="select * from `Member` where nickname='".$NickName."' AND password3='".$PassWord3."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//密码问题验证
function checkQuestion($NickName,$passanswer){
	$sql="select * from `Member` where nickname='".$NickName."' AND passanswer='".$passanswer."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//根据ID获取会员信息
function getMemberbyID($_id){
	$sql = "SELECT * FROM member WHERE id=".$_id;
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据ID获取会员信息
function getMemberbyID2($_id){
	$sql = "SELECT * FROM `bwmember` WHERE uid=".$_id." order by pdt limit 0,1";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
function getMemberbyID4($_id){
	$sql = "SELECT * FROM `cwmember` WHERE uid=".$_id." order by pdt limit 0,1";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据ID获取会员信息
function getMemberbyID22($_id){
	$sql = "SELECT * FROM `bwmember` WHERE id=".$_id." ";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据ID获取会员信息
function getMemberbyID44($_id){
	$sql = "SELECT * FROM `cwmember` WHERE id=".$_id." ";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据ID获取会员信息
function getMemberbyID3($_id){
	$sql = "SELECT * FROM `bwmember` WHERE id=".$_id." ";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据昵称获取会员信息
function getMemberbyNickName($NickName){
	$sql = "SELECT * FROM `member` where nickname='".$NickName."'";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据昵称获取会员信息
function getMemberbyNickName2($NickName){
	$sql = "SELECT * FROM `bwmember` where nickname='".$NickName."'";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
function getMemberbyNickName3($NickName){
	$sql = "SELECT * FROM `cwmember` where nickname='".$NickName."'";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//检查该位置是否有人
function checkFatherMan($FatherID,$TreePlace){
	$sql = "SELECT * FROM `member` WHERE fatherid=".$FatherID." AND treeplace=".$TreePlace."";
	$query = mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}
//获得安置位置的人的信息
function getFatherManbyFidAndTreeplace($FatherID,$TreePlace){
	$sql = "SELECT * FROM `member` WHERE fatherid=".$FatherID." AND treeplace=".$TreePlace."";
	if ($query = mysql_query($sql)){
		return mysql_fetch_array($query);
	}else{
		return "";	
	}
}

//获得B网安置位置的人的信息
function getFatherManbyFidAndTreeplace2($FatherID,$TreePlace){
	$sql = "SELECT * FROM `bwmember` WHERE fatherid=".$FatherID." AND treeplace=".$TreePlace."";
	if ($query = mysql_query($sql)){
		return mysql_fetch_array($query);
	}else{
		return "";	
	}
}
//获得c网安置位置的人的信息
function getFatherManbyFidAndTreeplace3($FatherID,$TreePlace){
	$sql = "SELECT * FROM `cwmember` WHERE fatherid=".$FatherID." AND treeplace=".$TreePlace."";
	if ($query = mysql_query($sql)){
		return mysql_fetch_array($query);
	}else{
		return "";
	}
}
//查询该编号推荐的人的集合
function getMemberListByreid($reid){
	$sql = "SELECT * FROM `member` WHERE reid=".$reid."";
	$query = mysql_query($sql);
	return mysql_fetch_array($query);
}
/*判断id的团队中是否有uid
*return true在团队中,false不在
*/
function checkisppath2($id,$uid){
	$sql = "SELECT * FROM `bwmember` WHERE uid=$id order by pdt limit 0,1";
	$us=getOne($sql);
	$id=$us['id'];
	$re=getMemberbyID3($uid);
	return preg_match(",".$id.",",$re['ppath']);
}
function checkisppath3($id,$uid){
	$sql = "SELECT * FROM `cwmember` WHERE uid=$id order by pdt limit 0,1";
	$us=getOne($sql);
	$id=$us['id'];
	$re=getMemberbyID3($uid);
	return preg_match(",".$id.",",$re['ppath']);
}
function checkisppath($id,$uid){
	$re=getMemberbyID($uid);
	return preg_match(",".$id.",",$re['ppath']);
}
/*判断id的团队中是否有nickname
*return true在团队中,false不在
*/
function checkisrepath($id,$nickname){
	$re=getMemberbyNickName($nickname);
	return preg_match(",".$id.",",$re['repath']);
}

//判断是否有新邮件
function checknewmail($_id){
	$sql = "SELECT * FROM `mail` WHERE isread=0 and sid=".$_id;
	$query = mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;
	}
}

//判断是否有新邮件
function newmailcount($_id){
	$sql = "SELECT * FROM `mail` WHERE isread=0 and sid=".$_id;
	$query = mysql_query($sql);
	return mysql_num_rows($query);
}

/*
*单条数据查询实例
*$table=表名
*$编号
*/
function que_select_cl($talbe,$id){
	$sql="select * from ".$talbe." where id=".$id."";
	if ($query=mysql_query($sql)){
		return mysql_fetch_array($query);
	}
}

/*
*单条数条件据查询实例
*$table=表名
*$条件
*/
function que_select_cl_where($talbe,$where){
	$sql="select * from ".$talbe." ".$where."";
	if ($query=mysql_query($sql)){
		return mysql_fetch_array($query);
	}
}

/*
*插入实例
*$table=表名
*$err=数组
*/
function add_insert_cl($table,$err){     
	$sql = "INSERT INTO ".$table." (";    
	foreach ( $err as $key => $value  ){    
		$sql .= $key.", ";     
	}      
	$sql = substr($sql, 0, strlen($sql)-2) .  ") VALUES (";    
	foreach ( $err as $key => $value  ){    
		$sql .= "'".addslashes($value)."', ";     
	}      
	$sql = substr($sql, 0, strlen($sql)-2) .  ")";           
	@mysql_query($sql) or die (mysql_error());    
}

/*
*修改实例
*$table=表名
*$err=数组
*$id=编号
*/
function edit_update_cl($table,$err,$id){     
	$sql = "UPDATE ".$table." SET ";    
	foreach ( $err as $key => $value  ){
		if(preg_match("/^\d*$/",$key)){
			#过滤数字
		}else{
			$sql .= $key."='".addslashes($value)."', ";	
		}
	}      
	$sql = substr($sql, 0, strlen($sql)-2) .  " WHERE id=".$id;
	@mysql_query($sql) or die (mysql_error());
}

/*根据编号删除表数据
$table表名
$id 编号
*/
function edit_delete_cl($table,$id){
	$sql = "DELETE FROM ".$table." WHERE id=".$id; 
	@mysql_query($sql) or die (mysql_error());
}

function edit_delete_all($table){
	$sql = "DELETE FROM ".$table;
	@mysql_query($sql) or die (mysql_error());
}

function edit_sql($sql){
	@mysql_query($sql) or die (mysql_error());	
}
/*
*@ulevel 等级数字
return 文字级别
*/
function ulevel($ulevel){
	$ul="";
	$ul=que_select_cl('ulevel',$ulevel);
	return $ul;	
}
function zjulevel($zjulevel){
	$zjul="";
	$zjul=que_select_cl('zjulevel',$zjulevel);
	return $zjul;	
}
function bdlevel($bdlevel){
	$bdl="";
	$bdl=que_select_cl('member',$bdlevel);
	return $bdl;	
}


/*分页处理
@ $p当前页数
@ $total总页数
@ $sum条目总数
@ $pagesize每页显示条数
return 分页文字信息
*/
function fenye($p,$pagesize,$sum,$total,$cx){
	#前5页
	$top5="<a href='?page=1".$cx."' style='text-decoration:none' title='到第1页'><<</a>&nbsp;&nbsp;";
	for($i = $p-4; $i < $p; $i++) {
		if($i>=1){
			$top5=$top5."<a href='?page=".$i."".$cx."' style='text-decoration:none' title='到第".$i."页'>".$i."</a>&nbsp;&nbsp;";
		}
	}
	$desc5="";
	for($i = $p+1; $i <= $p+4; $i++) {
		if($i<=$total){
			$desc5=$desc5."<a href='?page=".$i."".$cx."' style='text-decoration:none' title='到第".$i."页'>".$i."</a>&nbsp;&nbsp;";
		}
	}
	$desc5=$desc5."<a href='?page=".$total."".$cx."' style='text-decoration:none' title='到第".$total."页'>>></a>&nbsp;&nbsp;";
	$dianji=$top5.$p."&nbsp;&nbsp;".$desc5;
	$shuchu="每页".$pagesize."条,总共".$sum."条,当前显示第".$p."页,总共".$total."页\n\n";
	if($p > 1) //当前页不是第一页时，输出上一页的链接 
	{ 
		$prev = $p - 1; 
		$shuchu .= "<a href='?page=".$prev."".$cx."' style='text-decoration:none'>上一页</a>\n\n"; 
	}
	if($p < $total) //当前页不是最后一页时，输出下一页的链接 
	{ 
		$next = $p + 1; 
		$shuchu .= "<a href='?page=".$next."".$cx."' style='text-decoration:none'>下一页</a>"; 
	}
	return $dianji.$shuchu;
}


//得到结果集数组
function getAll($sql){
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		$rows[]=$row;
	}
	return $rows;
}

//得到一条记录
function getOne($sql){
	$rs=mysql_query($sql);
	return mysql_fetch_assoc($rs);
}

//得到安置关系链
function ppath($id){
	$us=getMemberbyID($id);
	$ppath=$us['ppath'];
	$len=strlen($ppath);
	$str=substr($ppath,1,$len-2);//$len-16
	$arr=explode(",",$str);
	return $arr;
}
//读取服务中心的地区
function lol($diqu,$bdlevel){
    if($bdlevel==1){
        $sql="select a.area,c.city,p.province from area a left join city c on a.fatherid=c.cityid left join province p on c.fatherid=p.provinceid where a.areaid={$diqu}";
        $rs=getOne($sql);
        return $rs['province'].$rs['city'].$rs['area'];
    }elseif($bdlevel==2){
        $sql="select c.city,p.province from  city c  left join province p on c.fatherid=p.provinceid where c.cityid={$diqu}";
        $rs=getOne($sql);
        return $rs['province'].$rs['city'];
    }
	
}
//会员的地区
function userdiqu($id){
	$sql="select shi,xian from member where id={$id}";
	$rs=getOne($sql);
	if($rs['xian']>0){
		$sql="select a.area,c.city,p.province from area a left join city c on a.fatherid=c.cityid left join province p on c.fatherid=p.provinceid where a.areaid={$rs['xian']}";
		$rs=getOne($sql);
		return $rs['province'].$rs['city'].$rs['area'];
	}elseif($rs['shi']>0){
		$sql="select c.city,p.province from  city c  left join province p on c.fatherid=p.provinceid where c.cityid={$rs['shi']}";
		$rs=getOne($sql);
		return $rs['province'].$rs['city'];
	}
}
//会员推荐第一人必须放置在自己层数最深的区的最下面
function relevel($rename,$fathername){
	$sql="select id,recount from member where nickname='{$rename}'";
	$rs=getOne($sql);
	if($rs['recount']==0){
		$s="select nickname from member where ppath like '%{$rs['id']}%' and ispay>0 order by plevel desc,treeplace  limit 1";

		$r=getOne($s);
		if(!empty($r)){
		    if($r['nickname']==$fathername){
		        return false;
		    }else{
		    	return true;
		    }
		}else{
			return false;
		}
		
	}
	return false;
}

function shen($id){
	$sql="select max(plevel) a from member where ppath like '%{$id}%'";
	
	$rs=getOne($sql);
	return $rs['a'];
}
//累计消费业绩
function comsumptionyeji($id,$money){
    if($id!=1){
		$sql="select reid from member where id={$id}";
		$rs=getOne($sql);
		$path=ppath($id);
		$re=",".$rs['reid'];
		if(!empty($path)){
		    $str=""; 
			foreach($path as $v){
				$str.=",".$v;
			}
		}
    }
	$s="update member set xiaofeiyeji=xiaofeiyeji+{$money} where id in ({$id}{$str}{$re})";
	mysql_query($s);
}



//select的条数
function num($sql){
	$rs=mysql_query($sql);
	return mysql_num_rows($rs);
}
//比较大小区
function big_little($id){
	$sql="select * from member where id={$id}";
	$rs=getOne($sql);
	$little=$rs['area1']>=$rs['area2']?$rs['area2']:$rs['area1'];
	$sql="select fuwuzhongxi from systemparameters where id=1";
	$rs=getOne($sql);
	if($little>=$rs['fuwuzhongxi']){
		return true;
	}
	return false;
}


//得到安置关系链
function repath($id){
    $us=getMemberbyID($id);
    $ppath=$us['repath'];
    $len=strlen($ppath);
    $str=substr($ppath,1,$len-2);//$len-16
    $arr=explode(",",$str);
    return $arr;
}
?>