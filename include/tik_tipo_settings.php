<?php
$tdatatik_tipo = array();
$tdatatik_tipo[".searchableFields"] = array();
$tdatatik_tipo[".ShortName"] = "tik_tipo";
$tdatatik_tipo[".OwnerID"] = "";
$tdatatik_tipo[".OriginalTable"] = "tik_tipo";


$tdatatik_tipo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatik_tipo[".originalPagesByType"] = $tdatatik_tipo[".pagesByType"];
$tdatatik_tipo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatik_tipo[".originalPages"] = $tdatatik_tipo[".pages"];
$tdatatik_tipo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatik_tipo[".originalDefaultPages"] = $tdatatik_tipo[".defaultPages"];

//	field labels
$fieldLabelstik_tipo = array();
$fieldToolTipstik_tipo = array();
$pageTitlestik_tipo = array();
$placeHolderstik_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstik_tipo["Spanish"] = array();
	$fieldToolTipstik_tipo["Spanish"] = array();
	$placeHolderstik_tipo["Spanish"] = array();
	$pageTitlestik_tipo["Spanish"] = array();
	$fieldLabelstik_tipo["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipstik_tipo["Spanish"]["TipoSolicitud"] = "";
	$placeHolderstik_tipo["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelstik_tipo["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipstik_tipo["Spanish"]["Descripcion"] = "";
	$placeHolderstik_tipo["Spanish"]["Descripcion"] = "";
	$fieldLabelstik_tipo["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipstik_tipo["Spanish"]["Usuario"] = "";
	$placeHolderstik_tipo["Spanish"]["Usuario"] = "";
	$fieldLabelstik_tipo["Spanish"]["FechaSistema"] = "Fecha Sistema";
	$fieldToolTipstik_tipo["Spanish"]["FechaSistema"] = "";
	$placeHolderstik_tipo["Spanish"]["FechaSistema"] = "";
	$fieldLabelstik_tipo["Spanish"]["Nomenclatura"] = "Nomenclatura";
	$fieldToolTipstik_tipo["Spanish"]["Nomenclatura"] = "";
	$placeHolderstik_tipo["Spanish"]["Nomenclatura"] = "";
	if (count($fieldToolTipstik_tipo["Spanish"]))
		$tdatatik_tipo[".isUseToolTips"] = true;
}


	$tdatatik_tipo[".NCSearch"] = true;



$tdatatik_tipo[".shortTableName"] = "tik_tipo";
$tdatatik_tipo[".nSecOptions"] = 0;

$tdatatik_tipo[".mainTableOwnerID"] = "";
$tdatatik_tipo[".entityType"] = 0;
$tdatatik_tipo[".connId"] = "mpc_at_localhost";


$tdatatik_tipo[".strOriginalTableName"] = "tik_tipo";

	



$tdatatik_tipo[".showAddInPopup"] = false;

$tdatatik_tipo[".showEditInPopup"] = false;

$tdatatik_tipo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatik_tipo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatik_tipo[".listAjax"] = false;
//	temporary
//$tdatatik_tipo[".listAjax"] = false;

	$tdatatik_tipo[".audit"] = true;

	$tdatatik_tipo[".locking"] = false;


$pages = $tdatatik_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatik_tipo[".edit"] = true;
	$tdatatik_tipo[".afterEditAction"] = 0;
	$tdatatik_tipo[".closePopupAfterEdit"] = 1;
	$tdatatik_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatik_tipo[".add"] = true;
$tdatatik_tipo[".afterAddAction"] = 0;
$tdatatik_tipo[".closePopupAfterAdd"] = 1;
$tdatatik_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatik_tipo[".list"] = true;
}



$tdatatik_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatik_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatik_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatik_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatik_tipo[".printFriendly"] = true;
}



$tdatatik_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatik_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatik_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatik_tipo[".isUseAjaxSuggest"] = true;

$tdatatik_tipo[".rowHighlite"] = true;



																								

$tdatatik_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatatik_tipo[".buttonsAdded"] = false;

