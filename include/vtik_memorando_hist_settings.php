<?php
$tdatavtik_memorando_hist = array();
$tdatavtik_memorando_hist[".searchableFields"] = array();
$tdatavtik_memorando_hist[".ShortName"] = "vtik_memorando_hist";
$tdatavtik_memorando_hist[".OwnerID"] = "";
$tdatavtik_memorando_hist[".OriginalTable"] = "tik_memorando_pend";


$tdatavtik_memorando_hist[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavtik_memorando_hist[".originalPagesByType"] = $tdatavtik_memorando_hist[".pagesByType"];
$tdatavtik_memorando_hist[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavtik_memorando_hist[".originalPages"] = $tdatavtik_memorando_hist[".pages"];
$tdatavtik_memorando_hist[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavtik_memorando_hist[".originalDefaultPages"] = $tdatavtik_memorando_hist[".defaultPages"];

//	field labels
$fieldLabelsvtik_memorando_hist = array();
$fieldToolTipsvtik_memorando_hist = array();
$pageTitlesvtik_memorando_hist = array();
$placeHoldersvtik_memorando_hist = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvtik_memorando_hist["Spanish"] = array();
	$fieldToolTipsvtik_memorando_hist["Spanish"] = array();
	$placeHoldersvtik_memorando_hist["Spanish"] = array();
	$pageTitlesvtik_memorando_hist["Spanish"] = array();
	$fieldLabelsvtik_memorando_hist["Spanish"]["NoMemorando"] = "No Memorando";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["NoMemorando"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["NoMemorando"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["Fecha"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["Fecha"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["De"] = "De";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["De"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["De"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["A"] = "A Usuario(s)";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["A"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["A"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["Todos"] = "Todos";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["Todos"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["Todos"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["Descripcion"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["Descripcion"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["Texto"] = "Texto";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["Texto"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["Texto"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["FirmaDigital"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["FirmaDigital"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["TipoPapel"] = "Tipo Papel";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["TipoPapel"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["TipoPapel"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["Estado"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["Estado"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["FirmaDigitalA"] = "Firma Digital A";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["FirmaDigitalA"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["FirmaDigitalA"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["ADepartamento"] = "A Departamento(s)";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["ADepartamento"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["ADepartamento"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["DocumentoAdjunto1"] = "Documento Adjunto1";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["DocumentoAdjunto1"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["DocumentoAdjunto1"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["DocumentoAdjunto2"] = "Documento Adjunto2";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["DocumentoAdjunto2"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["DocumentoAdjunto2"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["DocumentoAdjunto3"] = "Documento Adjunto3";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["DocumentoAdjunto3"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["DocumentoAdjunto3"] = "";
	$fieldLabelsvtik_memorando_hist["Spanish"]["FechaExpiracion"] = "Fecha Expiracion";
	$fieldToolTipsvtik_memorando_hist["Spanish"]["FechaExpiracion"] = "";
	$placeHoldersvtik_memorando_hist["Spanish"]["FechaExpiracion"] = "";
	if (count($fieldToolTipsvtik_memorando_hist["Spanish"]))
		$tdatavtik_memorando_hist[".isUseToolTips"] = true;
}


	$tdatavtik_memorando_hist[".NCSearch"] = true;



$tdatavtik_memorando_hist[".shortTableName"] = "vtik_memorando_hist";
$tdatavtik_memorando_hist[".nSecOptions"] = 0;

$tdatavtik_memorando_hist[".mainTableOwnerID"] = "";
$tdatavtik_memorando_hist[".entityType"] = 1;
$tdatavtik_memorando_hist[".connId"] = "mpc_at_localhost";


$tdatavtik_memorando_hist[".strOriginalTableName"] = "tik_memorando_pend";

	



$tdatavtik_memorando_hist[".showAddInPopup"] = false;

$tdatavtik_memorando_hist[".showEditInPopup"] = false;

$tdatavtik_memorando_hist[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavtik_memorando_hist[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavtik_memorando_hist[".listAjax"] = false;
//	temporary
//$tdatavtik_memorando_hist[".listAjax"] = false;

	$tdatavtik_memorando_hist[".audit"] = true;

	$tdatavtik_memorando_hist[".locking"] = false;


$pages = $tdatavtik_memorando_hist[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavtik_memorando_hist[".edit"] = true;
	$tdatavtik_memorando_hist[".afterEditAction"] = 1;
	$tdatavtik_memorando_hist[".closePopupAfterEdit"] = 1;
	$tdatavtik_memorando_hist[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavtik_memorando_hist[".add"] = true;
$tdatavtik_memorando_hist[".afterAddAction"] = 1;
$tdatavtik_memorando_hist[".closePopupAfterAdd"] = 1;
$tdatavtik_memorando_hist[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavtik_memorando_hist[".list"] = true;
}



$tdatavtik_memorando_hist[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavtik_memorando_hist[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavtik_memorando_hist[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavtik_memorando_hist[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavtik_memorando_hist[".printFriendly"] = true;
}



$tdatavtik_memorando_hist[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavtik_memorando_hist[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavtik_memorando_hist[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavtik_memorando_hist[".isUseAjaxSuggest"] = true;

$tdatavtik_memorando_hist[".rowHighlite"] = true;



																		

$tdatavtik_memorando_hist[".ajaxCodeSnippetAdded"] = false;

$tdatavtik_memorando_hist[".buttonsAdded"] = false;

$tdatavtik_memorando_hist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavtik_memorando_hist[".isUseTimeForSearch"] = false;


$tdatavtik_memorando_hist[".badgeColor"] = "9ACD32";


$tdatavtik_memorando_hist[".allSearchFields"] = array();
$tdatavtik_memorando_hist[".filterFields"] = array();
$tdatavtik_memorando_hist[".requiredSearchFields"] = array();

$tdatavtik_memorando_hist[".googleLikeFields"] = array();
$tdatavtik_memorando_hist[".googleLikeFields"][] = "NoMemorando";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "Fecha";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "De";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "A";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "ADepartamento";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "Todos";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "Descripcion";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "Texto";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "FirmaDigital";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "TipoPapel";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "Estado";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "FirmaDigitalA";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "DocumentoAdjunto1";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "DocumentoAdjunto2";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "DocumentoAdjunto3";
$tdatavtik_memorando_hist[".googleLikeFields"][] = "FechaExpiracion";



$tdatavtik_memorando_hist[".tableType"] = "list";

$tdatavtik_memorando_hist[".printerPageOrientation"] = 0;
$tdatavtik_memorando_hist[".nPrinterPageScale"] = 100;

$tdatavtik_memorando_hist[".nPrinterSplitRecords"] = 40;

$tdatavtik_memorando_hist[".geocodingEnabled"] = false;










$tdatavtik_memorando_hist[".pageSize"] = 20;

$tdatavtik_memorando_hist[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY NoMemorando DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavtik_memorando_hist[".strOrderBy"] = $tstrOrderBy;

$tdatavtik_memorando_hist[".orderindexes"] = array();
	$tdatavtik_memorando_hist[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "NoMemorando");



$tdatavtik_memorando_hist[".sqlHead"] = "SELECT NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3,  tik_sumdaysdate(Fecha, 56) AS FechaExpiracion";
$tdatavtik_memorando_hist[".sqlFrom"] = "FROM tik_memorando_pend";
$tdatavtik_memorando_hist[".sqlWhereExpr"] = "(Estado =\"Firmado\") AND (tik_sumdaysdate(Fecha, 56) <curdate())";
$tdatavtik_memorando_hist[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavtik_memorando_hist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavtik_memorando_hist[".arrGroupsPerPage"] = $arrGPP;

$tdatavtik_memorando_hist[".highlightSearchResults"] = true;

$tableKeysvtik_memorando_hist = array();
$tableKeysvtik_memorando_hist[] = "NoMemorando";
$tdatavtik_memorando_hist[".Keys"] = $tableKeysvtik_memorando_hist;


$tdatavtik_memorando_hist[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","NoMemorando");
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


	$tdatavtik_memorando_hist["NoMemorando"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "NoMemorando";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","Fecha");
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "NOT Empty";
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


	$tdatavtik_memorando_hist["Fecha"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "Fecha";
//	De
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "De";
	$fdata["GoodName"] = "De";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","De");
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


	$tdatavtik_memorando_hist["De"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "De";
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","A");
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


	$tdatavtik_memorando_hist["A"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "A";
//	ADepartamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ADepartamento";
	$fdata["GoodName"] = "ADepartamento";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","ADepartamento");
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


	$tdatavtik_memorando_hist["ADepartamento"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "ADepartamento";
//	Todos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Todos";
	$fdata["GoodName"] = "Todos";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","Todos");
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


	$tdatavtik_memorando_hist["Todos"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "Todos";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","Descripcion");
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


	$tdatavtik_memorando_hist["Descripcion"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "Descripcion";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","Texto");
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


	$tdatavtik_memorando_hist["Texto"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "Texto";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","FirmaDigital");
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


	$tdatavtik_memorando_hist["FirmaDigital"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "FirmaDigital";
//	TipoPapel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TipoPapel";
	$fdata["GoodName"] = "TipoPapel";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","TipoPapel");
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


	$tdatavtik_memorando_hist["TipoPapel"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "TipoPapel";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","Estado");
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


	$tdatavtik_memorando_hist["Estado"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "Estado";
//	FirmaDigitalA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FirmaDigitalA";
	$fdata["GoodName"] = "FirmaDigitalA";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","FirmaDigitalA");
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


	$tdatavtik_memorando_hist["FirmaDigitalA"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "FirmaDigitalA";
//	DocumentoAdjunto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DocumentoAdjunto1";
	$fdata["GoodName"] = "DocumentoAdjunto1";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","DocumentoAdjunto1");
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


	$tdatavtik_memorando_hist["DocumentoAdjunto1"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "DocumentoAdjunto1";
//	DocumentoAdjunto2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DocumentoAdjunto2";
	$fdata["GoodName"] = "DocumentoAdjunto2";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","DocumentoAdjunto2");
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


	$tdatavtik_memorando_hist["DocumentoAdjunto2"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "DocumentoAdjunto2";
//	DocumentoAdjunto3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DocumentoAdjunto3";
	$fdata["GoodName"] = "DocumentoAdjunto3";
	$fdata["ownerTable"] = "tik_memorando_pend";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","DocumentoAdjunto3");
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


	$tdatavtik_memorando_hist["DocumentoAdjunto3"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "DocumentoAdjunto3";
//	FechaExpiracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FechaExpiracion";
	$fdata["GoodName"] = "FechaExpiracion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vtik_memorando_hist","FechaExpiracion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaExpiracion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_sumdaysdate(Fecha, 56)";

	
	
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


	$tdatavtik_memorando_hist["FechaExpiracion"] = $fdata;
		$tdatavtik_memorando_hist[".searchableFields"][] = "FechaExpiracion";


$tables_data["vtik_memorando_hist"]=&$tdatavtik_memorando_hist;
$field_labels["vtik_memorando_hist"] = &$fieldLabelsvtik_memorando_hist;
$fieldToolTips["vtik_memorando_hist"] = &$fieldToolTipsvtik_memorando_hist;
$placeHolders["vtik_memorando_hist"] = &$placeHoldersvtik_memorando_hist;
$page_titles["vtik_memorando_hist"] = &$pageTitlesvtik_memorando_hist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vtik_memorando_hist"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vtik_memorando_hist"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vtik_memorando_hist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  TipoPapel,  Estado,  FirmaDigitalA,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3,  tik_sumdaysdate(Fecha, 56) AS FechaExpiracion";
$proto0["m_strFrom"] = "FROM tik_memorando_pend";
$proto0["m_strWhere"] = "(Estado =\"Firmado\") AND (tik_sumdaysdate(Fecha, 56) <curdate())";
$proto0["m_strOrderBy"] = "ORDER BY NoMemorando DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Estado =\"Firmado\") AND (tik_sumdaysdate(Fecha, 56) <curdate())";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Estado =\"Firmado\") AND (tik_sumdaysdate(Fecha, 56) <curdate())"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Estado =\"Firmado\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=\"Firmado\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "tik_sumdaysdate(Fecha, 56) <curdate()";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Fecha"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "56"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "tik_sumdaysdate";
$obj = new SQLFunctionCall($proto7);

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "<curdate()";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto12["m_sql"] = "NoMemorando";
$proto12["m_srcTableName"] = "vtik_memorando_hist";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto14["m_sql"] = "Fecha";
$proto14["m_srcTableName"] = "vtik_memorando_hist";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "De",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto16["m_sql"] = "De";
$proto16["m_srcTableName"] = "vtik_memorando_hist";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto18["m_sql"] = "A";
$proto18["m_srcTableName"] = "vtik_memorando_hist";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ADepartamento",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto20["m_sql"] = "ADepartamento";
$proto20["m_srcTableName"] = "vtik_memorando_hist";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Todos",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto22["m_sql"] = "Todos";
$proto22["m_srcTableName"] = "vtik_memorando_hist";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto24["m_sql"] = "Descripcion";
$proto24["m_srcTableName"] = "vtik_memorando_hist";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto26["m_sql"] = "Texto";
$proto26["m_srcTableName"] = "vtik_memorando_hist";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto28["m_sql"] = "FirmaDigital";
$proto28["m_srcTableName"] = "vtik_memorando_hist";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPapel",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto30["m_sql"] = "TipoPapel";
$proto30["m_srcTableName"] = "vtik_memorando_hist";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto32["m_sql"] = "Estado";
$proto32["m_srcTableName"] = "vtik_memorando_hist";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigitalA",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto34["m_sql"] = "FirmaDigitalA";
$proto34["m_srcTableName"] = "vtik_memorando_hist";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto1",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto36["m_sql"] = "DocumentoAdjunto1";
$proto36["m_srcTableName"] = "vtik_memorando_hist";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto2",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto38["m_sql"] = "DocumentoAdjunto2";
$proto38["m_srcTableName"] = "vtik_memorando_hist";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto3",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto40["m_sql"] = "DocumentoAdjunto3";
$proto40["m_srcTableName"] = "vtik_memorando_hist";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Fecha"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "56"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "tik_sumdaysdate";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "tik_sumdaysdate(Fecha, 56)";
$proto42["m_srcTableName"] = "vtik_memorando_hist";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "FechaExpiracion";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "tik_memorando_pend";
$proto47["m_srcTableName"] = "vtik_memorando_hist";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "NoMemorando";
$proto47["m_columns"][] = "Fecha";
$proto47["m_columns"][] = "De";
$proto47["m_columns"][] = "CodigoDepto";
$proto47["m_columns"][] = "A";
$proto47["m_columns"][] = "ADepartamento";
$proto47["m_columns"][] = "Todos";
$proto47["m_columns"][] = "Descripcion";
$proto47["m_columns"][] = "Texto";
$proto47["m_columns"][] = "FirmaDigital";
$proto47["m_columns"][] = "TipoPapel";
$proto47["m_columns"][] = "Estado";
$proto47["m_columns"][] = "FirmaDigitalA";
$proto47["m_columns"][] = "Usuario";
$proto47["m_columns"][] = "FechaHora";
$proto47["m_columns"][] = "Documento";
$proto47["m_columns"][] = "TipoDocumento";
$proto47["m_columns"][] = "VoBo";
$proto47["m_columns"][] = "RequiereAutorizacion";
$proto47["m_columns"][] = "Autorizador";
$proto47["m_columns"][] = "Categoria";
$proto47["m_columns"][] = "DocumentoAdjunto1";
$proto47["m_columns"][] = "DocumentoAdjunto2";
$proto47["m_columns"][] = "DocumentoAdjunto3";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "tik_memorando_pend";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "vtik_memorando_hist";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_pend",
	"m_srcTableName" => "vtik_memorando_hist"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vtik_memorando_hist";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vtik_memorando_hist = createSqlQuery_vtik_memorando_hist();


	
		;

																

$tdatavtik_memorando_hist[".sqlquery"] = $queryData_vtik_memorando_hist;



include_once(getabspath("include/vtik_memorando_hist_events.php"));
$tableEvents["vtik_memorando_hist"] = new eventclass_vtik_memorando_hist;
$tdatavtik_memorando_hist[".hasEvents"] = true;

?>