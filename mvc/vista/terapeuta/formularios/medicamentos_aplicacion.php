<?php
if (isset($_REQUEST['guardar_fr_aplicacion']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_aplicacion'] == 'new') {

$sql = "INSERT INTO fr_aplicacion (
`id_fr_aplicacion`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`horap_1`,
`horap_2`,
`horap_3`,
`horap_4`,
`horap_5`,
`horap_6`,
`horap_7`,
`horap_8`,
`horap_9`,
`horap_0`,
`aplicacion_1`,
`aplicacion_2`,
`aplicacion_3`,
`aplicacion_4`,
`aplicacion_5`,
`aplicacion_6`,
`aplicacion_7`,
`aplicacion_8`,
`aplicacion_9`,
`aplicacion_10`,
`fechamed_1`,
`fechamed_2`,
`fechamed_3`,
`fechamed_4`,
`fechamed_5`,
`fechamed_6`,
`fechamed_7`,
`fechamed_8`,
`fechamed_9`,
`fechamed_10`
) VALUES (
NULL,
'".$_session['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['horap_1']."' ,
'".$_REQUEST['horap_2']."' ,
'".$_REQUEST['horap_3']."' ,
'".$_REQUEST['horap_4']."' ,
'".$_REQUEST['horap_5']."' ,
'".$_REQUEST['horap_6']."' ,
'".$_REQUEST['horap_7']."' ,
'".$_REQUEST['horap_8']."' ,
'".$_REQUEST['horap_9']."' ,
'".$_REQUEST['horap_0']."' ,
'".$_REQUEST['aplicacion_1']."' ,
'".$_REQUEST['aplicacion_2']."' ,
'".$_REQUEST['aplicacion_3']."' ,
'".$_REQUEST['aplicacion_4']."' ,
'".$_REQUEST['aplicacion_5']."' ,
'".$_REQUEST['aplicacion_6']."' ,
'".$_REQUEST['aplicacion_7']."' ,
'".$_REQUEST['aplicacion_8']."' ,
'".$_REQUEST['aplicacion_9']."' ,
'".$_REQUEST['aplicacion_10']."' ,
'".$_REQUEST['fechamed_1']."' ,
'".$_REQUEST['fechamed_2']."' ,
'".$_REQUEST['fechamed_3']."' ,
'".$_REQUEST['fechamed_4']."' ,
'".$_REQUEST['fechamed_5']."' ,
'".$_REQUEST['fechamed_6']."' ,
'".$_REQUEST['fechamed_7']."' ,
'".$_REQUEST['fechamed_8']."' ,
'".$_REQUEST['fechamed_9']."' ,
'".$_REQUEST['fechamed_10']."'
) ";


} else if ($_REQUEST['id_fr_aplicacion'] != '') {

$sql = "UPDATE fr_aplicacion set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`horap_1` = '".$_REQUEST['horap_1']."' ,
`horap_2` = '".$_REQUEST['horap_2']."' ,
`horap_3` = '".$_REQUEST['horap_3']."' ,
`horap_4` = '".$_REQUEST['horap_4']."' ,
`horap_5` = '".$_REQUEST['horap_5']."' ,
`horap_6` = '".$_REQUEST['horap_6']."' ,
`horap_7` = '".$_REQUEST['horap_7']."' ,
`horap_8` = '".$_REQUEST['horap_8']."' ,
`horap_9` = '".$_REQUEST['horap_9']."' ,
`horap_0` = '".$_REQUEST['horap_0']."' ,
`aplicacion_1` = '".$_REQUEST['aplicacion_1']."' ,
`aplicacion_2` = '".$_REQUEST['aplicacion_2']."' ,
`aplicacion_3` = '".$_REQUEST['aplicacion_3']."' ,
`aplicacion_4` = '".$_REQUEST['aplicacion_4']."' ,
`aplicacion_5` = '".$_REQUEST['aplicacion_5']."' ,
`aplicacion_6` = '".$_REQUEST['aplicacion_6']."' ,
`aplicacion_7` = '".$_REQUEST['aplicacion_7']."' ,
`aplicacion_8` = '".$_REQUEST['aplicacion_8']."' ,
`aplicacion_9` = '".$_REQUEST['aplicacion_9']."' ,
`aplicacion_10` = '".$_REQUEST['aplicacion_10']."' ,
`fechamed_1` = '".$_REQUEST['fechamed_1']."' ,
`fechamed_2` = '".$_REQUEST['fechamed_2']."' ,
`fechamed_3` = '".$_REQUEST['fechamed_3']."' ,
`fechamed_4` = '".$_REQUEST['fechamed_4']."' ,
`fechamed_5` = '".$_REQUEST['fechamed_5']."' ,
`fechamed_6` = '".$_REQUEST['fechamed_6']."' ,
`fechamed_7` = '".$_REQUEST['fechamed_7']."' ,
`fechamed_8` = '".$_REQUEST['fechamed_8']."' ,
`fechamed_9` = '".$_REQUEST['fechamed_9']."' ,
`fechamed_10` = '".$_REQUEST['fechamed_10']."' WHERE `id_fr_aplicacion` = '".$_REQUEST['id_fr_aplicacion']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_aplicacion = 'new';
$sql = "SELECT * from fr_aplicacion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_aplicacion = $row['id_fr_aplicacion'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$horap_1 = $row['horap_1'];
$horap_2 = $row['horap_2'];
$horap_3 = $row['horap_3'];
$horap_4 = $row['horap_4'];
$horap_5 = $row['horap_5'];
$horap_6 = $row['horap_6'];
$horap_7 = $row['horap_7'];
$horap_8 = $row['horap_8'];
$horap_9 = $row['horap_9'];
$horap_0 = $row['horap_0'];
$aplicacion_1 = $row['aplicacion_1'];
$aplicacion_2 = $row['aplicacion_2'];
$aplicacion_3 = $row['aplicacion_3'];
$aplicacion_4 = $row['aplicacion_4'];
$aplicacion_5 = $row['aplicacion_5'];
$aplicacion_6 = $row['aplicacion_6'];
$aplicacion_7 = $row['aplicacion_7'];
$aplicacion_8 = $row['aplicacion_8'];
$aplicacion_9 = $row['aplicacion_9'];
$aplicacion_10 = $row['aplicacion_10'];
$fechamed_1 = $row['fechamed_1'];
$fechamed_2 = $row['fechamed_2'];
$fechamed_3 = $row['fechamed_3'];
$fechamed_4 = $row['fechamed_4'];
$fechamed_5 = $row['fechamed_5'];
$fechamed_6 = $row['fechamed_6'];
$fechamed_7 = $row['fechamed_7'];
$fechamed_8 = $row['fechamed_8'];
$fechamed_9 = $row['fechamed_9'];
$fechamed_10 = $row['fechamed_10'];
break; }

