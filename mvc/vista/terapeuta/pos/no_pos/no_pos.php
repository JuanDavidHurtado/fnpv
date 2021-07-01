<?php
if (isset($_REQUEST['guardar_no_pos']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_no_pos'] == 'new') {

$sql = "INSERT INTO no_pos (
`id_no_pos`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`pos_u_1`,
`pos_u_2`,
`pos_u_3`,
`pos_u_4`,
`pos_u_5`,
`pos_u_6`,
`n_pos_1`,
`n_pos_2`,
`n_pos_3`,
`n_pos_4`,
`n_pos_5`,
`n_pos_6`,
`h_pos_1`,
`h_pos_2`,
`h_pos_3`,
`h_pos_4`,
`h_pos_5`,
`h_pos_6`,
`proce_pos_1`,
`proce_pos_2`,
`proce_pos_3`,
`proce_pos_4`,
`proce_pos_5`,
`proce_pos_6`,
`no_pos_pro_1`,
`no_pos_pro_2`,
`no_pos_pro_3`,
`no_pos_pro_4`,
`no_pos_pro_5`,
`no_pos_pro_6`,
`nh_pos_pro_1`,
`nh_pos_pro_2`,
`nh_pos_pro_3`,
`nh_pos_pro_4`,
`nh_pos_pro_5`,
`nh_pos_pro_6`,
`autoinvima_1`,
`cientifica`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['pos_u_1']."' ,
'".$_REQUEST['pos_u_2']."' ,
'".$_REQUEST['pos_u_3']."' ,
'".$_REQUEST['pos_u_4']."' ,
'".$_REQUEST['pos_u_5']."' ,
'".$_REQUEST['pos_u_6']."' ,
'".$_REQUEST['n_pos_1']."' ,
'".$_REQUEST['n_pos_2']."' ,
'".$_REQUEST['n_pos_3']."' ,
'".$_REQUEST['n_pos_4']."' ,
'".$_REQUEST['n_pos_5']."' ,
'".$_REQUEST['n_pos_6']."' ,
'".$_REQUEST['h_pos_1']."' ,
'".$_REQUEST['h_pos_2']."' ,
'".$_REQUEST['h_pos_3']."' ,
'".$_REQUEST['h_pos_4']."' ,
'".$_REQUEST['h_pos_5']."' ,
'".$_REQUEST['h_pos_6']."' ,
'".$_REQUEST['proce_pos_1']."' ,
'".$_REQUEST['proce_pos_2']."' ,
'".$_REQUEST['proce_pos_3']."' ,
'".$_REQUEST['proce_pos_4']."' ,
'".$_REQUEST['proce_pos_5']."' ,
'".$_REQUEST['proce_pos_6']."' ,
'".$_REQUEST['no_pos_pro_1']."' ,
'".$_REQUEST['no_pos_pro_2']."' ,
'".$_REQUEST['no_pos_pro_3']."' ,
'".$_REQUEST['no_pos_pro_4']."' ,
'".$_REQUEST['no_pos_pro_5']."' ,
'".$_REQUEST['no_pos_pro_6']."' ,
'".$_REQUEST['nh_pos_pro_1']."' ,
'".$_REQUEST['nh_pos_pro_2']."' ,
'".$_REQUEST['nh_pos_pro_3']."' ,
'".$_REQUEST['nh_pos_pro_4']."' ,
'".$_REQUEST['nh_pos_pro_5']."' ,
'".$_REQUEST['nh_pos_pro_6']."' ,
'".$_REQUEST['autoinvima_1']."' ,
'".$_REQUEST['cientifica']."'
) ";


} else if ($_REQUEST['id_no_pos'] != '') {

$sql = "UPDATE no_pos set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`pos_u_1` = '".$_REQUEST['pos_u_1']."' ,
`pos_u_2` = '".$_REQUEST['pos_u_2']."' ,
`pos_u_3` = '".$_REQUEST['pos_u_3']."' ,
`pos_u_4` = '".$_REQUEST['pos_u_4']."' ,
`pos_u_5` = '".$_REQUEST['pos_u_5']."' ,
`pos_u_6` = '".$_REQUEST['pos_u_6']."' ,
`n_pos_1` = '".$_REQUEST['n_pos_1']."' ,
`n_pos_2` = '".$_REQUEST['n_pos_2']."' ,
`n_pos_3` = '".$_REQUEST['n_pos_3']."' ,
`n_pos_4` = '".$_REQUEST['n_pos_4']."' ,
`n_pos_5` = '".$_REQUEST['n_pos_5']."' ,
`n_pos_6` = '".$_REQUEST['n_pos_6']."' ,
`h_pos_1` = '".$_REQUEST['h_pos_1']."' ,
`h_pos_2` = '".$_REQUEST['h_pos_2']."' ,
`h_pos_3` = '".$_REQUEST['h_pos_3']."' ,
`h_pos_4` = '".$_REQUEST['h_pos_4']."' ,
`h_pos_5` = '".$_REQUEST['h_pos_5']."' ,
`h_pos_6` = '".$_REQUEST['h_pos_6']."' ,
`proce_pos_1` = '".$_REQUEST['proce_pos_1']."' ,
`proce_pos_2` = '".$_REQUEST['proce_pos_2']."' ,
`proce_pos_3` = '".$_REQUEST['proce_pos_3']."' ,
`proce_pos_4` = '".$_REQUEST['proce_pos_4']."' ,
`proce_pos_5` = '".$_REQUEST['proce_pos_5']."' ,
`proce_pos_6` = '".$_REQUEST['proce_pos_6']."' ,
`no_pos_pro_1` = '".$_REQUEST['no_pos_pro_1']."' ,
`no_pos_pro_2` = '".$_REQUEST['no_pos_pro_2']."' ,
`no_pos_pro_3` = '".$_REQUEST['no_pos_pro_3']."' ,
`no_pos_pro_4` = '".$_REQUEST['no_pos_pro_4']."' ,
`no_pos_pro_5` = '".$_REQUEST['no_pos_pro_5']."' ,
`no_pos_pro_6` = '".$_REQUEST['no_pos_pro_6']."' ,
`nh_pos_pro_1` = '".$_REQUEST['nh_pos_pro_1']."' ,
`nh_pos_pro_2` = '".$_REQUEST['nh_pos_pro_2']."' ,
`nh_pos_pro_3` = '".$_REQUEST['nh_pos_pro_3']."' ,
`nh_pos_pro_4` = '".$_REQUEST['nh_pos_pro_4']."' ,
`nh_pos_pro_5` = '".$_REQUEST['nh_pos_pro_5']."' ,
`nh_pos_pro_6` = '".$_REQUEST['nh_pos_pro_6']."' ,
`autoinvima_1` = '".$_REQUEST['autoinvima_1']."' ,
`cientifica` = '".$_REQUEST['cientifica']."' WHERE `id_no_pos` = '".$_REQUEST['id_no_pos']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_no_pos = 'new';
$sql = "SELECT * from no_pos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_no_pos = $row['id_no_pos'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$pos_u_1 = $row['pos_u_1'];
$pos_u_2 = $row['pos_u_2'];
$pos_u_3 = $row['pos_u_3'];
$pos_u_4 = $row['pos_u_4'];
$pos_u_5 = $row['pos_u_5'];
$pos_u_6 = $row['pos_u_6'];
$n_pos_1 = $row['n_pos_1'];
$n_pos_2 = $row['n_pos_2'];
$n_pos_3 = $row['n_pos_3'];
$n_pos_4 = $row['n_pos_4'];
$n_pos_5 = $row['n_pos_5'];
$n_pos_6 = $row['n_pos_6'];
$h_pos_1 = $row['h_pos_1'];
$h_pos_2 = $row['h_pos_2'];
$h_pos_3 = $row['h_pos_3'];
$h_pos_4 = $row['h_pos_4'];
$h_pos_5 = $row['h_pos_5'];
$h_pos_6 = $row['h_pos_6'];
$proce_pos_1 = $row['proce_pos_1'];
$proce_pos_2 = $row['proce_pos_2'];
$proce_pos_3 = $row['proce_pos_3'];
$proce_pos_4 = $row['proce_pos_4'];
$proce_pos_5 = $row['proce_pos_5'];
$proce_pos_6 = $row['proce_pos_6'];
$no_pos_pro_1 = $row['no_pos_pro_1'];
$no_pos_pro_2 = $row['no_pos_pro_2'];
$no_pos_pro_3 = $row['no_pos_pro_3'];
$no_pos_pro_4 = $row['no_pos_pro_4'];
$no_pos_pro_5 = $row['no_pos_pro_5'];
$no_pos_pro_6 = $row['no_pos_pro_6'];
$nh_pos_pro_1 = $row['nh_pos_pro_1'];
$nh_pos_pro_2 = $row['nh_pos_pro_2'];
$nh_pos_pro_3 = $row['nh_pos_pro_3'];
$nh_pos_pro_4 = $row['nh_pos_pro_4'];
$nh_pos_pro_5 = $row['nh_pos_pro_5'];
$nh_pos_pro_6 = $row['nh_pos_pro_6'];
$autoinvima_1 = $row['autoinvima_1'];
$cientifica = $row['cientifica'];
break; }

