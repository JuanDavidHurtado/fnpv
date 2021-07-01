<?php
set_time_limit(0);
// filtro de fecha
date_default_timezone_set('America/Bogota');

include "../control/utils.php";
include "../persistencia/conexion.php";

$fecha_hoy = date('Y-m-d');
$where     = " where 1=1 ";

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
//$where .= " and date(fecha)='".$fecha_hoy."'";
}*/

//fecha actual
$mysql_datetime = date("Y-m-d H:i:s");
$fecha          = date("Y-m-d");
$fecha_rip      = str_ireplace("-", "/", $fecha);

$fechax = date("Y-m");

$fechaxx = str_ireplace("-", "", $fechax);

$fecha1 = str_ireplace("-", " ", $mysql_datetime);
$fecha2 = str_ireplace(":", " ", $fecha1);
$fecha3 = str_ireplace(" ", "", $fecha2); //quito los simbolos para crear el nombre con la fecha
// y no confundir los txt

//nombre*********
$nombre_archivo = "RIP_CT" . $fecha3;
//**************directorio
$dir_rips = "C:/Users/user/Desktop/";
//$dir_rips =$GLOBALS['raiz'] ."mvc/rips/docs_ct/";
$dir = $dir_rips . $nombre_archivo;

/*fecha en q se genera el archivo plano va con dia mes año separado con eslash
la informacion af total, us total    */

$mysql_datetime = date("m");

$datos = "";

header('Content-type: text/plain');
header("Content-Disposition: attachment; filename=\"$nombre_archivo.txt\"");
//traer datos de las citas (AF)
$sql2               = "select COUNT(id_factura) as total_reg from factura  $where and estado=1";
$result2            = $conexion->EjecutarQuery($sql2);
$row2               = mysql_fetch_array($result2);
$total_registros_af = $row2['total_reg'];

$sql21              = "select COUNT(id_factura) as total_reg from factura  $where and estado=1";
$result21           = $conexion->EjecutarQuery($sql21);
$row21              = mysql_fetch_array($result21);
$total_registros_us = $row21['total_reg'];

// los de ac de las citas

$sql2    = "Select * from factura $where and estado=1 and origen_form=1 ";
$result2 = $conexion->EjecutarQuery($sql2);

$suma_ac = 0;

while ($row2 = mysql_fetch_array($result2)) {

    $id_factura = $row2['id_factura'];

    $fecha_factura   = $row2['fecha'];
    $date            = date_create($fecha_factura);
    $fecha_factura_2 = date_format($date, 'Y-m-d');

    $sql_fac    = "Select * from factura_cup where id_factura = " . $id_factura . " and  cantidad<>0 and fecha='" . $fecha_factura_2 . "'";
    $result_fac = $conexion->EjecutarQuery($sql_fac);

    while ($row_fac = mysql_fetch_array($result_fac)) {

        $cantidad_a = $row_fac['cantidad'];
        $suma_ac    = $suma_ac + 1;

    }

}
// Los de AP   de los procedimientos

$sql2    = "Select * from factura $where and estado=1 and origen_form=0";
$result2 = $conexion->EjecutarQuery($sql2);

$suma_ap = 0;

while ($row2 = mysql_fetch_array($result2)) {

    $id_factura = $row2['id_factura'];

    $fecha_factura   = $row2['fecha'];
    $date            = date_create($fecha_factura);
    $fecha_factura_2 = date_format($date, 'Y-m-d');

    $sql_fac = "Select * from factura_cup where id_factura = " . $id_factura . " and  cantidad<>0 and fecha='" . $fecha_factura_2 . "'";
    //echo $sql_fac;exit;
    $result_fac = $conexion->EjecutarQuery($sql_fac);

    while ($row_fac = mysql_fetch_array($result_fac)) {

        $cantidad_a = $row_fac['cantidad'];
        $suma_ap    = $suma_ap + 1;

    }

}

$sql_eps    = "Select * from eps where id_eps = '" . $eps . "' ";
$result_eps = $conexion->EjecutarQuery($sql_eps);
$row_eps    = mysql_fetch_array($result_eps);
$nit        = $row_eps['nit'];
$nombre_eps = $row_eps['nombre'];
$id_regimen = $row_eps['id_regimen'];

$codigo_empresa = $nit;

//$codigo_empresa=190010883101;
//$fecha_rip=str_ireplace("-", "/", $fecha);

$fecha_rip = date("d/m/Y", strtotime($fecha));

$af = "AF" . $fechaxx;
$us = "US" . $fechaxx;
$ac = "AC" . $fechaxx;
$ap = "AP" . $fechaxx;

$datos1 = $codigo_empresa . "," . $fecha_rip . "," . $af . "," . $total_registros_af . "\r\n";
$datos2 = $codigo_empresa . "," . $fecha_rip . "," . $us . "," . $total_registros_us . "\r\n";
$datos3 = $codigo_empresa . "," . $fecha_rip . "," . $ac . "," . $suma_ac . "\r\n";
$datos4 = $codigo_empresa . "," . $fecha_rip . "," . $ap . "," . $suma_ap . "\r\n";

//datos totales
$datos = $datos3 . $datos4 . $datos2 . $datos1;

print $datos;

//header("Content-disposition: attachment; filename={$dir}");
//header('Content-type: text/plain');
