<?php
if (isset($_REQUEST['guardar_fr_formula']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_formula'] == 'new') {

$sql = "INSERT INTO fr_formula (
`id_fr_formula`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fecham`,
`medicamento`,
`n_dias`,
`cantidad`
) VALUES (
NULL,
'".$_REQUEST['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fecham']."' ,
'".$_REQUEST['medicamento']."' ,
'".$_REQUEST['n_dias']."' ,
'".$_REQUEST['cantidad']."'
) ";


} else if ($_REQUEST['id_fr_formula'] != '') {

$sql = "UPDATE fr_formula set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fecham` = '".$_REQUEST['fecham']."' ,
`medicamento` = '".$_REQUEST['medicamento']."' ,
`n_dias` = '".$_REQUEST['n_dias']."' ,
`cantidad` = '".$_REQUEST['cantidad']."' WHERE `id_fr_formula` = '".$_REQUEST['id_fr_formula']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_formula = 'new';
$sql = "SELECT * from fr_formula WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_formula = $row['id_fr_formula'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fecham = $row['fecham'];
$medicamento = $row['medicamento'];
$n_dias = $row['n_dias'];
$cantidad = $row['cantidad'];
break; }

?>
<script>

$(function(){

$("#close-fr_formula").click(function(){
$("#open-fr_formula").show();
$(this).hide();
$("#content-fr_formula").hide('slow');
});

$("#open-fr_formula").click(function(){
$("#close-fr_formula").show();
$(this).hide();
$("#content-fr_formula").show('slow');
});

});

</script>
<fieldset id="fr_formula">
<legend align="left"> <div class="arrow-c" id="close-fr_formula"></div> <div class="arrow-o" id="open-fr_formula" ></div> <font>Valoracion terapia ocupacional - fr_formula</font></legend>
<div id="content-fr_formula">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_formula" id="guardar_fr_formula" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_formula" name="form_fr_formula" action="<?php echo @$action_form_fr_formula ?>#fr_formula" method="post">

<input type="hidden" id="id_fr_formula" name="id_fr_formula" value="<?php echo @$id_fr_formula ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_formula" name="id_fr_formula" value="<?php echo @$id_fr_formula; ?>" />

<input type="text" class="input_txt valid" id="fecham" name="fecham" value="<?php  echo $fecham=date("Y-m-d"); ?>" />

<table cellspacing="0" cellpadding="0" border="0" class="data">
  <col width="101" />
  <col width="94" />
  <col width="83" />
  <tr height="19">
    <td height="19" width="441">MEDICAMENTO</td>
    <td width="168">NUMERO DIAS</td>
    <td width="168">CANTIDAD</td>
  </tr>
  <tr height="19">
    <td height="19"><textarea name="medicamento" cols="60" rows="3" id="medicamento"><?php echo @$medicamento; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="n_dias" name="n_dias" value="<?php echo @$n_dias; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="cantidad" name="cantidad" value="<?php echo @$cantidad; ?>" /></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>