$tdatatik_tipo[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatik_tipo[".isUseTimeForSearch"] = false;


$tdatatik_tipo[".badgeColor"] = "7B68EE";


$tdatatik_tipo[".allSearchFields"] = array();
$tdatatik_tipo[".filterFields"] = array();
$tdatatik_tipo[".requiredSearchFields"] = array();

$tdatatik_tipo[".googleLikeFields"] = array();
$tdatatik_tipo[".googleLikeFields"][] = "TipoSolicitud";
$tdatatik_tipo[".googleLikeFields"][] = "Descripcion";
$tdatatik_tipo[".googleLikeFields"][] = "Nomenclatura";
$tdatatik_tipo[".googleLikeFields"][] = "Usuario";
$tdatatik_tipo[".googleLikeFields"][] = "FechaSistema";



$tdatatik_tipo[".tableType"] = "list";

$tdatatik_tipo[".printerPageOrientation"] = 0;
$tdatatik_tipo[".nPrinterPageScale"] = 100;

$tdatatik_tipo[".nPrinterSplitRecords"] = 40;

$tdatatik_tipo[".geocodingEnabled"] = false;










$tdatatik_tipo[".pageSize"] = 20;

$tdatatik_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatik_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatatik_tipo[".orderindexes"] = array();


$tdatatik_tipo[".sqlHead"] = "SELECT TipoSolicitud,  	Descripcion,  	Nomenclatura,  	Usuario,  	FechaSistema";
$tdatatik_tipo[".sqlFrom"] = "FROM tik_tipo";
$tdatatik_tipo[".sqlWhereExpr"] = "";
$tdatatik_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatik_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatik_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatatik_tipo[".highlightSearchResults"] = true;

$tableKeystik_tipo = array();
$tableKeystik_tipo[] = "TipoSolicitud";
$tdatatik_tipo[".Keys"] = $tableKeystik_tipo;


$tdatatik_tipo[".hideMobileList"] = array();




//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "tik_tipo";
	$fdata["Label"] = GetFieldLabel("tik_tipo","TipoSolicitud");
	$fdata["FieldType"] = 2;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatik_tipo["TipoSolicitud"] = $fdata;
		$tdatatik_tipo[".searchableFields"][] = "TipoSolicitud";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tik_tipo";
	$fdata["Label"] = GetFieldLabel("tik_tipo","Descripcion");
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


	$tdatatik_tipo["Descripcion"] = $fdata;
		$tdatatik_tipo[".searchableFields"][] = "Descripcion";
//	Nomenclatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nomenclatura";
	$fdata["GoodName"] = "Nomenclatura";
	$fdata["ownerTable"] = "tik_tipo";
	$fdata["Label"] = GetFieldLabel("tik_tipo","Nomenclatura");
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


	$tdatatik_tipo["Nomenclatura"] = $fdata;
		$tdatatik_tipo[".searchableFields"][] = "Nomenclatura";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "tik_tipo";
	$fdata["Label"] = GetFieldLabel("tik_tipo","Usuario");
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


	$tdatatik_tipo["Usuario"] = $fdata;
		$tdatatik_tipo[".searchableFields"][] = "Usuario";
//	FechaSistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FechaSistema";
	$fdata["GoodName"] = "FechaSistema";
	$fdata["ownerTable"] = "tik_tipo";
	$fdata["Label"] = GetFieldLabel("tik_tipo","FechaSistema");
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


	$tdatatik_tipo["FechaSistema"] = $fdata;
		$tdatatik_tipo[".searchableFields"][] = "FechaSistema";


$tables_data["tik_tipo"]=&$tdatatik_tipo;
$field_labels["tik_tipo"] = &$fieldLabelstik_tipo;
$fieldToolTips["tik_tipo"] = &$fieldToolTipstik_tipo;
$placeHolders["tik_tipo"] = &$placeHolderstik_tipo;
$page_titles["tik_tipo"] = &$pageTitlestik_tipo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tik_tipo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tik_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tik_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TipoSolicitud,  	Descripcion,  	Nomenclatura,  	Usuario,  	FechaSistema";
$proto0["m_strFrom"] = "FROM tik_tipo";
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
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "tik_tipo",
	"m_srcTableName" => "tik_tipo"
));

$proto6["m_sql"] = "TipoSolicitud";
$proto6["m_srcTableName"] = "tik_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tik_tipo",
	"m_srcTableName" => "tik_tipo"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "tik_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomenclatura",
	"m_strTable" => "tik_tipo",
	"m_srcTableName" => "tik_tipo"
));

$proto10["m_sql"] = "Nomenclatura";
$proto10["m_srcTableName"] = "tik_tipo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "tik_tipo",
	"m_srcTableName" => "tik_tipo"
));

$proto12["m_sql"] = "Usuario";
$proto12["m_srcTableName"] = "tik_tipo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FechaSistema",
	"m_strTable" => "tik_tipo",
	"m_srcTableName" => "tik_tipo"
));

$proto14["m_sql"] = "FechaSistema";
$proto14["m_srcTableName"] = "tik_tipo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tik_tipo";
$proto17["m_srcTableName"] = "tik_tipo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "TipoSolicitud";
$proto17["m_columns"][] = "Descripcion";
$proto17["m_columns"][] = "Nomenclatura";
$proto17["m_columns"][] = "Usuario";
$proto17["m_columns"][] = "FechaSistema";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tik_tipo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tik_tipo";
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
$proto0["m_srcTableName"]="tik_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tik_tipo = createSqlQuery_tik_tipo();


	
		;

					

$tdatatik_tipo[".sqlquery"] = $queryData_tik_tipo;



include_once(getabspath("include/tik_tipo_events.php"));
$tableEvents["tik_tipo"] = new eventclass_tik_tipo;
$tdatatik_tipo[".hasEvents"] = true;

?>