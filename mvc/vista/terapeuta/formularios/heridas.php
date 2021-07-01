<?php
if (isset($_REQUEST['guardar_fr_heridas']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_heridas'] == 'new') {

$sql = "INSERT INTO fr_heridas (
`id_fr_heridas`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`estadio_1`,
`estadio_2`,
`estadio_3`,
`estadio_4`,
`clas_1`,
`clas_2`,
`clas_3`,
`clas_4`,
`dim_1`,
`dim_2`,
`dim_3`,
`dim_4`,
`base_1`,
`base_2`,
`base_3`,
`base_4`,
`car_1`,
`car_2`,
`car_3`,
`car_4`,
`exu_1`,
`exu_2`,
`exu_3`,
`exu_4`,
`carexu_1`,
`carexu_2`,
`carexu_3`,
`carexu_4`,
`piel_1_1`,
`piel_2`,
`piel_3`,
`piel_4`,
`color_1`,
`color_2`,
`color_3`,
`color_4`,
`signo_1`,
`signo_2`,
`signo_3`,
`signo_4`,
`olor_1`,
`olor_2`,
`olor_3`,
`olor_4`,
`dolor_1`,
`dolor_2`,
`dolor_3`,
`dolor_4`,
`foto`,
`obser_heridas`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['estadio_1']."' ,
'".$_REQUEST['estadio_2']."' ,
'".$_REQUEST['estadio_3']."' ,
'".$_REQUEST['estadio_4']."' ,
'".$_REQUEST['clas_1']."' ,
'".$_REQUEST['clas_2']."' ,
'".$_REQUEST['clas_3']."' ,
'".$_REQUEST['clas_4']."' ,
'".$_REQUEST['dim_1']."' ,
'".$_REQUEST['dim_2']."' ,
'".$_REQUEST['dim_3']."' ,
'".$_REQUEST['dim_4']."' ,
'".$_REQUEST['base_1']."' ,
'".$_REQUEST['base_2']."' ,
'".$_REQUEST['base_3']."' ,
'".$_REQUEST['base_4']."' ,
'".$_REQUEST['car_1']."' ,
'".$_REQUEST['car_2']."' ,
'".$_REQUEST['car_3']."' ,
'".$_REQUEST['car_4']."' ,
'".$_REQUEST['exu_1']."' ,
'".$_REQUEST['exu_2']."' ,
'".$_REQUEST['exu_3']."' ,
'".$_REQUEST['exu_4']."' ,
'".$_REQUEST['carexu_1']."' ,
'".$_REQUEST['carexu_2']."' ,
'".$_REQUEST['carexu_3']."' ,
'".$_REQUEST['carexu_4']."' ,
'".$_REQUEST['piel_1_1']."' ,
'".$_REQUEST['piel_2']."' ,
'".$_REQUEST['piel_3']."' ,
'".$_REQUEST['piel_4']."' ,
'".$_REQUEST['color_1']."' ,
'".$_REQUEST['color_2']."' ,
'".$_REQUEST['color_3']."' ,
'".$_REQUEST['color_4']."' ,
'".$_REQUEST['signo_1']."' ,
'".$_REQUEST['signo_2']."' ,
'".$_REQUEST['signo_3']."' ,
'".$_REQUEST['signo_4']."' ,
'".$_REQUEST['olor_1']."' ,
'".$_REQUEST['olor_2']."' ,
'".$_REQUEST['olor_3']."' ,
'".$_REQUEST['olor_4']."' ,
'".$_REQUEST['dolor_1']."' ,
'".$_REQUEST['dolor_2']."' ,
'".$_REQUEST['dolor_3']."' ,
'".$_REQUEST['dolor_4']."' ,
'".$_REQUEST['foto']."' ,
'".$_REQUEST['obser_heridas']."'
) ";


} else if ($_REQUEST['id_fr_heridas'] != '') {

$sql = "UPDATE fr_heridas set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`estadio_1` = '".$_REQUEST['estadio_1']."' ,
`estadio_2` = '".$_REQUEST['estadio_2']."' ,
`estadio_3` = '".$_REQUEST['estadio_3']."' ,
`estadio_4` = '".$_REQUEST['estadio_4']."' ,
`clas_1` = '".$_REQUEST['clas_1']."' ,
`clas_2` = '".$_REQUEST['clas_2']."' ,
`clas_3` = '".$_REQUEST['clas_3']."' ,
`clas_4` = '".$_REQUEST['clas_4']."' ,
`dim_1` = '".$_REQUEST['dim_1']."' ,
`dim_2` = '".$_REQUEST['dim_2']."' ,
`dim_3` = '".$_REQUEST['dim_3']."' ,
`dim_4` = '".$_REQUEST['dim_4']."' ,
`base_1` = '".$_REQUEST['base_1']."' ,
`base_2` = '".$_REQUEST['base_2']."' ,
`base_3` = '".$_REQUEST['base_3']."' ,
`base_4` = '".$_REQUEST['base_4']."' ,
`car_1` = '".$_REQUEST['car_1']."' ,
`car_2` = '".$_REQUEST['car_2']."' ,
`car_3` = '".$_REQUEST['car_3']."' ,
`car_4` = '".$_REQUEST['car_4']."' ,
`exu_1` = '".$_REQUEST['exu_1']."' ,
`exu_2` = '".$_REQUEST['exu_2']."' ,
`exu_3` = '".$_REQUEST['exu_3']."' ,
`exu_4` = '".$_REQUEST['exu_4']."' ,
`carexu_1` = '".$_REQUEST['carexu_1']."' ,
`carexu_2` = '".$_REQUEST['carexu_2']."' ,
`carexu_3` = '".$_REQUEST['carexu_3']."' ,
`carexu_4` = '".$_REQUEST['carexu_4']."' ,
`piel_1_1` = '".$_REQUEST['piel_1_1']."' ,
`piel_2` = '".$_REQUEST['piel_2']."' ,
`piel_3` = '".$_REQUEST['piel_3']."' ,
`piel_4` = '".$_REQUEST['piel_4']."' ,
`color_1` = '".$_REQUEST['color_1']."' ,
`color_2` = '".$_REQUEST['color_2']."' ,
`color_3` = '".$_REQUEST['color_3']."' ,
`color_4` = '".$_REQUEST['color_4']."' ,
`signo_1` = '".$_REQUEST['signo_1']."' ,
`signo_2` = '".$_REQUEST['signo_2']."' ,
`signo_3` = '".$_REQUEST['signo_3']."' ,
`signo_4` = '".$_REQUEST['signo_4']."' ,
`olor_1` = '".$_REQUEST['olor_1']."' ,
`olor_2` = '".$_REQUEST['olor_2']."' ,
`olor_3` = '".$_REQUEST['olor_3']."' ,
`olor_4` = '".$_REQUEST['olor_4']."' ,
`dolor_1` = '".$_REQUEST['dolor_1']."' ,
`dolor_2` = '".$_REQUEST['dolor_2']."' ,
`dolor_3` = '".$_REQUEST['dolor_3']."' ,
`dolor_4` = '".$_REQUEST['dolor_4']."' ,
`foto` = '".$_REQUEST['foto']."' ,
`obser_heridas` = '".$_REQUEST['obser_heridas']."' WHERE `id_fr_heridas` = '".$_REQUEST['id_fr_heridas']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_heridas = 'new';
$sql = "SELECT * from fr_heridas WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_heridas = $row['id_fr_heridas'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$estadio_1 = $row['estadio_1'];
$estadio_2 = $row['estadio_2'];
$estadio_3 = $row['estadio_3'];
$estadio_4 = $row['estadio_4'];
$clas_1 = $row['clas_1'];
$clas_2 = $row['clas_2'];
$clas_3 = $row['clas_3'];
$clas_4 = $row['clas_4'];
$dim_1 = $row['dim_1'];
$dim_2 = $row['dim_2'];
$dim_3 = $row['dim_3'];
$dim_4 = $row['dim_4'];
$base_1 = $row['base_1'];
$base_2 = $row['base_2'];
$base_3 = $row['base_3'];
$base_4 = $row['base_4'];
$car_1 = $row['car_1'];
$car_2 = $row['car_2'];
$car_3 = $row['car_3'];
$car_4 = $row['car_4'];
$exu_1 = $row['exu_1'];
$exu_2 = $row['exu_2'];
$exu_3 = $row['exu_3'];
$exu_4 = $row['exu_4'];
$carexu_1 = $row['carexu_1'];
$carexu_2 = $row['carexu_2'];
$carexu_3 = $row['carexu_3'];
$carexu_4 = $row['carexu_4'];
$piel_1_1 = $row['piel_1_1'];
$piel_2 = $row['piel_2'];
$piel_3 = $row['piel_3'];
$piel_4 = $row['piel_4'];
$color_1 = $row['color_1'];
$color_2 = $row['color_2'];
$color_3 = $row['color_3'];
$color_4 = $row['color_4'];
$signo_1 = $row['signo_1'];
$signo_2 = $row['signo_2'];
$signo_3 = $row['signo_3'];
$signo_4 = $row['signo_4'];
$olor_1 = $row['olor_1'];
$olor_2 = $row['olor_2'];
$olor_3 = $row['olor_3'];
$olor_4 = $row['olor_4'];
$dolor_1 = $row['dolor_1'];
$dolor_2 = $row['dolor_2'];
$dolor_3 = $row['dolor_3'];
$dolor_4 = $row['dolor_4'];
$foto = $row['foto'];
$obser_heridas = $row['obser_heridas'];
break; }

