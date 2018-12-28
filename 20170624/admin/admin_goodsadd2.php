<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>添加注册套餐</title>
<?php
include("admin_check.php");
include_once("../function.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(4,12);
if ($_POST['button']){

		$goods['goodsname']=$_POST['goodsname'];
		$goods['price']=$_POST['price'];
//		$goods['price2']=$_POST['price'];
// 		$goods['pv']=$_POST['pv'];
		$goods['lx']=2;
		$goods['gdate']=now();
		$goods['kucun']=999999999;
		echo add_insert_cl('goods2',$goods);
		echo "<script language=javascript>alert('添加商品成功.');window.location.href='admin_goodsadd2.php'</script>";	

}
if ($_POST['del']){
	edit_delete_cl("goods2",$_POST['id']);
	echo "<script language=javascript>alert('删除商品成功.');window.location.href='admin_goodsadd2.php'</script>";

}
?>
<script language="javascript">
<!--
function CheckForm(){
	goodsname=document.form1.goodsname.value;
	price=document.form1.price.value;
	goodscontent=document.form1.content1.value;
	if(goodsname.length == 0){
		alert("温馨提示:\n请输入商品名称.");
		document.form1.goodsname.focus();
		return false;
	}
	if(price <= 0){
		alert("温馨提示:\n商品价格必须大于0.");
		document.form1.price.focus();
		return false;
	}
	return true;
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();" > 
<table  width="80%" height="200" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td height="21" colspan="2" align="center">添加商品积分</td>
    </tr>
  <tr>
    <td height="22" align="right">商品名称：</td>
    <td align="left"><input name="goodsname" type="text" id="goodsname" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="right">商品积分：</td>
    <td align="left"><input name="price" type="text" id="price" size="20" maxlength="50"></td>
  </tr>
  <tr style="display: none">
    <td height="22" align="right">pv值：</td>
    <td align="left"><input name="pv" type="text" id="pv" size="20" maxlength="50"></td>
  </tr>
<tr>
    <td colspan="2" align="center">
      <table align="center" height="22">
        <tr>
          <td><input name="button" id="button" type="submit" class="btn2" value="添加"></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
<br>
<br>
<?php 
	$sql = "select * from goods2 where lx = 2 order by id";
	$result = mysql_query($sql);
?>
<table width="80%" height="20" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    	<td height="21" colspan="7" align="center">商品积分</td>
    </tr>
	<tr>
		<td height="21" colspan="2" align="center">名称</td>
		<td height="21" colspan="2" align="center">积分</td>
		<td style="display: none" height="21" colspan="2" align="center">pv值</td>
		<td height="21" colspan="2" align="center">操作</td>
	</tr>
	<?php 
		while ($row=mysql_fetch_assoc($result)){
	?>
	<form action="?" method="post">
	<tr>
		<td height="21" colspan="2" align="center" style="display: none;"><input type="hidden" name="id" value="<?php echo $row['id']?>"></td>
		<td height="21" colspan="2" align="center"><?php echo $row['goodsname']?></td>
		<td height="21" colspan="2" align="center"><?php echo $row['price']?></td>
		<td style="display: none" height="21" colspan="2" align="center"><?php echo $row['pv']?></td>
		<td height="21" colspan="2" align="center">
		
		<input type="submit" class="button" id="button" name="del" value="删除" />
		</td>
	</tr>
	</form>
	<?php }?>
</table>
</body>
</html>