<?php
session_start();
include_once("../function.php");
include_once("../class/system_class.php");
include_once("../class/txczzh_class.php");
$manager_id = $_GET['Manager_ID'];
if($manager_id != null){
	if($_SESSION['to_admin'] == null){
		alert("请勿非法操作!!!");
		return ;
	}
	if(checkID($manager_id)){alert("请勿非法操作!!!");return ;}
	$us=getMemberbyID($manager_id);
	$_SESSION['ID']=$us['id'];
	$_SESSION['nickname']=$us['nickname'];
	$_SESSION['username']=$us['username'];
	$_SESSION['userid']=$us['userid'];
	$_SESSION['isboss']=$us['isboss'];
	$_SESSION['sclogin']=$us['sclogin'];
	$_SESSION['bdid']=$us['bdid'];
	$_SESSION['isbd']=$us['isbd'];
	$_SESSION['bdlevel']=$us['bdlevel'];
}
include("check.php");
date_default_timezone_set('PRC');
$_system=new system_class();
$us=getMemberbyID($_SESSION['ID']);
$ul=ulevel($us['ulevel']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐游城会员管理系统</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/work.js"></script>
<script language="javascript">
<!--
function menuclickdo(ttt){
	var tobj=document.getElementById('positiondiv');
	tobj.innerHTML=ttt;
}
function cks(id){
	if (id == 1){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='hover';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='none';
	}else if(id == 2){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='hover';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='none';
	}else if(id == 3){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='hover';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='none';
	}else if(id == 4){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='hover';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='none';
	}else if(id == 5){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='hover';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='none';
	}else if(id == 6){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='hover';
		document.getElementById('nav7').className='';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='';
		document.getElementById('menu7').style.display='none';
	}else if(id == 7){
		document.getElementById('nav0').className='';
		document.getElementById('nav1').className='';
		document.getElementById('nav2').className='';
		document.getElementById('nav3').className='';
		document.getElementById('nav4').className='';
		document.getElementById('nav5').className='';
		document.getElementById('nav6').className='';
		document.getElementById('nav7').className='hover';
		document.getElementById('menu1').style.display='none';
		document.getElementById('menu2').style.display='none';
		document.getElementById('menu3').style.display='none';
		document.getElementById('menu4').style.display='none';
		document.getElementById('menu5').style.display='none';
		document.getElementById('menu6').style.display='none';
		document.getElementById('menu7').style.display='';
	}
}
function SetUrl(url)
{
	
	if (url.charAt(url.length-1)=="p")
	{
		parent.iframepage.location.href = url;	
	}else{
		parent.iframepage.location.href = 'test.php?yid='+url;	
	}
	
}
function iFrameHeight() {
var ifm= document.getElementById("iframepage");
var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;
if(ifm != null && subWeb != null) {
ifm.height = subWeb.body.scrollHeight;
}
}
-->
</script>
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
</head>
<body>
<div id="topmain">
<div id="top">
<div align="left">
  <a href="?"><img src="images/templatemo_logo.png" alt="ecode" width="200" height="80" border="0" class="logo" title="ecode" /></a></div>
  <div align="right">
  <span id="timer" style="color:#FBBE18;"></span><br>
  <span  style="color:#FBBE18;">欢迎您,<?=$_SESSION['nickname']?></span>
  </div>
<p class="topTxt" style="display:none"><span class="yellow">Imperdiet vulputate:</span> Nunc vel turpis sit amet leo accumsan varius. Duis nec tellus. Quisque <span class="red">dignissim</span> quam in felis.</p>
</div>
</div>
<!--top start -->
<div class="navbg">
  <div class="col960">
    <ul id="navul" class="cl">
      <li class="navhome"><a href="?">首页</a></li>
      <li><a href="?" title="公司新闻">公司新闻</a>
        <ul>
          <li><a href="javascript:SetUrl('newslist.php')" onclick="menuclickdo('新闻公告')">新闻公告</a></li>
          <li><a href="javascript:SetUrl('32')" onclick="menuclickdo('公司简介')">公司简介</a></li>
<li><a href="javascript:SetUrl('34')" onclick="menuclickdo('游戏规则')">游戏规则</a></li>
<li style="display: none"><a href="javascript:SetUrl('36')" onclick="menuclickdo('汇款账户')">汇款账户</a></li>
        </ul>
      </li>
      <li><a href="?" title="个人信息">个人信息</a>
        <ul>
<!--        <li><a href="javascript:SetUrl('60')" onclick="menuclickdo('爱心基金')">爱心基金</a></li>-->
        
          <li><a href="javascript:SetUrl('1')" onclick="menuclickdo('个人资料')">个人资料</a></li>
<li><a href="javascript:SetUrl('2')" onclick="menuclickdo('修改资料')">修改资料</a></li>
<li><a href="javascript:SetUrl('47')" onclick="menuclickdo('修改密码')">修改密码</a></li>
<!--<li><a href="javascript:SetUrl('54')" onclick="menuclickdo('我要激活')">我要激活</a></li>-->
<!--<li><a href="javascript:SetUrl('53')" onclick="menuclickdo('退单申请')">退单申请</a></li>-->
<?php if(1==1){?>
<li><a href="javascript:SetUrl('45')" onclick="menuclickdo('申请升级')">申请升级</a></li>
<?php }?>
        </ul>
      </li>
      <li style="display:none"><a href="" title="团队信息">团队信息</a>
        <ul>
		<li><a href="javascript:SetUrl('65')" onclick="menuclickdo('团队信息')">团队信息</a></li>
		<li><a href="javascript:SetUrl('66')" onclick="menuclickdo('收费情况')">收费情况</a></li>
        </ul>
      </li>
      <li><a href="?" title="市场信息">市场信息</a>
        <ul>
        <?php 
        if($us['isbd']>=0){
        ?>
          <li><a href="javascript:SetUrl('register.php')" onclick="menuclickdo('会员注册')">会员注册</a></li>
<?php }?>
         <!-- <li><a href="javascript:SetUrl('61')" onclick="menuclickdo('团队信息')">团队信息</a></li>-->

          <li><a href="javascript:SetUrl('4')" onclick="menuclickdo('直推列表')">直推列表</a></li>
<!--<li><a href="javascript:SetUrl('55')" onclick="menuclickdo('临时会员')">临时会员</a></li>
<li><a href="javascript:SetUrl('56')" onclick="menuclickdo('正式会员')">正式会员</a></li>-->
<li><a href="javascript:SetUrl('51')" onclick="menuclickdo('退款名单')">退款名单</a></li>
<?php if ($_system->system_tjt()==1){?>
<li><a href="javascript:SetUrl('5')" onclick="menuclickdo('推荐结构')">推荐结构</a></li>
<?php }
if ($_system->system_wlt()==1){?>
<li ><a href="javascript:SetUrl('52')" onclick="menuclickdo('网络结构')">网络结构</a></li>
<?php }?>
<?php if ($_system->system_wlt()==1){?>
<!--<li><a href="javascript:SetUrl('52')" onclick="menuclickdo('B 网结构')">B 网结构</a></li>-->
<?php }?>
        </ul>
      </li>
     
      <li><a href="?" title="站内短信">站内短信</a>
        <ul>
         <li><a href="javascript:SetUrl('23')" onclick="menuclickdo('站内短信')">站内短信</a></li>
<li><a href="javascript:SetUrl('24')" onclick="menuclickdo('收信箱')">收信箱</a></li>
<li><a href="javascript:SetUrl('25')" onclick="menuclickdo('发信箱')">发信箱</a></li>
        </ul>
      </li>
      <li ><a href="?" title="汇款确认">汇款确认</a>
        <ul>
         <li style="display: none"><a href="javascript:SetUrl('38')" onclick="menuclickdo('申请服务中心')">申请服务中心</a></li>
<?php if($us['isbd']>=0){?>
<li style="display: none"><a href="javascript:SetUrl('39')" onclick="menuclickdo('激活会员')">激活会员</a></li>
<li style="display: none"><a href="javascript:SetUrl('44')" onclick="menuclickdo('激活记录')">激活记录</a></li>
<li style="display: none"><a href="javascript:SetUrl('40')" onclick="menuclickdo('正式会员')">正式会员</a></li>
<li style="display: none" ><a href="javascript:SetUrl('43')" onclick="menuclickdo('确认汇款')">确认汇款</a></li>
<li ><a href="javascript:SetUrl('64')" onclick="menuclickdo('升级确认')">升级确认</a></li>
<?php }?>
	<?php if ($_system->system_bdbonus()==1){?>
<li style="display:none"><a href="javascript:SetUrl('41')" onclick="menuclickdo('奖金查询')">奖金查询</a></li>
	<?php }?>
<li style="display:none"><a href="javascript:SetUrl('42')" onclick="menuclickdo('会员提现')">会员提现</a></li>
<li style="display:none"><a href="javascript:SetUrl('43')" onclick="menuclickdo('汇款通知')">汇款通知</a></li>

        </ul>
      </li>
      <li><a href="../index.php" title="安全退出">安全退出</a></li>
    </ul>
  </div>
</div>
<!--top end -->
<br>
<!--bodyMain start -->
<div id="bodyMain">
<!--body start -->
<div id="body">
<!--left start -->
<div id="left">
<h2><span>会员信息</span></h2>
<ul>
<li><a href="#">会员编号：<font color="#FF0000">
  <?=$_SESSION['nickname']?>
</font></a></li>
<li style="display: none"><a href="#">奖金累计：<font color="#FF0000">
  <?=$us['maxmey']?>
</font></a></li>

<li style="display: none"><a href="#">首次购物币：<font color="#FF0000">
  <?=$us['sgb']?>
</font></a></li>
<!--<li><a href="#">报单消费币：<font color="#FF0000">
  <?=$us['sgb']?>
</font></a></li>
<li><a href="#">消费业绩：<font color="#FF0000">
  <?=$us['xiaofeiyeji']?>
</font></a></li>
-->
<?php if($us['isbd']>=2){?>
<li style="display: none"><a href="#">服务级别：<font>
  <?
  switch($us['bdlevel']){
  	case 1:echo "银卡";break;
  	case 2:echo "金卡";break;
  	default:echo "钻卡";break;
  }
  ?>
</font></a></li>

<?php }?>
<!--<li><a href="shoppingcart.php" target="iframepage">购物车</a></li>-->
<?php if (checknewmail($_SESSION['ID'])){?>
<li><a href="javascript:SetUrl('24')"><img src="images/new.gif" width="20" height="12" border="0" />您有新的未读邮件</a></li>
<?php }?>
<?php
$ul=ulevel($us['ulevel']);
?>
<?php if ($ul['ulevel']){?>
<li><a href="#">级别：<font color="#FF0000"><?=$ul['lvname']?></font></a></li>
<?php }else{?>
<li><a href="#">级别：<font color="#FF0000">0 级会员</font></a></li>
<?php }?>
<?php 
	$sql="select * from member where ppath like '%{$us['ppath']}%'";
	if($query=mysql_query($sql)){
		$num=mysql_num_rows($query);
	}
?>
<li style="display: none"><a href="#">团队会员数：<font color="#FF0000"><?=$num-1?></font></a></li>
</ul>
<h2><span>快捷功能</span></h2>
<ul>
 <li><a href="javascript:SetUrl('register.php')" onclick="menuclickdo('会员注册')">会员注册</a></li>
<li style="display: none"><a href="javascript:SetUrl('20')" onclick="menuclickdo('汇款申请')">汇款申请</a></li>

<li><a href="javascript:SetUrl('2')" onclick="menuclickdo('修改资料')">修改资料</a></li>
<?php if ($_SESSION['isbd']==2){?>
<!--<li><a href="javascript:SetUrl('39')" onclick="menuclickdo('激活会员')">激活会员</a></li>-->
<?php }?>
<li style="display: none"><a href="javascript:SetUrl('6')" onclick="menuclickdo('网络结构')">网络结构</a></li>
<li><a href="javascript:SetUrl('45')" onclick="menuclickdo('我要升级')">我要升级</a></li>
</ul>
<h2><span>团队升级申请状态</span></h2>
<ul>
    <?php
		$sql="select * from ulevelup where sid=".$us['id']." and issh=0 ";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
	?>
	<li><a href="javascript:SetUrl('64')" onclick="menuclickdo('申请升级人数')">申请升级人数（<?=$num?>）</a></li>
    </ul>
<h2 style="display: none"><span>公司新闻</span></h2>
	<ul>
    <?php
		$txczzh_cl=new txczzh_class();
		if($array=$txczzh_cl->getnewstopnum(10)){
			foreach($array as $row){
				echo "<li>";
				echo "<a href='newscontent.php?nid=".$row['id']."' target='iframepage'>".$row['newstitle']."</a>";
				echo "</li>";
			}
		}
	?>
    </ul>

<!--<h2><span>最新提现名单</span></h2>
<marquee id="mar1" direction="up" scrolldelay="1" scrollamount="1">
    <?php
		if($array=$txczzh_cl->gettixiantop50()){
			foreach($array as $value){
				echo "<font color='#FF0000'>会员:".$value."</font>";
				echo "<br>";
				echo "<br>";
			}
		}
	?>
</marquee>-->
<br class="spacer" />
</form>
</div>
<!--left end -->
<!--right start -->
<div id="right">
<div style=" width:200px; margin:0 0 0 0;"><span style="font-size:12px;">当前位置:</span> <span id="positiondiv" style="font-size:12px">首页</span></div>
<iframe id="iframepage" style="Z-INDEX: 1; WIDTH: 895px;" name="iframepage" src="right.php" frameborder=0 scrolling="auto" onLoad="javascript:iFrameHeight();" ></iframe>
<br>
</div>
<!--right end -->
<br class="spacer" />
</div>
<!--body end -->
<br class="spacer" />
</div>
<!--bodyMain end -->
<!--footer start -->
<div id="footerMain">
  <div id="footer"> 
    <ul>
      <li><a href="?">首页</a>|</li>
      <li><a href="#" onclick="javascript:cks(1);">公司新闻</a>|</li>
      <li><a href="#" onclick="javascript:cks(2);">个人信息</a>|</li>
      <li><a href="#" onclick="javascript:cks(3);">市场信息</a>|</li>
      <li><a href="#" onclick="javascript:cks(4);">财务管理</a>|</li>
      <li><a href="#" onclick="javascript:cks(6);">站内短信</a>|</li>
      <li><a href="#" onclick="javascript:cks(7);">服务中心</a></li>
    </ul>
    <p class="copyright" >Copyright © 2013-2015 会员系统 ,All Right Reserved.</p>
  </div>
</div>
<!--footer end -->
<script type="text/javascript" src="qqkefu1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="qqkefu1/lrkf_blue1.css">
<script src="qqkefu1/lrkf.js"></script>

<?php
$system=$_system->system_information(1);
?>
<script> 
$(function(){
	/*皮肤编号 lrkf_blue1 无图版，lrkf_blue2 图片版，更多皮肤敬请期待 懒人qq客服 - http://www.51xuediannao.com/qqkefu/*/
	$("#lrkfwarp").lrkf({
		kftop:'140',				//距离顶部距离
		//btntext:'客服在线',			//默认为 客服在线 四个字，如果你了解css可以使用图片代替
		defshow:false,			//如果想默认折叠，将defshow:false,的注释打开，默认为展开
		//position:'absolute',		//如果为absolute所有浏览器在拖动滚动条时均有动画效果，如果为空则只有IE6有动画效果，其他浏览器
		qqs:[
			{'name':'在线客服','qq':'<?=$system['qq1']?>'},			//注意逗号是英文的逗号
			{'name':'在线客服','qq':'<?=$system['qq2']?>'},
			{'name':'在线客服','qq':'<?=$system['qq3']?>'},
			{'name':'在线客服','qq':'<?=$system['qq4']?>'}			//注意最后一个{}不要英文逗号
		],
		tel:[
			{'name':'24小时热线','tel':''},	//注意逗号是英文的逗号
			{'name':'售后','tel':''}
		],
		more:"http://www.gxtianou.com/"				//>>		
	});
		
});
</script>
</body>
</html>
