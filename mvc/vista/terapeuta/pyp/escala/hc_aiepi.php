Database
Tabla    Aceptar
<?php
if (isset($_REQUEST['guardar_hc_aiepi']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_aiepi'] == 'new') {

$sql = "INSERT INTO hc_aiepi (
`id_hc_aiepi`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`vom_1`,
`vomito2`,
`pecho1`,
`pecho2`,
`convul1`,
`convul2`,
`letar1`,
`letar2`,
`obse2meses`,
`enfe_grave`,
`res1`,
`res2`,
`diarrea1`,
`diarrea2`,
`fiebre1`,
`fiebre2`,
`oidod1`,
`oidod2`,
`garga1`,
`garga2`,
`sbucal1`,
`sbucal2`,
`emanciacio1`,
`emancia2`,
`apareni_1`,
`edemapie1`,
`edemapi2`,
`pesoedad_1`,
`talla_edad1`,
`pero_talla1`,
`mc_edad1`,
`tendenciapeso1`,
`observaciontendencia`,
`anemias1`,
`anemias2`,
`smalta1`,
`smalta2`,
`desarrom1`,
`desarrom2`,
`carne_vacuna`,
`edad_pvacuna`,
`nombrevacuna`,
`obserm12`,
`mater1`,
`mater2`,
`pechon1`,
`pechon2`,
`m6ali1`,
`m6ali2`,
`lactaactual1`,
`lactactual2`,
`meses_1`,
`meses_2`,
`meses_3`,
`meses_4`,
`meses_5`,
`porcion1`,
`porcion2`,
`cambic1`,
`cambic2`,
`vitamina1`,
`vitamina2`,
`proxdosis`,
`albenda1`,
`albenda2`,
`hierro1`,
`hierro2`,
`obserhierro`,
`alimendete`,
`otroprobel`,
`recomendav1`,
`recomendav2`,
`recomendav3`,
`recomendav4`,
`recomendav5`,
`recomendav6`,
`desn_1`,
`desn_2`,
`desn_3`,
`desn_4`,
`desn_5`,
`desn_6`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['vom_1']."' ,
'".$_REQUEST['vomito2']."' ,
'".$_REQUEST['pecho1']."' ,
'".$_REQUEST['pecho2']."' ,
'".$_REQUEST['convul1']."' ,
'".$_REQUEST['convul2']."' ,
'".$_REQUEST['letar1']."' ,
'".$_REQUEST['letar2']."' ,
'".$_REQUEST['obse2meses']."' ,
'".$_REQUEST['enfe_grave']."' ,
'".$_REQUEST['res1']."' ,
'".$_REQUEST['res2']."' ,
'".$_REQUEST['diarrea1']."' ,
'".$_REQUEST['diarrea2']."' ,
'".$_REQUEST['fiebre1']."' ,
'".$_REQUEST['fiebre2']."' ,
'".$_REQUEST['oidod1']."' ,
'".$_REQUEST['oidod2']."' ,
'".$_REQUEST['garga1']."' ,
'".$_REQUEST['garga2']."' ,
'".$_REQUEST['sbucal1']."' ,
'".$_REQUEST['sbucal2']."' ,
'".$_REQUEST['emanciacio1']."' ,
'".$_REQUEST['emancia2']."' ,
'".$_REQUEST['apareni_1']."' ,
'".$_REQUEST['edemapie1']."' ,
'".$_REQUEST['edemapi2']."' ,
'".$_REQUEST['pesoedad_1']."' ,
'".$_REQUEST['talla_edad1']."' ,
'".$_REQUEST['pero_talla1']."' ,
'".$_REQUEST['mc_edad1']."' ,
'".$_REQUEST['tendenciapeso1']."' ,
'".$_REQUEST['observaciontendencia']."' ,
'".$_REQUEST['anemias1']."' ,
'".$_REQUEST['anemias2']."' ,
'".$_REQUEST['smalta1']."' ,
'".$_REQUEST['smalta2']."' ,
'".$_REQUEST['desarrom1']."' ,
'".$_REQUEST['desarrom2']."' ,
'".$_REQUEST['carne_vacuna']."' ,
'".$_REQUEST['edad_pvacuna']."' ,
'".$_REQUEST['nombrevacuna']."' ,
'".$_REQUEST['obserm12']."' ,
'".$_REQUEST['mater1']."' ,
'".$_REQUEST['mater2']."' ,
'".$_REQUEST['pechon1']."' ,
'".$_REQUEST['pechon2']."' ,
'".$_REQUEST['m6ali1']."' ,
'".$_REQUEST['m6ali2']."' ,
'".$_REQUEST['lactaactual1']."' ,
'".$_REQUEST['lactactual2']."' ,
'".$_REQUEST['meses_1']."' ,
'".$_REQUEST['meses_2']."' ,
'".$_REQUEST['meses_3']."' ,
'".$_REQUEST['meses_4']."' ,
'".$_REQUEST['meses_5']."' ,
'".$_REQUEST['porcion1']."' ,
'".$_REQUEST['porcion2']."' ,
'".$_REQUEST['cambic1']."' ,
'".$_REQUEST['cambic2']."' ,
'".$_REQUEST['vitamina1']."' ,
'".$_REQUEST['vitamina2']."' ,
'".$_REQUEST['proxdosis']."' ,
'".$_REQUEST['albenda1']."' ,
'".$_REQUEST['albenda2']."' ,
'".$_REQUEST['hierro1']."' ,
'".$_REQUEST['hierro2']."' ,
'".$_REQUEST['obserhierro']."' ,
'".$_REQUEST['alimendete']."' ,
'".$_REQUEST['otroprobel']."' ,
'".$_REQUEST['recomendav1']."' ,
'".$_REQUEST['recomendav2']."' ,
'".$_REQUEST['recomendav3']."' ,
'".$_REQUEST['recomendav4']."' ,
'".$_REQUEST['recomendav5']."' ,
'".$_REQUEST['recomendav6']."' ,
'".$_REQUEST['desn_1']."' ,
'".$_REQUEST['desn_2']."' ,
'".$_REQUEST['desn_3']."' ,
'".$_REQUEST['desn_4']."' ,
'".$_REQUEST['desn_5']."' ,
'".$_REQUEST['desn_6']."'
) ";


} else if ($_REQUEST['id_hc_aiepi'] != '') {

$sql = "UPDATE hc_aiepi set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`vom_1` = '".$_REQUEST['vom_1']."' ,
`vomito2` = '".$_REQUEST['vomito2']."' ,
`pecho1` = '".$_REQUEST['pecho1']."' ,
`pecho2` = '".$_REQUEST['pecho2']."' ,
`convul1` = '".$_REQUEST['convul1']."' ,
`convul2` = '".$_REQUEST['convul2']."' ,
`letar1` = '".$_REQUEST['letar1']."' ,
`letar2` = '".$_REQUEST['letar2']."' ,
`obse2meses` = '".$_REQUEST['obse2meses']."' ,
`enfe_grave` = '".$_REQUEST['enfe_grave']."' ,
`res1` = '".$_REQUEST['res1']."' ,
`res2` = '".$_REQUEST['res2']."' ,
`diarrea1` = '".$_REQUEST['diarrea1']."' ,
`diarrea2` = '".$_REQUEST['diarrea2']."' ,
`fiebre1` = '".$_REQUEST['fiebre1']."' ,
`fiebre2` = '".$_REQUEST['fiebre2']."' ,
`oidod1` = '".$_REQUEST['oidod1']."' ,
`oidod2` = '".$_REQUEST['oidod2']."' ,
`garga1` = '".$_REQUEST['garga1']."' ,
`garga2` = '".$_REQUEST['garga2']."' ,
`sbucal1` = '".$_REQUEST['sbucal1']."' ,
`sbucal2` = '".$_REQUEST['sbucal2']."' ,
`emanciacio1` = '".$_REQUEST['emanciacio1']."' ,
`emancia2` = '".$_REQUEST['emancia2']."' ,
`apareni_1` = '".$_REQUEST['apareni_1']."' ,
`edemapie1` = '".$_REQUEST['edemapie1']."' ,
`edemapi2` = '".$_REQUEST['edemapi2']."' ,
`pesoedad_1` = '".$_REQUEST['pesoedad_1']."' ,
`talla_edad1` = '".$_REQUEST['talla_edad1']."' ,
`pero_talla1` = '".$_REQUEST['pero_talla1']."' ,
`mc_edad1` = '".$_REQUEST['mc_edad1']."' ,
`tendenciapeso1` = '".$_REQUEST['tendenciapeso1']."' ,
`observaciontendencia` = '".$_REQUEST['observaciontendencia']."' ,
`anemias1` = '".$_REQUEST['anemias1']."' ,
`anemias2` = '".$_REQUEST['anemias2']."' ,
`smalta1` = '".$_REQUEST['smalta1']."' ,
`smalta2` = '".$_REQUEST['smalta2']."' ,
`desarrom1` = '".$_REQUEST['desarrom1']."' ,
`desarrom2` = '".$_REQUEST['desarrom2']."' ,
`carne_vacuna` = '".$_REQUEST['carne_vacuna']."' ,
`edad_pvacuna` = '".$_REQUEST['edad_pvacuna']."' ,
`nombrevacuna` = '".$_REQUEST['nombrevacuna']."' ,
`obserm12` = '".$_REQUEST['obserm12']."' ,
`mater1` = '".$_REQUEST['mater1']."' ,
`mater2` = '".$_REQUEST['mater2']."' ,
`pechon1` = '".$_REQUEST['pechon1']."' ,
`pechon2` = '".$_REQUEST['pechon2']."' ,
`m6ali1` = '".$_REQUEST['m6ali1']."' ,
`m6ali2` = '".$_REQUEST['m6ali2']."' ,
`lactaactual1` = '".$_REQUEST['lactaactual1']."' ,
`lactactual2` = '".$_REQUEST['lactactual2']."' ,
`meses_1` = '".$_REQUEST['meses_1']."' ,
`meses_2` = '".$_REQUEST['meses_2']."' ,
`meses_3` = '".$_REQUEST['meses_3']."' ,
`meses_4` = '".$_REQUEST['meses_4']."' ,
`meses_5` = '".$_REQUEST['meses_5']."' ,
`porcion1` = '".$_REQUEST['porcion1']."' ,
`porcion2` = '".$_REQUEST['porcion2']."' ,
`cambic1` = '".$_REQUEST['cambic1']."' ,
`cambic2` = '".$_REQUEST['cambic2']."' ,
`vitamina1` = '".$_REQUEST['vitamina1']."' ,
`vitamina2` = '".$_REQUEST['vitamina2']."' ,
`proxdosis` = '".$_REQUEST['proxdosis']."' ,
`albenda1` = '".$_REQUEST['albenda1']."' ,
`albenda2` = '".$_REQUEST['albenda2']."' ,
`hierro1` = '".$_REQUEST['hierro1']."' ,
`hierro2` = '".$_REQUEST['hierro2']."' ,
`obserhierro` = '".$_REQUEST['obserhierro']."' ,
`alimendete` = '".$_REQUEST['alimendete']."' ,
`otroprobel` = '".$_REQUEST['otroprobel']."' ,
`recomendav1` = '".$_REQUEST['recomendav1']."' ,
`recomendav2` = '".$_REQUEST['recomendav2']."' ,
`recomendav3` = '".$_REQUEST['recomendav3']."' ,
`recomendav4` = '".$_REQUEST['recomendav4']."' ,
`recomendav5` = '".$_REQUEST['recomendav5']."' ,
`recomendav6` = '".$_REQUEST['recomendav6']."' ,
`desn_1` = '".$_REQUEST['desn_1']."' ,
`desn_2` = '".$_REQUEST['desn_2']."' ,
`desn_3` = '".$_REQUEST['desn_3']."' ,
`desn_4` = '".$_REQUEST['desn_4']."' ,
`desn_5` = '".$_REQUEST['desn_5']."' ,
`desn_6` = '".$_REQUEST['desn_6']."' WHERE `id_hc_aiepi` = '".$_REQUEST['id_hc_aiepi']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_aiepi = 'new';
$sql = "SELECT * from hc_aiepi WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_aiepi = $row['id_hc_aiepi'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$vom_1 = $row['vom_1'];
$vomito2 = $row['vomito2'];
$pecho1 = $row['pecho1'];
$pecho2 = $row['pecho2'];
$convul1 = $row['convul1'];
$convul2 = $row['convul2'];
$letar1 = $row['letar1'];
$letar2 = $row['letar2'];
$obse2meses = $row['obse2meses'];
$enfe_grave = $row['enfe_grave'];
$res1 = $row['res1'];
$res2 = $row['res2'];
$diarrea1 = $row['diarrea1'];
$diarrea2 = $row['diarrea2'];
$fiebre1 = $row['fiebre1'];
$fiebre2 = $row['fiebre2'];
$oidod1 = $row['oidod1'];
$oidod2 = $row['oidod2'];
$garga1 = $row['garga1'];
$garga2 = $row['garga2'];
$sbucal1 = $row['sbucal1'];
$sbucal2 = $row['sbucal2'];
$emanciacio1 = $row['emanciacio1'];
$emancia2 = $row['emancia2'];
$apareni_1 = $row['apareni_1'];
$edemapie1 = $row['edemapie1'];
$edemapi2 = $row['edemapi2'];
$pesoedad_1 = $row['pesoedad_1'];
$talla_edad1 = $row['talla_edad1'];
$pero_talla1 = $row['pero_talla1'];
$mc_edad1 = $row['mc_edad1'];
$tendenciapeso1 = $row['tendenciapeso1'];
$observaciontendencia = $row['observaciontendencia'];
$anemias1 = $row['anemias1'];
$anemias2 = $row['anemias2'];
$smalta1 = $row['smalta1'];
$smalta2 = $row['smalta2'];
$desarrom1 = $row['desarrom1'];
$desarrom2 = $row['desarrom2'];
$carne_vacuna = $row['carne_vacuna'];
$edad_pvacuna = $row['edad_pvacuna'];
$nombrevacuna = $row['nombrevacuna'];
$obserm12 = $row['obserm12'];
$mater1 = $row['mater1'];
$mater2 = $row['mater2'];
$pechon1 = $row['pechon1'];
$pechon2 = $row['pechon2'];
$m6ali1 = $row['m6ali1'];
$m6ali2 = $row['m6ali2'];
$lactaactual1 = $row['lactaactual1'];
$lactactual2 = $row['lactactual2'];
$meses_1 = $row['meses_1'];
$meses_2 = $row['meses_2'];
$meses_3 = $row['meses_3'];
$meses_4 = $row['meses_4'];
$meses_5 = $row['meses_5'];
$porcion1 = $row['porcion1'];
$porcion2 = $row['porcion2'];
$cambic1 = $row['cambic1'];
$cambic2 = $row['cambic2'];
$vitamina1 = $row['vitamina1'];
$vitamina2 = $row['vitamina2'];
$proxdosis = $row['proxdosis'];
$albenda1 = $row['albenda1'];
$albenda2 = $row['albenda2'];
$hierro1 = $row['hierro1'];
$hierro2 = $row['hierro2'];
$obserhierro = $row['obserhierro'];
$alimendete = $row['alimendete'];
$otroprobel = $row['otroprobel'];
$recomendav1 = $row['recomendav1'];
$recomendav2 = $row['recomendav2'];
$recomendav3 = $row['recomendav3'];
$recomendav4 = $row['recomendav4'];
$recomendav5 = $row['recomendav5'];
$recomendav6 = $row['recomendav6'];
$desn_1 = $row['desn_1'];
$desn_2 = $row['desn_2'];
$desn_3 = $row['desn_3'];
$desn_4 = $row['desn_4'];
$desn_5 = $row['desn_5'];
$desn_6 = $row['desn_6'];
break; }

