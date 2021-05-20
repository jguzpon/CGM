<?php
$tdatazmeses = array();
$tdatazmeses[".searchableFields"] = array();
$tdatazmeses[".ShortName"] = "zmeses";
$tdatazmeses[".OwnerID"] = "";
$tdatazmeses[".OriginalTable"] = "zmeses";


$tdatazmeses[".pagesByType"] = my_json_decode( "{}" );
$tdatazmeses[".originalPagesByType"] = $tdatazmeses[".pagesByType"];
$tdatazmeses[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatazmeses[".originalPages"] = $tdatazmeses[".pages"];
$tdatazmeses[".defaultPages"] = my_json_decode( "{}" );
$tdatazmeses[".originalDefaultPages"] = $tdatazmeses[".defaultPages"];

//	field labels
$fieldLabelszmeses = array();
$fieldToolTipszmeses = array();
$pageTitleszmeses = array();
$placeHolderszmeses = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelszmeses["Spanish"] = array();
	$fieldToolTipszmeses["Spanish"] = array();
	$placeHolderszmeses["Spanish"] = array();
	$pageTitleszmeses["Spanish"] = array();
	$fieldLabelszmeses["Spanish"]["Mes"] = "Mes";
	$fieldToolTipszmeses["Spanish"]["Mes"] = "";
	$placeHolderszmeses["Spanish"]["Mes"] = "";
	$fieldLabelszmeses["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipszmeses["Spanish"]["Descripcion"] = "";
	$placeHolderszmeses["Spanish"]["Descripcion"] = "";
	if (count($fieldToolTipszmeses["Spanish"]))
		$tdatazmeses[".isUseToolTips"] = true;
}


	$tdatazmeses[".NCSearch"] = true;



$tdatazmeses[".shortTableName"] = "zmeses";
$tdatazmeses[".nSecOptions"] = 0;

$tdatazmeses[".mainTableOwnerID"] = "";
$tdatazmeses[".entityType"] = 0;
$tdatazmeses[".connId"] = "mpc_at_localhost";


$tdatazmeses[".strOriginalTableName"] = "zmeses";

	



$tdatazmeses[".showAddInPopup"] = false;

$tdatazmeses[".showEditInPopup"] = false;

$tdatazmeses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazmeses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazmeses[".listAjax"] = false;
//	temporary
//$tdatazmeses[".listAjax"] = false;

	$tdatazmeses[".audit"] = true;

	$tdatazmeses[".locking"] = false;


$pages = $tdatazmeses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatazmeses[".edit"] = true;
	$tdatazmeses[".afterEditAction"] = 0;
	$tdatazmeses[".closePopupAfterEdit"] = 1;
	$tdatazmeses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatazmeses[".add"] = true;
$tdatazmeses[".afterAddAction"] = 0;
$tdatazmeses[".closePopupAfterAdd"] = 1;
$tdatazmeses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatazmeses[".list"] = true;
}



$tdatazmeses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatazmeses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatazmeses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatazmeses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatazmeses[".printFriendly"] = true;
}



$tdatazmeses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatazmeses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatazmeses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatazmeses[".isUseAjaxSuggest"] = true;

$tdatazmeses[".rowHighlite"] = true;



																		

$tdatazmeses[".ajaxCodeSnippetAdded"] = false;

$tdatazmeses[".buttonsAdded"] = false;

$tdatazmeses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazmeses[".isUseTimeForSearch"] = false;


$tdatazmeses[".badgeColor"] = "DB7093";


$tdatazmeses[".allSearchFields"] = array();
$tdatazmeses[".filterFields"] = array();
$tdatazmeses[".requiredSearchFields"] = array();

$tdatazmeses[".googleLikeFields"] = array();
$tdatazmeses[".googleLikeFields"][] = "Mes";
$tdatazmeses[".googleLikeFields"][] = "Descripcion";



$tdatazmeses[".tableType"] = "list";

$tdatazmeses[".printerPageOrientation"] = 0;
$tdatazmeses[".nPrinterPageScale"] = 100;

$tdatazmeses[".nPrinterSplitRecords"] = 40;

$tdatazmeses[".geocodingEnabled"] = false;










$tdatazmeses[".pageSize"] = 20;

$tdatazmeses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazmeses[".strOrderBy"] = $tstrOrderBy;

$tdatazmeses[".orderindexes"] = array();


$tdatazmeses[".sqlHead"] = "SELECT Mes,  	Descripcion";
$tdatazmeses[".sqlFrom"] = "FROM zmeses";
$tdatazmeses[".sqlWhereExpr"] = "";
$tdatazmeses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazmeses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazmeses[".arrGroupsPerPage"] = $arrGPP;

$tdatazmeses[".highlightSearchResults"] = true;

$tableKeyszmeses = array();
$tableKeyszmeses[] = "Mes";
$tdatazmeses[".Keys"] = $tableKeyszmeses;


$tdatazmeses[".hideMobileList"] = array();




//	Mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Mes";
	$fdata["GoodName"] = "Mes";
	$fdata["ownerTable"] = "zmeses";
	$fdata["Label"] = GetFieldLabel("zmeses","Mes");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "Mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mes";

	
	
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


	$tdatazmeses["Mes"] = $fdata;
		$tdatazmeses[".searchableFields"][] = "Mes";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "zmeses";
	$fdata["Label"] = GetFieldLabel("zmeses","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatazmeses["Descripcion"] = $fdata;
		$tdatazmeses[".searchableFields"][] = "Descripcion";


$tables_data["zmeses"]=&$tdatazmeses;
$field_labels["zmeses"] = &$fieldLabelszmeses;
$fieldToolTips["zmeses"] = &$fieldToolTipszmeses;
$placeHolders["zmeses"] = &$placeHolderszmeses;
$page_titles["zmeses"] = &$pageTitleszmeses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zmeses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zmeses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_zmeses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Mes,  	Descripcion";
$proto0["m_strFrom"] = "FROM zmeses";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "Mes",
	"m_strTable" => "zmeses",
	"m_srcTableName" => "zmeses"
));

$proto6["m_sql"] = "Mes";
$proto6["m_srcTableName"] = "zmeses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "zmeses",
	"m_srcTableName" => "zmeses"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "zmeses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "zmeses";
$proto11["m_srcTableName"] = "zmeses";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Mes";
$proto11["m_columns"][] = "Descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "zmeses";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "zmeses";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="zmeses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zmeses = createSqlQuery_zmeses();


	
		;

		

$tdatazmeses[".sqlquery"] = $queryData_zmeses;



$tableEvents["zmeses"] = new eventsBase;
$tdatazmeses[".hasEvents"] = false;

?>