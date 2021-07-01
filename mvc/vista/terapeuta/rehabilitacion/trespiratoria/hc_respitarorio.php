<?php
if (isset($_REQUEST['guardar_hc_respiratorio']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_respiratorio'] == 'new') {

$sql = "INSERT INTO hc_respiratorio (
`id_hc_respiratorio`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_id_revaloracion`,
`respiracion_obser`,
`soporte_venti`,
`respi_hora`,
`respi_fecha`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_id_revaloracion']."' ,
'".$_REQUEST['respiracion_obser']."' ,
'".$_REQUEST['soporte_venti']."' ,
'".$_REQUEST['respi_hora']."' ,
'".$_REQUEST['respi_fecha']."'
) ";


} else if ($_REQUEST['id_hc_respiratorio'] != '') {

$sql = "UPDATE hc_respiratorio set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_id_revaloracion` = '".$_REQUEST['id_id_revaloracion']."' ,
`respiracion_obser` = '".$_REQUEST['respiracion_obser']."' ,
`soporte_venti` = '".$_REQUEST['soporte_venti']."' ,
`respi_hora` = '".$_REQUEST['respi_hora']."' ,
`respi_fecha` = '".$_REQUEST['respi_fecha']."' WHERE `id_hc_respiratorio` = '".$_REQUEST['id_hc_respiratorio']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_respiratorio = 'new';
$sql = "SELECT * from hc_respiratorio WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_respiratorio = $row['id_hc_respiratorio'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_id_revaloracion = $row['id_id_revaloracion'];
$respiracion_obser = $row['respiracion_obser'];
$soporte_venti = $row['soporte_venti'];
$respi_hora = $row['respi_hora'];
$respi_fecha = $row['respi_fecha'];
break; }

?>
<script>

$(function(){

$("#close-hc_respiratorio").click(function(){
$("#open-hc_respiratorio").show();
$(this).hide();
$("#content-hc_respiratorio").hide('slow');
});

$("#open-hc_respiratorio").click(function(){
$("#close-hc_respiratorio").show();
$(this).hide();
$("#content-hc_respiratorio").show('slow');
});

});

</script>
<fieldset id="hc_respiratorio">
<legend align="left"> <div class="arrow-c" id="close-hc_respiratorio"></div> <div class="arrow-o" id="open-hc_respiratorio" ></div> <font>Valoracion terapia Respiratoria</font></legend>
<div id="content-hc_respiratorio">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_respiratorio" id="guardar_hc_respiratorio" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_respiratorio" name="form_hc_respiratorio" action="<?php echo @$action_form_hc_respiratorio ?>#hc_respiratorio" method="post">

<input type="hidden" id="id_hc_respiratorio" name="id_hc_respiratorio" value="<?php echo @$id_hc_respiratorio ?>" />


<input type="hidden" class="input_txt valid" id="id_hc_respiratorio" name="id_hc_respiratorio" value="<?php echo @$id_hc_respiratorio; ?>" />

<table align="center" cellpadding="0" cellspacing="0">
  <col width="83" span="4" />
  <tr height="19">
    <td colspan="4" height="19"><div align="center">TERAPIA    RESPIRATORIA</div></td>
  </tr>
  <tr height="19">
    <td colspan="4" height="34"><div align="center">OBSERVACIONES</div></td>
  </tr>
  <tr height="19">
    <td colspan="4" height="19"><textarea name="respiracion_obser" cols="100" rows="6" id="respiracion_obser"><?php echo @$respiracion_obser; ?></textarea></td>
  </tr>
  <tr height="19">
    <td colspan="4" height="19"><div align="center">SOPORTE VENTILATORIO</div></td>
  </tr>
  <tr height="19">
    <td colspan="4" height="49"><textarea name="soporte_venti" cols="100" rows="6" id="soporte_venti"><?php echo @$soporte_venti; ?></textarea></td>
  </tr>
  <tr height="19">
    <td width="142" height="19">HORA</td>
    <td width="119"><input type="text" class="input_txt valid" id="respi_hora" name="respi_hora" value="<?php echo @$respi_hora; ?>" /></td>
    <td width="97">FECHA</td>
    <td width="297"><input type="text" class="input_txt valid" id="respi_fecha" name="respi_fecha" value="<?php echo @$respi_fecha; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>