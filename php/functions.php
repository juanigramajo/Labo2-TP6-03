<?php

function guardarRegistro($DNI, $monto){
    
    $carpeta = '../txt/';

    if (!file_exists($carpeta)) {
        mkdir($carpeta);
    }

    $clientes = 'datos.txt';


    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('d-m-Y');
    $hora = date('H:i:s');
    $fechaHora = $fecha. '  '. $hora;


    $datos = $carpeta.$clientes;
    $archivo = fopen($datos, 'a');
    
    fputs($archivo, $DNI. ';'. $monto. ';'. $fechaHora.PHP_EOL);

    fclose($archivo);        
}


function fechaHoraActual(){

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('d/m/Y');
    $hora = date('H:i:s');
    $fechaHoraActual = $fecha. '  '. $hora;

    return $fechaHoraActual;
}


function dias($timeFile){

    $daysAfter = strtotime(date('d-m-Y H:i')) - strtotime($timeFile);
    $daysAfter = round($daysAfter/3600, 0);

    return $daysAfter;
}


function total($montoFile, $dias){

    $pagar = (($montoFile + ($montoFile * 1.5 / 100)) * $dias);

    return $pagar;
}



?>