<?php
if (isset($_REQUEST['guardar_fr_liquidos']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_liquidos'] == 'new') {

$sql = "INSERT INTO fr_liquidos (
`id_fr_liquidos`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`horal_1`,
`horal_2`,
`horal_3`,
`horal_4`,
`horal_5`,
`horal_6`,
`horal_7`,
`horal_8`,
`horal_9`,
`horal_10`,
`clase_liquido_1`,
`clase_liquido_2`,
`clase_liquido_3`,
`clase_liquido_4`,
`clase_liquido_5`,
`clase_liquido_6`,
`clase_liquido_7`,
`clase_liquido_8`,
`clase_liquido_9`,
`clase_liquido_10`,
`agrega_1`,
`agrega_2`,
`agrega_3`,
`agrega_4`,
`agrega_5`,
`agrega_6`,
`agrega_7`,
`agrega_8`,
`agrega_9`,
`agrega_10`,
`sonda_1`,
`sonda_2`,
`sonda_3`,
`sonda_4`,
`sonda_5`,
`sonda_6`,
`sonda_7`,
`sonda_8`,
`sonda_9`,
`sonda_10`,
`oral_1`,
`oral_2`,
`oral_3`,
`oral_4`,
`oral_5`,
`oral_6`,
`oral_7`,
`oral_8`,
`oral_9`,
`oral_10`,
`parente_1`,
`parente_2`,
`parente_3`,
`parente_4`,
`parente_5`,
`parente_6`,
`parente_7`,
`parente_8`,
`parente_9`,
`parente_10`,
`total_1`,
`total_2`,
`total_3`,
`total_4`,
`total_5`,
`total_6`,
`total_7`,
`total_8`,
`total_9`,
`total_10`,
`fecal_1`,
`fecal_2`,
`fecal_3`,
`fecal_4`,
`fecal_5`,
`fecal_6`,
`fecal_7`,
`fecal_8`,
`fecal_9`,
`fecal_10`,
`orina_1`,
`orina_2`,
`orina_3`,
`orina_4`,
`orina_5`,
`orina_6`,
`orina_7`,
`orina_8`,
`orina_9`,
`orina_10`,
`vomito_1`,
`vomito_2`,
`vomito_3`,
`vomito_4`,
`vomito_5`,
`vomito_6`,
`vomito_7`,
`vomito_8`,
`vomito_9`,
`vomito_10`,
`drenes1_1`,
`drenes1_2`,
`drenes1_3`,
`drenes1_4`,
`drenes1_5`,
`drenes1_6`,
`drenes1_7`,
`drenes1_8`,
`drenes1_9`,
`drenes1_10`,
`sondas2_1`,
`sondas2_2`,
`sondas2_3`,
`sondas2_4`,
`sondas2_5`,
`sondas2_6`,
`sondas2_7`,
`sondas2_8`,
`sondas2_9`,
`sondas2_10`,
`total2_1`,
`total2_2`,
`total2_3`,
`total2_4`,
`total2_5`,
`total2_6`,
`total2_7`,
`total2_8`,
`total2_9`,
`total2_10`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['horal_1']."' ,
'".$_REQUEST['horal_2']."' ,
'".$_REQUEST['horal_3']."' ,
'".$_REQUEST['horal_4']."' ,
'".$_REQUEST['horal_5']."' ,
'".$_REQUEST['horal_6']."' ,
'".$_REQUEST['horal_7']."' ,
'".$_REQUEST['horal_8']."' ,
'".$_REQUEST['horal_9']."' ,
'".$_REQUEST['horal_10']."' ,
'".$_REQUEST['clase_liquido_1']."' ,
'".$_REQUEST['clase_liquido_2']."' ,
'".$_REQUEST['clase_liquido_3']."' ,
'".$_REQUEST['clase_liquido_4']."' ,
'".$_REQUEST['clase_liquido_5']."' ,
'".$_REQUEST['clase_liquido_6']."' ,
'".$_REQUEST['clase_liquido_7']."' ,
'".$_REQUEST['clase_liquido_8']."' ,
'".$_REQUEST['clase_liquido_9']."' ,
'".$_REQUEST['clase_liquido_10']."' ,
'".$_REQUEST['agrega_1']."' ,
'".$_REQUEST['agrega_2']."' ,
'".$_REQUEST['agrega_3']."' ,
'".$_REQUEST['agrega_4']."' ,
'".$_REQUEST['agrega_5']."' ,
'".$_REQUEST['agrega_6']."' ,
'".$_REQUEST['agrega_7']."' ,
'".$_REQUEST['agrega_8']."' ,
'".$_REQUEST['agrega_9']."' ,
'".$_REQUEST['agrega_10']."' ,
'".$_REQUEST['sonda_1']."' ,
'".$_REQUEST['sonda_2']."' ,
'".$_REQUEST['sonda_3']."' ,
'".$_REQUEST['sonda_4']."' ,
'".$_REQUEST['sonda_5']."' ,
'".$_REQUEST['sonda_6']."' ,
'".$_REQUEST['sonda_7']."' ,
'".$_REQUEST['sonda_8']."' ,
'".$_REQUEST['sonda_9']."' ,
'".$_REQUEST['sonda_10']."' ,
'".$_REQUEST['oral_1']."' ,
'".$_REQUEST['oral_2']."' ,
'".$_REQUEST['oral_3']."' ,
'".$_REQUEST['oral_4']."' ,
'".$_REQUEST['oral_5']."' ,
'".$_REQUEST['oral_6']."' ,
'".$_REQUEST['oral_7']."' ,
'".$_REQUEST['oral_8']."' ,
'".$_REQUEST['oral_9']."' ,
'".$_REQUEST['oral_10']."' ,
'".$_REQUEST['parente_1']."' ,
'".$_REQUEST['parente_2']."' ,
'".$_REQUEST['parente_3']."' ,
'".$_REQUEST['parente_4']."' ,
'".$_REQUEST['parente_5']."' ,
'".$_REQUEST['parente_6']."' ,
'".$_REQUEST['parente_7']."' ,
'".$_REQUEST['parente_8']."' ,
'".$_REQUEST['parente_9']."' ,
'".$_REQUEST['parente_10']."' ,
'".$_REQUEST['total_1']."' ,
'".$_REQUEST['total_2']."' ,
'".$_REQUEST['total_3']."' ,
'".$_REQUEST['total_4']."' ,
'".$_REQUEST['total_5']."' ,
'".$_REQUEST['total_6']."' ,
'".$_REQUEST['total_7']."' ,
'".$_REQUEST['total_8']."' ,
'".$_REQUEST['total_9']."' ,
'".$_REQUEST['total_10']."' ,
'".$_REQUEST['fecal_1']."' ,
'".$_REQUEST['fecal_2']."' ,
'".$_REQUEST['fecal_3']."' ,
'".$_REQUEST['fecal_4']."' ,
'".$_REQUEST['fecal_5']."' ,
'".$_REQUEST['fecal_6']."' ,
'".$_REQUEST['fecal_7']."' ,
'".$_REQUEST['fecal_8']."' ,
'".$_REQUEST['fecal_9']."' ,
'".$_REQUEST['fecal_10']."' ,
'".$_REQUEST['orina_1']."' ,
'".$_REQUEST['orina_2']."' ,
'".$_REQUEST['orina_3']."' ,
'".$_REQUEST['orina_4']."' ,
'".$_REQUEST['orina_5']."' ,
'".$_REQUEST['orina_6']."' ,
'".$_REQUEST['orina_7']."' ,
'".$_REQUEST['orina_8']."' ,
'".$_REQUEST['orina_9']."' ,
'".$_REQUEST['orina_10']."' ,
'".$_REQUEST['vomito_1']."' ,
'".$_REQUEST['vomito_2']."' ,
'".$_REQUEST['vomito_3']."' ,
'".$_REQUEST['vomito_4']."' ,
'".$_REQUEST['vomito_5']."' ,
'".$_REQUEST['vomito_6']."' ,
'".$_REQUEST['vomito_7']."' ,
'".$_REQUEST['vomito_8']."' ,
'".$_REQUEST['vomito_9']."' ,
'".$_REQUEST['vomito_10']."' ,
'".$_REQUEST['drenes1_1']."' ,
'".$_REQUEST['drenes1_2']."' ,
'".$_REQUEST['drenes1_3']."' ,
'".$_REQUEST['drenes1_4']."' ,
'".$_REQUEST['drenes1_5']."' ,
'".$_REQUEST['drenes1_6']."' ,
'".$_REQUEST['drenes1_7']."' ,
'".$_REQUEST['drenes1_8']."' ,
'".$_REQUEST['drenes1_9']."' ,
'".$_REQUEST['drenes1_10']."' ,
'".$_REQUEST['sondas2_1']."' ,
'".$_REQUEST['sondas2_2']."' ,
'".$_REQUEST['sondas2_3']."' ,
'".$_REQUEST['sondas2_4']."' ,
'".$_REQUEST['sondas2_5']."' ,
'".$_REQUEST['sondas2_6']."' ,
'".$_REQUEST['sondas2_7']."' ,
'".$_REQUEST['sondas2_8']."' ,
'".$_REQUEST['sondas2_9']."' ,
'".$_REQUEST['sondas2_10']."' ,
'".$_REQUEST['total2_1']."' ,
'".$_REQUEST['total2_2']."' ,
'".$_REQUEST['total2_3']."' ,
'".$_REQUEST['total2_4']."' ,
'".$_REQUEST['total2_5']."' ,
'".$_REQUEST['total2_6']."' ,
'".$_REQUEST['total2_7']."' ,
'".$_REQUEST['total2_8']."' ,
'".$_REQUEST['total2_9']."' ,
'".$_REQUEST['total2_10']."'
) ";


} else if ($_REQUEST['id_fr_liquidos'] != '') {

$sql = "UPDATE fr_liquidos set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`horal_1` = '".$_REQUEST['horal_1']."' ,
`horal_2` = '".$_REQUEST['horal_2']."' ,
`horal_3` = '".$_REQUEST['horal_3']."' ,
`horal_4` = '".$_REQUEST['horal_4']."' ,
`horal_5` = '".$_REQUEST['horal_5']."' ,
`horal_6` = '".$_REQUEST['horal_6']."' ,
`horal_7` = '".$_REQUEST['horal_7']."' ,
`horal_8` = '".$_REQUEST['horal_8']."' ,
`horal_9` = '".$_REQUEST['horal_9']."' ,
`horal_10` = '".$_REQUEST['horal_10']."' ,
`clase_liquido_1` = '".$_REQUEST['clase_liquido_1']."' ,
`clase_liquido_2` = '".$_REQUEST['clase_liquido_2']."' ,
`clase_liquido_3` = '".$_REQUEST['clase_liquido_3']."' ,
`clase_liquido_4` = '".$_REQUEST['clase_liquido_4']."' ,
`clase_liquido_5` = '".$_REQUEST['clase_liquido_5']."' ,
`clase_liquido_6` = '".$_REQUEST['clase_liquido_6']."' ,
`clase_liquido_7` = '".$_REQUEST['clase_liquido_7']."' ,
`clase_liquido_8` = '".$_REQUEST['clase_liquido_8']."' ,
`clase_liquido_9` = '".$_REQUEST['clase_liquido_9']."' ,
`clase_liquido_10` = '".$_REQUEST['clase_liquido_10']."' ,
`agrega_1` = '".$_REQUEST['agrega_1']."' ,
`agrega_2` = '".$_REQUEST['agrega_2']."' ,
`agrega_3` = '".$_REQUEST['agrega_3']."' ,
`agrega_4` = '".$_REQUEST['agrega_4']."' ,
`agrega_5` = '".$_REQUEST['agrega_5']."' ,
`agrega_6` = '".$_REQUEST['agrega_6']."' ,
`agrega_7` = '".$_REQUEST['agrega_7']."' ,
`agrega_8` = '".$_REQUEST['agrega_8']."' ,
`agrega_9` = '".$_REQUEST['agrega_9']."' ,
`agrega_10` = '".$_REQUEST['agrega_10']."' ,
`sonda_1` = '".$_REQUEST['sonda_1']."' ,
`sonda_2` = '".$_REQUEST['sonda_2']."' ,
`sonda_3` = '".$_REQUEST['sonda_3']."' ,
`sonda_4` = '".$_REQUEST['sonda_4']."' ,
`sonda_5` = '".$_REQUEST['sonda_5']."' ,
`sonda_6` = '".$_REQUEST['sonda_6']."' ,
`sonda_7` = '".$_REQUEST['sonda_7']."' ,
`sonda_8` = '".$_REQUEST['sonda_8']."' ,
`sonda_9` = '".$_REQUEST['sonda_9']."' ,
`sonda_10` = '".$_REQUEST['sonda_10']."' ,
`oral_1` = '".$_REQUEST['oral_1']."' ,
`oral_2` = '".$_REQUEST['oral_2']."' ,
`oral_3` = '".$_REQUEST['oral_3']."' ,
`oral_4` = '".$_REQUEST['oral_4']."' ,
`oral_5` = '".$_REQUEST['oral_5']."' ,
`oral_6` = '".$_REQUEST['oral_6']."' ,
`oral_7` = '".$_REQUEST['oral_7']."' ,
`oral_8` = '".$_REQUEST['oral_8']."' ,
`oral_9` = '".$_REQUEST['oral_9']."' ,
`oral_10` = '".$_REQUEST['oral_10']."' ,
`parente_1` = '".$_REQUEST['parente_1']."' ,
`parente_2` = '".$_REQUEST['parente_2']."' ,
`parente_3` = '".$_REQUEST['parente_3']."' ,
`parente_4` = '".$_REQUEST['parente_4']."' ,
`parente_5` = '".$_REQUEST['parente_5']."' ,
`parente_6` = '".$_REQUEST['parente_6']."' ,
`parente_7` = '".$_REQUEST['parente_7']."' ,
`parente_8` = '".$_REQUEST['parente_8']."' ,
`parente_9` = '".$_REQUEST['parente_9']."' ,
`parente_10` = '".$_REQUEST['parente_10']."' ,
`total_1` = '".$_REQUEST['total_1']."' ,
`total_2` = '".$_REQUEST['total_2']."' ,
`total_3` = '".$_REQUEST['total_3']."' ,
`total_4` = '".$_REQUEST['total_4']."' ,
`total_5` = '".$_REQUEST['total_5']."' ,
`total_6` = '".$_REQUEST['total_6']."' ,
`total_7` = '".$_REQUEST['total_7']."' ,
`total_8` = '".$_REQUEST['total_8']."' ,
`total_9` = '".$_REQUEST['total_9']."' ,
`total_10` = '".$_REQUEST['total_10']."' ,
`fecal_1` = '".$_REQUEST['fecal_1']."' ,
`fecal_2` = '".$_REQUEST['fecal_2']."' ,
`fecal_3` = '".$_REQUEST['fecal_3']."' ,
`fecal_4` = '".$_REQUEST['fecal_4']."' ,
`fecal_5` = '".$_REQUEST['fecal_5']."' ,
`fecal_6` = '".$_REQUEST['fecal_6']."' ,
`fecal_7` = '".$_REQUEST['fecal_7']."' ,
`fecal_8` = '".$_REQUEST['fecal_8']."' ,
`fecal_9` = '".$_REQUEST['fecal_9']."' ,
`fecal_10` = '".$_REQUEST['fecal_10']."' ,
`orina_1` = '".$_REQUEST['orina_1']."' ,
`orina_2` = '".$_REQUEST['orina_2']."' ,
`orina_3` = '".$_REQUEST['orina_3']."' ,
`orina_4` = '".$_REQUEST['orina_4']."' ,
`orina_5` = '".$_REQUEST['orina_5']."' ,
`orina_6` = '".$_REQUEST['orina_6']."' ,
`orina_7` = '".$_REQUEST['orina_7']."' ,
`orina_8` = '".$_REQUEST['orina_8']."' ,
`orina_9` = '".$_REQUEST['orina_9']."' ,
`orina_10` = '".$_REQUEST['orina_10']."' ,
`vomito_1` = '".$_REQUEST['vomito_1']."' ,
`vomito_2` = '".$_REQUEST['vomito_2']."' ,
`vomito_3` = '".$_REQUEST['vomito_3']."' ,
`vomito_4` = '".$_REQUEST['vomito_4']."' ,
`vomito_5` = '".$_REQUEST['vomito_5']."' ,
`vomito_6` = '".$_REQUEST['vomito_6']."' ,
`vomito_7` = '".$_REQUEST['vomito_7']."' ,
`vomito_8` = '".$_REQUEST['vomito_8']."' ,
`vomito_9` = '".$_REQUEST['vomito_9']."' ,
`vomito_10` = '".$_REQUEST['vomito_10']."' ,
`drenes1_1` = '".$_REQUEST['drenes1_1']."' ,
`drenes1_2` = '".$_REQUEST['drenes1_2']."' ,
`drenes1_3` = '".$_REQUEST['drenes1_3']."' ,
`drenes1_4` = '".$_REQUEST['drenes1_4']."' ,
`drenes1_5` = '".$_REQUEST['drenes1_5']."' ,
`drenes1_6` = '".$_REQUEST['drenes1_6']."' ,
`drenes1_7` = '".$_REQUEST['drenes1_7']."' ,
`drenes1_8` = '".$_REQUEST['drenes1_8']."' ,
`drenes1_9` = '".$_REQUEST['drenes1_9']."' ,
`drenes1_10` = '".$_REQUEST['drenes1_10']."' ,
`sondas2_1` = '".$_REQUEST['sondas2_1']."' ,
`sondas2_2` = '".$_REQUEST['sondas2_2']."' ,
`sondas2_3` = '".$_REQUEST['sondas2_3']."' ,
`sondas2_4` = '".$_REQUEST['sondas2_4']."' ,
`sondas2_5` = '".$_REQUEST['sondas2_5']."' ,
`sondas2_6` = '".$_REQUEST['sondas2_6']."' ,
`sondas2_7` = '".$_REQUEST['sondas2_7']."' ,
`sondas2_8` = '".$_REQUEST['sondas2_8']."' ,
`sondas2_9` = '".$_REQUEST['sondas2_9']."' ,
`sondas2_10` = '".$_REQUEST['sondas2_10']."' ,
`total2_1` = '".$_REQUEST['total2_1']."' ,
`total2_2` = '".$_REQUEST['total2_2']."' ,
`total2_3` = '".$_REQUEST['total2_3']."' ,
`total2_4` = '".$_REQUEST['total2_4']."' ,
`total2_5` = '".$_REQUEST['total2_5']."' ,
`total2_6` = '".$_REQUEST['total2_6']."' ,
`total2_7` = '".$_REQUEST['total2_7']."' ,
`total2_8` = '".$_REQUEST['total2_8']."' ,
`total2_9` = '".$_REQUEST['total2_9']."' ,
`total2_10` = '".$_REQUEST['total2_10']."' WHERE `id_fr_liquidos` = '".$_REQUEST['id_fr_liquidos']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_liquidos = 'new';
$sql = "SELECT * from fr_liquidos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_liquidos = $row['id_fr_liquidos'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$horal_1 = $row['horal_1'];
$horal_2 = $row['horal_2'];
$horal_3 = $row['horal_3'];
$horal_4 = $row['horal_4'];
$horal_5 = $row['horal_5'];
$horal_6 = $row['horal_6'];
$horal_7 = $row['horal_7'];
$horal_8 = $row['horal_8'];
$horal_9 = $row['horal_9'];
$horal_10 = $row['horal_10'];
$clase_liquido_1 = $row['clase_liquido_1'];
$clase_liquido_2 = $row['clase_liquido_2'];
$clase_liquido_3 = $row['clase_liquido_3'];
$clase_liquido_4 = $row['clase_liquido_4'];
$clase_liquido_5 = $row['clase_liquido_5'];
$clase_liquido_6 = $row['clase_liquido_6'];
$clase_liquido_7 = $row['clase_liquido_7'];
$clase_liquido_8 = $row['clase_liquido_8'];
$clase_liquido_9 = $row['clase_liquido_9'];
$clase_liquido_10 = $row['clase_liquido_10'];
$agrega_1 = $row['agrega_1'];
$agrega_2 = $row['agrega_2'];
$agrega_3 = $row['agrega_3'];
$agrega_4 = $row['agrega_4'];
$agrega_5 = $row['agrega_5'];
$agrega_6 = $row['agrega_6'];
$agrega_7 = $row['agrega_7'];
$agrega_8 = $row['agrega_8'];
$agrega_9 = $row['agrega_9'];
$agrega_10 = $row['agrega_10'];
$sonda_1 = $row['sonda_1'];
$sonda_2 = $row['sonda_2'];
$sonda_3 = $row['sonda_3'];
$sonda_4 = $row['sonda_4'];
$sonda_5 = $row['sonda_5'];
$sonda_6 = $row['sonda_6'];
$sonda_7 = $row['sonda_7'];
$sonda_8 = $row['sonda_8'];
$sonda_9 = $row['sonda_9'];
$sonda_10 = $row['sonda_10'];
$oral_1 = $row['oral_1'];
$oral_2 = $row['oral_2'];
$oral_3 = $row['oral_3'];
$oral_4 = $row['oral_4'];
$oral_5 = $row['oral_5'];
$oral_6 = $row['oral_6'];
$oral_7 = $row['oral_7'];
$oral_8 = $row['oral_8'];
$oral_9 = $row['oral_9'];
$oral_10 = $row['oral_10'];
$parente_1 = $row['parente_1'];
$parente_2 = $row['parente_2'];
$parente_3 = $row['parente_3'];
$parente_4 = $row['parente_4'];
$parente_5 = $row['parente_5'];
$parente_6 = $row['parente_6'];
$parente_7 = $row['parente_7'];
$parente_8 = $row['parente_8'];
$parente_9 = $row['parente_9'];
$parente_10 = $row['parente_10'];
$total_1 = $row['total_1'];
$total_2 = $row['total_2'];
$total_3 = $row['total_3'];
$total_4 = $row['total_4'];
$total_5 = $row['total_5'];
$total_6 = $row['total_6'];
$total_7 = $row['total_7'];
$total_8 = $row['total_8'];
$total_9 = $row['total_9'];
$total_10 = $row['total_10'];
$fecal_1 = $row['fecal_1'];
$fecal_2 = $row['fecal_2'];
$fecal_3 = $row['fecal_3'];
$fecal_4 = $row['fecal_4'];
$fecal_5 = $row['fecal_5'];
$fecal_6 = $row['fecal_6'];
$fecal_7 = $row['fecal_7'];
$fecal_8 = $row['fecal_8'];
$fecal_9 = $row['fecal_9'];
$fecal_10 = $row['fecal_10'];
$orina_1 = $row['orina_1'];
$orina_2 = $row['orina_2'];
$orina_3 = $row['orina_3'];
$orina_4 = $row['orina_4'];
$orina_5 = $row['orina_5'];
$orina_6 = $row['orina_6'];
$orina_7 = $row['orina_7'];
$orina_8 = $row['orina_8'];
$orina_9 = $row['orina_9'];
$orina_10 = $row['orina_10'];
$vomito_1 = $row['vomito_1'];
$vomito_2 = $row['vomito_2'];
$vomito_3 = $row['vomito_3'];
$vomito_4 = $row['vomito_4'];
$vomito_5 = $row['vomito_5'];
$vomito_6 = $row['vomito_6'];
$vomito_7 = $row['vomito_7'];
$vomito_8 = $row['vomito_8'];
$vomito_9 = $row['vomito_9'];
$vomito_10 = $row['vomito_10'];
$drenes1_1 = $row['drenes1_1'];
$drenes1_2 = $row['drenes1_2'];
$drenes1_3 = $row['drenes1_3'];
$drenes1_4 = $row['drenes1_4'];
$drenes1_5 = $row['drenes1_5'];
$drenes1_6 = $row['drenes1_6'];
$drenes1_7 = $row['drenes1_7'];
$drenes1_8 = $row['drenes1_8'];
$drenes1_9 = $row['drenes1_9'];
$drenes1_10 = $row['drenes1_10'];
$sondas2_1 = $row['sondas2_1'];
$sondas2_2 = $row['sondas2_2'];
$sondas2_3 = $row['sondas2_3'];
$sondas2_4 = $row['sondas2_4'];
$sondas2_5 = $row['sondas2_5'];
$sondas2_6 = $row['sondas2_6'];
$sondas2_7 = $row['sondas2_7'];
$sondas2_8 = $row['sondas2_8'];
$sondas2_9 = $row['sondas2_9'];
$sondas2_10 = $row['sondas2_10'];
$total2_1 = $row['total2_1'];
$total2_2 = $row['total2_2'];
$total2_3 = $row['total2_3'];
$total2_4 = $row['total2_4'];
$total2_5 = $row['total2_5'];
$total2_6 = $row['total2_6'];
$total2_7 = $row['total2_7'];
$total2_8 = $row['total2_8'];
$total2_9 = $row['total2_9'];
$total2_10 = $row['total2_10'];
break; }

