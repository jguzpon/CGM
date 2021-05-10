<?php
require_once(getabspath("classes/cipherer.php"));



$tdatampcchat = array();
$tdatampcchat[".ShortName"] = "mpcchat";

$tdatampcchat[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatampcchat[".originalPagesByType"] = $tdatampcchat[".pagesByType"];
$tdatampcchat[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatampcchat[".originalPages"] = $tdatampcchat[".pages"];
$tdatampcchat[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatampcchat[".originalDefaultPages"] = $tdatampcchat[".defaultPages"];


//	field labels
$fieldLabelsmpcchat = array();
$pageTitlesmpcchat = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmpcchat["Spanish"] = array();
	$fieldLabelsmpcchat["Spanish"]["tik_chatau_Usuario"] = "Tik Chatau Usuario";
	$fieldLabelsmpcchat["Spanish"]["tik_chatau_Nombre"] = "Tik Chatau Nombre";
	$fieldLabelsmpcchat["Spanish"]["tik_chatau_FechaHora"] = "Tik Chatau FechaHora";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_DeUsuario"] = "Tik Chat DeUsuario";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_FechaHora"] = "Tik Chat FechaHora";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_AUsuario"] = "Tik Chat AUsuario";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_Mensaje"] = "Tik Chat Mensaje";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_Archivo"] = "Tik Chat Archivo";
	$fieldLabelsmpcchat["Spanish"]["tik_chat_Estado"] = "Tik Chat Estado";
}

//	search fields
$tdatampcchat[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"tik_chatau", "field"=>"Usuario" );
$tdatampcchat[".searchFields"]["tik_chatau_Usuario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chatau", "field"=>"Nombre" );
$tdatampcchat[".searchFields"]["tik_chatau_Nombre"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chatau", "field"=>"FechaHora" );
$tdatampcchat[".searchFields"]["tik_chatau_FechaHora"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"DeUsuario" );
$tdatampcchat[".searchFields"]["tik_chat_DeUsuario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"FechaHora" );
$tdatampcchat[".searchFields"]["tik_chat_FechaHora"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"AUsuario" );
$tdatampcchat[".searchFields"]["tik_chat_AUsuario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"Mensaje" );
$tdatampcchat[".searchFields"]["tik_chat_Mensaje"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"Archivo" );
$tdatampcchat[".searchFields"]["tik_chat_Archivo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"tik_chat", "field"=>"Estado" );
$tdatampcchat[".searchFields"]["tik_chat_Estado"] = $dashField;

// all search fields
$tdatampcchat[".allSearchFields"] = array();
$tdatampcchat[".allSearchFields"][] = "tik_chatau_Usuario";
$tdatampcchat[".allSearchFields"][] = "tik_chatau_Nombre";
$tdatampcchat[".allSearchFields"][] = "tik_chatau_FechaHora";
$tdatampcchat[".allSearchFields"][] = "tik_chat_DeUsuario";
$tdatampcchat[".allSearchFields"][] = "tik_chat_FechaHora";
$tdatampcchat[".allSearchFields"][] = "tik_chat_AUsuario";
$tdatampcchat[".allSearchFields"][] = "tik_chat_Mensaje";
$tdatampcchat[".allSearchFields"][] = "tik_chat_Archivo";
$tdatampcchat[".allSearchFields"][] = "tik_chat_Estado";

// good like search fields
$tdatampcchat[".googleLikeFields"] = array();
$tdatampcchat[".googleLikeFields"][] = "tik_chatau_Usuario";
$tdatampcchat[".googleLikeFields"][] = "tik_chatau_Nombre";
$tdatampcchat[".googleLikeFields"][] = "tik_chat_DeUsuario";
$tdatampcchat[".googleLikeFields"][] = "tik_chat_FechaHora";
$tdatampcchat[".googleLikeFields"][] = "tik_chat_AUsuario";
$tdatampcchat[".googleLikeFields"][] = "tik_chat_Mensaje";
$tdatampcchat[".googleLikeFields"][] = "tik_chat_Estado";

$tdatampcchat[".dashElements"] = array();

	$dbelement = array( "elementName" => "tik_chatau_list", "table" => "tik_chatau",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 10;
		$dbelement["width"] = 300;
		

	$tdatampcchat[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "tik_chat_list", "table" => "tik_chat",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_1";

		$dbelement["reload"] = 10;
			
$dbelement["masterTable"] = "tik_chatau";

	$tdatampcchat[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "tik_chat_record", "table" => "tik_chat",
		 "pageName" => "","type" => 3);
	$dbelement["cellName"] = "cell_0_1";

				$dbelement["height"] = 150;
	$dbelement["tabsPageTypes"] = array();
	$dbelement["pageNames"] = array();
					$dbelement["initialTabPageType"] = PAGE_VIEW;

$dbelement["masterTable"] = "tik_chatau";

	$tdatampcchat[".dashElements"][] = $dbelement;

$tdatampcchat[".shortTableName"] = "mpcchat";
$tdatampcchat[".entityType"] = 4;



$tableEvents["MPCChat"] = new eventsBase;
$tdatampcchat[".hasEvents"] = false;


$tdatampcchat[".tableType"] = "dashboard";


								
$tdatampcchat[".addPageEvents"] = false;

$tdatampcchat[".isUseAjaxSuggest"] = true;

$tables_data["MPCChat"]=&$tdatampcchat;
$field_labels["MPCChat"] = &$fieldLabelsmpcchat;
$page_titles["MPCChat"] = &$pageTitlesmpcchat;

?>