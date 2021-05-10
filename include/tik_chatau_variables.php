<?php
$strTableName="tik_chatau";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_chatau";

$gstrOrderBy="ORDER BY Nombre";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_chatau");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_chatau"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>