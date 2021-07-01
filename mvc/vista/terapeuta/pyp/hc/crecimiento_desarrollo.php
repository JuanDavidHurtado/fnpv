<?php

if (isset($_REQUEST['guardar_hc_crecimiento_desarrollo']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['idhc_crecimiento_desarrollo'] == 'new') {

        $sql = "INSERT INTO hc_crecimiento_desarrollo (
`idhc_crecimiento_desarrollo`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`fecha`,
`sv_res_1`,
`sv_res_2`,
`sv_res_3`,
`sv_res_4`,
`sv_card_1`,
`sv_card_2`,
`sv_card_3`,
`sv_card_4`,
`sv_temp_1`,
`sv_temp_2`,
`sv_temp_3`,
`sv_temp_4`,
`med_pes_1`,
`med_pes_2`,
`med_pes_3`,
`med_pes_4`,
`med_tal_1`,
`med_tal_2`,
`med_tal_3`,
`med_tal_4`,
`med_cefa_1`,
`med_cefa_2`,
`med_cefa_3`,
`med_cefa_4`,
`recome_s_1`,
`recome_s_2`,
`recome_s_3`,
`recome_s_4`,
`recome_n_1`,
`recome_n_2`,
`recome_n_3`,
`recome_n_4`,
`nut_nor_1`,
`nut_nor_2`,
`nut_nor_3`,
`nut_nor_4`,
`nut_ries_1`,
`nut_ries_2`,
`nut_ries_3`,
`nut_ries_4`,
`nut_agu_1`,
`nut_agu_2`,
`nut_agu_3`,
`nut_agu_4`

) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['fecha'] . "' ,
'" . $_REQUEST['sv_res_1'] . "' ,
'" . $_REQUEST['sv_res_2'] . "' ,
'" . $_REQUEST['sv_res_3'] . "' ,
'" . $_REQUEST['sv_res_4'] . "' ,
'" . $_REQUEST['sv_card_1'] . "' ,
'" . $_REQUEST['sv_card_2'] . "' ,
'" . $_REQUEST['sv_card_3'] . "' ,
'" . $_REQUEST['sv_card_4'] . "' ,
'" . $_REQUEST['sv_temp_1'] . "' ,
'" . $_REQUEST['sv_temp_2'] . "' ,
'" . $_REQUEST['sv_temp_3'] . "' ,
'" . $_REQUEST['sv_temp_4'] . "' ,
'" . $_REQUEST['med_pes_1'] . "' ,
'" . $_REQUEST['med_pes_2'] . "' ,
'" . $_REQUEST['med_pes_3'] . "' ,
'" . $_REQUEST['med_pes_4'] . "' ,
'" . $_REQUEST['med_tal_1'] . "' ,
'" . $_REQUEST['med_tal_2'] . "' ,
'" . $_REQUEST['med_tal_3'] . "' ,
'" . $_REQUEST['med_tal_4'] . "' ,
'" . $_REQUEST['med_cefa_1'] . "' ,
'" . $_REQUEST['med_cefa_2'] . "' ,
'" . $_REQUEST['med_cefa_3'] . "' ,
'" . $_REQUEST['med_cefa_4'] . "' ,
'" . $_REQUEST['recome_s_1'] . "' ,
'" . $_REQUEST['recome_s_2'] . "' ,
'" . $_REQUEST['recome_s_3'] . "' ,
'" . $_REQUEST['recome_s_4'] . "' ,
'" . $_REQUEST['recome_n_1'] . "' ,
'" . $_REQUEST['recome_n_2'] . "' ,
'" . $_REQUEST['recome_n_3'] . "' ,
'" . $_REQUEST['recome_n_4'] . "' ,
'" . $_REQUEST['nut_nor_1'] . "' ,
'" . $_REQUEST['nut_nor_2'] . "' ,
'" . $_REQUEST['nut_nor_3'] . "' ,
'" . $_REQUEST['nut_nor_4'] . "' ,
'" . $_REQUEST['nut_ries_1'] . "' ,
'" . $_REQUEST['nut_ries_2'] . "' ,
'" . $_REQUEST['nut_ries_3'] . "' ,
'" . $_REQUEST['nut_ries_4'] . "' ,
'" . $_REQUEST['nut_agu_1'] . "' ,
'" . $_REQUEST['nut_agu_2'] . "' ,
'" . $_REQUEST['nut_agu_3'] . "' ,
'" . $_REQUEST['nut_agu_4'] . "'


) ";

    } else if ($_REQUEST['idhc_crecimiento_desarrollo'] != '') {

        $sql = "UPDATE hc_crecimiento_desarrollo set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`fecha` = '" . $_REQUEST['fecha'] . "' ,
`sv_res_1` = '" . $_REQUEST['sv_res_1'] . "' ,
`sv_res_2` = '" . $_REQUEST['sv_res_2'] . "' ,
`sv_res_3` = '" . $_REQUEST['sv_res_3'] . "' ,
`sv_res_4` = '" . $_REQUEST['sv_res_4'] . "' ,
`sv_card_1` = '" . $_REQUEST['sv_card_1'] . "' ,
`sv_card_2` = '" . $_REQUEST['sv_card_2'] . "' ,
`sv_card_3` = '" . $_REQUEST['sv_card_3'] . "' ,
`sv_card_4` = '" . $_REQUEST['sv_card_4'] . "' ,
`sv_temp_1` = '" . $_REQUEST['sv_temp_1'] . "' ,
`sv_temp_2` = '" . $_REQUEST['sv_temp_2'] . "' ,
`sv_temp_3` = '" . $_REQUEST['sv_temp_3'] . "' ,
`sv_temp_4` = '" . $_REQUEST['sv_temp_4'] . "' ,
`med_pes_1` = '" . $_REQUEST['med_pes_1'] . "' ,
`med_pes_2` = '" . $_REQUEST['med_pes_2'] . "' ,
`med_pes_3` = '" . $_REQUEST['med_pes_3'] . "' ,
`med_pes_4` = '" . $_REQUEST['med_pes_4'] . "' ,
`med_tal_1` = '" . $_REQUEST['med_tal_1'] . "' ,
`med_tal_2` = '" . $_REQUEST['med_tal_2'] . "' ,
`med_tal_3` = '" . $_REQUEST['med_tal_3'] . "' ,
`med_tal_4` = '" . $_REQUEST['med_tal_4'] . "' ,
`med_cefa_1` = '" . $_REQUEST['med_cefa_1'] . "' ,
`med_cefa_2` = '" . $_REQUEST['med_cefa_2'] . "' ,
`med_cefa_3` = '" . $_REQUEST['med_cefa_3'] . "' ,
`med_cefa_4` = '" . $_REQUEST['med_cefa_4'] . "' ,
`recome_s_1` = '" . $_REQUEST['recome_s_1'] . "' ,
`recome_s_2` = '" . $_REQUEST['recome_s_2'] . "' ,
`recome_s_3` = '" . $_REQUEST['recome_s_3'] . "' ,
`recome_s_4` = '" . $_REQUEST['recome_s_4'] . "' ,
`recome_n_1` = '" . $_REQUEST['recome_n_1'] . "' ,
`recome_n_2` = '" . $_REQUEST['recome_n_2'] . "' ,
`recome_n_3` = '" . $_REQUEST['recome_n_3'] . "' ,
`recome_n_4` = '" . $_REQUEST['recome_n_4'] . "' ,
`nut_nor_1` = '" . $_REQUEST['nut_nor_1'] . "' ,
`nut_nor_2` = '" . $_REQUEST['nut_nor_2'] . "' ,
`nut_nor_3` = '" . $_REQUEST['nut_nor_3'] . "' ,
`nut_nor_4` = '" . $_REQUEST['nut_nor_4'] . "' ,
`nut_ries_1` = '" . $_REQUEST['nut_ries_1'] . "' ,
`nut_ries_2` = '" . $_REQUEST['nut_ries_2'] . "' ,
`nut_ries_3` = '" . $_REQUEST['nut_ries_3'] . "' ,
`nut_ries_4` = '" . $_REQUEST['nut_ries_4'] . "' ,
`nut_agu_1` = '" . $_REQUEST['nut_agu_1'] . "' ,
`nut_agu_2` = '" . $_REQUEST['nut_agu_2'] . "' ,
`nut_agu_3` = '" . $_REQUEST['nut_agu_3'] . "' ,
`nut_agu_4` = '" . $_REQUEST['nut_agu_4'] . "'  WHERE `idhc_crecimiento_desarrollo` = '" . $_REQUEST['idhc_crecimiento_desarrollo'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}

$idhc_crecimiento_desarrollo = 'new';
$sql                         = "SELECT * from hc_crecimiento_desarrollo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result                      = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $idhc_crecimiento_desarrollo = $row['idhc_crecimiento_desarrollo'];
    $id_usuario                  = $row['id_usuario'];
    $id_historia                 = $row['id_historia'];
    $id_proceso                  = $row['id_proceso'];
    $id_vinicial                 = $row['id_vinicial'];
    $id_revaloracion             = $row['id_revaloracion'];
    $fecha                       = $row['fecha'];
    $sv_res_1                    = $row['sv_res_1'];
    if ($sv_res_1 == "") {$sv_res_1 = "NO REFIERE";}
    $sv_res_2 = $row['sv_res_2'];
    if ($sv_res_2 == "") {$sv_res_2 = "NO REFIERE";}
    $sv_res_3 = $row['sv_res_3'];
    if ($sv_res_3 == "") {$sv_res_3 = "NO REFIERE";}
    $sv_res_4 = $row['sv_res_4'];
    if ($sv_res_4 == "") {$sv_res_4 = "NO REFIERE";}
    $sv_card_1 = $row['sv_card_1'];
    if ($sv_card_1 == "") {$sv_card_1 = "NO REFIERE";}
    $sv_card_2 = $row['sv_card_2'];
    if ($sv_card_2 == "") {$sv_card_2 = "NO REFIERE";}
    $sv_card_3 = $row['sv_card_3'];
    if ($sv_card_3 == "") {$sv_card_3 = "NO REFIERE";}
    $sv_card_4 = $row['sv_card_4'];
    if ($sv_card_4 == "") {$sv_card_4 = "NO REFIERE";}
    $sv_temp_1  = $row['sv_temp_1'];
    $sv_temp_2  = $row['sv_temp_2'];
    $sv_temp_3  = $row['sv_temp_3'];
    $sv_temp_4  = $row['sv_temp_4'];
    $med_pes_1  = $row['med_pes_1'];
    $med_pes_2  = $row['med_pes_2'];
    $med_pes_3  = $row['med_pes_3'];
    $med_pes_4  = $row['med_pes_4'];
    $med_tal_1  = $row['med_tal_1'];
    $med_tal_2  = $row['med_tal_2'];
    $med_tal_3  = $row['med_tal_3'];
    $med_tal_4  = $row['med_tal_4'];
    $med_cefa_1 = $row['med_cefa_1'];
    $med_cefa_2 = $row['med_cefa_2'];
    $med_cefa_3 = $row['med_cefa_3'];
    $med_cefa_4 = $row['med_cefa_4'];
    $recome_s_1 = $row['recome_s_1'];
    $recome_s_2 = $row['recome_s_2'];
    $recome_s_3 = $row['recome_s_3'];
    $recome_s_4 = $row['recome_s_4'];
    $recome_n_1 = $row['recome_n_1'];
    $recome_n_2 = $row['recome_n_2'];
    $recome_n_3 = $row['recome_n_3'];
    $recome_n_4 = $row['recome_n_4'];
    $nut_nor_1  = $row['nut_nor_1'];
    $nut_nor_2  = $row['nut_nor_2'];
    $nut_nor_3  = $row['nut_nor_3'];
    $nut_nor_4  = $row['nut_nor_4'];
    $nut_ries_1 = $row['nut_ries_1'];
    $nut_ries_2 = $row['nut_ries_2'];
    $nut_ries_3 = $row['nut_ries_3'];
    $nut_ries_4 = $row['nut_ries_4'];
    $nut_agu_1  = $row['nut_agu_1'];
    $nut_agu_2  = $row['nut_agu_2'];
    $nut_agu_3  = $row['nut_agu_3'];
    $nut_agu_4  = $row['nut_agu_4'];

    break;}
