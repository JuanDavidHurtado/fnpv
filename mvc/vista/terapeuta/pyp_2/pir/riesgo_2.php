<?php
if (isset($_REQUEST['guardar_hc_riesgo_2']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_riesgo_2'] == 'new') {

$sql = "INSERT INTO hc_riesgo_2 (
`idhc_riesgo_2`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`asma`,
`hiper`,
`hipo`,
`obesidad`,
`epoc`,
`cancer`,
`ets`,
`osteop`,
`gastri`,
`alergico`,
`alcoho`,
`tropical`,
`cefalea`,
`lipo`,
`vertigo`,
`tinitu`,
`sudora`,
`precor`,
`pie_dia`,
`vision`,
`palpita`,
`epixta`,
`disnea`,
`disnea2`,
`disnea3`,
`desnea4`,
`ulcera`,
`ortop`,
`polifagia`,
`poliuria`,
`hematuria`,
`disuria`,
`dolor`,
`lesion`,
`edema`,
`motivo`,
`aparicion`,
`localiza`,
`inten`,
`conco`,
`irradi`,
`alivio`,
`frc`,
`frres`,
`tempe`,
`acosta`,
`sentado`,
`depie`,
`imc`,
`peso`,
`talla`,
`cintura2`,
`cadera`,
`oido_d`,
`oido_i`,
`oido_ambos`,
`cintura`,
`ojo_d`,
`ojo_i`,
`fondo_ojo_d`,
`fondo_ojo_i`,
`cabeza_1`,
`cabeza_2`,
`cabeza_3`,
`cara_1`,
`cara_2`,
`cara_3`,
`cuello_1`,
`cuello_2`,
`cuello_3`,
`pulmon_1`,
`pulmon_2`,
`pulmon_3`,
`adomen_1`,
`adomen_2`,
`adomen_3`,
`genito_1`,
`genito_2`,
`genito_3`,
`osteo_1`,
`osteo_2`,
`osteo_3`,
`nervio_1`,
`nervio_2`,
`nervio_3`,
`linfa_1`,
`linfa_2`,
`linfa_3`,
`piel_1`,
`piel_2`,
`piel_3`,
`polidipcia`,
`ojo_ambos`
) VALUES (
NULL,
'".$_REQUEST['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['asma']."' ,
'".$_REQUEST['hiper']."' ,
'".$_REQUEST['hipo']."' ,
'".$_REQUEST['obesidad']."' ,
'".$_REQUEST['epoc']."' ,
'".$_REQUEST['cancer']."' ,
'".$_REQUEST['ets']."' ,
'".$_REQUEST['osteop']."' ,
'".$_REQUEST['gastri']."' ,
'".$_REQUEST['alergico']."' ,
'".$_REQUEST['alcoho']."' ,
'".$_REQUEST['tropical']."' ,
'".$_REQUEST['cefalea']."' ,
'".$_REQUEST['lipo']."' ,
'".$_REQUEST['vertigo']."' ,
'".$_REQUEST['tinitu']."' ,
'".$_REQUEST['sudora']."' ,
'".$_REQUEST['precor']."' ,
'".$_REQUEST['pie_dia']."' ,
'".$_REQUEST['vision']."' ,
'".$_REQUEST['palpita']."' ,
'".$_REQUEST['epixta']."' ,
'".$_REQUEST['disnea']."' ,
'".$_REQUEST['disnea2']."' ,
'".$_REQUEST['disnea3']."' ,
'".$_REQUEST['desnea4']."' ,
'".$_REQUEST['ulcera']."' ,
'".$_REQUEST['ortop']."' ,
'".$_REQUEST['polifagia']."' ,
'".$_REQUEST['poliuria']."' ,
'".$_REQUEST['hematuria']."' ,
'".$_REQUEST['disuria']."' ,
'".$_REQUEST['dolor']."' ,
'".$_REQUEST['lesion']."' ,
'".$_REQUEST['edema']."' ,
'".$_REQUEST['motivo']."' ,
'".$_REQUEST['aparicion']."' ,
'".$_REQUEST['localiza']."' ,
'".$_REQUEST['inten']."' ,
'".$_REQUEST['conco']."' ,
'".$_REQUEST['irradi']."' ,
'".$_REQUEST['alivio']."' ,
'".$_REQUEST['frc']."' ,
'".$_REQUEST['frres']."' ,
'".$_REQUEST['tempe']."' ,
'".$_REQUEST['acosta']."' ,
'".$_REQUEST['sentado']."' ,
'".$_REQUEST['depie']."' ,
'".$_REQUEST['imc']."' ,
'".$_REQUEST['peso']."' ,
'".$_REQUEST['talla']."' ,
'".$_REQUEST['cintura2']."' ,
'".$_REQUEST['cadera']."' ,
'".$_REQUEST['oido_d']."' ,
'".$_REQUEST['oido_i']."' ,
'".$_REQUEST['oido_ambos']."' ,
'".$_REQUEST['cintura']."' ,
'".$_REQUEST['ojo_d']."' ,
'".$_REQUEST['ojo_i']."' ,
'".$_REQUEST['fondo_ojo_d']."' ,
'".$_REQUEST['fondo_ojo_i']."' ,
'".$_REQUEST['cabeza_1']."' ,
'".$_REQUEST['cabeza_2']."' ,
'".$_REQUEST['cabeza_3']."' ,
'".$_REQUEST['cara_1']."' ,
'".$_REQUEST['cara_2']."' ,
'".$_REQUEST['cara_3']."' ,
'".$_REQUEST['cuello_1']."' ,
'".$_REQUEST['cuello_2']."' ,
'".$_REQUEST['cuello_3']."' ,
'".$_REQUEST['pulmon_1']."' ,
'".$_REQUEST['pulmon_2']."' ,
'".$_REQUEST['pulmon_3']."' ,
'".$_REQUEST['adomen_1']."' ,
'".$_REQUEST['adomen_2']."' ,
'".$_REQUEST['adomen_3']."' ,
'".$_REQUEST['genito_1']."' ,
'".$_REQUEST['genito_2']."' ,
'".$_REQUEST['genito_3']."' ,
'".$_REQUEST['osteo_1']."' ,
'".$_REQUEST['osteo_2']."' ,
'".$_REQUEST['osteo_3']."' ,
'".$_REQUEST['nervio_1']."' ,
'".$_REQUEST['nervio_2']."' ,
'".$_REQUEST['nervio_3']."' ,
'".$_REQUEST['linfa_1']."' ,
'".$_REQUEST['linfa_2']."' ,
'".$_REQUEST['linfa_3']."' ,
'".$_REQUEST['piel_1']."' ,
'".$_REQUEST['piel_2']."' ,
'".$_REQUEST['piel_3']."' ,
'".$_REQUEST['polidipcia']."' ,
'".$_REQUEST['ojo_ambos']."'
) ";


} else if ($_REQUEST['idhc_riesgo_2'] != '') {

$sql = "UPDATE hc_riesgo_2 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`asma` = '".$_REQUEST['asma']."' ,
`hiper` = '".$_REQUEST['hiper']."' ,
`hipo` = '".$_REQUEST['hipo']."' ,
`obesidad` = '".$_REQUEST['obesidad']."' ,
`epoc` = '".$_REQUEST['epoc']."' ,
`cancer` = '".$_REQUEST['cancer']."' ,
`ets` = '".$_REQUEST['ets']."' ,
`osteop` = '".$_REQUEST['osteop']."' ,
`gastri` = '".$_REQUEST['gastri']."' ,
`alergico` = '".$_REQUEST['alergico']."' ,
`alcoho` = '".$_REQUEST['alcoho']."' ,
`tropical` = '".$_REQUEST['tropical']."' ,
`cefalea` = '".$_REQUEST['cefalea']."' ,
`lipo` = '".$_REQUEST['lipo']."' ,
`vertigo` = '".$_REQUEST['vertigo']."' ,
`tinitu` = '".$_REQUEST['tinitu']."' ,
`sudora` = '".$_REQUEST['sudora']."' ,
`precor` = '".$_REQUEST['precor']."' ,
`pie_dia` = '".$_REQUEST['pie_dia']."' ,
`vision` = '".$_REQUEST['vision']."' ,
`palpita` = '".$_REQUEST['palpita']."' ,
`epixta` = '".$_REQUEST['epixta']."' ,
`disnea` = '".$_REQUEST['disnea']."' ,
`disnea2` = '".$_REQUEST['disnea2']."' ,
`disnea3` = '".$_REQUEST['disnea3']."' ,
`desnea4` = '".$_REQUEST['desnea4']."' ,
`ulcera` = '".$_REQUEST['ulcera']."' ,
`ortop` = '".$_REQUEST['ortop']."' ,
`polifagia` = '".$_REQUEST['polifagia']."' ,
`poliuria` = '".$_REQUEST['poliuria']."' ,
`hematuria` = '".$_REQUEST['hematuria']."' ,
`disuria` = '".$_REQUEST['disuria']."' ,
`dolor` = '".$_REQUEST['dolor']."' ,
`lesion` = '".$_REQUEST['lesion']."' ,
`edema` = '".$_REQUEST['edema']."' ,
`motivo` = '".$_REQUEST['motivo']."' ,
`aparicion` = '".$_REQUEST['aparicion']."' ,
`localiza` = '".$_REQUEST['localiza']."' ,
`inten` = '".$_REQUEST['inten']."' ,
`conco` = '".$_REQUEST['conco']."' ,
`irradi` = '".$_REQUEST['irradi']."' ,
`alivio` = '".$_REQUEST['alivio']."' ,
`frc` = '".$_REQUEST['frc']."' ,
`frres` = '".$_REQUEST['frres']."' ,
`tempe` = '".$_REQUEST['tempe']."' ,
`acosta` = '".$_REQUEST['acosta']."' ,
`sentado` = '".$_REQUEST['sentado']."' ,
`depie` = '".$_REQUEST['depie']."' ,
`imc` = '".$_REQUEST['imc']."' ,
`peso` = '".$_REQUEST['peso']."' ,
`talla` = '".$_REQUEST['talla']."' ,
`cintura2` = '".$_REQUEST['cintura2']."' ,
`cadera` = '".$_REQUEST['cadera']."' ,
`oido_d` = '".$_REQUEST['oido_d']."' ,
`oido_i` = '".$_REQUEST['oido_i']."' ,
`oido_ambos` = '".$_REQUEST['oido_ambos']."' ,
`cintura` = '".$_REQUEST['cintura']."' ,
`ojo_d` = '".$_REQUEST['ojo_d']."' ,
`ojo_i` = '".$_REQUEST['ojo_i']."' ,
`fondo_ojo_d` = '".$_REQUEST['fondo_ojo_d']."' ,
`fondo_ojo_i` = '".$_REQUEST['fondo_ojo_i']."' ,
`cabeza_1` = '".$_REQUEST['cabeza_1']."' ,
`cabeza_2` = '".$_REQUEST['cabeza_2']."' ,
`cabeza_3` = '".$_REQUEST['cabeza_3']."' ,
`cara_1` = '".$_REQUEST['cara_1']."' ,
`cara_2` = '".$_REQUEST['cara_2']."' ,
`cara_3` = '".$_REQUEST['cara_3']."' ,
`cuello_1` = '".$_REQUEST['cuello_1']."' ,
`cuello_2` = '".$_REQUEST['cuello_2']."' ,
`cuello_3` = '".$_REQUEST['cuello_3']."' ,
`pulmon_1` = '".$_REQUEST['pulmon_1']."' ,
`pulmon_2` = '".$_REQUEST['pulmon_2']."' ,
`pulmon_3` = '".$_REQUEST['pulmon_3']."' ,
`adomen_1` = '".$_REQUEST['adomen_1']."' ,
`adomen_2` = '".$_REQUEST['adomen_2']."' ,
`adomen_3` = '".$_REQUEST['adomen_3']."' ,
`genito_1` = '".$_REQUEST['genito_1']."' ,
`genito_2` = '".$_REQUEST['genito_2']."' ,
`genito_3` = '".$_REQUEST['genito_3']."' ,
`osteo_1` = '".$_REQUEST['osteo_1']."' ,
`osteo_2` = '".$_REQUEST['osteo_2']."' ,
`osteo_3` = '".$_REQUEST['osteo_3']."' ,
`nervio_1` = '".$_REQUEST['nervio_1']."' ,
`nervio_2` = '".$_REQUEST['nervio_2']."' ,
`nervio_3` = '".$_REQUEST['nervio_3']."' ,
`linfa_1` = '".$_REQUEST['linfa_1']."' ,
`linfa_2` = '".$_REQUEST['linfa_2']."' ,
`linfa_3` = '".$_REQUEST['linfa_3']."' ,
`piel_1` = '".$_REQUEST['piel_1']."' ,
`piel_2` = '".$_REQUEST['piel_2']."' ,
`piel_3` = '".$_REQUEST['piel_3']."' ,
`polidipcia` = '".$_REQUEST['polidipcia']."' ,
`ojo_ambos` = '".$_REQUEST['ojo_ambos']."' WHERE `idhc_riesgo_2` = '".$_REQUEST['idhc_riesgo_2']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_riesgo_2 = 'new';
$sql = "SELECT * from hc_riesgo_2 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_riesgo_2 = $row['idhc_riesgo_2'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$asma = $row['asma'];
$hiper = $row['hiper'];
$hipo = $row['hipo'];
$obesidad = $row['obesidad'];
$epoc = $row['epoc'];
$cancer = $row['cancer'];
$ets = $row['ets'];
$osteop = $row['osteop'];
$gastri = $row['gastri'];
$alergico = $row['alergico'];
$alcoho = $row['alcoho'];
$tropical = $row['tropical'];
$cefalea = $row['cefalea'];
$lipo = $row['lipo'];
$vertigo = $row['vertigo'];
$tinitu = $row['tinitu'];
$sudora = $row['sudora'];
$precor = $row['precor'];
$pie_dia = $row['pie_dia'];
$vision = $row['vision'];
$palpita = $row['palpita'];
$epixta = $row['epixta'];
$disnea = $row['disnea'];
$disnea2 = $row['disnea2'];
$disnea3 = $row['disnea3'];
$desnea4 = $row['desnea4'];
$ulcera = $row['ulcera'];
$ortop = $row['ortop'];
$polifagia = $row['polifagia'];
$poliuria = $row['poliuria'];
$hematuria = $row['hematuria'];
$disuria = $row['disuria'];
$dolor = $row['dolor'];
$lesion = $row['lesion'];
$edema = $row['edema'];
$motivo = $row['motivo'];
$aparicion = $row['aparicion'];
$localiza = $row['localiza'];
$inten = $row['inten'];
$conco = $row['conco'];
$irradi = $row['irradi'];
$alivio = $row['alivio'];
$frc = $row['frc'];
$frres = $row['frres'];
$tempe = $row['tempe'];
$acosta = $row['acosta'];
$sentado = $row['sentado'];
$depie = $row['depie'];
$imc = $row['imc'];
$peso = $row['peso'];
$talla = $row['talla'];
$cintura2 = $row['cintura2'];
$cadera = $row['cadera'];
$oido_d = $row['oido_d'];
$oido_i = $row['oido_i'];
$oido_ambos = $row['oido_ambos'];
$cintura = $row['cintura'];
$ojo_d = $row['ojo_d'];
$ojo_i = $row['ojo_i'];
$fondo_ojo_d = $row['fondo_ojo_d'];
$fondo_ojo_i = $row['fondo_ojo_i'];
$cabeza_1 = $row['cabeza_1'];
$cabeza_2 = $row['cabeza_2'];
$cabeza_3 = $row['cabeza_3'];
$cara_1 = $row['cara_1'];
$cara_2 = $row['cara_2'];
$cara_3 = $row['cara_3'];
$cuello_1 = $row['cuello_1'];
$cuello_2 = $row['cuello_2'];
$cuello_3 = $row['cuello_3'];
$pulmon_1 = $row['pulmon_1'];
$pulmon_2 = $row['pulmon_2'];
$pulmon_3 = $row['pulmon_3'];
$adomen_1 = $row['adomen_1'];
$adomen_2 = $row['adomen_2'];
$adomen_3 = $row['adomen_3'];
$genito_1 = $row['genito_1'];
$genito_2 = $row['genito_2'];
$genito_3 = $row['genito_3'];
$osteo_1 = $row['osteo_1'];
$osteo_2 = $row['osteo_2'];
$osteo_3 = $row['osteo_3'];
$nervio_1 = $row['nervio_1'];
$nervio_2 = $row['nervio_2'];
$nervio_3 = $row['nervio_3'];
$linfa_1 = $row['linfa_1'];
$linfa_2 = $row['linfa_2'];
$linfa_3 = $row['linfa_3'];
$piel_1 = $row['piel_1'];
$piel_2 = $row['piel_2'];
$piel_3 = $row['piel_3'];
$polidipcia = $row['polidipcia'];
$ojo_ambos = $row['ojo_ambos'];
break; }

