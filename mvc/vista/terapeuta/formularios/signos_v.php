<?php
if (isset($_REQUEST['guardar_fr_signos']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_signos'] == 'new') {

$sql = "INSERT INTO fr_signos (
`id_fr_signos`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`fechas_1`,
`fechas_2`,
`fechas_3`,
`fechas_4`,
`fechas_5`,
`horas_1`,
`horas_2`,
`horas_3`,
`horas_4`,
`horas_5`,
`descs_1`,
`descs_2`,
`descs_3`,
`descs_4`,
`descs_5`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fechas_1']."' ,
'".$_REQUEST['fechas_2']."' ,
'".$_REQUEST['fechas_3']."' ,
'".$_REQUEST['fechas_4']."' ,
'".$_REQUEST['fechas_5']."' ,
'".$_REQUEST['horas_1']."' ,
'".$_REQUEST['horas_2']."' ,
'".$_REQUEST['horas_3']."' ,
'".$_REQUEST['horas_4']."' ,
'".$_REQUEST['horas_5']."' ,
'".$_REQUEST['descs_1']."' ,
'".$_REQUEST['descs_2']."' ,
'".$_REQUEST['descs_3']."' ,
'".$_REQUEST['descs_4']."' ,
'".$_REQUEST['descs_5']."'
) ";


} else if ($_REQUEST['id_fr_signos'] != '') {

$sql = "UPDATE fr_signos set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fechas_1` = '".$_REQUEST['fechas_1']."' ,
`fechas_2` = '".$_REQUEST['fechas_2']."' ,
`fechas_3` = '".$_REQUEST['fechas_3']."' ,
`fechas_4` = '".$_REQUEST['fechas_4']."' ,
`fechas_5` = '".$_REQUEST['fechas_5']."' ,
`horas_1` = '".$_REQUEST['horas_1']."' ,
`horas_2` = '".$_REQUEST['horas_2']."' ,
`horas_3` = '".$_REQUEST['horas_3']."' ,
`horas_4` = '".$_REQUEST['horas_4']."' ,
`horas_5` = '".$_REQUEST['horas_5']."' ,
`descs_1` = '".$_REQUEST['descs_1']."' ,
`descs_2` = '".$_REQUEST['descs_2']."' ,
`descs_3` = '".$_REQUEST['descs_3']."' ,
`descs_4` = '".$_REQUEST['descs_4']."' ,
`descs_5` = '".$_REQUEST['descs_5']."' WHERE `id_fr_signos` = '".$_REQUEST['id_fr_signos']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_signos = 'new';
$sql = "SELECT * from fr_signos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_signos = $row['id_fr_signos'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fechas_1 = $row['fechas_1'];
$fechas_2 = $row['fechas_2'];
$fechas_3 = $row['fechas_3'];
$fechas_4 = $row['fechas_4'];
$fechas_5 = $row['fechas_5'];
$horas_1 = $row['horas_1'];
$horas_2 = $row['horas_2'];
$horas_3 = $row['horas_3'];
$horas_4 = $row['horas_4'];
$horas_5 = $row['horas_5'];
$descs_1 = $row['descs_1'];
$descs_2 = $row['descs_2'];
$descs_3 = $row['descs_3'];
$descs_4 = $row['descs_4'];
$descs_5 = $row['descs_5'];
break; }

?>
<script>

$(function(){

$("#close-fr_signos").click(function(){
$("#open-fr_signos").show();
$(this).hide();
$("#content-fr_signos").hide('slow');
});

$("#open-fr_signos").click(function(){
$("#close-fr_signos").show();
$(this).hide();
$("#content-fr_signos").show('slow');
});

});

</script>
<fieldset id="fr_signos">
<legend align="left"> <div class="arrow-c" id="close-fr_signos"></div> <div class="arrow-o" id="open-fr_signos" ></div> <font>SIGNOS VITALES</font></legend>
<div id="content-fr_signos">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_signos" id="guardar_fr_signos" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_signos" name="form_fr_signos" action="<?php echo @$action_form_fr_signos ?>#fr_signos" method="post">

<input type="hidden" id="id_fr_signos" name="id_fr_signos" value="<?php echo @$id_fr_signos ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_signos" name="id_fr_signos" value="<?php echo @$id_fr_signos; ?>" />


<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" span="2" />
  <col width="189" />
  <tr height="19">
    <td colspan="3" height="19"><div align="center">SIGNOS VITALES</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">FECHA</td>
    <td width="168">HORA</td>
    <td width="168"><div align="center">DESCRIPCION</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_1" name="fechas_1" value="<?php echo @$fechas_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="horas_1" name="horas_1" value="<?php echo @$horas_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="descs_1" name="descs_1" value="<?php echo @$descs_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_2" name="fechas_2" value="<?php echo @$fechas_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="horas_2" name="horas_2" value="<?php echo @$horas_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="descs_2" name="descs_2" value="<?php echo @$descs_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_3" name="fechas_3" value="<?php echo @$fechas_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="horas_3" name="horas_3" value="<?php echo @$horas_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="descs_3" name="descs_3" value="<?php echo @$descs_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_4" name="fechas_4" value="<?php echo @$fechas_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="horas_4" name="horas_4" value="<?php echo @$horas_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="descs_4" name="descs_4" value="<?php echo @$descs_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_5" name="fechas_5" value="<?php echo @$fechas_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="horas_5" name="horas_5" value="<?php echo @$horas_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="descs_5" name="descs_5" value="<?php echo @$descs_5; ?>" /></td>
  </tr>
</table>
<?php echo @$button ?>
</form><br>
<a href='#' onClick='imprSelec("content-fr_signos")' >Imprimir</a>
</div>
</fieldset>