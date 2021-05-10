<?php
$strTableName="tik_chat";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_chat";

$gstrOrderBy="ORDER BY DeUsuario, FechaHora DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_chat");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_chat"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>