?>
<script>

$(function(){

$("#close-hc_aiepi").click(function(){
$("#open-hc_aiepi").show();
$(this).hide();
$("#content-hc_aiepi").hide('slow');
});

$("#open-hc_aiepi").click(function(){
$("#close-hc_aiepi").show();
$(this).hide();
$("#content-hc_aiepi").show('slow');
});

});

</script>

<script >


    function cargar_valor67() {

//lert("entro valor");


        document.getElementById('pesoedad_1').value ='<?php echo $pesoedad_1; ?>';
        document.getElementById('talla_edad1').value ='<?php echo $talla_edad1; ?>';
        document.getElementById('pero_talla1').value ='<?php echo $pero_talla1; ?>';
        document.getElementById('mc_edad1').value = '<?php echo $mc_edad1; ?>';
        document.getElementById('tendenciapeso1').value ='<?php echo $tendenciapeso1; ?>';
        document.getElementById('carne_vacuna').value ='<?php echo $carne_vacuna; ?>';

    }

</script>
<fieldset id="hc_aiepi">
<legend align="left"> <div class="arrow-c" id="close-hc_aiepi"></div> <div class="arrow-o" id="open-hc_aiepi" ></div> <font>Valoracion terapia ocupacional - hc_aiepi</font></legend>
<div id="content-hc_aiepi">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_aiepi" id="guardar_hc_aiepi" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>

 <body onLoad="cargar_valor67();" id="body_x2">
     
