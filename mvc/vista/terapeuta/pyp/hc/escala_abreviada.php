<?php
if (isset($_REQUEST['guardar_hc_escala_ab']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_hc_escala_ab'] == 'new') {

$sql = "INSERT INTO hc_escala_ab (
`id_hc_escala_ab`,
`id_usuario`,
`id_proceso`,
`id_historia`,
`id_vinicial`,
`id_revaloracion`,
`edadm_1`,
`edadm_2`,
`edadm_3`,
`edadm_4`,
`edadm_5`,
`escala_0`,
`escala_1`,
`escala_2`,
`escala_3`,
`escala_4`,
`escala_5`,
`escala_6`,
`escala_7`,
`escala_8`,
`escala_9`,
`escala_10`,
`escala1_1`,
`escala1_2`,
`escala1_3`,
`escala1_4`,
`escala1_5`,
`escala1_6`,
`escala1_7`,
`escala1_8`,
`escala1_9`,
`escala1_10`,
`escala2_1`,
`escala2_2`,
`escala2_3`,
`escala2_4`,
`escala2_5`,
`escala2_6`,
`escala2_7`,
`escala2_8`,
`escala2_9`,
`escala2_10`,
`escala3_1`,
`escala3_2`,
`escala3_3`,
`escala3_4`,
`escala3_5`,
`escala3_6`,
`escala3_7`,
`escala3_8`,
`escala3_9`,
`escala3_10`,
`escala4_1`,
`escala4_2`,
`escala4_3`,
`escala4_4`,
`escala4_5`,
`escala4_6`,
`escala4_7`,
`escala4_8`,
`escala4_9`,
`escala4_10`,
`escala4_11`,
`escala4_12`,
`adapta_0`,
`adapta_1`,
`adapta_2`,
`adapta_3`,
`adapta_4`,
`adapta_5`,
`adapta_6`,
`adapta_7`,
`adapta_8`,
`adapta_9`,
`adapta_10`,
`adapta_11`,
`adapta_12`,
`adapta_13`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['edadm_1']."' ,
'".$_REQUEST['edadm_2']."' ,
'".$_REQUEST['edadm_3']."' ,
'".$_REQUEST['edadm_4']."' ,
'".$_REQUEST['edadm_5']."' ,
'".$_REQUEST['escala_0']."' ,
'".$_REQUEST['escala_1']."' ,
'".$_REQUEST['escala_2']."' ,
'".$_REQUEST['escala_3']."' ,
'".$_REQUEST['escala_4']."' ,
'".$_REQUEST['escala_5']."' ,
'".$_REQUEST['escala_6']."' ,
'".$_REQUEST['escala_7']."' ,
'".$_REQUEST['escala_8']."' ,
'".$_REQUEST['escala_9']."' ,
'".$_REQUEST['escala_10']."' ,
'".$_REQUEST['escala1_1']."' ,
'".$_REQUEST['escala1_2']."' ,
'".$_REQUEST['escala1_3']."' ,
'".$_REQUEST['escala1_4']."' ,
'".$_REQUEST['escala1_5']."' ,
'".$_REQUEST['escala1_6']."' ,
'".$_REQUEST['escala1_7']."' ,
'".$_REQUEST['escala1_8']."' ,
'".$_REQUEST['escala1_9']."' ,
'".$_REQUEST['escala1_10']."' ,
'".$_REQUEST['escala2_1']."' ,
'".$_REQUEST['escala2_2']."' ,
'".$_REQUEST['escala2_3']."' ,
'".$_REQUEST['escala2_4']."' ,
'".$_REQUEST['escala2_5']."' ,
'".$_REQUEST['escala2_6']."' ,
'".$_REQUEST['escala2_7']."' ,
'".$_REQUEST['escala2_8']."' ,
'".$_REQUEST['escala2_9']."' ,
'".$_REQUEST['escala2_10']."' ,
'".$_REQUEST['escala3_1']."' ,
'".$_REQUEST['escala3_2']."' ,
'".$_REQUEST['escala3_3']."' ,
'".$_REQUEST['escala3_4']."' ,
'".$_REQUEST['escala3_5']."' ,
'".$_REQUEST['escala3_6']."' ,
'".$_REQUEST['escala3_7']."' ,
'".$_REQUEST['escala3_8']."' ,
'".$_REQUEST['escala3_9']."' ,
'".$_REQUEST['escala3_10']."' ,
'".$_REQUEST['escala4_1']."' ,
'".$_REQUEST['escala4_2']."' ,
'".$_REQUEST['escala4_3']."' ,
'".$_REQUEST['escala4_4']."' ,
'".$_REQUEST['escala4_5']."' ,
'".$_REQUEST['escala4_6']."' ,
'".$_REQUEST['escala4_7']."' ,
'".$_REQUEST['escala4_8']."' ,
'".$_REQUEST['escala4_9']."' ,
'".$_REQUEST['escala4_10']."' ,
'".$_REQUEST['escala4_11']."' ,
'".$_REQUEST['escala4_12']."' ,
'".$_REQUEST['adapta_0']."' ,
'".$_REQUEST['adapta_1']."' ,
'".$_REQUEST['adapta_2']."' ,
'".$_REQUEST['adapta_3']."' ,
'".$_REQUEST['adapta_4']."' ,
'".$_REQUEST['adapta_5']."' ,
'".$_REQUEST['adapta_6']."' ,
'".$_REQUEST['adapta_7']."' ,
'".$_REQUEST['adapta_8']."' ,
'".$_REQUEST['adapta_9']."' ,
'".$_REQUEST['adapta_10']."' ,
'".$_REQUEST['adapta_11']."' ,
'".$_REQUEST['adapta_12']."' ,
'".$_REQUEST['adapta_13']."'
) ";


} else if ($_REQUEST['id_hc_escala_ab'] != '') {

$sql = "UPDATE hc_escala_ab set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`edadm_1` = '".$_REQUEST['edadm_1']."' ,
`edadm_2` = '".$_REQUEST['edadm_2']."' ,
`edadm_3` = '".$_REQUEST['edadm_3']."' ,
`edadm_4` = '".$_REQUEST['edadm_4']."' ,
`edadm_5` = '".$_REQUEST['edadm_5']."' ,
`escala_0` = '".$_REQUEST['escala_0']."' ,
`escala_1` = '".$_REQUEST['escala_1']."' ,
`escala_2` = '".$_REQUEST['escala_2']."' ,
`escala_3` = '".$_REQUEST['escala_3']."' ,
`escala_4` = '".$_REQUEST['escala_4']."' ,
`escala_5` = '".$_REQUEST['escala_5']."' ,
`escala_6` = '".$_REQUEST['escala_6']."' ,
`escala_7` = '".$_REQUEST['escala_7']."' ,
`escala_8` = '".$_REQUEST['escala_8']."' ,
`escala_9` = '".$_REQUEST['escala_9']."' ,
`escala_10` = '".$_REQUEST['escala_10']."' ,
`escala1_1` = '".$_REQUEST['escala1_1']."' ,
`escala1_2` = '".$_REQUEST['escala1_2']."' ,
`escala1_3` = '".$_REQUEST['escala1_3']."' ,
`escala1_4` = '".$_REQUEST['escala1_4']."' ,
`escala1_5` = '".$_REQUEST['escala1_5']."' ,
`escala1_6` = '".$_REQUEST['escala1_6']."' ,
`escala1_7` = '".$_REQUEST['escala1_7']."' ,
`escala1_8` = '".$_REQUEST['escala1_8']."' ,
`escala1_9` = '".$_REQUEST['escala1_9']."' ,
`escala1_10` = '".$_REQUEST['escala1_10']."' ,
`escala2_1` = '".$_REQUEST['escala2_1']."' ,
`escala2_2` = '".$_REQUEST['escala2_2']."' ,
`escala2_3` = '".$_REQUEST['escala2_3']."' ,
`escala2_4` = '".$_REQUEST['escala2_4']."' ,
`escala2_5` = '".$_REQUEST['escala2_5']."' ,
`escala2_6` = '".$_REQUEST['escala2_6']."' ,
`escala2_7` = '".$_REQUEST['escala2_7']."' ,
`escala2_8` = '".$_REQUEST['escala2_8']."' ,
`escala2_9` = '".$_REQUEST['escala2_9']."' ,
`escala2_10` = '".$_REQUEST['escala2_10']."' ,
`escala3_1` = '".$_REQUEST['escala3_1']."' ,
`escala3_2` = '".$_REQUEST['escala3_2']."' ,
`escala3_3` = '".$_REQUEST['escala3_3']."' ,
`escala3_4` = '".$_REQUEST['escala3_4']."' ,
`escala3_5` = '".$_REQUEST['escala3_5']."' ,
`escala3_6` = '".$_REQUEST['escala3_6']."' ,
`escala3_7` = '".$_REQUEST['escala3_7']."' ,
`escala3_8` = '".$_REQUEST['escala3_8']."' ,
`escala3_9` = '".$_REQUEST['escala3_9']."' ,
`escala3_10` = '".$_REQUEST['escala3_10']."' ,
`escala4_1` = '".$_REQUEST['escala4_1']."' ,
`escala4_2` = '".$_REQUEST['escala4_2']."' ,
`escala4_3` = '".$_REQUEST['escala4_3']."' ,
`escala4_4` = '".$_REQUEST['escala4_4']."' ,
`escala4_5` = '".$_REQUEST['escala4_5']."' ,
`escala4_6` = '".$_REQUEST['escala4_6']."' ,
`escala4_7` = '".$_REQUEST['escala4_7']."' ,
`escala4_8` = '".$_REQUEST['escala4_8']."' ,
`escala4_9` = '".$_REQUEST['escala4_9']."' ,
`escala4_10` = '".$_REQUEST['escala4_10']."' ,
`escala4_11` = '".$_REQUEST['escala4_11']."' ,
`escala4_12` = '".$_REQUEST['escala4_12']."' ,
`adapta_0` = '".$_REQUEST['adapta_0']."' ,
`adapta_1` = '".$_REQUEST['adapta_1']."' ,
`adapta_2` = '".$_REQUEST['adapta_2']."' ,
`adapta_3` = '".$_REQUEST['adapta_3']."' ,
`adapta_4` = '".$_REQUEST['adapta_4']."' ,
`adapta_5` = '".$_REQUEST['adapta_5']."' ,
`adapta_6` = '".$_REQUEST['adapta_6']."' ,
`adapta_7` = '".$_REQUEST['adapta_7']."' ,
`adapta_8` = '".$_REQUEST['adapta_8']."' ,
`adapta_9` = '".$_REQUEST['adapta_9']."' ,
`adapta_10` = '".$_REQUEST['adapta_10']."' ,
`adapta_11` = '".$_REQUEST['adapta_11']."' ,
`adapta_12` = '".$_REQUEST['adapta_12']."' ,
`adapta_13` = '".$_REQUEST['adapta_13']."' WHERE `id_hc_escala_ab` = '".$_REQUEST['id_hc_escala_ab']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_hc_escala_ab = 'new';
$sql = "SELECT * from hc_escala_ab WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_hc_escala_ab = $row['id_hc_escala_ab'];
$id_usuario = $row['id_usuario'];
$id_proceso = $row['id_proceso'];
$id_historia = $row['id_historia'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$edadm_1 = $row['edadm_1'];
$edadm_2 = $row['edadm_2'];
$edadm_3 = $row['edadm_3'];
$edadm_4 = $row['edadm_4'];
$edadm_5 = $row['edadm_5'];
$escala_0 = $row['escala_0'];
$escala_1 = $row['escala_1'];
$escala_2 = $row['escala_2'];
$escala_3 = $row['escala_3'];
$escala_4 = $row['escala_4'];
$escala_5 = $row['escala_5'];
$escala_6 = $row['escala_6'];
$escala_7 = $row['escala_7'];
$escala_8 = $row['escala_8'];
$escala_9 = $row['escala_9'];
$escala_10 = $row['escala_10'];
$escala1_1 = $row['escala1_1'];
$escala1_2 = $row['escala1_2'];
$escala1_3 = $row['escala1_3'];
$escala1_4 = $row['escala1_4'];
$escala1_5 = $row['escala1_5'];
$escala1_6 = $row['escala1_6'];
$escala1_7 = $row['escala1_7'];
$escala1_8 = $row['escala1_8'];
$escala1_9 = $row['escala1_9'];
$escala1_10 = $row['escala1_10'];
$escala2_1 = $row['escala2_1'];
$escala2_2 = $row['escala2_2'];
$escala2_3 = $row['escala2_3'];
$escala2_4 = $row['escala2_4'];
$escala2_5 = $row['escala2_5'];
$escala2_6 = $row['escala2_6'];
$escala2_7 = $row['escala2_7'];
$escala2_8 = $row['escala2_8'];
$escala2_9 = $row['escala2_9'];
$escala2_10 = $row['escala2_10'];
$escala3_1 = $row['escala3_1'];
$escala3_2 = $row['escala3_2'];
$escala3_3 = $row['escala3_3'];
$escala3_4 = $row['escala3_4'];
$escala3_5 = $row['escala3_5'];
$escala3_6 = $row['escala3_6'];
$escala3_7 = $row['escala3_7'];
$escala3_8 = $row['escala3_8'];
$escala3_9 = $row['escala3_9'];
$escala3_10 = $row['escala3_10'];
$escala4_1 = $row['escala4_1'];
$escala4_2 = $row['escala4_2'];
$escala4_3 = $row['escala4_3'];
$escala4_4 = $row['escala4_4'];
$escala4_5 = $row['escala4_5'];
$escala4_6 = $row['escala4_6'];
$escala4_7 = $row['escala4_7'];
$escala4_8 = $row['escala4_8'];
$escala4_9 = $row['escala4_9'];
$escala4_10 = $row['escala4_10'];
$escala4_11 = $row['escala4_11'];
$escala4_12 = $row['escala4_12'];
$adapta_0 = $row['adapta_0'];
$adapta_1 = $row['adapta_1'];
$adapta_2 = $row['adapta_2'];
$adapta_3 = $row['adapta_3'];
$adapta_4 = $row['adapta_4'];
$adapta_5 = $row['adapta_5'];
$adapta_6 = $row['adapta_6'];
$adapta_7 = $row['adapta_7'];
$adapta_8 = $row['adapta_8'];
$adapta_9 = $row['adapta_9'];
$adapta_10 = $row['adapta_10'];
$adapta_11 = $row['adapta_11'];
$adapta_12 = $row['adapta_12'];
$adapta_13 = $row['adapta_13'];
break; }

?>
<script>

$(function(){

$("#close-hc_escala_ab").click(function(){
$("#open-hc_escala_ab").show();
$(this).hide();
$("#content-hc_escala_ab").hide('slow');
});

$("#open-hc_escala_ab").click(function(){
$("#close-hc_escala_ab").show();
$(this).hide();
$("#content-hc_escala_ab").show('slow');
});

});

</script>
<fieldset id="hc_escala_ab">
<legend align="left"> <div class="arrow-c" id="close-hc_escala_ab"></div> <div class="arrow-o" id="open-hc_escala_ab" ></div> <font>ESCALA ABREVIADA DE DESARROLLO </font></legend>
<div id="content-hc_escala_ab">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_hc_escala_ab" id="guardar_hc_escala_ab" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_escala_ab" name="form_hc_escala_ab" action="<?php echo @$action_form_hc_escala_ab ?>#hc_escala_ab" method="post">

<input type="hidden" id="id_hc_escala_ab" name="id_hc_escala_ab" value="<?php echo @$id_hc_escala_ab ?>" />



<input type="hidden" class="input_txt valid" id="id_hc_escala_ab" name="id_hc_escala_ab" value="<?php echo @$id_hc_escala_ab; ?>" />



<p align="center"><strong>ESCALA ABREVIADA DE DESARROLLO (EAD-1)</strong></p>
<p align="center">Edad en meses:
  <input type="text" class="input_txt valid" id="edadm_1" name="edadm_1" value="<?php echo @$edadm_1; ?>" />
</p>
<p align="center">Motricidad Gruesa A:
  <input type="text" class="input_txt valid" id="edadm_2" name="edadm_2" value="<?php echo @$edadm_2; ?>" />
</p>
<p align="center">Motriz fino adaptativa B:
  <input type="text" class="input_txt valid" id="edadm_3" name="edadm_3" value="<?php echo @$edadm_3; ?>" />
</p>
<p align="center">Audicion lenguaje C:
  <input type="text" class="input_txt valid" id="edadm_4" name="edadm_4" value="<?php echo @$edadm_4; ?>" />
</p>
<p align="center">Personal Social D:
  <input type="text" class="input_txt valid" id="edadm_5" name="edadm_5" value="<?php echo @$edadm_5; ?>" /></p>
<table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr height="19">
      <td height="22" width="135">EDAD MESES</td>
      <td width="59">ITEM</td>
      <td width="329">A. MOTRICIDAD GRUESA</td>
      <td>ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr height="19">
      <td height="19" width="135">&lt;1</td>
      <td width="59">0</td>
      <td width="329">Patea vigorosamente</td>
      <td width="439"><input type="text" class="input_txt valid" id="escala_0" name="escala_0" value="<?php echo @$escala_0; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="3" height="60" width="135">1 A 3</td>
      <td width="59">1</td>
      <td width="329">Levanta la cabeza en prona</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_1" name="escala_1" value="<?php echo @$escala_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">2</td>
      <td width="329">Levanta cabeza y pecho en prona</td>
    </tr>
    <tr height="22">
      <td height="44" width="59">3</td>
      <td width="329">Sostiene cabeza al levantarlo de los brazos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">4 A 6</td>
      <td width="59">4</td>
      <td width="329">Control de cabeza sentado</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_2" name="escala_2" value="<?php echo @$escala_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">5</td>
      <td width="329">Se voltea de un lado a otro</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">6</td>
      <td width="329">Intenta sentarse solo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">7 A 9</td>
      <td width="59">7</td>
      <td width="329">Se sostiene sentado con ayuda</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_3" name="escala_3" value="<?php echo @$escala_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">8</td>
      <td width="329">Se arrastra en posición prona</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">9</td>
      <td width="329">Se sienta por si solo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">10 A 12</td>
      <td width="59">10</td>
      <td width="329">Gatea bien</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_4" name="escala_4" value="<?php echo @$escala_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">11</td>
      <td width="329">Se agarra y se sostiene de píe</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">12</td>
      <td width="329">Se para solo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">13 A 18</td>
      <td width="59">13</td>
      <td width="329">Da pasitos solo</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_5" name="escala_5" value="<?php echo @$escala_5; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">14</td>
      <td width="329">Camina bien solo</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">15</td>
      <td width="329">Corre</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">19 A 24</td>
      <td width="59">16</td>
      <td width="329">Patea la pelota</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_6" name="escala_6" value="<?php echo @$escala_6; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">17</td>
      <td width="329">Lanza pelota con las manos</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">18</td>
      <td width="329">Salta en los dos pies</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">25 A 36</td>
      <td width="59">19</td>
      <td width="329">Se empina en ambos pies</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_7" name="escala_7" value="<?php echo @$escala_7; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">20</td>
      <td width="329">Camina hacia atrás</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">21</td>
      <td width="329">Se levanta sin usar las manos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">37 A 48</td>
      <td width="59">22</td>
      <td width="329">Camina en la punta de los pies</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_8" name="escala_8" value="<?php echo @$escala_8; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">23</td>
      <td width="329">Se para en un solo pie</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">24</td>
      <td width="329">Lanza y agarra la pelota</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135"> 49 A 60</td>
      <td width="59">25</td>
      <td width="329">Camina en línea recta</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_9" name="escala_9" value="<?php echo @$escala_9; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">26</td>
      <td width="329">Tres o más pasos en un pie</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">27</td>
      <td width="329">Hace rebotar y agarra la pelota</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">61 A 72</td>
      <td width="59">28</td>
      <td width="329">Salta a pie juntillas cuerda a 25 cm.</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala_10" name="escala_10" value="<?php echo @$escala_10; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">29</td>
      <td width="329">Hace caballito alternando pies</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">30</td>
      <td width="329">Salta desde 60 cm. de altura</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">73 A 84</td>
      <td width="59">31</td>
      <td width="329">Juega golosa</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala1_2" name="escala1_2" value="<?php echo @$escala1_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">32</td>
      <td width="329">Hace construcción rudimentaria</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">33</td>
      <td width="329">Salta alternando los pies</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="135">85 A 96</td>
      <td width="59">34</td>
      <td width="329">Abre y cierra las manos alternadamente</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala1_1" name="escala1_1" value="<?php echo @$escala1_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">35</td>
      <td width="329">Marcha sin perder el ritmo</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">36</td>
      <td width="329">Salta cuerda</td>
    </tr>
    <tr height="22">
      <td rowspan="3" height="63" width="135">108</td>
      <td width="59">37</td>
      <td width="329">Gran    habilidad de sus movimientos. Son más seguros y suaves</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala1_3" name="escala1_3" value="<?php echo @$escala1_3; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="63" width="59">38</td>
      <td width="329">Cuando    esta sentado es difícil que se quede quieto</td>
    </tr>
    <tr height="19">
      <td height="22" width="59">39</td>
      <td width="329">Violento en juegos al aire libre</td>
    </tr>
    <tr height="22">
      <td rowspan="3" height="63" width="135">120</td>
      <td width="59">40</td>
      <td width="329">Su cuerpo ya esta preparado para cualquier    tipo de deporte</td>
      <td rowspan="3" width="439"><input type="text" class="input_txt valid" id="escala1_4" name="escala1_4" value="<?php echo @$escala1_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="59">41</td>
      <td width="329">Realiza muchas actividades al aire libre</td>
    </tr>
    <tr height="22">
      <td height="63" width="59">42</td>
      <td width="329">Con los ojos cerrados se mantiene de    puntillas durante 15 segundos</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table border="0" align="center"cellpadding="0" cellspacing="0"  class="data">

    <tr height="19">
      <td height="41" width="150"> EDAD MESES</td>
      <td width="85">ITEM</td>
      <td width="397">B. MOTRICIDAD    ADAPTATIVA</td>
      <td>ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr height="22">
      <td height="22" width="150">&lt;1</td>
      <td width="85">0</td>
      <td width="397">Sigue movimiento horizontal y vertical de un    objeto</td>
      <td width="470"><input type="text" class="input_txt valid" id="escala1_5" name="escala1_5" value="<?php echo @$escala1_5; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">1 A 3</td>
      <td width="85">1</td>
      <td width="397">Abre y mira sus manos</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala1_6" name="escala1_6" value="<?php echo @$escala1_6; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="85">2</td>
      <td width="397">Sostiene un objeto en la mano</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">3</td>
      <td width="397">Se lleva objeto a la boca</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">4 A 6</td>
      <td width="85">4</td>
      <td width="397">Agarra objeto voluntaria mente</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala4_2" name="escala4_2" value="<?php echo @$escala4_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">5</td>
      <td width="397">Sostiene un objeto en cada mano</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">6</td>
      <td width="397">Pasa un objeto de una mano a otra</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">7 A 9</td>
      <td width="85">7</td>
      <td width="397">Manipula varios objetos a la vez</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala4_1" name="escala4_1" value="<?php echo @$escala4_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">8</td>
      <td width="397">Agarra objeto pequeño con los dedos</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">9</td>
      <td width="397">Agarra cubo con pulgar e índice</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">10 A 12</td>
      <td width="85">10</td>
      <td width="397">Mete y saca objetos en caja</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_9" name="escala3_9" value="<?php echo @$escala3_9; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">11</td>
      <td width="397">Agarra tercer objeto sin soltar otro</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">12</td>
      <td width="397">Busca objeto escondido</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">13 A 18</td>
      <td width="85">13</td>
      <td width="397">Hace torre de tres cubos</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_10" name="escala3_10" value="<?php echo @$escala3_10; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">14</td>
      <td width="397">Pasa hojas de un libro</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">15</td>
      <td width="397">Anticipa salida de un objeto</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">19 A 24</td>
      <td width="85">16</td>
      <td width="397">Tapa bien una caja</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_7" name="escala3_7" value="<?php echo @$escala3_7; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">17</td>
      <td width="397">Hace garabatos circulares</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">18</td>
      <td width="397">Hace torre de 5 o más cubos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">25 A 36</td>
      <td width="85">19</td>
      <td width="397">Ensarta 6 o más cuentas</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_6" name="escala3_6" value="<?php echo @$escala3_6; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">20</td>
      <td width="397">Copia línea horizontal y vertical</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">21</td>
      <td width="397">Separa objetos grandes y pequeños</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">37 A 48</td>
      <td width="85">22</td>
      <td width="397">Figura humana rudimentaria I</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala1_7" name="escala1_7" value="<?php echo @$escala1_7; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">23</td>
      <td width="397">Corta papel con tijeras</td>
    </tr>
    <tr height="19">
      <td height="22" width="85">24</td>
      <td width="397">Copia cuadrado y circulo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150"> 49 A 60</td>
      <td width="85">25</td>
      <td width="397">Dibuja figura humana II</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_2" name="escala3_2" value="<?php echo @$escala3_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">26</td>
      <td width="397">Agrupa por color y forma</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">27</td>
      <td width="397">Dibuja escalera</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">61 A 72</td>
      <td width="85">28</td>
      <td width="397">Agrupa por color, forma y tamaño</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_1" name="escala3_1" value="<?php echo @$escala3_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">29</td>
      <td width="397">Reconstruye escalera de 10 cubos</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">30</td>
      <td width="397">Dibuja casa</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">73 A 84</td>
      <td width="85">31</td>
      <td width="397">Escribe letras o números</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_4" name="escala3_4" value="<?php echo @$escala3_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">32</td>
      <td width="397">Modela figura humana</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">33</td>
      <td width="397">Copia figura línea – curva</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="150">85 A 96</td>
      <td width="85">34</td>
      <td width="397">Colorea figura</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_3" name="escala3_3" value="<?php echo @$escala3_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="85">35</td>
      <td width="397">Hace figura con papel</td>
    </tr>
    <tr height="19">
      <td height="57" width="85">36</td>
      <td width="397">Recorta curvas y círculos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="60" width="150">108</td>
      <td width="85">37</td>
      <td width="397">Los trazos de su escritura son más firmes</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_5" name="escala3_5" value="<?php echo @$escala3_5; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="60" width="85">38</td>
      <td width="397">Puede escribir largo rato sin cansarse</td>
    </tr>
    <tr height="22">
      <td height="60" width="85">39</td>
      <td width="397">Avance en el dibujo, dibuja retratos y    paisajes</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="63">120</td>
      <td width="85">40</td>
      <td width="397">Habilidad para construir maquetas</td>
      <td rowspan="3" width="470"><input type="text" class="input_txt valid" id="escala3_8" name="escala3_8" value="<?php echo @$escala3_8; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="63" width="85">41</td>
      <td width="397">Busca diferencia entre dos dibujos    aparentemente iguales</td>
    </tr>
    <tr height="22">
      <td height="63" width="85">42</td>
      <td width="397">Rasgos de escritura más seguros pero    emborrona los trazos</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr height="41">
      <td height="48" width="139"> EDAD MESES</td>
      <td width="47">ITEM</td>
      <td width="330">C. AUDICIÓN LENGUAJE</td>
      <td>ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr height="19">
      <td height="19" width="139">&lt;1</td>
      <td width="47">0</td>
      <td width="330">Se sobresalta con ruido</td>
      <td width="469"><input type="text" class="input_txt valid" id="escala1_8" name="escala1_8" value="<?php echo @$escala1_8; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">1 A 3</td>
      <td width="47">1</td>
      <td width="330">Busca sonido con la mirada</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala1_9" name="escala1_9" value="<?php echo @$escala1_9; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">2</td>
      <td width="330">Dos sonidos guturales diferentes</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">3</td>
      <td width="330">Balbucea con las personas</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">4 A 6</td>
      <td width="47">4</td>
      <td width="330">4 o más sonidos diferentes</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_9" name="escala2_9" value="<?php echo @$escala2_9; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">5</td>
      <td width="330">Ríe a carcajadas</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">6</td>
      <td width="330">Reacciona cuando se le llama</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">7 A 9</td>
      <td width="47">7</td>
      <td width="330">Pronuncia tres o más silabas</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_10" name="escala2_10" value="<?php echo @$escala2_10; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">8</td>
      <td width="330">Hace sonar la campanilla</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">9</td>
      <td width="330">Una palabra clara</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">10 A 12</td>
      <td width="47">10</td>
      <td width="330">Niega con la cabeza</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_7" name="escala2_7" value="<?php echo @$escala2_7; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">11</td>
      <td width="330">Llama a la mamá o al acompañante</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">12</td>
      <td width="330">Entiende ordenes sencillas</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">13 A 18</td>
      <td width="47">13</td>
      <td width="330">Conoce tres objetos</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_8" name="escala2_8" value="<?php echo @$escala2_8; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">14</td>
      <td width="330">Combina dos palabras</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">15</td>
      <td width="330">Reconoce seis objetos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">19 A 24</td>
      <td width="47">16</td>
      <td width="330">Nombra cinco objetos</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_6" name="escala2_6" value="<?php echo @$escala2_6; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">17</td>
      <td width="330">Usa frases de tres palabras</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">18</td>
      <td width="330">Más de veinte palabras claras</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="60" width="139">25 A 36</td>
      <td width="47">19</td>
      <td width="330">Dice su nombre completo</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_5" name="escala2_5" value="<?php echo @$escala2_5; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="60" width="47">20</td>
      <td width="330">Reconoce alto–bajo–atrás–grande-pequeño</td>
    </tr>
    <tr height="19">
      <td height="60" width="47">21</td>
      <td width="330">Usa oraciones completas</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">37 A 48</td>
      <td width="47">22</td>
      <td width="330">Define uso de cinco objetos</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala1_10" name="escala1_10" value="<?php echo @$escala1_10; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">23</td>
      <td width="330">Repite tres dígitos</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">24</td>
      <td width="330">Describe bien el dibujo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139"> 49 A 60</td>
      <td width="47">25</td>
      <td width="330">Cuenta en los dedos de las manos</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_4" name="escala2_4" value="<?php echo @$escala2_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">26</td>
      <td width="330">Distingue: Adelante-Atrás Arriba-Abajo</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">27</td>
      <td width="330">Nombra 4-5 colores</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">61 A 72</td>
      <td width="47">28</td>
      <td width="330">Expresa opiniones</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_2" name="escala2_2" value="<?php echo @$escala2_2; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">29</td>
      <td width="330">Conoce izquierda y derecha</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">30</td>
      <td width="330">Conoce días de la semana</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">73 A 84</td>
      <td width="47">31</td>
      <td width="330">Identifica letras iguales</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_1" name="escala2_1" value="<?php echo @$escala2_1; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">32</td>
      <td width="330">Dice frases con entonación</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">33</td>
      <td width="330">Conoce: ayer, hoy y mañana</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="139">85 A 96</td>
      <td width="47">34</td>
      <td width="330">Cuenta hacia atrás desde 10</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala2_3" name="escala2_3" value="<?php echo @$escala2_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="47">35</td>
      <td width="330">Asigna orden en secuencia</td>
    </tr>
    <tr height="19">
      <td height="57" width="47">36</td>
      <td width="330">Conoce en orden los días de la semana</td>
    </tr>
    <tr height="22">
      <td rowspan="3" height="66" width="139">108</td>
      <td width="47">37</td>
      <td width="330">Es un gran lector  y prefiere hacerlo para él mismo en voz    alta</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="escala4_3" name="escala4_3" value="<?php echo @$escala4_3; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="66" width="47">38</td>
      <td width="330">Busca las rimas a los ejemplos dados (juega    en el jardín con el patín)</td>
    </tr>
    <tr height="22">
      <td height="66" width="47">39</td>
      <td width="330">Devuelve correctamente los cambios con un    simple calculo mental</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="63">120</td>
      <td width="47">40</td>
      <td width="330">Repite mínimo 25 palabras distintas</td>
      <td rowspan="3" width="469"><input type="text" class="input_txt valid" id="adapta_13" name="adapta_13" value="<?php echo @$adapta_13; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="63" width="47">41</td>
      <td width="330">Darle una serie de seis números para que los    repita</td>
    </tr>
    <tr height="22">
      <td height="63" width="47">42</td>
      <td width="330">Define algunas palabras de las que    habitualmente utiliza</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table border="0" align="center" cellpadding="0" cellspacing="0"  class="data">

    <tr height="41">
      <td height="62" width="167">EDAD MESES</td>
      <td width="102">ITEM</td>
      <td width="305">D.  PERSONAL SOCIAL</td>
      <td>ANOTE EDAD MESES PARA CADA EVALUACION</td>
    </tr>


    <tr height="19">
      <td height="19" width="167">&lt;1</td>
      <td width="102">0</td>
      <td width="305">Sigue movimiento del rostro</td>
      <td width="468"><input type="text" class="input_txt valid" id="escala4_4" name="escala4_4" value="<?php echo @$escala4_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">1 A 3</td>
      <td width="102">1</td>
      <td width="305">Reconoce a la madre</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="escala4_5" name="escala4_5" value="<?php echo @$escala4_5; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="22" width="102">2</td>
      <td width="305">Sonríe al acariciarlo</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">3</td>
      <td width="305">Se voltea cuando se le habla</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">4 A 6</td>
      <td width="102">4</td>
      <td width="305">Coge la mano del examinador</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_8" name="adapta_8" value="<?php echo @$adapta_8; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">5</td>
      <td width="305">Acepta y coge juguete</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">6</td>
      <td width="305">Pone atención a la conversación</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">7 A 9</td>
      <td width="102">7</td>
      <td width="305">Ayuda a sostener la taza para beber</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_11" name="adapta_11" value="<?php echo @$adapta_11; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">8</td>
      <td width="305">Reacciona a imagen en  el espejo</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">9</td>
      <td width="305">Imita aplauso</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">10 A 12</td>
      <td width="102">10</td>
      <td width="305">Entrega juguete al examinador</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_10" name="adapta_10" value="<?php echo @$adapta_10; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">11</td>
      <td width="305">Pide un juguete u objeto</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">12</td>
      <td width="305">Bebe en taza solo</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">13 A 18</td>
      <td width="102">13</td>
      <td width="305">Señala una prenda de vestir</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_12" name="adapta_12" value="<?php echo @$adapta_12; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">14</td>
      <td width="305">Señala dos partes del cuerpo</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">15</td>
      <td width="305">Avisa deseos de ir al baño</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">19 A 24</td>
      <td width="102">16</td>
      <td width="305">Señala 5 partes del cuerpo</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_9" name="adapta_9" value="<?php echo @$adapta_9; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">17</td>
      <td width="305">Trata de contar experiencias</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">18</td>
      <td width="305">Control diurno de orina</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">25 A 36</td>
      <td width="102">19</td>
      <td width="305">Diferencia niño-niña</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="escala4_6" name="escala4_6" value="<?php echo @$escala4_6; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">20</td>
      <td width="305">Dice el nombre del papá y mamá</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">21</td>
      <td width="305">Se lava solo las manos y la cara</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">37 A 48</td>
      <td width="102">22</td>
      <td width="305">Puede desvestirse solo</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_7" name="adapta_7" value="<?php echo @$adapta_7; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">23</td>
      <td width="305">Comparte juego con otros niños</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">24</td>
      <td width="305">Tiene amigo especial</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167"> 49 A 60</td>
      <td width="102">25</td>
      <td width="305">Puede vestirse y  desvestirse solo</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_5" name="adapta_5" value="<?php echo @$adapta_5; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">26</td>
      <td width="305">Sabe cuantos años tiene</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">27</td>
      <td width="305">Organiza juegos</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="60" width="167">61 A 72</td>
      <td width="102">28</td>
      <td width="305">Hace mandados</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_6" name="adapta_6" value="<?php echo @$adapta_6; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="60" width="102">29</td>
      <td width="305">Conoce nombre vereda-pueblo de residencia</td>
    </tr>
    <tr height="19">
      <td height="60" width="102">30</td>
      <td width="305">Comenta vida familiar</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">73 A 84</td>
      <td width="102">31</td>
      <td width="305">Sabe lugar que ocupa</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_4" name="adapta_4" value="<?php echo @$adapta_4; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">32</td>
      <td width="305">Participa en actividades</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">33</td>
      <td width="305">Conoce fechas especiales</td>
    </tr>
    <tr height="19">
      <td rowspan="3" height="57" width="167">85 A 96</td>
      <td width="102">34</td>
      <td width="305">Relaciona tiempo con actividades diarias</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_3" name="adapta_3" value="<?php echo @$adapta_3; ?>" /></td>
      </tr>
    <tr height="19">
      <td height="57" width="102">35</td>
      <td width="305">Indica recorrido</td>
    </tr>
    <tr height="19">
      <td height="57" width="102">36</td>
      <td width="305">Habla sobre si mismo</td>
    </tr>
    <tr height="22">
      <td rowspan="3" height="66" width="167">108</td>
      <td width="102">37</td>
      <td width="305">Intenta mantener independencia lejos del    ambiente familiar</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_2" name="adapta_2" value="<?php echo @$adapta_2; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="66" width="102">38</td>
      <td width="305">Acepta sus errores y tiene sentido de    justicia y honradez</td>
    </tr>
    <tr height="22">
      <td height="66" width="102">39</td>
      <td width="305">Se siente miembro de la sociedad y tiene    mucha iniciativa</td>
    </tr>
    <tr height="34">
      <td rowspan="3" height="90">120</td>
      <td width="102">40</td>
      <td width="305">La conducta de los dos sexos se diferencia    cada vez más y adquiere rasgos propios</td>
      <td rowspan="3" width="468"><input type="text" class="input_txt valid" id="adapta_1" name="adapta_1" value="<?php echo @$adapta_1; ?>" /></td>
      </tr>
    <tr height="22">
      <td height="90" width="102">41</td>
      <td width="305">Se lleva bien con los padres y le gusta el    hogar</td>
    </tr>
    <tr height="34">
      <td height="90" width="102">42</td>
      <td width="305">Debido a los cambios de su cuerpo esta muy    pendiente de él y tiene muchas dudas sobre la sexualidad</td>
    </tr>
  </table>

<BR>
<BR>
  <table border="1" cellpadding="0" cellspacing="0">
    <col width="83" span="21" />
    <tr height="22">
      <td rowspan="4" height="122" width="51">Edad en Meses</td>
      <td colspan="20"><div align="center">PARÁMETROS NORMATIVOS PARA LA EVALUACIÓN DEL DESARROLLO</div></td>
    </tr>
    <tr height="22">
      <td colspan="20" height="22">DE NIÑOS MENORES DE CIENTO VEINTE ( 120 ) MESES    (10 AÑOS )</td>
    </tr>
    <tr height="19">
      <td colspan="4">Motricidad Gruesa ( A )</td>
      <td colspan="4">Motricidad Fina Adaptativa ( B )</td>
      <td colspan="4">Audición y Lenguaje ( C    )</td>
      <td colspan="4">Personal Social ( D )</td>
      <td colspan="4">TOTAL</td>
    </tr>
    <tr height="19">
      <td height="39" width="64">Alerta</td>
      <td width="66">Medio</td>
      <td width="71">Medio Alto</td>
      <td width="35">Alto</td>
      <td width="79">Alerta</td>
      <td width="71">Medio Alto</td>
      <td width="71">Medio Alto</td>
      <td width="50">Alto</td>
      <td width="64">Alerta</td>
      <td width="66">Medio</td>
      <td width="71">Medio Alto</td>
      <td width="50">Alto</td>
      <td width="64">Alerta</td>
      <td width="66">Medio</td>
      <td width="71">Medio Alto</td>
      <td width="50">Alto</td>
      <td width="64">Alerta</td>
      <td width="66">Medio</td>
      <td width="71">Medio Alto</td>
      <td width="65">Alto</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">01-03</td>
      <td width="64">0-1</td>
      <td width="66">02-03</td>
      <td width="71">04-05</td>
      <td width="35">6</td>
      <td width="79">0-1</td>
      <td width="71">02-03</td>
      <td width="71">04-05</td>
      <td width="50">6</td>
      <td width="64">0-1</td>
      <td width="66">02-03</td>
      <td width="71">04-05</td>
      <td width="50">6</td>
      <td width="64">0-1</td>
      <td width="66">02-05</td>
      <td width="71">04-05</td>
      <td width="50">6</td>
      <td width="64">0-6</td>
      <td width="66">07-13</td>
      <td width="71">14-22</td>
      <td width="65">23</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">4 – 6</td>
      <td width="64">0-4</td>
      <td width="66">05-06</td>
      <td width="71">07-09</td>
      <td width="35">10</td>
      <td width="79">0-4</td>
      <td width="71">05-06</td>
      <td width="71">07-09</td>
      <td width="50">10</td>
      <td width="64">0-4</td>
      <td width="66">05-06</td>
      <td width="71">07-09</td>
      <td width="50">10</td>
      <td width="64">0-4</td>
      <td width="66">05-06</td>
      <td width="71">07-09</td>
      <td width="50">10</td>
      <td width="64">0-19</td>
      <td width="66">20-27</td>
      <td width="71">28-32</td>
      <td width="65">32</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">7 – 9</td>
      <td width="64">0-7</td>
      <td width="66">08-10</td>
      <td width="71">nov-13</td>
      <td width="35">14</td>
      <td width="79">0-7</td>
      <td width="71">08-10</td>
      <td width="71">11-12</td>
      <td width="50">13</td>
      <td width="64">0-7</td>
      <td width="66">08-09</td>
      <td width="71">10-12</td>
      <td width="50">13</td>
      <td width="64">0-7</td>
      <td width="66">08-09</td>
      <td width="71">10-12</td>
      <td width="50">13</td>
      <td width="64">0-31</td>
      <td width="66">32-39</td>
      <td width="71">40-48</td>
      <td width="65">49</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">10 – 12</td>
      <td width="64">0-11</td>
      <td width="66">12-13</td>
      <td width="71">14-16</td>
      <td width="35">17</td>
      <td width="79">0-9</td>
      <td width="71">10-12</td>
      <td width="71">13-14</td>
      <td width="50">15</td>
      <td width="64">0-9</td>
      <td width="66">10-12</td>
      <td width="71">13-14</td>
      <td width="50">15</td>
      <td width="64">0-9</td>
      <td width="66">10-12</td>
      <td width="71">13-14</td>
      <td width="50">15</td>
      <td width="64">0-42</td>
      <td width="66">43-49</td>
      <td width="71">50-56</td>
      <td width="65">57</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">13 – 18</td>
      <td width="64">0-13</td>
      <td width="66">14-16</td>
      <td width="71">17-19</td>
      <td width="35">20</td>
      <td width="79">0-12</td>
      <td width="71">13-15</td>
      <td width="71">16-18</td>
      <td width="50">19</td>
      <td width="64">0-12</td>
      <td width="66">13-14</td>
      <td width="71">15-17</td>
      <td width="50">18</td>
      <td width="64">0-12</td>
      <td width="66">13-14</td>
      <td width="71">15-17</td>
      <td width="50">18</td>
      <td width="64">0-51</td>
      <td width="66">52-60</td>
      <td width="71">61-69</td>
      <td width="65">70</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">19 – 24</td>
      <td width="64">0-16</td>
      <td width="66">17-19</td>
      <td width="71">20-23</td>
      <td width="35">24</td>
      <td width="79">0-14</td>
      <td width="71">15-18</td>
      <td width="71">19-20</td>
      <td width="50">21</td>
      <td width="64">0-13</td>
      <td width="66">14-17</td>
      <td width="71">18-20</td>
      <td width="50">21</td>
      <td width="64">0-14</td>
      <td width="66">15-17</td>
      <td width="71">18-22</td>
      <td width="50">23</td>
      <td width="64">0-61</td>
      <td width="66">62-71</td>
      <td width="71">72-83</td>
      <td width="65">84</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">25 – 36</td>
      <td width="64">0-19</td>
      <td width="66">20-23</td>
      <td width="71">24-27</td>
      <td width="35">28</td>
      <td width="79">0-18</td>
      <td width="71">19-21</td>
      <td width="71">22-24</td>
      <td width="50">25</td>
      <td width="64">0-17</td>
      <td width="66">18-21</td>
      <td width="71">22-24</td>
      <td width="50">25</td>
      <td width="64">0-18</td>
      <td width="66">19-22</td>
      <td width="71">23-27</td>
      <td width="50">28</td>
      <td width="64">0-74</td>
      <td width="66">75-86</td>
      <td width="71">87-100</td>
      <td width="65">101</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">37 – 48</td>
      <td width="64">0-22</td>
      <td width="66">23-26</td>
      <td width="71">27-29</td>
      <td width="35">30</td>
      <td width="79">0-21</td>
      <td width="71">22-24</td>
      <td width="71">25-28</td>
      <td width="50">29</td>
      <td width="64">0-21</td>
      <td width="66">22-25</td>
      <td width="71">26-29</td>
      <td width="50">30</td>
      <td width="64">0-22</td>
      <td width="66">23-26</td>
      <td width="71">27-29</td>
      <td width="50">30</td>
      <td width="64">0-89</td>
      <td width="66">90-100</td>
      <td width="71">101-114</td>
      <td width="65">115</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">49 – 60</td>
      <td width="64">0-26</td>
      <td width="66">27-29</td>
      <td width="71">30</td>
      <td width="35">30</td>
      <td width="79">0-23</td>
      <td width="71">24-28</td>
      <td width="71">29</td>
      <td width="50">30</td>
      <td width="64">0-24</td>
      <td width="66">25-28</td>
      <td width="71">29</td>
      <td width="50">30</td>
      <td width="64">0-25</td>
      <td width="66">26-28</td>
      <td width="71">29</td>
      <td width="50">30</td>
      <td width="64">0-101</td>
      <td width="66">102-113</td>
      <td width="71">114</td>
      <td width="65">115</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">61 – 72</td>
      <td width="64">0-22</td>
      <td width="66">23-28</td>
      <td width="71">29-35</td>
      <td width="35">36</td>
      <td width="79">0-27</td>
      <td width="71">28-32</td>
      <td width="71">33-35</td>
      <td width="50">36</td>
      <td width="64">0-23</td>
      <td width="66">24-30</td>
      <td width="71">31-33</td>
      <td width="50">34</td>
      <td width="64">0-26</td>
      <td width="66">27-31</td>
      <td width="71">32-35</td>
      <td width="50">36</td>
      <td width="64">0-101</td>
      <td width="66">102-122</td>
      <td width="71">123-137</td>
      <td width="65">138</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">73 – 84</td>
      <td width="64">0-25</td>
      <td width="66">26-32</td>
      <td width="71">33-35</td>
      <td width="35">36</td>
      <td width="79">0-30</td>
      <td width="71">31-33</td>
      <td width="71">34-35</td>
      <td width="50">36</td>
      <td width="64">0-27</td>
      <td width="66">28-32</td>
      <td width="71">33-35</td>
      <td width="50">36</td>
      <td width="64">0-28</td>
      <td width="66">29-33</td>
      <td width="71">34-35</td>
      <td width="50">36</td>
      <td width="64">0-116</td>
      <td width="66">117-132</td>
      <td width="71">133-141</td>
      <td width="65">142</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">85 – 96</td>
      <td width="64">0-28</td>
      <td width="66">29-35</td>
      <td width="71">36-38</td>
      <td width="35">39</td>
      <td width="79">0-28</td>
      <td width="71">29-35</td>
      <td width="71">36-38</td>
      <td width="50">39</td>
      <td width="64">0-28</td>
      <td width="66">29-35</td>
      <td width="71">36-38</td>
      <td width="50">39</td>
      <td width="64">0-28</td>
      <td width="66">29-35</td>
      <td width="71">36-38</td>
      <td width="50">39</td>
      <td width="64">0-115</td>
      <td width="66">116-128</td>
      <td width="71">129-155</td>
      <td width="65">156</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">108</td>
      <td width="64">0-30</td>
      <td width="66">31-38</td>
      <td width="71">39-41</td>
      <td width="35">42</td>
      <td width="79">0-30</td>
      <td width="71">31-35</td>
      <td width="71">36-41</td>
      <td width="50">42</td>
      <td width="64">0-30</td>
      <td width="66">31-35</td>
      <td width="71">36-41</td>
      <td width="50">42</td>
      <td width="64">0-30</td>
      <td width="66">31-35</td>
      <td width="71">36-41</td>
      <td width="50">42</td>
      <td width="64">0-123</td>
      <td width="66">124-143</td>
      <td width="71">144-167</td>
      <td width="65">168</td>
    </tr>
    <tr height="20">
      <td height="20" width="51">120</td>
      <td width="64">0-30</td>
      <td width="66">31-40</td>
      <td width="71">41-44</td>
      <td width="35">45</td>
      <td width="79">0-30</td>
      <td width="71">35-40</td>
      <td width="71">41-44</td>
      <td width="50">45</td>
      <td width="64">0-30</td>
      <td width="66">31-40</td>
      <td width="71">41-44</td>
      <td width="50">45</td>
      <td width="64">0-30</td>
      <td width="66">35-40</td>
      <td width="71">41-44</td>
      <td width="50">45</td>
      <td width="64">0-129</td>
      <td width="66">130-163</td>
      <td width="71">164-179</td>
      <td width="65">180</td>
    </tr>
  </table>



<?php echo @$button ?>
</form><br>
</div>
</fieldset>