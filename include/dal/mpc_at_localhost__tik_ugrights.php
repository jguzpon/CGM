<?php
$dalTabletik_ugrights = array();
$dalTabletik_ugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName");
$dalTabletik_ugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
$dalTabletik_ugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask");
$dalTabletik_ugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page");
	$dalTabletik_ugrights["TableName"]["key"]=true;
	$dalTabletik_ugrights["GroupID"]["key"]=true;

$dal_info["mpc_at_localhost__tik_ugrights"] = &$dalTabletik_ugrights;
?>