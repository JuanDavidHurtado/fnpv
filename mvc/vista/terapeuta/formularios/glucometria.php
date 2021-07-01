<?php

if (isset($_REQUEST['guardar_fr_glucometria']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_glucometria'] == 'new') {

$sql = "INSERT INTO fr_glucometria (
`id_fr_glucometria`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`fechag_1`,
`fechag_2`,
`fechag_3`,
`fechag_4`,
`fechag_5`,
`fechag_6`,
`fechag_7`,
`gluco_1`,
`gluco_2`,
`gluco_3`,
`gluco_4`,
`gluco_5`,
`gluco_6`,
`gluco_7`,
`crista_1`,
`crista_2`,
`crista_3`,
`crista_4`,
`crista_5`,
`crista_6`,
`crista_7`,
`nph_1`,
`nph_2`,
`nph_3`,
`nph_4`,
`nph_5`,
`nph_6`,
`nph_7`,
`id_vinicial`,
`id_revaloracion`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['fechag_1']."' ,
'".$_REQUEST['fechag_2']."' ,
'".$_REQUEST['fechag_3']."' ,
'".$_REQUEST['fechag_4']."' ,
'".$_REQUEST['fechag_5']."' ,
'".$_REQUEST['fechag_6']."' ,
'".$_REQUEST['fechag_7']."' ,
'".$_REQUEST['gluco_1']."' ,
'".$_REQUEST['gluco_2']."' ,
'".$_REQUEST['gluco_3']."' ,
'".$_REQUEST['gluco_4']."' ,
'".$_REQUEST['gluco_5']."' ,
'".$_REQUEST['gluco_6']."' ,
'".$_REQUEST['gluco_7']."' ,
'".$_REQUEST['crista_1']."' ,
'".$_REQUEST['crista_2']."' ,
'".$_REQUEST['crista_3']."' ,
'".$_REQUEST['crista_4']."' ,
'".$_REQUEST['crista_5']."' ,
'".$_REQUEST['crista_6']."' ,
'".$_REQUEST['crista_7']."' ,
'".$_REQUEST['nph_1']."' ,
'".$_REQUEST['nph_2']."' ,
'".$_REQUEST['nph_3']."' ,
'".$_REQUEST['nph_4']."' ,
'".$_REQUEST['nph_5']."' ,
'".$_REQUEST['nph_6']."' ,
'".$_REQUEST['nph_7']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."'
) ";


} else if ($_REQUEST['id_fr_glucometria'] != '') {

$sql = "UPDATE fr_glucometria set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`fechag_1` = '".$_REQUEST['fechag_1']."' ,
`fechag_2` = '".$_REQUEST['fechag_2']."' ,
`fechag_3` = '".$_REQUEST['fechag_3']."' ,
`fechag_4` = '".$_REQUEST['fechag_4']."' ,
`fechag_5` = '".$_REQUEST['fechag_5']."' ,
`fechag_6` = '".$_REQUEST['fechag_6']."' ,
`fechag_7` = '".$_REQUEST['fechag_7']."' ,
`gluco_1` = '".$_REQUEST['gluco_1']."' ,
`gluco_2` = '".$_REQUEST['gluco_2']."' ,
`gluco_3` = '".$_REQUEST['gluco_3']."' ,
`gluco_4` = '".$_REQUEST['gluco_4']."' ,
`gluco_5` = '".$_REQUEST['gluco_5']."' ,
`gluco_6` = '".$_REQUEST['gluco_6']."' ,
`gluco_7` = '".$_REQUEST['gluco_7']."' ,
`crista_1` = '".$_REQUEST['crista_1']."' ,
`crista_2` = '".$_REQUEST['crista_2']."' ,
`crista_3` = '".$_REQUEST['crista_3']."' ,
`crista_4` = '".$_REQUEST['crista_4']."' ,
`crista_5` = '".$_REQUEST['crista_5']."' ,
`crista_6` = '".$_REQUEST['crista_6']."' ,
`crista_7` = '".$_REQUEST['crista_7']."' ,
`nph_1` = '".$_REQUEST['nph_1']."' ,
`nph_2` = '".$_REQUEST['nph_2']."' ,
`nph_3` = '".$_REQUEST['nph_3']."' ,
`nph_4` = '".$_REQUEST['nph_4']."' ,
`nph_5` = '".$_REQUEST['nph_5']."' ,
`nph_6` = '".$_REQUEST['nph_6']."' ,
`nph_7` = '".$_REQUEST['nph_7']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' WHERE `id_fr_glucometria` = '".$_REQUEST['id_fr_glucometria']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_glucometria = 'new';
$sql = "SELECT * from fr_glucometria WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_glucometria = $row['id_fr_glucometria'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$fechag_1 = $row['fechag_1'];
$fechag_2 = $row['fechag_2'];
$fechag_3 = $row['fechag_3'];
$fechag_4 = $row['fechag_4'];
$fechag_5 = $row['fechag_5'];
$fechag_6 = $row['fechag_6'];
$fechag_7 = $row['fechag_7'];
$gluco_1 = $row['gluco_1'];
$gluco_2 = $row['gluco_2'];
$gluco_3 = $row['gluco_3'];
$gluco_4 = $row['gluco_4'];
$gluco_5 = $row['gluco_5'];
$gluco_6 = $row['gluco_6'];
$gluco_7 = $row['gluco_7'];
$crista_1 = $row['crista_1'];
$crista_2 = $row['crista_2'];
$crista_3 = $row['crista_3'];
$crista_4 = $row['crista_4'];
$crista_5 = $row['crista_5'];
$crista_6 = $row['crista_6'];
$crista_7 = $row['crista_7'];
$nph_1 = $row['nph_1'];
$nph_2 = $row['nph_2'];
$nph_3 = $row['nph_3'];
$nph_4 = $row['nph_4'];
$nph_5 = $row['nph_5'];
$nph_6 = $row['nph_6'];
$nph_7 = $row['nph_7'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
break; }

?>
<script>

$(function(){

$("#close-fr_glucometria").click(function(){
$("#open-fr_glucometria").show();
$(this).hide();
$("#content-fr_glucometria").hide('slow');
});

$("#open-fr_glucometria").click(function(){
$("#close-fr_glucometria").show();
$(this).hide();
$("#content-fr_glucometria").show('slow');
});

});

</script>
<fieldset id="fr_glucometria">
<legend align="left"> <div class="arrow-c" id="close-fr_glucometria"></div> <div class="arrow-o" id="open-fr_glucometria" ></div> <font>REGISTRO DE GLUCOMETRIA</font></legend>
<div id="content-fr_glucometria">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_glucometria" id="guardar_fr_glucometria" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_glucometria" name="form_fr_glucometria" action="<?php echo @$action_form_fr_glucometria ?>#fr_glucometria" method="post">

<input type="hidden" id="id_fr_glucometria" name="id_fr_glucometria" value="<?php echo @$id_fr_glucometria ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_glucometria" name="id_fr_glucometria" value="<?php echo @$id_fr_glucometria; ?>" />
<table width="680" border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" />
  <col width="99" />
  <col width="160" />
  <col width="164" />
  <tr height="19">
    <td colspan="4" height="19"><div align="center">REGISTRO DE GLUCOMETRIA</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="168">FECHA-HORA</td>
    <td width="168">GLUCOMETRIA</td>
    <td width="699">INSULINA    CRISTALINA</td>
    <td width="346">INSULINA    NPH</td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_1" name="fechag_1" value="<?php echo @$fechag_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_1" name="gluco_1" value="<?php echo @$gluco_1; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_1" name="crista_1" value="<?php echo @$crista_1; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_1" name="nph_1" value="<?php echo @$nph_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_2" name="fechag_2" value="<?php echo @$fechag_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_2" name="gluco_2" value="<?php echo @$gluco_2; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_2" name="crista_2" value="<?php echo @$crista_2; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_2" name="nph_2" value="<?php echo @$nph_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_3" name="fechag_3" value="<?php echo @$fechag_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_3" name="gluco_3" value="<?php echo @$gluco_3; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_3" name="crista_3" value="<?php echo @$crista_3; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_3" name="nph_3" value="<?php echo @$nph_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_4" name="fechag_4" value="<?php echo @$fechag_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_4" name="gluco_4" value="<?php echo @$gluco_4; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_4" name="crista_4" value="<?php echo @$crista_4; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_4" name="nph_4" value="<?php echo @$nph_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_5" name="fechag_5" value="<?php echo @$fechag_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_5" name="gluco_5" value="<?php echo @$gluco_5; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_5" name="crista_5" value="<?php echo @$crista_5; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_5" name="nph_5" value="<?php echo @$nph_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_6" name="fechag_6" value="<?php echo @$fechag_6; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_6" name="gluco_6" value="<?php echo @$gluco_6; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_6" name="crista_6" value="<?php echo @$crista_6; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_6" name="nph_6" value="<?php echo @$nph_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechag_7" name="fechag_7" value="<?php echo @$fechag_7; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="gluco_7" name="gluco_7" value="<?php echo @$gluco_7; ?>" /></td>
    <td width="699"><input type="text" class="input_txt valid" id="crista_7" name="crista_7" value="<?php echo @$crista_7; ?>" /></td>
    <td width="346"><input type="text" class="input_txt valid" id="nph_7" name="nph_7" value="<?php echo @$nph_7; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
<a href='#' onClick='imprSelec("content-fr_glucometria")' >Imprimir</a>
</div>
</fieldset>