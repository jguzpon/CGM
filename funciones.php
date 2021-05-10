<?php

function cnvspcchr($palabra) {
	if( isset($palabra) ) {
		$salida = htmlspecialchars($palabra);
	} else {
		$salida = false;
	}
	return $salida;
}

function addHoras($fechain,$horas) {
	if( isset($fechain) && isset($horas) ) {
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$horas.' Hours', strtotime($fechain)));
		return $ndate;
	}
}

function addMinutos($fechain,$minutos) {

	if( isset($fechain) && isset($minutos) ) {
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$minutos.' Minutes', strtotime($fechain)));
		return $ndate;
	}
}

function addDias($fechain,$dias,$tipo) {

	if( isset($fechain) && isset($dias) ) {
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$dias.' Day', strtotime($fechain)));
		if( $tipo = 'H' ) {
			$weekday = date('w', $ndate);
			while( $weekday == 0 || $weekday == 6 ) {
				$ndate = date('Y-m-d H:i:s', strtotime('+1 Day', $ndate));
				$weekday = date('w', $ndate);
			}
		}
		return $ndate;
	}

}

function addSemanas($fechain,$semanas) {

	if( isset($fechain) && isset($semanas) ) {
		$dias = $semanas * 7;
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$dias.' Day', strtotime($fechain)));
		$weekday = date('w', $ndate);
		while( $weekday == 0 || $weekday == 6 ) {
			$ndate = date('Y-m-d H:i:s', strtotime('+1 Day', $ndate));
			$weekday = date('w', $ndate);
		}
		return $ndate;
	}

}

function addMeses($fechain,$meses) {

	if( isset($fechain) && isset($meses) ) {
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$meses.' Month', strtotime($fechain)));
		return $ndate;
		$weekday = date('w', $ndate);
		while( $weekday == 0 || $weekday == 6 ) {
			$ndate = date('Y-m-d H:i:s', strtotime('+1 Day', $ndate));
			$weekday = date('w', $ndate);
		}
	}

}

function addAnios($fechain,$anios) {

	if( isset($fechain) && isset($anios) ) {
		$ndate = date('Y-m-d H:i:s', strtotime('+'.$anios.' Year', strtotime($fechain)));
		return $ndate;
		$weekday = date('w', $ndate);
		while( $weekday == 0 || $weekday == 6 ) {
			$ndate = date('Y-m-d H:i:s', strtotime('+1 Day', $ndate));
			$weekday = date('w', $ndate);
		}
	}

}

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function urlsch()
{
//	$actual_link = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
	$actual_link = $_SERVER[REQUEST_URI];
	$aa = strpos($actual_link,'date13');
	$ab = strpos($actual_link,'goto');
	$ac = strpos($actual_link,'print');
	$an = strpos(strtoupper($actual_link),'ANO');
	if($aa > 0) {
		$x = strpos($actual_link,'(')+1;
		$y = ((strlen($actual_link)-1)-$x);
		$condicion = substr($actual_link,$x,$y);
		if(strpos($condicion,'between') > 0) {
			$condicion = str_replace('~date13','~and',$condicion);
		} else {
			$condicion = str_replace('~date13','',$condicion);
		}
		$condicion = str_replace('~',',',$condicion);
		if(strpos($condicion,'empty') > 0)
			$condicion = str_replace('empty','equals,""',$condicion);
		if(strpos($condicion,'equals') > 0)
			$condicion = str_replace('equals','=',$condicion);
		if(strpos($condicion,'lessthan') > 0)
			$condicion = str_replace('lessthan','<',$condicion);
		if(strpos($condicion,'greaterthan') > 0)
			$condicion = str_replace('greaterthan','>',$condicion);
		if(strpos($condicion,')(') > 0)
			$condicion = str_replace(')(',',and,',$condicion);
		// Inicio del proceso de arreglo
		$arreglo = explode(',',$condicion);
		$max = sizeof($arreglo)-1;
		for($w = 0;$w <= $max; $w++)
		{
			// Verificar si hay fechas
			if(preg_match("/\d{4}-\d{2}-\d{2}/", $arreglo[$w], $dateArray))
			{
				$wfecha = implode($dateArray);
				$date = date('Y-m-d',strtotime($wfecha));
				$arreglo[$w] = $date;
			} else {
				if(preg_match("/\d{4}-\d{2}-\d{1}/", $arreglo[$w], $dateArray))
				{
					$wfecha = implode($dateArray);
					$date = date('Y-m-d',strtotime($wfecha));
					$arreglo[$w] = $date;
				} else {
					if(preg_match("/\d{4}-\d{1}-\d{2}/", $arreglo[$w], $dateArray))
					{
						$wfecha = implode($dateArray);
						$date = date('Y-m-d',strtotime($wfecha));
						$arreglo[$w] = $date;
					} else {
						if(preg_match("/\d{4}-\d{1}-\d{1}/", $arreglo[$w], $dateArray))
						{
							$wfecha = implode($dateArray);
							$date = date('Y-m-d',strtotime($wfecha));
							$arreglo[$w] = $date;
						}
					}
				}
			}
			// verificar si hay cuentas o codigos
			if(is_numeric(substr($arreglo[$w],1,1))) {
				if(strpos('.',$arreglo[$w]) == 0) {
					$arreglo[$w] = '"'.$arreglo[$w].'"';
				}
			}
		}
		$lcondicion = implode(" ",$arreglo);
		if(strpos($condicion,'empty') > 0)
			$condicion = str_replace('empty','equals,""',$condicion);
		if(strpos($lcondicion,'equals') > 0)
			$lcondicion = str_replace('equals','=',$lcondicion);
		if(strpos($lcondicion,'lessthan') > 0)
			$lcondicion = str_replace('lessthan','<',$lcondicion);
		if(strpos($lcondicion,'greaterthan') > 0)
			$lcondicion = str_replace('greaterthan','>',$lcondicion);
		if(strpos($lcondicion,'startswith') > 0)
			$lcondicion = str_replace('startswith','like',$lcondicion);
		if(strpos($lcondicion,')(') > 0)
			$lcondicion = str_replace(')(',',and,',$lcondicion);
	} else {
		if( $ab > 0 || $ac > 0 || $an > 0 ) {
			$lcondicion = $actual_link;
		} else {
			$lcondicion = '';
		}
	}
	return $lcondicion;
}

