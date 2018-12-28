<?php

$member=getMemberbyID($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
$zjul = zjulevel($member['zjulevel']);
$information=que_select_cl('information',1);
?>
<div class="span3" style=" margin-top:15px;">
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">公告栏</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2" style=" padding:0 10px;">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
			  <tr>
			
			<td valign="top" >
            <?=$information['company']?><p></p></td>
			</tr>
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
