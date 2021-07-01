<?php
if (isset($_REQUEST['guardar_hc_historia_entrada']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_hc_historia_entrada'] == 'new') {

        $sql = "INSERT INTO escala_findrisc (
`id_escala_find`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`edad_pac`,
`imc_esc`,
`perimetro_abdo`,
`activ_fisica`,
`alimentacion`,
`medi_hta`,
`dete_glucosa`,
`diag_dm_fa`,
`punt_total`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['edad_pac'] . "' ,
'" . $_REQUEST['imc_esc'] . "' ,
'" . $_REQUEST['perimetro_abdo'] . "' ,
'" . $_REQUEST['activ_fisica'] . "' ,
'" . $_REQUEST['alimentacion'] . "' ,
'" . $_REQUEST['medi_hta'] . "' ,
'" . $_REQUEST['dete_glucosa'] . "' ,
'" . $_REQUEST['diag_dm_fa'] . "' ,
'" . $_REQUEST['punt_total'] . "'
) ";

//echo $sql;

        ?>

<script>

$(function(){
$("#tabs").tabs({selected: parseInt(1)});
});

</script>
<?php

    } else if ($_REQUEST['id_hc_historia_entrada'] != '') {

        $sql = "UPDATE hc_historia_entrada set
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`motivo_1` = '" . $_REQUEST['motivo_1'] . "' ,
`actual_1` = '" . $_REQUEST['actual_1'] . "' ,
`cesarea` = '" . $_REQUEST['cesarea'] . "' ,
`apendice` = '" . $_REQUEST['apendice'] . "' ,
`vesicula` = '" . $_REQUEST['vesicula'] . "' ,
`hernia` = '" . $_REQUEST['hernia'] . "' ,
`otro` = '" . $_REQUEST['otro'] . "' ,
`patologico` = '" . $_REQUEST['patologico'] . "' ,
`alergico` = '" . $_REQUEST['alergico'] . "' ,
`gine_g` = '" . $_REQUEST['gine_g'] . "' ,
`gine_p` = '" . $_REQUEST['gine_p'] . "' ,
`gine_a` = '" . $_REQUEST['gine_a'] . "' ,
`gine__c` = '" . $_REQUEST['gine__c'] . "' ,
`pf_s` = '" . $_REQUEST['pf_s'] . "' ,
`pf_n` = '" . $_REQUEST['pf_n'] . "' ,
`tension` = '" . $_REQUEST['tension'] . "' ,
`f_respiratoria` = '" . $_REQUEST['f_respiratoria'] . "' ,
`pulso` = '" . $_REQUEST['pulso'] . "' ,
`talla` = '" . $_REQUEST['talla'] . "' ,
`temperatura` = '" . $_REQUEST['temperatura'] . "' ,
`apariencia` = '" . $_REQUEST['apariencia'] . "' ,
`cabeza_11` = '" . $_REQUEST['cabeza_11'] . "' ,
`orl_11` = '" . $_REQUEST['orl_11'] . "' ,
`torax_11` = '" . $_REQUEST['torax_11'] . "' ,
`abdomen_11` = '" . $_REQUEST['abdomen_11'] . "' ,
`genito_11` = '" . $_REQUEST['genito_11'] . "' ,
`osteo_11` = '" . $_REQUEST['osteo_11'] . "' ,
`neuro_11` = '" . $_REQUEST['neuro_11'] . "' ,
`piel_1` = '" . $_REQUEST['piel_1'] . "' ,
`idx_1` = '" . $_REQUEST['idx_1'] . "' ,
`plan_1` = '" . $_REQUEST['plan_1'] . "' ,
`peso_in` = '" . $_REQUEST['peso_in'] . "' ,
`familiares_1` = '" . $_REQUEST['familiares_1'] . "' ,
`id_cita` = '" . $_REQUEST['id_cita'] . "' ,
`hc_imc` = '" . $_REQUEST['hc_imc'] . "' ,
`hc_ciru_abdominal` = '" . $_REQUEST['hc_ciru_abdominal'] . "' ,
`hc_fis_1` = '" . $_REQUEST['hc_fis_1'] . "' ,
`hc_fis_2` = '" . $_REQUEST['hc_fis_2'] . "' ,
`hc_fis_3` = '" . $_REQUEST['hc_fis_3'] . "' ,
`hc_fis_4` = '" . $_REQUEST['hc_fis_4'] . "' ,
`hc_fis_5` = '" . $_REQUEST['hc_fis_5'] . "' ,
`hc_fis_6` = '" . $_REQUEST['hc_fis_6'] . "' ,
`hc_fis_7` = '" . $_REQUEST['hc_fis_7'] . "' ,
`hc_fis_8` = '" . $_REQUEST['hc_fis_8'] . "' ,
`hc_fis_9` = '" . $_REQUEST['hc_fis_9'] . "' ,
`hc_fis_10` = '" . $_REQUEST['hc_fis_10'] . "' ,
`hc_fis_11` = '" . $_REQUEST['hc_fis_11'] . "' ,
`hc_fis_12` = '" . $_REQUEST['hc_fis_12'] . "' ,
`hc_fis_13` = '" . $_REQUEST['hc_fis_13'] . "' ,
`hc_fis_14` = '" . $_REQUEST['hc_fis_14'] . "' ,
`hc_fis_15` = '" . $_REQUEST['hc_fis_15'] . "' ,
`hc_fis_16` = '" . $_REQUEST['hc_fis_16'] . "' ,
`hc_fis_17` = '" . $_REQUEST['hc_fis_17'] . "' WHERE `id_hc_historia_entrada` = '" . $_REQUEST['id_hc_historia_entrada'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}

$id_hc_historia_entrada = 'new';
$sql                    = "SELECT * from hc_historia_entrada WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result                 = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_hc_historia_entrada = $row['id_hc_historia_entrada'];
    $id_usuario             = $row['id_usuario'];
    $id_historia            = $row['id_historia'];
    $id_proceso             = $row['id_proceso'];
    $id_vinicial            = $row['id_vinicial'];
    $id_revaloracion        = $row['id_revaloracion'];
    $motivo_1               = $row['motivo_1'];
    $actual_1               = $row['actual_1'];
    $cesarea                = $row['cesarea'];
    $apendice               = $row['apendice'];
    $vesicula               = $row['vesicula'];
    $hernia                 = $row['hernia'];

    $otro = $row['otro'];
    if ($otro == "") {$otro = "NO REFIERE";}
    $patologico = $row['patologico'];
    if ($patologico == "") {$patologico = "NO REFIERE";}

    $alergico = $row['alergico'];
    if ($alergico == "") {$alergico = "NO REFIERE";}
    $gine_g = $row['gine_g'];
    if ($gine_g == "") {$gine_g = "NO REFIERE";}
    $gine_p = $row['gine_p'];
    if ($gine_p == "") {$gine_p = "NO REFIERE";}
    $gine_a = $row['gine_a'];
    if ($gine_a == "") {$gine_a = "NO REFIERE";}

    $gine__c = $row['gine__c'];

    $cesarea = $row['cesarea'];
    if ($cesarea == "") {$cesarea = "NO REFIERE";}

    $pf_s = $row['pf_s'];
    if ($pf_s == "") {$pf_s = "NO REFIERE";}
    $pf_n = $row['pf_n'];
    if ($pf_n == "") {$pf_n = "NO REFIERE";}
    $tension = $row['tension'];
    if ($pf_n == "") {$pf_n = "NO REFIERE";}

    $f_respiratoria = $row['f_respiratoria'];
    $pulso          = $row['pulso'];
    $talla          = $row['talla'];
    $temperatura    = $row['temperatura'];
    $apariencia     = $row['apariencia'];

    $cabeza_11 = $row['cabeza_11'];
    if ($cabeza_11 == "") {$cabeza_11 = "NORMAL";}
    $orl_11 = $row['orl_11'];
    if ($orl_11 == "") {$orl_11 = "NORMAL";}
    $torax_11 = $row['torax_11'];
    if ($torax_11 == "") {$torax_11 = "NORMAL";}
    $abdomen_11 = $row['abdomen_11'];
    if ($abdomen_11 == "") {$abdomen_11 = "NORMAL";}
    $genito_11 = $row['genito_11'];
    if ($genito_11 == "") {$genito_11 = "NORMAL";}
    $osteo_11 = $row['osteo_11'];
    if ($osteo_11 == "") {$osteo_11 = "NORMAL";}
    $neuro_11 = $row['neuro_11'];
    if ($neuro_11 == "") {$neuro_11 = "NORMAL";}
    $piel_1 = $row['piel_1'];
    if ($piel_1 == "") {$piel_1 = "NORMAL";}

    $idx_1        = $row['idx_1'];
    $plan_1       = $row['plan_1'];
    $peso_in      = $row['peso_in'];
    $familiares_1 = $row['familiares_1'];
    $id_cita      = $row['id_cita'];
    $hc_imc       = $row['hc_imc'];

    $hc_ciru_abdominal = $row['hc_ciru_abdominal'];
    if ($hc_ciru_abdominal == "") {$hc_ciru_abdominal = "NORMAL";}
    $hc_fis_1 = $row['hc_fis_1'];
    if ($hc_fis_1 == "") {$hc_fis_1 = "NORMAL";}
    $hc_fis_2 = $row['hc_fis_2'];
    if ($hc_fis_2 == "") {$hc_fis_2 = "NORMAL";}
    $hc_fis_3 = $row['hc_fis_3'];
    if ($hc_fis_3 == "") {$hc_fis_3 = "NORMAL";}
    $hc_fis_4 = $row['hc_fis_4'];
    if ($hc_fis_4 == "") {$hc_fis_4 = "NORMAL";}
    $hc_fis_5 = $row['hc_fis_5'];
    if ($hc_fis_5 == "") {$hc_fis_5 = "NORMAL";}
    $hc_fis_6 = $row['hc_fis_6'];
    if ($hc_fis_6 == "") {$hc_fis_6 = "NORMAL";}
    $hc_fis_7 = $row['hc_fis_7'];
    if ($hc_fis_7 == "") {$hc_fis_7 = "NORMAL";}
    $hc_fis_8 = $row['hc_fis_8'];
    if ($hc_fis_8 == "") {$hc_fis_8 = "NORMAL";}
    $hc_fis_9 = $row['hc_fis_9'];
    if ($hc_fis_9 == "") {$hc_fis_9 = "NORMAL";}
    $hc_fis_10 = $row['hc_fis_10'];
    if ($hc_fis_10 == "") {$hc_fis_10 = "NORMAL";}
    $hc_fis_11 = $row['hc_fis_11'];
    if ($hc_fis_11 == "") {$hc_fis_11 = "NORMAL";}
    $hc_fis_12 = $row['hc_fis_12'];
    if ($hc_fis_12 == "") {$hc_fis_12 = "NORMAL";}
    $hc_fis_13 = $row['hc_fis_13'];
    if ($hc_fis_13 == "") {$hc_fis_13 = "NORMAL";}
    $hc_fis_14 = $row['hc_fis_14'];
    if ($hc_fis_14 == "") {$hc_fis_14 = "NORMAL";}
    $hc_fis_15 = $row['hc_fis_15'];
    if ($hc_fis_15 == "") {$hc_fis_15 = "NORMAL";}
    $hc_fis_16 = $row['hc_fis_16'];
    $hc_fis_17 = $row['hc_fis_17'];
    break;}

