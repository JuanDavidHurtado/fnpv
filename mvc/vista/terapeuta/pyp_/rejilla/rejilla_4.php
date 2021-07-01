Database
Tabla    Aceptar
<?php
if (isset($_REQUEST['guardar_hc_rejilla_4']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_rejilla_4'] == 'new') {

$sql = "INSERT INTO hc_rejilla_4 (
`id_hc_rejilla_4`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`homorra_s`,
`homorra_n`,
`dolor_esto_s`,
`dolor_esto_n`,
`hicha_manos_s`,
`hicha_manos_n`,
`dolor_x_s`,
`dolor_x_n`,
`mov_bebe_s`,
`mov_bebe_n`,
`hemorra_2_s`,
`hemorra_2_n`,
`salida_s`,
`salida_n`,
`fiebrex_s`,
`fiebrex_n`,
`respira_s`,
`respira_n`,
`pesobajo_s`,
`pesobajo_n`,
`amarillo_s`,
`amarillo_n`,
`mamar_s`,
`mamar_n`,
`vomitatodo_s`,
`vomitatodo_n`,
`dificultada_s`,
`dificultada_n`,
`supura_s`,
`supura_n`,
`tempe_baja_s`,
`tempe_baja_n`,
`diarrea_xs2`,
`diarrea_xn2`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['homorra_s']."' ,
'".$_REQUEST['homorra_n']."' ,
'".$_REQUEST['dolor_esto_s']."' ,
'".$_REQUEST['dolor_esto_n']."' ,
'".$_REQUEST['hicha_manos_s']."' ,
'".$_REQUEST['hicha_manos_n']."' ,
'".$_REQUEST['dolor_x_s']."' ,
'".$_REQUEST['dolor_x_n']."' ,
'".$_REQUEST['mov_bebe_s']."' ,
'".$_REQUEST['mov_bebe_n']."' ,
'".$_REQUEST['hemorra_2_s']."' ,
'".$_REQUEST['hemorra_2_n']."' ,
'".$_REQUEST['salida_s']."' ,
'".$_REQUEST['salida_n']."' ,
'".$_REQUEST['fiebrex_s']."' ,
'".$_REQUEST['fiebrex_n']."' ,
'".$_REQUEST['respira_s']."' ,
'".$_REQUEST['respira_n']."' ,
'".$_REQUEST['pesobajo_s']."' ,
'".$_REQUEST['pesobajo_n']."' ,
'".$_REQUEST['amarillo_s']."' ,
'".$_REQUEST['amarillo_n']."' ,
'".$_REQUEST['mamar_s']."' ,
'".$_REQUEST['mamar_n']."' ,
'".$_REQUEST['vomitatodo_s']."' ,
'".$_REQUEST['vomitatodo_n']."' ,
'".$_REQUEST['dificultada_s']."' ,
'".$_REQUEST['dificultada_n']."' ,
'".$_REQUEST['supura_s']."' ,
'".$_REQUEST['supura_n']."' ,
'".$_REQUEST['tempe_baja_s']."' ,
'".$_REQUEST['tempe_baja_n']."' ,
'".$_REQUEST['diarrea_xs2']."' ,
'".$_REQUEST['diarrea_xn2']."'
) ";


} else if ($_REQUEST['id_hc_rejilla_4'] != '') {

$sql = "UPDATE hc_rejilla_4 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`homorra_s` = '".$_REQUEST['homorra_s']."' ,
`homorra_n` = '".$_REQUEST['homorra_n']."' ,
`dolor_esto_s` = '".$_REQUEST['dolor_esto_s']."' ,
`dolor_esto_n` = '".$_REQUEST['dolor_esto_n']."' ,
`hicha_manos_s` = '".$_REQUEST['hicha_manos_s']."' ,
`hicha_manos_n` = '".$_REQUEST['hicha_manos_n']."' ,
`dolor_x_s` = '".$_REQUEST['dolor_x_s']."' ,
`dolor_x_n` = '".$_REQUEST['dolor_x_n']."' ,
`mov_bebe_s` = '".$_REQUEST['mov_bebe_s']."' ,
`mov_bebe_n` = '".$_REQUEST['mov_bebe_n']."' ,
`hemorra_2_s` = '".$_REQUEST['hemorra_2_s']."' ,
`hemorra_2_n` = '".$_REQUEST['hemorra_2_n']."' ,
`salida_s` = '".$_REQUEST['salida_s']."' ,
`salida_n` = '".$_REQUEST['salida_n']."' ,
`fiebrex_s` = '".$_REQUEST['fiebrex_s']."' ,
`fiebrex_n` = '".$_REQUEST['fiebrex_n']."' ,
`respira_s` = '".$_REQUEST['respira_s']."' ,
`respira_n` = '".$_REQUEST['respira_n']."' ,
`pesobajo_s` = '".$_REQUEST['pesobajo_s']."' ,
`pesobajo_n` = '".$_REQUEST['pesobajo_n']."' ,
`amarillo_s` = '".$_REQUEST['amarillo_s']."' ,
`amarillo_n` = '".$_REQUEST['amarillo_n']."' ,
`mamar_s` = '".$_REQUEST['mamar_s']."' ,
`mamar_n` = '".$_REQUEST['mamar_n']."' ,
`vomitatodo_s` = '".$_REQUEST['vomitatodo_s']."' ,
`vomitatodo_n` = '".$_REQUEST['vomitatodo_n']."' ,
`dificultada_s` = '".$_REQUEST['dificultada_s']."' ,
`dificultada_n` = '".$_REQUEST['dificultada_n']."' ,
`supura_s` = '".$_REQUEST['supura_s']."' ,
`supura_n` = '".$_REQUEST['supura_n']."' ,
`tempe_baja_s` = '".$_REQUEST['tempe_baja_s']."' ,
`tempe_baja_n` = '".$_REQUEST['tempe_baja_n']."' ,
`diarrea_xs2` = '".$_REQUEST['diarrea_xs2']."' ,
`diarrea_xn2` = '".$_REQUEST['diarrea_xn2']."' WHERE `id_hc_rejilla_4` = '".$_REQUEST['id_hc_rejilla_4']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_rejilla_4 = 'new';
$sql = "SELECT * from hc_rejilla_4 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_rejilla_4 = $row['id_hc_rejilla_4'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$homorra_s = $row['homorra_s'];
$homorra_n = $row['homorra_n'];
$dolor_esto_s = $row['dolor_esto_s'];
$dolor_esto_n = $row['dolor_esto_n'];
$hicha_manos_s = $row['hicha_manos_s'];
$hicha_manos_n = $row['hicha_manos_n'];
$dolor_x_s = $row['dolor_x_s'];
$dolor_x_n = $row['dolor_x_n'];
$mov_bebe_s = $row['mov_bebe_s'];
$mov_bebe_n = $row['mov_bebe_n'];
$hemorra_2_s = $row['hemorra_2_s'];
$hemorra_2_n = $row['hemorra_2_n'];
$salida_s = $row['salida_s'];
$salida_n = $row['salida_n'];
$fiebrex_s = $row['fiebrex_s'];
$fiebrex_n = $row['fiebrex_n'];
$respira_s = $row['respira_s'];
$respira_n = $row['respira_n'];
$pesobajo_s = $row['pesobajo_s'];
$pesobajo_n = $row['pesobajo_n'];
$amarillo_s = $row['amarillo_s'];
$amarillo_n = $row['amarillo_n'];
$mamar_s = $row['mamar_s'];
$mamar_n = $row['mamar_n'];
$vomitatodo_s = $row['vomitatodo_s'];
$vomitatodo_n = $row['vomitatodo_n'];
$dificultada_s = $row['dificultada_s'];
$dificultada_n = $row['dificultada_n'];
$supura_s = $row['supura_s'];
$supura_n = $row['supura_n'];
$tempe_baja_s = $row['tempe_baja_s'];
$tempe_baja_n = $row['tempe_baja_n'];
$diarrea_xs2 = $row['diarrea_xs2'];
$diarrea_xn2 = $row['diarrea_xn2'];
break; }

