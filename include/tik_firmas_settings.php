<?php
$tdatatik_firmas = array();
$tdatatik_firmas[".searchableFields"] = array();
$tdatatik_firmas[".ShortName"] = "tik_firmas";
$tdatatik_firmas[".OwnerID"] = "";
$tdatatik_firmas[".OriginalTable"] = "tik_firmas";


$tdatatik_firmas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_firmas[".originalPagesByType"] = $tdatatik_firmas[".pagesByType"];
$tdatatik_firmas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_firmas[".originalPages"] = $tdatatik_firmas[".pages"];
$tdatatik_firmas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_firmas[".originalDefaultPages"] = $tdatatik_firmas[".defaultPages"];

//	field labels
$fieldLabelstik_firmas = array();
$fieldToolTipstik_firmas = array();
$pageTitlestik_firmas = array();
$placeHolderstik_firmas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_firmas["Spanish"] = array();
	$fieldToolTipstik_firmas["Spanish"] = array();
	$placeHolderstik_firmas["Spanish"] = array();
	$pageTitlestik_firmas["Spanish"] = array();
	$fieldLabelstik_firmas["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_firmas["Spanish"]["Usuario"] = "";
	$placeHolderstik_firmas["Spanish"]["Usuario"] = "";
	$fieldLabelstik_firmas["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_firmas["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_firmas["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_firmas["Spanish"]["Firma"] = "Firma";
	$fieldToolTipstik_firmas["Spanish"]["Firma"] = "";
	$placeHolderstik_firmas["Spanish"]["Firma"] = "";
	$fieldLabelstik_firmas["Spanish"]["ValidoHasta"] = "Valido Hasta";
	$fieldToolTipstik_firmas["Spanish"]["ValidoHasta"] = "";
	$placeHolderstik_firmas["Spanish"]["ValidoHasta"] = "";
	$fieldLabelstik_firmas["Spanish"]["Departamentos"] = "Departamentos";
	$fieldToolTipstik_firmas["Spanish"]["Departamentos"] = "";
	$placeHolderstik_firmas["Spanish"]["Departamentos"] = "";
	if (count($fieldToolTipstik_firmas["Spanish"]))
		$tdatatik_firmas[".isUseToolTips"] = true;
}


	$tdatatik_firmas[".NCSearch"] = true;



$tdatatik_firmas[".shortTableName"] = "tik_firmas";
$tdatatik_firmas[".nSecOptions"] = 0;

$tdatatik_firmas[".mainTableOwnerID"] = "";
$tdatatik_firmas[".entityType"] = 0;
$tdatatik_firmas[".connId"] = "mpc_at_localhost";


$tdatatik_firmas[".strOriginalTableName"] = "tik_firmas";

	



$tdatatik_firmas[".showAddInPopup"] = false;

$tdatatik_firmas[".showEditInPopup"] = false;

$tdatatik_firmas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_firmas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_firmas[".listAjax"] = false;
//	temporary
//$tdatatik_firmas[".listAjax"] = false;

	$tdatatik_firmas[".audit"] = true;

	$tdatatik_firmas[".locking"] = false;


$pages = $tdatatik_firmas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_firmas[".edit"] = true;
	$tdatatik_firmas[".afterEditAction"] = 0;
	$tdatatik_firmas[".closePopupAfterEdit"] = 1;
	$tdatatik_firmas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_firmas[".add"] = true;
$tdatatik_firmas[".afterAddAction"] = 0;
$tdatatik_firmas[".closePopupAfterAdd"] = 1;
$tdatatik_firmas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_firmas[".list"] = true;
}



$tdatatik_firmas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_firmas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_firmas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_firmas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_firmas[".printFriendly"] = true;
}



$tdatatik_firmas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_firmas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_firmas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_firmas[".isUseAjaxSuggest"] = true;

$tdatatik_firmas[".rowHighlite"] = true;



																								

$tdatatik_firmas[".ajaxCodeSnippetAdded"] = false;

$tdatatik_firmas[".buttonsAdded"] = false;

$tdatatik_firmas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_firmas[".isUseTimeForSearch"] = false;


$tdatatik_firmas[".badgeColor"] = "DB7093";


$tdatatik_firmas[".allSearchFields"] = array();
$tdatatik_firmas[".filterFields"] = array();
$tdatatik_firmas[".requiredSearchFields"] = array();

$tdatatik_firmas[".googleLikeFields"] = array();
$tdatatik_firmas[".googleLikeFields"][] = "Usuario";
$tdatatik_firmas[".googleLikeFields"][] = "FirmaDigital";
$tdatatik_firmas[".googleLikeFields"][] = "ValidoHasta";
$tdatatik_firmas[".googleLikeFields"][] = "Departamentos";



$tdatatik_firmas[".tableType"] = "list";

$tdatatik_firmas[".printerPageOrientation"] = 0;
$tdatatik_firmas[".nPrinterPageScale"] = 100;

$tdatatik_firmas[".nPrinterSplitRecords"] = 40;