//fecha cita
$sql2         = "Select * from cita where id_cita=" . $_REQUEST['id_cita'];
$result2      = $conexion->EjecutarQuery($sql2);
$row2         = mysql_fetch_array($result2);
$fecha_cita_1 = $row2['fecha'];

?>


<script>

function calcular_img(){


    var valor_b1 = document.getElementById('peso_in').value;
    var valor_a1 = document.getElementById('talla').value;

    var resultado= parseInt(valor_b1)/(parseInt(valor_a1)*parseInt(valor_a1));

//alert(resultado);

var numero = resultado;
var resDecimal = numero.toFixed(4);

    document.getElementById('hc_imc').value=resDecimal;
}

   function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
            alert("Ingrese solo números")
            return false;
            }
         return true;
      }

function cargar_anterior(){

var recargar=1


   // window.location.reload();

   //   window.location.href = window.location.href + "&w1=123";

      var URLactual = window.location;
//    alert(URLactual);


URLactual=URLactual+"&w1=1";

//alert(URLactual);

    window.location=URLactual+"&w1=1";


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
<style type="text/css">
<!--
.Estilo2 {
  color: #FFFFFF;
  font-weight: bold;
}
-->
</style>



<fieldset id="hc_historia_entrada">
<legend align="left"> <div class="arrow-c" id="close-hc_historia_entrada"></div>
    <div class="arrow-o" id="open-hc_historia_entrada" ></div> <font>Valoracion Historia de Entrada</font></legend>
<div id="content-hc_historia_entrada">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_historia_entrada" id="guardar_hc_historia_entrada" >Calcular promedio</button>';
} else {
    $readonly = " readonly='readonly' ";
}

