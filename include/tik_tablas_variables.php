<?php
$strTableName="tik_tablas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_tablas";

$gstrOrderBy="ORDER BY Grupo, Secuencia";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_tablas");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_tablas"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>