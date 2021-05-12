<?php
$tdatasolicitudesvencidas = array();
$tdatasolicitudesvencidas[".searchableFields"] = array();
$tdatasolicitudesvencidas[".ShortName"] = "solicitudesvencidas";
$tdatasolicitudesvencidas[".OwnerID"] = "";
$tdatasolicitudesvencidas[".OriginalTable"] = "tik_interno";


$tdatasolicitudesvencidas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasolicitudesvencidas[".originalPagesByType"] = $tdatasolicitudesvencidas[".pagesByType"];
$tdatasolicitudesvencidas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasolicitudesvencidas[".originalPages"] = $tdatasolicitudesvencidas[".pages"];
$tdatasolicitudesvencidas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasolicitudesvencidas[".originalDefaultPages"] = $tdatasolicitudesvencidas[".defaultPages"];

//	field labels
$fieldLabelssolicitudesvencidas = array();
$fieldToolTipssolicitudesvencidas = array();
$pageTitlessolicitudesvencidas = array();
$placeHolderssolicitudesvencidas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicitudesvencidas["Spanish"] = array();
	$fieldToolTipssolicitudesvencidas["Spanish"] = array();
	$placeHolderssolicitudesvencidas["Spanish"] = array();
	$pageTitlessolicitudesvencidas["Spanish"] = array();
	$fieldLabelssolicitudesvencidas["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Solicitud"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Solicitud"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["DepartamentoSolicitante"] = "Departamento Solicitante";
	$fieldToolTipssolicitudesvencidas["Spanish"]["DepartamentoSolicitante"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["DepartamentoSolicitante"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["UsuarioSolicitante"] = "Usuario Solicitante";
	$fieldToolTipssolicitudesvencidas["Spanish"]["UsuarioSolicitante"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["UsuarioSolicitante"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["DepartamentoSolicitar"] = "Departamento a Solicitar";
	$fieldToolTipssolicitudesvencidas["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["Asunto"] = "Asunto";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Asunto"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Asunto"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["DescripcionAmplia"] = "Descripcion Amplia";
	$fieldToolTipssolicitudesvencidas["Spanish"]["DescripcionAmplia"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["DescripcionAmplia"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipssolicitudesvencidas["Spanish"]["FechaSolicitud"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipssolicitudesvencidas["Spanish"]["FechaInicio"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["FechaInicio"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["UsuarioInicio"] = "Usuario Inicio";
	$fieldToolTipssolicitudesvencidas["Spanish"]["UsuarioInicio"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["UsuarioInicio"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipssolicitudesvencidas["Spanish"]["FechaFinal"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["FechaFinal"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Observaciones"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Observaciones"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["Evaluacion"] = "Evaluacion";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Evaluacion"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Evaluacion"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["Estado"] = "Estado";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Estado"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Estado"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["TipoSolicitud"] = "Tipo Ticket";
	$fieldToolTipssolicitudesvencidas["Spanish"]["TipoSolicitud"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["Documento"] = "Documento";
	$fieldToolTipssolicitudesvencidas["Spanish"]["Documento"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["Documento"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["fechaatencion"] = "Fecha Atencion";
	$fieldToolTipssolicitudesvencidas["Spanish"]["fechaatencion"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["fechaatencion"] = "";
	$fieldLabelssolicitudesvencidas["Spanish"]["ProcesoAtencion"] = "Proceso Atencion";
	$fieldToolTipssolicitudesvencidas["Spanish"]["ProcesoAtencion"] = "";
	$placeHolderssolicitudesvencidas["Spanish"]["ProcesoAtencion"] = "";
	if (count($fieldToolTipssolicitudesvencidas["Spanish"]))
		$tdatasolicitudesvencidas[".isUseToolTips"] = true;
}


	$tdatasolicitudesvencidas[".NCSearch"] = true;



$tdatasolicitudesvencidas[".shortTableName"] = "solicitudesvencidas";
$tdatasolicitudesvencidas[".nSecOptions"] = 0;

$tdatasolicitudesvencidas[".mainTableOwnerID"] = "";
$tdatasolicitudesvencidas[".entityType"] = 1;
$tdatasolicitudesvencidas[".connId"] = "mpc_at_localhost";


$tdatasolicitudesvencidas[".strOriginalTableName"] = "tik_interno";

	



$tdatasolicitudesvencidas[".showAddInPopup"] = false;

$tdatasolicitudesvencidas[".showEditInPopup"] = false;

$tdatasolicitudesvencidas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasolicitudesvencidas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasolicitudesvencidas[".listAjax"] = false;
//	temporary
//$tdatasolicitudesvencidas[".listAjax"] = false;

	$tdatasolicitudesvencidas[".audit"] = true;

	$tdatasolicitudesvencidas[".locking"] = false;


$pages = $tdatasolicitudesvencidas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasolicitudesvencidas[".edit"] = true;
	$tdatasolicitudesvencidas[".afterEditAction"] = 0;
	$tdatasolicitudesvencidas[".closePopupAfterEdit"] = 1;
	$tdatasolicitudesvencidas[".afterEditActionDetTable"] = "tik_documento";
}

if( $pages[PAGE_ADD] ) {
$tdatasolicitudesvencidas[".add"] = true;
$tdatasolicitudesvencidas[".afterAddAction"] = 0;
$tdatasolicitudesvencidas[".closePopupAfterAdd"] = 1;
$tdatasolicitudesvencidas[".afterAddActionDetTable"] = "tik_documento";
}

if( $pages[PAGE_LIST] ) {
	$tdatasolicitudesvencidas[".list"] = true;
}



$tdatasolicitudesvencidas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasolicitudesvencidas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasolicitudesvencidas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasolicitudesvencidas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasolicitudesvencidas[".printFriendly"] = true;
}



$tdatasolicitudesvencidas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasolicitudesvencidas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasolicitudesvencidas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasolicitudesvencidas[".isUseAjaxSuggest"] = true;

$tdatasolicitudesvencidas[".rowHighlite"] = true;



																								

$tdatasolicitudesvencidas[".ajaxCodeSnippetAdded"] = false;

$tdatasolicitudesvencidas[".buttonsAdded"] = false;

$tdatasolicitudesvencidas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasolicitudesvencidas[".isUseTimeForSearch"] = false;


$tdatasolicitudesvencidas[".badgeColor"] = "4169E1";


$tdatasolicitudesvencidas[".allSearchFields"] = array();
$tdatasolicitudesvencidas[".filterFields"] = array();
$tdatasolicitudesvencidas[".requiredSearchFields"] = array();

$tdatasolicitudesvencidas[".googleLikeFields"] = array();
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Solicitud";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Documento";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "TipoSolicitud";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "DepartamentoSolicitante";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "UsuarioSolicitante";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Asunto";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "DescripcionAmplia";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "FechaSolicitud";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "FechaInicio";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "UsuarioInicio";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "FechaFinal";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Observaciones";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Evaluacion";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "Estado";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "fechaatencion";
$tdatasolicitudesvencidas[".googleLikeFields"][] = "ProcesoAtencion";



$tdatasolicitudesvencidas[".tableType"] = "list";

$tdatasolicitudesvencidas[".printerPageOrientation"] = 0;
$tdatasolicitudesvencidas[".nPrinterPageScale"] = 100;

$tdatasolicitudesvencidas[".nPrinterSplitRecords"] = 40;

$tdatasolicitudesvencidas[".geocodingEnabled"] = false;










$tdatasolicitudesvencidas[".pageSize"] = 20;

$tdatasolicitudesvencidas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Solicitud DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasolicitudesvencidas[".strOrderBy"] = $tstrOrderBy;

$tdatasolicitudesvencidas[".orderindexes"] = array();
	$tdatasolicitudesvencidas[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "Solicitud");



$tdatasolicitudesvencidas[".sqlHead"] = "SELECT Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  IFNULL(FechaAtencion, '') AS fechaatencion,  ProcesoAtencion";
$tdatasolicitudesvencidas[".sqlFrom"] = "FROM tik_interno";
$tdatasolicitudesvencidas[".sqlWhereExpr"] = "(Evaluacion =1) AND (Estado ='Evaluado') AND (IFNULL(FechaAtencion, '') ='')";
$tdatasolicitudesvencidas[".sqlTail"] = "";

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
$tdatasolicitudesvencidas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicitudesvencidas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicitudesvencidas[".arrGroupsPerPage"] = $arrGPP;

$tdatasolicitudesvencidas[".highlightSearchResults"] = true;

$tableKeyssolicitudesvencidas = array();
$tableKeyssolicitudesvencidas[] = "Solicitud";
$tdatasolicitudesvencidas[".Keys"] = $tableKeyssolicitudesvencidas;


$tdatasolicitudesvencidas[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Solicitud");
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


	$tdatasolicitudesvencidas["Solicitud"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Solicitud";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Documento");
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


	$tdatasolicitudesvencidas["Documento"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Documento";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","TipoSolicitud");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Documento", 'lookupF'=>"Nomenclatura");
	$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "TipoSolicitud";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "trim(Descripcion)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "TipoSolicitud";

	
	
	
	

	
	
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


	$tdatasolicitudesvencidas["TipoSolicitud"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "TipoSolicitud";
//	DepartamentoSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoSolicitante";
	$fdata["GoodName"] = "DepartamentoSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","DepartamentoSolicitante");
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


	$tdatasolicitudesvencidas["DepartamentoSolicitante"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "DepartamentoSolicitante";
//	UsuarioSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UsuarioSolicitante";
	$fdata["GoodName"] = "UsuarioSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","UsuarioSolicitante");
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


	$tdatasolicitudesvencidas["UsuarioSolicitante"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "UsuarioSolicitante";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","DepartamentoSolicitar");
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
		$edata["listPageId"] = "list1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoDepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

				$edata["LookupWhereCode"] = true;


	
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


	$tdatasolicitudesvencidas["DepartamentoSolicitar"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "DepartamentoSolicitar";
//	Asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Asunto";
	$fdata["GoodName"] = "Asunto";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Asunto");
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasolicitudesvencidas["Asunto"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Asunto";
//	DescripcionAmplia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DescripcionAmplia";
	$fdata["GoodName"] = "DescripcionAmplia";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","DescripcionAmplia");
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasolicitudesvencidas["DescripcionAmplia"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "DescripcionAmplia";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","FechaSolicitud");
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


	$tdatasolicitudesvencidas["FechaSolicitud"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "FechaSolicitud";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","FechaInicio");
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


	$tdatasolicitudesvencidas["FechaInicio"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "FechaInicio";
//	UsuarioInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UsuarioInicio";
	$fdata["GoodName"] = "UsuarioInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","UsuarioInicio");
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


	$tdatasolicitudesvencidas["UsuarioInicio"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "UsuarioInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","FechaFinal");
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


	$tdatasolicitudesvencidas["FechaFinal"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "FechaFinal";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Observaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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


	$tdatasolicitudesvencidas["Observaciones"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Observaciones";
//	Evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Evaluacion";
	$fdata["GoodName"] = "Evaluacion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Evaluacion");
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

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "Nivel";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
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


	$tdatasolicitudesvencidas["Evaluacion"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Evaluacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","Estado");
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


	$tdatasolicitudesvencidas["Estado"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "Estado";
//	fechaatencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fechaatencion";
	$fdata["GoodName"] = "fechaatencion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","fechaatencion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FechaAtencion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IFNULL(FechaAtencion, '')";

	
	
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


	$tdatasolicitudesvencidas["fechaatencion"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "fechaatencion";
//	ProcesoAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ProcesoAtencion";
	$fdata["GoodName"] = "ProcesoAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("SolicitudesVencidas","ProcesoAtencion");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatasolicitudesvencidas["ProcesoAtencion"] = $fdata;
		$tdatasolicitudesvencidas[".searchableFields"][] = "ProcesoAtencion";


$tables_data["SolicitudesVencidas"]=&$tdatasolicitudesvencidas;
$field_labels["SolicitudesVencidas"] = &$fieldLabelssolicitudesvencidas;
$fieldToolTips["SolicitudesVencidas"] = &$fieldToolTipssolicitudesvencidas;
$placeHolders["SolicitudesVencidas"] = &$placeHolderssolicitudesvencidas;
$page_titles["SolicitudesVencidas"] = &$pageTitlessolicitudesvencidas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SolicitudesVencidas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SolicitudesVencidas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_solicitudesvencidas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  IFNULL(FechaAtencion, '') AS fechaatencion,  ProcesoAtencion";
$proto0["m_strFrom"] = "FROM tik_interno";
$proto0["m_strWhere"] = "(Evaluacion =1) AND (Estado ='Evaluado') AND (IFNULL(FechaAtencion, '') ='')";
$proto0["m_strOrderBy"] = "ORDER BY Solicitud DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(Evaluacion =1) AND (Estado ='Evaluado') AND (IFNULL(FechaAtencion, '') ='')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Evaluacion =1) AND (Estado ='Evaluado') AND (IFNULL(FechaAtencion, '') ='')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Evaluacion =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Estado ='Evaluado'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "='Evaluado'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "IFNULL(FechaAtencion, '') =''";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "FechaAtencion"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto9);

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=''";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto14["m_sql"] = "Solicitud";
$proto14["m_srcTableName"] = "SolicitudesVencidas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto16["m_sql"] = "Documento";
$proto16["m_srcTableName"] = "SolicitudesVencidas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto18["m_sql"] = "TipoSolicitud";
$proto18["m_srcTableName"] = "SolicitudesVencidas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto20["m_sql"] = "DepartamentoSolicitante";
$proto20["m_srcTableName"] = "SolicitudesVencidas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto22["m_sql"] = "UsuarioSolicitante";
$proto22["m_srcTableName"] = "SolicitudesVencidas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto24["m_sql"] = "DepartamentoSolicitar";
$proto24["m_srcTableName"] = "SolicitudesVencidas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Asunto",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto26["m_sql"] = "Asunto";
$proto26["m_srcTableName"] = "SolicitudesVencidas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DescripcionAmplia",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto28["m_sql"] = "DescripcionAmplia";
$proto28["m_srcTableName"] = "SolicitudesVencidas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto30["m_sql"] = "FechaSolicitud";
$proto30["m_srcTableName"] = "SolicitudesVencidas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto32["m_sql"] = "FechaInicio";
$proto32["m_srcTableName"] = "SolicitudesVencidas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto34["m_sql"] = "UsuarioInicio";
$proto34["m_srcTableName"] = "SolicitudesVencidas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto36["m_sql"] = "FechaFinal";
$proto36["m_srcTableName"] = "SolicitudesVencidas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto38["m_sql"] = "Observaciones";
$proto38["m_srcTableName"] = "SolicitudesVencidas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto40["m_sql"] = "Evaluacion";
$proto40["m_srcTableName"] = "SolicitudesVencidas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto42["m_sql"] = "Estado";
$proto42["m_srcTableName"] = "SolicitudesVencidas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "FechaAtencion"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "IFNULL";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "IFNULL(FechaAtencion, '')";
$proto44["m_srcTableName"] = "SolicitudesVencidas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "fechaatencion";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto48["m_sql"] = "ProcesoAtencion";
$proto48["m_srcTableName"] = "SolicitudesVencidas";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "tik_interno";
$proto51["m_srcTableName"] = "SolicitudesVencidas";
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
$proto51["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "tik_interno";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "SolicitudesVencidas";
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
	"m_srcTableName" => "SolicitudesVencidas"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="SolicitudesVencidas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solicitudesvencidas = createSqlQuery_solicitudesvencidas();


	
		;

																	

$tdatasolicitudesvencidas[".sqlquery"] = $queryData_solicitudesvencidas;



include_once(getabspath("include/solicitudesvencidas_events.php"));
$tableEvents["SolicitudesVencidas"] = new eventclass_solicitudesvencidas;
$tdatasolicitudesvencidas[".hasEvents"] = true;

?>