//echo $ultimo."dddd";

?>
<form id="form_hc_historia_entrada" name="form_hc_historia_entrada" action="<?php echo @$action_form_hc_historia_entrada ?>" method="post" onsubmit="return validar()";>


<input type="hidden" id="id_hc_historia_entrada" name="id_hc_historia_entrada" value="<?php echo @$id_hc_historia_entrada ?>" />
<input type="hidden" id="id_cita_h" name="id_cita_h" value="<?php echo $fecha_cita_1 ?>" />

<br>
<input type="hidden" class="input_txt valid" id="id_hc_historia_entrada" name="id_hc_historia_entrada" value="<?php echo @$id_hc_historia_entrada; ?>" />

<h3 align="center">ESCALA FINDRISC</h3>
<br>

<input type="hidden" name="botno cargar" onclick="cargar_anterior()" value="Cargar Valoracion Anterior">

<br>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr height="">
    <td width="" height=""><div align="left">MOTIVO  DE CONSULTA</div></td>
    <td width="" height=""><textarea name="motivo_1" cols="60" rows="1"  id="motivo_1"><?php echo @$motivo_1; ?></textarea></td>
  </tr>
  <tr height="">
    <td height=""><div align="left">ENFERMEDAD ACTUAL</div></td>
    <td height=""><textarea name="actual_1" cols="60" rows="1" id="actual_1"><?php echo @$actual_1; ?></textarea></td>
  </tr>
