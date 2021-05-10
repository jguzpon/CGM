<?php
    $ruta = $_GET['ruta'];
    $archivo_arr = explode( "/", $ruta );
    $archivo = $archivo_arr[count($archivo_arr) - 1];

    if( !file_exists( $ruta ) ) {
		die( "No existe $ruta" );
    }

    header( "Content-Disposition: attachment; filename=".$archivo."");
    header( "Content-type: application/octet-stream" );
    header("Content-Length: ".filesize($ruta)); //header que envia al navegador el tamaño del archivo.

    @readfile( $ruta );

	unlink( $ruta );	// Eliminar el archivo trasladado
?>
