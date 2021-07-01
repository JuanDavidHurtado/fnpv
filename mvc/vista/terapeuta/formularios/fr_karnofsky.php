<?php
if (isset($_REQUEST['guardar_fr_karnofsky']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_karnofsky'] == 'new') {

$sql = "INSERT INTO fr_karnofsky (
`id_fr_karnofsky`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`resultado_karnof`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['resultado_karnof']."'
) ";


} else if ($_REQUEST['id_fr_karnofsky'] != '') {

$sql = "UPDATE fr_karnofsky set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`resultado_karnof` = '".$_REQUEST['resultado_karnof']."' WHERE `id_fr_karnofsky` = '".$_REQUEST['id_fr_karnofsky']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_karnofsky = 'new';
$sql = "SELECT * from fr_karnofsky WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_karnofsky = $row['id_fr_karnofsky'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$resultado_karnof = $row['resultado_karnof'];
break; }

?>
<script>

$(function(){

$("#close-fr_karnofsky").click(function(){
$("#open-fr_karnofsky").show();
$(this).hide();
$("#content-fr_karnofsky").hide('slow');
});

$("#open-fr_karnofsky").click(function(){
$("#close-fr_karnofsky").show();
$(this).hide();
$("#content-fr_karnofsky").show('slow');
});

var karno=<?php echo $resultado_karnof; ?>;

$("#resultado_karnof").val(karno);


});

</script>

<script type="text/javascript">



</script>
<fieldset id="fr_karnofsky">
<legend align="left"> <div class="arrow-c" id="close-fr_karnofsky"></div> <div class="arrow-o" id="open-fr_karnofsky" ></div> <font>Valoracion Karnofsky</font></legend>
<div id="content-fr_karnofsky">


<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_karnofsky" id="guardar_fr_karnofsky" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>



 <form id="form_fr_karnofsky" name="form_fr_karnofsky" action="<?php echo @$action_form_fr_karnofsky ?>#fr_karnofsky" method="post">

<input type="hidden" id="id_fr_karnofsky" name="id_fr_karnofsky" value="<?php echo @$id_fr_karnofsky ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_karnofsky" name="id_fr_karnofsky" value="<?php echo @$id_fr_karnofsky; ?>" />


<table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">
  <col width="314" />
  <col width="200" />
  <col width="47" />
  <col width="83" />
  <tr height="19">
    <td colspan="3" height="19"><center>ESCALA DE ACTIVIDAD- KARNOFSKY</center></td>
  </tr>
  <tr height="19">
    <td height="19" width="461">SITUACION PACIENTE</td>
    <td width="260">DEFINICION</td>
    <td width="65">VALOR</td>
  </tr>
  <tr height="19">
    <td height="19" width="461">Normal, sin quejas, sin evidencia de enfermedad</td>
    <td rowspan="3" width="260">Capaz    de realizar una actividad y trabajo normal; no necesita cuidados especiales</td>
    <td align="right" width="65"><div align="center">100</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Capaz de realizar una actividad normal, signos o sintomas    menores de enfermedad</td>
    <td align="right" width="65"><div align="center">90</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Actividad normal con esfuerzo, algunos signos o sisntomas de    enfermedad</td>
    <td align="right" width="65"><div align="center">80</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Se ocupa por si mismo, incapaz de llevar una actividad normal o    realizar un trabajo activo</td>
    <td rowspan="3" width="260">incapaz    de trabajar, capaz de vivir en el hogar y atender la mayoria de las    necesidades personales, requiere diversos grados de asistencia</td>
    <td align="right" width="65"><div align="center">70</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">requiere asistencia ocacional, pero es capaz de atender la    mayoria de sus necesidades</td>
    <td align="right" width="65"><div align="center">60</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Requiere asistencia considerable y cuidados medicos</td>
    <td align="right" width="65"><div align="center">50</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Incapacitado, requiere cuidados y asistencia especial</td>
    <td rowspan="5" width="260">Imposibilidad    de cuidarse a si mismo, requiere atencion institucional y hospitalaria    equivalente, la enfermedad puede progresar rapidamente</td>
    <td align="right" width="65"><div align="center">40</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Severamente incapacitado, la hospitalizacion esta indicada auque    la muerte no es inminente</td>
    <td align="right" width="65"><div align="center">30</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Es necesaria la hospitalizacion, muy enfermo, tratamiento activo    de soporte necesario</td>
    <td align="right" width="65"><div align="center">20</div></td>
  </tr>
  <tr height="38">
    <td height="38" width="461">Moribundo, proceso fatal progresando rapidamente</td>
    <td align="right" width="65"><div align="center">10</div></td>
  </tr>
  <tr height="19">
    <td height="19" width="461">Muerte</td>
    <td align="right" width="65"><div align="center">0</div></td>
  </tr>
</table>
<p><br />
</p>
<table width="260" border="0" align="center" cellpadding="0" cellspacing="0" class="data">
  <tr>
    <td height="19" width="188">Seleccione Puntaje</td>
    <td colspan="2" width="72">

        <select  id="resultado_karnof" name="resultado_karnof">
            <option value="100" selected="selected" >100</option>
          <option value="90">90</option>
          <option value="80">80</option>
          <option value="70">70</option>
          <option value="60">60</option>
          <option value="50">50</option>
          <option value="40">40</option>
          <option value="30">30</option>
          <option value="20">20</option>
          <option value="10">10</option>
          <option value="0">0</option>
        </select>

    </td>
  </tr>
</table>

<?php echo @$button ?>
</form><br>

</div>
</fieldset>