<?php
if (isset($_REQUEST['guardar_hc_riesgo_4']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_riesgo_4'] == 'new') {

$sql = "INSERT INTO hc_riesgo_4 (
`idhc_riesgo_4`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`frc`,
`frres`,
`tempe`,
`acosta`,
`sentado`,
`depie`,
`imc`,
`peso`,
`oido_d`,
`oido_i`,
`oido_ambos`,
`ojo_d`,
`ojo_i`,
`ojo_ambos`,
`cabeza_1`,
`cabeza_2`,
`cara_1`,
`cara_2`,
`cuello_1`,
`cuello_2`,
`pulmon_1`,
`pulmon_2`,
`adomen_1`,
`adomen_2`,
`genito_1`,
`genito_2`,
`osteo_1`,
`osteo_2`,
`nervio_1`,
`nervio_2`,
`linfa_1`,
`linfa_2`,
`piel_1`,
`piel_2`,
`mamas_1`,
`mamas_2`,
`otros_1`,
`otros_2`,
`fc_2`,
`fres_2`,
`acos_2`,
`senta_2`,
`pie_2`,
`tempe_1`,
`tempe_2`,
`peso_2`,
`imc_2`,
`cintura_2`,
`oidod_2`,
`oido_i2`,
`ambos2`,
`ojod_2`,
`ojoi_2`,
`ojoam_2`,
`glicemia_1`,
`glicemia_2`,
`creati_1`,
`creati_2`,
`uro_1`,
`uro_2`,
`otros2_1`,
`otros2_2`,
`tratam_1`,
`tratam_2`,
`hora_fin`,
`hora_inicio`,
`fecha`,
`edad`,
`cardio_1`,
`cardio_2`,
`cintura_1`,
`tacto_1`,
`tacto_2`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['frc']."' ,
'".$_REQUEST['frres']."' ,
'".$_REQUEST['tempe']."' ,
'".$_REQUEST['acosta']."' ,
'".$_REQUEST['sentado']."' ,
'".$_REQUEST['depie']."' ,
'".$_REQUEST['imc']."' ,
'".$_REQUEST['peso']."' ,
'".$_REQUEST['oido_d']."' ,
'".$_REQUEST['oido_i']."' ,
'".$_REQUEST['oido_ambos']."' ,
'".$_REQUEST['ojo_d']."' ,
'".$_REQUEST['ojo_i']."' ,
'".$_REQUEST['ojo_ambos']."' ,
'".$_REQUEST['cabeza_1']."' ,
'".$_REQUEST['cabeza_2']."' ,
'".$_REQUEST['cara_1']."' ,
'".$_REQUEST['cara_2']."' ,
'".$_REQUEST['cuello_1']."' ,
'".$_REQUEST['cuello_2']."' ,
'".$_REQUEST['pulmon_1']."' ,
'".$_REQUEST['pulmon_2']."' ,
'".$_REQUEST['adomen_1']."' ,
'".$_REQUEST['adomen_2']."' ,
'".$_REQUEST['genito_1']."' ,
'".$_REQUEST['genito_2']."' ,
'".$_REQUEST['osteo_1']."' ,
'".$_REQUEST['osteo_2']."' ,
'".$_REQUEST['nervio_1']."' ,
'".$_REQUEST['nervio_2']."' ,
'".$_REQUEST['linfa_1']."' ,
'".$_REQUEST['linfa_2']."' ,
'".$_REQUEST['piel_1']."' ,
'".$_REQUEST['piel_2']."' ,
'".$_REQUEST['mamas_1']."' ,
'".$_REQUEST['mamas_2']."' ,
'".$_REQUEST['otros_1']."' ,
'".$_REQUEST['otros_2']."' ,
'".$_REQUEST['fc_2']."' ,
'".$_REQUEST['fres_2']."' ,
'".$_REQUEST['acos_2']."' ,
'".$_REQUEST['senta_2']."' ,
'".$_REQUEST['pie_2']."' ,
'".$_REQUEST['tempe_1']."' ,
'".$_REQUEST['tempe_2']."' ,
'".$_REQUEST['peso_2']."' ,
'".$_REQUEST['imc_2']."' ,
'".$_REQUEST['cintura_2']."' ,
'".$_REQUEST['oidod_2']."' ,
'".$_REQUEST['oido_i2']."' ,
'".$_REQUEST['ambos2']."' ,
'".$_REQUEST['ojod_2']."' ,
'".$_REQUEST['ojoi_2']."' ,
'".$_REQUEST['ojoam_2']."' ,
'".$_REQUEST['glicemia_1']."' ,
'".$_REQUEST['glicemia_2']."' ,
'".$_REQUEST['creati_1']."' ,
'".$_REQUEST['creati_2']."' ,
'".$_REQUEST['uro_1']."' ,
'".$_REQUEST['uro_2']."' ,
'".$_REQUEST['otros2_1']."' ,
'".$_REQUEST['otros2_2']."' ,
'".$_REQUEST['tratam_1']."' ,
'".$_REQUEST['tratam_2']."' ,
'".$_REQUEST['hora_fin']."' ,
'".$_REQUEST['hora_inicio']."' ,
'".$_REQUEST['fecha']."' ,
'".$_REQUEST['edad']."' ,
'".$_REQUEST['cardio_1']."' ,
'".$_REQUEST['cardio_2']."' ,
'".$_REQUEST['cintura_1']."' ,
'".$_REQUEST['tacto_1']."' ,
'".$_REQUEST['tacto_2']."'
) ";


} else if ($_REQUEST['idhc_riesgo_4'] != '') {

$sql = "UPDATE hc_riesgo_4 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`frc` = '".$_REQUEST['frc']."' ,
`frres` = '".$_REQUEST['frres']."' ,
`tempe` = '".$_REQUEST['tempe']."' ,
`acosta` = '".$_REQUEST['acosta']."' ,
`sentado` = '".$_REQUEST['sentado']."' ,
`depie` = '".$_REQUEST['depie']."' ,
`imc` = '".$_REQUEST['imc']."' ,
`peso` = '".$_REQUEST['peso']."' ,
`oido_d` = '".$_REQUEST['oido_d']."' ,
`oido_i` = '".$_REQUEST['oido_i']."' ,
`oido_ambos` = '".$_REQUEST['oido_ambos']."' ,
`ojo_d` = '".$_REQUEST['ojo_d']."' ,
`ojo_i` = '".$_REQUEST['ojo_i']."' ,
`ojo_ambos` = '".$_REQUEST['ojo_ambos']."' ,
`cabeza_1` = '".$_REQUEST['cabeza_1']."' ,
`cabeza_2` = '".$_REQUEST['cabeza_2']."' ,
`cara_1` = '".$_REQUEST['cara_1']."' ,
`cara_2` = '".$_REQUEST['cara_2']."' ,
`cuello_1` = '".$_REQUEST['cuello_1']."' ,
`cuello_2` = '".$_REQUEST['cuello_2']."' ,
`pulmon_1` = '".$_REQUEST['pulmon_1']."' ,
`pulmon_2` = '".$_REQUEST['pulmon_2']."' ,
`adomen_1` = '".$_REQUEST['adomen_1']."' ,
`adomen_2` = '".$_REQUEST['adomen_2']."' ,
`genito_1` = '".$_REQUEST['genito_1']."' ,
`genito_2` = '".$_REQUEST['genito_2']."' ,
`osteo_1` = '".$_REQUEST['osteo_1']."' ,
`osteo_2` = '".$_REQUEST['osteo_2']."' ,
`nervio_1` = '".$_REQUEST['nervio_1']."' ,
`nervio_2` = '".$_REQUEST['nervio_2']."' ,
`linfa_1` = '".$_REQUEST['linfa_1']."' ,
`linfa_2` = '".$_REQUEST['linfa_2']."' ,
`piel_1` = '".$_REQUEST['piel_1']."' ,
`piel_2` = '".$_REQUEST['piel_2']."' ,
`mamas_1` = '".$_REQUEST['mamas_1']."' ,
`mamas_2` = '".$_REQUEST['mamas_2']."' ,
`otros_1` = '".$_REQUEST['otros_1']."' ,
`otros_2` = '".$_REQUEST['otros_2']."' ,
`fc_2` = '".$_REQUEST['fc_2']."' ,
`fres_2` = '".$_REQUEST['fres_2']."' ,
`acos_2` = '".$_REQUEST['acos_2']."' ,
`senta_2` = '".$_REQUEST['senta_2']."' ,
`pie_2` = '".$_REQUEST['pie_2']."' ,
`tempe_1` = '".$_REQUEST['tempe_1']."' ,
`tempe_2` = '".$_REQUEST['tempe_2']."' ,
`peso_2` = '".$_REQUEST['peso_2']."' ,
`imc_2` = '".$_REQUEST['imc_2']."' ,
`cintura_2` = '".$_REQUEST['cintura_2']."' ,
`oidod_2` = '".$_REQUEST['oidod_2']."' ,
`oido_i2` = '".$_REQUEST['oido_i2']."' ,
`ambos2` = '".$_REQUEST['ambos2']."' ,
`ojod_2` = '".$_REQUEST['ojod_2']."' ,
`ojoi_2` = '".$_REQUEST['ojoi_2']."' ,
`ojoam_2` = '".$_REQUEST['ojoam_2']."' ,
`glicemia_1` = '".$_REQUEST['glicemia_1']."' ,
`glicemia_2` = '".$_REQUEST['glicemia_2']."' ,
`creati_1` = '".$_REQUEST['creati_1']."' ,
`creati_2` = '".$_REQUEST['creati_2']."' ,
`uro_1` = '".$_REQUEST['uro_1']."' ,
`uro_2` = '".$_REQUEST['uro_2']."' ,
`otros2_1` = '".$_REQUEST['otros2_1']."' ,
`otros2_2` = '".$_REQUEST['otros2_2']."' ,
`tratam_1` = '".$_REQUEST['tratam_1']."' ,
`tratam_2` = '".$_REQUEST['tratam_2']."' ,
`hora_fin` = '".$_REQUEST['hora_fin']."' ,
`hora_inicio` = '".$_REQUEST['hora_inicio']."' ,
`fecha` = '".$_REQUEST['fecha']."' ,
`edad` = '".$_REQUEST['edad']."' ,
`cardio_1` = '".$_REQUEST['cardio_1']."' ,
`cardio_2` = '".$_REQUEST['cardio_2']."' ,
`cintura_1` = '".$_REQUEST['cintura_1']."' ,
`tacto_1` = '".$_REQUEST['tacto_1']."' ,
`tacto_2` = '".$_REQUEST['tacto_2']."' WHERE `idhc_riesgo_4` = '".$_REQUEST['idhc_riesgo_4']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_riesgo_4 = 'new';
$sql = "SELECT * from hc_riesgo_4 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_riesgo_4 = $row['idhc_riesgo_4'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$frc = $row['frc'];
$frres = $row['frres'];
$tempe = $row['tempe'];
$acosta = $row['acosta'];
$sentado = $row['sentado'];
$depie = $row['depie'];
$imc = $row['imc'];
$peso = $row['peso'];
$oido_d = $row['oido_d'];
$oido_i = $row['oido_i'];
$oido_ambos = $row['oido_ambos'];
$ojo_d = $row['ojo_d'];
$ojo_i = $row['ojo_i'];
$ojo_ambos = $row['ojo_ambos'];
$cabeza_1 = $row['cabeza_1'];
$cabeza_2 = $row['cabeza_2'];
$cara_1 = $row['cara_1'];
$cara_2 = $row['cara_2'];
$cuello_1 = $row['cuello_1'];
$cuello_2 = $row['cuello_2'];
$pulmon_1 = $row['pulmon_1'];
$pulmon_2 = $row['pulmon_2'];
$adomen_1 = $row['adomen_1'];
$adomen_2 = $row['adomen_2'];
$genito_1 = $row['genito_1'];
$genito_2 = $row['genito_2'];
$osteo_1 = $row['osteo_1'];
$osteo_2 = $row['osteo_2'];
$nervio_1 = $row['nervio_1'];
$nervio_2 = $row['nervio_2'];
$linfa_1 = $row['linfa_1'];
$linfa_2 = $row['linfa_2'];
$piel_1 = $row['piel_1'];
$piel_2 = $row['piel_2'];
$mamas_1 = $row['mamas_1'];
$mamas_2 = $row['mamas_2'];
$otros_1 = $row['otros_1'];
$otros_2 = $row['otros_2'];
$fc_2 = $row['fc_2'];
$fres_2 = $row['fres_2'];
$acos_2 = $row['acos_2'];
$senta_2 = $row['senta_2'];
$pie_2 = $row['pie_2'];
$tempe_1 = $row['tempe_1'];
$tempe_2 = $row['tempe_2'];
$peso_2 = $row['peso_2'];
$imc_2 = $row['imc_2'];
$cintura_2 = $row['cintura_2'];
$oidod_2 = $row['oidod_2'];
$oido_i2 = $row['oido_i2'];
$ambos2 = $row['ambos2'];
$ojod_2 = $row['ojod_2'];
$ojoi_2 = $row['ojoi_2'];
$ojoam_2 = $row['ojoam_2'];
$glicemia_1 = $row['glicemia_1'];
$glicemia_2 = $row['glicemia_2'];
$creati_1 = $row['creati_1'];
$creati_2 = $row['creati_2'];
$uro_1 = $row['uro_1'];
$uro_2 = $row['uro_2'];
$otros2_1 = $row['otros2_1'];
$otros2_2 = $row['otros2_2'];
$tratam_1 = $row['tratam_1'];
$tratam_2 = $row['tratam_2'];
$hora_fin = $row['hora_fin'];
$hora_inicio = $row['hora_inicio'];
$fecha = $row['fecha'];
$edad = $row['edad'];
$cardio_1 = $row['cardio_1'];
$cardio_2 = $row['cardio_2'];
$cintura_1 = $row['cintura_1'];
$tacto_1 = $row['tacto_1'];
$tacto_2 = $row['tacto_2'];
break; }

