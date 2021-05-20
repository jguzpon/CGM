<?php
$tdatav_zusuarios = array();
$tdatav_zusuarios[".searchableFields"] = array();
$tdatav_zusuarios[".ShortName"] = "v_zusuarios";
$tdatav_zusuarios[".OwnerID"] = "";
$tdatav_zusuarios[".OriginalTable"] = "zusuarios";


$tdatav_zusuarios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatav_zusuarios[".originalPagesByType"] = $tdatav_zusuarios[".pagesByType"];
$tdatav_zusuarios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatav_zusuarios[".originalPages"] = $tdatav_zusuarios[".pages"];
$tdatav_zusuarios[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatav_zusuarios[".originalDefaultPages"] = $tdatav_zusuarios[".defaultPages"];

//	field labels
$fieldLabelsv_zusuarios = array();
$fieldToolTipsv_zusuarios = array();
$pageTitlesv_zusuarios = array();
$placeHoldersv_zusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsv_zusuarios["Spanish"] = array();
	$fieldToolTipsv_zusuarios["Spanish"] = array();
	$placeHoldersv_zusuarios["Spanish"] = array();
	$pageTitlesv_zusuarios["Spanish"] = array();
	$fieldLabelsv_zusuarios["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsv_zusuarios["Spanish"]["Usuario"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Usuario"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Clave"] = "Clave";
	$fieldToolTipsv_zusuarios["Spanish"]["Clave"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Clave"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsv_zusuarios["Spanish"]["Nombre"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Nombre"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["CodigoDepto"] = "Codigo Depto";
	$fieldToolTipsv_zusuarios["Spanish"]["CodigoDepto"] = "";
	$placeHoldersv_zusuarios["Spanish"]["CodigoDepto"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Area"] = "Area";
	$fieldToolTipsv_zusuarios["Spanish"]["Area"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Area"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Puesto"] = "Puesto";
	$fieldToolTipsv_zusuarios["Spanish"]["Puesto"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Puesto"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Correo"] = "Correo";
	$fieldToolTipsv_zusuarios["Spanish"]["Correo"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Correo"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["FechaInicio"] = "Fecha Inicio";
	$fieldToolTipsv_zusuarios["Spanish"]["FechaInicio"] = "";
	$placeHoldersv_zusuarios["Spanish"]["FechaInicio"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["FechaFinal"] = "Fecha Final";
	$fieldToolTipsv_zusuarios["Spanish"]["FechaFinal"] = "";
	$placeHoldersv_zusuarios["Spanish"]["FechaFinal"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsv_zusuarios["Spanish"]["Estado"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Estado"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsv_zusuarios["Spanish"]["Descripcion"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Descripcion"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipsv_zusuarios["Spanish"]["Proceso"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Proceso"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Nomenclatura"] = "Nomenclatura";
	$fieldToolTipsv_zusuarios["Spanish"]["Nomenclatura"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Nomenclatura"] = "";
	$fieldLabelsv_zusuarios["Spanish"]["Codigo_Estructura"] = "Codigo Estructura";
	$fieldToolTipsv_zusuarios["Spanish"]["Codigo_Estructura"] = "";
	$placeHoldersv_zusuarios["Spanish"]["Codigo_Estructura"] = "";
	if (count($fieldToolTipsv_zusuarios["Spanish"]))
		$tdatav_zusuarios[".isUseToolTips"] = true;
}


	$tdatav_zusuarios[".NCSearch"] = true;



$tdatav_zusuarios[".shortTableName"] = "v_zusuarios";
$tdatav_zusuarios[".nSecOptions"] = 0;

$tdatav_zusuarios[".mainTableOwnerID"] = "";
$tdatav_zusuarios[".entityType"] = 1;
$tdatav_zusuarios[".connId"] = "mpc_at_localhost";


$tdatav_zusuarios[".strOriginalTableName"] = "zusuarios";

	



$tdatav_zusuarios[".showAddInPopup"] = false;

$tdatav_zusuarios[".showEditInPopup"] = false;

$tdatav_zusuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatav_zusuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatav_zusuarios[".listAjax"] = false;
//	temporary
//$tdatav_zusuarios[".listAjax"] = false;

	$tdatav_zusuarios[".audit"] = true;

	$tdatav_zusuarios[".locking"] = false;


$pages = $tdatav_zusuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_zusuarios[".edit"] = true;
	$tdatav_zusuarios[".afterEditAction"] = 0;
	$tdatav_zusuarios[".closePopupAfterEdit"] = 1;
	$tdatav_zusuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_zusuarios[".add"] = true;
$tdatav_zusuarios[".afterAddAction"] = 0;
$tdatav_zusuarios[".closePopupAfterAdd"] = 1;
$tdatav_zusuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_zusuarios[".list"] = true;
}



$tdatav_zusuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_zusuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_zusuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_zusuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_zusuarios[".printFriendly"] = true;
}



$tdatav_zusuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_zusuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_zusuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_zusuarios[".isUseAjaxSuggest"] = true;

$tdatav_zusuarios[".rowHighlite"] = true;



																		

$tdatav_zusuarios[".ajaxCodeSnippetAdded"] = false;

$tdatav_zusuarios[".buttonsAdded"] = false;

$tdatav_zusuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_zusuarios[".isUseTimeForSearch"] = false;


$tdatav_zusuarios[".badgeColor"] = "DAA520";


$tdatav_zusuarios[".allSearchFields"] = array();
$tdatav_zusuarios[".filterFields"] = array();
$tdatav_zusuarios[".requiredSearchFields"] = array();

$tdatav_zusuarios[".googleLikeFields"] = array();
$tdatav_zusuarios[".googleLikeFields"][] = "Usuario";
$tdatav_zusuarios[".googleLikeFields"][] = "Clave";
$tdatav_zusuarios[".googleLikeFields"][] = "Nombre";
$tdatav_zusuarios[".googleLikeFields"][] = "CodigoDepto";
$tdatav_zusuarios[".googleLikeFields"][] = "Codigo_Estructura";
$tdatav_zusuarios[".googleLikeFields"][] = "Area";
$tdatav_zusuarios[".googleLikeFields"][] = "Puesto";
$tdatav_zusuarios[".googleLikeFields"][] = "Correo";
$tdatav_zusuarios[".googleLikeFields"][] = "FechaInicio";
$tdatav_zusuarios[".googleLikeFields"][] = "FechaFinal";
$tdatav_zusuarios[".googleLikeFields"][] = "Estado";
$tdatav_zusuarios[".googleLikeFields"][] = "Descripcion";
$tdatav_zusuarios[".googleLikeFields"][] = "Proceso";
$tdatav_zusuarios[".googleLikeFields"][] = "Nomenclatura";



$tdatav_zusuarios[".tableType"] = "list";

$tdatav_zusuarios[".printerPageOrientation"] = 0;
$tdatav_zusuarios[".nPrinterPageScale"] = 100;

$tdatav_zusuarios[".nPrinterSplitRecords"] = 40;

$tdatav_zusuarios[".geocodingEnabled"] = false;










$tdatav_zusuarios[".pageSize"] = 20;

$tdatav_zusuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatav_zusuarios[".strOrderBy"] = $tstrOrderBy;

$tdatav_zusuarios[".orderindexes"] = array();


$tdatav_zusuarios[".sqlHead"] = "SELECT zusuarios.Usuario, zusuarios.Clave, zusuarios.Nombre, zusuarios.CodigoDepto, zusuarios.Codigo_Estructura, zusuarios.Area, zusuarios.Puesto, zusuarios.Correo, zusuarios.FechaInicio, zusuarios.FechaFinal, zusuarios.Estado, zdepartamentos.Descripcion, zdepartamentos.Proceso, zdepartamentos.Nomenclatura";
$tdatav_zusuarios[".sqlFrom"] = "FROM zusuarios INNER JOIN zdepartamentos ON zusuarios.CodigoDepto = zdepartamentos.CodigoDepto";
$tdatav_zusuarios[".sqlWhereExpr"] = "";
$tdatav_zusuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_zusuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_zusuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatav_zusuarios[".highlightSearchResults"] = true;

$tableKeysv_zusuarios = array();
$tableKeysv_zusuarios[] = "Usuario";
$tdatav_zusuarios[".Keys"] = $tableKeysv_zusuarios;


$tdatav_zusuarios[".hideMobileList"] = array();




//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Usuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Usuario";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatav_zusuarios["Usuario"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Usuario";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Clave");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Clave";

	
	
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


	$tdatav_zusuarios["Clave"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Clave";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatav_zusuarios["Nombre"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Nombre";
//	CodigoDepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CodigoDepto";
	$fdata["GoodName"] = "CodigoDepto";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","CodigoDepto");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "CodigoDepto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.CodigoDepto";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatav_zusuarios["CodigoDepto"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "CodigoDepto";
//	Codigo_Estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codigo_Estructura";
	$fdata["GoodName"] = "Codigo_Estructura";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Codigo_Estructura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Codigo_Estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Codigo_Estructura";

	
	
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


	$tdatav_zusuarios["Codigo_Estructura"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Codigo_Estructura";
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Area");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Area";

	
	
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


	$tdatav_zusuarios["Area"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Area";
//	Puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Puesto";
	$fdata["GoodName"] = "Puesto";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Puesto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Puesto";

	
	
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


	$tdatav_zusuarios["Puesto"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Puesto";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Correo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Correo";

	
	
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


	$tdatav_zusuarios["Correo"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Correo";
//	FechaInicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FechaInicio";
	$fdata["GoodName"] = "FechaInicio";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","FechaInicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaInicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.FechaInicio";

	
	
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


	$tdatav_zusuarios["FechaInicio"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "FechaInicio";
//	FechaFinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FechaFinal";
	$fdata["GoodName"] = "FechaFinal";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","FechaFinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaFinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.FechaFinal";

	
	
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


	$tdatav_zusuarios["FechaFinal"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "FechaFinal";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "zusuarios";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Estado");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zusuarios.Estado";

	
	
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
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
		$edata["SelectSize"] = 1;

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


	$tdatav_zusuarios["Estado"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Estado";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatav_zusuarios["Descripcion"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Descripcion";
//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zdepartamentos.Proceso";

	
	
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


	$tdatav_zusuarios["Proceso"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Proceso";
//	Nomenclatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Nomenclatura";
	$fdata["GoodName"] = "Nomenclatura";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("v_zusuarios","Nomenclatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nomenclatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zdepartamentos.Nomenclatura";

	
	
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


	$tdatav_zusuarios["Nomenclatura"] = $fdata;
		$tdatav_zusuarios[".searchableFields"][] = "Nomenclatura";


$tables_data["v_zusuarios"]=&$tdatav_zusuarios;
$field_labels["v_zusuarios"] = &$fieldLabelsv_zusuarios;
$fieldToolTips["v_zusuarios"] = &$fieldToolTipsv_zusuarios;
$placeHolders["v_zusuarios"] = &$placeHoldersv_zusuarios;
$page_titles["v_zusuarios"] = &$pageTitlesv_zusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["v_zusuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["v_zusuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_zusuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "zusuarios.Usuario, zusuarios.Clave, zusuarios.Nombre, zusuarios.CodigoDepto, zusuarios.Codigo_Estructura, zusuarios.Area, zusuarios.Puesto, zusuarios.Correo, zusuarios.FechaInicio, zusuarios.FechaFinal, zusuarios.Estado, zdepartamentos.Descripcion, zdepartamentos.Proceso, zdepartamentos.Nomenclatura";
$proto0["m_strFrom"] = "FROM zusuarios INNER JOIN zdepartamentos ON zusuarios.CodigoDepto = zdepartamentos.CodigoDepto";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_srcTableName" => "v_zusuarios"
));

$proto6["m_sql"] = "zusuarios.Usuario";
$proto6["m_srcTableName"] = "v_zusuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto8["m_sql"] = "zusuarios.Clave";
$proto8["m_srcTableName"] = "v_zusuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto10["m_sql"] = "zusuarios.Nombre";
$proto10["m_srcTableName"] = "v_zusuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto12["m_sql"] = "zusuarios.CodigoDepto";
$proto12["m_srcTableName"] = "v_zusuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo_Estructura",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto14["m_sql"] = "zusuarios.Codigo_Estructura";
$proto14["m_srcTableName"] = "v_zusuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto16["m_sql"] = "zusuarios.Area";
$proto16["m_srcTableName"] = "v_zusuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Puesto",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto18["m_sql"] = "zusuarios.Puesto";
$proto18["m_srcTableName"] = "v_zusuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto20["m_sql"] = "zusuarios.Correo";
$proto20["m_srcTableName"] = "v_zusuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaInicio",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto22["m_sql"] = "zusuarios.FechaInicio";
$proto22["m_srcTableName"] = "v_zusuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaFinal",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto24["m_sql"] = "zusuarios.FechaFinal";
$proto24["m_srcTableName"] = "v_zusuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto26["m_sql"] = "zusuarios.Estado";
$proto26["m_srcTableName"] = "v_zusuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "v_zusuarios"
));

$proto28["m_sql"] = "zdepartamentos.Descripcion";
$proto28["m_srcTableName"] = "v_zusuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Proceso",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "v_zusuarios"
));

$proto30["m_sql"] = "zdepartamentos.Proceso";
$proto30["m_srcTableName"] = "v_zusuarios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomenclatura",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "v_zusuarios"
));

$proto32["m_sql"] = "zdepartamentos.Nomenclatura";
$proto32["m_srcTableName"] = "v_zusuarios";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "zusuarios";
$proto35["m_srcTableName"] = "v_zusuarios";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "Usuario";
$proto35["m_columns"][] = "Clave";
$proto35["m_columns"][] = "Nombre";
$proto35["m_columns"][] = "CodigoDepto";
$proto35["m_columns"][] = "Codigo_Estructura";
$proto35["m_columns"][] = "Area";
$proto35["m_columns"][] = "Puesto";
$proto35["m_columns"][] = "Correo";
$proto35["m_columns"][] = "Telefono";
$proto35["m_columns"][] = "FechaInicio";
$proto35["m_columns"][] = "FechaFinal";
$proto35["m_columns"][] = "Estado";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "zusuarios";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "v_zusuarios";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "zdepartamentos";
$proto39["m_srcTableName"] = "v_zusuarios";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "CodigoDepto";
$proto39["m_columns"][] = "Descripcion";
$proto39["m_columns"][] = "Programa";
$proto39["m_columns"][] = "Actividad";
$proto39["m_columns"][] = "Proceso";
$proto39["m_columns"][] = "Nomenclatura";
$proto39["m_columns"][] = "Usuario";
$proto39["m_columns"][] = "FechaSis";
$proto39["m_columns"][] = "Tipo";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN zdepartamentos ON zusuarios.CodigoDepto = zdepartamentos.CodigoDepto";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "v_zusuarios";
$proto40=array();
$proto40["m_sql"] = "zusuarios.CodigoDepto = zdepartamentos.CodigoDepto";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zusuarios",
	"m_srcTableName" => "v_zusuarios"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= zdepartamentos.CodigoDepto";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="v_zusuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_zusuarios = createSqlQuery_v_zusuarios();


	
		;

														

$tdatav_zusuarios[".sqlquery"] = $queryData_v_zusuarios;



$tableEvents["v_zusuarios"] = new eventsBase;
$tdatav_zusuarios[".hasEvents"] = false;

?>