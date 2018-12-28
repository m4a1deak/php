<?php
include("../member/check.php");
//include("../member/check2.php");
include_once("../function.php");
include_once("../class/system_class.php");
$information=que_select_cl('information',1);
$_yid=$_GET["yid"];
//var_dump($_SESSION['pass2']);
//如果输入过2级密码就不需要再输入
if ($_SESSION['pass2'] == 1){
	//	echo "<script language=javascript>window.location.href='".$_html."'</script>";

}
//验证二级密码
if($_POST['submit']){
	if (checkPassword2($_SESSION['nickname'],$_POST['password2'])){
		$_SESSION['pass2']=1;
		if ($_html == null){
			//echo "<script language=javascript>window.location.href='javascript:history.back(-1)'</script>";
			echo "<script language=javascript>window.location.href='tuanduijiegou.php'</script>";
				
		}else{
			echo "<script language=javascript>window.location.href='".$_html."'</script>";
		}
	}else{
		echo "<script language=javascript>alert('二级密码错误,请重新输入.');window.location.href='?yid=".$_yid."'</script>";
	}
}
if ($_GET['action']=="admin"){
	$ID=$_GET['ID'];
}else{
	$_system=new system_class();
	if ($_system->system_wlt()!=1){
		echo "<script language=javascript>alert('您没有查看网络结构的权限.');window.location.href='member.php'</script>";	
	}
	
	if ($_POST['submin']){
		if ($chaus=getMemberbyNickName($_POST['nickname'])){
			if(checkisppath($_SESSION['ID'],$chaus['id'])){
				$ID=$chaus['id'];
			}else{
				echo "<script language=javascript>alert('您的网络中不存在该成员.');window.location.href='?'</script>";		
			}
		}else{
			echo "<script language=javascript>alert('您的网络中不存在该成员.');window.location.href='?'</script>";	
		}
	}else{
		if ($_GET['ID'] == null){
			$ID=$_SESSION['ID'];
		}else if($_GET['ID'] == $_SESSION['ID']){ 
			$ID=$_SESSION['ID'];
		}else{
			if(checkisppath($_SESSION['ID'],$_GET['ID'])){
				$ID=$_GET['ID'];
			}else{
				echo "<script language=javascript>alert('您的网络中不存在该成员.');window.location.href='?'</script>";		
			}
		}	
	}
}

$benren=getMemberbyID($_SESSION['ID']);		//$benren是登录的会员
$member=$benren;
$ull=ulevel($benren['ulevel']);
	$ispay="#00CD00";
	$nopay="#00EEEE";
	$nore="#A3CDF8";
	session_start();
	$us=getMemberbyID($ID);
	$UserID=$us['userid'];
	$NickName=$us['nickname'];
	$UserName=$us['username'];
	$uLevel=$us['ulevel'];
	$area1=$us['area1'];
	$area2=$us['area2'];
	$area3=$us['area3'];
	$yarea1=$us['yarea1'];
	$yarea2=$us['yarea2'];
	$yarea3=$us['yarea3'];
	$rname=$us['rname'];
	$ul=ulevel($uLevel);
	
	$jibie=$ul['lvname'];
