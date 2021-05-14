<?php
$tdataasistencias_realizadas_por_fecha = array();
$tdataasistencias_realizadas_por_fecha[".searchableFields"] = array();
$tdataasistencias_realizadas_por_fecha[".ShortName"] = "asistencias_realizadas_por_fecha";
$tdataasistencias_realizadas_por_fecha[".OwnerID"] = "";
$tdataasistencias_realizadas_por_fecha[".OriginalTable"] = "tik_interno";


$tdataasistencias_realizadas_por_fecha[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataasistencias_realizadas_por_fecha[".originalPagesByType"] = $tdataasistencias_realizadas_por_fecha[".pagesByType"];
$tdataasistencias_realizadas_por_fecha[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataasistencias_realizadas_por_fecha[".originalPages"] = $tdataasistencias_realizadas_por_fecha[".pages"];
$tdataasistencias_realizadas_por_fecha[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataasistencias_realizadas_por_fecha[".originalDefaultPages"] = $tdataasistencias_realizadas_por_fecha[".defaultPages"];

//	field labels
$fieldLabelsasistencias_realizadas_por_fecha = array();
$fieldToolTipsasistencias_realizadas_por_fecha = array();
$pageTitlesasistencias_realizadas_por_fecha = array();
$placeHoldersasistencias_realizadas_por_fecha = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"] = array();
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"] = array();
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"] = array();
	$pageTitlesasistencias_realizadas_por_fecha["Spanish"] = array();
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["Solicitud"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["Solicitud"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["TipoSolicitud"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitante"] = "Departamento Solicitante";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitante"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitante"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["UsuarioSolicitante"] = "Usuario Solicitante";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["UsuarioSolicitante"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["UsuarioSolicitante"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitar"] = "Departamento Solicitar";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["Asunto"] = "Asunto";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["Asunto"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["Asunto"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["Estado"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["Estado"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["Nombre"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["Nombre"] = "";
	$fieldLabelsasistencias_realizadas_por_fecha["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]["FechaInicio"] = "";
	$placeHoldersasistencias_realizadas_por_fecha["Spanish"]["FechaInicio"] = "";
	if (count($fieldToolTipsasistencias_realizadas_por_fecha["Spanish"]))
		$tdataasistencias_realizadas_por_fecha[".isUseToolTips"] = true;
}


	$tdataasistencias_realizadas_por_fecha[".NCSearch"] = true;



$tdataasistencias_realizadas_por_fecha[".shortTableName"] = "asistencias_realizadas_por_fecha";
$tdataasistencias_realizadas_por_fecha[".nSecOptions"] = 0;

$tdataasistencias_realizadas_por_fecha[".mainTableOwnerID"] = "";
$tdataasistencias_realizadas_por_fecha[".entityType"] = 2;
$tdataasistencias_realizadas_por_fecha[".connId"] = "mpc_at_localhost";


$tdataasistencias_realizadas_por_fecha[".strOriginalTableName"] = "tik_interno";

	



$tdataasistencias_realizadas_por_fecha[".showAddInPopup"] = false;

$tdataasistencias_realizadas_por_fecha[".showEditInPopup"] = false;

$tdataasistencias_realizadas_por_fecha[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataasistencias_realizadas_por_fecha[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataasistencias_realizadas_por_fecha[".listAjax"] = false;
//	temporary
//$tdataasistencias_realizadas_por_fecha[".listAjax"] = false;

	$tdataasistencias_realizadas_por_fecha[".audit"] = false;

	$tdataasistencias_realizadas_por_fecha[".locking"] = false;


$pages = $tdataasistencias_realizadas_por_fecha[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataasistencias_realizadas_por_fecha[".edit"] = true;
	$tdataasistencias_realizadas_por_fecha[".afterEditAction"] = 0;
	$tdataasistencias_realizadas_por_fecha[".closePopupAfterEdit"] = 1;
	$tdataasistencias_realizadas_por_fecha[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataasistencias_realizadas_por_fecha[".add"] = true;
$tdataasistencias_realizadas_por_fecha[".afterAddAction"] = 0;
$tdataasistencias_realizadas_por_fecha[".closePopupAfterAdd"] = 1;
$tdataasistencias_realizadas_por_fecha[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataasistencias_realizadas_por_fecha[".list"] = true;
}



$tdataasistencias_realizadas_por_fecha[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataasistencias_realizadas_por_fecha[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataasistencias_realizadas_por_fecha[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataasistencias_realizadas_por_fecha[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataasistencias_realizadas_por_fecha[".printFriendly"] = true;
}



$tdataasistencias_realizadas_por_fecha[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataasistencias_realizadas_por_fecha[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataasistencias_realizadas_por_fecha[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataasistencias_realizadas_por_fecha[".isUseAjaxSuggest"] = true;




																								

$tdataasistencias_realizadas_por_fecha[".ajaxCodeSnippetAdded"] = false;

$tdataasistencias_realizadas_por_fecha[".buttonsAdded"] = false;

$tdataasistencias_realizadas_por_fecha[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasistencias_realizadas_por_fecha[".isUseTimeForSearch"] = false;


$tdataasistencias_realizadas_por_fecha[".badgeColor"] = "2F4F4F";


$tdataasistencias_realizadas_por_fecha[".allSearchFields"] = array();
$tdataasistencias_realizadas_por_fecha[".filterFields"] = array();
$tdataasistencias_realizadas_por_fecha[".requiredSearchFields"] = array();

$tdataasistencias_realizadas_por_fecha[".googleLikeFields"] = array();
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "Solicitud";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "TipoSolicitud";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "DepartamentoSolicitante";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "UsuarioSolicitante";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "Nombre";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "Asunto";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "FechaInicio";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "Estado";
$tdataasistencias_realizadas_por_fecha[".googleLikeFields"][] = "DepartamentoSolicitar";



$tdataasistencias_realizadas_por_fecha[".tableType"] = "report";

$tdataasistencias_realizadas_por_fecha[".printerPageOrientation"] = 0;
$tdataasistencias_realizadas_por_fecha[".nPrinterPageScale"] = 100;

$tdataasistencias_realizadas_por_fecha[".nPrinterSplitRecords"] = 40;

$tdataasistencias_realizadas_por_fecha[".geocodingEnabled"] = false;

//report settings
$tdataasistencias_realizadas_por_fecha[".printReportLayout"] = 6;

$tdataasistencias_realizadas_por_fecha[".reportPrintPartitionType"] = 1;
$tdataasistencias_realizadas_por_fecha[".reportPrintGroupsPerPage"] = 40;
$tdataasistencias_realizadas_por_fecha[".lowGroup"] = 0;



$tdataasistencias_realizadas_por_fecha[".pageSize"] = 20;





$tdataasistencias_realizadas_por_fecha[".reportGlobalSummary"] = true;

$tdataasistencias_realizadas_por_fecha[".repShowDet"] = true;

$tdataasistencias_realizadas_por_fecha[".reportLayout"] = 6;

//end of report settings






$tdataasistencias_realizadas_por_fecha[".noRecordsFirstPage"] = true;




$tstrOrderBy = "ORDER BY tik_interno.Solicitud DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataasistencias_realizadas_por_fecha[".strOrderBy"] = $tstrOrderBy;

$tdataasistencias_realizadas_por_fecha[".orderindexes"] = array();
	$tdataasistencias_realizadas_por_fecha[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "tik_interno.Solicitud");



$tdataasistencias_realizadas_por_fecha[".sqlHead"] = "SELECT tik_interno.Solicitud, tik_interno.TipoSolicitud, tik_interno.DepartamentoSolicitante, tik_interno.UsuarioSolicitante, zusuarios.Nombre, tik_interno.Asunto, tik_interno.FechaInicio, tik_interno.Estado, tik_interno.DepartamentoSolicitar";
$tdataasistencias_realizadas_por_fecha[".sqlFrom"] = "FROM tik_interno INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$tdataasistencias_realizadas_por_fecha[".sqlWhereExpr"] = "(tik_interno.Estado ='Evaluado')";
$tdataasistencias_realizadas_por_fecha[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasistencias_realizadas_por_fecha[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasistencias_realizadas_por_fecha[".arrGroupsPerPage"] = $arrGPP;

$tdataasistencias_realizadas_por_fecha[".highlightSearchResults"] = true;

$tableKeysasistencias_realizadas_por_fecha = array();
$tableKeysasistencias_realizadas_por_fecha[] = "Solicitud";
$tdataasistencias_realizadas_por_fecha[".Keys"] = $tableKeysasistencias_realizadas_por_fecha;


$tdataasistencias_realizadas_por_fecha[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","Solicitud");
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


	$tdataasistencias_realizadas_por_fecha["Solicitud"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "Solicitud";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","TipoSolicitud");
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


	$tdataasistencias_realizadas_por_fecha["TipoSolicitud"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "TipoSolicitud";
//	DepartamentoSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DepartamentoSolicitante";
	$fdata["GoodName"] = "DepartamentoSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","DepartamentoSolicitante");
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


	$tdataasistencias_realizadas_por_fecha["DepartamentoSolicitante"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "DepartamentoSolicitante";
//	UsuarioSolicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UsuarioSolicitante";
	$fdata["GoodName"] = "UsuarioSolicitante";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","UsuarioSolicitante");
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


	$tdataasistencias_realizadas_por_fecha["UsuarioSolicitante"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "UsuarioSolicitante";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","Nombre");
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


	$tdataasistencias_realizadas_por_fecha["Nombre"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "Nombre";
//	Asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Asunto";
	$fdata["GoodName"] = "Asunto";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","Asunto");
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


	$tdataasistencias_realizadas_por_fecha["Asunto"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "Asunto";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","FechaInicio");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "FechaInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.FechaInicio";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
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


	$tdataasistencias_realizadas_por_fecha["FechaInicio"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "FechaInicio";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","Estado");
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


	$tdataasistencias_realizadas_por_fecha["Estado"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "Estado";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Asistencias_Realizadas_por_Fecha","DepartamentoSolicitar");
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


	$tdataasistencias_realizadas_por_fecha["DepartamentoSolicitar"] = $fdata;
		$tdataasistencias_realizadas_por_fecha[".searchableFields"][] = "DepartamentoSolicitar";


$tables_data["Asistencias Realizadas por Fecha"]=&$tdataasistencias_realizadas_por_fecha;
$field_labels["Asistencias_Realizadas_por_Fecha"] = &$fieldLabelsasistencias_realizadas_por_fecha;
$fieldToolTips["Asistencias_Realizadas_por_Fecha"] = &$fieldToolTipsasistencias_realizadas_por_fecha;
$placeHolders["Asistencias_Realizadas_por_Fecha"] = &$placeHoldersasistencias_realizadas_por_fecha;
$page_titles["Asistencias_Realizadas_por_Fecha"] = &$pageTitlesasistencias_realizadas_por_fecha;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Asistencias Realizadas por Fecha"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Asistencias Realizadas por Fecha"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_asistencias_realizadas_por_fecha()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tik_interno.Solicitud, tik_interno.TipoSolicitud, tik_interno.DepartamentoSolicitante, tik_interno.UsuarioSolicitante, zusuarios.Nombre, tik_interno.Asunto, tik_interno.FechaInicio, tik_interno.Estado, tik_interno.DepartamentoSolicitar";
$proto0["m_strFrom"] = "FROM tik_interno INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto0["m_strWhere"] = "(tik_interno.Estado ='Evaluado')";
$proto0["m_strOrderBy"] = "ORDER BY tik_interno.Solicitud DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tik_interno.Estado ='Evaluado'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='Evaluado'";
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
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto6["m_sql"] = "tik_interno.Solicitud";
$proto6["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto8["m_sql"] = "tik_interno.TipoSolicitud";
$proto8["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto10["m_sql"] = "tik_interno.DepartamentoSolicitante";
$proto10["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto12["m_sql"] = "tik_interno.UsuarioSolicitante";
$proto12["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto14["m_sql"] = "zusuarios.Nombre";
$proto14["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Asunto",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto16["m_sql"] = "tik_interno.Asunto";
$proto16["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto18["m_sql"] = "tik_interno.FechaInicio";
$proto18["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto20["m_sql"] = "tik_interno.Estado";
$proto20["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto22["m_sql"] = "tik_interno.DepartamentoSolicitar";
$proto22["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tik_interno";
$proto25["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Solicitud";
$proto25["m_columns"][] = "Documento";
$proto25["m_columns"][] = "TipoSolicitud";
$proto25["m_columns"][] = "DepartamentoSolicitante";
$proto25["m_columns"][] = "UsuarioSolicitante";
$proto25["m_columns"][] = "DepartamentoSolicitar";
$proto25["m_columns"][] = "Asunto";
$proto25["m_columns"][] = "DescripcionAmplia";
$proto25["m_columns"][] = "FechaSolicitud";
$proto25["m_columns"][] = "FechaInicio";
$proto25["m_columns"][] = "UsuarioInicio";
$proto25["m_columns"][] = "FechaFinal";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "Evaluacion";
$proto25["m_columns"][] = "Estado";
$proto25["m_columns"][] = "FechaAtencion";
$proto25["m_columns"][] = "FechaAtencionFinal";
$proto25["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tik_interno";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "zusuarios";
$proto29["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "Usuario";
$proto29["m_columns"][] = "Clave";
$proto29["m_columns"][] = "Nombre";
$proto29["m_columns"][] = "CodigoDepto";
$proto29["m_columns"][] = "Codigo_Estructura";
$proto29["m_columns"][] = "Area";
$proto29["m_columns"][] = "Puesto";
$proto29["m_columns"][] = "Correo";
$proto29["m_columns"][] = "Telefono";
$proto29["m_columns"][] = "FechaInicio";
$proto29["m_columns"][] = "FechaFinal";
$proto29["m_columns"][] = "Estado";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN zusuarios ON tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto30=array();
$proto30["m_sql"] = "tik_interno.UsuarioSolicitante = zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UsuarioSolicitante",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= zusuarios.Usuario COLLATE UTF8_GENERAL_CI";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_RIGHTJOIN";
			$proto33=array();
$proto33["m_strName"] = "zdepartamentos";
$proto33["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "CodigoDepto";
$proto33["m_columns"][] = "Descripcion";
$proto33["m_columns"][] = "Programa";
$proto33["m_columns"][] = "Actividad";
$proto33["m_columns"][] = "Proceso";
$proto33["m_columns"][] = "Nomenclatura";
$proto33["m_columns"][] = "Usuario";
$proto33["m_columns"][] = "FechaSis";
$proto33["m_columns"][] = "Tipo";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "RIGHT OUTER JOIN zdepartamentos ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Asistencias Realizadas por Fecha";
$proto34=array();
$proto34["m_sql"] = "zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= zusuarios.CodigoDepto";
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
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Asistencias Realizadas por Fecha"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Asistencias Realizadas por Fecha";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asistencias_realizadas_por_fecha = createSqlQuery_asistencias_realizadas_por_fecha();


	
		;

									

$tdataasistencias_realizadas_por_fecha[".sqlquery"] = $queryData_asistencias_realizadas_por_fecha;



include_once(getabspath("include/asistencias_realizadas_por_fecha_events.php"));
$tableEvents["Asistencias Realizadas por Fecha"] = new eventclass_asistencias_realizadas_por_fecha;
$tdataasistencias_realizadas_por_fecha[".hasEvents"] = true;

?>