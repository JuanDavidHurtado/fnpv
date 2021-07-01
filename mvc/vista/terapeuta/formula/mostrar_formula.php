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
        $edad = Utils::edad($fecha_n);

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
    <table style="font-size: <?php echo $tamfont ?>px !important" width="620" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
        <tr >
            <td width="156" rowspan="7" align="center" valign="middle" ><?php echo "<img src='" . Utils::$http_ruta . "mvc/vista/imagenes/logo2.png' width='100px' />"; ?></td>
            <td width="375"><div align="center">UNIDAD CARDIOLÓGICA DEL CAUCA</div></td>
            <td rowspan="8" width="156"><div align="center"><span class="Estilo5">Formula Medica N&deg; </span><br />
                    <span class="Estilo4">CIT-<?php echo $id_cita ?> </span></div></td>
        </tr>
        <tr>
          <td><div align="center">ÚNICA SAS</div></td>
        </tr>
        <tr>
          <td><div align="center">NIT:900800225-8</div></td>
        </tr>
        <tr >
          <td><div align="center">Regimen Com&uacute;n</div></td>
        </tr>
        <tr >
          <td><div align="center">Carrera 11# 13N-51  Popay&aacute;n(Cauca)</div></td>
        </tr>
        <tr>
          <td><div align="center">Tel. 092-8201225-3186197223</div></td>
        </tr>
        <tr >
          <td><div align="center"><a href="mailto:administracion@siempree.com">vipatri@gmail.com</a></div></td>
        </tr>
        <tr >
            <td colspan="2" >&nbsp;</td>
        </tr>
    </table>
  <table width="620" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">

    <tr height="19">
      <td height="19" width="116">Fecha:</td>
      <td width="69"><?php echo $fecha_cita ?></td>
      <td width="109">Identificacion</td>
      <td width="178"><?php echo $id_p ?></td>
      <td>Edad</td>
      <td width="108"><?php echo $edad ?></td>
    </tr>
    
    <tr height="19">
      <td height="19">Paciente</td>
      <td colspan="3"><?php echo $nombre_pac ?></td>
      <td width="131">Genero</td>
      <td><?php echo $genero ?></td>
    </tr>
    <tr height="19">
      <td height="19">Telefono</td>
      <td><?php echo $telefono ?></td>
      <td>Regimen</td>
      <td><?php echo $regimen ?></td>
      <td>Tipo Afiliacion</td>
      <td><?php echo $afiliacion ?></td>
    </tr>
  </table>
  <table border="0" class="data" align="center" width="620" cellpadding="0" cellspacing="0">
    <col width="83" />
    <col width="252" />
    <col width="92" />
    <col width="141" />
    <col width="156" />
    <col width="92" />
    <tr height="19">
      <td height="19" width="85">N°</td>
      <td width="357">Medicamentos/Insumos</td>
      <td width="121">N° dias</td>
      <td width="89">Cant </td>
    </tr>
 <?php

 $contador=1;
        $sql_fac = "Select * from fr_medicamentos where id_vinicial=$id_in";
        $result_fac = $conexion->EjecutarQuery($sql_fac);
        while ($row_fac = mysql_fetch_array($result_fac)) {

                    if ($row_fac['medicamento_1'] !== "")
                        $tabla_cups .='<tr height="19"><td>1</td><td>' . $row_fac['medicamento_1'] . '</td> <td>' . $row_fac['horaad_1'] . '</td> <td>' . $row_fac['fecham_1'] . '</td>  </tr>';

                    if ($row_fac['medicamento_2'] !== "")
                        $tabla_cups .='<tr height="19"><td>2</td><td>' . $row_fac['medicamento_2'] . '</td> <td>' . $row_fac['horaad_2'] . '</td> <td>' . $row_fac['fecham_2'] . '</td>  </tr>';

                    if ($row_fac['medicamento_3'] !== "")
                        $tabla_cups .='<tr height="19"><td>3</td><td>' . $row_fac['medicamento_3'] . '</td> <td>' . $row_fac['horaad_3'] . '</td> <td>' . $row_fac['fecham_3'] . '</td>  </tr>';

                    if ($row_fac['medicamento_4'] !== "")
                        $tabla_cups .='<tr height="19"><td>4</td><td>' . $row_fac['medicamento_4'] . '</td> <td>' . $row_fac['horaad_4'] . '</td> <td>' . $row_fac['fecham_4'] . '</td>  </tr>';

                    if ($row_fac['medicamento_5'] !== "")
                        $tabla_cups .='<tr height="19"><td>5</td><td>' . $row_fac['medicamento_5'] . '</td> <td>' . $row_fac['horaad_5'] . '</td> <td>' . $row_fac['fecham_5'] . '</td>  </tr>';

                    if ($row_fac['medicamento_6'] !== "")
                        $tabla_cups .='<tr height="19"><td>6</td><td>' . $row_fac['medicamento_6'] . '</td> <td>' . $row_fac['horaad_6'] . '</td> <td>' . $row_fac['fecham_6'] . '</td>  </tr>';

                    if ($row_fac['medicamento_7'] !== "")
                        $tabla_cups .='<tr height="19"><td>7</td><td>' . $row_fac['medicamento_7'] . '</td> <td>' . $row_fac['horaad_7'] . '</td> <td>' . $row_fac['fecham_7'] . '</td>  </tr>';

                    if ($row_fac['medicamento_8'] !== "")
                        $tabla_cups .='<tr height="19"><td>8</td><td>' . $row_fac['medicamento_8'] . '</td> <td>' . $row_fac['horaad_8'] . '</td> <td>' . $row_fac['fecham_8'] . '</td>  </tr>';

                    if ($row_fac['medicamento_9'] !== "")
                        $tabla_cups .='<tr height="19"><td>9</td><td>' . $row_fac['medicamento_9'] . '</td> <td>' . $row_fac['horaad_9'] . '</td> <td>' . $row_fac['fecham_9'] . '</td>  </tr>';

                    if ($row_fac['medicamento_10'] !== "")
                        $tabla_cups .='<tr height="19"><td>10</td><td>' . $row_fac['medicamento_10'] . '</td> <td>' . $row_fac['horaad_10'] . '</td> <td>' . $row_fac['fecham_10'] . '</td>  </tr>';


        }

echo $tabla_cups;

 ?>
    
    <tr height="19">
      <td colspan="4" height="19">Impreso  por: <?php echo $nombre_usuario; ?></td>
    </tr>
    <tr height="19">
      <td colspan="4" height="19"><div align="center">Favor presentar esta fórmula en su próxima consulta</div></td>
    </tr>
  </table>
<br/>
       

   <?php
       // $id_usuario = $id_usuario_p;
        $sql6 = "Select * from usuario where id_usuario=".$id_usuario_p;
        $resultf6 = $conexion->EjecutarQuery($sql6);
        $rowf6 = mysql_fetch_array($resultf6);
        $firma = 'avatar_anonimo.png';
        if ($rowf6['firma'] != '') {
            $firma = $rowf6['firma'];
        }

       // echo $firma."aaa";
        $nombre_usuario_p = $rowf6['nombre']." ".$rowf6['apellido'];

       // echo "Profesional que lo atendio: ".$nombre_usuario_p;


        $glo= $GLOBALS['raiz'];

       echo '<center><img  id="file_firma" src="'.$glo.'/mvc/files/users/firmas/'.$firma.'" width="200" height="50"></center>';
  ?>


 
</div>

<br/>
<br/>
<a href='#' onClick='imprSelec2("imprimir_factura")' >Imprimir</a>
