<?php
if (isset($_REQUEST['guardar_hc_rejilla_1']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_rejilla_1'] == 'new') {

$sql = "INSERT INTO hc_rejilla_1 (
`id_hc_rejilla_1`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`pecho_s`,
`pecho_n`,
`vomita_s`,
`vomita_n`,
`convulsion_s`,
`convulsion_n`,
`latargia_s`,
`letargia_n`,
`tos_x`,
`res_rapida_s`,
`res_rapida_n`,
`ruido_s`,
`ruido_n`,
`hundimiento_s`,
`hundimiento_n`,
`tos_30_s`,
`tos_30_n`,
`gripa_tos_s`,
`gripa_tos_n`,
`diarrea_x`,
`ojos_s`,
`ojos_n`,
`fontanela_s`,
`fontanela_n`,
`bocaseca_s`,
`bocaseca_n`,
`pellizco_s`,
`pellizco_n`,
`diarrea_2s`,
`diarrea_2n`,
`diarrea14_s`,
`diarrea14_n`,
`d_sangre_s`,
`d_sangre_n`,
`fiebre_x`,
`fiebre7_s`,
`fiebre7_n`,
`nuca_s`,
`nuca_n`,
`man_sangra_s`,
`man_sangra_n`,
`paludismo_s`,
`paludismo_n`,
`brote_s`,
`brote_n`,
`fiebretodo_s`,
`fiebretodo_n`,
`oido_x`,
`oido_dolor_s`,
`oido_dolor_n`,
`saturacion_s`,
`saturacion_n`,
`detras_s`,
`detras_n`,
`oidotodo_s`,
`oidotodo_n`,
`anemia_x`,
`perdida_peso_s`,
`perdida_peso_n`,
`inchazon_s`,
`inchazon_n`,
`palidez_s`,
`palidez_n`,
`peso_bajo_s`,
`peso_bajo_n`,
`peso_igual_s`,
`peso_igual_n`,
`peso12_s`,
`peso12_n`,
`peso_menos2_s`,
`peso_menos2_n`,
`enfermedad_x`,
`tos2_x`,
`diarrea2_x`,
`fiebre2_x`,
`otras_x`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['pecho_s']."' ,
'".$_REQUEST['pecho_n']."' ,
'".$_REQUEST['vomita_s']."' ,
'".$_REQUEST['vomita_n']."' ,
'".$_REQUEST['convulsion_s']."' ,
'".$_REQUEST['convulsion_n']."' ,
'".$_REQUEST['latargia_s']."' ,
'".$_REQUEST['letargia_n']."' ,
'".$_REQUEST['tos_x']."' ,
'".$_REQUEST['res_rapida_s']."' ,
'".$_REQUEST['res_rapida_n']."' ,
'".$_REQUEST['ruido_s']."' ,
'".$_REQUEST['ruido_n']."' ,
'".$_REQUEST['hundimiento_s']."' ,
'".$_REQUEST['hundimiento_n']."' ,
'".$_REQUEST['tos_30_s']."' ,
'".$_REQUEST['tos_30_n']."' ,
'".$_REQUEST['gripa_tos_s']."' ,
'".$_REQUEST['gripa_tos_n']."' ,
'".$_REQUEST['diarrea_x']."' ,
'".$_REQUEST['ojos_s']."' ,
'".$_REQUEST['ojos_n']."' ,
'".$_REQUEST['fontanela_s']."' ,
'".$_REQUEST['fontanela_n']."' ,
'".$_REQUEST['bocaseca_s']."' ,
'".$_REQUEST['bocaseca_n']."' ,
'".$_REQUEST['pellizco_s']."' ,
'".$_REQUEST['pellizco_n']."' ,
'".$_REQUEST['diarrea_2s']."' ,
'".$_REQUEST['diarrea_2n']."' ,
'".$_REQUEST['diarrea14_s']."' ,
'".$_REQUEST['diarrea14_n']."' ,
'".$_REQUEST['d_sangre_s']."' ,
'".$_REQUEST['d_sangre_n']."' ,
'".$_REQUEST['fiebre_x']."' ,
'".$_REQUEST['fiebre7_s']."' ,
'".$_REQUEST['fiebre7_n']."' ,
'".$_REQUEST['nuca_s']."' ,
'".$_REQUEST['nuca_n']."' ,
'".$_REQUEST['man_sangra_s']."' ,
'".$_REQUEST['man_sangra_n']."' ,
'".$_REQUEST['paludismo_s']."' ,
'".$_REQUEST['paludismo_n']."' ,
'".$_REQUEST['brote_s']."' ,
'".$_REQUEST['brote_n']."' ,
'".$_REQUEST['fiebretodo_s']."' ,
'".$_REQUEST['fiebretodo_n']."' ,
'".$_REQUEST['oido_x']."' ,
'".$_REQUEST['oido_dolor_s']."' ,
'".$_REQUEST['oido_dolor_n']."' ,
'".$_REQUEST['saturacion_s']."' ,
'".$_REQUEST['saturacion_n']."' ,
'".$_REQUEST['detras_s']."' ,
'".$_REQUEST['detras_n']."' ,
'".$_REQUEST['oidotodo_s']."' ,
'".$_REQUEST['oidotodo_n']."' ,
'".$_REQUEST['anemia_x']."' ,
'".$_REQUEST['perdida_peso_s']."' ,
'".$_REQUEST['perdida_peso_n']."' ,
'".$_REQUEST['inchazon_s']."' ,
'".$_REQUEST['inchazon_n']."' ,
'".$_REQUEST['palidez_s']."' ,
'".$_REQUEST['palidez_n']."' ,
'".$_REQUEST['peso_bajo_s']."' ,
'".$_REQUEST['peso_bajo_n']."' ,
'".$_REQUEST['peso_igual_s']."' ,
'".$_REQUEST['peso_igual_n']."' ,
'".$_REQUEST['peso12_s']."' ,
'".$_REQUEST['peso12_n']."' ,
'".$_REQUEST['peso_menos2_s']."' ,
'".$_REQUEST['peso_menos2_n']."' ,
'".$_REQUEST['enfermedad_x']."' ,
'".$_REQUEST['tos2_x']."' ,
'".$_REQUEST['diarrea2_x']."' ,
'".$_REQUEST['fiebre2_x']."' ,
'".$_REQUEST['otras_x']."'
) ";


} else if ($_REQUEST['id_hc_rejilla_1'] != '') {

$sql = "UPDATE hc_rejilla_1 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`pecho_s` = '".$_REQUEST['pecho_s']."' ,
`pecho_n` = '".$_REQUEST['pecho_n']."' ,
`vomita_s` = '".$_REQUEST['vomita_s']."' ,
`vomita_n` = '".$_REQUEST['vomita_n']."' ,
`convulsion_s` = '".$_REQUEST['convulsion_s']."' ,
`convulsion_n` = '".$_REQUEST['convulsion_n']."' ,
`latargia_s` = '".$_REQUEST['latargia_s']."' ,
`letargia_n` = '".$_REQUEST['letargia_n']."' ,
`tos_x` = '".$_REQUEST['tos_x']."' ,
`res_rapida_s` = '".$_REQUEST['res_rapida_s']."' ,
`res_rapida_n` = '".$_REQUEST['res_rapida_n']."' ,
`ruido_s` = '".$_REQUEST['ruido_s']."' ,
`ruido_n` = '".$_REQUEST['ruido_n']."' ,
`hundimiento_s` = '".$_REQUEST['hundimiento_s']."' ,
`hundimiento_n` = '".$_REQUEST['hundimiento_n']."' ,
`tos_30_s` = '".$_REQUEST['tos_30_s']."' ,
`tos_30_n` = '".$_REQUEST['tos_30_n']."' ,
`gripa_tos_s` = '".$_REQUEST['gripa_tos_s']."' ,
`gripa_tos_n` = '".$_REQUEST['gripa_tos_n']."' ,
`diarrea_x` = '".$_REQUEST['diarrea_x']."' ,
`ojos_s` = '".$_REQUEST['ojos_s']."' ,
`ojos_n` = '".$_REQUEST['ojos_n']."' ,
`fontanela_s` = '".$_REQUEST['fontanela_s']."' ,
`fontanela_n` = '".$_REQUEST['fontanela_n']."' ,
`bocaseca_s` = '".$_REQUEST['bocaseca_s']."' ,
`bocaseca_n` = '".$_REQUEST['bocaseca_n']."' ,
`pellizco_s` = '".$_REQUEST['pellizco_s']."' ,
`pellizco_n` = '".$_REQUEST['pellizco_n']."' ,
`diarrea_2s` = '".$_REQUEST['diarrea_2s']."' ,
`diarrea_2n` = '".$_REQUEST['diarrea_2n']."' ,
`diarrea14_s` = '".$_REQUEST['diarrea14_s']."' ,
`diarrea14_n` = '".$_REQUEST['diarrea14_n']."' ,
`d_sangre_s` = '".$_REQUEST['d_sangre_s']."' ,
`d_sangre_n` = '".$_REQUEST['d_sangre_n']."' ,
`fiebre_x` = '".$_REQUEST['fiebre_x']."' ,
`fiebre7_s` = '".$_REQUEST['fiebre7_s']."' ,
`fiebre7_n` = '".$_REQUEST['fiebre7_n']."' ,
`nuca_s` = '".$_REQUEST['nuca_s']."' ,
`nuca_n` = '".$_REQUEST['nuca_n']."' ,
`man_sangra_s` = '".$_REQUEST['man_sangra_s']."' ,
`man_sangra_n` = '".$_REQUEST['man_sangra_n']."' ,
`paludismo_s` = '".$_REQUEST['paludismo_s']."' ,
`paludismo_n` = '".$_REQUEST['paludismo_n']."' ,
`brote_s` = '".$_REQUEST['brote_s']."' ,
`brote_n` = '".$_REQUEST['brote_n']."' ,
`fiebretodo_s` = '".$_REQUEST['fiebretodo_s']."' ,
`fiebretodo_n` = '".$_REQUEST['fiebretodo_n']."' ,
`oido_x` = '".$_REQUEST['oido_x']."' ,
`oido_dolor_s` = '".$_REQUEST['oido_dolor_s']."' ,
`oido_dolor_n` = '".$_REQUEST['oido_dolor_n']."' ,
`saturacion_s` = '".$_REQUEST['saturacion_s']."' ,
`saturacion_n` = '".$_REQUEST['saturacion_n']."' ,
`detras_s` = '".$_REQUEST['detras_s']."' ,
`detras_n` = '".$_REQUEST['detras_n']."' ,
`oidotodo_s` = '".$_REQUEST['oidotodo_s']."' ,
`oidotodo_n` = '".$_REQUEST['oidotodo_n']."' ,
`anemia_x` = '".$_REQUEST['anemia_x']."' ,
`perdida_peso_s` = '".$_REQUEST['perdida_peso_s']."' ,
`perdida_peso_n` = '".$_REQUEST['perdida_peso_n']."' ,
`inchazon_s` = '".$_REQUEST['inchazon_s']."' ,
`inchazon_n` = '".$_REQUEST['inchazon_n']."' ,
`palidez_s` = '".$_REQUEST['palidez_s']."' ,
`palidez_n` = '".$_REQUEST['palidez_n']."' ,
`peso_bajo_s` = '".$_REQUEST['peso_bajo_s']."' ,
`peso_bajo_n` = '".$_REQUEST['peso_bajo_n']."' ,
`peso_igual_s` = '".$_REQUEST['peso_igual_s']."' ,
`peso_igual_n` = '".$_REQUEST['peso_igual_n']."' ,
`peso12_s` = '".$_REQUEST['peso12_s']."' ,
`peso12_n` = '".$_REQUEST['peso12_n']."' ,
`peso_menos2_s` = '".$_REQUEST['peso_menos2_s']."' ,
`peso_menos2_n` = '".$_REQUEST['peso_menos2_n']."' ,
`enfermedad_x` = '".$_REQUEST['enfermedad_x']."' ,
`tos2_x` = '".$_REQUEST['tos2_x']."' ,
`diarrea2_x` = '".$_REQUEST['diarrea2_x']."' ,
`fiebre2_x` = '".$_REQUEST['fiebre2_x']."' ,
`otras_x` = '".$_REQUEST['otras_x']."' WHERE `id_hc_rejilla_1` = '".$_REQUEST['id_hc_rejilla_1']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_rejilla_1 = 'new';
$sql = "SELECT * from hc_rejilla_1 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_rejilla_1 = $row['id_hc_rejilla_1'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$pecho_s = $row['pecho_s'];
$pecho_n = $row['pecho_n'];
$vomita_s = $row['vomita_s'];
$vomita_n = $row['vomita_n'];
$convulsion_s = $row['convulsion_s'];
$convulsion_n = $row['convulsion_n'];
$latargia_s = $row['latargia_s'];
$letargia_n = $row['letargia_n'];
$tos_x = $row['tos_x'];
$res_rapida_s = $row['res_rapida_s'];
$res_rapida_n = $row['res_rapida_n'];
$ruido_s = $row['ruido_s'];
$ruido_n = $row['ruido_n'];
$hundimiento_s = $row['hundimiento_s'];
$hundimiento_n = $row['hundimiento_n'];
$tos_30_s = $row['tos_30_s'];
$tos_30_n = $row['tos_30_n'];
$gripa_tos_s = $row['gripa_tos_s'];
$gripa_tos_n = $row['gripa_tos_n'];
$diarrea_x = $row['diarrea_x'];
$ojos_s = $row['ojos_s'];
$ojos_n = $row['ojos_n'];
$fontanela_s = $row['fontanela_s'];
$fontanela_n = $row['fontanela_n'];
$bocaseca_s = $row['bocaseca_s'];
$bocaseca_n = $row['bocaseca_n'];
$pellizco_s = $row['pellizco_s'];
$pellizco_n = $row['pellizco_n'];
$diarrea_2s = $row['diarrea_2s'];
$diarrea_2n = $row['diarrea_2n'];
$diarrea14_s = $row['diarrea14_s'];
$diarrea14_n = $row['diarrea14_n'];
$d_sangre_s = $row['d_sangre_s'];
$d_sangre_n = $row['d_sangre_n'];
$fiebre_x = $row['fiebre_x'];
$fiebre7_s = $row['fiebre7_s'];
$fiebre7_n = $row['fiebre7_n'];
$nuca_s = $row['nuca_s'];
$nuca_n = $row['nuca_n'];
$man_sangra_s = $row['man_sangra_s'];
$man_sangra_n = $row['man_sangra_n'];
$paludismo_s = $row['paludismo_s'];
$paludismo_n = $row['paludismo_n'];
$brote_s = $row['brote_s'];
$brote_n = $row['brote_n'];
$fiebretodo_s = $row['fiebretodo_s'];
$fiebretodo_n = $row['fiebretodo_n'];
$oido_x = $row['oido_x'];
$oido_dolor_s = $row['oido_dolor_s'];
$oido_dolor_n = $row['oido_dolor_n'];
$saturacion_s = $row['saturacion_s'];
$saturacion_n = $row['saturacion_n'];
$detras_s = $row['detras_s'];
$detras_n = $row['detras_n'];
$oidotodo_s = $row['oidotodo_s'];
$oidotodo_n = $row['oidotodo_n'];
$anemia_x = $row['anemia_x'];
$perdida_peso_s = $row['perdida_peso_s'];
$perdida_peso_n = $row['perdida_peso_n'];
$inchazon_s = $row['inchazon_s'];
$inchazon_n = $row['inchazon_n'];
$palidez_s = $row['palidez_s'];
$palidez_n = $row['palidez_n'];
$peso_bajo_s = $row['peso_bajo_s'];
$peso_bajo_n = $row['peso_bajo_n'];
$peso_igual_s = $row['peso_igual_s'];
$peso_igual_n = $row['peso_igual_n'];
$peso12_s = $row['peso12_s'];
$peso12_n = $row['peso12_n'];
$peso_menos2_s = $row['peso_menos2_s'];
$peso_menos2_n = $row['peso_menos2_n'];
$enfermedad_x = $row['enfermedad_x'];
$tos2_x = $row['tos2_x'];
$diarrea2_x = $row['diarrea2_x'];
$fiebre2_x = $row['fiebre2_x'];
$otras_x = $row['otras_x'];
break; }

