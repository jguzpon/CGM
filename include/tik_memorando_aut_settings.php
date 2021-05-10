<?php
$tdatatik_memorando_aut = array();
$tdatatik_memorando_aut[".searchableFields"] = array();
$tdatatik_memorando_aut[".ShortName"] = "tik_memorando_aut";
$tdatatik_memorando_aut[".OwnerID"] = "Autorizador";
$tdatatik_memorando_aut[".OriginalTable"] = "tik_memorando_aut";


$tdatatik_memorando_aut[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_memorando_aut[".originalPagesByType"] = $tdatatik_memorando_aut[".pagesByType"];
$tdatatik_memorando_aut[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_memorando_aut[".originalPages"] = $tdatatik_memorando_aut[".pages"];
$tdatatik_memorando_aut[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_memorando_aut[".originalDefaultPages"] = $tdatatik_memorando_aut[".defaultPages"];

//	field labels
$fieldLabelstik_memorando_aut = array();
$fieldToolTipstik_memorando_aut = array();
$pageTitlestik_memorando_aut = array();
$placeHolderstik_memorando_aut = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_memorando_aut["Spanish"] = array();
	$fieldToolTipstik_memorando_aut["Spanish"] = array();
	$placeHolderstik_memorando_aut["Spanish"] = array();
	$pageTitlestik_memorando_aut["Spanish"] = array();
	$fieldLabelstik_memorando_aut["Spanish"]["NoMemorando"] = "No Memorando";
	$fieldToolTipstik_memorando_aut["Spanish"]["NoMemorando"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["NoMemorando"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipstik_memorando_aut["Spanish"]["Fecha"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Fecha"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["De"] = "De";
	$fieldToolTipstik_memorando_aut["Spanish"]["De"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["De"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["A"] = "A";
	$fieldToolTipstik_memorando_aut["Spanish"]["A"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["A"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Todos"] = "Todos";
	$fieldToolTipstik_memorando_aut["Spanish"]["Todos"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Todos"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_memorando_aut["Spanish"]["Descripcion"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Texto"] = "Texto";
	$fieldToolTipstik_memorando_aut["Spanish"]["Texto"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Texto"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_memorando_aut["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["TipoPapel"] = "Tipo Papel";
	$fieldToolTipstik_memorando_aut["Spanish"]["TipoPapel"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["TipoPapel"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_memorando_aut["Spanish"]["Estado"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Estado"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["FirmaDigitalA"] = "Firma Digital A";
	$fieldToolTipstik_memorando_aut["Spanish"]["FirmaDigitalA"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["FirmaDigitalA"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_memorando_aut["Spanish"]["Usuario"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Usuario"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["FechaHora"] = "Fecha Hora";
	$fieldToolTipstik_memorando_aut["Spanish"]["FechaHora"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["FechaHora"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Documento"] = "Documento";
	$fieldToolTipstik_memorando_aut["Spanish"]["Documento"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Documento"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipstik_memorando_aut["Spanish"]["TipoDocumento"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["TipoDocumento"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["VoBo"] = "Vo Bo";
	$fieldToolTipstik_memorando_aut["Spanish"]["VoBo"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["VoBo"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["RequiereAutorizacion"] = "Requiere Autorizacion";
	$fieldToolTipstik_memorando_aut["Spanish"]["RequiereAutorizacion"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["RequiereAutorizacion"] = "";
	$fieldLabelstik_memorando_aut["Spanish"]["Autorizador"] = "Autorizador";
	$fieldToolTipstik_memorando_aut["Spanish"]["Autorizador"] = "";
	$placeHolderstik_memorando_aut["Spanish"]["Autorizador"] = "";
	if (count($fieldToolTipstik_memorando_aut["Spanish"]))
		$tdatatik_memorando_aut[".isUseToolTips"] = true;
}


	$tdatatik_memorando_aut[".NCSearch"] = true;



$tdatatik_memorando_aut[".shortTableName"] = "tik_memorando_aut";
$tdatatik_memorando_aut[".nSecOptions"] = 1;

$tdatatik_memorando_aut[".mainTableOwnerID"] = "Autorizador";
$tdatatik_memorando_aut[".entityType"] = 0;
$tdatatik_memorando_aut[".connId"] = "mpc_at_localhost";


$tdatatik_memorando_aut[".strOriginalTableName"] = "tik_memorando_aut";

	



$tdatatik_memorando_aut[".showAddInPopup"] = false;

$tdatatik_memorando_aut[".showEditInPopup"] = false;

$tdatatik_memorando_aut[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_memorando_aut[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_memorando_aut[".listAjax"] = false;
//	temporary
//$tdatatik_memorando_aut[".listAjax"] = false;

	$tdatatik_memorando_aut[".audit"] = true;

	$tdatatik_memorando_aut[".locking"] = false;


$pages = $tdatatik_memorando_aut[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_memorando_aut[".edit"] = true;
	$tdatatik_memorando_aut[".afterEditAction"] = 1;
	$tdatatik_memorando_aut[".closePopupAfterEdit"] = 1;
	$tdatatik_memorando_aut[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_memorando_aut[".add"] = true;
$tdatatik_memorando_aut[".afterAddAction"] = 1;
$tdatatik_memorando_aut[".closePopupAfterAdd"] = 1;
$tdatatik_memorando_aut[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_memorando_aut[".list"] = true;
}



$tdatatik_memorando_aut[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_memorando_aut[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_memorando_aut[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_memorando_aut[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_memorando_aut[".printFriendly"] = true;
}



$tdatatik_memorando_aut[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_memorando_aut[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_memorando_aut[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_memorando_aut[".isUseAjaxSuggest"] = true;

$tdatatik_memorando_aut[".rowHighlite"] = true;



																								

$tdatatik_memorando_aut[".ajaxCodeSnippetAdded"] = false;

$tdatatik_memorando_aut[".buttonsAdded"] = false;

$tdatatik_memorando_aut[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_memorando_aut[".isUseTimeForSearch"] = false;


$tdatatik_memorando_aut[".badgeColor"] = "BC8F8F";


$tdatatik_memorando_aut[".allSearchFields"] = array();
$tdatatik_memorando_aut[".filterFields"] = array();
$tdatatik_memorando_aut[".requiredSearchFields"] = array();

$tdatatik_memorando_aut[".googleLikeFields"] = array();
$tdatatik_memorando_aut[".googleLikeFields"][] = "NoMemorando";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Fecha";
$tdatatik_memorando_aut[".googleLikeFields"][] = "De";
$tdatatik_memorando_aut[".googleLikeFields"][] = "A";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Todos";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Descripcion";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Texto";
$tdatatik_memorando_aut[".googleLikeFields"][] = "FirmaDigital";
$tdatatik_memorando_aut[".googleLikeFields"][] = "TipoPapel";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Estado";
$tdatatik_memorando_aut[".googleLikeFields"][] = "FirmaDigitalA";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Usuario";
$tdatatik_memorando_aut[".googleLikeFields"][] = "FechaHora";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Documento";
$tdatatik_memorando_aut[".googleLikeFields"][] = "TipoDocumento";
$tdatatik_memorando_aut[".googleLikeFields"][] = "VoBo";
$tdatatik_memorando_aut[".googleLikeFields"][] = "RequiereAutorizacion";
$tdatatik_memorando_aut[".googleLikeFields"][] = "Autorizador";



$tdatatik_memorando_aut[".tableType"] = "list";

$tdatatik_memorando_aut[".printerPageOrientation"] = 0;
$tdatatik_memorando_aut[".nPrinterPageScale"] = 100;

$tdatatik_memorando_aut[".nPrinterSplitRecords"] = 40;

$tdatatik_memorando_aut[".geocodingEnabled"] = false;










$tdatatik_memorando_aut[".pageSize"] = 20;

$tdatatik_memorando_aut[".warnLeavingPages"] = true;

$tdatatik_memorando_aut[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_memorando_aut[".strOrderBy"] = $tstrOrderBy;

$tdatatik_memorando_aut[".orderindexes"] = array();


$tdatatik_memorando_aut[".sqlHead"] = "SELECT NoMemorando,  Fecha,  De,  A,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  Usuario,  FechaHora,  Documento,  TipoDocumento,  VoBo,  RequiereAutorizacion,  Autorizador";
$tdatatik_memorando_aut[".sqlFrom"] = "FROM tik_memorando_aut";
$tdatatik_memorando_aut[".sqlWhereExpr"] = "(Autorizador <>'')";
$tdatatik_memorando_aut[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_memorando_aut[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_memorando_aut[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_memorando_aut[".highlightSearchResults"] = true;

$tableKeystik_memorando_aut = array();
$tableKeystik_memorando_aut[] = "NoMemorando";
$tdatatik_memorando_aut[".Keys"] = $tableKeystik_memorando_aut;


$tdatatik_memorando_aut[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","NoMemorando");
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


	$tdatatik_memorando_aut["NoMemorando"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "NoMemorando";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Fecha");
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


	$tdatatik_memorando_aut["Fecha"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Fecha";
//	De
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "De";
	$fdata["GoodName"] = "De";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","De");
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


	$tdatatik_memorando_aut["De"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "De";
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","A");
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


	$tdatatik_memorando_aut["A"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "A";
//	Todos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Todos";
	$fdata["GoodName"] = "Todos";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Todos");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "Todos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Todos";

	
	
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


	$tdatatik_memorando_aut["Todos"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Todos";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Descripcion");
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


	$tdatatik_memorando_aut["Descripcion"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Descripcion";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Texto");
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


	$tdatatik_memorando_aut["Texto"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Texto";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","FirmaDigital");
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


	$tdatatik_memorando_aut["FirmaDigital"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "FirmaDigital";
//	TipoPapel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TipoPapel";
	$fdata["GoodName"] = "TipoPapel";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","TipoPapel");
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


	$tdatatik_memorando_aut["TipoPapel"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "TipoPapel";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Estado");
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
	$edata["LookupValues"][] = "Autorizado";
	$edata["LookupValues"][] = "Firmado";
	$edata["LookupValues"][] = "Leido";

	
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


	$tdatatik_memorando_aut["Estado"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Estado";
//	FirmaDigitalA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FirmaDigitalA";
	$fdata["GoodName"] = "FirmaDigitalA";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","FirmaDigitalA");
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


	$tdatatik_memorando_aut["FirmaDigitalA"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "FirmaDigitalA";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Usuario");
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


	$tdatatik_memorando_aut["Usuario"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Usuario";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","FechaHora");
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


	$tdatatik_memorando_aut["FechaHora"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "FechaHora";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Documento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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


	$tdatatik_memorando_aut["Documento"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","TipoDocumento");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "TipoDocumento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoDocumento";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "cdm_tipo_documentos";
	$edata["LookupConnId"] = "mpc_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "Tipo_Documento";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "Tipo_Documento";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatatik_memorando_aut["TipoDocumento"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "TipoDocumento";
//	VoBo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "VoBo";
	$fdata["GoodName"] = "VoBo";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","VoBo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "VoBo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VoBo";

	
	
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


	$tdatatik_memorando_aut["VoBo"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "VoBo";
//	RequiereAutorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RequiereAutorizacion";
	$fdata["GoodName"] = "RequiereAutorizacion";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","RequiereAutorizacion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "RequiereAutorizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RequiereAutorizacion";

	
	
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


	$tdatatik_memorando_aut["RequiereAutorizacion"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "RequiereAutorizacion";
//	Autorizador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Autorizador";
	$fdata["GoodName"] = "Autorizador";
	$fdata["ownerTable"] = "tik_memorando_aut";
	$fdata["Label"] = GetFieldLabel("tik_memorando_aut","Autorizador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Autorizador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Autorizador";

	
	
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


	$tdatatik_memorando_aut["Autorizador"] = $fdata;
		$tdatatik_memorando_aut[".searchableFields"][] = "Autorizador";


$tables_data["tik_memorando_aut"]=&$tdatatik_memorando_aut;
$field_labels["tik_memorando_aut"] = &$fieldLabelstik_memorando_aut;
$fieldToolTips["tik_memorando_aut"] = &$fieldToolTipstik_memorando_aut;
$placeHolders["tik_memorando_aut"] = &$placeHolderstik_memorando_aut;
$page_titles["tik_memorando_aut"] = &$pageTitlestik_memorando_aut;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_memorando_aut"] = array();
//	tik_memorando_adjunto
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_memorando_adjunto";
		$detailsParam["dOriginalTable"] = "tik_memorando_adjunto";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_memorando_adjunto";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_memorando_adjunto");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_memorando_aut"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_memorando_aut"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_memorando_aut"][$dIndex]["masterKeys"][]="NoMemorando";

				$detailsTablesData["tik_memorando_aut"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_memorando_aut"][$dIndex]["detailKeys"][]="NoMemorando";

// tables which are master tables for current table (detail)
$masterTablesData["tik_memorando_aut"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_memorando_aut()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando,  Fecha,  De,  A,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  Usuario,  FechaHora,  Documento,  TipoDocumento,  VoBo,  RequiereAutorizacion,  Autorizador";
$proto0["m_strFrom"] = "FROM tik_memorando_aut";
$proto0["m_strWhere"] = "(Autorizador <>'')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Autorizador <>''";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Autorizador",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<>''";
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
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto6["m_sql"] = "NoMemorando";
$proto6["m_srcTableName"] = "tik_memorando_aut";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "tik_memorando_aut";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "De",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto10["m_sql"] = "De";
$proto10["m_srcTableName"] = "tik_memorando_aut";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto12["m_sql"] = "A";
$proto12["m_srcTableName"] = "tik_memorando_aut";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Todos",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto14["m_sql"] = "Todos";
$proto14["m_srcTableName"] = "tik_memorando_aut";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto16["m_sql"] = "Descripcion";
$proto16["m_srcTableName"] = "tik_memorando_aut";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto18["m_sql"] = "Texto";
$proto18["m_srcTableName"] = "tik_memorando_aut";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto20["m_sql"] = "FirmaDigital";
$proto20["m_srcTableName"] = "tik_memorando_aut";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPapel",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto22["m_sql"] = "TipoPapel";
$proto22["m_srcTableName"] = "tik_memorando_aut";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto24["m_sql"] = "Estado";
$proto24["m_srcTableName"] = "tik_memorando_aut";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigitalA",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto26["m_sql"] = "FirmaDigitalA";
$proto26["m_srcTableName"] = "tik_memorando_aut";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto28["m_sql"] = "Usuario";
$proto28["m_srcTableName"] = "tik_memorando_aut";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto30["m_sql"] = "FechaHora";
$proto30["m_srcTableName"] = "tik_memorando_aut";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto32["m_sql"] = "Documento";
$proto32["m_srcTableName"] = "tik_memorando_aut";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumento",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto34["m_sql"] = "TipoDocumento";
$proto34["m_srcTableName"] = "tik_memorando_aut";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "VoBo",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto36["m_sql"] = "VoBo";
$proto36["m_srcTableName"] = "tik_memorando_aut";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RequiereAutorizacion",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto38["m_sql"] = "RequiereAutorizacion";
$proto38["m_srcTableName"] = "tik_memorando_aut";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizador",
	"m_strTable" => "tik_memorando_aut",
	"m_srcTableName" => "tik_memorando_aut"
));

$proto40["m_sql"] = "Autorizador";
$proto40["m_srcTableName"] = "tik_memorando_aut";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "tik_memorando_aut";
$proto43["m_srcTableName"] = "tik_memorando_aut";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "NoMemorando";
$proto43["m_columns"][] = "Fecha";
$proto43["m_columns"][] = "De";
$proto43["m_columns"][] = "A";
$proto43["m_columns"][] = "Todos";
$proto43["m_columns"][] = "Descripcion";
$proto43["m_columns"][] = "Texto";
$proto43["m_columns"][] = "FirmaDigital";
$proto43["m_columns"][] = "TipoPapel";
$proto43["m_columns"][] = "Estado";
$proto43["m_columns"][] = "FirmaDigitalA";
$proto43["m_columns"][] = "Usuario";
$proto43["m_columns"][] = "FechaHora";
$proto43["m_columns"][] = "Documento";
$proto43["m_columns"][] = "TipoDocumento";
$proto43["m_columns"][] = "VoBo";
$proto43["m_columns"][] = "RequiereAutorizacion";
$proto43["m_columns"][] = "Autorizador";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "tik_memorando_aut";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "tik_memorando_aut";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tik_memorando_aut";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_memorando_aut = createSqlQuery_tik_memorando_aut();


	
		;

																		

$tdatatik_memorando_aut[".sqlquery"] = $queryData_tik_memorando_aut;



include_once(getabspath("include/tik_memorando_aut_events.php"));
$tableEvents["tik_memorando_aut"] = new eventclass_tik_memorando_aut;
$tdatatik_memorando_aut[".hasEvents"] = true;

?>