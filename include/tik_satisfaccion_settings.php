<?php
$tdatatik_satisfaccion = array();
$tdatatik_satisfaccion[".searchableFields"] = array();
$tdatatik_satisfaccion[".ShortName"] = "tik_satisfaccion";
$tdatatik_satisfaccion[".OwnerID"] = "";
$tdatatik_satisfaccion[".OriginalTable"] = "tik_satisfaccion";


$tdatatik_satisfaccion[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatik_satisfaccion[".originalPagesByType"] = $tdatatik_satisfaccion[".pagesByType"];
$tdatatik_satisfaccion[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatik_satisfaccion[".originalPages"] = $tdatatik_satisfaccion[".pages"];
$tdatatik_satisfaccion[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatik_satisfaccion[".originalDefaultPages"] = $tdatatik_satisfaccion[".defaultPages"];

//	field labels
$fieldLabelstik_satisfaccion = array();
$fieldToolTipstik_satisfaccion = array();
$pageTitlestik_satisfaccion = array();
$placeHolderstik_satisfaccion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_satisfaccion["Spanish"] = array();
	$fieldToolTipstik_satisfaccion["Spanish"] = array();
	$placeHolderstik_satisfaccion["Spanish"] = array();
	$pageTitlestik_satisfaccion["Spanish"] = array();
	$fieldLabelstik_satisfaccion["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipstik_satisfaccion["Spanish"]["Nivel"] = "";
	$placeHolderstik_satisfaccion["Spanish"]["Nivel"] = "";
	$fieldLabelstik_satisfaccion["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_satisfaccion["Spanish"]["Descripcion"] = "";
	$placeHolderstik_satisfaccion["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_satisfaccion["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_satisfaccion["Spanish"]["Usuario"] = "";
	$placeHolderstik_satisfaccion["Spanish"]["Usuario"] = "";
	$fieldLabelstik_satisfaccion["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_satisfaccion["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_satisfaccion["Spanish"]["FechaSistema"] = "";
	if (count($fieldToolTipstik_satisfaccion["Spanish"]))
		$tdatatik_satisfaccion[".isUseToolTips"] = true;
}


	$tdatatik_satisfaccion[".NCSearch"] = true;



$tdatatik_satisfaccion[".shortTableName"] = "tik_satisfaccion";
$tdatatik_satisfaccion[".nSecOptions"] = 0;

$tdatatik_satisfaccion[".mainTableOwnerID"] = "";
$tdatatik_satisfaccion[".entityType"] = 0;
$tdatatik_satisfaccion[".connId"] = "mpc_at_localhost";


$tdatatik_satisfaccion[".strOriginalTableName"] = "tik_satisfaccion";

	



$tdatatik_satisfaccion[".showAddInPopup"] = false;

$tdatatik_satisfaccion[".showEditInPopup"] = false;

$tdatatik_satisfaccion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_satisfaccion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_satisfaccion[".listAjax"] = false;
//	temporary
//$tdatatik_satisfaccion[".listAjax"] = false;

	$tdatatik_satisfaccion[".audit"] = true;

	$tdatatik_satisfaccion[".locking"] = false;


$pages = $tdatatik_satisfaccion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_satisfaccion[".edit"] = true;
	$tdatatik_satisfaccion[".afterEditAction"] = 0;
	$tdatatik_satisfaccion[".closePopupAfterEdit"] = 1;
	$tdatatik_satisfaccion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_satisfaccion[".add"] = true;
$tdatatik_satisfaccion[".afterAddAction"] = 0;
$tdatatik_satisfaccion[".closePopupAfterAdd"] = 1;
$tdatatik_satisfaccion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_satisfaccion[".list"] = true;
}



$tdatatik_satisfaccion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_satisfaccion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_satisfaccion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_satisfaccion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_satisfaccion[".printFriendly"] = true;
}



$tdatatik_satisfaccion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_satisfaccion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_satisfaccion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_satisfaccion[".isUseAjaxSuggest"] = true;

$tdatatik_satisfaccion[".rowHighlite"] = true;



																								

$tdatatik_satisfaccion[".ajaxCodeSnippetAdded"] = false;

$tdatatik_satisfaccion[".buttonsAdded"] = false;

$tdatatik_satisfaccion[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_satisfaccion[".isUseTimeForSearch"] = false;


$tdatatik_satisfaccion[".badgeColor"] = "D2AF80";


$tdatatik_satisfaccion[".allSearchFields"] = array();
$tdatatik_satisfaccion[".filterFields"] = array();
$tdatatik_satisfaccion[".requiredSearchFields"] = array();

$tdatatik_satisfaccion[".googleLikeFields"] = array();
$tdatatik_satisfaccion[".googleLikeFields"][] = "Nivel";
$tdatatik_satisfaccion[".googleLikeFields"][] = "Descripcion";
$tdatatik_satisfaccion[".googleLikeFields"][] = "Usuario";
$tdatatik_satisfaccion[".googleLikeFields"][] = "FechaSistema";



$tdatatik_satisfaccion[".tableType"] = "list";

$tdatatik_satisfaccion[".printerPageOrientation"] = 0;
$tdatatik_satisfaccion[".nPrinterPageScale"] = 100;

$tdatatik_satisfaccion[".nPrinterSplitRecords"] = 40;

$tdatatik_satisfaccion[".geocodingEnabled"] = false;










$tdatatik_satisfaccion[".pageSize"] = 20;

$tdatatik_satisfaccion[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Nivel";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_satisfaccion[".strOrderBy"] = $tstrOrderBy;

$tdatatik_satisfaccion[".orderindexes"] = array();
	$tdatatik_satisfaccion[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Nivel");



$tdatatik_satisfaccion[".sqlHead"] = "SELECT Nivel, Descripcion, Usuario, FechaSistema";
$tdatatik_satisfaccion[".sqlFrom"] = "FROM tik_satisfaccion";
$tdatatik_satisfaccion[".sqlWhereExpr"] = "";
$tdatatik_satisfaccion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_satisfaccion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_satisfaccion[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_satisfaccion[".highlightSearchResults"] = true;

$tableKeystik_satisfaccion = array();
$tableKeystik_satisfaccion[] = "Nivel";
$tdatatik_satisfaccion[".Keys"] = $tableKeystik_satisfaccion;


$tdatatik_satisfaccion[".hideMobileList"] = array();




//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("tik_satisfaccion","Nivel");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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


	$tdatatik_satisfaccion["Nivel"] = $fdata;
		$tdatatik_satisfaccion[".searchableFields"][] = "Nivel";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("tik_satisfaccion","Descripcion");
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatatik_satisfaccion["Descripcion"] = $fdata;
		$tdatatik_satisfaccion[".searchableFields"][] = "Descripcion";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("tik_satisfaccion","Usuario");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatatik_satisfaccion["Usuario"] = $fdata;
		$tdatatik_satisfaccion[".searchableFields"][] = "Usuario";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("tik_satisfaccion","FechaSistema");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaSistema";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSistema";

	
	
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


	$tdatatik_satisfaccion["FechaSistema"] = $fdata;
		$tdatatik_satisfaccion[".searchableFields"][] = "FechaSistema";


$tables_data["tik_satisfaccion"]=&$tdatatik_satisfaccion;
$field_labels["tik_satisfaccion"] = &$fieldLabelstik_satisfaccion;
$fieldToolTips["tik_satisfaccion"] = &$fieldToolTipstik_satisfaccion;
$placeHolders["tik_satisfaccion"] = &$placeHolderstik_satisfaccion;
$page_titles["tik_satisfaccion"] = &$pageTitlestik_satisfaccion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_satisfaccion"] = array();
//	tik_interno
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_interno";
		$detailsParam["dOriginalTable"] = "tik_interno";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_interno";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_interno");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_satisfaccion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_satisfaccion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_satisfaccion"][$dIndex]["masterKeys"][]="Nivel";

				$detailsTablesData["tik_satisfaccion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_satisfaccion"][$dIndex]["detailKeys"][]="Evaluacion";

// tables which are master tables for current table (detail)
$masterTablesData["tik_satisfaccion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_satisfaccion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Nivel, Descripcion, Usuario, FechaSistema";
$proto0["m_strFrom"] = "FROM tik_satisfaccion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Nivel";
	
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
	"m_strName" => "Nivel",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "tik_satisfaccion"
));

$proto6["m_sql"] = "Nivel";
$proto6["m_srcTableName"] = "tik_satisfaccion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "tik_satisfaccion"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "tik_satisfaccion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "tik_satisfaccion"
));

$proto10["m_sql"] = "Usuario";
$proto10["m_srcTableName"] = "tik_satisfaccion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "tik_satisfaccion"
));

$proto12["m_sql"] = "FechaSistema";
$proto12["m_srcTableName"] = "tik_satisfaccion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tik_satisfaccion";
$proto15["m_srcTableName"] = "tik_satisfaccion";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Nivel";
$proto15["m_columns"][] = "Descripcion";
$proto15["m_columns"][] = "Usuario";
$proto15["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tik_satisfaccion";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tik_satisfaccion";
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
	"m_strName" => "Nivel",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "tik_satisfaccion"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_satisfaccion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_satisfaccion = createSqlQuery_tik_satisfaccion();


	
		;

				

$tdatatik_satisfaccion[".sqlquery"] = $queryData_tik_satisfaccion;



include_once(getabspath("include/tik_satisfaccion_events.php"));
$tableEvents["tik_satisfaccion"] = new eventclass_tik_satisfaccion;
$tdatatik_satisfaccion[".hasEvents"] = true;

?>