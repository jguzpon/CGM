<?php
$tdatatik_memorando = array();
$tdatatik_memorando[".searchableFields"] = array();
$tdatatik_memorando[".ShortName"] = "tik_memorando";
$tdatatik_memorando[".OwnerID"] = "CodigoDepto";
$tdatatik_memorando[".OriginalTable"] = "tik_memorando";


$tdatatik_memorando[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_memorando[".originalPagesByType"] = $tdatatik_memorando[".pagesByType"];
$tdatatik_memorando[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_memorando[".originalPages"] = $tdatatik_memorando[".pages"];
$tdatatik_memorando[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_memorando[".originalDefaultPages"] = $tdatatik_memorando[".defaultPages"];

//	field labels
$fieldLabelstik_memorando = array();
$fieldToolTipstik_memorando = array();
$pageTitlestik_memorando = array();
$placeHolderstik_memorando = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_memorando["Spanish"] = array();
	$fieldToolTipstik_memorando["Spanish"] = array();
	$placeHolderstik_memorando["Spanish"] = array();
	$pageTitlestik_memorando["Spanish"] = array();
	$fieldLabelstik_memorando["Spanish"]["NoMemorando"] = "No. Memorando";
	$fieldToolTipstik_memorando["Spanish"]["NoMemorando"] = "";
	$placeHolderstik_memorando["Spanish"]["NoMemorando"] = "";
	$fieldLabelstik_memorando["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipstik_memorando["Spanish"]["Fecha"] = "";
	$placeHolderstik_memorando["Spanish"]["Fecha"] = "";
	$fieldLabelstik_memorando["Spanish"]["De"] = "De";
	$fieldToolTipstik_memorando["Spanish"]["De"] = "";
	$placeHolderstik_memorando["Spanish"]["De"] = "";
	$fieldLabelstik_memorando["Spanish"]["A"] = "A Usuario(s)";
	$fieldToolTipstik_memorando["Spanish"]["A"] = "";
	$placeHolderstik_memorando["Spanish"]["A"] = "";
	$fieldLabelstik_memorando["Spanish"]["Descripcion"] = "Asunto";
	$fieldToolTipstik_memorando["Spanish"]["Descripcion"] = "";
	$placeHolderstik_memorando["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_memorando["Spanish"]["Texto"] = "Texto";
	$fieldToolTipstik_memorando["Spanish"]["Texto"] = "";
	$placeHolderstik_memorando["Spanish"]["Texto"] = "";
	$fieldLabelstik_memorando["Spanish"]["FirmaDigital"] = "Firma Digital";
	$fieldToolTipstik_memorando["Spanish"]["FirmaDigital"] = "";
	$placeHolderstik_memorando["Spanish"]["FirmaDigital"] = "";
	$fieldLabelstik_memorando["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_memorando["Spanish"]["Estado"] = "";
	$placeHolderstik_memorando["Spanish"]["Estado"] = "";
	$fieldLabelstik_memorando["Spanish"]["TipoPapel"] = "Tipo Papel";
	$fieldToolTipstik_memorando["Spanish"]["TipoPapel"] = "";
	$placeHolderstik_memorando["Spanish"]["TipoPapel"] = "";
	$fieldLabelstik_memorando["Spanish"]["Todos"] = "Todos";
	$fieldToolTipstik_memorando["Spanish"]["Todos"] = "";
	$placeHolderstik_memorando["Spanish"]["Todos"] = "";
	$fieldLabelstik_memorando["Spanish"]["FirmaDigitalA"] = "Firma Digital A";
	$fieldToolTipstik_memorando["Spanish"]["FirmaDigitalA"] = "";
	$placeHolderstik_memorando["Spanish"]["FirmaDigitalA"] = "";
	$fieldLabelstik_memorando["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_memorando["Spanish"]["Usuario"] = "";
	$placeHolderstik_memorando["Spanish"]["Usuario"] = "";
	$fieldLabelstik_memorando["Spanish"]["FechaHora"] = "Fecha Hora";
	$fieldToolTipstik_memorando["Spanish"]["FechaHora"] = "";
	$placeHolderstik_memorando["Spanish"]["FechaHora"] = "";
	$fieldLabelstik_memorando["Spanish"]["Documento"] = "Documento";
	$fieldToolTipstik_memorando["Spanish"]["Documento"] = "";
	$placeHolderstik_memorando["Spanish"]["Documento"] = "";
	$fieldLabelstik_memorando["Spanish"]["TipoDocumento"] = "Tipo Documento";
	$fieldToolTipstik_memorando["Spanish"]["TipoDocumento"] = "";
	$placeHolderstik_memorando["Spanish"]["TipoDocumento"] = "";
	$fieldLabelstik_memorando["Spanish"]["VoBo"] = "Vo Bo";
	$fieldToolTipstik_memorando["Spanish"]["VoBo"] = "";
	$placeHolderstik_memorando["Spanish"]["VoBo"] = "";
	$fieldLabelstik_memorando["Spanish"]["RequiereAutorizacion"] = "Requiere Autorizacion";
	$fieldToolTipstik_memorando["Spanish"]["RequiereAutorizacion"] = "";
	$placeHolderstik_memorando["Spanish"]["RequiereAutorizacion"] = "";
	$fieldLabelstik_memorando["Spanish"]["Autorizador"] = "Autorizador";
	$fieldToolTipstik_memorando["Spanish"]["Autorizador"] = "";
	$placeHolderstik_memorando["Spanish"]["Autorizador"] = "";
	$fieldLabelstik_memorando["Spanish"]["CodigoDepto"] = "De Departamento";
	$fieldToolTipstik_memorando["Spanish"]["CodigoDepto"] = "";
	$placeHolderstik_memorando["Spanish"]["CodigoDepto"] = "";
	$fieldLabelstik_memorando["Spanish"]["Categoria"] = "Categoria";
	$fieldToolTipstik_memorando["Spanish"]["Categoria"] = "";
	$placeHolderstik_memorando["Spanish"]["Categoria"] = "";
	$fieldLabelstik_memorando["Spanish"]["ADepartamento"] = "A Departamento(s)";
	$fieldToolTipstik_memorando["Spanish"]["ADepartamento"] = "";
	$placeHolderstik_memorando["Spanish"]["ADepartamento"] = "";
	$fieldLabelstik_memorando["Spanish"]["AutorizadoPor"] = "Autorizado Por";
	$fieldToolTipstik_memorando["Spanish"]["AutorizadoPor"] = "";
	$placeHolderstik_memorando["Spanish"]["AutorizadoPor"] = "";
	$fieldLabelstik_memorando["Spanish"]["DocumentoAdjunto1"] = "Documento Adjunto 1 (Opcional)";
	$fieldToolTipstik_memorando["Spanish"]["DocumentoAdjunto1"] = "";
	$placeHolderstik_memorando["Spanish"]["DocumentoAdjunto1"] = "";
	$fieldLabelstik_memorando["Spanish"]["DocumentoAdjunto2"] = "Documento Adjunto 2 (Opcional)";
	$fieldToolTipstik_memorando["Spanish"]["DocumentoAdjunto2"] = "";
	$placeHolderstik_memorando["Spanish"]["DocumentoAdjunto2"] = "";
	$fieldLabelstik_memorando["Spanish"]["DocumentoAdjunto3"] = "Documento Adjunto 3 (Opcional)";
	$fieldToolTipstik_memorando["Spanish"]["DocumentoAdjunto3"] = "";
	$placeHolderstik_memorando["Spanish"]["DocumentoAdjunto3"] = "";
	if (count($fieldToolTipstik_memorando["Spanish"]))
		$tdatatik_memorando[".isUseToolTips"] = true;
}


	$tdatatik_memorando[".NCSearch"] = true;



$tdatatik_memorando[".shortTableName"] = "tik_memorando";
$tdatatik_memorando[".nSecOptions"] = 1;

$tdatatik_memorando[".mainTableOwnerID"] = "CodigoDepto";
$tdatatik_memorando[".entityType"] = 0;
$tdatatik_memorando[".connId"] = "mpc_at_localhost";


$tdatatik_memorando[".strOriginalTableName"] = "tik_memorando";

	



$tdatatik_memorando[".showAddInPopup"] = false;

$tdatatik_memorando[".showEditInPopup"] = false;

$tdatatik_memorando[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_memorando[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_memorando[".listAjax"] = false;
//	temporary
//$tdatatik_memorando[".listAjax"] = false;

	$tdatatik_memorando[".audit"] = true;

	$tdatatik_memorando[".locking"] = false;


$pages = $tdatatik_memorando[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_memorando[".edit"] = true;
	$tdatatik_memorando[".afterEditAction"] = 0;
	$tdatatik_memorando[".closePopupAfterEdit"] = 1;
	$tdatatik_memorando[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_memorando[".add"] = true;
$tdatatik_memorando[".afterAddAction"] = 0;
$tdatatik_memorando[".closePopupAfterAdd"] = 1;
$tdatatik_memorando[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_memorando[".list"] = true;
}



$tdatatik_memorando[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_memorando[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_memorando[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_memorando[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_memorando[".printFriendly"] = true;
}



$tdatatik_memorando[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_memorando[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_memorando[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_memorando[".isUseAjaxSuggest"] = true;

$tdatatik_memorando[".rowHighlite"] = true;



																		

$tdatatik_memorando[".ajaxCodeSnippetAdded"] = false;

$tdatatik_memorando[".buttonsAdded"] = false;

$tdatatik_memorando[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_memorando[".isUseTimeForSearch"] = false;


$tdatatik_memorando[".badgeColor"] = "E67349";


$tdatatik_memorando[".allSearchFields"] = array();
$tdatatik_memorando[".filterFields"] = array();
$tdatatik_memorando[".requiredSearchFields"] = array();

$tdatatik_memorando[".googleLikeFields"] = array();
$tdatatik_memorando[".googleLikeFields"][] = "NoMemorando";
$tdatatik_memorando[".googleLikeFields"][] = "Fecha";
$tdatatik_memorando[".googleLikeFields"][] = "De";
$tdatatik_memorando[".googleLikeFields"][] = "A";
$tdatatik_memorando[".googleLikeFields"][] = "ADepartamento";
$tdatatik_memorando[".googleLikeFields"][] = "Todos";
$tdatatik_memorando[".googleLikeFields"][] = "Descripcion";
$tdatatik_memorando[".googleLikeFields"][] = "Texto";
$tdatatik_memorando[".googleLikeFields"][] = "FirmaDigital";
$tdatatik_memorando[".googleLikeFields"][] = "Estado";
$tdatatik_memorando[".googleLikeFields"][] = "TipoPapel";
$tdatatik_memorando[".googleLikeFields"][] = "FirmaDigitalA";
$tdatatik_memorando[".googleLikeFields"][] = "Usuario";
$tdatatik_memorando[".googleLikeFields"][] = "FechaHora";
$tdatatik_memorando[".googleLikeFields"][] = "Documento";
$tdatatik_memorando[".googleLikeFields"][] = "TipoDocumento";
$tdatatik_memorando[".googleLikeFields"][] = "VoBo";
$tdatatik_memorando[".googleLikeFields"][] = "RequiereAutorizacion";
$tdatatik_memorando[".googleLikeFields"][] = "Autorizador";
$tdatatik_memorando[".googleLikeFields"][] = "CodigoDepto";
$tdatatik_memorando[".googleLikeFields"][] = "Categoria";
$tdatatik_memorando[".googleLikeFields"][] = "AutorizadoPor";
$tdatatik_memorando[".googleLikeFields"][] = "DocumentoAdjunto1";
$tdatatik_memorando[".googleLikeFields"][] = "DocumentoAdjunto2";
$tdatatik_memorando[".googleLikeFields"][] = "DocumentoAdjunto3";



$tdatatik_memorando[".tableType"] = "list";

$tdatatik_memorando[".printerPageOrientation"] = 0;
$tdatatik_memorando[".nPrinterPageScale"] = 100;

$tdatatik_memorando[".nPrinterSplitRecords"] = 40;

$tdatatik_memorando[".geocodingEnabled"] = false;










$tdatatik_memorando[".pageSize"] = 20;

$tdatatik_memorando[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY NoMemorando DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_memorando[".strOrderBy"] = $tstrOrderBy;

$tdatatik_memorando[".orderindexes"] = array();
	$tdatatik_memorando[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "NoMemorando");



$tdatatik_memorando[".sqlHead"] = "SELECT NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  Estado,  TipoPapel,  FirmaDigitalA,  Usuario,  FechaHora,  Documento,  TipoDocumento,  VoBo,  RequiereAutorizacion,  Autorizador,  CodigoDepto,  Categoria,  AutorizadoPor,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3";
$tdatatik_memorando[".sqlFrom"] = "FROM tik_memorando";
$tdatatik_memorando[".sqlWhereExpr"] = "";
$tdatatik_memorando[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_memorando[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_memorando[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_memorando[".highlightSearchResults"] = true;

$tableKeystik_memorando = array();
$tableKeystik_memorando[] = "NoMemorando";
$tdatatik_memorando[".Keys"] = $tableKeystik_memorando;


$tdatatik_memorando[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","NoMemorando");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatik_memorando["NoMemorando"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "NoMemorando";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Fecha");
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


	$tdatatik_memorando["Fecha"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Fecha";
//	De
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "De";
	$fdata["GoodName"] = "De";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","De");
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
	$edata["LookupTable"] = "tik_autorizadores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"CodigoDepto", 'lookupF'=>"CodigoDepto");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";

	

	
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


	$tdatatik_memorando["De"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "De";
//	A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "A";
	$fdata["GoodName"] = "A";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","A");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";

	

	
	$edata["LookupOrderBy"] = "Usuario";

	
	
	
	

	
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


	$tdatatik_memorando["A"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "A";
//	ADepartamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ADepartamento";
	$fdata["GoodName"] = "ADepartamento";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","ADepartamento");
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


	$tdatatik_memorando["ADepartamento"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "ADepartamento";
//	Todos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Todos";
	$fdata["GoodName"] = "Todos";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Todos");
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


	$tdatatik_memorando["Todos"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Todos";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Descripcion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatik_memorando["Descripcion"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Descripcion";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Texto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Texto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Texto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatik_memorando["Texto"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Texto";
//	FirmaDigital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FirmaDigital";
	$fdata["GoodName"] = "FirmaDigital";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","FirmaDigital");
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


	$tdatatik_memorando["FirmaDigital"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "FirmaDigital";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Estado");
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


	$tdatatik_memorando["Estado"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Estado";
//	TipoPapel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TipoPapel";
	$fdata["GoodName"] = "TipoPapel";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","TipoPapel");
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Carta";
	$edata["LookupValues"][] = "Oficio";
	$edata["LookupValues"][] = "Legal";

	
	
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


	$tdatatik_memorando["TipoPapel"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "TipoPapel";
//	FirmaDigitalA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FirmaDigitalA";
	$fdata["GoodName"] = "FirmaDigitalA";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","FirmaDigitalA");
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


	$tdatatik_memorando["FirmaDigitalA"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "FirmaDigitalA";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Usuario");
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


	$tdatatik_memorando["Usuario"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Usuario";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","FechaHora");
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


	$tdatatik_memorando["FechaHora"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "FechaHora";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Documento");
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


	$tdatatik_memorando["Documento"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Documento";
//	TipoDocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TipoDocumento";
	$fdata["GoodName"] = "TipoDocumento";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","TipoDocumento");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tik_tipomemo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TipoMemorando";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "TipoMemorando";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatatik_memorando["TipoDocumento"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "TipoDocumento";
//	VoBo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "VoBo";
	$fdata["GoodName"] = "VoBo";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","VoBo");
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


	$tdatatik_memorando["VoBo"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "VoBo";
//	RequiereAutorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RequiereAutorizacion";
	$fdata["GoodName"] = "RequiereAutorizacion";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","RequiereAutorizacion");
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


	$tdatatik_memorando["RequiereAutorizacion"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "RequiereAutorizacion";
//	Autorizador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Autorizador";
	$fdata["GoodName"] = "Autorizador";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Autorizador");
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
	$edata["LookupTable"] = "tik_autorizadores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
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


	$tdatatik_memorando["Autorizador"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Autorizador";
//	CodigoDepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CodigoDepto";
	$fdata["GoodName"] = "CodigoDepto";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","CodigoDepto");
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


	$tdatatik_memorando["CodigoDepto"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "CodigoDepto";
//	Categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Categoria";
	$fdata["GoodName"] = "Categoria";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","Categoria");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Categoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Categoria";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Publico";
	$edata["LookupValues"][] = "Privado";

	
	
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


	$tdatatik_memorando["Categoria"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "Categoria";
//	AutorizadoPor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AutorizadoPor";
	$fdata["GoodName"] = "AutorizadoPor";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","AutorizadoPor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AutorizadoPor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutorizadoPor";

	
	
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


	$tdatatik_memorando["AutorizadoPor"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "AutorizadoPor";
//	DocumentoAdjunto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DocumentoAdjunto1";
	$fdata["GoodName"] = "DocumentoAdjunto1";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","DocumentoAdjunto1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto1";

		$fdata["DeleteAssociatedFile"] = true;

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


	$tdatatik_memorando["DocumentoAdjunto1"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "DocumentoAdjunto1";
//	DocumentoAdjunto2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DocumentoAdjunto2";
	$fdata["GoodName"] = "DocumentoAdjunto2";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","DocumentoAdjunto2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto2";

		$fdata["DeleteAssociatedFile"] = true;

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


	$tdatatik_memorando["DocumentoAdjunto2"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "DocumentoAdjunto2";
//	DocumentoAdjunto3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DocumentoAdjunto3";
	$fdata["GoodName"] = "DocumentoAdjunto3";
	$fdata["ownerTable"] = "tik_memorando";
	$fdata["Label"] = GetFieldLabel("tik_memorando","DocumentoAdjunto3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DocumentoAdjunto3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocumentoAdjunto3";

		$fdata["DeleteAssociatedFile"] = true;

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


	$tdatatik_memorando["DocumentoAdjunto3"] = $fdata;
		$tdatatik_memorando[".searchableFields"][] = "DocumentoAdjunto3";


$tables_data["tik_memorando"]=&$tdatatik_memorando;
$field_labels["tik_memorando"] = &$fieldLabelstik_memorando;
$fieldToolTips["tik_memorando"] = &$fieldToolTipstik_memorando;
$placeHolders["tik_memorando"] = &$placeHolderstik_memorando;
$page_titles["tik_memorando"] = &$pageTitlestik_memorando;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_memorando"] = array();
//	tik_memorando_l
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_memorando_l";
		$detailsParam["dOriginalTable"] = "tik_memorando_l";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_memorando_l";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_memorando_l");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_memorando"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_memorando"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_memorando"][$dIndex]["masterKeys"][]="NoMemorando";

				$detailsTablesData["tik_memorando"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_memorando"][$dIndex]["detailKeys"][]="NoMemorando";

// tables which are master tables for current table (detail)
$masterTablesData["tik_memorando"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_memorando()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando,  Fecha,  De,  A,  ADepartamento,  Todos,  Descripcion,  Texto,  FirmaDigital,  Estado,  TipoPapel,  FirmaDigitalA,  Usuario,  FechaHora,  Documento,  TipoDocumento,  VoBo,  RequiereAutorizacion,  Autorizador,  CodigoDepto,  Categoria,  AutorizadoPor,  DocumentoAdjunto1,  DocumentoAdjunto2,  DocumentoAdjunto3";
$proto0["m_strFrom"] = "FROM tik_memorando";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY NoMemorando DESC";
	
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
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto6["m_sql"] = "NoMemorando";
$proto6["m_srcTableName"] = "tik_memorando";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "tik_memorando";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "De",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto10["m_sql"] = "De";
$proto10["m_srcTableName"] = "tik_memorando";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "A",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto12["m_sql"] = "A";
$proto12["m_srcTableName"] = "tik_memorando";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ADepartamento",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto14["m_sql"] = "ADepartamento";
$proto14["m_srcTableName"] = "tik_memorando";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Todos",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto16["m_sql"] = "Todos";
$proto16["m_srcTableName"] = "tik_memorando";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto18["m_sql"] = "Descripcion";
$proto18["m_srcTableName"] = "tik_memorando";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto20["m_sql"] = "Texto";
$proto20["m_srcTableName"] = "tik_memorando";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigital",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto22["m_sql"] = "FirmaDigital";
$proto22["m_srcTableName"] = "tik_memorando";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto24["m_sql"] = "Estado";
$proto24["m_srcTableName"] = "tik_memorando";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPapel",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto26["m_sql"] = "TipoPapel";
$proto26["m_srcTableName"] = "tik_memorando";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FirmaDigitalA",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto28["m_sql"] = "FirmaDigitalA";
$proto28["m_srcTableName"] = "tik_memorando";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto30["m_sql"] = "Usuario";
$proto30["m_srcTableName"] = "tik_memorando";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto32["m_sql"] = "FechaHora";
$proto32["m_srcTableName"] = "tik_memorando";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto34["m_sql"] = "Documento";
$proto34["m_srcTableName"] = "tik_memorando";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoDocumento",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto36["m_sql"] = "TipoDocumento";
$proto36["m_srcTableName"] = "tik_memorando";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "VoBo",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto38["m_sql"] = "VoBo";
$proto38["m_srcTableName"] = "tik_memorando";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RequiereAutorizacion",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto40["m_sql"] = "RequiereAutorizacion";
$proto40["m_srcTableName"] = "tik_memorando";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Autorizador",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto42["m_sql"] = "Autorizador";
$proto42["m_srcTableName"] = "tik_memorando";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto44["m_sql"] = "CodigoDepto";
$proto44["m_srcTableName"] = "tik_memorando";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Categoria",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto46["m_sql"] = "Categoria";
$proto46["m_srcTableName"] = "tik_memorando";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AutorizadoPor",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto48["m_sql"] = "AutorizadoPor";
$proto48["m_srcTableName"] = "tik_memorando";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto1",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto50["m_sql"] = "DocumentoAdjunto1";
$proto50["m_srcTableName"] = "tik_memorando";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto2",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto52["m_sql"] = "DocumentoAdjunto2";
$proto52["m_srcTableName"] = "tik_memorando";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DocumentoAdjunto3",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto54["m_sql"] = "DocumentoAdjunto3";
$proto54["m_srcTableName"] = "tik_memorando";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "tik_memorando";
$proto57["m_srcTableName"] = "tik_memorando";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "NoMemorando";
$proto57["m_columns"][] = "Fecha";
$proto57["m_columns"][] = "De";
$proto57["m_columns"][] = "CodigoDepto";
$proto57["m_columns"][] = "A";
$proto57["m_columns"][] = "ADepartamento";
$proto57["m_columns"][] = "Todos";
$proto57["m_columns"][] = "Descripcion";
$proto57["m_columns"][] = "Texto";
$proto57["m_columns"][] = "FirmaDigital";
$proto57["m_columns"][] = "TipoPapel";
$proto57["m_columns"][] = "Estado";
$proto57["m_columns"][] = "FirmaDigitalA";
$proto57["m_columns"][] = "Usuario";
$proto57["m_columns"][] = "FechaHora";
$proto57["m_columns"][] = "Documento";
$proto57["m_columns"][] = "TipoDocumento";
$proto57["m_columns"][] = "VoBo";
$proto57["m_columns"][] = "RequiereAutorizacion";
$proto57["m_columns"][] = "Autorizador";
$proto57["m_columns"][] = "Categoria";
$proto57["m_columns"][] = "AutorizadoPor";
$proto57["m_columns"][] = "DocumentoAdjunto1";
$proto57["m_columns"][] = "DocumentoAdjunto2";
$proto57["m_columns"][] = "DocumentoAdjunto3";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "tik_memorando";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "tik_memorando";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando",
	"m_srcTableName" => "tik_memorando"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 0;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_memorando";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_memorando = createSqlQuery_tik_memorando();


	
		;

																									

$tdatatik_memorando[".sqlquery"] = $queryData_tik_memorando;



include_once(getabspath("include/tik_memorando_events.php"));
$tableEvents["tik_memorando"] = new eventclass_tik_memorando;
$tdatatik_memorando[".hasEvents"] = true;

?>