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
`familiares_1`,
`id_cita`,
`hc_imc`,
`hc_ciru_abdominal`,
`hc_fis_1`,
`hc_fis_2`,
`hc_fis_3`,
`hc_fis_4`,
`hc_fis_5`,
`hc_fis_6`,
`hc_fis_7`,
`hc_fis_8`,
`hc_fis_9`,
`hc_fis_10`,
`hc_fis_11`,
`hc_fis_12`,
`hc_fis_13`,
`hc_fis_14`,
`hc_fis_15`,
`hc_fis_16`,
`hc_fis_17`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['motivo_1'] . "' ,
'" . $_REQUEST['actual_1'] . "' ,
'" . $_REQUEST['cesarea'] . "' ,
'" . $_REQUEST['apendice'] . "' ,
'" . $_REQUEST['vesicula'] . "' ,
'" . $_REQUEST['hernia'] . "' ,
'" . $_REQUEST['otro'] . "' ,
'" . $_REQUEST['patologico'] . "' ,
'" . $_REQUEST['alergico'] . "' ,
'" . $_REQUEST['gine_g'] . "' ,
'" . $_REQUEST['gine_p'] . "' ,
'" . $_REQUEST['gine_a'] . "' ,
'" . $_REQUEST['gine__c'] . "' ,
'" . $_REQUEST['pf_s'] . "' ,
'" . $_REQUEST['pf_n'] . "' ,
'" . $_REQUEST['tension'] . "' ,
'" . $_REQUEST['f_respiratoria'] . "' ,
'" . $_REQUEST['pulso'] . "' ,
'" . $_REQUEST['talla'] . "' ,
'" . $_REQUEST['temperatura'] . "' ,
'" . $_REQUEST['apariencia'] . "' ,
'" . $_REQUEST['cabeza_11'] . "' ,
'" . $_REQUEST['orl_11'] . "' ,
'" . $_REQUEST['torax_11'] . "' ,
'" . $_REQUEST['abdomen_11'] . "' ,
'" . $_REQUEST['genito_11'] . "' ,
'" . $_REQUEST['osteo_11'] . "' ,
'" . $_REQUEST['neuro_11'] . "' ,
'" . $_REQUEST['piel_1'] . "' ,
'" . $_REQUEST['idx_1'] . "' ,
'" . $_REQUEST['plan_1'] . "' ,
'" . $_REQUEST['peso_in'] . "' ,
'" . $_REQUEST['familiares_1'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['hc_imc'] . "' ,
'" . $_REQUEST['hc_ciru_abdominal'] . "' ,
'" . $_REQUEST['hc_fis_1'] . "' ,
'" . $_REQUEST['hc_fis_2'] . "' ,
'" . $_REQUEST['hc_fis_3'] . "' ,
'" . $_REQUEST['hc_fis_4'] . "' ,
'" . $_REQUEST['hc_fis_5'] . "' ,
'" . $_REQUEST['hc_fis_6'] . "' ,
'" . $_REQUEST['hc_fis_7'] . "' ,
'" . $_REQUEST['hc_fis_8'] . "' ,
'" . $_REQUEST['hc_fis_9'] . "' ,
'" . $_REQUEST['hc_fis_10'] . "' ,
'" . $_REQUEST['hc_fis_11'] . "' ,
'" . $_REQUEST['hc_fis_12'] . "' ,
'" . $_REQUEST['hc_fis_13'] . "' ,
'" . $_REQUEST['hc_fis_14'] . "' ,
'" . $_REQUEST['hc_fis_15'] . "' ,
'" . $_REQUEST['hc_fis_16'] . "' ,
'" . $_REQUEST['hc_fis_17'] . "'
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

