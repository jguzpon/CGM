<?php
$dalTablezusuarios = array();
$dalTablezusuarios["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTablezusuarios["Clave"] = array("type"=>201,"varname"=>"Clave", "name" => "Clave");
$dalTablezusuarios["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre");
$dalTablezusuarios["CodigoDepto"] = array("type"=>2,"varname"=>"CodigoDepto", "name" => "CodigoDepto");
$dalTablezusuarios["Codigo_Estructura"] = array("type"=>200,"varname"=>"Codigo_Estructura", "name" => "Codigo_Estructura");
$dalTablezusuarios["Area"] = array("type"=>200,"varname"=>"Area", "name" => "Area");
$dalTablezusuarios["Puesto"] = array("type"=>200,"varname"=>"Puesto", "name" => "Puesto");
$dalTablezusuarios["Correo"] = array("type"=>200,"varname"=>"Correo", "name" => "Correo");
$dalTablezusuarios["Telefono"] = array("type"=>200,"varname"=>"Telefono", "name" => "Telefono");
$dalTablezusuarios["FechaInicio"] = array("type"=>7,"varname"=>"FechaInicio", "name" => "FechaInicio");
$dalTablezusuarios["FechaFinal"] = array("type"=>7,"varname"=>"FechaFinal", "name" => "FechaFinal");
$dalTablezusuarios["Estado"] = array("type"=>129,"varname"=>"Estado", "name" => "Estado");
	$dalTablezusuarios["Usuario"]["key"]=true;

$dal_info["mpc_at_localhost__zusuarios"] = &$dalTablezusuarios;
?>