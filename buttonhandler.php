<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='Iniciar_Proceso')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Iniciar_Proceso($params);
}
if($buttId=='Autorizar_Memo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Autorizar_Memo($params);
}
if($buttId=='VoBo_Memo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_VoBo_Memo($params);
}
if($buttId=='genpin')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_genpin($params);
}
if($buttId=='Print_Memo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Print_Memo($params);
}
if($buttId=='IniciarPA')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_IniciarPA($params);
}
if($buttId=='FinlizarPA')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_FinlizarPA($params);
}
if($buttId=='Aut_otr_Memo')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Aut_otr_Memo($params);
}





// create table and non table handlers
function buttonHandler_Iniciar_Proceso($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
//$salida = @fopen("d:\\salida.txt", "w+") or die ("No se pudo crear archivo temporal");
// Put your code here.
//fwrite($salida,"Inicio".PHP_EOL);
while( $data = $button->getNextSelectedRecord() ) {
	if( $data["Solicitud"] ) {
//fwrite($salida,"Entró".PHP_EOL);
		// Actualizar la información del registro activando el proceso
		$result["txt"] = $params["txt"]." iniciado!";
		$sql = "update tik_interno set FechaInicio = CURRENT_TIMESTAMP(),";
		$sql .= " UsuarioInicio = '".$_SESSION["UserID"]."',";
		$sql .= " Estado = 'En Proceso' where Solicitud = ".$data["Solicitud"];
//fwrite($salida,"SQL: ".$sql.PHP_EOL);
		CustomQuery($sql);
	}
	// Verificar si desea enviar correo
	if( $_SESSION["SiCorreo"] == 1 ) {
		// Obtener correo del usuario solicitante
		$sqlb = "select * from zusuarios where usuario = '".$data["UsuarioSolicitante"]."'";
		$rsb = CustomQuery($sqlb);
		if( $datab = db_fetch_array($rsb) ) {
			// Obtener correo del usuario ejecutor
			$sqlc = "select * from zusuarios where usuario = '".$_SESSION["UserID"]."'";
			$rsc = CustomQuery($sqlc);
			if( $datac = db_fetch_array($rsc) ) {
					// Enviar correo a usuario solicitante
					$demail=$datac["Correo"];
					$aemail=$datab["Correo"];
					$message = "Se le notifica que su solicitud cuyo asunto es: ".$data["Asunto"];
					$message .= ", está siendo procesado por ".$datac["Nombre"]." que comenzó el día de hoy.";
					$subject="Inicio de Solicitud #".$data["Solicitud"];
					runner_mail(array('from ' => $demail, 'to' => $aemail, 'subject' => $subject, 'body' => $message));
			}
		}
	}
}
//fclose($salida);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Autorizar_Memo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.
//$salida = @fopen("d:\\salida.txt", "w+") or die ("No se pudo crear archivo temporal");
//fwrite($salida,"Inicio".PHP_EOL);
// Put your code here.
$hoy = strftime('%Y-%m-%d');
$pin = $params["pin"];
echo "<script>alert('pin ".$pin."')</script>";

$msg = "";
$sts = "";
while($dataa = $button->getNextSelectedRecord()) {
	if( $dataa["Estado"] == 'Pendiente' || $dataa["Estado"] == 'Autorizado' ) {
		//  Obtener informacion del memorando
		$sqlb = "select * from tik_memorando a where a.NoMemorando=".$dataa["NoMemorando"];
echo "<script>alert('sqlb ".$sqlb." pin ".$pin."')</script>";
		$rsb = CustomQuery($sqlb);
		if( $db = db_fetch_array($rsb) ) {
			if( $db["RequiereAutorizacion"] == 1 && empty($db["VoBo"]) ) {
				$msg = "Memorando no está autorizado";
				$sts = "R";
			} else {
				// Obtener firma digital del solicitante
				// Verificar quien está autorizando
				if( $db["De"] <> $_SESSION["UserID"] ) {
					$sqc = "select * from tik_firmas where Usuario = '".$_SESSION["UserID"]."' and FIND_IN_SET('".$_SESSION["CodigoDepto"]."',Departamentos)";
				} else {
					$sqc = "select * from tik_firmas where Usuario = '".$db["De"]."' and FIND_IN_SET('".$_SESSION["CodigoDepto"]."',Departamentos)";
				}
echo "<script>alert('sqc ".$sqc." pin ".$pin."')</script>";
				$rsc = CustomQuery($sqc);
				if( $dc = db_fetch_array($rsc) ) {
					if( !empty($dc["ValidoHasta"]) && $hoy > $dc["ValidoHasta"] ) {
						$msg = "Su PIN ha vencido, verificar";
						$sts = "R";
					} else {
echo "<script>alert('Firma Digital ".$dc["FirmaDigital"]." pin ".$pin."')</script>";
						if( $dc["FirmaDigital"] == $pin ) {
							$sqla = "update tik_memorando set FirmaDigital = '".$pin."', Estado = 'Firmado',";
							$sqla .= " AutorizadoPor = '".$dc["Usuario"]."'";
							$sqla .= " where NoMemorando = ".$dataa["NoMemorando"];
	//fwrite($salida,"sqla ".$sqla.PHP_EOL);
							CustomQuery($sqla);
							$msg = "Memorando(s) Aprobado(s)!";
							$sts = "A";
						} else {
							$msg = "PIN incorrecto!";
							$sts = "R";
						}
					}
				}
			}
		} else {
			$msg = "Error en captura de Memorando";
			$sts = "R";
		}
	}
}
$result["txt"] = $msg;
$result["sts"] = $sts;
//fclose($salida)
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_VoBo_Memo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$pin = $params["pin"];

$msg = "";
$sts = "";
if($dataa = $button->getCurrentRecord()) {
	$sqlb = "select * from tik_firmas where Usuario='".$_SESSION["UserID"]."'";
	$rsb = CustomQuery($sqlb);
	if( $db = db_fetch_array($rsb) ) {
		if( $db["FirmaDigital"] == $pin ) {
			$sqla = "update tik_memorando set Estado='Autorizado', VoBo='".$pin."' where NoMemorando = ".$dataa["NoMemorando"];
			CustomQuery($sqla);
			$msg = "Memorando(s) Autorizado!";
			$sts = "A";
		} else {
			$msg = "PIN incorrecto!";
			$sts = "R";
		}
	} else {
		$msg = "Error en captura de Memorando";
		$sts = "R";
	}
}
$result["txt"] = $msg;
$result["sts"] = $sts;
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_genpin($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
// Generar nuevo PIN
$sqla = "select tik_pin(6) as pin";
$rsa = CustomQuery($sqla);
if( $da = db_fetch_array($rsa) ) {
	// Enviar nuevo PIN al formato
	$result["pin"] = $da["pin"];
} else {
	$result["pin"] = "";
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Print_Memo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$salida = @fopen("d:\\salida.txt", "w+") or die ("No se pudo crear archivo temporal");
//fwrite($salida,"Inicio".PHP_EOL);
$docto = "";
if( $da = $button->getCurrentRecord() ) {
	// Enlazar maestro
	$sqlb = "select * from tik_memorando where NoMemorando = ".$da["NoMemorando"];
	$rsb = CustomQuery($sqlb);
	if( $db = db_fetch_array($rsb) ) {
		// Buscar Usuario de memorando origen
		$sqlc = "select * from zusuarios where Usuario = '".$db["De"]."'";
		$rsc = CustomQuery($sqlc);
		if( $dc = db_fetch_array($rsc) ) {
			$DeNombre = $dc["Nombre"];
			$sqld = "select * from zdepartamentos where CodigoDepto = ".$dc["CodigoDepto"];
			$rsd = CustomQuery($sqld);
			if( $dd = db_fetch_array($rsd) ) {
				$DeDepartamento = $dd["Descripcion"];
				$DePuesto = trim($dc["Puesto"])." DE ".$DeDepartamento;
			} else {
				$DeDepartamento = "";
				$DePuesto = trim($dc["Puesto"]);
			}
			$DeNombre = strtolower($DeNombre);
			$DeNombre = ucwords($DeNombre);
			$DeDepartamento = strtolower($DeDepartamento);
			$DeDepartamento = ucwords($DeDepartamento);
			$DePuesto = strtolower($DePuesto);
			$DePuesto = ucwords($DePuesto);
		} else {
			$DeNombre = 'No se encontro';
			$DeDepartamento = 'No se encontro';
			$DePuesto = 'No se encontro';
		}
		// Buscar Usuario quien autorizo por autorizacion de origen
		$sqla = "select * from zusuarios where Usuario = '".$db["AutorizadoPor"]."'";
		$rsa = CustomQuery($sqla);
		if( $da = db_fetch_array($rsa) ) {
			$APNombre = "Autorizado Por: ".$da["Nombre"];
		}
		// Buscar Puesto de Destino
		// Verificar a destinatario entre varias opciones
		if( !empty($db["A"]) ) {
			// Crear arreglo de usuarios
			$ausr = explode(",",$db["A"]);
			$destino = "";
			for( $x=0; $x<count($ausr); $x++ ) {
				if( !empty($destino) )
					$destino .= ",";
				$destino .= "'".$ausr[$x]."'";
			}
		} else {
			$destino = "'".$_SESSION["UserID"]."'";
		}
		$DirigidoA = $PuestoA = $DeptoA = "";
		$sqlc = "select * from zusuarios where Usuario in (".$destino.")";
		$rsc = CustomQuery($sqlc);
		while( $dc = db_fetch_array($rsc) ) {
			$ANombre = $dc["Nombre"];
			$sqld = "select * from zdepartamentos where CodigoDepto = ".$dc["CodigoDepto"];
			$rsd = CustomQuery($sqld);
			if( $dd = db_fetch_array($rsd) ) {
				$ADepartamento = $dd["Descripcion"];
				$APuesto = trim($dc["Puesto"])." DE ".$ADepartamento;
			} else {
				$ADepartamento = "";
				$APuesto = trim($dc["Puesto"]);
			}
			$ANombre = strtolower($ANombre);
			$ANombre = ucwords($ANombre);
			$ADepartamento = strtolower($ADepartamento);
			$ADepartamento = ucwords($ADepartamento);
			$APuesto = strtolower($APuesto);
			$APuesto = ucwords($APuesto);
			// Crear puesto
			if( !empty($DirigidoA) )
				$DirigidoA .= ", ";
			$DirigidoA .= $ANombre;
			if( !empty($DeptoA) )
				$DeptoA .= ", ";
			$DeptoA .= $ADepartamento;
			if( !empty($PuestoA) )
				$PuestoA .= ", ";
			$PuestoA .= $APuesto;
		}
		// Buscar Puesto del autorizador
		$sqlc = "select * from zusuarios where Usuario = '".$db["Autorizador"]."'";
		$rsc = CustomQuery($sqlc);
		if( $dc = db_fetch_array($rsc) ) {
			$VoBoNombre = $dc["Nombre"];
			$sqld = "select * from zdepartamentos where CodigoDepto = ".$dc["CodigoDepto"];
			$rsd = CustomQuery($sqld);
			if( $dd = db_fetch_array($rsd) ) {
				$VoBoDepartamento = $dd["Descripcion"];
				$VoBoPuesto = trim($dc["Puesto"])." DE ".$ADepartamento;
			} else {
				$VoBoDepartamento = "";
				$VoBoPuesto = trim($dc["Puesto"]);
			}
			$VoBoNombre = strtolower($VoBoNombre);
			$VoBoNombre = ucwords($VoBoNombre);
			$VoBoDepartamento = strtolower($VoBoDepartamento);
			$VoBoDepartamento = ucwords($VoBoDepartamento);
			$VoBoPuesto = strtolower($VoBoPuesto);
			$VoBoPuesto = ucwords($VoBoPuesto);
		} else {
			$VoBoNombre = 'No se encontro';
			$VoBoDepartamento = 'No se encontro';
			$VoBoPuesto = 'No se encontro';
		}
		// Grabar 
		$sqla = "insert ignore into tik_memorando_l (NoMemorando,A,FechaHora)";
		$sqla .= " values(".$db["NoMemorando"].",'".$_SESSION["UserID"]."','".strftime("%Y-%m-%d %H:%M:%S")."')";
		CustomQuery($sqla);
		// Verificar tipo de papel
		if( $db["TipoPapel"] == "Carta" ) {
			$docto = "TCarta.docx";
		} else if( $db["TipoPapel"] == "Oficio" ) {
			$docto = "TOficio.docx";
		} else if( $db["TipoPapel"] == "Legal" ) {
			$docto = "TLegal.docx";
		}
		// Definir Nombre del archivo a grabar
		$znombre = "Documento No. ".$db["NoMemorando"];
		// Definir Plugin
		require_once 'plugins/PHPWord.php';
		$PHPWord = new PHPWord();
		// Se carga el documento base en una variable para trabajarlo
		$documentow = $PHPWord->loadTemplate($docto);

		// Reemplazar los valores de Encabezado
		//    En el documento base de WORD se crea un campo sustituitble el cual debe estar
		//    entre llaves y con signo de dolar al inicio ${campo} para que el sistema pueda
		//    reemplazarlos por el valor deseado.
		$documentow->setValue('NoMemorando', $db["NoMemorando"]);
		$documentow->setValue('Documento', $db["Documento"]);
		$documentow->setValue('A', $DirigidoA);
		$documentow->setValue('Apuesto', $PuestoA);
		$documentow->setValue('De', $DeNombre);
		$documentow->setValue('DePuesto', $DePuesto);
		$documentow->setValue('Autorizado', $APNombre);
		$documentow->setValue('Fecha', feclet($db["Fecha"]));
		$documentow->setValue('Asunto', cnvspcchr($db["Descripcion"]));
		$documentow->setValue('Texto', cnvspcchr($db["Texto"]));
		if( $db["RequiereAutorizacion"] == 1 ) {
			$documentow->setValue('VoBo', $VoBoNombre);
			$documentow->setValue('VoBoPuesto', $VoBoDepartamento);
			$tam = strlen($VoBoNombre);
			$linea = str_repeat("_", ($tam + 4));
			$documentow->setValue('Linea', $linea);
		} else {
			$documentow->setValue('VoBo', '');
			$documentow->setValue('VoBoPuesto', '');
			$documentow->setValue('Linea', '');
		}
		// Colocar Nombre de archivo y guardar
		$archivo = $znombre.'.docx';
		$documentow->save($archivo);

		// Devolver nombre del archivo al Cliente
		$result["archivo"] = $archivo;
		$archivo_arr = explode( "/", $_SERVER[REQUEST_URI] );
		$result["servidor"] = "http://".$_SERVER[HTTP_HOST]."/".$archivo_arr[1]."/";
		$result["directorio"] = $archivo_arr[1]."/";
	}
}
//fclose($salida);
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_IniciarPA($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
while( $data = $button->getNextSelectedRecord() ) {
	if( $data['Estado'] == 'Pendiente' ) {
		$sql = "update tik_registroacciond_pa set Estado = 'En Proceso', Usuario = '".$_SESSION["UserID"];
		$sql = ", FechaSistema = '".strftime("%Y-%m-%d %H:%M:%S")."'";
		$sql .= "' where Tipo = '".$data['Tipo']."' and Solicitud = ".$data['Solicitud']." and No = ".$data['No'];
		CustomQuery($sql);
		$result["txt"] = $params["txt"]."En Proceso!";
	}
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_FinlizarPA($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
while( $data = $button->getNextSelectedRecord() ) {
	if( $data['Estado'] == 'En Proceso' ) {
		$sql = "update tik_registroacciond_pa set Estado = 'Finalizado', Usuario = '".$_SESSION["UserID"];
		$sql = ", FechaSistema = '".strftime("%Y-%m-%d %H:%M:%S")."'";
		$sql .= "' where Tipo = '".$data['Tipo']."' and Solicitud = ".$data['Solicitud']." and No = ".$data['No'];
		CustomQuery($sql);
		$result["txt"] = $params["txt"]."Finalizado!";
	}
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Aut_otr_Memo($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
// Use "Add Action" button to add code snippets.
//$salida = @fopen("d:\\salida.txt", "w+") or die ("No se pudo crear archivo temporal");
//fwrite($salida,"Inicio".PHP_EOL);
// Put your code here.
$hoy = strftime('%Y-%m-%d');
$pin = $params["pin"];

$msg = "";
$sts = "";
while($dataa = $button->getCurrentRecord()) {
	if( $dataa["Estado"] != 'Pendiente' && $dataa["Estado"] != 'Autorizado' ) {
		$msg = "Memorando ya está enviado";
		$sts = "R";
	} else {
		//  Obtener informacion del memorando
		$sqlb = "select * from tik_memorando a where a.NoMemorando=".$dataa["NoMemorando"];
		$rsb = CustomQuery($sqlb);
		if( $db = db_fetch_array($rsb) ) {
			if( $db["RequiereAutorizacion"] == 1 && empty($db["VoBo"]) ) {
				$msg = "Memorando no está autorizado";
				$sts = "R";
			} else {
				// Obtener firma digital del solicitante
				// Verificar quien está autorizando
				if( $db["De"] <> $_SESSION["UserID"] ) {
					$sqc = "select * from tik_firmas where Usuario = '".$_SESSION["UserID"]."' and Departamentos IN (".$_SESSION["CodigoDepto"].")";
				} else {
					$sqc = "select * from tik_firmas where Usuario = '".$db["De"]."' and Departamentos IN (".$_SESSION["CodigoDepto"].")";
				}
				$rsc = CustomQuery($sqc);
				if( $dc = db_fetch_array($rsc) ) {
					if( !empty($dc["ValidoHasta"]) && $hoy > $dc["ValidoHasta"] ) {
						$msg = "Su PIN ha vencido, verificar";
						$sts = "R";
					} else {
	//echo "<script>alert('Firma Digital ".$db["FirmaDigital"]." pin ".$pin."')</script>";
						if( $dc["FirmaDigital"] == $pin ) {
							$sqla = "update tik_memorando set FirmaDigital = '".$pin."', Estado = 'Firmado',";
							$sqla .= " AutorizadoPor = '".$dc["Usuario"]."'";
							$sqla .= " where NoMemorando = ".$dataa["NoMemorando"];
	//fwrite($salida,"sqla ".$sqla.PHP_EOL);
							CustomQuery($sqla);
							$msg = "Memorando(s) Aprobado(s)!";
							$sts = "A";
						} else {
							$msg = "PIN incorrecto!";
							$sts = "R";
						}
					}
				}
			}
		} else {
			$msg = "Error en captura de Memorando";
			$sts = "R";
		}
	}
}
$result["txt"] = $msg;
$result["sts"] = $sts;
//fclose($salida)
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
?>
