<?php
include_once("member_class.php");
include_once("bonus_class.php");
class member_class{
	
//激活会员
function jihuomember($id){
		$_bonus_cl=new bonus_class();
		$_ulevel_cl=new ulevel_class();
		
		
		//$this->dagongpaiA($id);
		$sql="select id,userid,usertel,nickname,lsk,dan,ulevel,ispay,reid,pdt from member where id=$id";
		$us=getOne($sql);

		if ($us['ispay']==0){
// 			$sql="select id,dan,isbd from ulevel where id=".$us['ulevel']."";
// 			$ul=getOne($sql);
			
			$us_update['ispay']=1;
			$us_update['pdt']=now();
            edit_update_cl('member',$us_update,$us['id']);
            
        	$sql2="select id,userid,nickname,recount,reyeji from member where id=".$us['reid']."";
			$reman=getOne($sql2);
			
			
			$reman_update['recount']=$reman['recount']+1;
			$reman_update['reyeji']=$reman['reyeji']+$us['lsk'];
			edit_update_cl('member',$reman_update,$reman['id']);
			
			//激活产生订单
			//edit_sql("update `orders1` set isqr=1 where uid=".$us['id']."");
			//edit_sql("update `orders` set isqr=1 where uid=".$us['id']."");
		
		
			
// 				$this->addArea1($us['id'],1,$us['lsk'],$us['plevel']);
			$_systemyeji=new system_class();
			$_systemyeji->yejitongji(1,0,$us['lsk'],0,0,0,0);
 			$_sys=$_systemyeji->system_information(1);
 			$_update_system['yeji']=$_sys['yeji']+$us['lsk'];
 			$_update_system['fanli']=$_sys['fanli']+$us['lsk'];
 			$_systemyeji->system_update($_update_system);

 			$this->addArea($us['id'],$us['lsk']);
            
 			$_bonus_cl->dianbu($us['id']);
 			$_bonus_cl->b2bonus($us['id'],$us['lsk']);
  			$_bonus_cl->cengpeng($us['id']);
  			$_bonus_cl->b4bonus($us['id']);

  			$_bonus_cl->b0bonus();
  			
  			
  			
  			
  			
 			
 			
 			
 			
 	       
 		    
		}
	}
//空单回填
function jihuomember2($id){
		$_bonus_cl=new bonus_class();
		$_ulevel_cl=new ulevel_class();
	
	
		//$this->dagongpaiA($id);
		$sql="select id,userid,nickname,usertel,lsk,dan,ulevel,ispay,reid,pdt from member where id=$id";
		$us=getOne($sql);
	
		if ($us['ispay']==0){
			$sql="select id,dan,isbd from ulevel where id=".$us['ulevel']."";
			$ul=getOne($sql);
			$ul2=getOne("select id,dan,isbd from ulevel where id=2");
				
			$us_update['ispay']=3;
				
			$us_update['pdt']=now();
			if ($us['ulevel']==1){
				$us_update['gwb']=$ul['isbd'];//创业基金
			}elseif ($us['ulevel']==2){
				$us_update['gwb']=$ul['isbd'];//创业基金
				$us_update['num']=1;//分红点
			}elseif($us['ulevel']==3){
				$us_update['gwb']=$ul2['isbd'];//创业基金
				$us_update['zsq']=$ul['isbd'];//报单币
				$us_update['isbd']=2;//服务中心
				$us_update['num']=1;//分红点
			}elseif($us['ulevel']==4){
				$us_update['gwb']=$ul2['isbd'];//创业基金
				$us_update['zsq']=$ul['isbd'];//报单币
				$us_update['isbd']=2;//服务中心
				$us_update['num']=1;//分红点
			}
				
			edit_update_cl('member',$us_update,$us['id']);
			
			//短信接口
			$_system=new system_class();
			$sys=$_system->system_information(1);
			if ($sys['dx']==1){
				$usertel=$us['usertel'];
				$nickname=$us['nickname'];
				 
				$m='www.jngjsc.com';
				$post_data [ 'Uid' ] = "luzong" ;
				$post_data [ 'Key' ] = "33ce365166950cff96d6" ;
				$post_data [ 'smsMob' ] = "$usertel" ;
				$post_data [ 'smsText' ] = "'恭喜成为商城代理{$nickname},登录密码111111,二级密码222222,www.chainjn.com,请尽快修改密码完善资料'" ;
				//$post_data [ 'smsText' ] = "'恭喜您成为代理商'$nickname'登录密码'$y2',二级密码'$y4'" ;
				 
				$url = 'http://utf8.sms.webchinese.cn/?' ;
				$o = " " ;
				foreach ( $post_data as $k => $v )
				{
					$o .= " $k = " . urlencode ( $v ) . " & " ;
				}
				$post_data = substr ( $o , 0 ,- 1 ) ;
				$ch = curl_init () ;
				curl_setopt ( $ch , CURLOPT_POST , 1 ) ;
				curl_setopt ( $ch , CURLOPT_HEADER , 0 ) ;
				curl_setopt ( $ch , CURLOPT_URL , $url ) ;
				curl_setopt ( $ch , CURLOPT_POSTFIELDS , $post_data ) ;
				$result = curl_exec ( $ch ) ;
			}
	
			$sql2="select id,userid,nickname,recount,reyeji from member where id=".$us['reid']."";
			$reman=getOne($sql2);
				
				
			$reman_update['recount']=$reman['recount']+1;
			$reman_update['reyeji']=$reman['reyeji']+$us['dan'];
			edit_update_cl('member',$reman_update,$reman['id']);
				
			//激活产生订单
			edit_sql("update `orders1` set isqr=1 where uid=".$us['id']."");
			edit_sql("update `orders` set isqr=1 where uid=".$us['id']."");
	
	
			$this->addArea($us['id'],$us['dan']);
			// 				$this->addArea1($us['id'],1,$us['lsk'],$us['plevel']);
			$_systemyeji=new system_class();
			$_systemyeji->yejitongji(1,0,$us['dan'],0,0,0,0);
			$_sys=$_systemyeji->system_information(1);
			$_update_system['yeji']=$_sys['yeji']+$us['dan'];
			$_update_system['fanli']=$_sys['fanli']+$us['dan'];
			$_systemyeji->system_update($_update_system);
	
// 			$aa=getOne("select id,date from member where id=1");
// 			$date=date("Y-m");
// 			if ($aa['date']!=$date) {
// 				edit_sql("update `member` set date='{$date}'  where id=1");
// 				edit_sql("update `member` set wlf=0 ");
// 			}
	
			//创业奖
			$_bonus_cl->b4bonus($us['id']);
			$_bonus_cl->cengpeng($us['id']);
			$_bonus_cl->b2bonus($us['id'],$us['dan']);
			$_bonus_cl->dianbu($us['id']);
			$_bonus_cl->b0bonus();
			 
		}
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
//检查会员编号是否存在
function checkNickName($NickName){
	$sql = "SELECT * FROM `member` WHERE nickname='".$NickName."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//检查会员编号是否存在并激活
function checkNickNameispay($NickName){
	$sql = "SELECT * FROM `member` WHERE nickname='".$NickName."' and isPay>0";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//会员登录验证
function checkLogin($NickName,$PassWord){
	$sql="select * from `Member` where nickname='".$NickName."' AND password1='".$PassWord."'";
	$query=mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return true;
	}else{
		return false;	
	}
}
//会员二级密码验证
function checkPassword2($NickName,$PassWord2){
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
	$sql = "SELECT * FROM `member` WHERE id=".$_id;
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据昵称获取会员信息
function getMemberbyUserId($UserId){
	$sql = "SELECT * FROM `member` where userid='".$UserId."'";
	$query=mysql_query($sql);
	return mysql_fetch_array($query);
}
//根据昵称获取会员信息
function getMemberbyNickName($NickName){
	$sql = "SELECT * FROM `member` where nickname='".$NickName."'";
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
	$query = mysql_query($sql);
	return mysql_fetch_array($query);
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
function checkisppath($id,$uid){
	$re=getMemberbyID($uid);
	return ereg(",".$id.",",$re['ppath']);
}
/*判断id的团队中是否有nickname
*return true在团队中,false不在
*/
function checkisrepath($id,$nickname){
	$re=getMemberbyNickName($nickname);
	return ereg(",".$id.",",$re['repath']);
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

function checkfman($_id){
	$sql = "SELECT * FROM `member` WHERE fatherid=".$_id."";
	$query = mysql_query($sql);
	if(mysql_num_rows($query) >= 1){
		return false;
	}else{
		return true;
	}	
}

function getMaxPid(){
	$sql="select id from `member` where pcount<10 and ispay>0 order by pdt,id limit 0,1";
	$query = mysql_query($sql);
	$pid=mysql_fetch_array($query);
	return $pid[0];
}

//写入激活记录
function addbdrecord($us,$bd,$lsk){
	$bdrecord=NULL;
	$bdrecord['uid']=$us['id'];
	$bdrecord['nickname']=$us['nickname'];
	$bdrecord['lsk']=$lsk;
	$bdrecord['bdid']=$bd['id'];
	$bdrecord['bdname']=$us['nickname'];
	$bdrecord['bddate']=now();
	add_insert_cl('bdrecord',$bdrecord);
}
//bwmember顶层会员
function addbwangB($id){
	$_bonus_cl=new bonus_class();
	$sql="select id,fathername,ppath,isb,pdt from `bwmember` where id=".$id."  ";
	$row=getOne($sql);
	$member_update['fathername']="顶层会员";
	$member_update['ppath']=",";
	$member_update['plevel']=0;
	$member_update['isb']=1;
	$member_update['pdt']=now();
	edit_update_cl("bwmember",$member_update,$row['id']);
	
	$_bonus_cl->b12bonus($row['id']);
	$_bonus_cl->yjxfB();
	 
	
}
//bwmember顶层会员
function addbwangchzh($id){
	$_bonus_cl=new bonus_class();
	$sql="select id,fathername,ppath,isb,pdt from `bwmember` where id=".$id."  ";
	$row=getOne($sql);
	$member_update['fathername']="顶层会员";
	$member_update['ppath']=",";
	$member_update['plevel']=0;
	$member_update['isb']=1;
	$member_update['pdt']=now();
	edit_update_cl("bwmember",$member_update,$row['id']);

	


}
//B网排点
function dagongpaiB($uid){
	$_bonus_cl=new bonus_class();

	$sql="select * from `bwmember` where  (chl=0 or chr=0 or chz=0 or chx=0 or chy=0) and isb=1 order by plevel,pdt  limit 0,1";

    $row=getOne($sql);
 
	    	if($row['chl']==0){
				$treeplace=1;
				edit_sql("update `bwmember` set chl=".$uid." where id=".$row['id']."");

			}elseif($row['chr']==0){
				$treeplace=2;
				edit_sql("update `bwmember` set chr=".$uid." where id=".$row['id']."");
				 
			}elseif($row['chz']==0){
				$treeplace=3;
				edit_sql("update `bwmember` set chz=".$uid." where id=".$row['id']."");
				 
			}elseif($row['chx']==0){
				$treeplace=4;
				edit_sql("update `bwmember` set chx=".$uid." where id=".$row['id']."");
				 
			}elseif($row['chy']==0){
				$treeplace=5;
				edit_sql("update `bwmember` set chy=".$uid." where id=".$row['id']."");
				 
			}
			$member_update['isb']=1;
			$member_update['pdt']=now();
			$member_update['treeplace']=$treeplace;

			$member_update['fatherid']=$row['id'];
			$member_update['fathername']=$row['nickname'];
			$member_update['plevel']=$row['plevel']+1;
			$member_update['ppath']="".$row['ppath'].$row['id'].",";
			edit_update_cl("bwmember",$member_update,$uid);

			

			$_bonus_cl->b12bonus($uid);
			$_bonus_cl->yjxfB();


			 
	
}
//充值B网排点
function dagongpaichzh($uid){
	$_bonus_cl=new bonus_class();

	$sql="select * from `bwmember` where  (chl=0 or chr=0 or chz=0 or chx=0 or chy=0) and isb=1 order by plevel,pdt  limit 0,1";

	$row=getOne($sql);

	if($row['chl']==0){
		$treeplace=1;
		edit_sql("update `bwmember` set chl=".$uid." where id=".$row['id']."");

	}elseif($row['chr']==0){
		$treeplace=2;
		edit_sql("update `bwmember` set chr=".$uid." where id=".$row['id']."");
			
	}elseif($row['chz']==0){
		$treeplace=3;
		edit_sql("update `bwmember` set chz=".$uid." where id=".$row['id']."");
			
	}elseif($row['chx']==0){
		$treeplace=4;
		edit_sql("update `bwmember` set chx=".$uid." where id=".$row['id']."");
			
	}elseif($row['chy']==0){
		$treeplace=5;
		edit_sql("update `bwmember` set chy=".$uid." where id=".$row['id']."");
			
	}
	$member_update['isb']=1;
	$member_update['pdt']=now();
	$member_update['treeplace']=$treeplace;

	$member_update['fatherid']=$row['id'];
	$member_update['fathername']=$row['nickname'];
	$member_update['plevel']=$row['plevel']+1;
	$member_update['ppath']="".$row['ppath'].$row['id'].",";
	edit_update_cl("bwmember",$member_update,$uid);

		

	$_bonus_cl->b12bonus($uid);





}
//C_B网排点
function dagongpaiBC($uid){
	$_bonus_cl=new bonus_class();

	$sql="select * from `bwmember` where  (chl=0 or chr=0 or chz=0 or chx=0 or chy=0) and isb=1 order by plevel,pdt  limit 0,1";

	$row=getOne($sql);

	if($row['chl']==0){
		$treeplace=1;
		edit_sql("update `bwmember` set chl=".$uid." where id=".$row['id']."");

	}elseif($row['chr']==0){
		$treeplace=2;
		edit_sql("update `bwmember` set chr=".$uid." where id=".$row['id']."");
			
	}elseif($row['chz']==0){
		$treeplace=3;
		edit_sql("update `bwmember` set chz=".$uid." where id=".$row['id']."");
			
	}elseif($row['chx']==0){
		$treeplace=4;
		edit_sql("update `bwmember` set chx=".$uid." where id=".$row['id']."");
			
	}elseif($row['chy']==0){
		$treeplace=5;
		edit_sql("update `bwmember` set chy=".$uid." where id=".$row['id']."");
			
	}
	$member_update['isb']=1;
	$member_update['pdt']=now();
	$member_update['treeplace']=$treeplace;

	$member_update['fatherid']=$row['id'];
	$member_update['fathername']=$row['nickname'];
	$member_update['plevel']=$row['plevel']+1;
	$member_update['ppath']="".$row['ppath'].$row['id'].",";
	edit_update_cl("bwmember",$member_update,$uid);

	$sql0="select id,uid,nickname,fatherid from `bwmember` where  id=$uid";
	$us=getOne($sql0);

	$_bonus_cl->b12bonus($uid);
	$_bonus_cl->yjxfBC();




}
//cwmember顶层会员
function addbwangC($id){
	$_bonus_cl=new bonus_class();
	$sql="select id,fathername,ppath,isb,pdt from `cwmember` where id=".$id."  ";
	$row=getOne($sql);
	$member_update['fathername']="顶层会员";
	$member_update['ppath']=",";
	$member_update['plevel']=0;
	$member_update['isb']=1;
	$member_update['pdt']=now();
	edit_update_cl("cwmember",$member_update,$row['id']);

	$_bonus_cl->b13bonus($row['id']);
	$_bonus_cl->yjxfc();


}
//C网排点
function dagongpaiC($uid){
	$_bonus_cl=new bonus_class();

	$sql="select * from `cwmember` where  (chl=0 or chr=0 or chz=0 or chx=0 or chy=0) and isb=1 order by plevel,pdt  limit 0,1";

	$row=getOne($sql);

	if($row['chl']==0){
		$treeplace=1;
		edit_sql("update `cwmember` set chl=".$uid." where id=".$row['id']."");

	}elseif($row['chr']==0){
		$treeplace=2;
		edit_sql("update `cwmember` set chr=".$uid." where id=".$row['id']."");
			
	}elseif($row['chz']==0){
		$treeplace=3;
		edit_sql("update `cwmember` set chz=".$uid." where id=".$row['id']."");
			
	}elseif($row['chx']==0){
		$treeplace=4;
		edit_sql("update `cwmember` set chx=".$uid." where id=".$row['id']."");
			
	}elseif($row['chy']==0){
		$treeplace=5;
		edit_sql("update `cwmember` set chy=".$uid." where id=".$row['id']."");
			
	}
	$member_update['isb']=1;
	$member_update['pdt']=now();
	$member_update['treeplace']=$treeplace;

	$member_update['fatherid']=$row['id'];
	$member_update['fathername']=$row['nickname'];
	$member_update['plevel']=$row['plevel']+1;
	$member_update['ppath']="".$row['ppath'].$row['id'].",";
	edit_update_cl("cwmember",$member_update,$uid);

	$sql0="select id,uid,nickname,fatherid from `cwmember` where  id=$uid";
	$us=getOne($sql0);

	$_bonus_cl->b13bonus($uid);
	$_bonus_cl->yjxfc();




}
//A网排点
function dagongpaiA($uid){
	$_bonus_cl=new bonus_class();

	$sql="select * from `member` where  (chl=0 or chr=0 or chz=0 or chx=0 or chy=0) and isb=1 order by plevel,pdt  limit 0,1";

	$row=getOne($sql);

	if($row['chl']==0){
		$treeplace=1;
		edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");

	}elseif($row['chr']==0){
		$treeplace=2;
		edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");
			
	}elseif($row['chz']==0){
		$treeplace=3;
		edit_sql("update `member` set chz=".$uid." where id=".$row['id']."");
			
	}elseif($row['chx']==0){
		$treeplace=4;
		edit_sql("update `member` set chx=".$uid." where id=".$row['id']."");
			
	}elseif($row['chy']==0){
		$treeplace=5;
		edit_sql("update `member` set chy=".$uid." where id=".$row['id']."");
			
	}
	$member_update['isb']=1;
	$member_update['pdt']=now();
	$member_update['treeplace']=$treeplace;
	
	$member_update['fatherid']=$row['id'];
	$member_update['fathername']=$row['nickname'];
	$member_update['plevel']=$row['plevel']+1;
	$member_update['ppath']="".$row['ppath'].$row['id'].",";
	edit_update_cl("member",$member_update,$uid);

}
function addbwang(){
	$_bonus_cl=new bonus_class();
	$sql="select * from `member` where maxmey>=26000 and isb=0";
	if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$sql2="select * from `member` where (chl2=0 or chr2=0) and isb=1 order by plevel2,pdt2 limit 0,1";
			if($query2 = mysql_query($sql2)){
				while ($row2=mysql_fetch_array($query2)){
					if($row2['chl2']==0){
						$treeplace2=1;
						edit_sql("update `member` set chl2=".$row['id']." where id=".$row2['id']."");
					}elseif($row2['chr2']==0){
						$treeplace2=2;
						edit_sql("update `member` set chr2=".$row['id']." where id=".$row2['id']."");	
					}
					$member_update['treeplace2']=$treeplace2;
					$member_update['fatherid2']=$row2['id'];
					$member_update['fathername2']=$row2['nickname'];
					$member_update['plevel2']=$row2['plevel2']+1;
					$member_update['ppath2']="".$row2['ppath2'].$row2['id'].",";
//					$member_update['cfxf']=$row['cfxf']-1000;
					$member_update['isb']=1;
					$member_update['pdt2']=now();
					edit_update_cl("member",$member_update,$row['id']);
					$_bonus_cl->b4bonus($row['id'], $row['nickname'], $row['lsk']);
				}
			}
		}
	}
}

function dagongpai11($uid){
	$sql="select * from `member` where (chl=0 or chr=0) and ispay>0 order by plevel,pdt limit 0,1";
	if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$member_update=NULL;
			if($row['chl']==0){
				$treeplace=1;
				edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
			}elseif($row['chr']==0){
				$treeplace=2;
				edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
			}
			$member_update['treeplace']=$treeplace;
			$member_update['fatherid']=$row['id'];
			$member_update['fathername']=$row['nickname'];
			$member_update['plevel']=$row['plevel']+1;
			$member_update['ppath']="".$row['ppath'].$row['id'].",";
			edit_update_cl("member",$member_update,$uid);
		}
	}
}

function xiaogongpai($uid,$reid){
	$sql="select * from `member` where (ppath like '%,".$reid.",%' or id=".$reid.") and (chl=0 or chr=0) and ispay>0 order by plevel,pdt limit 0,1";
	if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$member_update=NULL;
			if($row['chl']==0){
				$treeplace=1;
				edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
			}elseif($row['chr']==0){
				$treeplace=2;
				edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
			}
			$member_update['treeplace']=$treeplace;
			$member_update['fatherid']=$row['id'];
			$member_update['fathername']=$row['nickname'];
			$member_update['plevel']=$row['plevel']+1;
			$member_update['ppath']="".$row['ppath'].$row['id'].",";
			edit_update_cl("member",$member_update,$uid);
		}
	}
}

