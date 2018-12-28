<?php
include("admin_check.php");
include_once("../class/ulevel_class.php");
include_once("../class/system_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(6,21);
$_system=new system_class();
$sys=$_system->system_information(1);
$sql="select * from zjulevel ";
$rs=getAll($sql);
if($_POST['button']){
	$ulevel=new ulevel_class();
	$lvid="lvid";
	$lvname="lvname";
	$dan="dan";
	$isbd="isbd";
	$lsk="lsk";
	$yl1="yl1";
	$yl2="yl2";
	$yl3="yl3";
	$yl4="yl4";
	$yl5="yl5";
	$yl6="yl6";
	$yl7="yl7";
	$yl8="yl8";
	$yl9="yl9";
	$yl10="yl10";
	$yl11="yl11";
	$yl12="yl12";
	$yl13="yl13";
	$yl14="yl14";
	$yl15="yl15";
	$yl16="yl16";
	$yl17="yl17";
	$yl18="yl18";
	$yl19="yl19";
	$yl20="yl20";
	$yl21="yl21";
	for($i=1;$i<=$ulevel->Getulevelcount();$i++){
		$up_ulevel=NULL;
		$up_ulevel['id']=$_POST[$lvid.$i];
		$up_ulevel['lvname']=$_POST[$lvname.$i];
		$up_ulevel['dan']=$_POST[$dan.$i];
		$up_ulevel['lsk']=$_POST[$lsk.$i];
		$up_ulevel['isbd']=$_POST[$isbd.$i];
		$up_ulevel['yl1']=$_POST[$yl1.$i];
		$up_ulevel['yl2']=$_POST[$yl2.$i];
		$up_ulevel['yl3']=$_POST[$yl3.$i];
		$up_ulevel['yl4']=$_POST[$yl4.$i];
		$up_ulevel['yl5']=$_POST[$yl5.$i];
		$up_ulevel['yl6']=$_POST[$yl6.$i];
		$up_ulevel['yl7']=$_POST[$yl7.$i];
		$up_ulevel['yl8']=$_POST[$yl8.$i];
		$up_ulevel['yl9']=$_POST[$yl9.$i];
		
		$up_ulevel['yl10']=$_POST[$yl10.$i];
		$up_ulevel['yl11']=$_POST[$yl11.$i];
		$up_ulevel['yl12']=$_POST[$yl12.$i];
		$up_ulevel['yl13']=$_POST[$yl13.$i];
		$up_ulevel['yl14']=$_POST[$yl14.$i];
		$up_ulevel['yl15']=$_POST[$yl15.$i];
		$up_ulevel['yl16']=$_POST[$yl16.$i];
		$up_ulevel['yl17']=$_POST[$yl17.$i];
		$up_ulevel['yl18']=$_POST[$yl18.$i];
		$up_ulevel['yl19']=$_POST[$yl19.$i];
		$up_ulevel['yl20']=$_POST[$yl20.$i];
		$up_ulevel['yl21']=$_POST[$yl21.$i];
		
		$ulevel->ulevel_update($up_ulevel);	
	}
	for($i=1;$i<=count($rs);$i++){
		$sql="update zjulevel set zjarea={$_POST['zjarea'.$i]},lsk={$_POST['lsk2'.$i]} where id={$i}";
		mysql_query($sql);
	}
	
	/* $sys_update['d1']=$_POST['d1'];
	$sys_update['d2']=$_POST['d2'];
	$sys_update['d3']=$_POST['d3'];
	$sys_update['d4']=$_POST['d4'];
	$sys_update['d5']=$_POST['d5'];
	$sys_update['d6']=$_POST['d6'];
	$sys_update['d7']=$_POST['d7'];
	$sys_update['d8']=$_POST['d8'];
	$sys_update['d9']=$_POST['d9'];
	$sys_update['d10']=$_POST['d10'];
	
	$sys_update['ds1']=$_POST['ds1'];
	$sys_update['ds2']=$_POST['ds2'];
	$sys_update['ds3']=$_POST['ds3'];
	$sys_update['ds4']=$_POST['ds4'];
	$sys_update['ds5']=$_POST['ds5'];
	$sys_update['ds6']=$_POST['ds6'];
	$sys_update['ds7']=$_POST['ds7'];
	$sys_update['ds8']=$_POST['ds8'];
	$sys_update['ds9']=$_POST['ds9'];
	$sys_update['ds10']=$_POST['ds10'];
	
	$sys_update['dbl1']=$_POST['dbl1'];
	$sys_update['dbl2']=$_POST['dbl2'];
	$sys_update['dbl3']=$_POST['dbl3'];
	$sys_update['dbl4']=$_POST['dbl4'];
	$sys_update['dbl5']=$_POST['dbl5'];
	$sys_update['dbl6']=$_POST['dbl6'];
	$sys_update['dbl7']=$_POST['dbl7'];
	$sys_update['dbl8']=$_POST['dbl8'];
	$sys_update['dbl9']=$_POST['dbl9'];
	$sys_update['dbl10']=$_POST['dbl10'];
	
	$sys_update['lsbl']=$_POST['lsbl'];
	$sys_update['fxkc']=$_POST['fxkc'];
	$sys_update['fxlj']=$_POST['fxlj'];
	$sys_update['fxtzbl']=$_POST['fxtzbl'];
	$sys_update['jybl']=$_POST['jybl'];
	
	
	$sys_update['id']=1;
	$_system->system_update($sys_update);
	 */
	alert('保存成功.','?');
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>级别参数</title>

</head>
<body >
<form name="form1" method="post" action="?" >
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="24" align="center">级别参数</td>
      </tr>
      <tr>
        <td  align="center">级别</td>
        <td  align="center">名称</td>
        <td  align="center">金额</td>
        <!--  
        <td  align="center">业绩</td>
        <td  align="center">创业基金(注册币)</td>
        -->
        
        <!--<td  align="center">见点N层</td>
        <td  align="center">见点奖%</td>
        <td  align="center">层奖奇数层%</td>
        <td  align="center">层奖偶数层%</td>
        <td  align="center">量奖%</td>
        <td  align="center">日封顶</td>
        <td  align="center">回本奖+见点奖复销</td>
        <td  align="center">层奖+量奖复销</td>
       
        <td  align="center">报单费%</td>
        <td  align="center">重复消费%</td>
        <td  align="center">税费%</td>
        <td  align="center">慈善基金%</td>
        <td  align="center">提现手续费%</td>-->
		  <td  align="center">对碰奖%</td>
		  <td  align="center">直推奖%</td>
		  <td  align="center">领导奖%</td>
		  <td  align="center">日封顶投资额</td>
        
        <!--
        <td  align="center">服务费(%)</td>
        <td  align="center">重复消费</td>
        <td  align="center">注册金卡创业奖</td>
        <td  align="center">注册钻卡创业奖</td>
        <td  align="center">回填金额</td>
        
        <td  align="center">2代</td>
        <td  align="center">3代</td>
        <td  align="center">C网见点1代</td>
        <td  align="center">2代</td>
        <td  align="center">3代</td>
         -->
        
        
    </tr>
      <?php
      	$sql = "SELECT * FROM `ulevel` order by ulevel";
		if($query = mysql_query($sql)){
			$i=1;
			while ($row=mysql_fetch_array($query)){
	  ?>
<tr>
        <td align="center"><input name="lvid<?=$i?>" type="hidden" value="<?=$row['id']?>"><?=$row['ulevel']?></td>
        <td align="center"><input name="lvname<?=$i?>" type="text" value="<?=$row['lvname']?>" size="8" maxlength="20"></td>
        <td align="center"><input name="lsk<?=$i?>" type="text" value="<?=$row['lsk']?>" size="5" maxlength="10"></td>
         <!-- 
        <td align="center"><input name="dan<?=$i?>" type="text" value="<?=$row['dan']?>" size="5" maxlength="10"></td>
        <td align="center"><input name="isbd<?=$i?>" type="text" value="<?=$row['isbd']?>" size="5" maxlength="10"></td>
         -->
        <!--<td   align="center"><input name="yl1<?/*=$i*/?>" type="text" value="<?/*=$row['yl1']*/?>" size="5" maxlength="20"></td>-->
        <td   align="center"><input name="yl2<?=$i?>" type="text" value="<?=$row['yl2']?>" size="5" maxlength="20"></td>
        
        <td   align="center"><input name="yl3<?=$i?>" type="text" value="<?=$row['yl3']?>" size="5" maxlength="20"></td>
        <td   align="center"><input name="yl4<?=$i?>" type="text" value="<?=$row['yl4']?>" size="5" maxlength="20"></td>
       
        <!--<td   align="center"><input name="yl5<?/*=$i*/?>" type="text" value="<?/*=$row['yl5']*/?>" size="5" maxlength="20"></td>-->
        <td   align="center"><input name="yl6<?=$i?>" type="text" value="<?=$row['yl6']?>" size="5" maxlength="20"></td>
	<!-- <td   align="center"><input name="yl7<?/*=$i*/?>" type="text" value="<?/*=$row['yl7']*/?>" size="5" maxlength="20"></td>
         
        <td   align="center"><input name="yl8<?/*=$i*/?>" type="text" value="<?/*=$row['yl8']*/?>" size="5" maxlength="20"></td>
        <td   align="center"><input name="yl9<?/*=$i*/?>" type="text" value="<?/*=$row['yl9']*/?>" size="5" maxlength="20"></td>
       
        <td   align="center"><input name="yl10<?/*=$i*/?>" type="text" value="<?/*=$row['yl10']*/?>" size="5" maxlength="20"></td>
        <td   align="center"><input name="yl11<?/*=$i*/?>" type="text" value="<?/*=$row['yl11']*/?>" size="5" maxlength="20"></td>
        <td   align="center"><input name="yl12<?/*=$i*/?>" type="text" value="<?/*=$row['yl12']*/?>" size="5" maxlength="20"></td>
        <td   align="center"><input name="yl13<?/*=$i*/?>" type="text" value="<?/*=$row['yl13']*/?>" size="5" maxlength="20"></td>-->
       
      </tr>
      <?php
	  			$i++;
			}
		}
	  ?>
    </table>
   
<br>
<!--  
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="16" align="center">晋级奖等级</td>
      </tr>
      <tr>
        <td  align="center">级别</td>
        <td  align="center">名称</td>
        <td  align="center">总收入</td>
        <td  align="center">月薪</td>
        </tr>
     
      <?php
      	$sql = "SELECT * FROM `zjulevel` order by ulevel";
		if($query = mysql_query($sql)){
			$i=1;
			while ($row2=mysql_fetch_array($query)){
	  ?>
       <tr>
        <td align="center"><input name="lvid<?=$i?>" type="hidden" value="<?=$row2['id']?>"><?=$row['ulevel']?></td>
        <td align="center"><input name="zjname<?=$i?>" type="text" value="<?=$row2['zjname']?>" size="8" maxlength="20"></td>
        <td align="center"><input name="zjarea<?=$i?>" type="text" value="<?=$row2['zjarea']?>" size="5" maxlength="20"></td>
        <td align="center"><input name="lsk2<?=$i?>" type="text" value="<?=$row2['lsk']?>" size="5" maxlength="20"></td>
        
        
      </tr>
      <?php
	  			$i++;
			}
		}
	  ?>
    </table>
  -->   
    <br>
<input   name="button" type="submit" class="btn2" id="button" value="保存">
</form>
</body>
</html>