$idhc_crecimiento_desarrollo = 'new';
$sql1                        = "SELECT * FROM hc_crecimiento_desarrollo ORDER by idhc_crecimiento_desarrollo DESC LIMIT 1";
//echo $sql1;exit;
$result1 = $conexion->EjecutarQuery($sql1);
while ($row1 = mysql_fetch_array($result1)) {
    $sv_res_1 = $row['sv_res_1'];
    if ($sv_res_1 == "") {$sv_res_1 = "NO REFIERE";}
    $sv_res_2 = $row['sv_res_2'];
    if ($sv_res_2 == "") {$sv_res_2 = "NO REFIERE";}
    $sv_res_3 = $row['sv_res_3'];
    if ($sv_res_3 == "") {$sv_res_3 = "NO REFIERE";}
    $sv_res_4 = $row['sv_res_4'];
    if ($sv_res_4 == "") {$sv_res_4 = "NO REFIERE";}
    $sv_card_1 = $row['sv_card_1'];
    if ($sv_card_1 == "") {$sv_card_1 = "NO REFIERE";}
    $sv_card_2 = $row['sv_card_2'];
    if ($sv_card_2 == "") {$sv_card_2 = "NO REFIERE";}
    $sv_card_3 = $row['sv_card_3'];
    if ($sv_card_3 == "") {$sv_card_3 = "NO REFIERE";}
    $sv_card_4 = $row['sv_card_4'];
    if ($sv_card_4 == "") {$sv_card_4 = "NO REFIERE";}
    $med_pes_1 = $row1['med_pes_1'];
    $med_pes_2 = $row1['med_pes_2'];
    $med_pes_3 = $row1['med_pes_3'];
    $med_pes_4 = $row1['med_pes_4'];
    $med_tal_1 = $row1['med_tal_1'];
    $med_tal_2 = $row1['med_tal_2'];
    break;
}