$sql     = "SELECT * FROM hc_historia_entrada ORDER BY id_hc_historia_entrada DESC LIMIT 1";
$result1 = $conexion->EjecutarQuery($sql);
while ($row1 = mysql_fetch_array($result1)) {
    $cesarea = $row1['cesarea'];
    if ($cesarea == "") {$cesarea = "NO REFIERE";}
    $patologico = $row1['patologico'];
    if ($patologico == "") {$patologico = "NO REFIERE";}
    $gine_p = $row1['gine_p'];
    if ($gine_p == "") {$gine_p = "NO REFIERE";}
    $alergico = $row1['alergico'];
    if ($alergico == "") {$alergico = "NO REFIERE";}
    $gine_g = $row1['gine_g'];
    if ($gine_g == "") {$gine_g = "NO REFIERE";}
    $gine_a = $row1['gine_a'];
    if ($gine_a == "") {$gine_a = "NO REFIERE";}
    $otro = $row1['otro'];
    if ($otro == "") {$otro = "NO REFIERE";}
    $familiares_1 = $row1['familiares_1'];
    if ($familiares_1 == "") {$familiares_1 = "NO REFIERE";}
    break;

}

?>


<script>

//function calcular_img(){


//    var valor_b1 = document.getElementById('peso_in').value;
 //   var valor_a1 = document.getElementById('talla').value;

 //   var resultado= parseInt(valor_b1)/(parseInt(valor_a1)*parseInt(valor_a1));

//alert(resultado);

//var numero = resultado;
//var resDecimal = numero.toFixed(4);

