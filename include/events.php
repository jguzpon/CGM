<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["AfterLogout"]=true;

		$this->events["BeforeLogin"]=true;



//	onscreen events



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$_SESSION["CodigoDepto"] = $data["CodigoDepto"];
$_SESSION["Codigo_Estructura"] = $data["Codigo_Estructura"];
$_SESSION["Area"] = $data["Area"];
$_SESSION["NombreUsuario"] = $data["Nombre"];
$_SESSION["DeCorreo"] = $data["Correo"];

$sqla = "insert tik_chatau (Usuario, Nombre, FechaHora)";
$sqla .= " values('".$username."','".$data["Nombre"]."','".strftime("%Y-%m-%d %H:%M:%S")."')";
$sqla .= " on duplicate key update FechaHora='".strftime("%Y-%m-%d %H:%M:%S")."'";
CustomQuery($sqla);

;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$sqla = "update tik_chatau set FechaHora = NULL where Usuario = '".$username."'";
CustomQuery($sqla);

;		
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, &$pageObject, &$values)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$hoy = strftime("%Y-%m-%d");
$sql = "select * from zusuarios where Usuario = '".$username."'";
$rsx = CustomQuery($sql);
if( $datax = db_fetch_array($rsx) ) {
	if( $password == '123' ) {
		$nhoy = addDias($datax["FechaInicio"],1,'');
		if( $hoy > $nhoy ) {
			$message = 'Su usuario ha sido bloqueado por no cambiar la contraseña temporal, llamar a DIT';
			return false;
		}
	} else {
		// Verificar el Estado del usuario
		if( $datax["Estado"] == 'Inactivo' ) {
			$message = "No tiene acceso a la aplicacion por encontrarse Inactivo.";
			return false;
		} else {
			// Verificar si el usuario es de acceso temporal a solicitud
			if( !empty($datax["FechaFinal"]) ) {
				if( $datax["FechaFinal"] < now() ) {
					$message = "El acceso al Sitema ha expirado por su superior.";
					// Inactivarlo en caso de encontrarse activo
					if( $datax["Estado"] == 'Activo' ) {
						$sqw = "update zusuarios set Estado = 'Inactivo' where Usuario = '".$username."'";
						CustomQuery($sqw);
					}
					return false;
				}
			}
		}
	}
}

return true;
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
