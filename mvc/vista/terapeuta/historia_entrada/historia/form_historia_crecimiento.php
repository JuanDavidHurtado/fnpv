<?php
if (isset($_REQUEST['guardar_hc_historia_entrada']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_historia_entrada'] == 'new') {

$sql = "INSERT INTO hc_historia_entrada (
`id_hc_historia_entrada`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`motivo_1`,
`actual_1`,
`cesarea`,
`apendice`,
`vesicula`,
`hernia`,
`otro`,
`patologico`,
`alergico`,
`gine_g`,
`gine_p`,
`gine_a`,
`gine__c`,
`pf_s`,
`pf_n`,
`tension`,
`f_respiratoria`,
`pulso`,
`talla`,
`temperatura`,
`apariencia`,
`cabeza_11`,
`orl_11`,
`torax_11`,
`abdomen_11`,
`genito_11`,
`osteo_11`,
`neuro_11`,
`piel_1`,
`idx_1`,
`plan_1`,
`peso_in`,
`familiares_1`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['motivo_1']."' ,
'".$_REQUEST['actual_1']."' ,
'".$_REQUEST['cesarea']."' ,
'".$_REQUEST['apendice']."' ,
'".$_REQUEST['vesicula']."' ,
'".$_REQUEST['hernia']."' ,
'".$_REQUEST['otro']."' ,
'".$_REQUEST['patologico']."' ,
'".$_REQUEST['alergico']."' ,
'".$_REQUEST['gine_g']."' ,
'".$_REQUEST['gine_p']."' ,
'".$_REQUEST['gine_a']."' ,
'".$_REQUEST['gine__c']."' ,
'".$_REQUEST['pf_s']."' ,
'".$_REQUEST['pf_n']."' ,
'".$_REQUEST['tension']."' ,
'".$_REQUEST['f_respiratoria']."' ,
'".$_REQUEST['pulso']."' ,
'".$_REQUEST['talla']."' ,
'".$_REQUEST['temperatura']."' ,
'".$_REQUEST['apariencia']."' ,
'".$_REQUEST['cabeza_11']."' ,
'".$_REQUEST['orl_11']."' ,
'".$_REQUEST['torax_11']."' ,
'".$_REQUEST['abdomen_11']."' ,
'".$_REQUEST['genito_11']."' ,
'".$_REQUEST['osteo_11']."' ,
'".$_REQUEST['neuro_11']."' ,
'".$_REQUEST['piel_1']."' ,foreach($row as $key => $value){
  $_REQUEST[$key] = $value;
}
'".$_REQUEST['idx_1']."' ,
'".$_REQUEST['plan_1']."' ,
'".$_REQUEST['peso_in']."' ,
'".$_REQUEST['familiares_1']."' 
) "; 


} else if ($_REQUEST['id_hc_historia_entrada'] != '') {

$sql = "UPDATE hc_historia_entrada set 
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`motivo_1` = '".$_REQUEST['motivo_1']."' ,
`actual_1` = '".$_REQUEST['actual_1']."' ,
`cesarea` = '".$_REQUEST['cesarea']."' ,
`apendice` = '".$_REQUEST['apendice']."' ,
`vesicula` = '".$_REQUEST['vesicula']."' ,
`hernia` = '".$_REQUEST['hernia']."' ,
`otro` = '".$_REQUEST['otro']."' ,
`patologico` = '".$_REQUEST['patologico']."' ,
`alergico` = '".$_REQUEST['alergico']."' ,
`gine_g` = '".$_REQUEST['gine_g']."' ,
`gine_p` = '".$_REQUEST['gine_p']."' ,
`gine_a` = '".$_REQUEST['gine_a']."' ,
`gine__c` = '".$_REQUEST['gine__c']."' ,
`pf_s` = '".$_REQUEST['pf_s']."' ,
`pf_n` = '".$_REQUEST['pf_n']."' ,
`tension` = '".$_REQUEST['tension']."' ,
`f_respiratoria` = '".$_REQUEST['f_respiratoria']."' ,
`pulso` = '".$_REQUEST['pulso']."' ,
`talla` = '".$_REQUEST['talla']."' ,
`temperatura` = '".$_REQUEST['temperatura']."' ,
`apariencia` = '".$_REQUEST['apariencia']."' ,
`cabeza_11` = '".$_REQUEST['cabeza_11']."' ,
`orl_11` = '".$_REQUEST['orl_11']."' ,
`torax_11` = '".$_REQUEST['torax_11']."' ,
`abdomen_11` = '".$_REQUEST['abdomen_11']."' ,
`genito_11` = '".$_REQUEST['genito_11']."' ,
`osteo_11` = '".$_REQUEST['osteo_11']."' ,
`neuro_11` = '".$_REQUEST['neuro_11']."' ,
`piel_1` = '".$_REQUEST['piel_1']."' ,
`idx_1` = '".$_REQUEST['idx_1']."' ,
`plan_1` = '".$_REQUEST['plan_1']."' ,
`peso_in` = '".$_REQUEST['peso_in']."' ,
`familiares_1` = '".$_REQUEST['familiares_1']."' WHERE `id_hc_historia_entrada` = '".$_REQUEST['id_hc_historia_entrada']."' ;"; 

}

