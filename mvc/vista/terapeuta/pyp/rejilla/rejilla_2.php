<?php
if (isset($_REQUEST['guardar_hc_rejilla_2']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_rejilla_2'] == 'new') {

$sql = "INSERT INTO hc_rejilla_2 (
`id_hc_rejilla_2`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`pecho_s`,
`pecho_n`,
`cuantas_veces`,
`noche_s`,
`noche_n`,
`poblemas_lacta`,
`otro_al_s`,
`otro_al_n`,
`cant_frecu`,
`leche_mat`,
`alimento_ayer`,
`alimento_1`,
`alimento_2`,
`alimento_3`,
`alimento_4`,
`alimento_5`,
`canti_1`,
`canti_2`,
`canti_3`,
`canti_4`,
`canti_5`,
`hora_1`,
`hora_2`,
`hora_3`,
`hora_4`,
`hora_5`,
`porcion_s`,
`porcion_n`,
`quien_da`,
`enfer_cambio_s`,
`enfer_cambio_n`,
`cuales_alimen`,
`bgc`,
`polio`,
`hepatitis`,
`penta_1`,
`penta_2`,
`penta_3`,
`polio_1`,
`polio_2`,
`polio_3`,
`fiebre_amarilla`,
`triple_viral`,
`dpt_r1`,
`dpt_r2`,
`polio_r1`,
`polio_5anios`,
`triple_r1`,
`meses_3`,
`meses_6`,
`meses_9`,
`meses_16`,
`meses_20`,
`meses_24`,
`meses_30`,
`meses_36`,
`meses_48`,
`meses_60`,
`no_rie`,
`nohablan`,
`noarrulla`,
`noacompa`,
`higiene`,
`salud`,
`juguetes`,
`nojugar`,
`accidentes`,
`leche_mat_n`,
`meses_12`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['pecho_s']."' ,
'".$_REQUEST['pecho_n']."' ,
'".$_REQUEST['cuantas_veces']."' ,
'".$_REQUEST['noche_s']."' ,
'".$_REQUEST['noche_n']."' ,
'".$_REQUEST['poblemas_lacta']."' ,
'".$_REQUEST['otro_al_s']."' ,
'".$_REQUEST['otro_al_n']."' ,
'".$_REQUEST['cant_frecu']."' ,
'".$_REQUEST['leche_mat']."' ,
'".$_REQUEST['alimento_ayer']."' ,
'".$_REQUEST['alimento_1']."' ,
'".$_REQUEST['alimento_2']."' ,
'".$_REQUEST['alimento_3']."' ,
'".$_REQUEST['alimento_4']."' ,
'".$_REQUEST['alimento_5']."' ,
'".$_REQUEST['canti_1']."' ,
'".$_REQUEST['canti_2']."' ,
'".$_REQUEST['canti_3']."' ,
'".$_REQUEST['canti_4']."' ,
'".$_REQUEST['canti_5']."' ,
'".$_REQUEST['hora_1']."' ,
'".$_REQUEST['hora_2']."' ,
'".$_REQUEST['hora_3']."' ,
'".$_REQUEST['hora_4']."' ,
'".$_REQUEST['hora_5']."' ,
'".$_REQUEST['porcion_s']."' ,
'".$_REQUEST['porcion_n']."' ,
'".$_REQUEST['quien_da']."' ,
'".$_REQUEST['enfer_cambio_s']."' ,
'".$_REQUEST['enfer_cambio_n']."' ,
'".$_REQUEST['cuales_alimen']."' ,
'".$_REQUEST['bgc']."' ,
'".$_REQUEST['polio']."' ,
'".$_REQUEST['hepatitis']."' ,
'".$_REQUEST['penta_1']."' ,
'".$_REQUEST['penta_2']."' ,
'".$_REQUEST['penta_3']."' ,
'".$_REQUEST['polio_1']."' ,
'".$_REQUEST['polio_2']."' ,
'".$_REQUEST['polio_3']."' ,
'".$_REQUEST['fiebre_amarilla']."' ,
'".$_REQUEST['triple_viral']."' ,
'".$_REQUEST['dpt_r1']."' ,
'".$_REQUEST['dpt_r2']."' ,
'".$_REQUEST['polio_r1']."' ,
'".$_REQUEST['polio_5anios']."' ,
'".$_REQUEST['triple_r1']."' ,
'".$_REQUEST['meses_3']."' ,
'".$_REQUEST['meses_6']."' ,
'".$_REQUEST['meses_9']."' ,
'".$_REQUEST['meses_16']."' ,
'".$_REQUEST['meses_20']."' ,
'".$_REQUEST['meses_24']."' ,
'".$_REQUEST['meses_30']."' ,
'".$_REQUEST['meses_36']."' ,
'".$_REQUEST['meses_48']."' ,
'".$_REQUEST['meses_60']."' ,
'".$_REQUEST['no_rie']."' ,
'".$_REQUEST['nohablan']."' ,
'".$_REQUEST['noarrulla']."' ,
'".$_REQUEST['noacompa']."' ,
'".$_REQUEST['higiene']."' ,
'".$_REQUEST['salud']."' ,
'".$_REQUEST['juguetes']."' ,
'".$_REQUEST['nojugar']."' ,
'".$_REQUEST['accidentes']."' ,
'".$_REQUEST['leche_mat_n']."' ,
'".$_REQUEST['meses_12']."'
) ";


} else if ($_REQUEST['id_hc_rejilla_2'] != '') {

$sql = "UPDATE hc_rejilla_2 set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`pecho_s` = '".$_REQUEST['pecho_s']."' ,
`pecho_n` = '".$_REQUEST['pecho_n']."' ,
`cuantas_veces` = '".$_REQUEST['cuantas_veces']."' ,
`noche_s` = '".$_REQUEST['noche_s']."' ,
`noche_n` = '".$_REQUEST['noche_n']."' ,
`poblemas_lacta` = '".$_REQUEST['poblemas_lacta']."' ,
`otro_al_s` = '".$_REQUEST['otro_al_s']."' ,
`otro_al_n` = '".$_REQUEST['otro_al_n']."' ,
`cant_frecu` = '".$_REQUEST['cant_frecu']."' ,
`leche_mat` = '".$_REQUEST['leche_mat']."' ,
`alimento_ayer` = '".$_REQUEST['alimento_ayer']."' ,
`alimento_1` = '".$_REQUEST['alimento_1']."' ,
`alimento_2` = '".$_REQUEST['alimento_2']."' ,
`alimento_3` = '".$_REQUEST['alimento_3']."' ,
`alimento_4` = '".$_REQUEST['alimento_4']."' ,
`alimento_5` = '".$_REQUEST['alimento_5']."' ,
`canti_1` = '".$_REQUEST['canti_1']."' ,
`canti_2` = '".$_REQUEST['canti_2']."' ,
`canti_3` = '".$_REQUEST['canti_3']."' ,
`canti_4` = '".$_REQUEST['canti_4']."' ,
`canti_5` = '".$_REQUEST['canti_5']."' ,
`hora_1` = '".$_REQUEST['hora_1']."' ,
`hora_2` = '".$_REQUEST['hora_2']."' ,
`hora_3` = '".$_REQUEST['hora_3']."' ,
`hora_4` = '".$_REQUEST['hora_4']."' ,
`hora_5` = '".$_REQUEST['hora_5']."' ,
`porcion_s` = '".$_REQUEST['porcion_s']."' ,
`porcion_n` = '".$_REQUEST['porcion_n']."' ,
`quien_da` = '".$_REQUEST['quien_da']."' ,
`enfer_cambio_s` = '".$_REQUEST['enfer_cambio_s']."' ,
`enfer_cambio_n` = '".$_REQUEST['enfer_cambio_n']."' ,
`cuales_alimen` = '".$_REQUEST['cuales_alimen']."' ,
`bgc` = '".$_REQUEST['bgc']."' ,
`polio` = '".$_REQUEST['polio']."' ,
`hepatitis` = '".$_REQUEST['hepatitis']."' ,
`penta_1` = '".$_REQUEST['penta_1']."' ,
`penta_2` = '".$_REQUEST['penta_2']."' ,
`penta_3` = '".$_REQUEST['penta_3']."' ,
`polio_1` = '".$_REQUEST['polio_1']."' ,
`polio_2` = '".$_REQUEST['polio_2']."' ,
`polio_3` = '".$_REQUEST['polio_3']."' ,
`fiebre_amarilla` = '".$_REQUEST['fiebre_amarilla']."' ,
`triple_viral` = '".$_REQUEST['triple_viral']."' ,
`dpt_r1` = '".$_REQUEST['dpt_r1']."' ,
`dpt_r2` = '".$_REQUEST['dpt_r2']."' ,
`polio_r1` = '".$_REQUEST['polio_r1']."' ,
`polio_5anios` = '".$_REQUEST['polio_5anios']."' ,
`triple_r1` = '".$_REQUEST['triple_r1']."' ,
`meses_3` = '".$_REQUEST['meses_3']."' ,
`meses_6` = '".$_REQUEST['meses_6']."' ,
`meses_9` = '".$_REQUEST['meses_9']."' ,
`meses_16` = '".$_REQUEST['meses_16']."' ,
`meses_20` = '".$_REQUEST['meses_20']."' ,
`meses_24` = '".$_REQUEST['meses_24']."' ,
`meses_30` = '".$_REQUEST['meses_30']."' ,
`meses_36` = '".$_REQUEST['meses_36']."' ,
`meses_48` = '".$_REQUEST['meses_48']."' ,
`meses_60` = '".$_REQUEST['meses_60']."' ,
`no_rie` = '".$_REQUEST['no_rie']."' ,
`nohablan` = '".$_REQUEST['nohablan']."' ,
`noarrulla` = '".$_REQUEST['noarrulla']."' ,
`noacompa` = '".$_REQUEST['noacompa']."' ,
`higiene` = '".$_REQUEST['higiene']."' ,
`salud` = '".$_REQUEST['salud']."' ,
`juguetes` = '".$_REQUEST['juguetes']."' ,
`nojugar` = '".$_REQUEST['nojugar']."' ,
`accidentes` = '".$_REQUEST['accidentes']."' ,
`leche_mat_n` = '".$_REQUEST['leche_mat_n']."' ,
`meses_12` = '".$_REQUEST['meses_12']."' WHERE `id_hc_rejilla_2` = '".$_REQUEST['id_hc_rejilla_2']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_rejilla_2 = 'new';
$sql = "SELECT * from hc_rejilla_2 WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_rejilla_2 = $row['id_hc_rejilla_2'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$pecho_s = $row['pecho_s'];
$pecho_n = $row['pecho_n'];
$cuantas_veces = $row['cuantas_veces'];
$noche_s = $row['noche_s'];
$noche_n = $row['noche_n'];
$poblemas_lacta = $row['poblemas_lacta'];
$otro_al_s = $row['otro_al_s'];
$otro_al_n = $row['otro_al_n'];
$cant_frecu = $row['cant_frecu'];
$leche_mat = $row['leche_mat'];
$alimento_ayer = $row['alimento_ayer'];
$alimento_1 = $row['alimento_1'];
$alimento_2 = $row['alimento_2'];
$alimento_3 = $row['alimento_3'];
$alimento_4 = $row['alimento_4'];
$alimento_5 = $row['alimento_5'];
$canti_1 = $row['canti_1'];
$canti_2 = $row['canti_2'];
$canti_3 = $row['canti_3'];
$canti_4 = $row['canti_4'];
$canti_5 = $row['canti_5'];
$hora_1 = $row['hora_1'];
$hora_2 = $row['hora_2'];
$hora_3 = $row['hora_3'];
$hora_4 = $row['hora_4'];
$hora_5 = $row['hora_5'];
$porcion_s = $row['porcion_s'];
$porcion_n = $row['porcion_n'];
$quien_da = $row['quien_da'];
$enfer_cambio_s = $row['enfer_cambio_s'];
$enfer_cambio_n = $row['enfer_cambio_n'];
$cuales_alimen = $row['cuales_alimen'];
$bgc = $row['bgc'];
$polio = $row['polio'];
$hepatitis = $row['hepatitis'];
$penta_1 = $row['penta_1'];
$penta_2 = $row['penta_2'];
$penta_3 = $row['penta_3'];
$polio_1 = $row['polio_1'];
$polio_2 = $row['polio_2'];
$polio_3 = $row['polio_3'];
$fiebre_amarilla = $row['fiebre_amarilla'];
$triple_viral = $row['triple_viral'];
$dpt_r1 = $row['dpt_r1'];
$dpt_r2 = $row['dpt_r2'];
$polio_r1 = $row['polio_r1'];
$polio_5anios = $row['polio_5anios'];
$triple_r1 = $row['triple_r1'];
$meses_3 = $row['meses_3'];
$meses_6 = $row['meses_6'];
$meses_9 = $row['meses_9'];
$meses_16 = $row['meses_16'];
$meses_20 = $row['meses_20'];
$meses_24 = $row['meses_24'];
$meses_30 = $row['meses_30'];
$meses_36 = $row['meses_36'];
$meses_48 = $row['meses_48'];
$meses_60 = $row['meses_60'];
$no_rie = $row['no_rie'];
$nohablan = $row['nohablan'];
$noarrulla = $row['noarrulla'];
$noacompa = $row['noacompa'];
$higiene = $row['higiene'];
$salud = $row['salud'];
$juguetes = $row['juguetes'];
$nojugar = $row['nojugar'];
$accidentes = $row['accidentes'];
$leche_mat_n = $row['leche_mat_n'];
$meses_12 = $row['meses_12'];
break; }

