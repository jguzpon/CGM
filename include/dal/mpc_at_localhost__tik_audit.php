<?php
$dalTabletik_audit = array();
$dalTabletik_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletik_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTabletik_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTabletik_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
$dalTabletik_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTabletik_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTabletik_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
	$dalTabletik_audit["id"]["key"]=true;

$dal_info["mpc_at_localhost__tik_audit"] = &$dalTabletik_audit;
?>