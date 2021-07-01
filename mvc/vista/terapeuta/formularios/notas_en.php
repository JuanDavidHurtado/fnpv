<?php
if (isset($_REQUEST['guardar_fr_notas_enfermeria']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_notas_enfermeria'] == 'new') {

$sql = "INSERT INTO fr_notas_enfermeria (
`id_fr_notas_enfermeria`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fecha`,
`descrip`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fecha']."' ,
'".$_REQUEST['descrip']."'
) ";


} else if ($_REQUEST['id_fr_notas_enfermeria'] != '') {

$sql = "UPDATE fr_notas_enfermeria set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fecha` = '".$_REQUEST['fecha']."' ,
`descrip` = '".$_REQUEST['descrip']."' WHERE `id_fr_notas_enfermeria` = '".$_REQUEST['id_fr_notas_enfermeria']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_notas_enfermeria = 'new';
$sql = "SELECT * from fr_notas_enfermeria WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_notas_enfermeria = $row['id_fr_notas_enfermeria'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fecha = $row['fecha'];
$descrip = $row['descrip'];
break; }

?>
<script>

$(function(){

$("#close-fr_notas_enfermeria").click(function(){
$("#open-fr_notas_enfermeria").show();
$(this).hide();
$("#content-fr_notas_enfermeria").hide('slow');
});

$("#open-fr_notas_enfermeria").click(function(){
$("#close-fr_notas_enfermeria").show();
$(this).hide();
$("#content-fr_notas_enfermeria").show('slow');
});

});

</script>
<fieldset id="fr_notas_enfermeria">
<legend align="left"> <div class="arrow-c" id="close-fr_notas_enfermeria"></div> <div class="arrow-o" id="open-fr_notas_enfermeria" ></div> <font>NOTAS DE ENFERMERIA</font></legend>
<div id="content-fr_notas_enfermeria">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_notas_enfermeria" id="guardar_fr_notas_enfermeria" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_notas_enfermeria" name="form_fr_notas_enfermeria" action="<?php echo @$action_form_fr_notas_enfermeria ?>#fr_notas_enfermeria" method="post">

<input type="hidden" id="id_fr_notas_enfermeria" name="id_fr_notas_enfermeria" value="<?php echo @$id_fr_notas_enfermeria ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_notas_enfermeria" name="id_fr_notas_enfermeria" value="<?php echo @$id_fr_notas_enfermeria; ?>" />

<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" />
  <col width="341" />
  <tr height="19">
    <td colspan="2" height="19" width="424"><div align="center">NOTAS DE ENFERMERIA</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="83">FECHA</td>
    <td width="341">APUNTES</td>
  </tr>
  <tr>
    <td height="100" width="83"><input type="text" class="input_txt valid" id="fecha" name="fecha" value="<?php echo @$fecha; ?>" /></td>
    <td ><textarea name="descrip" cols="60" rows="5"  id="descrip"><?php echo @$descrip; ?></textarea></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
<a href='#' onClick='imprSelec("content-fr_notas_enfermeria")' >Imprimir</a>
</div>
</fieldset>