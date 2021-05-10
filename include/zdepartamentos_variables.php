<?php
$strTableName="zdepartamentos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="zdepartamentos";

$gstrOrderBy="ORDER BY Descripcion";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("zdepartamentos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["zdepartamentos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>