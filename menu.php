<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/tik_memorando_aut_events.php"));
$tableEvents["tik_memorando_aut"] = new eventclass_tik_memorando_aut;
include_once(getabspath("include/tik_memorando_adjunto_events.php"));
$tableEvents["tik_memorando_adjunto"] = new eventclass_tik_memorando_adjunto;
include_once(getabspath("include/tik_memorando_pend_events.php"));
$tableEvents["tik_memorando_pend"] = new eventclass_tik_memorando_pend;
include_once(getabspath("include/tik_firmas_events.php"));
$tableEvents["tik_firmas"] = new eventclass_tik_firmas;
include_once(getabspath("include/tik_memorando_events.php"));
$tableEvents["tik_memorando"] = new eventclass_tik_memorando;
include_once(getabspath("include/tik_satisfaccion_events.php"));
$tableEvents["tik_satisfaccion"] = new eventclass_tik_satisfaccion;
include_once(getabspath("include/tik_interno_events.php"));
$tableEvents["tik_interno"] = new eventclass_tik_interno;
include_once(getabspath("include/tik_documento_events.php"));
$tableEvents["tik_documento"] = new eventclass_tik_documento;
include_once(getabspath("include/zusuarios_events.php"));
$tableEvents["zusuarios"] = new eventclass_zusuarios;
include_once(getabspath("include/tik_tipo_events.php"));
$tableEvents["tik_tipo"] = new eventclass_tik_tipo;
include_once(getabspath("include/tik_calendario_events.php"));
$tableEvents["tik_calendario"] = new eventclass_tik_calendario;
include_once(getabspath("include/zdepartamentos_events.php"));
$tableEvents["zdepartamentos"] = new eventclass_zdepartamentos;
include_once(getabspath("include/vtik_interno_events.php"));
$tableEvents["vtik_interno"] = new eventclass_vtik_interno;
include_once(getabspath("include/control_de_asistencias_events.php"));
$tableEvents["Control de Asistencias"] = new eventclass_control_de_asistencias;
include_once(getabspath("include/gr_fico_de_asistencias_events.php"));
$tableEvents["Gráfico de Asistencias"] = new eventclass_gr_fico_de_asistencias;
include_once(getabspath("include/pendientes_por_departamento_events.php"));
$tableEvents["Pendientes por Departamento"] = new eventclass_pendientes_por_departamento;
include_once(getabspath("include/asistencias_realizadas_por_fecha_events.php"));
$tableEvents["Asistencias Realizadas por Fecha"] = new eventclass_asistencias_realizadas_por_fecha;
include_once(getabspath("include/tik_tipomemo_events.php"));
$tableEvents["tik_tipomemo"] = new eventclass_tik_tipomemo;
include_once(getabspath("include/tik_memorando_aut_otrdep_events.php"));
$tableEvents["tik_memorando_aut_otrdep"] = new eventclass_tik_memorando_aut_otrdep;
include_once(getabspath("include/solicitudesvencidas_events.php"));
$tableEvents["SolicitudesVencidas"] = new eventclass_solicitudesvencidas;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>