//    document.getElementById('hc_imc').value=resDecimal;
//}

     function calcular_img()
{
  var altura=document.getElementById("talla").value;
  altura=altura.toString().replace(',','.');
  var alturaMetro=altura/100;
  var peso=document.getElementById("peso_in").value;



        /*CALCULO IMC*/
        var alturaCuadrado=alturaMetro*alturaMetro;
        var imc=peso/alturaCuadrado;
        document.getElementById("hc_imc").value=Math.round(imc*100)/100;

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
    $button = '<button name="guardar_hc_historia_entrada" id="guardar_hc_historia_entrada" >Guardar</button>';
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

<h3 align="center">HISTORIA CLINICA DE INGRESO</h3>
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
<table border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr height="">
    <td colspan="2" height=""><div align="center">REVISIÓN POR SISTEMAS</div>
        <br /></td>
  </tr>
  <tr height="19">
    <td height="19" width="339"><div align="left">CABEZA</div></td>
    <td width="307"><div align="left">ORL</div></td>
  </tr>
  <tr height="19">
    <td><div align="left">
      <textarea name="cabeza_11" cols="40" rows="1" id="cabeza_11"><?php echo @$cabeza_11; ?></textarea>
    </div></td>
    <td><div align="left">
      <textarea name="orl_11" cols="40" rows="1" id="orl_11"><?php echo @$orl_11; ?></textarea>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="339"><div align="left">TORAX-CARDIO-RESPIRATORIO</div></td>
    <td width="307"><div align="left">ABDOMEN</div></td>
  </tr>
  <tr height="19">
    <td><div align="left">
      <textarea name="torax_11" cols="40" rows="1" id="torax_11"><?php echo @$torax_11; ?></textarea>
    </div></td>
    <td><div align="left">
      <textarea name="abdomen_11" cols="40" rows="1" id="abdomen_11"><?php echo @$abdomen_11; ?></textarea>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="339"><div align="left">GENITOUNITARIO</div></td>
    <td width="307"><div align="left">OSTEO-MUSCULAR</div></td>
  </tr>
  <tr height="19">
    <td><div align="left">
      <textarea name="genito_11" cols="40" rows="1" id="genito_11"><?php echo @$genito_11; ?></textarea>
    </div></td>
    <td><div align="left">
      <textarea name="osteo_11" cols="40" rows="1" id="osteo_11"><?php echo @$osteo_11; ?></textarea>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="339"><div align="left">NEUROLOGO</div></td>
    <td width=""><div align="left">PIEL Y ANEXOS</div></td>
  </tr>
  <tr height="19">
    <td><textarea name="neuro_11" cols="40" rows="1" id="neuro_11"><?php echo @$neuro_11; ?></textarea></td>
    <td><textarea name="piel_1" cols="40" rows="1" id="piel_1"><?php echo @$piel_1; ?></textarea></td>
  </tr>

</table>
<br>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0"  class="">

  <tr height="">
    <td colspan="7" height=""><div align="center">EXAMEN FISICO</div><BR></td>
  </tr>
  <tr height="">
    <td height="" width="">T A
      <input name="tension" type="text" class="" id="tension" value="<?php echo @$tension; ?>" size="5" />
      mmHg</td>
    <td colspan="2">&nbsp || F R
      <input name="f_respiratoria" type="text" class="" id="f_respiratoria" value="<?php echo @$f_respiratoria; ?>" size="5" />
      min</td>
    <td width=""> &nbsp || F C
      <input name="pulso" type="text" class="" id="pulso" value="<?php echo @$pulso; ?>" size="5" />
      min</td>
    <td width=""> &nbsp || T°
        <input name="temperatura" type="text" class="" id="temperatura"   value="<?php echo @$temperatura; ?>" size="5" />
      °C</td>
    <td width=""> &nbsp || Peso
        <input name="peso_in" type="text" class="" id="peso_in" onchange="calcular_img()" onkeypress="return isNumberKey(event)" value="<?php echo @$peso_in; ?>" size="5" />
      Kg</td>
    <td width=""> &nbsp || Talla
      <input name="talla" type="text" class="" id="talla" onchange="calcular_img()" onkeypress="return isNumberKey(event)" value="<?php echo @$talla; ?>" size="5" />
      cm</td>
  </tr>


  <tr height="">
    <td height="" colspan="7"><BR>Apariencia
      <input name="apariencia" type="text" class="" id="apariencia" value="<?php echo @$apariencia; ?>" size="50" />

|| Perimetro abdominal<input type="text" class="input_txt valid" id="gine__c" name="gine__c" value="<?php echo @$gine__c; ?>" />
    </td>
    </tr>

</table>
<BR>
<table width="614" border="0" align="center">
  <tr>
    <td>IMG</td>
    <td><input type="text" class="input_txt valid" id="hc_imc" name="hc_imc" readonly value="<?php echo @$hc_imc; ?>" /></td>
    <td>Cir. Abdominal</td>
    <td><input type="text" class="input_txt valid" id="hc_ciru_abdominal" name="hc_ciru_abdominal" value="<?php echo @$hc_ciru_abdominal; ?>" /></td>
  </tr>
  <tr>
    <td width="108">Cabeza</td>
    <td width="168"><input type="text" class="input_txt valid" id="hc_fis_1" name="hc_fis_1" value="<?php echo @$hc_fis_1; ?>" /></td>
    <td width="131">Ojos</td>
    <td width="179"><input type="text" class="input_txt valid" id="hc_fis_9" name="hc_fis_9" value="<?php echo @$hc_fis_9; ?>" /></td>
  </tr>
  <tr>
    <td>Oidos</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_2" name="hc_fis_2" value="<?php echo @$hc_fis_2; ?>" /></td>
    <td>Nariz</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_10" name="hc_fis_10" value="<?php echo @$hc_fis_10; ?>" /></td>
  </tr>
  <tr>
    <td>Faringe</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_3" name="hc_fis_3" value="<?php echo @$hc_fis_3; ?>" /></td>
    <td>Cuello</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_11" name="hc_fis_11" value="<?php echo @$hc_fis_11; ?>" /></td>
  </tr>
  <tr>
    <td>Dorso</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_4" name="hc_fis_4" value="<?php echo @$hc_fis_4; ?>" /></td>
    <td>Mamas</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_12" name="hc_fis_12" value="<?php echo @$hc_fis_12; ?>" /></td>
  </tr>
  <tr>
    <td>Cardiaco</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_5" name="hc_fis_5" value="<?php echo @$hc_fis_5; ?>" /></td>
    <td>Pulmonar</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_13" name="hc_fis_13" value="<?php echo @$hc_fis_13; ?>" /></td>
  </tr>
  <tr>
    <td>Abdomen</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_6" name="hc_fis_6" value="<?php echo @$hc_fis_6; ?>" /></td>
    <td>Genitales</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_14" name="hc_fis_14" value="<?php echo @$hc_fis_14; ?>" /></td>
  </tr>
  <tr>
    <td>Extremidades</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_7" name="hc_fis_7" value="<?php echo @$hc_fis_7; ?>" /></td>
    <td>Neurologico</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_15" name="hc_fis_15" value="<?php echo @$hc_fis_15; ?>" /></td>
  </tr>
  <tr>
    <td>Otros</td>
    <td><input type="text" class="input_txt valid" id="hc_fis_8" name="hc_fis_8" value="<?php echo @$hc_fis_8; ?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p><br>
</p>
<p>&nbsp;</p>

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
