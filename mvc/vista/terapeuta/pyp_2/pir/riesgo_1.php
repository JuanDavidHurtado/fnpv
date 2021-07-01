<?php
if (isset($_REQUEST['guardar_hc_riesgo1']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_riesgo1'] == 'new') {

$sql = "INSERT INTO hc_riesgo1 (
`idhc_riesgo1`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`escol_1`,
`escol_2`,
`escol_3`,
`escol_4`,
`raza_1`,
`raza_2`,
`raza_3`,
`raza_4`,
`acv`,
`cardio`,
`bislipe`,
`retino`,
`asma`,
`hiper`,
`hipo`,
`obesidad`,
`icc`,
`mmm`,
`angina`,
`arteria`,
`epoc`,
`cancer`,
`osteopo`,
`etc`,
`diabet`,
`diabetes_2`,
`renal`,
`tbc`,
`alergi`,
`gastri`,
`alcoho`,
`tropical`,
`otros_1`,
`gesta_parto`,
`aborto`,
`cesarea`,
`total_contacto`,
`metodo`,
`ultima`,
`autoexa`,
`antigeno`,
`tiempo_1`,
`tiempo_2`,
`tacto`,
`transmision`,
`enojo_1`,
`enojo_2`,
`trago_1`,
`trago_2`,
`culpable_1`,
`culpable`,
`necesidad_1`,
`necesidad_2`,
`cigarro_1`,
`cigarro_2`,
`cigarro_3`,
`humo_1`,
`humo_2`,
`humo_3`,
`deporte_1`,
`deporte_2`,
`deporte_3`,
`deporte_4`,
`nutricion_1`,
`nutricion_2`,
`nutricion_3`,
`nutricion_4`,
`nutricion_5`,
`nutricion_6`,
`hiperten`,
`acv_jct`,
`cardio2`,
`dislipi2`,
`retino2`,
`tabao2`,
`icc2`,
`iam2`,
`angi2`,
`arteri2`,
`hta_ges2`,
`dia2`,
`dia23`,
`renal2`,
`tbc2`,
`salado`,
`frutas`,
`frecuencia`,
`htension`,
`tabaco5`,
`hta_gestacional`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['escol_1']."' ,
'".$_REQUEST['escol_2']."' ,
'".$_REQUEST['escol_3']."' ,
'".$_REQUEST['escol_4']."' ,
'".$_REQUEST['raza_1']."' ,
'".$_REQUEST['raza_2']."' ,
'".$_REQUEST['raza_3']."' ,
'".$_REQUEST['raza_4']."' ,
'".$_REQUEST['acv']."' ,
'".$_REQUEST['cardio']."' ,
'".$_REQUEST['bislipe']."' ,
'".$_REQUEST['retino']."' ,
'".$_REQUEST['asma']."' ,
'".$_REQUEST['hiper']."' ,
'".$_REQUEST['hipo']."' ,
'".$_REQUEST['obesidad']."' ,
'".$_REQUEST['icc']."' ,
'".$_REQUEST['mmm']."' ,
'".$_REQUEST['angina']."' ,
'".$_REQUEST['arteria']."' ,
'".$_REQUEST['epoc']."' ,
'".$_REQUEST['cancer']."' ,
'".$_REQUEST['osteopo']."' ,
'".$_REQUEST['etc']."' ,
'".$_REQUEST['diabet']."' ,
'".$_REQUEST['diabetes_2']."' ,
'".$_REQUEST['renal']."' ,
'".$_REQUEST['tbc']."' ,
'".$_REQUEST['alergi']."' ,
'".$_REQUEST['gastri']."' ,
'".$_REQUEST['alcoho']."' ,
'".$_REQUEST['tropical']."' ,
'".$_REQUEST['otros_1']."' ,
'".$_REQUEST['gesta_parto']."' ,
'".$_REQUEST['aborto']."' ,
'".$_REQUEST['cesarea']."' ,
'".$_REQUEST['total_contacto']."' ,
'".$_REQUEST['metodo']."' ,
'".$_REQUEST['ultima']."' ,
'".$_REQUEST['autoexa']."' ,
'".$_REQUEST['antigeno']."' ,
'".$_REQUEST['tiempo_1']."' ,
'".$_REQUEST['tiempo_2']."' ,
'".$_REQUEST['tacto']."' ,
'".$_REQUEST['transmision']."' ,
'".$_REQUEST['enojo_1']."' ,
'".$_REQUEST['enojo_2']."' ,
'".$_REQUEST['trago_1']."' ,
'".$_REQUEST['trago_2']."' ,
'".$_REQUEST['culpable_1']."' ,
'".$_REQUEST['culpable']."' ,
'".$_REQUEST['necesidad_1']."' ,
'".$_REQUEST['necesidad_2']."' ,
'".$_REQUEST['cigarro_1']."' ,
'".$_REQUEST['cigarro_2']."' ,
'".$_REQUEST['cigarro_3']."' ,
'".$_REQUEST['humo_1']."' ,
'".$_REQUEST['humo_2']."' ,
'".$_REQUEST['humo_3']."' ,
'".$_REQUEST['deporte_1']."' ,
'".$_REQUEST['deporte_2']."' ,
'".$_REQUEST['deporte_3']."' ,
'".$_REQUEST['deporte_4']."' ,
'".$_REQUEST['nutricion_1']."' ,
'".$_REQUEST['nutricion_2']."' ,
'".$_REQUEST['nutricion_3']."' ,
'".$_REQUEST['nutricion_4']."' ,
'".$_REQUEST['nutricion_5']."' ,
'".$_REQUEST['nutricion_6']."' ,
'".$_REQUEST['hiperten']."' ,
'".$_REQUEST['acv_jct']."' ,
'".$_REQUEST['cardio2']."' ,
'".$_REQUEST['dislipi2']."' ,
'".$_REQUEST['retino2']."' ,
'".$_REQUEST['tabao2']."' ,
'".$_REQUEST['icc2']."' ,
'".$_REQUEST['iam2']."' ,
'".$_REQUEST['angi2']."' ,
'".$_REQUEST['arteri2']."' ,
'".$_REQUEST['hta_ges2']."' ,
'".$_REQUEST['dia2']."' ,
'".$_REQUEST['dia23']."' ,
'".$_REQUEST['renal2']."' ,
'".$_REQUEST['tbc2']."' ,
'".$_REQUEST['salado']."' ,
'".$_REQUEST['frutas']."' ,
'".$_REQUEST['frecuencia']."' ,
'".$_REQUEST['htension']."' ,
'".$_REQUEST['tabaco5']."' ,
'".$_REQUEST['hta_gestacional']."'
) ";


} else if ($_REQUEST['idhc_riesgo1'] != '') {

$sql = "UPDATE hc_riesgo1 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`escol_1` = '".$_REQUEST['escol_1']."' ,
`escol_2` = '".$_REQUEST['escol_2']."' ,
`escol_3` = '".$_REQUEST['escol_3']."' ,
`escol_4` = '".$_REQUEST['escol_4']."' ,
`raza_1` = '".$_REQUEST['raza_1']."' ,
`raza_2` = '".$_REQUEST['raza_2']."' ,
`raza_3` = '".$_REQUEST['raza_3']."' ,
`raza_4` = '".$_REQUEST['raza_4']."' ,
`acv` = '".$_REQUEST['acv']."' ,
`cardio` = '".$_REQUEST['cardio']."' ,
`bislipe` = '".$_REQUEST['bislipe']."' ,
`retino` = '".$_REQUEST['retino']."' ,
`asma` = '".$_REQUEST['asma']."' ,
`hiper` = '".$_REQUEST['hiper']."' ,
`hipo` = '".$_REQUEST['hipo']."' ,
`obesidad` = '".$_REQUEST['obesidad']."' ,
`icc` = '".$_REQUEST['icc']."' ,
`mmm` = '".$_REQUEST['mmm']."' ,
`angina` = '".$_REQUEST['angina']."' ,
`arteria` = '".$_REQUEST['arteria']."' ,
`epoc` = '".$_REQUEST['epoc']."' ,
`cancer` = '".$_REQUEST['cancer']."' ,
`osteopo` = '".$_REQUEST['osteopo']."' ,
`etc` = '".$_REQUEST['etc']."' ,
`diabet` = '".$_REQUEST['diabet']."' ,
`diabetes_2` = '".$_REQUEST['diabetes_2']."' ,
`renal` = '".$_REQUEST['renal']."' ,
`tbc` = '".$_REQUEST['tbc']."' ,
`alergi` = '".$_REQUEST['alergi']."' ,
`gastri` = '".$_REQUEST['gastri']."' ,
`alcoho` = '".$_REQUEST['alcoho']."' ,
`tropical` = '".$_REQUEST['tropical']."' ,
`otros_1` = '".$_REQUEST['otros_1']."' ,
`gesta_parto` = '".$_REQUEST['gesta_parto']."' ,
`aborto` = '".$_REQUEST['aborto']."' ,
`cesarea` = '".$_REQUEST['cesarea']."' ,
`total_contacto` = '".$_REQUEST['total_contacto']."' ,
`metodo` = '".$_REQUEST['metodo']."' ,
`ultima` = '".$_REQUEST['ultima']."' ,
`autoexa` = '".$_REQUEST['autoexa']."' ,
`antigeno` = '".$_REQUEST['antigeno']."' ,
`tiempo_1` = '".$_REQUEST['tiempo_1']."' ,
`tiempo_2` = '".$_REQUEST['tiempo_2']."' ,
`tacto` = '".$_REQUEST['tacto']."' ,
`transmision` = '".$_REQUEST['transmision']."' ,
`enojo_1` = '".$_REQUEST['enojo_1']."' ,
`enojo_2` = '".$_REQUEST['enojo_2']."' ,
`trago_1` = '".$_REQUEST['trago_1']."' ,
`trago_2` = '".$_REQUEST['trago_2']."' ,
`culpable_1` = '".$_REQUEST['culpable_1']."' ,
`culpable` = '".$_REQUEST['culpable']."' ,
`necesidad_1` = '".$_REQUEST['necesidad_1']."' ,
`necesidad_2` = '".$_REQUEST['necesidad_2']."' ,
`cigarro_1` = '".$_REQUEST['cigarro_1']."' ,
`cigarro_2` = '".$_REQUEST['cigarro_2']."' ,
`cigarro_3` = '".$_REQUEST['cigarro_3']."' ,
`humo_1` = '".$_REQUEST['humo_1']."' ,
`humo_2` = '".$_REQUEST['humo_2']."' ,
`humo_3` = '".$_REQUEST['humo_3']."' ,
`deporte_1` = '".$_REQUEST['deporte_1']."' ,
`deporte_2` = '".$_REQUEST['deporte_2']."' ,
`deporte_3` = '".$_REQUEST['deporte_3']."' ,
`deporte_4` = '".$_REQUEST['deporte_4']."' ,
`nutricion_1` = '".$_REQUEST['nutricion_1']."' ,
`nutricion_2` = '".$_REQUEST['nutricion_2']."' ,
`nutricion_3` = '".$_REQUEST['nutricion_3']."' ,
`nutricion_4` = '".$_REQUEST['nutricion_4']."' ,
`nutricion_5` = '".$_REQUEST['nutricion_5']."' ,
`nutricion_6` = '".$_REQUEST['nutricion_6']."' ,
`hiperten` = '".$_REQUEST['hiperten']."' ,
`acv_jct` = '".$_REQUEST['acv_jct']."' ,
`cardio2` = '".$_REQUEST['cardio2']."' ,
`dislipi2` = '".$_REQUEST['dislipi2']."' ,
`retino2` = '".$_REQUEST['retino2']."' ,
`tabao2` = '".$_REQUEST['tabao2']."' ,
`icc2` = '".$_REQUEST['icc2']."' ,
`iam2` = '".$_REQUEST['iam2']."' ,
`angi2` = '".$_REQUEST['angi2']."' ,
`arteri2` = '".$_REQUEST['arteri2']."' ,
`hta_ges2` = '".$_REQUEST['hta_ges2']."' ,
`dia2` = '".$_REQUEST['dia2']."' ,
`dia23` = '".$_REQUEST['dia23']."' ,
`renal2` = '".$_REQUEST['renal2']."' ,
`tbc2` = '".$_REQUEST['tbc2']."' ,
`salado` = '".$_REQUEST['salado']."' ,
`frutas` = '".$_REQUEST['frutas']."' ,
`frecuencia` = '".$_REQUEST['frecuencia']."' ,
`htension` = '".$_REQUEST['htension']."' ,
`tabaco5` = '".$_REQUEST['tabaco5']."' ,
`hta_gestacional` = '".$_REQUEST['hta_gestacional']."' WHERE `idhc_riesgo1` = '".$_REQUEST['idhc_riesgo1']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_riesgo1 = 'new';
$sql = "SELECT * from hc_riesgo1 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_riesgo1 = $row['idhc_riesgo1'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$escol_1 = $row['escol_1'];
$escol_2 = $row['escol_2'];
$escol_3 = $row['escol_3'];
$escol_4 = $row['escol_4'];
$raza_1 = $row['raza_1'];
$raza_2 = $row['raza_2'];
$raza_3 = $row['raza_3'];
$raza_4 = $row['raza_4'];
$acv = $row['acv'];
$cardio = $row['cardio'];
$bislipe = $row['bislipe'];
$retino = $row['retino'];
$asma = $row['asma'];
$hiper = $row['hiper'];
$hipo = $row['hipo'];
$obesidad = $row['obesidad'];
$icc = $row['icc'];
$mmm = $row['mmm'];
$angina = $row['angina'];
$arteria = $row['arteria'];
$epoc = $row['epoc'];
$cancer = $row['cancer'];
$osteopo = $row['osteopo'];
$etc = $row['etc'];
$diabet = $row['diabet'];
$diabetes_2 = $row['diabetes_2'];
$renal = $row['renal'];
$tbc = $row['tbc'];
$alergi = $row['alergi'];
$gastri = $row['gastri'];
$alcoho = $row['alcoho'];
$tropical = $row['tropical'];
$otros_1 = $row['otros_1'];
$gesta_parto = $row['gesta_parto'];
$aborto = $row['aborto'];
$cesarea = $row['cesarea'];
$total_contacto = $row['total_contacto'];
$metodo = $row['metodo'];
$ultima = $row['ultima'];
$autoexa = $row['autoexa'];
$antigeno = $row['antigeno'];
$tiempo_1 = $row['tiempo_1'];
$tiempo_2 = $row['tiempo_2'];
$tacto = $row['tacto'];
$transmision = $row['transmision'];
$enojo_1 = $row['enojo_1'];
$enojo_2 = $row['enojo_2'];
$trago_1 = $row['trago_1'];
$trago_2 = $row['trago_2'];
$culpable_1 = $row['culpable_1'];
$culpable = $row['culpable'];
$necesidad_1 = $row['necesidad_1'];
$necesidad_2 = $row['necesidad_2'];
$cigarro_1 = $row['cigarro_1'];
$cigarro_2 = $row['cigarro_2'];
$cigarro_3 = $row['cigarro_3'];
$humo_1 = $row['humo_1'];
$humo_2 = $row['humo_2'];
$humo_3 = $row['humo_3'];
$deporte_1 = $row['deporte_1'];
$deporte_2 = $row['deporte_2'];
$deporte_3 = $row['deporte_3'];
$deporte_4 = $row['deporte_4'];
$nutricion_1 = $row['nutricion_1'];
$nutricion_2 = $row['nutricion_2'];
$nutricion_3 = $row['nutricion_3'];
$nutricion_4 = $row['nutricion_4'];
$nutricion_5 = $row['nutricion_5'];
$nutricion_6 = $row['nutricion_6'];
$hiperten = $row['hiperten'];
$acv_jct = $row['acv_jct'];
$cardio2 = $row['cardio2'];
$dislipi2 = $row['dislipi2'];
$retino2 = $row['retino2'];
$tabao2 = $row['tabao2'];
$icc2 = $row['icc2'];
$iam2 = $row['iam2'];
$angi2 = $row['angi2'];
$arteri2 = $row['arteri2'];
$hta_ges2 = $row['hta_ges2'];
$dia2 = $row['dia2'];
$dia23 = $row['dia23'];
$renal2 = $row['renal2'];
$tbc2 = $row['tbc2'];
$salado = $row['salado'];
$frutas = $row['frutas'];
$frecuencia = $row['frecuencia'];
$htension = $row['htension'];
$tabaco5 = $row['tabaco5'];
$hta_gestacional = $row['hta_gestacional'];
break; }

