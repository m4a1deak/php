<?php
include("check.php");
include("check2.php");
include_once("../function.php");

include_once("../class/system_class.php");
if ($_POST['button']){
		$goods['goodsname']=$_POST['goodsname'];
		$goods['price']=$_POST['price'];
		
		$uid=$_SESSION['ID'];
		$nickname=$_SESSION['nickname'];

		$goods['goodsimg']=$_POST['goodsimg'];
		$goods['lx']=$_POST['lx'];
		$goods_update['sales']=$_POST['sales'];
		$goods['goodscontent']=$_POST['content1'];
		$goods['kucun']=$_POST['kucun'];
		$goods['isdisplay']=0;
		$goods['shunxu']=$_POST['shunxu'];
		echo edit_update_cl('goods',$goods,$_POST['gid']);
		echo "<script language=javascript>alert('修改商品成功.');window.location.href='admin_goodslist.php'</script>";	

}else{
	if (!$goods=que_select_cl('goods',$_GET['id'])){
	echo "<script language=javascript>alert('商品不存在.');window.location.href='admin_goodsList.php'</script>";	
	}		
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
	
</script>

<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
<link rel="stylesheet" href="../kindeditor-4.1.9/themes/default/default.css" />
<link rel="stylesheet" href="../kindeditor-4.1.9/plugins/code/prettify.css" />
<script charset="utf-8" src="../kindeditor-4.1.9/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/lang/zh_CN.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/plugins/code/prettify.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor1 = K.create('textarea[name="content1"]', {
			cssPath : '../kindeditor-4.1.9/plugins/code/prettify.css',
			uploadJson : '../kindeditor-4.1.9/php/upload_json.php',
			fileManagerJson : '../kindeditor-4.1.9/php/file_manager_json.php',
			allowFileManager : true,
			afterCreate : function() {
				var self = this;
				K.ctrl(document, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
				K.ctrl(self.edit.doc, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
			}
		});
		prettyPrint();
	});
</script>
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
	if(goodscontent == ''){
		alert("温馨提示:\n请输入商品信息.");
		return false;
	}
	return true;
}
function GetImgName(){
	//根据iframe的id获取对象  
	//var i1 = window.frames['UploadFiles'];   
	//获取iframe中的元素值  
	var i2=document.getElementById("UploadFiles").contentWindow;
	
	var imgname=i2.document.getElementById("imgname").value;
	
	//var imgname=i1.document.getElementById("imgname").value;
	
	document.getElementById("goodsimg").value = imgname;
}

-->
</script>
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
            <h1>添 加 商 品</h1>
          </div>
          
      <div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
      
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
	
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
   <tr>
    <td width="46%" height="22" align="center">修 改 商 品<input name="gid" type="hidden" value="<?=$_GET['id']?>"></td>
    </tr>
    <tr>
    <td width="46%" height="22" align="right">上传图片：</td>
    <td align="left"><iframe ID="UploadFiles" src="UploadFiles.php" frameborder=0 scrolling=no height="35"></iframe>
</td>
  </tr>
   <tr>
    <td width="46%" height="22" align="right">商品图片：</td>
    <td align="left" valign="top"><input name="goodsimg" type="text" id="goodsimg" value="<?=$goods['goodsimg']?>" size="20" maxlength="50">
      <input name="button" type="button" class="btn1" id="button" onClick="GetImgName()" value="获取图片"></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right" >商品类型：</td>
    <td align="left"><label for="select"></label>
      <select name="lx" id="lx">
           <option value="1" <?php if($goods['lx']==1){?> selected<?php }?>>购物商品</option>
      
      </select></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">商品名称：</td>
    <td align="left"><input name="goodsname" type="text" id="goodsname" value="<?=$goods['goodsname']?>" size="20" maxlength="50" style="width:400px;"></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">商品价格：</td>
    <td align="left"><input name="price" type="text" id="price" value="<?=$goods['price']?>" size="20" maxlength="50" ></td>
  </tr>

  <tr>
    <td width="46%" height="22" align="right">商品库存：</td>
    <td align="left"><input name="kucun" type="text" id="kucun" value="<?=$goods['kucun']?>" size="20" maxlength="50"></td>
  </tr>
  <tr style="display:none">
    <td width="46%" height="22" align="right">显示顺序：</td>
    <td align="left"><input name="shunxu" type="text" id="shunxu" value="20" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right" valign="top">商品信息：</td>
    <td align="left"><textarea name="content1" style="width:600px;height:200px;visibility:hidden;" ><?=$goods['goodscontent']?>
    </textarea></td>
  </tr>
<tr>
    <td colspan="2" align="center">
      <table align="center" height="22">
        <tr>
          <td><input name="button" id="button" type="submit" class="btn2" value="修改">&nbsp;&nbsp;<input type="button" class="btn1" onClick="javascript:history.back();" value="返回"></td>
        </tr>
      </table></td>
  </tr>

</table>
<br>

</form>
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

