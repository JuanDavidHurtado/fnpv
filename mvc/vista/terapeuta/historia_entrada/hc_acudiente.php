<?php
if (isset($_REQUEST['guardar_hc_acudiente']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_acudiente'] == 'new') {

$sql = "INSERT INTO hc_acudiente (
`id_hc_acudiente`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`ac_nombres`,
`ac_cedula`,
`ac_direccion_res`,
`ac_ciudad`,
`parentezco`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['ac_nombres']."' ,
'".$_REQUEST['ac_cedula']."' ,
'".$_REQUEST['ac_direccion_res']."' ,
'".$_REQUEST['ac_ciudad']."' ,
'".$_REQUEST['parentezco']."'
) ";


} else if ($_REQUEST['id_hc_acudiente'] != '') {

$sql = "UPDATE hc_acudiente set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`ac_nombres` = '".$_REQUEST['ac_nombres']."' ,
`ac_cedula` = '".$_REQUEST['ac_cedula']."' ,
`ac_direccion_res` = '".$_REQUEST['ac_direccion_res']."' ,
`ac_ciudad` = '".$_REQUEST['ac_ciudad']."' ,
`parentezco` = '".$_REQUEST['parentezco']."' WHERE `id_hc_acudiente` = '".$_REQUEST['id_hc_acudiente']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_acudiente = 'new';
$sql = "SELECT * from hc_acudiente WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_acudiente = $row['id_hc_acudiente'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$ac_nombres = $row['ac_nombres'];
$ac_cedula = $row['ac_cedula'];
$ac_direccion_res = $row['ac_direccion_res'];
$ac_ciudad = $row['ac_ciudad'];
$parentezco = $row['parentezco'];
break; }

?>
<script>

$(function(){

$("#close-hc_acudiente").click(function(){
$("#open-hc_acudiente").show();
$(this).hide();
$("#content-hc_acudiente").hide('slow');
});

$("#open-hc_acudiente").click(function(){
$("#close-hc_acudiente").show();
$(this).hide();
$("#content-hc_acudiente").show('slow');
});

});

</script>
     <br>
              <br>
<fieldset id="hc_acudiente">
<legend align="left"> <div class="arrow-c" id="close-hc_acudiente"></div> <div class="arrow-o" id="open-hc_acudiente" ></div> <font>Información acompañante</font></legend>
<div id="content-hc_acudiente">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_acudiente" id="guardar_hc_acudiente" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_acudiente" name="form_hc_acudiente" action="<?php echo @$action_form_hc_acudiente ?>#hc_acudiente" method="post">

<input type="hidden" id="id_hc_acudiente" name="id_hc_acudiente" value="<?php echo @$id_hc_acudiente ?>" />

  

<input type="hidden" class="input_txt valid" id="id_hc_acudiente" name="id_hc_acudiente" value="<?php echo @$id_hc_acudiente; ?>" />

<table width="781" border="0" cellspacing="0" cellpadding="0" class="data">
  
  <tr height="19">
    <td colspan="5" height="24"><div align="center">INFORMACION    ACOMPAÑANTE</div></td>
  </tr>
  <tr height="19">
    <td width="271" height="19">NOMBRES Y    APELLIDOS</td>
    <td colspan="4"><input name="ac_nombres" type="text" id="ac_nombres" value="<?php echo @$ac_nombres; ?>" size="60" /></td>
  </tr>
  <tr height="19">
    <td height="19">IDENTIFICACION</td>
    <td width="271"><input type="text" class="input_txt valid" id="ac_cedula" name="ac_cedula" value="<?php echo @$ac_cedula; ?>" /></td>
    <td width="5">&nbsp;</td>
    <td width="153">DIRECCION</td>
    <td width="296"><input name="ac_direccion_res" type="text" id="ac_direccion_res" value="<?php echo @$ac_direccion_res; ?>" size="50" /></td>
  </tr>
  <tr height="19">
    <td height="19">Municipio/departamento</td>
    <td><input name="ac_ciudad" type="text" id="ac_ciudad" value="<?php echo @$ac_ciudad; ?>" size="50" /></td>
    <td>&nbsp;</td>
    <td>PARENTEZCO</td>
    <td><input name="parentezco" type="text" id="parentezco" value="<?php echo @$parentezco; ?>" size="50" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
</div>
</fieldset>