?>
<script>

$(function(){

$("#close-hc_riesgo1").click(function(){
$("#open-hc_riesgo1").show();
$(this).hide();
$("#content-hc_riesgo1").hide('slow');
});

$("#open-hc_riesgo1").click(function(){
$("#close-hc_riesgo1").show();
$(this).hide();
$("#content-hc_riesgo1").show('slow');
});

});

</script>
<fieldset id="hc_riesgo1">
<legend align="left"> <div class="arrow-c" id="close-hc_riesgo1"></div> <div class="arrow-o" id="open-hc_riesgo1" ></div> <font>PROGRAMA INTEGRAL GRUPO DE RIESGOS</font></legend>
<div id="content-hc_riesgo1">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_riesgo1" id="guardar_hc_riesgo1" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_riesgo1" name="form_hc_riesgo1" action="<?php echo @$action_form_hc_riesgo1 ?>#hc_riesgo1" method="post">

<input type="hidden" id="id_hc_riesgo1" name="id_hc_riesgo1" value="<?php echo @$id_hc_riesgo1 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_riesgo1" name="idhc_riesgo1" value="<?php echo @$idhc_riesgo1; ?>" />

<div align="center">
  <p>PROGRAMA INTEGRAL GRUPO DE RIESGOS</p>
  <p>&nbsp;  </p>
