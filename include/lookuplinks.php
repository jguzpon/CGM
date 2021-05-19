<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_chatau.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_chatau.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_chatau.Usuario"]["edit"] = array("table" => "tik_chatau", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_autorizadores.CodigoDepto"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_autorizadores.CodigoDepto"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_autorizadores.CodigoDepto"]["edit"] = array("table" => "tik_autorizadores", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_chatau"] ) ) {
			$lookupTableLinks["tik_chatau"] = array();
		}
		if( !isset( $lookupTableLinks["tik_chatau"]["tik_chat.AUsuario"] )) {
			$lookupTableLinks["tik_chatau"]["tik_chat.AUsuario"] = array();
		}
		$lookupTableLinks["tik_chatau"]["tik_chat.AUsuario"]["edit"] = array("table" => "tik_chat", "field" => "AUsuario", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut.De"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut.De"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut.De"]["edit"] = array("table" => "tik_memorando_aut", "field" => "De", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut.A"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut.A"]["edit"] = array("table" => "tik_memorando_aut", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut.Usuario"]["edit"] = array("table" => "tik_memorando_aut", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["cdm_tipo_documentos"] ) ) {
			$lookupTableLinks["cdm_tipo_documentos"] = array();
		}
		if( !isset( $lookupTableLinks["cdm_tipo_documentos"]["tik_memorando_aut.TipoDocumento"] )) {
			$lookupTableLinks["cdm_tipo_documentos"]["tik_memorando_aut.TipoDocumento"] = array();
		}
		$lookupTableLinks["cdm_tipo_documentos"]["tik_memorando_aut.TipoDocumento"]["edit"] = array("table" => "tik_memorando_aut", "field" => "TipoDocumento", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut.Autorizador"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut.Autorizador"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut.Autorizador"]["edit"] = array("table" => "tik_memorando_aut", "field" => "Autorizador", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_pend.De"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_pend.De"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_pend.De"]["edit"] = array("table" => "tik_memorando_pend", "field" => "De", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_pend.A"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_pend.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_pend.A"]["edit"] = array("table" => "tik_memorando_pend", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_memorando_pend.ADepartamento"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_memorando_pend.ADepartamento"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_memorando_pend.ADepartamento"]["edit"] = array("table" => "tik_memorando_pend", "field" => "ADepartamento", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_l.A"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_l.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_l.A"]["edit"] = array("table" => "tik_memorando_l", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_firmas.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_firmas.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_firmas.Usuario"]["edit"] = array("table" => "tik_firmas", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_firmas.Departamentos"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_firmas.Departamentos"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_firmas.Departamentos"]["edit"] = array("table" => "tik_firmas", "field" => "Departamentos", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_autorizadores"] ) ) {
			$lookupTableLinks["tik_autorizadores"] = array();
		}
		if( !isset( $lookupTableLinks["tik_autorizadores"]["tik_memorando.De"] )) {
			$lookupTableLinks["tik_autorizadores"]["tik_memorando.De"] = array();
		}
		$lookupTableLinks["tik_autorizadores"]["tik_memorando.De"]["edit"] = array("table" => "tik_memorando", "field" => "De", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando.A"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando.A"]["edit"] = array("table" => "tik_memorando", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_memorando.ADepartamento"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_memorando.ADepartamento"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_memorando.ADepartamento"]["edit"] = array("table" => "tik_memorando", "field" => "ADepartamento", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando.Usuario"]["edit"] = array("table" => "tik_memorando", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_tipomemo"] ) ) {
			$lookupTableLinks["tik_tipomemo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipomemo"]["tik_memorando.TipoDocumento"] )) {
			$lookupTableLinks["tik_tipomemo"]["tik_memorando.TipoDocumento"] = array();
		}
		$lookupTableLinks["tik_tipomemo"]["tik_memorando.TipoDocumento"]["edit"] = array("table" => "tik_memorando", "field" => "TipoDocumento", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_autorizadores"] ) ) {
			$lookupTableLinks["tik_autorizadores"] = array();
		}
		if( !isset( $lookupTableLinks["tik_autorizadores"]["tik_memorando.Autorizador"] )) {
			$lookupTableLinks["tik_autorizadores"]["tik_memorando.Autorizador"] = array();
		}
		$lookupTableLinks["tik_autorizadores"]["tik_memorando.Autorizador"]["edit"] = array("table" => "tik_memorando", "field" => "Autorizador", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_memorando.CodigoDepto"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_memorando.CodigoDepto"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_memorando.CodigoDepto"]["edit"] = array("table" => "tik_memorando", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["tik_interno.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["tik_interno.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["tik_interno.TipoSolicitud"]["edit"] = array("table" => "tik_interno", "field" => "TipoSolicitud", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitante"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitante"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitante"]["edit"] = array("table" => "tik_interno", "field" => "DepartamentoSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_interno.UsuarioSolicitante"] )) {
			$lookupTableLinks["zusuarios"]["tik_interno.UsuarioSolicitante"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_interno.UsuarioSolicitante"]["edit"] = array("table" => "tik_interno", "field" => "UsuarioSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_interno.DepartamentoSolicitar"]["edit"] = array("table" => "tik_interno", "field" => "DepartamentoSolicitar", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_interno.UsuarioInicio"] )) {
			$lookupTableLinks["zusuarios"]["tik_interno.UsuarioInicio"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_interno.UsuarioInicio"]["edit"] = array("table" => "tik_interno", "field" => "UsuarioInicio", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_satisfaccion"] ) ) {
			$lookupTableLinks["tik_satisfaccion"] = array();
		}
		if( !isset( $lookupTableLinks["tik_satisfaccion"]["tik_interno.Evaluacion"] )) {
			$lookupTableLinks["tik_satisfaccion"]["tik_interno.Evaluacion"] = array();
		}
		$lookupTableLinks["tik_satisfaccion"]["tik_interno.Evaluacion"]["edit"] = array("table" => "tik_interno", "field" => "Evaluacion", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_documento.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_documento.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_documento.Usuario"]["edit"] = array("table" => "tik_documento", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["zusuarios.CodigoDepto"] )) {
			$lookupTableLinks["zdepartamentos"]["zusuarios.CodigoDepto"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["zusuarios.CodigoDepto"]["edit"] = array("table" => "zusuarios", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["admin_members.CodigoDepto"] )) {
			$lookupTableLinks[""]["admin_members.CodigoDepto"] = array();
		}
		$lookupTableLinks[""]["admin_members.CodigoDepto"]["edit"] = array("table" => "admin_members", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["admin_users.CodigoDepto"] )) {
			$lookupTableLinks["zdepartamentos"]["admin_users.CodigoDepto"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["admin_users.CodigoDepto"]["edit"] = array("table" => "admin_users", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoSolicitar"]["edit"] = array("table" => "tik_calendario", "field" => "DepartamentoSolicitar", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["tik_calendario.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["tik_calendario.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["tik_calendario.TipoSolicitud"]["edit"] = array("table" => "tik_calendario", "field" => "TipoSolicitud", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_calendario.UsuarioProgramador"] )) {
			$lookupTableLinks["zusuarios"]["tik_calendario.UsuarioProgramador"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_calendario.UsuarioProgramador"]["edit"] = array("table" => "tik_calendario", "field" => "UsuarioProgramador", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoProgramador"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoProgramador"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_calendario.DepartamentoProgramador"]["edit"] = array("table" => "tik_calendario", "field" => "DepartamentoProgramador", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["vtik_interno.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["vtik_interno.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["vtik_interno.TipoSolicitud"]["edit"] = array("table" => "vtik_interno", "field" => "TipoSolicitud", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitante"] )) {
			$lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitante"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitante"]["edit"] = array("table" => "vtik_interno", "field" => "DepartamentoSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["vtik_interno.UsuarioSolicitante"] )) {
			$lookupTableLinks["zusuarios"]["vtik_interno.UsuarioSolicitante"] = array();
		}
		$lookupTableLinks["zusuarios"]["vtik_interno.UsuarioSolicitante"]["edit"] = array("table" => "vtik_interno", "field" => "UsuarioSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["vtik_interno.DepartamentoSolicitar"]["edit"] = array("table" => "vtik_interno", "field" => "DepartamentoSolicitar", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["vtik_interno.UsuarioInicio"] )) {
			$lookupTableLinks["zusuarios"]["vtik_interno.UsuarioInicio"] = array();
		}
		$lookupTableLinks["zusuarios"]["vtik_interno.UsuarioInicio"]["edit"] = array("table" => "vtik_interno", "field" => "UsuarioInicio", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_satisfaccion"] ) ) {
			$lookupTableLinks["tik_satisfaccion"] = array();
		}
		if( !isset( $lookupTableLinks["tik_satisfaccion"]["vtik_interno.Evaluacion"] )) {
			$lookupTableLinks["tik_satisfaccion"]["vtik_interno.Evaluacion"] = array();
		}
		$lookupTableLinks["tik_satisfaccion"]["vtik_interno.Evaluacion"]["edit"] = array("table" => "vtik_interno", "field" => "Evaluacion", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["control_de_asistencias.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["control_de_asistencias.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["control_de_asistencias.DepartamentoSolicitar"]["search"] = array("table" => "Control de Asistencias", "field" => "DepartamentoSolicitar", "page" => "search");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["control_de_asistencias.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["control_de_asistencias.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["control_de_asistencias.TipoSolicitud"]["search"] = array("table" => "Control de Asistencias", "field" => "TipoSolicitud", "page" => "search");
		if( !isset( $lookupTableLinks["tik_satisfaccion"] ) ) {
			$lookupTableLinks["tik_satisfaccion"] = array();
		}
		if( !isset( $lookupTableLinks["tik_satisfaccion"]["control_de_asistencias.Evaluacion"] )) {
			$lookupTableLinks["tik_satisfaccion"]["control_de_asistencias.Evaluacion"] = array();
		}
		$lookupTableLinks["tik_satisfaccion"]["control_de_asistencias.Evaluacion"]["search"] = array("table" => "Control de Asistencias", "field" => "Evaluacion", "page" => "search");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["gr_fico_de_asistencias.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["gr_fico_de_asistencias.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["gr_fico_de_asistencias.DepartamentoSolicitar"]["search"] = array("table" => "Gráfico de Asistencias", "field" => "DepartamentoSolicitar", "page" => "search");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["gr_fico_de_asistencias.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["gr_fico_de_asistencias.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["gr_fico_de_asistencias.TipoSolicitud"]["search"] = array("table" => "Gráfico de Asistencias", "field" => "TipoSolicitud", "page" => "search");
		if( !isset( $lookupTableLinks["tik_satisfaccion"] ) ) {
			$lookupTableLinks["tik_satisfaccion"] = array();
		}
		if( !isset( $lookupTableLinks["tik_satisfaccion"]["gr_fico_de_asistencias.Evaluacion"] )) {
			$lookupTableLinks["tik_satisfaccion"]["gr_fico_de_asistencias.Evaluacion"] = array();
		}
		$lookupTableLinks["tik_satisfaccion"]["gr_fico_de_asistencias.Evaluacion"]["search"] = array("table" => "Gráfico de Asistencias", "field" => "Evaluacion", "page" => "search");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["pendientes_por_departamento.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["pendientes_por_departamento.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["pendientes_por_departamento.TipoSolicitud"]["search"] = array("table" => "Pendientes por Departamento", "field" => "TipoSolicitud", "page" => "search");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitante"] )) {
			$lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitante"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitante"]["search"] = array("table" => "Pendientes por Departamento", "field" => "DepartamentoSolicitante", "page" => "search");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["pendientes_por_departamento.UsuarioSolicitante"] )) {
			$lookupTableLinks["zusuarios"]["pendientes_por_departamento.UsuarioSolicitante"] = array();
		}
		$lookupTableLinks["zusuarios"]["pendientes_por_departamento.UsuarioSolicitante"]["search"] = array("table" => "Pendientes por Departamento", "field" => "UsuarioSolicitante", "page" => "search");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["pendientes_por_departamento.DepartamentoSolicitar"]["search"] = array("table" => "Pendientes por Departamento", "field" => "DepartamentoSolicitar", "page" => "search");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["asistencias_realizadas_por_fecha.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["asistencias_realizadas_por_fecha.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["asistencias_realizadas_por_fecha.TipoSolicitud"]["search"] = array("table" => "Asistencias Realizadas por Fecha", "field" => "TipoSolicitud", "page" => "search");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitante"] )) {
			$lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitante"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitante"]["search"] = array("table" => "Asistencias Realizadas por Fecha", "field" => "DepartamentoSolicitante", "page" => "search");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["asistencias_realizadas_por_fecha.UsuarioSolicitante"] )) {
			$lookupTableLinks["zusuarios"]["asistencias_realizadas_por_fecha.UsuarioSolicitante"] = array();
		}
		$lookupTableLinks["zusuarios"]["asistencias_realizadas_por_fecha.UsuarioSolicitante"]["search"] = array("table" => "Asistencias Realizadas por Fecha", "field" => "UsuarioSolicitante", "page" => "search");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["asistencias_realizadas_por_fecha.DepartamentoSolicitar"]["search"] = array("table" => "Asistencias Realizadas por Fecha", "field" => "DepartamentoSolicitar", "page" => "search");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.De"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.De"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.De"]["edit"] = array("table" => "tik_memorando_aut_otrdep", "field" => "De", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["tik_memorando_aut_otrdep.CodigoDepto"] )) {
			$lookupTableLinks["zdepartamentos"]["tik_memorando_aut_otrdep.CodigoDepto"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["tik_memorando_aut_otrdep.CodigoDepto"]["edit"] = array("table" => "tik_memorando_aut_otrdep", "field" => "CodigoDepto", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.A"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.A"]["edit"] = array("table" => "tik_memorando_aut_otrdep", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.Usuario"] )) {
			$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.Usuario"] = array();
		}
		$lookupTableLinks["zusuarios"]["tik_memorando_aut_otrdep.Usuario"]["edit"] = array("table" => "tik_memorando_aut_otrdep", "field" => "Usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_tipo"] ) ) {
			$lookupTableLinks["tik_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tik_tipo"]["solicitudesvencidas.TipoSolicitud"] )) {
			$lookupTableLinks["tik_tipo"]["solicitudesvencidas.TipoSolicitud"] = array();
		}
		$lookupTableLinks["tik_tipo"]["solicitudesvencidas.TipoSolicitud"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "TipoSolicitud", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitante"] )) {
			$lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitante"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitante"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "DepartamentoSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioSolicitante"] )) {
			$lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioSolicitante"] = array();
		}
		$lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioSolicitante"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "UsuarioSolicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitar"] )) {
			$lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitar"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["solicitudesvencidas.DepartamentoSolicitar"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "DepartamentoSolicitar", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioInicio"] )) {
			$lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioInicio"] = array();
		}
		$lookupTableLinks["zusuarios"]["solicitudesvencidas.UsuarioInicio"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "UsuarioInicio", "page" => "edit");
		if( !isset( $lookupTableLinks["tik_satisfaccion"] ) ) {
			$lookupTableLinks["tik_satisfaccion"] = array();
		}
		if( !isset( $lookupTableLinks["tik_satisfaccion"]["solicitudesvencidas.Evaluacion"] )) {
			$lookupTableLinks["tik_satisfaccion"]["solicitudesvencidas.Evaluacion"] = array();
		}
		$lookupTableLinks["tik_satisfaccion"]["solicitudesvencidas.Evaluacion"]["edit"] = array("table" => "SolicitudesVencidas", "field" => "Evaluacion", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["vtik_memorando_hist.De"] )) {
			$lookupTableLinks["zusuarios"]["vtik_memorando_hist.De"] = array();
		}
		$lookupTableLinks["zusuarios"]["vtik_memorando_hist.De"]["edit"] = array("table" => "vtik_memorando_hist", "field" => "De", "page" => "edit");
		if( !isset( $lookupTableLinks["zusuarios"] ) ) {
			$lookupTableLinks["zusuarios"] = array();
		}
		if( !isset( $lookupTableLinks["zusuarios"]["vtik_memorando_hist.A"] )) {
			$lookupTableLinks["zusuarios"]["vtik_memorando_hist.A"] = array();
		}
		$lookupTableLinks["zusuarios"]["vtik_memorando_hist.A"]["edit"] = array("table" => "vtik_memorando_hist", "field" => "A", "page" => "edit");
		if( !isset( $lookupTableLinks["zdepartamentos"] ) ) {
			$lookupTableLinks["zdepartamentos"] = array();
		}
		if( !isset( $lookupTableLinks["zdepartamentos"]["vtik_memorando_hist.ADepartamento"] )) {
			$lookupTableLinks["zdepartamentos"]["vtik_memorando_hist.ADepartamento"] = array();
		}
		$lookupTableLinks["zdepartamentos"]["vtik_memorando_hist.ADepartamento"]["edit"] = array("table" => "vtik_memorando_hist", "field" => "ADepartamento", "page" => "edit");
}

?>