function urlschfechas()
{
//	$actual_link = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
	$actual_link = $_SERVER[REQUEST_URI];
	$ab = strpos($actual_link,'date13');
	if($ab > 0) {
		$x = strpos($actual_link,'(')+1;
		$y = ((strlen($actual_link)-1)-$x);
		$condicion = substr($actual_link,$x,$y);
		if(strpos($condicion,'between') > 0) {
			$condicion = str_replace('~date13','~and',$condicion);
		} else {
			$condicion = str_replace('~date13','',$condicion);
		}
		$condicion = str_replace('~',',',$condicion);
		if(strpos($condicion,'empty') > 0)
			$condicion = str_replace('empty','equals,""',$condicion);
		if(strpos($condicion,'equals') > 0)
			$condicion = str_replace('equals','=',$condicion);
		if(strpos($condicion,'lessthan') > 0)
			$condicion = str_replace('lessthan','<',$condicion);
		if(strpos($condicion,'greaterthan') > 0)
			$condicion = str_replace('greaterthan','>',$condicion);
		if(strpos($condicion,')(') > 0)
			$condicion = str_replace(')(',',and,',$condicion);
		// Inicio del proceso de arreglo
		$arreglo = explode(',',$condicion);
		$max = sizeof($arreglo)-1;
		for($w = 0;$w <= $max; $w++)
		{
			if(strtoupper($arreglo[$w]) == 'FECHA')
			{
				$v = $w + 2;
				$wfecini = verfecha($arreglo[$v]);
				$v = $v + 2;
				$wfecfin = verfecha($arreglo[$v]);
				break;
			}
		}
	} else {
		$wfecha = '';
	}
	$salida = array('"'.$wfecini.'"','"'.$wfecfin.'"');
	return $salida;
}

