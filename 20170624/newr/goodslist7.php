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
$_member_cl=new member_class();
$_bonus_cl=new bonus_class();

if($_POST['button3']){
		$username=$member['username'];
		$usertel=$member['usertel'];
		$useraddress=$member['useraddress'];
		if ($member['cy']==0) {
			
		
		$_POST['UID']=$_GET['id'];
		
		if($_POST['UID']==""){
			alert("请选择商品","?");
			return;
		}else{
			
				$rs=getOne("select * from goods where id={$_POST['UID']}");
				
				if ($you=getOne("select * from buycar where goodid={$_POST['UID']} and uid=".$_SESSION['ID']."")) {
					
					alert("已经加入购物车，请勿重复添加","?");
				}else {
			  
					$buycar['uid']=$member['id'];
					$buycar['nickname']=$member['nickname'];
					$buycar['goodid']=$rs['id'];
					$buycar['num']=$_POST[$rs['id']."num"];
					add_insert_cl('buycar',$buycar);
					alert("成功加入购物车","?");
				}
			
	
		}
		
		}else {
			alert("每个会员只能购物一次","?");
			return;
		}	
		
		
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
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
            <h1>购物</h1>
          </div>
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

<form name="form1" method="post" action="?" >	
<div class="ziti"><select name="SearchType" id="SearchType">
            <option value="1">商品名称</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="button_blue" value="搜  索"></div>  
</form>  
<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
<tr>
       
        <td height="30" align="center" >产品图片</td>
        <td height="30" align="center" >产品名称</td>
        <td height="30" align="center" >经销商</td>
        <td align="center" >价格</td>

        <td align="center" >库存</td>
        <td align="center" >购买数量</td>
        <td align="center" >总价格</td>

        <td align="center" >查看详细</td>
       
        <td align="center" >操作</td>
      </tr>
 		<?php
	  	$pagesize = 100; //设置每页记录数 
	  	$sql = "SELECT * FROM `goods` WHERE isdisplay=1 and lx=2 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
	  	
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
      	$sql = "SELECT * FROM `goods` WHERE isdisplay=1 and lx=2 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by shunxu,id limit ".$start.",".$pagesize;
		
		if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
			?>
	  
      <tr>
      	<form name="form1" method="post" action="?id=<?=$row['id']?>" >	
        <td height="80" width="80" align="center" ><img src='../upload/<?=$row['goodsimg']?>' width=80 height=80 border=0></td>
        <td align="center" width="120"><?=$row['goodsname']?></td>
        <td align="center" ><?=$row['nickname']?></td>
       
        <td align="center" ><?=$row['price']?></td>

        <td align="center" ><?=$row['kucun']?></td>
        <td align="center" ><input name="<?=$row['id']?>num" id="<?=$row['id']?>num" type="text" value="0" size="4" onKeyUp="jiage(this,<?=$row['id']?>);" style="width:50px;">        
        <input name="<?=$row['id']?>" id="<?=$row['id']?>" type="hidden" value="<?=$row['price']?>"></td>
        <td align="center" ><label name="<?=$row['id']?>zong" id="<?=$row['id']?>zong">0</label></td> 
       
        <td align="center" ><a href='goodscontent.php?id=<?=$row['id']?>' style='text-decoration:none'>查看</a></td>
        <td align="center"><input name="button3" type="submit"  class="button_green" id="button3" value="加入购物车" onClick="{if(confirm('您确定要加入购物车吗?')){this.document.selform.submit();return true;}return false;}" ID=<?=$row['id']?>/>
        </form>
      </tr>
     
	  <?php
      		}
		}
	  ?>

     
      <tr>
        <td height="21" colspan="9" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="center" colspan="3">
            <?php if ($member['cy']==0) {?>
            <a href='goodslist3.php?id=<?=$row['id']?>' style='text-decoration:none'><font style="font-size:16px;color:#FF0000;">购物车结算</font> </a>
            <?php }?>
            </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
            </tr>
        </table></td>
      </tr>
    </table>
    
</div>
</div>

               </div>	  

      </div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<?php include 'footer.php';?>
</body>
</html>