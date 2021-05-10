<?php
$strTableName="tik_tipomemo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_tipomemo";

$gstrOrderBy="ORDER BY TipoMemorando";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_tipomemo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_tipomemo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>