

<div id="imprimir_formularios_oculto" style="display: none">

    <?php

$tamfont = 10;
?>


   <?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';
?>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
  <?php //Ejemplo curso PHP aprenderaprogramar.com
?>

   <?php

/*
$cita_x = $_REQUEST['id_cita_h'];
ECHO  $sql2 = "Select * from cita where id_cita=".$cita_x;
$result2 = $conexion->EjecutarQuery($sql2);
$row2 = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];*/

$sql2         = "Select * from valoracion_inicial_ where id_valoracion_inicial_=" . $_REQUEST['id_vinicial'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];
/* echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

//$NNNNN=$_REQUEST['motivo_1'];

echo '<tr><td colspan=2>-HISTORIA:-
                ' . $_REQUEST['proceso'] . '-FECHA- ' . $fecha_cita_1 . '
            </td>

    </tr>
    ';
    ?>
  </table>
    <hr width=750>
   <table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
 <?php
if ($motivo_1 != "") {

    echo '<tr><td width="168">- MOTIVO DE CONSULTA-</td>
            <td>
                ' . $motivo_1 . '
            </td>
    </tr>';
}

if ($actual_1 != "") {

    echo '<tr><td width="168">- ENFERMEDAD ACTUAL-</td>
            <td>
                ' . @$actual_1 . '
            </td>
    </tr>';
}
//personales
?>
</table>
<hr width=750>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
  <tr height="">
    <td colspan="2" height="">- ANTECEDENTES PERSONALES-</td>
  </tr>
  <?php

if ($cesarea != "") {
    echo '<tr >
          <td height="" width="168">Quirurgicos</td>
            <td>
                ' . $cesarea . '
            </td>
         </tr>';
}
if ($patologico != "") {
    echo '<tr >
          <td height="" width="168">Patológicos</td>
            <td>
                ' . $patologico . '
            </td>
         </tr>';
}

if ($gine_p != "") {
    echo '<tr >
              <td height="" width="168">Toxicos</td>
                <td>
                    ' . $gine_p . '
                </td>
             </tr>';
}

if ($alergico != "") {
    echo '<tr >
              <td height="" width="168">Alérgicos y Farmacolólogicos</td>
                <td>
                    ' . $alergico . '
                </td>
             </tr>';
}

if ($gine_a != "") {
    // pendiente el or
    echo '<tr >
              <td height="" width="168">Ginecologicos</td>
                <td>
                    ' . $gine_a . '
                </td>
             </tr>';
}
if ($gine_g != "") {
    // pendiente el or
    echo '<tr >
              <td height="" width="168">Traumatologicos</td>
                <td>
                    ' . $gine_g . '
                </td>
             </tr>';
}

if ($otro != "") {
    echo '<tr >
              <td height="14" width="168">Otro</td>
                <td>
                    ' . $otro . '
                </td>
             </tr>';
}

/*
if($gine_g!=""){ // pendientes los de de or p a c
echo '<tr >
<td height="" width="168">Ginecologicos</td>
<td>
G:'.$gine_g.' P:'.$gine_p.' A:'.$gine_a.' C:'.$gine__c.'
</td>
</tr>';
}*/
?>
</table>
<hr width=750>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
  <tr height="">
    <td colspan="2" height="">- ANTECEDENTES FAMILIARES -</td>
  </tr>
  <?php

if ($familiares_1 != "") {
    echo '<tr >              
                <td>
                    ' . $familiares_1 . '
                </td>
             </tr>';
}

if ($vesicula != "") {
    echo '<tr >
              <td height="" width="168">- ESCALA BARTHEL:</td>
                <td>
                    ' . $vesicula . '
                </td>
             </tr>';
}

if ($hernia != "") {
    echo '<tr >
              <td height="" width="168">- ESCALA KARNOFSKY:</td>
                <td>
                    ' . $hernia . '
                </td>
             </tr>';
}

?>

</table>
<hr width=750>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
  <tr height="">
    <td colspan="2" height="">- REVISIÓN POR SISTEMAS-</td>
  </tr>
  <tr>
<?php
if ($cabeza_11 != "") {
    echo '
              <td height="" width="">CABEZA</td>
                <td  width="200px">
                   ' . $cabeza_11 . '
                </td>
             ';
}

if ($orl_11 != "") {
    echo '
              <td height="">ORL</td>
                <td width="200px">
                     ' . $orl_11 . '
                </td>
             ';
}
?>
   </tr>
   <tr>
