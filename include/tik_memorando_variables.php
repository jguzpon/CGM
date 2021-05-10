<?php
$strTableName="tik_memorando";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_memorando";

$gstrOrderBy="ORDER BY NoMemorando DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_memorando");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_memorando"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>