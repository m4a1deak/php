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

$benren=getMemberbyID($_SESSION['ID']);
$ull=ulevel($benren['ulevel']);
	$nopay="#8B008B";
	
	$ispay1="#98FB98";
	$ispay2="#FFD700";
	$ispay3="#FF0000";
	
	//$ispay3="#1B6DA2";
	//$ispay4="#00CD00";
	
	$nore="#A3CDF8";
	session_start();
	$us=getMemberbyID($ID);
	$UserID=$us['userid'];
	$NickName=$us['nickname'];
	$UserName=$us['username'];
	$uLevel=$us['ulevel'];
	$area1=$us['area1'];
	$area2=$us['area2'];
	$yarea1=$us['yarea1'];
	$yarea2=$us['yarea2'];
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
		
		switch($us['ulevel']){
				
			case 1:
				$usispaycolor=$ispay1;
				break;
			case 2:
				$usispaycolor=$ispay2;
				break;
			case 3:
				$usispaycolor=$ispay3;
				break;
			case 4:
				$usispaycolor=$ispay4;
				break;
		}		
	}
	//A区
	if ($p1=getFatherManbyFidAndTreeplace($ID,1)){
	    if($benren['ulevel']>=1){
	       
	        $p1NickName="<a href='?ID=".$p1['id']."'>".$p1['nickname']."</a>";
	    }else{
	        $p1NickName=$p1['nickname'];
	    }
		
		$ul=ulevel($p1['ulevel']);
		$p1jibie=$ul['lvname'];
		switch($p1['bdlevel']){
			case 1:$p1jibie="县区店";break;
			case 2:$p1jibie="市级店";break;
		}
		$p1rname=$p1['rname'];
		$p1area1=$p1['area1'];
		$p1area2=$p1['area2'];
		
		$p1yarea1=$p1['yarea1'];
		$p1yarea2=$p1['yarea2'];
		if ($p1['ispay']==0){
			$p1ispaycolor=$nopay;	
		}else{
			
			switch($p1['ulevel']){
			
				case 1:
					$p1ispaycolor=$ispay1;	
					break;
				case 2:
					$p1ispaycolor=$ispay2;	
					break;
				case 3:
					$p1ispaycolor=$ispay3;	
					break;
				case 4:
					$p1ispaycolor=$ispay4;	
					break;
			}	
		}
	}else{
		if($benren['ulevel']>=1){
		$p1NickName="<a href='zhuce_biaodan.php?nickname=".$NickName."&tid=1'>注册</a>";
		}else{
			$p1NickName="空位";
		}
		$p1jibie="空位";
		$p1area1=0;
		$p1area2=0;
		$p1yarea1=0;
		$p1yarea2=0;
	}
	//AA区
	if ($p11=getFatherManbyFidAndTreeplace($p1['id'],1)){
		$p11NickName="<a href='?ID=".$p11['id']."'>".$p11['nickname']."</a>";
		$ul=ulevel($p11['ulevel']);
		$p11jibie=$ul['lvname'];
		switch($p11['bdlevel']){
			case 1:$p11jibie="县区店";break;
			case 2:$p11jibie="市级店";break;
		}
		$p11rname=$p11['rname'];
		$p11area1=$p11['area1'];
		$p11area2=$p11['area2'];
		$p11yarea1=$p11['yarea1'];
		$p11yarea2=$p11['yarea2'];
		if ($p11['ispay']==0){
			$p11ispaycolor=$nopay;	
		}else{
			
			switch($p11['ulevel']){
					
				case 1:
					$p11ispaycolor=$ispay1;	
					break;
				case 2:
					$p11ispaycolor=$ispay2;	
					break;
				case 3:
					$p11ispaycolor=$ispay3;	
					break;
				case 4:
					$p11ispaycolor=$ispay4;	
					break;
			}	
		}
	}else{
		if ($p1['id']==null){
			$p11NickName="空位";	
		}else{
			if($benren['ulevel']>=1){
				$p11NickName="<a href='zhuce_biaodan.php?nickname=".$p1['nickname']."&tid=1'>注册</a>";
				
			}else{
				$p11NickName="空位";
			}
		}	
		$p11jibie="空位";
		$p11area1=0;
		$p11area2=0;
		$p11yarea1=0;
		$p11yarea2=0;
	}
	//AB区
	if ($p12=getFatherManbyFidAndTreeplace($p1['id'],2)){
		$p12NickName="<a href='?ID=".$p12['id']."'>".$p12['nickname']."</a>";
		$ul=ulevel($p12['ulevel']);
		$p12jibie=$ul['lvname'];
		switch($p12['bdlevel']){
			case 1:$p12jibie="县区店";break;
			case 2:$p12jibie="市级店";break;
		}
		$p12rname=$p12['rname'];
		$p12area1=$p12['area1'];
		$p12area2=$p12['area2'];
		$p12yarea1=$p12['yarea1'];
		$p12yarea2=$p12['yarea2'];
		if ($p12['ispay']==0){
			$p12ispaycolor=$nopay;	
		}else{
			
				switch($p12['ulevel']){
							
						case 1:
							$p12ispaycolor=$ispay1;	
							break;
						case 2:
							$p12ispaycolor=$ispay2;	
							break;
						case 3:
							$p12ispaycolor=$ispay3;	
							break;
						case 4:
							$p12ispaycolor=$ispay4;	
							break;
				}	
		}
	}else{
		if ($p1['id']==null){
			$p12NickName="空位";	
		}else{
			if($benren['ulevel']>=1){
			$p12NickName="<a href='zhuce_biaodan.php?nickname=".$p1['nickname']."&tid=2'>注册</a>";	
			}else{
				$p12NickName="空位";
			}
		}	
		$p12jibie="空位";
		$p12area1=0;
		$p12area2=0;
		$p12yarea1=0;
		$p12yarea2=0;
	}
	//B区
	if ($p2=getFatherManbyFidAndTreeplace($ID,2)){
	    if($benren['ulevel']>=1){
		$p2NickName="<a href='?ID=".$p2['id']."'>".$p2['nickname']."</a>";
	    }else{
	        $p2NickName=$p2['nickname'];
	    }
		$ul=ulevel($p2['ulevel']);
		$p2jibie=$ul['lvname'];
		switch($p2['bdlevel']){
			case 1:$p2jibie="县区店";break;
			case 2:$p2jibie="市级店";break;
		}
		$p2rname=$p2['rname'];
		$p2area1=$p2['area1'];
		$p2area2=$p2['area2'];
		$p2yarea1=$p2['yarea1'];
		$p2yarea2=$p2['yarea2'];
		if ($p2['ispay']==0){
			$p2ispaycolor=$nopay;	
		}else{
			
			switch($p2['ulevel']){
					
				case 1:
					$p2ispaycolor=$ispay1;
					break;
				case 2:
					$p2ispaycolor=$ispay2;
					break;
				case 3:
					$p2ispaycolor=$ispay3;
					break;
				case 4:
					$p2ispaycolor=$ispay4;
					break;
			}		
		}
	}else{
		if($benren['ulevel']>=1){
		$p2NickName="<a href='zhuce_biaodan.php?nickname=".$NickName."&tid=2'>注册</a>";
		}else{
			$p2NickName="空位";
		}
		$p2jibie="空位";
		$p2area1=0;
		$p2area2=0;
		$p2yarea1=0;
		$p2yarea2=0;
	}
	//BA区
	if ($p21=getFatherManbyFidAndTreeplace($p2['id'],1)){
		$p21NickName="<a href='?ID=".$p21['id']."'>".$p21['nickname']."</a>";
		$ul=ulevel($p21['ulevel']);
		$p21jibie=$ul['lvname'];
		switch($p21['bdlevel']){
			case 1:$p21jibie="县区店";break;
			case 2:$p21jibie="市级店";break;
		}
		$p21rname=$p21['rname'];
		$p21area1=$p21['area1'];
		$p21area2=$p21['area2'];
		$p21yarea1=$p21['yarea1'];
		$p21yarea2=$p21['yarea2'];
		if ($p21['ispay']==0){
			$p21ispaycolor=$nopay;	
		}else{
			
			switch($p21['ulevel']){
					
				case 1:
					$p21ispaycolor=$ispay1;
					break;
				case 2:
					$p21ispaycolor=$ispay2;
					break;
				case 3:
					$p21ispaycolor=$ispay3;
					break;
				case 4:
					$p21ispaycolor=$ispay4;
					break;
			}	
		}
	}else{
		if ($p2['id']==null){
			$p21NickName="注册";	
		}else{
			if($benren['ulevel']>=1){
			$p21NickName="<a href='zhuce_biaodan.php?nickname=".$p2['nickname']."&tid=1'>注册</a>";	
			}else{
				$p21NickName="空位";
			}
		}	
		$p21jibie="空位";
		$p21area1=0;
		$p21area2=0;
		$p21yarea1=0;
		$p21yarea2=0;
	}
	//BB区
	if ($p22=getFatherManbyFidAndTreeplace($p2['id'],2)){
		$p22NickName="<a href='?ID=".$p22['id']."'>".$p22['nickname']."</a>";
		$ul=ulevel($p22['ulevel']);
		$p22jibie=$ul['lvname'];
		switch($p22['bdlevel']){
			case 1:$p22jibie="县区店";break;
			case 2:$p22jibie="市级店";break;
		}
		$p22rname=$p22['rname'];
		$p22area1=$p22['area1'];
		$p22area2=$p22['area2'];
		$p22yarea1=$p22['yarea1'];
		$p22yarea2=$p22['yarea2'];
		if ($p22['ispay']==0){
			$p22ispaycolor=$nopay;	
		}else{
			
			switch($p22['ulevel']){
					
				case 1:
					$p22ispaycolor=$ispay1;
					break;
				case 2:
					$p22ispaycolor=$ispay2;
					break;
				case 3:
					$p22ispaycolor=$ispay3;
					break;
				case 4:
					$p22ispaycolor=$ispay4;
					break;
			}	
		}
	}else{
		if ($p2['id']==null){
			$p22NickName="注册";	
		}else{
			if($benren['ulevel']>=1){
			$p22NickName="<a href='zhuce_biaodan.php?nickname=".$p2['nickname']."&tid=2'>注册</a>";	
			}else{
				$p22NickName="空位";
			}
		}	
		$p22jibie="空位";
		$p22area1=0;
		$p22area2=0;
		$p22yarea1=0;
		$p22yarea2=0;
	}
	$member = getMemberbyID($_SESSION['ID']);
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

			<table  width="870" height="600" cellpadding="3" cellspacing="1" border="0" align="center" >
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
     
     <!--  
    <td style="background:<?=$ispay?>;" align="center" class="ziti" height="22" >已激活</td>-->
    <td  style="background:<?=$nopay?>;" align="center" class="ziti" height="22">未激活</td>
    </tr>
	<tr>
  </form>
	  <td height="120" colspan="6" align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1" >
	    <tr>
	      <td style="background:<?=$usispaycolor?>"  colspan="2" align="center"><?=$NickName?></td>
        </tr>
        <tr>
	      <td  colspan="2" align="center"><?=$rname?></td>
        </tr>
	    <tr>
	      <td  colspan="2" align="center"><?=$jibie?></td>
        </tr>
	    <tr >
	      <td colspan="2" align="center" >总计</td>
        </tr>
	    <tr >
	      <td  align="center"><?=$area1?></td>
	      <td  align="center"><?=$area2?></td>
        </tr>
        
	   <tr >
	      <td colspan="2" align="center" >结余</td>
        </tr>
	    <tr >
	      <td  align="center"><?=$yarea1?></td>
	      <td  align="center"><?=$yarea2?></td>
        </tr>
       
      </table></td>
    </tr>
	<tr>
    <td height="36" colspan="6" align="center"><img src="../member/images/t_tree_bottom_l.gif"  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="210" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif"  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="210" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" height="30" style="height:30px;"></td>
  </tr>
  <tr>
    <td width="50%" height="103" colspan="2"  align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p1ispaycolor?>" colspan="2" align="center"><?=$p1NickName?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p1rname?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p1jibie?></td>
      </tr>
      <tr >
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p1area1?></td>
        <td  align="center"><?=$p1area2?></td>
      </tr>
      
      <tr >
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p1yarea1?></td>
        <td  align="center"><?=$p1yarea2?></td>
      </tr>
     
    </table></td>
    <td width="50%" colspan="4" align="center"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p2ispaycolor?>" colspan="2" align="center"><?=$p2NickName?></td>
        </tr>
        <tr>
        <td colspan="2" align="center"><?=$p2rname?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p2jibie?></td>
        </tr>
      <tr>
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p2area1?></td>
        <td  align="center"><?=$p2area2?></td>
        </tr>
       
      <tr >
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p2yarea1?></td>
        <td  align="center"><?=$p2yarea2?></td>
        </tr>
        
    </table></td>
  </tr>
  
  <tr>
    <td height="36" colspan="2" align="center"><img src="../member/images/t_tree_bottom_l.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" alt="" height="30" style="height:30px;"></td>
    <td colspan="4" align="center"><img src="../member/images/t_tree_bottom_l.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_top.gif" alt=""  height="30" style="height:30px;"><img src="../member/images/t_tree_line.gif" alt=""  width="120" height="30" style="height:30px;"><img src="../member/images/t_tree_bottom_r.gif" alt="" height="30" style="height:30px;"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p11ispaycolor?>" colspan="2" align="center"><?=$p11NickName?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p11rname?></td>
      </tr>
      <tr>
        <td  colspan="2" align="center"><?=$p11jibie?></td>
      </tr>
      <tr>
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p11area1?></td>
        <td  align="center"><?=$p11area2?></td>
      </tr>
     
      <tr >
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr>
        <td  align="center"><?=$p11yarea1?></td>
        <td  align="center"><?=$p11yarea2?></td>
      </tr>
      
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p12ispaycolor?>" colspan="2" align="center"><?=$p12NickName?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p12rname?></td>
      </tr>
      <tr>
        <td  colspan="2" align="center"><?=$p12jibie?></td>
      </tr>
      <tr>
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p12area1?></td>
        <td  align="center"><?=$p12area2?></td>
      </tr>
     
      <tr >
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p12yarea1?></td>
        <td  align="center"><?=$p12yarea2?></td>
      </tr>
      
    </table></td>
    <td align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p21ispaycolor?>" colspan="2" align="center"><?=$p21NickName?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p21rname?></td>
      </tr>
      <tr>
        <td  colspan="2" align="center"><?=$p21jibie?></td>
      </tr>
      <tr>
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p21area1?></td>
        <td  align="center"><?=$p21area2?></td>
      </tr>
     
      <tr>
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p21yarea1?></td>
        <td  align="center"><?=$p21yarea2?></td>
      </tr>
      
    </table></td>
    <td colspan="3" align="center" valign="top"><table width="120" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p22ispaycolor?>" colspan="2" align="center"><?=$p22NickName?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p22rname?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p22jibie?></td>
      </tr>
      <tr>
        <td colspan="2" align="center" >总计</td>
        </tr>
      <tr>
        <td  align="center"><?=$p22area1?></td>
        <td  align="center"><?=$p22area2?></td>
      </tr>
     
      <tr >
        <td colspan="2" align="center" >结余</td>
        </tr>
      <tr >
        <td  align="center"><?=$p22yarea1?></td>
        <td  align="center"><?=$p22yarea2?></td>
      </tr>
      
    </table></td>
  </tr>
 
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
      <!-- /span9 -->            
     
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<div class="container" id="footer">
  <p>Copyright 2015-2025 乐游城会员管理系统 版权所有</p>
</div>
<!-- /container -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/excanvas.min.js"></script>
<script src="./js/jquery.flot.js"></script>
<script src="./js/jquery.flot.pie.js"></script>
<script src="./js/jquery.flot.orderBars.js"></script>
<script src="./js/jquery.flot.resize.js"></script>
<script src="./js/bootstrap.js"></script>

</body>
</html>
