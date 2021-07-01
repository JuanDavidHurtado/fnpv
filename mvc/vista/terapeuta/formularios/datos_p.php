<?php

//tomo los datos de busqueda para mostrar la factura
$id_p = $_REQUEST['identificacion'];
$id_in = $_REQUEST['id_inicial'];
$id_usuario_p = $_REQUEST['id_usuario'];


// datos del usuario
$id_usu=$_SESSION['id_usuario'];
 $sql23 = "Select * from usuario where id_usuario = '" . $id_usu . "' ";
        $result23 = $conexion->EjecutarQuery($sql23);
        $row23 = mysql_fetch_array($result23);
        $nombre_usuario = $row23['nombre']." ".$row23['apellido'];

//traer los datos 



 // traer datos del paciente telefono. edad. .regimen. afiliacion.cedula

        $sql_pac = "Select * from paciente where identificacion	 = '" . $id_p . "' ";
        $result_pac = $conexion->EjecutarQuery($sql_pac);
        $row_pac = mysql_fetch_array($result_pac);
        $fecha_n= $row_pac['fecha_n'];
        $eps_id= $row_pac['id_eps'];
        $genero= $row_pac['sexo'];
            $tipo_id= $row_pac['tipo_id'];


         $sql_id = "Select * from tipo_identificacion where id_tipo_identificacion = '" . $tipo_id . "' ";
						$result_id = $conexion->EjecutarQuery($sql_id);
						$row_id = mysql_fetch_array($result_id);

                                                $tipo_identificacion= $row_id['id'];

        $telefono = $row_pac['telefono'];
        $nombre_pac = $row_pac['nombre1']." ".$row_pac['nombre2']." ".$row_pac['apellido1']." ".$row_pac['apellido2'];

        $id_afiliacion=$row_pac['tipoafiliacion'];


        $sql_eps = "Select * from eps where id_eps = '" . $eps_id . "' ";
        $result_eps = $conexion->EjecutarQuery($sql_eps);
        $row_eps = mysql_fetch_array($result_eps);
        $nit = $row_eps['nit'];
        $nombre_eps = $row_eps['nombre'];
        $id_regimen=$row_eps['id_regimen'];

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

        $sql_diagn = "Select * from valoracion_inicial where id_vinicial= '" . $id_in . "' ";
						$result_diag = $conexion->EjecutarQuery($sql_diagn);
						$row_diag = mysql_fetch_array($result_diag);

                                                $fecha_cita= $row_diag['fecha'];
                                                $id_cita= $row_diag['id_cita'];


?>



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


      <script type="text/javascript">


          </script>

    <?php

    $tamfont = 10;
    ?>

<div id="datos_pac">

  <p>&nbsp;</p>

<table style="font-size: <?php echo $tamfont ?>px !important" width="750" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
        <tr >
            <td width="156" rowspan="7" align="center" valign="middle" ><?php echo "<img src='" . Utils::$http_ruta . "mvc/vista/imagenes/logo2.png' width='100px' />"; ?></td>
            <td width="375"><div align="center">FUNDACION NACER PARA VIVIR IPS</div></td>
       
        <tr height="">
            <td height=""><div align="center">FNPV</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">NIT:900817959-1</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Regimen Com&uacute;n</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Carrera 11# 13N-51 Antonio Nariño Popay&aacute;n(Cauca)</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Tel. 08-353399</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center"><a href="mailto:administracion@siempree.com">ips@nacerparavivir.org</a></div></td>
        </tr>
        
    </table>
  <br>
  <table width="500" border="0" class=""  align="center" cellpadding="0" cellspacing="0" style="font-size: <?php echo $tamfont ?>px !important">

    <tr height="">

      <td width="">Tipo Identificacion:</td><td width="178"><?php echo $tipo_identificacion ?></td>
     
      <td width="109">Identificacion:</td>
      <td width="178"><?php echo $id_p ?></td>
      <td>Edad</td>
      <td width="108"><?php echo $edad ?></td>
    </tr>
    
    <tr height="">
      <td height="">Paciente</td>
      <td colspan="3"><?php echo $nombre_pac ?></td>
      <td width="131">Genero</td>
      <td><?php echo $genero ?></td>
    </tr>
    <tr height="">
      <td height="">Telefono</td>
      <td><?php echo $telefono ?></td>
      <td>Regimen</td>
      <td><?php echo $regimen ?></td>
      <td>Tipo Afiliacion</td>
      <td><?php echo $afiliacion ?></td>
    </tr>
    
  </table>
</div>
    <style type="text/css">

        @media print
        {
            #datos_pac{
                font-size: 10px !important;
            }
            /*
            .Estilo2 {font-size: 12px}
            .Estilo4 {
                font-size: 24px;
                color: #CC3300;
            }
            .Estilo5 {font-size: 18px}
            */
        }
    </style>