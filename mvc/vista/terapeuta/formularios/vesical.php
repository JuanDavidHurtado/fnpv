<?php

if (isset($_REQUEST['guardar_fr_vesical']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_vesical'] == 'new') {

$sql = "INSERT INTO fr_vesical (
`id_fr_vesical`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`fechad_1`,
`fechad_2`,
`fechad_3`,
`fechad_4`,
`fechad_5`,
`fechad_6`,
`fechad_7`,
`fechad_8`,
`fechad_9`,
`fechad_10`,
`elimin_1`,
`elimin_2`,
`elimin_3`,
`elimin_4`,
`elimin_5`,
`elimin_6`,
`elimin_7`,
`elimin_8`,
`elimin_9`,
`elimin_10`,
`descrip_11`,
`descrip_21`,
`descrip_31`,
`descrip_41`,
`descrip_51`,
`descrip_61`,
`descrip_71`,
`descrip_81`,
`descrip_91`,
`descrip_101`,
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
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fechad_1']."' ,
'".$_REQUEST['fechad_2']."' ,
'".$_REQUEST['fechad_3']."' ,
'".$_REQUEST['fechad_4']."' ,
'".$_REQUEST['fechad_5']."' ,
'".$_REQUEST['fechad_6']."' ,
'".$_REQUEST['fechad_7']."' ,
'".$_REQUEST['fechad_8']."' ,
'".$_REQUEST['fechad_9']."' ,
'".$_REQUEST['fechad_10']."' ,
'".$_REQUEST['elimin_1']."' ,
'".$_REQUEST['elimin_2']."' ,
'".$_REQUEST['elimin_3']."' ,
'".$_REQUEST['elimin_4']."' ,
'".$_REQUEST['elimin_5']."' ,
'".$_REQUEST['elimin_6']."' ,
'".$_REQUEST['elimin_7']."' ,
'".$_REQUEST['elimin_8']."' ,
'".$_REQUEST['elimin_9']."' ,
'".$_REQUEST['elimin_10']."' ,
'".$_REQUEST['descrip_11']."' ,
'".$_REQUEST['descrip_21']."' ,
'".$_REQUEST['descrip_31']."' ,
'".$_REQUEST['descrip_41']."' ,
'".$_REQUEST['descrip_51']."' ,
'".$_REQUEST['descrip_61']."' ,
'".$_REQUEST['descrip_71']."' ,
'".$_REQUEST['descrip_81']."' ,
'".$_REQUEST['descrip_91']."' ,
'".$_REQUEST['descrip_101']."' ,
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


} else if ($_REQUEST['id_fr_vesical'] != '') {

$sql = "UPDATE fr_vesical set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fechad_1` = '".$_REQUEST['fechad_1']."' ,
`fechad_2` = '".$_REQUEST['fechad_2']."' ,
`fechad_3` = '".$_REQUEST['fechad_3']."' ,
`fechad_4` = '".$_REQUEST['fechad_4']."' ,
`fechad_5` = '".$_REQUEST['fechad_5']."' ,
`fechad_6` = '".$_REQUEST['fechad_6']."' ,
`fechad_7` = '".$_REQUEST['fechad_7']."' ,
`fechad_8` = '".$_REQUEST['fechad_8']."' ,
`fechad_9` = '".$_REQUEST['fechad_9']."' ,
`fechad_10` = '".$_REQUEST['fechad_10']."' ,
`elimin_1` = '".$_REQUEST['elimin_1']."' ,
`elimin_2` = '".$_REQUEST['elimin_2']."' ,
`elimin_3` = '".$_REQUEST['elimin_3']."' ,
`elimin_4` = '".$_REQUEST['elimin_4']."' ,
`elimin_5` = '".$_REQUEST['elimin_5']."' ,
`elimin_6` = '".$_REQUEST['elimin_6']."' ,
`elimin_7` = '".$_REQUEST['elimin_7']."' ,
`elimin_8` = '".$_REQUEST['elimin_8']."' ,
`elimin_9` = '".$_REQUEST['elimin_9']."' ,
`elimin_10` = '".$_REQUEST['elimin_10']."' ,
`descrip_11` = '".$_REQUEST['descrip_11']."' ,
`descrip_21` = '".$_REQUEST['descrip_21']."' ,
`descrip_31` = '".$_REQUEST['descrip_31']."' ,
`descrip_41` = '".$_REQUEST['descrip_41']."' ,
`descrip_51` = '".$_REQUEST['descrip_51']."' ,
`descrip_61` = '".$_REQUEST['descrip_61']."' ,
`descrip_71` = '".$_REQUEST['descrip_71']."' ,
`descrip_81` = '".$_REQUEST['descrip_81']."' ,
`descrip_91` = '".$_REQUEST['descrip_91']."' ,
`descrip_101` = '".$_REQUEST['descrip_101']."' ,
`respon_1` = '".$_REQUEST['respon_1']."' ,
`respon_2` = '".$_REQUEST['respon_2']."' ,
`respon_3` = '".$_REQUEST['respon_3']."' ,
`respon_4` = '".$_REQUEST['respon_4']."' ,
`respon_5` = '".$_REQUEST['respon_5']."' ,
`respon_6` = '".$_REQUEST['respon_6']."' ,
`respon_7` = '".$_REQUEST['respon_7']."' ,
`respon_8` = '".$_REQUEST['respon_8']."' ,
`respon_9` = '".$_REQUEST['respon_9']."' ,
`respon_10` = '".$_REQUEST['respon_10']."' WHERE `id_fr_vesical` = '".$_REQUEST['id_fr_vesical']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_vesical = 'new';
$sql = "SELECT * from fr_vesical WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_vesical = $row['id_fr_vesical'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fechad_1 = $row['fechad_1'];
$fechad_2 = $row['fechad_2'];
$fechad_3 = $row['fechad_3'];
$fechad_4 = $row['fechad_4'];
$fechad_5 = $row['fechad_5'];
$fechad_6 = $row['fechad_6'];
$fechad_7 = $row['fechad_7'];
$fechad_8 = $row['fechad_8'];
$fechad_9 = $row['fechad_9'];
$fechad_10 = $row['fechad_10'];
$elimin_1 = $row['elimin_1'];
$elimin_2 = $row['elimin_2'];
$elimin_3 = $row['elimin_3'];
$elimin_4 = $row['elimin_4'];
$elimin_5 = $row['elimin_5'];
$elimin_6 = $row['elimin_6'];
$elimin_7 = $row['elimin_7'];
$elimin_8 = $row['elimin_8'];
$elimin_9 = $row['elimin_9'];
$elimin_10 = $row['elimin_10'];
$descrip_11 = $row['descrip_11'];
$descrip_21 = $row['descrip_21'];
$descrip_31 = $row['descrip_31'];
$descrip_41 = $row['descrip_41'];
$descrip_51 = $row['descrip_51'];
$descrip_61 = $row['descrip_61'];
$descrip_71 = $row['descrip_71'];
$descrip_81 = $row['descrip_81'];
$descrip_91 = $row['descrip_91'];
$descrip_101 = $row['descrip_101'];
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

$("#close-fr_vesical").click(function(){
$("#open-fr_vesical").show();
$(this).hide();
$("#content-fr_vesical").hide('slow');
});

$("#open-fr_vesical").click(function(){
$("#close-fr_vesical").show();
$(this).hide();
$("#content-fr_vesical").show('slow');
});

});

