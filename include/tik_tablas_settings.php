<?php
$tdatatik_tablas = array();
$tdatatik_tablas[".searchableFields"] = array();
$tdatatik_tablas[".ShortName"] = "tik_tablas";
$tdatatik_tablas[".OwnerID"] = "";
$tdatatik_tablas[".OriginalTable"] = "tik_tablas";


$tdatatik_tablas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatatik_tablas[".originalPagesByType"] = $tdatatik_tablas[".pagesByType"];
$tdatatik_tablas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatatik_tablas[".originalPages"] = $tdatatik_tablas[".pages"];
$tdatatik_tablas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatatik_tablas[".originalDefaultPages"] = $tdatatik_tablas[".defaultPages"];

//	field labels
$fieldLabelstik_tablas = array();
$fieldToolTipstik_tablas = array();
$pageTitlestik_tablas = array();
$placeHolderstik_tablas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_tablas["Spanish"] = array();
	$fieldToolTipstik_tablas["Spanish"] = array();
	$placeHolderstik_tablas["Spanish"] = array();
	$pageTitlestik_tablas["Spanish"] = array();
	$fieldLabelstik_tablas["Spanish"]["Grupo"] = "Grupo";
	$fieldToolTipstik_tablas["Spanish"]["Grupo"] = "";
	$placeHolderstik_tablas["Spanish"]["Grupo"] = "";
	$fieldLabelstik_tablas["Spanish"]["Secuencia"] = "Secuencia";
	$fieldToolTipstik_tablas["Spanish"]["Secuencia"] = "";
	$placeHolderstik_tablas["Spanish"]["Secuencia"] = "";
	$fieldLabelstik_tablas["Spanish"]["DescripcionGrupo"] = "Descripcion Grupo";
	$fieldToolTipstik_tablas["Spanish"]["DescripcionGrupo"] = "";
	$placeHolderstik_tablas["Spanish"]["DescripcionGrupo"] = "";
	$fieldLabelstik_tablas["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_tablas["Spanish"]["Descripcion"] = "";
	$placeHolderstik_tablas["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_tablas["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_tablas["Spanish"]["Usuario"] = "";
	$placeHolderstik_tablas["Spanish"]["Usuario"] = "";
	$fieldLabelstik_tablas["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_tablas["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_tablas["Spanish"]["FechaSistema"] = "";
	if (count($fieldToolTipstik_tablas["Spanish"]))
		$tdatatik_tablas[".isUseToolTips"] = true;
}


	$tdatatik_tablas[".NCSearch"] = true;



$tdatatik_tablas[".shortTableName"] = "tik_tablas";
$tdatatik_tablas[".nSecOptions"] = 0;

$tdatatik_tablas[".mainTableOwnerID"] = "";
$tdatatik_tablas[".entityType"] = 0;
$tdatatik_tablas[".connId"] = "mpc_at_localhost";


$tdatatik_tablas[".strOriginalTableName"] = "tik_tablas";

	



$tdatatik_tablas[".showAddInPopup"] = false;

$tdatatik_tablas[".showEditInPopup"] = false;

$tdatatik_tablas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_tablas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_tablas[".listAjax"] = false;
//	temporary
//$tdatatik_tablas[".listAjax"] = false;

	$tdatatik_tablas[".audit"] = true;

	$tdatatik_tablas[".locking"] = false;


$pages = $tdatatik_tablas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_tablas[".edit"] = true;
	$tdatatik_tablas[".afterEditAction"] = 0;
	$tdatatik_tablas[".closePopupAfterEdit"] = 1;
	$tdatatik_tablas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_tablas[".add"] = true;
$tdatatik_tablas[".afterAddAction"] = 0;
$tdatatik_tablas[".closePopupAfterAdd"] = 1;
$tdatatik_tablas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_tablas[".list"] = true;
}



$tdatatik_tablas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_tablas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_tablas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_tablas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_tablas[".printFriendly"] = true;
}



$tdatatik_tablas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_tablas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_tablas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_tablas[".isUseAjaxSuggest"] = true;

$tdatatik_tablas[".rowHighlite"] = true;



																		

$tdatatik_tablas[".ajaxCodeSnippetAdded"] = false;

$tdatatik_tablas[".buttonsAdded"] = false;

$tdatatik_tablas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_tablas[".isUseTimeForSearch"] = false;


$tdatatik_tablas[".badgeColor"] = "778899";


$tdatatik_tablas[".allSearchFields"] = array();
$tdatatik_tablas[".filterFields"] = array();
$tdatatik_tablas[".requiredSearchFields"] = array();

$tdatatik_tablas[".googleLikeFields"] = array();
$tdatatik_tablas[".googleLikeFields"][] = "Grupo";
$tdatatik_tablas[".googleLikeFields"][] = "Secuencia";
$tdatatik_tablas[".googleLikeFields"][] = "DescripcionGrupo";
$tdatatik_tablas[".googleLikeFields"][] = "Descripcion";
$tdatatik_tablas[".googleLikeFields"][] = "Usuario";
$tdatatik_tablas[".googleLikeFields"][] = "FechaSistema";



