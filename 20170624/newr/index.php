<?php
session_start();
date_default_timezone_set('PRC');
include_once("../function.php");
include_once("../class/system_class.php");
include_once("../class/txczzh_class.php");
include_once("../member/check.php");
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
$information=que_select_cl('information',1);
$_system=new system_class();
$member = getMemberbyID($_SESSION['ID']);
$jine=min($member['area4'],$member['area5']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
$zjul = zjulevel($member['zjulevel']);
 
?>
<?php
//获取当前ip
$us=getMemberbyID($_SESSION['ID']);

function ip(){
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {  
		$ip = getenv('HTTP_CLIENT_IP');
	 } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {  $ip = getenv('HTTP_X_FORWARDED_FOR');
	  } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {  $ip = getenv('REMOTE_ADDR'); 
	  } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {  $ip = $_SERVER['REMOTE_ADDR']; 
	  } return preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : 'unknown';}
	  $ip=ip();
	  $us_update['ip']=$ip;
	  edit_update_cl('member',$us_update,$us['id']);
	  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<!--  
<script type="text/javascript" src="../member/qqkefu1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../member/qqkefu1/lrkf_blue1.css">
<script src="../member/qqkefu1/lrkf.js"></script>
<script src="./js/charts/bar.js"></script>
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/kefu.css">
<script src="./js/jquery-1.8.3.min.js" type="text/javascript"></script>
<?php
$system=$_system->system_information(1);

//echo 1111111;
//var_dump($system['qq1']);
?>

<script type="text/javascript">
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();				
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();	
		});
	});
