<?php
$tdatagr_fico_de_asistencias = array();
$tdatagr_fico_de_asistencias[".searchableFields"] = array();
$tdatagr_fico_de_asistencias[".ShortName"] = "gr_fico_de_asistencias";
$tdatagr_fico_de_asistencias[".OwnerID"] = "";
$tdatagr_fico_de_asistencias[".OriginalTable"] = "tik_interno";


$tdatagr_fico_de_asistencias[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatagr_fico_de_asistencias[".originalPagesByType"] = $tdatagr_fico_de_asistencias[".pagesByType"];
$tdatagr_fico_de_asistencias[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatagr_fico_de_asistencias[".originalPages"] = $tdatagr_fico_de_asistencias[".pages"];
$tdatagr_fico_de_asistencias[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatagr_fico_de_asistencias[".originalDefaultPages"] = $tdatagr_fico_de_asistencias[".defaultPages"];

//	field labels
$fieldLabelsgr_fico_de_asistencias = array();
$fieldToolTipsgr_fico_de_asistencias = array();
$pageTitlesgr_fico_de_asistencias = array();
$placeHoldersgr_fico_de_asistencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgr_fico_de_asistencias["Spanish"] = array();
	$fieldToolTipsgr_fico_de_asistencias["Spanish"] = array();
	$placeHoldersgr_fico_de_asistencias["Spanish"] = array();
	$pageTitlesgr_fico_de_asistencias["Spanish"] = array();
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["TipoSolicitud"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "Departamento Solicitar";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["FechaSolicitud"] = "Fecha Solicitud";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["FechaSolicitud"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["FechaSolicitud"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["Evaluacion"] = "Evaluacion";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["Evaluacion"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["Evaluacion"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["Estado"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["Estado"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["Descripcion"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["Descripcion"] = "";
	$fieldLabelsgr_fico_de_asistencias["Spanish"]["Valoracion"] = "Valoracion";
	$fieldToolTipsgr_fico_de_asistencias["Spanish"]["Valoracion"] = "";
	$placeHoldersgr_fico_de_asistencias["Spanish"]["Valoracion"] = "";
	if (count($fieldToolTipsgr_fico_de_asistencias["Spanish"]))
		$tdatagr_fico_de_asistencias[".isUseToolTips"] = true;
}


	$tdatagr_fico_de_asistencias[".NCSearch"] = true;

	$tdatagr_fico_de_asistencias[".ChartRefreshTime"] = 60;


$tdatagr_fico_de_asistencias[".shortTableName"] = "gr_fico_de_asistencias";
$tdatagr_fico_de_asistencias[".nSecOptions"] = 0;

$tdatagr_fico_de_asistencias[".mainTableOwnerID"] = "";
$tdatagr_fico_de_asistencias[".entityType"] = 3;
$tdatagr_fico_de_asistencias[".connId"] = "mpc_at_localhost";


$tdatagr_fico_de_asistencias[".strOriginalTableName"] = "tik_interno";

	



$tdatagr_fico_de_asistencias[".showAddInPopup"] = false;

$tdatagr_fico_de_asistencias[".showEditInPopup"] = false;

$tdatagr_fico_de_asistencias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagr_fico_de_asistencias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagr_fico_de_asistencias[".listAjax"] = false;
//	temporary
//$tdatagr_fico_de_asistencias[".listAjax"] = false;

	$tdatagr_fico_de_asistencias[".audit"] = false;

	$tdatagr_fico_de_asistencias[".locking"] = false;


$pages = $tdatagr_fico_de_asistencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagr_fico_de_asistencias[".edit"] = true;
	$tdatagr_fico_de_asistencias[".afterEditAction"] = 0;
	$tdatagr_fico_de_asistencias[".closePopupAfterEdit"] = 1;
	$tdatagr_fico_de_asistencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagr_fico_de_asistencias[".add"] = true;
$tdatagr_fico_de_asistencias[".afterAddAction"] = 0;
$tdatagr_fico_de_asistencias[".closePopupAfterAdd"] = 1;
$tdatagr_fico_de_asistencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagr_fico_de_asistencias[".list"] = true;
}



$tdatagr_fico_de_asistencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagr_fico_de_asistencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagr_fico_de_asistencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagr_fico_de_asistencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagr_fico_de_asistencias[".printFriendly"] = true;
}



$tdatagr_fico_de_asistencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagr_fico_de_asistencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagr_fico_de_asistencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagr_fico_de_asistencias[".isUseAjaxSuggest"] = true;




																								

$tdatagr_fico_de_asistencias[".ajaxCodeSnippetAdded"] = false;

$tdatagr_fico_de_asistencias[".buttonsAdded"] = false;

$tdatagr_fico_de_asistencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagr_fico_de_asistencias[".isUseTimeForSearch"] = false;


$tdatagr_fico_de_asistencias[".badgeColor"] = "4682B4";


$tdatagr_fico_de_asistencias[".allSearchFields"] = array();
$tdatagr_fico_de_asistencias[".filterFields"] = array();
$tdatagr_fico_de_asistencias[".requiredSearchFields"] = array();

$tdatagr_fico_de_asistencias[".googleLikeFields"] = array();
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "Descripcion";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "TipoSolicitud";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "Evaluacion";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "Valoracion";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "FechaSolicitud";
$tdatagr_fico_de_asistencias[".googleLikeFields"][] = "Estado";



$tdatagr_fico_de_asistencias[".tableType"] = "chart";

$tdatagr_fico_de_asistencias[".printerPageOrientation"] = 0;
$tdatagr_fico_de_asistencias[".nPrinterPageScale"] = 100;

$tdatagr_fico_de_asistencias[".nPrinterSplitRecords"] = 40;

$tdatagr_fico_de_asistencias[".geocodingEnabled"] = false;



// chart settings
$tdatagr_fico_de_asistencias[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "ORDER BY tik_interno.DepartamentoSolicitar, tik_interno.TipoSolicitud";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagr_fico_de_asistencias[".strOrderBy"] = $tstrOrderBy;

$tdatagr_fico_de_asistencias[".orderindexes"] = array();
	$tdatagr_fico_de_asistencias[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "tik_interno.DepartamentoSolicitar");

	$tdatagr_fico_de_asistencias[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tik_interno.TipoSolicitud");



$tdatagr_fico_de_asistencias[".sqlHead"] = "SELECT tik_interno.DepartamentoSolicitar,  zdepartamentos.Descripcion,  tik_interno.TipoSolicitud,  tik_interno.Evaluacion,  tik_satisfaccion.Descripcion AS Valoracion,  tik_interno.FechaSolicitud,  tik_interno.Estado";
$tdatagr_fico_de_asistencias[".sqlFrom"] = "FROM tik_interno  INNER JOIN zdepartamentos ON tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto  INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$tdatagr_fico_de_asistencias[".sqlWhereExpr"] = "(tik_interno.Estado = 'Evaluado')";
$tdatagr_fico_de_asistencias[".sqlTail"] = "";

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
$tdatagr_fico_de_asistencias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagr_fico_de_asistencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagr_fico_de_asistencias[".arrGroupsPerPage"] = $arrGPP;

$tdatagr_fico_de_asistencias[".highlightSearchResults"] = true;

$tableKeysgr_fico_de_asistencias = array();
$tdatagr_fico_de_asistencias[".Keys"] = $tableKeysgr_fico_de_asistencias;


$tdatagr_fico_de_asistencias[".hideMobileList"] = array();




//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","DepartamentoSolicitar");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "DepartamentoSolicitar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.DepartamentoSolicitar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["DepartamentoSolicitar"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "DepartamentoSolicitar";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zdepartamentos.Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["Descripcion"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "Descripcion";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","TipoSolicitud");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "TipoSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.TipoSolicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["TipoSolicitud"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "TipoSolicitud";
//	Evaluacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Evaluacion";
	$fdata["GoodName"] = "Evaluacion";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","Evaluacion");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Evaluacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Evaluacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["Evaluacion"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "Evaluacion";
//	Valoracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valoracion";
	$fdata["GoodName"] = "Valoracion";
	$fdata["ownerTable"] = "tik_satisfaccion";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","Valoracion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_satisfaccion.Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["Valoracion"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "Valoracion";
//	FechaSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FechaSolicitud";
	$fdata["GoodName"] = "FechaSolicitud";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","FechaSolicitud");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaSolicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.FechaSolicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["FechaSolicitud"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "FechaSolicitud";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_interno";
	$fdata["Label"] = GetFieldLabel("Gr_fico_de_Asistencias","Estado");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tik_interno.Estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatagr_fico_de_asistencias["Estado"] = $fdata;
		$tdatagr_fico_de_asistencias[".searchableFields"][] = "Estado";

$tdatagr_fico_de_asistencias[".chartLabelField"] = "Valoracion";
$tdatagr_fico_de_asistencias[".chartSeries"] = array();
$tdatagr_fico_de_asistencias[".chartSeries"][] = array( 
	"field" => "Evaluacion",
	"total" => ""
);
	$tdatagr_fico_de_asistencias[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Gráfico de Asistencias</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="0">
			<attr value="name">Evaluacion</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="1">
		<attr value="name">Valoracion</attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="head">'.xmlencode("Gráfico de Asistencias").'</attr>
<attr value="foot">'.xmlencode("Gráfico de Asistencias realizadas por Departamento").'</attr>
<attr value="y_axis_label">'.xmlencode("TipoSolicitud").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">60</attr>';
$tdatagr_fico_de_asistencias[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="0">
		<attr value="name">DepartamentoSolicitar</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","DepartamentoSolicitar")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="1">
		<attr value="name">Descripcion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","Descripcion")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="2">
		<attr value="name">TipoSolicitud</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","TipoSolicitud")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="3">
		<attr value="name">Evaluacion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","Evaluacion")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="4">
		<attr value="name">Valoracion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","Valoracion")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="5">
		<attr value="name">FechaSolicitud</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","FechaSolicitud")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagr_fico_de_asistencias[".chartXml"] .= '<attr value="6">
		<attr value="name">Estado</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Gr_fico_de_Asistencias","Estado")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagr_fico_de_asistencias[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Gráfico de Asistencias</attr>
<attr value="short_table_name">gr_fico_de_asistencias</attr>
</attr>

</chart>';

$tables_data["Gráfico de Asistencias"]=&$tdatagr_fico_de_asistencias;
$field_labels["Gr_fico_de_Asistencias"] = &$fieldLabelsgr_fico_de_asistencias;
$fieldToolTips["Gr_fico_de_Asistencias"] = &$fieldToolTipsgr_fico_de_asistencias;
$placeHolders["Gr_fico_de_Asistencias"] = &$placeHoldersgr_fico_de_asistencias;
$page_titles["Gr_fico_de_Asistencias"] = &$pageTitlesgr_fico_de_asistencias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gráfico de Asistencias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Gráfico de Asistencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gr_fico_de_asistencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tik_interno.DepartamentoSolicitar,  zdepartamentos.Descripcion,  tik_interno.TipoSolicitud,  tik_interno.Evaluacion,  tik_satisfaccion.Descripcion AS Valoracion,  tik_interno.FechaSolicitud,  tik_interno.Estado";
$proto0["m_strFrom"] = "FROM tik_interno  INNER JOIN zdepartamentos ON tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto  INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
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
	"m_srcTableName" => "Gráfico de Asistencias"
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
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto6["m_sql"] = "tik_interno.DepartamentoSolicitar";
$proto6["m_srcTableName"] = "Gráfico de Asistencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto8["m_sql"] = "zdepartamentos.Descripcion";
$proto8["m_srcTableName"] = "Gráfico de Asistencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto10["m_sql"] = "tik_interno.TipoSolicitud";
$proto10["m_srcTableName"] = "Gráfico de Asistencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto12["m_sql"] = "tik_interno.Evaluacion";
$proto12["m_srcTableName"] = "Gráfico de Asistencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_satisfaccion",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto14["m_sql"] = "tik_satisfaccion.Descripcion";
$proto14["m_srcTableName"] = "Gráfico de Asistencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Valoracion";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto16["m_sql"] = "tik_interno.FechaSolicitud";
$proto16["m_srcTableName"] = "Gráfico de Asistencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto18["m_sql"] = "tik_interno.Estado";
$proto18["m_srcTableName"] = "Gráfico de Asistencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tik_interno";
$proto21["m_srcTableName"] = "Gráfico de Asistencias";
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
$proto20["m_srcTableName"] = "Gráfico de Asistencias";
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
$proto25["m_srcTableName"] = "Gráfico de Asistencias";
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
$proto24["m_srcTableName"] = "Gráfico de Asistencias";
$proto26=array();
$proto26["m_sql"] = "tik_interno.DepartamentoSolicitar = zdepartamentos.CodigoDepto";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
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
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "tik_satisfaccion";
$proto29["m_srcTableName"] = "Gráfico de Asistencias";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "Nivel";
$proto29["m_columns"][] = "Descripcion";
$proto29["m_columns"][] = "Usuario";
$proto29["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN tik_satisfaccion ON tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Gráfico de Asistencias";
$proto30=array();
$proto30["m_sql"] = "tik_interno.Evaluacion = tik_satisfaccion.Nivel";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Evaluacion",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= tik_satisfaccion.Nivel";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_interno",
	"m_srcTableName" => "Gráfico de Asistencias"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Gráfico de Asistencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gr_fico_de_asistencias = createSqlQuery_gr_fico_de_asistencias();


	
		;

							

$tdatagr_fico_de_asistencias[".sqlquery"] = $queryData_gr_fico_de_asistencias;



include_once(getabspath("include/gr_fico_de_asistencias_events.php"));
$tableEvents["Gráfico de Asistencias"] = new eventclass_gr_fico_de_asistencias;
$tdatagr_fico_de_asistencias[".hasEvents"] = true;

?>