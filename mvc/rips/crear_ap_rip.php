<?php
set_time_limit(0);
// filtro de fecha
date_default_timezone_set('America/Bogota');

include "../control/utils.php";
include "../persistencia/conexion.php";

$fecha_hoy = date('Y-m-d');
$where     = " where 1=1 and origen_factura=1";

$from = trim($_REQUEST['from']);
$to   = trim($_REQUEST['to']);

if ($from != '' && $to != '') {
    $where .= " and  date(fecha) between '$from' and '$to' ";
} else if ($from != '' && $to == '') {
    $where .= " and  date(fecha)='$from' ";
} else if ($from == '' && $to != '') {
    $where .= " and  date(fecha)='$to' ";
} else if ($from == '' && $to == '') {
    $where .= " and date(fecha)='" . $fecha_hoy . "'";
}

$eps = trim($_REQUEST['eps']);

if ($eps != 0) {
    $where .= " and  id_eps='$eps' ";
}

$regimen = trim($_REQUEST['id_regimen']);
if ($regimen != 0) {
    $where .= " and  id_regimen=$regimen ";
}
//fecha actual
//$mysql_datetime = date("Y-m");
$mysql_datetime = date("Y-m-d H:i:s");

$fecha1 = str_ireplace("-", " ", $mysql_datetime);
$fecha2 = str_ireplace(":", " ", $fecha1);
$fecha3 = str_ireplace(" ", "", $fecha2); //quito los simbolos para crear el nombre con la fecha
// y no confundir los txt

//nombre*********
$nombre_archivo = "RIP_AP" . $fecha3;
//**************directorio
//$dir_rips =$GLOBALS['raiz'] ."mvc/rips/docs_ap/";
//C:\Users\user\Desktop
//$dir_rips ="C:/Users/user/Desktop/";
//$dir_rips ="docs_ap/";
$dir = $dir_rips . $nombre_archivo;

$valor_consulta = 0;
$valor_cuota    = 0;
/*$finalidad = "finalidad";
$causa_ext = "causa externa";
$personal_at="persona_aten";
$principal="d_principal";
$relacionado="d_relacionado";
$compilacion="d_compilacion";
$forma_p ="forma_proce";*/

$mysql_datetime = date("m");

$datos = "";

