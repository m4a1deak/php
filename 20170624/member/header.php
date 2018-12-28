<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
session_start();
date_default_timezone_set('PRC');
?>
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
<script  type="text/javascript"> 
$(".navbg").capacityFixed();
</script>
<script type="text/javascript">
setInterval("qi()",1000);//每一秒执行一次
function qi()//
{
var toDay = new Date();//创建时间对象
var Year1=toDay.getFullYear();
var Month1=toDay.getMonth()+1;
var Date1=toDay.getDate();
var Day1=toDay.getDay();
var Hours1=toDay.getHours();//时
var Mi1=toDay.getMinutes();//分
var Sec1=toDay.getSeconds();//秒
if (Day1==1){
	Day1="一";	
}else if(Day1==2){
	Day1="二";		
}else if(Day1==3){
	Day1="三";		
}else if(Day1==4){
	Day1="四";		
}else if(Day1==5){
	Day1="五";		
}else if(Day1==6){
	Day1="六";		
}else if(Day1==0){
	Day1="日";
}
var time=Year1+"年"+Month1+"月"+Date1+"日 星期"+Day1+" "+Hours1+":"+Mi1+":"+Sec1
document.getElementById("timer").innerText=time//把得到的时间写进<span id="abc"></span>
}
</script>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" 
background="images/header_bg.jpg" border=0>
  <TR height=56>
    <TD width=260><IMG height=50 src="images/templatemo_logo.png" 
    width=200></TD>
    <TD style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px" 
      align=right>
    </TD>
    <TD align=right width=268 style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px">欢迎您,<?=$_SESSION['nickname']?> <br>
      <span id="timer" style="color:#FBBE18;"></span></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR bgColor=#1c5db6 height=4>
    <TD></TD></TR></TABLE></BODY></HTML>
