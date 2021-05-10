<?php
$tdatatik_memorando_adjunto = array();
$tdatatik_memorando_adjunto[".searchableFields"] = array();
$tdatatik_memorando_adjunto[".ShortName"] = "tik_memorando_adjunto";
$tdatatik_memorando_adjunto[".OwnerID"] = "";
$tdatatik_memorando_adjunto[".OriginalTable"] = "tik_memorando_adjunto";


$tdatatik_memorando_adjunto[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_memorando_adjunto[".originalPagesByType"] = $tdatatik_memorando_adjunto[".pagesByType"];
$tdatatik_memorando_adjunto[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_memorando_adjunto[".originalPages"] = $tdatatik_memorando_adjunto[".pages"];
$tdatatik_memorando_adjunto[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_memorando_adjunto[".originalDefaultPages"] = $tdatatik_memorando_adjunto[".defaultPages"];

//	field labels
$fieldLabelstik_memorando_adjunto = array();
$fieldToolTipstik_memorando_adjunto = array();
$pageTitlestik_memorando_adjunto = array();
$placeHolderstik_memorando_adjunto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_memorando_adjunto["Spanish"] = array();
	$fieldToolTipstik_memorando_adjunto["Spanish"] = array();
	$placeHolderstik_memorando_adjunto["Spanish"] = array();
	$pageTitlestik_memorando_adjunto["Spanish"] = array();
	$fieldLabelstik_memorando_adjunto["Spanish"]["NoMemorando"] = "No. Memorando";
	$fieldToolTipstik_memorando_adjunto["Spanish"]["NoMemorando"] = "";
	$placeHolderstik_memorando_adjunto["Spanish"]["NoMemorando"] = "";
	$fieldLabelstik_memorando_adjunto["Spanish"]["Documento"] = "No. Documento";
	$fieldToolTipstik_memorando_adjunto["Spanish"]["Documento"] = "";
	$placeHolderstik_memorando_adjunto["Spanish"]["Documento"] = "";
	$fieldLabelstik_memorando_adjunto["Spanish"]["Archivo"] = "Archivo";
	$fieldToolTipstik_memorando_adjunto["Spanish"]["Archivo"] = "";
	$placeHolderstik_memorando_adjunto["Spanish"]["Archivo"] = "";
	$fieldLabelstik_memorando_adjunto["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_memorando_adjunto["Spanish"]["Usuario"] = "";
	$placeHolderstik_memorando_adjunto["Spanish"]["Usuario"] = "";
	$fieldLabelstik_memorando_adjunto["Spanish"]["FechaHora"] = "Fecha Hora";
	$fieldToolTipstik_memorando_adjunto["Spanish"]["FechaHora"] = "";
	$placeHolderstik_memorando_adjunto["Spanish"]["FechaHora"] = "";
	if (count($fieldToolTipstik_memorando_adjunto["Spanish"]))
		$tdatatik_memorando_adjunto[".isUseToolTips"] = true;
}


	$tdatatik_memorando_adjunto[".NCSearch"] = true;



$tdatatik_memorando_adjunto[".shortTableName"] = "tik_memorando_adjunto";
$tdatatik_memorando_adjunto[".nSecOptions"] = 0;

$tdatatik_memorando_adjunto[".mainTableOwnerID"] = "";
$tdatatik_memorando_adjunto[".entityType"] = 0;
$tdatatik_memorando_adjunto[".connId"] = "mpc_at_localhost";


$tdatatik_memorando_adjunto[".strOriginalTableName"] = "tik_memorando_adjunto";

	



$tdatatik_memorando_adjunto[".showAddInPopup"] = false;

$tdatatik_memorando_adjunto[".showEditInPopup"] = false;

$tdatatik_memorando_adjunto[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_memorando_adjunto[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_memorando_adjunto[".listAjax"] = false;
//	temporary
//$tdatatik_memorando_adjunto[".listAjax"] = false;

	$tdatatik_memorando_adjunto[".audit"] = true;

	$tdatatik_memorando_adjunto[".locking"] = false;


$pages = $tdatatik_memorando_adjunto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_memorando_adjunto[".edit"] = true;
	$tdatatik_memorando_adjunto[".afterEditAction"] = 1;
	$tdatatik_memorando_adjunto[".closePopupAfterEdit"] = 1;
	$tdatatik_memorando_adjunto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_memorando_adjunto[".add"] = true;
$tdatatik_memorando_adjunto[".afterAddAction"] = 1;
$tdatatik_memorando_adjunto[".closePopupAfterAdd"] = 1;
$tdatatik_memorando_adjunto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_memorando_adjunto[".list"] = true;
}



$tdatatik_memorando_adjunto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_memorando_adjunto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_memorando_adjunto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_memorando_adjunto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_memorando_adjunto[".printFriendly"] = true;
}



$tdatatik_memorando_adjunto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_memorando_adjunto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_memorando_adjunto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_memorando_adjunto[".isUseAjaxSuggest"] = true;

$tdatatik_memorando_adjunto[".rowHighlite"] = true;



																																																																								

$tdatatik_memorando_adjunto[".ajaxCodeSnippetAdded"] = false;

$tdatatik_memorando_adjunto[".buttonsAdded"] = false;

$tdatatik_memorando_adjunto[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_memorando_adjunto[".isUseTimeForSearch"] = false;


$tdatatik_memorando_adjunto[".badgeColor"] = "008080";


$tdatatik_memorando_adjunto[".allSearchFields"] = array();
$tdatatik_memorando_adjunto[".filterFields"] = array();
$tdatatik_memorando_adjunto[".requiredSearchFields"] = array();

$tdatatik_memorando_adjunto[".googleLikeFields"] = array();
$tdatatik_memorando_adjunto[".googleLikeFields"][] = "NoMemorando";
$tdatatik_memorando_adjunto[".googleLikeFields"][] = "Documento";
$tdatatik_memorando_adjunto[".googleLikeFields"][] = "Archivo";
$tdatatik_memorando_adjunto[".googleLikeFields"][] = "Usuario";
$tdatatik_memorando_adjunto[".googleLikeFields"][] = "FechaHora";



$tdatatik_memorando_adjunto[".tableType"] = "list";

$tdatatik_memorando_adjunto[".printerPageOrientation"] = 0;
$tdatatik_memorando_adjunto[".nPrinterPageScale"] = 100;

$tdatatik_memorando_adjunto[".nPrinterSplitRecords"] = 40;

$tdatatik_memorando_adjunto[".geocodingEnabled"] = false;










$tdatatik_memorando_adjunto[".pageSize"] = 20;

$tdatatik_memorando_adjunto[".warnLeavingPages"] = true;

$tdatatik_memorando_adjunto[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "ORDER BY NoMemorando DESC, Documento";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_memorando_adjunto[".strOrderBy"] = $tstrOrderBy;

$tdatatik_memorando_adjunto[".orderindexes"] = array();
	$tdatatik_memorando_adjunto[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "NoMemorando");

	$tdatatik_memorando_adjunto[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Documento");



$tdatatik_memorando_adjunto[".sqlHead"] = "SELECT NoMemorando, Documento, Archivo, Usuario, FechaHora";
$tdatatik_memorando_adjunto[".sqlFrom"] = "FROM tik_memorando_adjunto";
$tdatatik_memorando_adjunto[".sqlWhereExpr"] = "";
$tdatatik_memorando_adjunto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_memorando_adjunto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_memorando_adjunto[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_memorando_adjunto[".highlightSearchResults"] = true;

$tableKeystik_memorando_adjunto = array();
$tableKeystik_memorando_adjunto[] = "NoMemorando";
$tableKeystik_memorando_adjunto[] = "Documento";
$tdatatik_memorando_adjunto[".Keys"] = $tableKeystik_memorando_adjunto;


$tdatatik_memorando_adjunto[".hideMobileList"] = array();




//	NoMemorando
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NoMemorando";
	$fdata["GoodName"] = "NoMemorando";
	$fdata["ownerTable"] = "tik_memorando_adjunto";
	$fdata["Label"] = GetFieldLabel("tik_memorando_adjunto","NoMemorando");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "NoMemorando";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoMemorando";

	
	
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


	$tdatatik_memorando_adjunto["NoMemorando"] = $fdata;
		$tdatatik_memorando_adjunto[".searchableFields"][] = "NoMemorando";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "tik_memorando_adjunto";
	$fdata["Label"] = GetFieldLabel("tik_memorando_adjunto","Documento");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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


	$tdatatik_memorando_adjunto["Documento"] = $fdata;
		$tdatatik_memorando_adjunto[".searchableFields"][] = "Documento";
//	Archivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Archivo";
	$fdata["GoodName"] = "Archivo";
	$fdata["ownerTable"] = "tik_memorando_adjunto";
	$fdata["Label"] = GetFieldLabel("tik_memorando_adjunto","Archivo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Archivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Archivo";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 300;

	
	
	
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


	$tdatatik_memorando_adjunto["Archivo"] = $fdata;
		$tdatatik_memorando_adjunto[".searchableFields"][] = "Archivo";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_memorando_adjunto";
	$fdata["Label"] = GetFieldLabel("tik_memorando_adjunto","Usuario");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "zusuarios";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
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


	$tdatatik_memorando_adjunto["Usuario"] = $fdata;
		$tdatatik_memorando_adjunto[".searchableFields"][] = "Usuario";
//	FechaHora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FechaHora";
	$fdata["GoodName"] = "FechaHora";
	$fdata["ownerTable"] = "tik_memorando_adjunto";
	$fdata["Label"] = GetFieldLabel("tik_memorando_adjunto","FechaHora");
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


	$tdatatik_memorando_adjunto["FechaHora"] = $fdata;
		$tdatatik_memorando_adjunto[".searchableFields"][] = "FechaHora";


$tables_data["tik_memorando_adjunto"]=&$tdatatik_memorando_adjunto;
$field_labels["tik_memorando_adjunto"] = &$fieldLabelstik_memorando_adjunto;
$fieldToolTips["tik_memorando_adjunto"] = &$fieldToolTipstik_memorando_adjunto;
$placeHolders["tik_memorando_adjunto"] = &$placeHolderstik_memorando_adjunto;
$page_titles["tik_memorando_adjunto"] = &$pageTitlestik_memorando_adjunto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_memorando_adjunto"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_memorando_adjunto"] = array();



	
				$strOriginalDetailsTable="tik_memorando";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_memorando";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_memorando";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_memorando_adjunto"][0] = $masterParams;
				$masterTablesData["tik_memorando_adjunto"][0]["masterKeys"] = array();
	$masterTablesData["tik_memorando_adjunto"][0]["masterKeys"][]="NoMemorando";
				$masterTablesData["tik_memorando_adjunto"][0]["detailKeys"] = array();
	$masterTablesData["tik_memorando_adjunto"][0]["detailKeys"][]="NoMemorando";
		
	
				$strOriginalDetailsTable="tik_memorando_aut";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_memorando_aut";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_memorando_aut";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_memorando_adjunto"][1] = $masterParams;
				$masterTablesData["tik_memorando_adjunto"][1]["masterKeys"] = array();
	$masterTablesData["tik_memorando_adjunto"][1]["masterKeys"][]="NoMemorando";
				$masterTablesData["tik_memorando_adjunto"][1]["detailKeys"] = array();
	$masterTablesData["tik_memorando_adjunto"][1]["detailKeys"][]="NoMemorando";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_memorando_adjunto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NoMemorando, Documento, Archivo, Usuario, FechaHora";
$proto0["m_strFrom"] = "FROM tik_memorando_adjunto";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY NoMemorando DESC, Documento";
	
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
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto6["m_sql"] = "NoMemorando";
$proto6["m_srcTableName"] = "tik_memorando_adjunto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto8["m_sql"] = "Documento";
$proto8["m_srcTableName"] = "tik_memorando_adjunto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Archivo",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto10["m_sql"] = "Archivo";
$proto10["m_srcTableName"] = "tik_memorando_adjunto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto12["m_sql"] = "Usuario";
$proto12["m_srcTableName"] = "tik_memorando_adjunto";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaHora",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto14["m_sql"] = "FechaHora";
$proto14["m_srcTableName"] = "tik_memorando_adjunto";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tik_memorando_adjunto";
$proto17["m_srcTableName"] = "tik_memorando_adjunto";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "NoMemorando";
$proto17["m_columns"][] = "Documento";
$proto17["m_columns"][] = "Archivo";
$proto17["m_columns"][] = "Usuario";
$proto17["m_columns"][] = "FechaHora";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tik_memorando_adjunto";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tik_memorando_adjunto";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "NoMemorando",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "tik_memorando_adjunto",
	"m_srcTableName" => "tik_memorando_adjunto"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_memorando_adjunto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_memorando_adjunto = createSqlQuery_tik_memorando_adjunto();


	
		;

					

$tdatatik_memorando_adjunto[".sqlquery"] = $queryData_tik_memorando_adjunto;



include_once(getabspath("include/tik_memorando_adjunto_events.php"));
$tableEvents["tik_memorando_adjunto"] = new eventclass_tik_memorando_adjunto;
$tdatatik_memorando_adjunto[".hasEvents"] = true;

?>