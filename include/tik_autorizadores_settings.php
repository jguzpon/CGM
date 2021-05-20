<?php
$tdatatik_autorizadores = array();
$tdatatik_autorizadores[".searchableFields"] = array();
$tdatatik_autorizadores[".ShortName"] = "tik_autorizadores";
$tdatatik_autorizadores[".OwnerID"] = "";
$tdatatik_autorizadores[".OriginalTable"] = "tik_autorizadores";


$tdatatik_autorizadores[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatik_autorizadores[".originalPagesByType"] = $tdatatik_autorizadores[".pagesByType"];
$tdatatik_autorizadores[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatik_autorizadores[".originalPages"] = $tdatatik_autorizadores[".pages"];
$tdatatik_autorizadores[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatik_autorizadores[".originalDefaultPages"] = $tdatatik_autorizadores[".defaultPages"];

//	field labels
$fieldLabelstik_autorizadores = array();
$fieldToolTipstik_autorizadores = array();
$pageTitlestik_autorizadores = array();
$placeHolderstik_autorizadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_autorizadores["Spanish"] = array();
	$fieldToolTipstik_autorizadores["Spanish"] = array();
	$placeHolderstik_autorizadores["Spanish"] = array();
	$pageTitlestik_autorizadores["Spanish"] = array();
	$fieldLabelstik_autorizadores["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_autorizadores["Spanish"]["Usuario"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Usuario"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Clave"] = "Clave";
	$fieldToolTipstik_autorizadores["Spanish"]["Clave"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Clave"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipstik_autorizadores["Spanish"]["Nombre"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Nombre"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["CodigoDepto"] = "Codigo Depto";
	$fieldToolTipstik_autorizadores["Spanish"]["CodigoDepto"] = "";
	$placeHolderstik_autorizadores["Spanish"]["CodigoDepto"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Codigo_Estructura"] = "Codigo Estructura";
	$fieldToolTipstik_autorizadores["Spanish"]["Codigo_Estructura"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Codigo_Estructura"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Area"] = "Area";
	$fieldToolTipstik_autorizadores["Spanish"]["Area"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Area"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Puesto"] = "Puesto";
	$fieldToolTipstik_autorizadores["Spanish"]["Puesto"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Puesto"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Correo"] = "Correo";
	$fieldToolTipstik_autorizadores["Spanish"]["Correo"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Correo"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipstik_autorizadores["Spanish"]["FechaInicio"] = "";
	$placeHolderstik_autorizadores["Spanish"]["FechaInicio"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipstik_autorizadores["Spanish"]["FechaFinal"] = "";
	$placeHolderstik_autorizadores["Spanish"]["FechaFinal"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_autorizadores["Spanish"]["Estado"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Estado"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_autorizadores["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_autorizadores["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_autorizadores["Spanish"]["Firma"] = "Firma";
	$fieldToolTipstik_autorizadores["Spanish"]["Firma"] = "";
	$placeHolderstik_autorizadores["Spanish"]["Firma"] = "";
	if (count($fieldToolTipstik_autorizadores["Spanish"]))
		$tdatatik_autorizadores[".isUseToolTips"] = true;
}


	$tdatatik_autorizadores[".NCSearch"] = true;



$tdatatik_autorizadores[".shortTableName"] = "tik_autorizadores";
$tdatatik_autorizadores[".nSecOptions"] = 0;

$tdatatik_autorizadores[".mainTableOwnerID"] = "";
$tdatatik_autorizadores[".entityType"] = 0;
$tdatatik_autorizadores[".connId"] = "mpc_at_localhost";


$tdatatik_autorizadores[".strOriginalTableName"] = "tik_autorizadores";

	



$tdatatik_autorizadores[".showAddInPopup"] = false;

$tdatatik_autorizadores[".showEditInPopup"] = false;

$tdatatik_autorizadores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_autorizadores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_autorizadores[".listAjax"] = false;
//	temporary
//$tdatatik_autorizadores[".listAjax"] = false;

	$tdatatik_autorizadores[".audit"] = true;

	$tdatatik_autorizadores[".locking"] = false;


$pages = $tdatatik_autorizadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_autorizadores[".edit"] = true;
	$tdatatik_autorizadores[".afterEditAction"] = 1;
	$tdatatik_autorizadores[".closePopupAfterEdit"] = 1;
	$tdatatik_autorizadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_autorizadores[".add"] = true;
$tdatatik_autorizadores[".afterAddAction"] = 1;
$tdatatik_autorizadores[".closePopupAfterAdd"] = 1;
$tdatatik_autorizadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_autorizadores[".list"] = true;
}



$tdatatik_autorizadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_autorizadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_autorizadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_autorizadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_autorizadores[".printFriendly"] = true;
}



$tdatatik_autorizadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_autorizadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_autorizadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_autorizadores[".isUseAjaxSuggest"] = true;

$tdatatik_autorizadores[".rowHighlite"] = true;



																		

$tdatatik_autorizadores[".ajaxCodeSnippetAdded"] = false;

$tdatatik_autorizadores[".buttonsAdded"] = false;

$tdatatik_autorizadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_autorizadores[".isUseTimeForSearch"] = false;


$tdatatik_autorizadores[".badgeColor"] = "DB7093";


$tdatatik_autorizadores[".allSearchFields"] = array();
$tdatatik_autorizadores[".filterFields"] = array();
$tdatatik_autorizadores[".requiredSearchFields"] = array();

$tdatatik_autorizadores[".googleLikeFields"] = array();
$tdatatik_autorizadores[".googleLikeFields"][] = "Usuario";
$tdatatik_autorizadores[".googleLikeFields"][] = "Clave";
$tdatatik_autorizadores[".googleLikeFields"][] = "Nombre";
$tdatatik_autorizadores[".googleLikeFields"][] = "CodigoDepto";
$tdatatik_autorizadores[".googleLikeFields"][] = "Codigo_Estructura";
$tdatatik_autorizadores[".googleLikeFields"][] = "Area";
$tdatatik_autorizadores[".googleLikeFields"][] = "Puesto";
$tdatatik_autorizadores[".googleLikeFields"][] = "Correo";
$tdatatik_autorizadores[".googleLikeFields"][] = "FechaInicio";
$tdatatik_autorizadores[".googleLikeFields"][] = "FechaFinal";
$tdatatik_autorizadores[".googleLikeFields"][] = "Estado";
$tdatatik_autorizadores[".googleLikeFields"][] = "FirmaDigital";



$tdatatik_autorizadores[".tableType"] = "list";

$tdatatik_autorizadores[".printerPageOrientation"] = 0;
$tdatatik_autorizadores[".nPrinterPageScale"] = 100;

$tdatatik_autorizadores[".nPrinterSplitRecords"] = 40;

$tdatatik_autorizadores[".geocodingEnabled"] = false;










$tdatatik_autorizadores[".pageSize"] = 20;

$tdatatik_autorizadores[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Usuario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_autorizadores[".strOrderBy"] = $tstrOrderBy;

$tdatatik_autorizadores[".orderindexes"] = array();
	$tdatatik_autorizadores[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Usuario");



$tdatatik_autorizadores[".sqlHead"] = "SELECT Usuario, Clave, Nombre, CodigoDepto, Codigo_Estructura, Area, Puesto, Correo, FechaInicio, FechaFinal, Estado, FirmaDigital, Firma";
$tdatatik_autorizadores[".sqlFrom"] = "FROM tik_autorizadores";
$tdatatik_autorizadores[".sqlWhereExpr"] = "";
$tdatatik_autorizadores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_autorizadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_autorizadores[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_autorizadores[".highlightSearchResults"] = true;

$tableKeystik_autorizadores = array();
$tableKeystik_autorizadores[] = "Usuario";
$tdatatik_autorizadores[".Keys"] = $tableKeystik_autorizadores;


$tdatatik_autorizadores[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Usuario");
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatik_autorizadores["Usuario"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Usuario";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Clave");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clave";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatatik_autorizadores["Clave"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Clave";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatik_autorizadores["Nombre"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Nombre";
//	CodigoDepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CodigoDepto";
	$fdata["GoodName"] = "CodigoDepto";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","CodigoDepto");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "CodigoDepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodigoDepto";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CodigoDepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "CodigoDepto";

	
	
	
	

	
	
	
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


	$tdatatik_autorizadores["CodigoDepto"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "CodigoDepto";
//	Codigo_Estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codigo_Estructura";
	$fdata["GoodName"] = "Codigo_Estructura";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Codigo_Estructura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Codigo_Estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo_Estructura";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatatik_autorizadores["Codigo_Estructura"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Codigo_Estructura";
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Area";

	
	
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


	$tdatatik_autorizadores["Area"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Area";
//	Puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puesto";
	$fdata["GoodName"] = "Puesto";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Puesto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puesto";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatik_autorizadores["Puesto"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Puesto";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Correo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Correo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatik_autorizadores["Correo"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Correo";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","FechaInicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaInicio";

	
	
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


	$tdatatik_autorizadores["FechaInicio"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "FechaInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","FechaFinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaFinal";

	
	
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


	$tdatatik_autorizadores["FechaFinal"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "FechaFinal";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Estado");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
		$edata["SelectSize"] = 1;

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


	$tdatatik_autorizadores["Estado"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "Estado";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","FirmaDigital");
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


	$tdatatik_autorizadores["FirmaDigital"] = $fdata;
		$tdatatik_autorizadores[".searchableFields"][] = "FirmaDigital";
//	Firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Firma";
	$fdata["GoodName"] = "Firma";
	$fdata["ownerTable"] = "tik_autorizadores";
	$fdata["Label"] = GetFieldLabel("tik_autorizadores","Firma");
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


	$tdatatik_autorizadores["Firma"] = $fdata;
	

$tables_data["tik_autorizadores"]=&$tdatatik_autorizadores;
$field_labels["tik_autorizadores"] = &$fieldLabelstik_autorizadores;
$fieldToolTips["tik_autorizadores"] = &$fieldToolTipstik_autorizadores;
$placeHolders["tik_autorizadores"] = &$placeHolderstik_autorizadores;
$page_titles["tik_autorizadores"] = &$pageTitlestik_autorizadores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_autorizadores"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_autorizadores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_autorizadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Usuario, Clave, Nombre, CodigoDepto, Codigo_Estructura, Area, Puesto, Correo, FechaInicio, FechaFinal, Estado, FirmaDigital, Firma";
$proto0["m_strFrom"] = "FROM tik_autorizadores";
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
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto6["m_sql"] = "Usuario";
$proto6["m_srcTableName"] = "tik_autorizadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto8["m_sql"] = "Clave";
$proto8["m_srcTableName"] = "tik_autorizadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "tik_autorizadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto12["m_sql"] = "CodigoDepto";
$proto12["m_srcTableName"] = "tik_autorizadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo_Estructura",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto14["m_sql"] = "Codigo_Estructura";
$proto14["m_srcTableName"] = "tik_autorizadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto16["m_sql"] = "Area";
$proto16["m_srcTableName"] = "tik_autorizadores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puesto",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto18["m_sql"] = "Puesto";
$proto18["m_srcTableName"] = "tik_autorizadores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto20["m_sql"] = "Correo";
$proto20["m_srcTableName"] = "tik_autorizadores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto22["m_sql"] = "FechaInicio";
$proto22["m_srcTableName"] = "tik_autorizadores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto24["m_sql"] = "FechaFinal";
$proto24["m_srcTableName"] = "tik_autorizadores";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto26["m_sql"] = "Estado";
$proto26["m_srcTableName"] = "tik_autorizadores";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto28["m_sql"] = "FirmaDigital";
$proto28["m_srcTableName"] = "tik_autorizadores";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Firma",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto30["m_sql"] = "Firma";
$proto30["m_srcTableName"] = "tik_autorizadores";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tik_autorizadores";
$proto33["m_srcTableName"] = "tik_autorizadores";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Usuario";
$proto33["m_columns"][] = "Clave";
$proto33["m_columns"][] = "Nombre";
$proto33["m_columns"][] = "CodigoDepto";
$proto33["m_columns"][] = "Codigo_Estructura";
$proto33["m_columns"][] = "Area";
$proto33["m_columns"][] = "Puesto";
$proto33["m_columns"][] = "Correo";
$proto33["m_columns"][] = "FechaInicio";
$proto33["m_columns"][] = "FechaFinal";
$proto33["m_columns"][] = "Estado";
$proto33["m_columns"][] = "FirmaDigital";
$proto33["m_columns"][] = "Firma";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tik_autorizadores";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tik_autorizadores";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_autorizadores",
	"m_srcTableName" => "tik_autorizadores"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_autorizadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_autorizadores = createSqlQuery_tik_autorizadores();


	
		;

													

$tdatatik_autorizadores[".sqlquery"] = $queryData_tik_autorizadores;



$tableEvents["tik_autorizadores"] = new eventsBase;
$tdatatik_autorizadores[".hasEvents"] = false;

?>