?>
<script>

$(function(){

$("#close-fr_aplicacion").click(function(){
$("#open-fr_aplicacion").show();
$(this).hide();
$("#content-fr_aplicacion").hide('slow');
});

$("#open-fr_aplicacion").click(function(){
$("#close-fr_aplicacion").show();
$(this).hide();
$("#content-fr_aplicacion").show('slow');
});

});

</script>


<script>
    $(function() {



         $("#horap_2").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#horap_3").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#horap_1").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#horap_4").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

          $("#horap_5").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#horap_6").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#horap_7").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#horap_8").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
          $("#horap_9").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

         $("#horap_0").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
    }); // creacion jquery


    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

</script>
<fieldset id="fr_aplicacion">
<legend align="left"> <div class="arrow-c" id="close-fr_aplicacion"></div> <div class="arrow-o" id="open-fr_aplicacion" ></div> <font>Aplicacion Medicamentos</font></legend>
<div id="content-fr_aplicacion">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_aplicacion" id="guardar_fr_aplicacion" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_aplicacion" name="form_fr_aplicacion" action="<?php echo @$action_form_fr_aplicacion ?>#fr_aplicacion" method="post">

<input type="hidden" id="id_fr_aplicacion" name="id_fr_aplicacion" value="<?php echo @$id_fr_aplicacion ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_aplicacion" name="id_fr_aplicacion" value="<?php echo @$id_fr_aplicacion; ?>" />