?>
<script>

$(function(){

$("#close-hc_rejilla_1").click(function(){
$("#open-hc_rejilla_1").show();
$(this).hide();
$("#content-hc_rejilla_1").hide('slow');
});

$("#open-hc_rejilla_1").click(function(){
$("#close-hc_rejilla_1").show();
$(this).hide();
$("#content-hc_rejilla_1").show('slow');
});

});

</script>
<fieldset id="hc_rejilla_1">
<legend align="left"> <div class="arrow-c" id="close-hc_rejilla_1"></div> <div class="arrow-o" id="open-hc_rejilla_1" ></div> <font>Valoracion Medicina Especializada Rejilla 1</font></legend>
<div id="content-hc_rejilla_1">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_rejilla_1" id="guardar_hc_rejilla_1" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_rejilla_1" name="form_hc_rejilla_1" action="<?php echo @$action_form_hc_rejilla_1 ?>#hc_rejilla_1" method="post">

<input type="hidden" id="id_hc_rejilla_1" name="id_hc_rejilla_1" value="<?php echo @$id_hc_rejilla_1 ?>" />



<input type="hidden" class="input_txt valid" id="id_hc_rejilla_1" name="id_hc_rejilla_1" value="<?php echo @$id_hc_rejilla_1; ?>" />

