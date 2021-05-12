<?php
$strTableName="SolicitudesVencidas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_interno";

$gstrOrderBy="ORDER BY Solicitud DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("SolicitudesVencidas");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["SolicitudesVencidas"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>