// Consulta para traer datos del ultimo id

?>
<script>

$(function(){

$("#close-hc_crecimiento_desarrollo").click(function(){
$("#open-hc_crecimiento_desarrollo").show();
$(this).hide();
$("#content-hc_crecimiento_desarrollo").hide('slow');
});

$("#open-hc_crecimiento_desarrollo").click(function(){
$("#close-hc_crecimiento_desarrollo").show();
$(this).hide();
$("#content-hc_crecimiento_desarrollo").show('slow');
});

});


</script>

<style>
.input_txt3_x {
    border: 1px solid #848484;
    padding: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #0B2F3A;
    max-width: 158px;
    min-width: 300px;
    text-transform: uppercase;
    size:50px;

}

.input_txt3_x1 {    border: 1px solid #848484;
    padding: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #0B2F3A;
    max-width: 100px;
    min-width: 100;
    text-transform: uppercase;
    size:50px;
}
</style>
<script>
   // function calcular_img_3(){


 //   var valor_b1 = document.getElementById('nut_ries_2').value;
 //   var valor_a1 = document.getElementById('nut_ries_3').value;

 //   var resultado= parseInt(valor_b1)/(parseInt(valor_a1)*parseInt(valor_a1));

//alert(resultado);

//var numero = resultado;
//var resDecimal = numero.toFixed(4);

//    document.getElementById('nut_agu_2').value=resDecimal;
//}


 //document.getElementById('embarazo_31').value=<?php echo @$embarazo_31 ?>


     function calcular_img_3()
{
  var altura=document.getElementById("nut_ries_3").value; // TALLA
  altura=altura.toString().replace(',','.');
  var alturaMetro=altura/100;
  var peso=document.getElementById("nut_ries_2").value; // PESO



        /*CALCULO IMC*/
        var alturaCuadrado=alturaMetro*alturaMetro;
        var imc=peso/alturaCuadrado;
        document.getElementById("nut_agu_2").value=Math.round(imc*100)/100; // IMC

}

</script>
    <script type="text/javascript">

        function imprSelec34(nombre)
        {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'ventana1', 'popimpr');

            var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
            content += '<title>http://190.146.87.72/fvnpv </title>';
            content += ficha.innerHTML;

            ventimp.document.write(content);
            ventimp.document.close();
            ventimp.print( );
           // history.back();
        }
</script>


<fieldset id="hc_crecimiento_desarrollo">
<legend align="left"> <div class="arrow-c" id="close-hc_crecimiento_desarrollo"></div> <div class="arrow-o" id="open-hc_crecimiento_desarrollo" ></div>
<font>Crecimiento y Desarrollo</font></legend>
<div id="content-hc_crecimiento_desarrollo">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_crecimiento_desarrollo" id="guardar_hc_crecimiento_desarrollo" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_crecimiento_desarrollo" name="form_hc_crecimiento_desarrollo" action="<?php echo @$action_form_hc_crecimiento_desarrollo ?>#hc_crecimiento_desarrollo" method="post"
    onsubmit="return validar()";>

<input type="hidden" id="id_hc_crecimiento_desarrollo" name="id_hc_crecimiento_desarrollo" value="<?php echo @$id_hc_crecimiento_desarrollo ?>" />

<table  border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="">

</tr>
<tr class="">

</tr>
</table>

<input type="hidden" size="3" id="idhc_crecimiento_desarrollo" name="idhc_crecimiento_desarrollo" value="<?php echo @$idhc_crecimiento_desarrollo; ?>" />


<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
  <tr>
    <td colspan="4" ><p align="center">PRIMERA INFANCIA</td>
  </tr>
  <p>
   <tr>
    <td colspan="4" height="19"><div align="center">
        ANTECEDENTES    PERSONALES<BR><BR>
    </div></td>
    </tr>
 </tr>






  <tr height="19">
    <td height="19">Médicos</td>
    <td width="168">
        <input type="text" class="input_txt valid" id="sv_res_1" name="sv_res_1" value="<?php echo $sv_res_1; ?>" /> </td>
    <td width="183">Hospitalarios</td>
    <td width="216"><input type="text" class="input_txt valid" id="sv_res_2" name="sv_res_2"  value="<?php echo @$sv_res_2; ?>"/></td>