?>
<script>

$(function(){

$("#close-hc_riesgo_2").click(function(){
$("#open-hc_riesgo_2").show();
$(this).hide();
$("#content-hc_riesgo_2").hide('slow');
});

$("#open-hc_riesgo_2").click(function(){
$("#close-hc_riesgo_2").show();
$(this).hide();
$("#content-hc_riesgo_2").show('slow');
});

});

</script>
<fieldset id="hc_riesgo_2">
<legend align="left"> <div class="arrow-c" id="close-hc_riesgo_2"></div> <div class="arrow-o" id="open-hc_riesgo_2" ></div> <font> PROGRAMA INTEGRAL GRUPO DE RIESGOS 2</font></legend>
<div id="content-hc_riesgo_2">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_riesgo_2" id="guardar_hc_riesgo_2" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_riesgo_2" name="form_hc_riesgo_2" action="<?php echo @$action_form_hc_riesgo_2 ?>#hc_riesgo_2" method="post">

<input type="hidden" id="id_hc_riesgo_2" name="id_hc_riesgo_2" value="<?php echo @$id_hc_riesgo_2 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_riesgo_2" name="idhc_riesgo_2" value="<?php echo @$idhc_riesgo_2; ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_riesgo_2" name="idhc_riesgo_2" value="<?php echo @$idhc_riesgo_2; ?>" />