// 	switch($us['bdlevel']){
// 		case 1:$jibie="县区店";break;
// 		case 2:$jibie="市级店";break;
// 	}
	if ($us['ispay']==0){
		$usispaycolor=$nopay;	
	}else{
		$usispaycolor=$ispay;		
	}
	//A区
	if ($p1=getFatherManbyFidAndTreeplace($ID,1)){
	    if($benren['ulevel']>=0){													//会员等级大于等于0才能注册会员
	        $p1NickName="<a href='?ID=".$p1['id']."'>".$p1['nickname']."</a>";
	    }else{
	        $p1NickName=$p1['nickname'];
	    }
		
		$ul=ulevel($p1['ulevel']);
		$p1jibie=$ul['lvname'];
// 		switch($p1['bdlevel']){
// 			case 1:$p1jibie="县区店";break;
// 			case 2:$p1jibie="市级店";break;
// 		}
		$p1rname=$p1['rname'];
		$p1area1=$p1['area1'];
		$p1area2=$p1['area2'];
		$p1area3=$p1['area3'];
		$p1yarea1=$p1['yarea1'];
		$p1yarea2=$p1['yarea2'];
		$p1yarea3=$p1['yarea3'];
		if ($p1['ispay']==0){
			$p1ispaycolor=$nopay;	
		}else{
			$p1ispaycolor=$ispay;		
		}
	}else{
		if($benren['ulevel']>=0){
		$p1NickName="<a href='zhuce_biaodan.php?nickname=".$NickName."&tid=1'>注册</a>";	//tid=1表示左区、tid=2表示中区、tid=3表示右区
		}else{
			$p1NickName="空位";
		}
		$p1jibie="空位";
		$p1area1=0;
		$p1area2=0;
		$p1area3=0;
		$p1yarea1=0;
		$p1yarea2=0;
		$p1yarea3=0;
	}
	//AA区
	if ($p11=getFatherManbyFidAndTreeplace($p1['id'],1)){
		$p11NickName="<a href='?ID=".$p11['id']."'>".$p11['nickname']."</a>";
		$ul=ulevel($p11['ulevel']);
		$p11jibie=$ul['lvname'];
// 		switch($p11['bdlevel']){
// 			case 1:$p11jibie="县区店";break;
// 			case 2:$p11jibie="市级店";break;
// 		}
		$p11rname=$p11['rname'];
		$p11area1=$p11['area1'];
		$p11area2=$p11['area2'];
		$p11area3=$p11['area3'];
		$p11yarea1=$p11['yarea1'];
		$p11yarea2=$p11['yarea2'];
		$p11yarea3=$p11['yarea3'];
		if ($p11['ispay']==0){
			$p11ispaycolor=$nopay;	
		}else{
			$p11ispaycolor=$ispay;		
		}
	}else{
		if ($p1['id']==null){
			$p11NickName="空位";	
		}else{
			if($benren['ulevel']>=0){
				$p11NickName="<a href='zhuce_biaodan.php?nickname=".$p1['nickname']."&tid=1'>注册</a>";
				
			}else{
				$p11NickName="空位";
			}
		}	
		$p11jibie="空位";
		$p11area1=0;
		$p11area2=0;
		$p11area3=0;
		$p11yarea1=0;
		$p11yarea2=0;
		$p11yarea3=0;
	}
	//AB区
	if ($p12=getFatherManbyFidAndTreeplace($p1['id'],2)){
		$p12NickName="<a href='?ID=".$p12['id']."'>".$p12['nickname']."</a>";
		$ul=ulevel($p12['ulevel']);
		$p12jibie=$ul['lvname'];
// 		switch($p12['bdlevel']){
// 			case 1:$p12jibie="县区店";break;
// 			case 2:$p12jibie="市级店";break;
// 		}
		$p12rname=$p12['rname'];
		$p12area1=$p12['area1'];
		$p12area2=$p12['area2'];
		$p12area3=$p12['area3'];
		$p12yarea1=$p12['yarea1'];
		$p12yarea2=$p12['yarea2'];
		$p12yarea3=$p12['yarea3'];
		if ($p12['ispay']==0){
			$p12ispaycolor=$nopay;	
		}else{
			$p12ispaycolor=$ispay;		
		}
	}else{
		if ($p1['id']==null){
			$p12NickName="空位";	
		}else{
			if($benren['ulevel']>=0){
			$p12NickName="<a href='zhuce_biaodan.php?nickname=".$p1['nickname']."&tid=2'>注册</a>";	
			}else{
				$p12NickName="空位";
			}
		}	
		$p12jibie="空位";
		$p12area1=0;
		$p12area2=0;
		$p12area3=0;
		$p12yarea1=0;
		$p12yarea2=0;
		$p12yarea3=0;
	}
	//AC区
	if ($p13=getFatherManbyFidAndTreeplace($p1['id'],3)){
		$p13NickName="<a href='?ID=".$p13['id']."'>".$p13['nickname']."</a>";
		$ul=ulevel($p13['ulevel']);
		$p13jibie=$ul['lvname'];
// 		switch($p13['bdlevel']){
// 			case 1:$p13jibie="县区店";break;
// 			case 2:$p13jibie="市级店";break;
// 		}
		$p13rname=$p13['rname'];
		$p13area1=$p13['area1'];
		$p13area2=$p13['area2'];
		$p13area3=$p13['area3'];
		$p13yarea1=$p13['yarea1'];
		$p13yarea2=$p13['yarea2'];
		$p13yarea3=$p13['yarea3'];
		if ($p13['ispay']==0){
			$p13ispaycolor=$nopay;
		}else{
			$p13ispaycolor=$ispay;
		}
	}else{
		if ($p1['id']==null){
			$p13NickName="空位";
		}else{
			if($benren['ulevel']>=0){
				$p13NickName="<a href='zhuce_biaodan.php?nickname=".$p1['nickname']."&tid=3'>注册</a>";
			}else{
				$p13NickName="空位";
			}
		}
		$p13jibie="空位";
		$p13area1=0;
		$p13area2=0;
		$p13area3=0;
		$p13yarea1=0;
		$p13yarea2=0;
		$p13yarea3=0;
	}
	//B区
	if ($p2=getFatherManbyFidAndTreeplace($ID,2)){
	    if($benren['ispay']>=0){
		$p2NickName="<a href='?ID=".$p2['id']."'>".$p2['nickname']."</a>";
	    }else{
	        $p2NickName=$p2['nickname'];
	    }
		$ul=ulevel($p2['ulevel']);
		$p2jibie=$ul['lvname'];
// 		switch($p2['bdlevel']){
// 			case 1:$p2jibie="县区店";break;
// 			case 2:$p2jibie="市级店";break;
// 		}
		$p2rname=$p2['rname'];
		$p2area1=$p2['area1'];
		$p2area2=$p2['area2'];
		$p2area3=$p2['area3'];
		$p2yarea1=$p2['yarea1'];
		$p2yarea2=$p2['yarea2'];
		$p2yarea3=$p2['yarea3'];
		if ($p2['ispay']==0){
			$p2ispaycolor=$nopay;	
		}else{
			$p2ispaycolor=$ispay;		
		}
	}else{
		if($benren['ulevel']>=0){
		$p2NickName="<a href='zhuce_biaodan.php?nickname=".$NickName."&tid=2'>注册</a>";
		}else{
			$p2NickName="空位";
		}
		$p2jibie="空位";
		$p2area1=0;
		$p2area2=0;
		$p2area3=0;
		$p2yarea1=0;
		$p2yarea2=0;
		$p2yarea3=0;
	}
	//BA区
	if ($p21=getFatherManbyFidAndTreeplace($p2['id'],1)){
		$p21NickName="<a href='?ID=".$p21['id']."'>".$p21['nickname']."</a>";
		$ul=ulevel($p21['ulevel']);
		$p21jibie=$ul['lvname'];
// 		switch($p21['bdlevel']){
// 			case 1:$p21jibie="县区店";break;
// 			case 2:$p21jibie="市级店";break;
// 		}
		$p21rname=$p21['rname'];
		$p21area1=$p21['area1'];
		$p21area2=$p21['area2'];
		$p21area3=$p21['area3'];
		$p21yarea1=$p21['yarea1'];
		$p21yarea2=$p21['yarea2'];
		$p21yarea3=$p21['yarea3'];
		if ($p21['ispay']==0){
			$p21ispaycolor=$nopay;	
		}else{
			$p21ispaycolor=$ispay;		
		}
	}else{
		if ($p2['id']==null){
			$p21NickName="注册";	
		}else{
			if($benren['ulevel']>=0){
			$p21NickName="<a href='zhuce_biaodan.php?nickname=".$p2['nickname']."&tid=1'>注册</a>";	
			}else{
				$p21NickName="空位";
			}
		}	
		$p21jibie="空位";
		$p21area1=0;
		$p21area2=0;
		$p21area3=0;
		$p21yarea1=0;
		$p21yarea2=0;
		$p21yarea3=0;
	}
	//BB区
	if ($p22=getFatherManbyFidAndTreeplace($p2['id'],2)){
		$p22NickName="<a href='?ID=".$p22['id']."'>".$p22['nickname']."</a>";
		$ul=ulevel($p22['ulevel']);
		$p22jibie=$ul['lvname'];
// 		switch($p22['bdlevel']){
// 			case 1:$p22jibie="县区店";break;
// 			case 2:$p22jibie="市级店";break;
// 		}
		$p22rname=$p22['rname'];
		$p22area1=$p22['area1'];
		$p22area2=$p22['area2'];
		$p22area3=$p22['area3'];
		$p22yarea1=$p22['yarea1'];
		$p22yarea2=$p22['yarea2'];
		$p22yarea3=$p22['yarea3'];
		if ($p22['ispay']==0){
			$p22ispaycolor=$nopay;	
		}else{
			$p22ispaycolor=$ispay;		
		}
	}else{
		if ($p2['id']==null){
			$p22NickName="注册";	
		}else{
			if($benren['ulevel']>=0){
			$p22NickName="<a href='zhuce_biaodan.php?nickname=".$p2['nickname']."&tid=2'>注册</a>";	
			}else{
				$p22NickName="空位";
			}
		}	
		$p22jibie="空位";
		$p22area1=0;
		$p22area2=0;
		$p22area3=0;
		$p22yarea1=0;
		$p22yarea2=0;
		$p22yarea3=0;
	}
	//BC区
	if ($p23=getFatherManbyFidAndTreeplace($p2['id'],3)){
		$p23NickName="<a href='?ID=".$p23['id']."'>".$p23['nickname']."</a>";
		$ul=ulevel($p23['ulevel']);
		$p23jibie=$ul['lvname'];
// 		switch($p23['bdlevel']){
// 			case 1:$p23jibie="县区店";break;
// 			case 2:$p23jibie="市级店";break;
// 		}
		$p23rname=$p23['rname'];
		$p23area1=$p23['area1'];
		$p23area2=$p23['area2'];
		$p23area3=$p23['area3'];
		$p23yarea1=$p23['yarea1'];
		$p23yarea2=$p23['yarea2'];
		$p23yarea3=$p23['yarea3'];
		if ($p23['ispay']==0){
			$p23ispaycolor=$nopay;
		}else{
			$p23ispaycolor=$ispay;
		}
	}else{
		if ($p2['id']==null){
			$p23NickName="注册";
		}else{
			if($benren['ulevel']>=0){
				$p23NickName="<a href='zhuce_biaodan.php?nickname=".$p2['nickname']."&tid=3'>注册</a>";
			}else{
				$p23NickName="空位";
			}
		}
		$p23jibie="空位";
		$p23area1=0;
		$p23area2=0;
		$p23area3=0;
		$p23yarea1=0;
		$p23yarea2=0;
		$p23yarea3=0;
	}
	//C区
	if ($p3=getFatherManbyFidAndTreeplace($ID,3)){
		if($benren['ispay']>=0){
			$p3NickName="<a href='?ID=".$p3['id']."'>".$p3['nickname']."</a>";
		}else{
			$p3NickName=$p3['nickname'];
		}
		$ul=ulevel($p3['ulevel']);
		$p3jibie=$ul['lvname'];
// 		switch($p3['bdlevel']){
// 			case 1:$p3jibie="县区店";break;
// 			case 2:$p3jibie="市级店";break;
// 		}
		$p3rname=$p3['rname'];
		$p3area1=$p3['area1'];
		$p3area2=$p3['area2'];
		$p3area3=$p3['area3'];
		$p3yarea1=$p3['yarea1'];
		$p3yarea2=$p3['yarea2'];
		$p3yarea3=$p3['yarea3'];
		if ($p3['ispay']==0){
			$p3ispaycolor=$nopay;
		}else{
			$p3ispaycolor=$ispay;
		}
	}else{
		if($benren['ispay']>=0){
			$p3NickName="<a href='zhuce_biaodan.php?nickname=".$NickName."&tid=3'>注册</a>";
		}else{
			$p3NickName="空位";
		}
		$p3jibie="空位";
		$p3area1=0;
		$p3area2=0;
		$p3yarea1=0;
		$p3yarea2=0;
	}
	//CA区
	if ($p31=getFatherManbyFidAndTreeplace($p3['id'],1)){
		$p31NickName="<a href='?ID=".$p31['id']."'>".$p31['nickname']."</a>";
		$ul=ulevel($p31['ulevel']);
		$p31jibie=$ul['lvname'];
// 		switch($p31['bdlevel']){
// 			case 1:$p31jibie="县区店";break;
// 			case 2:$p31jibie="市级店";break;
// 		}
		$p31rname=$p31['rname'];
		$p31area1=$p31['area1'];
		$p31area2=$p31['area2'];
		$p31area3=$p31['area3'];
		$p31yarea1=$p31['yarea1'];
		$p31yarea2=$p31['yarea2'];
		$p31yarea3=$p31['yarea3'];
		if ($p31['ispay']==0){
			$p31ispaycolor=$nopay;
		}else{
			$p31ispaycolor=$ispay;
		}
	}else{
		if ($p3['id']==null){
			$p31NickName="注册";
		}else{
			if($benren['ulevel']>=0){
				$p31NickName="<a href='zhuce_biaodan.php?nickname=".$p3['nickname']."&tid=1'>注册</a>";
			}else{
				$p31NickName="空位";
			}
		}
		$p31jibie="空位";
		$p31area1=0;
		$p31area2=0;
		$p31area3=0;
		$p31yarea1=0;
		$p31yarea2=0;
		$p31yarea3=0;
	}
	//CB区
	if ($p32=getFatherManbyFidAndTreeplace($p3['id'],2)){
		$p32NickName="<a href='?ID=".$p32['id']."'>".$p32['nickname']."</a>";
		$ul=ulevel($p32['ulevel']);
		$p32jibie=$ul['lvname'];
// 		switch($p32['bdlevel']){
// 			case 1:$p32jibie="县区店";break;
// 			case 2:$p32jibie="市级店";break;
// 		}
		$p32rname=$p32['rname'];
		$p32area1=$p32['area1'];
		$p32area2=$p32['area2'];
		$p32area3=$p32['area3'];
		$p32yarea1=$p32['yarea1'];
		$p32yarea2=$p32['yarea2'];
		$p32yarea3=$p32['yarea3'];
		if ($p32['ispay']==0){
			$p32ispaycolor=$nopay;
		}else{
			$p32ispaycolor=$ispay;
		}
	}else{
		if ($p3['id']==null){
			$p32NickName="注册";
		}else{
			if($benren['ulevel']>=0){
				$p32NickName="<a href='zhuce_biaodan.php?nickname=".$p3['nickname']."&tid=2'>注册</a>";
			}else{
				$p32NickName="空位";
			}
		}
		$p32jibie="空位";
		$p32area1=0;
		$p32area2=0;
		$p32area3=0;
		$p32yarea1=0;
		$p32yarea2=0;
		$p32yarea3=0;
	}
	//CC区
	if ($p33=getFatherManbyFidAndTreeplace($p3['id'],3)){
		$p33NickName="<a href='?ID=".$p33['id']."'>".$p33['nickname']."</a>";
		$ul=ulevel($p33['ulevel']);
		$p33jibie=$ul['lvname'];
// 		switch($p33['bdlevel']){
// 			case 1:$p33jibie="县区店";break;
// 			case 2:$p33jibie="市级店";break;
// 		}
		$p33rname=$p33['rname'];
		$p33area1=$p33['area1'];
		$p33area2=$p33['area2'];
		$p33area3=$p33['area3'];
		$p33yarea1=$p33['yarea1'];
		$p33yarea2=$p33['yarea2'];
		$p33yarea3=$p33['yarea3'];
		if ($p33['ispay']==0){
			$p33ispaycolor=$nopay;
		}else{
			$p33ispaycolor=$ispay;
		}
	}else{
		if ($p3['id']==null){
			$p33NickName="注册";
		}else{
			if($benren['ulevel']>=0){
				$p33NickName="<a href='zhuce_biaodan.php?nickname=".$p3['nickname']."&tid=3'>注册</a>";
			}else{
				$p33NickName="空位";
			}
		}
		$p33jibie="空位";
		$p33area1=0;
		$p33area2=0;
		$p33area3=0;
		$p33yarea1=0;
		$p33yarea2=0;
		$p33yarea3=0;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
	  
	  <div class="widget">
                    
                   
           <div class="page-header">
            <h1>会员系谱图</h1>
          </div>
          

<style>
.table1
{
	background:#999
}
/* 杩欒竟瀹氫箟浜嗚〃鏍肩殑鑳屾櫙锛屼篃灏辨槸杈规鐨勯鑹� */
.table1 td, .table1 th
{
	background:#E3EFFB;
	border:1px #CCC solid;
	font-size: 12px;
} 
.ziti {
	color: #333;
	font-size: 12px;
}
.img{height:100%;}

</style>


                       
 <div class="table-overflow">  
   <?php if($_SESSION['pass2'] == 1){?>  
		<!-- 限制手机左右拉伸宽度 -->
 <div class="row-fluid" style=" width:848px;">              
<div style="width:870px; height:600px;overflow:scroll; ">

<table width="870px" height="600px" cellpadding="3" cellspacing="1" border="0" align="center" >

<form name="form1" method="post" action="?">
	<tr>
	
    <td height="22" colspan="3" class="ziti">查询会员：
      
        <input type="text" name="nickname" id="nickname">
      <input name="submin" type="submit" class="btn" id="submin" value="查  询" style=" margin-top:-10px;">
     
     <?php
     	if ($ID != $_SESSION['ID']){
	 ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?ID=<?=$_SESSION['ID']?>">返回顶层</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back(-1)">返回上一层</a>
     <?php
		}
	 ?>
     </td>
   
    <td style="background:<?=$ispay?>;" align="center" class="ziti" height="22" >已激活</td>
    <td style="background:<?=$nopay?>;" align="center" class="ziti" height="22">未激活</td>
    </tr>
	<tr>
  </form>
	  <td height="120" colspan="18" align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1" >
	    <tr>
	      <td style="background:<?=$usispaycolor?>"  colspan="3" align="center"><?=$NickName?></td>
        </tr>
        <tr>
	      <td  colspan="3" align="center"><?=$rname?></td>
        </tr>
	    <tr>
	      <td  colspan="3" align="center"><?=$jibie?></td>
        </tr>
	    <tr >
	      <td colspan="3" align="center" >总计</td>
        </tr>
	    <tr >
	      <td  align="center"><?=$area1?></td>
	      <td  align="center"><?=$area2?></td>
	      <td  align="center"><?=$area3?></td>
        </tr>
	   <tr >
	      <td colspan="3" align="center" >结余</td>
        </tr>
	    <tr >
	      <td  align="center"><?=$yarea1?></td>
	      <td  align="center"><?=$yarea2?></td>
	      <td  align="center"><?=$yarea3?></td>
        </tr>
      </table></td>
   
	<tr>
    <td height="36" colspan="18" align="center"><img src="../member/images/t_tree_bottom_l.gif"  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="400" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif"  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="400" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" height="30" style="height:30px;"></td>
  </tr>
  <tr>
    <td width="50%" height="103" colspan="3"  align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p1ispaycolor?>" colspan="3" align="center"><?=$p1NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p1rname?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p1jibie?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p1area1?></td>
        <td  align="center"><?=$p1area2?></td>
        <td  align="center"><?=$p1area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p1yarea1?></td>
        <td  align="center"><?=$p1yarea2?></td>
        <td  align="center"><?=$p1yarea3?></td>
      </tr>
    </table></td>
    <td width="50%" height="103" colspan="3" align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p2ispaycolor?>" colspan="3" align="center"><?=$p2NickName?></td>
        </tr>
        <tr>
        <td colspan="3" align="center"><?=$p2rname?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p2jibie?></td>
        </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p2area1?></td>
        <td  align="center"><?=$p2area2?></td>
        <td  align="center"><?=$p2area3?></td>
        </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p2yarea1?></td>
        <td  align="center"><?=$p2yarea2?></td>
        <td  align="center"><?=$p2yarea3?></td>
        </tr>
    </table></td>
    <td width="50%" height="103" colspan="3"  align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p3ispaycolor?>" colspan="3" align="center"><?=$p3NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p3rname?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p3jibie?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p3area1?></td>
        <td  align="center"><?=$p3area2?></td>
        <td  align="center"><?=$p3area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p3yarea1?></td>
        <td  align="center"><?=$p3yarea2?></td>
        <td  align="center"><?=$p3yarea3?></td>
      </tr>
    </table></td>
  </tr>
  <?php 
  if($benren['ulevel']>=0){
  ?>
  <tr>
    <td height="36" colspan="3" align="center"><img src="../member/images/t_tree_bottom_l.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" alt="" height="30" style="height:30px;"></td>
    <td colspan="3" align="center"><img src="../member/images/t_tree_bottom_l.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" alt="" height="30" style="height:30px;"></td>
    <td colspan="3" align="center"><img src="../member/images/t_tree_bottom_l.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" alt="" height="30" style="height:30px;"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p11ispaycolor?>" colspan="3" align="center"><?=$p11NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p11rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p11jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p11area1?></td>
        <td  align="center"><?=$p11area2?></td>
        <td  align="center"><?=$p11area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p11yarea1?></td>
        <td  align="center"><?=$p11yarea2?></td>
         <td  align="center"><?=$p11yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p12ispaycolor?>" colspan="3" align="center"><?=$p12NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p12rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p12jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p12area1?></td>
        <td  align="center"><?=$p12area2?></td>
         <td  align="center"><?=$p12area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p12yarea1?></td>
        <td  align="center"><?=$p12yarea2?></td>
        <td  align="center"><?=$p12yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p13ispaycolor?>" colspan="3" align="center"><?=$p13NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p13rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p13jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p13area1?></td>
        <td  align="center"><?=$p13area2?></td>
         <td  align="center"><?=$p13area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p13yarea1?></td>
        <td  align="center"><?=$p13yarea2?></td>
        <td  align="center"><?=$p13yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p21ispaycolor?>" colspan="3" align="center"><?=$p21NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p21rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p21jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p21area1?></td>
        <td  align="center"><?=$p21area2?></td>
         <td  align="center"><?=$p21area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p21yarea1?></td>
        <td  align="center"><?=$p21yarea2?></td>
        <td  align="center"><?=$p21yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p22ispaycolor?>" colspan="3" align="center"><?=$p22NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p22rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p22jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p22area1?></td>
        <td  align="center"><?=$p22area2?></td>
         <td  align="center"><?=$p22area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p22yarea1?></td>
        <td  align="center"><?=$p22yarea2?></td>
        <td  align="center"><?=$p22yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p23ispaycolor?>" colspan="3" align="center"><?=$p23NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p23rname?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p23jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
         <td  align="center"><?=$p23area1?></td>
        <td  align="center"><?=$p23area2?></td>
         <td  align="center"><?=$p23area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p23yarea1?></td>
        <td  align="center"><?=$p23yarea2?></td>
        <td  align="center"><?=$p23yarea3?></td>
      </tr>
    </table></td>
  	<td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p31ispaycolor?>" colspan="3" align="center"><?=$p31NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p31rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p31jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
         <td  align="center"><?=$p31area1?></td>
         <td  align="center"><?=$p31area2?></td>
         <td  align="center"><?=$p31area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p31yarea1?></td>
        <td  align="center"><?=$p31yarea2?></td>
        <td  align="center"><?=$p31yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p32ispaycolor?>" colspan="3" align="center"><?=$p32NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p32rname?></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><?=$p32jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
         <td  align="center"><?=$p32area1?></td>
        <td  align="center"><?=$p32area2?></td>
         <td  align="center"><?=$p32area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p32yarea1?></td>
        <td  align="center"><?=$p32yarea2?></td>
        <td  align="center"><?=$p32yarea3?></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p33ispaycolor?>" colspan="3" align="center"><?=$p33NickName?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p33rname?></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><?=$p33jibie?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" >总计</td>
        </tr>
      <tr>
         <td  align="center"><?=$p33area1?></td>
        <td  align="center"><?=$p33area2?></td>
         <td  align="center"><?=$p33area3?></td>
      </tr>
      <tr >
        <td colspan="3" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p33yarea1?></td>
        <td  align="center"><?=$p33yarea2?></td>
         <td  align="center"><?=$p33yarea3?></td>
      </tr>
    </table></td>
  </tr>
  <?php }?>
</table>
<?php }else{ ?>
  <form name="form1" method="POST" action="?yid=<?=$_yid?>">
<table width="300" border="0" align="center" cellpadding="3" cellspacing="1" class="table1">
  <tr>
    <td align="center" height="50px"><p style=" color:#F00"><B>请输入二级密码：</B>  
      <input name="password2" type="password" id="password2" size="20"></p></td>
    </tr>
  <tr>
    <td align="center"><input name="submit" type="submit" class="button_green" value="确  认"></td>
    </tr>
  </table>
 </form>
  <?php } ?>
 </div>




                     </div>   
                   </div>
                   </div>     
                   
                    
                  </div>	  

      </div>
      <!-- /span9 -->            
     
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<?php include 'footer.php';?>
</body>
</html>