</tr>
<tr height="19">
    <td heigth="19">Transfunsionales</td>
    <td width="168"><input type="text" class="input_txt valid" id="sv_res_3" name="sv_res_3"  value="<?php echo $sv_res_3; ?>" /> </td>
    <td width="183">Farmacologícos</td>
    <td width="216"><input type="text" class="input_txt valid" id="sv_res_4" name="sv_res_4"  value="<?php echo @$sv_res_4; ?>" /> </td>
</tr>
<tr height="19">
    <td height="19">Exposición al humo o tabaco</td>
    <td width="168"><input type="text" class="input_txt valid" id="sv_card_1" name="sv_card_1"  value="<?php echo @$sv_card_1; ?>" />
    <td width="183">Quirurgicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="sv_card_2" name="sv_card_2"   value="<?php echo @$sv_card_2; ?>" />
</tr>
<tr height="19">
    <td height="19">Alergícos</td>
    <td width="168"><input type="text" class="input_txt valid" id="sv_card_3"  name="sv_card_3" value="<?php echo @$sv_card_3; ?>" />
    <td width="183">Vacunación</td>
    <td width="205"><input type="text" class="input_txt valid" id="sv_card_4" name="sv_card_4" value="<?php echo @$sv_card_4; ?>" />
    </td>
</tr>
</table>

<p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
        RESULTADOS DE TAMIZAJE NEOTANATAL<BR><BR>
    </div></td>
    </tr>
 </tr>
  <tr height="19">
    <td height="19">Audítiva</td>
    <td width="168"><input type="text" class="input_txt valid" id="sv_temp_1" name="sv_temp_1" value="<?php echo $sv_temp_1; ?>" //> </td>
    <td width="183">Metábolismo</td>
    <td width="216"><input type="text" class="input_txt valid" id="sv_temp_2" name="sv_temp_2"  value="<?php echo @$sv_temp_2; ?>"//></td>
</tr>
<tr height="19">
    <td heigth="19">Cardio Patia Congeníta</td>
    <td width="168"><input type="text" class="input_txt valid" id="sv_temp_3" name="sv_temp_3"  value="<?php echo $sv_temp_3; ?>" //> </td>
</tr>
</table>
<p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
        PROGRESO EN EL DESARROLLO DEL NIÑO<BR><BR>
    </div></td>
    </tr>

<tr height="19">
    <td width="250"><textarea align="center" id="sv_temp_4" name="sv_temp_4"  cols="60" rows="1"/> <?php echo @$sv_temp_4; ?></textarea> </td>
  </tr>
</table>
<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
        ANTECEDENTES FAMILIARES<BR><BR>
    </div></td>
    </tr>
<tr>
    <td width="260" >Asma</td>
    <td width="168">
        No<input type="radio" name="med_pes_1" id="med_pes_1" value="0" required <?php if ($med_pes_1 == 0) {echo 'checked="checked"';}?><?php if ($med_pes_1 == 0) {$med_pes_1 = "NO";}?>>
        Si<input type="radio" name="med_pes_1" id="med_pes_1" value="1"  <?php if ($med_pes_1 == 1) {echo 'checked="checked"';}?><?php if ($med_pes_1 == 1) {$med_pes_1 = "SI";}?>></td>

  </tr>
  <tr>
    <td width="260" >Tubercolosis</td>
    <td width="168">
        No<input type="radio" name="med_pes_2" id="med_pes_2" value="0" required  <?php if ($med_pes_2 == 0) {echo 'checked="checked"';}?><?php if ($med_pes_2 == 0) {$med_pes_2 = "NO";}?>>
        Si<input type="radio" name="med_pes_2" id="med_pes_2" value="1"  <?php if ($med_pes_2 == 1) {echo 'checked="checked"';}?><?php if ($med_pes_2 == 1) {$med_pes_2 = "SI";}?>></td>
      </tr>
  <tr>
    <td width="260" >Problema de desarrollo infantil</td>
        <td width="168">
            No<input type="radio" name="med_pes_3" id="med_pes_3" value="0" required <?php if ($med_pes_3 == 0) {echo 'checked="checked"';}?><?php if ($med_pes_3 == 0) {$med_pes_3 = "NO";}?>>
            Si<input type="radio" name="med_pes_3" id="med_pes_3" value="1" <?php if ($med_pes_3 == 1) {echo 'checked="checked"';}?><?php if ($med_pes_3 == 1) {$med_pes_3 = "SI";}?>></td>
  </tr>
  <tr>
    <td width="260" >Antecedente en muerte de hermano</td>
          <td width="168">
            No<input type="radio" name="med_pes_4" id="med_pes_4" value="0" required <?php if ($med_pes_4 == 0) {echo 'checked="checked"';}?><?php if ($med_pes_4 == 0) {$med_pes_4 = "NO";}?>>
             Si<input type="radio" name="med_pes_4" id="med_pes_4" value="1" <?php if ($med_pes_4 == 1) {echo 'checked="checked"';}?><?php if ($med_pes_4 == 1) {$med_pes_4 = "SI";}?>></td>
  </tr>
  <tr>
    <td width="260" >Antecedente de salud mental de los padres</td>
         <td width="168">
            No<input type="radio" name="med_tal_1" id="med_tal_1" value="0" required <?php if ($med_tal_1 == 0) {echo 'checked="checked"';}?><?php if ($med_tal_1 == 0) {$med_tal_1 = "NO";}?>>
             Si<input type="radio" name="med_tal_1" id="med_tal_1" value="1" <?php if ($med_tal_1 == 1) {echo 'checked="checked"';}?><?php if ($med_tal_1 == 1) {$med_tal_1 = "SI";}?>></td>

  </tr>
  <tr>
    <td width="260" >Exposición a vilencia</td>
     <td width="168">
        No<input type="radio" name="med_tal_2" id="med_tal_2" value="0" required <?php if ($med_tal_2 == 0) {echo 'checked="checked"';}?><?php if ($med_tal_2 == 0) {$med_tal_2 = "NO";}?>>
         Si<input type="radio" name="med_tal_2" id="med_tal_2" value="1" <?php if ($med_tal_2 == 1) {echo 'checked="checked"';}?><?php if ($med_tal_2 == 1) {$med_tal_2 = "SI";}?>></td>

  </tr>
 </table>
<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">ALIMEMENTACION EN MENORES DE 6 MESES<BR><BR></div></td>
   </tr>
