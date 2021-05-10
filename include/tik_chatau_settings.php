<?php
$tdatatik_chatau = array();
$tdatatik_chatau[".searchableFields"] = array();
$tdatatik_chatau[".ShortName"] = "tik_chatau";
$tdatatik_chatau[".OwnerID"] = "";
$tdatatik_chatau[".OriginalTable"] = "tik_chatau";


$tdatatik_chatau[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" );
$tdatatik_chatau[".originalPagesByType"] = $tdatatik_chatau[".pagesByType"];
$tdatatik_chatau[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"]}" ) );
$tdatatik_chatau[".originalPages"] = $tdatatik_chatau[".pages"];
$tdatatik_chatau[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\"}" );
$tdatatik_chatau[".originalDefaultPages"] = $tdatatik_chatau[".defaultPages"];

//	field labels
$fieldLabelstik_chatau = array();
$fieldToolTipstik_chatau = array();
$pageTitlestik_chatau = array();
$placeHolderstik_chatau = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_chatau["Spanish"] = array();
	$fieldToolTipstik_chatau["Spanish"] = array();
	$placeHolderstik_chatau["Spanish"] = array();
	$pageTitlestik_chatau["Spanish"] = array();
	$fieldLabelstik_chatau["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_chatau["Spanish"]["Usuario"] = "";
	$placeHolderstik_chatau["Spanish"]["Usuario"] = "";
	$fieldLabelstik_chatau["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipstik_chatau["Spanish"]["Nombre"] = "";
	$placeHolderstik_chatau["Spanish"]["Nombre"] = "";
	$fieldLabelstik_chatau["Spanish"]["FechaHora"] = "Fecha Hora";
	$fieldToolTipstik_chatau["Spanish"]["FechaHora"] = "";
	$placeHolderstik_chatau["Spanish"]["FechaHora"] = "";
	if (count($fieldToolTipstik_chatau["Spanish"]))
		$tdatatik_chatau[".isUseToolTips"] = true;
}


	$tdatatik_chatau[".NCSearch"] = true;



$tdatatik_chatau[".shortTableName"] = "tik_chatau";
$tdatatik_chatau[".nSecOptions"] = 0;

$tdatatik_chatau[".mainTableOwnerID"] = "";
$tdatatik_chatau[".entityType"] = 0;
$tdatatik_chatau[".connId"] = "mpc_at_localhost";


$tdatatik_chatau[".strOriginalTableName"] = "tik_chatau";

	



$tdatatik_chatau[".showAddInPopup"] = false;

$tdatatik_chatau[".showEditInPopup"] = false;

$tdatatik_chatau[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_chatau[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_chatau[".listAjax"] = false;
//	temporary
//$tdatatik_chatau[".listAjax"] = false;

	$tdatatik_chatau[".audit"] = true;

	$tdatatik_chatau[".locking"] = false;


$pages = $tdatatik_chatau[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_chatau[".edit"] = true;
	$tdatatik_chatau[".afterEditAction"] = 1;
	$tdatatik_chatau[".closePopupAfterEdit"] = 1;
	$tdatatik_chatau[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_chatau[".add"] = true;
$tdatatik_chatau[".afterAddAction"] = 1;
$tdatatik_chatau[".closePopupAfterAdd"] = 1;
$tdatatik_chatau[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_chatau[".list"] = true;
}



$tdatatik_chatau[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_chatau[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_chatau[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_chatau[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_chatau[".printFriendly"] = true;
}



$tdatatik_chatau[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_chatau[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_chatau[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_chatau[".isUseAjaxSuggest"] = true;

$tdatatik_chatau[".rowHighlite"] = true;



																								

$tdatatik_chatau[".ajaxCodeSnippetAdded"] = false;

$tdatatik_chatau[".buttonsAdded"] = false;

$tdatatik_chatau[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_chatau[".isUseTimeForSearch"] = false;


$tdatatik_chatau[".badgeColor"] = "9ACD32";


$tdatatik_chatau[".allSearchFields"] = array();
$tdatatik_chatau[".filterFields"] = array();
$tdatatik_chatau[".requiredSearchFields"] = array();

$tdatatik_chatau[".googleLikeFields"] = array();
$tdatatik_chatau[".googleLikeFields"][] = "Usuario";
$tdatatik_chatau[".googleLikeFields"][] = "Nombre";
$tdatatik_chatau[".googleLikeFields"][] = "FechaHora";



$tdatatik_chatau[".tableType"] = "list";

$tdatatik_chatau[".printerPageOrientation"] = 0;
$tdatatik_chatau[".nPrinterPageScale"] = 100;

$tdatatik_chatau[".nPrinterSplitRecords"] = 40;

$tdatatik_chatau[".geocodingEnabled"] = false;










$tdatatik_chatau[".pageSize"] = 20;

$tdatatik_chatau[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Nombre";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_chatau[".strOrderBy"] = $tstrOrderBy;

$tdatatik_chatau[".orderindexes"] = array();
	$tdatatik_chatau[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Nombre");



$tdatatik_chatau[".sqlHead"] = "SELECT Usuario, Nombre, FechaHora";
$tdatatik_chatau[".sqlFrom"] = "FROM tik_chatau";
$tdatatik_chatau[".sqlWhereExpr"] = "(FechaHora <> '')";
$tdatatik_chatau[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_chatau[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_chatau[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_chatau[".highlightSearchResults"] = true;

$tableKeystik_chatau = array();
$tableKeystik_chatau[] = "Usuario";
$tdatatik_chatau[".Keys"] = $tableKeystik_chatau;


$tdatatik_chatau[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_chatau";
	$fdata["Label"] = GetFieldLabel("tik_chatau","Usuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "zusuarios";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Nombre", 'lookupF'=>"Nombre");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Usuario";

	

	
	$edata["LookupOrderBy"] = "Usuario";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatik_chatau["Usuario"] = $fdata;
		$tdatatik_chatau[".searchableFields"][] = "Usuario";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "tik_chatau";
	$fdata["Label"] = GetFieldLabel("tik_chatau","Nombre");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatik_chatau["Nombre"] = $fdata;
		$tdatatik_chatau[".searchableFields"][] = "Nombre";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_chatau";
	$fdata["Label"] = GetFieldLabel("tik_chatau","FechaHora");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaHora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaHora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatik_chatau["FechaHora"] = $fdata;
		$tdatatik_chatau[".searchableFields"][] = "FechaHora";


$tables_data["tik_chatau"]=&$tdatatik_chatau;
$field_labels["tik_chatau"] = &$fieldLabelstik_chatau;
$fieldToolTips["tik_chatau"] = &$fieldToolTipstik_chatau;
$placeHolders["tik_chatau"] = &$placeHolderstik_chatau;
$page_titles["tik_chatau"] = &$pageTitlestik_chatau;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_chatau"] = array();
//	tik_chat
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_chat";
		$detailsParam["dOriginalTable"] = "tik_chat";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_chat";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_chat");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_chatau"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_chatau"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_chatau"][$dIndex]["masterKeys"][]="Usuario";

	$detailsTablesData["tik_chatau"][$dIndex]["masterKeys"][]="Usuario";

				$detailsTablesData["tik_chatau"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_chatau"][$dIndex]["detailKeys"][]="DeUsuario";

		
	$detailsTablesData["tik_chatau"][$dIndex]["detailKeys"][]="AUsuario";

// tables which are master tables for current table (detail)
$masterTablesData["tik_chatau"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_chatau()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Usuario, Nombre, FechaHora";
$proto0["m_strFrom"] = "FROM tik_chatau";
$proto0["m_strWhere"] = "(FechaHora <> '')";
$proto0["m_strOrderBy"] = "ORDER BY Nombre";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "FechaHora <> ''";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_chatau",
	"m_srcTableName" => "tik_chatau"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<> ''";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_chatau",
	"m_srcTableName" => "tik_chatau"
));

$proto6["m_sql"] = "Usuario";
$proto6["m_srcTableName"] = "tik_chatau";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "tik_chatau",
	"m_srcTableName" => "tik_chatau"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "tik_chatau";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_chatau",
	"m_srcTableName" => "tik_chatau"
));

$proto10["m_sql"] = "FechaHora";
$proto10["m_srcTableName"] = "tik_chatau";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tik_chatau";
$proto13["m_srcTableName"] = "tik_chatau";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Usuario";
$proto13["m_columns"][] = "Nombre";
$proto13["m_columns"][] = "FechaHora";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tik_chatau";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tik_chatau";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "tik_chatau",
	"m_srcTableName" => "tik_chatau"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_chatau";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_chatau = createSqlQuery_tik_chatau();


	
		;

			

$tdatatik_chatau[".sqlquery"] = $queryData_tik_chatau;



$tableEvents["tik_chatau"] = new eventsBase;
$tdatatik_chatau[".hasEvents"] = false;

?>