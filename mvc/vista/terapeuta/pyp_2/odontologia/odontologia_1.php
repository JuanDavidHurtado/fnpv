<?php
if (isset($_REQUEST['guardar_hc_odontologia']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_odontologia'] == 'new') {

$sql = "INSERT INTO hc_odontologia (
`id_hc_odontologia`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`nombre_a`,
`telefono_a`,
`parentesco`,
`finalidad`,
`causa_ext`,
`enfermedad`,
`patologico`,
`quirurgico`,
`habito`,
`farmaco`,
`alergico`,
`familiar`,
`labio`,
`encia`,
`com_labial`,
`lengua`,
`mucosa_l`,
`piso_bucal`,
`mucosa_b`,
`paladar`,
`principal_cod`,
`rel_1`,
`rel_2`,
`rel_3`,
`tipo_dx`,
`nombre_1`,
`nombre_2`,
`nombre_3`,
`nombre_principal`,
`medicamento_1`,
`presentacion_1`,
`cantidad_1`,
`dosificacion_1`,
`medicamento_2`,
`presentacion_2`,
`cantidad_2`,
`dosificacion_2`,
`justificacion_1`,
`lab_cup`,
`lab_nombre`,
`remision_cup`,
`remision_nombre`,
`diag_cup`,
`diag_nombre`,
`evolucion`,
`resumen`,
`otros`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['nombre_a']."' ,
'".$_REQUEST['telefono_a']."' ,
'".$_REQUEST['parentesco']."' ,
'".$_REQUEST['finalidad']."' ,
'".$_REQUEST['causa_ext']."' ,
'".$_REQUEST['enfermedad']."' ,
'".$_REQUEST['patologico']."' ,
'".$_REQUEST['quirurgico']."' ,
'".$_REQUEST['habito']."' ,
'".$_REQUEST['farmaco']."' ,
'".$_REQUEST['alergico']."' ,
'".$_REQUEST['familiar']."' ,
'".$_REQUEST['labio']."' ,
'".$_REQUEST['encia']."' ,
'".$_REQUEST['com_labial']."' ,
'".$_REQUEST['lengua']."' ,
'".$_REQUEST['mucosa_l']."' ,
'".$_REQUEST['piso_bucal']."' ,
'".$_REQUEST['mucosa_b']."' ,
'".$_REQUEST['paladar']."' ,
'".$_REQUEST['principal_cod']."' ,
'".$_REQUEST['rel_1']."' ,
'".$_REQUEST['rel_2']."' ,
'".$_REQUEST['rel_3']."' ,
'".$_REQUEST['tipo_dx']."' ,
'".$_REQUEST['nombre_1']."' ,
'".$_REQUEST['nombre_2']."' ,
'".$_REQUEST['nombre_3']."' ,
'".$_REQUEST['nombre_principal']."' ,
'".$_REQUEST['medicamento_1']."' ,
'".$_REQUEST['presentacion_1']."' ,
'".$_REQUEST['cantidad_1']."' ,
'".$_REQUEST['dosificacion_1']."' ,
'".$_REQUEST['medicamento_2']."' ,
'".$_REQUEST['presentacion_2']."' ,
'".$_REQUEST['cantidad_2']."' ,
'".$_REQUEST['dosificacion_2']."' ,
'".$_REQUEST['justificacion_1']."' ,
'".$_REQUEST['lab_cup']."' ,
'".$_REQUEST['lab_nombre']."' ,
'".$_REQUEST['remision_cup']."' ,
'".$_REQUEST['remision_nombre']."' ,
'".$_REQUEST['diag_cup']."' ,
'".$_REQUEST['diag_nombre']."' ,
'".$_REQUEST['evolucion']."' ,
'".$_REQUEST['resumen']."' ,
'".$_REQUEST['otros']."'
) ";


} else if ($_REQUEST['id_hc_odontologia'] != '') {

$sql = "UPDATE hc_odontologia set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`nombre_a` = '".$_REQUEST['nombre_a']."' ,
`telefono_a` = '".$_REQUEST['telefono_a']."' ,
`parentesco` = '".$_REQUEST['parentesco']."' ,
`finalidad` = '".$_REQUEST['finalidad']."' ,
`causa_ext` = '".$_REQUEST['causa_ext']."' ,
`enfermedad` = '".$_REQUEST['enfermedad']."' ,
`patologico` = '".$_REQUEST['patologico']."' ,
`quirurgico` = '".$_REQUEST['quirurgico']."' ,
`habito` = '".$_REQUEST['habito']."' ,
`farmaco` = '".$_REQUEST['farmaco']."' ,
`alergico` = '".$_REQUEST['alergico']."' ,
`familiar` = '".$_REQUEST['familiar']."' ,
`labio` = '".$_REQUEST['labio']."' ,
`encia` = '".$_REQUEST['encia']."' ,
`com_labial` = '".$_REQUEST['com_labial']."' ,
`lengua` = '".$_REQUEST['lengua']."' ,
`mucosa_l` = '".$_REQUEST['mucosa_l']."' ,
`piso_bucal` = '".$_REQUEST['piso_bucal']."' ,
`mucosa_b` = '".$_REQUEST['mucosa_b']."' ,
`paladar` = '".$_REQUEST['paladar']."' ,
`principal_cod` = '".$_REQUEST['principal_cod']."' ,
`rel_1` = '".$_REQUEST['rel_1']."' ,
`rel_2` = '".$_REQUEST['rel_2']."' ,
`rel_3` = '".$_REQUEST['rel_3']."' ,
`tipo_dx` = '".$_REQUEST['tipo_dx']."' ,
`nombre_1` = '".$_REQUEST['nombre_1']."' ,
`nombre_2` = '".$_REQUEST['nombre_2']."' ,
`nombre_3` = '".$_REQUEST['nombre_3']."' ,
`nombre_principal` = '".$_REQUEST['nombre_principal']."' ,
`medicamento_1` = '".$_REQUEST['medicamento_1']."' ,
`presentacion_1` = '".$_REQUEST['presentacion_1']."' ,
`cantidad_1` = '".$_REQUEST['cantidad_1']."' ,
`dosificacion_1` = '".$_REQUEST['dosificacion_1']."' ,
`medicamento_2` = '".$_REQUEST['medicamento_2']."' ,
`presentacion_2` = '".$_REQUEST['presentacion_2']."' ,
`cantidad_2` = '".$_REQUEST['cantidad_2']."' ,
`dosificacion_2` = '".$_REQUEST['dosificacion_2']."' ,
`justificacion_1` = '".$_REQUEST['justificacion_1']."' ,
`lab_cup` = '".$_REQUEST['lab_cup']."' ,
`lab_nombre` = '".$_REQUEST['lab_nombre']."' ,
`remision_cup` = '".$_REQUEST['remision_cup']."' ,
`remision_nombre` = '".$_REQUEST['remision_nombre']."' ,
`diag_cup` = '".$_REQUEST['diag_cup']."' ,
`diag_nombre` = '".$_REQUEST['diag_nombre']."' ,
`evolucion` = '".$_REQUEST['evolucion']."' ,
`resumen` = '".$_REQUEST['resumen']."' ,
`otros` = '".$_REQUEST['otros']."' WHERE `id_hc_odontologia` = '".$_REQUEST['id_hc_odontologia']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_odontologia = 'new';
$sql = "SELECT * from hc_odontologia WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_odontologia = $row['id_hc_odontologia'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$nombre_a = $row['nombre_a'];
$telefono_a = $row['telefono_a'];
$parentesco = $row['parentesco'];
$finalidad = $row['finalidad'];
$causa_ext = $row['causa_ext'];
$enfermedad = $row['enfermedad'];
$patologico = $row['patologico'];
$quirurgico = $row['quirurgico'];
$habito = $row['habito'];
$farmaco = $row['farmaco'];
$alergico = $row['alergico'];
$familiar = $row['familiar'];
$labio = $row['labio'];
$encia = $row['encia'];
$com_labial = $row['com_labial'];
$lengua = $row['lengua'];
$mucosa_l = $row['mucosa_l'];
$piso_bucal = $row['piso_bucal'];
$mucosa_b = $row['mucosa_b'];
$paladar = $row['paladar'];
$principal_cod = $row['principal_cod'];
$rel_1 = $row['rel_1'];
$rel_2 = $row['rel_2'];
$rel_3 = $row['rel_3'];
$tipo_dx = $row['tipo_dx'];
$nombre_1 = $row['nombre_1'];
$nombre_2 = $row['nombre_2'];
$nombre_3 = $row['nombre_3'];
$nombre_principal = $row['nombre_principal'];
$medicamento_1 = $row['medicamento_1'];
$presentacion_1 = $row['presentacion_1'];
$cantidad_1 = $row['cantidad_1'];
$dosificacion_1 = $row['dosificacion_1'];
$medicamento_2 = $row['medicamento_2'];
$presentacion_2 = $row['presentacion_2'];
$cantidad_2 = $row['cantidad_2'];
$dosificacion_2 = $row['dosificacion_2'];
$justificacion_1 = $row['justificacion_1'];
$lab_cup = $row['lab_cup'];
$lab_nombre = $row['lab_nombre'];
$remision_cup = $row['remision_cup'];
$remision_nombre = $row['remision_nombre'];
$diag_cup = $row['diag_cup'];
$diag_nombre = $row['diag_nombre'];
$evolucion = $row['evolucion'];
$resumen = $row['resumen'];
$otros = $row['otros'];
break; }

