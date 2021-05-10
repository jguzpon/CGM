<?php
$dalTabletik_firmash = array();
$dalTabletik_firmash["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTabletik_firmash["FechaCambio"] = array("type"=>7,"varname"=>"FechaCambio", "name" => "FechaCambio");
$dalTabletik_firmash["FirmaDigital"] = array("type"=>200,"varname"=>"FirmaDigital", "name" => "FirmaDigital");
$dalTabletik_firmash["Firma"] = array("type"=>128,"varname"=>"Firma", "name" => "Firma");
	$dalTabletik_firmash["Usuario"]["key"]=true;
	$dalTabletik_firmash["FechaCambio"]["key"]=true;

$dal_info["mpc_at_localhost__tik_firmash"] = &$dalTabletik_firmash;
?>