<?php

//tomo los datos de busqueda para mostrar la factura
$idfactura2 = $_REQUEST['idfactura'];
$valort2 = $_REQUEST['valort'];
$origen=$_REQUEST['origen'];

//filtro de fecha



//fechas del mes

$dias= date("t");
$mes = date("m");
$año = date("Y");

$fecha_inicio=$año."-".$mes."-1  /  ".$año."-".$mes."-".$dias;
// datos del usuario
$id_usu=$_SESSION['id_usuario'];
 $sql23 = "Select * from usuario where id_usuario = '" . $id_usu . "' ";
        $result23 = $conexion->EjecutarQuery($sql23);
        $row23 = mysql_fetch_array($result23);
        $nombre_usuario = $row23['nombre']." ".$row23['apellido'];

//traer los datos de la factura
  $sql2 = "Select * from factura where id_factura = '" . $_REQUEST['idfactura'] . "' ";
        $result2 = $conexion->EjecutarQuery($sql2);
        $row2 = mysql_fetch_array($result2);
        $id_pacie = $row2['id_usuario'];
        $fecha_factura = $row2['fecha'];
        $total_factura = $row2['valor_total'];
        $sub_total = $row2['subtotal'];
        $eps_id = $row2['id_eps'];
        $contrato_id = $row2['id_contrato'];

         $v_descuento = $row2['descuento'];
         $copago = $row2['copago'];
        

 // traer datos de la eps. solo el nit el nombre

  $sql_eps = "Select * from eps where id_eps = '" . $eps_id . "' ";
        $result_eps = $conexion->EjecutarQuery($sql_eps);
        $row_eps = mysql_fetch_array($result_eps);
        $nit = $row_eps['nit'];
        $nombre_eps = $row_eps['nombre'];
        $id_regimen=$row_eps['id_regimen'];
        

 // traer datos del contrato

  $sql_contrato = "Select * from contrato where id_contrato = '" . $contrato_id . "' ";
        $result_contrato = $conexion->EjecutarQuery($sql_contrato);
        $row_contrato = mysql_fetch_array($result_contrato);
        $nombre_contrato = $row_contrato['nombre_contrato'];

 // traer datos del paciente telefono. edad. .regimen. afiliacion.cedula

        $sql_pac = "Select * from paciente where identificacion	 = '" . $id_pacie . "' ";
        $result_pac = $conexion->EjecutarQuery($sql_pac);
        $row_pac = mysql_fetch_array($result_pac);
        $fecha_n= $row_pac['fecha_n'];
		$genero= $row_pac['sexo'];
        $edad = Utils::edad($fecha_n);
       
        $telefono = $row_pac['telefono'];
        $nombre_pac = $row_pac['nombre1']." ".$row_pac['nombre2']." ".$row_pac['apellido1']." ".$row_pac['apellido2'];
       
        $id_afiliacion=$row_pac['tipoafiliacion'];

       
        //buscar regimen
        $sql_r = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
        $result_r = $conexion->EjecutarQuery($sql_r);
        $row_r = mysql_fetch_array($result_r);
        $regimen = $row_r['nombre'];

        //buscar afiliacion
        $sql_t = "Select * from tipoafiliacion where id = '" . $id_afiliacion . "' ";
        $result_t = $conexion->EjecutarQuery($sql_t);
        $row_t = mysql_fetch_array($result_t);
        $afiliacion = $row_t['nombre'];

  
//sacar fecha de periodo
       // $fecha=date('Y')."-01-01".date()



?>





<script type="text/javascript">

    function imprSelec2(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />' + ficha.innerHTML;

              ventimp.document.write(content);
                ventimp.document.close();
                ventimp.print( );
                history.back();

            }


  function abrirVentana(url) {
             window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
        }
</script>
<style type="text/css">
<!--
.Estilo2 {font-size: 12px}
.Estilo4 {
	font-size: 24px;
	color: #CC3300;
}
.Estilo5 {font-size: 18px}
-->
</style>


<div id="imprimir_factura">

      <script type="text/javascript">

         
          </script>




  <p>&nbsp;</p>
  <table width="750" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
