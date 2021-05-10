<?php
$dalTablezdepartamentos = array();
$dalTablezdepartamentos["CodigoDepto"] = array("type"=>2,"varname"=>"CodigoDepto", "name" => "CodigoDepto");
$dalTablezdepartamentos["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion");
$dalTablezdepartamentos["Programa"] = array("type"=>200,"varname"=>"Programa", "name" => "Programa");
$dalTablezdepartamentos["Actividad"] = array("type"=>200,"varname"=>"Actividad", "name" => "Actividad");
$dalTablezdepartamentos["Proceso"] = array("type"=>200,"varname"=>"Proceso", "name" => "Proceso");
$dalTablezdepartamentos["Nomenclatura"] = array("type"=>200,"varname"=>"Nomenclatura", "name" => "Nomenclatura");
$dalTablezdepartamentos["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTablezdepartamentos["FechaSis"] = array("type"=>7,"varname"=>"FechaSis", "name" => "FechaSis");
$dalTablezdepartamentos["Tipo"] = array("type"=>129,"varname"=>"Tipo", "name" => "Tipo");
	$dalTablezdepartamentos["CodigoDepto"]["key"]=true;

$dal_info["mpc_at_localhost__zdepartamentos"] = &$dalTablezdepartamentos;
?>