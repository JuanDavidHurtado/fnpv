<?php

/*echo "aaaaaaaaaaaa";

echo '<pre>';
print_r($_REQUEST);*/

$idfactura2 = $_REQUEST['idfactura'];
$valort2 = $_REQUEST['valort'];
$consulta = $_REQUEST['consulta'];
$copago_valor = $_REQUEST['copago_1'];
$desto = $_REQUEST['vdescuento'];
$comision_v = $_REQUEST['comision'];
$subtotal = $_REQUEST['stotal5'];
//
$origen = $_REQUEST['origen'];
$origen33 = $_REQUEST['origen33'];
$auto = $_REQUEST['autorizacion'];


if($origen==1){
$id_contrato=0;
}else{
  $id_contrato=$_REQUEST['id_contrato'];
}

if($origen33==1){

    //echo "dddd";
    $sqldel = 'Delete from factura_cup where id_factura = ' . $_REQUEST['idfactura'].'';
    $conexion->EjecurtarDelete($sqldel);
}

//traer los datos de la factura
$sql2 = "Select * from factura where id_factura = '" . $_REQUEST['idfactura'] . "' ";
$result2 = $conexion->EjecutarQuery($sql2);
$row2 = mysql_fetch_array($result2);
$id_pacie = $row2['id_usuario'];
$fecha_factura = $row2['fecha'];
// TRAER LOS DATOS DEL PACIENTE

$sql_pac = "Select * from paciente where identificacion= '" . $id_pacie . "' ";
$result_pac = $conexion->EjecutarQuery($sql_pac);
$row_pac = mysql_fetch_array($result_pac);
$eps_id= $row_pac['id_eps'];

$sql_eps = "Select * from eps where id_eps = '" . $eps_id . "' ";
$result_eps = $conexion->EjecutarQuery($sql_eps);
$row_eps = mysql_fetch_array($result_eps);
$regimen_usuario=$row_eps['id_regimen'];

date_default_timezone_set('America/Bogota');
$fecha2 = date("Y-m-d");
$hora = date("Y-m-d H:i:s");

         $dias= date("t");
                    $mes = date("m");
                    $año = date("Y");

                    $fecha_periodo=$año."-".$mes."-1,".$año."-".$mes."-".$dias;

//insertar en factura cups

$ids = explode(',', $_REQUEST['ids']);
foreach ($ids as $id) {

    if ($id != '') {
        $Str_SQL = "INSERT INTO factura_cup (`id_factura`,`id_usuario`,`id_cup`,`nombre_cup`,`tarifa`,`cantidad`,`valor_t`,`fecha`,`autorizacion`)
              VALUES(
              " . $idfactura2 . ",'" . $id_pacie . "','" . $_REQUEST['hdncodigo_' . $id] . "'
                  ,'" . $_REQUEST['hdnnombre_' . $id] . "'," . $_REQUEST['hdnvaloru_' . $id] . ",
                  " . $_REQUEST['hdncantidad_' . $id] . "," . $_REQUEST['hdntotal_' . $id] . ",'" . $fecha_factura . "','".$_REQUEST['auto_' . $id] ."')";

        $conexion->EjecutarQuery($Str_SQL);
    }
}


$id_usu = $_SESSION['id_usuario'];
//actualizo factura
$cad = "update  factura set facturado_por='".$id_usu."', id_regimen='".$regimen_usuario."', autorizacion='".$auto."',valor_consulta='".$consulta."',subtotal='".$subtotal."',copago='".$copago_valor."', descuento='".$desto."', comision='".$comision_v."', estado=1, periodo='".$fecha_periodo."',valor_total='".$valort2."' , id_eps=" . $_REQUEST['id_eps'] . ", id_contrato=" . $id_contrato . "  where id_factura='$idfactura2'";
$conexion->EjecutarQuery($cad);
$origen = "mostrar";



?>
<script>
 window.location.replace('?option=mostrar_factura&idfactura=<?php echo $_REQUEST['idfactura']; ?>');
</script>