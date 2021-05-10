<?php
$tdatatik_tipomemo = array();
$tdatatik_tipomemo[".searchableFields"] = array();
$tdatatik_tipomemo[".ShortName"] = "tik_tipomemo";
$tdatatik_tipomemo[".OwnerID"] = "";
$tdatatik_tipomemo[".OriginalTable"] = "tik_tipomemo";


$tdatatik_tipomemo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatik_tipomemo[".originalPagesByType"] = $tdatatik_tipomemo[".pagesByType"];
$tdatatik_tipomemo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatik_tipomemo[".originalPages"] = $tdatatik_tipomemo[".pages"];
$tdatatik_tipomemo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatik_tipomemo[".originalDefaultPages"] = $tdatatik_tipomemo[".defaultPages"];

//	field labels
$fieldLabelstik_tipomemo = array();
$fieldToolTipstik_tipomemo = array();
$pageTitlestik_tipomemo = array();
$placeHolderstik_tipomemo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_tipomemo["Spanish"] = array();
	$fieldToolTipstik_tipomemo["Spanish"] = array();
	$placeHolderstik_tipomemo["Spanish"] = array();
	$pageTitlestik_tipomemo["Spanish"] = array();
	$fieldLabelstik_tipomemo["Spanish"]["TipoMemorando"] = "Tipo Memorando";
	$fieldToolTipstik_tipomemo["Spanish"]["TipoMemorando"] = "";
	$placeHolderstik_tipomemo["Spanish"]["TipoMemorando"] = "";
	$fieldLabelstik_tipomemo["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_tipomemo["Spanish"]["Descripcion"] = "";
	$placeHolderstik_tipomemo["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_tipomemo["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_tipomemo["Spanish"]["Usuario"] = "";
	$placeHolderstik_tipomemo["Spanish"]["Usuario"] = "";
	$fieldLabelstik_tipomemo["Spanish"]["FechaRegistro"] = "Fecha Registro";
	$fieldToolTipstik_tipomemo["Spanish"]["FechaRegistro"] = "";
	$placeHolderstik_tipomemo["Spanish"]["FechaRegistro"] = "";
	$fieldLabelstik_tipomemo["Spanish"]["Siglas"] = "Siglas";
	$fieldToolTipstik_tipomemo["Spanish"]["Siglas"] = "";
	$placeHolderstik_tipomemo["Spanish"]["Siglas"] = "";
	if (count($fieldToolTipstik_tipomemo["Spanish"]))
		$tdatatik_tipomemo[".isUseToolTips"] = true;
}


	$tdatatik_tipomemo[".NCSearch"] = true;



$tdatatik_tipomemo[".shortTableName"] = "tik_tipomemo";
$tdatatik_tipomemo[".nSecOptions"] = 0;

$tdatatik_tipomemo[".mainTableOwnerID"] = "";
$tdatatik_tipomemo[".entityType"] = 0;
$tdatatik_tipomemo[".connId"] = "mpc_at_localhost";


$tdatatik_tipomemo[".strOriginalTableName"] = "tik_tipomemo";

	



$tdatatik_tipomemo[".showAddInPopup"] = false;

$tdatatik_tipomemo[".showEditInPopup"] = false;

$tdatatik_tipomemo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_tipomemo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_tipomemo[".listAjax"] = false;
//	temporary
//$tdatatik_tipomemo[".listAjax"] = false;

	$tdatatik_tipomemo[".audit"] = true;

	$tdatatik_tipomemo[".locking"] = false;


$pages = $tdatatik_tipomemo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_tipomemo[".edit"] = true;
	$tdatatik_tipomemo[".afterEditAction"] = 1;
	$tdatatik_tipomemo[".closePopupAfterEdit"] = 1;
	$tdatatik_tipomemo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_tipomemo[".add"] = true;
$tdatatik_tipomemo[".afterAddAction"] = 1;
$tdatatik_tipomemo[".closePopupAfterAdd"] = 1;
$tdatatik_tipomemo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_tipomemo[".list"] = true;
}



$tdatatik_tipomemo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_tipomemo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_tipomemo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_tipomemo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_tipomemo[".printFriendly"] = true;
}



$tdatatik_tipomemo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_tipomemo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_tipomemo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_tipomemo[".isUseAjaxSuggest"] = true;

$tdatatik_tipomemo[".rowHighlite"] = true;



																								

$tdatatik_tipomemo[".ajaxCodeSnippetAdded"] = false;

$tdatatik_tipomemo[".buttonsAdded"] = false;

