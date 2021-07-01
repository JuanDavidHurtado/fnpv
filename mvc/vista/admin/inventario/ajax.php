<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

if (isset($_REQUEST['opcion'])) {
    $GLOBALS['raiz'] = '../../../';

    include ($raiz . "control/utils.php");
    include ($raiz . "persistencia/conexion.php");

    $conexion = new Conexion();
    $objReturn = new stdClass();
    if ($_REQUEST['opcion'] == 1) {
        
        $sql = "Select sum(cantidad) as cantidad from articulo_entrada where id_articulo={$_REQUEST['id_articulo']}";
        $result = $conexion->EjecutarQuery($sql);
        $row = mysql_fetch_array($result);
        $cantidad_entrada = $row['cantidad'];
        
        $sql = "Select sum(cantidad) as cantidad from articulo_salida where id_articulo={$_REQUEST['id_articulo']}";
        $result = $conexion->EjecutarQuery($sql);
        $row = mysql_fetch_array($result);
        $cantidad_salida = $row['cantidad'];
        
        $cantidad_actual = $cantidad_entrada - $cantidad_salida;
        
        $objReturn->cantidad_actual = $cantidad_actual;
    }
    
    echo json_encode($objReturn);
    
}
?>