<p>&nbsp;</p>
<div align="center">1.Evaluación del estado de salud del niño o niña
</div>
<p>&nbsp;</p>
<table  border="0" cellspacing="0" cellpadding="0" class="data">
  <col width="83" />
  <col width="142" />
  <col width="27" />
  <col width="24" />
  <col width="111" />
  <col width="184" />
  <tr height="14">
    <td height="14" width="168">PROBLEMA</td>
    <td width="234">SIGNOS DE    PELIGRO</td>
    <td width="168">SI</td>
    <td width="198">NO</td>
    <td width="176">CLASIFICAR</td>
    <td width="344">¿QUE HACER?</td>
  </tr>
  <tr height="27">
    <td rowspan="4" height="95" width="168">BUSQUE SIGNOS DE PELIGRO DE MUERTE</td>
    <td width="234">Puede    el niño beber o tomar el pecho</td>
    <td width="168"><input type="text" class="input_txt valid" id="pecho_s" name="pecho_s" value="<?php echo @$pecho_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="pecho_n" name="pecho_n" value="<?php echo @$pecho_n; ?>" /></td>
    <td rowspan="4" width="176">SIGNOS DEPELIGRO DE  MUERTE</td>
    <td rowspan="4" width="344"><p>* Remita inmediatamente a la institución de    salud                   </p>
    <p>* Ayudar a    resolver dificultades</p></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Vomita todo lo que ingiere</td>
    <td width="168"><input type="text" class="input_txt valid" id="vomita_s" name="vomita_s" value="<?php echo @$vomita_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="vomita_n" name="vomita_n" value="<?php echo @$vomita_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="234">El niño o niña ha tenido convulsiones</td>
    <td width="168"><input type="text" class="input_txt valid" id="convulsion_s" name="convulsion_s" value="<?php echo @$convulsion_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="convulsion_n" name="convulsion_n" value="<?php echo @$convulsion_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="234">¿Está letárgico o inconsciente</td>
    <td width="168"><input type="text" class="input_txt valid" id="latargia_s" name="latargia_s" value="<?php echo @$latargia_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="letargia_n" name="letargia_n" value="<?php echo @$letargia_n; ?>" /></td>
  </tr>
  <tr height="54">
    <td rowspan="5" width="168"><p>¿EL NIÑO O

      NIÑA TIENE TOS O    DIFICULTAD PARA RESPIRAR?
        <input type="text" class="input_txt valid" id="tos_x" name="tos_x" value="<?php echo @$tos_x; ?>" />
    </p>
    <p>RESPIRACIÓN RÁPIDA<br />
