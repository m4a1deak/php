<?php
include_once "../function.php";
$html="";
if(isset($_GET['province'])){
	$sql="select * from city where fatherid={$_GET['province']}";
	$rs=getAll($sql);
	$html="<option value='-1'>请选择城市</option>";
	foreach($rs as $v){
		$html.="<option value='{$v['cityid']}'>{$v['city']}</option>";
	}
	echo $html;
}elseif(isset($_GET['city'])){
	$sql="select * from area where fatherid={$_GET['city']}";
	$rs=getAll($sql);
	$html="<option value='-1'>请选择县区</option>";
	foreach($rs as $v){
		$html.="<option value='{$v['areaid']}'>{$v['area']}</option>";
	}
	echo $html;
}