<div align="center">PROGRAMA INTEGRAL GRUPO DE RIESGO 2
</div>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <tr height="19">
    <td height="19" width="131">ASMA</td>
    <td width="121"><input type="text" class="input_txt valid" id="asma" name="asma" value="<?php echo @$asma; ?>" /></td>
    <td width="198">ETS</td>
    <td width="198"><input type="text" class="input_txt valid" id="ets" name="ets" value="<?php echo @$ets; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">HIPERTIROlDISMO</td>
    <td width="121"><input type="text" class="input_txt valid" id="hiper" name="hiper" value="<?php echo @$hiper; ?>" /></td>
    <td width="198">OSTEOPOROSIS</td>
    <td width="198"><input type="text" class="input_txt valid" id="osteop" name="osteop" value="<?php echo @$osteop; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">HIPOTIROIDISMO</td>
    <td width="121"><input type="text" class="input_txt valid" id="hipo" name="hipo" value="<?php echo @$hipo; ?>" /></td>
    <td width="198">GASTRITIS</td>
    <td width="198"><input type="text" class="input_txt valid" id="gastri" name="gastri" value="<?php echo @$gastri; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">OBESIDAD</td>
    <td width="121"><input type="text" class="input_txt valid" id="obesidad" name="obesidad" value="<?php echo @$obesidad; ?>" /></td>
    <td width="198">ALERGICOS</td>
    <td width="198"><input type="text" class="input_txt valid" id="alergico" name="alergico" value="<?php echo @$alergico; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">EPOC</td>
    <td width="121"><input type="text" class="input_txt valid" id="epoc" name="epoc" value="<?php echo @$epoc; ?>" /></td>
    <td width="198">ALCOHOLISMO</td>
    <td width="198"><input type="text" class="input_txt valid" id="alcoho" name="alcoho" value="<?php echo @$alcoho; ?>" /></td>
  </tr>
  <tr height="17">
    <td height="17" width="131">CÁNCER</td>
    <td width="121"><input type="text" class="input_txt valid" id="cancer" name="cancer" value="<?php echo @$cancer; ?>" /></td>
    <td width="198">ENFERMEDAD    TROPICAL</td>
    <td width="198"><input type="text" class="input_txt valid" id="tropical" name="tropical" value="<?php echo @$tropical; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <col width="83" />
  <tr height="19">
    <td colspan="4" height="19" width="533">REVISIÓN POR SISTEMAS</td>
  </tr>
  <tr height="18">
    <td height="18" width="131">CEFALEA</td>
    <td width="121"><input type="text" class="input_txt valid" id="cefalea" name="cefalea" value="<?php echo @$cefalea; ?>" /></td>
    <td width="198">DISNEA    MEDIANOS ESFUERZOS</td>
    <td width="83"><input type="text" class="input_txt valid" id="disnea3" name="disnea3" value="<?php echo @$disnea3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">LIPOTIMIA</td>
    <td width="121"><input type="text" class="input_txt valid" id="lipo" name="lipo" value="<?php echo @$lipo; ?>" /></td>
    <td width="198">DISNEA    GRANDES ESFUERZOS</td>
    <td width="83"><input type="text" class="input_txt valid" id="desnea4" name="desnea4" value="<?php echo @$desnea4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">VÉRTIGO</td>
    <td width="121"><input type="text" class="input_txt valid" id="vertigo" name="vertigo" value="<?php echo @$vertigo; ?>" /></td>
    <td width="198">ULCERA    VARICOSA</td>
    <td width="83"><input type="text" class="input_txt valid" id="ulcera" name="ulcera" value="<?php echo @$ulcera; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">TINITUS</td>
    <td width="121"><input type="text" class="input_txt valid" id="tinitu" name="tinitu" value="<?php echo @$tinitu; ?>" /></td>
    <td width="198">ORTOPNSA</td>
    <td width="83"><input type="text" class="input_txt valid" id="ortop" name="ortop" value="<?php echo @$ortop; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">SUDORACION</td>
    <td width="121"><input type="text" class="input_txt valid" id="sudora" name="sudora" value="<?php echo @$sudora; ?>" /></td>
    <td width="198">POLIFAGIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="polifagia" name="polifagia" value="<?php echo @$polifagia; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">PRECORDIALGIA</td>
    <td width="121"><input type="text" class="input_txt valid" id="precor" name="precor" value="<?php echo @$precor; ?>" /></td>
    <td width="198">POLIURIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="poliuria" name="poliuria" value="<?php echo @$poliuria; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">PIE DIABÉTICO</td>
    <td width="121"><input type="text" class="input_txt valid" id="pie_dia" name="pie_dia" value="<?php echo @$pie_dia; ?>" /></td>
    <td width="198">POLIDIPSIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="polidipcia" name="polidipcia" value="<?php echo @$polidipcia; ?>" />