</table>
<br>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
     ANTECEDENTES    PERSONALES<BR><BR>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Quirurgicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="cesarea" name="cesarea" value="<?php echo $cesarea; ?>" /> </td>
    <td width="183">Patológicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="patologico" name="patologico" value="<?php echo @$patologico; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Toxicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="gine_p" name="gine_p" value="<?php echo @$gine_p; ?>" /></td>
    <td width="183">Alérgicos    y Farmacolólogicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="alergico" name="alergico" value="<?php echo @$alergico; ?>" /></td>
  </tr>

  <tr height="19">
    <td height="19" width="168">Traumatologicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="gine_g" name="gine_g" value="<?php echo @$gine_g; ?>" /></td>
    <td width="183">Ginecologicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="gine_a" name="gine_a" value="<?php echo @$gine_a; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Otro</td>
    <td width="168"><input type="text" class="input_txt valid" id="otro" name="otro" value="<?php echo @$otro; ?>" /></td>
    <td width="183">&nbsp;</td>
    <td width="216">&nbsp;</td>
  </tr>
</table>
<br>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
    <td height="">ANTECEDENTES FAMILIARES</td>
    <td height=""><textarea id="familiares_1" name="familiares_1"  cols="60" rows="1"> <?php echo @$familiares_1; ?></textarea></td>
  </tr>
