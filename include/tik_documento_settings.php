<?php
$tdatatik_documento = array();
$tdatatik_documento[".searchableFields"] = array();
$tdatatik_documento[".ShortName"] = "tik_documento";
$tdatatik_documento[".OwnerID"] = "";
$tdatatik_documento[".OriginalTable"] = "tik_documento";


$tdatatik_documento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_documento[".originalPagesByType"] = $tdatatik_documento[".pagesByType"];
$tdatatik_documento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_documento[".originalPages"] = $tdatatik_documento[".pages"];
$tdatatik_documento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_documento[".originalDefaultPages"] = $tdatatik_documento[".defaultPages"];

//	field labels
$fieldLabelstik_documento = array();
$fieldToolTipstik_documento = array();
$pageTitlestik_documento = array();
$placeHolderstik_documento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_documento["Spanish"] = array();
	$fieldToolTipstik_documento["Spanish"] = array();
	$placeHolderstik_documento["Spanish"] = array();
	$pageTitlestik_documento["Spanish"] = array();
	$fieldLabelstik_documento["Spanish"]["Solicitud"] = "Solicitud";
	$fieldToolTipstik_documento["Spanish"]["Solicitud"] = "";
	$placeHolderstik_documento["Spanish"]["Solicitud"] = "";
	$fieldLabelstik_documento["Spanish"]["Secuencia"] = "Secuencia";
	$fieldToolTipstik_documento["Spanish"]["Secuencia"] = "";
	$placeHolderstik_documento["Spanish"]["Secuencia"] = "";
	$fieldLabelstik_documento["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_documento["Spanish"]["Descripcion"] = "";
	$placeHolderstik_documento["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_documento["Spanish"]["Documentos"] = "Documento(s)";
	$fieldToolTipstik_documento["Spanish"]["Documentos"] = "";
	$placeHolderstik_documento["Spanish"]["Documentos"] = "";
	$fieldLabelstik_documento["Spanish"]["Fotografias"] = "Fotografia";
	$fieldToolTipstik_documento["Spanish"]["Fotografias"] = "";
	$placeHolderstik_documento["Spanish"]["Fotografias"] = "";
	$fieldLabelstik_documento["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_documento["Spanish"]["Usuario"] = "";
	$placeHolderstik_documento["Spanish"]["Usuario"] = "";
	$fieldLabelstik_documento["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_documento["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_documento["Spanish"]["FechaSistema"] = "";
	if (count($fieldToolTipstik_documento["Spanish"]))
		$tdatatik_documento[".isUseToolTips"] = true;
}


	$tdatatik_documento[".NCSearch"] = true;



$tdatatik_documento[".shortTableName"] = "tik_documento";
$tdatatik_documento[".nSecOptions"] = 0;

$tdatatik_documento[".mainTableOwnerID"] = "";
$tdatatik_documento[".entityType"] = 0;
$tdatatik_documento[".connId"] = "mpc_at_localhost";


$tdatatik_documento[".strOriginalTableName"] = "tik_documento";

	



$tdatatik_documento[".showAddInPopup"] = false;

$tdatatik_documento[".showEditInPopup"] = false;

$tdatatik_documento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_documento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_documento[".listAjax"] = false;
//	temporary
//$tdatatik_documento[".listAjax"] = false;

	$tdatatik_documento[".audit"] = true;

	$tdatatik_documento[".locking"] = false;


$pages = $tdatatik_documento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_documento[".edit"] = true;
	$tdatatik_documento[".afterEditAction"] = 0;
	$tdatatik_documento[".closePopupAfterEdit"] = 1;
	$tdatatik_documento[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_documento[".add"] = true;
$tdatatik_documento[".afterAddAction"] = 0;
$tdatatik_documento[".closePopupAfterAdd"] = 1;
$tdatatik_documento[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_documento[".list"] = true;
}



$tdatatik_documento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_documento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_documento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_documento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_documento[".printFriendly"] = true;
}



$tdatatik_documento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_documento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_documento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_documento[".isUseAjaxSuggest"] = true;

$tdatatik_documento[".rowHighlite"] = true;



																																																

$tdatatik_documento[".ajaxCodeSnippetAdded"] = false;

$tdatatik_documento[".buttonsAdded"] = false;

$tdatatik_documento[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_documento[".isUseTimeForSearch"] = false;


$tdatatik_documento[".badgeColor"] = "d2691e";


$tdatatik_documento[".allSearchFields"] = array();
$tdatatik_documento[".filterFields"] = array();
$tdatatik_documento[".requiredSearchFields"] = array();

$tdatatik_documento[".googleLikeFields"] = array();
$tdatatik_documento[".googleLikeFields"][] = "Solicitud";
$tdatatik_documento[".googleLikeFields"][] = "Secuencia";
$tdatatik_documento[".googleLikeFields"][] = "Descripcion";
$tdatatik_documento[".googleLikeFields"][] = "Documentos";
$tdatatik_documento[".googleLikeFields"][] = "Fotografias";
$tdatatik_documento[".googleLikeFields"][] = "Usuario";
$tdatatik_documento[".googleLikeFields"][] = "FechaSistema";



$tdatatik_documento[".tableType"] = "list";

$tdatatik_documento[".printerPageOrientation"] = 0;
$tdatatik_documento[".nPrinterPageScale"] = 100;

$tdatatik_documento[".nPrinterSplitRecords"] = 40;

$tdatatik_documento[".geocodingEnabled"] = false;










$tdatatik_documento[".pageSize"] = 20;

$tdatatik_documento[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Solicitud, Secuencia";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_documento[".strOrderBy"] = $tstrOrderBy;

$tdatatik_documento[".orderindexes"] = array();
	$tdatatik_documento[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Solicitud");

	$tdatatik_documento[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Secuencia");



$tdatatik_documento[".sqlHead"] = "SELECT Solicitud, Secuencia, Descripcion, Documentos, Fotografias, Usuario, FechaSistema";
$tdatatik_documento[".sqlFrom"] = "FROM tik_documento";
$tdatatik_documento[".sqlWhereExpr"] = "";
$tdatatik_documento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_documento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_documento[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_documento[".highlightSearchResults"] = true;

$tableKeystik_documento = array();
$tableKeystik_documento[] = "Solicitud";
$tableKeystik_documento[] = "Secuencia";
$tdatatik_documento[".Keys"] = $tableKeystik_documento;


$tdatatik_documento[".hideMobileList"] = array();




//	Solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Solicitud";
	$fdata["GoodName"] = "Solicitud";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Solicitud");
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


	$tdatatik_documento["Solicitud"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Solicitud";
//	Secuencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Secuencia";
	$fdata["GoodName"] = "Secuencia";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Secuencia");
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


	$tdatatik_documento["Secuencia"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Secuencia";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Descripcion");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatik_documento["Descripcion"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Descripcion";
//	Documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Documentos";
	$fdata["GoodName"] = "Documentos";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Documentos");
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

		$edata["maxNumberOfFiles"] = 3;

	
	
	
	
	
	
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


	$tdatatik_documento["Documentos"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Documentos";
//	Fotografias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fotografias";
	$fdata["GoodName"] = "Fotografias";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Fotografias");
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


	$tdatatik_documento["Fotografias"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Fotografias";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","Usuario");
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


	$tdatatik_documento["Usuario"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "Usuario";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_documento";
	$fdata["Label"] = GetFieldLabel("tik_documento","FechaSistema");
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


	$tdatatik_documento["FechaSistema"] = $fdata;
		$tdatatik_documento[".searchableFields"][] = "FechaSistema";


$tables_data["tik_documento"]=&$tdatatik_documento;
$field_labels["tik_documento"] = &$fieldLabelstik_documento;
$fieldToolTips["tik_documento"] = &$fieldToolTipstik_documento;
$placeHolders["tik_documento"] = &$placeHolderstik_documento;
$page_titles["tik_documento"] = &$pageTitlestik_documento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_documento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_documento"] = array();



	
				$strOriginalDetailsTable="tik_interno";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tik_interno";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tik_interno";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tik_documento"][0] = $masterParams;
				$masterTablesData["tik_documento"][0]["masterKeys"] = array();
	$masterTablesData["tik_documento"][0]["masterKeys"][]="Solicitud";
				$masterTablesData["tik_documento"][0]["detailKeys"] = array();
	$masterTablesData["tik_documento"][0]["detailKeys"][]="Solicitud";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_documento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Solicitud, Secuencia, Descripcion, Documentos, Fotografias, Usuario, FechaSistema";
$proto0["m_strFrom"] = "FROM tik_documento";
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
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto6["m_sql"] = "Solicitud";
$proto6["m_srcTableName"] = "tik_documento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto8["m_sql"] = "Secuencia";
$proto8["m_srcTableName"] = "tik_documento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "tik_documento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Documentos",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto12["m_sql"] = "Documentos";
$proto12["m_srcTableName"] = "tik_documento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fotografias",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto14["m_sql"] = "Fotografias";
$proto14["m_srcTableName"] = "tik_documento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto16["m_sql"] = "Usuario";
$proto16["m_srcTableName"] = "tik_documento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto18["m_sql"] = "FechaSistema";
$proto18["m_srcTableName"] = "tik_documento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tik_documento";
$proto21["m_srcTableName"] = "tik_documento";
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
$proto20["m_sql"] = "tik_documento";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tik_documento";
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
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "Secuencia",
	"m_strTable" => "tik_documento",
	"m_srcTableName" => "tik_documento"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tik_documento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_documento = createSqlQuery_tik_documento();


	
		;

							

$tdatatik_documento[".sqlquery"] = $queryData_tik_documento;



include_once(getabspath("include/tik_documento_events.php"));
$tableEvents["tik_documento"] = new eventclass_tik_documento;
$tdatatik_documento[".hasEvents"] = true;

?>