?>
<script>

$(function(){

$("#close-hc_odontologia").click(function(){
$("#open-hc_odontologia").show();
$(this).hide();
$("#content-hc_odontologia").hide('slow');
});

$("#open-hc_odontologia").click(function(){
$("#close-hc_odontologia").show();
$(this).hide();
$("#content-hc_odontologia").show('slow');
});

});

</script>
<fieldset id="hc_odontologia">
<legend align="left"> <div class="arrow-c" id="close-hc_odontologia"></div> <div class="arrow-o" id="open-hc_odontologia" ></div> 
<font>Odontología</font></legend>
<div id="content-hc_odontologia">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_odontologia" id="guardar_hc_odontologia" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_odontologia" name="form_hc_odontologia" action="<?php echo @$action_form_hc_odontologia ?>#hc_odontologia" method="post">

<input type="hidden" id="id_hc_odontologia" name="id_hc_odontologia" value="<?php echo @$id_hc_odontologia ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<div align="center">

    <input type="hidden" class="input_txt valid" id="id_hc_odontologia" name="id_hc_odontologia" value="<?php echo @$id_hc_odontologia; ?>" />
    HISTORIA CLÍNICA ODONTOLOGÍA</p>
  <BR>
</div>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="127" />
  <col width="139" />
  <tr height="18">
    <td colspan="2" height="18"><div align="center">DATOS    PARENTESCO</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="168">NOMBRE</td>
    <td width="371"><input type="text" class="input_txt valid" id="nombre_a" name="nombre_a" value="<?php echo @$nombre_a; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="168">TELÉFONO</td>
    <td width="371"><input type="text" class="input_txt valid" id="telefono_a" name="telefono_a" value="<?php echo @$telefono_a; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="168">PARENTESCO</td>
    <td width="371"><input type="text" class="input_txt valid" id="parentesco" name="parentesco" value="<?php echo @$parentesco; ?>" /></td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18"><div align="center">MOTIVO    CONSULTA</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="168">FINALIDAD</td>
    <td width="371"><textarea name="finalidad" cols="50" rows="3" id="finalidad"><?php echo @$finalidad; ?></textarea></td>
  </tr>
  
  <tr height="18">
    <td height="18" width="168">ENFERMEDAD ACTUAL</td>
    <td width="371"><textarea name="enfermedad" cols="50" rows="3" id="enfermedad"><?php echo @$enfermedad; ?></textarea></td>
  </tr>
  </table>
  <br>
  <table width="461" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr height="18">
    <td colspan="2" height="18"><div align="center">ANTECEDENTES</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">PATOLOGICOS</td>
    <td width="295">QUIRUGICOS</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="patologico" name="patologico" value="<?php echo @$patologico; ?>" /></td>
    <td width="295"><input type="text" id="quirurgico" name="quirurgico" value="<?php echo @$quirurgico; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">HABITOS</td>
    <td width="295">FARMACOLOGICOS</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="habito" name="habito" value="<?php echo @$habito; ?>" /></td>
    <td width="295"><input type="text" id="farmaco" name="farmaco" value="<?php echo @$farmaco; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">ALERGICOS</td>
    <td width="295">FAMILIARES</td>
  </tr>
  <tr height="18">
    <td height="18"><input type="text" class="input_txt valid" id="alergico" name="alergico" value="<?php echo @$alergico; ?>" /></td>
    <td><input type="text" id="familiar" name="familiar" value="<?php echo @$familiar; ?>" /></td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18"><div align="center">EXAMEN    ODONTOLOGICO</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">LABIOS</td>
    <td width="295">ENCIAS</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="labio" name="labio" value="<?php echo @$labio; ?>" /></td>
    <td width="295"><input type="text" class="input_txt valid" id="encia" name="encia" value="<?php echo @$encia; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">COMISURA LABIAL</td>
    <td width="295">LENGUA</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="com_labial" name="com_labial" value="<?php echo @$com_labial; ?>" /></td>
    <td width="295"><input type="text" class="input_txt valid" id="lengua" name="lengua" value="<?php echo @$lengua; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">MUCOSA LABIAL</td>
    <td width="295">PISO    BUCAL</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="mucosa_l" name="mucosa_l" value="<?php echo @$mucosa_l; ?>" /></td>
    <td width="295"><input type="text" class="input_txt valid" id="piso_bucal" name="piso_bucal" value="<?php echo @$piso_bucal; ?>" /></td>
  </tr>
  <tr height="18">
    <td height="18" width="244">MUCOSA BUCAL</td>
    <td width="295">PALADAR</td>
  </tr>
  <tr height="18">
    <td height="18" width="244"><input type="text" class="input_txt valid" id="mucosa_b" name="mucosa_b" value="<?php echo @$mucosa_b; ?>" /></td>
    <td width="295"><input type="text" class="input_txt valid" id="paladar" name="paladar" value="<?php echo @$paladar; ?>" /></td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18">OTROS</td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18"><input name="otros" type="text" id="otros" value="<?php echo @$otros; ?>" size="50" /></td>
  </tr>