</table>
<p><br>
</p>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
    <td colspan="3" height=""><div align="center">EDAD</div>
        <br /></td>
  <tr height="19">
    <td height="19" width="168">Menos de 45 Años</td>
    <td width="168"><input type="radio" class="input_txt valid" id="edad_pac" name="edad_pac" value="0" /> </td>
  </tr>
   <tr height="19">
    <td height="19" width="168">Entre 45 - 55 Años</td>
    <td width="168"><input type="radio" class="input_txt valid" id="edad_pac" name="edad_pac" value="2" /> </td>
  </tr>
 <tr height="19">
    <td height="19" width="168">Entre 55 - 64  Años</td>
    <td width="168"><input type="radio" class="input_txt valid" id="edad_pac" name="edad_pac" value="3" /> </td>
  </tr>
 <tr height="19">
    <td height="19" width="168">Mas de 64 Años</td>
    <td width="168"><input type="radio" class="input_txt valid" id="edad_pac" name="edad_pac" value="4" /> </td>
  </tr>
</table>
<br>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0"  class="">

  <tr height="">
    <td colspan="7" height=""><div align="center">EXAMEN FISICO</div><BR></td>
  </tr>
  <tr height="">
    <td width=""> &nbsp || Peso
        <input name="peso_in" type="text" class="" id="peso_in" onchange="calcular_img()" onkeypress="return isNumberKey(event)" value="<?php echo @$peso_in; ?>" size="5" />
      Kg</td>
    <td width=""> &nbsp || Talla
      <input name="talla" type="text" class="" id="talla" onchange="calcular_img()" onkeypress="return isNumberKey(event)" value="<?php echo @$talla; ?>" size="5" />
      cm</td>
  </tr>

  <tr height="">
    <td height="" colspan="7"><BR>IMC
      <input type="text" class="input_txt valid" id="hc_imc" name="hc_imc" readonly value="<?php echo @$hc_imc; ?>" />

    </td>
    </tr>

</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">IMC (Kg/m2)</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">Menos de 25 Kg/m2 </td>
    <td width="168"><input type="radio" class="input_txt valid" id="imc_esc" name="imc_esc" value="0" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Entre 25 - 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="imc_esc" name="imc_esc" value="1" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Mas de 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="imc_esc" name="imc_esc" value="3" /></td>
  </tr>
</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">PERIMETRO ABDOMINAL (Medido a nivel del ombligo)</div>
        <br /></td>
        <tr height="30" >
          <td height="19" width="168" align=""></td>
          <td width="168" align="left"><label>HOMBRES</label></td>
        </tr>
   <tr height="19" colspan="0">
    <td height="19" width="168">Menos de 25 Kg/m2 </td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="0" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Entre 25 - 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="3" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Mas de 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="4" /></td>
  </tr>
  <br>
    <tr height="30" >
          <td height="19" width="168" align=""></td>
          <td width="168" align="left"><label>MUJERES</label></td>
        </tr>
   <tr height="19" colspan="0">
    <td height="19" width="168">Menos de 25 Kg/m2 </td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="0" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Entre 25 - 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="3" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Mas de 30 Kg/m2</td>
    <td width="168"><input type="radio" class="input_txt valid" id="perimetro_abdo" name="perimetro_abdo" value="4" /></td>
  </tr>
</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">¿Realiza Normalmente al menos 30 minutos diarios de Actividad Fisica?</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">Si</td>
    <td width="168"><input type="radio" class="input_txt valid" id="activ_fisica" name="activ_fisica" value="0" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">No</td>
    <td width="168"><input type="radio" class="input_txt valid" id="activ_fisica" name="activ_fisica" value="2" /></td>
  </tr>

</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">¿Con qué Frecuencia como frutas, verduras y hortalizas?</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">A diario</td>
    <td width="168"><input type="radio" class="input_txt valid" id="alimentacion" name="alimentacion" value="0" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">No a diario</td>
    <td width="168"><input type="radio" class="input_txt valid" id="alimentacion" name="alimentacion" value="1" /></td>
  </tr>
</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">¿Le han Recetado alguna vez medicamentos contra HTA?</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">Si</td>
    <td width="168"><input type="radio" class="input_txt valid" id="medi_hta" name="medi_hta" value="2" /></td>
  </tr>
  <tr height="19">
    <td height="alimentacion19" width="168">No</td>
    <td width="168"><input type="radio" class="input_txt valid" id="medi_hta" name="medi_hta" value="0" /></td>
  </tr>
