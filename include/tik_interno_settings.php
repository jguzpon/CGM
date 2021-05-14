<?php
$tdatatik_interno = array();
$tdatatik_interno[".searchableFields"] = array();
$tdatatik_interno[".ShortName"] = "tik_interno";
$tdatatik_interno[".OwnerID"] = "";
$tdatatik_interno[".OriginalTable"] = "tik_interno";


$tdatatik_interno[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_interno[".originalPagesByType"] = $tdatatik_interno[".pagesByType"];
$tdatatik_interno[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_interno[".originalPages"] = $tdatatik_interno[".pages"];
$tdatatik_interno[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_interno[".originalDefaultPages"] = $tdatatik_interno[".defaultPages"];

//	field labels
$fieldLabelstik_interno = array();
$fieldToolTipstik_interno = array();
$pageTitlestik_interno = array();
$placeHolderstik_interno = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_interno["Spanish"] = array();
	$fieldToolTipstik_interno["Spanish"] = array();
	$placeHolderstik_interno["Spanish"] = array();
	$pageTitlestik_interno["Spanish"] = array();
	$fieldLabelstik_interno["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipstik_interno["Spanish"]["Solicitud"] = "";
	$placeHolderstik_interno["Spanish"]["Solicitud"] = "";
	$fieldLabelstik_interno["Spanish"]["DepartamentoSolicitante"] = "Departamento Solicitante";
	$fieldToolTipstik_interno["Spanish"]["DepartamentoSolicitante"] = "";
	$placeHolderstik_interno["Spanish"]["DepartamentoSolicitante"] = "";
	$fieldLabelstik_interno["Spanish"]["UsuarioSolicitante"] = "Usuario Solicitante";
	$fieldToolTipstik_interno["Spanish"]["UsuarioSolicitante"] = "";
	$placeHolderstik_interno["Spanish"]["UsuarioSolicitante"] = "";
	$fieldLabelstik_interno["Spanish"]["DepartamentoSolicitar"] = "Departamento a Solicitar";
	$fieldToolTipstik_interno["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHolderstik_interno["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelstik_interno["Spanish"]["Asunto"] = "Asunto";
	$fieldToolTipstik_interno["Spanish"]["Asunto"] = "";
	$placeHolderstik_interno["Spanish"]["Asunto"] = "";
	$fieldLabelstik_interno["Spanish"]["DescripcionAmplia"] = "Descripcion Amplia";
	$fieldToolTipstik_interno["Spanish"]["DescripcionAmplia"] = "";
	$placeHolderstik_interno["Spanish"]["DescripcionAmplia"] = "";
	$fieldLabelstik_interno["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipstik_interno["Spanish"]["FechaSolicitud"] = "";
	$placeHolderstik_interno["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelstik_interno["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipstik_interno["Spanish"]["FechaInicio"] = "";
	$placeHolderstik_interno["Spanish"]["FechaInicio"] = "";
	$fieldLabelstik_interno["Spanish"]["UsuarioInicio"] = "Usuario Inicio";
	$fieldToolTipstik_interno["Spanish"]["UsuarioInicio"] = "";
	$placeHolderstik_interno["Spanish"]["UsuarioInicio"] = "";
	$fieldLabelstik_interno["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipstik_interno["Spanish"]["FechaFinal"] = "";
	$placeHolderstik_interno["Spanish"]["FechaFinal"] = "";
	$fieldLabelstik_interno["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipstik_interno["Spanish"]["Observaciones"] = "";
	$placeHolderstik_interno["Spanish"]["Observaciones"] = "";
	$fieldLabelstik_interno["Spanish"]["Evaluacion"] = "Evaluacion";
	$fieldToolTipstik_interno["Spanish"]["Evaluacion"] = "";
	$placeHolderstik_interno["Spanish"]["Evaluacion"] = "";
	$fieldLabelstik_interno["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_interno["Spanish"]["Estado"] = "";
	$placeHolderstik_interno["Spanish"]["Estado"] = "";
	$fieldLabelstik_interno["Spanish"]["TipoSolicitud"] = "Tipo Ticket";
	$fieldToolTipstik_interno["Spanish"]["TipoSolicitud"] = "";
	$placeHolderstik_interno["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelstik_interno["Spanish"]["Documento"] = "Documento";
	$fieldToolTipstik_interno["Spanish"]["Documento"] = "";
	$placeHolderstik_interno["Spanish"]["Documento"] = "";
	$fieldLabelstik_interno["Spanish"]["FechaAtencion"] = "Fecha Atencion";
	$fieldToolTipstik_interno["Spanish"]["FechaAtencion"] = "";
	$placeHolderstik_interno["Spanish"]["FechaAtencion"] = "";
	$fieldLabelstik_interno["Spanish"]["ProcesoAtencion"] = "Proceso Atencion";
	$fieldToolTipstik_interno["Spanish"]["ProcesoAtencion"] = "";
	$placeHolderstik_interno["Spanish"]["ProcesoAtencion"] = "";
	$fieldLabelstik_interno["Spanish"]["FechaAtencionFinal"] = "Fecha Atencion Final";
	$fieldToolTipstik_interno["Spanish"]["FechaAtencionFinal"] = "";
	$placeHolderstik_interno["Spanish"]["FechaAtencionFinal"] = "";
	if (count($fieldToolTipstik_interno["Spanish"]))
		$tdatatik_interno[".isUseToolTips"] = true;
}


	$tdatatik_interno[".NCSearch"] = true;



$tdatatik_interno[".shortTableName"] = "tik_interno";
$tdatatik_interno[".nSecOptions"] = 0;

$tdatatik_interno[".mainTableOwnerID"] = "";
$tdatatik_interno[".entityType"] = 0;
$tdatatik_interno[".connId"] = "mpc_at_localhost";


$tdatatik_interno[".strOriginalTableName"] = "tik_interno";

	



$tdatatik_interno[".showAddInPopup"] = false;

$tdatatik_interno[".showEditInPopup"] = false;

$tdatatik_interno[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_interno[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_interno[".listAjax"] = false;
//	temporary
//$tdatatik_interno[".listAjax"] = false;

	$tdatatik_interno[".audit"] = true;

	$tdatatik_interno[".locking"] = false;


$pages = $tdatatik_interno[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_interno[".edit"] = true;
	$tdatatik_interno[".afterEditAction"] = 0;
	$tdatatik_interno[".closePopupAfterEdit"] = 1;
	$tdatatik_interno[".afterEditActionDetTable"] = "tik_documento";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_interno[".add"] = true;
$tdatatik_interno[".afterAddAction"] = 0;
$tdatatik_interno[".closePopupAfterAdd"] = 1;
$tdatatik_interno[".afterAddActionDetTable"] = "tik_documento";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_interno[".list"] = true;
}



$tdatatik_interno[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_interno[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_interno[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_interno[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_interno[".printFriendly"] = true;
}



$tdatatik_interno[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_interno[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_interno[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_interno[".isUseAjaxSuggest"] = true;

$tdatatik_interno[".rowHighlite"] = true;



																																																

$tdatatik_interno[".ajaxCodeSnippetAdded"] = false;

$tdatatik_interno[".buttonsAdded"] = false;

$tdatatik_interno[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_interno[".isUseTimeForSearch"] = false;


$tdatatik_interno[".badgeColor"] = "cfae83";


$tdatatik_interno[".allSearchFields"] = array();
$tdatatik_interno[".filterFields"] = array();
$tdatatik_interno[".requiredSearchFields"] = array();

$tdatatik_interno[".googleLikeFields"] = array();
$tdatatik_interno[".googleLikeFields"][] = "Solicitud";
$tdatatik_interno[".googleLikeFields"][] = "Documento";
$tdatatik_interno[".googleLikeFields"][] = "TipoSolicitud";
$tdatatik_interno[".googleLikeFields"][] = "DepartamentoSolicitante";
$tdatatik_interno[".googleLikeFields"][] = "UsuarioSolicitante";
$tdatatik_interno[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatatik_interno[".googleLikeFields"][] = "Asunto";
$tdatatik_interno[".googleLikeFields"][] = "DescripcionAmplia";
$tdatatik_interno[".googleLikeFields"][] = "FechaSolicitud";
$tdatatik_interno[".googleLikeFields"][] = "FechaInicio";
$tdatatik_interno[".googleLikeFields"][] = "UsuarioInicio";
$tdatatik_interno[".googleLikeFields"][] = "FechaFinal";
$tdatatik_interno[".googleLikeFields"][] = "Observaciones";
$tdatatik_interno[".googleLikeFields"][] = "Evaluacion";
$tdatatik_interno[".googleLikeFields"][] = "Estado";
$tdatatik_interno[".googleLikeFields"][] = "FechaAtencion";
$tdatatik_interno[".googleLikeFields"][] = "ProcesoAtencion";
$tdatatik_interno[".googleLikeFields"][] = "FechaAtencionFinal";



$tdatatik_interno[".tableType"] = "list";

$tdatatik_interno[".printerPageOrientation"] = 0;
$tdatatik_interno[".nPrinterPageScale"] = 100;

$tdatatik_interno[".nPrinterSplitRecords"] = 40;

$tdatatik_interno[".geocodingEnabled"] = false;










$tdatatik_interno[".pageSize"] = 20;

$tdatatik_interno[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Solicitud DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_interno[".strOrderBy"] = $tstrOrderBy;

$tdatatik_interno[".orderindexes"] = array();
	$tdatatik_interno[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "Solicitud");



$tdatatik_interno[".sqlHead"] = "SELECT Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  FechaAtencion,  ProcesoAtencion,  FechaAtencionFinal";
$tdatatik_interno[".sqlFrom"] = "FROM tik_interno";
$tdatatik_interno[".sqlWhereExpr"] = "";
$tdatatik_interno[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_interno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_interno[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_interno[".highlightSearchResults"] = true;

$tableKeystik_interno = array();
$tableKeystik_interno[] = "Solicitud";
$tdatatik_interno[".Keys"] = $tableKeystik_interno;


$tdatatik_interno[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Solicitud");
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


	$tdatatik_interno["Solicitud"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Solicitud";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Documento");
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


	$tdatatik_interno["Documento"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Documento";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","TipoSolicitud");
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


	$tdatatik_interno["TipoSolicitud"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "TipoSolicitud";
//	DepartamentoSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoSolicitante";
	$fdata["GoodName"] = "DepartamentoSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","DepartamentoSolicitante");
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


	$tdatatik_interno["DepartamentoSolicitante"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "DepartamentoSolicitante";
//	UsuarioSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UsuarioSolicitante";
	$fdata["GoodName"] = "UsuarioSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","UsuarioSolicitante");
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


	$tdatatik_interno["UsuarioSolicitante"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "UsuarioSolicitante";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","DepartamentoSolicitar");
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


	$tdatatik_interno["DepartamentoSolicitar"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "DepartamentoSolicitar";
//	Asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Asunto";
	$fdata["GoodName"] = "Asunto";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Asunto");
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


	$tdatatik_interno["Asunto"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Asunto";
//	DescripcionAmplia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DescripcionAmplia";
	$fdata["GoodName"] = "DescripcionAmplia";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","DescripcionAmplia");
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


	$tdatatik_interno["DescripcionAmplia"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "DescripcionAmplia";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","FechaSolicitud");
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


	$tdatatik_interno["FechaSolicitud"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "FechaSolicitud";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","FechaInicio");
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


	$tdatatik_interno["FechaInicio"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "FechaInicio";
//	UsuarioInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UsuarioInicio";
	$fdata["GoodName"] = "UsuarioInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","UsuarioInicio");
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


	$tdatatik_interno["UsuarioInicio"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "UsuarioInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","FechaFinal");
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


	$tdatatik_interno["FechaFinal"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "FechaFinal";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Observaciones");
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


	$tdatatik_interno["Observaciones"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Observaciones";
//	Evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Evaluacion";
	$fdata["GoodName"] = "Evaluacion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Evaluacion");
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


	$tdatatik_interno["Evaluacion"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Evaluacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","Estado");
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


	$tdatatik_interno["Estado"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "Estado";
//	FechaAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FechaAtencion";
	$fdata["GoodName"] = "FechaAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","FechaAtencion");
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


	$tdatatik_interno["FechaAtencion"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "FechaAtencion";
//	ProcesoAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ProcesoAtencion";
	$fdata["GoodName"] = "ProcesoAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","ProcesoAtencion");
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


	$tdatatik_interno["ProcesoAtencion"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "ProcesoAtencion";
//	FechaAtencionFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "FechaAtencionFinal";
	$fdata["GoodName"] = "FechaAtencionFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("tik_interno","FechaAtencionFinal");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaAtencionFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaAtencionFinal";

	
	
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


	$tdatatik_interno["FechaAtencionFinal"] = $fdata;
		$tdatatik_interno[".searchableFields"][] = "FechaAtencionFinal";


$tables_data["tik_interno"]=&$tdatatik_interno;
$field_labels["tik_interno"] = &$fieldLabelstik_interno;
$fieldToolTips["tik_interno"] = &$fieldToolTipstik_interno;
$placeHolders["tik_interno"] = &$placeHolderstik_interno;
$page_titles["tik_interno"] = &$pageTitlestik_interno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_interno"] = array();
//	tik_documento
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_documento";
		$detailsParam["dOriginalTable"] = "tik_documento";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_documento";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_documento");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_interno"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_interno"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_interno"][$dIndex]["masterKeys"][]="Solicitud";

				$detailsTablesData["tik_interno"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_interno"][$dIndex]["detailKeys"][]="Solicitud";
//	tik_restulado
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tik_restulado";
		$detailsParam["dOriginalTable"] = "tik_restulado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tik_restulado";
	$detailsParam["dCaptionTable"] = GetTableCaption("tik_restulado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tik_interno"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tik_interno"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tik_interno"][$dIndex]["masterKeys"][]="Solicitud";

				$detailsTablesData["tik_interno"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tik_interno"][$dIndex]["detailKeys"][]="Solicitud";

// tables which are master tables for current table (detail)
$masterTablesData["tik_interno"] = array();



	
				$strOriginalDetailsTable="tik_satisfaccion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_satisfaccion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_satisfaccion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_interno"][0] = $masterParams;
				$masterTablesData["tik_interno"][0]["masterKeys"] = array();
	$masterTablesData["tik_interno"][0]["masterKeys"][]="Nivel";
				$masterTablesData["tik_interno"][0]["detailKeys"] = array();
	$masterTablesData["tik_interno"][0]["detailKeys"][]="Evaluacion";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_interno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Solicitud,  Documento,  TipoSolicitud,  DepartamentoSolicitante,  UsuarioSolicitante,  DepartamentoSolicitar,  Asunto,  DescripcionAmplia,  FechaSolicitud,  FechaInicio,  UsuarioInicio,  FechaFinal,  Observaciones,  Evaluacion,  Estado,  FechaAtencion,  ProcesoAtencion,  FechaAtencionFinal";
$proto0["m_strFrom"] = "FROM tik_interno";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Solicitud DESC";
	
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
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto6["m_sql"] = "Solicitud";
$proto6["m_srcTableName"] = "tik_interno";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto8["m_sql"] = "Documento";
$proto8["m_srcTableName"] = "tik_interno";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto10["m_sql"] = "TipoSolicitud";
$proto10["m_srcTableName"] = "tik_interno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto12["m_sql"] = "DepartamentoSolicitante";
$proto12["m_srcTableName"] = "tik_interno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto14["m_sql"] = "UsuarioSolicitante";
$proto14["m_srcTableName"] = "tik_interno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto16["m_sql"] = "DepartamentoSolicitar";
$proto16["m_srcTableName"] = "tik_interno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Asunto",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto18["m_sql"] = "Asunto";
$proto18["m_srcTableName"] = "tik_interno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DescripcionAmplia",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto20["m_sql"] = "DescripcionAmplia";
$proto20["m_srcTableName"] = "tik_interno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto22["m_sql"] = "FechaSolicitud";
$proto22["m_srcTableName"] = "tik_interno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto24["m_sql"] = "FechaInicio";
$proto24["m_srcTableName"] = "tik_interno";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto26["m_sql"] = "UsuarioInicio";
$proto26["m_srcTableName"] = "tik_interno";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto28["m_sql"] = "FechaFinal";
$proto28["m_srcTableName"] = "tik_interno";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto30["m_sql"] = "Observaciones";
$proto30["m_srcTableName"] = "tik_interno";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto32["m_sql"] = "Evaluacion";
$proto32["m_srcTableName"] = "tik_interno";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto34["m_sql"] = "Estado";
$proto34["m_srcTableName"] = "tik_interno";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto36["m_sql"] = "FechaAtencion";
$proto36["m_srcTableName"] = "tik_interno";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto38["m_sql"] = "ProcesoAtencion";
$proto38["m_srcTableName"] = "tik_interno";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAtencionFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto40["m_sql"] = "FechaAtencionFinal";
$proto40["m_srcTableName"] = "tik_interno";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "tik_interno";
$proto43["m_srcTableName"] = "tik_interno";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "Solicitud";
$proto43["m_columns"][] = "Documento";
$proto43["m_columns"][] = "TipoSolicitud";
$proto43["m_columns"][] = "DepartamentoSolicitante";
$proto43["m_columns"][] = "UsuarioSolicitante";
$proto43["m_columns"][] = "DepartamentoSolicitar";
$proto43["m_columns"][] = "Asunto";
$proto43["m_columns"][] = "DescripcionAmplia";
$proto43["m_columns"][] = "FechaSolicitud";
$proto43["m_columns"][] = "FechaInicio";
$proto43["m_columns"][] = "UsuarioInicio";
$proto43["m_columns"][] = "FechaFinal";
$proto43["m_columns"][] = "Observaciones";
$proto43["m_columns"][] = "Evaluacion";
$proto43["m_columns"][] = "Estado";
$proto43["m_columns"][] = "FechaAtencion";
$proto43["m_columns"][] = "FechaAtencionFinal";
$proto43["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "tik_interno";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "tik_interno";
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
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "tik_interno"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_interno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_interno = createSqlQuery_tik_interno();


	
		;

																		

$tdatatik_interno[".sqlquery"] = $queryData_tik_interno;



include_once(getabspath("include/tik_interno_events.php"));
$tableEvents["tik_interno"] = new eventclass_tik_interno;
$tdatatik_interno[".hasEvents"] = true;

?>