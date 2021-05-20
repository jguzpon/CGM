<?php
$tdatacontrol_de_asistencias = array();
$tdatacontrol_de_asistencias[".searchableFields"] = array();
$tdatacontrol_de_asistencias[".ShortName"] = "control_de_asistencias";
$tdatacontrol_de_asistencias[".OwnerID"] = "";
$tdatacontrol_de_asistencias[".OriginalTable"] = "tik_interno";


$tdatacontrol_de_asistencias[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacontrol_de_asistencias[".originalPagesByType"] = $tdatacontrol_de_asistencias[".pagesByType"];
$tdatacontrol_de_asistencias[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacontrol_de_asistencias[".originalPages"] = $tdatacontrol_de_asistencias[".pages"];
$tdatacontrol_de_asistencias[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacontrol_de_asistencias[".originalDefaultPages"] = $tdatacontrol_de_asistencias[".defaultPages"];

//	field labels
$fieldLabelscontrol_de_asistencias = array();
$fieldToolTipscontrol_de_asistencias = array();
$pageTitlescontrol_de_asistencias = array();
$placeHolderscontrol_de_asistencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrol_de_asistencias["Spanish"] = array();
	$fieldToolTipscontrol_de_asistencias["Spanish"] = array();
	$placeHolderscontrol_de_asistencias["Spanish"] = array();
	$pageTitlescontrol_de_asistencias["Spanish"] = array();
	$fieldLabelscontrol_de_asistencias["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["TipoSolicitud"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "Departamento Solicitar";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["FechaSolicitud"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["Evaluacion"] = "Evaluacion";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["Evaluacion"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["Evaluacion"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["Estado"] = "Estado";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["Estado"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["Estado"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["Descripcion"] = "Solicitado a";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["Descripcion"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["Descripcion"] = "";
	$fieldLabelscontrol_de_asistencias["Spanish"]["Valoracion"] = "Valoracion";
	$fieldToolTipscontrol_de_asistencias["Spanish"]["Valoracion"] = "";
	$placeHolderscontrol_de_asistencias["Spanish"]["Valoracion"] = "";
	if (count($fieldToolTipscontrol_de_asistencias["Spanish"]))
		$tdatacontrol_de_asistencias[".isUseToolTips"] = true;
}


	$tdatacontrol_de_asistencias[".NCSearch"] = true;



$tdatacontrol_de_asistencias[".shortTableName"] = "control_de_asistencias";
$tdatacontrol_de_asistencias[".nSecOptions"] = 0;

$tdatacontrol_de_asistencias[".mainTableOwnerID"] = "";
$tdatacontrol_de_asistencias[".entityType"] = 2;
$tdatacontrol_de_asistencias[".connId"] = "mpc_at_localhost";


$tdatacontrol_de_asistencias[".strOriginalTableName"] = "tik_interno";

	



$tdatacontrol_de_asistencias[".showAddInPopup"] = false;

$tdatacontrol_de_asistencias[".showEditInPopup"] = false;

$tdatacontrol_de_asistencias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrol_de_asistencias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrol_de_asistencias[".listAjax"] = false;
//	temporary
//$tdatacontrol_de_asistencias[".listAjax"] = false;

	$tdatacontrol_de_asistencias[".audit"] = false;

	$tdatacontrol_de_asistencias[".locking"] = false;


$pages = $tdatacontrol_de_asistencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrol_de_asistencias[".edit"] = true;
	$tdatacontrol_de_asistencias[".afterEditAction"] = 0;
	$tdatacontrol_de_asistencias[".closePopupAfterEdit"] = 1;
	$tdatacontrol_de_asistencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrol_de_asistencias[".add"] = true;
$tdatacontrol_de_asistencias[".afterAddAction"] = 0;
$tdatacontrol_de_asistencias[".closePopupAfterAdd"] = 1;
$tdatacontrol_de_asistencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrol_de_asistencias[".list"] = true;
}



$tdatacontrol_de_asistencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrol_de_asistencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrol_de_asistencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrol_de_asistencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrol_de_asistencias[".printFriendly"] = true;
}



$tdatacontrol_de_asistencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrol_de_asistencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrol_de_asistencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrol_de_asistencias[".isUseAjaxSuggest"] = true;




																		

$tdatacontrol_de_asistencias[".ajaxCodeSnippetAdded"] = false;

$tdatacontrol_de_asistencias[".buttonsAdded"] = false;

$tdatacontrol_de_asistencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrol_de_asistencias[".isUseTimeForSearch"] = false;


$tdatacontrol_de_asistencias[".badgeColor"] = "2F4F4F";


$tdatacontrol_de_asistencias[".allSearchFields"] = array();
$tdatacontrol_de_asistencias[".filterFields"] = array();
$tdatacontrol_de_asistencias[".requiredSearchFields"] = array();

$tdatacontrol_de_asistencias[".googleLikeFields"] = array();
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "Descripcion";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "TipoSolicitud";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "Evaluacion";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "Valoracion";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "FechaSolicitud";
$tdatacontrol_de_asistencias[".googleLikeFields"][] = "Estado";



$tdatacontrol_de_asistencias[".tableType"] = "report";

$tdatacontrol_de_asistencias[".printerPageOrientation"] = 0;
$tdatacontrol_de_asistencias[".nPrinterPageScale"] = 100;

$tdatacontrol_de_asistencias[".nPrinterSplitRecords"] = 40;

$tdatacontrol_de_asistencias[".geocodingEnabled"] = false;

//report settings
$tdatacontrol_de_asistencias[".printReportLayout"] = 2;

$tdatacontrol_de_asistencias[".reportPrintPartitionType"] = 1;
$tdatacontrol_de_asistencias[".reportPrintGroupsPerPage"] = 3;
$tdatacontrol_de_asistencias[".lowGroup"] = 1;



$tdatacontrol_de_asistencias[".reportGroupFields"] = true;
$tdatacontrol_de_asistencias[".pageSize"] = 5;
$tdatacontrol_de_asistencias[".showGroupSummaryCount"] = true;
$reportGroupFieldsList = array();
$reportGroupFields = array();
	$reportGroupFieldsList []= "DepartamentoSolicitar";

	$rgroupField = array();
	$rgroupField['strGroupField'] = "DepartamentoSolicitar";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdatacontrol_de_asistencias[".reportGroupFieldsData"] = $reportGroupFields;
$tdatacontrol_de_asistencias[".reportGroupFieldsList"] = $reportGroupFieldsList;





$tdatacontrol_de_asistencias[".reportGlobalSummary"] = true;

$tdatacontrol_de_asistencias[".repShowDet"] = true;

$tdatacontrol_de_asistencias[".reportLayout"] = 2;

//end of report settings






$tdatacontrol_de_asistencias[".noRecordsFirstPage"] = true;




$tstrOrderBy = "ORDER BY tik_interno.DepartamentoSolicitar, tik_interno.TipoSolicitud";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrol_de_asistencias[".strOrderBy"] = $tstrOrderBy;

$tdatacontrol_de_asistencias[".orderindexes"] = array();
	$tdatacontrol_de_asistencias[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "tik_interno.DepartamentoSolicitar");

	$tdatacontrol_de_asistencias[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tik_interno.TipoSolicitud");



$tdatacontrol_de_asistencias[".sqlHead"] = "SELECT tik_interno.DepartamentoSolicitar,  zdepartamentos.Descripcion,  tik_interno.TipoSolicitud,  tik_interno.Evaluacion,  tik_satisfaccion.Descripcion AS Valoracion,  tik_interno.FechaSolicitud,  tik_interno.Estado";
$tdatacontrol_de_asistencias[".sqlFrom"] = "FROM tik_interno  INNER JOIN zdepartamentos ON tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto  LEFT OUTER JOIN zusuarios ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto  INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$tdatacontrol_de_asistencias[".sqlWhereExpr"] = "(tik_interno.Estado = 'Evaluado')";
$tdatacontrol_de_asistencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrol_de_asistencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrol_de_asistencias[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrol_de_asistencias[".highlightSearchResults"] = true;

$tableKeyscontrol_de_asistencias = array();
$tdatacontrol_de_asistencias[".Keys"] = $tableKeyscontrol_de_asistencias;


$tdatacontrol_de_asistencias[".hideMobileList"] = array();




//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","DepartamentoSolicitar");
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


	$tdatacontrol_de_asistencias["DepartamentoSolicitar"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "DepartamentoSolicitar";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","Descripcion");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zdepartamentos.Descripcion";

	
	
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


	$tdatacontrol_de_asistencias["Descripcion"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "Descripcion";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","TipoSolicitud");
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


	$tdatacontrol_de_asistencias["TipoSolicitud"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "TipoSolicitud";
//	Evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Evaluacion";
	$fdata["GoodName"] = "Evaluacion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","Evaluacion");
	$fdata["FieldType"] = 2;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Evaluacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Evaluacion";

	
	
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


	$tdatacontrol_de_asistencias["Evaluacion"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "Evaluacion";
//	Valoracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valoracion";
	$fdata["GoodName"] = "Valoracion";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","Valoracion");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_satisfaccion.Descripcion";

	
	
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


	$tdatacontrol_de_asistencias["Valoracion"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "Valoracion";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","FechaSolicitud");
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
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


	$tdatacontrol_de_asistencias["FechaSolicitud"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "FechaSolicitud";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Control_de_Asistencias","Estado");
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


	$tdatacontrol_de_asistencias["Estado"] = $fdata;
		$tdatacontrol_de_asistencias[".searchableFields"][] = "Estado";


$tables_data["Control de Asistencias"]=&$tdatacontrol_de_asistencias;
$field_labels["Control_de_Asistencias"] = &$fieldLabelscontrol_de_asistencias;
$fieldToolTips["Control_de_Asistencias"] = &$fieldToolTipscontrol_de_asistencias;
$placeHolders["Control_de_Asistencias"] = &$placeHolderscontrol_de_asistencias;
$page_titles["Control_de_Asistencias"] = &$pageTitlescontrol_de_asistencias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Control de Asistencias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Control de Asistencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_control_de_asistencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tik_interno.DepartamentoSolicitar,  zdepartamentos.Descripcion,  tik_interno.TipoSolicitud,  tik_interno.Evaluacion,  tik_satisfaccion.Descripcion AS Valoracion,  tik_interno.FechaSolicitud,  tik_interno.Estado";
$proto0["m_strFrom"] = "FROM tik_interno  INNER JOIN zdepartamentos ON tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto  LEFT OUTER JOIN zusuarios ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto  INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$proto0["m_strWhere"] = "(tik_interno.Estado = 'Evaluado')";
$proto0["m_strOrderBy"] = "ORDER BY tik_interno.DepartamentoSolicitar, tik_interno.TipoSolicitud";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tik_interno.Estado = 'Evaluado'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'Evaluado'";
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
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto6["m_sql"] = "tik_interno.DepartamentoSolicitar";
$proto6["m_srcTableName"] = "Control de Asistencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "Control de Asistencias"
));

$proto8["m_sql"] = "zdepartamentos.Descripcion";
$proto8["m_srcTableName"] = "Control de Asistencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto10["m_sql"] = "tik_interno.TipoSolicitud";
$proto10["m_srcTableName"] = "Control de Asistencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto12["m_sql"] = "tik_interno.Evaluacion";
$proto12["m_srcTableName"] = "Control de Asistencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "Control de Asistencias"
));

$proto14["m_sql"] = "tik_satisfaccion.Descripcion";
$proto14["m_srcTableName"] = "Control de Asistencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Valoracion";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto16["m_sql"] = "tik_interno.FechaSolicitud";
$proto16["m_srcTableName"] = "Control de Asistencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto18["m_sql"] = "tik_interno.Estado";
$proto18["m_srcTableName"] = "Control de Asistencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tik_interno";
$proto21["m_srcTableName"] = "Control de Asistencias";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Solicitud";
$proto21["m_columns"][] = "Documento";
$proto21["m_columns"][] = "TipoSolicitud";
$proto21["m_columns"][] = "DepartamentoSolicitante";
$proto21["m_columns"][] = "UsuarioSolicitante";
$proto21["m_columns"][] = "DepartamentoSolicitar";
$proto21["m_columns"][] = "Asunto";
$proto21["m_columns"][] = "DescripcionAmplia";
$proto21["m_columns"][] = "FechaSolicitud";
$proto21["m_columns"][] = "FechaInicio";
$proto21["m_columns"][] = "UsuarioInicio";
$proto21["m_columns"][] = "FechaFinal";
$proto21["m_columns"][] = "Observaciones";
$proto21["m_columns"][] = "Evaluacion";
$proto21["m_columns"][] = "Estado";
$proto21["m_columns"][] = "FechaAtencion";
$proto21["m_columns"][] = "FechaAtencionFinal";
$proto21["m_columns"][] = "ProcesoAtencion";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tik_interno";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Control de Asistencias";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "zdepartamentos";
$proto25["m_srcTableName"] = "Control de Asistencias";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "CodigoDepto";
$proto25["m_columns"][] = "Descripcion";
$proto25["m_columns"][] = "Programa";
$proto25["m_columns"][] = "Actividad";
$proto25["m_columns"][] = "Proceso";
$proto25["m_columns"][] = "Nomenclatura";
$proto25["m_columns"][] = "Usuario";
$proto25["m_columns"][] = "FechaSis";
$proto25["m_columns"][] = "Tipo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN zdepartamentos ON tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Control de Asistencias";
$proto26=array();
$proto26["m_sql"] = "tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= zdepartamentos.CodigoDepto";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "zusuarios";
$proto29["m_srcTableName"] = "Control de Asistencias";
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
$proto28["m_sql"] = "LEFT OUTER JOIN zusuarios ON zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Control de Asistencias";
$proto30=array();
$proto30["m_sql"] = "zdepartamentos.CodigoDepto = zusuarios.CodigoDepto";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "Control de Asistencias"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= zusuarios.CodigoDepto";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "tik_satisfaccion";
$proto33["m_srcTableName"] = "Control de Asistencias";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Nivel";
$proto33["m_columns"][] = "Descripcion";
$proto33["m_columns"][] = "Usuario";
$proto33["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Control de Asistencias";
$proto34=array();
$proto34["m_sql"] = "tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= tik_satisfaccion.Nivel";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Control de Asistencias"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Control de Asistencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_control_de_asistencias = createSqlQuery_control_de_asistencias();


	
		;

							

$tdatacontrol_de_asistencias[".sqlquery"] = $queryData_control_de_asistencias;



include_once(getabspath("include/control_de_asistencias_events.php"));
$tableEvents["Control de Asistencias"] = new eventclass_control_de_asistencias;
$tdatacontrol_de_asistencias[".hasEvents"] = true;

?>