?>
<script>

$(function(){

$("#close-no_pos").click(function(){
$("#open-no_pos").show();
$(this).hide();
$("#content-no_pos").hide('slow');
});

$("#open-no_pos").click(function(){
$("#close-no_pos").show();
$(this).hide();
$("#content-no_pos").show('slow');
});

});

</script>
<fieldset id="no_pos">
<legend align="left"> <div class="arrow-c" id="close-no_pos"></div> <div class="arrow-o" id="open-no_pos" ></div> <font>Medicamentos No POS</font></legend>
<div id="content-no_pos">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_no_pos" id="guardar_no_pos" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form  id="form_no_pos" name="form_no_pos" action="<?php echo @$action_form_no_pos ?>#no_pos" method="post">


<input type="hidden" id="id_no_pos" name="id_no_pos" value="<?php echo @$id_no_pos ?>" />

<input type="hidden" class="input_txt valid" id="id_no_pos" name="id_no_pos" value="<?php echo @$id_no_pos; ?>" />

<p align="center"><strong>FORMATO NO POS</strong></p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="154" />
  <col width="134" />
  <col width="107" />
  <col width="137" />
  <col width="162" />
  <col width="223" />
  <tr height="19">
    <td colspan="6" height="19"><div align="center"><strong>MEDICAMENTO    POS UTILIZADO</strong></div></td>
  </tr>
  <tr height="58">
    <td height="58" width="184">NOMBRE DE LA SUSTANCIA ACTIVA(GENERICO)</td>
    <td width="168">FORMA    FARMACEUTICA</td>
    <td width="168">CONCENTRACION</td>
    <td width="168">DOSIS    DIA</td>
    <td width="334">N°    DE DIAS TRATAMIENTO ORDENADO</td>
    <td width="182">TOTAL    TRATAMIENTO ORDENADO</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="pos_u_1" name="pos_u_1" value="<?php echo @$pos_u_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="pos_u_2" name="pos_u_2" value="<?php echo @$pos_u_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="pos_u_3" name="pos_u_3" value="<?php echo @$pos_u_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="pos_u_4" name="pos_u_4" value="<?php echo @$pos_u_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="pos_u_5" name="pos_u_5" value="<?php echo @$pos_u_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="pos_u_6" name="pos_u_6" value="<?php echo @$pos_u_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="6" height="19"><div align="center"><strong>MEDICAMENTO    NO POS SOLICITADO</strong></div></td>
  </tr>
  <tr height="58">
    <td height="58" width="184">NOMBRE DE LA SUSTANCIA ACTIVA(GENERICO)</td>
    <td width="168">FORMA    FARMACEUTICA</td>
    <td width="168">CONCENTRACION</td>
    <td width="168">DOSIS    DIA</td>
    <td width="334">N°    DE DIAS TRATAMIENTO ORDENADO</td>
    <td width="182">TOTAL    TRATAMIENTO ORDENADO</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="n_pos_1" name="n_pos_1" value="<?php echo @$n_pos_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="n_pos_2" name="n_pos_2" value="<?php echo @$n_pos_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="n_pos_3" name="n_pos_3" value="<?php echo @$n_pos_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="n_pos_4" name="n_pos_4" value="<?php echo @$n_pos_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="n_pos_5" name="n_pos_5" value="<?php echo @$n_pos_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="n_pos_6" name="n_pos_6" value="<?php echo @$n_pos_6; ?>" /></td>
  </tr>
  <tr height="58">
    <td height="58" width="184">MEDICAMENTO HOMOLOGO EN EL POS</td>
    <td width="168">FORMA    FARMACEUTICA</td>
    <td width="168">CONCENTRACION</td>
    <td width="168">DOSIS    DIA</td>
    <td width="334">N°    DE DIAS TRATAMIENTO ORDENADO</td>
    <td width="182">TOTAL    TRATAMIENTO ORDENADO</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="h_pos_1" name="h_pos_1" value="<?php echo @$h_pos_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="h_pos_2" name="h_pos_2" value="<?php echo @$h_pos_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="h_pos_3" name="h_pos_3" value="<?php echo @$h_pos_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="h_pos_4" name="h_pos_4" value="<?php echo @$h_pos_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="h_pos_5" name="h_pos_5" value="<?php echo @$h_pos_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="h_pos_6" name="h_pos_6" value="<?php echo @$h_pos_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="6" height="19"><div align="center"><strong>PROCEDIMIENTO    POS REALIZADO</strong></div></td>
  </tr>
  <tr height="38">
    <td height="38" width="184">NOMBRE DEL PROCEDIMIENTO POS</td>
    <td width="168">CODIGO    CUPS</td>
    <td width="168">OTRO CODIGO</td>
    <td width="168">FRECUENCIA DE    USO</td>
    <td width="334">TIEMPO    ORDENADO</td>
    <td width="182">CANTIDAD    TOTAL ORDENADA</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="proce_pos_1" name="proce_pos_1" value="<?php echo @$proce_pos_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="proce_pos_2" name="proce_pos_2" value="<?php echo @$proce_pos_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="proce_pos_3" name="proce_pos_3" value="<?php echo @$proce_pos_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="proce_pos_4" name="proce_pos_4" value="<?php echo @$proce_pos_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="proce_pos_5" name="proce_pos_5" value="<?php echo @$proce_pos_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="proce_pos_6" name="proce_pos_6" value="<?php echo @$proce_pos_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td colspan="6" height="19"><div align="center"><strong>PROCEDIMIENTO    NO POS SOLICITADO</strong></div></td>
  </tr>
  <tr height="58">
    <td height="58" width="184">NOMBRE DEL PROCEDIMIENTO NO POS</td>
    <td width="168">CODIGO    CUPS</td>
    <td width="168">OTRO CODIGO</td>
    <td width="168">FRECUENCIA DE    USO</td>
    <td width="334">TIEMPO    ORDENADO</td>
    <td width="182">CANTIDAD    TOTAL ORDENADA</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="no_pos_pro_1" name="no_pos_pro_1" value="<?php echo @$no_pos_pro_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="no_pos_pro_2" name="no_pos_pro_2" value="<?php echo @$no_pos_pro_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="no_pos_pro_3" name="no_pos_pro_3" value="<?php echo @$no_pos_pro_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="no_pos_pro_4" name="no_pos_pro_4" value="<?php echo @$no_pos_pro_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="no_pos_pro_5" name="no_pos_pro_5" value="<?php echo @$no_pos_pro_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="no_pos_pro_6" name="no_pos_pro_6" value="<?php echo @$no_pos_pro_6; ?>" /></td>
  </tr>
  <tr height="58">
    <td height="58" width="184">NOMBRE DEL PROCEDIMIENTO HOMOLOGO EN EL POS</td>
    <td width="168">CODIGO    MAPIPOS</td>
    <td width="168">OTRO CODIGO</td>
    <td width="168">FRECUENCIA DE    USO</td>
    <td width="334">TIEMPO    ORDENADO</td>
    <td width="182">CANTIDAD    TOTAL ORDENADA</td>
  </tr>
  <tr height="19">
    <td height="19" width="184"><input type="text" class="input_txt valid" id="nh_pos_pro_1" name="nh_pos_pro_1" value="<?php echo @$nh_pos_pro_1; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="nh_pos_pro_2" name="nh_pos_pro_2" value="<?php echo @$nh_pos_pro_2; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="nh_pos_pro_3" name="nh_pos_pro_3" value="<?php echo @$nh_pos_pro_3; ?>" /></td>
    <td width="168"><input type="text" class="input_txt valid" id="nh_pos_pro_4" name="nh_pos_pro_4" value="<?php echo @$nh_pos_pro_4; ?>" /></td>
    <td width="334"><input type="text" class="input_txt valid" id="nh_pos_pro_5" name="nh_pos_pro_5" value="<?php echo @$nh_pos_pro_5; ?>" /></td>
    <td width="182"><input type="text" class="input_txt valid" id="nh_pos_pro_6" name="nh_pos_pro_6" value="<?php echo @$nh_pos_pro_6; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="525" />
  <col width="59" />
  <tr height="38">
    <td height="38" width="725">CUMPLIMIENTO    DE LA LEGISLACION SOBRE EL USO EN COLOMBIA</td>
    <td width="155">SI/NO</td>
  </tr>
  <tr height="19">
    <td height="19" width="725">¿ESTA AUTORIZADO EL USO DEL MEDICAMENTO PARA ENFERMEDAD POR EL    INVIMA?</td>
    <td width="155"><input type="text" class="input_txt valid" id="autoinvima_1" name="autoinvima_1" value="<?php echo @$autoinvima_1; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="725">¿ESTA AUTORIZADA LA EJECUCION DEL PORCEDIMIENTO POR LAS    SOCIEDADES CIENTIFICAS DEL PAIS?</td>
    <td width="155"><input type="text" class="input_txt valid" id="cientifica" name="cientifica" value="<?php echo @$cientifica; ?>" /></td>
  </tr>
</table>

<br>

<?php echo @$button ?>

<a href="#" onclick="imprSelec('content-no_pos', true,'v')" class="no_print">Imprimir</a>

</form><br>
</div>
</fieldset>