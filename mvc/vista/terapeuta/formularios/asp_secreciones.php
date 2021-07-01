<?php
if (isset($_REQUEST['guardar_asp_secreciones']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_asp_secreciones'] == 'new') {

$sql = "INSERT INTO asp_secreciones (
`id_asp_secreciones`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`fecha_1`,
`fecha_2`,
`fecha_3`,
`fecha_4`,
`fecha_5`,
`fecha_6`,
`fecha_7`,
`fecha_8`,
`fecha_9`,
`fecha_10`,
`fecha_11`,
`fecha_12`,
`hora_1`,
`hora_2`,
`hora_3`,
`hora_4`,
`hora_5`,
`hora_6`,
`hora_7`,
`hora_8`,
`hora_9`,
`hora_10`,
`hora_11`,
`hora_12`,
`descrip_1`,
`descrip_2`,
`descrip_3`,
`descrip_4`,
`descrip_5`,
`descrip_6`,
`descrip_7`,
`descrip_8`,
`descrip_9`,
`descrip_10`,
`descrip_11`,
`descrip_12`,
`responsable_1`,
`responsable_2`,
`responsable_3`,
`responsable_4`,
`responsable_5`,
`responsable_6`,
`responsable_7`,
`responsable_8`,
`responsable_9`,
`responsable_10`,
`responsable_11`,
`responsable_12`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fecha_1']."' ,
'".$_REQUEST['fecha_2']."' ,
'".$_REQUEST['fecha_3']."' ,
'".$_REQUEST['fecha_4']."' ,
'".$_REQUEST['fecha_5']."' ,
'".$_REQUEST['fecha_6']."' ,
'".$_REQUEST['fecha_7']."' ,
'".$_REQUEST['fecha_8']."' ,
'".$_REQUEST['fecha_9']."' ,
'".$_REQUEST['fecha_10']."' ,
'".$_REQUEST['fecha_11']."' ,
'".$_REQUEST['fecha_12']."' ,
'".$_REQUEST['hora_1']."' ,
'".$_REQUEST['hora_2']."' ,
'".$_REQUEST['hora_3']."' ,
'".$_REQUEST['hora_4']."' ,
'".$_REQUEST['hora_5']."' ,
'".$_REQUEST['hora_6']."' ,
'".$_REQUEST['hora_7']."' ,
'".$_REQUEST['hora_8']."' ,
'".$_REQUEST['hora_9']."' ,
'".$_REQUEST['hora_10']."' ,
'".$_REQUEST['hora_11']."' ,
'".$_REQUEST['hora_12']."' ,
'".$_REQUEST['descrip_1']."' ,
'".$_REQUEST['descrip_2']."' ,
'".$_REQUEST['descrip_3']."' ,
'".$_REQUEST['descrip_4']."' ,
'".$_REQUEST['descrip_5']."' ,
'".$_REQUEST['descrip_6']."' ,
'".$_REQUEST['descrip_7']."' ,
'".$_REQUEST['descrip_8']."' ,
'".$_REQUEST['descrip_9']."' ,
'".$_REQUEST['descrip_10']."' ,
'".$_REQUEST['descrip_11']."' ,
'".$_REQUEST['descrip_12']."' ,
'".$_REQUEST['responsable_1']."' ,
'".$_REQUEST['responsable_2']."' ,
'".$_REQUEST['responsable_3']."' ,
'".$_REQUEST['responsable_4']."' ,
'".$_REQUEST['responsable_5']."' ,
'".$_REQUEST['responsable_6']."' ,
'".$_REQUEST['responsable_7']."' ,
'".$_REQUEST['responsable_8']."' ,
'".$_REQUEST['responsable_9']."' ,
'".$_REQUEST['responsable_10']."' ,
'".$_REQUEST['responsable_11']."' ,
'".$_REQUEST['responsable_12']."'
) ";


} else if ($_REQUEST['id_asp_secreciones'] != '') {

$sql = "UPDATE asp_secreciones set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fecha_1` = '".$_REQUEST['fecha_1']."' ,
`fecha_2` = '".$_REQUEST['fecha_2']."' ,
`fecha_3` = '".$_REQUEST['fecha_3']."' ,
`fecha_4` = '".$_REQUEST['fecha_4']."' ,
`fecha_5` = '".$_REQUEST['fecha_5']."' ,
`fecha_6` = '".$_REQUEST['fecha_6']."' ,
`fecha_7` = '".$_REQUEST['fecha_7']."' ,
`fecha_8` = '".$_REQUEST['fecha_8']."' ,
`fecha_9` = '".$_REQUEST['fecha_9']."' ,
`fecha_10` = '".$_REQUEST['fecha_10']."' ,
`fecha_11` = '".$_REQUEST['fecha_11']."' ,
`fecha_12` = '".$_REQUEST['fecha_12']."' ,
`hora_1` = '".$_REQUEST['hora_1']."' ,
`hora_2` = '".$_REQUEST['hora_2']."' ,
`hora_3` = '".$_REQUEST['hora_3']."' ,
`hora_4` = '".$_REQUEST['hora_4']."' ,
`hora_5` = '".$_REQUEST['hora_5']."' ,
`hora_6` = '".$_REQUEST['hora_6']."' ,
`hora_7` = '".$_REQUEST['hora_7']."' ,
`hora_8` = '".$_REQUEST['hora_8']."' ,
`hora_9` = '".$_REQUEST['hora_9']."' ,
`hora_10` = '".$_REQUEST['hora_10']."' ,
`hora_11` = '".$_REQUEST['hora_11']."' ,
`hora_12` = '".$_REQUEST['hora_12']."' ,
`descrip_1` = '".$_REQUEST['descrip_1']."' ,
`descrip_2` = '".$_REQUEST['descrip_2']."' ,
`descrip_3` = '".$_REQUEST['descrip_3']."' ,
`descrip_4` = '".$_REQUEST['descrip_4']."' ,
`descrip_5` = '".$_REQUEST['descrip_5']."' ,
`descrip_6` = '".$_REQUEST['descrip_6']."' ,
`descrip_7` = '".$_REQUEST['descrip_7']."' ,
`descrip_8` = '".$_REQUEST['descrip_8']."' ,
`descrip_9` = '".$_REQUEST['descrip_9']."' ,
`descrip_10` = '".$_REQUEST['descrip_10']."' ,
`descrip_11` = '".$_REQUEST['descrip_11']."' ,
`descrip_12` = '".$_REQUEST['descrip_12']."' ,
`responsable_1` = '".$_REQUEST['responsable_1']."' ,
`responsable_2` = '".$_REQUEST['responsable_2']."' ,
`responsable_3` = '".$_REQUEST['responsable_3']."' ,
`responsable_4` = '".$_REQUEST['responsable_4']."' ,
`responsable_5` = '".$_REQUEST['responsable_5']."' ,
`responsable_6` = '".$_REQUEST['responsable_6']."' ,
`responsable_7` = '".$_REQUEST['responsable_7']."' ,
`responsable_8` = '".$_REQUEST['responsable_8']."' ,
`responsable_9` = '".$_REQUEST['responsable_9']."' ,
`responsable_10` = '".$_REQUEST['responsable_10']."' ,
`responsable_11` = '".$_REQUEST['responsable_11']."' ,
`responsable_12` = '".$_REQUEST['responsable_12']."' WHERE `id_asp_secreciones` = '".$_REQUEST['id_asp_secreciones']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_asp_secreciones = 'new';
$sql = "SELECT * from asp_secreciones WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_asp_secreciones = $row['id_asp_secreciones'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fecha_1 = $row['fecha_1'];
$fecha_2 = $row['fecha_2'];
$fecha_3 = $row['fecha_3'];
$fecha_4 = $row['fecha_4'];
$fecha_5 = $row['fecha_5'];
$fecha_6 = $row['fecha_6'];
$fecha_7 = $row['fecha_7'];
$fecha_8 = $row['fecha_8'];
$fecha_9 = $row['fecha_9'];
$fecha_10 = $row['fecha_10'];
$fecha_11 = $row['fecha_11'];
$fecha_12 = $row['fecha_12'];
$hora_1 = $row['hora_1'];
$hora_2 = $row['hora_2'];
$hora_3 = $row['hora_3'];
$hora_4 = $row['hora_4'];
$hora_5 = $row['hora_5'];
$hora_6 = $row['hora_6'];
$hora_7 = $row['hora_7'];
$hora_8 = $row['hora_8'];
$hora_9 = $row['hora_9'];
$hora_10 = $row['hora_10'];
$hora_11 = $row['hora_11'];
$hora_12 = $row['hora_12'];
$descrip_1 = $row['descrip_1'];
$descrip_2 = $row['descrip_2'];
$descrip_3 = $row['descrip_3'];
$descrip_4 = $row['descrip_4'];
$descrip_5 = $row['descrip_5'];
$descrip_6 = $row['descrip_6'];
$descrip_7 = $row['descrip_7'];
$descrip_8 = $row['descrip_8'];
$descrip_9 = $row['descrip_9'];
$descrip_10 = $row['descrip_10'];
$descrip_11 = $row['descrip_11'];
$descrip_12 = $row['descrip_12'];
$responsable_1 = $row['responsable_1'];
$responsable_2 = $row['responsable_2'];
$responsable_3 = $row['responsable_3'];
$responsable_4 = $row['responsable_4'];
$responsable_5 = $row['responsable_5'];
$responsable_6 = $row['responsable_6'];
$responsable_7 = $row['responsable_7'];
$responsable_8 = $row['responsable_8'];
$responsable_9 = $row['responsable_9'];
$responsable_10 = $row['responsable_10'];
$responsable_11 = $row['responsable_11'];
$responsable_12 = $row['responsable_12'];
break; }