<tr>
    <td width="260" >¿El niño recibe lactancia materna?</td>
         <td width="168">
            No<input type="radio" name="med_tal_3" id="med_tal_3" value="0"  <?php if ($med_tal_3 == 0) {echo 'checked="checked"';}?><?php if ($med_tal_3 == 0) {$med_tal_3 = "NO";}?>>
             Si<input type="radio" name="med_tal_3" id="med_tal_3" value="1" <?php if ($med_tal_3 == 1) {echo 'checked="checked"';}?><?php if ($med_tal_3 == 1) {$med_tal_3 = "SI";}?>></td>
 </tr>
  </table>
  <p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr height="19">
    <td colspan="4" height="19"><div align="center">
        ALIMEMENTACION EN MAYORES A 6 MESES<BR><BR>
    </div></td>
    </tr>
  <tr height="19">
    <td height="19">¿Tipo de alimentos que consume el niño?</td>
    <td width="168"><input type="text" class="" id="med_tal_4"  name="med_tal_4" size="23" value="<?php echo @$med_tal_4; ?>" / />
    </td>
</tr>
     <tr height="19">
    <td height="19">¿Frecuencia de aliemntación en el día?</td>
    <td width="168"><input type="text" class="" id="med_cefa_1"  name="med_cefa_1" size="23" value="<?php echo @$med_cefa_1; ?>"//>
    </td>
</tr>
<tr height="19">
    <td height="19">¿Cantidad de alimentos?</td>
    <td width="168"><input type="text" class="" id="med_cefa_2"  name="med_cefa_2" size="23" value="<?php echo @$med_cefa_2; ?>" //>
    </td>
</tr>

   <tr height="19">
    <td height="19">¿Forma de preparación  de alimentos que consume el niño?</td>
    <td width="168"><input type="text" class="" id="med_cefa_3"  name="med_cefa_3" size="23" value="<?php echo @$med_cefa_3; ?>"//>
    </td>
</tr>
  <tr height="19">
    <td height="19">¿Otros?</td>
    <td width="168"><input type="text" class="" id="med_cefa_4"  name="med_cefa_4" size="23" value="<?php echo @$med_cefa_4; ?>" //>
    </td>
</tr>
</table>
<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr height="19">
    <td colspan="4" height="19"><div align="center">RUTINA Y HABITOS SALUDABLES<BR><BR>
    </div></td>
    </tr>
 <tr height="19">
    <td height="19">¿Rutina de sueño?</td>
    <td width="168"><input type="text" class="" id="recome_s_1"  name="recome_s_1" size="23" value="<?php echo @$recome_s_1; ?>""//>
    </td>
</tr>
 <tr height="19">
    <td height="19">¿Cambio de pañal?</td>
    <td width="168"><input type="text" class="" id="recome_s_2"  name="recome_s_2" size="23" value="<?php echo @$recome_s_2; ?>"//>
    </td>
</tr>
 <tr height="19">
    <td height="19">¿Cuidado bucal?</td>
    <td width="168"><input type="text" class="" id="recome_s_3"  name="recome_s_3" size="23" value="<?php echo @$recome_s_3; ?>"//>
    </td>
</tr>
 <tr height="19">
    <td height="19">¿Juego o movimiento activo?</td>
    <td width="168"><input type="text" class="" id="recome_s_4"  name="recome_s_4" size="23" value="<?php echo @$recome_s_4; ?>" //>
    </td>
</tr>
</table>
<p>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
    <tr height="19">
    <td colspan="4" height="19"><div align="center">
        PRACTICAS DE CRIANZA Y CUIDADO<BR><BR>
    </div></td>
    </tr>
 <tr height="19">
    <td height="19">¿Formas de comunicación con el niño?</td>
    <td width="168"><input type="text" class="" id="recome_n_1"  name="recome_n_1" size="23" value="<?php echo @$recome_n_1; ?>"//>
    </td>
</tr>
<tr height="19">
    <td height="19">¿Actividades para estimular el desarrollo?</td>
    <td width="168"><input type="text" class="" id="recome_n_2"  name="recome_n_2" size="23" value="<?php echo @$recome_n_2; ?>"//>
    </td>
</tr>
<tr height="19">
    <td height="19">¿Como se relaciona le niño con su familia y otras personas?</td>
    <td width="168"><input type="text" class="" id="recome_n_3"  name="recome_n_3" size="23" value="<?php echo @$recome_n_3; ?>"//>
    </td>
</tr>
<tr height="19">
    <td height="19">¿Practicas sobre el establecimiento de limites y disciplinas?</td>
    <td width="168"><input type="text" class="" id="recome_n_4"  name="recome_n_4" size="23" value="<?php echo @$recome_n_4; ?>"//>
    </td>
</tr>
<tr height="19">
    <td height="19">¿Presencia de violencia en el hogar?</td>
    <td width="168"><input type="text" class="" id="nut_nor_1"  name="nut_nor_1" size="23" value="<?php echo @$nut_nor_1; ?>"//>
    </td>
</tr>
</table>
<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr height="">
   <td colspan="7" height=""><div align="center">EXAMEN FISICO</div><BR></td>
  </tr>
  <tr height="">
    <td height="" width="">T A
      <input name="nut_nor_2" type="text" class="" id="nut_nor_2" value="<?php echo @$nut_nor_2; ?>" size="5"//>
      mmHg</td>
    <td colspan="2">&nbsp || F R
      <input name="nut_nor_3" type="text" class="" id="nut_nor_3" value="<?php echo @$nut_nor_3; ?>" size="5"//>
      min</td>
    <td width=""> &nbsp || F C
      <input name="nut_nor_4" type="text" class="" id="nut_nor_4" value="<?php echo @$nut_nor_4; ?>" size="5"//>
      min</td>
    <td width=""> &nbsp || T°
        <input name="nut_ries_1" type="text" class="" id="nut_ries_1"   value="<?php echo @$nut_ries_1; ?>" size="5" //>
      °C</td>
    <td width=""> &nbsp || Peso
        <input name="nut_ries_2" type="text" class="" id="nut_ries_2" onchange="calcular_img_3()" onkeypress="return isNumberKey(event)" value="<?php echo @$nut_ries_2; ?>" size="5" />
      Kg</td>
    <td width=""> &nbsp || Talla
      <input name="nut_ries_3" type="text" class="" id="nut_ries_3" onchange="calcular_img_3()" onkeypress="return isNumberKey(event)" value="<?php echo @$nut_ries_3; ?>" size="5" />
      cm</td>
  </tr>
  <tr height="">
    <td height="" colspan="7"><BR>Apariencia
      <input name="nut_ries_4" type="text" class="" id="nut_ries_4" value="<?php echo @$nut_ries_4; ?>" size="38" //>

