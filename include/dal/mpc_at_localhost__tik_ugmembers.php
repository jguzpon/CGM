<?php
$dalTabletik_ugmembers = array();
$dalTabletik_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTabletik_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
	$dalTabletik_ugmembers["UserName"]["key"]=true;
	$dalTabletik_ugmembers["GroupID"]["key"]=true;

$dal_info["mpc_at_localhost__tik_ugmembers"] = &$dalTabletik_ugmembers;
?>