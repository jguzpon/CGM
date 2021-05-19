<?php
$strTableName="vtik_memorando_hist";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_memorando_pend";

$gstrOrderBy="ORDER BY NoMemorando DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vtik_memorando_hist");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vtik_memorando_hist"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>