</td>
  </tr>
  <tr height="19">
    <td height="19" width="131">VISIÓN ALTERAADA</td>
    <td width="121"><input type="text" class="input_txt valid" id="vision" name="vision" value="<?php echo @$vision; ?>" /></td>
    <td width="198">HEMATURIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="hematuria" name="hematuria" value="<?php echo @$hematuria; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">PALPITACIÓN</td>
    <td width="121"><input type="text" class="input_txt valid" id="palpita" name="palpita" value="<?php echo @$palpita; ?>" /></td>
    <td width="198">DISURIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="disuria" name="disuria" value="<?php echo @$disuria; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">EPIXTASIS</td>
    <td width="121"><input type="text" class="input_txt valid" id="epixta" name="epixta" value="<?php echo @$epixta; ?>" /></td>
    <td width="198">DOLOR    NEURÍTICO</td>
    <td width="83"><input type="text" class="input_txt valid" id="dolor" name="dolor" value="<?php echo @$dolor; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">DISNEA EN REPOSO</td>
    <td width="121"><input type="text" class="input_txt valid" id="disnea" name="disnea" value="<?php echo @$disnea; ?>" /></td>
    <td width="198">LESIÓN    EN PIEL</td>
    <td width="83"><input type="text" class="input_txt valid" id="lesion" name="lesion" value="<?php echo @$lesion; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="131">DISNEA PEQUEÑOS ESFUERZOS</td>
    <td width="121"><input type="text" class="input_txt valid" id="disnea2" name="disnea2" value="<?php echo @$disnea2; ?>" /></td>
    <td width="198">EDEMA</td>
    <td width="83"><input type="text" class="input_txt valid" id="edema" name="edema" value="<?php echo @$edema; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" height="19" width="252">MOTIVO DE CONSULTA</td>
    <td colspan="2" width="281"><input type="text" class="input_txt valid" id="motivo" name="motivo" value="<?php echo @$motivo; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <tr height="19">
    <td colspan="3" height="19" width="450">ENFERMEDAD    ACTUAL</td>
  </tr>
  <tr height="19">
    <td height="19" width="131">APARICIÓN</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="aparicion" name="aparicion" value="<?php echo @$aparicion; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">LOCALIZACIÓN</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="localiza" name="localiza" value="<?php echo @$localiza; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">INTENSIDAD</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="inten" name="inten" value="<?php echo @$inten; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">CONCOMITANCIA</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="conco" name="conco" value="<?php echo @$conco; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">IRRADIACIÓN</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="irradi" name="irradi" value="<?php echo @$irradi; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">ALIVIO</td>
    <td colspan="2" width="319"><input type="text" class="input_txt valid" id="alivio" name="alivio" value="<?php echo @$alivio; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <tr height="19">
    <td colspan="3" height="19"><div align="center">EXAMEN    FISICO</div></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">SIGNOS    VITALES</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">FRECUENCIA    CARDIACA</td>
    <td width="168"><input type="text" class="input_txt valid" id="frc" name="frc" value="<?php echo @$frc; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">FRECUENCIA    RESPIRATORIA</td>
    <td width="168"><input type="text" class="input_txt valid" id="frres" name="frres" value="<?php echo @$frres; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">TEMPERATURA</td>
    <td width="168"><input type="text" class="input_txt valid" id="tempe" name="tempe" value="<?php echo @$tempe; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">TENSIÓN ARTERIAL</td>
  </tr>
  <tr height="19">
    <td height="19" width="260">ACOSTADO</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="acosta" name="acosta" value="<?php echo @$acosta; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">SENTADO</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="sentado" name="sentado" value="<?php echo @$sentado; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">DE PIE</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="depie" name="depie" value="<?php echo @$depie; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">IMC</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="imc" name="imc" value="<?php echo @$imc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">PESO</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="peso" name="peso" value="<?php echo @$peso; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">TALLA</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="talla" name="talla" value="<?php echo @$talla; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">CINTURA/CADERA</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="cintura" name="cintura" value="<?php echo @$cintura; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">CINTURA</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="cintura2" name="cintura2" value="<?php echo @$cintura2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="260">CADERA</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="cadera" name="cadera" value="<?php echo @$cadera; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <col width="83" />
  <tr height="19">
    <td colspan="4" height="19" width="533">EXAMEN DE ÓRGANO DE LOS SENTIDOS</td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38" width="131">AGUDEZA AUDITIVA</td>
    <td width="121">OIDO    DERECHO</td>
    <td width="198">OIDO    IZQUIERDO</td>
    <td width="83">AMBOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="121"><input type="text" class="input_txt valid" id="oido_i" name="oido_i" value="<?php echo @$oido_i; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="oido_ambos" name="oido_ambos" value="<?php echo @$oido_ambos; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oido_d" name="oido_d" value="<?php echo @$oido_d; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38" width="131">AGUDEZA VISUAL</td>
    <td width="121">OJO    DERECHO</td>
    <td width="198">OJO    IZQUIERDO</td>
    <td width="83">AMBOS</td>
  </tr>
  <tr height="19">
    <td height="19" width="121"><input type="text" class="input_txt valid" id="ojo_d" name="ojo_d" value="<?php echo @$ojo_d; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="ojo_i" name="ojo_i" value="<?php echo @$ojo_i; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="ojo_ambos" name="ojo_ambos" value="<?php echo @$ojo_ambos; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="38" width="131">FONDO DE OJO</td>
    <td width="121">OJO    DERECHO</td>
    <td colspan="2" width="281">OJO    IZQUIERDO</td>
  </tr>
  <tr height="19">
    <td height="19" width="121"><input type="text" class="input_txt valid" id="fondo_ojo_i" name="fondo_ojo_i" value="<?php echo @$fondo_ojo_i; ?>" /></td>
    <td colspan="2" width="281"><input type="text" class="input_txt valid" id="fondo_ojo_d" name="fondo_ojo_d" value="<?php echo @$fondo_ojo_d; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="131" />
  <col width="121" />
  <col width="198" />
  <col width="83" span="2" />
  <tr height="19">
    <td height="19" width="131">SISTEMAS</td>
    <td width="121">NORMAL</td>
    <td width="198">ANORMAL</td>
    <td colspan="2" width="166">OBSERVACIÓN</td>
  </tr>
  <tr height="19">
    <td height="19" width="131">CAEBEZA</td>
    <td width="121"><input type="text" class="input_txt valid" id="cabeza_1" name="cabeza_1" value="<?php echo @$cabeza_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="cabeza_2" name="cabeza_2" value="<?php echo @$cabeza_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="cabeza_3" name="cabeza_3" value="<?php echo @$cabeza_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">CARA</td>
    <td width="121"><input type="text" class="input_txt valid" id="cara_1" name="cara_1" value="<?php echo @$cara_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="cara_2" name="cara_2" value="<?php echo @$cara_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="cara_3" name="cara_3" value="<?php echo @$cara_3; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="131">CUELLO CARDIOVASCULAR</td>
    <td width="121"><input type="text" class="input_txt valid" id="cuello_1" name="cuello_1" value="<?php echo @$cuello_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="cuello_2" name="cuello_2" value="<?php echo @$cuello_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="cuello_3" name="cuello_3" value="<?php echo @$cuello_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">PULMONAR</td>
    <td width="121"><input type="text" class="input_txt valid" id="pulmon_1" name="pulmon_1" value="<?php echo @$pulmon_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="pulmon_2" name="pulmon_2" value="<?php echo @$pulmon_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="pulmon_3" name="pulmon_3" value="<?php echo @$pulmon_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">ADOMINAL</td>
    <td width="121"><input type="text" class="input_txt valid" id="adomen_1" name="adomen_1" value="<?php echo @$adomen_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="adomen_2" name="adomen_2" value="<?php echo @$adomen_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="adomen_3" name="adomen_3" value="<?php echo @$adomen_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">GENITOURINARIO</td>
    <td width="121"><input type="text" class="input_txt valid" id="genito_1" name="genito_1" value="<?php echo @$genito_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="genito_2" name="genito_2" value="<?php echo @$genito_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="genito_3" name="genito_3" value="<?php echo @$genito_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">OSTEOMUSCULAR</td>
    <td width="121"><input type="text" class="input_txt valid" id="osteo_1" name="osteo_1" value="<?php echo @$osteo_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="osteo_2" name="osteo_2" value="<?php echo @$osteo_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="osteo_3" name="osteo_3" value="<?php echo @$osteo_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">NERVIOSO</td>
    <td width="121"><input type="text" class="input_txt valid" id="nervio_1" name="nervio_1" value="<?php echo @$nervio_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="nervio_2" name="nervio_2" value="<?php echo @$nervio_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="nervio_3" name="nervio_3" value="<?php echo @$nervio_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">LINFATICO</td>
    <td width="121"><input type="text" class="input_txt valid" id="linfa_1" name="linfa_1" value="<?php echo @$linfa_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="linfa_2" name="linfa_2" value="<?php echo @$linfa_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="linfa_3" name="linfa_3" value="<?php echo @$linfa_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="131">PIEL Y ANEXOS</td>
    <td width="121"><input type="text" class="input_txt valid" id="piel_1" name="piel_1" value="<?php echo @$piel_1; ?>" /></td>
    <td width="198"><input type="text" class="input_txt valid" id="piel_2" name="piel_2" value="<?php echo @$piel_2; ?>" /></td>
    <td colspan="2" width="166"><input type="text" class="input_txt valid" id="piel_3" name="piel_3" value="<?php echo @$piel_3; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>