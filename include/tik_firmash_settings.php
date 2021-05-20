<?php
$tdatatik_firmash = array();
$tdatatik_firmash[".searchableFields"] = array();
$tdatatik_firmash[".ShortName"] = "tik_firmash";
$tdatatik_firmash[".OwnerID"] = "";
$tdatatik_firmash[".OriginalTable"] = "tik_firmash";


$tdatatik_firmash[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatik_firmash[".originalPagesByType"] = $tdatatik_firmash[".pagesByType"];
$tdatatik_firmash[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatik_firmash[".originalPages"] = $tdatatik_firmash[".pages"];
$tdatatik_firmash[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatik_firmash[".originalDefaultPages"] = $tdatatik_firmash[".defaultPages"];

//	field labels
$fieldLabelstik_firmash = array();
$fieldToolTipstik_firmash = array();
$pageTitlestik_firmash = array();
$placeHolderstik_firmash = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_firmash["Spanish"] = array();
	$fieldToolTipstik_firmash["Spanish"] = array();
	$placeHolderstik_firmash["Spanish"] = array();
	$pageTitlestik_firmash["Spanish"] = array();
	$fieldLabelstik_firmash["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_firmash["Spanish"]["Usuario"] = "";
	$placeHolderstik_firmash["Spanish"]["Usuario"] = "";
	$fieldLabelstik_firmash["Spanish"]["FechaCambio"] = "Fecha Cambio";
	$fieldToolTipstik_firmash["Spanish"]["FechaCambio"] = "";
	$placeHolderstik_firmash["Spanish"]["FechaCambio"] = "";
	$fieldLabelstik_firmash["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_firmash["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_firmash["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_firmash["Spanish"]["Firma"] = "Firma";
	$fieldToolTipstik_firmash["Spanish"]["Firma"] = "";
	$placeHolderstik_firmash["Spanish"]["Firma"] = "";
	if (count($fieldToolTipstik_firmash["Spanish"]))
		$tdatatik_firmash[".isUseToolTips"] = true;
}


	$tdatatik_firmash[".NCSearch"] = true;



$tdatatik_firmash[".shortTableName"] = "tik_firmash";
$tdatatik_firmash[".nSecOptions"] = 0;

$tdatatik_firmash[".mainTableOwnerID"] = "";
$tdatatik_firmash[".entityType"] = 0;
$tdatatik_firmash[".connId"] = "mpc_at_localhost";


$tdatatik_firmash[".strOriginalTableName"] = "tik_firmash";

	



$tdatatik_firmash[".showAddInPopup"] = false;

$tdatatik_firmash[".showEditInPopup"] = false;

$tdatatik_firmash[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_firmash[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_firmash[".listAjax"] = false;
//	temporary
//$tdatatik_firmash[".listAjax"] = false;

	$tdatatik_firmash[".audit"] = true;

	$tdatatik_firmash[".locking"] = false;


$pages = $tdatatik_firmash[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_firmash[".edit"] = true;
	$tdatatik_firmash[".afterEditAction"] = 1;
	$tdatatik_firmash[".closePopupAfterEdit"] = 1;
	$tdatatik_firmash[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_firmash[".add"] = true;
$tdatatik_firmash[".afterAddAction"] = 1;
$tdatatik_firmash[".closePopupAfterAdd"] = 1;
$tdatatik_firmash[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_firmash[".list"] = true;
}



$tdatatik_firmash[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_firmash[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_firmash[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_firmash[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_firmash[".printFriendly"] = true;
}



$tdatatik_firmash[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_firmash[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_firmash[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_firmash[".isUseAjaxSuggest"] = true;

$tdatatik_firmash[".rowHighlite"] = true;



																		

$tdatatik_firmash[".ajaxCodeSnippetAdded"] = false;

$tdatatik_firmash[".buttonsAdded"] = false;

$tdatatik_firmash[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_firmash[".isUseTimeForSearch"] = false;


$tdatatik_firmash[".badgeColor"] = "E67349";


$tdatatik_firmash[".allSearchFields"] = array();
$tdatatik_firmash[".filterFields"] = array();
$tdatatik_firmash[".requiredSearchFields"] = array();

$tdatatik_firmash[".googleLikeFields"] = array();
$tdatatik_firmash[".googleLikeFields"][] = "Usuario";
$tdatatik_firmash[".googleLikeFields"][] = "FechaCambio";
$tdatatik_firmash[".googleLikeFields"][] = "FirmaDigital";



$tdatatik_firmash[".tableType"] = "list";

$tdatatik_firmash[".printerPageOrientation"] = 0;
$tdatatik_firmash[".nPrinterPageScale"] = 100;

$tdatatik_firmash[".nPrinterSplitRecords"] = 40;

$tdatatik_firmash[".geocodingEnabled"] = false;










$tdatatik_firmash[".pageSize"] = 20;

$tdatatik_firmash[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Usuario, FechaCambio DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_firmash[".strOrderBy"] = $tstrOrderBy;

$tdatatik_firmash[".orderindexes"] = array();
	$tdatatik_firmash[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Usuario");

	$tdatatik_firmash[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "FechaCambio");



$tdatatik_firmash[".sqlHead"] = "SELECT Usuario, FechaCambio, FirmaDigital, Firma";
$tdatatik_firmash[".sqlFrom"] = "FROM tik_firmash";
$tdatatik_firmash[".sqlWhereExpr"] = "";
$tdatatik_firmash[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_firmash[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_firmash[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_firmash[".highlightSearchResults"] = true;

$tableKeystik_firmash = array();
$tableKeystik_firmash[] = "Usuario";
$tableKeystik_firmash[] = "FechaCambio";
$tdatatik_firmash[".Keys"] = $tableKeystik_firmash;


$tdatatik_firmash[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_firmash";
	$fdata["Label"] = GetFieldLabel("tik_firmash","Usuario");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatik_firmash["Usuario"] = $fdata;
		$tdatatik_firmash[".searchableFields"][] = "Usuario";
//	FechaCambio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FechaCambio";
	$fdata["GoodName"] = "FechaCambio";
	$fdata["ownerTable"] = "tik_firmash";
	$fdata["Label"] = GetFieldLabel("tik_firmash","FechaCambio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaCambio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaCambio";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatik_firmash["FechaCambio"] = $fdata;
		$tdatatik_firmash[".searchableFields"][] = "FechaCambio";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_firmash";
	$fdata["Label"] = GetFieldLabel("tik_firmash","FirmaDigital");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FirmaDigital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirmaDigital";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatatik_firmash["FirmaDigital"] = $fdata;
		$tdatatik_firmash[".searchableFields"][] = "FirmaDigital";
//	Firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Firma";
	$fdata["GoodName"] = "Firma";
	$fdata["ownerTable"] = "tik_firmash";
	$fdata["Label"] = GetFieldLabel("tik_firmash","Firma");
	$fdata["FieldType"] = 128;

	
	
	
			

		$fdata["strField"] = "Firma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Firma";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatatik_firmash["Firma"] = $fdata;
	

$tables_data["tik_firmash"]=&$tdatatik_firmash;
$field_labels["tik_firmash"] = &$fieldLabelstik_firmash;
$fieldToolTips["tik_firmash"] = &$fieldToolTipstik_firmash;
$placeHolders["tik_firmash"] = &$placeHolderstik_firmash;
$page_titles["tik_firmash"] = &$pageTitlestik_firmash;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_firmash"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_firmash"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_firmash()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Usuario, FechaCambio, FirmaDigital, Firma";
$proto0["m_strFrom"] = "FROM tik_firmash";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Usuario, FechaCambio DESC";
	
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
	"m_strName" => "Usuario",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto6["m_sql"] = "Usuario";
$proto6["m_srcTableName"] = "tik_firmash";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaCambio",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto8["m_sql"] = "FechaCambio";
$proto8["m_srcTableName"] = "tik_firmash";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto10["m_sql"] = "FirmaDigital";
$proto10["m_srcTableName"] = "tik_firmash";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Firma",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto12["m_sql"] = "Firma";
$proto12["m_srcTableName"] = "tik_firmash";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tik_firmash";
$proto15["m_srcTableName"] = "tik_firmash";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Usuario";
$proto15["m_columns"][] = "FechaCambio";
$proto15["m_columns"][] = "FirmaDigital";
$proto15["m_columns"][] = "Firma";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tik_firmash";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tik_firmash";
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
	"m_strName" => "Usuario",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "FechaCambio",
	"m_strTable" => "tik_firmash",
	"m_srcTableName" => "tik_firmash"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_firmash";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_firmash = createSqlQuery_tik_firmash();


	
		;

				

$tdatatik_firmash[".sqlquery"] = $queryData_tik_firmash;



$tableEvents["tik_firmash"] = new eventsBase;
$tdatatik_firmash[".hasEvents"] = false;

?>