Edad Por minuto<br />
2 a 11 meses50 o más<br />
1 a 4 años40 o más</p></td>
    <td width="234" height="68">Respiración    rápida: dificultad para respirar o falta de aire</td>
    <td width="168"><input type="text" class="input_txt valid" id="res_rapida_s" name="res_rapida_s" value="<?php echo @$res_rapida_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="res_rapida_n" name="res_rapida_n" value="<?php echo @$res_rapida_n; ?>" /></td>
    <td rowspan="4" width="176">NEUMONÍA</td>
    <td rowspan="4" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Se debe continuar amamantándolo<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Ruidos en el pecho</td>
    <td width="168"><input type="text" class="input_txt valid" id="ruido_s" name="ruido_s" value="<?php echo @$ruido_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="ruido_n" name="ruido_n" value="<?php echo @$ruido_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Hundimiento de la piel entre las costillas al    respirar</td>
    <td width="168"><input type="text" class="input_txt valid" id="hundimiento_s" name="hundimiento_s" value="<?php echo @$hundimiento_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="hundimiento_n" name="hundimiento_n" value="<?php echo @$hundimiento_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Tos por más de 30 días</td>
    <td width="168"><input type="text" class="input_txt valid" id="tos_30_s" name="tos_30_s" value="<?php echo @$tos_30_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="tos_30_n" name="tos_30_n" value="<?php echo @$tos_30_n; ?>" /></td>
  </tr>
  <tr height="95">
    <td width="234" height="95">Gripa    o tos sin los signos anteriores</td>
    <td width="168"><input type="text" class="input_txt valid" id="gripa_tos_s" name="gripa_tos_s" value="<?php echo @$gripa_tos_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="gripa_tos_n" name="gripa_tos_n" value="<?php echo @$gripa_tos_n; ?>" /></td>
    <td width="176">GRIPA    Y TOS</td>
    <td width="344">*    Dar bebidas endulzadas<br />
      * Aumentar líquidos<br />
      * Destapar la nariz<br />
      * Enseñar signos de gravedad<br />
      * Enseñar signos de peligro<br />
      * Enseñar a prevenir<br />
      * Hacer atención de seguimiento</td>
  </tr>
  <tr height="27">
    <td rowspan="7" height="245" width="168"><p>¿EL NIÑO O NIÑA<br />
      TIENE DIARREA?
      <input type="text" class="input_txt valid" id="diarrea_x" name="diarrea_x" value="<?php echo @$diarrea_x; ?>" />
        </p>
      <p>&nbsp;</p>      </td>
    <td width="234">Con    dos los siguientes signos:<br />
      Ojos hundidos</td>
    <td width="168"><input type="text" class="input_txt valid" id="ojos_s" name="ojos_s" value="<?php echo @$ojos_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="ojos_n" name="ojos_n" value="<?php echo @$ojos_n; ?>" /></td>
    <td rowspan="4" width="176">DIARREA CON<br />
      DESHIDRATACIÓN<br />    </td>
    <td rowspan="4" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Iniciar hidratación con suero oral<br />
      * Se debe continuar amamantándolo<br />
      o alimentándolo<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Fontanela o mollera hundida</td>
    <td width="168"><input type="text" class="input_txt valid" id="fontanela_s" name="fontanela_s" value="<?php echo @$fontanela_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="fontanela_n" name="fontanela_n" value="<?php echo @$fontanela_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Boca seca o mucha sed</td>
    <td width="168"><input type="text" class="input_txt valid" id="bocaseca_s" name="bocaseca_s" value="<?php echo @$bocaseca_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="bocaseca_n" name="bocaseca_n" value="<?php echo @$bocaseca_n; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="234">Al pellizcar la piel en la zona    abdominal,demora en recuperar su posición normal</td>
    <td width="168"><input type="text" class="input_txt valid" id="pellizco_s" name="pellizco_s" value="<?php echo @$pellizco_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="pellizco_n" name="pellizco_n" value="<?php echo @$pellizco_n; ?>" /></td>
  </tr>
  <tr height="95">
    <td height="95" width="234">Diarrea con uno de los signos anteriores</td>
    <td width="168"><input type="text" class="input_txt valid" id="diarrea_2s" name="diarrea_2s" value="<?php echo @$diarrea_2s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="diarrea_2n" name="diarrea_2n" value="<?php echo @$diarrea_2n; ?>" /></td>
    <td width="176">DIARREA    SIN<br />
      DESHIDRATACIÓN<br />    </td>
    <td width="344">*    Aumentar líquidos y continuar<br />
      alimentándolo<br />
      *Enseñar signos de gravedad<br />
      *Enseñar signos de peligro<br />
      *Enseñar a prevenir<br />
      *Hacer la atención de seguimiento<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Diarrea por 14 días o más</td>
    <td width="168"><input type="text" class="input_txt valid" id="diarrea14_s" name="diarrea14_s" value="<?php echo @$diarrea14_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="diarrea14_n" name="diarrea14_n" value="<?php echo @$diarrea14_n; ?>" /></td>
    <td width="176">DIARREA    PERSISTENTE</td>
    <td rowspan="2" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Hacer el seguimientos dos días<br />
      después<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Sangre en heces</td>
    <td width="168"><input type="text" class="input_txt valid" id="d_sangre_s" name="d_sangre_s" value="<?php echo @$d_sangre_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="d_sangre_n" name="d_sangre_n" value="<?php echo @$d_sangre_n; ?>" /></td>
    <td width="176">DIARREA CON SANGRE</td>
  </tr>
  <tr height="27">
    <td rowspan="6" height="192" width="168">¿EL NIÑO O N
    IÑA TIENE FIEBRE?
    <input type="text" class="input_txt valid" id="fiebre_x" name="fiebre_x" value="<?php echo @$fiebre_x; ?>" /></td>
    <td width="234">Fiebre    de más de 7 días seguidos</td>
    <td width="168"><input type="text" class="input_txt valid" id="fiebre7_s" name="fiebre7_s" value="<?php echo @$fiebre7_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="fiebre7_n" name="fiebre7_n" value="<?php echo @$fiebre7_n; ?>" /></td>
    <td rowspan="5" width="176">ENFERMEDAD<br />
      FEBRIL MUY<br />
      GRAVE<br />    </td>
    <td rowspan="5" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Una dosis de acetaminofen<br />
      * Continuar amamantándolo o agua<br />
      azucarada<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Rigidez de nuca</td>
    <td width="168"><input type="text" class="input_txt valid" id="nuca_s" name="nuca_s" value="<?php echo @$nuca_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="nuca_n" name="nuca_n" value="<?php echo @$nuca_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Manifestación de sangrado</td>
    <td width="168"><input type="text" class="input_txt valid" id="man_sangra_s" name="man_sangra_s" value="<?php echo @$man_sangra_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="man_sangra_n" name="man_sangra_n" value="<?php echo @$man_sangra_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Vive o visito zona de paludismo</td>
    <td width="168"><input type="text" class="input_txt valid" id="paludismo_s" name="paludismo_s" value="<?php echo @$paludismo_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="paludismo_n" name="paludismo_n" value="<?php echo @$paludismo_n; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="234">Brote generalizado y tos u ojos rojos o    coriza<br />    </td>
    <td width="168"><input type="text" class="input_txt valid" id="brote_s" name="brote_s" value="<?php echo @$brote_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="brote_n" name="brote_n" value="<?php echo @$brote_n; ?>" /></td>
  </tr>
  <tr height="82">
    <td height="82" width="234">Fiebre sin los signos anteriores</td>
    <td width="168"><input type="text" class="input_txt valid" id="fiebretodo_s" name="fiebretodo_s" value="<?php echo @$fiebretodo_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="fiebretodo_n" name="fiebretodo_n" value="<?php echo @$fiebretodo_n; ?>" /></td>
    <td width="176">FIEBRE</td>
    <td width="344">*    Una dosis de acetaminofén<br />
      * Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe a prevenir<br />
      * Atención de seguimiento<br />    </td>
  </tr>
  <tr height="14">
    <td rowspan="4" height="123" width="168">¿EL NIÑO O NIÑA TIENE<br />
      DOLOR DE OIDO?
        <input type="text" class="input_txt valid" id="oido_x" name="oido_x" value="<?php echo @$oido_x; ?>" />
      <br />    </td>
    <td width="234">Dolor    de oído</td>
    <td width="168"><input type="text" class="input_txt valid" id="oido_dolor_s" name="oido_dolor_s" value="<?php echo @$oido_dolor_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="oido_dolor_n" name="oido_dolor_n" value="<?php echo @$oido_dolor_n; ?>" /></td>
    <td rowspan="3" width="176">INFECCIÓN DE<br />
      OIDO<br />    </td>
    <td rowspan="3" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Una dosis de acetaminofen<br />
      * Enseñe el uso de la mecha de oido<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Supuración de oído</td>
    <td width="168"><input type="text" class="input_txt valid" id="saturacion_s" name="saturacion_s" value="<?php echo @$saturacion_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="saturacion_n" name="saturacion_n" value="<?php echo @$saturacion_n; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Masa dolorosa detrás de la oreja</td>
    <td width="168"><input type="text" class="input_txt valid" id="detras_s" name="detras_s" value="<?php echo @$detras_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="detras_n" name="detras_n" value="<?php echo @$detras_n; ?>" /></td>
  </tr>
  <tr height="68">
    <td height="68" width="234">Dolor de oido sin los signos anteriores</td>
    <td width="168"><p>
      <input type="text" class="input_txt valid" id="oidotodo_s" name="oidotodo_s" value="<?php echo @$oidotodo_s; ?>" />
    </p>      </td>
    <td width="198"><input type="text" class="input_txt valid" id="oidotodo_n" name="oidotodo_n" value="<?php echo @$oidotodo_n; ?>" /></td>
    <td width="176">NO    HAY INFECCIÓN<br />
      DE OIDO<br />    </td>
    <td width="344">*    Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe a prevenir<br />
      * Hacer la atención de seguimiento<br />    </td>
  </tr>
  <tr height="14">
    <td rowspan="7" height="217" width="168">BUSQUE SIGNOS DE<br />
      DESNUTRICIÓN Y/O<br />
      ANEMIA
      <input type="text" class="input_txt valid" id="anemia_x" name="anemia_x" value="<?php echo @$anemia_x; ?>" />
      <br />    </td>
    <td width="234">Pérdida    grave de peso</td>
    <td width="168"><input type="text" class="input_txt valid" id="perdida_peso_s" name="perdida_peso_s" value="<?php echo @$perdida_peso_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="perdida_peso_n" name="perdida_peso_n" value="<?php echo @$perdida_peso_n; ?>" /></td>
    <td rowspan="2" width="176">DESNUTRICIÓN<br />
      GRAVE<br />
      ANEMIA<br />    </td>
    <td rowspan="3" width="344">* Remita inmediatamente a la<br />
      institución de salud<br />
      * Hacer la atención de seguimiento<br />
      Peso <br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Hinchazón de pies y de la barriga</td>
    <td width="168"><input type="text" class="input_txt valid" id="inchazon_s" name="inchazon_s" value="<?php echo @$inchazon_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="inchazon_n" name="inchazon_n" value="<?php echo @$inchazon_n; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="234">Palidez generalizada.Sobre todo en las palmas    de las manos</td>
    <td width="168"><input type="text" class="input_txt valid" id="palidez_s" name="palidez_s" value="<?php echo @$palidez_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="palidez_n" name="palidez_n" value="<?php echo @$palidez_n; ?>" /></td>
    <td width="176">ANEMIA</td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Peso por debajo de la curva de la tabla de peso</td>
    <td width="168"><input type="text" class="input_txt valid" id="peso_bajo_s" name="peso_bajo_s" value="<?php echo @$peso_bajo_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="peso_bajo_n" name="peso_bajo_n" value="<?php echo @$peso_bajo_n; ?>" /></td>
    <td rowspan="2" width="176">DESNUTRICIÓN</td>
    <td rowspan="2" width="344">* Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe medidas preventivas<br />
      *Atención de seguimiento<br />
      * Consejería de alimentación<br />
      * Control de peso<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Peso igual o menor a la toma anterior</td>
    <td width="168"><input type="text" class="input_txt valid" id="peso_igual_s" name="peso_igual_s" value="<?php echo @$peso_igual_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="peso_igual_n" name="peso_igual_n" value="<?php echo @$peso_igual_n; ?>" /></td>
  </tr>
  <tr height="54">
    <td height="54" width="234">Peso entre la primera y la segunda curva<br />
      de la tabla de peso<br />    </td>
    <td width="168"><input type="text" class="input_txt valid" id="peso12_s" name="peso12_s" value="<?php echo @$peso12_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="peso12_n" name="peso12_n" value="<?php echo @$peso12_n; ?>" /></td>
    <td rowspan="2" width="176">PESO ADECUADO<br />
      PARA LA EDAD<br />    </td>
    <td rowspan="2" width="344">* Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe medidas preventivas<br />
      *Atención de seguimiento<br />
      * Consejería de alimentación<br />
      * Control de peso<br />    </td>
  </tr>
  <tr height="27">
    <td height="27" width="234">Peso igual o menor a la toma anterior</td>
    <td width="168"><input type="text" class="input_txt valid" id="peso_menos2_s" name="peso_menos2_s" value="<?php echo @$peso_menos2_s; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="peso_menos2_n" name="peso_menos2_n" value="<?php echo @$peso_menos2_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="4" height="56" width="168">¿EL NIÑO O NIÑA SE  ENFERMA CON<br />
      FRECUENCIA?
        <input type="text" class="input_txt valid" id="enfermedad_x" name="enfermedad_x" value="<?php echo @$enfermedad_x; ?>" />
      <br />    </td>
    <td width="234">Tos </td>
    <td colspan="2"><input type="text" class="input_txt valid" id="tos2_x" name="tos2_x" value="<?php echo @$tos2_x; ?>" /></td>
    <td rowspan="4" width="176">OTRAS<br />
      ENFERMEDADES<br />    </td>
    <td rowspan="4" width="344">* Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe medidas preventivas<br />
      * Hacer de seguimiento de la zona<br />
      * Consejería de alimentación<br />
      * Controle de peso del niño o niño</td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Diarrea</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="diarrea2_x" name="diarrea2_x" value="<?php echo @$diarrea2_x; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Fiebre</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="fiebre2_x" name="fiebre2_x" value="<?php echo @$fiebre2_x; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="234">Otras enfermedades</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="otras_x" name="otras_x" value="<?php echo @$otras_x; ?>" />
&nbsp;</td>
  </tr>
  <tr height="109">
    <td colspan="4" height="109">EL NIÑO NO PRESENTA NINGUNA ENFERMEDAD</td>
    <td width="176">   NO HAY<br />
      ENFERMEDADES<br />    </td>
    <td width="344">*    Enseñe signos de gravedad<br />
      * Enseñe signos de peligro<br />
      * Enseñe medidas preventivas<br />
      * Hacer de seguimiento de la zona<br />
      * Realice actividades con la comunidad<br />
      * Controle de peso del niño o niña<br />    </td>
  </tr>
</table>
<?php echo @$button ?>
</form><br>
</div>
</fieldset>