<?php
include("check.php");
include_once("../class/system_class.php");
include_once("../class/member_class.php");
include_once("../class/ulevel_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
$_member=new member_class();
$my=$_member->getMemberbyID($_SESSION['ID']);
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname='".$SearchContent."'";
		}elseif($SearchType==2){
			#搜索姓名
			$_SESSION['Search']="and username='".$SearchContent."'";
		}
	}else{
		$_SESSION['Search']=NULL;	
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		$_SESSION['SearchTime']=NULL;
	}
}

#删除会员
if ($_POST['button2']){
	$cheuid_arr = $_GET['id'];
	$_member=new member_class();
	foreach ((array)$cheuid_arr as $id)
	{
		if ($_member->checkfman($id)){
    		edit_delete_cl('member',$id);
		}else{
			$us=$_member->getMemberbyID($id);
			echo "<script language=javascript>alert('会员".$us['nickname']."下方已经安置了会员,删除失败.');window.location.href='?'</script>";	
		}
	}
	echo "<script language=javascript>alert('删除会员完成.');window.location.href='?'</script>";
}

if($_POST['button3']){
	$cheuid_arr = $_GET['id'];
	$_member=new member_class();
	$bonus_cl=new bonus_class();
	
	$sql="select id,nickname,userid,dan,ispay,lsk,bdid,reid from member where id=$cheuid_arr";
	
	$sql2="select id,nickname,userid,zsq,username from member where id=".$_SESSION['ID']."";
	
	
    	if($us=getOne($sql)){
    		
    			
			if($me=getOne($sql2)){
				if ($us['bdid']==$me['id']){
					if ($us['ispay']==0){
						if ($me['zsq']>=$us['lsk']){
						
				            $me_update['zsq']=$me['zsq']-$us['lsk'];
							edit_update_cl('member',$me_update,$me['id']);
							$bonus_cl->bonus_laiyuan($me['id'],$me['nickname'],$id,$us['nickname'],8,$us['lsk'],"激活扣币");
    				       // $bonus_cl->dianbu($us['id']);
    						
							$_member->addbdrecord($us,$me,$us['lsk']);
							$_member->jihuomember($us['id']);
							
							
							
							
							
							echo "<script language=javascript>alert('会员激活完成.');window.location.href='?'</script>";
								
							}else{
								echo "<script language=javascript>alert('您的积分余额不足,激活失败.');window.location.href='?'</script>";
							}
					}else{
					   echo "<script language=javascript>alert('该会员已经激活.');window.location.href='?'</script>";	
				    }
				}else{
					echo "<script language=javascript>alert('您不是该会员的服务中心,无法激活该会员.');window.location.href='?'</script>";	
				}	
			}
			
		}else{
			alert("找不到当前会员信息,可能已被删除,请检查后再试.");		
		}
	
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>服务中心</title>
<SCRIPT type="text/javascript">
	function sel(){
		
	}
</SCRIPT>
</head>
<body>

<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
		<tr>
        <td height="10" colspan="11" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
            <option value="2">会员姓名</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="button_blue" value="搜  索"></td>
      </tr>
      <tr>
        <td height="10" colspan="11" align="center">积分：<?=$my['zsq']?></td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">投资金额</td>
        <td align="center">会员资格</td>
        <td align="center">推荐人</td>
        <td align="center">接点人</td>
        <td align="center">联系电话</td>
        <td align="center">报单时间</td>
        <td align="center">操作</td>
    </tr>
       <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID']." and ispay=0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
		if($query = mysql_query($sql)){
	  		$sum = mysql_num_rows($query); //计算总记录数 
		}else{
			$sum=0;	
		} 
		if($sum % $pagesize == 0) //计算总页数 
			$total = (int)($sum/$pagesize); 
		else 
			$total = (int)($sum/$pagesize) + 1; 
			if (isset($_GET['page'])) //获得页码 
			{ 
				$p = (int)$_GET['page'];
			} 
			else 
			{ 
				$p = 1;
			}
			if ($p>$total){
				$p=$total;	
			}
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID']." ".$_SESSION['Search']." and ispay=0 ".$_SESSION['SearchTime']." ORDER BY rdt asc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
	  ?>
	  <tr>
      <form name="form1" method="post" action="?id=<?=$row['id']?>">
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['lsk']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
        <td align="center"><?=$row['fathername']?></td>
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['rdt']?></td>
        <td align="center">
        <input name="button3" type="submit" class="button_green" id="button3" value="激  活" onClick="{if(confirm('您确定要激活该会员吗?')){this.document.selform.submit();return true;}return false;}" ></input>      
        <input name="button2" type="submit" class="button_red" id="button" value="删  除" onClick="{if(confirm('您确定要删除该会员吗?')){this.document.selform.submit();return true;}return false;}"></td>
      	</form>
      </tr>
     
      <?php
			}
		}
	  ?>
       
    </table>
    <table width="100%" border="0" class="ziti">
  <tr>
        <td colspan="3" align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
    </tr>
</table>


</body>
</html>