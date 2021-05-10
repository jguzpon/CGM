<?php
$strTableName="Pendientes por Departamento";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_interno";

$gstrOrderBy="ORDER BY tik_interno.Solicitud DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Pendientes por Departamento");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Pendientes por Departamento"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>