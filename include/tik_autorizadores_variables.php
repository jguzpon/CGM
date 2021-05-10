<?php
$strTableName="tik_autorizadores";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_autorizadores";

$gstrOrderBy="ORDER BY Usuario";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_autorizadores");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_autorizadores"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>