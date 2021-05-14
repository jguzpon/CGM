<?php
$tdatavtik_interno = array();
$tdatavtik_interno[".searchableFields"] = array();
$tdatavtik_interno[".ShortName"] = "vtik_interno";
$tdatavtik_interno[".OwnerID"] = "DepartamentoSolicitar";
$tdatavtik_interno[".OriginalTable"] = "tik_interno";


$tdatavtik_interno[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavtik_interno[".originalPagesByType"] = $tdatavtik_interno[".pagesByType"];
$tdatavtik_interno[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavtik_interno[".originalPages"] = $tdatavtik_interno[".pages"];
$tdatavtik_interno[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavtik_interno[".originalDefaultPages"] = $tdatavtik_interno[".defaultPages"];

//	field labels
$fieldLabelsvtik_interno = array();
$fieldToolTipsvtik_interno = array();
$pageTitlesvtik_interno = array();
$placeHoldersvtik_interno = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvtik_interno["Spanish"] = array();
	$fieldToolTipsvtik_interno["Spanish"] = array();
	$placeHoldersvtik_interno["Spanish"] = array();
	$pageTitlesvtik_interno["Spanish"] = array();
	$fieldLabelsvtik_interno["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipsvtik_interno["Spanish"]["Solicitud"] = "";
	$placeHoldersvtik_interno["Spanish"]["Solicitud"] = "";
	$fieldLabelsvtik_interno["Spanish"]["DepartamentoSolicitante"] = "Departamento Solicitante";
	$fieldToolTipsvtik_interno["Spanish"]["DepartamentoSolicitante"] = "";
	$placeHoldersvtik_interno["Spanish"]["DepartamentoSolicitante"] = "";
	$fieldLabelsvtik_interno["Spanish"]["UsuarioSolicitante"] = "Usuario Solicitante";
	$fieldToolTipsvtik_interno["Spanish"]["UsuarioSolicitante"] = "";
	$placeHoldersvtik_interno["Spanish"]["UsuarioSolicitante"] = "";
	$fieldLabelsvtik_interno["Spanish"]["DepartamentoSolicitar"] = "Departamento a Solicitar";
	$fieldToolTipsvtik_interno["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHoldersvtik_interno["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelsvtik_interno["Spanish"]["Asunto"] = "Asunto";
	$fieldToolTipsvtik_interno["Spanish"]["Asunto"] = "";
	$placeHoldersvtik_interno["Spanish"]["Asunto"] = "";
	$fieldLabelsvtik_interno["Spanish"]["DescripcionAmplia"] = "Descripcion Amplia";
	$fieldToolTipsvtik_interno["Spanish"]["DescripcionAmplia"] = "";
	$placeHoldersvtik_interno["Spanish"]["DescripcionAmplia"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipsvtik_interno["Spanish"]["FechaSolicitud"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipsvtik_interno["Spanish"]["FechaInicio"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaInicio"] = "";
	$fieldLabelsvtik_interno["Spanish"]["UsuarioInicio"] = "Usuario Inicio";
	$fieldToolTipsvtik_interno["Spanish"]["UsuarioInicio"] = "";
	$placeHoldersvtik_interno["Spanish"]["UsuarioInicio"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipsvtik_interno["Spanish"]["FechaFinal"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaFinal"] = "";
	$fieldLabelsvtik_interno["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsvtik_interno["Spanish"]["Observaciones"] = "";
	$placeHoldersvtik_interno["Spanish"]["Observaciones"] = "";
	$fieldLabelsvtik_interno["Spanish"]["Evaluacion"] = "Evaluacion";
	$fieldToolTipsvtik_interno["Spanish"]["Evaluacion"] = "";
	$placeHoldersvtik_interno["Spanish"]["Evaluacion"] = "";
	$fieldLabelsvtik_interno["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsvtik_interno["Spanish"]["Estado"] = "";
	$placeHoldersvtik_interno["Spanish"]["Estado"] = "";
	$fieldLabelsvtik_interno["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipsvtik_interno["Spanish"]["TipoSolicitud"] = "";
	$placeHoldersvtik_interno["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelsvtik_interno["Spanish"]["Documento"] = "Documento";
	$fieldToolTipsvtik_interno["Spanish"]["Documento"] = "";
	$placeHoldersvtik_interno["Spanish"]["Documento"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaAtencion"] = "Fecha/Hora de Atencion";
	$fieldToolTipsvtik_interno["Spanish"]["FechaAtencion"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaAtencion"] = "";
	$fieldLabelsvtik_interno["Spanish"]["ProcesoAtencion"] = "Proceso Atencion";
	$fieldToolTipsvtik_interno["Spanish"]["ProcesoAtencion"] = "";
	$placeHoldersvtik_interno["Spanish"]["ProcesoAtencion"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaMaxima"] = "Fecha Maxima";
	$fieldToolTipsvtik_interno["Spanish"]["FechaMaxima"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaMaxima"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaExpiracion"] = "Fecha/Hora Vencimiento";
	$fieldToolTipsvtik_interno["Spanish"]["FechaExpiracion"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaExpiracion"] = "";
	$fieldLabelsvtik_interno["Spanish"]["FechaAtencionFinal"] = "Fecha Atencion Final";
	$fieldToolTipsvtik_interno["Spanish"]["FechaAtencionFinal"] = "";
	$placeHoldersvtik_interno["Spanish"]["FechaAtencionFinal"] = "";
	if (count($fieldToolTipsvtik_interno["Spanish"]))
		$tdatavtik_interno[".isUseToolTips"] = true;
}


	$tdatavtik_interno[".NCSearch"] = true;



$tdatavtik_interno[".shortTableName"] = "vtik_interno";
$tdatavtik_interno[".nSecOptions"] = 1;

$tdatavtik_interno[".mainTableOwnerID"] = "DepartamentoSolicitar";
$tdatavtik_interno[".entityType"] = 1;
$tdatavtik_interno[".connId"] = "mpc_at_localhost";


$tdatavtik_interno[".strOriginalTableName"] = "tik_interno";

	



$tdatavtik_interno[".showAddInPopup"] = false;

$tdatavtik_interno[".showEditInPopup"] = false;

$tdatavtik_interno[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavtik_interno[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavtik_interno[".listAjax"] = false;
//	temporary
//$tdatavtik_interno[".listAjax"] = false;

	$tdatavtik_interno[".audit"] = true;

	$tdatavtik_interno[".locking"] = false;


$pages = $tdatavtik_interno[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavtik_interno[".edit"] = true;
	$tdatavtik_interno[".afterEditAction"] = 0;
	$tdatavtik_interno[".closePopupAfterEdit"] = 1;
	$tdatavtik_interno[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavtik_interno[".add"] = true;
$tdatavtik_interno[".afterAddAction"] = 0;
$tdatavtik_interno[".closePopupAfterAdd"] = 1;
$tdatavtik_interno[".afterAddActionDetTable"] = "tik_documento";
}

if( $pages[PAGE_LIST] ) {
	$tdatavtik_interno[".list"] = true;
}



$tdatavtik_interno[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavtik_interno[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavtik_interno[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavtik_interno[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavtik_interno[".printFriendly"] = true;
}



$tdatavtik_interno[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavtik_interno[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavtik_interno[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavtik_interno[".isUseAjaxSuggest"] = true;

$tdatavtik_interno[".rowHighlite"] = true;



																								

$tdatavtik_interno[".ajaxCodeSnippetAdded"] = false;

$tdatavtik_interno[".buttonsAdded"] = false;

$tdatavtik_interno[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavtik_interno[".isUseTimeForSearch"] = false;


$tdatavtik_interno[".badgeColor"] = "778899";


$tdatavtik_interno[".allSearchFields"] = array();
$tdatavtik_interno[".filterFields"] = array();
$tdatavtik_interno[".requiredSearchFields"] = array();

$tdatavtik_interno[".googleLikeFields"] = array();
$tdatavtik_interno[".googleLikeFields"][] = "Solicitud";
$tdatavtik_interno[".googleLikeFields"][] = "Documento";
$tdatavtik_interno[".googleLikeFields"][] = "TipoSolicitud";
$tdatavtik_interno[".googleLikeFields"][] = "DepartamentoSolicitante";
$tdatavtik_interno[".googleLikeFields"][] = "UsuarioSolicitante";
$tdatavtik_interno[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatavtik_interno[".googleLikeFields"][] = "Asunto";
$tdatavtik_interno[".googleLikeFields"][] = "DescripcionAmplia";
$tdatavtik_interno[".googleLikeFields"][] = "FechaSolicitud";
$tdatavtik_interno[".googleLikeFields"][] = "FechaInicio";
$tdatavtik_interno[".googleLikeFields"][] = "UsuarioInicio";
$tdatavtik_interno[".googleLikeFields"][] = "FechaFinal";
$tdatavtik_interno[".googleLikeFields"][] = "Observaciones";
$tdatavtik_interno[".googleLikeFields"][] = "Evaluacion";
$tdatavtik_interno[".googleLikeFields"][] = "Estado";
$tdatavtik_interno[".googleLikeFields"][] = "FechaAtencion";
$tdatavtik_interno[".googleLikeFields"][] = "ProcesoAtencion";
$tdatavtik_interno[".googleLikeFields"][] = "FechaExpiracion";
$tdatavtik_interno[".googleLikeFields"][] = "FechaMaxima";
$tdatavtik_interno[".googleLikeFields"][] = "FechaAtencionFinal";



$tdatavtik_interno[".tableType"] = "list";

$tdatavtik_interno[".printerPageOrientation"] = 0;
$tdatavtik_interno[".nPrinterPageScale"] = 100;

$tdatavtik_interno[".nPrinterSplitRecords"] = 40;

$tdatavtik_interno[".geocodingEnabled"] = false;










$tdatavtik_interno[".pageSize"] = 20;

$tdatavtik_interno[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Solicitud DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavtik_interno[".strOrderBy"] = $tstrOrderBy;

$tdatavtik_interno[".orderindexes"] = array();
	$tdatavtik_interno[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "Solicitud");



$tdatavtik_interno[".sqlHead"] = "SELECT Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  FechaAtencion,  ProcesoAtencion,  tik_sumdaysdate(FechaSolicitud, 3) AS FechaExpiracion,  tik_getm1dayfromdate(FechaSolicitud, 3) AS FechaMaxima,  FechaAtencionFinal";
$tdatavtik_interno[".sqlFrom"] = "FROM tik_interno";
$tdatavtik_interno[".sqlWhereExpr"] = "(Estado <>\"Evaluado\")";
$tdatavtik_interno[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavtik_interno[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavtik_interno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavtik_interno[".arrGroupsPerPage"] = $arrGPP;

$tdatavtik_interno[".highlightSearchResults"] = true;

$tableKeysvtik_interno = array();
$tableKeysvtik_interno[] = "Solicitud";
$tdatavtik_interno[".Keys"] = $tableKeysvtik_interno;


$tdatavtik_interno[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Solicitud");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Solicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Solicitud";

	
	
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


	$tdatavtik_interno["Solicitud"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Solicitud";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Documento");
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


	$tdatavtik_interno["Documento"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Documento";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","TipoSolicitud");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "TipoSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoSolicitud";

	
	
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
	$edata["LookupTable"] = "tik_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "TipoSolicitud";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "trim(Descripcion)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "TipoSolicitud";

	
	
	
	

	
	
	
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


	$tdatavtik_interno["TipoSolicitud"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "TipoSolicitud";
//	DepartamentoSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoSolicitante";
	$fdata["GoodName"] = "DepartamentoSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","DepartamentoSolicitante");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "DepartamentoSolicitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartamentoSolicitante";

	
	
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

	

	
	$edata["LookupOrderBy"] = "Descripcion";

	
	
	
	

	
	
	
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


	$tdatavtik_interno["DepartamentoSolicitante"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "DepartamentoSolicitante";
//	UsuarioSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UsuarioSolicitante";
	$fdata["GoodName"] = "UsuarioSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","UsuarioSolicitante");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UsuarioSolicitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioSolicitante";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DepartamentoSolicitar", 'lookupF'=>"CodigoDepto");
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


	$tdatavtik_interno["UsuarioSolicitante"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "UsuarioSolicitante";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","DepartamentoSolicitar");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "DepartamentoSolicitar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartamentoSolicitar";

	
	
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

	

	
	$edata["LookupOrderBy"] = "Descripcion";

	
	
	
	

	
	
	
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


	$tdatavtik_interno["DepartamentoSolicitar"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "DepartamentoSolicitar";
//	Asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Asunto";
	$fdata["GoodName"] = "Asunto";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Asunto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Asunto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Asunto";

	
	
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


	$tdatavtik_interno["Asunto"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Asunto";
//	DescripcionAmplia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DescripcionAmplia";
	$fdata["GoodName"] = "DescripcionAmplia";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","DescripcionAmplia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DescripcionAmplia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DescripcionAmplia";

	
	
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


	$tdatavtik_interno["DescripcionAmplia"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "DescripcionAmplia";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaSolicitud");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSolicitud";

	
	
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


	$tdatavtik_interno["FechaSolicitud"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaSolicitud";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaInicio");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaInicio";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatavtik_interno["FechaInicio"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaInicio";
//	UsuarioInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UsuarioInicio";
	$fdata["GoodName"] = "UsuarioInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","UsuarioInicio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UsuarioInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioInicio";

	
	
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


	$tdatavtik_interno["UsuarioInicio"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "UsuarioInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaFinal");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaFinal";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatavtik_interno["FechaFinal"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaFinal";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Observaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 200;

	
	
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


	$tdatavtik_interno["Observaciones"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Observaciones";
//	Evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Evaluacion";
	$fdata["GoodName"] = "Evaluacion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Evaluacion");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Evaluacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Evaluacion";

	
	
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
	$edata["LookupTable"] = "tik_satisfaccion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "Nivel";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(Nivel,' - ',Descripcion)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "Nivel";

	
	
	
	

	
	
	
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


	$tdatavtik_interno["Evaluacion"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Evaluacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","Estado");
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


	$tdatavtik_interno["Estado"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "Estado";
//	FechaAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FechaAtencion";
	$fdata["GoodName"] = "FechaAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaAtencion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaAtencion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaAtencion";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatavtik_interno["FechaAtencion"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaAtencion";
//	ProcesoAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ProcesoAtencion";
	$fdata["GoodName"] = "ProcesoAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","ProcesoAtencion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ProcesoAtencion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProcesoAtencion";

	
	
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


	$tdatavtik_interno["ProcesoAtencion"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "ProcesoAtencion";
//	FechaExpiracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "FechaExpiracion";
	$fdata["GoodName"] = "FechaExpiracion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaExpiracion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaExpiracion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_sumdaysdate(FechaSolicitud, 3)";

	
	
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


	$tdatavtik_interno["FechaExpiracion"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaExpiracion";
//	FechaMaxima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "FechaMaxima";
	$fdata["GoodName"] = "FechaMaxima";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaMaxima");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaMaxima";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_getm1dayfromdate(FechaSolicitud, 3)";

	
	
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


	$tdatavtik_interno["FechaMaxima"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaMaxima";
//	FechaAtencionFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "FechaAtencionFinal";
	$fdata["GoodName"] = "FechaAtencionFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("vtik_interno","FechaAtencionFinal");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaAtencionFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaAtencionFinal";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatavtik_interno["FechaAtencionFinal"] = $fdata;
		$tdatavtik_interno[".searchableFields"][] = "FechaAtencionFinal";


$tables_data["vtik_interno"]=&$tdatavtik_interno;
$field_labels["vtik_interno"] = &$fieldLabelsvtik_interno;
$fieldToolTips["vtik_interno"] = &$fieldToolTipsvtik_interno;
$placeHolders["vtik_interno"] = &$placeHoldersvtik_interno;
$page_titles["vtik_interno"] = &$pageTitlesvtik_interno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vtik_interno"] = array();
//	tik_restulado
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_restulado";
		$detailsParam["dOriginalTable"] = "tik_restulado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_restulado";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_restulado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["vtik_interno"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vtik_interno"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vtik_interno"][$dIndex]["masterKeys"][]="Solicitud";

				$detailsTablesData["vtik_interno"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vtik_interno"][$dIndex]["detailKeys"][]="Solicitud";

// tables which are master tables for current table (detail)
$masterTablesData["vtik_interno"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vtik_interno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  FechaAtencion,  ProcesoAtencion,  tik_sumdaysdate(FechaSolicitud, 3) AS FechaExpiracion,  tik_getm1dayfromdate(FechaSolicitud, 3) AS FechaMaxima,  FechaAtencionFinal";
$proto0["m_strFrom"] = "FROM tik_interno";
$proto0["m_strWhere"] = "(Estado <>\"Evaluado\")";
$proto0["m_strOrderBy"] = "ORDER BY Solicitud DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Estado <>\"Evaluado\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<>\"Evaluado\"";
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
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto6["m_sql"] = "Solicitud";
$proto6["m_srcTableName"] = "vtik_interno";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto8["m_sql"] = "Documento";
$proto8["m_srcTableName"] = "vtik_interno";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto10["m_sql"] = "TipoSolicitud";
$proto10["m_srcTableName"] = "vtik_interno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto12["m_sql"] = "DepartamentoSolicitante";
$proto12["m_srcTableName"] = "vtik_interno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto14["m_sql"] = "UsuarioSolicitante";
$proto14["m_srcTableName"] = "vtik_interno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto16["m_sql"] = "DepartamentoSolicitar";
$proto16["m_srcTableName"] = "vtik_interno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Asunto",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto18["m_sql"] = "Asunto";
$proto18["m_srcTableName"] = "vtik_interno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DescripcionAmplia",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto20["m_sql"] = "DescripcionAmplia";
$proto20["m_srcTableName"] = "vtik_interno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto22["m_sql"] = "FechaSolicitud";
$proto22["m_srcTableName"] = "vtik_interno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto24["m_sql"] = "FechaInicio";
$proto24["m_srcTableName"] = "vtik_interno";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto26["m_sql"] = "UsuarioInicio";
$proto26["m_srcTableName"] = "vtik_interno";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto28["m_sql"] = "FechaFinal";
$proto28["m_srcTableName"] = "vtik_interno";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto30["m_sql"] = "Observaciones";
$proto30["m_srcTableName"] = "vtik_interno";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto32["m_sql"] = "Evaluacion";
$proto32["m_srcTableName"] = "vtik_interno";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto34["m_sql"] = "Estado";
$proto34["m_srcTableName"] = "vtik_interno";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto36["m_sql"] = "FechaAtencion";
$proto36["m_srcTableName"] = "vtik_interno";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto38["m_sql"] = "ProcesoAtencion";
$proto38["m_srcTableName"] = "vtik_interno";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "FechaSolicitud"
));

$proto41["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "3"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "tik_sumdaysdate";
$obj = new SQLFunctionCall($proto41);

$proto40["m_sql"] = "tik_sumdaysdate(FechaSolicitud, 3)";
$proto40["m_srcTableName"] = "vtik_interno";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "FechaExpiracion";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "FechaSolicitud"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "3"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "tik_getm1dayfromdate";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "tik_getm1dayfromdate(FechaSolicitud, 3)";
$proto44["m_srcTableName"] = "vtik_interno";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "FechaMaxima";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAtencionFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto48["m_sql"] = "FechaAtencionFinal";
$proto48["m_srcTableName"] = "vtik_interno";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "tik_interno";
$proto51["m_srcTableName"] = "vtik_interno";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "Solicitud";
$proto51["m_columns"][] = "Documento";
$proto51["m_columns"][] = "TipoSolicitud";
$proto51["m_columns"][] = "DepartamentoSolicitante";
$proto51["m_columns"][] = "UsuarioSolicitante";
$proto51["m_columns"][] = "DepartamentoSolicitar";
$proto51["m_columns"][] = "Asunto";
$proto51["m_columns"][] = "DescripcionAmplia";
$proto51["m_columns"][] = "FechaSolicitud";
$proto51["m_columns"][] = "FechaInicio";
$proto51["m_columns"][] = "UsuarioInicio";
$proto51["m_columns"][] = "FechaFinal";
$proto51["m_columns"][] = "Observaciones";
$proto51["m_columns"][] = "Evaluacion";
$proto51["m_columns"][] = "Estado";
$proto51["m_columns"][] = "FechaAtencion";
$proto51["m_columns"][] = "FechaAtencionFinal";
$proto51["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "tik_interno";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "vtik_interno";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "vtik_interno"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vtik_interno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vtik_interno = createSqlQuery_vtik_interno();


	
		;

																				

$tdatavtik_interno[".sqlquery"] = $queryData_vtik_interno;



include_once(getabspath("include/vtik_interno_events.php"));
$tableEvents["vtik_interno"] = new eventclass_vtik_interno;
$tdatavtik_interno[".hasEvents"] = true;

$query = &$queryData_vtik_interno;
$table = "vtik_interno";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.
$sqlb = "select * from tik_cfg where Codigo = 1";
$rsb = CustomQuery($sqlb);
$datab = db_fetch_array($rsb);
$_SESSION["SiCorreo"] = $datab["DeseaCorreo"];

;
unset($query);
?>