$tdatatik_firmas[".geocodingEnabled"] = false;










$tdatatik_firmas[".pageSize"] = 20;

$tdatatik_firmas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Usuario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_firmas[".strOrderBy"] = $tstrOrderBy;

$tdatatik_firmas[".orderindexes"] = array();
	$tdatatik_firmas[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Usuario");



$tdatatik_firmas[".sqlHead"] = "SELECT Usuario,  FirmaDigital,  Firma,  ValidoHasta,  Departamentos";
$tdatatik_firmas[".sqlFrom"] = "FROM tik_firmas";
$tdatatik_firmas[".sqlWhereExpr"] = "";
$tdatatik_firmas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_firmas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_firmas[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_firmas[".highlightSearchResults"] = true;

$tableKeystik_firmas = array();
$tableKeystik_firmas[] = "Usuario";
$tdatatik_firmas[".Keys"] = $tableKeystik_firmas;


$tdatatik_firmas[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_firmas";
	$fdata["Label"] = GetFieldLabel("tik_firmas","Usuario");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Departamentos", 'lookupF'=>"CodigoDepto");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(Usuario,' - ',Nombre)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "Usuario";

	
	
	
	

	
	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Usuario %value% ya existe.", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatik_firmas["Usuario"] = $fdata;
		$tdatatik_firmas[".searchableFields"][] = "Usuario";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_firmas";
	$fdata["Label"] = GetFieldLabel("tik_firmas","FirmaDigital");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatik_firmas["FirmaDigital"] = $fdata;
		$tdatatik_firmas[".searchableFields"][] = "FirmaDigital";
//	Firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Firma";
	$fdata["GoodName"] = "Firma";
	$fdata["ownerTable"] = "tik_firmas";
	$fdata["Label"] = GetFieldLabel("tik_firmas","Firma");
	$fdata["FieldType"] = 128;

	
	
	
			

		$fdata["strField"] = "Firma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Firma";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 100;

		
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

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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


	$tdatatik_firmas["Firma"] = $fdata;
	//	ValidoHasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ValidoHasta";
	$fdata["GoodName"] = "ValidoHasta";
	$fdata["ownerTable"] = "tik_firmas";
	$fdata["Label"] = GetFieldLabel("tik_firmas","ValidoHasta");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ValidoHasta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ValidoHasta";

	
	
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


	$tdatatik_firmas["ValidoHasta"] = $fdata;
		$tdatatik_firmas[".searchableFields"][] = "ValidoHasta";
//	Departamentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Departamentos";
	$fdata["GoodName"] = "Departamentos";
	$fdata["ownerTable"] = "tik_firmas";
	$fdata["Label"] = GetFieldLabel("tik_firmas","Departamentos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Departamentos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamentos";

	
	
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
	$edata["LookupTable"] = "zdepartamentos";
		$edata["listPageId"] = "list1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoDepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "Descripcion";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatatik_firmas["Departamentos"] = $fdata;
		$tdatatik_firmas[".searchableFields"][] = "Departamentos";


$tables_data["tik_firmas"]=&$tdatatik_firmas;
$field_labels["tik_firmas"] = &$fieldLabelstik_firmas;
$fieldToolTips["tik_firmas"] = &$fieldToolTipstik_firmas;
$placeHolders["tik_firmas"] = &$placeHolderstik_firmas;
$page_titles["tik_firmas"] = &$pageTitlestik_firmas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_firmas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_firmas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_firmas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Usuario,  FirmaDigital,  Firma,  ValidoHasta,  Departamentos";
$proto0["m_strFrom"] = "FROM tik_firmas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Usuario";
	
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
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto6["m_sql"] = "Usuario";
$proto6["m_srcTableName"] = "tik_firmas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto8["m_sql"] = "FirmaDigital";
$proto8["m_srcTableName"] = "tik_firmas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Firma",
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto10["m_sql"] = "Firma";
$proto10["m_srcTableName"] = "tik_firmas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ValidoHasta",
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto12["m_sql"] = "ValidoHasta";
$proto12["m_srcTableName"] = "tik_firmas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamentos",
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto14["m_sql"] = "Departamentos";
$proto14["m_srcTableName"] = "tik_firmas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tik_firmas";
$proto17["m_srcTableName"] = "tik_firmas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Usuario";
$proto17["m_columns"][] = "FirmaDigital";
$proto17["m_columns"][] = "Firma";
$proto17["m_columns"][] = "ValidoHasta";
$proto17["m_columns"][] = "Departamentos";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tik_firmas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tik_firmas";
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
	"m_strName" => "Usuario",
	"m_strTable" => "tik_firmas",
	"m_srcTableName" => "tik_firmas"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_firmas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_firmas = createSqlQuery_tik_firmas();


	
		;

					

$tdatatik_firmas[".sqlquery"] = $queryData_tik_firmas;



include_once(getabspath("include/tik_firmas_events.php"));
$tableEvents["tik_firmas"] = new eventclass_tik_firmas;
$tdatatik_firmas[".hasEvents"] = true;

?>