$tdatatik_tablas[".tableType"] = "list";

$tdatatik_tablas[".printerPageOrientation"] = 0;
$tdatatik_tablas[".nPrinterPageScale"] = 100;

$tdatatik_tablas[".nPrinterSplitRecords"] = 40;

$tdatatik_tablas[".geocodingEnabled"] = false;










$tdatatik_tablas[".pageSize"] = 20;

$tdatatik_tablas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Grupo, Secuencia";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_tablas[".strOrderBy"] = $tstrOrderBy;

$tdatatik_tablas[".orderindexes"] = array();
	$tdatatik_tablas[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Grupo");

	$tdatatik_tablas[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Secuencia");



$tdatatik_tablas[".sqlHead"] = "SELECT Grupo, Secuencia, DescripcionGrupo, Descripcion, Usuario, FechaSistema";
$tdatatik_tablas[".sqlFrom"] = "FROM tik_tablas";
$tdatatik_tablas[".sqlWhereExpr"] = "";
$tdatatik_tablas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_tablas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_tablas[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_tablas[".highlightSearchResults"] = true;

$tableKeystik_tablas = array();
$tableKeystik_tablas[] = "Grupo";
$tableKeystik_tablas[] = "Secuencia";
$tdatatik_tablas[".Keys"] = $tableKeystik_tablas;


$tdatatik_tablas[".hideMobileList"] = array();




//	Grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Grupo";
	$fdata["GoodName"] = "Grupo";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","Grupo");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "Grupo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Grupo";

	
	
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


	$tdatatik_tablas["Grupo"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "Grupo";
//	Secuencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Secuencia";
	$fdata["GoodName"] = "Secuencia";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","Secuencia");
	$fdata["FieldType"] = 2;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Secuencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Secuencia";

	
	
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


	$tdatatik_tablas["Secuencia"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "Secuencia";
//	DescripcionGrupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DescripcionGrupo";
	$fdata["GoodName"] = "DescripcionGrupo";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","DescripcionGrupo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DescripcionGrupo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DescripcionGrupo";

	
	
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


	$tdatatik_tablas["DescripcionGrupo"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "DescripcionGrupo";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","Descripcion");
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


	$tdatatik_tablas["Descripcion"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "Descripcion";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","Usuario");
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatik_tablas["Usuario"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "Usuario";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_tablas";
	$fdata["Label"] = GetFieldLabel("tik_tablas","FechaSistema");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaSistema";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaSistema";

	
	
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


	$tdatatik_tablas["FechaSistema"] = $fdata;
		$tdatatik_tablas[".searchableFields"][] = "FechaSistema";


$tables_data["tik_tablas"]=&$tdatatik_tablas;
$field_labels["tik_tablas"] = &$fieldLabelstik_tablas;
$fieldToolTips["tik_tablas"] = &$fieldToolTipstik_tablas;
$placeHolders["tik_tablas"] = &$placeHolderstik_tablas;
$page_titles["tik_tablas"] = &$pageTitlestik_tablas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_tablas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_tablas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_tablas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Grupo, Secuencia, DescripcionGrupo, Descripcion, Usuario, FechaSistema";
$proto0["m_strFrom"] = "FROM tik_tablas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Grupo, Secuencia";
	
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
	"m_strName" => "Grupo",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto6["m_sql"] = "Grupo";
$proto6["m_srcTableName"] = "tik_tablas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto8["m_sql"] = "Secuencia";
$proto8["m_srcTableName"] = "tik_tablas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DescripcionGrupo",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto10["m_sql"] = "DescripcionGrupo";
$proto10["m_srcTableName"] = "tik_tablas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto12["m_sql"] = "Descripcion";
$proto12["m_srcTableName"] = "tik_tablas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto14["m_sql"] = "Usuario";
$proto14["m_srcTableName"] = "tik_tablas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto16["m_sql"] = "FechaSistema";
$proto16["m_srcTableName"] = "tik_tablas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tik_tablas";
$proto19["m_srcTableName"] = "tik_tablas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Grupo";
$proto19["m_columns"][] = "Secuencia";
$proto19["m_columns"][] = "DescripcionGrupo";
$proto19["m_columns"][] = "Descripcion";
$proto19["m_columns"][] = "Usuario";
$proto19["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tik_tablas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tik_tablas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Grupo",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_tablas",
	"m_srcTableName" => "tik_tablas"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_tablas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_tablas = createSqlQuery_tik_tablas();


	
		;

						

$tdatatik_tablas[".sqlquery"] = $queryData_tik_tablas;



$tableEvents["tik_tablas"] = new eventsBase;
$tdatatik_tablas[".hasEvents"] = false;

?>