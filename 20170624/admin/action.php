<?php
include_once "../function.php";
class action
{
	public static function record($lx,$uid,$operation,$jine){
		$sql="insert action(time,lxx,uid,jinee,operationid) values(now(),'{$lx}',{$uid},'{$jine}',{$operation})";

		mysql_query($sql);
	}
}