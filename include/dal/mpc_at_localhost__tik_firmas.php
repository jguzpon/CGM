<?php
$dalTabletik_firmas = array();
$dalTabletik_firmas["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_firmas["FirmaDigital"] = array("type"=>200,"varname"=>"FirmaDigital", "name" => "FirmaDigital");
$dalTabletik_firmas["Firma"] = array("type"=>128,"varname"=>"Firma", "name" => "Firma");
$dalTabletik_firmas["ValidoHasta"] = array("type"=>7,"varname"=>"ValidoHasta", "name" => "ValidoHasta");
$dalTabletik_firmas["Departamentos"] = array("type"=>201,"varname"=>"Departamentos", "name" => "Departamentos");
	$dalTabletik_firmas["Usuario"]["key"]=true;

$dal_info["mpc_at_localhost__tik_firmas"] = &$dalTabletik_firmas;
?>