?>
<script>

$(function(){

$("#close-hc_rejilla_2").click(function(){
$("#open-hc_rejilla_2").show();
$(this).hide();
$("#content-hc_rejilla_2").hide('slow');
});

$("#open-hc_rejilla_2").click(function(){
$("#close-hc_rejilla_2").show();
$(this).hide();
$("#content-hc_rejilla_2").show('slow');
});

});

</script>
<fieldset id="hc_rejilla_2">
<legend align="left"> <div class="arrow-c" id="close-hc_rejilla_2"></div> <div class="arrow-o" id="open-hc_rejilla_2" ></div> <font>Valoracion Medicina Especializada Rejilla 2</font></legend>
<div id="content-hc_rejilla_2">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_rejilla_2" id="guardar_hc_rejilla_2" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_rejilla_2" name="form_hc_rejilla_2" action="<?php echo @$action_form_hc_rejilla_2 ?>#hc_rejilla_2" method="post">

<input type="hidden" id="id_hc_rejilla_2" name="id_hc_rejilla_2" value="<?php echo @$id_hc_rejilla_2 ?>" />


<input type="hidden" class="input_txt valid" id="id_hc_rejilla_2" name="id_hc_rejilla_2" value="<?php echo @$id_hc_rejilla_2; ?>" />