</table>
<BR>
<table border="1" align="center" cellpadding="0" cellspacing="0">

  <tr height="18">
    <td colspan="4" height="18" width="448"><div align="center">FORMULA MEDICA</div></td>
  </tr>
  <tr height="18">
    <td colspan="4" height="18" width="448">FORMULA POS</td>
  </tr>
  <tr height="18">
    <td height="18" width="127">MEDICAMENTO</td>
    <td width="139">PRESENTACION</td>
    <td width="83">CANTIDAD</td>
    <td width="99">DOSIFICACION</td>
  </tr>
  <tr height="18">
    <td height="18" width="127"><input type="text" class="input_txt valid" id="medicamento_1" name="medicamento_1" value="<?php echo @$medicamento_1; ?>" /></td>
    <td width="139"><input type="text" class="input_txt valid" id="presentacion_1" name="presentacion_1" value="<?php echo @$presentacion_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="cantidad_1" name="cantidad_1" value="<?php echo @$cantidad_1; ?>" /></td>
    <td width="99"><input type="text" class="input_txt valid" id="dosificacion_1" name="dosificacion_1" value="<?php echo @$dosificacion_1; ?>" /></td>
  </tr>
  <tr height="18">
    <td colspan="4" height="18" width="448">FORMULA NO POS</td>
  </tr>
  <tr height="18">
    <td height="18" width="127">MEDICAMENTO</td>
    <td width="139">PRESENTACION</td>
    <td width="83">CANTIDAD</td>
    <td width="99">DOSIFICACION</td>
  </tr>
  <tr height="18">
    <td height="18" width="127"><input type="text" class="input_txt valid" id="medicamento_2" name="medicamento_2" value="<?php echo @$medicamento_2; ?>" /></td>
    <td width="139"><input type="text" class="input_txt valid" id="presentacion_2" name="presentacion_2" value="<?php echo @$presentacion_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="cantidad_2" name="cantidad_2" value="<?php echo @$cantidad_2; ?>" /></td>
    <td width="99"><input type="text" class="input_txt valid" id="dosificacion_2" name="dosificacion_2" value="<?php echo @$dosificacion_2; ?>" /></td>
  </tr>
  <tr height="18">
    <td colspan="4" height="18" width="448">JUSTIFICACION    MEDICAMENTO 1</td>
  </tr>
  <tr height="18">
    <td colspan="4" height="18" width="448"><textarea name="justificacion_1" cols="50" rows="2" id="justificacion_1"><?php echo @$justificacion_1; ?></textarea></td>
  </tr>
