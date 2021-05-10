<?php
$tdatatik_memorando_l = array();
$tdatatik_memorando_l[".searchableFields"] = array();
$tdatatik_memorando_l[".ShortName"] = "tik_memorando_l";
$tdatatik_memorando_l[".OwnerID"] = "";
$tdatatik_memorando_l[".OriginalTable"] = "tik_memorando_l";


$tdatatik_memorando_l[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatik_memorando_l[".originalPagesByType"] = $tdatatik_memorando_l[".pagesByType"];
$tdatatik_memorando_l[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatik_memorando_l[".originalPages"] = $tdatatik_memorando_l[".pages"];
$tdatatik_memorando_l[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatik_memorando_l[".originalDefaultPages"] = $tdatatik_memorando_l[".defaultPages"];

//	field labels
$fieldLabelstik_memorando_l = array();
$fieldToolTipstik_memorando_l = array();
$pageTitlestik_memorando_l = array();
$placeHolderstik_memorando_l = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_memorando_l["Spanish"] = array();
	$fieldToolTipstik_memorando_l["Spanish"] = array();
	$placeHolderstik_memorando_l["Spanish"] = array();
	$pageTitlestik_memorando_l["Spanish"] = array();
	$fieldLabelstik_memorando_l["Spanish"]["NoMemorando"] = "No Memorando";
	$fieldToolTipstik_memorando_l["Spanish"]["NoMemorando"] = "";
	$placeHolderstik_memorando_l["Spanish"]["NoMemorando"] = "";
	$fieldLabelstik_memorando_l["Spanish"]["A"] = "Usuario Lectura";
	$fieldToolTipstik_memorando_l["Spanish"]["A"] = "";
	$placeHolderstik_memorando_l["Spanish"]["A"] = "";
	$fieldLabelstik_memorando_l["Spanish"]["FechaHora"] = "Fecha/Hora Lectura";
	$fieldToolTipstik_memorando_l["Spanish"]["FechaHora"] = "";
	$placeHolderstik_memorando_l["Spanish"]["FechaHora"] = "";
	if (count($fieldToolTipstik_memorando_l["Spanish"]))
		$tdatatik_memorando_l[".isUseToolTips"] = true;
}


	$tdatatik_memorando_l[".NCSearch"] = true;



$tdatatik_memorando_l[".shortTableName"] = "tik_memorando_l";
$tdatatik_memorando_l[".nSecOptions"] = 0;

$tdatatik_memorando_l[".mainTableOwnerID"] = "";
$tdatatik_memorando_l[".entityType"] = 0;
$tdatatik_memorando_l[".connId"] = "mpc_at_localhost";


$tdatatik_memorando_l[".strOriginalTableName"] = "tik_memorando_l";

	



$tdatatik_memorando_l[".showAddInPopup"] = false;

$tdatatik_memorando_l[".showEditInPopup"] = false;

$tdatatik_memorando_l[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_memorando_l[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_memorando_l[".listAjax"] = false;
//	temporary
//$tdatatik_memorando_l[".listAjax"] = false;

	$tdatatik_memorando_l[".audit"] = true;

	$tdatatik_memorando_l[".locking"] = false;


$pages = $tdatatik_memorando_l[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_memorando_l[".edit"] = true;
	$tdatatik_memorando_l[".afterEditAction"] = 1;
	$tdatatik_memorando_l[".closePopupAfterEdit"] = 1;
	$tdatatik_memorando_l[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_memorando_l[".add"] = true;
$tdatatik_memorando_l[".afterAddAction"] = 1;
$tdatatik_memorando_l[".closePopupAfterAdd"] = 1;
$tdatatik_memorando_l[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_memorando_l[".list"] = true;
}



$tdatatik_memorando_l[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_memorando_l[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_memorando_l[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_memorando_l[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_memorando_l[".printFriendly"] = true;
}



$tdatatik_memorando_l[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_memorando_l[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_memorando_l[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_memorando_l[".isUseAjaxSuggest"] = true;

$tdatatik_memorando_l[".rowHighlite"] = true;



																																																

$tdatatik_memorando_l[".ajaxCodeSnippetAdded"] = false;

$tdatatik_memorando_l[".buttonsAdded"] = false;

$tdatatik_memorando_l[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_memorando_l[".isUseTimeForSearch"] = false;


$tdatatik_memorando_l[".badgeColor"] = "8fbc8b";


$tdatatik_memorando_l[".allSearchFields"] = array();
$tdatatik_memorando_l[".filterFields"] = array();
$tdatatik_memorando_l[".requiredSearchFields"] = array();

$tdatatik_memorando_l[".googleLikeFields"] = array();
$tdatatik_memorando_l[".googleLikeFields"][] = "NoMemorando";
$tdatatik_memorando_l[".googleLikeFields"][] = "A";
$tdatatik_memorando_l[".googleLikeFields"][] = "FechaHora";



$tdatatik_memorando_l[".tableType"] = "list";

$tdatatik_memorando_l[".printerPageOrientation"] = 0;
$tdatatik_memorando_l[".nPrinterPageScale"] = 100;

$tdatatik_memorando_l[".nPrinterSplitRecords"] = 40;

$tdatatik_memorando_l[".geocodingEnabled"] = false;










$tdatatik_memorando_l[".pageSize"] = 20;

$tdatatik_memorando_l[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY NoMemorando DESC, A";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_memorando_l[".strOrderBy"] = $tstrOrderBy;

$tdatatik_memorando_l[".orderindexes"] = array();
	$tdatatik_memorando_l[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "NoMemorando");

	$tdatatik_memorando_l[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "A");



$tdatatik_memorando_l[".sqlHead"] = "SELECT NoMemorando, A, FechaHora";
$tdatatik_memorando_l[".sqlFrom"] = "FROM tik_memorando_l";
$tdatatik_memorando_l[".sqlWhereExpr"] = "";
$tdatatik_memorando_l[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_memorando_l[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_memorando_l[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_memorando_l[".highlightSearchResults"] = true;

$tableKeystik_memorando_l = array();
$tableKeystik_memorando_l[] = "NoMemorando";
$tdatatik_memorando_l[".Keys"] = $tableKeystik_memorando_l;


$tdatatik_memorando_l[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando_l";
	$fdata["Label"] = GetFieldLabel("tik_memorando_l","NoMemorando");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "NoMemorando";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoMemorando";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
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


	$tdatatik_memorando_l["NoMemorando"] = $fdata;
		$tdatatik_memorando_l[".searchableFields"][] = "NoMemorando";
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "tik_memorando_l";
	$fdata["Label"] = GetFieldLabel("tik_memorando_l","A");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "A";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "A";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";

	

	
	$edata["LookupOrderBy"] = "Usuario";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatik_memorando_l["A"] = $fdata;
		$tdatatik_memorando_l[".searchableFields"][] = "A";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_memorando_l";
	$fdata["Label"] = GetFieldLabel("tik_memorando_l","FechaHora");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaHora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaHora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatik_memorando_l["FechaHora"] = $fdata;
		$tdatatik_memorando_l[".searchableFields"][] = "FechaHora";


$tables_data["tik_memorando_l"]=&$tdatatik_memorando_l;
$field_labels["tik_memorando_l"] = &$fieldLabelstik_memorando_l;
$fieldToolTips["tik_memorando_l"] = &$fieldToolTipstik_memorando_l;
$placeHolders["tik_memorando_l"] = &$placeHolderstik_memorando_l;
$page_titles["tik_memorando_l"] = &$pageTitlestik_memorando_l;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_memorando_l"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_memorando_l"] = array();



	
				$strOriginalDetailsTable="tik_memorando";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_memorando";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_memorando";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_memorando_l"][0] = $masterParams;
				$masterTablesData["tik_memorando_l"][0]["masterKeys"] = array();
	$masterTablesData["tik_memorando_l"][0]["masterKeys"][]="NoMemorando";
				$masterTablesData["tik_memorando_l"][0]["detailKeys"] = array();
	$masterTablesData["tik_memorando_l"][0]["detailKeys"][]="NoMemorando";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_memorando_l()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando, A, FechaHora";
$proto0["m_strFrom"] = "FROM tik_memorando_l";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY NoMemorando DESC, A";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_l",
	"m_srcTableName" => "tik_memorando_l"
));

$proto6["m_sql"] = "NoMemorando";
$proto6["m_srcTableName"] = "tik_memorando_l";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando_l",
	"m_srcTableName" => "tik_memorando_l"
));

$proto8["m_sql"] = "A";
$proto8["m_srcTableName"] = "tik_memorando_l";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_memorando_l",
	"m_srcTableName" => "tik_memorando_l"
));

$proto10["m_sql"] = "FechaHora";
$proto10["m_srcTableName"] = "tik_memorando_l";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tik_memorando_l";
$proto13["m_srcTableName"] = "tik_memorando_l";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "NoMemorando";
$proto13["m_columns"][] = "A";
$proto13["m_columns"][] = "FechaHora";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tik_memorando_l";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tik_memorando_l";
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
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_l",
	"m_srcTableName" => "tik_memorando_l"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 0;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando_l",
	"m_srcTableName" => "tik_memorando_l"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_memorando_l";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_memorando_l = createSqlQuery_tik_memorando_l();


	
		;

			

$tdatatik_memorando_l[".sqlquery"] = $queryData_tik_memorando_l;



$tableEvents["tik_memorando_l"] = new eventsBase;
$tdatatik_memorando_l[".hasEvents"] = false;

?>