<?php

date_default_timezone_set("America/Bogota");
/*$usuario_c=$_SESSION['id_usuario'];
$proc=$_REQUEST['id_proceso'];
$h_pac=$_REQUEST['historia'];
$inic=$_REQUEST['id_vinicial'];
 */

$raiz = $GLOBALS['raiz'] = '../../../../';

include $raiz . "mvc/control/utils.php";
include $raiz . "mvc/persistencia/conexion.php";

$conexion = new Conexion();

if ($_REQUEST['opcion'] == 1) {
    // glucometria

    $sql = "INSERT INTO fr_glucometria (
                    `id_usuario`,
                    `id_historia`,
                    `id_proceso`,
                    `id_vinicial`,
                    `fechag_1`,
                    `fechag_2`,
                    `fechag_3`,
                    `fechag_4`
                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['fechag_1'] . "' ,
                    '" . $_REQUEST['fechag_2'] . "' ,
                    '" . $_REQUEST['fechag_3'] . "' ,
                    '" . $_REQUEST['fechag_4'] . "'
                    ) ";

    //echo $sql;
    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['fechag_4'];
    header('Location: ' . $url_act . '&origen_tab=1');

} else if ($_REQUEST['opcion'] == 2) {
    //secreciones

    $sql = "INSERT INTO asp_secreciones (
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `id_revaloracion`,
                    `fecha_1`,
                    `fecha_2`,
                    `fecha_3`
                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['id_revaloracion'] . "' ,
                    '" . $_REQUEST['fecha_1'] . "' ,
                    '" . $_REQUEST['fecha_2'] . "' ,
                    '" . $_REQUEST['fecha_3'] . "')";

    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=2');

} else if ($_REQUEST['opcion'] == 4) {
    //cateterismo

    $sql = "INSERT INTO fr_vesical (
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `id_revaloracion`,
                    `fechad_1`,
                    `fechad_2`,
                    `fechad_3`,
                    `fechad_4`
                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['id_revaloracion'] . "' ,
                    '" . $_REQUEST['fechad_1'] . "' ,
                    '" . $_REQUEST['fechad_2'] . "' ,
                    '" . $_REQUEST['fechad_3'] . "' ,
                    '" . $_REQUEST['fechad_4'] . "'
                    ) ";

    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=4');

} else if ($_REQUEST['opcion'] == 5) {
    // oximetria

    $sql = "INSERT INTO fr_oximetria (
            `id_usuario`,
            `id_historia`,
            `id_proceso`,
            `id_vinicial`,
            `id_revaloracion`,
            `fechas_1`,
            `fechas_2`,
            `fechas_3`,
            `fechas_4`
            ) VALUES (
            '" . $_REQUEST['id_usuario'] . "' ,
            '" . $_REQUEST['historia'] . "' ,
            '" . $_REQUEST['id_proceso'] . "' ,
            '" . $_REQUEST['id_vinicial'] . "' ,
            '" . $_REQUEST['id_revaloracion'] . "' ,
            '" . $_REQUEST['fechas_1'] . "' ,
            '" . $_REQUEST['fechas_2'] . "' ,
            '" . $_REQUEST['fechas_3'] . "' ,
            '" . $_REQUEST['fechas_4'] . "')";

    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=5');

} else if ($_REQUEST['opcion'] == 6) {
    // heridas

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=6');

} else if ($_REQUEST['opcion'] == 7) {
    //liquidos

    $hora_signo = date("Y-m-d H:i:s");

    $entrada = $_REQUEST['origen_x'];

    if ($entrada == 1) {
        $sql = "INSERT INTO fr_liquidos (
                `id_usuario`,
                `id_historia`,
                `id_proceso`,
                `id_vinicial`,
                `id_revaloracion`,
                `horal_1`,
                `horal_2`,
                `horal_3`,
                `horal_4`,
                `horal_5`
                ) VALUES (
                '" . $_REQUEST['id_usuario'] . "' ,
                '" . $_REQUEST['historia'] . "' ,
                '" . $_REQUEST['id_proceso'] . "' ,
                '" . $_REQUEST['id_vinicial'] . "' ,
                '" . $_REQUEST['id_revaloracion'] . "' ,
                '" . $hora_signo . "' ,
                '" . $_REQUEST['horal_2'] . "' ,
                '" . $_REQUEST['horal_3'] . "' ,
                '" . $_REQUEST['horal_4'] . "',1
                ) ";
    } else if ($entrada == 2) {
        $sql = "INSERT INTO fr_liquidos (
                `id_usuario`,
                `id_historia`,
                `id_proceso`,
                `id_vinicial`,
                `id_revaloracion`,
                `horal_1`,
                `horal_2`,
                `horal_4`,
                 `horal_5`
                ) VALUES (
                '" . $_REQUEST['id_usuario'] . "' ,
                '" . $_REQUEST['historia'] . "' ,
                '" . $_REQUEST['id_proceso'] . "' ,
                '" . $_REQUEST['id_vinicial'] . "' ,
                '" . $_REQUEST['id_revaloracion'] . "' ,
                '" . $hora_signo . "' ,
                '" . $_REQUEST['horal_2_1'] . "' ,
                '" . $_REQUEST['horal_4_1'] . "',2
                ) ";
    }

    $conexion->EjecutarQuery($sql);
    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=7');

} else if ($_REQUEST['opcion'] == 8) {
    // signos v

    $hora_signo = date("Y-m-d H:i:s");

    $sql_vit = "INSERT INTO fr_signos (
            `id_usuario`,
            `id_proceso`,
            `id_historia`,
            `id_vinicial`,
            `fechas_1`,
            `horas_1`,
            `descs_1`
            ) VALUES (
            '" . $_REQUEST['id_usuario'] . "' ,
            '" . $_REQUEST['id_proceso'] . "' ,
            '" . $_REQUEST['historia'] . "' ,
            '" . $_REQUEST['id_vinicial'] . "' ,
            '" . $hora_signo . "' ,
            '" . $_REQUEST['horas_1'] . "' ,
            '" . $_REQUEST['descs_1'] . "'
            ) ";

    $conexion->EjecutarQuery($sql_vit);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=8');

} else if ($_REQUEST['opcion'] == 9) {
    //notas enfermeria

    $hora_signo = date("Y-m-d H:i:s");

    $sql = "INSERT INTO fr_notas_enfermeria (
                `id_usuario`,
                `id_historia`,
                `id_proceso`,
                `id_vinicial`,
                `id_revaloracion`,
                `fecha`,
                `descrip`
                ) VALUES (
                '" . $_REQUEST['id_usuario'] . "' ,
                '" . $_REQUEST['historia'] . "' ,
                '" . $_REQUEST['id_proceso'] . "' ,
                '" . $_REQUEST['id_vinicial'] . "' ,
                '" . $_REQUEST['id_revaloracion'] . "' ,
                '" . $hora_signo . "' ,
                '" . $_REQUEST['descrip'] . "'
                ) ";

    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=9');

} else if ($_REQUEST['opcion'] == 10) {
    // _________________________medico ---- formula

    $sql = "INSERT INTO hc_formula_medica (
                    `id_usuario`,
                    `id_historia`,
                    `id_proceso`,
                    `id_vinicial`,
                    `m_medicamento`,
                    `m_cantidad`,
                    `m_posologia`,
                    `m_via`,
                    `m_dias`,
                    fecha_formula
                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['fechag_1x'] . "' ,
                    '" . $_REQUEST['fechag_2x'] . "' ,
                    '" . $_REQUEST['fechag_3x'] . "' ,
                    '" . $_REQUEST['fechag_4x'] . "' ,
                    '" . $_REQUEST['fechag_5x'] . "' ,
                    '" . $_REQUEST['fechag_6x'] . "'
                    ) ";

    $conexion->EjecutarQuery($sql);
    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=10');

} else if ($_REQUEST['opcion'] == 11) {
    // evolucion
    $hora_signo = date("Y-m-d H:i:s");
    $entrada    = $_REQUEST['origen_evo'];

    if ($entrada == 1) {

        $sql = "INSERT INTO evolucion (
                                `id_usuario`,
                                `id_proceso`,
                                `historia`,
                                `id_vinicial`,
                                `evolucion`,
                                `fecha_evo`
                                ) VALUES (
                                '" . $_REQUEST['id_usuario'] . "' ,
                                '" . $_REQUEST['id_proceso'] . "' ,
                                '" . $_REQUEST['historia'] . "' ,
                                '" . $_REQUEST['id_vinicial'] . "' ,
                                '" . $_REQUEST['descrip_x'] . "' ,
                                '" . $hora_signo . "')";

    } else if ($entrada == 2) {

        $sql = "INSERT INTO evolucion (
                                `id_usuario`,
                                `id_proceso`,
                                `historia`,
                                `id_vinicial`,
                                `recomendacion`,
                                `fecha_evo`
                                ) VALUES (
                                '" . $_REQUEST['id_usuario'] . "' ,
                                '" . $_REQUEST['id_proceso'] . "' ,
                                '" . $_REQUEST['historia'] . "' ,
                                '" . $_REQUEST['id_vinicial'] . "' ,
                                '" . $_REQUEST['descrip_r'] . "' ,
                                '" . $hora_signo . "')";
    }

    $conexion->EjecutarQuery($sql);

    $url_act = $_REQUEST['origen_url'];
    header('Location: ' . $url_act . '&origen_tab=11');

} else if ($_REQUEST['opcion'] == 69) {
    // _________________________ remision--------------------------

}
switch ($_REQUEST['opcion']) {
    case 69:
        //remisiones
        $sql = "INSERT INTO hc_remision (
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `nota_remision`

                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['fechag_9x'] . "'
                    ) ";

        $conexion->EjecutarQuery($sql);
        $url_act = $_REQUEST['origen_url'];
        header('Location: ' . $url_act . '&origen_tab=69');
        break;
    case 169:
        // _________________________ayuda diagnostica

        $sql = "INSERT INTO h_ay_diagnostica (
                    `id_ay_diagnostica`,
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `nom_ay_diagno`

                    ) VALUES (NULL,
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['nom_ay_diagno'] . "'
                    ) ";

        $conexion->EjecutarQuery($sql);
        $url_act = $_REQUEST['origen_url'];
        header('Location: ' . $url_act . '&origen_tab=169');

        break;
}
