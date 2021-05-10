<?php
$strTableName="Asistencias Realizadas por Fecha";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_interno";

$gstrOrderBy="ORDER BY tik_interno.Solicitud DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Asistencias Realizadas por Fecha");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Asistencias Realizadas por Fecha"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>