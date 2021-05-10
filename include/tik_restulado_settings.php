<?php
$tdatatik_restulado = array();
$tdatatik_restulado[".searchableFields"] = array();
$tdatatik_restulado[".ShortName"] = "tik_restulado";
$tdatatik_restulado[".OwnerID"] = "Usuario";
$tdatatik_restulado[".OriginalTable"] = "tik_restulado";


$tdatatik_restulado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_restulado[".originalPagesByType"] = $tdatatik_restulado[".pagesByType"];
$tdatatik_restulado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_restulado[".originalPages"] = $tdatatik_restulado[".pages"];
$tdatatik_restulado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_restulado[".originalDefaultPages"] = $tdatatik_restulado[".defaultPages"];

//	field labels
$fieldLabelstik_restulado = array();
$fieldToolTipstik_restulado = array();
$pageTitlestik_restulado = array();
$placeHolderstik_restulado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_restulado["Spanish"] = array();
	$fieldToolTipstik_restulado["Spanish"] = array();
	$placeHolderstik_restulado["Spanish"] = array();
	$pageTitlestik_restulado["Spanish"] = array();
	$fieldLabelstik_restulado["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipstik_restulado["Spanish"]["Solicitud"] = "";
	$placeHolderstik_restulado["Spanish"]["Solicitud"] = "";
	$fieldLabelstik_restulado["Spanish"]["Secuencia"] = "Secuencia";
	$fieldToolTipstik_restulado["Spanish"]["Secuencia"] = "";
	$placeHolderstik_restulado["Spanish"]["Secuencia"] = "";
	$fieldLabelstik_restulado["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_restulado["Spanish"]["Descripcion"] = "";
	$placeHolderstik_restulado["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_restulado["Spanish"]["Documentos"] = "Documentos";
	$fieldToolTipstik_restulado["Spanish"]["Documentos"] = "";
	$placeHolderstik_restulado["Spanish"]["Documentos"] = "";
	$fieldLabelstik_restulado["Spanish"]["Fotografias"] = "Fotografias";
	$fieldToolTipstik_restulado["Spanish"]["Fotografias"] = "";
	$placeHolderstik_restulado["Spanish"]["Fotografias"] = "";
	$fieldLabelstik_restulado["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_restulado["Spanish"]["Usuario"] = "";
	$placeHolderstik_restulado["Spanish"]["Usuario"] = "";
	$fieldLabelstik_restulado["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_restulado["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_restulado["Spanish"]["FechaSistema"] = "";
	if (count($fieldToolTipstik_restulado["Spanish"]))
		$tdatatik_restulado[".isUseToolTips"] = true;
}


	$tdatatik_restulado[".NCSearch"] = true;



$tdatatik_restulado[".shortTableName"] = "tik_restulado";
$tdatatik_restulado[".nSecOptions"] = 2;

$tdatatik_restulado[".mainTableOwnerID"] = "Usuario";
$tdatatik_restulado[".entityType"] = 0;
$tdatatik_restulado[".connId"] = "mpc_at_localhost";


$tdatatik_restulado[".strOriginalTableName"] = "tik_restulado";

	



$tdatatik_restulado[".showAddInPopup"] = false;

$tdatatik_restulado[".showEditInPopup"] = false;

$tdatatik_restulado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_restulado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_restulado[".listAjax"] = false;
//	temporary
//$tdatatik_restulado[".listAjax"] = false;

	$tdatatik_restulado[".audit"] = true;

	$tdatatik_restulado[".locking"] = false;


$pages = $tdatatik_restulado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_restulado[".edit"] = true;
	$tdatatik_restulado[".afterEditAction"] = 0;
	$tdatatik_restulado[".closePopupAfterEdit"] = 1;
	$tdatatik_restulado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_restulado[".add"] = true;
$tdatatik_restulado[".afterAddAction"] = 0;
$tdatatik_restulado[".closePopupAfterAdd"] = 1;
$tdatatik_restulado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_restulado[".list"] = true;
}



$tdatatik_restulado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_restulado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_restulado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_restulado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_restulado[".printFriendly"] = true;
}



$tdatatik_restulado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_restulado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_restulado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_restulado[".isUseAjaxSuggest"] = true;

$tdatatik_restulado[".rowHighlite"] = true;



																																																																								

$tdatatik_restulado[".ajaxCodeSnippetAdded"] = false;

$tdatatik_restulado[".buttonsAdded"] = false;

$tdatatik_restulado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatik_restulado[".isUseTimeForSearch"] = false;


$tdatatik_restulado[".badgeColor"] = "cd5c5c";


$tdatatik_restulado[".allSearchFields"] = array();
$tdatatik_restulado[".filterFields"] = array();
$tdatatik_restulado[".requiredSearchFields"] = array();

$tdatatik_restulado[".googleLikeFields"] = array();
$tdatatik_restulado[".googleLikeFields"][] = "Solicitud";
$tdatatik_restulado[".googleLikeFields"][] = "Secuencia";
$tdatatik_restulado[".googleLikeFields"][] = "Descripcion";
$tdatatik_restulado[".googleLikeFields"][] = "Documentos";
$tdatatik_restulado[".googleLikeFields"][] = "Fotografias";
$tdatatik_restulado[".googleLikeFields"][] = "Usuario";
$tdatatik_restulado[".googleLikeFields"][] = "FechaSistema";



$tdatatik_restulado[".tableType"] = "list";

$tdatatik_restulado[".printerPageOrientation"] = 0;
$tdatatik_restulado[".nPrinterPageScale"] = 100;

$tdatatik_restulado[".nPrinterSplitRecords"] = 40;

$tdatatik_restulado[".geocodingEnabled"] = false;










$tdatatik_restulado[".pageSize"] = 20;

$tdatatik_restulado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Solicitud, Secuencia";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_restulado[".strOrderBy"] = $tstrOrderBy;

$tdatatik_restulado[".orderindexes"] = array();
	$tdatatik_restulado[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Solicitud");

	$tdatatik_restulado[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Secuencia");



$tdatatik_restulado[".sqlHead"] = "SELECT Solicitud, Secuencia, Descripcion, Documentos, Fotografias, Usuario, FechaSistema";
$tdatatik_restulado[".sqlFrom"] = "FROM tik_restulado";
$tdatatik_restulado[".sqlWhereExpr"] = "";
$tdatatik_restulado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_restulado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_restulado[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_restulado[".highlightSearchResults"] = true;

$tableKeystik_restulado = array();
$tableKeystik_restulado[] = "Solicitud";
$tableKeystik_restulado[] = "Secuencia";
$tdatatik_restulado[".Keys"] = $tableKeystik_restulado;


$tdatatik_restulado[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Solicitud");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "Solicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Solicitud";

	
	
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


	$tdatatik_restulado["Solicitud"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Solicitud";
//	Secuencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Secuencia";
	$fdata["GoodName"] = "Secuencia";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Secuencia");
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


	$tdatatik_restulado["Secuencia"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Secuencia";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Descripcion");
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


	$tdatatik_restulado["Descripcion"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Descripcion";
//	Documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Documentos";
	$fdata["GoodName"] = "Documentos";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Documentos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Documentos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documentos";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|doc";
			$edata["acceptFileTypesHtml"] .= ",.doc";
						$edata["acceptFileTypes"] .= "|docx";
			$edata["acceptFileTypesHtml"] .= ",.docx";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|pdf";
			$edata["acceptFileTypesHtml"] .= ",.pdf";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
						$edata["acceptFileTypes"] .= "|ppt";
			$edata["acceptFileTypesHtml"] .= ",.ppt";
						$edata["acceptFileTypes"] .= "|pptx";
			$edata["acceptFileTypesHtml"] .= ",.pptx";
						$edata["acceptFileTypes"] .= "|xls";
			$edata["acceptFileTypesHtml"] .= ",.xls";
						$edata["acceptFileTypes"] .= "|xlsx";
			$edata["acceptFileTypesHtml"] .= ",.xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 5;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 150;

	
	
	
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


	$tdatatik_restulado["Documentos"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Documentos";
//	Fotografias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fotografias";
	$fdata["GoodName"] = "Fotografias";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Fotografias");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fotografias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fotografias";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "SnapshotCam");

	
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


	$tdatatik_restulado["Fotografias"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Fotografias";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","Usuario");
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


	$tdatatik_restulado["Usuario"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "Usuario";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_restulado";
	$fdata["Label"] = GetFieldLabel("tik_restulado","FechaSistema");
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


	$tdatatik_restulado["FechaSistema"] = $fdata;
		$tdatatik_restulado[".searchableFields"][] = "FechaSistema";


$tables_data["tik_restulado"]=&$tdatatik_restulado;
$field_labels["tik_restulado"] = &$fieldLabelstik_restulado;
$fieldToolTips["tik_restulado"] = &$fieldToolTipstik_restulado;
$placeHolders["tik_restulado"] = &$placeHolderstik_restulado;
$page_titles["tik_restulado"] = &$pageTitlestik_restulado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_restulado"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_restulado"] = array();



	
				$strOriginalDetailsTable="tik_interno";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_interno";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_interno";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_restulado"][0] = $masterParams;
				$masterTablesData["tik_restulado"][0]["masterKeys"] = array();
	$masterTablesData["tik_restulado"][0]["masterKeys"][]="Solicitud";
				$masterTablesData["tik_restulado"][0]["detailKeys"] = array();
	$masterTablesData["tik_restulado"][0]["detailKeys"][]="Solicitud";
		
	
				$strOriginalDetailsTable="tik_interno";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vtik_interno";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vtik_interno";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_restulado"][1] = $masterParams;
				$masterTablesData["tik_restulado"][1]["masterKeys"] = array();
	$masterTablesData["tik_restulado"][1]["masterKeys"][]="Solicitud";
				$masterTablesData["tik_restulado"][1]["detailKeys"] = array();
	$masterTablesData["tik_restulado"][1]["detailKeys"][]="Solicitud";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_restulado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Solicitud, Secuencia, Descripcion, Documentos, Fotografias, Usuario, FechaSistema";
$proto0["m_strFrom"] = "FROM tik_restulado";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Solicitud, Secuencia";
	
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
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto6["m_sql"] = "Solicitud";
$proto6["m_srcTableName"] = "tik_restulado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto8["m_sql"] = "Secuencia";
$proto8["m_srcTableName"] = "tik_restulado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "tik_restulado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Documentos",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto12["m_sql"] = "Documentos";
$proto12["m_srcTableName"] = "tik_restulado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fotografias",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto14["m_sql"] = "Fotografias";
$proto14["m_srcTableName"] = "tik_restulado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto16["m_sql"] = "Usuario";
$proto16["m_srcTableName"] = "tik_restulado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto18["m_sql"] = "FechaSistema";
$proto18["m_srcTableName"] = "tik_restulado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tik_restulado";
$proto21["m_srcTableName"] = "tik_restulado";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Solicitud";
$proto21["m_columns"][] = "Secuencia";
$proto21["m_columns"][] = "Descripcion";
$proto21["m_columns"][] = "Documentos";
$proto21["m_columns"][] = "Fotografias";
$proto21["m_columns"][] = "Usuario";
$proto21["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tik_restulado";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tik_restulado";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Solicitud",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_restulado",
	"m_srcTableName" => "tik_restulado"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_restulado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_restulado = createSqlQuery_tik_restulado();


	
		;

							

$tdatatik_restulado[".sqlquery"] = $queryData_tik_restulado;



$tableEvents["tik_restulado"] = new eventsBase;
$tdatatik_restulado[".hasEvents"] = false;

?>