<?php
$tdatatik_audit = array();
$tdatatik_audit[".searchableFields"] = array();
$tdatatik_audit[".ShortName"] = "tik_audit";
$tdatatik_audit[".OwnerID"] = "";
$tdatatik_audit[".OriginalTable"] = "tik_audit";


$tdatatik_audit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_audit[".originalPagesByType"] = $tdatatik_audit[".pagesByType"];
$tdatatik_audit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_audit[".originalPages"] = $tdatatik_audit[".pages"];
$tdatatik_audit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_audit[".originalDefaultPages"] = $tdatatik_audit[".defaultPages"];

//	field labels
$fieldLabelstik_audit = array();
$fieldToolTipstik_audit = array();
$pageTitlestik_audit = array();
$placeHolderstik_audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_audit["Spanish"] = array();
	$fieldToolTipstik_audit["Spanish"] = array();
	$placeHolderstik_audit["Spanish"] = array();
	$pageTitlestik_audit["Spanish"] = array();
	$fieldLabelstik_audit["Spanish"]["id"] = "Id";
	$fieldToolTipstik_audit["Spanish"]["id"] = "";
	$placeHolderstik_audit["Spanish"]["id"] = "";
	$fieldLabelstik_audit["Spanish"]["datetime"] = "Fecha/Hora";
	$fieldToolTipstik_audit["Spanish"]["datetime"] = "";
	$placeHolderstik_audit["Spanish"]["datetime"] = "";
	$fieldLabelstik_audit["Spanish"]["ip"] = "IP";
	$fieldToolTipstik_audit["Spanish"]["ip"] = "";
	$placeHolderstik_audit["Spanish"]["ip"] = "";
	$fieldLabelstik_audit["Spanish"]["user"] = "Usuario";
	$fieldToolTipstik_audit["Spanish"]["user"] = "";
	$placeHolderstik_audit["Spanish"]["user"] = "";
	$fieldLabelstik_audit["Spanish"]["table"] = "Tabla";
	$fieldToolTipstik_audit["Spanish"]["table"] = "";
	$placeHolderstik_audit["Spanish"]["table"] = "";
	$fieldLabelstik_audit["Spanish"]["action"] = "Acción";
	$fieldToolTipstik_audit["Spanish"]["action"] = "";
	$placeHolderstik_audit["Spanish"]["action"] = "";
	$fieldLabelstik_audit["Spanish"]["description"] = "Descripción";
	$fieldToolTipstik_audit["Spanish"]["description"] = "";
	$placeHolderstik_audit["Spanish"]["description"] = "";
	if (count($fieldToolTipstik_audit["Spanish"]))
		$tdatatik_audit[".isUseToolTips"] = true;
}


	$tdatatik_audit[".NCSearch"] = true;



$tdatatik_audit[".shortTableName"] = "tik_audit";
$tdatatik_audit[".nSecOptions"] = 0;

$tdatatik_audit[".mainTableOwnerID"] = "";
$tdatatik_audit[".entityType"] = 0;
$tdatatik_audit[".connId"] = "mpc_at_localhost";


$tdatatik_audit[".strOriginalTableName"] = "tik_audit";

	



$tdatatik_audit[".showAddInPopup"] = false;

$tdatatik_audit[".showEditInPopup"] = false;

$tdatatik_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_audit[".listAjax"] = false;
//	temporary
//$tdatatik_audit[".listAjax"] = false;

	$tdatatik_audit[".audit"] = true;

	$tdatatik_audit[".locking"] = false;


$pages = $tdatatik_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_audit[".edit"] = true;
	$tdatatik_audit[".afterEditAction"] = 0;
	$tdatatik_audit[".closePopupAfterEdit"] = 1;
	$tdatatik_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_audit[".add"] = true;
$tdatatik_audit[".afterAddAction"] = 0;
$tdatatik_audit[".closePopupAfterAdd"] = 1;
$tdatatik_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_audit[".list"] = true;
}



$tdatatik_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_audit[".printFriendly"] = true;
}



$tdatatik_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_audit[".isUseAjaxSuggest"] = true;

$tdatatik_audit[".rowHighlite"] = true;



																		

$tdatatik_audit[".ajaxCodeSnippetAdded"] = false;

$tdatatik_audit[".buttonsAdded"] = false;

$tdatatik_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_audit[".isUseTimeForSearch"] = false;


$tdatatik_audit[".badgeColor"] = "5F9EA0";


$tdatatik_audit[".allSearchFields"] = array();
$tdatatik_audit[".filterFields"] = array();
$tdatatik_audit[".requiredSearchFields"] = array();

$tdatatik_audit[".googleLikeFields"] = array();
$tdatatik_audit[".googleLikeFields"][] = "id";
$tdatatik_audit[".googleLikeFields"][] = "datetime";
$tdatatik_audit[".googleLikeFields"][] = "ip";
$tdatatik_audit[".googleLikeFields"][] = "user";
$tdatatik_audit[".googleLikeFields"][] = "table";
$tdatatik_audit[".googleLikeFields"][] = "action";
$tdatatik_audit[".googleLikeFields"][] = "description";



$tdatatik_audit[".tableType"] = "list";

$tdatatik_audit[".printerPageOrientation"] = 0;
$tdatatik_audit[".nPrinterPageScale"] = 100;

$tdatatik_audit[".nPrinterSplitRecords"] = 40;

$tdatatik_audit[".geocodingEnabled"] = false;










$tdatatik_audit[".pageSize"] = 20;

$tdatatik_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_audit[".strOrderBy"] = $tstrOrderBy;

$tdatatik_audit[".orderindexes"] = array();


$tdatatik_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdatatik_audit[".sqlFrom"] = "FROM tik_audit";
$tdatatik_audit[".sqlWhereExpr"] = "";
$tdatatik_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_audit[".highlightSearchResults"] = true;

$tableKeystik_audit = array();
$tableKeystik_audit[] = "id";
$tdatatik_audit[".Keys"] = $tableKeystik_audit;


$tdatatik_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatatik_audit["id"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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


	$tdatatik_audit["datetime"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","ip");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatik_audit["ip"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatik_audit["user"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","table");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatik_audit["table"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","action");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatik_audit["action"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "tik_audit";
	$fdata["Label"] = GetFieldLabel("tik_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatatik_audit["description"] = $fdata;
		$tdatatik_audit[".searchableFields"][] = "description";


$tables_data["tik_audit"]=&$tdatatik_audit;
$field_labels["tik_audit"] = &$fieldLabelstik_audit;
$fieldToolTips["tik_audit"] = &$fieldToolTipstik_audit;
$placeHolders["tik_audit"] = &$placeHolderstik_audit;
$page_titles["tik_audit"] = &$pageTitlestik_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM tik_audit";
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
	"m_strName" => "id",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tik_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "tik_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "tik_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "tik_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "tik_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "tik_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "tik_audit",
	"m_srcTableName" => "tik_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "tik_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tik_audit";
$proto21["m_srcTableName"] = "tik_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tik_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tik_audit";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tik_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_audit = createSqlQuery_tik_audit();


	
		;

							

$tdatatik_audit[".sqlquery"] = $queryData_tik_audit;



$tableEvents["tik_audit"] = new eventsBase;
$tdatatik_audit[".hasEvents"] = false;

?>