function paixiaoqu($uid,$reid){
	$reus=getMemberbyID($reid);
	if ($reus['ispay']==1){
		if($reus['area1']>$reus['area2']){
			if (checkFatherMan($reid,2)){
				$rus=getFatherManbyFidAndTreeplace($reid,2);
				$sql="select * from `member` where (ppath like '%,".$rus['id'].",%' or id=".$rus['id'].") and (chl=0 or chr=0) and ispay>0 order by plevel desc limit 0,1";
				if($query = mysql_query($sql)){
					while ($row=mysql_fetch_array($query)){
						$member_update=NULL;
						if($row['chl']==0){
							$treeplace=1;
							edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
						}elseif($row['chr']==0){
							$treeplace=2;
							edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
						}
						$member_update['treeplace']=$treeplace;
						$member_update['fatherid']=$row['id'];
						$member_update['fathername']=$row['nickname'];
						$member_update['plevel']=$row['plevel']+1;
						$member_update['ppath']="".$row['ppath'].$row['id'].",";
						edit_update_cl("member",$member_update,$uid);
					}
				}
			}else{
				$member_update['treeplace']=2;
				$member_update['fatherid']=$reus['id'];
				$member_update['fathername']=$reus['nickname'];
				$member_update['plevel']=$reus['plevel']+1;
				$member_update['ppath']="".$reus['ppath'].$reus['id'].",";
				edit_update_cl("member",$member_update,$uid);
			}
		}else{
			if (checkFatherMan($reid,1)){
				$lus=getFatherManbyFidAndTreeplace($reid,1);
				$sql="select * from `member` where (ppath like '%,".$lus['id'].",%' or id=".$lus['id'].") and (chl=0 or chr=0) and ispay>0 order by plevel desc limit 0,1";
				if($query = mysql_query($sql)){
					while ($row=mysql_fetch_array($query)){
						$member_update=NULL;
						if($row['chl']==0){
							$treeplace=1;
							edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
						}elseif($row['chr']==0){
							$treeplace=2;
							edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
						}
						$member_update['treeplace']=$treeplace;
						$member_update['fatherid']=$row['id'];
						$member_update['fathername']=$row['nickname'];
						$member_update['plevel']=$row['plevel']+1;
						$member_update['ppath']="".$row['ppath'].$row['id'].",";
						edit_update_cl("member",$member_update,$uid);
					}
				}
			}else{
				$member_update['treeplace']=1;
				$member_update['fatherid']=$reus['id'];
				$member_update['fathername']=$reus['nickname'];
				$member_update['plevel']=$reus['plevel']+1;
				$member_update['ppath']="".$reus['ppath'].$reus['id'].",";
				edit_update_cl("member",$member_update,$uid);
			}	
		}
	}else{
		$sql="select * from `member` where id in(0".$reus['repath']."0) and ispay=1 order by relevel desc limit 0,1";
		if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
				$reus=NULL;
				$reus=$row;		
			}
		}
		if($reus['area1']>$reus['area2']){
			if (checkFatherMan($reid,2)){
				$rus=getFatherManbyFidAndTreeplace($reid,2);
				$sql="select * from `member` where (ppath like '%,".$rus['id'].",%' or id=".$rus['id'].") and (chl=0 or chr=0) and ispay>0 order by plevel desc limit 0,1";
				if($query = mysql_query($sql)){
					while ($row=mysql_fetch_array($query)){
						$member_update=NULL;
						if($row['chl']==0){
							$treeplace=1;
							edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
						}elseif($row['chr']==0){
							$treeplace=2;
							edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
						}
						$member_update['treeplace']=$treeplace;
						$member_update['fatherid']=$row['id'];
						$member_update['fathername']=$row['nickname'];
						$member_update['plevel']=$row['plevel']+1;
						$member_update['ppath']="".$row['ppath'].$row['id'].",";
						edit_update_cl("member",$member_update,$uid);
					}
				}
			}else{
				$member_update['treeplace']=2;
				$member_update['fatherid']=$reus['id'];
				$member_update['fathername']=$reus['nickname'];
				$member_update['plevel']=$reus['plevel']+1;
				$member_update['ppath']="".$reus['ppath'].$reus['id'].",";
				edit_update_cl("member",$member_update,$uid);
			}
		}else{
			if (checkFatherMan($reid,1)){
				$lus=getFatherManbyFidAndTreeplace($reid,1);
				$sql="select * from `member` where (ppath like '%,".$lus['id'].",%' or id=".$lus['id'].") and (chl=0 or chr=0) and ispay>0 order by plevel desc limit 0,1";
				if($query = mysql_query($sql)){
					while ($row=mysql_fetch_array($query)){
						$member_update=NULL;
						if($row['chl']==0){
							$treeplace=1;
							edit_sql("update `member` set chl=".$uid." where id=".$row['id']."");
						}elseif($row['chr']==0){
							$treeplace=2;
							edit_sql("update `member` set chr=".$uid." where id=".$row['id']."");	
						}
						$member_update['treeplace']=$treeplace;
						$member_update['fatherid']=$row['id'];
						$member_update['fathername']=$row['nickname'];
						$member_update['plevel']=$row['plevel']+1;
						$member_update['ppath']="".$row['ppath'].$row['id'].",";
						edit_update_cl("member",$member_update,$uid);
					}
				}
			}else{
				$member_update['treeplace']=1;
				$member_update['fatherid']=$reus['id'];
				$member_update['fathername']=$reus['nickname'];
				$member_update['plevel']=$reus['plevel']+1;
				$member_update['ppath']="".$reus['ppath'].$reus['id'].",";
				edit_update_cl("member",$member_update,$uid);
			}	
		}
	}
}



