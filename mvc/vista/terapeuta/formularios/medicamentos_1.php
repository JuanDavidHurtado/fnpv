<?php
if (isset($_REQUEST['guardar_fr_medicamentos']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_medicamentos'] == 'new') {

$sql = "INSERT INTO fr_medicamentos (
`id_fr_medicamentos`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fecham_1`,
`fecham_2`,
`fecham_3`,
`fecham_4`,
`fecham_5`,
`fecham_6`,
`fecham_7`,
`fecham_8`,
`fecham_9`,
`fecham_10`,
`medicamento_1`,
`medicamento_2`,
`medicamento_3`,
`medicamento_4`,
`medicamento_5`,
`medicamento_6`,
`medicamento_7`,
`medicamento_8`,
`medicamento_9`,
`medicamento_10`,
`horaad_1`,
`horaad_2`,
`horaad_3`,
`horaad_4`,
`horaad_5`,
`horaad_6`,
`horaad_7`,
`horaad_8`,
`horaad_9`,
`horaad_10`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['fecham_1']."' ,
'".$_REQUEST['fecham_2']."' ,
'".$_REQUEST['fecham_3']."' ,
'".$_REQUEST['fecham_4']."' ,
'".$_REQUEST['fecham_5']."' ,
'".$_REQUEST['fecham_6']."' ,
'".$_REQUEST['fecham_7']."' ,
'".$_REQUEST['fecham_8']."' ,
'".$_REQUEST['fecham_9']."' ,
'".$_REQUEST['fecham_10']."' ,
'".$_REQUEST['medicamento_1']."' ,
'".$_REQUEST['medicamento_2']."' ,
'".$_REQUEST['medicamento_3']."' ,
'".$_REQUEST['medicamento_4']."' ,
'".$_REQUEST['medicamento_5']."' ,
'".$_REQUEST['medicamento_6']."' ,
'".$_REQUEST['medicamento_7']."' ,
'".$_REQUEST['medicamento_8']."' ,
'".$_REQUEST['medicamento_9']."' ,
'".$_REQUEST['medicamento_10']."' ,
'".$_REQUEST['horaad_1']."' ,
'".$_REQUEST['horaad_2']."' ,
'".$_REQUEST['horaad_3']."' ,
'".$_REQUEST['horaad_4']."' ,
'".$_REQUEST['horaad_5']."' ,
'".$_REQUEST['horaad_6']."' ,
'".$_REQUEST['horaad_7']."' ,
'".$_REQUEST['horaad_8']."' ,
'".$_REQUEST['horaad_9']."' ,
'".$_REQUEST['horaad_10']."'
) ";


} else if ($_REQUEST['id_fr_medicamentos'] != '') {

$sql = "UPDATE fr_medicamentos set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`fecham_1` = '".$_REQUEST['fecham_1']."' ,
`fecham_2` = '".$_REQUEST['fecham_2']."' ,
`fecham_3` = '".$_REQUEST['fecham_3']."' ,
`fecham_4` = '".$_REQUEST['fecham_4']."' ,
`fecham_5` = '".$_REQUEST['fecham_5']."' ,
`fecham_6` = '".$_REQUEST['fecham_6']."' ,
`fecham_7` = '".$_REQUEST['fecham_7']."' ,
`fecham_8` = '".$_REQUEST['fecham_8']."' ,
`fecham_9` = '".$_REQUEST['fecham_9']."' ,
`fecham_10` = '".$_REQUEST['fecham_10']."' ,
`medicamento_1` = '".$_REQUEST['medicamento_1']."' ,
`medicamento_2` = '".$_REQUEST['medicamento_2']."' ,
`medicamento_3` = '".$_REQUEST['medicamento_3']."' ,
`medicamento_4` = '".$_REQUEST['medicamento_4']."' ,
`medicamento_5` = '".$_REQUEST['medicamento_5']."' ,
`medicamento_6` = '".$_REQUEST['medicamento_6']."' ,
`medicamento_7` = '".$_REQUEST['medicamento_7']."' ,
`medicamento_8` = '".$_REQUEST['medicamento_8']."' ,
`medicamento_9` = '".$_REQUEST['medicamento_9']."' ,
`medicamento_10` = '".$_REQUEST['medicamento_10']."' ,
`horaad_1` = '".$_REQUEST['horaad_1']."' ,
`horaad_2` = '".$_REQUEST['horaad_2']."' ,
`horaad_3` = '".$_REQUEST['horaad_3']."' ,
`horaad_4` = '".$_REQUEST['horaad_4']."' ,
`horaad_5` = '".$_REQUEST['horaad_5']."' ,
`horaad_6` = '".$_REQUEST['horaad_6']."' ,
`horaad_7` = '".$_REQUEST['horaad_7']."' ,
`horaad_8` = '".$_REQUEST['horaad_8']."' ,
`horaad_9` = '".$_REQUEST['horaad_9']."' ,
`horaad_10` = '".$_REQUEST['horaad_10']."' WHERE `id_fr_medicamentos` = '".$_REQUEST['id_fr_medicamentos']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_medicamentos = 'new';
$sql = "SELECT * from fr_medicamentos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_medicamentos = $row['id_fr_medicamentos'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$fecham_1 = $row['fecham_1'];
$fecham_2 = $row['fecham_2'];
$fecham_3 = $row['fecham_3'];
$fecham_4 = $row['fecham_4'];
$fecham_5 = $row['fecham_5'];
$fecham_6 = $row['fecham_6'];
$fecham_7 = $row['fecham_7'];
$fecham_8 = $row['fecham_8'];
$fecham_9 = $row['fecham_9'];
$fecham_10 = $row['fecham_10'];
$medicamento_1 = $row['medicamento_1'];
$medicamento_2 = $row['medicamento_2'];
$medicamento_3 = $row['medicamento_3'];
$medicamento_4 = $row['medicamento_4'];
$medicamento_5 = $row['medicamento_5'];
$medicamento_6 = $row['medicamento_6'];
$medicamento_7 = $row['medicamento_7'];
$medicamento_8 = $row['medicamento_8'];
$medicamento_9 = $row['medicamento_9'];
$medicamento_10 = $row['medicamento_10'];
$horaad_1 = $row['horaad_1'];
$horaad_2 = $row['horaad_2'];
$horaad_3 = $row['horaad_3'];
$horaad_4 = $row['horaad_4'];
$horaad_5 = $row['horaad_5'];
$horaad_6 = $row['horaad_6'];
$horaad_7 = $row['horaad_7'];
$horaad_8 = $row['horaad_8'];
$horaad_9 = $row['horaad_9'];
$horaad_10 = $row['horaad_10'];
break; }

?>
<script>

$(function(){

$("#close-fr_medicamentos").click(function(){
$("#open-fr_medicamentos").show();
$(this).hide();
$("#content-fr_medicamentos").hide('slow');
});

$("#open-fr_medicamentos").click(function(){
$("#close-fr_medicamentos").show();
$(this).hide();
$("#content-fr_medicamentos").show('slow');
});

});

</script>


<script>
    $(function() {



         $("#fecham_1").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#fecham_2").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#fecham_3").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#fecham_4").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#fecham_5").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#fecham_6").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#fecham_7").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#fecham_8").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#fecham_9").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
         $("#fecham_10").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
    }); // creacion jquery


    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

</script>
<fieldset id="fr_medicamentos">
<legend align="left"> <div class="arrow-c" id="close-fr_medicamentos"></div> <div class="arrow-o" id="open-fr_medicamentos" ></div> <font>APLICACIÓN DE MEDICAMENTOS</font></legend>
<div id="content-fr_medicamentos">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_medicamentos" id="guardar_fr_medicamentos" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_medicamentos" name="form_fr_medicamentos" action="<?php echo @$action_form_fr_medicamentos ?>#fr_medicamentos" method="post">

<input type="hidden" id="id_fr_medicamentos" name="id_fr_medicamentos" value="<?php echo @$id_fr_medicamentos ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_medicamentos" name="id_fr_medicamentos" value="<?php echo @$id_fr_medicamentos; ?>" />

<table width="813" border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" />
  <col width="280" />
  <col width="173" />
  <tr height="19">
    <td colspan="3" height="19"><div align="center">APLICACIÓN DE MEDICAMENTOS</div></td>
  </tr>
  <tr height="19">
    <td width="168" height="19">FECHA</td>
    <td width="456">MEDICAMENTO, VIAS    DOSIS E INDICACIONES </td>
    <td width="181">HORA DE    ADMINISTRACION</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" id="fecham_1" name="fecham_1" class="input_txt fecha valid" readonly="true" onclick="style_()" value="<?php echo @$fecham_1; ?>" /></td>
    <td><textarea name="medicamento_1" cols="50" rows="2" id="medicamento_1"><?php echo @$medicamento_1; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_1" name="horaad_1" value="<?php echo @$horaad_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()"  class="input_txt valid" id="fecham_2" name="fecham_2" value="<?php echo @$fecham_2; ?>" /></td>
    <td><textarea name="medicamento_2" cols="50" rows="2" id="medicamento_2"><?php echo @$medicamento_2; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_2" name="horaad_2" value="<?php echo @$horaad_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecham_3" readonly="true" onclick="style_()"  name="fecham_3" value="<?php echo @$fecham_3; ?>" /></td>
    <td><textarea name="medicamento_3" cols="50" rows="2" id="medicamento_3"><?php echo @$medicamento_3; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_3" name="horaad_3" value="<?php echo @$horaad_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()"  class="input_txt valid" id="fecham_4" name="fecham_4" value="<?php echo @$fecham_4; ?>" /></td>
    <td><textarea name="medicamento_4" cols="50" rows="2" id="medicamento_4"><?php echo @$medicamento_4; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_4" name="horaad_4" value="<?php echo @$horaad_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="fecham_5" readonly="true" onclick="style_()"  name="fecham_5" value="<?php echo @$fecham_5; ?>" /></td>
    <td><textarea name="medicamento_5" cols="50" rows="2" id="medicamento_5"><?php echo @$medicamento_5; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_5" name="horaad_5" value="<?php echo @$horaad_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()"  class="input_txt valid" id="fecham_6" name="fecham_6" value="<?php echo @$fecham_6; ?>" /></td>
    <td><textarea name="medicamento_6" cols="50" rows="2" id="medicamento_6"><?php echo @$medicamento_6; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_6" name="horaad_6" value="<?php echo @$horaad_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()" class="input_txt valid" id="fecham_7" name="fecham_7" value="<?php echo @$fecham_7; ?>" /></td>
    <td><textarea name="medicamento_7" cols="50" rows="2" id="medicamento_7"><?php echo @$medicamento_7; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_7" name="horaad_7" value="<?php echo @$horaad_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()" class="input_txt valid" id="fecham_8" name="fecham_8" value="<?php echo @$fecham_8; ?>" /></td>
    <td><textarea name="medicamento_8" cols="50" rows="2" id="medicamento_8"><?php echo @$medicamento_8; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_8" name="horaad_8" value="<?php echo @$horaad_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()" class="input_txt valid" id="fecham_9" name="fecham_9" value="<?php echo @$fecham_9; ?>" /></td>
    <td><textarea name="medicamento_9" cols="50" rows="2" id="medicamento_9"><?php echo @$medicamento_9; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_9" name="horaad_9" value="<?php echo @$horaad_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" readonly="true" onclick="style_()" class="input_txt valid" id="fecham_10" name="fecham_10" value="<?php echo @$fecham_10; ?>" /></td>
    <td><textarea name="medicamento_10" cols="50" rows="2" id="medicamento_10"><?php echo @$medicamento_10; ?></textarea></td>
    <td><input type="text" class="input_txt valid" id="horaad_10" name="horaad_10" value="<?php echo @$horaad_10; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
 <a href='#' onClick='imprSelec("content-fr_medicamentos")' >Imprimir</a>
</div>
</fieldset>