<p>&nbsp;</p>
<table  border="0" cellspacing="0" cellpadding="0" class="data">

  <tr height="19">
    <td height="19" width="58">PROBLEMA</td>
    <td width="189">SIGNOS DE    ATENCIÓN</td>
    <td width="180">SI</td>
    <td width="94">NO</td>
    <td width="140">CLASIFICAR</td>
    <td width="190">¿QUÉ HACER?</td>
  </tr>
  <tr height="14">
    <td rowspan="18" height="319" width="58"> EVALÚE    LA<br />
      ALIMENTACIÓN</td>
    <td width="189">¿Le    da pecho al niño o niña?</td>
    <td width="180"><input type="text" class="input_txt valid" id="pecho_s" name="pecho_s" value="<?php echo @$pecho_s; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="pecho_n" name="pecho_n" value="<?php echo @$pecho_n; ?>" /></td>
    <td rowspan="6" width="140">PROBLEMAS CON LA<br />
      LACTANCIA: NO HAY<br />
      LACTANCIA POCA<br />
      FRECUENCIA LACTANCIA<br />
      NO EXCLUSIVA POSICION<br />
      INADECUADA AGARRE<br />
      INADECUADO</td>
    <td rowspan="6" width="190">* Hacer consejería en lactancia<br />
      -*Coordinar acciones con programas del ICBF<br />
      * Hacer seguimiento</td>
  </tr>
  <tr height="14">
    <td height="14" width="189">¿Cuántas veces al día?</td>
    <td colspan="2" width="180"><input type="text" class="input_txt valid" id="cuantas_veces" name="cuantas_veces" value="<?php echo @$cuantas_veces; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">También ¿durante la noche?</td>
    <td width="180"><input type="text" class="input_txt valid" id="noche_s" name="noche_s" value="<?php echo @$noche_s; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="noche_n" name="noche_n" value="<?php echo @$noche_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">¿Qué dificultades ha tenido con la lactancia?</td>
    <td colspan="2" width="180"><input type="text" class="input_txt valid" id="poblemas_lacta" name="poblemas_lacta" value="<?php echo @$poblemas_lacta; ?>" />
    &nbsp;</td>
  </tr>
  <tr height="14">
    <td height="14" width="189">¿ofrece algún otro alimento al niño o niña?</td>
    <td width="180"><input type="text" class="input_txt valid" id="otro_al_s" name="otro_al_s" value="<?php echo @$otro_al_s; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="otro_al_n" name="otro_al_n" value="<?php echo @$otro_al_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">Si lo hace ¿en qué cantidad o frecuencia?</td>
    <td colspan="2" width="180"><input type="text" class="input_txt valid" id="cant_frecu" name="cant_frecu" value="<?php echo @$cant_frecu; ?>" /></td>
  </tr>
  <tr height="27">
    <td height="27" width="189">¿El niño o niña recibe leche materna?</td>
    <td width="180"><input type="text" class="input_txt valid" id="leche_mat" name="leche_mat" value="<?php echo @$leche_mat; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="leche_mat_n" name="leche_mat_n" value="<?php echo @$leche_mat_n; ?>" /></td>
    <td rowspan="12" width="140">PROBLEMAS DE<br />
      ALIMENTACIÓN:<br />
      CALIDAD VARIEDAD<br />
      CONSISTENCIA<br />
      FRECUENCIA CANTIDAD<br />
      AUMENTACIÓN ACTIVA</td>
    <td rowspan="12" width="190">*Hacer consejería en alimentación<br />
      *Coordinar acciones con programas del ICBF<br />
      * Hacer seguimiento<br />    </td>
  </tr>
  <tr height="41">
    <td height="41" width="189">¿Qué alimentos tomó el niño o niña el día de    ayer desde<br />
      que se despertó hasta que se acostó?</td>
    <td colspan="2" width="180"><input type="text" class="input_txt valid" id="alimento_ayer" name="alimento_ayer" value="<?php echo @$alimento_ayer; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">ALIMENTACION O PREPARACION</td>
    <td width="180">CANTIDAD</td>
    <td width="94">HORA</td>
  </tr>
  <tr height="14">
    <td height="14" width="189"><input type="text" class="input_txt valid" id="alimento_1" name="alimento_1" value="<?php echo @$alimento_1; ?>" /></td>
    <td width="180"><input type="text" class="input_txt valid" id="canti_1" name="canti_1" value="<?php echo @$canti_1; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="hora_1" name="hora_1" value="<?php echo @$hora_1; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189"><input type="text" class="input_txt valid" id="alimento_2" name="alimento_2" value="<?php echo @$alimento_2; ?>" /></td>
    <td width="180"><input type="text" class="input_txt valid" id="canti_2" name="canti_2" value="<?php echo @$canti_2; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="hora_2" name="hora_2" value="<?php echo @$hora_2; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189"><input type="text" class="input_txt valid" id="alimento_3" name="alimento_3" value="<?php echo @$alimento_3; ?>" /></td>
    <td width="180"><input type="text" class="input_txt valid" id="canti_3" name="canti_3" value="<?php echo @$canti_3; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="hora_3" name="hora_3" value="<?php echo @$hora_3; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189"><input type="text" class="input_txt valid" id="alimento_4" name="alimento_4" value="<?php echo @$alimento_4; ?>" /></td>
    <td width="180"><input type="text" class="input_txt valid" id="canti_4" name="canti_4" value="<?php echo @$canti_4; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="hora_4" name="hora_4" value="<?php echo @$hora_4; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189"><input type="text" class="input_txt valid" id="alimento_5" name="alimento_5" value="<?php echo @$alimento_5; ?>" /></td>
    <td width="180"><input type="text" class="input_txt valid" id="canti_5" name="canti_5" value="<?php echo @$canti_5; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="hora_5" name="hora_5" value="<?php echo @$hora_5; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">¿El niño o niña recibe su propia porción?</td>
    <td width="180"><input type="text" class="input_txt valid" id="porcion_s" name="porcion_s" value="<?php echo @$porcion_s; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="porcion_n" name="porcion_n" value="<?php echo @$porcion_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">¿Quién le da de comer al niño o niña?</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="quien_da" name="quien_da" value="<?php echo @$quien_da; ?>" /></td>
  </tr>
  <tr height="41">
    <td height="41" width="189">Cuando el niño se enferma ¿hay cambios<br />
      en su alimentación?<br />    </td>
    <td width="180"><input type="text" class="input_txt valid" id="enfer_cambio_s" name="enfer_cambio_s" value="<?php echo @$enfer_cambio_s; ?>" /></td>
    <td width="94"><input type="text" class="input_txt valid" id="enfer_cambio_n" name="enfer_cambio_n" value="<?php echo @$enfer_cambio_n; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="189">Si lo hace ¿cuáles son?</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="cuales_alimen" name="cuales_alimen" value="<?php echo @$cuales_alimen; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table  border="0" cellspacing="0" cellpadding="0" class="data">
  <col width="184" />
  <col width="246" />
  <col width="116" />
  <col width="56" />
  <col width="142" />
  <col width="190" />
  <col width="178" />
  <tr height="19">
    <td rowspan="14" height="201" width="156">REVISE ESQUEMA DE<br />
      VACUNACIÓN<br />    </td>
    <td rowspan="2" width="116">Recién nacido</td>
    <td width="148">BGC</td>
    <td width="48">Polio</td>
    <td width="107">Hepatitis</td>
    <td rowspan="14" width="126">ESQUEMA<br />
      INCOMPLETO<br />    </td>
    <td rowspan="14" width="237">*Hacer consejería en    vacunación<br />
      * Hacer referencia a la IPS<br />
      * Hacer seguimiento</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="bgc" name="bgc" value="<?php echo @$bgc; ?>" /></td>
    <td width="48"><input type="text" class="input_txt valid" id="polio" name="polio" value="<?php echo @$polio; ?>" /></td>
    <td width="107"><input type="text" class="input_txt valid" id="hepatitis" name="hepatitis" value="<?php echo @$hepatitis; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">2 meses</td>
    <td width="148">Pentavalente    1</td>
    <td colspan="2">Polio    – 1</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="penta_1" name="penta_1" value="<?php echo @$penta_1; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="polio_1" name="polio_1" value="<?php echo @$polio_1; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">4 meses</td>
    <td width="148">Pentavalente    2</td>
    <td colspan="2">Polio    – 2</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="penta_2" name="penta_2" value="<?php echo @$penta_2; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="polio_2" name="polio_2" value="<?php echo @$polio_2; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">6 meses</td>
    <td width="148">Pentavalente    3</td>
    <td colspan="2">Polio    – 3</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="penta_3" name="penta_3" value="<?php echo @$penta_3; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="polio_3" name="polio_3" value="<?php echo @$polio_3; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">12 meses</td>
    <td width="148">Fiebre    Amarilla</td>
    <td colspan="2">Triple viral</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="fiebre_amarilla" name="fiebre_amarilla" value="<?php echo @$fiebre_amarilla; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="triple_viral" name="triple_viral" value="<?php echo @$triple_viral; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">18 meses</td>
    <td width="148">DPT    –R1</td>
    <td colspan="2">Polio – R1</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="dpt_r1" name="dpt_r1" value="<?php echo @$dpt_r1; ?>" /></td>
    <td colspan="2"><input type="text" class="input_txt valid" id="polio_r1" name="polio_r1" value="<?php echo @$polio_r1; ?>" /></td>
  </tr>
  <tr height="14">
    <td rowspan="2" height="28" width="116">5 años</td>
    <td width="148">DPT    –R2</td>
    <td width="48">Polio    –R2</td>
    <td width="107">Triple    viral –R1</td>
  </tr>
  <tr height="14">
    <td height="14" width="148"><input type="text" class="input_txt valid" id="dpt_r2" name="dpt_r2" value="<?php echo @$dpt_r2; ?>" /></td>
    <td width="48"><input type="text" class="input_txt valid" id="polio_5anios" name="polio_5anios" value="<?php echo @$polio_5anios; ?>" /></td>
    <td width="107"><input type="text" class="input_txt valid" id="triple_r1" name="triple_r1" value="<?php echo @$triple_r1; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table  border="0" cellspacing="0" cellpadding="0" class="data">

  <tr height="14">
    <td rowspan="11" height="154" width="140">EVALÚE EL DESARROLLO</td>
    <td width="325">A los 3 meses    no levanta la cabeza</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_3" name="meses_3" value="<?php echo @$meses_3; ?>" /></td>
    <td rowspan="11" width="155">PROBLEMAS EN EL<br />
      DESARROLLOS DEL NIÑO<br />
      O LA NIÑA<br />    </td>
    <td rowspan="11" width="227">* Hacer consejería en    desarrollo<br />
      *     Hacer referencia para evaluación<br />
      completa del    desarrollo<br />
      *Coordinar acciones con programas de<br />
      estimulación al    desarrollo<br />
      *Hacer seguimiento al niño o    niña<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 6 meses no se sienta con apoyo</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_6" name="meses_6" value="<?php echo @$meses_6; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 9 meses no se sienta por si solo</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_9" name="meses_9" value="<?php echo @$meses_9; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 12 meses no camina con apoyo</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_12" name="meses_12" value="<?php echo @$meses_12; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 16 meses no camina solo</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_16" name="meses_16" value="<?php echo @$meses_16; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 20 meses no corre rápido</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_20" name="meses_20" value="<?php echo @$meses_20; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 24 meses no patea la pelota</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_24" name="meses_24" value="<?php echo @$meses_24; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 30 meses no se empina en ambos pies</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_30" name="meses_30" value="<?php echo @$meses_30; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 36 meses no sube y baja las escaleras    solo</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_36" name="meses_36" value="<?php echo @$meses_36; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 48 meses no lanza y atrapa la pelota</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_48" name="meses_48" value="<?php echo @$meses_48; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="325">A los 60 meses : no se para y salta en un pie</td>
    <td width="125"><input type="text" class="input_txt valid" id="meses_60" name="meses_60" value="<?php echo @$meses_60; ?>" />
