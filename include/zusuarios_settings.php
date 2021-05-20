<?php
$tdatazusuarios = array();
$tdatazusuarios[".searchableFields"] = array();
$tdatazusuarios[".ShortName"] = "zusuarios";
$tdatazusuarios[".OwnerID"] = "";
$tdatazusuarios[".OriginalTable"] = "zusuarios";


$tdatazusuarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatazusuarios[".originalPagesByType"] = $tdatazusuarios[".pagesByType"];
$tdatazusuarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatazusuarios[".originalPages"] = $tdatazusuarios[".pages"];
$tdatazusuarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatazusuarios[".originalDefaultPages"] = $tdatazusuarios[".defaultPages"];

//	field labels
$fieldLabelszusuarios = array();
$fieldToolTipszusuarios = array();
$pageTitleszusuarios = array();
$placeHolderszusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelszusuarios["Spanish"] = array();
	$fieldToolTipszusuarios["Spanish"] = array();
	$placeHolderszusuarios["Spanish"] = array();
	$pageTitleszusuarios["Spanish"] = array();
	$fieldLabelszusuarios["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipszusuarios["Spanish"]["Usuario"] = "";
	$placeHolderszusuarios["Spanish"]["Usuario"] = "";
	$fieldLabelszusuarios["Spanish"]["Clave"] = "Clave";
	$fieldToolTipszusuarios["Spanish"]["Clave"] = "";
	$placeHolderszusuarios["Spanish"]["Clave"] = "";
	$fieldLabelszusuarios["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipszusuarios["Spanish"]["Nombre"] = "";
	$placeHolderszusuarios["Spanish"]["Nombre"] = "";
	$fieldLabelszusuarios["Spanish"]["CodigoDepto"] = "Codigo Depto";
	$fieldToolTipszusuarios["Spanish"]["CodigoDepto"] = "";
	$placeHolderszusuarios["Spanish"]["CodigoDepto"] = "";
	$fieldLabelszusuarios["Spanish"]["Puesto"] = "Puesto";
	$fieldToolTipszusuarios["Spanish"]["Puesto"] = "";
	$placeHolderszusuarios["Spanish"]["Puesto"] = "";
	$fieldLabelszusuarios["Spanish"]["Correo"] = "Correo";
	$fieldToolTipszusuarios["Spanish"]["Correo"] = "";
	$placeHolderszusuarios["Spanish"]["Correo"] = "";
	$fieldLabelszusuarios["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipszusuarios["Spanish"]["FechaInicio"] = "";
	$placeHolderszusuarios["Spanish"]["FechaInicio"] = "";
	$fieldLabelszusuarios["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipszusuarios["Spanish"]["FechaFinal"] = "";
	$placeHolderszusuarios["Spanish"]["FechaFinal"] = "";
	$fieldLabelszusuarios["Spanish"]["Estado"] = "Estado";
	$fieldToolTipszusuarios["Spanish"]["Estado"] = "";
	$placeHolderszusuarios["Spanish"]["Estado"] = "";
	$fieldLabelszusuarios["Spanish"]["Area"] = "Area";
	$fieldToolTipszusuarios["Spanish"]["Area"] = "";
	$placeHolderszusuarios["Spanish"]["Area"] = "";
	$fieldLabelszusuarios["Spanish"]["Codigo_Estructura"] = "Codigo Estructura";
	$fieldToolTipszusuarios["Spanish"]["Codigo_Estructura"] = "";
	$placeHolderszusuarios["Spanish"]["Codigo_Estructura"] = "";
	$fieldLabelszusuarios["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipszusuarios["Spanish"]["Telefono"] = "";
	$placeHolderszusuarios["Spanish"]["Telefono"] = "";
	if (count($fieldToolTipszusuarios["Spanish"]))
		$tdatazusuarios[".isUseToolTips"] = true;
}


	$tdatazusuarios[".NCSearch"] = true;



$tdatazusuarios[".shortTableName"] = "zusuarios";
$tdatazusuarios[".nSecOptions"] = 0;

$tdatazusuarios[".mainTableOwnerID"] = "";
$tdatazusuarios[".entityType"] = 0;
$tdatazusuarios[".connId"] = "mpc_at_localhost";


$tdatazusuarios[".strOriginalTableName"] = "zusuarios";

	



$tdatazusuarios[".showAddInPopup"] = false;

$tdatazusuarios[".showEditInPopup"] = false;

$tdatazusuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazusuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazusuarios[".listAjax"] = false;
//	temporary
//$tdatazusuarios[".listAjax"] = false;

	$tdatazusuarios[".audit"] = true;

	$tdatazusuarios[".locking"] = false;


$pages = $tdatazusuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatazusuarios[".edit"] = true;
	$tdatazusuarios[".afterEditAction"] = 0;
	$tdatazusuarios[".closePopupAfterEdit"] = 1;
	$tdatazusuarios[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatazusuarios[".add"] = true;
$tdatazusuarios[".afterAddAction"] = 0;
$tdatazusuarios[".closePopupAfterAdd"] = 1;
$tdatazusuarios[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatazusuarios[".list"] = true;
}



$tdatazusuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatazusuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatazusuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatazusuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatazusuarios[".printFriendly"] = true;
}



$tdatazusuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatazusuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatazusuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatazusuarios[".isUseAjaxSuggest"] = true;

$tdatazusuarios[".rowHighlite"] = true;



																																				

$tdatazusuarios[".ajaxCodeSnippetAdded"] = false;

$tdatazusuarios[".buttonsAdded"] = false;

$tdatazusuarios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatazusuarios[".isUseTimeForSearch"] = false;


$tdatazusuarios[".badgeColor"] = "bc8f8f";


$tdatazusuarios[".allSearchFields"] = array();
$tdatazusuarios[".filterFields"] = array();
$tdatazusuarios[".requiredSearchFields"] = array();

$tdatazusuarios[".googleLikeFields"] = array();
$tdatazusuarios[".googleLikeFields"][] = "Usuario";
$tdatazusuarios[".googleLikeFields"][] = "Clave";
$tdatazusuarios[".googleLikeFields"][] = "Nombre";
$tdatazusuarios[".googleLikeFields"][] = "CodigoDepto";
$tdatazusuarios[".googleLikeFields"][] = "Puesto";
$tdatazusuarios[".googleLikeFields"][] = "Codigo_Estructura";
$tdatazusuarios[".googleLikeFields"][] = "Area";
$tdatazusuarios[".googleLikeFields"][] = "Correo";
$tdatazusuarios[".googleLikeFields"][] = "Telefono";
$tdatazusuarios[".googleLikeFields"][] = "FechaInicio";
$tdatazusuarios[".googleLikeFields"][] = "FechaFinal";
$tdatazusuarios[".googleLikeFields"][] = "Estado";



$tdatazusuarios[".tableType"] = "list";

$tdatazusuarios[".printerPageOrientation"] = 0;
$tdatazusuarios[".nPrinterPageScale"] = 100;

$tdatazusuarios[".nPrinterSplitRecords"] = 40;

$tdatazusuarios[".geocodingEnabled"] = false;










$tdatazusuarios[".pageSize"] = 20;

$tdatazusuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Usuario";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazusuarios[".strOrderBy"] = $tstrOrderBy;

$tdatazusuarios[".orderindexes"] = array();
	$tdatazusuarios[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Usuario");



$tdatazusuarios[".sqlHead"] = "SELECT Usuario, Clave, Nombre, CodigoDepto, Puesto, Codigo_Estructura, Area, Correo, Telefono, FechaInicio, FechaFinal, Estado";
$tdatazusuarios[".sqlFrom"] = "FROM zusuarios";
$tdatazusuarios[".sqlWhereExpr"] = "";
$tdatazusuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazusuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazusuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatazusuarios[".highlightSearchResults"] = true;

$tableKeyszusuarios = array();
$tableKeyszusuarios[] = "Usuario";
$tdatazusuarios[".Keys"] = $tableKeyszusuarios;


$tdatazusuarios[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Usuario");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdatazusuarios["Usuario"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Usuario";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Clave");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdatazusuarios["Clave"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Clave";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatazusuarios["Nombre"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Nombre";
//	CodigoDepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CodigoDepto";
	$fdata["GoodName"] = "CodigoDepto";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","CodigoDepto");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Codigo_Estructura", 'lookupF'=>"Proceso");
	$edata["autoCompleteFields"][] = array('masterF'=>"Area", 'lookupF'=>"Nomenclatura");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CodigoDepto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(CodigoDepto,' - ',Descripcion)";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatazusuarios["CodigoDepto"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "CodigoDepto";
//	Puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Puesto";
	$fdata["GoodName"] = "Puesto";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Puesto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puesto";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatazusuarios["Puesto"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Puesto";
//	Codigo_Estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Codigo_Estructura";
	$fdata["GoodName"] = "Codigo_Estructura";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Codigo_Estructura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Codigo_Estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo_Estructura";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatazusuarios["Codigo_Estructura"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Codigo_Estructura";
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Area";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatazusuarios["Area"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Area";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Correo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Correo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatazusuarios["Correo"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Correo";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Telefono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";

	
	
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


		$edata["strEditMask"] = "+50499999999";

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatazusuarios["Telefono"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Telefono";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","FechaInicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaInicio";

	
	
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


	$tdatazusuarios["FechaInicio"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "FechaInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","FechaFinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaFinal";

	
	
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


	$tdatazusuarios["FechaFinal"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "FechaFinal";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("zusuarios","Estado");
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
	
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


	$tdatazusuarios["Estado"] = $fdata;
		$tdatazusuarios[".searchableFields"][] = "Estado";


$tables_data["zusuarios"]=&$tdatazusuarios;
$field_labels["zusuarios"] = &$fieldLabelszusuarios;
$fieldToolTips["zusuarios"] = &$fieldToolTipszusuarios;
$placeHolders["zusuarios"] = &$placeHolderszusuarios;
$page_titles["zusuarios"] = &$pageTitleszusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zusuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["zusuarios"] = array();



	
				$strOriginalDetailsTable="zdepartamentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="zdepartamentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "zdepartamentos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["zusuarios"][0] = $masterParams;
				$masterTablesData["zusuarios"][0]["masterKeys"] = array();
	$masterTablesData["zusuarios"][0]["masterKeys"][]="CodigoDepto";
				$masterTablesData["zusuarios"][0]["detailKeys"] = array();
	$masterTablesData["zusuarios"][0]["detailKeys"][]="CodigoDepto";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_zusuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Usuario, Clave, Nombre, CodigoDepto, Puesto, Codigo_Estructura, Area, Correo, Telefono, FechaInicio, FechaFinal, Estado";
$proto0["m_strFrom"] = "FROM zusuarios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Usuario";
	
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
	"m_strName" => "Usuario",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto6["m_sql"] = "Usuario";
$proto6["m_srcTableName"] = "zusuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto8["m_sql"] = "Clave";
$proto8["m_srcTableName"] = "zusuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto10["m_sql"] = "Nombre";
$proto10["m_srcTableName"] = "zusuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto12["m_sql"] = "CodigoDepto";
$proto12["m_srcTableName"] = "zusuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Puesto",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto14["m_sql"] = "Puesto";
$proto14["m_srcTableName"] = "zusuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo_Estructura",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto16["m_sql"] = "Codigo_Estructura";
$proto16["m_srcTableName"] = "zusuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto18["m_sql"] = "Area";
$proto18["m_srcTableName"] = "zusuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto20["m_sql"] = "Correo";
$proto20["m_srcTableName"] = "zusuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto22["m_sql"] = "Telefono";
$proto22["m_srcTableName"] = "zusuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto24["m_sql"] = "FechaInicio";
$proto24["m_srcTableName"] = "zusuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto26["m_sql"] = "FechaFinal";
$proto26["m_srcTableName"] = "zusuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto28["m_sql"] = "Estado";
$proto28["m_srcTableName"] = "zusuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "zusuarios";
$proto31["m_srcTableName"] = "zusuarios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Usuario";
$proto31["m_columns"][] = "Clave";
$proto31["m_columns"][] = "Nombre";
$proto31["m_columns"][] = "CodigoDepto";
$proto31["m_columns"][] = "Codigo_Estructura";
$proto31["m_columns"][] = "Area";
$proto31["m_columns"][] = "Puesto";
$proto31["m_columns"][] = "Correo";
$proto31["m_columns"][] = "Telefono";
$proto31["m_columns"][] = "FechaInicio";
$proto31["m_columns"][] = "FechaFinal";
$proto31["m_columns"][] = "Estado";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "zusuarios";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "zusuarios";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "zusuarios"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="zusuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zusuarios = createSqlQuery_zusuarios();


	
		;

												

$tdatazusuarios[".sqlquery"] = $queryData_zusuarios;



include_once(getabspath("include/zusuarios_events.php"));
$tableEvents["zusuarios"] = new eventclass_zusuarios;
$tdatazusuarios[".hasEvents"] = true;

?>