function urlschpar($entrada)
{
//	$actual_link = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
	$actual_link = $_SERVER[REQUEST_URI];
	$ab = strpos($actual_link,$entrada);
	if($ab > 0) {
		$x = strpos($actual_link,'(')+1;
		$y = ((strlen($actual_link)-1)-$x);
		$condicion = substr($actual_link,$x,$y);
		if(strpos($condicion,'between') > 0) {
			$condicion = str_replace('~date13','~and',$condicion);
		} else {
			$condicion = str_replace('~date13','',$condicion);
		}
		$condicion = str_replace('~',',',$condicion);
		if(strpos($condicion,'empty') > 0)
			$condicion = str_replace('empty','equals,""',$condicion);
		if(strpos($condicion,'equals') > 0)
			$condicion = str_replace('equals','=',$condicion);
		if(strpos($condicion,'lessthan') > 0)
			$condicion = str_replace('lessthan','<',$condicion);
		if(strpos($condicion,'greaterthan') > 0)
			$condicion = str_replace('greaterthan','>',$condicion);
		if(strpos($condicion,')(') > 0)
			$condicion = str_replace(')(',',and,',$condicion);
		// Inicio del proceso de arreglo
		$arreglo = explode(',',$condicion);
		$max = sizeof($arreglo)-1;
		for($w = 0;$w <= $max; $w++)
		{
			if(strtoupper($arreglo[$w]) == strtoupper($entrada))
			{
				$v = $w + 2;
				if( $arreglo[$v] != '""')
				{
					$wsalida = $arreglo[$v];
				} else {
					$wsalida = '';
				}
				break;
			}
		}
	} else {
		$wsalida = '';
	}
	return '"'.$wsalida.'"';
}

function feclet($fecha){
	if( substr($fecha,0,1) == '"' ) {
		$wfecha = substr($fecha,1,10);
	} else {
		$wfecha = $fecha;
	}
	$dia= conocerDiaSemanaFecha($wfecha);
	$num = date("j", strtotime($wfecha));
	$xmes = date('m', strtotime($wfecha));
	$anno = date("Y", strtotime($wfecha));
	$mes = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$lmes = $mes[intval($xmes)-1];
	return $dia.', '.$num.' de '.$lmes.' del '.$anno;
}

function fechadmy($fecha) {
	$originalDate = "2010-03-21";
	$newDate = date("d-m-Y", strtotime($originalDate));
}

function fecletl($fecha){

/*	
$file = fopen("d:\salida.txt", "a");
fwrite($file, "Fecha entrada: ".$fecha.PHP_EOL);
fclose($file);
*/
	if( substr($fecha,0,1) == '"' ) {
		$wfecha = substr($fecha,1,10);
	} else {
		$wfecha = $fecha;
	}
	$num = date("j", strtotime($wfecha));
	$xmes = date('m', strtotime($wfecha));
	$anno = date("Y", strtotime($wfecha));
	$ddl = strtolower(num2let($num,'','','N'));
	$mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
	$lmes = $mes[intval($xmes)-1];
	$aaaal = strtolower(num2let($anno,'','','N'));
	
	$salida = array($num,$xmes,$anno,$ddl,$lmes,$aaaal);
	
	return $salida;
}
 
function fectexto($fecha){
	if( substr($fecha,0,1) == '"' ) {
		$wfecha = substr($fecha,1,10);
	} else {
		$wfecha = $fecha;
	}

	$num = date("j", strtotime($wfecha));
	$xmes = date('m', strtotime($wfecha));
	$anno = date("Y", strtotime($wfecha));
	$lnum = ucwords(strtolower(num2let($num,'','','N')));
	$mes = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$lmes = $mes[intval($xmes)-1];
	$lanno = ucwords(strtolower(num2let($anno,'','','N')));
	
	$salida = array($lnum,$lmes,$lanno);
	
	return $salida;
}

function conocerDiaSemanaFecha($fecha) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
}

function check_date($str){ /// dead useful when validating between mysql and php date formats
	trim($str);
	if(!preg_match("/^(d){1,4}-(d){1,2}-(d){1,4}+$/i",$str)){
		return false;
	}
	# check that the date is valid
	if(preg_match("/^(d){1,4}-(d){1,2}-(d){1,2}+$/i",$str)){
		list($year,$month,$day)=explode("-",$str);
	} elseif(preg_match("/^(d){1,2}-(d){1,2}-(d){1,4}+$/i",$str)){
		list($day,$month,$year)=explode("-",$str);
	}
	if( !checkdate($month,$day,$year) ) {
		return false;
	}
	return true;
}