$tdatatik_tipomemo[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_tipomemo[".isUseTimeForSearch"] = false;


$tdatatik_tipomemo[".badgeColor"] = "008B8B";


$tdatatik_tipomemo[".allSearchFields"] = array();
$tdatatik_tipomemo[".filterFields"] = array();
$tdatatik_tipomemo[".requiredSearchFields"] = array();

$tdatatik_tipomemo[".googleLikeFields"] = array();
$tdatatik_tipomemo[".googleLikeFields"][] = "TipoMemorando";
$tdatatik_tipomemo[".googleLikeFields"][] = "Siglas";
$tdatatik_tipomemo[".googleLikeFields"][] = "Descripcion";
$tdatatik_tipomemo[".googleLikeFields"][] = "Usuario";
$tdatatik_tipomemo[".googleLikeFields"][] = "FechaRegistro";



$tdatatik_tipomemo[".tableType"] = "list";

$tdatatik_tipomemo[".printerPageOrientation"] = 0;
$tdatatik_tipomemo[".nPrinterPageScale"] = 100;

$tdatatik_tipomemo[".nPrinterSplitRecords"] = 40;

$tdatatik_tipomemo[".geocodingEnabled"] = false;










$tdatatik_tipomemo[".pageSize"] = 20;

$tdatatik_tipomemo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY TipoMemorando";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_tipomemo[".strOrderBy"] = $tstrOrderBy;

$tdatatik_tipomemo[".orderindexes"] = array();
	$tdatatik_tipomemo[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "TipoMemorando");



$tdatatik_tipomemo[".sqlHead"] = "SELECT TipoMemorando,  Siglas,  Descripcion,  Usuario,  FechaRegistro";
$tdatatik_tipomemo[".sqlFrom"] = "FROM tik_tipomemo";
$tdatatik_tipomemo[".sqlWhereExpr"] = "";
$tdatatik_tipomemo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_tipomemo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_tipomemo[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_tipomemo[".highlightSearchResults"] = true;

$tableKeystik_tipomemo = array();
$tableKeystik_tipomemo[] = "TipoMemorando";
$tdatatik_tipomemo[".Keys"] = $tableKeystik_tipomemo;


$tdatatik_tipomemo[".hideMobileList"] = array();




//	TipoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoMemorando";
	$fdata["GoodName"] = "TipoMemorando";
	$fdata["ownerTable"] = "tik_tipomemo";
	$fdata["Label"] = GetFieldLabel("tik_tipomemo","TipoMemorando");
	$fdata["FieldType"] = 2;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TipoMemorando";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoMemorando";

	
	
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


	$tdatatik_tipomemo["TipoMemorando"] = $fdata;
		$tdatatik_tipomemo[".searchableFields"][] = "TipoMemorando";
//	Siglas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Siglas";
	$fdata["GoodName"] = "Siglas";
	$fdata["ownerTable"] = "tik_tipomemo";
	$fdata["Label"] = GetFieldLabel("tik_tipomemo","Siglas");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Siglas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Siglas";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatatik_tipomemo["Siglas"] = $fdata;
		$tdatatik_tipomemo[".searchableFields"][] = "Siglas";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_tipomemo";
	$fdata["Label"] = GetFieldLabel("tik_tipomemo","Descripcion");
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatatik_tipomemo["Descripcion"] = $fdata;
		$tdatatik_tipomemo[".searchableFields"][] = "Descripcion";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_tipomemo";
	$fdata["Label"] = GetFieldLabel("tik_tipomemo","Usuario");
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


	$tdatatik_tipomemo["Usuario"] = $fdata;
		$tdatatik_tipomemo[".searchableFields"][] = "Usuario";
//	FechaRegistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FechaRegistro";
	$fdata["GoodName"] = "FechaRegistro";
	$fdata["ownerTable"] = "tik_tipomemo";
	$fdata["Label"] = GetFieldLabel("tik_tipomemo","FechaRegistro");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaRegistro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaRegistro";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatatik_tipomemo["FechaRegistro"] = $fdata;
		$tdatatik_tipomemo[".searchableFields"][] = "FechaRegistro";


$tables_data["tik_tipomemo"]=&$tdatatik_tipomemo;
$field_labels["tik_tipomemo"] = &$fieldLabelstik_tipomemo;
$fieldToolTips["tik_tipomemo"] = &$fieldToolTipstik_tipomemo;
$placeHolders["tik_tipomemo"] = &$placeHolderstik_tipomemo;
$page_titles["tik_tipomemo"] = &$pageTitlestik_tipomemo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_tipomemo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_tipomemo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_tipomemo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoMemorando,  Siglas,  Descripcion,  Usuario,  FechaRegistro";
$proto0["m_strFrom"] = "FROM tik_tipomemo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY TipoMemorando";
	
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
	"m_strName" => "TipoMemorando",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto6["m_sql"] = "TipoMemorando";
$proto6["m_srcTableName"] = "tik_tipomemo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Siglas",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto8["m_sql"] = "Siglas";
$proto8["m_srcTableName"] = "tik_tipomemo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "tik_tipomemo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto12["m_sql"] = "Usuario";
$proto12["m_srcTableName"] = "tik_tipomemo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaRegistro",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto14["m_sql"] = "FechaRegistro";
$proto14["m_srcTableName"] = "tik_tipomemo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tik_tipomemo";
$proto17["m_srcTableName"] = "tik_tipomemo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "TipoMemorando";
$proto17["m_columns"][] = "Siglas";
$proto17["m_columns"][] = "Descripcion";
$proto17["m_columns"][] = "Usuario";
$proto17["m_columns"][] = "FechaRegistro";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tik_tipomemo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tik_tipomemo";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoMemorando",
	"m_strTable" => "tik_tipomemo",
	"m_srcTableName" => "tik_tipomemo"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_tipomemo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_tipomemo = createSqlQuery_tik_tipomemo();


	
		;

					

$tdatatik_tipomemo[".sqlquery"] = $queryData_tik_tipomemo;



include_once(getabspath("include/tik_tipomemo_events.php"));
$tableEvents["tik_tipomemo"] = new eventclass_tik_tipomemo;
$tdatatik_tipomemo[".hasEvents"] = true;

?>