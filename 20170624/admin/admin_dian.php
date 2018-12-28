<?php
include("admin_check.php");
include_once("../class/member_class.php");
include_once("action.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,3);
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

if($_POST['button']){
	if($_POST['id']){
		$_member=new member_class();
		$us=$_member->getMemberbyID($_POST['id']);
		$member['mey']=$us['mey']+$_POST['sqmey'];
		$member['zsq']=$us['zsq']+$_POST['sqbdje'];
		$member['sgb']=$us['sgb']+$_POST['sgb'];
		if((int)$_POST['sqmey']!=0){
			action::record("奖金币", $us['id'], $_SESSION['adminid'], (int)$_POST['sqmey']);
		}
		if((int)$_POST['sqbdje']!=0){
		    action::record("积分", $us['id'], $_SESSION['adminid'], (int)$_POST['sqbdje']);
		}
		if((int)$_POST['sgb']!=0){
		    action::record("报单消费币", $us['id'], $_SESSION['adminid'], (int)$_POST['sgb']);
		}
		if($us['isbd']>=2){
		    edit_update_cl('member',$member,$us['id']);
		    alert('操作成功','?');
		}else{
		
		
		$b=new bonus_class();
		
		$member['bdnickname']=$_POST['bdnickname'];
		$member['usertel']=$_POST['usertel'];
		$member['bdlevel']=$_POST['bdlevel'];
		$member['isbd']=3;
		
		edit_update_cl('member',$member,$us['id']);
		alert('确认成功.','?');
		}
	}else{
		alert('设置出错,确认失败.','?');	
	}
}

if($_POST['button2']){
	if($_POST['id']){
		if ($_POST['id']>1){
			$member['isbd']=0;
			$member['bdlevel']=0;
			//edit_update_cl('member',$member,$_POST['id']);
			$sql="SELECT * FROM `member` WHERE id=".$_POST['id']."";
			if ($query=mysql_query($sql)){
				while($row=mysql_fetch_array($query)){
					if($row['isbd']<2){
						//$_member['bdid']=1;
						//$_member['bdname']="admin";
						
						edit_update_cl('member',$member,$row['id']);
						alert('删除成功.','?');
					}else{
						
						alert('无法删除.','?');
					}
					
				}
			}
			
		}else{
			alert('删除失败,管理员服务中心禁止删除.','?');
		}
	}else{
		alert('设置出错,删除失败.','?');	
	}
}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>服务中心</title>
</head>
<body>

<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
		<form name="form1" method="post" action="?">
		<tr>
        <td height="10" colspan="12" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
            <option value="2">会员姓名</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索"></td>
      </tr>
      </form>
      <tr>
        <td height="10" colspan="12" align="center">服务中心</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td style="display:none" align="center">联系电话</td>
        <td style="display:none" align="center">服务中心名称</td>
        <td  align="center">级别</td>
        <td align="center">负责地区</td>
        <td style="display:none" align="center">备注</td>
        <td align="center">奖金/积分</td>
        <td align="center">增减奖金</td>
        <td " align="center">增减报单消费币</td>
        <td align="center">增减积分</td>
        
        <td align="center">操作</td>
    </tr>
       <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE isbd>0 and bdlevel>0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `member` WHERE isbd>0 and bdlevel>0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by isbd,id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <form name="form1" method="post" action="?">
      
      <?php
      	if ($row['isbd']==1){
			$_color="#FF0000";	
		}else{
			$_color="";	
		}
	  ?>
      <tr>
        <td style="background:<?=$_color?>" align="center"><input name="id" type="hidden" value="<?=$row['id']?>"><?=$row['nickname']?></td>
        <td  align="center"><?=$row['username']?></td>
        <td style="display:none" align="center"><input name="usertel" type="text" value="<?=$row['usertel']?>" size="9" style="display:none"><?=$row['usertel']?></td>
        <td style="display:none" align="center"><input name="bdnickname" type="text" value="<?=$row['bdnickname']?>" size="18"></td>
        <td  align="center">
        <?php if($row['bdlevel']==1){echo "县区店";}?>
           <?php if($row['bdlevel']==2){ echo "市级店";
           }?>
        <input type="hidden" name="bdlevel" value="<?php echo $row['bdlevel'];?>"/>
        </td>
        <td align="center"><?
       echo lol($row['bddiqu'],$row['bdlevel']);
        ?></td>
        <td style="display:none" align="center"><?=$row['bdbeizhu']?></td>
        <td align="center"><?=$row['mey']?>/<?=$row['zsq']?></td>
        <td align="center"><input name="sqmey" type="text" value="0" size="5" maxlength="20"></td>
        <td align="center"><input name="sgb" type="text" value="0" size="5" maxlength="20"></td>
        <td align="center"><input name="sqbdje" type="text" value="<?=0//$row['sqbdje']?>" size="5" maxlength="20"></td>
        
        <td align="center">
        <input name="button" type="submit" class="btn2" id="button" value="保存">&nbsp;&nbsp;
        <input name="button2" type="submit" class="btn3" id="button" value="删除" onClick="{if(confirm('您确定要删除该记录吗?')){this.document.selform.submit();return true;}return false;}">
        </td>
      </tr>
      </form>
      <?php
			}
		}
	  ?>
      <tr>
        <td colspan="12" align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
    </tr>
    </table>
</body>
</html>