</table>
<BR>
<table width="434" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="127" />
  <col width="139" />
  <tr height="18">
    <td colspan="2" height="18"><div align="center">REMISIONES</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="127">CUPS</td>
    <td width="254">NOMBRE</td>
  </tr>
  <tr height="18">
    <td height="18" width="127"><input type="text" class="input_txt valid" id="remision_cup" name="remision_cup" value="<?php echo @$remision_cup; ?>" /></td>
    <td width="254"><input name="remision_nombre" type="text" id="remision_nombre" value="<?php echo @$remision_nombre; ?>" size="50" /></td>
  </tr>
</table>
<BR>
<table border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="127" />
  <col width="139" />
  <tr height="18">
    <td colspan="2" height="18"><div align="center">APOYOS    DIAGNOSTICOS Y PROCEDIMIENTOS</div></td>
  </tr>
  <tr height="18">
    <td height="18" width="132">CUPS</td>
    <td width="323">NOMBRE</td>
  </tr>
  <tr height="18">
    <td height="18" width="132"><input type="text" class="input_txt valid" id="diag_cup" name="diag_cup" value="<?php echo @$diag_cup; ?>" /></td>
    <td width="323"><input name="diag_nombre" type="text" id="diag_nombre" value="<?php echo @$diag_nombre; ?>" size="50" /></td>
  </tr>
</table>
<BR>
<table width="375" border="1" align="center" cellpadding="0" cellspacing="0">
  <col width="127" />
  <col width="139" />
  <tr height="18">
    <td colspan="2" height="18" width="371">EVOLUCIÓN</td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18" width="371"><textarea name="evolucion" cols="50" id="evolucion"><?php echo @$evolucion; ?></textarea></td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18" width="371">OBSERVACIONES</td>
  </tr>
  <tr height="18">
    <td colspan="2" height="18" width="371"><textarea name="resumen" cols="50" rows="4" id="resumen"><?php echo @$resumen; ?></textarea></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>

<a href='#' onclick='imprSelec("content-hc_odontologia", true)' class="no_print">Imprimir</a>
</fieldset>