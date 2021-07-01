<?php
set_time_limit(0);
// filtro de fecha
date_default_timezone_set('America/Bogota');

include "../control/utils.php";
include "../persistencia/conexion.php";

$fecha_hoy = date('Y-m-d');
$where     = " where 1=1  ";

$from = trim($_REQUEST['from']);
$to   = trim($_REQUEST['to']);

if ($from != '' && $to != '') {
    $where .= " and  date(fecha) between '$from' and '$to' ";
} else if ($from != '' && $to == '') {
    $where .= " and  date(fecha)='$from' ";
} else if ($from == '' && $to != '') {
    $where .= " and  date(fecha)='$to' ";
}

$eps = trim($_REQUEST['eps']);

if ($eps != 0) {
    $where .= " and  id_eps='$eps' ";
}

$regimen = trim($_REQUEST['id_regimen']);
if ($regimen != 0) {
    $where .= " and  id_regimen=$regimen ";
}
/*else if($from == '' && $to == '') {
$where .= " and date(fecha)='".$fecha_hoy."'";
}*/

//fecha actual
//$mysql_datetime = date("Y-m");
$mysql_datetime = date("Y-m-d H:i:s");

$fecha1 = str_ireplace("-", " ", $mysql_datetime);
$fecha2 = str_ireplace(":", " ", $fecha1);
$fecha3 = str_ireplace(" ", "", $fecha2); //quito los simbolos para crear el nombre con la fecha
// y no confundir los txt

//nombre*********
$nombre_archivo = "RIP_US" . $fecha1 . ".txt";
//**************directorio
$dir_rips = "C:/Users/user/Desktop/";
//$dir_rips =$GLOBALS['raiz'] ."mvc/rips/docs_us/";
$dir = $dir_rips . $nombre_archivo;

$mysql_datetime = date("m");

$datos = "";
//traer los datdos de la factura
// $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
// $sql2 = "Select * from factura $where";
if ($nombre_archivo) {

    header('Content-type: text/plain');
    header("Content-Disposition: attachment; filename=\"$nombre_archivo.txt\"");

    $sql2    = "select *  from factura  $where and estado=1 group by id_usuario";
    $result2 = $conexion->EjecutarQuery($sql2);

    while ($row2 = mysql_fetch_array($result2)) {

        $id_pacie = $row2['id_usuario'];

        $sql_pac = "Select * from paciente where identificacion=" . $id_pacie;
        //$sql_pac = "Select * from paciente where identificacion='$id_pacie'";
        $result22 = $conexion->EjecutarQuery($sql_pac);
        $row      = mysql_fetch_array($result22);

        $cedula  = $row['identificacion'];
        $id_eps  = $row['id_eps'];
        $eps_id  = $row['id_eps'];
        $medida  = "años";
        $fecha_n = $row['fecha_n'];
        $edad    = Utils::edad($fecha_n);

        $identificacion = $row['identificacion'];
        $tipo_id        = $row['tipo_id'];
        $nombre1        = $row['nombre1'];
        $nombre2        = $row['nombre2'];
        $apellido1      = $row['apellido1'];
        $apellido2      = $row['apellido2'];
        $fecha_n        = $row['fecha_n'];
        $domicilio      = $row['domicilio'];
        $telefono       = $row['telefono'];
        $depto_n        = $row['depto_n'];
        $municipio_n    = $row['municipio_n'];
        $depto          = $row['depto'];
        $municipio      = $row['municipio'];
        $zonaresidencia = $row['zonaresidencia'];
        $tipoafiliacion = $row['tipoafiliacion'];
        $sexo           = $row['sexo'];
        $id_estrato     = $row['id_estrato'];

        $id_regimen = $row['id_regimen'];

        if ($id_regimen == 7) {
            $id_regimen = 1; // contributivo
        } else if ($id_regimen == 1) {
            $id_regimen = 2; //
        } else {
            $id_regimen = 0;
        }

        $tipo_id = $row['tipo_id'];
        //traer tipo id
        $sql_id              = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
        $result_id           = $conexion->EjecutarQuery($sql_id);
        $row_id              = mysql_fetch_array($result_id);
        $tipo_identificacion = $row_id['id'];

        //traer datos de eps
        $sql_eps    = "Select * from eps where id_eps = '" . $eps_id . "' ";
        $result_eps = $conexion->EjecutarQuery($sql_eps);
        $row_eps    = mysql_fetch_array($result_eps);
        $nit        = $row_eps['nit_2'];
        $nombre_eps = $row_eps['nombre'];

        $codigo_empresa = $nit;

        $cantidad_letras = strlen($municipio);

        if ($cantidad_letras < 3) {
            $municipio = str_pad($municipio, 3, "0", STR_PAD_LEFT);
        }

        $datos = $tipo_identificacion . "," . $cedula . "," . $codigo_empresa . "," . $id_regimen . "," . $apellido1 . "," . $apellido2 . "," . $nombre1 . "," . $nombre2 . "," . $edad . ",1," . $sexo . "," . $depto . "," . $municipio . "," . $zonaresidencia . " \r\n";

        print $datos;

        $datos = "";
    }
}
/*
--
/*TIPO DE DOCUMENTO--
NUMERO DE DOCUMENTO--
CODIGO DE LA EPS--
TIPO DE USUARIO--
PRIMER APELLIDO-
SEGUNDO APELLIDO--
PRIMER NOMBRE--
SEGUNDO NOMBRE--
EDAD--
UNIDAS DE MEDIDA DE LA EDAD
SEXO--
CODIGO DEL DEPARTAMENTO--
CODIGO DEL MUNICIPIO--
ZONA DE RESIDENCIA--

 */
