<?php
$strTableName="tik_memorando_l";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_memorando_l";

$gstrOrderBy="ORDER BY NoMemorando DESC, A";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_memorando_l");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_memorando_l"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>