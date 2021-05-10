<?php
$dalTabletik_restulado = array();
$dalTabletik_restulado["Solicitud"] = array("type"=>20,"varname"=>"Solicitud", "name" => "Solicitud");
$dalTabletik_restulado["Secuencia"] = array("type"=>2,"varname"=>"Secuencia", "name" => "Secuencia");
$dalTabletik_restulado["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTabletik_restulado["Documentos"] = array("type"=>201,"varname"=>"Documentos", "name" => "Documentos");
$dalTabletik_restulado["Fotografias"] = array("type"=>201,"varname"=>"Fotografias", "name" => "Fotografias");
$dalTabletik_restulado["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_restulado["FechaSistema"] = array("type"=>135,"varname"=>"FechaSistema", "name" => "FechaSistema");
	$dalTabletik_restulado["Solicitud"]["key"]=true;
	$dalTabletik_restulado["Secuencia"]["key"]=true;

$dal_info["mpc_at_localhost__tik_restulado"] = &$dalTabletik_restulado;
?>