?>
<script>

$(function(){

$("#close-hc_riesgo_4").click(function(){
$("#open-hc_riesgo_4").show();
$(this).hide();
$("#content-hc_riesgo_4").hide('slow');
});

$("#open-hc_riesgo_4").click(function(){
$("#close-hc_riesgo_4").show();
$(this).hide();
$("#content-hc_riesgo_4").show('slow');
});

});

</script>
<fieldset id="hc_riesgo_4">
<legend align="left"> <div class="arrow-c" id="close-hc_riesgo_4"></div> <div class="arrow-o" id="open-hc_riesgo_4" ></div> <font>PROGRAMA INTEGRAL GRUPO DE RIESGOS 4</font></legend>
<div id="content-hc_riesgo_4">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_riesgo_4" id="guardar_hc_riesgo_4" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_riesgo_4" name="form_hc_riesgo_4" action="<?php echo @$action_form_hc_riesgo_4 ?>#hc_riesgo_4" method="post">

<input type="hidden" id="id_hc_riesgo_4" name="id_hc_riesgo_4" value="<?php echo @$id_hc_riesgo_4 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_riesgo_4" name="idhc_riesgo_4" value="<?php echo @$idhc_riesgo_4; ?>" />

<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="193" />
  <col width="130" />
  <col width="83" />
  <tr height="19">
    <td height="19" width="205">HORA    INICIO</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="hora_inicio" name="hora_inicio" value="<?php echo @$hora_inicio; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">FECHA</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="fecha" name="fecha" value="<?php echo @$fecha; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">EDAD</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="edad" name="edad" value="<?php echo @$edad; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">F. CARDIACA</td>
    <td width="175"><input type="text" class="input_txt valid" id="frc" name="frc" value="<?php echo @$frc; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="fc_2" name="fc_2" value="<?php echo @$fc_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">F. RESPIRATORIA</td>
    <td width="175"><input type="text" class="input_txt valid" id="frres" name="frres" value="<?php echo @$frres; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="fres_2" name="fres_2" value="<?php echo @$fres_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">TENSION    ARTERIAL</td>
  </tr>
  <tr height="19">
    <td height="19" width="205">ACOSTADO</td>
    <td width="175"><input type="text" class="input_txt valid" id="acosta" name="acosta" value="<?php echo @$acosta; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="acos_2" name="acos_2" value="<?php echo @$acos_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">SENTADO</td>
    <td width="175"><input type="text" class="input_txt valid" id="sentado" name="sentado" value="<?php echo @$sentado; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="senta_2" name="senta_2" value="<?php echo @$senta_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">DE PIE</td>
    <td width="175"><input type="text" class="input_txt valid" id="depie" name="depie" value="<?php echo @$depie; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="pie_2" name="pie_2" value="<?php echo @$pie_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">TEMPERATURA</td>
    <td width="175"><input type="text" class="input_txt valid" id="tempe_1" name="tempe_1" value="<?php echo @$tempe_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="tempe_2" name="tempe_2" value="<?php echo @$tempe_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">PESO</td>
    <td width="175"><input type="text" class="input_txt valid" id="peso" name="peso" value="<?php echo @$peso; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="peso_2" name="peso_2" value="<?php echo @$peso_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">IMC</td>
    <td width="175"><input type="text" class="input_txt valid" id="imc" name="imc" value="<?php echo @$imc; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="imc_2" name="imc_2" value="<?php echo @$imc_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">RELACION CINTURA /CADERA</td>
    <td width="175"><input type="text" class="input_txt valid" id="cintura_1" name="cintura_1" value="<?php echo @$cintura_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cintura_2" name="cintura_2" value="<?php echo @$cintura_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">AGUDEZA    AUDITIVA</td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OIDO DERECHO</td>
    <td width="175"><input type="text" class="input_txt valid" id="oido_d" name="oido_d" value="<?php echo @$oido_d; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="oidod_2" name="oidod_2" value="<?php echo @$oidod_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OIDO IZQUIERDO</td>
    <td width="175"><input type="text" class="input_txt valid" id="oido_i" name="oido_i" value="<?php echo @$oido_i; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="oido_i2" name="oido_i2" value="<?php echo @$oido_i2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">AMBOS</td>
    <td width="175"><input type="text" class="input_txt valid" id="oido_ambos" name="oido_ambos" value="<?php echo @$oido_ambos; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="ambos2" name="ambos2" value="<?php echo @$ambos2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">AGUDEZA    VISUAL Y FONDO DE OJO</td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OJO DERECHO</td>
    <td width="175"><input type="text" class="input_txt valid" id="ojo_d" name="ojo_d" value="<?php echo @$ojo_d; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="ojod_2" name="ojod_2" value="<?php echo @$ojod_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OJO IZQUIERDO</td>
    <td width="175"><input type="text" class="input_txt valid" id="ojo_i" name="ojo_i" value="<?php echo @$ojo_i; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="ojoi_2" name="ojoi_2" value="<?php echo @$ojoi_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">AMBOS </td>
    <td width="175"><input type="text" class="input_txt valid" id="ojo_ambos" name="ojo_ambos" value="<?php echo @$ojo_ambos; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="ojoam_2" name="ojoam_2" value="<?php echo @$ojoam_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">SISTEMAS</td>
  </tr>
  <tr height="19">
    <td height="19" width="205">CABEZA</td>
    <td width="175"><input type="text" class="input_txt valid" id="cabeza_1" name="cabeza_1" value="<?php echo @$cabeza_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cabeza_2" name="cabeza_2" value="<?php echo @$cabeza_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">CARA</td>
    <td width="175"><input type="text" class="input_txt valid" id="cara_1" name="cara_1" value="<?php echo @$cara_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cara_2" name="cara_2" value="<?php echo @$cara_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">CUELLO</td>
    <td width="175"><input type="text" class="input_txt valid" id="cuello_1" name="cuello_1" value="<?php echo @$cuello_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cuello_2" name="cuello_2" value="<?php echo @$cuello_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">CARDIOVASCULAR</td>
    <td width="175"><input type="text" class="input_txt valid" id="cardio_1" name="cardio_1" value="<?php echo @$cardio_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="cardio_2" name="cardio_2" value="<?php echo @$cardio_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">PULMONAR</td>
    <td width="175"><input type="text" class="input_txt valid" id="pulmon_1" name="pulmon_1" value="<?php echo @$pulmon_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="pulmon_2" name="pulmon_2" value="<?php echo @$pulmon_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">MAMAS</td>
    <td width="175"><input type="text" class="input_txt valid" id="mamas_1" name="mamas_1" value="<?php echo @$mamas_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="mamas_3" name="mamas_3" value="<?php echo @$mamas_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">ABODOMEN</td>
    <td width="175"><input type="text" class="input_txt valid" id="adomen_1" name="adomen_1" value="<?php echo @$adomen_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="adomen_2" name="adomen_2" value="<?php echo @$adomen_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">GENITOURINARIO</td>
    <td width="175"><input type="text" class="input_txt valid" id="genito_1" name="genito_1" value="<?php echo @$genito_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="genito_2" name="genito_2" value="<?php echo @$genito_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">TACTO RECTAL</td>
    <td width="175"><input type="text" class="input_txt valid" id="tacto_1" name="tacto_1" value="<?php echo @$tacto_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="tacto_2" name="tacto_2" value="<?php echo @$tacto_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">S. OSTEOMUSCULAR</td>
    <td width="175"><input type="text" class="input_txt valid" id="osteo_1" name="osteo_1" value="<?php echo @$osteo_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="osteo_2" name="osteo_2" value="<?php echo @$osteo_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">S. NERVIOSO</td>
    <td width="175"><input type="text" class="input_txt valid" id="nervio_1" name="nervio_1" value="<?php echo @$nervio_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="nervio_2" name="nervio_2" value="<?php echo @$nervio_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">S. LINFATICO</td>
    <td width="175"><input type="text" class="input_txt valid" id="linfa_1" name="linfa_1" value="<?php echo @$linfa_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="linfa_2" name="linfa_2" value="<?php echo @$linfa_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">PIEL Y ANEXOS</td>
    <td width="175"><input type="text" class="input_txt valid" id="piel_1" name="piel_1" value="<?php echo @$piel_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="piel_2" name="piel_2" value="<?php echo @$piel_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OTROS</td>
    <td width="175"><input type="text" class="input_txt valid" id="otros_3" name="otros_3" value="<?php echo @$otros_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="otros_4" name="otros_4" value="<?php echo @$otros_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">LABORATORIOS    QUE SE ORDENAN</td>
  </tr>
  <tr height="19">
    <td height="19" width="205">GLICEMIA</td>
    <td width="175"><input type="text" class="input_txt valid" id="glicemia_1" name="glicemia_1" value="<?php echo @$glicemia_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="glicemia_2" name="glicemia_2" value="<?php echo @$glicemia_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">CREATININA</td>
    <td width="175"><input type="text" class="input_txt valid" id="creati_1" name="creati_1" value="<?php echo @$creati_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="creati_2" name="creati_2" value="<?php echo @$creati_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">UROANALISIS</td>
    <td width="175"><input type="text" class="input_txt valid" id="uro_1" name="uro_1" value="<?php echo @$uro_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="uro_2" name="uro_2" value="<?php echo @$uro_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">OTROS</td>
    <td width="175"><input type="text" class="input_txt valid" id="otros2_1" name="otros2_1" value="<?php echo @$otros2_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="otros2_2" name="otros2_2" value="<?php echo @$otros2_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">TRATAMIENTO</td>
    <td width="175"><input type="text" class="input_txt valid" id="tratam_1" name="tratam_1" value="<?php echo @$tratam_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="tratam_2" name="tratam_2" value="<?php echo @$tratam_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="205">HORA FINALIZACION</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="hora_fin" name="hora_fin" value="<?php echo @$hora_fin; ?>" /></td>
  </tr>
</table>
<?php echo @$button ?>
</form><br>
</div>
</fieldset>