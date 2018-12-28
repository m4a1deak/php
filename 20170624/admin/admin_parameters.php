<?php
include("admin_check.php");
include_once("../class/system_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(6,27);
	$_system=new system_class();
	$systemparameters=$_system->system_information(1);
	$time=unserialize($systemparameters['txtime']);

if($_POST['button']){
		$_system=new system_class();
		$systemparameters['id']=1;
		$systemparameters['txbs']=$_POST['txbs'];
		$systemparameters['txmix']=$_POST['txmix'];
		$systemparameters['txsl']=$_POST['txsl'];
//		$systemparameters['txks']=$_POST['txks'];
		$systemparameters['wlf']=$_POST['wlf'];
		$systemparameters['xtkg']=$_POST['xtkg'];
		$systemparameters['azkg']=$_POST['azkg'];
		$systemparameters['tjkg']=$_POST['tjkg'];
		$systemparameters['ziliao']=$_POST['ziliao'];
		$systemparameters['ff']=$_POST['ff'];
		$systemparameters['ms']=$_POST['ms'];
		$systemparameters['bdbonus']=$_POST['bdbonus'];
		$systemparameters['isb2']=$_POST['cqu'];
		$systemparameters['isb3']=$_POST['isb3'];
		$systemparameters['qq1']=$_POST['qq1'];
		$systemparameters['qq2']=$_POST['qq2'];
		$systemparameters['qq3']=$_POST['qq3'];
		$systemparameters['qq4']=$_POST['qq4'];
		$systemparameters['password1']=$_POST['password1'];
		$systemparameters['password2']=$_POST['password2'];
		$systemparameters['sl']=$_POST['sl'];
		$systemparameters['dx']=$_POST['dx'];
		$systemparameters['duanxinzhanghao']=$_POST['duanxinzhanghao'];
		$systemparameters['duanxinmima']=$_POST['duanxinmima'];
//		$systemparameters['shuishou']=$_POST['shuishou'];
//		$laoshi=array($_POST['time']);
		$systemparameters['txtime']=$_POST['time'];
		$_system->system_update($systemparameters);
		
		alert('保存成功.','?');
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="resources/scripts/jquery-1.3.2.min.js"></script>
<title>级别参数</title>
<script>
$(function(){
		$("input[class=hour]").blur(function(){
			var reg=/^([0-9]|1[0-9]|2[0-4]){1}(:[0-5][0-9]){0,1}$/;
			if(reg.test(this.value)){
				
			}else{
				this.value="";
				
			}
		})
	


})


</script>
</head>
<body>
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="3" align="center">系统参数</td>
      </tr>
      <tr >
        <td align="center">提现倍数</td>
        <td align="center"><input name="txbs" type="text" id="txbs" value="<?=$systemparameters['txbs']?>" size="7" maxlength="7"></td>
      </tr>
      <tr>
        <td align="center">提现最小金额</td>
        <td align="center"><input name="txmix" type="text" id="txmix" value="<?=$systemparameters['txmix']?>" size="7" maxlength="7"></td>
      </tr>
	
       <tr style="display:none">
        <td align="center">提现手续费</td>
        <td align="center"><input name="txsl" type="text" id="txsl" value="<?=$systemparameters['txsl']?>" size="5" maxlength="4">
        %</td>
        </tr>
        <tr style="display:none">
        <td align="center">税收</td>
        <td align="center"><input name="txks" type="text" id="txks" value="<?=$systemparameters['txks']?>" size="5" maxlength="4">
        %</td>
        </tr>
       <tr style="display:none">
        <td align="center">销售奖封顶</td>
        <td align="center"><input name="wlf" type="text" id="wlf" value="<?=$systemparameters['wlf']?>" size="5" maxlength="7">%</td>
      </tr>
       <tr style="display:none">
        <td align="center">税收</td>
        <td align="center"><input name="shuishou" type="text" id="wlf" value="<?=$systemparameters['shuishou']?>" size="7" maxlength="7">%</td>
      </tr>
     
       <tr >
        <td align="center">提现日期</td>
        <td align="center">
          <select name="time" id="time">
          <option value="1" <?php if($systemparameters['txtime']==1){?>selected<?php }?>>星期一</option>
          <option value="2" <?php if($systemparameters['txtime']==2){?>selected<?php }?>>星期二</option>
          <option value="3" <?php if($systemparameters['txtime']==3){?>selected<?php }?>>星期三</option>
          <option value="4" <?php if($systemparameters['txtime']==4){?>selected<?php }?>>星期四</option>
          <option value="5" <?php if($systemparameters['txtime']==5){?>selected<?php }?>>星期五</option>
          <option value="6" <?php if($systemparameters['txtime']==6){?>selected<?php }?>>星期六</option>
          <option value="7" <?php if($systemparameters['txtime']==7){?>selected<?php }?>>星期天</option>
          <option value="8" <?php if($systemparameters['txtime']==8){?>selected<?php }?>>不限</option>
          
       
         </select>
      </td>
      </tr>
<!--      <tr>-->
<!--        <td align="center">提现时间</td>-->
<!--        <td align="center">-->
<!--        <input type="text" name="start" class="hour" value="<?php echo $time[1];?>" size="4"/>至-->
<!--        <input type="text" name="end" value="<?php echo $time[2];?>" class="hour" size="4"/>-->
<!--        <font size="1">例如  7:00-20:00</font>-->
<!--        </td>-->
<!--      </tr> -->
      <tr style="display:none">
        <td align="center">会员管理：冻结会员，查看会员开关</td>
        <td align="center"><input type="radio" name="sl" id="isb3" value="1" <?php if($systemparameters['sl']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="sl" id="isb3" value="0" <?php if($systemparameters['sl']==0){ ?> checked <?php }?>>
    关 </td>
      </tr>
     
      <tr>
        <td align="center">默认一级密码</td>
        <td align="center"><input name="password1" type="text" id="password1" value="<?=$systemparameters['password1']?>" maxlength="20">
        </td>
      </tr>
      <tr>
        <td align="center">默认二级密码</td>
        <td align="center"><input name="password2" type="text" id="password2" value="<?=$systemparameters['password2']?>" maxlength="20">
        </td>
      </tr>
      <tr style="display:none">
        <td align="center">短信接口帐号</td>
        <td align="center"><input name="duanxinzhanghao" type="text" id="duanxinzhanghao" value="<?=$systemparameters['duanxinzhanghao']?>" maxlength="20">
        </td>
      </tr>
      <tr style="display:none">
        <td align="center">短信接口密码</td>
        <td align="center"><input name="duanxinmima" type="password" id="duanxinmima" value="<?=$systemparameters['duanxinmima']?>" maxlength="20">
        </td>
      </tr>
       <tr >
        <td align="center">系统开关</td>
        <td align="center"><input name="xtkg" type="radio" id="xtkg" value="1"  <?php if($systemparameters['xtkg']==1){ ?> checked <?php }?>>
          开
          <input type="radio" name="xtkg" id="xtkg" value="0" <?php if($systemparameters['xtkg']==0){ ?> checked <?php }?>>
          关
        </td>
      </tr>
      <tr style="display:none" >
        <td align="center">见点奖开关</td>
        <td align="center"><input type="radio" name="isb3" id="isb3" value="1" <?php if($systemparameters['isb3']==1){ ?> checked <?php }?>>
   开
    <input type="radio" name="isb3" id="isb3" value="0" <?php if($systemparameters['isb3']==0){ ?> checked <?php }?>>
    关 </td>
      </tr>
      
      <tr style="display:none">
        <td align="center">安置图开关</td>
        <td align="center"><input type="radio" name="azkg" id="azkg" value="1" <?php if($systemparameters['azkg']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="azkg" id="azkg" value="0" <?php if($systemparameters['azkg']==0){ ?> checked <?php }?>>
    关 </td>
      </tr>
      <tr style="display:none">
        <td align="center">推荐图开关</td>
        <td align="center"><input type="radio" name="tjkg" id="tjkg" value="1" <?php if($systemparameters['tjkg']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="tjkg" id="tjkg" value="0" <?php if($systemparameters['tjkg']==0){ ?> checked <?php }?>>
    关</td>
      </tr>
      <tr style="display:none">
        <td align="center">短信开关</td>
        <td align="center"><input type="radio" name="dx" id="dx" value="1" <?php if($systemparameters['dx']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="dx" id="dx" value="0" <?php if($systemparameters['dx']==0){ ?> checked <?php }?>>
    关</td>
      </tr>
      <tr style="display:none">
        <td align="center">修改资料开关</td>
        <td align="center"><input type="radio" name="ziliao" id="ziliao" value="1" <?php if($systemparameters['ziliao']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="ziliao" id="ziliao" value="0" <?php if($systemparameters['ziliao']==0){ ?> checked <?php }?>>
    关</td>
      </tr>
      <tr style="display:none">
        <td align="center">服务中心奖金查询</td>
        <td align="center"><input type="radio" name="bdbonus" id="bdbonus" value="1" <?php if($systemparameters['bdbonus']==1){ ?> checked <?php }?>>
开
    <input type="radio" name="bdbonus" id="bdbonus" value="0" <?php if($systemparameters['bdbonus']==0){ ?> checked <?php }?>>
    关</td>
      </tr>
      
	  <tr style="display:none">
        <td align="center">服务奖方案</td>
        <td align="center">
          <select name="ff" id="ff">
            <option value="1" <?php if($systemparameters['ff']==1){?> selected <?php }?>>十代</option>
            <option value="2" <?php if($systemparameters['ff']==2){?> selected <?php }?>>十层</option>
        </select></td>
      </tr>
      
      <tr style="display:none">
        <td align="center">第三市场方案</td>
        <td align="center">
          <select name="ms" id="ms">
            <option value="1" <?php if($systemparameters['ms']==1){?> selected <?php }?>>始终开启</option>
            <option value="2" <?php if($systemparameters['ms']==2){?> selected <?php }?>>不开启</option>
            <option value="3" <?php if($systemparameters['ms']==3){?> selected <?php }?>>一星以上开启</option>
            <option value="4" <?php if($systemparameters['ms']==4){?> selected <?php }?>>二星以上开启</option>
            <option value="5" <?php if($systemparameters['ms']==5){?> selected <?php }?>>三星以上开启</option>
            <option value="6" <?php if($systemparameters['ms']==6){?> selected <?php }?>>四星以上开启</option>
            <option value="7" <?php if($systemparameters['ms']==7){?> selected <?php }?>>五星以上开启</option>
            <option value="8" <?php if($systemparameters['ms']==8){?> selected <?php }?>>一总以上开启</option>
            <option value="9" <?php if($systemparameters['ms']==9){?> selected <?php }?>>二总以上开启</option>
            <option value="10" <?php if($systemparameters['ms']==10){?> selected <?php }?>>三总以上开启</option>
            <option value="11" <?php if($systemparameters['ms']==11){?> selected <?php }?>>四总以上开启</option>
            <option value="12" <?php if($systemparameters['ms']==12){?> selected <?php }?>>五总以上开启</option>
          </select></td>
      </tr>
      
      <tr>
        <td align="center">在线客服</td>
        <td align="center"><input name="qq1" type="text" id="qq1" value="<?=$systemparameters['qq1']?>" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td align="center">公司财务</td>
        <td align="center"><input name="qq2" type="text" id="qq2" value="<?=$systemparameters['qq2']?>" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td align="center">售后服务</td>
        <td align="center"><input name="qq3" type="text" id="qq3" value="<?=$systemparameters['qq3']?>" size="12" maxlength="12"></td>
      </tr>
      <tr style="display:none">
        <td align="center">在线客服4</td>
        <td align="center"><input name="qq4" type="text" id="qq4" value="<?=$systemparameters['qq4']?>" size="12" maxlength="12"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input name="button" type="submit" class="btn2" id="button" value="保存"></td>
      </tr>
    </table>
</form>
</body>
</html>
<script language="javascript">

<!--

function affirm(t)

{  

var ipt = document.getElementsByTagName("input");    

var i = 0;    

var allownum = 4;//定义最多能选择的个数   

for(var j = 0; j < ipt.length; j++)  

{       

if(ipt[j].type == "checkbox" && ipt[j].checked)       

i++;   

}    

if(i > allownum)    

{        

alert("你最多只能选择"+ allownum +"项！");        

t.checked = false;    

}


}

function sss()

{  

var ipt = document.getElementsByTagName("input");    

var i = 0;    


for(var j = 0; j < ipt.length; j++)  

{       

if(ipt[j].type == "checkbox" && ipt[j].checked)       

i++;   

}  


if(i === 0)    

{        

alert("请选择提现星期");        
return false;    

}

return true;
}

function lua(){
	var hh=document.getElementsByClassName("hour");
	var reg=/^([0-9]|1[0-9]|2[0-4]){1}(:[0-5][0-9]){0,1}$/;
	var jk;
	
	for(var c=0;c<=hh.length;c++){
	
		if(reg.test(hh[c].value)){
			jk++;
		}else{
			alert("请填写提现时间");
			hh[c].focus();
			return false;
		}
	}
	
	if(jk ==2){
		return true;
	}
}


//-->

</script>