&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table  border="0" cellspacing="0" cellpadding="0" class="data">
  <tr height="14">
    <td rowspan="9" height="126" width="146">EVALÚE EL DESARROLLO</td>
    <td width="326">- No le sonríen</td>
    <td width="56"><input type="text" class="input_txt valid" id="no_rie" name="no_rie" value="<?php echo @$no_rie; ?>" /></td>
    <td rowspan="9" width="121">PROBLEMAS CON EL<br />
      BUEN TRATO<br />    </td>
    <td rowspan="9" width="242">  - Hacer consejería en buen trato<br />
      - Coordinar acciones con el    ICBF,<br />
      Alcaldía o con organizaciones    de<br />
      apoyo a la familia<br />
      - Hacer seguimiento al niño o niña<br />    </td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No le hablan</td>
    <td width="56"><input type="text" class="input_txt valid" id="nohablan" name="nohablan" value="<?php echo @$nohablan; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No le alzan o arrullan</td>
    <td width="56"><input type="text" class="input_txt valid" id="noarrulla" name="noarrulla" value="<?php echo @$noarrulla; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No lo acompañan</td>
    <td width="56"><input type="text" class="input_txt valid" id="noacompa" name="noacompa" value="<?php echo @$noacompa; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No se preocupan por la higiene</td>
    <td width="56"><input type="text" class="input_txt valid" id="higiene" name="higiene" value="<?php echo @$higiene; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No se preocupan por la salud</td>
    <td width="56"><input type="text" class="input_txt valid" id="salud" name="salud" value="<?php echo @$salud; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No tiene juguetes</td>
    <td width="56"><input type="text" class="input_txt valid" id="juguetes" name="juguetes" value="<?php echo @$juguetes; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">- No le juegan o permiten que juegue</td>
    <td width="56"><input type="text" class="input_txt valid" id="nojugar" name="nojugar" value="<?php echo @$nojugar; ?>" /></td>
  </tr>
  <tr height="14">
    <td height="14" width="326">Accidentes frecuentes</td>
    <td width="56"><input type="text" class="input_txt valid" id="accidentes" name="accidentes" value="<?php echo @$accidentes; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1028" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" height="82">NO    HAY PROBLEMAS EN
      LA APLICACIÓN DE
     MEDIDAS
        DE PROTECCIÓN
    </td>
    <td colspan="2">PRESENCIA    DE FACTORES<br />
      PROTECTORES DE LA<br />
      SALUD<br />
    </td>
    <td width="298">*Hacer    consejería en medidas preventivas<br />
      *Coordinar acciones comunitarias de promoción       de la salud de niños y niñas en la    familia</td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>