?>
<script>

$(function(){

$("#close-fr_liquidos").click(function(){
$("#open-fr_liquidos").show();
$(this).hide();
$("#content-fr_liquidos").hide('slow');
});

$("#open-fr_liquidos").click(function(){
$("#close-fr_liquidos").show();
$(this).hide();
$("#content-fr_liquidos").show('slow');
});

});

</script>
<fieldset id="fr_liquidos">
<legend align="left"> <div class="arrow-c" id="close-fr_liquidos"></div> <div class="arrow-o" id="open-fr_liquidos" ></div> <font>CONTROL DE LIQUIDOS</font></legend>
<div id="content-fr_liquidos">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_liquidos" id="guardar_fr_liquidos" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
<form id="form_fr_liquidos" name="form_fr_liquidos" action="<?php echo @$action_form_fr_liquidos ?>#fr_liquidos" method="post">

<input type="hidden" id="id_fr_liquidos" name="id_fr_liquidos" value="<?php echo @$id_fr_liquidos ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_liquidos" name="id_fr_liquidos" value="<?php echo @$id_fr_liquidos; ?>" />


<table border="0" align="center" cellpadding="0" cellspacing="0" class="data">
  <col width="83" span="13" />
  <tr height="19">
    <td colspan="13" height="19" width="1079"><div align="center">CONTROL DE LIQUIDOS</div></td>
  </tr>
  <tr height="19">
    <td rowspan="2" height="57" width="83">HORA</td>
    <td rowspan="2" width="83">CLASE DE    LIQUIDO</td>
    <td rowspan="2" width="83">MEZCLAS    AGREGADAS</td>
    <td colspan="3" width="249"><div align="center">ADMINISTRADOS</div></td>
    <td rowspan="2" width="83">TOTAL</td>
    <td colspan="5" width="415"><div align="center">ELIMINADOS</div></td>
    <td rowspan="2" width="83">TOTAL</td>
  </tr>
  <tr height="38">
    <td height="38" width="83">SONDA</td>
    <td width="83">ORAL</td>
    <td width="83">PARENTERAL</td>
    <td width="83">MATERIA    FECAL</td>
    <td width="83">ORINA</td>
    <td width="83">VOMITO</td>
    <td width="83">DRENES</td>
    <td width="83">SONDAS</td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_1" name="horal_1" value="<?php echo @$horal_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_1" name="clase_liquido_1" value="<?php echo @$clase_liquido_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_1" name="agrega_1" value="<?php echo @$agrega_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_1" name="sonda_1" value="<?php echo @$sonda_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_1" name="oral_1" value="<?php echo @$oral_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_1" name="parente_1" value="<?php echo @$parente_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_1" name="total_1" value="<?php echo @$total_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_1" name="fecal_1" value="<?php echo @$fecal_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_1" name="orina_1" value="<?php echo @$orina_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_1" name="vomito_1" value="<?php echo @$vomito_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_1" name="drenes1_1" value="<?php echo @$drenes1_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_1" name="sondas2_1" value="<?php echo @$sondas2_1; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_1" name="total2_1" value="<?php echo @$total2_1; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_2" name="horal_2" value="<?php echo @$horal_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_2" name="clase_liquido_2" value="<?php echo @$clase_liquido_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_2" name="agrega_2" value="<?php echo @$agrega_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_2" name="sonda_2" value="<?php echo @$sonda_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_2" name="oral_2" value="<?php echo @$oral_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_2" name="parente_2" value="<?php echo @$parente_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_2" name="total_2" value="<?php echo @$total_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_2" name="fecal_2" value="<?php echo @$fecal_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_2" name="orina_2" value="<?php echo @$orina_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_2" name="vomito_2" value="<?php echo @$vomito_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_2" name="drenes1_2" value="<?php echo @$drenes1_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_2" name="sondas2_2" value="<?php echo @$sondas2_2; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_2" name="total2_2" value="<?php echo @$total2_2; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_3" name="horal_3" value="<?php echo @$horal_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_3" name="clase_liquido_3" value="<?php echo @$clase_liquido_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_3" name="agrega_3" value="<?php echo @$agrega_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_3" name="sonda_3" value="<?php echo @$sonda_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_3" name="oral_3" value="<?php echo @$oral_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_3" name="parente_3" value="<?php echo @$parente_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_3" name="total_3" value="<?php echo @$total_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_3" name="fecal_3" value="<?php echo @$fecal_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_3" name="orina_3" value="<?php echo @$orina_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_3" name="vomito_3" value="<?php echo @$vomito_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_3" name="drenes1_3" value="<?php echo @$drenes1_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_3" name="sondas2_3" value="<?php echo @$sondas2_3; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_3" name="total2_3" value="<?php echo @$total2_3; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_4" name="horal_4" value="<?php echo @$horal_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_4" name="clase_liquido_4" value="<?php echo @$clase_liquido_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_4" name="agrega_4" value="<?php echo @$agrega_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_4" name="sonda_4" value="<?php echo @$sonda_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_4" name="oral_4" value="<?php echo @$oral_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_4" name="parente_4" value="<?php echo @$parente_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_4" name="total_4" value="<?php echo @$total_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_4" name="fecal_4" value="<?php echo @$fecal_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_4" name="orina_4" value="<?php echo @$orina_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_4" name="vomito_4" value="<?php echo @$vomito_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_4" name="drenes1_4" value="<?php echo @$drenes1_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_4" name="sondas2_4" value="<?php echo @$sondas2_4; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_4" name="total2_4" value="<?php echo @$total2_4; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_5" name="horal_5" value="<?php echo @$horal_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_5" name="clase_liquido_5" value="<?php echo @$clase_liquido_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_5" name="agrega_5" value="<?php echo @$agrega_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_5" name="sonda_5" value="<?php echo @$sonda_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_5" name="oral_5" value="<?php echo @$oral_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_5" name="parente_5" value="<?php echo @$parente_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_5" name="total_5" value="<?php echo @$total_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_5" name="fecal_5" value="<?php echo @$fecal_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_5" name="orina_5" value="<?php echo @$orina_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_5" name="vomito_5" value="<?php echo @$vomito_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_5" name="drenes1_5" value="<?php echo @$drenes1_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_5" name="sondas2_5" value="<?php echo @$sondas2_5; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_5" name="total2_5" value="<?php echo @$total2_5; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_6" name="horal_6" value="<?php echo @$horal_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_6" name="clase_liquido_6" value="<?php echo @$clase_liquido_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_6" name="agrega_6" value="<?php echo @$agrega_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_6" name="sonda_6" value="<?php echo @$sonda_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_6" name="oral_6" value="<?php echo @$oral_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_6" name="parente_6" value="<?php echo @$parente_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_6" name="total_6" value="<?php echo @$total_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_6" name="fecal_6" value="<?php echo @$fecal_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_6" name="orina_6" value="<?php echo @$orina_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_6" name="vomito_6" value="<?php echo @$vomito_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_6" name="drenes1_6" value="<?php echo @$drenes1_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_6" name="sondas2_6" value="<?php echo @$sondas2_6; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_6" name="total2_6" value="<?php echo @$total2_6; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_7" name="horal_7" value="<?php echo @$horal_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_7" name="clase_liquido_7" value="<?php echo @$clase_liquido_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_7" name="agrega_7" value="<?php echo @$agrega_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_7" name="sonda_7" value="<?php echo @$sonda_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_7" name="oral_7" value="<?php echo @$oral_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_7" name="parente_7" value="<?php echo @$parente_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_7" name="total_7" value="<?php echo @$total_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_7" name="fecal_7" value="<?php echo @$fecal_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_7" name="orina_7" value="<?php echo @$orina_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_7" name="vomito_7" value="<?php echo @$vomito_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_7" name="drenes1_7" value="<?php echo @$drenes1_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_7" name="sondas2_7" value="<?php echo @$sondas2_7; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_7" name="total2_7" value="<?php echo @$total2_7; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_8" name="horal_8" value="<?php echo @$horal_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_8" name="clase_liquido_8" value="<?php echo @$clase_liquido_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_8" name="agrega_8" value="<?php echo @$agrega_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_8" name="sonda_8" value="<?php echo @$sonda_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_8" name="oral_8" value="<?php echo @$oral_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_8" name="parente_8" value="<?php echo @$parente_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_8" name="total_8" value="<?php echo @$total_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_8" name="fecal_8" value="<?php echo @$fecal_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_8" name="orina_8" value="<?php echo @$orina_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_8" name="vomito_8" value="<?php echo @$vomito_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_8" name="drenes1_8" value="<?php echo @$drenes1_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_8" name="sondas2_8" value="<?php echo @$sondas2_8; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_8" name="total2_8" value="<?php echo @$total2_8; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_9" name="horal_9" value="<?php echo @$horal_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_9" name="clase_liquido_9" value="<?php echo @$clase_liquido_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_9" name="agrega_9" value="<?php echo @$agrega_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_9" name="sonda_9" value="<?php echo @$sonda_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_9" name="oral_9" value="<?php echo @$oral_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_9" name="parente_9" value="<?php echo @$parente_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_9" name="total_9" value="<?php echo @$total_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_9" name="fecal_9" value="<?php echo @$fecal_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_9" name="orina_9" value="<?php echo @$orina_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_9" name="vomito_9" value="<?php echo @$vomito_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_9" name="drenes1_9" value="<?php echo @$drenes1_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_9" name="sondas2_9" value="<?php echo @$sondas2_9; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_9" name="total2_9" value="<?php echo @$total2_9; ?>" /></td>
  </tr>
  <tr height="19">
    <td height="19" width="83"><input type="text" class="input_txt valid" id="horal_10" name="horal_10" value="<?php echo @$horal_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="clase_liquido_10" name="clase_liquido_10" value="<?php echo @$clase_liquido_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="agrega_10" name="agrega_10" value="<?php echo @$agrega_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sonda_10" name="sonda_10" value="<?php echo @$sonda_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="oral_10" name="oral_10" value="<?php echo @$oral_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="parente_10" name="parente_10" value="<?php echo @$parente_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total_10" name="total_10" value="<?php echo @$total_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="fecal_10" name="fecal_10" value="<?php echo @$fecal_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="orina_10" name="orina_10" value="<?php echo @$orina_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="vomito_10" name="vomito_10" value="<?php echo @$vomito_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="drenes1_10" name="drenes1_10" value="<?php echo @$drenes1_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="sondas2_10" name="sondas2_10" value="<?php echo @$sondas2_10; ?>" /></td>
    <td width="83"><input type="text" class="input_txt valid" id="total2_10" name="total2_10" value="<?php echo @$total2_10; ?>" /></td>
  </tr>
</table>


<?php echo @$button ?>
</form><br>
 <a href='#' onClick='imprSelec("content-fr_liquidos")' >Imprimir</a>
</div>
</fieldset>