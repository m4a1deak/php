<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
include_once("../class/member_class.php");
include_once("../class/bonus_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

function printTable($_id,$_goodsimg,$_goodsname,$_price){
	echo "<table height=266 border=0 style='width:200px;height:240px;border-left: #0FF solid 1px; border-right: #0FF solid 1px; border-bottom:#0FF solid 1px; border-top:#0FF solid 1px; float:left; margin:8px;'>";
    echo "<tr>";
    echo "<td><a href='goodscontent.php?id=".$_id."' style='text-decoration:none'><img src=../upload/".$_goodsimg." width=200 height=200 border=0></a></td>";
    echo "</tr>";
  	echo "<tr>";
    echo "<td height=20 align=center><strong>".$_goodsname."</strong></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td height=20>价格：<font color=#FF0000>￥".$_price."</font></td>";
  	echo "</tr>";
	echo "</table>";
}

#搜索商品
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索商品名称
			$_SESSION['Search']="and goodsname like '%".$SearchContent."%'";
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

$member=getMemberbyID($_SESSION['ID']);

$_bonus_cl=new bonus_class();
if($_POST['button3']){
	$username=$_POST['username'];
	$usertel=$_POST['usertel'];
	$useraddress=$_POST['useraddress'];
	if($member['ispay']==0){
		alert("会员未激活，无法购物","?");
		return;
	}
	if($_POST['UID']==""){
		alert("请选择商品","?");
		return;
	}else{
		foreach($_POST['UID'] as $v){
			$rs=getOne("select * from goods where id={$v}");
			$arr[$rs['id']]=array("id"=>$rs['id'],"goodsname"=>$rs['goodsname'],"num"=>$_POST[$rs['id']."num"],"price"=>$rs['price']);
			if($_POST[$rs['id']."num"]==0){//是否输入商品数量
				alert("请输入商品数量","?");
				return;
			}else{
					$price=$rs['price']*$_POST[$rs['id']."num"];//商品数量的总价格
					//积分+代金券结算
						$dianzi+=0;
						$daijin+=$price;
						if($member['cfxf']<$daijin){
							alert("复投币不足","?");
							return;
						}
					
				}
			}
		
		}
		foreach($_POST['UID'] as $vf){
			$rs=getOne("select * from goods where id={$vf}");
			$goods_update['kucun']=$rs['kucun']-$_POST[$rs['id']."num"];
			$goods_update['sales']=$rs['sales']+$_POST[$rs['id']."num"];
			
			edit_update_cl('goods',$goods_update,$rs['id']);
		}
		$member_update['cfxf']=$member['cfxf']-$daijin;
		$lsk=$daijin;
		$FileID=store($member['id'],$arr,$member,$member_update,$lsk,$username,$useraddress,$usertel);
		$_email=new email_class();
		$email=$_email->getemail();
		if ($email['ddtzadmin']==1){
			$title="会员订单";
			$content="管理员您好,会员".$member['nickname']."于".now()."向公司购买产品,订单编号：".$FileID."";
			$_email->sendemail($email['emailuser'],$email['emailname'],$title,$content);
		}
		
		alert("购买成功","?");
		echo "<script type='text/javascript'>window.parent.location.reload();</script>";
	}



?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>购物商城</title>
<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
function jiage(numname,pic){
	var price=document.getElementById(pic).value
	var zong=numname.value*price;
	document.getElementById(pic+"zong").innerText=zong;
	zongjiage=0;
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		if (e.checked==true){
			var jiage=document.getElementById(e.value).value;
			var shuangliang=document.getElementById(e.value+"num").value;
			zongjiage=zongjiage+jiage*shuangliang;
		}
	}
	document.getElementById("zongjiage").innerText=zongjiage;
}
function check(objName){ 
	 var o=document.getElementsByName(objName) 
	 for(i=0;i<o.length;i++)if(o[i].checked)return; 
	 alert("请选择一种商品");
	 } 