//顶层会员
function dingcengmember($id){
	$us=getMemberbyID($id);
	$us_update['ispay']=1;
	$us_update['pdt']=now();
	$us_update['fatherid']=0;
	$us_update['fathername']="顶层会员";
	$us_update['plevel']=0;
	$us_update['ppath']=",";
	$us_update['treeplace']=1;
	$pid=$this->getMaxPid();
	$us_update['pid']=$pid;
	edit_sql("update `member` set pcount=pcount+1 where id=".$pid."");
	$reman=getMemberbyID($us['reid']);
	$reman_update['recount']=$reman['recount']+1;
	$reman_update['reyeji']=$reman['reyeji']+$us['dan'];
	edit_update_cl('member',$us_update,$us['id']);
	edit_update_cl('member',$reman_update,$us['reid']);
	$_systemyeji=new system_class();
	$_systemyeji->yejitongji(1,$us['dan'],$us['lsk'],0,0,0,0);
}

//空单会员
function kongdanmember($id){
	$us=getMemberbyID($id);
	$us_update['ispay']=2;
	$us_update['pdt']=now();
	//$pid=$this->getMaxPid();
	//$us_update['pid']=$pid;
	//edit_sql("update `member` set pcount=pcount+1 where id=".$pid."");
	$reman=getMemberbyID($us['reid']);
	$reman_update['recount']=$reman['recount']+1;
	edit_update_cl('member',$us_update,$us['id']);
	edit_update_cl('member',$reman_update,$us['reid']);
	//$this->addArea($us['id'],$us['treeplace'],$us['dan']);
	$_systemyeji=new system_class();
	$_systemyeji->yejitongji(1,0,0,0,0,0,0);
}
//空单回填
function kongdanmember2($id){
	$us=getMemberbyID($id);
	$us_update['ispay']=3;
	$us_update['pdt']=now();
	//$pid=$this->getMaxPid();
	//$us_update['pid']=$pid;
	//edit_sql("update `member` set pcount=pcount+1 where id=".$pid."");
	$reman=getMemberbyID($us['reid']);
	$reman_update['recount']=$reman['recount']+1;
	edit_update_cl('member',$us_update,$us['id']);
	edit_update_cl('member',$reman_update,$us['reid']);
	//$this->addArea($us['id'],$us['treeplace'],$us['dan']);
	$_systemyeji=new system_class();
	$_systemyeji->yejitongji(1,0,0,0,0,0,0);
}
/*
*修改推荐人
*/
function update_reman($_upreman){
	$upreman=getMemberbyNickName($_upreman);
	$sql="select * from `member` where rname='".$_upreman."'";
	if($query = mysql_query($sql)){
		while($row=mysql_fetch_array($query)){
			echo $row['nickname'];
			$up_member['reid']=$upreman['id'];
			$up_member['rname']=$upreman['nickname'];
			$up_member['repath']=$upreman['repath'].$upreman['id'].",";
			$up_member['relevel']=$upreman['relevel']+1;
			edit_update_cl('member',$up_member,$row['id']);
			$this->update_reman($row['nickname']);
		}
	}
}