<tr height="19">
        <td width="107" height="133" rowspan="7" align="center" valign="middle" ><?php echo "<img src='" . Utils::$http_ruta . "mvc/vista/imagenes/logo2.png' height='140px' />";   ?></td>
      <td width="375"><div align="center">SOLUCIONES Y    EMPRENDIMENTO EMPRESARIAL</div></td>
      <td rowspan="8" width="156"><div align="center"><span class="Estilo5">Factura de venta N&deg; </span><br /> 
        <span class="Estilo4">SEP-<?php echo $idfactura2 ?> </span></div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center">SIEMPRE IPS SAS</div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center">NIT:900589346-6</div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center">Regimen Com&uacute;n</div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center">Calle 11# 9N-94 Santa Clara Popay&aacute;n(Cauca)</div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center">Tel. 092-8361098-3217128172</div></td>
    </tr>
    <tr height="19">
      <td height="19"><div align="center"><a href="mailto:administracion@siempree.com">administracion@siempree.com</a></div></td>
    </tr>
    <tr height="19">
      <td colspan="2" height="19">Resoluci&oacute;n DIAN 170000034583 Feb 14 de 2013 numeracion desde 1    hasta 10000</td>
    </tr>
  </table>
  <table width="750" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
    <col width="83" span="3" />
    <col width="129" />
    <col width="83" span="2" />
    <tr height="19">
      <td height="19" width="116">Fecha Fact</td>
      <td width="69"><?php echo $fecha_factura ?></td>
      <td width="96">Periodo</td>
      <td colspan="5"><?php echo $fecha_inicio ?></td>
    </tr>
    <tr height="19">
      <td height="19">NIT</td>
      <td><?php echo $nit ?></td>
      <td>Facturado a</td>
      <td width="135"><?php echo $nombre_eps ?></td>
      <td width="115">Contrato</td>
      <td colspan="3"><?php echo $nombre_contrato ?></td>
    </tr>
    <tr height="19">
      <td height="19">Identificacion</td>
      <td><?php echo $id_pacie ?></td>
      <td>Paciente</td>
      <td><?php echo $nombre_pac ?></td>
      <td>Edad</td>
      <td width="110"><?php echo $edad ?></td>
      <td width="58">Genero</td>

      <td width="33"><?php echo $genero ?></td>
    </tr>
    <tr height="19">
      <td height="19">Telefono</td>
      <td><?php echo $telefono ?></td>
      <td>Regimen</td>
      <td><?php echo $regimen ?></td>
      <td>Tipo Afiliacion</td>
      <td colspan="3"><?php echo $afiliacion ?></td>
    </tr>
  </table>
  <table border="0" class="data"  align="center" width="750" cellpadding="0" cellspacing="0">
    <col width="83" />
    <col width="252" />
    <col width="92" />
    <col width="141" />
    <col width="156" />
    <col width="92" />
    <tr height="19">
      <td height="19" width="83">Codigo</td>
      <td width="252">Descripci&oacute;n</td>
      <td width="92">Valor Paciente</td>
      <td width="141">Valor Uni.</td>
      <td width="156">Cant</td>
      <td width="92">Valor Total</td>
    </tr>
 <?php 
 
        $sql_fac = "Select * from factura_cup where id_factura = " .$idfactura2;
        $result_fac = $conexion->EjecutarQuery($sql_fac);
        while ($row_fac = mysql_fetch_array($result_fac)) {

            $tabla_cups .='<tr height="19">

                                    <td>' . $row_fac['id_cup'] . '</td>
                                    <td>' . $row_fac['nombre_cup'] . '</td>
                                    <td>0</td>
                                    <td>' . $row_fac['tarifa'] . '</td>
                                    <td>' . $row_fac['cantidad'] . '</td>
                                    <td>' . $row_fac['valor_t'] . '</td>
                                   

                                </tr>';
        }

echo $tabla_cups;
 
 ?>
    <tr height="19">
      <td colspan="4" rowspan="3" height="57">&nbsp;</td>
      <td>Sub Total</td>
      <td><?php echo $sub_total ?></td>
    </tr>
    <tr height="19">
      <td height="19">Total Cuota/Copago</td>
      <td>-<?php echo $copago ?></td>
    </tr>
    <tr height="19">
      <td height="19">Descuento</td>
      <td>-<?php echo $v_descuento ?></td>
    </tr>
    <tr height="19">
      <td colspan="4" height="19">Facturada por: <?php echo $nombre_usuario; ?></td>
      <td>TOTAL A PAGAR</td>
      <td><?php echo $total_factura ?></td>
    </tr>
    <tr height="19">
      <td colspan="6" height="19"><div align="center"><span class="Estilo2">Esta empresa esta amparada bajo la ley 1429 de 2010 de    formalizaci&oacute;n y generaci&oacute;n de empleo. T&iacute;tulo | art 2,4 y    siguientes.(Retefuente del 0%)</span></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  <p>&nbsp;</p>
  <p>

  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;
        </p>
</div>

<a href='#' onClick='imprSelec2("imprimir_factura")' >Imprimir</a>
