<?php
include_once("../function.php");
include_once("../class/ulevel_class.php");
include_once("../class/system_class.php");
include_once("../class/email_class.php");
session_start();
$rn=$_GET['rn'];
if ($_GET['action']=="zc"){
	$rName=$_POST['rName'];
	$NickName=$_POST['NickName'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$UserQQ=$_POST['UserQQ'];
	$useremail=$_POST['useremail'];
	if(checkNickName($NickName) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('会员编号已存在,请更换后再试.');window.location.href='?rn=".$rn."'</script>";
	}	
	
	if(checkNickNamebyispay($rName) == false){
		$zhuce=false;
		echo "<script language=javascript>alert('推荐人编号不存在,或尚未激活,请检查后再试.');window.location.href='?rn=".$rn."'</script>";
	}else{
		$array=getMemberbyNickName($rName);
		$reid=$array['id'];
		$reLevel=$array[relevel]+1;
		$rePath="".$array[repath].$array[id].",";
	}
	
	$member['userid']=$NickName;
	$member['nickname']=$NickName;
	$member['password1']=$password1;
	$member['password2']=$password2;
	$member['userqq']=$UserQQ;
	$member['ulevel']=1;
	$member['dan']=0;
	$member['lsk']=0;
	$member['pv']=0;
	$member['reid']=$reid;
	$member['rname']=$rName;
	$member['relevel']=$reLevel;
	$member['repath']=$rePath;
	$member['useremail']=$useremail;
	$member['rdt']=now();
	
	add_insert_cl('member',$member);
	
	$mail['uid']=0;
	$mail['nickname']="系统邮件";
	$mail['sid']=$reid;
	$mail['snickname']=$rName;
	$mail['title']="注册提醒";
	$mail['mailcontent']="恭喜您,您的网体注册了一名会员,会员编号:".$NickName.",QQ:".$UserQQ." 请尽快与他取得联系,最快时间建立自己核心团队.";
	$mail['fdate']=now();
	echo add_insert_cl('mail',$mail);
	
	$sql="select * from `member` where ispay=0 and nickname<>'".$NickName."'";
	if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$mail['uid']=0;
			$mail['nickname']="系统邮件";
			$mail['sid']=$row['id'];
			$mail['snickname']=$row['nickname'];
			$mail['title']="激活提醒";
			$mail['mailcontent']="您好,您之后有新会员注册了,请尽快激活,以防超越.";
			$mail['fdate']=now();
			echo add_insert_cl('mail',$mail);
		}
	}
	echo "<script language=javascript>alert('注册成功.');window.location.href='?rn=".$rName."'</script>";	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	免费注册
