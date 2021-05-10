<?php
$strTableName="tik_memorando_adjunto";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tik_memorando_adjunto";

$gstrOrderBy="ORDER BY NoMemorando DESC, Documento";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tik_memorando_adjunto");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tik_memorando_adjunto"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>