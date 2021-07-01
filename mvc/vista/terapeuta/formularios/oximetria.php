<?php
if (isset($_REQUEST['guardar_fr_oximetria']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_oximetria'] == 'new') {

$sql = "INSERT INTO fr_oximetria (
`id_fr_oximetria`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fechas_1`,
`fechas_2`,
`fechas_3`,
`fechas_4`,
`fechas_5`,
`fechas_6`,
`fechas_7`,
`fechas_`,
`fechas_9`,
`fechas_10`,
`con_ox_1`,
`con_ox_2`,
`con_ox_3`,
`con_ox_4`,
`con_ox_5`,
`con_ox_6`,
`con_ox_7`,
`con_ox_8`,
`con_ox_9`,
`con_ox_10`,
`sin_ox_1`,
`sin_ox_2`,
`sin_ox_3`,
`sin_ox_4`,
`sin_ox_5`,
`sin_ox_6`,
`sin_ox_7`,
`sin_ox_8`,
`sin_ox_9`,
`sin_ox_10`,
`respon_1`,
`respon_2`,
`respon_3`,
`respon_4`,
`respon_5`,
`respon_6`,
`respon_7`,
`respon_8`,
`respon_9`,
`respon_10`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fechas_1']."' ,
'".$_REQUEST['fechas_2']."' ,
'".$_REQUEST['fechas_3']."' ,
'".$_REQUEST['fechas_4']."' ,
'".$_REQUEST['fechas_5']."' ,
'".$_REQUEST['fechas_6']."' ,
'".$_REQUEST['fechas_7']."' ,
'".$_REQUEST['fechas_']."' ,
'".$_REQUEST['fechas_9']."' ,
'".$_REQUEST['fechas_10']."' ,
'".$_REQUEST['con_ox_1']."' ,
'".$_REQUEST['con_ox_2']."' ,
'".$_REQUEST['con_ox_3']."' ,
'".$_REQUEST['con_ox_4']."' ,
'".$_REQUEST['con_ox_5']."' ,
'".$_REQUEST['con_ox_6']."' ,
'".$_REQUEST['con_ox_7']."' ,
'".$_REQUEST['con_ox_8']."' ,
'".$_REQUEST['con_ox_9']."' ,
'".$_REQUEST['con_ox_10']."' ,
'".$_REQUEST['sin_ox_1']."' ,
'".$_REQUEST['sin_ox_2']."' ,
'".$_REQUEST['sin_ox_3']."' ,
'".$_REQUEST['sin_ox_4']."' ,
'".$_REQUEST['sin_ox_5']."' ,
'".$_REQUEST['sin_ox_6']."' ,
'".$_REQUEST['sin_ox_7']."' ,
'".$_REQUEST['sin_ox_8']."' ,
'".$_REQUEST['sin_ox_9']."' ,
'".$_REQUEST['sin_ox_10']."' ,
'".$_REQUEST['respon_1']."' ,
'".$_REQUEST['respon_2']."' ,
'".$_REQUEST['respon_3']."' ,
'".$_REQUEST['respon_4']."' ,
'".$_REQUEST['respon_5']."' ,
'".$_REQUEST['respon_6']."' ,
'".$_REQUEST['respon_7']."' ,
'".$_REQUEST['respon_8']."' ,
'".$_REQUEST['respon_9']."' ,
'".$_REQUEST['respon_10']."'
) ";


} else if ($_REQUEST['id_fr_oximetria'] != '') {

$sql = "UPDATE fr_oximetria set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fechas_1` = '".$_REQUEST['fechas_1']."' ,
`fechas_2` = '".$_REQUEST['fechas_2']."' ,
`fechas_3` = '".$_REQUEST['fechas_3']."' ,
`fechas_4` = '".$_REQUEST['fechas_4']."' ,
`fechas_5` = '".$_REQUEST['fechas_5']."' ,
`fechas_6` = '".$_REQUEST['fechas_6']."' ,
`fechas_7` = '".$_REQUEST['fechas_7']."' ,
`fechas_` = '".$_REQUEST['fechas_']."' ,
`fechas_9` = '".$_REQUEST['fechas_9']."' ,
`fechas_10` = '".$_REQUEST['fechas_10']."' ,
`con_ox_1` = '".$_REQUEST['con_ox_1']."' ,
`con_ox_2` = '".$_REQUEST['con_ox_2']."' ,
`con_ox_3` = '".$_REQUEST['con_ox_3']."' ,
`con_ox_4` = '".$_REQUEST['con_ox_4']."' ,
`con_ox_5` = '".$_REQUEST['con_ox_5']."' ,
`con_ox_6` = '".$_REQUEST['con_ox_6']."' ,
`con_ox_7` = '".$_REQUEST['con_ox_7']."' ,
`con_ox_8` = '".$_REQUEST['con_ox_8']."' ,
`con_ox_9` = '".$_REQUEST['con_ox_9']."' ,
`con_ox_10` = '".$_REQUEST['con_ox_10']."' ,
`sin_ox_1` = '".$_REQUEST['sin_ox_1']."' ,
`sin_ox_2` = '".$_REQUEST['sin_ox_2']."' ,
`sin_ox_3` = '".$_REQUEST['sin_ox_3']."' ,
`sin_ox_4` = '".$_REQUEST['sin_ox_4']."' ,
`sin_ox_5` = '".$_REQUEST['sin_ox_5']."' ,
`sin_ox_6` = '".$_REQUEST['sin_ox_6']."' ,
`sin_ox_7` = '".$_REQUEST['sin_ox_7']."' ,
`sin_ox_8` = '".$_REQUEST['sin_ox_8']."' ,
`sin_ox_9` = '".$_REQUEST['sin_ox_9']."' ,
`sin_ox_10` = '".$_REQUEST['sin_ox_10']."' ,
`respon_1` = '".$_REQUEST['respon_1']."' ,
`respon_2` = '".$_REQUEST['respon_2']."' ,
`respon_3` = '".$_REQUEST['respon_3']."' ,
`respon_4` = '".$_REQUEST['respon_4']."' ,
`respon_5` = '".$_REQUEST['respon_5']."' ,
`respon_6` = '".$_REQUEST['respon_6']."' ,
`respon_7` = '".$_REQUEST['respon_7']."' ,
`respon_8` = '".$_REQUEST['respon_8']."' ,
`respon_9` = '".$_REQUEST['respon_9']."' ,
`respon_10` = '".$_REQUEST['respon_10']."' WHERE `id_fr_oximetria` = '".$_REQUEST['id_fr_oximetria']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_oximetria = 'new';
$sql = "SELECT * from fr_oximetria WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_oximetria = $row['id_fr_oximetria'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fechas_1 = $row['fechas_1'];
$fechas_2 = $row['fechas_2'];
$fechas_3 = $row['fechas_3'];
$fechas_4 = $row['fechas_4'];
$fechas_5 = $row['fechas_5'];
$fechas_6 = $row['fechas_6'];
$fechas_7 = $row['fechas_7'];
$fechas_ = $row['fechas_'];
$fechas_9 = $row['fechas_9'];
$fechas_10 = $row['fechas_10'];
$con_ox_1 = $row['con_ox_1'];
$con_ox_2 = $row['con_ox_2'];
$con_ox_3 = $row['con_ox_3'];
$con_ox_4 = $row['con_ox_4'];
$con_ox_5 = $row['con_ox_5'];
$con_ox_6 = $row['con_ox_6'];
$con_ox_7 = $row['con_ox_7'];
$con_ox_8 = $row['con_ox_8'];
$con_ox_9 = $row['con_ox_9'];
$con_ox_10 = $row['con_ox_10'];
$sin_ox_1 = $row['sin_ox_1'];
$sin_ox_2 = $row['sin_ox_2'];
$sin_ox_3 = $row['sin_ox_3'];
$sin_ox_4 = $row['sin_ox_4'];
$sin_ox_5 = $row['sin_ox_5'];
$sin_ox_6 = $row['sin_ox_6'];
$sin_ox_7 = $row['sin_ox_7'];
$sin_ox_8 = $row['sin_ox_8'];
$sin_ox_9 = $row['sin_ox_9'];
$sin_ox_10 = $row['sin_ox_10'];
$respon_1 = $row['respon_1'];
$respon_2 = $row['respon_2'];
$respon_3 = $row['respon_3'];
$respon_4 = $row['respon_4'];
$respon_5 = $row['respon_5'];
$respon_6 = $row['respon_6'];
$respon_7 = $row['respon_7'];
$respon_8 = $row['respon_8'];
$respon_9 = $row['respon_9'];
$respon_10 = $row['respon_10'];
break; }

?>
<script>

$(function(){

$("#close-fr_oximetria").click(function(){
$("#open-fr_oximetria").show();
$(this).hide();
$("#content-fr_oximetria").hide('slow');
});

$("#open-fr_oximetria").click(function(){
$("#close-fr_oximetria").show();
$(this).hide();
$("#content-fr_oximetria").show('slow');
});

});

</script>
<fieldset id="fr_oximetria">
<legend align="left"> <div class="arrow-c" id="close-fr_oximetria"></div> <div class="arrow-o" id="open-fr_oximetria" ></div> <font>REGISTRO DE OXIMETRIA</font></legend>
<div id="content-fr_oximetria">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_oximetria" id="guardar_fr_oximetria" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_oximetria" name="form_fr_oximetria" action="<?php echo @$action_form_fr_oximetria ?>#fr_oximetria" method="post">

<input type="hidden" id="id_fr_oximetria" name="id_fr_oximetria" value="<?php echo @$id_fr_oximetria ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_oximetria" name="id_fr_oximetria" value="<?php echo @$id_fr_oximetria; ?>" />


<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="105" />
  <col width="129" />
  <col width="138" />
  <col width="133" />
  <tr height="19">
    <td colspan="4" height="19"><div align="center">REGISTRO DE OXIMETRIA</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">FECHA Y HORA</td>
    <td width="168">CON    OXIGENO</td>
    <td width="168">SIN    OXIGENO</td>
    <td width="168">RESPONSABLE</td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_1" name="fechas_1" value="<?php echo @$fechas_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_1" name="con_ox_1" value="<?php echo @$con_ox_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_1" name="sin_ox_1" value="<?php echo @$sin_ox_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_1" name="respon_1" value="<?php echo @$respon_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_2" name="fechas_2" value="<?php echo @$fechas_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_2" name="con_ox_2" value="<?php echo @$con_ox_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_2" name="sin_ox_2" value="<?php echo @$sin_ox_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_2" name="respon_2" value="<?php echo @$respon_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_3" name="fechas_3" value="<?php echo @$fechas_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_3" name="con_ox_3" value="<?php echo @$con_ox_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_3" name="sin_ox_3" value="<?php echo @$sin_ox_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_3" name="respon_3" value="<?php echo @$respon_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_4" name="fechas_4" value="<?php echo @$fechas_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_4" name="con_ox_4" value="<?php echo @$con_ox_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_4" name="sin_ox_4" value="<?php echo @$sin_ox_4; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_4" name="respon_4" value="<?php echo @$respon_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_5" name="fechas_5" value="<?php echo @$fechas_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_5" name="con_ox_5" value="<?php echo @$con_ox_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_5" name="sin_ox_5" value="<?php echo @$sin_ox_5; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_5" name="respon_5" value="<?php echo @$respon_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_6" name="fechas_6" value="<?php echo @$fechas_6; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_6" name="con_ox_6" value="<?php echo @$con_ox_6; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_6" name="sin_ox_6" value="<?php echo @$sin_ox_6; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_6" name="respon_6" value="<?php echo @$respon_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_7" name="fechas_7" value="<?php echo @$fechas_7; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_7" name="con_ox_7" value="<?php echo @$con_ox_7; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_7" name="sin_ox_7" value="<?php echo @$sin_ox_7; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_7" name="respon_7" value="<?php echo @$respon_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_" name="fechas_" value="<?php echo @$fechas_; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_8" name="con_ox_8" value="<?php echo @$con_ox_8; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_8" name="sin_ox_8" value="<?php echo @$sin_ox_8; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_8" name="respon_8" value="<?php echo @$respon_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fechas_9" name="fechas_9" value="<?php echo @$fechas_9; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="con_ox_9" name="con_ox_9" value="<?php echo @$con_ox_9; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="sin_ox_9" name="sin_ox_9" value="<?php echo @$sin_ox_9; ?>" /></td>
    <td><input type="text" class="input_txt valid" id="respon_9" name="respon_9" value="<?php echo @$respon_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168"><input type="text" class="input_txt valid" id="fechas_10" name="fechas_10" value="<?php echo @$fechas_10; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="con_ox_10" name="con_ox_10" value="<?php echo @$con_ox_10; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="sin_ox_10" name="sin_ox_10" value="<?php echo @$sin_ox_10; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_10" name="respon_10" value="<?php echo @$respon_10; ?>" /></td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>
<a href='#' onClick='imprSelec("content-fr_oximetria")' >Imprimir</a>
</div>
</fieldset>