?>
<script>

$(function(){

$("#close-fr_heridas").click(function(){
$("#open-fr_heridas").show();
$(this).hide();
$("#content-fr_heridas").hide('slow');
});

$("#open-fr_heridas").click(function(){
$("#close-fr_heridas").show();
$(this).hide();
$("#content-fr_heridas").show('slow');
});

});

</script>
<fieldset id="fr_heridas">
<legend align="left"> <div class="arrow-c" id="close-fr_heridas"></div> <div class="arrow-o" id="open-fr_heridas" ></div> <font>SEGUIMIENTO DE HERIDAS</font></legend>
<div id="content-fr_heridas">

<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_heridas" id="guardar_fr_heridas" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_heridas" name="form_fr_heridas" action="<?php echo @$action_form_fr_heridas ?>#fr_heridas" method="post">

<input type="hidden" id="id_fr_heridas" name="id_fr_heridas" value="<?php echo @$id_fr_heridas ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_heridas" name="id_fr_heridas" value="<?php echo @$id_fr_heridas; ?>" />

<table border="0" class="data" align="center" cellpadding="0" cellspacing="0">
  <col width="215" />
  <col width="83" span="4" />
  <tr height="58">
    <td colspan="5" height="58">SEGUIMIENTO DE HERIDAS</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">&nbsp;</td>
    <td colspan="4"><div align="center">LOCALIZACION    ANATOMICA</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Estadio: I-II-III-IV-Inespecifica</td>
    <td width="53"><input type="text" class="input_txt valid" id="estadio_1" name="estadio_1" value="<?php echo @$estadio_1; ?>" /></td>
    <td width="60"><input type="text" class="input_txt valid" id="estadio_2" name="estadio_2" value="<?php echo @$estadio_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="estadio_3" name="estadio_3" value="<?php echo @$estadio_3; ?>" /></td>
    <td width="203"><input type="text" class="input_txt valid" id="estadio_4" name="estadio_4" value="<?php echo @$estadio_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">CLASIFICACION</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="clas_1" name="clas_1" value="<?php echo @$clas_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="clas_2" name="clas_2" value="<?php echo @$clas_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="clas_3" name="clas_3" value="<?php echo @$clas_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="clas_4" name="clas_4" value="<?php echo @$clas_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Quirurgica/ traumatica/ presion/vascular/absceso</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">DIMENSION</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="dim_1" name="dim_1" value="<?php echo @$dim_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="dim_2" name="dim_2" value="<?php echo @$dim_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="dim_3" name="dim_3" value="<?php echo @$dim_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="dim_4" name="dim_4" value="<?php echo @$dim_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Largo/ancho/profundidad</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">BASE DE LA HERIDA</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="base_1" name="base_1" value="<?php echo @$base_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="base_2" name="base_2" value="<?php echo @$base_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="base_3" name="base_3" value="<?php echo @$base_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="base_4" name="base_4" value="<?php echo @$base_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Tunel/ Cavitada/Fistula/Plana</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">CARACTERISTICAS DE TEJIDO</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="car_1" name="car_1" value="<?php echo @$car_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="car_2" name="car_2" value="<?php echo @$car_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="car_3" name="car_3" value="<?php echo @$car_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="car_4" name="car_4" value="<?php echo @$car_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Epitelial/granulacion/esfacelo/necrotico</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">EXUDADO</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="exu_1" name="exu_1" value="<?php echo @$exu_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="exu_2" name="exu_2" value="<?php echo @$exu_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="exu_3" name="exu_3" value="<?php echo @$exu_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="exu_4" name="exu_4" value="<?php echo @$exu_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Seroso/Sanguinolento/Purpulento/ninguno</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">CANTIDAD DEL EXUDADO</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="carexu_1" name="carexu_1" value="<?php echo @$carexu_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="carexu_2" name="carexu_2" value="<?php echo @$carexu_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="carexu_3" name="carexu_3" value="<?php echo @$carexu_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="carexu_4" name="carexu_4" value="<?php echo @$carexu_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Ausente/baja/Moderada/Abuendante</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">PIEL CIRCUNDANTE</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="piel_1_1" name="piel_1_1" value="<?php echo @$piel_1_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="piel_2" name="piel_2" value="<?php echo @$piel_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="piel_3" name="piel_3" value="<?php echo @$piel_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="piel_4" name="piel_4" value="<?php echo @$piel_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Integra/Engronosa/Macerada/Invaginada</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">PIEL COLOR</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="color_1" name="color_1" value="<?php echo @$color_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="color_2" name="color_2" value="<?php echo @$color_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="color_3" name="color_3" value="<?php echo @$color_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="color_4" name="color_4" value="<?php echo @$color_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Oscuar/Palida/Rosada</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">SIGNOS DE INFECCION</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="signo_1" name="signo_1" value="<?php echo @$signo_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="signo_2" name="signo_2" value="<?php echo @$signo_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="signo_3" name="signo_3" value="<?php echo @$signo_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="signo_4" name="signo_4" value="<?php echo @$signo_4; ?>" /></td>
  </tr>
  <tr height="38">
    <td height="38" width="383">Induracion/Calor/Eritema/Edema/Caolor</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">OLOR</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="olor_1" name="olor_1" value="<?php echo @$olor_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="olor_2" name="olor_2" value="<?php echo @$olor_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="olor_3" name="olor_3" value="<?php echo @$olor_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="olor_4" name="olor_4" value="<?php echo @$olor_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Presente/fetido/No olor</td>
  </tr>
  <tr height="19">
    <td height="19" width="383">DOLOR</td>
    <td rowspan="2" width="53"><input type="text" class="input_txt valid" id="dolor_1" name="dolor_1" value="<?php echo @$dolor_1; ?>" /></td>
    <td rowspan="2" width="60"><input type="text" class="input_txt valid" id="dolor_2" name="dolor_2" value="<?php echo @$dolor_2; ?>" /></td>
    <td rowspan="2" width="83"><input type="text" class="input_txt valid" id="dolor_3" name="dolor_3" value="<?php echo @$dolor_3; ?>" /></td>
    <td rowspan="2" width="203"><input type="text" class="input_txt valid" id="dolor_4" name="dolor_4" value="<?php echo @$dolor_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="383">Escala 0-10</td>
  </tr>
</table>
<p align="center">OBSERVACION:</p>
<p align="center">
  <textarea name="obser_heridas" cols="60" rows="3" id="obser_heridas"><?php echo @$obser_heridas ?></textarea>
</p>
<p>
  <input type="hidden" class="input_txt valid" id="foto" name="foto" value="<?php echo @$foto; ?>" />


<?php echo @$button ?>
</form><br>
 <a href='#' onClick='imprSelec("content-fr_heridas")' >Imprimir</a>
</div>
</fieldset>