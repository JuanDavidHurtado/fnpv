<?php
if (isset($_REQUEST['guardar_evolucion']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_evolucion'] != '') {

$sql = "UPDATE evolucion set
`evolucion` = '".$_REQUEST['evolucion']."' ,

`nota_extra` = '".$_REQUEST['nota_extra']."' WHERE `id_evolucion` = '".$_REQUEST['id_evolucion']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_evolucion = 'new';
$sql = "SELECT * from evolucion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_evolucion = $row['id_evolucion'];
$id_proceso = $row['id_proceso'];
$id_usuario = $row['id_usuario'];
$historia = $row['historia'];
$id_vinicial = $row['id_vinicial'];
$id_cita = $row['id_cita'];
$evolucion = $row['evolucion'];
$flujo = $row['flujo'];
$id_formulario = $row['id_formulario'];
$id_revaloracion = $row['id_revaloracion'];
$nota_extra = $row['nota_extra'];
break; }

?>
<script>

$(function(){

$("#close-evolucion").click(function(){
$("#open-evolucion").show();
$(this).hide();
$("#content-evolucion").hide('slow');
});

$("#open-evolucion").click(function(){
$("#close-evolucion").show();
$(this).hide();
$("#content-evolucion").show('slow');
});

});

</script>
<fieldset id="evolucion">
<legend align="left"> <div class="arrow-c" id="close-evolucion"></div> <div class="arrow-o" id="open-evolucion" ></div> <font>Evolucion</font></legend>
<div id="content-evolucion">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_evolucion" id="guardar_evolucion" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_evolucion" name="form_evolucion" action="<?php echo @$action_form_evolucion ?>#evolucion" method="post">

<input type="hidden" id="id_evolucion" name="id_evolucion" value="<?php echo @$id_evolucion ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_evolucion" name="id_evolucion" value="<?php echo @$id_evolucion; ?>" />

 <textarea id="evolucion" name="evolucion" cols="110" rows="5"><?php echo @$evolucion; ?></textarea>
                <br>
                 <br>
                Nota Adicional:
                <br>
                <textarea id="nota_extra" name="nota_extra" cols="110" rows="5"><?php echo @$nota_extra; ?></textarea>
                <br>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>