function verfecha($ifecha) {
	if(strlen($ifecha) > 0)
	{
		// Si tieme plecas (/) cambiarlo a guiones (-)
		if(strpos("/",$ifecha) > 0)
			str_replace("/","-",$ifecha);
		// Verificar si hay fechas
		if(preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $ifecha, $dateArray))
		{
			$nfecha = DateTime::createFromFormat('Y-m-d', implode($dateArray));
			$ofecha = date_format($nfecha, 'Y-m-d');
		} else {
			if(preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{1}$/", $ifecha, $dateArray))
			{
				$nfecha = DateTime::createFromFormat('Y-m-j', implode($dateArray));
				$ofecha = date_format($nfecha, 'Y-m-d');
			} else {
				if(preg_match("/^[0-9]{4}-[0-9]{1}-[0-9]{2}$/", $ifecha, $dateArray))
				{
					$nfecha = DateTime::createFromFormat('Y-n-d', implode($dateArray));
					$ofecha = date_format($nfecha, 'Y-m-d');
				} else {
					if(preg_match("/^[0-9]{4}-[0-9]{1}-[0-9]{1}$/", $ifecha, $dateArray))
					{
						$nfecha = DateTime::createFromFormat('Y-n-j', implode($dateArray));
						$ofecha = date_format($nfecha, 'Y-m-d');
					}
				}
			}
		}
	} else {
		$ofecha = '';
	}
	return $ofecha;
}

function tiempofechas($fechaInicio,$fechaFin)
{
	// separamos en partes las fechas 
	$array_fi = explode ( "-", $fechaInicio ); 
	$array_ff = explode ( "-", $fechaFin ); 

	$anos =  $array_ff[0] - $array_fi[0]; // calculamos años 
	$meses = $array_ff[1] - $array_fi[1]; // calculamos meses 
	$dias =  $array_ff[2] - $array_fi[2]; // calculamos días 

	//ajuste de posible negativo en $días 
	if ($dias < 0) 
	{ 
		--$meses; 

		//ahora hay que sumar a $dias los dias que tiene el mes anterior de la fecha actual 
		switch ($array_ff[1]) { 
			   case 1:     $dias_mes_anterior=31; break; 
			   case 2:     $dias_mes_anterior=31; break; 
			   case 3:  
					if (bisiesto($array_ff[0])) 
					{ 
						$dias_mes_anterior=29; break; 
					} else { 
						$dias_mes_anterior=28; break; 
					} 
			   case 4:     $dias_mes_anterior=31; break; 
			   case 5:     $dias_mes_anterior=30; break; 
			   case 6:     $dias_mes_anterior=31; break; 
			   case 7:     $dias_mes_anterior=30; break; 
			   case 8:     $dias_mes_anterior=31; break; 
			   case 9:     $dias_mes_anterior=31; break; 
			   case 10:     $dias_mes_anterior=30; break; 
			   case 11:     $dias_mes_anterior=31; break; 
			   case 12:     $dias_mes_anterior=30; break; 
		} 

		$dias=$dias + $dias_mes_anterior; 
	} 

	//ajuste de posible negativo en $meses 
	if ($meses < 0) 
	{ 
		--$anos; 
		$meses=$meses + 12; 
	}

	//años, meses y dias
	$tiempo = array($anos,$meses,$dias);

    return $tiempo;
}

function bisiesto($anio_actual)
{ 
    $bisiesto=false; 
    //probamos si el mes de febrero del año actual tiene 29 días 
	if (checkdate(2,29,$anio_actual)) 
	{ 
		$bisiesto=true; 
	} 
    return $bisiesto; 
}

function tiempo_transcurrido($fechaInicio,$fechaFin)
{
    $fecha1 = new DateTime($fechaInicio);
    $fecha2 = new DateTime($fechaFin);
    $fecha = $fecha1->diff($fecha2);
         
    //años
    if($fecha->y > 0)
    {
        $anios = $fecha->y;
    }
         
    //meses
    if($fecha->m > 0)
    {
        $meses = $fecha->m;
    }
         
    //dias
    if($fecha->d > 0)
    {
        $dias = $fecha->d;
    }
         
    //horas
    if($fecha->h > 0)
    {
        $horas = $fecha->h;
    }
         
    //minutos
    if($fecha->i > 0)
    {
        $minutos = $fecha->i;
    }
    else if($fecha->i == 0) //segundos
        $segundos = $fecha->s." segundos";
  
	$tiempo = array($anios,$meses,$dias);
    return $tiempo;
}