</div>
<table width="819" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <col width="108" />
  <col width="83" />
  <col width="118" />
  <tr height="19">
    <td colspan="5" height="19">ANTECEDENTES    PERSONALES</td>
  </tr>
  <tr height="38">
    <td rowspan="2" height="57" width="222">ESCOLARIDAD</td>
    <td width="172">NINGUNA</td>
    <td width="168">PRMARIA</td>
    <td width="169">SECUNDARIA</td>
    <td width="211">UNIVERSITARIA</td>
  </tr>
  <tr height="19">
    <td height="19" width="172"><input type="text" class="input_txt valid" id="escol_1" name="escol_1" value="<?php echo @$escol_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="escol_2" name="escol_2" value="<?php echo @$escol_2; ?>" /></td>
    <td width="169"><input type="text" class="input_txt valid" id="escol_3" name="escol_3" value="<?php echo @$escol_3; ?>" /></td>
    <td width="211"><input type="text" class="input_txt valid" id="escol_4" name="escol_4" value="<?php echo @$escol_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td rowspan="2" height="57" width="222">RAZA</td>
    <td width="172">BLANCA</td>
    <td width="168">INDÍGENA</td>
    <td width="169">AFROAMERICANA</td>
    <td width="211">OTRA</td>
  </tr>
  <tr height="19">
    <td height="19" width="172"><input type="text" class="input_txt valid" id="raza_1" name="raza_1" value="<?php echo @$raza_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="raza_2" name="raza_2" value="<?php echo @$raza_2; ?>" /></td>
    <td width="169"><input type="text" class="input_txt valid" id="raza_3" name="raza_3" value="<?php echo @$raza_3; ?>" /></td>
    <td width="211"><input type="text" class="input_txt valid" id="raza_4" name="raza_4" value="<?php echo @$raza_4; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <col width="108" />
  <col width="83" />
  <col width="118" />
  <col width="83" />
  <tr height="19">
    <td colspan="6" height="19" width="634"><div align="center">PATOLÓGICOS</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HIPERTENSI0N</td>
    <td width="83"><input type="text" class="input_txt valid" id="htension" name="htension" value="<?php echo @$htension; ?>" /></td>
    <td width="108">TABAQUISMO</td>
    <td width="83"><input type="text" class="input_txt valid" id="tabaco5" name="tabaco5" value="<?php echo @$tabaco5; ?>" /></td>
    <td width="118">HTA    GESTACIONAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="hta_gestacional" name="hta_gestacional" value="<?php echo @$hta_gestacional; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ACV-KT</td>
    <td width="83"><input type="text" class="input_txt valid" id="acv" name="acv" value="<?php echo @$acv; ?>" /></td>
    <td width="108">ICC</td>
    <td width="83"><input type="text" class="input_txt valid" id="icc" name="icc" value="<?php echo @$icc; ?>" /></td>
    <td width="118">DIABETES</td>
    <td width="83"><input type="text" class="input_txt valid" id="diabet" name="diabet" value="<?php echo @$diabet; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="159">CARDIOPATIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="cardio" name="cardio" value="<?php echo @$cardio; ?>" /></td>
    <td width="108">MM</td>
    <td width="83"><input type="text" class="input_txt valid" id="mmm" name="mmm" value="<?php echo @$mmm; ?>" /></td>
    <td width="118">DIABETES    GESTACIONAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="diabetes_2" name="diabetes_2" value="<?php echo @$diabetes_2; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="159">DISLIPIDEMIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="bislipe" name="bislipe" value="<?php echo @$bislipe; ?>" /></td>
    <td width="108">ANGINA</td>
    <td width="83"><input type="text" class="input_txt valid" id="angina" name="angina" value="<?php echo @$angina; ?>" /></td>
    <td width="118">ENFERMEDAD    RENAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="renal" name="renal" value="<?php echo @$renal; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="159">RETINOPATIAS</td>
    <td width="83"><input type="text" class="input_txt valid" id="retino" name="retino" value="<?php echo @$retino; ?>" /></td>
    <td width="108">ENFERMEDAD    ARTERIAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="arteria" name="arteria" value="<?php echo @$arteria; ?>" /></td>
    <td width="118">TBC</td>
    <td width="83"><input type="text" class="input_txt valid" id="tbc" name="tbc" value="<?php echo @$tbc; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ASMA</td>
    <td width="83"><input type="text" class="input_txt valid" id="asma" name="asma" value="<?php echo @$asma; ?>" /></td>
    <td width="108">EPOC</td>
    <td width="83"><input type="text" class="input_txt valid" id="epoc" name="epoc" value="<?php echo @$epoc; ?>" /></td>
    <td width="118">ALÉRGICOS</td>
    <td width="83"><input type="text" class="input_txt valid" id="alergi" name="alergi" value="<?php echo @$alergi; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HIPERTIROIDISMO</td>
    <td width="83"><input type="text" class="input_txt valid" id="hiper" name="hiper" value="<?php echo @$hiper; ?>" /></td>
    <td width="108">CANCER</td>
    <td width="83"><input type="text" class="input_txt valid" id="cancer" name="cancer" value="<?php echo @$cancer; ?>" /></td>
    <td width="118">GASTRITIS</td>
    <td width="83"><input type="text" class="input_txt valid" id="gastri" name="gastri" value="<?php echo @$gastri; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HIPOTIROIDISMO</td>
    <td width="83"><input type="text" class="input_txt valid" id="hipo" name="hipo" value="<?php echo @$hipo; ?>" /></td>
    <td width="108">OSTEOPOROSIS</td>
    <td width="83"><input type="text" class="input_txt valid" id="osteopo" name="osteopo" value="<?php echo @$osteopo; ?>" /></td>
    <td width="118">ALCOHOLISMO</td>
    <td width="83"><input type="text" class="input_txt valid" id="alcoho" name="alcoho" value="<?php echo @$alcoho; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="159">OBESIDA</td>
    <td width="83"><input type="text" class="input_txt valid" id="obesidad" name="obesidad" value="<?php echo @$obesidad; ?>" /></td>
    <td width="108">ETS</td>
    <td width="83"><input type="text" class="input_txt valid" id="etc" name="etc" value="<?php echo @$etc; ?>" /></td>
    <td width="118">ENFERMEDAD    TROPICAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="tropical" name="tropical" value="<?php echo @$tropical; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">OTRA</td>
    <td colspan="5" width="475"><input type="text" class="input_txt valid" id="otros_1" name="otros_1" value="<?php echo @$otros_1; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <col width="108" />
  <col width="83" />
  <col width="118" />
  <col width="83" />
  <tr height="19">
    <td colspan="6" height="19" width="634">GINECOOBSTETRICOS Y UROLÓGICOS</td>
  </tr>
  <tr height="58">
    <td height="58" width="159">GESTA PARTO</td>
    <td width="83"><input type="text" class="input_txt valid" id="gesta_parto" name="gesta_parto" value="<?php echo @$gesta_parto; ?>" /></td>
    <td width="108">MÉTODO    DE PLANIFICACIÓN FAMILIAR</td>
    <td width="83"><input type="text" class="input_txt valid" id="metodo" name="metodo" value="<?php echo @$metodo; ?>" /></td>
    <td width="118">TIEMPO</td>
    <td width="83"><input type="text" class="input_txt valid" id="tiempo_1" name="tiempo_1" value="<?php echo @$tiempo_1; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="159">ABORTO</td>
    <td width="83"><input type="text" class="input_txt valid" id="aborto" name="aborto" value="<?php echo @$aborto; ?>" /></td>
    <td width="108">ÚLTIMA    CITOLOGÍA</td>
    <td width="83"><input type="text" class="input_txt valid" id="ultima" name="ultima" value="<?php echo @$ultima; ?>" /></td>
    <td width="118">TIEMPO</td>
    <td width="83"><input type="text" class="input_txt valid" id="tiempo_2" name="tiempo_2" value="<?php echo @$tiempo_2; ?>" /></td>
  </tr>
  <tr height="77">
    <td height="77" width="159">CESAREA</td>
    <td width="83"><input type="text" class="input_txt valid" id="cesarea" name="cesarea" value="<?php echo @$cesarea; ?>" /></td>
    <td width="108">AUTOEXAMEN    DE MAMOGRAFIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="autoexa" name="autoexa" value="<?php echo @$autoexa; ?>" /></td>
    <td width="118">TACTO    RECTAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="tacto" name="tacto" value="<?php echo @$tacto; ?>" /></td>
  </tr>
  <tr height="58">
    <td height="58" width="159">TOTAL CONTACTO SEXUAL DE RIESGO</td>
    <td width="83"><input type="text" class="input_txt valid" id="total_contacto" name="total_contacto" value="<?php echo @$total_contacto; ?>" /></td>
    <td width="108">ANTIGENO    PROSTÁTICO</td>
    <td width="83"><input type="text" class="input_txt valid" id="antigeno" name="antigeno" value="<?php echo @$antigeno; ?>" /></td>
    <td width="118">ENFERMEDAD    DE TRANSMISIÓN SEXUAL</td>
    <td width="83"><input type="text" class="input_txt valid" id="transmision" name="transmision" value="<?php echo @$transmision; ?>" /></td>
  </tr>