<?php
if ($torax_11 != "") {
    echo '
              <td height="" width="">TORAX-CARDIO-RESPIRATORIO</td>
                <td>
                     ' . $torax_11 . '
                </td>
             ';
}

if ($abdomen_11 != "") {
    echo '
              <td height="" width="">ABDOMEN</td>
                <td>
                     ' . $abdomen_11 . '
                </td>
            ';
}

?>
   </tr>
   <tr>
<?php
if ($genito_11 != "") {
    echo '
              <td height="" width="">GENITOUNITARIO</td>
                <td>
                     ' . $genito_11 . '
                </td>
             ';
}

if ($osteo_11 != "") {
    echo '
              <td height="" width="">OSTEO-MUSCULAR</td>
                <td>
                     ' . $osteo_11 . '
                </td>
             ';
}
?>
   </tr>
   <tr>
<?php
if ($neuro_11 != "") {
    echo '
              <td height="" width="">NEUROLOGO</td>
                <td>
                     ' . $neuro_11 . '
                </td>
             ';
}

if ($piel_1 != "") {
    echo '
              <td height="" width="">PIEL Y ANEXOS</td>
                <td>
                     ' . $piel_1 . '
                </td>
             ';
}
?>
   </tr>
   <tr>
<?php
if ($idx_1 != "") {
    echo '
              <td height="" width="168">IDX</td>
                <td>
                    ' . $idx_1 . '
                </td>
            ';
}

?>
       </tr>
</table>
<table width="745" border="0" style="border:1px solid #000000; font-size:90%;" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
  <tr height="">
    <td width="" height="" colspan="2" align="left">- EXAMEN FISICO-</td>
  </tr>
<tr>
  <?php

if ($tension != "") {
    echo '
              <td height="" width="">Tension Arterial</td>
                <td align="left">
                    ' . $tension . '
                </td>';
}

if ($f_respiratoria != "") {
    echo '<td height="" width="">F.Respiratoria</td>
                <td>
                    ' . $f_respiratoria . '
                _ por min</td>
             ';
}

if ($pulso != "") {
    echo '
              <td height="" width="">F.Pulso</td>
                <td>
                    ' . $pulso . '
                _por min</td>
             ';
}

if ($talla != "") {
    echo '
              <td height="" width="">Talla</td>
                <td>
                    ' . $talla . '
                _cm</td>
             ';
}

if ($peso_in != "") {
    echo '
              <td height="" width="">Peso</td>
                <td>
                    ' . $peso_in . '
                _KG</td>
             ';
}

if ($temperatura != "") {
    echo '
              <td height="" width="">Temperatura</td>
                <td>
                    ' . $temperatura . '
                _°C</td>
             ';
}
if ($gine__c != "") {
    // pendiente el or
    echo '<tr >
              <td height="" width="10">SPO2</td>
                <td>
                    ' . $gine__c . '
                </td>
             </tr>';
}

?>
   </tr>
<?php
if ($apariencia != "") {
    echo '<tr >
              <td height="" width="">Apariencia</td>
                <td>
                    ' . $apariencia . '
                </td>
             </tr>';
}
?>

</table>
<table width="614" border="0" align="center" style="font-size: <?php echo $tamfont ?>px !important">
  <tr>
    <td>IMG:</td>
    <td><?php echo @$hc_imc; ?></td>
    <td>Cir. Abdominal:</td>
    <td><?php echo @$hc_ciru_abdominal; ?></td>
  </tr>
  <tr>
    <td width="108">Cabeza:</td>
    <td width="168"><?php echo @$hc_fis_1; ?></td>
    <td width="131">Ojos:</td>
    <td width="179"><?php echo @$hc_fis_9; ?></td>
  </tr>
  <tr>
    <td>Oidos:</td>
    <td><?php echo @$hc_fis_2; ?></td>
    <td>Nariz:</td>
    <td><?php echo @$hc_fis_10; ?></td>
  </tr>
  <tr>
    <td>Faringe:</td>
    <td><?php echo @$hc_fis_3; ?></td>
    <td>Cuello:</td>
    <td><?php echo @$hc_fis_11; ?></td>
  </tr>
  <tr>
    <td>Dorso:</td>
    <td><?php echo @$hc_fis_4; ?></td>
    <td>Mamas:</td>
    <td><?php echo @$hc_fis_12; ?></td>
  </tr>
  <tr>
    <td>Cardiaco:</td>
    <td><?php echo @$hc_fis_5; ?></td>
    <td>Pulmonar:</td>
    <td><?php echo @$hc_fis_13; ?></td>
  </tr>
  <tr>
    <td>Abdomen:</td>
    <td><?php echo @$hc_fis_6; ?></td>
    <td>Genitales:</td>
    <td><?php echo @$hc_fis_14; ?></td>
  </tr>
  <tr>
    <td>Extremidades:</td>
    <td><?php echo @$hc_fis_7; ?></td>
    <td>Neurologico:</td>
    <td><?php echo @$hc_fis_15; ?></td>
  </tr>
  <tr>
    <td>Otros:</td>
    <td><?php echo @$hc_fis_8; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php

