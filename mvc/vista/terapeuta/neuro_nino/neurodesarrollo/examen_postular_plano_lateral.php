<?php
if (isset($_REQUEST['guardar_h1_plano_lateral_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_plano_lateral_nino'] == 'new') {

        $sql = "INSERT INTO h1_plano_lateral_nino (
`id_h1_plano_lateral_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`c1l`,
`c2l`,
`c3l`,
`c4l`,
`c5l`,
`c6l`,
`c7l`,
`c8l`,
`cc1l`,
`cc2l`,
`cc3l`,
`cc4l`,
`cc5l`,
`cc6l`,
`cc7l`,
`cc8l`,
`h1l`,
`h2l`,
`h3l`,
`h4l`,
`h5l`,
`h6l`,
`h7l`,
`h8l`,
`hh1l`,
`hh2l`,
`hh3l`,
`hh4l`,
`hh5l`,
`hh6l`,
`hh7l`,
`hh8l`,
`t1l`,
`t2l`,
`t3l`,
`t4l`,
`t5l`,
`t6l`,
`t7l`,
`t8l`,
`tt1l`,
`tt2l`,
`tt3l`,
`tt4l`,
`tt5l`,
`tt6l`,
`tt7l`,
`tt8l`,
`co1l`,
`co2l`,
`co3l`,
`co4l`,
`co5l`,
`co6l`,
`co7l`,
`co8l`,
`coco1l`,
`coco2l`,
`coco3l`,
`coco4l`,
`coco5l`,
`coco6l`,
`coco7l`,
`coco8l`,
`p1l`,
`p2l`,
`p3l`,
`p4l`,
`p5l`,
`p6l`,
`p7l`,
`p8l`,
`pp1l`,
`pp2l`,
`pp3l`,
`pp4l`,
`pp5l`,
`pp6l`,
`pp7l`,
`pp8l`,
`ppp1l`,
`ppp2l`,
`ppp3l`,
`ppp4l`,
`ppp5l`,
`ppp6l`,
`ppp7l`,
`ppp8l`,
`ca1l`,
`ca2l`,
`ca3l`,
`ca4l`,
`ca5l`,
`ca6l`,
`ca7l`,
`ca8l`,
`cac1l`,
`cac2l`,
`cac3l`,
`cac4l`,
`cac5l`,
`cac7l`,
`cac8l`,
`cac6l`,
`r1l`,
`r2l`,
`r3l`,
`r4l`,
`r5l`,
`r6l`,
`r7l`,
`r8l`,
`rr1l`,
`rr2l`,
`rr3l`,
`rr4l`,
`rr5l`,
`rr6l`,
`rr7l`,
`rr8l`,
`pie1l`,
`pie2l`,
`pie3l`,
`pie4l`,
`pie5l`,
`pie6l`,
`pie7l`,
`pie8l`,
`ppie1l`,
`ppie2l`,
`ppie3l`,
`ppie4l`,
`ppie5l`,
`ppie6l`,
`ppie7l`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`ppie8l`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['c1l'] . "' ,
'" . $_REQUEST['c2l'] . "' ,
'" . $_REQUEST['c3l'] . "' ,
'" . $_REQUEST['c4l'] . "' ,
'" . $_REQUEST['c5l'] . "' ,
'" . $_REQUEST['c6l'] . "' ,
'" . $_REQUEST['c7l'] . "' ,
'" . $_REQUEST['c8l'] . "' ,
'" . $_REQUEST['cc1l'] . "' ,
'" . $_REQUEST['cc2l'] . "' ,
'" . $_REQUEST['cc3l'] . "' ,
'" . $_REQUEST['cc4l'] . "' ,
'" . $_REQUEST['cc5l'] . "' ,
'" . $_REQUEST['cc6l'] . "' ,
'" . $_REQUEST['cc7l'] . "' ,
'" . $_REQUEST['cc8l'] . "' ,
'" . $_REQUEST['h1l'] . "' ,
'" . $_REQUEST['h2l'] . "' ,
'" . $_REQUEST['h3l'] . "' ,
'" . $_REQUEST['h4l'] . "' ,
'" . $_REQUEST['h5l'] . "' ,
'" . $_REQUEST['h6l'] . "' ,
'" . $_REQUEST['h7l'] . "' ,
'" . $_REQUEST['h8l'] . "' ,
'" . $_REQUEST['hh1l'] . "' ,
'" . $_REQUEST['hh2l'] . "' ,
'" . $_REQUEST['hh3l'] . "' ,
'" . $_REQUEST['hh4l'] . "' ,
'" . $_REQUEST['hh5l'] . "' ,
'" . $_REQUEST['hh6l'] . "' ,
'" . $_REQUEST['hh7l'] . "' ,
'" . $_REQUEST['hh8l'] . "' ,
'" . $_REQUEST['t1l'] . "' ,
'" . $_REQUEST['t2l'] . "' ,
'" . $_REQUEST['t3l'] . "' ,
'" . $_REQUEST['t4l'] . "' ,
'" . $_REQUEST['t5l'] . "' ,
'" . $_REQUEST['t6l'] . "' ,
'" . $_REQUEST['t7l'] . "' ,
'" . $_REQUEST['t8l'] . "' ,
'" . $_REQUEST['tt1l'] . "' ,
'" . $_REQUEST['tt2l'] . "' ,
'" . $_REQUEST['tt3l'] . "' ,
'" . $_REQUEST['tt4l'] . "' ,
'" . $_REQUEST['tt5l'] . "' ,
'" . $_REQUEST['tt6l'] . "' ,
'" . $_REQUEST['tt7l'] . "' ,
'" . $_REQUEST['tt8l'] . "' ,
'" . $_REQUEST['co1l'] . "' ,
'" . $_REQUEST['co2l'] . "' ,
'" . $_REQUEST['co3l'] . "' ,
'" . $_REQUEST['co4l'] . "' ,
'" . $_REQUEST['co5l'] . "' ,
'" . $_REQUEST['co6l'] . "' ,
'" . $_REQUEST['co7l'] . "' ,
'" . $_REQUEST['co8l'] . "' ,
'" . $_REQUEST['coco1l'] . "' ,
'" . $_REQUEST['coco2l'] . "' ,
'" . $_REQUEST['coco3l'] . "' ,
'" . $_REQUEST['coco4l'] . "' ,
'" . $_REQUEST['coco5l'] . "' ,
'" . $_REQUEST['coco6l'] . "' ,
'" . $_REQUEST['coco7l'] . "' ,
'" . $_REQUEST['coco8l'] . "' ,
'" . $_REQUEST['p1l'] . "' ,
'" . $_REQUEST['p2l'] . "' ,
'" . $_REQUEST['p3l'] . "' ,
'" . $_REQUEST['p4l'] . "' ,
'" . $_REQUEST['p5l'] . "' ,
'" . $_REQUEST['p6l'] . "' ,
'" . $_REQUEST['p7l'] . "' ,
'" . $_REQUEST['p8l'] . "' ,
'" . $_REQUEST['pp1l'] . "' ,
'" . $_REQUEST['pp2l'] . "' ,
'" . $_REQUEST['pp3l'] . "' ,
'" . $_REQUEST['pp4l'] . "' ,
'" . $_REQUEST['pp5l'] . "' ,
'" . $_REQUEST['pp6l'] . "' ,
'" . $_REQUEST['pp7l'] . "' ,
'" . $_REQUEST['pp8l'] . "' ,
'" . $_REQUEST['ppp1l'] . "' ,
'" . $_REQUEST['ppp2l'] . "' ,
'" . $_REQUEST['ppp3l'] . "' ,
'" . $_REQUEST['ppp4l'] . "' ,
'" . $_REQUEST['ppp5l'] . "' ,
'" . $_REQUEST['ppp6l'] . "' ,
'" . $_REQUEST['ppp7l'] . "' ,
'" . $_REQUEST['ppp8l'] . "' ,
'" . $_REQUEST['ca1l'] . "' ,
'" . $_REQUEST['ca2l'] . "' ,
'" . $_REQUEST['ca3l'] . "' ,
'" . $_REQUEST['ca4l'] . "' ,
'" . $_REQUEST['ca5l'] . "' ,
'" . $_REQUEST['ca6l'] . "' ,
'" . $_REQUEST['ca7l'] . "' ,
'" . $_REQUEST['ca8l'] . "' ,
'" . $_REQUEST['cac1l'] . "' ,
'" . $_REQUEST['cac2l'] . "' ,
'" . $_REQUEST['cac3l'] . "' ,
'" . $_REQUEST['cac4l'] . "' ,
'" . $_REQUEST['cac5l'] . "' ,
'" . $_REQUEST['cac7l'] . "' ,
'" . $_REQUEST['cac8l'] . "' ,
'" . $_REQUEST['cac6l'] . "' ,
'" . $_REQUEST['r1l'] . "' ,
'" . $_REQUEST['r2l'] . "' ,
'" . $_REQUEST['r3l'] . "' ,
'" . $_REQUEST['r4l'] . "' ,
'" . $_REQUEST['r5l'] . "' ,
'" . $_REQUEST['r6l'] . "' ,
'" . $_REQUEST['r7l'] . "' ,
'" . $_REQUEST['r8l'] . "' ,
'" . $_REQUEST['rr1l'] . "' ,
'" . $_REQUEST['rr2l'] . "' ,
'" . $_REQUEST['rr3l'] . "' ,
'" . $_REQUEST['rr4l'] . "' ,
'" . $_REQUEST['rr5l'] . "' ,
'" . $_REQUEST['rr6l'] . "' ,
'" . $_REQUEST['rr7l'] . "' ,
'" . $_REQUEST['rr8l'] . "' ,
'" . $_REQUEST['pie1l'] . "' ,
'" . $_REQUEST['pie2l'] . "' ,
'" . $_REQUEST['pie3l'] . "' ,
'" . $_REQUEST['pie4l'] . "' ,
'" . $_REQUEST['pie5l'] . "' ,
'" . $_REQUEST['pie6l'] . "' ,
'" . $_REQUEST['pie7l'] . "' ,
'" . $_REQUEST['pie8l'] . "' ,
'" . $_REQUEST['ppie1l'] . "' ,
'" . $_REQUEST['ppie2l'] . "' ,
'" . $_REQUEST['ppie3l'] . "' ,
'" . $_REQUEST['ppie4l'] . "' ,
'" . $_REQUEST['ppie5l'] . "' ,
'" . $_REQUEST['ppie6l'] . "' ,
'" . $_REQUEST['ppie7l'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ppie8l'] . "'
) ";
    } else if ($_REQUEST['id_h1_plano_lateral_nino'] != '') {

        $sql = "UPDATE h1_plano_lateral_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`c1l` = '" . $_REQUEST['c1l'] . "' ,
`c2l` = '" . $_REQUEST['c2l'] . "' ,
`c3l` = '" . $_REQUEST['c3l'] . "' ,
`c4l` = '" . $_REQUEST['c4l'] . "' ,
`c5l` = '" . $_REQUEST['c5l'] . "' ,
`c6l` = '" . $_REQUEST['c6l'] . "' ,
`c7l` = '" . $_REQUEST['c7l'] . "' ,
`c8l` = '" . $_REQUEST['c8l'] . "' ,
`cc1l` = '" . $_REQUEST['cc1l'] . "' ,
`cc2l` = '" . $_REQUEST['cc2l'] . "' ,
`cc3l` = '" . $_REQUEST['cc3l'] . "' ,
`cc4l` = '" . $_REQUEST['cc4l'] . "' ,
`cc5l` = '" . $_REQUEST['cc5l'] . "' ,
`cc6l` = '" . $_REQUEST['cc6l'] . "' ,
`cc7l` = '" . $_REQUEST['cc7l'] . "' ,
`cc8l` = '" . $_REQUEST['cc8l'] . "' ,
`h1l` = '" . $_REQUEST['h1l'] . "' ,
`h2l` = '" . $_REQUEST['h2l'] . "' ,
`h3l` = '" . $_REQUEST['h3l'] . "' ,
`h4l` = '" . $_REQUEST['h4l'] . "' ,
`h5l` = '" . $_REQUEST['h5l'] . "' ,
`h6l` = '" . $_REQUEST['h6l'] . "' ,
`h7l` = '" . $_REQUEST['h7l'] . "' ,
`h8l` = '" . $_REQUEST['h8l'] . "' ,
`hh1l` = '" . $_REQUEST['hh1l'] . "' ,
`hh2l` = '" . $_REQUEST['hh2l'] . "' ,
`hh3l` = '" . $_REQUEST['hh3l'] . "' ,
`hh4l` = '" . $_REQUEST['hh4l'] . "' ,
`hh5l` = '" . $_REQUEST['hh5l'] . "' ,
`hh6l` = '" . $_REQUEST['hh6l'] . "' ,
`hh7l` = '" . $_REQUEST['hh7l'] . "' ,
`hh8l` = '" . $_REQUEST['hh8l'] . "' ,
`t1l` = '" . $_REQUEST['t1l'] . "' ,
`t2l` = '" . $_REQUEST['t2l'] . "' ,
`t3l` = '" . $_REQUEST['t3l'] . "' ,
`t4l` = '" . $_REQUEST['t4l'] . "' ,
`t5l` = '" . $_REQUEST['t5l'] . "' ,
`t6l` = '" . $_REQUEST['t6l'] . "' ,
`t7l` = '" . $_REQUEST['t7l'] . "' ,
`t8l` = '" . $_REQUEST['t8l'] . "' ,
`tt1l` = '" . $_REQUEST['tt1l'] . "' ,
`tt2l` = '" . $_REQUEST['tt2l'] . "' ,
`tt3l` = '" . $_REQUEST['tt3l'] . "' ,
`tt4l` = '" . $_REQUEST['tt4l'] . "' ,
`tt5l` = '" . $_REQUEST['tt5l'] . "' ,
`tt6l` = '" . $_REQUEST['tt6l'] . "' ,
`tt7l` = '" . $_REQUEST['tt7l'] . "' ,
`tt8l` = '" . $_REQUEST['tt8l'] . "' ,
`co1l` = '" . $_REQUEST['co1l'] . "' ,
`co2l` = '" . $_REQUEST['co2l'] . "' ,
`co3l` = '" . $_REQUEST['co3l'] . "' ,
`co4l` = '" . $_REQUEST['co4l'] . "' ,
`co5l` = '" . $_REQUEST['co5l'] . "' ,
`co6l` = '" . $_REQUEST['co6l'] . "' ,
`co7l` = '" . $_REQUEST['co7l'] . "' ,
`co8l` = '" . $_REQUEST['co8l'] . "' ,
`coco1l` = '" . $_REQUEST['coco1l'] . "' ,
`coco2l` = '" . $_REQUEST['coco2l'] . "' ,
`coco3l` = '" . $_REQUEST['coco3l'] . "' ,
`coco4l` = '" . $_REQUEST['coco4l'] . "' ,
`coco5l` = '" . $_REQUEST['coco5l'] . "' ,
`coco6l` = '" . $_REQUEST['coco6l'] . "' ,
`coco7l` = '" . $_REQUEST['coco7l'] . "' ,
`coco8l` = '" . $_REQUEST['coco8l'] . "' ,
`p1l` = '" . $_REQUEST['p1l'] . "' ,
`p2l` = '" . $_REQUEST['p2l'] . "' ,
`p3l` = '" . $_REQUEST['p3l'] . "' ,
`p4l` = '" . $_REQUEST['p4l'] . "' ,
`p5l` = '" . $_REQUEST['p5l'] . "' ,
`p6l` = '" . $_REQUEST['p6l'] . "' ,
`p7l` = '" . $_REQUEST['p7l'] . "' ,
`p8l` = '" . $_REQUEST['p8l'] . "' ,
`pp1l` = '" . $_REQUEST['pp1l'] . "' ,
`pp2l` = '" . $_REQUEST['pp2l'] . "' ,
`pp3l` = '" . $_REQUEST['pp3l'] . "' ,
`pp4l` = '" . $_REQUEST['pp4l'] . "' ,
`pp5l` = '" . $_REQUEST['pp5l'] . "' ,
`pp6l` = '" . $_REQUEST['pp6l'] . "' ,
`pp7l` = '" . $_REQUEST['pp7l'] . "' ,
`pp8l` = '" . $_REQUEST['pp8l'] . "' ,
`ppp1l` = '" . $_REQUEST['ppp1l'] . "' ,
`ppp2l` = '" . $_REQUEST['ppp2l'] . "' ,
`ppp3l` = '" . $_REQUEST['ppp3l'] . "' ,
`ppp4l` = '" . $_REQUEST['ppp4l'] . "' ,
`ppp5l` = '" . $_REQUEST['ppp5l'] . "' ,
`ppp6l` = '" . $_REQUEST['ppp6l'] . "' ,
`ppp7l` = '" . $_REQUEST['ppp7l'] . "' ,
`ppp8l` = '" . $_REQUEST['ppp8l'] . "' ,
`ca1l` = '" . $_REQUEST['ca1l'] . "' ,
`ca2l` = '" . $_REQUEST['ca2l'] . "' ,
`ca3l` = '" . $_REQUEST['ca3l'] . "' ,
`ca4l` = '" . $_REQUEST['ca4l'] . "' ,
`ca5l` = '" . $_REQUEST['ca5l'] . "' ,
`ca6l` = '" . $_REQUEST['ca6l'] . "' ,
`ca7l` = '" . $_REQUEST['ca7l'] . "' ,
`ca8l` = '" . $_REQUEST['ca8l'] . "' ,
`cac1l` = '" . $_REQUEST['cac1l'] . "' ,
`cac2l` = '" . $_REQUEST['cac2l'] . "' ,
`cac3l` = '" . $_REQUEST['cac3l'] . "' ,
`cac4l` = '" . $_REQUEST['cac4l'] . "' ,
`cac5l` = '" . $_REQUEST['cac5l'] . "' ,
`cac7l` = '" . $_REQUEST['cac7l'] . "' ,
`cac8l` = '" . $_REQUEST['cac8l'] . "' ,
`cac6l` = '" . $_REQUEST['cac6l'] . "' ,
`r1l` = '" . $_REQUEST['r1l'] . "' ,
`r2l` = '" . $_REQUEST['r2l'] . "' ,
`r3l` = '" . $_REQUEST['r3l'] . "' ,
`r4l` = '" . $_REQUEST['r4l'] . "' ,
`r5l` = '" . $_REQUEST['r5l'] . "' ,
`r6l` = '" . $_REQUEST['r6l'] . "' ,
`r7l` = '" . $_REQUEST['r7l'] . "' ,
`r8l` = '" . $_REQUEST['r8l'] . "' ,
`rr1l` = '" . $_REQUEST['rr1l'] . "' ,
`rr2l` = '" . $_REQUEST['rr2l'] . "' ,
`rr3l` = '" . $_REQUEST['rr3l'] . "' ,
`rr4l` = '" . $_REQUEST['rr4l'] . "' ,
`rr5l` = '" . $_REQUEST['rr5l'] . "' ,
`rr6l` = '" . $_REQUEST['rr6l'] . "' ,
`rr7l` = '" . $_REQUEST['rr7l'] . "' ,
`rr8l` = '" . $_REQUEST['rr8l'] . "' ,
`pie1l` = '" . $_REQUEST['pie1l'] . "' ,
`pie2l` = '" . $_REQUEST['pie2l'] . "' ,
`pie3l` = '" . $_REQUEST['pie3l'] . "' ,
`pie4l` = '" . $_REQUEST['pie4l'] . "' ,
`pie5l` = '" . $_REQUEST['pie5l'] . "' ,
`pie6l` = '" . $_REQUEST['pie6l'] . "' ,
`pie7l` = '" . $_REQUEST['pie7l'] . "' ,
`pie8l` = '" . $_REQUEST['pie8l'] . "' ,
`ppie1l` = '" . $_REQUEST['ppie1l'] . "' ,
`ppie2l` = '" . $_REQUEST['ppie2l'] . "' ,
`ppie3l` = '" . $_REQUEST['ppie3l'] . "' ,
`ppie4l` = '" . $_REQUEST['ppie4l'] . "' ,
`ppie5l` = '" . $_REQUEST['ppie5l'] . "' ,
`ppie6l` = '" . $_REQUEST['ppie6l'] . "' ,
`ppie7l` = '" . $_REQUEST['ppie7l'] . "' ,
`ppie8l` = '" . $_REQUEST['ppie8l'] . "' WHERE `id_h1_plano_lateral_nino` = '" . $_REQUEST['id_h1_plano_lateral_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_plano_lateral_nino = 'new';
$sql = "SELECT * from h1_plano_lateral_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_plano_lateral_nino = $row['id_h1_plano_lateral_nino'];
    
    $c1l = $row['c1l'];
    $c2l = $row['c2l'];
    $c3l = $row['c3l'];
    $c4l = $row['c4l'];
    $c5l = $row['c5l'];
    $c6l = $row['c6l'];
    $c7l = $row['c7l'];
    $c8l = $row['c8l'];
    $cc1l = $row['cc1l'];
    $cc2l = $row['cc2l'];
    $cc3l = $row['cc3l'];
    $cc4l = $row['cc4l'];
    $cc5l = $row['cc5l'];
    $cc6l = $row['cc6l'];
    $cc7l = $row['cc7l'];
    $cc8l = $row['cc8l'];
    $h1l = $row['h1l'];
    $h2l = $row['h2l'];
    $h3l = $row['h3l'];
    $h4l = $row['h4l'];
    $h5l = $row['h5l'];
    $h6l = $row['h6l'];
    $h7l = $row['h7l'];
    $h8l = $row['h8l'];
    $hh1l = $row['hh1l'];
    $hh2l = $row['hh2l'];
    $hh3l = $row['hh3l'];
    $hh4l = $row['hh4l'];
    $hh5l = $row['hh5l'];
    $hh6l = $row['hh6l'];
    $hh7l = $row['hh7l'];
    $hh8l = $row['hh8l'];
    $t1l = $row['t1l'];
    $t2l = $row['t2l'];
    $t3l = $row['t3l'];
    $t4l = $row['t4l'];
    $t5l = $row['t5l'];
    $t6l = $row['t6l'];
    $t7l = $row['t7l'];
    $t8l = $row['t8l'];
    $tt1l = $row['tt1l'];
    $tt2l = $row['tt2l'];
    $tt3l = $row['tt3l'];
    $tt4l = $row['tt4l'];
    $tt5l = $row['tt5l'];
    $tt6l = $row['tt6l'];
    $tt7l = $row['tt7l'];
    $tt8l = $row['tt8l'];
    $co1l = $row['co1l'];
    $co2l = $row['co2l'];
    $co3l = $row['co3l'];
    $co4l = $row['co4l'];
    $co5l = $row['co5l'];
    $co6l = $row['co6l'];
    $co7l = $row['co7l'];
    $co8l = $row['co8l'];
    $coco1l = $row['coco1l'];
    $coco2l = $row['coco2l'];
    $coco3l = $row['coco3l'];
    $coco4l = $row['coco4l'];
    $coco5l = $row['coco5l'];
    $coco6l = $row['coco6l'];
    $coco7l = $row['coco7l'];
    $coco8l = $row['coco8l'];
    $p1l = $row['p1l'];
    $p2l = $row['p2l'];
    $p3l = $row['p3l'];
    $p4l = $row['p4l'];
    $p5l = $row['p5l'];
    $p6l = $row['p6l'];
    $p7l = $row['p7l'];
    $p8l = $row['p8l'];
    $pp1l = $row['pp1l'];
    $pp2l = $row['pp2l'];
    $pp3l = $row['pp3l'];
    $pp4l = $row['pp4l'];
    $pp5l = $row['pp5l'];
    $pp6l = $row['pp6l'];
    $pp7l = $row['pp7l'];
    $pp8l = $row['pp8l'];
    $ppp1l = $row['ppp1l'];
    $ppp2l = $row['ppp2l'];
    $ppp3l = $row['ppp3l'];
    $ppp4l = $row['ppp4l'];
    $ppp5l = $row['ppp5l'];
    $ppp6l = $row['ppp6l'];
    $ppp7l = $row['ppp7l'];
    $ppp8l = $row['ppp8l'];
    $ca1l = $row['ca1l'];
    $ca2l = $row['ca2l'];
    $ca3l = $row['ca3l'];
    $ca4l = $row['ca4l'];
    $ca5l = $row['ca5l'];
    $ca6l = $row['ca6l'];
    $ca7l = $row['ca7l'];
    $ca8l = $row['ca8l'];
    $cac1l = $row['cac1l'];
    $cac2l = $row['cac2l'];
    $cac3l = $row['cac3l'];
    $cac4l = $row['cac4l'];
    $cac5l = $row['cac5l'];
    $cac7l = $row['cac7l'];
    $cac8l = $row['cac8l'];
    $cac6l = $row['cac6l'];
    $r1l = $row['r1l'];
    $r2l = $row['r2l'];
    $r3l = $row['r3l'];
    $r4l = $row['r4l'];
    $r5l = $row['r5l'];
    $r6l = $row['r6l'];
    $r7l = $row['r7l'];
    $r8l = $row['r8l'];
    $rr1l = $row['rr1l'];
    $rr2l = $row['rr2l'];
    $rr3l = $row['rr3l'];
    $rr4l = $row['rr4l'];
    $rr5l = $row['rr5l'];
    $rr6l = $row['rr6l'];
    $rr7l = $row['rr7l'];
    $rr8l = $row['rr8l'];
    $pie1l = $row['pie1l'];
    $pie2l = $row['pie2l'];
    $pie3l = $row['pie3l'];
    $pie4l = $row['pie4l'];
    $pie5l = $row['pie5l'];
    $pie6l = $row['pie6l'];
    $pie7l = $row['pie7l'];
    $pie8l = $row['pie8l'];
    $ppie1l = $row['ppie1l'];
    $ppie2l = $row['ppie2l'];
    $ppie3l = $row['ppie3l'];
    $ppie4l = $row['ppie4l'];
    $ppie5l = $row['ppie5l'];
    $ppie6l = $row['ppie6l'];
    $ppie7l = $row['ppie7l'];
    $ppie8l = $row['ppie8l'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_plano_lateral_nino").click(function() {
            $("#open-h1_plano_lateral_nino").show();
            $(this).hide();
            $("#content-h1_plano_lateral_nino").hide('slow');
        });

        $("#open-h1_plano_lateral_nino").click(function() {
            $("#close-h1_plano_lateral_nino").show();
            $(this).hide();
            $("#content-h1_plano_lateral_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_plano_lateral_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_plano_lateral_nino"></div> <div class="arrow-o" id="open-h1_plano_lateral_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Examen postural plano lateral</font></legend>
    <div id="content-h1_plano_lateral_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_plano_lateral_nino" id="guardar_h1_plano_lateral_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_plano_lateral_nino" name="form_h1_plano_lateral_nino" action="<?php echo @$action_form_h1_plano_lateral_nino ?>#h1_plano_lateral_nino" method="post">

            <input type="hidden" id="id_h1_plano_lateral_nino" name="id_h1_plano_lateral_nino" value="<?php echo @$id_h1_plano_lateral_nino ?>" />

            <table  border="0" class="data text_small" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td width="629" colspan="11"><br />
                        IZQUIERDA                                           EXAMINADOR                           DERECHA </td>
                </tr>
                <tr>
                    <td width="629" colspan="11"><p>                                  IZQUIERDA                                                  DERECHA</p></td>
                </tr>
                <tr>
                    <td width="629" colspan="11"><p>                              N    L       M       S                                          N    L       M    S</p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>CABEZA</p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c1l" name="c1l" value="<?php echo @$c1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c2l" name="c2l" value="<?php echo @$c2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c3l" name="c3l" value="<?php echo @$c3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c4l" name="c4l" value="<?php echo @$c4l; ?>" />
                        </p></td>
                    <td width="153"><p>FLEXIONADA</p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c5l" name="c5l" value="<?php echo @$c5l; ?>" />
                            &nbsp;</p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c6l" name="c6l" value="<?php echo @$c6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c7l" name="c7l" value="<?php echo @$c7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="c8l" name="c8l" value="<?php echo @$c8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>CABEZA</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc1l" name="cc1l" value="<?php echo @$cc1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc2l" name="cc2l" value="<?php echo @$cc2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc3l" name="cc3l" value="<?php echo @$cc3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc4l" name="cc4l" value="<?php echo @$cc4l; ?>" />
                        </p></td>
                    <td width="153"><p>EXTENDIDA</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc5l" name="cc5l" value="<?php echo @$cc5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc6l" name="cc6l" value="<?php echo @$cc6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc7l" name="cc7l" value="<?php echo @$cc7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cc8l" name="cc8l" value="<?php echo @$cc8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>HO                                                                                                                  MBROS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h1l" name="h1l" value="<?php echo @$h1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h2l" name="h2l" value="<?php echo @$h2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h3l" name="h3l" value="<?php echo @$h3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h4l" name="h4l" value="<?php echo @$h4l; ?>" />
                        </p></td>
                    <td width="153"><p>PROTRUIDOS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h5l" name="h5l" value="<?php echo @$h5l; ?>" />
                            &nbsp;</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h6l" name="h6l" value="<?php echo @$h6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h7l" name="h7l" value="<?php echo @$h7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="h8l" name="h8l" value="<?php echo @$h8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>HOMBROS</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh1l" name="hh1l" value="<?php echo @$hh1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh2l" name="hh2l" value="<?php echo @$hh2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh3l" name="hh3l" value="<?php echo @$hh3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh4l" name="hh4l" value="<?php echo @$hh4l; ?>" />
                        </p></td>
                    <td width="153"><p>RETRAÍDOS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh5l" name="hh5l" value="<?php echo @$hh5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh6l" name="hh6l" value="<?php echo @$hh6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh7l" name="hh7l" value="<?php echo @$hh7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="hh8l" name="hh8l" value="<?php echo @$hh8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>TÓRAX</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t1l" name="t1l" value="<?php echo @$t1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t2l" name="t2l" value="<?php echo @$t2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t3l" name="t3l" value="<?php echo @$t3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t4l" name="t4l" value="<?php echo @$t4l; ?>" />
                        </p></td>
                    <td width="153"><p>APLANADO</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t5l" name="t5l" value="<?php echo @$t5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t6l" name="t6l" value="<?php echo @$t6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t7l" name="t7l" value="<?php echo @$t7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="t8l" name="t8l" value="<?php echo @$t8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>TÓRAX</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt1l" name="tt1l" value="<?php echo @$tt1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt2l" name="tt2l" value="<?php echo @$tt2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt3l" name="tt3l" value="<?php echo @$tt3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt4l" name="tt4l" value="<?php echo @$tt4l; ?>" />
                        </p></td>
                    <td width="153"><p>EN QUILLA</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt5l" name="tt5l" value="<?php echo @$tt5l; ?>" />
                            &nbsp;</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt6l" name="tt6l" value="<?php echo @$tt6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt7l" name="tt7l" value="<?php echo @$tt7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="tt8l" name="tt8l" value="<?php echo @$tt8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>COLUMNA</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co1l" name="co1l" value="<?php echo @$co1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co2l" name="co2l" value="<?php echo @$co2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co3l" name="co3l" value="<?php echo @$co3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co4l" name="co4l" value="<?php echo @$co4l; ?>" />
                        </p></td>
                    <td width="153"><p>CIFOSIS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co5l" name="co5l" value="<?php echo @$co5l; ?>" />
                            &nbsp;</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co6l" name="co6l" value="<?php echo @$co6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co7l" name="co7l" value="<?php echo @$co7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="co8l" name="co8l" value="<?php echo @$co8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>COLUMNA</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco1l" name="coco1l" value="<?php echo @$coco1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco2l" name="coco2l" value="<?php echo @$coco2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco3l" name="coco3l" value="<?php echo @$coco3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco4l" name="coco4l" value="<?php echo @$coco4l; ?>" />
                        </p></td>
                    <td width="153"><p>LORDOSIS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco5l" name="coco5l" value="<?php echo @$coco5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco6l" name="coco6l" value="<?php echo @$coco6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco7l" name="coco7l" value="<?php echo @$coco7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="coco8l" name="coco8l" value="<?php echo @$coco8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="3"><p>PELVIS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p1l" name="p1l" value="<?php echo @$p1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p2l" name="p2l" value="<?php echo @$p2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p3l" name="p3l" value="<?php echo @$p3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p4l" name="p4l" value="<?php echo @$p4l; ?>" />
                        </p></td>
                    <td width="153"><p>ANTEVERSION</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p5l" name="p5l" value="<?php echo @$p5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p6l" name="p6l" value="<?php echo @$p6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p7l" name="p7l" value="<?php echo @$p7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="p8l" name="p8l" value="<?php echo @$p8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="3"><p>PELVIS</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp1l" name="pp1l" value="<?php echo @$pp1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp2l" name="pp2l" value="<?php echo @$pp2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp3l" name="pp3l" value="<?php echo @$pp3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp4l" name="pp4l" value="<?php echo @$pp4l; ?>" />
                        </p></td>
                    <td width="153"><p>ETROVERSION</p></td>
                    <td width="27"><p align="center">
                            <input type="text" class="input_txt valid" id="pp5l" name="pp5l" value="<?php echo @$pp5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp6l" name="pp6l" value="<?php echo @$pp6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp7l" name="pp7l" value="<?php echo @$pp7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pp8l" name="pp8l" value="<?php echo @$pp8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp1l" name="ppp1l" value="<?php echo @$ppp1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp2l" name="ppp2l" value="<?php echo @$ppp2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp3l" name="ppp3l" value="<?php echo @$ppp3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp4l" name="ppp4l" value="<?php echo @$ppp4l; ?>" />
                        </p></td>
                    <td width="153"><p>BDOMEN    PROTRUIDO</p></td>
                    <td width="27"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp5l" name="ppp5l" value="<?php echo @$ppp5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp6l" name="ppp6l" value="<?php echo @$ppp6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp7l" name="ppp7l" value="<?php echo @$ppp7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppp8l" name="ppp8l" value="<?php echo @$ppp8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>CADERAS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca1l" name="ca1l" value="<?php echo @$ca1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca2l" name="ca2l" value="<?php echo @$ca2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca3l" name="ca3l" value="<?php echo @$ca3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca4l" name="ca4l" value="<?php echo @$ca4l; ?>" />
                        </p></td>
                    <td width="153"><p>FLEXIONADAS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca5l" name="ca5l" value="<?php echo @$ca5l; ?>" />
                            &nbsp;</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca6l" name="ca6l" value="<?php echo @$ca6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca7l" name="ca7l" value="<?php echo @$ca7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ca8l" name="ca8l" value="<?php echo @$ca8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>CADERAS</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac1l" name="cac1l" value="<?php echo @$cac1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac2l" name="cac2l" value="<?php echo @$cac2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac3l" name="cac3l" value="<?php echo @$cac3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac4l" name="cac4l" value="<?php echo @$cac4l; ?>" />
                        </p></td>
                    <td width="153"><p>EXTENDIDAS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac5l" name="cac5l" value="<?php echo @$cac5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac7l" name="cac7l" value="<?php echo @$cac7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac8l" name="cac8l" value="<?php echo @$cac8l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="cac6l" name="cac6l" value="<?php echo @$cac6l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>RODILLAS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r1l" name="r1l" value="<?php echo @$r1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r2l" name="r2l" value="<?php echo @$r2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r3l" name="r3l" value="<?php echo @$r3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r4l" name="r4l" value="<?php echo @$r4l; ?>" />
                        </p></td>
                    <td width="153"><p>HIPEREXTENDIDAS</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r5l" name="r5l" value="<?php echo @$r5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r6l" name="r6l" value="<?php echo @$r6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r7l" name="r7l" value="<?php echo @$r7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="r8l" name="r8l" value="<?php echo @$r8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>RODILLAS</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr1l" name="rr1l" value="<?php echo @$rr1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr2l" name="rr2l" value="<?php echo @$rr2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr3l" name="rr3l" value="<?php echo @$rr3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr4l" name="rr4l" value="<?php echo @$rr4l; ?>" />
                        </p></td>
                    <td width="153"><p>ADUCCIÓN</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr5l" name="rr5l" value="<?php echo @$rr5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr6l" name="rr6l" value="<?php echo @$rr6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr7l" name="rr7l" value="<?php echo @$rr7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="rr8l" name="rr8l" value="<?php echo @$rr8l; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="124" rowspan="2"><p>PIE</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie1l" name="pie1l" value="<?php echo @$pie1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie2l" name="pie2l" value="<?php echo @$pie2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie3l" name="pie3l" value="<?php echo @$pie3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie4l" name="pie4l" value="<?php echo @$pie4l; ?>" />
                        </p></td>
                    <td width="153"><p>PLANO</p></td>
                    <td width="27" valign="top"><p align="center">&nbsp;
                            <input type="text" class="input_txt valid" id="pie5l" name="pie5l" value="<?php echo @$pie5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie6l" name="pie6l" value="<?php echo @$pie6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie7l" name="pie7l" value="<?php echo @$pie7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="pie8l" name="pie8l" value="<?php echo @$pie8l; ?>" />
                        </p></td>
                    <td width="133" rowspan="2"><p>PIE</p></td>
                </tr>
                <tr>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie1l" name="ppie1l" value="<?php echo @$ppie1l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie2l" name="ppie2l" value="<?php echo @$ppie2l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie3l" name="ppie3l" value="<?php echo @$ppie3l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie4l" name="ppie4l" value="<?php echo @$ppie4l; ?>" />
                        </p></td>
                    <td width="153"><p>DEDOS EN    MARTILLO</p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie5l" name="ppie5l" value="<?php echo @$ppie5l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie6l" name="ppie6l" value="<?php echo @$ppie6l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie7l" name="ppie7l" value="<?php echo @$ppie7l; ?>" />
                        </p></td>
                    <td width="27" valign="top"><p align="center">
                            <input type="text" class="input_txt valid" id="ppie8l" name="ppie8l" value="<?php echo @$ppie8l; ?>" />
                        </p></td>
                </tr>
            </table>

            <p>&nbsp;</p>


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>