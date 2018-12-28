<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=table.xls");
include_once "../function.php";
include_once("../class/member_class.php");
session_start();
if($_GET['table']=='bonus'){//奖金总表
	$str="会员编号\t会员姓名\t回本奖\t见点奖\t层奖\t量奖\t报单费\t重复消费\t税费\t慈善基金\t提现手续费\t实际发放\t\n";
	echo $str;
	$sql="select * from member m left join bonus b on m.id=b.uid where did={$_GET['time']} order by bdate asc";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['b1']."\t";
		echo $row['b2']."\t";
		echo $row['b3']."\t";
		echo $row['b4']."\t";
		echo $row['b7']."\t";
		echo $row['b8']."\t";
		echo $row['b9']."\t";
		echo $row['b10']."\t";
		echo $row['b11']."\t";
		
		echo $row['b0']."\t\n";
	}
}elseif($_GET['table']=='tixian'){//提现表
	$str="会员编号\t会员姓名\t提现金额\t开户银行\t开户姓名\t开户帐号\t开户地址\t提现时间\t服务中心\t审核状态\t\n";
	echo $str;
	$sql="select * from tixian";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['jine']."\t";
		
		echo $row['bankname']."\t";
		echo $row['bankusername']."\t";
		echo $row['bankcard']."\t";
		echo $row['bankaddress']."\t";
		echo $row['tdate']."\t";
		echo $row['bdname']."\t";
		if ($row['isgrant']==1){
			echo $row['bankaddress']."已发放\t\n";
		}else{ 
			echo "未发放\t\n";
		}
		
	}
}elseif($_GET['table']=='chongzhi'){//充值表
	$str="会员编号\t会员姓名\t申请金额\t充值时间\t申请类型\t审核状态\n";
	echo $str;
	$sql="select * from chongzhi";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['jine']."\t";
		echo $row['cdate']."\t";
		if($row['lx']==1){
			echo "购物币\t";
		}elseif($row['lx']==0){
			echo "报单币\t";
		}
		if ($row['isgrant']==1){
			echo "已发放\t\n";
		}else{
			echo "未发放\t\n";
		}
	
	}
}elseif($_GET['table']=='huikuan'){//汇款
$str="会员编号\t会员姓名\t账户姓名\t汇款账户\t汇款金额\t汇款时间\t汇款说明\t记录时间\t服务中心\t汇款确认\t\n";
	echo $str;
	$sql="select * from huikuan";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";

		echo $row['bankusername']."\t";
		echo $row['bankcard']."\t";
		echo $row['jine']."\t";
		echo $row['sdate']."\t";
		echo $row['shuoming']."\t";
		echo $row['hdate']."\t";
		echo $row['snickname']."\t";
		if ($row['isgrant']==1){
			echo $row['bankaddress']."已确认\t\n";
		}else{ 
			echo "未确认\t\n";
		}
		
	}
}elseif($_GET['table']=='zhuanzhang'){
	$str="转出会员编号\t转出会员姓名\t转入会员编号\t转入会员姓名\t转账金额\t转账类型\t转账时间\n";
	echo $str;
	$sql="select * from zhuanzhang";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['snickname']."\t";
		echo $row['susername']."\t";
		echo $row['jine']."\t";
		if($row['lx']==0){
			echo "报单币\t";
		}elseif($row['lx']==1){
			echo "复投币\t";
		}elseif($row['lx']==2){
			echo "积分\t";
		}
		echo $row['zdate']."\t\n";
	}
}elseif($_GET['table']=='zhuanhuan'){
	$str="会员编号\t会员姓名\t转换金额\t申请类型\t转换时间\n";
	echo $str;
	$sql="select * from zhuanhuan";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['jine']."\t";
	if($row['lx']==0){
			echo "奖金转报单币\t";
		}elseif($row['lx']==1){
			echo "奖金转复投币\t";
		}elseif($row['lx']==2){
			echo "积分转购物币\t";
		}
		echo $row['zdate']."\t\n";
		
		
	}
}elseif($_GET['table']=="member"){
	$str="会员编号\t会员姓名\t会员资格\t累计奖金\t剩余奖金\t报单币\t重消币\t慈善基金\t推荐人\t接点人\t联系电话\t微信\t支付宝\t详细收货地址\t开户银行\t开户账号\t开户姓名\t开户地址\t注册时间\t激活时间\t服务中心\t是否锁定\t\n";
	echo $str;
	$sql="select * from member where ispay=1";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_assoc($rs)){
	    $ul=ulevel($row['ulevel']);
		echo $row['userid']."\t";
		echo $row['username']."\t";
		echo $ul['lvname']."\t";
		echo $row['maxmey']."\t";
		echo $row['mey']."\t";
		echo $row['zsq']."\t";
		echo $row['cfxf']."\t";
		echo $row['wlf']."\t";
		echo $row['rname']."\t";
		echo $row['fathername']."\t";
	
		echo $row['usertel']."\t";
		echo $row['caifutong']."\t";
		echo $row['zhifubao']."\t";
		echo $row['usertel']."\t";
	    echo $row['useraddress']."\t";
		echo $row['bankname']."\t";
		echo $row['bankcard']."\t";
		echo $row['bankusername']."\t";
		echo $row['bankaddress']."\t";
		echo $row['rdt']."\t";
		echo $row['pdt']."\t";
		echo $row['bdname']."\t";
		if($row['islock']==1){
		    echo "已锁定\t\n";
		}else{
		    echo "未锁定\t\n";
		
		}
		
	}
}elseif($_GET['table']=="orders0"){
		$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
		echo $str;
		$sql="select * from orders1 where isqr=1 and issend=0 and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
		$rs=mysql_query($sql);
		while($row=mysql_fetch_assoc($rs)){
			echo $row['ordersnumber']."\t";
			echo $row['logistics']."\t";
			echo $row['logisticsno']."\t";
			echo $row['goodname']."\t";
			echo $row['price']."\t";
			echo $row['num']."\t";
			echo $row['jine']."\t";
			echo $row['userid']."\t";
			echo $row['username']."\t";
			echo $row['usertel']."\t";
			echo $row['useraddress']."\t";
			echo $row['date']."\t";
			echo $row['sdate']."\t";
			echo $row['bnickname']."\t";
			echo "未发货\t\n";
	
	
		}
}elseif($_GET['table']=="orders1"){
			$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
			echo $str;
			$sql="select * from orders1 where issend=1 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
			$rs=mysql_query($sql);
			while($row=mysql_fetch_assoc($rs)){
				echo $row['ordersnumber']."\t";
				echo $row['logistics']."\t";
				echo $row['logisticsno']."\t";
					
				echo $row['goodname']."\t";
				echo $row['price']."\t";
				echo $row['num']."\t";
					
				echo $row['jine']."\t";
					
					
		
				echo $row['userid']."\t";
				echo $row['username']."\t";
		
				echo $row['usertel']."\t";
				echo $row['useraddress']."\t";
				echo $row['date']."\t";
				echo $row['sdate']."\t";
				echo $row['bnickname']."\t";
				echo "已发货\t\n";
		
		
			}
}elseif($_GET['table']=="orders2"){
				$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
				echo $str;
				$sql="select * from orders1 where issend=2 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
				$rs=mysql_query($sql);
				while($row=mysql_fetch_assoc($rs)){
					echo $row['ordersnumber']."\t";
					echo $row['logistics']."\t";
					echo $row['logisticsno']."\t";
						
					echo $row['goodname']."\t";
					echo $row['price']."\t";
					echo $row['num']."\t";
						
					echo $row['jine']."\t";
						
						
			
					echo $row['userid']."\t";
					echo $row['username']."\t";
			
					echo $row['usertel']."\t";
					echo $row['useraddress']."\t";
					echo $row['date']."\t";
					echo $row['sdate']."\t";
					echo $row['bnickname']."\t";
					echo "退款\t\n";
			
			
				}
}elseif($_GET['table']=="orders3"){
					$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
					echo $str;
					$sql="select * from orders1 where issend=3 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
					$rs=mysql_query($sql);
					while($row=mysql_fetch_assoc($rs)){
						echo $row['ordersnumber']."\t";
						echo $row['logistics']."\t";
						echo $row['logisticsno']."\t";
				
						echo $row['goodname']."\t";
						echo $row['price']."\t";
						echo $row['num']."\t";
				
						echo $row['jine']."\t";
				
				
							
						echo $row['userid']."\t";
						echo $row['username']."\t";
							
						echo $row['usertel']."\t";
						echo $row['useraddress']."\t";
						echo $row['date']."\t";
						echo $row['sdate']."\t";
						echo $row['bnickname']."\t";
						echo "收货\t\n";
							
							
					}
}elseif($_GET['table']=="orders20"){
						$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
						echo $str;
						$sql="select * from orders2 where issend=0 and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
						$rs=mysql_query($sql);
						while($row=mysql_fetch_assoc($rs)){
							echo $row['ordersnumber']."\t";
							echo $row['logistics']."\t";
							echo $row['logisticsno']."\t";
							echo $row['goodname']."\t";
							echo $row['price']."\t";
							echo $row['num']."\t";
							echo $row['jine']."\t";
							echo $row['userid']."\t";
							echo $row['username']."\t";
							echo $row['usertel']."\t";
							echo $row['useraddress']."\t";
							echo $row['date']."\t";
							echo $row['sdate']."\t";
							echo $row['bnickname']."\t";
							echo "未发货\t\n";
					
					
						}
}elseif($_GET['table']=="orders21"){
						$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
						echo $str;
						$sql="select * from orders2 where issend=1 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
						$rs=mysql_query($sql);
						while($row=mysql_fetch_assoc($rs)){
							echo $row['ordersnumber']."\t";
							echo $row['logistics']."\t";
							echo $row['logisticsno']."\t";
								
							echo $row['goodname']."\t";
							echo $row['price']."\t";
							echo $row['num']."\t";
								
							echo $row['jine']."\t";
								
								
					
							echo $row['userid']."\t";
							echo $row['username']."\t";
					
							echo $row['usertel']."\t";
							echo $row['useraddress']."\t";
							echo $row['date']."\t";
							echo $row['sdate']."\t";
							echo $row['bnickname']."\t";
							echo "已发货\t\n";
					
					
						}
}elseif($_GET['table']=="orders22"){
						$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
						echo $str;
						$sql="select * from orders2 where issend=2 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
						$rs=mysql_query($sql);
						while($row=mysql_fetch_assoc($rs)){
							echo $row['ordersnumber']."\t";
							echo $row['logistics']."\t";
							echo $row['logisticsno']."\t";
					
							echo $row['goodname']."\t";
							echo $row['price']."\t";
							echo $row['num']."\t";
					
							echo $row['jine']."\t";
					
					
								
							echo $row['userid']."\t";
							echo $row['username']."\t";
								
							echo $row['usertel']."\t";
							echo $row['useraddress']."\t";
							echo $row['date']."\t";
							echo $row['sdate']."\t";
							echo $row['bnickname']."\t";
							echo "退款\t\n";
								
								
						}
}elseif($_GET['table']=="orders23"){
						$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
						echo $str;
						$sql="select * from orders2 where issend=3 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
						$rs=mysql_query($sql);
						while($row=mysql_fetch_assoc($rs)){
							echo $row['ordersnumber']."\t";
							echo $row['logistics']."\t";
							echo $row['logisticsno']."\t";
					
							echo $row['goodname']."\t";
							echo $row['price']."\t";
							echo $row['num']."\t";
					
							echo $row['jine']."\t";
					
					
								
							echo $row['userid']."\t";
							echo $row['username']."\t";
								
							echo $row['usertel']."\t";
							echo $row['useraddress']."\t";
							echo $row['date']."\t";
							echo $row['sdate']."\t";
							echo $row['bnickname']."\t";
							echo "收货\t\n";
								
								
}
}elseif($_GET['table']=="orders4"){
						$str="订单编号\t物流公司\t物流编号\t商品名称\t价格\t数量\t金额\t会员编号\t会员姓名\t联系电话\t联系地址\t订单时间\t发货时间\t销售商\t状态\t\n";
						echo $str;
						$sql="select * from orders1 where issend=4 and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
						$rs=mysql_query($sql);
						while($row=mysql_fetch_assoc($rs)){
							echo $row['ordersnumber']."\t";
							echo $row['logistics']."\t";
							echo $row['logisticsno']."\t";
					
							echo $row['goodname']."\t";
							echo $row['price']."\t";
							echo $row['num']."\t";
					
							echo $row['jine']."\t";
					
					
								
							echo $row['userid']."\t";
							echo $row['username']."\t";
								
							echo $row['usertel']."\t";
							echo $row['useraddress']."\t";
							echo $row['date']."\t";
							echo $row['sdate']."\t";
							echo $row['bnickname']."\t";
							echo "交易完成\t\n";
								
								
}
}elseif($_GET['table']=="orderlist"){
		$str="商品名称\t商品类型\t价格\t库存\t销量\t发布时间\t销售商\t状态\t\n";
		echo $str;
		$sql="select * from goods ";
		$rs=mysql_query($sql);
		while($row=mysql_fetch_assoc($rs)){
		
			echo $row['goodsname']."\t";
			
			if($row['lx']==2){
				echo "报单商品\t";
			}else{
				echo "零售商品\t";
					
			}
			echo $row['price']."\t";
			echo $row['kucun']."\t";
			echo $row['sales']."\t";
			echo $row['gdate']."\t";
			echo $row['nickname']."\t";
			if($row['isdisplay']==1){
				echo "已发布\t\n";
			}else{
				echo "未发布\t\n";
					
			}
			
	
	
		}
}elseif($_GET['table']=="week"){
	$str="会员编号\t会员姓名\t层碰奖\t量碰奖\t报单费\t区域绑定\t推荐代理奖\t重复消费\t实际发放\t\n";
	echo $str;
	$sql = "SELECT * FROM `member` as m right join (select sum(b1) as b1, sum(b2) as b2, sum(b3) as b3, sum(b4) as b4, sum(b5) as b5,sum(b6) as b6,sum(b0) as b0, uid ,bdate from bonus where date_format(bdate,'%Y-%v')='{$_GET['time']}' group by uid) as b on m.id=b.uid WHERE 1=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
	$rs=getAll($sql);
	foreach($rs as $row){
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['b1']."\t";
		echo $row['b2']."\t";
		echo $row['b3']."\t";
		echo $row['b4']."\t";
		echo $row['b5']."\t";
		echo $row['b6']."\t";
		echo $row['b0']."\t\n";
	}


}elseif($_GET['table']=="action"){
	$str="时间\t类型\t会员编号\t会员姓名\t操作\t操作人\t\n";
	echo $str;
	$sql = "SELECT * FROM `action` a left join member m on m.id=a.uid left join to_admin t on t.id=a.operationid";
	$rs=getAll($sql);
	foreach($rs as $row){
		echo $row['time']."\t";
		echo $row['lx']."\t";
		echo $row['nickname']."\t";
		echo $row['username']."\t";
		echo $row['jine']."\t";
		
		echo $row['loginname']."\t\n";
	}
}



?>