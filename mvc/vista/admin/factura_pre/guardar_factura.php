<?php

/*echo "aaaaaaaaaaaa";

echo '<pre>';
print_r($_REQUEST);*/

$idfactura2 = $_REQUEST['idfactura'];
$valort2 = $_REQUEST['valort'];
$consulta = $_REQUEST['consulta'];
$id_medico = $_REQUEST['id_medico'];
//$copago_valor = $_REQUEST['copago_1'];
//
//valores del descuento y copago
$copago_valor = $_REQUEST['copago_v2'];
$desto = $_REQUEST['copago_v3'];
//
//$desto = $_REQUEST['vdescuento'];
$comision_v = $_REQUEST['comision'];
$subtotal = $_REQUEST['stotal5'];
//
$origen = $_REQUEST['origen'];
$origen33 = $_REQUEST['origen33'];
$auto = $_REQUEST['autorizacion'];
$auto_2 = $_REQUEST['autorizacion_2'];
//
$tipo = $_REQUEST['id_tipo'];

$id_contrato=$_REQUEST['id_contrato'];

/*if($origen==1){
$id_contrato=0;
}else{
  
}
*/
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
$regimen_usuario= $row_pac['id_regimen'];



date_default_timezone_set('America/Bogota');


$fecha_factura = $row2['fecha'];

$fecha2 = date("Y-m-d");
$hora = date("Y-m-d H:i:s");

$dias=date("t", strtotime($fecha_factura));
$mes=date("m", strtotime($fecha_factura));
$año=date("Y", strtotime($fecha_factura));

$fecha_periodo=$año."-".$mes."-1,".$año."-".$mes."-".$dias;

//insertar en factura cups

$ids = explode(',', $_REQUEST['ids']);
foreach ($ids as $id) {

    if ($id != '') {
        $Str_SQL = "INSERT INTO factura_cup (`id_factura`,`id_usuario`,`id_cup`,`nombre_cup`,`tarifa`,`cantidad`,`valor_t`,`fecha`,`autorizacion`,`autorizacion_2`)
              VALUES(
              " . $idfactura2 . ",'" . $id_pacie . "','" . $_REQUEST['hdncodigo_' . $id] . "'
                  ,'" . $_REQUEST['hdnnombre_' . $id] . "'," . $_REQUEST['hdnvaloru_' . $id] . ",
                  " . $_REQUEST['hdncantidad_' . $id] . "," . $_REQUEST['hdntotal_' . $id] . ",'" . $fecha_factura . "','".$_REQUEST['auto_' . $id] ."','".$_REQUEST['auto2_' . $id] ."')";

        $conexion->EjecutarQuery($Str_SQL);
    }
}


$id_usu = $_SESSION['id_usuario'];
//actualizo factura
$cad = "update  factura set id_medico='".$id_medico."', facturado_por='".$id_usu."', fecha_de_factura='".$fecha_factura."', id_regimen='".$regimen_usuario."', id_tipo='".$tipo."', autorizacion_2='".$auto_2."', autorizacion='".$auto."',valor_consulta='".$consulta."',subtotal='".$subtotal."',copago='".$copago_valor."', descuento='".$desto."', comision='".$comision_v."', estado=1, periodo='".$fecha_periodo."',valor_total='".$valort2."' , id_eps=" . $_REQUEST['id_eps'] . ", id_contrato=" . $id_contrato . "  where id_factura='$idfactura2'";
$conexion->EjecutarQuery($cad);
$origen = "mostrar";



?>
<script>
 window.location.replace('?option=mostrar_factura&idfactura=<?php echo $_REQUEST['idfactura']; ?>');
</script>