</script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="span3" style=" margin-top:15px;">
        <div class="widget">
         <div class="widget-header2">
            <h3 style="text-align:center;">公告栏</h3>
          </div>
          <!-- /widget-header -->
         <div class="widget-content2" style=" padding:0 10px;">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
			<tr>
			<td valign="top" ><?=$information['company']?><p></p></td>
		<!-- 	</tr>
            <b><span style="width:100%">乐游城会员管理系统</span>
            <p><font 宋体;="" font-size:="" 13px&quot;="">尊敬的RTT会员大家好：</font></p>
            <p>&nbsp;&nbsp; <font 宋体;="" font-size:="" 13px&quot;="">RTT 70系统将于月底将全面完善，通过全面的完善和VIP俱乐部的推动！会让所有会员体验RTT的强大。最近很多谣言请会员不要轻信，RTT一定长长久久。<br>
              &nbsp;&nbsp;&nbsp;<br>
              &nbsp; RTT郑重告知：关注生活第一线的伙伴请退出这个不是我们的平台以防伙伴上当。</font></p>
            <p>声明1:&nbsp;上海团员 野狼 阿鹰 李梦涵 私自开设假网站模仿RTT蒙蔽会员，请看到的会员相互通知！</p>
            <p>声明2:有会员私自收钱280元内部搞钱，请会员认真看在平台的级别，统一把钱打到一个人手里存在资金风险与RTT无关，请相互通知。</p>
            <p>声明3：由四川唐军&nbsp;张贵福 BOSS&nbsp;私自建立假网站搞58元互助蒙蔽会员，请相互转告。</p>
            <p><font 宋体;="" font-size:="" 13px&quot;="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RTT全民互助平台<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2015年10月7日</font></p>
            </b>  -->
            </marquee>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员资料</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <dl class="dl-horizontal">
              <dt>会员编号：</dt>
              <dd><?php echo $member['nickname'];?></dd>
              <dt>会员姓名：</dt>
              <dd><?php echo $member['username'];?></dd>
              
              
              <dt>会员等级：</dt>
              <dd><?php echo $ul['lvname'];?></dd>
              <dt>累计奖金：</dt>
              <dd><?php echo $member['maxmey'];?></dd>
              <dt>剩余奖金：</dt>
              <dd><?php echo $member['mey'];?></dd>
              <dt>报单币：</dt>
              <dd><?php echo $member['zsq'];?></dd>
              <dt>复投币：</dt>
              <dd><?php echo $member['cfxf'];?></dd>
               
               <dt>慈善基金：</dt>
              <dd><?php echo $member['wlf'];?></dd>
              
              
              <?php if ($member['isbd']>=2){?>
              	
                <dt>报单中心：</dt>
                <dd>是</dd>
             
              <?php }?>
              <dt>回本+见点：</dt>
              <dd><?php echo $member['meys'];?></dd>
              <dt>层奖+量奖：</dt>
              <dd><?php echo $member['meys2'];?></dd>
              <?php if ($member['meys']>=$ul['yl7'] || $member['meys2']>=$ul['yl8']){?>
              	
                <dt>复消：</dt>
                <dd>请及时复消</dd>
             
              <?php }?>
            </dl>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员管理</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <ul class="index_shengji">
               <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=UpdateProfile.php">修改资料</a></li>
              <li><a href="test.php?yid=tixian.php">奖金提现</a></li>
              <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=chongzhi.php">充值申请</a></li>
              <li><a href="test.php?yid=ulevelup.php">会员升级</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /widget-content -->
        </div>
      
      </div>
      <div class="span9" > <img src="./img/banner4.jpg" alt="" class="hidden-phone carousel-inner img-responsive img-rounded"  style="margin:15px 0;" />
        <div class="row-fluid">
          <div class="span6">
            <div class="widget">
              <div class="widget-header">
                <h3>会员登陆信息</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <dl class="dl-horizontal">
                  <dt>激 活 时 间：</dt>
                  <dd>&nbsp;<?php echo $member['pdt'];?></dd>
                  <dt>最近登陆时间：</dt>
                  <dd>&nbsp;<?php echo $_SESSION['sclogin'];?></dd>
                  <dt>最 近 登陆IP：</dt>
                  <dd>&nbsp;<?php echo $member['ip'];?></dd>
                </dl>
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
          </div>
          <!-- /span5 -->
          <div class="span6">
            <div class="widget">
              <div class="widget-header">
                <h3>奖金信息</h3>
              </div>
              <!-- /widget-header -->
             <div class="widget-content">
                <dl class="dl-horizontal">
                 <dt>报单币：</dt>
                  <dd><?php echo $member['zsq'];?></dd>
                  <dt>累计奖金：</dt>
                  <dd><?php echo $member['maxmey'];?></dd>
                  <dt>福利奖业绩：</dt>
                  <dd><?php echo $jine;?></dd>
                 
                </dl>
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
          </div>
          <!-- /span4 -->
        </div>
        <!-- 
        <div class="widget">
          <div class="widget-content">
            <div class="table-overflow"> 
            <div class="row-fluid" style=" width:848px;">
            
              <dl class="dl-horizontal">
                <dt>第十级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 50%; text-align:left; padding-left:10px; float:right;">十级经销商：1000人，合格10级：1000元*59049人=59049000元</div>
                  </div>
                </dd>
                <dt>第九级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 55%; text-align:left; padding-left:10px; float:right;">九级经销商：19683人，合格9级：1200元*19683人=23619600元</div>
                  </div>
                </dd>
                <dt>第八级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 60%; text-align:left; padding-left:10px;float:right;">八级经销商：6561人，合格8级：1600元*6561人=10497600元</div>
                  </div>
                </dd>
                <dt>第七级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 65%; text-align:left; padding-left:10px;float:right;">七级经销商：2187人，合格7级：2165元*2187人=4374000元</div>
                  </div>
                </dd>
                <dt>第六级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 70%; text-align:left; padding-left:10px;float:right;">六级经销商：729人，合格6级：2400元*729人=1749600元</div>
                  </div>
                </dd>
                <dt>第五级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 75%; text-align:left; padding-left:10px;float:right;">五级经销商：243人，合格5级：1200元*243人=291600元</div>
                  </div>
                </dd>
                <dt>第四级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 80%; text-align:left; padding-left:10px;float:right;">四级经销商：81人，合格4级：600元*81人=48600元</div>
                  </div>
                </dd>
                <dt>第三级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 85%; text-align:left; padding-left:10px;float:right;">三级经销商：27人，合格3级：240元*27人=6480元</div>
                  </div>
                </dd>
                <dt>第二级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 90%; text-align:left; padding-left:10px;float:right;">二级经销商：9人，合格2级：120元*9人=1080元</div>
                  </div>
                </dd>
                <dt>第一级：</dt>
                <dd>
                  <div class="progress progress-warning">
                    <div class="bar" style="width: 95%; text-align:left; padding-left:10px;float:right;">一级经销商：3人，合格1级：60元*3人=180元</div>
                  </div>
                </dd>
              </dl>
              
             
              
              </div>
            </div>
          </div>
 
         <div > <strong>您的推广链接:  www.ijingchao.com/newr/zhuce_biaodan3.php?rn=<?echo $_SESSION['nickname']?></strong> </div>
         -->
        </div>
        <!-- /widget -->
      </div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->


<!--kefu-->
<div id="floatTools" class="rides-cs" style="height:246px;">
  <div class="floatL">
  	<a style="display:block" id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px" href="javascript:void(0);">展开</a>
  	<a style="display:none" id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
    <div class="cn">
     
      <ul>
        <li><span>在线客服</span></li><li><a  href="http://wpa.qq.com/msgrd?v=3&uin=<?=$system['qq1']?>&site=qq&menu=yes"><img border="0" src="images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>公司财务</span></li><li><a  href="http://wpa.qq.com/msgrd?v=3&uin=<?=$system['qq2']?>&site=qq&menu=yes"><img border="0" src="images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>售后服务</span></li><li><a  href="http://wpa.qq.com/msgrd?v=3&uin=<?=$system['qq3']?>&site=qq&menu=yes"><img border="0" src="images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
       <!--   <li>
            <a href="http://www.down.admin5.com" target="_blank">腾讯微博</a>
            <a href="http://www.down.admin5.com" target="_blank">新浪微博</a>
            <div class="div_clear"></div>
        </li>
        <li style="border:none;"><span>电话：400-123-4567</span> </li>
        -->
      </ul>
    </div>
  </div>
</div>
<!-- /content -->
<?php include 'footer.php';?>
</body>
</html>