<?php
$tdatatik_memorando_pend = array();
$tdatatik_memorando_pend[".searchableFields"] = array();
$tdatatik_memorando_pend[".ShortName"] = "tik_memorando_pend";
$tdatatik_memorando_pend[".OwnerID"] = "";
$tdatatik_memorando_pend[".OriginalTable"] = "tik_memorando_pend";


$tdatatik_memorando_pend[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_memorando_pend[".originalPagesByType"] = $tdatatik_memorando_pend[".pagesByType"];
$tdatatik_memorando_pend[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_memorando_pend[".originalPages"] = $tdatatik_memorando_pend[".pages"];
$tdatatik_memorando_pend[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_memorando_pend[".originalDefaultPages"] = $tdatatik_memorando_pend[".defaultPages"];

//	field labels
$fieldLabelstik_memorando_pend = array();
$fieldToolTipstik_memorando_pend = array();
$pageTitlestik_memorando_pend = array();
$placeHolderstik_memorando_pend = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_memorando_pend["Spanish"] = array();
	$fieldToolTipstik_memorando_pend["Spanish"] = array();
	$placeHolderstik_memorando_pend["Spanish"] = array();
	$pageTitlestik_memorando_pend["Spanish"] = array();
	$fieldLabelstik_memorando_pend["Spanish"]["NoMemorando"] = "No Memorando";
	$fieldToolTipstik_memorando_pend["Spanish"]["NoMemorando"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["NoMemorando"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipstik_memorando_pend["Spanish"]["Fecha"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["Fecha"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["De"] = "De";
	$fieldToolTipstik_memorando_pend["Spanish"]["De"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["De"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["A"] = "A Usuario(s)";
	$fieldToolTipstik_memorando_pend["Spanish"]["A"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["A"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["Todos"] = "Todos";
	$fieldToolTipstik_memorando_pend["Spanish"]["Todos"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["Todos"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_memorando_pend["Spanish"]["Descripcion"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["Texto"] = "Texto";
	$fieldToolTipstik_memorando_pend["Spanish"]["Texto"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["Texto"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_memorando_pend["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["TipoPapel"] = "Tipo Papel";
	$fieldToolTipstik_memorando_pend["Spanish"]["TipoPapel"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["TipoPapel"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_memorando_pend["Spanish"]["Estado"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["Estado"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["FirmaDigitalA"] = "Firma Digital A";
	$fieldToolTipstik_memorando_pend["Spanish"]["FirmaDigitalA"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["FirmaDigitalA"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["ADepartamento"] = "A Departamento(s)";
	$fieldToolTipstik_memorando_pend["Spanish"]["ADepartamento"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["ADepartamento"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["DocumentoAdjunto1"] = "Documento Adjunto1";
	$fieldToolTipstik_memorando_pend["Spanish"]["DocumentoAdjunto1"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["DocumentoAdjunto1"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["DocumentoAdjunto2"] = "Documento Adjunto2";
	$fieldToolTipstik_memorando_pend["Spanish"]["DocumentoAdjunto2"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["DocumentoAdjunto2"] = "";
	$fieldLabelstik_memorando_pend["Spanish"]["DocumentoAdjunto3"] = "Documento Adjunto3";
	$fieldToolTipstik_memorando_pend["Spanish"]["DocumentoAdjunto3"] = "";
	$placeHolderstik_memorando_pend["Spanish"]["DocumentoAdjunto3"] = "";
	if (count($fieldToolTipstik_memorando_pend["Spanish"]))
		$tdatatik_memorando_pend[".isUseToolTips"] = true;
}


	$tdatatik_memorando_pend[".NCSearch"] = true;



$tdatatik_memorando_pend[".shortTableName"] = "tik_memorando_pend";
$tdatatik_memorando_pend[".nSecOptions"] = 0;

$tdatatik_memorando_pend[".mainTableOwnerID"] = "";
$tdatatik_memorando_pend[".entityType"] = 0;
$tdatatik_memorando_pend[".connId"] = "mpc_at_localhost";


$tdatatik_memorando_pend[".strOriginalTableName"] = "tik_memorando_pend";

	



$tdatatik_memorando_pend[".showAddInPopup"] = false;

$tdatatik_memorando_pend[".showEditInPopup"] = false;

$tdatatik_memorando_pend[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_memorando_pend[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_memorando_pend[".listAjax"] = false;
//	temporary
//$tdatatik_memorando_pend[".listAjax"] = false;

	$tdatatik_memorando_pend[".audit"] = true;

	$tdatatik_memorando_pend[".locking"] = false;


$pages = $tdatatik_memorando_pend[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_memorando_pend[".edit"] = true;
	$tdatatik_memorando_pend[".afterEditAction"] = 1;
	$tdatatik_memorando_pend[".closePopupAfterEdit"] = 1;
	$tdatatik_memorando_pend[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_memorando_pend[".add"] = true;
$tdatatik_memorando_pend[".afterAddAction"] = 1;
$tdatatik_memorando_pend[".closePopupAfterAdd"] = 1;
$tdatatik_memorando_pend[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_memorando_pend[".list"] = true;
}



$tdatatik_memorando_pend[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_memorando_pend[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_memorando_pend[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_memorando_pend[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_memorando_pend[".printFriendly"] = true;
}



$tdatatik_memorando_pend[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_memorando_pend[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_memorando_pend[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_memorando_pend[".isUseAjaxSuggest"] = true;

$tdatatik_memorando_pend[".rowHighlite"] = true;



																								

$tdatatik_memorando_pend[".ajaxCodeSnippetAdded"] = false;

$tdatatik_memorando_pend[".buttonsAdded"] = false;

$tdatatik_memorando_pend[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_memorando_pend[".isUseTimeForSearch"] = false;


$tdatatik_memorando_pend[".badgeColor"] = "3CB371";


$tdatatik_memorando_pend[".allSearchFields"] = array();
$tdatatik_memorando_pend[".filterFields"] = array();
$tdatatik_memorando_pend[".requiredSearchFields"] = array();

$tdatatik_memorando_pend[".googleLikeFields"] = array();
$tdatatik_memorando_pend[".googleLikeFields"][] = "NoMemorando";
$tdatatik_memorando_pend[".googleLikeFields"][] = "Fecha";
$tdatatik_memorando_pend[".googleLikeFields"][] = "De";
$tdatatik_memorando_pend[".googleLikeFields"][] = "A";
$tdatatik_memorando_pend[".googleLikeFields"][] = "ADepartamento";
$tdatatik_memorando_pend[".googleLikeFields"][] = "Todos";
$tdatatik_memorando_pend[".googleLikeFields"][] = "Descripcion";
$tdatatik_memorando_pend[".googleLikeFields"][] = "Texto";
$tdatatik_memorando_pend[".googleLikeFields"][] = "FirmaDigital";
$tdatatik_memorando_pend[".googleLikeFields"][] = "TipoPapel";
$tdatatik_memorando_pend[".googleLikeFields"][] = "Estado";
$tdatatik_memorando_pend[".googleLikeFields"][] = "FirmaDigitalA";
$tdatatik_memorando_pend[".googleLikeFields"][] = "DocumentoAdjunto1";
$tdatatik_memorando_pend[".googleLikeFields"][] = "DocumentoAdjunto2";
$tdatatik_memorando_pend[".googleLikeFields"][] = "DocumentoAdjunto3";



$tdatatik_memorando_pend[".tableType"] = "list";

$tdatatik_memorando_pend[".printerPageOrientation"] = 0;
$tdatatik_memorando_pend[".nPrinterPageScale"] = 100;

$tdatatik_memorando_pend[".nPrinterSplitRecords"] = 40;

$tdatatik_memorando_pend[".geocodingEnabled"] = false;










$tdatatik_memorando_pend[".pageSize"] = 20;

$tdatatik_memorando_pend[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY NoMemorando DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_memorando_pend[".strOrderBy"] = $tstrOrderBy;

$tdatatik_memorando_pend[".orderindexes"] = array();
	$tdatatik_memorando_pend[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "NoMemorando");



$tdatatik_memorando_pend[".sqlHead"] = "SELECT NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3";
$tdatatik_memorando_pend[".sqlFrom"] = "FROM tik_memorando_pend";
$tdatatik_memorando_pend[".sqlWhereExpr"] = "(Estado =\"Firmado\")";
$tdatatik_memorando_pend[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_memorando_pend[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_memorando_pend[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_memorando_pend[".highlightSearchResults"] = true;

$tableKeystik_memorando_pend = array();
$tableKeystik_memorando_pend[] = "NoMemorando";
$tdatatik_memorando_pend[".Keys"] = $tableKeystik_memorando_pend;


$tdatatik_memorando_pend[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","NoMemorando");
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


	$tdatatik_memorando_pend["NoMemorando"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "NoMemorando";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","Fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	$tdatatik_memorando_pend["Fecha"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "Fecha";
//	De
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "De";
	$fdata["GoodName"] = "De";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","De");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "De";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "De";

	
	
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


	$tdatatik_memorando_pend["De"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "De";
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","A");
	$fdata["FieldType"] = 201;

	
	
	
			

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
		$edata["listPageId"] = "list";
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


	$tdatatik_memorando_pend["A"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "A";
//	ADepartamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ADepartamento";
	$fdata["GoodName"] = "ADepartamento";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","ADepartamento");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ADepartamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADepartamento";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
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


	$tdatatik_memorando_pend["ADepartamento"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "ADepartamento";
//	Todos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Todos";
	$fdata["GoodName"] = "Todos";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","Todos");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "Todos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Todos";

	
	
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


	$tdatatik_memorando_pend["Todos"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "Todos";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","Descripcion");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatatik_memorando_pend["Descripcion"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "Descripcion";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","Texto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Texto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Texto";

	
	
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


	$tdatatik_memorando_pend["Texto"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "Texto";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","FirmaDigital");
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


	$tdatatik_memorando_pend["FirmaDigital"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "FirmaDigital";
//	TipoPapel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TipoPapel";
	$fdata["GoodName"] = "TipoPapel";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","TipoPapel");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "TipoPapel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoPapel";

	
	
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
	$edata["LookupValues"][] = "Carta";
	$edata["LookupValues"][] = "Oficio";
	$edata["LookupValues"][] = "Legal";

	
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


	$tdatatik_memorando_pend["TipoPapel"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "TipoPapel";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","Estado");
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
	$edata["LookupValues"][] = "Pendiente";
	$edata["LookupValues"][] = "Firmado";

	
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


	$tdatatik_memorando_pend["Estado"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "Estado";
//	FirmaDigitalA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FirmaDigitalA";
	$fdata["GoodName"] = "FirmaDigitalA";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","FirmaDigitalA");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "FirmaDigitalA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirmaDigitalA";

	
	
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


	$tdatatik_memorando_pend["FirmaDigitalA"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "FirmaDigitalA";
//	DocumentoAdjunto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DocumentoAdjunto1";
	$fdata["GoodName"] = "DocumentoAdjunto1";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","DocumentoAdjunto1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto1";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatatik_memorando_pend["DocumentoAdjunto1"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "DocumentoAdjunto1";
//	DocumentoAdjunto2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DocumentoAdjunto2";
	$fdata["GoodName"] = "DocumentoAdjunto2";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","DocumentoAdjunto2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto2";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatatik_memorando_pend["DocumentoAdjunto2"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "DocumentoAdjunto2";
//	DocumentoAdjunto3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DocumentoAdjunto3";
	$fdata["GoodName"] = "DocumentoAdjunto3";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("tik_memorando_pend","DocumentoAdjunto3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto3";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatatik_memorando_pend["DocumentoAdjunto3"] = $fdata;
		$tdatatik_memorando_pend[".searchableFields"][] = "DocumentoAdjunto3";


$tables_data["tik_memorando_pend"]=&$tdatatik_memorando_pend;
$field_labels["tik_memorando_pend"] = &$fieldLabelstik_memorando_pend;
$fieldToolTips["tik_memorando_pend"] = &$fieldToolTipstik_memorando_pend;
$placeHolders["tik_memorando_pend"] = &$placeHolderstik_memorando_pend;
$page_titles["tik_memorando_pend"] = &$pageTitlestik_memorando_pend;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_memorando_pend"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_memorando_pend"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_memorando_pend()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3";
$proto0["m_strFrom"] = "FROM tik_memorando_pend";
$proto0["m_strWhere"] = "(Estado =\"Firmado\")";
$proto0["m_strOrderBy"] = "ORDER BY NoMemorando DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Estado =\"Firmado\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=\"Firmado\"";
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
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto6["m_sql"] = "NoMemorando";
$proto6["m_srcTableName"] = "tik_memorando_pend";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "tik_memorando_pend";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "De",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto10["m_sql"] = "De";
$proto10["m_srcTableName"] = "tik_memorando_pend";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto12["m_sql"] = "A";
$proto12["m_srcTableName"] = "tik_memorando_pend";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ADepartamento",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto14["m_sql"] = "ADepartamento";
$proto14["m_srcTableName"] = "tik_memorando_pend";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Todos",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto16["m_sql"] = "Todos";
$proto16["m_srcTableName"] = "tik_memorando_pend";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto18["m_sql"] = "Descripcion";
$proto18["m_srcTableName"] = "tik_memorando_pend";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto20["m_sql"] = "Texto";
$proto20["m_srcTableName"] = "tik_memorando_pend";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto22["m_sql"] = "FirmaDigital";
$proto22["m_srcTableName"] = "tik_memorando_pend";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPapel",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto24["m_sql"] = "TipoPapel";
$proto24["m_srcTableName"] = "tik_memorando_pend";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto26["m_sql"] = "Estado";
$proto26["m_srcTableName"] = "tik_memorando_pend";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigitalA",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto28["m_sql"] = "FirmaDigitalA";
$proto28["m_srcTableName"] = "tik_memorando_pend";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto1",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto30["m_sql"] = "DocumentoAdjunto1";
$proto30["m_srcTableName"] = "tik_memorando_pend";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto2",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto32["m_sql"] = "DocumentoAdjunto2";
$proto32["m_srcTableName"] = "tik_memorando_pend";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto3",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto34["m_sql"] = "DocumentoAdjunto3";
$proto34["m_srcTableName"] = "tik_memorando_pend";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tik_memorando_pend";
$proto37["m_srcTableName"] = "tik_memorando_pend";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "NoMemorando";
$proto37["m_columns"][] = "Fecha";
$proto37["m_columns"][] = "De";
$proto37["m_columns"][] = "CodigoDepto";
$proto37["m_columns"][] = "A";
$proto37["m_columns"][] = "ADepartamento";
$proto37["m_columns"][] = "Todos";
$proto37["m_columns"][] = "Descripcion";
$proto37["m_columns"][] = "Texto";
$proto37["m_columns"][] = "FirmaDigital";
$proto37["m_columns"][] = "TipoPapel";
$proto37["m_columns"][] = "Estado";
$proto37["m_columns"][] = "FirmaDigitalA";
$proto37["m_columns"][] = "Usuario";
$proto37["m_columns"][] = "FechaHora";
$proto37["m_columns"][] = "Documento";
$proto37["m_columns"][] = "TipoDocumento";
$proto37["m_columns"][] = "VoBo";
$proto37["m_columns"][] = "RequiereAutorizacion";
$proto37["m_columns"][] = "Autorizador";
$proto37["m_columns"][] = "Categoria";
$proto37["m_columns"][] = "DocumentoAdjunto1";
$proto37["m_columns"][] = "DocumentoAdjunto2";
$proto37["m_columns"][] = "DocumentoAdjunto3";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tik_memorando_pend";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tik_memorando_pend";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "tik_memorando_pend"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_memorando_pend";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_memorando_pend = createSqlQuery_tik_memorando_pend();


	
		;

															

$tdatatik_memorando_pend[".sqlquery"] = $queryData_tik_memorando_pend;



include_once(getabspath("include/tik_memorando_pend_events.php"));
$tableEvents["tik_memorando_pend"] = new eventclass_tik_memorando_pend;
$tdatatik_memorando_pend[".hasEvents"] = true;

?>