$conexion->EjecutarQuery($sql);
}
$id_hc_historia_entrada = 'new'; 
$sql = "SELECT * from hc_historia_entrada WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' "; 
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_historia_entrada = $row['id_hc_historia_entrada'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$motivo_1 = $row['motivo_1'];
$actual_1 = $row['actual_1'];
$cesarea = $row['cesarea'];
$apendice = $row['apendice'];
$vesicula = $row['vesicula'];
$hernia = $row['hernia'];
$otro = $row['otro'];
$patologico = $row['patologico'];
$alergico = $row['alergico'];
$gine_g = $row['gine_g'];
$gine_p = $row['gine_p'];
$gine_a = $row['gine_a'];
$gine__c = $row['gine__c'];
$pf_s = $row['pf_s'];
$pf_n = $row['pf_n'];
$tension = $row['tension'];
$f_respiratoria = $row['f_respiratoria'];
$pulso = $row['pulso'];
$talla = $row['talla'];
$temperatura = $row['temperatura'];
$apariencia = $row['apariencia'];
$cabeza_11 = $row['cabeza_11'];
$orl_11 = $row['orl_11'];
$torax_11 = $row['torax_11'];
$abdomen_11 = $row['abdomen_11'];
$genito_11 = $row['genito_11'];
$osteo_11 = $row['osteo_11'];
$neuro_11 = $row['neuro_11'];
$piel_1 = $row['piel_1'];
$idx_1 = $row['idx_1'];
$plan_1 = $row['plan_1'];
$peso_in = $row['peso_in'];
$familiares_1 = $row['familiares_1'];
break; }

foreach($row as $key => $value){
  $_REQUEST[$key] = $value;
}


?>
<script>

$(function(){

$("#close-hc_historia_entrada").click(function(){
$("#open-hc_historia_entrada").show();
$(this).hide();
$("#content-hc_historia_entrada").hide('slow');
});

$("#open-hc_historia_entrada").click(function(){
$("#close-hc_historia_entrada").show();
$(this).hide();
$("#content-hc_historia_entrada").show('slow');
});

});

</script>
<fieldset id="hc_historia_entrada">
<legend align="left"> <div class="arrow-c" id="close-hc_historia_entrada"></div> <div class="arrow-o" id="open-hc_historia_entrada" ></div> <font>Valoracion Historia de Entrada</font></legend>
<div id="content-hc_historia_entrada">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_historia_entrada" id="guardar_hc_historia_entrada" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_historia_entrada" name="form_hc_historia_entrada" action="<?php echo @$action_form_hc_historia_entrada ?>#hc_historia_entrada" method="post">

