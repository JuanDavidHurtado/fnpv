<?php
if (isset($_REQUEST['guardar_hc_riesgo_3']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['idhc_riesgo_3'] == 'new') {

$sql = "INSERT INTO hc_riesgo_3 (
`idhc_riesgo_3`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`diagnos_1`,
`diagnos_2`,
`diagnos_3`,
`presion`,
`confirmado`,
`repetido`,
`astos`,
`basilos`,
`biop`,
`citologia`,
`creati`,
`desinto`,
`ecocard`,
`electro`,
`exten`,
`glicemipos`,
`gota`,
`hemo`,
`mamogra`,
`micro`,
`perfil`,
`perfil2`,
`potasio`,
`cuagula`,
`tuber`,
`torax`,
`recuento`,
`sangre`,
`serolo`,
`tratamiento_1`,
`tratamiento_2`,
`tratamiento_3`,
`tratamiento_4`,
`tratamiento_5`,
`tratamiento_6`,
`tratamiento_7`,
`tratamiento_8`,
`tratamiento_9`,
`tratamiento_10`,
`presentacion_1`,
`presentacion_2`,
`presentacion_3`,
`presentacion_4`,
`presentacion_5`,
`presentacion_6`,
`presentacion_7`,
`presentacion_8`,
`presentacion_9`,
`presentacion_10`,
`prescrib_1`,
`prescrib_2`,
`prescrib_3`,
`prescrib_4`,
`prescrib_5`,
`prescrib_6`,
`prescrib_7`,
`prescrib_8`,
`prescrib_9`,
`prescrib_10`,
`bajo`,
`medio`,
`alto`,
`muyalto`,
`estadio_1`,
`estadio_2`,
`estadio_3`,
`estadio_4`,
`estadio_5`,
`aderencia_1`,
`aderencia_2`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['diagnos_1']."' ,
'".$_REQUEST['diagnos_2']."' ,
'".$_REQUEST['diagnos_3']."' ,
'".$_REQUEST['presion']."' ,
'".$_REQUEST['confirmado']."' ,
'".$_REQUEST['repetido']."' ,
'".$_REQUEST['astos']."' ,
'".$_REQUEST['basilos']."' ,
'".$_REQUEST['biop']."' ,
'".$_REQUEST['citologia']."' ,
'".$_REQUEST['creati']."' ,
'".$_REQUEST['desinto']."' ,
'".$_REQUEST['ecocard']."' ,
'".$_REQUEST['electro']."' ,
'".$_REQUEST['exten']."' ,
'".$_REQUEST['glicemipos']."' ,
'".$_REQUEST['gota']."' ,
'".$_REQUEST['hemo']."' ,
'".$_REQUEST['mamogra']."' ,
'".$_REQUEST['micro']."' ,
'".$_REQUEST['perfil']."' ,
'".$_REQUEST['perfil2']."' ,
'".$_REQUEST['potasio']."' ,
'".$_REQUEST['cuagula']."' ,
'".$_REQUEST['tuber']."' ,
'".$_REQUEST['torax']."' ,
'".$_REQUEST['recuento']."' ,
'".$_REQUEST['sangre']."' ,
'".$_REQUEST['serolo']."' ,
'".$_REQUEST['tratamiento_1']."' ,
'".$_REQUEST['tratamiento_2']."' ,
'".$_REQUEST['tratamiento_3']."' ,
'".$_REQUEST['tratamiento_4']."' ,
'".$_REQUEST['tratamiento_5']."' ,
'".$_REQUEST['tratamiento_6']."' ,
'".$_REQUEST['tratamiento_7']."' ,
'".$_REQUEST['tratamiento_8']."' ,
'".$_REQUEST['tratamiento_9']."' ,
'".$_REQUEST['tratamiento_10']."' ,
'".$_REQUEST['presentacion_1']."' ,
'".$_REQUEST['presentacion_2']."' ,
'".$_REQUEST['presentacion_3']."' ,
'".$_REQUEST['presentacion_4']."' ,
'".$_REQUEST['presentacion_5']."' ,
'".$_REQUEST['presentacion_6']."' ,
'".$_REQUEST['presentacion_7']."' ,
'".$_REQUEST['presentacion_8']."' ,
'".$_REQUEST['presentacion_9']."' ,
'".$_REQUEST['presentacion_10']."' ,
'".$_REQUEST['prescrib_1']."' ,
'".$_REQUEST['prescrib_2']."' ,
'".$_REQUEST['prescrib_3']."' ,
'".$_REQUEST['prescrib_4']."' ,
'".$_REQUEST['prescrib_5']."' ,
'".$_REQUEST['prescrib_6']."' ,
'".$_REQUEST['prescrib_7']."' ,
'".$_REQUEST['prescrib_8']."' ,
'".$_REQUEST['prescrib_9']."' ,
'".$_REQUEST['prescrib_10']."' ,
'".$_REQUEST['bajo']."' ,
'".$_REQUEST['medio']."' ,
'".$_REQUEST['alto']."' ,
'".$_REQUEST['muyalto']."' ,
'".$_REQUEST['estadio_1']."' ,
'".$_REQUEST['estadio_2']."' ,
'".$_REQUEST['estadio_3']."' ,
'".$_REQUEST['estadio_4']."' ,
'".$_REQUEST['estadio_5']."' ,
'".$_REQUEST['aderencia_1']."' ,
'".$_REQUEST['aderencia_2']."'
) ";


} else if ($_REQUEST['idhc_riesgo_3'] != '') {

$sql = "UPDATE hc_riesgo_3 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`diagnos_1` = '".$_REQUEST['diagnos_1']."' ,
`diagnos_2` = '".$_REQUEST['diagnos_2']."' ,
`diagnos_3` = '".$_REQUEST['diagnos_3']."' ,
`presion` = '".$_REQUEST['presion']."' ,
`confirmado` = '".$_REQUEST['confirmado']."' ,
`repetido` = '".$_REQUEST['repetido']."' ,
`astos` = '".$_REQUEST['astos']."' ,
`basilos` = '".$_REQUEST['basilos']."' ,
`biop` = '".$_REQUEST['biop']."' ,
`citologia` = '".$_REQUEST['citologia']."' ,
`creati` = '".$_REQUEST['creati']."' ,
`desinto` = '".$_REQUEST['desinto']."' ,
`ecocard` = '".$_REQUEST['ecocard']."' ,
`electro` = '".$_REQUEST['electro']."' ,
`exten` = '".$_REQUEST['exten']."' ,
`glicemipos` = '".$_REQUEST['glicemipos']."' ,
`gota` = '".$_REQUEST['gota']."' ,
`hemo` = '".$_REQUEST['hemo']."' ,
`mamogra` = '".$_REQUEST['mamogra']."' ,
`micro` = '".$_REQUEST['micro']."' ,
`perfil` = '".$_REQUEST['perfil']."' ,
`perfil2` = '".$_REQUEST['perfil2']."' ,
`potasio` = '".$_REQUEST['potasio']."' ,
`cuagula` = '".$_REQUEST['cuagula']."' ,
`tuber` = '".$_REQUEST['tuber']."' ,
`torax` = '".$_REQUEST['torax']."' ,
`recuento` = '".$_REQUEST['recuento']."' ,
`sangre` = '".$_REQUEST['sangre']."' ,
`serolo` = '".$_REQUEST['serolo']."' ,
`tratamiento_1` = '".$_REQUEST['tratamiento_1']."' ,
`tratamiento_2` = '".$_REQUEST['tratamiento_2']."' ,
`tratamiento_3` = '".$_REQUEST['tratamiento_3']."' ,
`tratamiento_4` = '".$_REQUEST['tratamiento_4']."' ,
`tratamiento_5` = '".$_REQUEST['tratamiento_5']."' ,
`tratamiento_6` = '".$_REQUEST['tratamiento_6']."' ,
`tratamiento_7` = '".$_REQUEST['tratamiento_7']."' ,
`tratamiento_8` = '".$_REQUEST['tratamiento_8']."' ,
`tratamiento_9` = '".$_REQUEST['tratamiento_9']."' ,
`tratamiento_10` = '".$_REQUEST['tratamiento_10']."' ,
`presentacion_1` = '".$_REQUEST['presentacion_1']."' ,
`presentacion_2` = '".$_REQUEST['presentacion_2']."' ,
`presentacion_3` = '".$_REQUEST['presentacion_3']."' ,
`presentacion_4` = '".$_REQUEST['presentacion_4']."' ,
`presentacion_5` = '".$_REQUEST['presentacion_5']."' ,
`presentacion_6` = '".$_REQUEST['presentacion_6']."' ,
`presentacion_7` = '".$_REQUEST['presentacion_7']."' ,
`presentacion_8` = '".$_REQUEST['presentacion_8']."' ,
`presentacion_9` = '".$_REQUEST['presentacion_9']."' ,
`presentacion_10` = '".$_REQUEST['presentacion_10']."' ,
`prescrib_1` = '".$_REQUEST['prescrib_1']."' ,
`prescrib_2` = '".$_REQUEST['prescrib_2']."' ,
`prescrib_3` = '".$_REQUEST['prescrib_3']."' ,
`prescrib_4` = '".$_REQUEST['prescrib_4']."' ,
`prescrib_5` = '".$_REQUEST['prescrib_5']."' ,
`prescrib_6` = '".$_REQUEST['prescrib_6']."' ,
`prescrib_7` = '".$_REQUEST['prescrib_7']."' ,
`prescrib_8` = '".$_REQUEST['prescrib_8']."' ,
`prescrib_9` = '".$_REQUEST['prescrib_9']."' ,
`prescrib_10` = '".$_REQUEST['prescrib_10']."' ,
`bajo` = '".$_REQUEST['bajo']."' ,
`medio` = '".$_REQUEST['medio']."' ,
`alto` = '".$_REQUEST['alto']."' ,
`muyalto` = '".$_REQUEST['muyalto']."' ,
`estadio_1` = '".$_REQUEST['estadio_1']."' ,
`estadio_2` = '".$_REQUEST['estadio_2']."' ,
`estadio_3` = '".$_REQUEST['estadio_3']."' ,
`estadio_4` = '".$_REQUEST['estadio_4']."' ,
`estadio_5` = '".$_REQUEST['estadio_5']."' ,
`aderencia_1` = '".$_REQUEST['aderencia_1']."' ,
`aderencia_2` = '".$_REQUEST['aderencia_2']."' WHERE `idhc_riesgo_3` = '".$_REQUEST['idhc_riesgo_3']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$idhc_riesgo_3 = 'new';
$sql = "SELECT * from hc_riesgo_3 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$idhc_riesgo_3 = $row['idhc_riesgo_3'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$diagnos_1 = $row['diagnos_1'];
$diagnos_2 = $row['diagnos_2'];
$diagnos_3 = $row['diagnos_3'];
$presion = $row['presion'];
$confirmado = $row['confirmado'];
$repetido = $row['repetido'];
$astos = $row['astos'];
$basilos = $row['basilos'];
$biop = $row['biop'];
$citologia = $row['citologia'];
$creati = $row['creati'];
$desinto = $row['desinto'];
$ecocard = $row['ecocard'];
$electro = $row['electro'];
$exten = $row['exten'];
$glicemipos = $row['glicemipos'];
$gota = $row['gota'];
$hemo = $row['hemo'];
$mamogra = $row['mamogra'];
$micro = $row['micro'];
$perfil = $row['perfil'];
$perfil2 = $row['perfil2'];
$potasio = $row['potasio'];
$cuagula = $row['cuagula'];
$tuber = $row['tuber'];
$torax = $row['torax'];
$recuento = $row['recuento'];
$sangre = $row['sangre'];
$serolo = $row['serolo'];
$tratamiento_1 = $row['tratamiento_1'];
$tratamiento_2 = $row['tratamiento_2'];
$tratamiento_3 = $row['tratamiento_3'];
$tratamiento_4 = $row['tratamiento_4'];
$tratamiento_5 = $row['tratamiento_5'];
$tratamiento_6 = $row['tratamiento_6'];
$tratamiento_7 = $row['tratamiento_7'];
$tratamiento_8 = $row['tratamiento_8'];
$tratamiento_9 = $row['tratamiento_9'];
$tratamiento_10 = $row['tratamiento_10'];
$presentacion_1 = $row['presentacion_1'];
$presentacion_2 = $row['presentacion_2'];
$presentacion_3 = $row['presentacion_3'];
$presentacion_4 = $row['presentacion_4'];
$presentacion_5 = $row['presentacion_5'];
$presentacion_6 = $row['presentacion_6'];
$presentacion_7 = $row['presentacion_7'];
$presentacion_8 = $row['presentacion_8'];
$presentacion_9 = $row['presentacion_9'];
$presentacion_10 = $row['presentacion_10'];
$prescrib_1 = $row['prescrib_1'];
$prescrib_2 = $row['prescrib_2'];
$prescrib_3 = $row['prescrib_3'];
$prescrib_4 = $row['prescrib_4'];
$prescrib_5 = $row['prescrib_5'];
$prescrib_6 = $row['prescrib_6'];
$prescrib_7 = $row['prescrib_7'];
$prescrib_8 = $row['prescrib_8'];
$prescrib_9 = $row['prescrib_9'];
$prescrib_10 = $row['prescrib_10'];
$bajo = $row['bajo'];
$medio = $row['medio'];
$alto = $row['alto'];
$muyalto = $row['muyalto'];
$estadio_1 = $row['estadio_1'];
$estadio_2 = $row['estadio_2'];
$estadio_3 = $row['estadio_3'];
$estadio_4 = $row['estadio_4'];
$estadio_5 = $row['estadio_5'];
$aderencia_1 = $row['aderencia_1'];
$aderencia_2 = $row['aderencia_2'];
break; }

