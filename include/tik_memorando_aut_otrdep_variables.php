<?php
$strTableName="tik_memorando_aut_otrdep";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_memorando_aut_otrdep";

$gstrOrderBy="ORDER BY NoMemorando";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_memorando_aut_otrdep");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_memorando_aut_otrdep"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>