?>
<script>

$(function(){

$("#close-asp_secreciones").click(function(){
$("#open-asp_secreciones").show();
$(this).hide();
$("#content-asp_secreciones").hide('slow');
});

$("#open-asp_secreciones").click(function(){
$("#close-asp_secreciones").show();
$(this).hide();
$("#content-asp_secreciones").show('slow');
});

});

</script>
<fieldset id="asp_secreciones">
<legend align="left"> <div class="arrow-c" id="close-asp_secreciones"></div> <div class="arrow-o" id="open-asp_secreciones" ></div> <font>Registro Respiración de Secreciones</font></legend>
<div id="content-asp_secreciones">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_asp_secreciones" id="guardar_asp_secreciones" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_asp_secreciones" name="form_asp_secreciones" action="<?php echo @$action_form_asp_secreciones ?>#asp_secreciones" method="post">

<input type="hidden" id="id_asp_secreciones" name="id_asp_secreciones" value="<?php echo @$id_asp_secreciones ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_asp_secreciones" name="id_asp_secreciones" value="<?php echo @$id_asp_secreciones; ?>" />


<table border='0' cellpadding='0' cellspacing='0' class="data">
  <col width="83" span="2" />
  <col width="88" />
  <col width="91" />
  <tr height="19">
    <td colspan="4" height="19"><div align="center">REGISTRO DE ASPIRACION DE SECRECIONES</div></td>
  </tr>
  <tr height="19">
    <td width="168" height="19">FECHA</td>
    <td width="168">HORA</td>
    <td width="385">DESCRIPCION</td>
    <td width="168">RESPONSABLE</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_1" name="fecha_1" value="<?php echo @$fecha_1; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_1" name="hora_1" value="<?php echo @$hora_1; ?>" /></td>
    <td><textarea name="descrip_1" cols="52" rows="2" id="descrip_1"><?php echo @$descrip_1; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_1" name="responsable_1" value="<?php echo @$responsable_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_2" name="fecha_2" value="<?php echo @$fecha_2; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_2" name="hora_2" value="<?php echo @$hora_2; ?>" /></td>
    <td><textarea name="descrip_2" cols="52" rows="2" id="descrip_2"><?php echo @$descrip_2; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_2" name="responsable_2" value="<?php echo @$responsable_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_3" name="fecha_3" value="<?php echo @$fecha_3; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_3" name="hora_3" value="<?php echo @$hora_3; ?>" /></td>
    <td><textarea name="descrip_3" cols="52" rows="2" id="descrip_3"><?php echo @$descrip_3; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_3" name="responsable_3" value="<?php echo @$responsable_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_4" name="fecha_4" value="<?php echo @$fecha_4; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_4" name="hora_4" value="<?php echo @$hora_4; ?>" /></td>
    <td><textarea name="descrip_4" cols="52" rows="2" id="descrip_4"><?php echo @$descrip_4; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_4" name="responsable_4" value="<?php echo @$responsable_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_5" name="fecha_5" value="<?php echo @$fecha_5; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_5" name="hora_5" value="<?php echo @$hora_5; ?>" /></td>
    <td><textarea name="descrip_5" cols="52" rows="2" id="descrip_5"><?php echo @$descrip_5; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_5" name="responsable_5" value="<?php echo @$responsable_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_6" name="fecha_6" value="<?php echo @$fecha_6; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_6" name="hora_6" value="<?php echo @$hora_6; ?>" /></td>
    <td><textarea name="descrip_6" cols="52" rows="2" id="descrip_6"><?php echo @$descrip_6; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_6" name="responsable_6" value="<?php echo @$responsable_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_7" name="fecha_7" value="<?php echo @$fecha_7; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_7" name="hora_7" value="<?php echo @$hora_7; ?>" /></td>
    <td><textarea name="descrip_7" cols="52" rows="2" id="descrip_7"><?php echo @$descrip_7; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_7" name="responsable_7" value="<?php echo @$responsable_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_8" name="fecha_8" value="<?php echo @$fecha_8; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_8" name="hora_8" value="<?php echo @$hora_8; ?>" /></td>
    <td><textarea name="descrip_8" cols="52" rows="2" id="descrip_8"><?php echo @$descrip_8; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_8" name="responsable_8" value="<?php echo @$responsable_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_9" name="fecha_9" value="<?php echo @$fecha_9; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_9" name="hora_9" value="<?php echo @$hora_9; ?>" /></td>
    <td><textarea name="descrip_9" cols="52" rows="2" id="descrip_9"><?php echo @$descrip_9; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_9" name="responsable_9" value="<?php echo @$responsable_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_10" name="fecha_10" value="<?php echo @$fecha_10; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_10" name="hora_10" value="<?php echo @$hora_10; ?>" /></td>
    <td><textarea name="descrip_10" cols="52" rows="2" id="descrip_10"><?php echo @$descrip_10; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_10" name="responsable_10" value="<?php echo @$responsable_10; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_11" name="fecha_11" value="<?php echo @$fecha_11; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_11" name="hora_11" value="<?php echo @$hora_11; ?>" /></td>
    <td><textarea name="descrip_11" cols="52" rows="2" id="descrip_11"><?php echo @$descrip_11; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_11" name="responsable_11" value="<?php echo @$responsable_11; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecha_12" name="fecha_12" value="<?php echo @$fecha_12; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="hora_12" name="hora_12" value="<?php echo @$hora_12; ?>" /></td>
    <td><textarea name="descrip_12" cols="52" rows="2" id="descrip_12"><?php echo @$descrip_12; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="responsable_12" name="responsable_12" value="<?php echo @$responsable_12; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>