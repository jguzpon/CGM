<?php
$strTableName="tik_firmash";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_firmash";

$gstrOrderBy="ORDER BY Usuario, FechaCambio DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_firmash");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_firmash"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>