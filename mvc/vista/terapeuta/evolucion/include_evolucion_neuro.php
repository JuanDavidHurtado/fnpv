<?php

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/';


/* * *********************************** */
if (isset($_REQUEST['guardar_evolucion']) && isset($_REQUEST['id_cita']) && isset($_REQUEST['not_id_formulario'])) {

    if ($_REQUEST['id_evolucion'] == 'new') {

        $sql = "INSERT INTO evolucion (
`id_evolucion`,
`id_proceso`,
`id_usuario`,
`historia`,
`id_vinicial`,
`id_cita`,
`evolucion`,
`flujo`
) VALUES (
NULL,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['evolucion'] . "' ,
'" . $_REQUEST['flujo'] . "' 
) ";
    } else if ($_REQUEST['id_evolucion'] != '') {

        $sql = "UPDATE evolucion set 
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`evolucion` = '" . $_REQUEST['evolucion'] . "' ,
`flujo` = '" . $_REQUEST['flujo'] . "' WHERE `id_evolucion` = '" . $_REQUEST['id_evolucion'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
} else {
//echo 'no entro '.$_REQUEST['id_formulario'];
}

/* * *********************************** */

$sql = "SELECT count(*) FROM `valoracion_inicial` WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
$row = mysql_fetch_array($result);
$cantidad_sessiones_det = $row[0];

if ($cantidad_sessiones_det > 0) {

    $sql = "SELECT count(*) FROM `evolucion` WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_formulario`='0' ";
    $result1 = $conexion->EjecutarQuery($sql);
    $row1 = mysql_fetch_array($result1);
    $cantidad_sessiones_ejec = $row1[0];

    $sql = "SELECT max(flujo) FROM `evolucion` WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "'  and `id_formulario`='0'  ";
    $result2 = $conexion->EjecutarQuery($sql);
    $row2 = mysql_fetch_array($result2);
    $max = $row2[0];

    $cant = 1;
    if (isset($_REQUEST['id_cita'])) {
        if ($cantidad_sessiones_ejec < ($cantidad_sessiones_ejec + 1)) {
            $cant = $cantidad_sessiones_ejec + 1;
        } else {
            $cant = $cantidad_sessiones_det;
        }
    } else {
        $cant = $cantidad_sessiones_ejec;
    }

    for ($i = 1; $i <= ($cant); $i++) {
        $_REQUEST['flujo'] = $i;
        $_REQUEST['label_evolution'] = 'Evolucion clinica';
        include ($path . 'evolucion.php');
    }

    /* Formulario para finalizar session ******************************************** */
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/finalizacion.php'); /* */
} else {
    echo "<h2 class='no_print'>Para poder finalizar la cita debe diligenciar todos los formularios del tab valoracion inicial !!!</h2>";
}
?>
