<?php
$dalTabletik_tablas = array();
$dalTabletik_tablas["Grupo"] = array("type"=>2,"varname"=>"Grupo", "name" => "Grupo");
$dalTabletik_tablas["Secuencia"] = array("type"=>2,"varname"=>"Secuencia", "name" => "Secuencia");
$dalTabletik_tablas["DescripcionGrupo"] = array("type"=>200,"varname"=>"DescripcionGrupo", "name" => "DescripcionGrupo");
$dalTabletik_tablas["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTabletik_tablas["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_tablas["FechaSistema"] = array("type"=>135,"varname"=>"FechaSistema", "name" => "FechaSistema");
	$dalTabletik_tablas["Grupo"]["key"]=true;
	$dalTabletik_tablas["Secuencia"]["key"]=true;

$dal_info["mpc_at_localhost__tik_tablas"] = &$dalTabletik_tablas;
?>