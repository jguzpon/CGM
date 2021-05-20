<?php
$tdatatik_chat = array();
$tdatatik_chat[".searchableFields"] = array();
$tdatatik_chat[".ShortName"] = "tik_chat";
$tdatatik_chat[".OwnerID"] = "";
$tdatatik_chat[".OriginalTable"] = "tik_chat";


$tdatatik_chat[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdatatik_chat[".originalPagesByType"] = $tdatatik_chat[".pagesByType"];
$tdatatik_chat[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdatatik_chat[".originalPages"] = $tdatatik_chat[".pages"];
$tdatatik_chat[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\"}" );
$tdatatik_chat[".originalDefaultPages"] = $tdatatik_chat[".defaultPages"];

//	field labels
$fieldLabelstik_chat = array();
$fieldToolTipstik_chat = array();
$pageTitlestik_chat = array();
$placeHolderstik_chat = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_chat["Spanish"] = array();
	$fieldToolTipstik_chat["Spanish"] = array();
	$placeHolderstik_chat["Spanish"] = array();
	$pageTitlestik_chat["Spanish"] = array();
	$fieldLabelstik_chat["Spanish"]["DeUsuario"] = "De Usuario: ";
	$fieldToolTipstik_chat["Spanish"]["DeUsuario"] = "";
	$placeHolderstik_chat["Spanish"]["DeUsuario"] = "";
	$fieldLabelstik_chat["Spanish"]["FechaHora"] = "Fecha/Hora: ";
	$fieldToolTipstik_chat["Spanish"]["FechaHora"] = "";
	$placeHolderstik_chat["Spanish"]["FechaHora"] = "";
	$fieldLabelstik_chat["Spanish"]["AUsuario"] = "A Usuario: ";
	$fieldToolTipstik_chat["Spanish"]["AUsuario"] = "";
	$placeHolderstik_chat["Spanish"]["AUsuario"] = "";
	$fieldLabelstik_chat["Spanish"]["Mensaje"] = "Mensaje: ";
	$fieldToolTipstik_chat["Spanish"]["Mensaje"] = "";
	$placeHolderstik_chat["Spanish"]["Mensaje"] = "";
	$fieldLabelstik_chat["Spanish"]["Archivo"] = "Archivo";
	$fieldToolTipstik_chat["Spanish"]["Archivo"] = "";
	$placeHolderstik_chat["Spanish"]["Archivo"] = "";
	$fieldLabelstik_chat["Spanish"]["Estado"] = "Estado: ";
	$fieldToolTipstik_chat["Spanish"]["Estado"] = "";
	$placeHolderstik_chat["Spanish"]["Estado"] = "";
	if (count($fieldToolTipstik_chat["Spanish"]))
		$tdatatik_chat[".isUseToolTips"] = true;
}


	$tdatatik_chat[".NCSearch"] = true;



$tdatatik_chat[".shortTableName"] = "tik_chat";
$tdatatik_chat[".nSecOptions"] = 0;

$tdatatik_chat[".mainTableOwnerID"] = "";
$tdatatik_chat[".entityType"] = 0;
$tdatatik_chat[".connId"] = "mpc_at_localhost";


$tdatatik_chat[".strOriginalTableName"] = "tik_chat";

	



$tdatatik_chat[".showAddInPopup"] = false;

$tdatatik_chat[".showEditInPopup"] = false;

$tdatatik_chat[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_chat[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_chat[".listAjax"] = false;
//	temporary
//$tdatatik_chat[".listAjax"] = false;

	$tdatatik_chat[".audit"] = true;

	$tdatatik_chat[".locking"] = false;


$pages = $tdatatik_chat[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_chat[".edit"] = true;
	$tdatatik_chat[".afterEditAction"] = 1;
	$tdatatik_chat[".closePopupAfterEdit"] = 1;
	$tdatatik_chat[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_chat[".add"] = true;
$tdatatik_chat[".afterAddAction"] = 1;
$tdatatik_chat[".closePopupAfterAdd"] = 1;
$tdatatik_chat[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_chat[".list"] = true;
}



$tdatatik_chat[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_chat[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_chat[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_chat[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_chat[".printFriendly"] = true;
}



$tdatatik_chat[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_chat[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_chat[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_chat[".isUseAjaxSuggest"] = true;

$tdatatik_chat[".rowHighlite"] = true;



																																				

$tdatatik_chat[".ajaxCodeSnippetAdded"] = false;

$tdatatik_chat[".buttonsAdded"] = false;

$tdatatik_chat[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_chat[".isUseTimeForSearch"] = false;


$tdatatik_chat[".badgeColor"] = "5f9ea0";


$tdatatik_chat[".allSearchFields"] = array();
$tdatatik_chat[".filterFields"] = array();
$tdatatik_chat[".requiredSearchFields"] = array();

$tdatatik_chat[".googleLikeFields"] = array();
$tdatatik_chat[".googleLikeFields"][] = "DeUsuario";
$tdatatik_chat[".googleLikeFields"][] = "FechaHora";
$tdatatik_chat[".googleLikeFields"][] = "AUsuario";
$tdatatik_chat[".googleLikeFields"][] = "Mensaje";
$tdatatik_chat[".googleLikeFields"][] = "Archivo";
$tdatatik_chat[".googleLikeFields"][] = "Estado";



$tdatatik_chat[".tableType"] = "list";

$tdatatik_chat[".printerPageOrientation"] = 0;
$tdatatik_chat[".nPrinterPageScale"] = 100;

$tdatatik_chat[".nPrinterSplitRecords"] = 40;

$tdatatik_chat[".geocodingEnabled"] = false;










$tdatatik_chat[".pageSize"] = 20;

$tdatatik_chat[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY DeUsuario, FechaHora DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_chat[".strOrderBy"] = $tstrOrderBy;

$tdatatik_chat[".orderindexes"] = array();
	$tdatatik_chat[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "DeUsuario");

	$tdatatik_chat[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "FechaHora");



$tdatatik_chat[".sqlHead"] = "SELECT DeUsuario, FechaHora, AUsuario, Mensaje, Archivo, Estado";
$tdatatik_chat[".sqlFrom"] = "FROM tik_chat";
$tdatatik_chat[".sqlWhereExpr"] = "";
$tdatatik_chat[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_chat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_chat[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_chat[".highlightSearchResults"] = true;

$tableKeystik_chat = array();
$tableKeystik_chat[] = "DeUsuario";
$tableKeystik_chat[] = "FechaHora";
$tdatatik_chat[".Keys"] = $tableKeystik_chat;


$tdatatik_chat[".hideMobileList"] = array();




//	DeUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DeUsuario";
	$fdata["GoodName"] = "DeUsuario";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","DeUsuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DeUsuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeUsuario";

	
	
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


	$tdatatik_chat["DeUsuario"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "DeUsuario";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","FechaHora");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FechaHora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FechaHora";

	
	
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


	$tdatatik_chat["FechaHora"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "FechaHora";
//	AUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AUsuario";
	$fdata["GoodName"] = "AUsuario";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","AUsuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AUsuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUsuario";

	
	
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
	$edata["LookupTable"] = "tik_chatau";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "Usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Usuario";

	

	
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


	$tdatatik_chat["AUsuario"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "AUsuario";
//	Mensaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Mensaje";
	$fdata["GoodName"] = "Mensaje";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","Mensaje");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mensaje";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mensaje";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatik_chat["Mensaje"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "Mensaje";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","Archivo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Archivo";

	
	
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


	$tdatatik_chat["Archivo"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "Archivo";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "tik_chat";
	$fdata["Label"] = GetFieldLabel("tik_chat","Estado");
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


	$tdatatik_chat["Estado"] = $fdata;
		$tdatatik_chat[".searchableFields"][] = "Estado";


$tables_data["tik_chat"]=&$tdatatik_chat;
$field_labels["tik_chat"] = &$fieldLabelstik_chat;
$fieldToolTips["tik_chat"] = &$fieldToolTipstik_chat;
$placeHolders["tik_chat"] = &$placeHolderstik_chat;
$page_titles["tik_chat"] = &$pageTitlestik_chat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_chat"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_chat"] = array();



	
				$strOriginalDetailsTable="tik_chatau";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_chatau";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_chatau";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_chat"][0] = $masterParams;
				$masterTablesData["tik_chat"][0]["masterKeys"] = array();
	$masterTablesData["tik_chat"][0]["masterKeys"][]="Usuario";
				$masterTablesData["tik_chat"][0]["masterKeys"][]="Usuario";
				$masterTablesData["tik_chat"][0]["detailKeys"] = array();
	$masterTablesData["tik_chat"][0]["detailKeys"][]="DeUsuario";
				$masterTablesData["tik_chat"][0]["detailKeys"][]="AUsuario";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_chat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DeUsuario, FechaHora, AUsuario, Mensaje, Archivo, Estado";
$proto0["m_strFrom"] = "FROM tik_chat";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY DeUsuario, FechaHora DESC";
	
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
	"m_strName" => "DeUsuario",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto6["m_sql"] = "DeUsuario";
$proto6["m_srcTableName"] = "tik_chat";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto8["m_sql"] = "FechaHora";
$proto8["m_srcTableName"] = "tik_chat";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AUsuario",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto10["m_sql"] = "AUsuario";
$proto10["m_srcTableName"] = "tik_chat";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Mensaje",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto12["m_sql"] = "Mensaje";
$proto12["m_srcTableName"] = "tik_chat";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto14["m_sql"] = "Archivo";
$proto14["m_srcTableName"] = "tik_chat";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "tik_chat";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tik_chat";
$proto19["m_srcTableName"] = "tik_chat";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "DeUsuario";
$proto19["m_columns"][] = "FechaHora";
$proto19["m_columns"][] = "AUsuario";
$proto19["m_columns"][] = "Mensaje";
$proto19["m_columns"][] = "Archivo";
$proto19["m_columns"][] = "Estado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tik_chat";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tik_chat";
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
	"m_strName" => "DeUsuario",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_chat",
	"m_srcTableName" => "tik_chat"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_chat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_chat = createSqlQuery_tik_chat();


	
		;

						

$tdatatik_chat[".sqlquery"] = $queryData_tik_chat;



$tableEvents["tik_chat"] = new eventsBase;
$tdatatik_chat[".hasEvents"] = false;

?>