/**-----------------------------------------------------------------------------------------------------------------------------------------------------
 * Convierte un número en una cadena de letras, para el idioma
 * castellano, pero puede funcionar para español de mexico, de  
 * españa, colombia, argentina, etc.
 * 
 * Máxima cifra soportada: 18 dígitos con 2 decimales
 * 999,999,999,999,999,999.99
 * NOVECIENTOS NOVENTA Y NUEVE MIL NOVECIENTOS NOVENTA Y NUEVE BILLONES
 * NOVECIENTOS NOVENTA Y NUEVE MIL NOVECIENTOS NOVENTA Y NUEVE MILLONES
 * NOVECIENTOS NOVENTA Y NUEVE MIL NOVECIENTOS NOVENTA Y NUEVE PESOS 99/100 M.N.
 * 
 * @author Ultiminio Ramos Galán <contacto@ultiminioramos.com>
 * @param string $numero La cantidad numérica a convertir 
 * @param string $moneda La moneda local de tu país
 * @param string $subfijo Una cadena adicional para el subfijo
 * @param string $tipo Tipo de conversion, B si es Billete o N = si es Numero
 * 
 * @return string La cantidad convertida a letras
 */
function num2let($numero, $moneda = 'LEMPIRA', $subfijo = 'CENTAVOS', $tipo = 'B')
{
    $xarray = array(
        0 => 'Cero'
        , 1 => 'UN', 'DOS', 'TRES', 'CUATRO', 'CINCO', 'SEIS', 'SIETE', 'OCHO', 'NUEVE'
        , 'DIEZ', 'ONCE', 'DOCE', 'TRECE', 'CATORCE', 'QUINCE', 'DIECISEIS', 'DIECISIETE', 'DIECIOCHO', 'DIECINUEVE'
        , 'VEINTI', 30 => 'TREINTA', 40 => 'CUARENTA', 50 => 'CINCUENTA'
        , 60 => 'SESENTA', 70 => 'SETENTA', 80 => 'OCHENTA', 90 => 'NOVENTA'
        , 100 => 'CIENTO', 200 => 'DOSCIENTOS', 300 => 'TRESCIENTOS', 400 => 'CUATROCIENTOS', 500 => 'QUINIENTOS'
        , 600 => 'SEISCIENTOS', 700 => 'SETECIENTOS', 800 => 'OCHOCIENTOS', 900 => 'NOVECIENTOS'
    );
 
    $numero = trim($numero);
    $xpos_punto = strpos($numero, '.');
    $xaux_int = $numero;
    $xdecimales = '00';
    if (!($xpos_punto === false)) {
        if ($xpos_punto == 0) {
            $numero = '0' . $numero;
            $xpos_punto = strpos($numero, '.');
        }
        $xaux_int = substr($numero, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
        $xdecimales = substr($numero . '00', $xpos_punto + 1, 2); // obtengo los valores decimales
    }
 
    $XAUX = str_pad($xaux_int, 18, ' ', STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
    $xcadena = '';
    for ($xz = 0; $xz < 3; $xz++) {
        $xaux = substr($XAUX, $xz * 6, 6);
        $xi = 0;
        $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
        $xexit = true; // bandera para controlar el ciclo del While
        while ($xexit) {
            if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                break; // termina el ciclo
            }
 
            $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
            $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
            for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                switch ($xy) {
                    case 1: // checa las centenas
                        $key = (int) substr($xaux, 0, 3);
                        if (100 > $key) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas
                            /* do nothing */
                        } else {
                            if (TRUE === array_key_exists($key, $xarray)) {  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
                                if (100 == $key) {
                                    $xcadena = ' ' . $xcadena . ' CIEN ' . $xsub;
                                } else {
                                    $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                                }
                                $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                            } else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                $key = (int) substr($xaux, 0, 1) * 100;
                                $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                $xcadena = ' ' . $xcadena . ' ' . $xseek;
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 0, 3) < 100)
                        break;
                    case 2: // checa las decenas (con la misma lógica que las centenas)
                        $key = (int) substr($xaux, 1, 2);
                        if (10 > $key) {
                            /* do nothing */
                        } else {
                            if (TRUE === array_key_exists($key, $xarray)) {
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux);
                                if (20 == $key) {
                                    $xcadena = ' ' . $xcadena . ' VEINTE ' . $xsub;
                                } else {
                                    $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                                }
                                $xy = 3;
                            } else {
                                $key = (int) substr($xaux, 1, 1) * 10;
                                $xseek = $xarray[$key];
                                if (20 == $key)
                                    $xcadena = ' ' . $xcadena . ' ' . $xseek;
                                else
                                    $xcadena = ' ' . $xcadena . ' ' . $xseek . ' Y ';
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 1, 2) < 10)
                        break;
                    case 3: // checa las unidades
                        $key = (int) substr($xaux, 2, 1);
                        if (1 > $key) { // si la unidad es cero, ya no hace nada
                            /* do nothing */
                        } else {
                            $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                            $xsub = subfijo($xaux);
                            $xcadena = ' ' . $xcadena . ' ' . $xseek . ' ' . $xsub;
                        } // ENDIF (substr($xaux, 2, 1) < 1)
                        break;
                } // END SWITCH
            } // END FOR
            $xi = $xi + 3;
        } // ENDDO
        # si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
        if ('ILLON' == substr(trim($xcadena), -5, 5)) {
            $xcadena.= ' DE';
        }
 
        # si la cadena obtenida en MILLONES o BILLONES, entonces le agrega al final la conjuncion DE
        if ('ILLONES' == substr(trim($xcadena), -7, 7)) {
            $xcadena.= ' DE';
        }
 
        # depurar leyendas finales
        if ('' != trim($xaux)) {
            switch ($xz) {
                case 0:
                    if ('1' == trim(substr($XAUX, $xz * 6, 6))) {
                        $xcadena.= 'UN BILLON ';
                    } else {
                        $xcadena.= ' BILLONES ';
                    }
                    break;
                case 1:
                    if ('1' == trim(substr($XAUX, $xz * 6, 6))) {
                        $xcadena.= 'UN MILLON ';
                    } else {
                        $xcadena.= ' MILLONES ';
                    }
                    break;
                case 2:
					if ($tipo == 'B') {
						if (1 > $numero) {
							$xcadena = "CERO {$moneda}S {$xdecimales}/100 {$subfijo}";
						}
						if ($numero >= 1 && $numero < 2) {
							$xcadena = "UN {$moneda} {$xdecimales}/100 {$subfijo}";
						}
						if ($numero >= 2) {
							$xcadena.= " {$moneda}S {$xdecimales}/100 {$subfijo}"; //
						}
					} else {
						$xcadena.= "";
					}
                    break;
            } // endswitch ($xz)
        } // ENDIF (trim($xaux) != "")
 
        $xcadena = str_replace('VEINTI ', 'VEINTI', $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
        $xcadena = str_replace('  ', ' ', $xcadena); // quito espacios dobles
        $xcadena = str_replace('UN UN', 'UN', $xcadena); // quito la duplicidad
        $xcadena = str_replace('  ', ' ', $xcadena); // quito espacios dobles
        $xcadena = str_replace('BILLON DE MILLONES', 'BILLON DE', $xcadena); // corrigo la leyenda
        $xcadena = str_replace('BILLONES DE MILLONES', 'BILLONES DE', $xcadena); // corrigo la leyenda
        $xcadena = str_replace('DE UN', 'UN', $xcadena); // corrigo la leyenda
    } // ENDFOR ($xz)
    return trim($xcadena);
}
 
/**
 * Esta función regresa un subfijo para la cifra
 * 
 * @author Ultiminio Ramos Galán <contacto@ultiminioramos.com>
 * @param string $cifras La cifra a medir su longitud
 */
function subfijo($cifras)
{
    $cifras = trim($cifras);
    $strlen = strlen($cifras);
    $_sub = '';
    if (4 <= $strlen && 6 >= $strlen) {
        $_sub = 'MIL';
    }
 
    return $_sub;
}
 
/*---------------------------------------------------------------  EOF  ---------------------------------------------------------------*/

?>