<form id="form_hc_aiepi" name="form_hc_aiepi" action="<?php echo @$action_form_hc_aiepi ?>#hc_aiepi" method="post">

<input type="hidden" id="id_hc_aiepi" name="id_hc_aiepi" value="<?php echo @$id_hc_aiepi ?>" />



<input type="hidden" class="input_txt valid" id="id_hc_aiepi" name="id_hc_aiepi" value="<?php echo @$id_hc_aiepi; ?>" />



<table align="center" cellpadding="0" cellspacing="0" class="data">

  <tr height="19">
    <td colspan="5" height="19">AIEPI &gt;2 MESES</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    1</div></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">VERIFICAR    SI EXISTEN SIGNOS GENERALES DE PELIGRO</td>
  </tr>
  <tr height="19">
    <td colspan="4" height="19">*PREGUNTAR</td>
    <td width="194">&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="300">No puede beber o tomar del pecho</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="pecho1" name="pecho1" value="<?php echo @$pecho1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="pecho2" name="pecho2" value="<?php echo @$pecho2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Vomita todo</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="vom_1" name="vom_1" value="<?php echo @$vom_1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="vomito2" name="vomito2" value="<?php echo @$vomito2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Convulsiones</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="convul1" name="convul1" value="<?php echo @$convul1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="convul2" name="convul2" value="<?php echo @$convul2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" colspan="5">*Observar y evaluar</td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Letargico o inconsciente</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="letar1" name="letar1" value="<?php echo @$letar1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="letar2" name="letar2" value="<?php echo @$letar2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">Observaciones</td>
  </tr>
  <tr height="31">
    <td colspan="5" height="31"><textarea name="obse2meses" cols="100" rows="3" class="input_txt valid" id="obse2meses"><?php echo @$obse2meses; ?></textarea></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Clasificacion de Enfermedad</td>
    <td colspan="4">Recomendaciones    de acuerdo a la estrategia</td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Enfermedad muy grave</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="enfe_grave" name="enfe_grave" value="<?php echo @$enfe_grave; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    2</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">TIENE TOS O DIFICULTAD RESPIRATORIA ?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="res1" name="res1" value="<?php echo @$res1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="res2" name="res2" value="<?php echo @$res2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    3</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">TIENE DIARREA ?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="diarrea1" name="diarrea1" value="<?php echo @$diarrea1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="diarrea2" name="diarrea2" value="<?php echo @$diarrea2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    4</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">TIENE FIEBRE ?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="fiebre1" name="fiebre1" value="<?php echo @$fiebre1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="fiebre2" name="fiebre2" value="<?php echo @$fiebre2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    5

    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">TIENE PROBLEMAS EN EL OIDO?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="oidod1" name="oidod1" value="<?php echo @$oidod1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="oidod2" name="oidod2" value="<?php echo @$oidod2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    6</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">TIENE PROBLEMAS EN LA GARGANTA ?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="garga1" name="garga1" value="<?php echo @$garga1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="garga2" name="garga2" value="<?php echo @$garga2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    7</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="300">LA SALUD BUCAL DEL MENOR ES INADECUADA</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="sbucal1" name="sbucal1" value="<?php echo @$sbucal1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="sbucal2" name="sbucal2" value="<?php echo @$sbucal2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    8</div></td>
  </tr>
  <tr height="19">
    <td height="19" colspan="5">*PREGUNTAR</td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Signos de emanciacion visibles ?</td>
    <td colspan="4">SI
      <input type="text" class="input_txt valid" id="emancia2" name="emancia2" value="<?php echo @$emancia2; ?>" />
      NO
      <input type="text" class="input_txt valid" id="emanciacio1" name="emanciacio1" value="<?php echo @$emanciacio1; ?>" /></td>
  </tr>
  <tr height="19">
    <td rowspan="6" height="114" width="300">Apariencia del niño</td>
    <td colspan="2">1.    Excesivamente flaco</td>
    <td colspan="2">Seleccione</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">2.Delgado pero saludable</td>
    <td colspan="2" rowspan="5"><select  id="apareni_1" name="apareni_1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">3.Normal</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">4.Con mas grasa y tejido musculoso</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">5.Con grasa excesiva</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">6.Otra</td>
  </tr>
  <tr height="19">
    <td height="19" width="300">Edema en ambos pies ?</td>
    <td width="77">SI</td>
    <td width="83"><input type="text" class="input_txt valid" id="edemapie1" name="edemapie1" value="<?php echo @$edemapie1; ?>" /></td>
    <td width="146">NO</td>
    <td width="194"><input type="text" class="input_txt valid" id="edemapi2" name="edemapi2" value="<?php echo @$edemapi2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="4" height="19">*Curvas    de crecimiento</td>
    <td width="194">Seleccione</td>
  </tr>
  <tr height="19">
    <td rowspan="4" height="76" width="300">Peso para la edad</td>
    <td colspan="3">1.    peso adecuado para la edad (&gt;=-1 a =&lt;1)</td>
    <td rowspan="4" width="194"><select  id="pesoedad_1" name="pesoedad_1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select>
    &nbsp;</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">2. riesgo de bajo peso para la edad (&lt;-1 a -2)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">3. bajo peso edad o DNT global (&lt;-2 a -3)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">4.Bajo peso edad severo o DNT global severa (&lt;-3)</td>
  </tr>
  <tr height="19">
    <td rowspan="3" height="57" width="300">Talla para la edad</td>
    <td colspan="3">1.Talla    edecuada para la edad (&gt;= -1 a =&lt;1)</td>
    <td rowspan="3" width="194"><select  id="talla_edad1" name="talla_edad1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">2.Riesgo baja talla (&gt;-2 a &lt;-1)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">3.talla baja para edad o retraso en talla (&lt;-2)</td>
  </tr>
  <tr height="19">
    <td rowspan="6" height="114" width="300">Peso para la Talla</td>
    <td colspan="3">1.peso    adecuado para la talla (&gt;=-1 a =&lt;1)</td>
    <td rowspan="6" width="194"><select  id="pero_talla1" name="pero_talla1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">2.riesgo de bajo peso para la talla (&gt;= -2 a =&lt;1)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">3.Bajo peso para la talla o DNT aguda (&lt;-2 a -3)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">4.Bajo peso para la talla o DNT aguda (&lt;-3)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">5.Sobrepeso  (&gt;= 1    a 2)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">6.Obesidad (&gt;2)</td>
  </tr>
  <tr height="19">
    <td rowspan="5" height="95" width="300">MC/edad</td>
    <td colspan="3">1.Adecuado  (&gt;= -1 a =&lt;1)</td>
    <td rowspan="5" width="194"><select  id="mc_edad1" name="mc_edad1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">2.Riesgo para delgadez     (&gt;= -2 a =&lt;1)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">3.Delgadez (&lt;-2)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">4.Sobrepeso  (&gt; 1    a =&lt; 2)</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">5.Obesidad (&gt;2)</td>
  </tr>
  <tr height="19">
    <td rowspan="3" height="57" width="300">Tendencia del peso</td>
    <td colspan="3">1.Descendente</td>
    <td rowspan="3" width="194"><select  id="tendenciapeso1" name="tendenciapeso1">
        <option value="100" selected="selected" >1</option>
        <option value="90">2</option>
        <option value="80">3</option>
        <option value="70">4</option>
      </select></td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">2.Horizontal</td>
  </tr>
  <tr height="19">
    <td colspan="3" height="19">3.Ascendente</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">Observaciones</td>
  </tr>
  <tr height="48">
    <td colspan="5" height="48"><input type="text" id="observaciontendencia" name="observaciontendencia" value="<?php echo @$observaciontendencia; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1093" align="center" cellpadding="0" cellspacing="0"  class="data">

  <tr height="19">
    <td height="19" width="343">Clasificacion    de enfermedad</td>
    <td colspan="4">Recomendaciones de acuerdo a la estrategia</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">1. DESNUTRICION GRAVE</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_1" name="desn_1" value="<?php echo @$desn_1; ?>" />&nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">2.PROBLEMA DEL CRECIMIENTO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_2" name="desn_2" value="<?php echo @$desn_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">3. OBESO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_3" name="desn_3" value="<?php echo @$desn_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">4. RIESGO PROBABLE DEL CRECIMIENTO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_4" name="desn_4" value="<?php echo @$desn_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">5. SOBREPESO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_5" name="desn_5" value="<?php echo @$desn_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">6. ADECUADO CRECIMIENTO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="desn_6" name="desn_6" value="<?php echo @$desn_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    9</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="343">HAY SIGNOS O SINTOMAS DE ANEMIA</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="anemias1" name="anemias1" value="<?php echo @$anemias1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="anemias2" name="anemias2" value="<?php echo @$anemias2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    10</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">EXISTE LA SOSPECHA DE MATRATO</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="smalta1" name="smalta1" value="<?php echo @$smalta1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="smalta2" name="smalta2" value="<?php echo @$smalta2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">MODULO    11</td>
  </tr>
  <tr height="38">
    <td height="38" width="343">SOSPRECHA DE ALTERACIONES EN DESARROLLO DEL MENOR</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="desarrom1" name="desarrom1" value="<?php echo @$desarrom1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="desarrom2" name="desarrom2" value="<?php echo @$desarrom2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    12</div></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">VERIFICAR    LOS ANTECEDENTES DE VACUNACION</td>
  </tr>
  <tr height="58">
    <td rowspan="4" height="115" width="343">CARNE DE VACUNACION</td>
    <td colspan="2">1.SIN    ANTECENDETE VACUNAL</td>
    <td colspan="2">SELECCIONE</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">2.CON ESQUEMA INCOMPLETO</td>
    <td colspan="2" rowspan="3"><select  id="carne_vacuna" name="carne_vacuna">
                  <option value="100" selected="selected" >1</option>
                              <option value="90">2</option>
                              <option value="80">3</option>
                              <option value="70">4</option>

                            </select>
    </td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">3.CON ESQUEMA ADECUADO PERA LA EDAD</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19">4.NO TRAE CARNET DE VACUNACION</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">EDAD PROXIMA VACUNA</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="edad_pvacuna" name="edad_pvacuna" value="<?php echo @$edad_pvacuna; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">Nombre de la proxima vacuna</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="nombrevacuna" name="nombrevacuna" value="<?php echo @$nombrevacuna; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">Observaciones</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="obserm12" cols="100" rows="3" id="obserm12"><?php echo @$obserm12; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><div align="center">MODULO    13</div></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">EVALUAR    LA ALIMENTACION</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">*PREUNTAR</td>
  </tr>
  <tr height="19">
    <td height="29" width="343">RECIBE LECHE MATERNA </td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="mater1" name="mater1" value="<?php echo @$mater1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="mater2" name="mater2" value="<?php echo @$mater2; ?>" />
    &nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">RECIBE PECHO EN LA NOCHE</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="pechon1" name="pechon1" value="<?php echo @$pechon1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="pechon2" name="pechon2" value="<?php echo @$pechon2; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="343">EL MENOR DE 6 MESES RESIBE OTRA ALIMENTACION O LECHE</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="m6ali1" name="m6ali1" value="<?php echo @$m6ali1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="m6ali2" name="m6ali2" value="<?php echo @$m6ali2; ?>" /></td>
  </tr>
  <tr height="58">
    <td rowspan="2" height="77" width="343">LACTANCIA MATERNA EXCLUSIVA HAS QUE EDAD</td>
    <td width="168">HASTA    LA ACTUALIDAD</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="lactaactual1" name="lactaactual1" value="<?php echo @$lactaactual1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="lactactual2" name="lactactual2" value="<?php echo @$lactactual2; ?>" /></td>
    <td colspan="3">MESES</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">*EL    MAYOR  DE 6 MESES O MAS RECIBE:</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">AL LEVANTARSE</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="meses_1" name="meses_1" value="<?php echo @$meses_1; ?>" />
    &nbsp;</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">A MEDIA MAÑANA</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="meses_2" name="meses_2" value="<?php echo @$meses_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">AL ALMUERZO</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="meses_3" name="meses_3" value="<?php echo @$meses_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">EN LA NOCHE</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="meses_4" name="meses_4" value="<?php echo @$meses_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">EN LA TARDE</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="meses_5" name="meses_5" value="<?php echo @$meses_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">RECIBE SU PROPIA PORCION</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="porcion1" name="porcion1" value="<?php echo @$porcion1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="porcion2" name="porcion2" value="<?php echo @$porcion2; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="343">CAMBIOS DE ALIMENTACION EN ESTA ENFERMEDAD</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="cambic1" name="cambic1" value="<?php echo @$cambic1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="cambic2" name="cambic2" value="<?php echo @$cambic2; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="343">RECIBIO  VITAMINA A    EN  LOS ULTIMOS 6 MESES</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="vitamina2" name="vitamina2" value="<?php echo @$vitamina2; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="vitamina1" name="vitamina1" value="<?php echo @$vitamina1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">PROXIMA DOSIS</td>
    <td colspan="4"><input type="text" class="input_txt valid" id="proxdosis" name="proxdosis" value="<?php echo @$proxdosis; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">RECIBIO ALBENDAZOL LOS ULTIMOS 6 MESES</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="albenda1" name="albenda1" value="<?php echo @$albenda1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="albenda2" name="albenda2" value="<?php echo @$albenda2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">RECIBIO HIERRO LOS ULTIMOS 6 MESES</td>
    <td width="168">SI</td>
    <td width="275"><input type="text" class="input_txt valid" id="hierro1" name="hierro1" value="<?php echo @$hierro1; ?>" /></td>
    <td width="41">NO</td>
    <td width="264"><input type="text" class="input_txt valid" id="hierro2" name="hierro2" value="<?php echo @$hierro2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">Observaciones</td>
  </tr>
  <tr height="58">
    <td colspan="5" height="58"><textarea name="obserhierro" cols="100" rows="3" id="obserhierro"><?php echo @$obserhierro; ?></textarea></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">Clasificacion de enfermedad</td>
    <td colspan="4">Recomendaciones de acuerdo a la estrategia</td>
  </tr>
  <tr height="19">
    <td height="19" width="343">PROBLEMA DE ALIMENTACION DETECTADO</td>
    <td colspan="4"><input name="alimendete" type="text" id="alimendete" value="<?php echo @$alimendete; ?>" size="100" maxlength="100" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="343">OTRO PROBLEMA DETECTADO</td>
    <td colspan="4"><input name="otroprobel" type="text" id="otroprobel" value="<?php echo @$otroprobel; ?>" size="100" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">CUANDO    VOLVER DE INMEDIATO AL SERVICIO (SIGNOS DE ALARMA)</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><input type="text" id="recomendav1" name="recomendav1" value="<?php echo @$recomendav1; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">REMISIONES</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="recomendav2" cols="100" rows="3" id="recomendav2"><?php echo @$recomendav2; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">MEDIDAS    PREVENTIVAS ESPECIFICAS</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="recomendav3" cols="100" rows="3" id="recomendav3"><?php echo @$recomendav3; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">RECOMENDACIONES    DE BUEN TRATO</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="recomendav4" cols="100" rows="3" id="recomendav4"><?php echo @$recomendav4; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">RECOMENDACIONES    DE ALIMENTACION</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="recomendav5" cols="100" rows="3" id="recomendav5"><?php echo @$recomendav5; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19">LABORATORIOS    A REALIZAR</td>
  </tr>
  <tr height="19">
    <td colspan="5" height="19"><textarea name="recomendav6" cols="100" rows="3" id="recomendav6"><?php echo @$recomendav6; ?></textarea></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</body>
</div>
</fieldset>