</script>
<fieldset id="fr_vesical">
<legend align="left"> <div class="arrow-c" id="close-fr_vesical"></div> <div class="arrow-o" id="open-fr_vesical" ></div> <font>REGISTRO DE CATETERISMO VESICAL</font></legend>
<div id="content-fr_vesical">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_vesical" id="guardar_fr_vesical" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_vesical" name="form_fr_vesical" action="<?php echo @$action_form_fr_vesical ?>#fr_vesical" method="post">

<input type="hidden" id="id_fr_vesical" name="id_fr_vesical" value="<?php echo @$id_fr_vesical ?>" />

<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" span="2" />
  <col width="135" />
  <col width="164" />
  <col width="190" />
  <tr height="19">
    <td colspan="5" height="19"><div align="center">REGISTRO DE CATETERISMO VESICAL</div></td>
  </tr>
  <tr height="38">
    <td colspan="2" height="38">FECHA y HORA</td>
    <td width="199">ELIMINADO    EN CC</td>
    <td width="215">CARACTERISTICAS    DE LOS ELIMINADO</td>
    <td width="168">RESPONSABLE</td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_1" name="fechad_1" value="<?php echo @$fechad_1; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_1" name="elimin_1" value="<?php echo @$elimin_1; ?>" /></td>
    <td width="215"><textarea name="descrip_11" cols="50" rows="2" id="descrip_11"><?php echo @$descrip_11; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_1" name="respon_1" value="<?php echo @$respon_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_2" name="fechad_2" value="<?php echo @$fechad_2; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_2" name="elimin_2" value="<?php echo @$elimin_2; ?>" /></td>
    <td width="215"><textarea name="descrip_21" cols="50" rows="2" id="descrip_21"><?php echo @$descrip_21; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_2" name="respon_2" value="<?php echo @$respon_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_3" name="fechad_3" value="<?php echo @$fechad_3; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_3" name="elimin_3" value="<?php echo @$elimin_3; ?>" /></td>
    <td width="215"><textarea name="descrip_31" cols="50" rows="2" id="descrip_31"><?php echo @$descrip_31; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_3" name="respon_3" value="<?php echo @$respon_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_4" name="fechad_4" value="<?php echo @$fechad_4; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_4" name="elimin_4" value="<?php echo @$elimin_4; ?>" /></td>
    <td width="215"><textarea name="descrip_41" cols="50" rows="2" id="descrip_41"><?php echo @$descrip_41; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_4" name="respon_4" value="<?php echo @$respon_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_5" name="fechad_5" value="<?php echo @$fechad_5; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_5" name="elimin_5" value="<?php echo @$elimin_5; ?>" /></td>
    <td width="215"><textarea name="descrip_51" cols="50" rows="2" id="descrip_51"><?php echo @$descrip_51; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_5" name="respon_5" value="<?php echo @$respon_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_6" name="fechad_6" value="<?php echo @$fechad_6; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_6" name="elimin_6" value="<?php echo @$elimin_6; ?>" /></td>
    <td width="215"><textarea name="descrip_61" cols="50" rows="2" id="descrip_61"><?php echo @$descrip_61; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_6" name="respon_6" value="<?php echo @$respon_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_7" name="fechad_7" value="<?php echo @$fechad_7; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_7" name="elimin_7" value="<?php echo @$elimin_7; ?>" /></td>
    <td width="215"><textarea name="descrip_71" cols="50" rows="2" id="descrip_71"><?php echo @$descrip_71; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_7" name="respon_7" value="<?php echo @$respon_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_8" name="fechad_8" value="<?php echo @$fechad_8; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_8" name="elimin_8" value="<?php echo @$elimin_8; ?>" /></td>
    <td width="215"><textarea name="descrip_81" cols="50" rows="2" id="descrip_81"><?php echo @$descrip_81; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_8" name="respon_8" value="<?php echo @$respon_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_9" name="fechad_9" value="<?php echo @$fechad_9; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_9" name="elimin_9" value="<?php echo @$elimin_9; ?>" /></td>
    <td width="215"><textarea name="descrip_91" cols="50" rows="2" id="descrip_91"><?php echo @$descrip_91; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_9" name="respon_9" value="<?php echo @$respon_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="2" height="19"><input type="text" class="input_txt valid" id="fechad_10" name="fechad_10" value="<?php echo @$fechad_10; ?>" /></td>
    <td width="199"><input type="text" class="input_txt valid" id="elimin_10" name="elimin_10" value="<?php echo @$elimin_10; ?>" /></td>
    <td width="215"><textarea name="descrip_101" cols="50" rows="2" id="descrip_101"><?php echo @$descrip_101; ?></textarea></td>
    <td width="168"><input type="text" class="input_txt valid" id="respon_10" name="respon_10" value="<?php echo @$respon_10; ?>" /></td>
  </tr>
</table>
<?php echo @$button ?>
</form><br>

<a href='#' onClick='imprSelec("content-fr_vesical")' >Imprimir</a>
</div>
</fieldset>