</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">¿Le ha Detectado alguna vez Niveles altos de Glucosa en la sangre?</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">Si</td>
    <td width="168"><input type="radio" class="input_txt valid" id="dete_glucosa" name="dete_glucosa" value="5" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">No</td>
    <td width="168"><input type="radio" class="input_txt valid" id="dete_glucosa" name="dete_glucosa" value="0" /></td>
  </tr>
</table>
<br>
<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">¿Ha habido algún Diagnóstico de DM en su familia?</div>
        <br /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">No</td>
    <td width="168"><input type="radio" class="input_txt valid" id="diagno_dm" name="diagno_dm" value="0" /></td>
   </tr>
   <tr height="19">
    <td height="19" width="168">Si: Abuelos, Tios, Primos hermanos (Pero no padres, hermanos o hijos)</td>
    <td width="168"><input type="radio" class="input_txt valid" id="diagno_dm" name="diagno_dm" value="3" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Si: Padres, hermanos o hijos</td>
    <td width="168"><input type="radio" class="input_txt valid" id="diagno_dm" name="diagno_dm" value="5" /></td>
  </tr>
</table>

<br>
 <tr height="19">
  <td width="168" align="center">
<input align="center" name="ver" onclick="resultado()" type="button" value="Calcular Encuesta "></td>
</tr>
<br>

<table width="727" border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
     <td colspan="2" height=""><div align="center">Puntuacion total</div>
        <br /></td>
   </tr>
   <tr height="19">
     <td width="168" align="center">
      <textarea type="radio" class="input_txt valid" id="diagno_dm" name="diagno_dm" value="" /></textarea></td>
   </tr>

</table>


<p><br>
</p>
<p>&nbsp;</p>


        <script languaje="javascript">
            function resultado(){
var fin="no";
var r=0;
x=1;
while(fin=="no"){
g=document.getElementsByName('p'+x);
if(g.length!=0){
for(y=0;y<g.length;y++){
e=0;
if (g[y].checked==true){
r+=parseInt(g[y].value);
e=1;
break;
}
}
if(e==0){
alert("Dggebe seleccionar al menos una opcion por grupo");
break;
break;
}
}else{
fin="si";
}
x++;
}
document.getElementById('resultadox').innerHTML="r esultado:"+r;
}
</script>

<?php

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';
include $path . 'historia_entrada/historia/historia_print.php';

?>
<?php echo @$button;
?>


    <?php

$id_usuario_o = $_REQUEST['id_usuario'];
$sqlo         = "Select  id_rol from usuario where id_usuario='{$id_usuario_o}'";
$resulto      = $conexion->EjecutarQuery($sqlo);
$rowfo        = mysql_fetch_array($resulto);

$rol_usuario = $rowfo['id_rol'];

if ($rol_usuario == 2) {
    ?>
               <a href='#' onclick='imprSelec34("imprimir_formularios_oculto", true)' class="">Imprimir</a>
            <?php
}

?>

</form><br>


</div>
</fieldset>
<script type="text/javascript">
  function validar(){

     var tension = document.getElementById('tension').value;  // T A
     var f_respiratoria = document.getElementById('f_respiratoria').value; // F R
     var pulso = document.getElementById('pulso').value;  //FC
     var talla = document.getElementById('talla').value; // TALLA
     var temperatura = document.getElementById('temperatura').value; //T
     var peso_in = document.getElementById('peso_in').value; // PESO





if(tension=="" ){
    alert("Campo T A Obligatorio");
    return false;
  }else if(f_respiratoria==""){
    alert("Campo F R Obligatorio");
    return false;
 }else if(pulso==""){
    alert("Campo F C Obligatorio");
    return false;
 }else if(temperatura==""){
    alert("Campo T Obligatorio");
    return false;
 }else if(talla==""){
    alert("Campo Talla Obligatorio");
    return false;
 }else if(peso_in==""){
    alert("Campo Peso Obligatorio");
    return false;
 }
}
</script>