/*$sqlrx = "Select * from fin_consulta";
$resultrx = $conexion->EjecutarQuery($sqlrx);

while ($rowrx = mysql_fetch_array($resultrx)) {
$nombrexxx = $rowrx['nombre'];
}

$sqlr1 = "Select * from tipo_diagnostico";
$resultr1 = $conexion->EjecutarQuery($sqlr1);*/
?>
<hr width=750>
    <div id="content_notas">

 <table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Consulta:</td>
      
                   <?php
    $sql3  = "Select fin_consulta from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . @$_REQUEST['historia'];
    $result3     = $conexion->EjecutarQuery($sql3);
    $row3         = mysql_fetch_array($result3);
    $fin_consulta = $row3['fin_consulta'];
    echo '     
     <td width="85%">
                    ' . $fin_consulta . ' 
                </td>
             
             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Dianostico:</td>
      
                   <?php
        $sql3  = "Select tipo_diagnostico from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . @$_REQUEST['historia'];
        $result3     = $conexion->EjecutarQuery($sql3);
        $row3         = mysql_fetch_array($result3);
        $tipo_diagnostico = $row3['tipo_diagnostico'];
    echo '     
     <td width="85%"> ' . $tipo_diagnostico . '
                </td>
             
             ';
             ?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Causa Extrema:</td>
      
                   <?php
         $sql3  = "Select causa_externa from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . @$_REQUEST['historia'];
        $result3     = $conexion->EjecutarQuery($sql3);
        $row3         = mysql_fetch_array($result3);
        $causa_externa = $row3['causa_externa'];
    echo '     
     <td width="85%">
       ' . $causa_externa . '
                </td>
             
             ';
?>
</tr>
</table>
 <table width="750" border="0" style="border:1px solid #000000; font-size:90%;"align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

            <?php
            $sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido 
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where id_vinicial=" . $_REQUEST['id_vinicial'] . " and  vi.historia='" . @$_REQUEST['historia'] . "'";           

$resultados      = $conexion->EjecutarQuery($sql);
$total_registros = mysql_num_rows($resultados);
$sql_search      = $sql . " ORDER BY vi.fecha DESC ";
$resultados      = $conexion->EjecutarQuery($sql_search);
//   $total_paginas = ceil($total_registros / $registros);

echo "<tbody><tr class='t_head'>
                        <th valign='left' width='50px'>Cita</th>

                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='center' width='70px'>Fecha</th>
                        <th valign='center'>Diagnostico</th>
                        <th valign='center'>Observacion</th>
                      </tr></tbody>";
$contador = 0;
if ($total_registros) {
    $bool_style = true;
    while ($row_f = mysql_fetch_array($resultados)) {

        if ($bool_style) {
            $style_file_table = "row1";
        } else {
            $style_file_table = "row2";
        }
        $bool_style = !$bool_style;

        $diagnostico = '';
        if ($row_f['diagnostico_principal'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_principal'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx1'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx1'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx2'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx2'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx3'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx3'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }

        echo "<tr class='$style_file_table'>";

        $sesion = $row_f['id_cita'];
        if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
            $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
        }

        echo "<td align='left'>" . $sesion . "</td>";

        echo "<td align='center'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";
        echo "<td align='center'>" . $row_f['fecha'] . "</td>";
        echo "<td align='left'>" . $diagnostico . "</td>";
        echo "<td align='left'>" . $row_f['valoracion_inicial'] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<font color='darkgray'>(sin resultados)</font>";
}

?>          
  </table>
 
  
 </div>
</div>

  <style type="text/css">

        @media print
        {
            #imprimir_formularios_oculto{
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