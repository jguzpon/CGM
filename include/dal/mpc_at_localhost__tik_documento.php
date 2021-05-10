<?php
$dalTabletik_documento = array();
$dalTabletik_documento["Solicitud"] = array("type"=>20,"varname"=>"Solicitud", "name" => "Solicitud");
$dalTabletik_documento["Secuencia"] = array("type"=>2,"varname"=>"Secuencia", "name" => "Secuencia");
$dalTabletik_documento["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTabletik_documento["Documentos"] = array("type"=>201,"varname"=>"Documentos", "name" => "Documentos");
$dalTabletik_documento["Fotografias"] = array("type"=>201,"varname"=>"Fotografias", "name" => "Fotografias");
$dalTabletik_documento["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_documento["FechaSistema"] = array("type"=>135,"varname"=>"FechaSistema", "name" => "FechaSistema");
	$dalTabletik_documento["Solicitud"]["key"]=true;
	$dalTabletik_documento["Secuencia"]["key"]=true;

$dal_info["mpc_at_localhost__tik_documento"] = &$dalTabletik_documento;
?>