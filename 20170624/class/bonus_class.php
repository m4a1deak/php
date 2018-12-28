<?php
include_once("../function.php");
include_once("member_class.php");
include_once("ulevel_class.php");
include_once("system_class.php");
class bonus_class{
//$b1  回本奖
//$b2  见点
//$b3  层奖
//$b4  量奖
//$b5  
//$b6  
//$b7  报单费
//$b8  重复消费
//$b9  税费
//$b10 慈善基金
//$b11 提现手续费

	
//福利奖
function  fh1($bl){
	        $_ulevel_cl=new ulevel_class();

	        //等级1人数1积分点
			$sql="select count(*) from member where ulevel=1 and ispay>0 ";
			$result = mysql_query($sql);
			$array1= mysql_fetch_assoc($result);
	
			//等级2人数3积分点
			$sql="select count(*) from member where ulevel=2 and ispay>0 ";
			$result = mysql_query($sql);
			$array2= mysql_fetch_assoc($result);
			
			//等级3人数9积分点
			$sql="select count(*) from member where ulevel=3 and ispay>0 ";
			$result = mysql_query($sql);
			$array3= mysql_fetch_assoc($result);
			
			//总积分点
			$num=$array1['count(*)']*1+$array2['count(*)']*3+$array3['count(*)']*9;

			$b=$bl/$num;//新增业绩的比例加权平分
			$b=round($b, 2);
			$sql="select id,nickname,lsk,ulevel,meys from member where ispay>0 ";
			$arr=getall($sql);
		
			foreach ($arr as $key =>$row){
				$j=0;$b1=0;
				if ($row['ulevel']==1) {
					$j=$b;
				}elseif ($row['ulevel']==2){
					$j=$b*3;
				}elseif ($row['ulevel']==3){
					$j=$b*9;
				}
				$sql2="select id,yl7,yl8 from ulevel where ulevel={$row['ulevel']}";
				$fd=getOne($sql2);
				
				$mey=$fd['yl7']-$row['meys'];
				if ($mey>0) {
				   if($mey>=$j){$b1=$j;}else{$b1=$mey;}
				}else {
					$b1=0;
				}
				
				
				if ($b1>0) {
					edit_sql("update `member` set b1=b1+$b1,meys=meys+$b1 where id=".$row['id']."");
					$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",1,$b1,"回本奖");
				}
		
		
			}
	edit_sql("update `systemparameters` set fanli=0 where id=1 ");

}
//见点奖
function b2bonus($id,$lsk){
	$_ulevel_cl=new ulevel_class();
	$sql="SELECT id,nickname,reid,fatherid,lsk,ulevel FROM member where id=$id";
	$us = getOne($sql);
	$_iul2=$_ulevel_cl->getulevelbyulevel(3);
	$dai=$_iul2['yl1'];//见点层
	$fatherid=$us['fatherid'];
	for($i=1;$i<=$dai;$i++){
		$b2=0;$j=0;
		$sql="SELECT id,nickname,ulevel,reid,recount,fatherid,meys FROM member where id=".$fatherid."";
		$uss = getOne($sql);
		$_iul=$_ulevel_cl->getulevelbyulevel($uss['ulevel']);
		$ceng=$_iul['yl1'];//见点层
		if ($i<=$ceng){
			$j=$_iul['yl2']*$lsk/100;
			$mey=$_iul['yl7']-$uss['meys'];
			if ($mey>0) {
			   if($mey>=$j){$b2=$j;}else{$b2=$mey;}
			}else {
				$b2=0;
			}
			if ($b2>0){
				edit_sql("update `member` set b2=b2+'$b2',meys=meys+$b2 where id=".$uss['id']."");
				$this->bonus_laiyuan($uss['id'],$uss['nickname'],$id,$us['nickname'],2,$b2,$i."见点奖");
					
			}
		}

		if ($uss['fatherid']!=0) {
			$fatherid=$uss['fatherid'];
		}else{
			break;
		}

	}

}
//层碰：
function cengpeng($id){
	$me=getOne("select id,nickname,lsk,dan,ulevel,plevel,ispay,ppath from member where id=$id");
	//		var_dump($me[2]) ;
	$sql="select id,nickname,lsk,plevel,ispay,ppath from member where plevel={$me['plevel']}  and ispay=1 and id<>{$me['id']} order by pdt";
	$row=getAll($sql);//得到激活会员同一层所有的会员
	$con=count($row);//人数
	$path=ppath($me['id']);
	for($z=0;$z<$con;$z++){//从第一个会员开始遍历所有会员
		//拆分b的ppath
		$arr2=ppath($row[$z]['id']);//第一个会员的关系链
		$num=count($arr2);//关系链里的人数
		$num-=1;
		for($i=$num;$i>=0;$i--){//从两个会员关系链的最下层开始
			if($path[$i]==$arr2[$i]){//是否是共同接点人
				//$us=getMemberbyID($arr2[$i]);
				$j=0;$b3=0;
				$us=getOne("select id,nickname,lsk,ulevel,plevel,ispay,zb1,meys2 from member where id=".$arr2[$i]."");
				//找到激活会员的共同接点人所在层的激活时间顺序
					
				if($us['zb1']<$me['plevel']){
					$pl=$me['plevel']-$us['plevel'];
					
					$sql2="select id,yl3,yl4,yl7,yl8 from ulevel where ulevel={$us['ulevel']}";
					$rs2=getOne($sql2);
					$lsk=$me['lsk']>=$row[$z]['lsk']?$row[$z]['lsk']:$me['lsk'];
					//$lsk=$row[$z]['lsk']+$me['lsk'];
					if ($pl%2>0) {//奇数
						$j=$lsk*$rs2['yl3']/100;
					}else {//偶数
						$j=$lsk*$rs2['yl4']/100;
					}
					
					$mey=$rs2['yl8']-$us['meys2'];
					if ($mey>0) {
					   if($mey>=$j){$b3=$j;}else{$b3=$mey;}
					}else {
						$b3=0;
					}
						
					//$m = $this->pdsx($us['id'],$m);  //封顶
					//							if($me[$i]!=""){
					
					if($b3>0){
							
						edit_sql("update `member` set b3=b3+{$b3},zb1={$me['plevel']},meys2=meys2+$b3 where id=".$us['id']."");
						$this->bonus_laiyuan($us['id'],$us['nickname'],"-","{$pl}层:".$me['nickname']."&".$row[$z]['nickname'],3,$b3,"层奖");
						break;
					}else {
						break;
					}
					//							}

				}else{
					break;
				}
			}
		}
	}
}
//平衡奖
function b4bonus(){

	$sql="SELECT id,nickname,lsk,yarea1,yarea2,ulevel,reid,meys2,b3 FROM member where yarea1>0 and yarea2>0 ";
	$arr=getAll($sql);
	foreach ($arr as $key => $row){

		$b=0;$j=0;
		$b2=0;
		$y1=$row['yarea1'];
		$y2=$row['yarea2'];
		$dan=0;
		if($y1>=$y2){
			$dan=$y2;
			$y1=$y1-$y2;
			$y2=0;
		}else{
			$dan=$y1;
			$y2=$y2-$y1;
			$y1=0;
		}
			
		if ($dan>0){
			$_iul=getOne("select id,lsk,yl5,yl6,yl8 from ulevel where id=".$row['ulevel']."");
				
			edit_sql("update `member` set yarea1=$y1,yarea2=$y2 where id=".$row['id']."");
			
			$b=$_iul['yl5']*$dan/100;


			$riQi = date ( "Y-m-d" );
			$bonus = getdaybonus($row['id'],$riQi);
				
			$mey0=$_iul['yl6']-$bonus['b4'];
			if ($mey0>0) {
			    if($mey0>=$b){$j=$b;}else{$j=$mey0;}
			}else {
				$j=0;
			}
			
			if ($j>0) {
				$mey=$_iul['yl8']-$row['meys2']-$row['b3'];
				if ($mey>0) {
					if($mey>=$j){$b4=$j;}else{$b4=$mey;}
				}else {
					$b4=0;
				}	
				
			}
			if($b>0){
				if($b!=$b4){
				
					$k=$b-$b4;
					$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",4,$b4,"平衡奖产生".$b."封顶".$k);

				}
				if ($b4>0) {
					edit_sql("update `member` set b4=b4+$b4,meys2=meys2+$b4 where id=".$row['id']."");
					$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",4,$b4,"平衡奖");
					
				}
					
			}
				
		}
				
		}
	}
			
//店补
function dianbu($id){
	$_ulevel_cl=new ulevel_class();

	$sql="select id,nickname,bdid,lsk from member where id=$id";
	$us=getOne($sql);
	$sql2="select id,userid,ulevel,nickname,bdid,lid,bdlevel from member where id=".$us['bdid']."";
	$me=getOne($sql2);

	$_iul=$_ulevel_cl->getulevelbyulevel($me['ulevel']);
	
	$b7=$_iul['yl9']*$us['lsk']/100;
	
	if ($b7>0) {
		edit_sql("update `member` set b7=b7+".$b7." where id=".$me['id']."");
		$this->bonus_laiyuan($me['id'],$me['nickname'],$us['id'],$us['nickname'],7,$b7,"报单费");
	}
	
		

}	
/*
 * $id 获得碰对奖的用户id $b2 碰对奖金额
*/
function pdsx($id, $b2) {

	$riQi = date ( "Y-m-d" );
	$user=getOne("select id,ulevel,nickname,b3 from member where id=$id");
	$ulevel_cl = new ulevel_class ();
	$bonus = getdaybonus( $id, $riQi );
	$ulevel = $ulevel_cl->getulevelbyulevel ( $user ['ulevel'] );
	if ($ulevel ['yl3'] == 0) {
		return $b2;
	}
	$ulevel_jine = $ulevel ['yl3']; // 得到封顶
	$mey = $ulevel_jine-$bonus['b1']-$bonus['b2']-$user['b2']-$user['b1'];//日封顶
	if ($mey >= $b2) {
		if ($b2 > 0) {
			return $b2;
		}
	} elseif ($mey < $b2  ) {
		if ($mey > 0 ) {
			return $mey;
		}
	}
}


//日结周发
function ff($id,$lsk){
	
		
		$sql="SELECT id,nickname,jine,mey,maxmey FROM member where jine>0 ";
		$all=getAll($sql);
		
	
			foreach ($all as $key =>$row){
					
				    $_member_update=null;
	
					//清除剩余业绩
					$_member_update['mey']=$row['mey']+$row['jine'];
					$_member_update['maxmey']=$row['maxmey']+$row['jine'];
					$_member_update['jine']=0;
					edit_update_cl('member',$_member_update,$row['id']);
						
					
	
				}
	
	}
/*
	*查询累计金额
	*$_jx=奖金类型b0,b1,b2……
	*$_uid=查询编号
	*$_lx=查询类型0总计,1月,2日,3周
	*/
function ljbonus($_jx,$_uid,$_lx){
		$y=date("Y",strtotime(now()));
		$m=date("m",strtotime(now()));
		$d=date("d",strtotime(now()));
		$sql="SELECT sum(".$_jx.") from `bonus` where uid=".$_uid."";
		if($_lx==1){
			$sql=$sql." and year(bdate)=".$y." and month(bdate)=".$m."";	
		}else if($_lx==2){
			$sql=$sql." and year(bdate)=".$y." and month(bdate)=".$m." and day(bdate)=".$d."";	
		}else if($_lx==3){
			$sql=$sql." and month(bdate) = month(curdate()) and week(bdate,1) = week(curdate(),1)";
		}
		
		if ($query=mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
				$fanhui=$row[0];
			}
		}else{
			$fanhui=0;
		}
		return $fanhui;
	}
	
	function b0bonus(){
		
		
		$_ulevel_cl=new ulevel_class();
		$system_cl=new system_class();
		$_system=$system_cl->system_information(1);
		$lj=0;
		$lx=1; //产生数据条数,0产生N条,1每日产生1条
		$did=$this->bonustime_insert($lx);
		$sql="SELECT b1,b2,b3,b4,b5,b6,b7,id,nickname,mey,maxmey,ulevel,cfxf,wlf,ispay FROM `member` WHERE (b1>0 or b2>0 or b3>0 or b4>0 or b5>0 or b6>0 or b7>0) ";
		$arr=getAll($sql);
		
		$sql="select * from systemparameters where id=1";
		$sys=getOne($sql);
		
		foreach ($arr as $key => $row){
		
			//echo $row['nickname'];
					$member_update=NULL;
					$b1=$row['b1'];
					$b2=$row['b2'];
					$b3=$row['b3'];
					$b4=$row['b4'];
					$b5=$row['b5'];
					$b6=$row['b6'];
					$b7=$row['b7'];
					$b8=0;
					$b9=0;
					$b10=0;
 					$b11=0;
 					//$b12=0;
					
					
					$b0=$b1+$b2+$b3+$b4+$b5+$b6+$b7;
					
					//$date=date("Y-m");
					
// 					 if ($row['wlf']>=$iul['yl6']) {
// 					 	$b7=0;
// 					 }else{
// 					 	if ($row['wlf']+$b0>=$iul['yl6']) {
// 					 		$b7=-($iul['yl6']-$row['wlf']);
// 					 	}else {
// 					 		$b7=-$b0;
// 					 	}
// 					 }
					//$b8  重复消费
					//$b9  税费
					//$b10 慈善基金
					//$b11 提现手续费
				
					
					$iul=getOne("select * from ulevel where id=".$row['ulevel']."");
					$b8=-$iul['yl10']*$b0/100;
					if ($b8<0){
						$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",8,$b8,"重复消费");
					}
					$b9=-$iul['yl11']*$b0/100;
					if ($b9<0){
						$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",9,$b9,"税费");
					}
					$b10=-$iul['yl12']*$b0/100;
					if ($b9<0){
						$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",10,$b10,"慈善基金");
					}
					$b11=-$iul['yl13']*$b0/100;
					if ($b11<0){
						$this->bonus_laiyuan($row['id'],$row['nickname'],"-","-",11,$b11,"提现手续费");
					}
				    $b0=$b0+$b8+$b9+$b10+$b11;
					
					$member_update['b0']=0;
					$member_update['b1']=0;
					$member_update['b2']=0;
					$member_update['b3']=0;
					$member_update['b4']=0;
					$member_update['b5']=0;
					$member_update['b6']=0;
					$member_update['b7']=0;
					$member_update['b8']=0;
					$member_update['b9']=0;
					$member_update['b10']=0;
					//$member_update['b11']=0;
					//$member_update['b12']=0;
					$member_update['maxmey']=$row['maxmey']+$b0;
					$member_update['mey']=$row['mey']+$b0;
					//$member_update['jine']=$row['jine']+$b0;
					//$member_update['meys']=$row['meys']+$b0;//静动封顶
					
					
					$member_update['cfxf']=$row['cfxf']-$b8;//重复消费
					$member_update['wlf']=$row['wlf']-$b10;//豪车基金
					//$member_update['wlf']=$row['wlf']-$b7;//重复消费每月扣统计
		            edit_update_cl('member',$member_update,$row['id']);
					
					
					$bonus_update['did']=$did;
					$bonus_update['uid']=$row['id'];
					$bonus_update['b0']=$b0;
					$bonus_update['b1']=$b1;
					$bonus_update['b2']=$b2;
					$bonus_update['b3']=$b3;
					$bonus_update['b4']=$b4;
					$bonus_update['b5']=$b5;
					$bonus_update['b6']=$b6;
					$bonus_update['b7']=$b7;
					$bonus_update['b8']=$b8;
					$bonus_update['b9']=$b9;
					$bonus_update['b10']=$b10;
					$bonus_update['b11']=$b11;
					//$bonus_update['b12']=$b12;
					$lj=$lj+$b0;//
					
					//if($b0>0){
						
					      $this->bonus_insert($lx,$bonus_update);
					//}
				
			
		}
		$_systemyeji=new system_class();
		$_systemyeji->yejitongji(0,0,0,$lj,0,0,0);
	}
	
	
	/*
	*@lx 0产生多条数据，1每天产生1条
	*/
	function bonustime_insert($lx){
		$y=date("Y");
		$m=date("m");
		$d=date("d");
		if($lx==1){
			$sql="SELECT * FROM `bonustime` WHERE year(jsdate)=".$y." and month(jsdate)=".$m." and day(jsdate)=".$d."";
			$query=mysql_query($sql);
	 		if ($_bonustime=mysql_fetch_array($query)){
				$did=$_bonustime['id'];
			}else{
				$sql1="INSERT INTO bonustime(jsdate,jslx) VALUES('".now()."',1)";
				$reult=mysql_query($sql1);
				$did=mysql_insert_id();
			}
		}else if($lx==0){
				$sql1="INSERT INTO bonustime(jsdate,jslx) VALUES('".now()."',1)";
				$reult=mysql_query($sql1);
				$did=mysql_insert_id();
		}
		return $did;
	}
	
	/*
	*@lx 0产生多条数据，1每天产生1条,必须与bonustime的lx同步
	*/
	function bonus_insert($lx,$_bonus){
		$y=date("Y");
		$m=date("m");
		$d=date("d");
		if($lx==1){
			$sql="SELECT * FROM `bonus` WHERE year(bdate)=".$y." and month(bdate)=".$m." and day(bdate)=".$d." and uid=".$_bonus['uid']."";
			$query=mysql_query($sql);
	 		if ($bonus=mysql_fetch_array($query)){
				$bonus_update=NULL;
				$bonus_update['b0']=$bonus['b0']+$_bonus['b0'];
				$bonus_update['b1']=$bonus['b1']+$_bonus['b1'];
				$bonus_update['b2']=$bonus['b2']+$_bonus['b2'];
				$bonus_update['b3']=$bonus['b3']+$_bonus['b3'];
				$bonus_update['b4']=$bonus['b4']+$_bonus['b4'];
				$bonus_update['b5']=$bonus['b5']+$_bonus['b5'];
				$bonus_update['b6']=$bonus['b6']+$_bonus['b6'];
				$bonus_update['b7']=$bonus['b7']+$_bonus['b7'];
				$bonus_update['b8']=$bonus['b8']+$_bonus['b8'];
				$bonus_update['b9']=$bonus['b9']+$_bonus['b9'];
				$bonus_update['b10']=$bonus['b10']+$_bonus['b10'];
				$bonus_update['b11']=$bonus['b11']+$_bonus['b11'];
				//$bonus_update['b12']=$bonus['b12']+$_bonus['b12'];
				edit_update_cl('bonus',$bonus_update,$bonus['id']);
			}else{
				$bonus_update=NULL;
				$bonus_update['bdate']=now();
				$bonus_update['did']=$_bonus['did'];
				$bonus_update['uid']=$_bonus['uid'];
				$bonus_update['b0']=$_bonus['b0'];
				$bonus_update['b1']=$_bonus['b1'];
				$bonus_update['b2']=$_bonus['b2'];
				$bonus_update['b3']=$_bonus['b3'];
				$bonus_update['b4']=$_bonus['b4'];
				$bonus_update['b5']=$_bonus['b5'];
				$bonus_update['b6']=$_bonus['b6'];
				$bonus_update['b7']=$_bonus['b7'];
				$bonus_update['b8']=$_bonus['b8'];
				$bonus_update['b9']=$_bonus['b9'];
				$bonus_update['b10']=$_bonus['b10'];
				$bonus_update['b11']=$_bonus['b11'];
				//$bonus_update['b12']=$_bonus['b12'];
				add_insert_cl('bonus',$bonus_update);
			}
		}else if($lx==0){
				$bonus_update=NULL;
				$bonus_update['bdate']=now();
				$bonus_update['did']=$_bonus['did'];
				$bonus_update['uid']=$_bonus['uid'];
				$bonus_update['b0']=$_bonus['b0'];
				$bonus_update['b1']=$_bonus['b1'];
				$bonus_update['b2']=$_bonus['b2'];
				$bonus_update['b3']=$_bonus['b3'];
				$bonus_update['b4']=$_bonus['b4'];
				$bonus_update['b5']=$_bonus['b5'];
				$bonus_update['b6']=$_bonus['b6'];
				$bonus_update['b7']=$_bonus['b7'];
				$bonus_update['b8']=$_bonus['b8'];
				$bonus_update['b9']=$_bonus['b9'];
				$bonus_update['b10']=$_bonus['b10'];
				$bonus_update['b11']=$_bonus['b11'];
				//$bonus_update['b12']=$_bonus['b12'];
				add_insert_cl('bonus',$bonus_update);
		}
	}
	
	//写入奖金来源
	function bonus_laiyuan($uid,$nickname,$yid,$ynickname,$lx,$jine,$beizhu){
		$bonuslaiyuan=NULL;
		$bonuslaiyuan['uid']=$uid;
		$bonuslaiyuan['nickname']=$nickname;
		$bonuslaiyuan['yid']=$yid;
		$bonuslaiyuan['ynickname']=$ynickname;
		$bonuslaiyuan['lx']=$lx;
		$bonuslaiyuan['jine']=$jine;
		$bonuslaiyuan['bdate']=now();
		$bonuslaiyuan['beizhu']=$beizhu;
		add_insert_cl('bonuslaiyuan',$bonuslaiyuan);
	}
}
?>