/*
给上级新增业绩
* $id给上级新增业绩的会员
* $treeplace 区域
* $dan 业绩
*/
function addArea($id,$dan){
	$sql="select id,userid,treeplace,fatherid,plevel from member where id=$id";
	$us=getOne($sql);
	$fatherid=$us['fatherid'];
	$treeplace=$us['treeplace'];
	if($fatherid!=0){
		for($i=1;$i;$i++){
			$fman_update=null;
			$sql2="select id,userid,treeplace,fatherid,area1,yarea1,narea1,area2,yarea2,narea2,area3,narea3,yarea3,zuo,you,area4,area5 from member where id=".$fatherid."";
			
			$fman=getOne($sql2);
			switch($treeplace){
				 
				case 1:
					$fman_update['area1']=$fman['area1']+$dan;
					$fman_update['area4']=$fman['area4']+$dan;
					$fman_update['yarea1']=$fman['yarea1']+$dan;
					$fman_update['narea1']=$fman['narea1']+1;
					break;
				case 2:
					$fman_update['area2']=$fman['area2']+$dan;
					$fman_update['area5']=$fman['area5']+$dan;
					$fman_update['yarea2']=$fman['yarea2']+$dan;
					$fman_update['narea2']=$fman['narea2']+1;
					break;
				case 3:
					$fman_update['area3']=$fman['area3']+$dan;
					$fman_update['yarea3']=$fman['yarea3']+$dan;
					$fman_update['narea3']=$fman['narea3']+1;
					break;


			}
			edit_update_cl('member',$fman_update,$fman['id']);
			
			if ($fman['fatherid']!=0){
				$fatherid=$fman['fatherid'];
				$treeplace=$fman['treeplace'];
			}else {
				break;
			}
				
		}
	}

}
function addAreafx($id,$dan){
	$sql="select id,userid,treeplace,fatherid,plevel from member where id=$id";
	$us=getOne($sql);
	$fatherid=$us['fatherid'];
	$treeplace=$us['treeplace'];
	if($fatherid!=0){
		for($i=1;$i;$i++){
			$fman_update=null;
			$sql2="select id,userid,treeplace,fatherid,area1,yarea1,narea1,area2,yarea2,narea2,area3,narea3,yarea3,zuo,you,area4,area5 from member where id=".$fatherid."";

			$fman=getOne($sql2);


			switch($treeplace){
					
				case 1:
					$fman_update['area1']=$fman['area1']+$dan;
					$fman_update['area4']=$fman['area4']+$dan;
					$fman_update['yarea1']=$fman['yarea1']+$dan;
					//$fman_update['narea1']=$fman['narea1']+1;
					break;
				case 2:
					$fman_update['area2']=$fman['area2']+$dan;
					$fman_update['area5']=$fman['area5']+$dan;
					$fman_update['yarea2']=$fman['yarea2']+$dan;
					//$fman_update['narea2']=$fman['narea2']+1;
					break;
				case 3:
					$fman_update['area3']=$fman['area3']+$dan;
					$fman_update['yarea3']=$fman['yarea3']+$dan;
					//$fman_update['narea3']=$fman['narea3']+1;
					break;


			}
			edit_update_cl('member',$fman_update,$fman['id']);





			if ($fman['fatherid']!=0){

				$fatherid=$fman['fatherid'];
				$treeplace=$fman['treeplace'];
					

			}else {
				break;
			}

		}
	}

}
function addArea1($id,$treeplace,$dan,$plevel){
	

	if ($us=getMemberbyID($id)){
		if ($fman=getMemberbyID($us['fatherid']) ){
			if($plevel-$fman['plevel']>=12){
			switch($us['treeplace']){
				case 0:
					$fman_update['yarea1']=$fman['yarea1']+1; #结余业绩
					break; 
				case 1:
					$fman_update['yarea1']=$fman['yarea1']+1; #结余业绩
					break;
				case 2:
					$fman_update['yarea2']=$fman['yarea2']+1; #结余业绩
					break;
				case 3:
					$fman_update['yarea3']=$fman['yarea3']+1; #结余业绩
					break;
				
			}
			edit_update_cl('member',$fman_update,$fman['id']);
		}
			
			$this->addArea1($fman['id'],$fman['treeplace'],$dan,$plevel);
			
		}
	}
}
}
?>