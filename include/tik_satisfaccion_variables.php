<?php
$strTableName="tik_satisfaccion";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_satisfaccion";

$gstrOrderBy="ORDER BY Nivel";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_satisfaccion");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_satisfaccion"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>