</table>
<p></p>
<table width="628" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <col width="108" />
  <tr height="19">
    <td colspan="3" height="19"><div align="center">HÁBITOS</div></td>
  </tr>
  <tr height="38">
    <td colspan="3" height="22"><div align="center">TEST    PARA ALCOHOLISMO</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="520">PREGUNTA</td>
    <td width="50">SI</td>
    <td width="56">NO</td>
  </tr>
  <tr height="77">
    <td height="44" width="520">ALGUNA VEZ SE HA SENTIDO ENOJADO PORQUE LE CRITICAN SU FORMA DE    BEBER</td>
    <td width="50"><input type="text" class="input_txt valid" id="enojo_1" name="enojo_1" value="<?php echo @$enojo_1; ?>" /></td>
    <td width="56"><input type="text" class="input_txt valid" id="enojo_2" name="enojo_2" value="<?php echo @$enojo_2; ?>" /></td>
  </tr>
  <tr height="77">
    <td height="44" width="520">ALGUNA VEZ HA NECESITADO DE UN TRAGO DE LICOR PARA ARRANCAR EL    DÍA</td>
    <td width="50"><input type="text" class="input_txt valid" id="trago_1" name="trago_1" value="<?php echo @$trago_1; ?>" /></td>
    <td width="56"><input type="text" class="input_txt valid" id="trago_2" name="trago_2" value="<?php echo @$trago_2; ?>" /></td>
  </tr>
  <tr height="58">
    <td height="22" width="520">ALGUNA VEZ HA SENTIDO CULPABLE POR LA BEBIDA</td>
    <td width="50"><input type="text" class="input_txt valid" id="culpable_1" name="culpable_1" value="<?php echo @$culpable_1; ?>" /></td>
    <td width="56"><input type="text" class="input_txt valid" id="culpable" name="culpable" value="<?php echo @$culpable; ?>" /></td>
  </tr>
  <tr height="58">
    <td height="58" width="520">ALGUNA VEZ HA SEITIDO LA NECESIDAD DE CORTAR CON LA BEBIDA</td>
    <td width="50"><input type="text" class="input_txt valid" id="necesidad_1" name="necesidad_1" value="<?php echo @$necesidad_1; ?>" /></td>
    <td width="56"><input type="text" class="input_txt valid" id="necesidad_2" name="necesidad_2" value="<?php echo @$necesidad_2; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <col width="108" />
  <tr height="19">
    <td colspan="3" height="19" width="350">CIGARRILO</td>
  </tr>
  <tr height="19">
    <td height="19" width="159">SI</td>
    <td width="83">NO</td>
    <td width="108">FRECUENCIA</td>
  </tr>
  <tr height="19">
    <td height="19" width="159"><input type="text" class="input_txt valid" id="cigarro_1" name="cigarro_1" value="<?php echo @$cigarro_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="cigarro_2" name="cigarro_2" value="<?php echo @$cigarro_2; ?>" /></td>
    <td width="108"><input type="text" class="input_txt valid" id="cigarro_3" name="cigarro_3" value="<?php echo @$cigarro_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19" width="350">HUMO</td>
  </tr>
  <tr height="38">
    <td height="38" width="159">SI</td>
    <td width="83">NO</td>
    <td width="108">TIEMPO    DE EXPOSICIÓN</td>
  </tr>
  <tr height="19">
    <td height="19" width="159"><input type="text" class="input_txt valid" id="humo_1" name="humo_1" value="<?php echo @$humo_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="humo_2" name="humo_2" value="<?php echo @$humo_2; ?>" /></td>
    <td width="108"><input type="text" class="input_txt valid" id="humo_3" name="humo_3" value="<?php echo @$humo_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19" width="350">DEPORTE</td>
  </tr>
  <tr height="19">
    <td height="19" width="159">SI</td>
    <td colspan="2" width="191"><input type="text" class="input_txt valid" id="deporte_1" name="deporte_1" value="<?php echo @$deporte_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">NO</td>
    <td colspan="2" width="191"><input type="text" class="input_txt valid" id="deporte_2" name="deporte_2" value="<?php echo @$deporte_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">TJEMPO</td>
    <td colspan="2" width="191"><input type="text" class="input_txt valid" id="deporte_3" name="deporte_3" value="<?php echo @$deporte_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">CANTIDAD</td>
    <td colspan="2" width="191"><input type="text" class="input_txt valid" id="deporte_4" name="deporte_4" value="<?php echo @$deporte_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">FRECUENCIA</td>
    <td colspan="2" width="191"><input type="text" class="input_txt valid" id="frecuencia" name="frecuencia" value="<?php echo @$frecuencia; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <tr height="19">
    <td colspan="2" height="19">NUTRICIÓN    BALANCEADA</td>
  </tr>
  <tr height="19">
    <td height="19" width="159">SI</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_1" name="nutricion_1" value="<?php echo @$nutricion_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">NO</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_2" name="nutricion_2" value="<?php echo @$nutricion_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">ALIMENTOS    DE MAYOR CONSUMO</td>
  </tr>
  <tr height="19">
    <td height="19" width="159">GRASAS</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_3" name="nutricion_3" value="<?php echo @$nutricion_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HARINAS</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_4" name="nutricion_4" value="<?php echo @$nutricion_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">VERDURAS</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_5" name="nutricion_5" value="<?php echo @$nutricion_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">AZUCARES</td>
    <td width="183"><input type="text" class="input_txt valid" id="nutricion_6" name="nutricion_6" value="<?php echo @$nutricion_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">SALADO</td>
    <td width="183"><input type="text" class="input_txt valid" id="salado" name="salado" value="<?php echo @$salado; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">FRUTAS</td>
    <td width="183"><input type="text" class="input_txt valid" id="frutas" name="frutas" value="<?php echo @$frutas; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="344" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="159" />
  <col width="83" />
  <tr height="19">
    <td colspan="2" height="19">ANTECEDENTES    FAMILIARES</td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HIPERTENSIÓN</td>
    <td width="227"><input type="text" class="input_txt valid" id="hiperten" name="hiperten" value="<?php echo @$hiperten; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ACV-JCT</td>
    <td width="227"><input type="text" class="input_txt valid" id="acv_jct" name="acv_jct" value="<?php echo @$acv_jct; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">CARDIÓPATA</td>
    <td width="227"><input type="text" class="input_txt valid" id="cardio2" name="cardio2" value="<?php echo @$cardio2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">DISLIPIDEMIA</td>
    <td width="227"><input type="text" class="input_txt valid" id="dislipi2" name="dislipi2" value="<?php echo @$dislipi2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">RETINOPATIAS</td>
    <td width="227"><input type="text" class="input_txt valid" id="retino2" name="retino2" value="<?php echo @$retino2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">TABAQUISMO</td>
    <td width="227"><input type="text" class="input_txt valid" id="tabao2" name="tabao2" value="<?php echo @$tabao2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ICC</td>
    <td width="227"><input type="text" class="input_txt valid" id="icc2" name="icc2" value="<?php echo @$icc2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">IAM</td>
    <td width="227"><input type="text" class="input_txt valid" id="iam2" name="iam2" value="<?php echo @$iam2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ANGINA</td>
    <td width="227"><input type="text" class="input_txt valid" id="angi2" name="angi2" value="<?php echo @$angi2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ENFERMEDAD ARTERIAL</td>
    <td width="227"><input type="text" class="input_txt valid" id="arteri2" name="arteri2" value="<?php echo @$arteri2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">HTA GESTACIONAL</td>
    <td width="227"><input type="text" class="input_txt valid" id="hta_ges2" name="hta_ges2" value="<?php echo @$hta_ges2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">DIABETES</td>
    <td width="227"><input type="text" class="input_txt valid" id="dia2" name="dia2" value="<?php echo @$dia2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">DIABETES GESTACIONAL</td>
    <td width="227"><input type="text" class="input_txt valid" id="dia23" name="dia23" value="<?php echo @$dia23; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">ENFERMEDAD RENAL</td>
    <td width="227"><input type="text" class="input_txt valid" id="renal2" name="renal2" value="<?php echo @$renal2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="159">TBC</td>
    <td width="227"><input type="text" class="input_txt valid" id="tbc2" name="tbc2" value="<?php echo @$tbc2; ?>" /></td>
  </tr>
</table>
<?php echo @$button ?>
</form><br>
</div>
</fieldset>