<?php
$tdatazdepartamentos = array();
$tdatazdepartamentos[".searchableFields"] = array();
$tdatazdepartamentos[".ShortName"] = "zdepartamentos";
$tdatazdepartamentos[".OwnerID"] = "";
$tdatazdepartamentos[".OriginalTable"] = "zdepartamentos";


$tdatazdepartamentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatazdepartamentos[".originalPagesByType"] = $tdatazdepartamentos[".pagesByType"];
$tdatazdepartamentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatazdepartamentos[".originalPages"] = $tdatazdepartamentos[".pages"];
$tdatazdepartamentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatazdepartamentos[".originalDefaultPages"] = $tdatazdepartamentos[".defaultPages"];

//	field labels
$fieldLabelszdepartamentos = array();
$fieldToolTipszdepartamentos = array();
$pageTitleszdepartamentos = array();
$placeHolderszdepartamentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelszdepartamentos["Spanish"] = array();
	$fieldToolTipszdepartamentos["Spanish"] = array();
	$placeHolderszdepartamentos["Spanish"] = array();
	$pageTitleszdepartamentos["Spanish"] = array();
	$fieldLabelszdepartamentos["Spanish"]["CodigoDepto"] = "Codigo Depto";
	$fieldToolTipszdepartamentos["Spanish"]["CodigoDepto"] = "";
	$placeHolderszdepartamentos["Spanish"]["CodigoDepto"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipszdepartamentos["Spanish"]["Descripcion"] = "";
	$placeHolderszdepartamentos["Spanish"]["Descripcion"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Programa"] = "Programa";
	$fieldToolTipszdepartamentos["Spanish"]["Programa"] = "";
	$placeHolderszdepartamentos["Spanish"]["Programa"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Actividad"] = "Actividad";
	$fieldToolTipszdepartamentos["Spanish"]["Actividad"] = "";
	$placeHolderszdepartamentos["Spanish"]["Actividad"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipszdepartamentos["Spanish"]["Usuario"] = "";
	$placeHolderszdepartamentos["Spanish"]["Usuario"] = "";
	$fieldLabelszdepartamentos["Spanish"]["FechaSis"] = "Fecha Sistema";
	$fieldToolTipszdepartamentos["Spanish"]["FechaSis"] = "";
	$placeHolderszdepartamentos["Spanish"]["FechaSis"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Proceso"] = "Proceso";
	$fieldToolTipszdepartamentos["Spanish"]["Proceso"] = "";
	$placeHolderszdepartamentos["Spanish"]["Proceso"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Nomenclatura"] = "Nomenclatura";
	$fieldToolTipszdepartamentos["Spanish"]["Nomenclatura"] = "";
	$placeHolderszdepartamentos["Spanish"]["Nomenclatura"] = "";
	$fieldLabelszdepartamentos["Spanish"]["Tipo"] = "Tipo";
	$fieldToolTipszdepartamentos["Spanish"]["Tipo"] = "";
	$placeHolderszdepartamentos["Spanish"]["Tipo"] = "";
	if (count($fieldToolTipszdepartamentos["Spanish"]))
		$tdatazdepartamentos[".isUseToolTips"] = true;
}


	$tdatazdepartamentos[".NCSearch"] = true;



$tdatazdepartamentos[".shortTableName"] = "zdepartamentos";
$tdatazdepartamentos[".nSecOptions"] = 0;

$tdatazdepartamentos[".mainTableOwnerID"] = "";
$tdatazdepartamentos[".entityType"] = 0;
$tdatazdepartamentos[".connId"] = "mpc_at_localhost";


$tdatazdepartamentos[".strOriginalTableName"] = "zdepartamentos";

	



$tdatazdepartamentos[".showAddInPopup"] = false;

$tdatazdepartamentos[".showEditInPopup"] = false;

$tdatazdepartamentos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatazdepartamentos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatazdepartamentos[".listAjax"] = false;
//	temporary
//$tdatazdepartamentos[".listAjax"] = false;

	$tdatazdepartamentos[".audit"] = true;

	$tdatazdepartamentos[".locking"] = false;


$pages = $tdatazdepartamentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatazdepartamentos[".edit"] = true;
	$tdatazdepartamentos[".afterEditAction"] = 0;
	$tdatazdepartamentos[".closePopupAfterEdit"] = 1;
	$tdatazdepartamentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatazdepartamentos[".add"] = true;
$tdatazdepartamentos[".afterAddAction"] = 0;
$tdatazdepartamentos[".closePopupAfterAdd"] = 1;
$tdatazdepartamentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatazdepartamentos[".list"] = true;
}



$tdatazdepartamentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatazdepartamentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatazdepartamentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatazdepartamentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatazdepartamentos[".printFriendly"] = true;
}



$tdatazdepartamentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatazdepartamentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatazdepartamentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatazdepartamentos[".isUseAjaxSuggest"] = true;

$tdatazdepartamentos[".rowHighlite"] = true;



																								

$tdatazdepartamentos[".ajaxCodeSnippetAdded"] = false;

$tdatazdepartamentos[".buttonsAdded"] = false;

$tdatazdepartamentos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatazdepartamentos[".isUseTimeForSearch"] = false;


$tdatazdepartamentos[".badgeColor"] = "778899";


$tdatazdepartamentos[".allSearchFields"] = array();
$tdatazdepartamentos[".filterFields"] = array();
$tdatazdepartamentos[".requiredSearchFields"] = array();

$tdatazdepartamentos[".googleLikeFields"] = array();
$tdatazdepartamentos[".googleLikeFields"][] = "CodigoDepto";
$tdatazdepartamentos[".googleLikeFields"][] = "Descripcion";
$tdatazdepartamentos[".googleLikeFields"][] = "Programa";
$tdatazdepartamentos[".googleLikeFields"][] = "Actividad";
$tdatazdepartamentos[".googleLikeFields"][] = "Proceso";
$tdatazdepartamentos[".googleLikeFields"][] = "Nomenclatura";
$tdatazdepartamentos[".googleLikeFields"][] = "Usuario";
$tdatazdepartamentos[".googleLikeFields"][] = "FechaSis";
$tdatazdepartamentos[".googleLikeFields"][] = "Tipo";



$tdatazdepartamentos[".tableType"] = "list";

$tdatazdepartamentos[".printerPageOrientation"] = 0;
$tdatazdepartamentos[".nPrinterPageScale"] = 100;

$tdatazdepartamentos[".nPrinterSplitRecords"] = 40;

$tdatazdepartamentos[".geocodingEnabled"] = false;










$tdatazdepartamentos[".pageSize"] = 20;

$tdatazdepartamentos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Descripcion";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatazdepartamentos[".strOrderBy"] = $tstrOrderBy;

$tdatazdepartamentos[".orderindexes"] = array();
	$tdatazdepartamentos[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Descripcion");



$tdatazdepartamentos[".sqlHead"] = "SELECT CodigoDepto,  Descripcion,  Programa,  Actividad,  Proceso,  Nomenclatura,  Usuario,  FechaSis,  Tipo";
$tdatazdepartamentos[".sqlFrom"] = "FROM zdepartamentos";
$tdatazdepartamentos[".sqlWhereExpr"] = "(Tipo ='Departamento' OR Tipo ='Gerencia' OR Tipo ='Corporativo')";
$tdatazdepartamentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazdepartamentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazdepartamentos[".arrGroupsPerPage"] = $arrGPP;

$tdatazdepartamentos[".highlightSearchResults"] = true;

$tableKeyszdepartamentos = array();
$tableKeyszdepartamentos[] = "CodigoDepto";
$tdatazdepartamentos[".Keys"] = $tableKeyszdepartamentos;


$tdatazdepartamentos[".hideMobileList"] = array();




//	CodigoDepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CodigoDepto";
	$fdata["GoodName"] = "CodigoDepto";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","CodigoDepto");
	$fdata["FieldType"] = 2;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatazdepartamentos["CodigoDepto"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "CodigoDepto";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatazdepartamentos["Descripcion"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Descripcion";
//	Programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Programa";
	$fdata["GoodName"] = "Programa";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Programa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Programa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Programa";

	
	
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


	$tdatazdepartamentos["Programa"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Programa";
//	Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Actividad";
	$fdata["GoodName"] = "Actividad";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Actividad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Actividad";

	
	
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


	$tdatazdepartamentos["Actividad"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Actividad";
//	Proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Proceso";
	$fdata["GoodName"] = "Proceso";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Proceso";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatazdepartamentos["Proceso"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Proceso";
//	Nomenclatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Nomenclatura";
	$fdata["GoodName"] = "Nomenclatura";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Nomenclatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nomenclatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nomenclatura";

	
	
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


	$tdatazdepartamentos["Nomenclatura"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Nomenclatura";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Usuario");
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


	$tdatazdepartamentos["Usuario"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Usuario";
//	FechaSis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FechaSis";
	$fdata["GoodName"] = "FechaSis";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","FechaSis");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FechaSis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSis";

	
	
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


	$tdatazdepartamentos["FechaSis"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "FechaSis";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "zdepartamentos";
	$fdata["Label"] = GetFieldLabel("zdepartamentos","Tipo");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "Tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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
	$edata["LookupValues"][] = "Corporativo";
	$edata["LookupValues"][] = "Gerencia";
	$edata["LookupValues"][] = "Departamento";
	$edata["LookupValues"][] = "Seccion";
	$edata["LookupValues"][] = "Programa";
	$edata["LookupValues"][] = "Ninguno";
	$edata["LookupValues"][] = "No";

	
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


	$tdatazdepartamentos["Tipo"] = $fdata;
		$tdatazdepartamentos[".searchableFields"][] = "Tipo";


$tables_data["zdepartamentos"]=&$tdatazdepartamentos;
$field_labels["zdepartamentos"] = &$fieldLabelszdepartamentos;
$fieldToolTips["zdepartamentos"] = &$fieldToolTipszdepartamentos;
$placeHolders["zdepartamentos"] = &$placeHolderszdepartamentos;
$page_titles["zdepartamentos"] = &$pageTitleszdepartamentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["zdepartamentos"] = array();
//	zusuarios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="zusuarios";
		$detailsParam["dOriginalTable"] = "zusuarios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "zusuarios";
	$detailsParam["dCaptionTable"] = GetTableCaption("zusuarios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["zdepartamentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["zdepartamentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["zdepartamentos"][$dIndex]["masterKeys"][]="CodigoDepto";

				$detailsTablesData["zdepartamentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["zdepartamentos"][$dIndex]["detailKeys"][]="CodigoDepto";

// tables which are master tables for current table (detail)
$masterTablesData["zdepartamentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_zdepartamentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CodigoDepto,  Descripcion,  Programa,  Actividad,  Proceso,  Nomenclatura,  Usuario,  FechaSis,  Tipo";
$proto0["m_strFrom"] = "FROM zdepartamentos";
$proto0["m_strWhere"] = "(Tipo ='Departamento' OR Tipo ='Gerencia' OR Tipo ='Corporativo')";
$proto0["m_strOrderBy"] = "ORDER BY Descripcion";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Tipo ='Departamento' OR Tipo ='Gerencia' OR Tipo ='Corporativo'";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Tipo ='Departamento' OR Tipo ='Gerencia' OR Tipo ='Corporativo'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Tipo ='Departamento'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Departamento'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Tipo ='Gerencia'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "='Gerencia'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "Tipo ='Corporativo'";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "='Corporativo'";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CodigoDepto",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto12["m_sql"] = "CodigoDepto";
$proto12["m_srcTableName"] = "zdepartamentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto14["m_sql"] = "Descripcion";
$proto14["m_srcTableName"] = "zdepartamentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Programa",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto16["m_sql"] = "Programa";
$proto16["m_srcTableName"] = "zdepartamentos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Actividad",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto18["m_sql"] = "Actividad";
$proto18["m_srcTableName"] = "zdepartamentos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Proceso",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto20["m_sql"] = "Proceso";
$proto20["m_srcTableName"] = "zdepartamentos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomenclatura",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto22["m_sql"] = "Nomenclatura";
$proto22["m_srcTableName"] = "zdepartamentos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto24["m_sql"] = "Usuario";
$proto24["m_srcTableName"] = "zdepartamentos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSis",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto26["m_sql"] = "FechaSis";
$proto26["m_srcTableName"] = "zdepartamentos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto28["m_sql"] = "Tipo";
$proto28["m_srcTableName"] = "zdepartamentos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "zdepartamentos";
$proto31["m_srcTableName"] = "zdepartamentos";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "CodigoDepto";
$proto31["m_columns"][] = "Descripcion";
$proto31["m_columns"][] = "Programa";
$proto31["m_columns"][] = "Actividad";
$proto31["m_columns"][] = "Proceso";
$proto31["m_columns"][] = "Nomenclatura";
$proto31["m_columns"][] = "Usuario";
$proto31["m_columns"][] = "FechaSis";
$proto31["m_columns"][] = "Tipo";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "zdepartamentos";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "zdepartamentos";
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
	"m_strName" => "Descripcion",
	"m_strTable" => "zdepartamentos",
	"m_srcTableName" => "zdepartamentos"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="zdepartamentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zdepartamentos = createSqlQuery_zdepartamentos();


	
		;

									

$tdatazdepartamentos[".sqlquery"] = $queryData_zdepartamentos;



include_once(getabspath("include/zdepartamentos_events.php"));
$tableEvents["zdepartamentos"] = new eventclass_zdepartamentos;
$tdatazdepartamentos[".hasEvents"] = true;

?>