<input type="hidden" id="id_hc_historia_entrada" name="id_hc_historia_entrada" value="<?php echo @$id_hc_historia_entrada ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_hc_historia_entrada" name="id_hc_historia_entrada" value="<?php echo @$id_hc_historia_entrada; ?>" />

<h3 align="center">HISTORIA CLINICA CRECIMIENTO Y DESARROLLO</h3>
<p align="center">
  <label></label>
</p>
<table width="647" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
  <col width="165" />
  <col width="110" />
  <col width="185" />
  <col width="106" />
  <tr height="19">
    <td height="24" colspan="3"><div align="center">MOTIVO DE CONSULTA</div></td>
    </tr>
  <tr height="19">
    <td height="100" colspan="3"><div align="center">
      <textarea name="motivo_1" cols="60" rows="5"  id="motivo_1"><?php echo @$motivo_1; ?></textarea>
    </div></td>
    </tr>
  <tr height="19">
    <td height="19" colspan="3"><div align="center">ENFERMEDAD ACTUAL</div></td>
    </tr>
  <tr height="19">
    <td height="19" colspan="3"><div align="center">
      <textarea name="actual_1" cols="60" rows="5" id="actual_1"><?php echo @$actual_1; ?></textarea>
    </div></td>
    </tr>
  <tr height="19">
    <td colspan="3" height="19"><div align="center">
      <p>ANTECEDENTES    PERSONALES</p>
      </div></td>
  </tr>
  <tr height="19">
    <td width="337" height="19">Quirurgicos</td>
    <td width="143">Patológicos</td>
    <td width="193"><input type="text" class="input_txt valid" id="patologico" name="patologico" value="<?php echo @$patologico; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19"><textarea name="cesarea" cols="45" rows="2" id="cesarea"><?php echo @$cesarea; ?></textarea></td>
    <td width="143">Alérgicos    y Farmacolólogicos</td>
    <td width="193"><input type="text" class="input_txt valid" id="alergico" name="alergico" value="<?php echo @$alergico; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" colspan="3"><div align="center">ANTECEDENTES FAMILIARES</div></td>
    </tr>
  <tr height="19">
    <td height="19" colspan="3">
      <div align="center">
        <textarea name="familiares_1" cols="60" rows="5"  id="familiares_1"><?php echo @$familiares_1; ?></textarea>
      </div></td>
    </tr>
</table>
<p>&nbsp;</p>
<table width="530" border="0" align="center" cellpadding="0" cellspacing="0"  class="data">
  <col width="165" />
  <col width="110" />
  <col width="185" />
  <col width="106" />
  <tr height="19">
    <td colspan="4" height="19"><div align="center">EXAMEN    FISICO</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Tension Arterial</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="tension" name="tension" value="<?php echo @$tension; ?>" /></td>
    <td width="166">mmHg</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">F.Respiratoria</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="f_respiratoria" name="f_respiratoria" value="<?php echo @$f_respiratoria; ?>" /></td>
    <td width="166">min</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Pulso</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="pulso" name="pulso" value="<?php echo @$pulso; ?>" /></td>
    <td width="166">min</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Temperatura</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="talla" name="talla" value="<?php echo @$talla; ?>" /></td>
    <td width="166">°C</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Peso</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="peso_in" name="peso_in" value="<?php echo @$peso_in; ?>" /></td>
    <td width="166">Kg</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Talla</td>
    <td colspan="2"><input type="text" class="input_txt valid" id="temperatura" name="temperatura" value="<?php echo @$temperatura; ?>" /></td>
    <td width="166">cm</td>
  </tr>
  <tr height="19">
    <td height="19" width="174">Apariencia</td>
    <td colspan="3"><input type="text" class="input_txt valid" id="apariencia" name="apariencia" value="<?php echo @$apariencia; ?>" /></td>
  </tr>
</table>
<p>&nbsp;</p>

<?php echo @$button ?>
</form><br>
</div>
</fieldset>