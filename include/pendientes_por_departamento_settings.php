<?php
$tdatapendientes_por_departamento = array();
$tdatapendientes_por_departamento[".searchableFields"] = array();
$tdatapendientes_por_departamento[".ShortName"] = "pendientes_por_departamento";
$tdatapendientes_por_departamento[".OwnerID"] = "DepartamentoSolicitar";
$tdatapendientes_por_departamento[".OriginalTable"] = "tik_interno";


$tdatapendientes_por_departamento[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapendientes_por_departamento[".originalPagesByType"] = $tdatapendientes_por_departamento[".pagesByType"];
$tdatapendientes_por_departamento[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapendientes_por_departamento[".originalPages"] = $tdatapendientes_por_departamento[".pages"];
$tdatapendientes_por_departamento[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapendientes_por_departamento[".originalDefaultPages"] = $tdatapendientes_por_departamento[".defaultPages"];

//	field labels
$fieldLabelspendientes_por_departamento = array();
$fieldToolTipspendientes_por_departamento = array();
$pageTitlespendientes_por_departamento = array();
$placeHolderspendientes_por_departamento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspendientes_por_departamento["Spanish"] = array();
	$fieldToolTipspendientes_por_departamento["Spanish"] = array();
	$placeHolderspendientes_por_departamento["Spanish"] = array();
	$pageTitlespendientes_por_departamento["Spanish"] = array();
	$fieldLabelspendientes_por_departamento["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipspendientes_por_departamento["Spanish"]["Solicitud"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["Solicitud"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipspendientes_por_departamento["Spanish"]["TipoSolicitud"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["DepartamentoSolicitante"] = "Departamento Solicitante";
	$fieldToolTipspendientes_por_departamento["Spanish"]["DepartamentoSolicitante"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["DepartamentoSolicitante"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["UsuarioSolicitante"] = "Usuario Solicitante";
	$fieldToolTipspendientes_por_departamento["Spanish"]["UsuarioSolicitante"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["UsuarioSolicitante"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["Asunto"] = "Asunto";
	$fieldToolTipspendientes_por_departamento["Spanish"]["Asunto"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["Asunto"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipspendientes_por_departamento["Spanish"]["FechaSolicitud"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["Estado"] = "Estado";
	$fieldToolTipspendientes_por_departamento["Spanish"]["Estado"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["Estado"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipspendientes_por_departamento["Spanish"]["Nombre"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["Nombre"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["DepartamentoSolicitar"] = "Departamento Solicitar";
	$fieldToolTipspendientes_por_departamento["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["FechaAtencion"] = "Fecha Atencion";
	$fieldToolTipspendientes_por_departamento["Spanish"]["FechaAtencion"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["FechaAtencion"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["ProcesoAtencion"] = "Proceso Atencion";
	$fieldToolTipspendientes_por_departamento["Spanish"]["ProcesoAtencion"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["ProcesoAtencion"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipspendientes_por_departamento["Spanish"]["FechaFinal"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["FechaFinal"] = "";
	$fieldLabelspendientes_por_departamento["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspendientes_por_departamento["Spanish"]["Observaciones"] = "";
	$placeHolderspendientes_por_departamento["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipspendientes_por_departamento["Spanish"]))
		$tdatapendientes_por_departamento[".isUseToolTips"] = true;
}


	$tdatapendientes_por_departamento[".NCSearch"] = true;



$tdatapendientes_por_departamento[".shortTableName"] = "pendientes_por_departamento";
$tdatapendientes_por_departamento[".nSecOptions"] = 1;

$tdatapendientes_por_departamento[".mainTableOwnerID"] = "DepartamentoSolicitar";
$tdatapendientes_por_departamento[".entityType"] = 2;
$tdatapendientes_por_departamento[".connId"] = "mpc_at_localhost";


$tdatapendientes_por_departamento[".strOriginalTableName"] = "tik_interno";

	



$tdatapendientes_por_departamento[".showAddInPopup"] = false;

$tdatapendientes_por_departamento[".showEditInPopup"] = false;

$tdatapendientes_por_departamento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapendientes_por_departamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapendientes_por_departamento[".listAjax"] = false;
//	temporary
//$tdatapendientes_por_departamento[".listAjax"] = false;

	$tdatapendientes_por_departamento[".audit"] = false;

	$tdatapendientes_por_departamento[".locking"] = false;


$pages = $tdatapendientes_por_departamento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapendientes_por_departamento[".edit"] = true;
	$tdatapendientes_por_departamento[".afterEditAction"] = 0;
	$tdatapendientes_por_departamento[".closePopupAfterEdit"] = 1;
	$tdatapendientes_por_departamento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapendientes_por_departamento[".add"] = true;
$tdatapendientes_por_departamento[".afterAddAction"] = 0;
$tdatapendientes_por_departamento[".closePopupAfterAdd"] = 1;
$tdatapendientes_por_departamento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapendientes_por_departamento[".list"] = true;
}



$tdatapendientes_por_departamento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapendientes_por_departamento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapendientes_por_departamento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapendientes_por_departamento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapendientes_por_departamento[".printFriendly"] = true;
}



$tdatapendientes_por_departamento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapendientes_por_departamento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapendientes_por_departamento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapendientes_por_departamento[".isUseAjaxSuggest"] = true;




																		

$tdatapendientes_por_departamento[".ajaxCodeSnippetAdded"] = false;

$tdatapendientes_por_departamento[".buttonsAdded"] = false;

$tdatapendientes_por_departamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapendientes_por_departamento[".isUseTimeForSearch"] = false;


$tdatapendientes_por_departamento[".badgeColor"] = "6493EA";


$tdatapendientes_por_departamento[".allSearchFields"] = array();
$tdatapendientes_por_departamento[".filterFields"] = array();
$tdatapendientes_por_departamento[".requiredSearchFields"] = array();

$tdatapendientes_por_departamento[".googleLikeFields"] = array();
$tdatapendientes_por_departamento[".googleLikeFields"][] = "Solicitud";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "TipoSolicitud";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "DepartamentoSolicitante";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "UsuarioSolicitante";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "Nombre";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "Asunto";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "FechaSolicitud";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "Estado";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "FechaAtencion";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "ProcesoAtencion";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "FechaFinal";
$tdatapendientes_por_departamento[".googleLikeFields"][] = "Observaciones";



$tdatapendientes_por_departamento[".tableType"] = "report";

$tdatapendientes_por_departamento[".printerPageOrientation"] = 1;
$tdatapendientes_por_departamento[".nPrinterPageScale"] = 100;

$tdatapendientes_por_departamento[".nPrinterSplitRecords"] = 40;

$tdatapendientes_por_departamento[".geocodingEnabled"] = false;

//report settings
$tdatapendientes_por_departamento[".printReportLayout"] = 6;

$tdatapendientes_por_departamento[".reportPrintPartitionType"] = 1;
$tdatapendientes_por_departamento[".reportPrintGroupsPerPage"] = 40;
$tdatapendientes_por_departamento[".lowGroup"] = 0;



$tdatapendientes_por_departamento[".pageSize"] = 20;





$tdatapendientes_por_departamento[".reportGlobalSummary"] = true;

$tdatapendientes_por_departamento[".repShowDet"] = true;

$tdatapendientes_por_departamento[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "ORDER BY tik_interno.Solicitud DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapendientes_por_departamento[".strOrderBy"] = $tstrOrderBy;

$tdatapendientes_por_departamento[".orderindexes"] = array();
	$tdatapendientes_por_departamento[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "tik_interno.Solicitud");



$tdatapendientes_por_departamento[".sqlHead"] = "SELECT tik_interno.Solicitud,  tik_interno.TipoSolicitud,  tik_interno.DepartamentoSolicitante,  tik_interno.UsuarioSolicitante,  zusuarios.Nombre,  tik_interno.Asunto,  tik_interno.FechaSolicitud,  tik_interno.Estado,  tik_interno.DepartamentoSolicitar,  tik_interno.FechaAtencion,  tik_interno.ProcesoAtencion,  tik_interno.FechaFinal,  tik_interno.Observaciones";
$tdatapendientes_por_departamento[".sqlFrom"] = "FROM tik_interno  INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI  RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$tdatapendientes_por_departamento[".sqlWhereExpr"] = "(tik_interno.Estado <>'Evaluado')";
$tdatapendientes_por_departamento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapendientes_por_departamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapendientes_por_departamento[".arrGroupsPerPage"] = $arrGPP;

$tdatapendientes_por_departamento[".highlightSearchResults"] = true;

$tableKeyspendientes_por_departamento = array();
$tableKeyspendientes_por_departamento[] = "Solicitud";
$tdatapendientes_por_departamento[".Keys"] = $tableKeyspendientes_por_departamento;


$tdatapendientes_por_departamento[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","Solicitud");
	$fdata["FieldType"] = 20;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Solicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Solicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["Solicitud"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "Solicitud";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","TipoSolicitud");
	$fdata["FieldType"] = 2;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "TipoSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.TipoSolicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["TipoSolicitud"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "TipoSolicitud";
//	DepartamentoSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DepartamentoSolicitante";
	$fdata["GoodName"] = "DepartamentoSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","DepartamentoSolicitante");
	$fdata["FieldType"] = 2;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "DepartamentoSolicitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.DepartamentoSolicitante";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["DepartamentoSolicitante"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "DepartamentoSolicitante";
//	UsuarioSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UsuarioSolicitante";
	$fdata["GoodName"] = "UsuarioSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","UsuarioSolicitante");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "UsuarioSolicitante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.UsuarioSolicitante";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["UsuarioSolicitante"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "UsuarioSolicitante";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","Nombre");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["Nombre"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "Nombre";
//	Asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Asunto";
	$fdata["GoodName"] = "Asunto";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","Asunto");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Asunto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Asunto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["Asunto"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "Asunto";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","FechaSolicitud");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "FechaSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.FechaSolicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["FechaSolicitud"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "FechaSolicitud";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","Estado");
	$fdata["FieldType"] = 129;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["Estado"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "Estado";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","DepartamentoSolicitar");
	$fdata["FieldType"] = 2;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "DepartamentoSolicitar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.DepartamentoSolicitar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CodigoDepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "Descripcion";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["DepartamentoSolicitar"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "DepartamentoSolicitar";
//	FechaAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaAtencion";
	$fdata["GoodName"] = "FechaAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","FechaAtencion");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "FechaAtencion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.FechaAtencion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["FechaAtencion"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "FechaAtencion";
//	ProcesoAtencion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProcesoAtencion";
	$fdata["GoodName"] = "ProcesoAtencion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","ProcesoAtencion");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "ProcesoAtencion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.ProcesoAtencion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["ProcesoAtencion"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "ProcesoAtencion";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","FechaFinal");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "FechaFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.FechaFinal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["FechaFinal"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "FechaFinal";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Pendientes_por_Departamento","Observaciones");
	$fdata["FieldType"] = 201;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Observaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapendientes_por_departamento["Observaciones"] = $fdata;
		$tdatapendientes_por_departamento[".searchableFields"][] = "Observaciones";


$tables_data["Pendientes por Departamento"]=&$tdatapendientes_por_departamento;
$field_labels["Pendientes_por_Departamento"] = &$fieldLabelspendientes_por_departamento;
$fieldToolTips["Pendientes_por_Departamento"] = &$fieldToolTipspendientes_por_departamento;
$placeHolders["Pendientes_por_Departamento"] = &$placeHolderspendientes_por_departamento;
$page_titles["Pendientes_por_Departamento"] = &$pageTitlespendientes_por_departamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pendientes por Departamento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Pendientes por Departamento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pendientes_por_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tik_interno.Solicitud,  tik_interno.TipoSolicitud,  tik_interno.DepartamentoSolicitante,  tik_interno.UsuarioSolicitante,  zusuarios.Nombre,  tik_interno.Asunto,  tik_interno.FechaSolicitud,  tik_interno.Estado,  tik_interno.DepartamentoSolicitar,  tik_interno.FechaAtencion,  tik_interno.ProcesoAtencion,  tik_interno.FechaFinal,  tik_interno.Observaciones";
$proto0["m_strFrom"] = "FROM tik_interno  INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI  RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto0["m_strWhere"] = "(tik_interno.Estado <>'Evaluado')";
$proto0["m_strOrderBy"] = "ORDER BY tik_interno.Solicitud DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tik_interno.Estado <>'Evaluado'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<>'Evaluado'";
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
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto6["m_sql"] = "tik_interno.Solicitud";
$proto6["m_srcTableName"] = "Pendientes por Departamento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto8["m_sql"] = "tik_interno.TipoSolicitud";
$proto8["m_srcTableName"] = "Pendientes por Departamento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto10["m_sql"] = "tik_interno.DepartamentoSolicitante";
$proto10["m_srcTableName"] = "Pendientes por Departamento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto12["m_sql"] = "tik_interno.UsuarioSolicitante";
$proto12["m_srcTableName"] = "Pendientes por Departamento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto14["m_sql"] = "zusuarios.Nombre";
$proto14["m_srcTableName"] = "Pendientes por Departamento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Asunto",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto16["m_sql"] = "tik_interno.Asunto";
$proto16["m_srcTableName"] = "Pendientes por Departamento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto18["m_sql"] = "tik_interno.FechaSolicitud";
$proto18["m_srcTableName"] = "Pendientes por Departamento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto20["m_sql"] = "tik_interno.Estado";
$proto20["m_srcTableName"] = "Pendientes por Departamento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto22["m_sql"] = "tik_interno.DepartamentoSolicitar";
$proto22["m_srcTableName"] = "Pendientes por Departamento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto24["m_sql"] = "tik_interno.FechaAtencion";
$proto24["m_srcTableName"] = "Pendientes por Departamento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProcesoAtencion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto26["m_sql"] = "tik_interno.ProcesoAtencion";
$proto26["m_srcTableName"] = "Pendientes por Departamento";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto28["m_sql"] = "tik_interno.FechaFinal";
$proto28["m_srcTableName"] = "Pendientes por Departamento";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto30["m_sql"] = "tik_interno.Observaciones";
$proto30["m_srcTableName"] = "Pendientes por Departamento";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tik_interno";
$proto33["m_srcTableName"] = "Pendientes por Departamento";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Solicitud";
$proto33["m_columns"][] = "Documento";
$proto33["m_columns"][] = "TipoSolicitud";
$proto33["m_columns"][] = "DepartamentoSolicitante";
$proto33["m_columns"][] = "UsuarioSolicitante";
$proto33["m_columns"][] = "DepartamentoSolicitar";
$proto33["m_columns"][] = "Asunto";
$proto33["m_columns"][] = "DescripcionAmplia";
$proto33["m_columns"][] = "FechaSolicitud";
$proto33["m_columns"][] = "FechaInicio";
$proto33["m_columns"][] = "UsuarioInicio";
$proto33["m_columns"][] = "FechaFinal";
$proto33["m_columns"][] = "Observaciones";
$proto33["m_columns"][] = "Evaluacion";
$proto33["m_columns"][] = "Estado";
$proto33["m_columns"][] = "FechaAtencion";
$proto33["m_columns"][] = "FechaAtencionFinal";
$proto33["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tik_interno";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Pendientes por Departamento";
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
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "zusuarios";
$proto37["m_srcTableName"] = "Pendientes por Departamento";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Usuario";
$proto37["m_columns"][] = "Clave";
$proto37["m_columns"][] = "Nombre";
$proto37["m_columns"][] = "CodigoDepto";
$proto37["m_columns"][] = "Codigo_Estructura";
$proto37["m_columns"][] = "Area";
$proto37["m_columns"][] = "Puesto";
$proto37["m_columns"][] = "Correo";
$proto37["m_columns"][] = "Telefono";
$proto37["m_columns"][] = "FechaInicio";
$proto37["m_columns"][] = "FechaFinal";
$proto37["m_columns"][] = "Estado";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Pendientes por Departamento";
$proto38=array();
$proto38["m_sql"] = "tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_RIGHTJOIN";
			$proto41=array();
$proto41["m_strName"] = "zdepartamentos";
$proto41["m_srcTableName"] = "Pendientes por Departamento";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "CodigoDepto";
$proto41["m_columns"][] = "Descripcion";
$proto41["m_columns"][] = "Programa";
$proto41["m_columns"][] = "Actividad";
$proto41["m_columns"][] = "Proceso";
$proto41["m_columns"][] = "Nomenclatura";
$proto41["m_columns"][] = "Usuario";
$proto41["m_columns"][] = "FechaSis";
$proto41["m_columns"][] = "Tipo";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Pendientes por Departamento";
$proto42=array();
$proto42["m_sql"] = "zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= zusuarios.CodigoDepto";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Pendientes por Departamento"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Pendientes por Departamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pendientes_por_departamento = createSqlQuery_pendientes_por_departamento();


	
		;

													

$tdatapendientes_por_departamento[".sqlquery"] = $queryData_pendientes_por_departamento;



include_once(getabspath("include/pendientes_por_departamento_events.php"));
$tableEvents["Pendientes por Departamento"] = new eventclass_pendientes_por_departamento;
$tdatapendientes_por_departamento[".hasEvents"] = true;

?>