<?php
$tdatatik_cfg = array();
$tdatatik_cfg[".searchableFields"] = array();
$tdatatik_cfg[".ShortName"] = "tik_cfg";
$tdatatik_cfg[".OwnerID"] = "";
$tdatatik_cfg[".OriginalTable"] = "tik_cfg";


$tdatatik_cfg[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatik_cfg[".originalPagesByType"] = $tdatatik_cfg[".pagesByType"];
$tdatatik_cfg[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatik_cfg[".originalPages"] = $tdatatik_cfg[".pages"];
$tdatatik_cfg[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatik_cfg[".originalDefaultPages"] = $tdatatik_cfg[".defaultPages"];

//	field labels
$fieldLabelstik_cfg = array();
$fieldToolTipstik_cfg = array();
$pageTitlestik_cfg = array();
$placeHolderstik_cfg = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_cfg["Spanish"] = array();
	$fieldToolTipstik_cfg["Spanish"] = array();
	$placeHolderstik_cfg["Spanish"] = array();
	$pageTitlestik_cfg["Spanish"] = array();
	$fieldLabelstik_cfg["Spanish"]["Codigo"] = "Codigo";
	$fieldToolTipstik_cfg["Spanish"]["Codigo"] = "";
	$placeHolderstik_cfg["Spanish"]["Codigo"] = "";
	$fieldLabelstik_cfg["Spanish"]["DeseaCorreo"] = "Desea Enviar<br>Correo?";
	$fieldToolTipstik_cfg["Spanish"]["DeseaCorreo"] = "";
	$placeHolderstik_cfg["Spanish"]["DeseaCorreo"] = "";
	$fieldLabelstik_cfg["Spanish"]["FechaProceso"] = "Fecha Proceso";
	$fieldToolTipstik_cfg["Spanish"]["FechaProceso"] = "";
	$placeHolderstik_cfg["Spanish"]["FechaProceso"] = "";
	$fieldLabelstik_cfg["Spanish"]["ControlDiasHabiles"] = "Control Dias Habiles";
	$fieldToolTipstik_cfg["Spanish"]["ControlDiasHabiles"] = "";
	$placeHolderstik_cfg["Spanish"]["ControlDiasHabiles"] = "";
	if (count($fieldToolTipstik_cfg["Spanish"]))
		$tdatatik_cfg[".isUseToolTips"] = true;
}


	$tdatatik_cfg[".NCSearch"] = true;



$tdatatik_cfg[".shortTableName"] = "tik_cfg";
$tdatatik_cfg[".nSecOptions"] = 0;

$tdatatik_cfg[".mainTableOwnerID"] = "";
$tdatatik_cfg[".entityType"] = 0;
$tdatatik_cfg[".connId"] = "mpc_at_localhost";


$tdatatik_cfg[".strOriginalTableName"] = "tik_cfg";

	



$tdatatik_cfg[".showAddInPopup"] = false;

$tdatatik_cfg[".showEditInPopup"] = false;

$tdatatik_cfg[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_cfg[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_cfg[".listAjax"] = false;
//	temporary
//$tdatatik_cfg[".listAjax"] = false;

	$tdatatik_cfg[".audit"] = true;

	$tdatatik_cfg[".locking"] = false;


$pages = $tdatatik_cfg[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_cfg[".edit"] = true;
	$tdatatik_cfg[".afterEditAction"] = 0;
	$tdatatik_cfg[".closePopupAfterEdit"] = 1;
	$tdatatik_cfg[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_cfg[".add"] = true;
$tdatatik_cfg[".afterAddAction"] = 0;
$tdatatik_cfg[".closePopupAfterAdd"] = 1;
$tdatatik_cfg[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_cfg[".list"] = true;
}



$tdatatik_cfg[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_cfg[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_cfg[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_cfg[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_cfg[".printFriendly"] = true;
}



$tdatatik_cfg[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_cfg[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_cfg[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_cfg[".isUseAjaxSuggest"] = true;

$tdatatik_cfg[".rowHighlite"] = true;



																		

$tdatatik_cfg[".ajaxCodeSnippetAdded"] = false;

$tdatatik_cfg[".buttonsAdded"] = false;

$tdatatik_cfg[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_cfg[".isUseTimeForSearch"] = false;


$tdatatik_cfg[".badgeColor"] = "CD5C5C";


$tdatatik_cfg[".allSearchFields"] = array();
$tdatatik_cfg[".filterFields"] = array();
$tdatatik_cfg[".requiredSearchFields"] = array();

$tdatatik_cfg[".googleLikeFields"] = array();
$tdatatik_cfg[".googleLikeFields"][] = "Codigo";
$tdatatik_cfg[".googleLikeFields"][] = "DeseaCorreo";
$tdatatik_cfg[".googleLikeFields"][] = "FechaProceso";
$tdatatik_cfg[".googleLikeFields"][] = "ControlDiasHabiles";



$tdatatik_cfg[".tableType"] = "list";

$tdatatik_cfg[".printerPageOrientation"] = 0;
$tdatatik_cfg[".nPrinterPageScale"] = 100;

$tdatatik_cfg[".nPrinterSplitRecords"] = 40;

$tdatatik_cfg[".geocodingEnabled"] = false;










$tdatatik_cfg[".pageSize"] = 20;

$tdatatik_cfg[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Codigo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_cfg[".strOrderBy"] = $tstrOrderBy;

$tdatatik_cfg[".orderindexes"] = array();
	$tdatatik_cfg[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Codigo");



$tdatatik_cfg[".sqlHead"] = "SELECT Codigo,  DeseaCorreo,  FechaProceso,  ControlDiasHabiles";
$tdatatik_cfg[".sqlFrom"] = "FROM tik_cfg";
$tdatatik_cfg[".sqlWhereExpr"] = "";
$tdatatik_cfg[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_cfg[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_cfg[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_cfg[".highlightSearchResults"] = true;

$tableKeystik_cfg = array();
$tableKeystik_cfg[] = "Codigo";
$tdatatik_cfg[".Keys"] = $tableKeystik_cfg;


$tdatatik_cfg[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "tik_cfg";
	$fdata["Label"] = GetFieldLabel("tik_cfg","Codigo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "Codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatik_cfg["Codigo"] = $fdata;
		$tdatatik_cfg[".searchableFields"][] = "Codigo";
//	DeseaCorreo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DeseaCorreo";
	$fdata["GoodName"] = "DeseaCorreo";
	$fdata["ownerTable"] = "tik_cfg";
	$fdata["Label"] = GetFieldLabel("tik_cfg","DeseaCorreo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "DeseaCorreo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeseaCorreo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatatik_cfg["DeseaCorreo"] = $fdata;
		$tdatatik_cfg[".searchableFields"][] = "DeseaCorreo";
//	FechaProceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FechaProceso";
	$fdata["GoodName"] = "FechaProceso";
	$fdata["ownerTable"] = "tik_cfg";
	$fdata["Label"] = GetFieldLabel("tik_cfg","FechaProceso");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaProceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaProceso";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatatik_cfg["FechaProceso"] = $fdata;
		$tdatatik_cfg[".searchableFields"][] = "FechaProceso";
//	ControlDiasHabiles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ControlDiasHabiles";
	$fdata["GoodName"] = "ControlDiasHabiles";
	$fdata["ownerTable"] = "tik_cfg";
	$fdata["Label"] = GetFieldLabel("tik_cfg","ControlDiasHabiles");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "ControlDiasHabiles";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ControlDiasHabiles";

	
	
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


	$tdatatik_cfg["ControlDiasHabiles"] = $fdata;
		$tdatatik_cfg[".searchableFields"][] = "ControlDiasHabiles";


$tables_data["tik_cfg"]=&$tdatatik_cfg;
$field_labels["tik_cfg"] = &$fieldLabelstik_cfg;
$fieldToolTips["tik_cfg"] = &$fieldToolTipstik_cfg;
$placeHolders["tik_cfg"] = &$placeHolderstik_cfg;
$page_titles["tik_cfg"] = &$pageTitlestik_cfg;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_cfg"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_cfg"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_cfg()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  DeseaCorreo,  FechaProceso,  ControlDiasHabiles";
$proto0["m_strFrom"] = "FROM tik_cfg";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Codigo";
	
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
	"m_strName" => "Codigo",
	"m_strTable" => "tik_cfg",
	"m_srcTableName" => "tik_cfg"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "tik_cfg";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DeseaCorreo",
	"m_strTable" => "tik_cfg",
	"m_srcTableName" => "tik_cfg"
));

$proto8["m_sql"] = "DeseaCorreo";
$proto8["m_srcTableName"] = "tik_cfg";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaProceso",
	"m_strTable" => "tik_cfg",
	"m_srcTableName" => "tik_cfg"
));

$proto10["m_sql"] = "FechaProceso";
$proto10["m_srcTableName"] = "tik_cfg";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ControlDiasHabiles",
	"m_strTable" => "tik_cfg",
	"m_srcTableName" => "tik_cfg"
));

$proto12["m_sql"] = "ControlDiasHabiles";
$proto12["m_srcTableName"] = "tik_cfg";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tik_cfg";
$proto15["m_srcTableName"] = "tik_cfg";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "DeseaCorreo";
$proto15["m_columns"][] = "FechaProceso";
$proto15["m_columns"][] = "ControlDiasHabiles";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tik_cfg";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tik_cfg";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "tik_cfg",
	"m_srcTableName" => "tik_cfg"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_cfg";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_cfg = createSqlQuery_tik_cfg();


	
		;

				

$tdatatik_cfg[".sqlquery"] = $queryData_tik_cfg;



$tableEvents["tik_cfg"] = new eventsBase;
$tdatatik_cfg[".hasEvents"] = false;

?>