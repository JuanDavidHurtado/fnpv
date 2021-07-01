<?php

if (isset($_REQUEST['guardar_hc_embarazo']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_hc_embarazo'] == 'new') {

        $sql = "INSERT INTO hc_embarazo (
`id_hc_embarazo`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`id_cita`,
`embarazo_1`,
`embarazo_2`,
`embarazo_3`,
`embarazo_4`,
`embarazo_5`,
`embarazo_6`,
`embarazo_7`,
`embarazo_8`,
`embarazo_9`,
`embarazo_10`,
`embarazo_11`,
`embarazo_12`,
`embarazo_13`,
`embarazo_14`,
`eptopico`,
`gemelos`,
`ultimo25`,
`normal40`,
`ges_peso`,
`ges_talla`,
`fpp`,
`ges__fum`,
`eg_fum`,
`eg_eco`,
`antirubeola_1`,
`fum_1_act`,
`fum_1_pas`,
`fum_1_drog`,
`fum_1_alcohol`,
`fum_1_violencia`,
`fum_2_act`,
`fum_2_pas`,
`fum_2_drog`,
`fum_2_alcohol`,
`fum_2_violencia`,
`fum_3_act`,
`fum_3_pas`,
`fum_3_drog`,
`fum_3_alcohol`,
`fum_3_violencia`,
`ex_mamas`,
`ex_odon`,
`tetano1`,
`tetano2`,
`tetano3`,
`cervix_1`,
`cervix_2`,
`cervix_3`,
`rh_grupo`,
`fh_factor`,
`rh_glubo`,
`rh_inmu`,
`toxo_1`,
`toxo_2`,
`toxo_3`,
`vih_1`,
`enfinf1`,
`enfinf2`,
`enfinf3`,
`enfinf4`,
`enfinf5`,
`cong_1`,
`cong_2`,
`cong_3`,
`cong_4`,
`cong_5`,
`cong_6`,
`cong_7`,
`cong_8`,
`cong_9`,
`cong_10`,
`cong_11`,
`cong_12`,
`cong_13`,
`cong_14`,
`cong_15`,
`cong_16`,
`cong_17`,
`cong_18`,
`cong_19`,
`cong_20`,
`cong_21`

) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['id_historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['embarazo_1'] . "' ,
'" . $_REQUEST['embarazo_2'] . "' ,
'" . $_REQUEST['embarazo_3'] . "' ,
'" . $_REQUEST['embarazo_4'] . "' ,
'" . $_REQUEST['embarazo_5'] . "' ,
'" . $_REQUEST['embarazo_6'] . "' ,
'" . $_REQUEST['embarazo_7'] . "' ,
'" . $_REQUEST['embarazo_8'] . "' ,
'" . $_REQUEST['embarazo_9'] . "' ,
'" . $_REQUEST['embarazo_10'] . "' ,
'" . $_REQUEST['embarazo_11'] . "' ,
'" . $_REQUEST['embarazo_12'] . "' ,
'" . $_REQUEST['embarazo_13'] . "' ,
'" . $_REQUEST['embarazo_14'] . "' ,
'" . $_REQUEST['eptopico'] . "' ,
'" . $_REQUEST['gemelos'] . "' ,
'" . $_REQUEST['ultimo25'] . "' ,
'" . $_REQUEST['normal40'] . "' ,
'" . $_REQUEST['ges_peso'] . "' ,
'" . $_REQUEST['ges_talla'] . "' ,
'" . $_REQUEST['fpp'] . "' ,
'" . $_REQUEST['ges__fum'] . "' ,
'" . $_REQUEST['eg_fum'] . "' ,
'" . $_REQUEST['eg_eco'] . "' ,
'" . $_REQUEST['antirubeola_1'] . "' ,
'" . $_REQUEST['fum_1_act'] . "' ,
'" . $_REQUEST['fum_1_pas'] . "' ,
'" . $_REQUEST['fum_1_drog'] . "' ,
'" . $_REQUEST['fum_1_alcohol'] . "' ,
'" . $_REQUEST['fum_1_violencia'] . "' ,
'" . $_REQUEST['fum_2_act'] . "' ,
'" . $_REQUEST['fum_2_pas'] . "' ,
'" . $_REQUEST['fum_2_drog'] . "' ,
'" . $_REQUEST['fum_2_alcohol'] . "' ,
'" . $_REQUEST['fum_2_violencia'] . "' ,
'" . $_REQUEST['fum_3_act'] . "' ,
'" . $_REQUEST['fum_3_pas'] . "' ,
'" . $_REQUEST['fum_3_drog'] . "' ,
'" . $_REQUEST['fum_3_alcohol'] . "' ,
'" . $_REQUEST['fum_3_violencia'] . "' ,
'" . $_REQUEST['ex_mamas'] . "' ,
'" . $_REQUEST['ex_odon'] . "' ,
'" . $_REQUEST['tetano1'] . "' ,
'" . $_REQUEST['tetano2'] . "' ,
'" . $_REQUEST['tetano3'] . "' ,
'" . $_REQUEST['cervix_1'] . "' ,
'" . $_REQUEST['cervix_2'] . "' ,
'" . $_REQUEST['cervix_3'] . "' ,
'" . $_REQUEST['rh_grupo'] . "' ,
'" . $_REQUEST['fh_factor'] . "' ,
'" . $_REQUEST['rh_glubo'] . "' ,
'" . $_REQUEST['rh_inmu'] . "' ,
'" . $_REQUEST['toxo_1'] . "' ,
'" . $_REQUEST['toxo_2'] . "' ,
'" . $_REQUEST['toxo_3'] . "' ,
'" . $_REQUEST['vih_1'] . "',
'" . $_REQUEST['enfinf1'] . "',
'" . $_REQUEST['enfinf2'] . "',
'" . $_REQUEST['enfinf3'] . "',
'" . $_REQUEST['enfinf4'] . "',
'" . $_REQUEST['enfinf5'] . "',
'" . $_REQUEST['cong_1'] . "',
'" . $_REQUEST['cong_2'] . "',
'" . $_REQUEST['cong_3'] . "',
'" . $_REQUEST['cong_4'] . "',
'" . $_REQUEST['cong_5'] . "',
'" . $_REQUEST['cong_6'] . "',
'" . $_REQUEST['cong_7'] . "',
'" . $_REQUEST['cong_8'] . "',
'" . $_REQUEST['cong_9'] . "',
'" . $_REQUEST['cong_10'] . "',
'" . $_REQUEST['cong_11'] . "',
'" . $_REQUEST['cong_12'] . "',
'" . $_REQUEST['cong_13'] . "',
'" . $_REQUEST['cong_14'] . "',
'" . $_REQUEST['cong_15'] . "',
'" . $_REQUEST['cong_16'] . "',
'" . $_REQUEST['cong_17'] . "',
'" . $_REQUEST['cong_18'] . "',
'" . $_REQUEST['cong_19'] . "',
'" . $_REQUEST['cong_20'] . "',
'" . $_REQUEST['cong_21'] . "'


) ";
//echo "$sql"; exit;

    } else if ($_REQUEST['id_hc_embarazo'] != '') {

        $sql = "UPDATE hc_embarazo set
`id_usuario` =  '" . $_REQUEST['id_usuario'] . "' ,
`id_historia` =  '" . $_REQUEST['id_historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ,
`id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ,
`id_cita` = '" . $_REQUEST['id_cita'] . "' ,
`embarazo_1` = '" . $_REQUEST['embarazo_1'] . "' ,
`embarazo_2` = '" . $_REQUEST['embarazo_2'] . "' ,
`embarazo_3` = '" . $_REQUEST['embarazo_3'] . "' ,
`embarazo_4` = '" . $_REQUEST['embarazo_4'] . "' ,
`embarazo_5` = '" . $_REQUEST['embarazo_5'] . "' ,
`embarazo_6` = '" . $_REQUEST['embarazo_6'] . "' ,
`embarazo_7` = '" . $_REQUEST['embarazo_7'] . "' ,
`embarazo_8` = '" . $_REQUEST['embarazo_8'] . "' ,
`embarazo_9` = '" . $_REQUEST['embarazo_9'] . "' ,
`embarazo_10` = '" . $_REQUEST['embarazo_10'] . "' ,
`embarazo_11` = '" . $_REQUEST['embarazo_11'] . "' ,
`embarazo_12` = '" . $_REQUEST['embarazo_12'] . "' ,
`embarazo_13` = '" . $_REQUEST['embarazo_13'] . "' ,
`embarazo_14` = '" . $_REQUEST['embarazo_14'] . "' ,
`eptopico` = '" . $_REQUEST['eptopico'] . "' ,
`gemelos` = '" . $_REQUEST['gemelos'] . "' ,
`ultimo25` = '" . $_REQUEST['ultimo25'] . "' ,
`normal40` = '" . $_REQUEST['normal40'] . "' ,
`ges_peso` = '" . $_REQUEST['ges_peso'] . "' ,
`ges_talla` = '" . $_REQUEST['ges_talla'] . "' ,
`fpp` = '" . $_REQUEST['fpp'] . "' ,
`ges__fum` = '" . $_REQUEST['ges__fum'] . "' ,
`eg_fum` = '" . $_REQUEST['eg_fum'] . "' ,
`eg_eco` = '" . $_REQUEST['eg_eco'] . "' ,
`antirubeola_1` = '" . $_REQUEST['antirubeola_1'] . "' ,
`fum_1_act` = '" . $_REQUEST['fum_1_act'] . "' ,
`fum_1_pas` = '" . $_REQUEST['fum_1_pas'] . "' ,
`fum_1_drog` = '" . $_REQUEST['fum_1_drog'] . "' ,
`fum_1_alcohol` = '" . $_REQUEST['fum_1_alcohol'] . "' ,
`fum_1_violencia` = '" . $_REQUEST['fum_1_violencia'] . "' ,
`fum_2_act` = '" . $_REQUEST['fum_2_act'] . "' ,
`fum_2_pas` = '" . $_REQUEST['fum_2_pas'] . "' ,
`fum_2_drog` = '" . $_REQUEST['fum_2_drog'] . "' ,
`fum_2_alcohol` = '" . $_REQUEST['fum_2_alcohol'] . "' ,
`fum_2_violencia` = '" . $_REQUEST['fum_2_violencia'] . "' ,
`fum_3_act` = '" . $_REQUEST['fum_3_act'] . "' ,
`fum_3_pas` = '" . $_REQUEST['fum_3_pas'] . "' ,
`fum_3_drog` = '" . $_REQUEST['fum_3_drog'] . "' ,
`fum_3_alcohol` = '" . $_REQUEST['fum_3_alcohol'] . "' ,
`fum_3_violencia` = '" . $_REQUEST['fum_3_violencia'] . "' ,
`ex_mamas` = '" . $_REQUEST['ex_mamas'] . "' ,
`ex_odon` = '" . $_REQUEST['ex_odon'] . "' ,
`tetano1` = '" . $_REQUEST['tetano1'] . "' ,
`tetano2` = '" . $_REQUEST['tetano2'] . "' ,
`tetano3` = '" . $_REQUEST['tetano3'] . "' ,
`cervix_1` = '" . $_REQUEST['cervix_1'] . "' ,
`cervix_2` = '" . $_REQUEST['cervix_2'] . "' ,
`cervix_3` = '" . $_REQUEST['cervix_3'] . "' ,
`rh_grupo` = '" . $_REQUEST['rh_grupo'] . "' ,
`fh_factor` = '" . $_REQUEST['fh_factor'] . "' ,
`rh_glubo` = '" . $_REQUEST['rh_glubo'] . "' ,
`rh_inmu` = '" . $_REQUEST['rh_inmu'] . "' ,
`toxo_1` = '" . $_REQUEST['toxo_1'] . "' ,
`toxo_2` = '" . $_REQUEST['toxo_2'] . "' ,
`toxo_3` = '" . $_REQUEST['toxo_3'] . "' ,
`vih_1` = '" . $_REQUEST['vih_1'] . "' ,
`enfinf1` = '" . $_REQUEST['enfinf1'] . "',
`enfinf2` = '" . $_REQUEST['enfinf2'] . "',
`enfinf3` = '" . $_REQUEST['enfinf3'] . "',
`enfinf4` = '" . $_REQUEST['enfinf4'] . "',
`enfinf5` = '" . $_REQUEST['enfinf5'] . "',
`cong_1` = '" . $_REQUEST['cong_1'] . "',
`cong_2` = '" . $_REQUEST['cong_2'] . "',
`cong_3` = '" . $_REQUEST['cong_3'] . "',
`cong_4` = '" . $_REQUEST['cong_4'] . "',
`cong_5` = '" . $_REQUEST['cong_5'] . "',
`cong_6` = '" . $_REQUEST['cong_6'] . "',
`cong_7` = '" . $_REQUEST['cong_7'] . "',
`cong_8` = '" . $_REQUEST['cong_8'] . "',
`cong_9` = '" . $_REQUEST['cong_9'] . "',
`cong_10` = '" . $_REQUEST['cong_10'] . "',
`cong_11` = '" . $_REQUEST['cong_11'] . "',
`cong_12` = '" . $_REQUEST['cong_12'] . "',
`cong_13` = '" . $_REQUEST['cong_13'] . "',
`cong_14` = '" . $_REQUEST['cong_14'] . "',
`cong_15` = '" . $_REQUEST['cong_15'] . "',
`cong_16` = '" . $_REQUEST['cong_16'] . "',
`cong_17` = '" . $_REQUEST['cong_17'] . "',
`cong_18` = '" . $_REQUEST['cong_18'] . "',
`cong_19` = '" . $_REQUEST['cong_19'] . "',
`cong_20` = '" . $_REQUEST['cong_20'] . "',
`cong_21` = '" . $_REQUEST['cong_21'] . "' WHERE `id_hc_embarazo` = '" . $_REQUEST['id_hc_embarazo'] . "' ;";

    }

    $conexion->EjecutarQuery($sql);
}
$id_hc_embarazo = 'new';
$sql            = "SELECT * from hc_embarazo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result         = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_hc_embarazo  = $row['id_hc_embarazo'];
    $id_usuario      = $row['id_usuario'];
    $id_historia     = $row['id_historia'];
    $id_proceso      = $row['id_proceso'];
    $id_vinicial     = $row['id_vinicial'];
    $id_revaloracion = $row['id_revaloracion'];
    $id_cita         = $row['id_cita'];

    $embarazo_1 = $row['embarazo_1'];
    if ($embarazo_1 == "") {$embarazo_1 = "NO REFIERE";}
    $embarazo_2 = $row['embarazo_2'];
    if ($embarazo_2 == "") {$embarazo_2 = "NO REFIERE";}
    $embarazo_3 = $row['embarazo_3'];
    if ($embarazo_3 == "") {$embarazo_3 = "NO REFIERE";}
    $embarazo_4 = $row['embarazo_4'];
    if ($embarazo_4 == "") {$embarazo_4 = "NO REFIERE";}
    $embarazo_5 = $row['embarazo_5'];
    if ($embarazo_5 == "") {$embarazo_5 = "NO REFIERE";}
    $embarazo_6 = $row['embarazo_6'];
    if ($embarazo_6 == "") {$embarazo_6 = "NO REFIERE";}
    $embarazo_7 = $row['embarazo_7'];
    if ($embarazo_7 == "") {$embarazo_7 = "NO REFIERE";}
    $embarazo_8      = $row['embarazo_8'];
    $embarazo_9      = $row['embarazo_9'];
    $embarazo_10     = $row['embarazo_10'];
    $embarazo_11     = $row['embarazo_11'];
    $embarazo_12     = $row['embarazo_12'];
    $embarazo_13     = $row['embarazo_13'];
    $embarazo_14     = $row['embarazo_14'];
    $eptopico        = $row['eptopico'];
    $gemelos         = $row['gemelos'];
    $ultimo25        = $row['ultimo25'];
    $normal40        = $row['normal40'];
    $ges_peso        = $row['ges_peso'];
    $ges_talla       = $row['ges_talla'];
    $fpp             = $row['fpp'];
    $ges__fum        = $row['ges__fum'];
    $eg_fum          = $row['eg_fum'];
    $eg_eco          = $row['eg_eco'];
    $antirubeola_1   = $row['antirubeola_1'];
    $fum_1_act       = $row['fum_1_act'];
    $fum_1_act       = $row['fum_1_act'];
    $fum_1_pas       = $row['fum_1_pas'];
    $fum_1_drog      = $row['fum_1_drog'];
    $fum_1_alcohol   = $row['fum_1_alcohol'];
    $fum_1_violencia = $row['fum_1_violencia'];
    $fum_2_act       = $row['fum_2_act'];
    $fum_2_pas       = $row['fum_2_pas'];
    $fum_2_drog      = $row['fum_2_drog'];
    $fum_2_alcohol   = $row['fum_2_alcohol'];
    $fum_2_violencia = $row['fum_2_violencia'];
    $fum_3_act       = $row['fum_3_act'];
    $fum_3_pas       = $row['fum_3_pas'];
    $fum_3_drog      = $row['fum_3_drog'];
    $fum_3_alcohol   = $row['fum_3_alcohol'];
    $fum_3_violencia = $row['fum_3_violencia'];
    $ex_mamas        = $row['ex_mamas'];
    $ex_odon         = $row['ex_odon'];
    $tetano1         = $row['tetano1'];
    $tetano2         = $row['tetano2'];
    $tetano3         = $row['tetano3'];
    $cervix_1        = $row['cervix_1'];
    $cervix_2        = $row['cervix_2'];
    $cervix_3        = $row['cervix_3'];
    $rh_grupo        = $row['rh_grupo'];
    $fh_factor       = $row['fh_factor'];
    $rh_glubo        = $row['rh_glubo'];
    $rh_inmu         = $row['rh_inmu'];
    $toxo_1          = $row['toxo_1'];
    $toxo_2          = $row['toxo_2'];
    $toxo_3          = $row['toxo_3'];
    $vih_1           = $row['vih_1'];
    $enfinf1         = $row['enfinf1'];
    $enfinf2         = $row['enfinf2'];
    $enfinf3         = $row['enfinf3'];
    $enfinf4         = $row['enfinf4'];
    $enfinf5         = $row['enfinf5'];
    $cong_1          = $row['cong_1'];
    $cong_2          = $row['cong_2'];
    $cong_3          = $row['cong_3'];
    $cong_4          = $row['cong_4'];
    $cong_5          = $row['cong_5'];
    $cong_6          = $row['cong_6'];
    $cong_7          = $row['cong_7'];
    $cong_8          = $row['cong_8'];
    $cong_9          = $row['cong_9'];
    $cong_10         = $row['cong_10'];
    $cong_11         = $row['cong_11'];
    $cong_12         = $row['cong_12'];
    $cong_13         = $row['cong_13'];
    $cong_14         = $row['cong_14'];
    $cong_15         = $row['cong_15'];
    $cong_16         = $row['cong_16'];
    $cong_17         = $row['cong_17'];
    $cong_18         = $row['cong_18'];
    $cong_19         = $row['cong_19'];
    $cong_20         = $row['cong_20'];
    $cong_21         = $row['cong_21'];
    break;
}

$sql    = "SELECT * FROM hc_embarazo ORDER BY id_hc_embarazo DESC LIMIT 1";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {

    $embarazo_1 = $row['embarazo_1'];
    if ($embarazo_1 == "") {$embarazo_1 = "NO REFIERE";}
    $embarazo_2 = $row['embarazo_2'];
    if ($embarazo_2 == "") {$embarazo_2 = "NO REFIERE";}
    $embarazo_3 = $row['embarazo_3'];
    if ($embarazo_3 == "") {$embarazo_3 = "NO REFIERE";}
    $embarazo_4 = $row['embarazo_4'];
    if ($embarazo_4 == "") {$embarazo_4 = "NO REFIERE";}
    $embarazo_5 = $row['embarazo_5'];
    if ($embarazo_5 == "") {$embarazo_5 = "NO REFIERE";}
    $embarazo_6 = $row['embarazo_6'];
    if ($embarazo_6 == "") {$embarazo_6 = "NO REFIERE";}
    $embarazo_7 = $row['embarazo_7'];
    if ($embarazo_7 == "") {$embarazo_7 = "NO REFIERE";}
    $embarazo_8      = $row['embarazo_8'];
    $embarazo_9      = $row['embarazo_9'];
    $embarazo_10     = $row['embarazo_10'];
    $embarazo_11     = $row['embarazo_11'];
    $embarazo_12     = $row['embarazo_12'];
    $embarazo_13     = $row['embarazo_13'];
    $embarazo_14     = $row['embarazo_14'];
    $eptopico        = $row['eptopico'];
    $gemelos         = $row['gemelos'];
    $ultimo25        = $row['ultimo25'];
    $normal40        = $row['normal40'];
    $ges_peso        = $row['ges_peso'];
    $ges_talla       = $row['ges_talla'];
    $fpp             = $row['fpp'];
    $ges__fum        = $row['ges__fum'];
    $eg_fum          = $row['eg_fum'];
    $eg_eco          = $row['eg_eco'];
    $antirubeola_1   = $row['antirubeola_1'];
    $fum_1_act       = $row['fum_1_act'];
    $fum_1_pas       = $row['fum_1_pas'];
    $fum_1_drog      = $row['fum_1_drog'];
    $fum_1_alcohol   = $row['fum_1_alcohol'];
    $fum_1_violencia = $row['fum_1_violencia'];
    $fum_2_act       = $row['fum_2_act'];
    $fum_2_pas       = $row['fum_2_pas'];
    $fum_2_drog      = $row['fum_2_drog'];
    $fum_2_alcohol   = $row['fum_2_alcohol'];
    $fum_2_violencia = $row['fum_2_violencia'];
    $fum_3_act       = $row['fum_3_act'];
    $fum_3_pas       = $row['fum_3_pas'];
    $fum_3_drog      = $row['fum_3_drog'];
    $fum_3_alcohol   = $row['fum_3_alcohol'];
    $fum_3_violencia = $row['fum_3_violencia'];
    $ex_mamas        = $row['ex_mamas'];
    $ex_odon         = $row['ex_odon'];
    $tetano1         = $row['tetano1'];
    $tetano2         = $row['tetano2'];
    $tetano3         = $row['tetano3'];
    $cervix_1        = $row['cervix_1'];
    $cervix_2        = $row['cervix_2'];
    $cervix_3        = $row['cervix_3'];
    $rh_grupo        = $row['rh_grupo'];
    $fh_factor       = $row['fh_factor'];
    $rh_glubo        = $row['rh_glubo'];
    $rh_inmu         = $row['rh_inmu'];
    $toxo_1          = $row['toxo_1'];
    $toxo_2          = $row['toxo_2'];
    $toxo_3          = $row['toxo_3'];
    $vih_1           = $row['vih_1'];
    $enfinf1         = $row['enfinf1'];
    $enfinf2         = $row['enfinf2'];
    $enfinf3         = $row['enfinf3'];
    $enfinf4         = $row['enfinf4'];
    $enfinf5         = $row['enfinf5'];
    $cong_1          = $row['cong_1'];
    $cong_2          = $row['cong_2'];
    $cong_3          = $row['cong_3'];
    $cong_4          = $row['cong_4'];
    $cong_5          = $row['cong_5'];
    $cong_6          = $row['cong_6'];
    $cong_7          = $row['cong_7'];
    $cong_8          = $row['cong_8'];
    $cong_9          = $row['cong_9'];
    $cong_10         = $row['cong_10'];
    $cong_11         = $row['cong_11'];
    $cong_12         = $row['cong_12'];
    $cong_13         = $row['cong_13'];

    break;}

?>

<script>

$(function(){

$("#close-hc_embarazo").click(function(){
$("#open-hc_embarazo").show();
$(this).hide();
$("#content-hc_embarazo").hide('slow');
});

$("#open-hc_embarazo").click(function(){
$("#close-hc_embarazo").show();
$(this).hide();
$("#content-hc_embarazo").show('slow');
});

});

</script>

<fieldset id="hc_embarazo">
<legend align="left"> <div class="arrow-c" id="close-hc_embarazo"></div> <div class="arrow-o" id="open-hc_embarazo" ></div> <font>Valoracion Embarazo</font></legend>
<div id="content-hc_embarazo">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_hc_embarazo" id="guardar_hc_embarazo" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
<form id="form_hc_embarazo" name="form_hc_embarazo" action="<?php echo @$action_form_hc_embarazo ?>#hc_embarazo" method="post" onSubmit="validarfor();">

<input type="hidden" id="id_hc_embarazo" name="id_hc_embarazo" value="<?php echo @$id_hc_embarazo ?>" />


<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">
   <tr height="19">
    <td colspan="4" height="19"><div align="center">
     ANTECEDENTES    PERSONALES<BR><BR>
    </div></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Quirurgicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="embarazo_1" name="embarazo_1" value="<?php echo $embarazo_1; ?>" /> </td>
    <td width="183">Patológicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="embarazo_2" name="embarazo_2" value="<?php echo @$embarazo_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Toxicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="embarazo_3" name="embarazo_3" value="<?php echo @$embarazo_3; ?>" /></td>
    <td width="183">Alérgicos    y Farmacolólogicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="embarazo_4" name="embarazo_4" value="<?php echo @$embarazo_4; ?>" /></td>
  </tr>

  <tr height="19">
    <td height="19" width="168">Traumatologicos</td>
    <td width="168"><input type="text" class="input_txt valid" id="embarazo_5" name="embarazo_5" value="<?php echo @$embarazo_5; ?>" /></td>
    <td width="183">Ginecologicos</td>
    <td width="216"><input type="text" class="input_txt valid" id="embarazo_6" name="embarazo_6" value="<?php echo @$embarazo_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="168">Otro</td>
    <td width="168"><input type="text" class="input_txt valid" id="embarazo_7" name="embarazo_7" value="<?php echo @$embarazo_7; ?>" /></td>
    <td width="183">&nbsp;</td>
    <td width="216">&nbsp;</td>
  </tr>
</table>

<BR>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr>
    <td colspan="4" ><p align="center">ANTECEDENTES    GINECOLÓGICOS</td>
  </tr>
  <tr>
    <td colspan="2" >Edad Menarquia</td>
    <td colspan="12" >
      <input type="text" class="" id="embarazo_8" name="embarazo_8" value="<?php echo @$embarazo_8; ?>" />    </td>

  </tr>
  <tr>
    <td colspan="2" ><div align="left">Patrón Ciclos Menstruales   </div></td>
    <td colspan="2" >Regular<input type="radio" name="embarazo_9" id="embarazo_9" value="0" <?php if ($embarazo_9 == 0) {echo 'checked="checked"';}?>><?php if ($embarazo_9 == 0) {$embarazo_9 = "REGULAR";}?>
                     Irregular<input type="radio" name="embarazo_9" id="embarazo_9" value="1" <?php if ($embarazo_9 == 1) {echo 'checked="checked"';}?>><?php if ($embarazo_9 == 1) {$embarazo_9 = "IRREGULAR";}?>
      </td>
  </tr>
  <tr>
    <td colspan="2" >Fecha    Ultimas 2 Menstruaciones</td>
   <td colspan="2" >
   <input type="text" class="" id="embarazo_10" name="embarazo_10" value="<?php echo @$embarazo_10; ?>" /></td>
  </tr>
    <tr>
    <td colspan="2" >Intervalo intergenecicos</td>
   <td colspan="2" >
   <input type="text" class="" id="embarazo_11" name="embarazo_11" value="<?php echo @$embarazo_11; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" >Métodos    Anticonceptivos Utilizados</td>
    <td colspan="2" >
      <input type="text" class="" id="embarazo_12" name="embarazo_12" value="<?php echo @$embarazo_12; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2">Fecha    Ultimo Uso Métodos Anticonceptivos</td>
    <td colspan="2" >
      <input type="text" class="" id="embarazo_13" name="embarazo_13" value="<?php echo @$embarazo_13; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2">Antecedente    O Presencia Flujo Vaginal</td>
    <td colspan="2" >
      <input type="text" class="" id="embarazo_14" name="embarazo_14" value="<?php echo @$embarazo_14; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2">Tratamiento    Infertilidad </td>
    <td colspan="2" >No<input type="radio" name="eptopico" id="eptopico" value="0" <?php if ($eptopico == 0) {echo 'checked="checked"';}?>><?php if ($eptopico == 0) {$eptopico = "NO";}?>
                     Si<input type="radio" name="eptopico" id="eptopico" value="1" <?php if ($eptopico == 1) {echo 'checked="checked"';}?>><?php if ($eptopico == 1) {$eptopico = "SI";}?>
     </td>
  </tr>
  <tr>
    <td colspan="2">Infección    De Transmisión Sexual</td>
    <td colspan="2" >
      <input type="text" class="" id="gemelos" name="gemelos" value="<?php echo @$gemelos; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2">Ultima Fecha    De Tamización De Cáncer De Cuello Uterino</td>
    <td colspan="2" >
      <div align="left">
        <input type="text" class="" id="ultimo25" name="ultimo25" value="<?php echo @$ultimo25; ?>" />
      </div></td>
  </tr>
</table>

<BR>
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr>
    <td colspan="2" ><p align="center">ANTECEDENTE    OBSTETRICOS</td>
  </tr>
    <tr>
    <td width="2" >Total gestación</td>
   <td width="2" >
   <input type="text" class="" id="normal40" name="normal40" size="8" value="<?php echo @$normal40; ?>" /></td>
  </tr>
    <tr>
    <td width="354" >Abortos</td>
    <td width="168">NO<input  type="radio" name="ges_peso" id="ges_peso" value="0"  <?php if ($ges_peso == 0) {echo 'checked="checked"';}?>><?php if ($ges_peso == 0) {$ges_peso = "NO";}?>
                     SI<input  type="radio" name="ges_peso" id="ges_peso" value="1" <?php if ($ges_peso == 1) {echo 'checked="checked"';}?>><?php if ($ges_peso == 1) {$ges_peso = "SI";}?>
     </td>
    </tr>
    <tr>
    <td width="354" >Ectopicos</td>
       <td width="168" >NO<input type="radio" name="ges_talla" id="ges_talla" value="0"  name="ges_talla"  <?php if ($ges_talla == 0) {echo 'checked="checked"';}?>><?php if ($ges_talla == 0) {$ges_talla = "NO";}?>
                           SI<input type="radio" name="ges_talla" id="ges_talla" value="1"  <?php if ($ges_talla == 1) {echo 'checked="checked"';}?>><?php if ($ges_talla == 1) {$ges_talla = "SI";}?>
        </td>
    </tr>
    <tr>
    <td width="2" >Numero de partos</td>
   <td width="2" >
   <input type="text" class="" id="fpp" name="fpp"  size="8" value="<?php echo @$fpp; ?>" />    </td>
  </tr>
   <tr>
    <td width="2" >Fecha de ultimo parto</td>
   <td width="2" >
   <input type="text" class="" id="ges__fum" name="ges__fum" size="8" value="<?php echo @$ges__fum; ?>" /></td>
  </tr>
    <tr>
    <td width="354" >Parto</td>
    <td width="168" ><select name="eg_fum" size="1" id="eg_fum" value="<?php echo @$eg_fum; ?>">
                                <option value="0" <?=(($row['eg_fum'] == "0") ? "selected" : "");?><?php if ($eg_fum == 0) {$eg_fum = "UNICO";}?>>Unico</option>
                                <option value="1" <?=(($row['eg_fum'] == "1") ? "selected" : "");?><?php if ($eg_fum == 1) {$eg_fum = "MULTIPLE";}?>>Multiple</option>
                            </select></td>
              <td width="168" ><select name="eg_eco" size="1" id="eg_eco" value="<?php echo @$eg_eco; ?>">
                                <option value="0" <?=(($row['eg_eco'] == "0") ? "selected" : "");?><?php if ($eg_eco == 0) {$eg_eco = "PREMATURO A TERMINO";}?> >Prematuro a termino</option>
                                <option value="1" <?=(($row['eg_eco'] == "1") ? "selected" : "");?><?php if ($eg_eco == 1) {$eg_eco = "PROLONGADO";}?>>Prolongado</option>
                            </select></td>
              <td width="168" ><select name="antirubeola_1" size="1" id="antirubeola_1" value="<?php echo @$antirubeola_1; ?>">
                                <option value="0" <?=(($row['antirubeola_1'] == "0") ? "selected" : "");?><?php if ($antirubeola_1 == 0) {$antirubeola_1 = "VAGINAL";}?> >Vaginal</option>
                                <option value="1" <?=(($row['antirubeola_1'] == "1") ? "selected" : "");?><?php if ($antirubeola_1 == 1) {$antirubeola_1 = "CESAREA";}?>>Cesarea</option>
                            </select></td>
    </tr>
   <tr>
    <td width="354" >Sindrome de HELLP</td>
        <td width="168" >NO<input type="radio" name="fum_1_act" id="fum_1_act" value="0"  <?php if ($fum_1_act == 0) {echo 'checked="checked"';}?>><?php if ($fum_1_act == 0) {$fum_1_act = "NO";}?>
           SI<input type="radio" name="fum_1_act" id="fum_1_act" value="1" <?php if ($fum_1_act == 1) {echo 'checked="checked"';}?>><?php if ($fum_1_act == 1) {$fum_1_act = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354">Intervalo Intergenesicos</td>
     <td width="168" >NO<input type="radio" name="fum_1_pas" id="fum_1_pas" value="0" <?php if ($fum_1_pas == 0) {echo 'checked="checked"';}?>><?php if ($fum_1_pas == 0) {$fum_1_pas = "NO";}?>
           SI<input type="radio" name="fum_1_pas" id="fum_1_pas" value="1" <?php if ($fum_1_pas == 1) {echo 'checked="checked"';}?>><?php if ($fum_1_pas == 1) {$fum_1_pas = "SI";}?>
      </td>
    </tr>
    <tr>
    <td width="2" >Numero de nacidos o muertos</td>
   <td width="2" >
   <input type="text" class="" id="fum_1_drog" name="fum_1_drog"  size="8" value="<?php echo @$fum_1_drog; ?>" />    </td>
  </tr>
    <tr>
    <td width="2" >Peso al nacer</td>
   <td width="2" >
   <input type="text" class="" id="fum_1_alcohol" name="fum_1_alcohol"  size="8" value="<?php echo @$fum_1_alcohol; ?>" />    </td>
  </tr>
  <tr>
    <td width="354" >Molas</td>
        <td width="168" >NO<input type="radio" name="fum_1_violencia" id="fum_1_violencia" value="0"  <?php if ($fum_1_violencia == 0) {echo 'checked="checked"';}?>><?php if ($fum_1_violencia == 0) {$fum_1_violencia = "NO";}?>
           SI<input type="radio" name="fum_1_violencia" id="fum_1_violencia" value="1" <?php if ($fum_1_violencia == 1) {echo 'checked="checked"';}?>><?php if ($fum_1_violencia == 1) {$fum_1_violencia = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Placenta Previa</td>
    <td width="168" >NO<input type="radio" name="fum_2_act" id="fum_2_act" value="0"  <?php if ($fum_2_act == 0) {echo 'checked="checked"';}?>><?php if ($fum_2_act == 0) {$fum_2_act = "NO";}?>
           SI<input type="radio" name="fum_2_act" id="fum_2_act" value="1" <?php if ($fum_2_act == 1) {echo 'checked="checked"';}?>><?php if ($fum_2_act == 1) {$fum_2_act = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Abrupto</td>
      <td width="168" >NO<input type="radio" name="fum_2_pas" id="fum_2_pas" value="0" <?php if ($fum_2_pas == 0) {echo 'checked="checked"';}?>><?php if ($fum_2_pas == 0) {$fum_2_pas = "NO";}?>
           SI<input type="radio" name="fum_2_pas" id="fum_2_pas" value="1" <?php if ($fum_2_pas == 1) {echo 'checked="checked"';}?>><?php if ($fum_2_pas == 1) {$fum_2_pas = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Ruptura Prematura Membrana</td>
     <td width="168" >NO<input type="radio" name="fum_2_drog" id="fum_2_drog" value="0" <?php if ($fum_2_drog == 0) {echo 'checked="checked"';}?>><?php if ($fum_2_drog == 0) {$fum_2_drog = "NO";}?>
           SI<input type="radio" name="fum_2_drog" id="fum_2_drog" value="1" <?php if ($fum_2_drog == 1) {echo 'checked="checked"';}?>><?php if ($fum_2_drog == 1) {$fum_2_drog = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Polihidramnios</td>
    <td width="168" >NO<input type="radio" name="fum_2_alcohol" id="fum_2_alcohol" value="0" <?php if ($fum_2_alcohol == 0) {echo 'checked="checked"';}?>><?php if ($fum_2_alcohol == 0) {$fum_2_alcohol = "NO";}?>
           SI<input type="radio" name="fum_2_alcohol" id="fum_2_alcohol" value="1" <?php if ($fum_2_alcohol == 1) {echo 'checked="checked"';}?>><?php if ($fum_2_alcohol == 1) {$fum_2_alcohol = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Oligoamnios</td>
     <td width="168">NO<input type="radio" name="fum_2_violencia" id="fum_2_violencia" value="0" <?php if ($fum_2_violencia == 0) {echo 'checked="checked"';}?>><?php if ($fum_2_violencia == 0) {$fum_2_violencia = "NO";}?>
           SI<input type="radio" name="fum_2_violencia" id="fum_2_violencia" value="1" <?php if ($fum_2_violencia == 1) {echo 'checked="checked"';}?>><?php if ($fum_2_violencia == 1) {$fum_2_violencia = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Retardo En Crecimiento Intrauterino</td>
    <td width="168" >NO<input type="radio" name="fum_3_act" id="fum_3_act" value="0" <?php if ($fum_3_act == 0) {echo 'checked="checked"';}?>><?php if ($fum_3_act == 0) {$fum_3_act = "NO";}?>
           SI<input type="radio" name="fum_3_act" id="fum_3_act" value="1" <?php if ($fum_3_act == 1) {echo 'checked="checked"';}?>><?php if ($fum_3_act == 1) {$fum_3_act = "SI";}?>
      </td>
  </tr>
  <tr>
    <td width="354" >Retención Placentaria</td>
      <td width="168" >NO<input type="radio" name="fum_3_pas" id="fum_3_pas" value="0" <?php if ($fum_3_pas == 0) {echo 'checked="checked"';}?>><?php if ($fum_3_pas == 0) {$fum_3_pas = "NO";}?>
           SI<input type="radio" name="fum_3_pas" id="fum_3_pas" value="1" <?php if ($fum_3_pas == 1) {echo 'checked="checked"';}?>><?php if ($fum_3_pas == 1) {$fum_3_pas = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Infección En El Posparto</td>
        <td width="168" >NO<input type="radio" name="fum_3_drog" id="fum_3_drog" value="0" <?php if ($fum_3_drog == 0) {echo 'checked="checked"';}?>><?php if ($fum_3_drog == 0) {$fum_3_drog = "NO";}?>
           SI<input type="radio" name="fum_3_drog" id="fum_3_drog" value="1" <?php if ($fum_3_drog == 1) {echo 'checked="checked"';}?>><?php if ($fum_3_drog == 1) {$fum_3_drog = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Hemorragia Obstétrica Que Requirió    Trasfusión</td>
         <td width="168" >NO<input type="radio" name="fum_3_alcohol" id="fum_3_alcohol" value="0" <?php if ($fum_3_alcohol == 0) {echo 'checked="checked"';}?>><?php if ($fum_3_alcohol == 0) {$fum_3_alcohol = "NO";}?>
           SI<input type="radio" name="fum_3_alcohol" id="fum_3_alcohol" value="1" <?php if ($fum_3_alcohol == 1) {echo 'checked="checked"';}?>><?php if ($fum_3_alcohol == 1) {$fum_3_alcohol = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354">Preeclampsia</td>
            <td width="168">NO<input type="radio" name="fum_3_violencia" id="fum_3_violencia" value="0" <?php if ($fum_3_violencia == 0) {echo 'checked="checked"';}?>><?php if ($fum_3_violencia == 0) {$fum_3_violencia = "NO";}?>
           SI<input type="radio" name="fum_3_violencia" id="fum_3_violencia" value="1" <?php if ($fum_3_violencia == 1) {echo 'checked="checked"';}?>><?php if ($fum_3_violencia == 1) {$fum_3_violencia = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Eclampsia</td>
        <td width="168">NO<input type="radio" name="ex_mamas" id="ex_mamas" value="0" <?php if ($ex_mamas == 0) {echo 'checked="checked"';}?>><?php if ($ex_mamas == 0) {$ex_mamas = "NO";}?>
           SI<input type="radio" name="ex_mamas" id="ex_mamas" value="1" <?php if ($ex_mamas == 1) {echo 'checked="checked"';}?>><?php if ($ex_mamas == 1) {$ex_mamas = "SI";}?>
      </td>
    </tr>
  <tr>
    <td width="354" >Hijos Con Malformación Congénita</td>
        <td width="168">NO<input type="radio" name="ex_odon" id="ex_odon" value="0" <?php if ($ex_odon == 0) {echo 'checked="checked"';}?>><?php if ($ex_odon == 0) {$ex_odon = "NO";}?>
           SI<input type="radio" name="ex_odon" id="ex_odon" value="1" <?php if ($ex_odon == 1) {echo 'checked="checked"';}?>><?php if ($ex_odon == 1) {$ex_odon = "SI";}?>
     </td>
    </tr>
  <tr>
    <td width="354" >Muerte Perinatal  (S/N)</td>
       <td width="168" >NO<input type="radio" name="tetano1" id="tetano1" value="0" <?php if ($tetano1 == 0) {echo 'checked="checked"';}?>><?php if ($tetano1 == 0) {$tetano1 = "NO";}?>
           SI<input type="radio" name="tetano1" id="tetano1" value="1" <?php if ($tetano1 == 1) {echo 'checked="checked"';}?>><?php if ($tetano1 == 1) {$tetano1 = "SI";}?>
     </td>
    </tr>
  <tr>
    <td width="354" >Muerte Perinatal  (Causa)</td>
    <td width="168" ><input type="text" class="" id="tetano2" name="tetano2" size="8"  value="<?php echo @$tetano2; ?>" /></td>
    </tr>
</table>
 &nbsp;
<table width="745"  border="0" align="center" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="368" colspan="2" ><p align="center">ANTECEDENTES    FAMILIARES</td> <!-- mica -->
  </tr>

  <tr>

    <td width="354" >Hipertensión Arterial Crónica</td>
    <td width="168" ><select name="tetano3" size="1" id="tetano3" onChange="Mostrar(this)" >
                                <option value="0" <?=(($row['tetano3'] == "0") ? "selected" : "");?><?php if ($tetano3 == 0) {$tetano3 = "NO";}?>> No</option>
                                <option value="1" <?=(($row['tetano3'] == "1") ? "selected" : "");?><?php if ($tetano3 == 1) {$tetano3 = "SI";}?>>Si</option>
    <td width="168" ><textarea  style="display:none" id="cervix_1" class="comp" type="text"  name="cervix_1" size="8"><?php echo @$cervix_1; ?></textarea></td>
  </tr>
   <tr>
    <td width="260" >Preeclampsia</td>
    <td width="168" ><select name="cervix_2" size="1" id="cervix_2" value="" onChange="Mostrar1(this)" >
                                <option value="0" <?=(($row['cervix_2'] == "0") ? "selected" : "");?><?php if ($cervix_2 == 0) {$cervix_2 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cervix_2'] == "1") ? "selected" : "");?><?php if ($cervix_2 == 1) {$cervix_2 = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text" id="cervix_3" name="cervix_3" size="8" class="comp"  style="display:none"><?php echo @$cervix_3; ?></textarea></td>
    </tr>
  <tr>
    <td width="260" >Eclampsia</td>
    <td width="168" ><select name="rh_grupo" size="1" id="rh_grupo" value="" onChange="Mostrar2(this)" >
                                <option value="0"  <?=(($row['rh_grupo'] == "0") ? "selected" : "");?><?php if ($rh_grupo == 0) {$rh_grupo = "NO";}?>>No</option>
                                <option value="1" <?=(($row['rh_grupo'] == "1") ? "selected" : "");?><?php if ($rh_grupo == 1) {$rh_grupo = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea  type="text"  id="fh_factor" name="fh_factor" size="8"  class="comp" style="display:none"><?php echo @$fh_factor; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Cardiopatía</td>
    <td width="168" ><select name="rh_glubo" size="1" id="rh_glubo" value="" onChange="Mostrar3(this)" >
                                <option value="0" <?=(($row['rh_glubo'] == "0") ? "selected" : "");?><?php if ($rh_glubo == 0) {$rh_glubo = "NO";}?>>No</option>
                                <option value="1" <?=(($row['rh_glubo'] == "1") ? "selected" : "");?><?php if ($rh_glubo == 1) {$rh_glubo = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text"  id="rh_inmu" name="rh_inmu" size="8"  class="comp" style="display:none"><?php echo @$rh_inmu; ?></textarea></td>
 </tr>
  <tr>
    <td width="260" >Diabetes</td>
   <td width="168" ><select name="toxo_1" size="1" id="toxo_1" value="" onChange="Mostrar4(this)" <?php $sel2 = "";?>>
                                <option value="0" <?=(($row['toxo_1'] == "0") ? "selected" : "");?><?php if ($toxo_1 == 0) {$toxo_1 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['toxo_1'] == "1") ? "selected" : "");?><?php if ($toxo_1 == 1) {$toxo_1 = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text" id="toxo_2" name="toxo_2" size="8" class="comp" style="display:none"><?php echo @$toxo_2; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Enfermedades Metabólicas</td>
   <td width="168" ><select name="toxo_3" size="1" id="toxo_3" value="" onChange="Mostrar5(this)">
                                <option value="0" <?=(($row['toxo_3'] == "0") ? "selected" : "");?><?php if ($toxo_3 == 0) {$toxo_3 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['toxo_3'] == "1") ? "selected" : "");?><?php if ($toxo_3 == 1) {$toxo_3 = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text" id="vih_1" name="vih_1" size="8" class="comp" style="display:none"><?php echo @$vih_1; ?></textarea></td>
  </tr>

  <tr>
    <td width="260" >Enfermedad Autoinmune</td>
 <td width="168" ><select name="enfinf1" size="1" id="enfinf1" value="" onChange="Mostrar6(this)">
                                <option value="0" <?=(($row['enfinf1'] == "0") ? "selected" : "");?><?php if ($enfinf1 == 0) {$enfinf1 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['enfinf1'] == "1") ? "selected" : "");?><?php if ($enfinf1 == 1) {$enfinf1 = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text"  id="enfinf2" name="enfinf2" size="8" class="comp" style="display:none"><?php echo @$enfinf2; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Enfermedad Infecciosa</td>
   <td width="168" ><select name="enfinf3" size="1" id="enfinf3" value="" onChange="Mostrar7(this)">
                                <option value="0" <?=(($row['enfinf3'] == "0") ? "selected" : "");?><?php if ($enfinf3 == 0) {$enfinf3 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['enfinf3'] == "1") ? "selected" : "");?><?php if ($enfinf3 == 1) {$enfinf3 = "SI";}?>>Si</option>
                            </select></td>
    <td width="168" ><textarea type="text"  id="enfinf4" name="enfinf4" size="8" class="comp" style="display:none"><?php echo @$enfinf4; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Congénitas</td>
    <td width="168" ><select name="enfinf5" size="1" id="enfinf5" value="" onChange="Mostrar8(this)">
                                <option value="0"  <?=(($row['enfinf5'] == "0") ? "selected" : "");?><?php if ($enfinf5 == 0) {$enfinf5 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['enfinf5'] == "1") ? "selected" : "");?><?php if ($enfinf5 == 1) {$enfinf5 = "SI";}?>>Si</option>
                            </select></td>
         <td width="168" ><textarea type="text"  id="cong_1" name="cong_1" size="8" class="comp" style="display:none"><?php echo @$cong_1; ?></textarea></td>
  </tr>
  <tr>
     <td width="260" >Epilepsia</td>
          <td width="168" ><select name="cong_2" size="1" id="cong_2" value="" onChange="Mostrar9(this)">
                                <option value="0"  <?=(($row['cong_2'] == "0") ? "selected" : "");?><?php if ($cong_2 == 0) {$cong_2 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_2'] == "1") ? "selected" : "");?><?php if ($cong_2 == 1) {$cong_2 = "SI";}?>>Si</option>
                          </select></td>
           <td width="168" ><textarea type="text"  id="cong_3" name="cong_3" size="8" class="comp"  style="display:none"><?php echo @$cong_3; ?></textarea></td>
    </tr>
  <tr>
    <td width="260" >Trastornos Mentales</td>
 <td width="168" ><select name="cong_4" size="1" id="cong_4" value="" onChange="Mostrar10(this)">
                                <option value="0" <?=(($row['cong_4'] == "0") ? "selected" : "");?><?php if ($cong_4 == 0) {$cong_4 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_4'] == "1") ? "selected" : "");?><?php if ($cong_4 == 1) {$cong_4 = "SI";}?>>Si</option>
                            </select></td>
        <td width="168" ><textarea type="text"  id="cong_5" name="cong_5" size="8" class="comp"  style="display:none"><?php echo @$cong_5; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Gestación Múltiples</td>
  <td width="168" ><select name="cong_6" size="1" id="cong_6" value="" onChange="Mostrar11(this)">
                                <option value="0"  <?=(($row['cong_6'] == "0") ? "selected" : "");?><?php if ($cong_6 == 0) {$cong_6 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_6'] == "1") ? "selected" : "");?><?php if ($cong_6 == 1) {$cong_6 = "SI";}?>>Si</option>
                            </select></td>
         <td width="168" ><textarea type="text"  id="cong_7" name="cong_7" size="8"  class="comp" style="display:none"><?php echo @$cong_7; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Tuberculosis</td>
  <td width="168" ><select name="cong_8" size="1" id="cong_8" value="" onChange="Mostrar12(this)" >
                                <option value="0"  <?=(($row['cong_8'] == "0") ? "selected" : "");?><?php if ($cong_8 == 0) {$cong_8 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_8'] == "1") ? "selected" : "");?><?php if ($cong_8 == 1) {$cong_8 = "SI";}?>>Si</option>
                            </select></td>
        <td width="168" ><textarea type="text"  id="cong_9" name="cong_9" size="8" class="comp" style="display:none"><?php echo @$cong_9; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Neoplasia</td>
 <td width="168" ><select name="cong_10" size="1" id="cong_10" value="" onChange="Mostrar13(this)" >
                                <option value="0"  <?=(($row['cong_10'] == "0") ? "selected" : "");?><?php if ($cong_10 == 0) {$cong_10 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_10'] == "1") ? "selected" : "");?><?php if ($cong_10 == 1) {$cong_10 = "SI";}?>>Si</option>
                            </select></td>
         <td width="168" ><textarea type="text" id="cong_11" name="cong_11" size="8"  class="comp" style="display:none"><?php echo @$cong_11; ?></textarea></td>
  </tr>
  <tr>
    <td width="260" >Otras  ¿Cuál?</td>
  <td width="168" ><select name="cong_12" size="1" id="cong_12" value="<?php echo @$cong_12; ?>" onChange="Mostrar14(this)">
                                <option value="0"  <?=(($row['cong_12'] == "0") ? "selected" : "");?><?php if ($cong_12 == 0) {$cong_12 = "NO";}?>>No</option>
                                <option value="1" <?=(($row['cong_12'] == "1") ? "selected" : "");?><?php if ($cong_12 == 1) {$cong_12 = "SI";}?>>Si</option>
                            </select></td>
         <td width="168" ><textarea type="text"  id="cong_13" name="cong_13" size="8" class="comp" style="display:none" onchange="vacio()" ><?php echo @$cong_13; ?></textarea></td>
  </tr>
</table>
&nbsp;
<table width="745" border="0" align="center" cellpadding="0" cellspacing="0" class="">

  <tr>
    <td width="368" colspan="2" ><p align="center">GESTACION    ACTUAL</td>
  </tr>
  <tr>
    <td width="260" >Semana De Gestación probable</td>
    <td width="108" >
      <input type="text" class="" id="cong_14" name="cong_14" size="13" value="<?php echo @$cong_14; ?>" />
    </td>
  <tr>
    <td width="354" >Edad gestacional probable</td>
    <td width="168" ><select name="cong_15" size="1" id="cong_15" value="<?php echo @$cong_15; ?>">
      <option value="0" <?=(($row['cong_15'] == "0") ? "selected" : "");?><?php if ($cong_15 == 0) {$cong_15 = "FUM";}?> >FUM</option>
      <option value="1" <?=(($row['cong_15'] == "1") ? "selected" : "");?><?php if ($cong_15 == 1) {$cong_15 = "ALTURA UTERINA";}?>>Altura uterina</option>
      <option value="2" <?=(($row['cong_15'] == "2") ? "selected" : "");?><?php if ($cong_15 == 2) {$cong_15 = "ECOGRAFIA OBSTETRICA";}?>>Ecografia obstetrica</option>
    </select></td>
    </tr>
  </tr>
   <tr>
    <td width="260" >Movimientos fetales</td>
  <td width="168" ><select name="cong_16" size="1" id="cong_16" value="<?php echo @$cong_16; ?>">
       <option value="0" <?=(($row['cong_16'] == "0") ? "selected" : "");?><?php if ($cong_16 == 0) {$cong_16 = "PRESENCIAL";}?>>Presencia</option>
       <option value="1" <?=(($row['cong_16'] == "1") ? "selected" : "");?><?php if ($cong_16 == 1) {$cong_16 = "AUSENTES";}?>>Ausentes</option>
    </select></td>
  </tr>
  <tr>
    <td width="260" >Sintematologia</td>
  <td width="168" ><select name="cong_17" size="1" id="cong_17" value="<?php echo @$cong_17; ?>">
          <option value="0" <?=(($row['cong_17'] == "0") ? "selected" : "");?><?php if ($cong_17 == 0) {$cong_17 = "URINARIA";}?>>Urinaria</option>
          <option value="1" <?=(($row['cong_17'] == "1") ? "selected" : "");?><?php if ($cong_17 == 1) {$cong_17 = "VAGINAL";}?>>Cervico vaginal</option>
          <option value="2" <?=(($row['cong_17'] == "2") ? "selected" : "");?><?php if ($cong_17 == 2) {$cong_17 = "NINGUNA";}?>>Ninguna</option>
       </select></td>
  </tr>
  <tr>
    <td width="260" >Cefalea Persistente</td>
    <td width="108" >
      <input type="text" class="" id="cong_18" name="cong_18" size="13" value="<?php echo @$cong_18; ?>" />
    </td>
  </tr>
  <tr>
    <td width="260" >Edema Progresivo</td>
    <td width="108" >
      <input type="text" class="" id="cong_19" name="cong_19" size="13" value="<?php echo @$cong_19; ?>" />
    </td>
  </tr>
  <tr>
    <td width="260" >Epigastralgia</td>
    <td width="108" >
      <input type="text" class="" id="cong_20" name="cong_20" size="13" value="<?php echo @$cong_20; ?>" />
    </td>
  </tr>
   <tr>
    <td width="260" >Otros</td>
    <td width="108" >
      <input type="text" class="" id="cong_21" name="cong_21" size="13" value="<?php echo @$cong_21; ?>" />
    </td>
  </tr>
</table>

  <!---<input type="hidden" class="" id="fum_2_violencia" name="fum_2_violencia" value="<?php echo @$fum_2_violencia; ?>" />
  <input type="hidden" class="" id="ex_odon" name="ex_odon" value="<?php echo @$ex_odon; ?>" />
  <input type="hidden" class="" id="rh_grupo" name="rh_grupo" value="<?php echo @$rh_grupo; ?>" />
  <input type="hidden" class="" id="rh_inmu" name="rh_inmu" value="<?php echo @$rh_inmu; ?>" />-->


<?php echo @$button ?>
</form><br>

</div>
</fieldset>

    <script type="text/javascript">
function (){
 campo = document.getElementById("ejenplo");
 if(campo.value==''){
 alert('el campo está vacio!!!');
return false;
}
return true;
}
</script>


<script type="text/javascript">
/*load.document()
{
    if selet.value == s1

}
*/

//MOSTRAR CAMPO POR OPCION SI
function Mostrar(elemento){

  if (elemento.value== 1){
    document.getElementById("cervix_1").style.display="inline";
  }
  else {
    document.getElementById("cervix_1").style.display="none";
  }
}
function Mostrar1(elemento){
  if (elemento.value==1){
    document.getElementById("cervix_3").style.display="inline";
  }
  else {
    document.getElementById("cervix_3").style.display="none";
  }
}
function Mostrar2(elemento){
  if (elemento.value==1){
    document.getElementById("fh_factor").style.display="inline";
  }
  else {
    document.getElementById("fh_factor").style.display="none";
  }
}
function Mostrar3(elemento){
  if (elemento.value==1){
    document.getElementById("rh_inmu").style.display="inline";
  }
  else {
    document.getElementById("rh_inmu").style.display="none";
  }
}
function Mostrar4(elemento){
  if (elemento.value==1){
    document.getElementById("toxo_2").style.display="inline";
  }
  else {
    document.getElementById("toxo_2").style.display="none";
  }
}
function Mostrar5(elemento){
  if (elemento.value==1){
    document.getElementById("vih_1").style.display="inline";
  }
  else {
    document.getElementById("vih_1").style.display="none";
  }
}
function Mostrar6(elemento){
  if (elemento.value==1){
    document.getElementById("enfinf2").style.display="inline";
  }
  else {
    document.getElementById("enfinf2").style.display="none";
  }
}
function Mostrar7(elemento){
  if (elemento.value==1){
    document.getElementById("enfinf4").style.display="inline";
  }
  else {
    document.getElementById("enfinf4").style.display="none";
  }
}
function Mostrar8(elemento){
  if (elemento.value==1){
    document.getElementById("cong_1").style.display="inline";
  }
  else {
    document.getElementById("cong_1").style.display="none";
  }
}
function Mostrar9(elemento){
  if (elemento.value==1){
    document.getElementById("cong_3").style.display="inline";
  }
  else {
    document.getElementById("cong_3").style.display="none";
  }
}
function Mostrar10(elemento){
  if (elemento.value==1){
    document.getElementById("cong_5").style.display="inline";
      }
  else {
    document.getElementById("cong_5").style.display="none";
  }
}
function Mostrar11(elemento){
  if (elemento.value==1){
    document.getElementById("cong_7").style.display="inline";
  }
  else {
    document.getElementById("cong_7").style.display="none";
  }
}
function Mostrar12(elemento){
  if (elemento.value==1){
    document.getElementById("cong_9").style.display="inline";
  }
  else {
    document.getElementById("cong_9").style.display="none";
  }
}
function Mostrar13(elemento){
  if (elemento.value==1){
    document.getElementById("cong_11").style.display="inline";
  }
  else {
    document.getElementById("cong_11").style.display="none";
  }
}
function Mostrar14(elemento){
  if (elemento.value==1){
    document.getElementById("cong_13").style.display="inline";
  }
  else {
    document.getElementById("cong_13").style.display="none";
  }
}

</script>

<style type="text/css">
    .comp {
   height: 15px;
   width: 110px;
}
</style>


