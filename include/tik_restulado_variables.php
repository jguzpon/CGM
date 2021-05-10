<?php
$strTableName="tik_restulado";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_restulado";

$gstrOrderBy="ORDER BY Solicitud, Secuencia";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_restulado");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_restulado"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>