|| SPO2<input type="text" class="" id="nut_agu_1" name="nut_agu_1" value="<?php echo @$nut_agu_1; ?>"//>
|| IMC
<input name="nut_agu_2" type="text" class="" id="nut_agu_2" readonly="readonly" value="<?php echo @$nut_agu_2; ?>" size="7" /></td>
    </tr>
      <tr height="">
    <td height="" colspan="7"><BR>Altura Uterina
      <input name="nut_agu_3" type="text" class="" id="nut_agu_3" value="<?php echo @$nut_agu_3; ?>" size="36"//>

|| Estado Nutricional<input type="text" class="" id="nut_agu_4" name="nut_agu_4" value="<?php echo @$nut_agu_4; ?>"//>
    </tr>
 </table>
<p>

<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr height="">
    <td colspan="7" height=""><div align="center">ESCALA EAD</div><BR></td>
  </tr>

</table>
<?php echo @$button ?>
</form><br>

<div id="imprimir_formularios_oculto" style="display: none">

    <?php

$tamfont = 10;
?>
<?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/datos_p.php';

?>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

       <?php
$sql2         = "Select * from valoracion_inicial_ where id_valoracion_inicial_=" . $_REQUEST['id_vinicial'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];

echo '<tr><td colspan=2>-HISTORIA:-
                    ' . $_REQUEST['proceso'] . '-FECHA- ' . $fecha_cita_1 . '
                </td>
        </tr>';

if ($motivo_1 != "") {

    echo '<tr><td>- MOTIVO DE CONSULTA-</td>
                <td>
                    ' . $motivo_1 . '
                </td>
        </tr>';
}

if ($actual_1 != "") {

    echo '<tr><td>- ENFERMEDAD ACTUAL-</td>
                <td>
                    ' . @$actual_1 . '
                </td>
        </tr>';
}

//personales

//echo '<tr ><td colspan=2 align="center" ><br></td></tr>';
?>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
         <td colspan="12" height=""><div align="center">RIMERA INFANCIA </div><BR></td>
     </tr>
     <tr>
         <td colspan="12" height=""><div align="center">ANTECEDENTES PERSONALES</div><BR></td>
    </tr>
     <tr>
            <?php
if ($sv_res_1 != "") {
    echo '<td height="" width="168">Médicos</td>
                    <td>
                        ' . $sv_res_1 . '
                    </td>';
}
if ($sv_res_2 != "") {
    echo '<td height="" width="168">Hospitalarios</td>
                    <td>
                        ' . $sv_res_2 . '
                    </td>
                 ';
}
?>
    </tr>
    <tr>
        <?php
if ($sv_res_3 != "") {
    echo '<td height="" width="168">Transfunsionales</td>
                        <td>
                            ' . $sv_res_3 . '
                        </td>
                     ';
}

if ($sv_res_4 != "") {
    echo '<td height="" width="168">Farmacologícos</td>
                        <td>
                            ' . $sv_res_4 . '
                        </td>';
}
?>
    </tr>
    <tr>
        <?php
if ($sv_card_1 != "") {
    // pendiente el or
    echo '<td height="" width="168">Exposición al humo o tabaco</td>
                        <td>
                            ' . $sv_card_1 . '
                        </td>';
}
if ($sv_card_2 != "") {
    // pendiente el or
    echo '<td height="" width="168">Quirurgicos</td>
                        <td>
                            ' . $sv_card_2 . '
                        </td>';
}
?>
    </tr>
    <tr>
            <?php
