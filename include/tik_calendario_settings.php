<?php
$tdatatik_calendario = array();
$tdatatik_calendario[".searchableFields"] = array();
$tdatatik_calendario[".ShortName"] = "tik_calendario";
$tdatatik_calendario[".OwnerID"] = "DepartamentoProgramador";
$tdatatik_calendario[".OriginalTable"] = "tik_calendario";


$tdatatik_calendario[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_calendario[".originalPagesByType"] = $tdatatik_calendario[".pagesByType"];
$tdatatik_calendario[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_calendario[".originalPages"] = $tdatatik_calendario[".pages"];
$tdatatik_calendario[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_calendario[".originalDefaultPages"] = $tdatatik_calendario[".defaultPages"];

//	field labels
$fieldLabelstik_calendario = array();
$fieldToolTipstik_calendario = array();
$pageTitlestik_calendario = array();
$placeHolderstik_calendario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_calendario["Spanish"] = array();
	$fieldToolTipstik_calendario["Spanish"] = array();
	$placeHolderstik_calendario["Spanish"] = array();
	$pageTitlestik_calendario["Spanish"] = array();
	$fieldLabelstik_calendario["Spanish"]["Fecha"] = "Fecha Inicio";
	$fieldToolTipstik_calendario["Spanish"]["Fecha"] = "";
	$placeHolderstik_calendario["Spanish"]["Fecha"] = "";
	$fieldLabelstik_calendario["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_calendario["Spanish"]["Descripcion"] = "";
	$placeHolderstik_calendario["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_calendario["Spanish"]["DescripcionAmplia"] = "Descripcion Amplia";
	$fieldToolTipstik_calendario["Spanish"]["DescripcionAmplia"] = "";
	$placeHolderstik_calendario["Spanish"]["DescripcionAmplia"] = "";
	$fieldLabelstik_calendario["Spanish"]["DepartamentoSolicitar"] = "Departamento Solicitar Actividad";
	$fieldToolTipstik_calendario["Spanish"]["DepartamentoSolicitar"] = "";
	$placeHolderstik_calendario["Spanish"]["DepartamentoSolicitar"] = "";
	$fieldLabelstik_calendario["Spanish"]["TipoActividad"] = "Tipo Actividad";
	$fieldToolTipstik_calendario["Spanish"]["TipoActividad"] = "";
	$placeHolderstik_calendario["Spanish"]["TipoActividad"] = "";
	$fieldLabelstik_calendario["Spanish"]["Estado"] = "Estado";
	$fieldToolTipstik_calendario["Spanish"]["Estado"] = "";
	$placeHolderstik_calendario["Spanish"]["Estado"] = "";
	$fieldLabelstik_calendario["Spanish"]["Repetir"] = "Repetir (Veces)";
	$fieldToolTipstik_calendario["Spanish"]["Repetir"] = "";
	$placeHolderstik_calendario["Spanish"]["Repetir"] = "";
	$fieldLabelstik_calendario["Spanish"]["TipoRepeticion"] = "Tipo Repeticion";
	$fieldToolTipstik_calendario["Spanish"]["TipoRepeticion"] = "";
	$placeHolderstik_calendario["Spanish"]["TipoRepeticion"] = "";
	$fieldLabelstik_calendario["Spanish"]["FechaVencimiento"] = "Fecha Vencimiento";
	$fieldToolTipstik_calendario["Spanish"]["FechaVencimiento"] = "";
	$placeHolderstik_calendario["Spanish"]["FechaVencimiento"] = "";
	$fieldLabelstik_calendario["Spanish"]["UsuarioProgramador"] = "Usuario Programador";
	$fieldToolTipstik_calendario["Spanish"]["UsuarioProgramador"] = "";
	$placeHolderstik_calendario["Spanish"]["UsuarioProgramador"] = "";
	$fieldLabelstik_calendario["Spanish"]["DepartamentoProgramador"] = "Departamento Programador";
	$fieldToolTipstik_calendario["Spanish"]["DepartamentoProgramador"] = "";
	$placeHolderstik_calendario["Spanish"]["DepartamentoProgramador"] = "";
	$fieldLabelstik_calendario["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_calendario["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_calendario["Spanish"]["FechaSistema"] = "";
	$fieldLabelstik_calendario["Spanish"]["AgregarTicket"] = "Agregar Ticket";
	$fieldToolTipstik_calendario["Spanish"]["AgregarTicket"] = "";
	$placeHolderstik_calendario["Spanish"]["AgregarTicket"] = "";
	$fieldLabelstik_calendario["Spanish"]["Contar"] = "Contar";
	$fieldToolTipstik_calendario["Spanish"]["Contar"] = "";
	$placeHolderstik_calendario["Spanish"]["Contar"] = "";
	$fieldLabelstik_calendario["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipstik_calendario["Spanish"]["TipoSolicitud"] = "";
	$placeHolderstik_calendario["Spanish"]["TipoSolicitud"] = "";
	if (count($fieldToolTipstik_calendario["Spanish"]))
		$tdatatik_calendario[".isUseToolTips"] = true;
}


	$tdatatik_calendario[".NCSearch"] = true;



$tdatatik_calendario[".shortTableName"] = "tik_calendario";
$tdatatik_calendario[".nSecOptions"] = 2;

$tdatatik_calendario[".mainTableOwnerID"] = "DepartamentoProgramador";
$tdatatik_calendario[".entityType"] = 0;
$tdatatik_calendario[".connId"] = "mpc_at_localhost";


$tdatatik_calendario[".strOriginalTableName"] = "tik_calendario";

	



$tdatatik_calendario[".showAddInPopup"] = false;

$tdatatik_calendario[".showEditInPopup"] = false;

$tdatatik_calendario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_calendario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_calendario[".listAjax"] = false;
//	temporary
//$tdatatik_calendario[".listAjax"] = false;

	$tdatatik_calendario[".audit"] = true;

	$tdatatik_calendario[".locking"] = false;


$pages = $tdatatik_calendario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_calendario[".edit"] = true;
	$tdatatik_calendario[".afterEditAction"] = 0;
	$tdatatik_calendario[".closePopupAfterEdit"] = 1;
	$tdatatik_calendario[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_calendario[".add"] = true;
$tdatatik_calendario[".afterAddAction"] = 0;
$tdatatik_calendario[".closePopupAfterAdd"] = 1;
$tdatatik_calendario[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_calendario[".list"] = true;
}



$tdatatik_calendario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_calendario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_calendario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_calendario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_calendario[".printFriendly"] = true;
}



$tdatatik_calendario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_calendario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_calendario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_calendario[".isUseAjaxSuggest"] = true;

$tdatatik_calendario[".rowHighlite"] = true;



																		

$tdatatik_calendario[".ajaxCodeSnippetAdded"] = false;

$tdatatik_calendario[".buttonsAdded"] = false;

$tdatatik_calendario[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_calendario[".isUseTimeForSearch"] = false;


$tdatatik_calendario[".badgeColor"] = "5F9EA0";


$tdatatik_calendario[".allSearchFields"] = array();
$tdatatik_calendario[".filterFields"] = array();
$tdatatik_calendario[".requiredSearchFields"] = array();

$tdatatik_calendario[".googleLikeFields"] = array();
$tdatatik_calendario[".googleLikeFields"][] = "Fecha";
$tdatatik_calendario[".googleLikeFields"][] = "Descripcion";
$tdatatik_calendario[".googleLikeFields"][] = "DescripcionAmplia";
$tdatatik_calendario[".googleLikeFields"][] = "DepartamentoSolicitar";
$tdatatik_calendario[".googleLikeFields"][] = "TipoSolicitud";
$tdatatik_calendario[".googleLikeFields"][] = "Repetir";
$tdatatik_calendario[".googleLikeFields"][] = "Contar";
$tdatatik_calendario[".googleLikeFields"][] = "TipoRepeticion";
$tdatatik_calendario[".googleLikeFields"][] = "FechaVencimiento";
$tdatatik_calendario[".googleLikeFields"][] = "AgregarTicket";
$tdatatik_calendario[".googleLikeFields"][] = "TipoActividad";
$tdatatik_calendario[".googleLikeFields"][] = "Estado";
$tdatatik_calendario[".googleLikeFields"][] = "UsuarioProgramador";
$tdatatik_calendario[".googleLikeFields"][] = "DepartamentoProgramador";
$tdatatik_calendario[".googleLikeFields"][] = "FechaSistema";



$tdatatik_calendario[".tableType"] = "list";

$tdatatik_calendario[".printerPageOrientation"] = 0;
$tdatatik_calendario[".nPrinterPageScale"] = 100;

$tdatatik_calendario[".nPrinterSplitRecords"] = 40;

$tdatatik_calendario[".geocodingEnabled"] = false;










$tdatatik_calendario[".pageSize"] = 20;

$tdatatik_calendario[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Fecha DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_calendario[".strOrderBy"] = $tstrOrderBy;

$tdatatik_calendario[".orderindexes"] = array();
	$tdatatik_calendario[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "Fecha");



$tdatatik_calendario[".sqlHead"] = "SELECT Fecha, Descripcion, DescripcionAmplia, DepartamentoSolicitar, TipoSolicitud, Repetir, Contar, TipoRepeticion, FechaVencimiento, AgregarTicket, TipoActividad, Estado, UsuarioProgramador, DepartamentoProgramador, FechaSistema";
$tdatatik_calendario[".sqlFrom"] = "FROM tik_calendario";
$tdatatik_calendario[".sqlWhereExpr"] = "";
$tdatatik_calendario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_calendario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_calendario[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_calendario[".highlightSearchResults"] = true;

$tableKeystik_calendario = array();
$tableKeystik_calendario[] = "Fecha";
$tdatatik_calendario[".Keys"] = $tableKeystik_calendario;


$tdatatik_calendario[".hideMobileList"] = array();




//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","Fecha");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	$tdatatik_calendario["Fecha"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "Fecha";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","Descripcion");
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


	$tdatatik_calendario["Descripcion"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "Descripcion";
//	DescripcionAmplia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DescripcionAmplia";
	$fdata["GoodName"] = "DescripcionAmplia";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","DescripcionAmplia");
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


	$tdatatik_calendario["DescripcionAmplia"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "DescripcionAmplia";
//	DepartamentoSolicitar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DepartamentoSolicitar";
	$fdata["GoodName"] = "DepartamentoSolicitar";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","DepartamentoSolicitar");
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


	$tdatatik_calendario["DepartamentoSolicitar"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "DepartamentoSolicitar";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","TipoSolicitud");
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


	$tdatatik_calendario["TipoSolicitud"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "TipoSolicitud";
//	Repetir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Repetir";
	$fdata["GoodName"] = "Repetir";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","Repetir");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Repetir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Repetir";

	
	
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
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
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


	$tdatatik_calendario["Repetir"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "Repetir";
//	Contar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Contar";
	$fdata["GoodName"] = "Contar";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","Contar");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Contar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Contar";

	
	
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


	$tdatatik_calendario["Contar"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "Contar";
//	TipoRepeticion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TipoRepeticion";
	$fdata["GoodName"] = "TipoRepeticion";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","TipoRepeticion");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "TipoRepeticion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoRepeticion";

	
	
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
	$edata["LookupValues"][] = "Unica Vez";
	$edata["LookupValues"][] = "Dias";
	$edata["LookupValues"][] = "Semanas";
	$edata["LookupValues"][] = "Meses";

	
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


	$tdatatik_calendario["TipoRepeticion"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "TipoRepeticion";
//	FechaVencimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaVencimiento";
	$fdata["GoodName"] = "FechaVencimiento";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","FechaVencimiento");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaVencimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaVencimiento";

	
	
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

		$edata["ShowTime"] = true;

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


	$tdatatik_calendario["FechaVencimiento"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "FechaVencimiento";
//	AgregarTicket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AgregarTicket";
	$fdata["GoodName"] = "AgregarTicket";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","AgregarTicket");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "AgregarTicket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AgregarTicket";

	
	
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
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
	
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


	$tdatatik_calendario["AgregarTicket"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "AgregarTicket";
//	TipoActividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TipoActividad";
	$fdata["GoodName"] = "TipoActividad";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","TipoActividad");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "TipoActividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoActividad";

	
	
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
	$edata["LookupValues"][] = "Urgente";
	$edata["LookupValues"][] = "Normal";

	
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


	$tdatatik_calendario["TipoActividad"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "TipoActividad";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","Estado");
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


	$tdatatik_calendario["Estado"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "Estado";
//	UsuarioProgramador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UsuarioProgramador";
	$fdata["GoodName"] = "UsuarioProgramador";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","UsuarioProgramador");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UsuarioProgramador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UsuarioProgramador";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"DepartamentoProgramador", 'lookupF'=>"CodigoDepto");
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


	$tdatatik_calendario["UsuarioProgramador"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "UsuarioProgramador";
//	DepartamentoProgramador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DepartamentoProgramador";
	$fdata["GoodName"] = "DepartamentoProgramador";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","DepartamentoProgramador");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "DepartamentoProgramador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DepartamentoProgramador";

	
	
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


	$tdatatik_calendario["DepartamentoProgramador"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "DepartamentoProgramador";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_calendario";
	$fdata["Label"] = GetFieldLabel("tik_calendario","FechaSistema");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaSistema";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSistema";

	
	
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


	$tdatatik_calendario["FechaSistema"] = $fdata;
		$tdatatik_calendario[".searchableFields"][] = "FechaSistema";


$tables_data["tik_calendario"]=&$tdatatik_calendario;
$field_labels["tik_calendario"] = &$fieldLabelstik_calendario;
$fieldToolTips["tik_calendario"] = &$fieldToolTipstik_calendario;
$placeHolders["tik_calendario"] = &$placeHolderstik_calendario;
$page_titles["tik_calendario"] = &$pageTitlestik_calendario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_calendario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_calendario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_calendario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Fecha, Descripcion, DescripcionAmplia, DepartamentoSolicitar, TipoSolicitud, Repetir, Contar, TipoRepeticion, FechaVencimiento, AgregarTicket, TipoActividad, Estado, UsuarioProgramador, DepartamentoProgramador, FechaSistema";
$proto0["m_strFrom"] = "FROM tik_calendario";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
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
	"m_strName" => "Fecha",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto6["m_sql"] = "Fecha";
$proto6["m_srcTableName"] = "tik_calendario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "tik_calendario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DescripcionAmplia",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto10["m_sql"] = "DescripcionAmplia";
$proto10["m_srcTableName"] = "tik_calendario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoSolicitar",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto12["m_sql"] = "DepartamentoSolicitar";
$proto12["m_srcTableName"] = "tik_calendario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto14["m_sql"] = "TipoSolicitud";
$proto14["m_srcTableName"] = "tik_calendario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Repetir",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto16["m_sql"] = "Repetir";
$proto16["m_srcTableName"] = "tik_calendario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Contar",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto18["m_sql"] = "Contar";
$proto18["m_srcTableName"] = "tik_calendario";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoRepeticion",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto20["m_sql"] = "TipoRepeticion";
$proto20["m_srcTableName"] = "tik_calendario";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaVencimiento",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto22["m_sql"] = "FechaVencimiento";
$proto22["m_srcTableName"] = "tik_calendario";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AgregarTicket",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto24["m_sql"] = "AgregarTicket";
$proto24["m_srcTableName"] = "tik_calendario";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoActividad",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto26["m_sql"] = "TipoActividad";
$proto26["m_srcTableName"] = "tik_calendario";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto28["m_sql"] = "Estado";
$proto28["m_srcTableName"] = "tik_calendario";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "UsuarioProgramador",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto30["m_sql"] = "UsuarioProgramador";
$proto30["m_srcTableName"] = "tik_calendario";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DepartamentoProgramador",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto32["m_sql"] = "DepartamentoProgramador";
$proto32["m_srcTableName"] = "tik_calendario";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto34["m_sql"] = "FechaSistema";
$proto34["m_srcTableName"] = "tik_calendario";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tik_calendario";
$proto37["m_srcTableName"] = "tik_calendario";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Fecha";
$proto37["m_columns"][] = "Descripcion";
$proto37["m_columns"][] = "DescripcionAmplia";
$proto37["m_columns"][] = "DepartamentoSolicitar";
$proto37["m_columns"][] = "TipoSolicitud";
$proto37["m_columns"][] = "Repetir";
$proto37["m_columns"][] = "Contar";
$proto37["m_columns"][] = "TipoRepeticion";
$proto37["m_columns"][] = "FechaVencimiento";
$proto37["m_columns"][] = "AgregarTicket";
$proto37["m_columns"][] = "TipoActividad";
$proto37["m_columns"][] = "Estado";
$proto37["m_columns"][] = "UsuarioProgramador";
$proto37["m_columns"][] = "DepartamentoProgramador";
$proto37["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tik_calendario";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tik_calendario";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "tik_calendario",
	"m_srcTableName" => "tik_calendario"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_calendario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_calendario = createSqlQuery_tik_calendario();


	
		;

															

$tdatatik_calendario[".sqlquery"] = $queryData_tik_calendario;



include_once(getabspath("include/tik_calendario_events.php"));
$tableEvents["tik_calendario"] = new eventclass_tik_calendario;
$tdatatik_calendario[".hasEvents"] = true;

?>