if ($nombre_archivo) {

    header('Content-type: text/plain');
    header("Content-Disposition: attachment; filename=\"$nombre_archivo.txt\"");
//traer los datdos de la factura
    // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
    $sql2    = "Select * from factura $where and origen_form=0 and estado=1 order by id_factura asc";
    $result2 = $conexion->EjecutarQuery($sql2);

    while ($row2 = mysql_fetch_array($result2)) {
        $id_factura       = $row2['id_factura'];
        $id_pacie         = $row2['id_usuario'];
        $autorizacion     = $row2['autorizacion'];
        $id_eps           = $row2['id_eps'];
        $eps_id           = $row2['id_eps'];
        $id_cita          = $row2['id_cita'];
        $valor_neto_pagar = $row2['valor_total'];
        $fecha_f          = $row2['fecha'];
        $fecha_fact       = $row2['periodo'];
        $id_contrato      = $row2['id_contrato'];

        $fecha_factura   = $row2['fecha'];
        $date            = date_create($fecha_factura);
        $fecha_factura_2 = date_format($date, 'Y-m-d');

        $copago = $row2['copago'];
//                         $descuento=$row2['descuento'];
        //                         $comision=$row2['comision'];
        $descuento = "0";
        $comision  = "0";

        $ids = explode(',', $fecha_fact);

        $periodo_1 = $ids[0];
        $periodo_2 = $ids[1];

        //traer datos de eps
        $sql_eps    = "Select * from eps where id_eps = '" . $eps_id . "' ";
        $result_eps = $conexion->EjecutarQuery($sql_eps);
        $row_eps    = mysql_fetch_array($result_eps);
        $nit        = $row_eps['nit'];
        $nombre_eps = $row_eps['nombre'];
        $id_regimen = $row_eps['id_regimen'];

        //traer regimen
        $sql_reg        = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
        $result_regimen = $conexion->EjecutarQuery($sql_reg);
        $row_regimen    = mysql_fetch_array($result_regimen);
        $regimen        = $row_regimen['nombre'];
        //traer datos de paciente
        $sql_pac    = "Select * from paciente where identificacion= '" . $id_pacie . "' ";
        $result_pac = $conexion->EjecutarQuery($sql_pac);
        $row_pac    = mysql_fetch_array($result_pac);
        $fecha_n    = $row_pac['fecha_n'];
        $edad       = Utils::edad($fecha_n);
        $tipo_id    = $row_pac['tipo_id'];
        //traer tipo id
        $sql_id    = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
        $result_id = $conexion->EjecutarQuery($sql_id);
        $row_id    = mysql_fetch_array($result_id);

        $tipo_identificacion = $row_id['id'];
        //traer datos de cita

        $sql_cita    = "Select * from cita where id_cita = '" . $id_cita . "' ";
        $result_cita = $conexion->EjecutarQuery($sql_cita);
        $row_cita    = mysql_fetch_array($result_cita);

        $fecha_cita_1 = $row_cita['fecha'];

        $fecha_cita_1 = str_ireplace("-", "/", $fecha_cita_1);
        //pendiente numero autorizacion

        //traer cups
        $grupo_cups = "";

        $grupo_cups = substr(trim($grupo_cups), 0, (strlen($grupo_cups) - 1));
        //traer datos de diagnostico

        $sql_diagn   = "Select * from valoracion_inicial where id_cita   = '" . $id_cita . "' ";
        $result_diag = $conexion->EjecutarQuery($sql_diagn);
        $row_diag    = mysql_fetch_array($result_diag);

        $fecha_cita = $row_diag['fecha'];
        $principal  = $row_diag['diagnostico_principal'];
        $diag_1     = $row_diag['diagnostico_dx1'];
        $diag_2     = $row_diag['diagnostico_dx2'];
        $diag_3     = $row_diag['diagnostico_dx3'];

        /* $id_finalidad = $row_diag['fin_consulta']; ////
        $sql_fin = "Select * from fin_consulta where id = '" . $id_finalidad . "' ";
        $result_fin = $conexion->EjecutarQuery($sql_fin);
        $row_fin = mysql_fetch_array($result_fin);
        $finalidad= $row_fin['nombre'];*/

        $id_tipo_diag = $row_diag['tipo_diagnostico'];

        $sql_tipod   = "Select * from tipo_diagnostico where id = '" . $id_tipo_diag . "' ";
        $result_tipo = $conexion->EjecutarQuery($sql_tipod);
        $row_tipod   = mysql_fetch_array($result_tipo);
        $tipo_diag   = $row_tipod['nombre'];

        //traer datos de contrato

        $sql_contrato    = "Select * from contrato where id_contrato = '" . $id_contrato . "' ";
        $result_contrato = $conexion->EjecutarQuery($sql_contrato);
        $row_contrato    = mysql_fetch_array($result_contrato);
        $plan            = $row_contrato['plan'];
        $nombre_contrato = $row_contrato['nombre_contrato'];
        $poliza          = $row_contrato['poliza'];

        // traer datos de procedimiento

        $sql_pro    = "Select * from procedimiento where id_cita= '" . $id_cita . "' ";
        $result_pro = $conexion->EjecutarQuery($sql_pro);
        $row_pro    = mysql_fetch_array($result_pro);

        $personal_at  = $row_pro['personal_atencion'];
        $ambito       = $row_pro['ambito'];
        $id_finalidad = $row_pro['finalidad'];
        $forma_p      = $row_pro['forma'];

        //    $sql_fac = "Select DISTINCT id_cup,nombre_cup,autorizacion,cantidad,tarifa,valor_t,cantidad from factura_cup where id_factura = " .$id_factura;
        $sql_fac = "Select * from factura_cup where id_factura = " . $id_factura . " and  cantidad<>0 and fecha='" . $fecha_factura_2 . "'";

        $result_fac = $conexion->EjecutarQuery($sql_fac);

        while ($row_fac = mysql_fetch_array($result_fac)) {

            $datos          = "";
            $grupo_cups     = $row_fac['id_cup'];
            $valor_cup      = $row_fac['valor_t'];
            $auto_a         = $row_fac['autorizacion'];
            $cantidad_a     = $row_fac['cantidad'];
            $codigo_empresa = $nit;
            $fecha_cc       = date("d/m/Y", strtotime($fecha_f));

            $datos = "FV" . $id_factura . "," . $codigo_empresa . "," . $tipo_identificacion . "," . $id_pacie . "," . $fecha_cc . "," . $auto_a . "," . $grupo_cups . ",1,1,,,,,," . $valor_cup . " \r\n";

            print $datos;
            $datos = "";
        }

    }

}