function zjiage(){
	zongjiage=0;
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		if (e.checked==true){
			var jiage=document.getElementById(e.value).value;
			var shuangliang=document.getElementById(e.value+"num").value;
			zongjiage=zongjiage+jiage*shuangliang;
		}
	}
	document.getElementById("zongjiage").innerText=zongjiage;
}
-->
</script>
<style type="text/css">
*{margin:0; padding:0; font-size:12px;}
#tablit {margin:0px;width:100%; height:400; border:#BCE2F3 1px solid;padding-top:10px;background:#E4F2FB;}
#tablit dl{ float:left; width:100%;}
#tablit dl dt{float:left;border-bottom:#64B8E4 1px solid; width:15px; height:31px; line-height:30px;}
#tablit dl dd{float:left;width:110px;height:30px; line-height:30px; text-align:center;}
#tablit .on{
	border:#64B8E4 1px solid;
	border-bottom:#FFF 1px solid;
	color:#FF6600;
	font-weight: bold;
}
#tablit .out{
	border:#64B8E4 1px solid;
	color:#000;
	background:#64B8E4;
	font-weight: bold;
}
.tabcon{width:99%; height:365px; clear:both;}
.dis{display:none;}
</style>
</head>
<body>
<form name="form1" method="post" action="?">
<div class="ziti"><select name="SearchType" id="SearchType">
            <option value="1">商品名称</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="button_blue" value="搜  索"></div>    
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
 		<tr>
        <td height="30" align="center" >选择</td>
        <td height="30" align="center" >产品图片</td>
        <td height="30" align="center" >产品名称</td>
        <td align="center" >价格</td>
<!--        <td align="center" >重消价格</td>  -->
        <td align="center" >库存</td>
        <td align="center" >购买数量</td>
        <td align="center" >总价格</td>
<!--         <td align="center" >大小杯</td>-->
        <td align="center" >查看详细</td>
      </tr>
 		<?php
	  	$pagesize = 100; //设置每页记录数 
	  	$sql = "SELECT * FROM `goods` WHERE isdisplay=1 and lx=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
	  	
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
      	$sql = "SELECT * FROM `goods` WHERE isdisplay=1 and lx=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by shunxu,id limit ".$start.",".$pagesize;
		
		if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
			?>	
		
      <tr>
      	<td align="center" ><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>" onClick="zjiage();"></td>
        <td height="80" width="80" align="center" ><img src='../upload/<?=$row['goodsimg']?>' width=80 height=80 border=0></td>
        <td align="center" ><?=$row['goodsname']?></td>
        <td align="center" ><?=$row['price']?></td>
<!--        <td align="center" ><?=$row['price2']?></td>  -->
        <td align="center" ><?=$row['kucun']?></td>
        <td align="center" ><input name="<?=$row['id']?>num" id="<?=$row['id']?>num" type="text" value="0" size="4" onKeyUp="jiage(this,<?=$row['id']?>);">        
        <input name="<?=$row['id']?>" id="<?=$row['id']?>" type="hidden" value="<?=$row['price']?>"></td>
       <td align="center" ><label name="<?=$row['id']?>zong" id="<?=$row['id']?>zong">0</label></td> 
        
        <td align="center" ><a href='goodscontent.php?id=<?=$row['id']?>' style='text-decoration:none'>查看</a></td>
      </tr>
	  <?php
      		}
		}
	  ?>
	  	<tr>
	  <td align="left" colspan="3"> <strong><font color="#FF0000">收货人</font></strong><input name="username" type="text"  ></td>
	  <td align="left" colspan="3"> <strong><font color="#FF0000">联系电话</font></strong><input name="usertel" type="text"  ></td>
	  <td align="left" colspan="3"> <strong><font color="#FF0000">收货地址</font></strong><input name="useraddress" type="text"  ></td>
      </tr>
      <tr><td colspan="7"><input name="button3" type="submit" class="button_green" id="button3" value="购买" onClick=" if(confirm('您确定要购买商品吗?')){this.document.selform.submit();return true;}return false;">  </td>
        <td>总计金额：<label name="zongjiage" id="zongjiage">0</label></td>
      </tr>
      <tr>
        <td height="21" colspan="9" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
            </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>