?>
<script>

$(function(){

$("#close-hc_riesgo_3").click(function(){
$("#open-hc_riesgo_3").show();
$(this).hide();
$("#content-hc_riesgo_3").hide('slow');
});

$("#open-hc_riesgo_3").click(function(){
$("#close-hc_riesgo_3").show();
$(this).hide();
$("#content-hc_riesgo_3").show('slow');
});

});

</script>
<fieldset id="hc_riesgo_3">
<legend align="left"> <div class="arrow-c" id="close-hc_riesgo_3"></div> <div class="arrow-o" id="open-hc_riesgo_3" ></div> <font>Valoracion terapia ocupacional - hc_riesgo_3</font></legend>
<div id="content-hc_riesgo_3">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_riesgo_3" id="guardar_hc_riesgo_3" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_riesgo_3" name="form_hc_riesgo_3" action="<?php echo @$action_form_hc_riesgo_3 ?>#hc_riesgo_3" method="post">

<input type="hidden" id="id_hc_riesgo_3" name="id_hc_riesgo_3" value="<?php echo @$id_hc_riesgo_3 ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="idhc_riesgo_3" name="idhc_riesgo_3" value="<?php echo @$idhc_riesgo_3; ?>" />

<div align="center">
  <p>PROGRAMA INTEGRAL GRUPO DE RIESGO 3</p>
  <p>&nbsp;  </p>
