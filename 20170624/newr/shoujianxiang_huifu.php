<?php
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
            <h1>写信</h1>
          </div>

                   <div class="datatable-header">

  <div class="dataTables_filter  no-append">
  
  <div class="btn-group">
  <input type="submit" name="Submit" value="返回" class="btn">
  <input class="btn" type="button" onClick="Apple_url_a1()"  name="Submit" value="写 信">
  <input class="btn" type="button" onClick="Apple_url_a2()" name="Submit" value="收件箱">
  <input class="btn" type="button" onClick="Apple_url_a3()" name="Submit" value="发件箱">

</div>



  </div>

                                    
                                    

</div>                  
                           
           
<div class="widget-content">
								
								
								
								<div class="tabbable">

						<br>
						
<div class="well">
                            
	                            <h2 style="margin-top: 20; text-align:center;">乐游城会员管理系统 </h2>
<p><small>发件人：万事如意wxl</small>  <small>时间：2015-10-17 14:41:41</small> </p>
<hr/>

<P><FONT 宋体; FONT-SIZE: 13px&quot;>尊敬的RTT会员大家好：</FONT></P>
<P>&nbsp;&nbsp; <FONT 宋体; FONT-SIZE: 13px&quot;>RTT 70系统将于月底将全面完善，通过全面的完善和VIP俱乐部的推动！会让所有会员体验RTT的强大。最近很多谣言请会员不要轻信，RTT一定长长久久。<BR>&nbsp;&nbsp;&nbsp;<BR>&nbsp; RTT郑重告知：关注生活第一线的伙伴请退出这个不是我们的平台以防伙伴上当。</FONT></P>
<P>声明1:&nbsp;上海团员 野狼 阿鹰 李梦涵 私自开设假网站模仿RTT蒙蔽会员，请看到的会员相互通知！</P>
<P>声明2:有会员私自收钱280元内部搞钱，请会员认真看在平台的级别，统一把钱打到一个人手里存在资金风险与RTT无关，请相互通知。</P>
<P>声明3：由四川唐军&nbsp;张贵福 BOSS&nbsp;私自建立假网站搞58元互助蒙蔽会员，请相互转告。</P>
<P><FONT 宋体; FONT-SIZE: 13px&quot;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RTT全民互助平台<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2015年10月7日</FONT></P>
	                        





	                        </div>
							
	
           <div class="page-header">
            <h1>快速回复</h1>
          </div>					

							<div class="tab-content">
								<div class="tab-pane active" id="1">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
										

										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">内容：</label>
											<div class="controls">
												<textarea rows="5" cols="5" name="textarea" class="span5"></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										

										
										
											
											<br>
										
											
										<div class="form-actions">
											<button type="submit" class="btn">提交回复</button> 
										
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								
								
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
