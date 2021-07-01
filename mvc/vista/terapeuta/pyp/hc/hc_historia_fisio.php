<?php

if (isset($_REQUEST['guardar_hc_historia_fisio']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_fisio'] == 'new') {

        $sql = "INSERT INTO hc_historia_fisio (
`id_fisio`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fisio_1`,
`fisio_2`,
`fisio_3`,
`fisio_4`,
`fisio_5`,
`fisio_6`,
`fisio_7`,
`fisio_8`,
`fisio_9`,
`fisio_18`,
`fisio_19`,
`fisio_20`,
`fisio_21`,
`fisio_22`,
`fisio_23`,
`fisio_24`,
`fisio_25`,
`fisio_26`,
`fisio_27`,
`fisio_28`,
`fisio_29`,
`fisio_30`,
`fisio_31`,
`fisio_32`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['fisio_1'] . "' ,
'" . $_REQUEST['fisio_2'] . "' ,
'" . $_REQUEST['fisio_3'] . "' ,
'" . $_REQUEST['fisio_4'] . "' ,
'" . $_REQUEST['fisio_5'] . "' ,
'" . $_REQUEST['fisio_6'] . "' ,
'" . $_REQUEST['fisio_7'] . "' ,
'" . $_REQUEST['fisio_8'] . "' ,
'" . $_REQUEST['fisio_9'] . "' ,
'" . $_REQUEST['fisio_18'] . "' ,
'" . $_REQUEST['fisio_19'] . "' ,
'" . $_REQUEST['fisio_20'] . "' ,
'" . $_REQUEST['fisio_21'] . "' ,
'" . $_REQUEST['fisio_22'] . "' ,
'" . $_REQUEST['fisio_23'] . "' ,
'" . $_REQUEST['fisio_24'] . "' ,
'" . $_REQUEST['fisio_25'] . "' ,
'" . $_REQUEST['fisio_26'] . "' ,
'" . $_REQUEST['fisio_27'] . "' ,
'" . $_REQUEST['fisio_28'] . "' ,
'" . $_REQUEST['fisio_29'] . "' ,
'" . $_REQUEST['fisio_30'] . "' ,
'" . $_REQUEST['fisio_31'] . "' ,
'" . $_REQUEST['fisio_32'] . "'

) ";

//echo $sql;
        ?>

<script>

$(function(){
$("#tabs").tabs({selected: parseInt(1)});
});

</script>
<?php

    } else if ($_REQUEST['id_fisio'] != '') {

        $sql = "UPDATE hc_historia_fisio set
`id_usuario`       = '" . $_REQUEST['id_usuario'] . "' ,
`id_historia`      = '" . $_REQUEST['historia'] . "' ,
`id_proceso`       = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial`      = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion`  =  '" . $_REQUEST['id_revaloracion'] . "' ,
`fisio_1`          =  '" . $_REQUEST['fisio_1'] . "' ,
`fisio_2`          =  '" . $_REQUEST['fisio_2'] . "' ,
`fisio_3`          =  '" . $_REQUEST['fisio_3'] . "' ,
`fisio_4`          =  '" . $_REQUEST['fisio_4'] . "' ,
`fisio_5`          =  '" . $_REQUEST['fisio_5'] . "' ,
`fisio_6`          =  '" . $_REQUEST['fisio_6'] . "' ,
`fisio_7`          =  '" . $_REQUEST['fisio_7'] . "' ,
`fisio_8`          =  '" . $_REQUEST['fisio_8'] . "' ,
`fisio_9`          =  '" . $_REQUEST['fisio_9'] . "' ,
`fisio_18`          =  '" . $_REQUEST['fisio_18'] . "' ,
`fisio_19`          =  '" . $_REQUEST['fisio_19'] . "' ,
`fisio_20`          =  '" . $_REQUEST['fisio_20'] . "' ,
`fisio_21`          =  '" . $_REQUEST['fisio_21'] . "' ,
`fisio_22`          =  '" . $_REQUEST['fisio_22'] . "' ,
`fisio_23`          =  '" . $_REQUEST['fisio_23'] . "' ,
`fisio_24`          =  '" . $_REQUEST['fisio_24'] . "' ,
`fisio_25`          =  '" . $_REQUEST['fisio_25'] . "' ,
`fisio_26`          =  '" . $_REQUEST['fisio_26'] . "' ,
`fisio_27`          =  '" . $_REQUEST['fisio_27'] . "' ,
`fisio_28`          =  '" . $_REQUEST['fisio_28'] . "' ,
`fisio_29`          =  '" . $_REQUEST['fisio_29'] . "' ,
`fisio_30`          =  '" . $_REQUEST['fisio_30'] . "' ,
`fisio_31`          =  '" . $_REQUEST['fisio_31'] . "' ,
`fisio_32`          =  '" . $_REQUEST['fisio_32'] . "' WHERE `id_fisio` = '" . $_REQUEST['id_fisio'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}

$id_fisio = 'new';
$sql      = "SELECT * from hc_historia_fisio WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result   = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_fisio        = $row['id_fisio'];
    $id_usuario      = $row['id_usuario'];
    $id_historia     = $row['id_historia'];
    $id_proceso      = $row['id_proceso'];
    $id_vinicial     = $row['id_vinicial'];
    $id_revaloracion = $row['id_revaloracion'];
    $fisio_1         = $row['fisio_1'];
    $fisio_2         = $row['fisio_2'];
    $fisio_3         = $row['fisio_3'];
    if ($fisio_3 == "") {$fisio_3 = "NO REFIERE";}
    $fisio_4 = $row['fisio_4'];
    if ($fisio_4 == "") {$fisio_4 = "NO REFIERE";}
    $fisio_5 = $row['fisio_5'];
    if ($fisio_5 == "") {$fisio_5 = "NO REFIERE";}
    $fisio_6 = $row['fisio_6'];
    if ($fisio_6 == "") {$fisio_6 = "NO REFIERE";}
    $fisio_7 = $row['fisio_7'];
    if ($fisio_7 == "") {$fisio_7 = "NO REFIERE";}
    $fisio_8 = $row['fisio_8'];
    if ($fisio_8 == "") {$fisio_8 = "NO REFIERE";}
    $fisio_9 = $row['fisio_9'];
    if ($fisio_9 == "") {$fisio_9 = "NO REFIERE";}
    $fisio_18 = $row['fisio_18'];
    if ($fisio_18 == "") {$fisio_18 = "NORMAL";}
    $fisio_19 = $row['fisio_19'];
    if ($fisio_19 == "") {$fisio_19 = "NORMAL";}
    $fisio_20 = $row['fisio_20'];
    if ($fisio_20 == "") {$fisio_20 = "NORMAL";}
    $fisio_21 = $row['fisio_21'];
    if ($fisio_21 == "") {$fisio_21 = "NORMAL";}
    $fisio_22 = $row['fisio_22'];
    if ($fisio_22 == "") {$fisio_22 = "NORMAL";}
    $fisio_23 = $row['fisio_23'];
    if ($fisio_23 == "") {$fisio_23 = "NORMAL";}
    $fisio_24 = $row['fisio_24'];
    if ($fisio_24 == "") {$fisio_24 = "NORMAL";}
    $fisio_25 = $row['fisio_25'];
    if ($fisio_25 == "") {$fisio_25 = "NORMAL";}
    $fisio_26 = $row['fisio_26'];
    if ($fisio_26 == "") {$fisio_26 = "NORMAL";}
    $fisio_27 = $row['fisio_27'];
    if ($fisio_27 == "") {$fisio_27 = "NORMAL";}
    $fisio_28 = $row['fisio_28'];
    if ($fisio_28 == "") {$fisio_28 = "NORMAL";}
    $fisio_29 = $row['fisio_29'];
    if ($fisio_29 == "") {$fisio_29 = "NORMAL";}
    $fisio_30 = $row['fisio_30'];
    if ($fisio_30 == "") {$fisio_30 = "NORMAL";}
    $fisio_31 = $row['fisio_31'];
    if ($fisio_31 == "") {$fisio_31 = "NORMAL";}
    $fisio_32 = $row['fisio_32'];
    if ($fisio_32 == "") {$fisio_32 = "NORMAL";}

    break;}

$sql1    = "SELECT * FROM hc_historia_fisio ORDER BY id_fisio DESC LIMIT 1";
$result1 = $conexion->EjecutarQuery($sql1);
while ($row1 = mysql_fetch_array($result1)) {
    $fisio_3 = $row['fisio_3'];
    if ($fisio_3 == "") {$fisio_3 = "NO REFIERE";}
    $fisio_4 = $row['fisio_4'];
    if ($fisio_4 == "") {$fisio_4 = "NO REFIERE";}
    $fisio_5 = $row['fisio_5'];
    if ($fisio_5 == "") {$fisio_5 = "NO REFIERE";}
    $fisio_6 = $row['fisio_6'];
    if ($fisio_6 == "") {$fisio_6 = "NO REFIERE";}
    $fisio_7 = $row['fisio_7'];
    if ($fisio_7 == "") {$fisio_7 = "NO REFIERE";}
    $fisio_8 = $row['fisio_8'];
    if ($fisio_8 == "") {$fisio_8 = "NO REFIERE";}
    $fisio_9 = $row['fisio_9'];
    if ($fisio_9 == "") {$fisio_9 = "NO REFIERE";}
    break;
}

//fecha cita
$sql2         = "Select * from cita where id_cita=" . $_REQUEST['id_cita'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];

?>


<script>

function cargar_anterior(){

var recargar=1


   // window.location.reload();

   //   window.location.href = window.location.href + "&w1=123";

      var URLactual = window.location;
//    alert(URLactual);


URLactual=URLactual+"&w1=1";

//alert(URLactual);

    window.location=URLactual+"&w1=1";


}

</script>
    <script type="text/javascript">

        function imprSelec34(nombre)
        {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'ventana1', 'popimpr');

            var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
            content += '<title>http://190.146.87.72/fvnpv </title>';
            content += ficha.innerHTML;

            ventimp.document.write(content);
            ventimp.document.close();
            ventimp.print( );
           // history.back();
        }
</script>
<style type="text/css">
<!--
.Estilo2 {
  color: #FFFFFF;
  font-weight: bold;
}
-->
</style>

<fieldset id="hc_historia_fisio">
<legend align="left"> <div class="arrow-c" id="close-hc_historia_fisio"></div> <div class="arrow-o" id="open-hc_historia_fisio" ></div> <font>Valoracion Fisio</font></legend>
<div id="content-hc_historia_fisio">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_historia_fisio" id="guardar_hc_historia_fisio" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}

//echo $ultimo."dddd";

?>
<form id="form_hc_historia_fisio" name="form_hc_historia_fisio" action="<?php echo @$action_form_hc_historia_fisio ?>" method="post" onsubmit="return validar()";>


<input type="hidden" id="id_fisio" name="id_fisio" value="<?php echo @$id_fisio ?>" />
<input type="hidden" id="id_cita_h" name="id_cita_h" value="<?php echo $fecha_cita_1 ?>" />

<br>
<input type="hidden" class="input_txt valid" id="id_fisio" name="id_fisio" value="<?php echo @$id_fisio; ?>" />
<input type="hidden" name="botno cargar" onclick="cargar_anterior()" value="Cargar Valoracion Anterior">

<br>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr height="">
    <td width="" height=""><div align="left">MOTIVO  DE CONSULTA</div></td>
    <td width="" height=""><textarea name="fisio_1" cols="60" rows="1"  id="fisio_1"><?php echo @$fisio_1; ?></textarea></td>
  </tr>
  <tr height="">
    <td height=""><div align="left">ENFERMEDAD ACTUAL</div></td>
    <td height=""><textarea name="fisio_2" cols="60" rows="1" id="fisio_2"><?php echo @$fisio_2; ?></textarea></td>
  </tr>
</table>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
     ANTECEDENTES    PERSONALES<BR><BR>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Quirurgicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="fisio_3" name="fisio_3" value="<?php echo $fisio_3; ?>" /> </td>
    <td width="183">Patológicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="fisio_4" name="fisio_4" value="<?php echo @$fisio_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Toxicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="fisio_5" name="fisio_5" value="<?php echo @$fisio_5; ?>" /></td>
    <td width="183">Alérgicos    y Farmacolólogicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="fisio_6" name="fisio_6" value="<?php echo @$fisio_6; ?>" /></td>
  </tr>

  <tr height="19">
    <td height="19" width="168">Traumatologicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="fisio_7" name="fisio_7" value="<?php echo @$fisio_7; ?>" /></td>
    <td width="183">Ginecologicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="fisio_8" name="fisio_8" value="<?php echo @$fisio_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Otro</td>
    <td width="168"><input type="text" class="input_txt valid" id="fisio_9" name="fisio_9" value="<?php echo @$fisio_9; ?>" /></td>
    <td width="183">&nbsp;</td>
    <td width="216">&nbsp;</td>
  </tr>
</table>
<br>
</p>

<br>
<table width="747" border="0" align="center" cellpadding="0" cellspacing="0"  class="">

  <tr height="">
    <td colspan="7" height=""><div align="center">EXAMEN FISICO</div><BR></td>
  </tr>
  <tr>
    <td width="108">Cabeza</td>
    <td width="168"><input type="text" class="input_txt valid" id="fisio_18" name="fisio_18" value="<?php echo @$fisio_18; ?>" /></td>
    <td width="131">Ojos</td>
    <td width="179"><input type="text" class="input_txt valid" id="fisio_19" name="fisio_19" value="<?php echo @$fisio_19; ?>" /></td>
  </tr>
  <tr>
    <td>Oidos</td>
    <td><input type="text" class="input_txt valid" id="fisio_20" name="fisio_20" value="<?php echo @$fisio_20; ?>" /></td>
    <td>Nariz</td>
    <td><input type="text" class="input_txt valid" id="fisio_21" name="fisio_21" value="<?php echo @$fisio_21; ?>" /></td>
  </tr>
  <tr>
    <td>Faringe</td>
    <td><input type="text" class="input_txt valid" id="fisio_22" name="fisio_22" value="<?php echo @$fisio_22; ?>" /></td>
    <td>Cuello</td>
    <td><input type="text" class="input_txt valid" id="fisio_23" name="fisio_23" value="<?php echo @$fisio_23; ?>" /></td>
  </tr>
  <tr>
    <td>Dorso</td>
    <td><input type="text" class="input_txt valid" id="fisio_24" name="fisio_24" value="<?php echo @$fisio_24; ?>" /></td>
    <td>Mamas</td>
    <td><input type="text" class="input_txt valid" id="fisio_25" name="fisio_25" value="<?php echo @$fisio_25; ?>" /></td>
  </tr>
  <tr>
    <td>Cardiaco</td>
    <td><input type="text" class="input_txt valid" id="fisio_26" name="fisio_26" value="<?php echo @$fisio_26; ?>" /></td>
    <td>Pulmonar</td>
    <td><input type="text" class="input_txt valid" id="fisio_27" name="fisio_27" value="<?php echo @$fisio_27; ?>" /></td>
  </tr>
  <tr>
    <td>Abdomen</td>
    <td><input type="text" class="input_txt valid" id="fisio_28" name="fisio_28" value="<?php echo @$fisio_28; ?>" /></td>
    <td>Genitales</td>
    <td><input type="text" class="input_txt valid" id="fisio_29" name="fisio_29" value="<?php echo @$fisio_29; ?>" /></td>
  </tr>
  <tr>
    <td>Extremidades</td>
    <td><input type="text" class="input_txt valid" id="fisio_30" name="fisio_30" value="<?php echo @$fisio_30; ?>" /></td>
    <td>Neurologico</td>
    <td><input type="text" class="input_txt valid" id="fisio_31" name="fisio_31" value="<?php echo @$fisio_31; ?>" /></td>
  </tr>
  <tr>
    <td>Otros</td>
    <td><input type="text" class="input_txt valid" id="fisio_32" name="fisio_32" value="<?php echo @$fisio_32; ?>" /></td>

  </tr>
</table>
<p><br>
</p>
<p>&nbsp;</p>

<?php

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

?>
<?php echo @$button;

?>
    <?php

$id_usuario_o = $_REQUEST['id_usuario'];
$sqlo         = "Select  id_rol from usuario where id_usuario='{$id_usuario_o}'";
$resulto      = $conexion->EjecutarQuery($sqlo);
$rowfo        = mysql_fetch_array($resulto);

$rol_usuario = $rowfo['id_rol'];

if ($rol_usuario == 2) {
    ?>
               <a href='#' onclick='imprSelec34("imprimir_formularios_oculto", true)' class="">Imprimir</a>
            <?php
}

?>

</form><br>
</div>
</fieldset>
<div id="imprimir_formularios_oculto" style="display: none">

    <?php

$tamfont = 10;
?>


   <?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';

?>

<br>



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
    </tr>';
?>
</table>
<hr width=750>
<br>
 <table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

  <?php

if ($fisio_1 != "") {

    echo '<tr><td width="168">- MOTIVO DE CONSULTA-</td>
            <td>
                ' . $fisio_1 . '
            </td>
    </tr>';
}
if ($fisio_1 != "") {

    echo '<tr><td width="168">- ENFERMEDAD ACTUAL -</td>
            <td>
                ' . $fisio_1 . '
            </td>
    </tr>';
}

?>
</table>
<hr width=750>
<br>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
  <tr height="">
    <td colspan="2" height="">- ANTECEDENTES PERSONALES -</td>
  </tr>
  <tr>
<?php
if ($fisio_3 != "") {
    echo '
              <td height="" width="">Quirurgicos</td>
                <td  width="200px">
                   ' . $fisio_3 . '
                </td>
             ';
}

if ($fisio_4 != "") {
    echo '
              <td height="">Patológicos</td>
                <td width="200px">
                     ' . $fisio_4 . '
                </td>
             ';
}
?>
   </tr>
   <tr>
<?php
if ($fisio_5 != "") {
    echo '
              <td height="" width="">Toxicos</td>
                <td>
                     ' . $fisio_5 . '
                </td>
             ';
}

if ($fisio_6 != "") {
    echo '
              <td height="" width="">Alérgicos y Farmacolólogicos  </td>
                <td>
                     ' . $fisio_6 . '
                </td>
            ';
}

?>
   </tr>
   <tr>
<?php
if ($fisio_7 != "") {
    echo '
              <td height="" width="">Traumatologicos</td>
                <td>
                     ' . $fisio_7 . '
                </td>
             ';
}

if ($fisio_8 != "") {
    echo '
              <td height="" width="">Ginecologicos</td>
                <td>
                     ' . $fisio_8 . '
                </td>
             ';
}
?>
   </tr>
   <tr>
<?php
if ($fisio_9 != "") {
    echo '
              <td height="" width="">Otro</td>
                <td>
                     ' . $fisio_9 . '
                </td>
             ';
}

?>
   </tr>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

  <tr height="">
    <td width="" height="" colspan="2" align="left">- EXAMEN FISICO-</td>
  </tr>
  <tr>
    <td width="108">Cabeza:</td>
    <td width="168"><?php echo @$fisio_18; ?></td>
    <td width="131">Ojos:</td>
    <td width="179"><?php echo @$fisio_19; ?></td>
  </tr>
  <tr>
    <td>Oidos:</td>
    <td><?php echo @$fisio_20; ?></td>
    <td>Nariz:</td>
    <td><?php echo @$fisio_21; ?></td>
  </tr>
  <tr>
    <td>Faringe:</td>
    <td><?php echo @$fisio_22; ?></td>
    <td>Cuello:</td>
    <td><?php echo @$fisio_23; ?></td>
  </tr>
  <tr>
    <td>Dorso:</td>
    <td><?php echo @$fisio_24; ?></td>
    <td>Mamas:</td>
    <td><?php echo @$fisio_25; ?></td>
  </tr>
  <tr>
    <td>Cardiaco:</td>
    <td><?php echo @$fisio_26; ?></td>
    <td>Pulmonar:</td>
    <td><?php echo @$fisio_27; ?></td>
  </tr>
  <tr>
    <td>Abdomen:</td>
    <td><?php echo @$fisio_28; ?></td>
    <td>Genitales:</td>
    <td><?php echo @$fisio_29; ?></td>
  </tr>
  <tr>
    <td>Extremidades:</td>
    <td><?php echo @$fisio_30; ?></td>
    <td>Neurologico:</td>
    <td><?php echo @$fisio_31; ?></td>
  </tr>
  <tr>
    <td>Otros:</td>
    <td><?php echo @$fisio_32; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>


<br>


<?php

/*$sqlrx = "Select * from fin_consulta";
$resultrx = $conexion->EjecutarQuery($sqlrx);

while ($rowrx = mysql_fetch_array($resultrx)) {
$nombrexxx = $rowrx['nombre'];
}

$sqlr1 = "Select * from tipo_diagnostico";
$resultr1 = $conexion->EjecutarQuery($sqlr1);*/
?>


    <div id="content_notas">
    <hr width=750>
 <table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Consulta:</td>

                   <?php
$sql4f         = "Select fin_consulta from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f      = $conexion->EjecutarQuery($sql4f);
$row4f         = mysql_fetch_array($result4f);
$tipo_consulta = $row4f['fin_consulta'];
echo '
     <td width="85%">
                    ' . $tipo_consulta . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Dianostico:</td>

                   <?php
$sql4f             = "Select tipo_diagnostico from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f          = $conexion->EjecutarQuery($sql4f);
$row4f             = mysql_fetch_array($result4f);
$tipo_diagnostico1 = $row4f['tipo_diagnostico'];
echo '
     <td width="85%"> ' . $tipo_diagnostico1 . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Causa Extrema:</td>

                   <?php
$sql4f          = "Select causa_externa from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f       = $conexion->EjecutarQuery($sql4f);
$row4f          = mysql_fetch_array($result4f);
$causa_externa1 = $row4f['causa_externa'];
echo '
     <td width="85%">
       ' . $causa_externa1 . '
                </td>

             ';
?>
</tr>
</table>
<br>
<br>
<table width="745" border="0" style="border:1px solid #000000; font-size:90%;" align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

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