</div>
<table width="520" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="203" />
  <col width="103" />
  <col width="212" />
  <col width="83" />
  <tr height="19">
    <td colspan="4" height="19">DIAGNÓSTICO</td>
  </tr>
  <tr height="19">
    <td height="19" width="32">1.</td>
    <td width="168"><input type="text" class="input_txt valid" id="diagnos_1" name="diagnos_1" value="<?php echo @$diagnos_1; ?>" /></td>
    <td width="146">PRESION</td>
    <td width="405"><input type="text" class="input_txt valid" id="presion" name="presion" value="<?php echo @$presion; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="32">2.</td>
    <td width="168"><input type="text" class="input_txt valid" id="diagnos_2" name="diagnos_2" value="<?php echo @$diagnos_2; ?>" /></td>
    <td width="146">CONFIRMADO</td>
    <td width="405"><input type="text" class="input_txt valid" id="confirmado" name="confirmado" value="<?php echo @$confirmado; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="32">3.</td>
    <td width="168"><input type="text" class="input_txt valid" id="diagnos_3" name="diagnos_3" value="<?php echo @$diagnos_3; ?>" /></td>
    <td width="146">REPETIDO</td>
    <td width="405"><input type="text" class="input_txt valid" id="repetido" name="repetido" value="<?php echo @$repetido; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="203" />
  <col width="103" />
  <col width="212" />
  <col width="83" />
  <tr height="19">
    <td colspan="4" height="19" width="601">AYUDAS    DIAGNOSTICAS</td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ASTOS</td>
    <td width="103"><input type="text" class="input_txt valid" id="astos" name="astos" value="<?php echo @$astos; ?>" /></td>
    <td width="212">MAMOGRAFIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="mamogra" name="mamogra" value="<?php echo @$mamogra; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">BACILOSCOPIA</td>
    <td width="103"><input type="text" class="input_txt valid" id="basilos" name="basilos" value="<?php echo @$basilos; ?>" /></td>
    <td width="212">MICROALBUMINURIA</td>
    <td width="83"><input type="text" class="input_txt valid" id="micro" name="micro" value="<?php echo @$micro; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">BIOPSIA CUADRO HEMATICO</td>
    <td width="103"><input type="text" class="input_txt valid" id="biop" name="biop" value="<?php echo @$biop; ?>" /></td>
    <td width="212">PERFIL    LIPIDICO PERFIL TIROIDEO</td>
    <td width="83"><input type="text" class="input_txt valid" id="perfil" name="perfil" value="<?php echo @$perfil; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">CITOLOGÍA CU</td>
    <td width="103"><input type="text" class="input_txt valid" id="citologia" name="citologia" value="<?php echo @$citologia; ?>" /></td>
    <td width="212">PERFIL    HEPÁTICO</td>
    <td width="83"><input type="text" class="input_txt valid" id="perfil2" name="perfil2" value="<?php echo @$perfil2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">CREATININA</td>
    <td width="103"><input type="text" class="input_txt valid" id="creati" name="creati" value="<?php echo @$creati; ?>" /></td>
    <td width="212">POTASIO    SERICO</td>
    <td width="83"><input type="text" class="input_txt valid" id="potasio" name="potasio" value="<?php echo @$potasio; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">DESINTOMETRIA OSEA</td>
    <td width="103"><input type="text" class="input_txt valid" id="desinto" name="desinto" value="<?php echo @$desinto; ?>" /></td>
    <td width="212">PRUEBAS    DE COAGULACIÓN</td>
    <td width="83"><input type="text" class="input_txt valid" id="cuagula" name="cuagula" value="<?php echo @$cuagula; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ECOCARDIOGRAMA</td>
    <td width="103"><input type="text" class="input_txt valid" id="ecocard" name="ecocard" value="<?php echo @$ecocard; ?>" /></td>
    <td width="212">PRUEBA    DE TUBERCULINA</td>
    <td width="83"><input type="text" class="input_txt valid" id="tuber" name="tuber" value="<?php echo @$tuber; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ELECTROCARDIOGRAMA</td>
    <td width="103"><input type="text" class="input_txt valid" id="electro" name="electro" value="<?php echo @$electro; ?>" /></td>
    <td width="212">RX    DE TÓRAX</td>
    <td width="83"><input type="text" class="input_txt valid" id="torax" name="torax" value="<?php echo @$torax; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="203">EXTENDIDO DE SANGRE     PERIFÉRICA GLICEMIA PRE</td>
    <td width="103"><input type="text" class="input_txt valid" id="exten" name="exten" value="<?php echo @$exten; ?>" /></td>
    <td width="212">RECUENTO    DEPLAQUETAS RMN</td>
    <td width="83"><input type="text" class="input_txt valid" id="recuento" name="recuento" value="<?php echo @$recuento; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">GLICEMIA POST</td>
    <td width="103"><input type="text" class="input_txt valid" id="glicemipos" name="glicemipos" value="<?php echo @$glicemipos; ?>" /></td>
    <td width="212">SANGRE    OCULTA EN HECES</td>
    <td width="83"><input type="text" class="input_txt valid" id="sangre" name="sangre" value="<?php echo @$sangre; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">GOTA GRUESA</td>
    <td width="103"><input type="text" class="input_txt valid" id="gota" name="gota" value="<?php echo @$gota; ?>" /></td>
    <td width="212">SEROLOG+IA</td>
    <td width="83"><input type="text" class="input_txt valid" id="serolo" name="serolo" value="<?php echo @$serolo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">HEMOGLOBINA GLÍCOSILADA</td>
    <td colspan="3" width="398"><input type="text" class="input_txt valid" id="hemo" name="hemo" value="<?php echo @$hemo; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="203" />
  <col width="103" />
  <col width="212" />
  <tr height="19">
    <td colspan="3" height="19">TRATAMIENTO</td>
  </tr>
  <tr height="19">
    <td height="19" width="199">NOMBRE</td>
    <td width="150">PRESENTACIÓN</td>
    <td width="212">PRESCRIPCIÓN</td>
  </tr>
  <tr height="19">
    <td height="19" width="199">1
    <input type="text" class="input_txt valid" id="tratamiento_1" name="tratamiento_1" value="<?php echo @$tratamiento_1; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_1" name="presentacion_1" value="<?php echo @$presentacion_1; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_1" name="prescrib_1" value="<?php echo @$prescrib_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">2
    <input type="text" class="input_txt valid" id="tratamiento_2" name="tratamiento_2" value="<?php echo @$tratamiento_2; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_2" name="presentacion_2" value="<?php echo @$presentacion_2; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_2" name="prescrib_2" value="<?php echo @$prescrib_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">3
    <input type="text" class="input_txt valid" id="tratamiento_3" name="tratamiento_3" value="<?php echo @$tratamiento_3; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_3" name="presentacion_3" value="<?php echo @$presentacion_3; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_3" name="prescrib_3" value="<?php echo @$prescrib_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">4
    <input type="text" class="input_txt valid" id="tratamiento_4" name="tratamiento_4" value="<?php echo @$tratamiento_4; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_4" name="presentacion_4" value="<?php echo @$presentacion_4; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_4" name="prescrib_4" value="<?php echo @$prescrib_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">5
    <input type="text" class="input_txt valid" id="tratamiento_5" name="tratamiento_5" value="<?php echo @$tratamiento_5; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_5" name="presentacion_5" value="<?php echo @$presentacion_5; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_5" name="prescrib_5" value="<?php echo @$prescrib_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">6
    <input type="text" class="input_txt valid" id="tratamiento_6" name="tratamiento_6" value="<?php echo @$tratamiento_6; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_6" name="presentacion_6" value="<?php echo @$presentacion_6; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_6" name="prescrib_6" value="<?php echo @$prescrib_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">7
    <input type="text" class="input_txt valid" id="tratamiento_7" name="tratamiento_7" value="<?php echo @$tratamiento_7; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_7" name="presentacion_7" value="<?php echo @$presentacion_7; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_7" name="prescrib_7" value="<?php echo @$prescrib_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">8
    <input type="text" class="input_txt valid" id="tratamiento_8" name="tratamiento_8" value="<?php echo @$tratamiento_8; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_8" name="presentacion_8" value="<?php echo @$presentacion_8; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_8" name="prescrib_8" value="<?php echo @$prescrib_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">9
    <input type="text" class="input_txt valid" id="tratamiento_9" name="tratamiento_9" value="<?php echo @$tratamiento_9; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_9" name="presentacion_9" value="<?php echo @$presentacion_9; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_9" name="prescrib_9" value="<?php echo @$prescrib_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="199">10
    <input type="text" class="input_txt valid" id="tratamiento_10" name="tratamiento_10" value="<?php echo @$tratamiento_10; ?>" /></td>
    <td width="150"><input type="text" class="input_txt valid" id="presentacion_10" name="presentacion_10" value="<?php echo @$presentacion_10; ?>" /></td>
    <td width="212"><input type="text" class="input_txt valid" id="prescrib_10" name="prescrib_10" value="<?php echo @$prescrib_10; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="517" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="203" />
  <col width="103" />
  <tr height="19">
    <td colspan="2" height="19">CLASIFICACIÓN    DEL RIESGO CARDIOVASCULAR</td>
  </tr>
  <tr height="19">
    <td height="19" width="203">BAJO</td>
    <td width="236"><input type="text" class="input_txt valid" id="bajo" name="bajo" value="<?php echo @$bajo; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">MEDIO</td>
    <td width="236"><input type="text" class="input_txt valid" id="medio" name="medio" value="<?php echo @$medio; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ALTO</td>
    <td width="236"><input type="text" class="input_txt valid" id="alto" name="alto" value="<?php echo @$alto; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">MUY ALTO</td>
    <td width="236"><input type="text" class="input_txt valid" id="muyalto" name="muyalto" value="<?php echo @$muyalto; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">CLASIFICACIÓN DEL RIESGO RENAL</td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ESTADIO I</td>
    <td width="236"><input type="text" class="input_txt valid" id="estadio_1" name="estadio_1" value="<?php echo @$estadio_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ESTADIO II</td>
    <td width="236"><input type="text" class="input_txt valid" id="estadio_2" name="estadio_2" value="<?php echo @$estadio_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ESTADIO III</td>
    <td width="236"><input type="text" class="input_txt valid" id="estadio_3" name="estadio_3" value="<?php echo @$estadio_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ESTADIO IV</td>
    <td width="236"><input type="text" class="input_txt valid" id="estadio_4" name="estadio_4" value="<?php echo @$estadio_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">ESTADIO V</td>
    <td width="236"><input type="text" class="input_txt valid" id="estadio_5" name="estadio_5" value="<?php echo @$estadio_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">EVALUACIÓN DE ADHERENCIA AL TRATAMIENTO</td>
  </tr>
  <tr height="19">
    <td height="19" width="203">SI HAY ADHERENCIA</td>
    <td width="236"><input type="text" class="input_txt valid" id="aderencia_1" name="aderencia_1" value="<?php echo @$aderencia_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="203">NO HAY ADHERENCIA</td>
    <td width="236"><input type="text" class="input_txt valid" id="aderencia_2" name="aderencia_2" value="<?php echo @$aderencia_2; ?>" /></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>