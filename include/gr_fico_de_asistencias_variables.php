<?php
$strTableName="Gráfico de Asistencias";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_interno";

$gstrOrderBy="ORDER BY tik_interno.DepartamentoSolicitar, tik_interno.TipoSolicitud";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Gráfico de Asistencias");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Gráfico de Asistencias"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>