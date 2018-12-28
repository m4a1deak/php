<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改公司账户</title>
<link rel="stylesheet" href="common.css" type="text/css" media="screen" />
<script type="text/javascript" src="../xheditor/jquery/jquery-1.4.4.min.js"></script>
<link rel="stylesheet" href="../kindeditor-4.1.9/themes/default/default.css" />
<link rel="stylesheet" href="../kindeditor-4.1.9/plugins/code/prettify.css" />
<script charset="utf-8" src="../kindeditor-4.1.9/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/lang/zh_CN.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/plugins/code/prettify.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
body,td,th {
	font-size: 12px;
	color: #666;
}
</style>
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
</head>
<?php
include_once("action.php");
include("admin_check.php");
include_once("../function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
checkqx(5,20);
$information=que_select_cl('information',1);
if ($_POST['save']){
		if($information['company']!=$_POST['content1']){
			action::record("修改公告", 1, $_SESSION['adminid'], "修改公告");
		}
		$information['company']=$_POST['content1'];
		edit_update_cl("information",$information,1);
		alert('修改成功','?');
}
?>
<body>
<table width="100%" height="420" border="0">
  <tr>
    <td valign="top">
    <form name="form1" method="post" action="?" >
      公告栏<br />
	内容：
	<br />
    <textarea name="content1" style="width:700px;height:200px;visibility:hidden;"><?=$information['company']?></textarea>
	<br/>
    <!-- <br />
    
	<textarea id="company" name="content1"  rows="12" cols="80" style="width: 80%">
    
	</textarea>
	<br/>
	 --><input type="submit" name="save" class="btn1" value="修改" />&nbsp;&nbsp;
	<input type="reset" name="reset" class="btn1" value="重置" />
</form></td>
  </tr>
</table>
</body>
</html>