if ($sv_card_3 != "") {
    echo '<td height="14" width="168">Alergícos</td>
                        <td>
                            ' . $sv_card_3 . '
                        </td>';
}
if ($sv_card_4 != "") {
    echo ' <td height="14" width="168">Vacunación</td>
                        <td>
                            ' . $sv_card_4 . '
                        </td>';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
         <td colspan="12" height=""><div align="center">RESULTADOS DE TAMIZAJE NEOTANATAL</div><BR></td>
      </tr>
    <tr>
            <?php
if ($sv_res_1 != "") {
    echo '<td height="" width="100">Audítiva</td>
                    <td>
                        ' . $sv_res_1 . '
                    </td>';
}
if ($sv_res_2 != "") {
    echo '<td height="" width="168">Metábolismo</td>
                    <td>
                        ' . $sv_res_2 . '
                    </td>
                 ';
}
?>
    </tr>
    <tr>
        <?php
if ($sv_res_3 != "") {
    echo '<td height="" width="168">Cardio Patia Congeníta</td>
                        <td>
                            ' . $sv_res_3 . '
                        </td>
                     ';
}
?>
    </tr>
</table>
<hr width=750>
    <br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
    <tr height="">
        <td colspan="12" height=""><div align="center">PROGRESO EN EL DESARROLLO DEL NIÑO</div><BR></td>
          </tr>
     <tr>
            <?php
if ($sv_temp_4 != "") {
    echo '<td>
                        ' . $sv_temp_4 . '
                    </td>';
}
?>
    </tr>
</table>
<hr width=750>
    <br>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
        <td colspan="12" height="" align="center">- ANTECEDENTES FAMILIARES-</td>
      </tr>
    <tr>
        <?php
if ($med_pes_1 != "") {
    echo '<tr>
                      <td height="" width="200px">Asma</td>
                        <td>
                           ' . $med_pes_1 . '
                        </td>
                     </tr>';
}
if ($med_pes_2 != "") {
    echo '<tr>
                      <td height="">Tubercolosis</td>
                        <td>
                             ' . $med_pes_2 . '
                        </td>
                    </tr> ';
}

if ($med_pes_3 != "") {
    echo '<tr>
                      <td height="" width="">Problema de desarrollo infantil</td>
                        <td>
                             ' . $med_pes_3 . '
                        </td>
                     </tr>';
}

if ($med_pes_4 != "") {
    echo '<tr>
                      <td height="" width="">Antecedente en muerte de hermano</td>
                        <td>
                             ' . $med_pes_4 . '
                        </td>
                    </tr>';
}
if ($med_tal_1 != "") {
    echo '<tr>
                      <td height="" width="">Antecedente de salud mental de los padres</td>
                        <td>
                             ' . $med_tal_1 . '
                        </td>
                     </tr>';
}

if ($med_tal_2 != "") {
    echo '<tr>
                      <td height="" width="">Exposición a vilencia  </td>
                        <td>
                             ' . $med_tal_2 . '
                        </td>
                     </tr>';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table border="0" align="center" width="745" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
        <td colspan="12" height="" align="center">ALIMEMENTACION EN MENORES DE 6 MESES</td>
      </tr>
    <tr>
        <?php
if ($med_tal_3 != "") {
    echo '<tr>
                        <td height="" width="200px">¿El niño recibe lactancia materna?</td>
                        <td>
                           ' . $med_tal_3 . '
                        </td>
                     </tr>';
}
?>
   </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="19" colspan="12" align="center" >-ALIMEMENTACION EN MAYORES A 6 MESES</td>
      </tr>
    <tr>
          <?php
if ($med_tal_4 != "") {
    echo '<tr>
                      <td height="" width="30%">¿Tipo de alimentos que consume el niño?</td>
                          <td  width="">
                            ' . $med_tal_4 . '
                        </td>
                        </tr>';
}

if ($med_cefa_1 != "") {
    echo '<tr>
                <td height="" width="">¿Frecuencia de aliemntación en el día?   </td>
                         <td>
                            ' . $med_cefa_1 . '
                        </td>
                    </tr> ';
}

if ($med_cefa_2 != "") {
    echo '<tr>
                      <td height="" width="">¿Cantidad de alimentos?</td>
                          <td>
                            ' . $med_cefa_2 . '
                        </td>
                     </tr>';
}

if ($med_cefa_3 != "") {
    echo '<tr>
                      <td height="" width="">¿Forma de preparación de alimentos que consume el niño?</td>
                          <td>
                            ' . $med_cefa_3 . '
                        </td>
                     </tr>';
}

if ($med_cefa_4 != "") {
    echo '<tr>
                      <td height="" width="">¿Otros?</td>
                         <td>
                            ' . $med_cefa_4 . '
                      </td>
                   </tr> ';
}
?>
    </tr>
</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="19">
        <td width="" height="19" colspan="12" align="center" >-RUTINA Y HABITOS SALUDABLES</td>
    </tr>
          <?php
if ($recome_s_1 != "") {
    echo '<tr>
                      <td height="" width="200px">¿Rutina de sueño?</td>
                        <td align="left">
                            ' . $recome_s_1 . '
                        </td>
                        </tr>';
}

if ($recome_s_2 != "") {
    echo '<tr>
                <td height="" width="">¿Cambio de pañal?</td>
                        <td>
                            ' . $recome_s_2 . '
                        </td>
                    </tr> ';
}

if ($recome_s_3 != "") {
    echo '<tr>
                      <td height="" width="">¿Cuidado bucal?</td>
                        <td>
                            ' . $recome_s_3 . '
                        </td>
                     </tr>';
}

if ($recome_s_4 != "") {
    echo '<tr>
                      <td height="" width="">¿Juego o movimiento activo?    </td>
                        <td>
                            ' . $recome_s_4 . '
                        </td>
                     </tr>';
}

?>

</table>
<hr width=750>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="4" align="center">-PRACTICAS DE CRIANZA Y CUIDADO</td>
      </tr>
    <tr>
          <?php

if ($recome_n_1 != "") {
    echo '<tr>
                      <td height="" width="40%">¿Formas de comunicación con el niño?</td>
                        <td align="left"  width="">
                            ' . $recome_n_1 . '
                        </td>
                        </tr>';
}

if ($recome_n_2 != "") {
    echo '<tr>
                <td height="" width="">¿Actividades para estimular el desarrollo?</td>
                        <td>
                            ' . $recome_n_2 . '
                        </td>
                    </tr> ';
}

if ($recome_n_3 != "") {
    echo '<tr>
                      <td height="" width="">¿Como se relaciona le niño con su familia y otras personas?</td>
                        <td>
                            ' . $recome_n_3 . '
                        </td>
                     </tr>';
}

if ($recome_n_4 != "") {
    echo '<tr>
                      <td height="" width="">¿Practicas sobre el establecimiento de limites y disciplinas?  </td>
                        <td>
                            ' . $recome_n_4 . '
                        </td>
                     </tr>';
}
if ($nut_nor_1 != "") {
    echo '<tr>
                      <td height="" width="">¿Presencia de violencia en el hogar?</td>
                        <td>
                            ' . $nut_nor_1 . '
                        </td>
                     </tr>';
}
?>
   </tr>
</table>
<br>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="745" border="0" style="border:1px solid #000000; font-size:90%;" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">
      <tr height="">
         <td colspan="12" height=""><div align="center">EXAMEN FISICO</div><BR></td>
      </tr>
    <tr>
          <?php

if ($nut_nor_2 != "") {
    echo '
                      <td height="" width="">T A</td>
                        <td align="left">
                            ' . $nut_nor_2 . '
                        mmHg</td>';
}

if ($nut_nor_3 != "") {
    echo '<td height="" width="">|| F.Respiratoria</td>
                        <td>
                            ' . $nut_nor_3 . '
                        _ por min</td>
                     ';
}
if ($nut_nor_4 != "") {
    echo '
                      <td height="" width="">|| F.Pulso</td>
                        <td>
                            ' . $nut_nor_4 . '
                        _por min</td>
                     ';
}
if ($nut_ries_1 != "") {
    echo '
                      <td height="" width="">||Temperatura</td>
                        <td>
                            ' . $nut_ries_1 . '
                        _°C</td>
                     ';
}
if ($nut_ries_2 != "") {
    echo '
                      <td height="" width="">|| Peso</td>
                        <td>
                            ' . $nut_ries_2 . '
                        _KG</td>
                     ';
}
if ($nut_ries_3 != "") {
    echo '
                      <td height="" width="">|| Talla</td>
                        <td>
                            ' . $nut_ries_3 . '
                        _cm</td>
                     ';
}
?>
     </tr>
    <?php
if ($nut_ries_4 != "") {
    echo '<td height="" width="">Apariencia</td>
                    <td>
                        ' . $nut_ries_4 . '
                    </td>';
}
if ($nut_agu_1 != "") {
    // pendiente el or
    echo '<td height="" width="10">|| SPO2</td>
                    <td>
                        ' . $nut_agu_1 . '
                    </td>';
}
if ($nut_agu_2 != "") {
    // pendiente el or
    echo ' <td height="" width="10">|| IMC</td>
                    <td>
                        ' . $nut_agu_2 . '
                    </td>
                 ';
}
?>
</table>
<br>
<!--   ****************************** IMPRESION DE DIAGNOSTICO ******************************* -->
 <div id="content_notas">
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Consulta:</td>

                   <?php
$sql4f         = "Select fin_consulta from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f      = $conexion->EjecutarQuery($sql4f);
$row4f         = mysql_fetch_array($result4f);
$tipo_consulta = $row4f['fin_consulta'];
echo '
     <td width="85%">
                    ' . $tipo_consulta . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Tipo de Dianostico:</td>

                   <?php
$sql4f             = "Select tipo_diagnostico from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f          = $conexion->EjecutarQuery($sql4f);
$row4f             = mysql_fetch_array($result4f);
$tipo_diagnostico1 = $row4f['tipo_diagnostico'];
echo '
     <td width="85%"> ' . $tipo_diagnostico1 . '
                </td>

             ';
?>
</tr>
</table>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0"  class="" style="font-size: <?php echo $tamfont ?>px !important">

      <tr height="">
        <td width="" height="" colspan="2" align="left">Causa Extrema:</td>

                   <?php
$sql4f          = "Select causa_externa from valoracion_inicial where id_vinicial=" . $_REQUEST['id_vinicial'] . " and historia=" . $_REQUEST['historia'];
$result4f       = $conexion->EjecutarQuery($sql4f);
$row4f          = mysql_fetch_array($result4f);
$causa_externa1 = $row4f['causa_externa'];
echo '
     <td width="85%">
       ' . $causa_externa1 . '
                </td>

             ';
?>
</tr>
</table>
           <br>
           <br>


        <table width="750" border="0" style="border:1px solid #000000; font-size:90%;" align="left" width="80%" cellspacing="0" class="" style="font-size: <?php echo $tamfont ?>px !important">

            <?php
$sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where id_vinicial=" . $_REQUEST['id_vinicial'] . " and  vi.historia='" . @$_REQUEST['historia'] . "'";

$resultados      = $conexion->EjecutarQuery($sql);
$total_registros = mysql_num_rows($resultados);
$sql_search      = $sql . " ORDER BY vi.fecha DESC ";
$resultados      = $conexion->EjecutarQuery($sql_search);
//   $total_paginas = ceil($total_registros / $registros);

echo "<tbody><tr class='t_head'>
                        <th valign='left' width='50px'>Cita</th>

                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='center' width='70px'>Fecha</th>
                        <th valign='center'>Diagnostico</th>
                        <th valign='center'>Observacion</th>
                      </tr></tbody>";
$contador = 0;
if ($total_registros) {
    $bool_style = true;
    while ($row_f = mysql_fetch_array($resultados)) {

        if ($bool_style) {
            $style_file_table = "row1";
        } else {
            $style_file_table = "row2";
        }
        $bool_style = !$bool_style;

        $diagnostico = '';
        if ($row_f['diagnostico_principal'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_principal'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx1'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx1'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx2'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx2'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }
        if ($row_f['diagnostico_dx3'] != '') {
            $sql      = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx3'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d    = mysql_fetch_array($result_d);
            $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
        }

        echo "<tr class='$style_file_table'>";

        $sesion = $row_f['id_cita'];
        if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
            $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
        }

        echo "<td align='left'>" . $sesion . "</td>";

        echo "<td align='center'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";
        echo "<td align='center'>" . $row_f['fecha'] . "</td>";
        echo "<td align='left'>" . $diagnostico . "</td>";
        echo "<td align='left'>" . $row_f['valoracion_inicial'] . "</td>";

        echo "</tr>";
    }
} else {
    echo "<font color='darkgray'>(sin resultados)</font>";
}

?>
  </table>
    </div>
</div>

<a href='#' onclick='imprSelec34("imprimir_formularios_oculto", true, "v")' class="no_print" >Imprimir Crecimiento y Desarrollo</a>
</fieldset>
  <style type="text/css">

        @media print
        {
            #imprimir_formularios_oculto{
                font-size: 10px !important;
            }
            /*
            .Estilo2 {font-size: 12px}
            .Estilo4 {
                font-size: 24pimprimir_historias_ocultox;
                color: #CC3300;
            }
            .Estilo5 {font-size: 18px}
            */
        }
    </style>
    <script type="text/javascript">
  function validar(){

     var nut_nor_2 = document.getElementById('nut_nor_2').value;  // T A
     var nut_nor_3 = document.getElementById('nut_nor_3').value; // F R
     var nut_nor_4 = document.getElementById('nut_nor_4').value;  //FC
     var nut_ries_1 = document.getElementById('nut_ries_1').value; //T
     var nut_ries_2 = document.getElementById('nut_ries_2').value; // PESO
     var nut_ries_3 = document.getElementById('nut_ries_3').value; // TALLA
if(nut_nor_2=="" ){
    alert("Campo T A Obligatorio");
    return false;
  }else if(nut_nor_3==""){
    alert("Campo F R Obligatorio");
    return false;
 }else if(nut_nor_4==""){
    alert("Campo F C Obligatorio");
    return false;
 }else if(nut_ries_1==""){
    alert("Campo T° Obligatorio");
    return false;
 }else if(nut_ries_2==""){
    alert("Campo Peso Obligatorio");
    return false;
 }else if(nut_ries_3==""){
    alert("Campo Talla Obligatorio");
    return false;
 }
}

</script>