<table width="686" border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="83" />
  <col width="280" />
  <col width="173" />
  <tr height="19">
    <td colspan="3" height="19"><div align="center">APLICACIÓN DE MEDICAMENTOS</div></td>
  </tr>
  <tr height="19">
    <td width="169" height="19">FECHA</td>
    <td width="350">MEDICAMENTO, VIAS    DOSIS E INDICACIONES </td>
    <td width="294">HORA DE    ADMINISTRACION</td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="horap_1" name="horap_1" readonly="true" onclick="style_()" value="<?php echo @$horap_1; ?>" /></td>
    <td><input name="aplicacion_1" type="text" id="aplicacion_1" value="<?php echo @$aplicacion_1; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_1" name="fechamed_1" value="<?php echo @$fechamed_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_2" name="horap_2" value="<?php echo @$horap_2; ?>" /></td>
    <td><input name="aplicacion_2" type="text" id="aplicacion_2" value="<?php echo @$aplicacion_2; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_2" name="fechamed_2" value="<?php echo @$fechamed_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="horap_3" readonly="true" onclick="style_()" name="horap_3" value="<?php echo @$horap_3; ?>" /></td>
    <td><input name="aplicacion_3" type="text" id="aplicacion_3" value="<?php echo @$aplicacion_3; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_3" name="fechamed_3" value="<?php echo @$fechamed_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_4" name="horap_4" value="<?php echo @$horap_4; ?>" /></td>
    <td><input name="aplicacion_4" type="text" id="aplicacion_4" value="<?php echo @$aplicacion_4; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_4" name="fechamed_4" value="<?php echo @$fechamed_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_5" name="horap_5" value="<?php echo @$horap_5; ?>" /></td>
    <td><input name="aplicacion_5" type="text" id="aplicacion_5" value="<?php echo @$aplicacion_5; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_5" name="fechamed_5" value="<?php echo @$fechamed_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid" id="horap_6"  readonly="true" onclick="style_()"name="horap_6" value="<?php echo @$horap_6; ?>" /></td>
    <td><input name="aplicacion_6" type="text" id="aplicacion_6" value="<?php echo @$aplicacion_6; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_6" name="fechamed_6" value="<?php echo @$fechamed_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_7" name="horap_7" value="<?php echo @$horap_7; ?>" /></td>
    <td><input name="aplicacion_7" type="text" id="aplicacion_7" value="<?php echo @$aplicacion_7; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_7" name="fechamed_7" value="<?php echo @$fechamed_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_8" name="horap_8" value="<?php echo @$horap_8; ?>" /></td>
    <td><input name="aplicacion_8" type="text" id="aplicacion_8" value="<?php echo @$aplicacion_8; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_8" name="fechamed_8" value="<?php echo @$fechamed_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_9" name="horap_9" value="<?php echo @$horap_9; ?>" /></td>
    <td><input name="aplicacion_9" type="text" id="aplicacion_9" value="<?php echo @$aplicacion_9; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_9" name="fechamed_9" value="<?php echo @$fechamed_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><input type="text" class="input_txt valid"  readonly="true" onclick="style_()" id="horap_0" name="horap_0" value="<?php echo @$horap_0; ?>" /></td>
    <td><input name="aplicacion_10" type="text" id="aplicacion_10" value="<?php echo @$aplicacion_10; ?>" size="50" /></td>
    <td><input type="text" class="input_txt valid" id="fechamed_10" name="fechamed_10" value="<?php echo @$fechamed_10; ?>" /></td>
  </tr>
</table>



<?php echo @$button ?>
</form><br>
 <a href='#' onClick='imprSelec("content-fr_aplicacion")' >Imprimir</a>
</div>
</fieldset>