<?php
$dalTabletik_tipo = array();
$dalTabletik_tipo["TipoSolicitud"] = array("type"=>2,"varname"=>"TipoSolicitud", "name" => "TipoSolicitud");
$dalTabletik_tipo["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTabletik_tipo["Nomenclatura"] = array("type"=>200,"varname"=>"Nomenclatura", "name" => "Nomenclatura");
$dalTabletik_tipo["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_tipo["FechaSistema"] = array("type"=>135,"varname"=>"FechaSistema", "name" => "FechaSistema");
	$dalTabletik_tipo["TipoSolicitud"]["key"]=true;

$dal_info["mpc_at_localhost__tik_tipo"] = &$dalTabletik_tipo;
?>