</title><link rel="stylesheet" type="text/css" href="zhuce/images/zzjob/hj/nvxing.css" />
<script type="text/javascript" src="zhuce/images/zzjob/hj/dc.js"></script>
<script language="javascript">
<!--
function CheckForm(){
	rName=document.form1.rName.value;
	NickName=document.form1.NickName.value;
	password1=document.form1.password1.value;
	password2=document.form1.password2.value;
	useremail=document.form1.useremail.value;
	userqq=document.form1.UserQQ.value;
	if(rName.length == 0){
		alert("温馨提示:\n请输入推荐人编号.");
		document.form1.rName.focus();
		return false;
	}
	if(NickName.length == 0){
		alert("温馨提示:\n请输入会员编号.");
		document.form1.NickName.focus();
		return false;
	}
	if(password1.length == 0){
		alert("温馨提示:\n请输入一级密码.");
		document.form1.password1.focus();
		return false;
	}
	if(password1.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password1.focus();
		return false;
	}
	if(password2.length == 0){
		alert("温馨提示:\n请输入二级密码.");
		document.form1.password2.focus();
		return false;
	}
	if(password2.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password2.focus();
		return false;
	}
	if(useremail.length == 0){
		alert("温馨提示:\n请输入电子信箱.");
		document.form1.useremail.focus();
		return false;
	}
	return true;
}
-->
</script>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
body,td,th {
	color: #FFF;
	font-size: 16px;
	font-weight: bold;
	font-family: "方正中倩简体";
}
body {
	background-color: #B50102;
}
.float_layer { width: 300px; border: 1px solid #aaaaaa; display:none; background: #000; }
.float_layer h2 {
	height: 25px;
	line-height: 25px;
	padding-left: 10px;
	font-size: 14px;
	color: #346815;
	background: url(zhuce/images/zzjob/hj/title_bg.gif) repeat-x;
	border-bottom: 1px solid #aaaaaa;
	position: relative;
	text-align: left;
}

.float_layer .min { width: 21px; height: 20px; background: url(zhuce/images/zzjob/hj/min.gif) no-repeat 0 bottom; position: absolute; top: 2px; right: 25px; }
.float_layer .min:hover { background: url(min.gif) no-repeat 0 0; }

.float_layer .max { width: 21px; height: 20px; background: url(zhuce/images/zzjob/hj/max.gif) no-repeat 0 bottom; position: absolute; top: 2px; right: 25px; }
.float_layer .max:hover { background: url(max.gif) no-repeat 0 0; }

.float_layer .close { width: 21px; height: 20px; background: url(zhuce/images/zzjob/hj/close.gif) no-repeat 0 bottom; position: absolute; top: 2px; right: 3px; }
.float_layer .close:hover { background: url(close.gif) no-repeat 0 0; }

.float_layer .content { height: 220px; overflow: hidden; font-size: 14px; line-height: 18px; color: #666;  }
.float_layer .wrap { padding: 10px; }
-->
</style>
</head>
<body>
    <form name="form1" method="post" action="?action=zc" id="form1" onsubmit="return CheckForm();">
<div class="km">
<div class="top"> 
  <p><img src="zhuce/images/zzjob/hj/9994.jpg" width="978" height="415"></p>
  
</div>
<div class="daoh">
  <table width="981" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td height="13" colspan="6" align="center" bgcolor="#8C0000" class="Navigation"><p> <img src="zhuce/images/zzjob/hj/4.jpg" width="979" height="380"></p>
          <p><img src="zhuce/images/zzjob/hj/w.jpg" width="979" height="278"></p>
          <div style="width:978px; height:403px; background:url(images/zhuce/4.jpg)">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;ETS伊特斯国际控股集团创始于2002年，在美国、
印度、中国和以色列都有风险基金和成长基金的运
营，先后管理有二十多家基金，总资本超过60亿美
元。</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;迄今，总共投资超过500家公司，其中200多家
成功上市，100多家通过兼并收购成功退出。</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;ETS伊特斯国际控股集团作为全球最大的VC，曾投资了
苹果电脑、思科、甲骨文、雅虎、 Google和Paypal，
ETS伊特斯国际控股集团的公司总市值超过纳斯达克
市场总价值的10%。</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;2013年，公司看到未来互联网
理财趋势，决心打造互联网平民理财平台，实现平台
2015年挂牌，2016年在纳斯达克上市的目标，同时会
创造无数位百万富翁，千万富翁。</p>
  </div>
          <p><img src="zhuce/images/zzjob/hj/zc.jpg" width="979" height="333"></p>
          <a name="bookmark"></a>
          <table width="979" align="center" style="color: White">
            <tbody>
              <tr>
                <td width="120" height="50" align="left" bgcolor="#BC0000"> 推荐人：</td>
                <td align="left" bgcolor="#BC0000" height="50"><input name="rName" type="text" id="rName" value="<?=$_GET['rn']?>" maxlength="50" readonly="readonly" />
                                            
                                            &nbsp;</td>
                <td width="120" align="left" bgcolor="#BC0000" height="50"> QQ：</td>
                <td align="left" bgcolor="#BC0000" height="50"><input name="UserQQ" type="text" maxlength="50" id="UserQQ" />
                                            </td>
              </tr>
              <tr>
                <td width="120" height="50" align="left" bgcolor="#BC0000">会员编号：</td>
                <td height="50" align="left" bgcolor="#BC0000"><input name="NickName" type="text" maxlength="50" id="NickName" />
                                            </td>
                <td width="120" height="50" align="left" bgcolor="#BC0000"> 电子邮箱：</td>
                <td height="50" align="left" bgcolor="#BC0000"><input name="useremail" type="text" maxlength="50" id="useremail" />
                                            
                                            </td>
              </tr>
              <tr>
                <td width="120" height="50" align="left" bgcolor="#BC0000"> 一级密码：</td>
                <td height="50" align="left" bgcolor="#BC0000"><input name="password1" type="password" maxlength="50" id="password1" />
                                            </td>
                <td height="50" align="left" bgcolor="#BC0000">二级密码：</td>
                <td height="50" align="left" bgcolor="#BC0000"><input name="password2" type="password" maxlength="50" id="password2" /></td>
              </tr>
              <tr>
                <td colspan="4" align="center" bgcolor="#BC0000">
                <input type="image" name="sumbit" id="sumbit" src="zhuce/images/zzjob/hj/zcc.png" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ImageButton2&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" border="0" />
                </td>
              </tr>
            </tbody>
          </table>
         </td>
        </tr>
      </tbody>
</table>
</div>
</div>
</form>
</body>
</html>

