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
		if ($chaus=getMemberbyNickName2($_POST['nickname'])){
			if(checkisppath2($_SESSION['ID'],$chaus['id'])){
				$ID=$chaus['id'];
			}else{
				echo "<script language=javascript>alert('a您的网络中不存在该成员.');window.location.href='?'</script>";		
			}
		}else{
			echo "<script language=javascript>alert('b您的网络中不存在该成员.');window.location.href='?'</script>";	
		}
	}else{
		if ($_GET['ID'] == null){
			$ID=$_SESSION['ID'];
		}else if($_GET['ID'] == $_SESSION['ID']){ 
			$ID=$_SESSION['ID'];
		}else{
			if(checkisppath2($_SESSION['ID'],$_GET['ID'])){
				$ID=$_GET['ID'];
			}else{
				echo "<script language=javascript>alert('c您的网络中不存在该成员.');window.location.href='?'</script>";		
			}
		}	
	}
}

$benren=getMemberbyID2($_SESSION['ID']);		//$benren是登录的会员
$member=$benren;
$ull=ulevel($benren['ulevel']);
	$ispay="#00CD00";
	$nopay="#00EEEE";
	$nore="#A3CDF8";
	session_start();
	//var_dump($benren['id']);var_dump($ID);
	if ($benren['uid']==$ID) {
		
		$us=getMemberbyID2($ID);
		
	}else {
		
		$us=getMemberbyID22($ID);
	}
	

	$UserID=$us['id'];
	
	$NickName=$us['nickname'];
	$UserName=$us['username'];
	$uLevel=$us['ulevel'];
	$area1=$us['area1'];
	$area2=$us['area2'];
	$area3=$us['area3'];
	$area4=$us['area4'];
	$area5=$us['area5'];
	
	$yarea1=$us['yarea1'];
	$yarea2=$us['yarea2'];
	$yarea3=$us['yarea3'];
	$yarea4=$us['yarea4'];
	$yarea5=$us['yarea5'];

	$rname=$us['rname'];
	$ul=ulevel($uLevel);
	
	$jibie=$ul['lvname'];

	if ($us['ispay']==0){
		$usispaycolor=$nopay;	
	}else{
		$usispaycolor=$ispay;		
	}
	//A区
	if ($p1=getFatherManbyFidAndTreeplace2($UserID,1)){
	    if($benren['ulevel']>=0){													//会员等级大于等于0才能注册会员
	        $p1NickName="<a href='?ID=".$p1['id']."'>".$p1['nickname']."</a>";
	    }else{
	        $p1NickName=$p1['nickname'];
	    }
		
		$ul=ulevel($p1['ulevel']);
		$p1jibie=$ul['lvname'];

		$p1rname=$p1['rname'];
		$p1area1=$p1['area1'];
		$p1area2=$p1['area2'];
		$p1area3=$p1['area3'];
		$p1area4=$p1['area4'];
		$p1area5=$p1['area5'];
		
		$p1yarea1=$p1['yarea1'];
		$p1yarea2=$p1['yarea2'];
		$p1yarea3=$p1['yarea3'];
		$p1yarea4=$p1['yarea4'];
		$p1yarea5=$p1['yarea5'];
	
		if ($p1['ispay']==0){
			$p1ispaycolor=$nopay;	
		}else{
			$p1ispaycolor=$ispay;		
		}
	}else{
		
			$p1NickName="空位";
		
		$p1jibie="空位";
		$p1area1=0;
		$p1area2=0;
		$p1area3=0;
		$p1area4=0;
		$p1area5=0;
		
		$p1yarea1=0;
		$p1yarea2=0;
		$p1yarea3=0;
		$p1yarea4=0;
		$p1yarea5=0;
		
	}

	//B区
	if ($p2=getFatherManbyFidAndTreeplace2($UserID,2)){
	    if($benren['ispay']>=0){
		$p2NickName="<a href='?ID=".$p2['id']."'>".$p2['nickname']."</a>";
	    }else{
	        $p2NickName=$p2['nickname'];
	    }
		$ul=ulevel($p2['ulevel']);
		$p2jibie=$ul['lvname'];

		$p2rname=$p2['rname'];
		$p2area1=$p2['area1'];
		$p2area2=$p2['area2'];
		$p2area3=$p2['area3'];
		$p2area4=$p2['area4'];
		$p2area5=$p2['area5'];
		
		$p2yarea1=$p2['yarea1'];
		$p2yarea2=$p2['yarea2'];
		$p2yarea3=$p2['yarea3'];
		$p2yarea4=$p2['yarea4'];
		$p2yarea5=$p2['yarea5'];
		
		if ($p2['ispay']==0){
			$p2ispaycolor=$nopay;	
		}else{
			$p2ispaycolor=$ispay;		
		}
	}else{
		
			$p2NickName="空位";
	
		$p2jibie="空位";
		$p2area1=0;
		$p2area2=0;
		$p2area3=0;
		$p2area4=0;
		$p2area5=0;
		$p2area6=0;
		$p2area7=0;
		$p2area8=0;
		$p2area9=0;
		$p2area10=0;
		$p2yarea1=0;
		$p2yarea2=0;
		$p2yarea3=0;
		$p2yarea4=0;
		$p2yarea5=0;
		$p2yarea6=0;
		$p2yarea7=0;
		$p2yarea8=0;
		$p2yarea9=0;
		$p2yarea10=0;
	}

	//C区
	if ($p3=getFatherManbyFidAndTreeplace2($UserID,3)){
		if($benren['ispay']>=0){
			$p3NickName="<a href='?ID=".$p3['id']."'>".$p3['nickname']."</a>";
		}else{
			$p3NickName=$p3['nickname'];
		}
		$ul=ulevel($p3['ulevel']);
		$p3jibie=$ul['lvname'];

		$p3rname=$p3['rname'];
		$p3area1=$p3['area1'];
		$p3area2=$p3['area2'];
		$p3area3=$p3['area3'];
		$p3area4=$p3['area4'];
		$p3area5=$p3['area5'];
		
		$p3yarea1=$p3['yarea1'];
		$p3yarea2=$p3['yarea2'];
		$p3yarea3=$p3['yarea3'];
		$p3yarea4=$p3['yarea4'];
		$p3yarea5=$p3['yarea5'];
		
		if ($p3['ispay']==0){
			$p3ispaycolor=$nopay;
		}else{
			$p3ispaycolor=$ispay;
		}
	}else{
		
			$p3NickName="空位";
	
		$p3jibie="空位";
		$p3area1=0;
		$p3area2=0;
		$p3area3=0;
		$p3area4=0;
		
		$p3yarea1=0;
		$p3yarea2=0;
		$p3yarea3=0;
		$p3yarea4=0;
		
	}
	//d区
	if ($p4=getFatherManbyFidAndTreeplace2($UserID,4)){
		if($benren['ispay']>=0){
			$p4NickName="<a href='?ID=".$p4['id']."'>".$p4['nickname']."</a>";
		}else{
			$p4NickName=$p4['nickname'];
		}
		$ul=ulevel($p4['ulevel']);
		$p4jibie=$ul['lvname'];
		
		$p4rname=$p4['rname'];
		$p4area1=$p4['area1'];
		$p4area2=$p4['area2'];
		$p4area3=$p4['area3'];
		$p4area4=$p4['area4'];
		$p4area5=$p4['area5'];
		
		$p4yarea1=$p4['yarea1'];
		$p4yarea2=$p4['yarea2'];
		$p4yarea3=$p4['yarea3'];
		$p4yarea4=$p4['yarea4'];
		$p4yarea5=$p4['yarea5'];
	
		if ($p4['ispay']==0){
			$p4ispaycolor=$nopay;
		}else{
			$p4ispaycolor=$ispay;
		}
	}else{
		
			$p4NickName="空位";
	
		$p4jibie="空位";
		$p4area1=0;
		$p4area2=0;
		$p4area3=0;
		$p4area4=0;
		$p4area5=0;
		
		$p4yarea1=0;
		$p4yarea2=0;
		$p4yarea3=0;
		$p4yarea4=0;
		$p4yarea5=0;
		
	}
	//E区
	if ($p5=getFatherManbyFidAndTreeplace2($UserID,5)){
		if($benren['ispay']>=0){
			$p5NickName="<a href='?ID=".$p5['id']."'>".$p5['nickname']."</a>";
		}else{
			$p5NickName=$p5['nickname'];
		}
		$ul=ulevel($p5['ulevel']);
		$p5jibie=$ul['lvname'];
		
		$p5rname=$p5['rname'];
		$p5area1=$p5['area1'];
		$p5area2=$p5['area2'];
		$p5area3=$p5['area3'];
		$p5area4=$p5['area4'];
		$p5area5=$p5['area5'];
		
		$p5yarea1=$p5['yarea1'];
		$p5yarea2=$p5['yarea2'];
		$p5yarea3=$p5['yarea3'];
		$p5yarea4=$p5['yarea4'];
		$p5yarea5=$p5['yarea5'];
		
		if ($p5['ispay']==0){
			$p5ispaycolor=$nopay;
		}else{
			$p5ispaycolor=$ispay;
		}
	}else{
		
			$p5NickName="空位";
		
		$p5jibie="空位";
		$p5area1=0;
		$p5area2=0;
		$p5area3=0;
		$p5area4=0;
		$p5area5=0;
		
		$p5yarea1=0;
		$p5yarea2=0;
		$p5yarea3=0;
		$p5yarea4=0;
		$p5yarea5=0;
		
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
	
    <td height="22" colspan="8" class="ziti">查询会员：
      
        <input type="text" name="nickname" id="nickname">
      <input name="submin" type="submit" class="btn" id="submin" value="查  询" style=" margin-top:-10px;">
     
     <?php
     	if ($ID != $_SESSION['ID']){
	 ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?ID=<?=$_SESSION['ID']?>">返回顶层</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back(-1)">返回上一层</a>
     <?php
		}
	 ?>
     </td>
   
   
    </tr>
	
  </form>
	  <td height="120" colspan="14" align="center"><table width="230" cellpadding="3" cellspacing="1" border="0" align="center" class="table1" >
	    <tr>
	      <td style="background:<?=$usispaycolor?>"  colspan="11" align="center"><?=$NickName?></td>
        </tr>
        <tr>
	      <td  colspan="11" align="center"><?=$rname?></td>
        </tr>
	    <tr>
	      <td  colspan="11" align="center"><?=$jibie?></td>
        </tr>
	   
	   
      </table></td>
   
	<tr>
    <td height="36" colspan="28" align="center">
    <img src="../member/images/t_tree_bottom_l.gif"  height="30" style="height:30px;">
    <img src="../member/images/t_tree_line.gif" alt=""  width="490" height="30" style="height:30px;">
    <img src="../member/images/t_tree_top.gif"  height="30" style="height:30px;">
    <img src="../member/images/t_tree_line.gif" alt=""  width="490" height="30" style="height:30px;">
    <img src="../member/images/t_tree_bottom_r.gif" height="30" style="height:30px;"></td>
  </tr>
  <tr>
    <td width="50%" height="103" colspan="3"  align="center"><table width="220" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p1ispaycolor?>" colspan="11" align="center"><?=$p1NickName?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p1rname?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p1jibie?></td>
      </tr>
      
     
    </table></td>
    <td width="50%" height="103" colspan="3" align="center"><table width="220" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p2ispaycolor?>" colspan="11" align="center"><?=$p2NickName?></td>
        </tr>
        <tr>
        <td colspan="2" align="center"><?=$p2rname?></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><?=$p2jibie?></td>
        </tr>
     
      
    </table></td>
    <td width="50%" height="103" colspan="3"  align="center"><table width="220" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p3ispaycolor?>" colspan="11" align="center"><?=$p3NickName?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p3rname?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p3jibie?></td>
      </tr>
     
     
    </table></td>
    <td width="50%" height="103" colspan="3"  align="center"><table width="220" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p4ispaycolor?>" colspan="11" align="center"><?=$p4NickName?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p4rname?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p4jibie?></td>
      </tr>
     
     
    </table></td>
    <td width="50%" height="103" colspan="3"  align="center"><table width="220" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td style="background:<?=$p5ispaycolor?>" colspan="11" align="center"><?=$p5NickName?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p5rname?></td>
      </tr>
      <tr>
        <td colspan="6" align="center"><?=$p5jibie?></td>
      </tr>
     
     
      </table></td>
    
  </tr>
  
  <?php 
  if($benren['ulevel']>=0){}?>
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