?>
<script>

$(function(){

$("#close-hc_rejilla_4").click(function(){
$("#open-hc_rejilla_4").show();
$(this).hide();
$("#content-hc_rejilla_4").hide('slow');
});

$("#open-hc_rejilla_4").click(function(){
$("#close-hc_rejilla_4").show();
$(this).hide();
$("#content-hc_rejilla_4").show('slow');
});

});

</script>
<fieldset id="hc_rejilla_4">
<legend align="left"> <div class="arrow-c" id="close-hc_rejilla_4"></div> <div class="arrow-o" id="open-hc_rejilla_4" ></div> <font>Valoracion terapia ocupacional - hc_rejilla_4</font></legend>
<div id="content-hc_rejilla_4">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_rejilla_4" id="guardar_hc_rejilla_4" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_rejilla_4" name="form_hc_rejilla_4" action="<?php echo @$action_form_hc_rejilla_4 ?>#hc_rejilla_4" method="post">

<input type="hidden" id="id_hc_rejilla_4" name="id_hc_rejilla_4" value="<?php echo @$id_hc_rejilla_4 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_hc_rejilla_4" name="id_hc_rejilla_4" value="<?php echo @$id_hc_rejilla_4; ?>" />

<p>&nbsp;</p>
<p align="center">4. Evaluación del estado físico de la madre gestante y el niño o niña de 0 a 2 meses</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="98" />
  <col width="191" />
  <col width="29" />
  <col width="33" />
  <col width="103" />
  <col width="110" />
  <tr height="14">
    <td height="14" width="105">PROBLEMA</td>
    <td width="322">SIGNOS DE    PELIGRO</td>
    <td width="54">SI</td>
    <td width="76">NO</td>
    <td width="112">CLASIFICAR</td>
    <td width="160">¿QUE HACER?</td>
  </tr>
  <tr height="27">
    <td rowspan="5" height="136" width="105">BUSQUE SIGNOS DE<br />
      PELIGRO EN LA<br />
    MADRE GESTANTE</td>
    <td width="322">¿Ha    tenido salidas de líquido o hemorragias vaginales?</td>
    <td width="54"><input type="text" class="input_txt valid" id="homorra_s" name="homorra_s" value="<?php echo @$homorra_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="homorra_n" name="homorra_n" value="<?php echo @$homorra_n; ?>" /></td>
    <td rowspan="5" width="112">Signos de peligro<br />
    de muerte</td>
    <td rowspan="5" width="160">Remita inmediatamente a la institución de salud</td>
  </tr>
  <tr height="27">
    <td height="27" width="322">¿Ha tenido dolor en la boca del estómago?</td>
    <td width="54"><input type="text" class="input_txt valid" id="dolor_esto_s" name="dolor_esto_s" value="<?php echo @$dolor_esto_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="dolor_esto_n" name="dolor_esto_n" value="<?php echo @$dolor_esto_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="322">¿Ha tenido hinchazón de manos, cara y pies?</td>
    <td width="54"><input type="text" class="input_txt valid" id="hicha_manos_s" name="hicha_manos_s" value="<?php echo @$hicha_manos_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="hicha_manos_n" name="hicha_manos_n" value="<?php echo @$hicha_manos_n; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="322">¿Ha tenido dolor, endurecimiento o<br />
      contracciones fuera del tiempo estipulado?</td>
    <td width="54"><input type="text" class="input_txt valid" id="dolor_x_s" name="dolor_x_s" value="<?php echo @$dolor_x_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="dolor_x_n" name="dolor_x_n" value="<?php echo @$dolor_x_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿No siente movimientos del bebé?</td>
    <td width="54"><input type="text" class="input_txt valid" id="mov_bebe_s" name="mov_bebe_s" value="<?php echo @$mov_bebe_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="mov_bebe_n" name="mov_bebe_n" value="<?php echo @$mov_bebe_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="3" height="42" width="105">BUSQUE SIGNOS DE<br />
      PELIGRO DURANTE<br />
    EL PARTO</td>
    <td width="322">¿Hay    hemorragia?</td>
    <td width="54"><input type="text" class="input_txt valid" id="hemorra_2_s" name="hemorra_2_s" value="<?php echo @$hemorra_2_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="hemorra_2_n" name="hemorra_2_n" value="<?php echo @$hemorra_2_n; ?>" /></td>
    <td rowspan="3" width="112">Signos de peligro<br />
    de muerte</td>
    <td rowspan="3" width="160">Remita inmediatamente<br />
    a la institución de salud</td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Salida de pie, mano o cordón?</td>
    <td width="54"><input type="text" class="input_txt valid" id="salida_s" name="salida_s" value="<?php echo @$salida_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="salida_n" name="salida_n" value="<?php echo @$salida_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Hay presencia de fiebre?</td>
    <td width="54"><input type="text" class="input_txt valid" id="fiebrex_s" name="fiebrex_s" value="<?php echo @$fiebrex_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="fiebrex_n" name="fiebrex_n" value="<?php echo @$fiebrex_n; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="105">BUSQUE SIGNOS DE PELIGRO DURANTE EL PARTO</td>
    <td width="322">¿El    bebé no respira?</td>
    <td width="54"><input type="text" class="input_txt valid" id="respira_s" name="respira_s" value="<?php echo @$respira_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="respira_n" name="respira_n" value="<?php echo @$respira_n; ?>" /></td>
    <td width="112">Inicie    reanimación</td>
    <td width="160">Remita    inmediatamente<br />
    a la institución de salud</td>
  </tr>
  <tr height="14">
    <td rowspan="8" height="138" width="105">BUSQUE SIGNOS DE<br />
      PELIGRO EN EL NIÑO O NIÑA<br />
    DE 0 A 2 MESES</td>
    <td width="322">¿Tiene    bajo peso?</td>
    <td width="54"><input type="text" class="input_txt valid" id="pesobajo_s" name="pesobajo_s" value="<?php echo @$pesobajo_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="pesobajo_n" name="pesobajo_n" value="<?php echo @$pesobajo_n; ?>" /></td>
    <td rowspan="8" width="112">Signos    de peligro<br />
      de muerte<br />    </td>
    <td rowspan="8" width="160">Remita    inmediatamente<br />
      a la institución de salud<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Tiene la piel color amarillo?</td>
    <td width="54"><input type="text" class="input_txt valid" id="amarillo_s" name="amarillo_s" value="<?php echo @$amarillo_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="amarillo_n" name="amarillo_n" value="<?php echo @$amarillo_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿No puede mamar o tomar nada?</td>
    <td width="54"><input type="text" class="input_txt valid" id="mamar_s" name="mamar_s" value="<?php echo @$mamar_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="mamar_n" name="mamar_n" value="<?php echo @$mamar_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Vomita todo lo que toma?</td>
    <td width="54"><input type="text" class="input_txt valid" id="vomitatodo_s" name="vomitatodo_s" value="<?php echo @$vomitatodo_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="vomitatodo_n" name="vomitatodo_n" value="<?php echo @$vomitatodo_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Respira con dificultad?</td>
    <td width="54"><input type="text" class="input_txt valid" id="dificultada_s" name="dificultada_s" value="<?php echo @$dificultada_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="dificultada_n" name="dificultada_n" value="<?php echo @$dificultada_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="322">¿Le supura el ombligo otiene granos con pus?</td>
    <td width="54"><input type="text" class="input_txt valid" id="supura_s" name="supura_s" value="<?php echo @$supura_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="supura_n" name="supura_n" value="<?php echo @$supura_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="322">¿Ha tenido fiebre o temperatura muy baja?</td>
    <td width="54"><input type="text" class="input_txt valid" id="tempe_baja_s" name="tempe_baja_s" value="<?php echo @$tempe_baja_s; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="tempe_baja_n" name="tempe_baja_n" value="<?php echo @$tempe_baja_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="322">¿Tiene diarrea o diarrea con sangre?</td>
    <td width="54"><input type="text" class="input_txt valid" id="diarrea_xs2" name="diarrea_xs2" value="<?php echo @$diarrea_xs2; ?>" /></td>
    <td width="76"><input type="text" class="input_txt valid" id="diarrea_xn2" name="diarrea_xn2" value="<?php echo @$diarrea_xn2; ?>" /></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>