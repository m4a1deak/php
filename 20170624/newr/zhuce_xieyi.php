<?php
include_once("../class/ulevel_class.php");
include_once("../class/system_class.php");
session_start();
$information=que_select_cl('information',1);
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
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
            <h1>注册协议</h1>
          </div>
		  <form id="form1" name="form1" method="post" action="zhuce_biaodan.php" onSubmit="return CheckForm();">
                           <div class="well">
                            
	                            <h2 style="margin-top: 20; text-align:center;">继续注册前请先阅读协议 </h2>

<hr/>

<p> 
    <input name="ReID" type="hidden" id="ReID" value="112421">
    <input name="FatherID" type="hidden" id="FatherID" value="118387">
    <input name="hy_zy" type="hidden" id="hy_zy" value="0">
  </p>
  <p class="f14h">欢迎您加入乐游城会员管理系统。为维护网上公共秩序和社会稳定，请您自觉遵守以下条款。</p>
  <p class="f14h">　不得利用本系统网站危害国家安全、泄露国家机密，不得侵犯国家、社会、集体和公民的合法权益，不得利用本俱乐部之网站制作、复制和传播下列信息：</p>
  <p class="f14h">(一) 煽动抗拒、破坏宪法和法律、行政法规实施的；<br>
	(二)煽动颠覆国家政权，推翻社会主义制度的； <br>
    (三) 煽动分裂国家、破坏国家统一的； <br>
    (四) 煽动民族仇恨、民族歧视、破坏民族团结的； <br>
    (五)捏造或则歪曲事实、散布谣言、扰乱社会秩序的； <br>
    (六) 宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的； <br>
    (七) 公然侮辱他人或则捏造事实诽谤他人的，或则进行其他恶意攻击的； <br>
	(八) 损害国家机关信誉的； <br>
    (九) 其他违反宪法和法律行政法规的； <br>
    (十) 进行商业广告行为的。 <br>
    (十一) 在你注册或升级时请先"确定"你的爱心互助金到账户，方可注册或升级。否则管理员在规定时间内将冻结你的会员资格。 </p>
	<?php
// var_dump($_GET['tid']);
$NickName=$_GET['nickname'];
session_start();
$_SESSION['one']=$NickName;

$tid=$_GET['tid'];
$_SESSION['two']=$tid;
?>
  <p align="center">
    <input name="Submit" type="submit" class="btn" onClick="" value="同意注册">
<!-- <input name="Submit1" type="submit" class="btn" onclick="parent.location.reload();" value="取消注册"> -->
  </p>


	                        </div>
                        

                    
                    
                </div>	  
</form>
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
