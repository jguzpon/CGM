<?php
$dalTabletik_chat = array();
$dalTabletik_chat["DeUsuario"] = array("type"=>200,"varname"=>"DeUsuario", "name" => "DeUsuario");
$dalTabletik_chat["FechaHora"] = array("type"=>135,"varname"=>"FechaHora", "name" => "FechaHora");
$dalTabletik_chat["AUsuario"] = array("type"=>200,"varname"=>"AUsuario", "name" => "AUsuario");
$dalTabletik_chat["Mensaje"] = array("type"=>201,"varname"=>"Mensaje", "name" => "Mensaje");
$dalTabletik_chat["Archivo"] = array("type"=>201,"varname"=>"Archivo", "name" => "Archivo");
$dalTabletik_chat["Estado"] = array("type"=>129,"varname"=>"Estado", "name" => "Estado");
	$dalTabletik_chat["DeUsuario"]["key"]=true;
	$dalTabletik_chat["FechaHora"]["key"]=true;

$dal_info["mpc_at_localhost__tik_chat"] = &$dalTabletik_chat;
?>