<?php
if (isset($_REQUEST['guardar_h1_postural_anterior_nino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_postural_anterior_nino'] == 'new') {

        $sql = "INSERT INTO h1_postural_anterior_nino (
`id_h1_postural_anterior_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`fecha_plano_ant`,
`examinador_plano_ant`,
`cab_n1`,
`cab_l1`,
`cab_m1`,
`cab_s1`,
`cab_n1d`,
`cab_l1d`,
`cab_m1d`,
`cab_s1d`,
`cab_n2`,
`cab_l2`,
`cab_m2`,
`cab_s2`,
`cab_n2d`,
`cab_l2d`,
`cab_m2d`,
`cab_s2d`,
`h1`,
`h2`,
`h3`,
`h4`,
`h1d`,
`h2d`,
`h3d`,
`h4d`,
`hh1`,
`hh2`,
`hh3`,
`hh4`,
`hh1d`,
`hh2d`,
`hh3d`,
`hh4d`,
`t1`,
`t2`,
`t3`,
`t4`,
`t1d`,
`t2d`,
`t3d`,
`t4d`,
`tt1`,
`tt2`,
`tt3`,
`tt4`,
`tt1d`,
`tt2d`,
`tt3d`,
`tt4d`,
`a1`,
`a2`,
`a3`,
`a4`,
`a5`,
`a6`,
`a7`,
`a8`,
`aa1`,
`aa2`,
`aa3`,
`aa4`,
`aa5`,
`aa6`,
`aa7`,
`aa8`,
`p1`,
`p2`,
`p3`,
`p4`,
`p5`,
`p6`,
`p7`,
`p8`,
`pp1`,
`pp2`,
`pp3`,
`pp4`,
`pp5`,
`pp6`,
`pp7`,
`pp8`,
`pel1`,
`pel2`,
`pel3`,
`pel4`,
`pel5`,
`pel6`,
`pel7`,
`pel8`,
`r1`,
`r2`,
`r3`,
`r4`,
`r5`,
`r6`,
`r7`,
`r8`,
`rr1`,
`rr2`,
`rr3`,
`rr4`,
`rr5`,
`rr6`,
`rr7`,
`rr8`,
`pi1`,
`pi2`,
`pi3`,
`pi4`,
`pi5`,
`pi6`,
`pi7`,
`pi8`,
`f1`,
`f2`,
`f3`,
`f4`,
`f5`,
`f6`,
`f7`,
`f8`,
`ff1`,
`ff2`,
`ff3`,
`ff4`,
`ff5`,
`ff6`,
`ff7`,
`ff8`,
`fff1`,
`fff2`,
`fff3`,
`fff4`,
`fff5`,
`fff6`,
`fff7`,
`fff8`,
`fd1`,
`fd2`,
`fd3`,
`fd4`,
`fd5`,
`fd6`,
`fd7`,
`fd8`,
`pa1`,
`pa2`,
`pa3`,
`pa4`,
`pa5`,
`pa6`,
`pa7`,
`pa8`,
`ppa1`,
`ppa2`,
`ppa3`,
`ppa4`,
`ppa5`,
`ppa6`,
`ppa7`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`ppa8`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['fecha_plano_ant'] . "' ,
'" . $_REQUEST['examinador_plano_ant'] . "' ,
'" . $_REQUEST['cab_n1'] . "' ,
'" . $_REQUEST['cab_l1'] . "' ,
'" . $_REQUEST['cab_m1'] . "' ,
'" . $_REQUEST['cab_s1'] . "' ,
'" . $_REQUEST['cab_n1d'] . "' ,
'" . $_REQUEST['cab_l1d'] . "' ,
'" . $_REQUEST['cab_m1d'] . "' ,
'" . $_REQUEST['cab_s1d'] . "' ,
'" . $_REQUEST['cab_n2'] . "' ,
'" . $_REQUEST['cab_l2'] . "' ,
'" . $_REQUEST['cab_m2'] . "' ,
'" . $_REQUEST['cab_s2'] . "' ,
'" . $_REQUEST['cab_n2d'] . "' ,
'" . $_REQUEST['cab_l2d'] . "' ,
'" . $_REQUEST['cab_m2d'] . "' ,
'" . $_REQUEST['cab_s2d'] . "' ,
'" . $_REQUEST['h1'] . "' ,
'" . $_REQUEST['h2'] . "' ,
'" . $_REQUEST['h3'] . "' ,
'" . $_REQUEST['h4'] . "' ,
'" . $_REQUEST['h1d'] . "' ,
'" . $_REQUEST['h2d'] . "' ,
'" . $_REQUEST['h3d'] . "' ,
'" . $_REQUEST['h4d'] . "' ,
'" . $_REQUEST['hh1'] . "' ,
'" . $_REQUEST['hh2'] . "' ,
'" . $_REQUEST['hh3'] . "' ,
'" . $_REQUEST['hh4'] . "' ,
'" . $_REQUEST['hh1d'] . "' ,
'" . $_REQUEST['hh2d'] . "' ,
'" . $_REQUEST['hh3d'] . "' ,
'" . $_REQUEST['hh4d'] . "' ,
'" . $_REQUEST['t1'] . "' ,
'" . $_REQUEST['t2'] . "' ,
'" . $_REQUEST['t3'] . "' ,
'" . $_REQUEST['t4'] . "' ,
'" . $_REQUEST['t1d'] . "' ,
'" . $_REQUEST['t2d'] . "' ,
'" . $_REQUEST['t3d'] . "' ,
'" . $_REQUEST['t4d'] . "' ,
'" . $_REQUEST['tt1'] . "' ,
'" . $_REQUEST['tt2'] . "' ,
'" . $_REQUEST['tt3'] . "' ,
'" . $_REQUEST['tt4'] . "' ,
'" . $_REQUEST['tt1d'] . "' ,
'" . $_REQUEST['tt2d'] . "' ,
'" . $_REQUEST['tt3d'] . "' ,
'" . $_REQUEST['tt4d'] . "' ,
'" . $_REQUEST['a1'] . "' ,
'" . $_REQUEST['a2'] . "' ,
'" . $_REQUEST['a3'] . "' ,
'" . $_REQUEST['a4'] . "' ,
'" . $_REQUEST['a5'] . "' ,
'" . $_REQUEST['a6'] . "' ,
'" . $_REQUEST['a7'] . "' ,
'" . $_REQUEST['a8'] . "' ,
'" . $_REQUEST['aa1'] . "' ,
'" . $_REQUEST['aa2'] . "' ,
'" . $_REQUEST['aa3'] . "' ,
'" . $_REQUEST['aa4'] . "' ,
'" . $_REQUEST['aa5'] . "' ,
'" . $_REQUEST['aa6'] . "' ,
'" . $_REQUEST['aa7'] . "' ,
'" . $_REQUEST['aa8'] . "' ,
'" . $_REQUEST['p1'] . "' ,
'" . $_REQUEST['p2'] . "' ,
'" . $_REQUEST['p3'] . "' ,
'" . $_REQUEST['p4'] . "' ,
'" . $_REQUEST['p5'] . "' ,
'" . $_REQUEST['p6'] . "' ,
'" . $_REQUEST['p7'] . "' ,
'" . $_REQUEST['p8'] . "' ,
'" . $_REQUEST['pp1'] . "' ,
'" . $_REQUEST['pp2'] . "' ,
'" . $_REQUEST['pp3'] . "' ,
'" . $_REQUEST['pp4'] . "' ,
'" . $_REQUEST['pp5'] . "' ,
'" . $_REQUEST['pp6'] . "' ,
'" . $_REQUEST['pp7'] . "' ,
'" . $_REQUEST['pp8'] . "' ,
'" . $_REQUEST['pel1'] . "' ,
'" . $_REQUEST['pel2'] . "' ,
'" . $_REQUEST['pel3'] . "' ,
'" . $_REQUEST['pel4'] . "' ,
'" . $_REQUEST['pel5'] . "' ,
'" . $_REQUEST['pel6'] . "' ,
'" . $_REQUEST['pel7'] . "' ,
'" . $_REQUEST['pel8'] . "' ,
'" . $_REQUEST['r1'] . "' ,
'" . $_REQUEST['r2'] . "' ,
'" . $_REQUEST['r3'] . "' ,
'" . $_REQUEST['r4'] . "' ,
'" . $_REQUEST['r5'] . "' ,
'" . $_REQUEST['r6'] . "' ,
'" . $_REQUEST['r7'] . "' ,
'" . $_REQUEST['r8'] . "' ,
'" . $_REQUEST['rr1'] . "' ,
'" . $_REQUEST['rr2'] . "' ,
'" . $_REQUEST['rr3'] . "' ,
'" . $_REQUEST['rr4'] . "' ,
'" . $_REQUEST['rr5'] . "' ,
'" . $_REQUEST['rr6'] . "' ,
'" . $_REQUEST['rr7'] . "' ,
'" . $_REQUEST['rr8'] . "' ,
'" . $_REQUEST['pi1'] . "' ,
'" . $_REQUEST['pi2'] . "' ,
'" . $_REQUEST['pi3'] . "' ,
'" . $_REQUEST['pi4'] . "' ,
'" . $_REQUEST['pi5'] . "' ,
'" . $_REQUEST['pi6'] . "' ,
'" . $_REQUEST['pi7'] . "' ,
'" . $_REQUEST['pi8'] . "' ,
'" . $_REQUEST['f1'] . "' ,
'" . $_REQUEST['f2'] . "' ,
'" . $_REQUEST['f3'] . "' ,
'" . $_REQUEST['f4'] . "' ,
'" . $_REQUEST['f5'] . "' ,
'" . $_REQUEST['f6'] . "' ,
'" . $_REQUEST['f7'] . "' ,
'" . $_REQUEST['f8'] . "' ,
'" . $_REQUEST['ff1'] . "' ,
'" . $_REQUEST['ff2'] . "' ,
'" . $_REQUEST['ff3'] . "' ,
'" . $_REQUEST['ff4'] . "' ,
'" . $_REQUEST['ff5'] . "' ,
'" . $_REQUEST['ff6'] . "' ,
'" . $_REQUEST['ff7'] . "' ,
'" . $_REQUEST['ff8'] . "' ,
'" . $_REQUEST['fff1'] . "' ,
'" . $_REQUEST['fff2'] . "' ,
'" . $_REQUEST['fff3'] . "' ,
'" . $_REQUEST['fff4'] . "' ,
'" . $_REQUEST['fff5'] . "' ,
'" . $_REQUEST['fff6'] . "' ,
'" . $_REQUEST['fff7'] . "' ,
'" . $_REQUEST['fff8'] . "' ,
'" . $_REQUEST['fd1'] . "' ,
'" . $_REQUEST['fd2'] . "' ,
'" . $_REQUEST['fd3'] . "' ,
'" . $_REQUEST['fd4'] . "' ,
'" . $_REQUEST['fd5'] . "' ,
'" . $_REQUEST['fd6'] . "' ,
'" . $_REQUEST['fd7'] . "' ,
'" . $_REQUEST['fd8'] . "' ,
'" . $_REQUEST['pa1'] . "' ,
'" . $_REQUEST['pa2'] . "' ,
'" . $_REQUEST['pa3'] . "' ,
'" . $_REQUEST['pa4'] . "' ,
'" . $_REQUEST['pa5'] . "' ,
'" . $_REQUEST['pa6'] . "' ,
'" . $_REQUEST['pa7'] . "' ,
'" . $_REQUEST['pa8'] . "' ,
'" . $_REQUEST['ppa1'] . "' ,
'" . $_REQUEST['ppa2'] . "' ,
'" . $_REQUEST['ppa3'] . "' ,
'" . $_REQUEST['ppa4'] . "' ,
'" . $_REQUEST['ppa5'] . "' ,
'" . $_REQUEST['ppa6'] . "' ,
'" . $_REQUEST['ppa7'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ppa8'] . "' 
) ";
    } else if ($_REQUEST['id_h1_postural_anterior_nino'] != '') {

        $sql = "UPDATE h1_postural_anterior_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`fecha_plano_ant` = '" . $_REQUEST['fecha_plano_ant'] . "' ,
`examinador_plano_ant` = '" . $_REQUEST['examinador_plano_ant'] . "' ,
`cab_n1` = '" . $_REQUEST['cab_n1'] . "' ,
`cab_l1` = '" . $_REQUEST['cab_l1'] . "' ,
`cab_m1` = '" . $_REQUEST['cab_m1'] . "' ,
`cab_s1` = '" . $_REQUEST['cab_s1'] . "' ,
`cab_n1d` = '" . $_REQUEST['cab_n1d'] . "' ,
`cab_l1d` = '" . $_REQUEST['cab_l1d'] . "' ,
`cab_m1d` = '" . $_REQUEST['cab_m1d'] . "' ,
`cab_s1d` = '" . $_REQUEST['cab_s1d'] . "' ,
`cab_n2` = '" . $_REQUEST['cab_n2'] . "' ,
`cab_l2` = '" . $_REQUEST['cab_l2'] . "' ,
`cab_m2` = '" . $_REQUEST['cab_m2'] . "' ,
`cab_s2` = '" . $_REQUEST['cab_s2'] . "' ,
`cab_n2d` = '" . $_REQUEST['cab_n2d'] . "' ,
`cab_l2d` = '" . $_REQUEST['cab_l2d'] . "' ,
`cab_m2d` = '" . $_REQUEST['cab_m2d'] . "' ,
`cab_s2d` = '" . $_REQUEST['cab_s2d'] . "' ,
`h1` = '" . $_REQUEST['h1'] . "' ,
`h2` = '" . $_REQUEST['h2'] . "' ,
`h3` = '" . $_REQUEST['h3'] . "' ,
`h4` = '" . $_REQUEST['h4'] . "' ,
`h1d` = '" . $_REQUEST['h1d'] . "' ,
`h2d` = '" . $_REQUEST['h2d'] . "' ,
`h3d` = '" . $_REQUEST['h3d'] . "' ,
`h4d` = '" . $_REQUEST['h4d'] . "' ,
`hh1` = '" . $_REQUEST['hh1'] . "' ,
`hh2` = '" . $_REQUEST['hh2'] . "' ,
`hh3` = '" . $_REQUEST['hh3'] . "' ,
`hh4` = '" . $_REQUEST['hh4'] . "' ,
`hh1d` = '" . $_REQUEST['hh1d'] . "' ,
`hh2d` = '" . $_REQUEST['hh2d'] . "' ,
`hh3d` = '" . $_REQUEST['hh3d'] . "' ,
`hh4d` = '" . $_REQUEST['hh4d'] . "' ,
`t1` = '" . $_REQUEST['t1'] . "' ,
`t2` = '" . $_REQUEST['t2'] . "' ,
`t3` = '" . $_REQUEST['t3'] . "' ,
`t4` = '" . $_REQUEST['t4'] . "' ,
`t1d` = '" . $_REQUEST['t1d'] . "' ,
`t2d` = '" . $_REQUEST['t2d'] . "' ,
`t3d` = '" . $_REQUEST['t3d'] . "' ,
`t4d` = '" . $_REQUEST['t4d'] . "' ,
`tt1` = '" . $_REQUEST['tt1'] . "' ,
`tt2` = '" . $_REQUEST['tt2'] . "' ,
`tt3` = '" . $_REQUEST['tt3'] . "' ,
`tt4` = '" . $_REQUEST['tt4'] . "' ,
`tt1d` = '" . $_REQUEST['tt1d'] . "' ,
`tt2d` = '" . $_REQUEST['tt2d'] . "' ,
`tt3d` = '" . $_REQUEST['tt3d'] . "' ,
`tt4d` = '" . $_REQUEST['tt4d'] . "' ,
`a1` = '" . $_REQUEST['a1'] . "' ,
`a2` = '" . $_REQUEST['a2'] . "' ,
`a3` = '" . $_REQUEST['a3'] . "' ,
`a4` = '" . $_REQUEST['a4'] . "' ,
`a5` = '" . $_REQUEST['a5'] . "' ,
`a6` = '" . $_REQUEST['a6'] . "' ,
`a7` = '" . $_REQUEST['a7'] . "' ,
`a8` = '" . $_REQUEST['a8'] . "' ,
`aa1` = '" . $_REQUEST['aa1'] . "' ,
`aa2` = '" . $_REQUEST['aa2'] . "' ,
`aa3` = '" . $_REQUEST['aa3'] . "' ,
`aa4` = '" . $_REQUEST['aa4'] . "' ,
`aa5` = '" . $_REQUEST['aa5'] . "' ,
`aa6` = '" . $_REQUEST['aa6'] . "' ,
`aa7` = '" . $_REQUEST['aa7'] . "' ,
`aa8` = '" . $_REQUEST['aa8'] . "' ,
`p1` = '" . $_REQUEST['p1'] . "' ,
`p2` = '" . $_REQUEST['p2'] . "' ,
`p3` = '" . $_REQUEST['p3'] . "' ,
`p4` = '" . $_REQUEST['p4'] . "' ,
`p5` = '" . $_REQUEST['p5'] . "' ,
`p6` = '" . $_REQUEST['p6'] . "' ,
`p7` = '" . $_REQUEST['p7'] . "' ,
`p8` = '" . $_REQUEST['p8'] . "' ,
`pp1` = '" . $_REQUEST['pp1'] . "' ,
`pp2` = '" . $_REQUEST['pp2'] . "' ,
`pp3` = '" . $_REQUEST['pp3'] . "' ,
`pp4` = '" . $_REQUEST['pp4'] . "' ,
`pp5` = '" . $_REQUEST['pp5'] . "' ,
`pp6` = '" . $_REQUEST['pp6'] . "' ,
`pp7` = '" . $_REQUEST['pp7'] . "' ,
`pp8` = '" . $_REQUEST['pp8'] . "' ,
`pel1` = '" . $_REQUEST['pel1'] . "' ,
`pel2` = '" . $_REQUEST['pel2'] . "' ,
`pel3` = '" . $_REQUEST['pel3'] . "' ,
`pel4` = '" . $_REQUEST['pel4'] . "' ,
`pel5` = '" . $_REQUEST['pel5'] . "' ,
`pel6` = '" . $_REQUEST['pel6'] . "' ,
`pel7` = '" . $_REQUEST['pel7'] . "' ,
`pel8` = '" . $_REQUEST['pel8'] . "' ,
`r1` = '" . $_REQUEST['r1'] . "' ,
`r2` = '" . $_REQUEST['r2'] . "' ,
`r3` = '" . $_REQUEST['r3'] . "' ,
`r4` = '" . $_REQUEST['r4'] . "' ,
`r5` = '" . $_REQUEST['r5'] . "' ,
`r6` = '" . $_REQUEST['r6'] . "' ,
`r7` = '" . $_REQUEST['r7'] . "' ,
`r8` = '" . $_REQUEST['r8'] . "' ,
`rr1` = '" . $_REQUEST['rr1'] . "' ,
`rr2` = '" . $_REQUEST['rr2'] . "' ,
`rr3` = '" . $_REQUEST['rr3'] . "' ,
`rr4` = '" . $_REQUEST['rr4'] . "' ,
`rr5` = '" . $_REQUEST['rr5'] . "' ,
`rr6` = '" . $_REQUEST['rr6'] . "' ,
`rr7` = '" . $_REQUEST['rr7'] . "' ,
`rr8` = '" . $_REQUEST['rr8'] . "' ,
`pi1` = '" . $_REQUEST['pi1'] . "' ,
`pi2` = '" . $_REQUEST['pi2'] . "' ,
`pi3` = '" . $_REQUEST['pi3'] . "' ,
`pi4` = '" . $_REQUEST['pi4'] . "' ,
`pi5` = '" . $_REQUEST['pi5'] . "' ,
`pi6` = '" . $_REQUEST['pi6'] . "' ,
`pi7` = '" . $_REQUEST['pi7'] . "' ,
`pi8` = '" . $_REQUEST['pi8'] . "' ,
`f1` = '" . $_REQUEST['f1'] . "' ,
`f2` = '" . $_REQUEST['f2'] . "' ,
`f3` = '" . $_REQUEST['f3'] . "' ,
`f4` = '" . $_REQUEST['f4'] . "' ,
`f5` = '" . $_REQUEST['f5'] . "' ,
`f6` = '" . $_REQUEST['f6'] . "' ,
`f7` = '" . $_REQUEST['f7'] . "' ,
`f8` = '" . $_REQUEST['f8'] . "' ,
`ff1` = '" . $_REQUEST['ff1'] . "' ,
`ff2` = '" . $_REQUEST['ff2'] . "' ,
`ff3` = '" . $_REQUEST['ff3'] . "' ,
`ff4` = '" . $_REQUEST['ff4'] . "' ,
`ff5` = '" . $_REQUEST['ff5'] . "' ,
`ff6` = '" . $_REQUEST['ff6'] . "' ,
`ff7` = '" . $_REQUEST['ff7'] . "' ,
`ff8` = '" . $_REQUEST['ff8'] . "' ,
`fff1` = '" . $_REQUEST['fff1'] . "' ,
`fff2` = '" . $_REQUEST['fff2'] . "' ,
`fff3` = '" . $_REQUEST['fff3'] . "' ,
`fff4` = '" . $_REQUEST['fff4'] . "' ,
`fff5` = '" . $_REQUEST['fff5'] . "' ,
`fff6` = '" . $_REQUEST['fff6'] . "' ,
`fff7` = '" . $_REQUEST['fff7'] . "' ,
`fff8` = '" . $_REQUEST['fff8'] . "' ,
`fd1` = '" . $_REQUEST['fd1'] . "' ,
`fd2` = '" . $_REQUEST['fd2'] . "' ,
`fd3` = '" . $_REQUEST['fd3'] . "' ,
`fd4` = '" . $_REQUEST['fd4'] . "' ,
`fd5` = '" . $_REQUEST['fd5'] . "' ,
`fd6` = '" . $_REQUEST['fd6'] . "' ,
`fd7` = '" . $_REQUEST['fd7'] . "' ,
`fd8` = '" . $_REQUEST['fd8'] . "' ,
`pa1` = '" . $_REQUEST['pa1'] . "' ,
`pa2` = '" . $_REQUEST['pa2'] . "' ,
`pa3` = '" . $_REQUEST['pa3'] . "' ,
`pa4` = '" . $_REQUEST['pa4'] . "' ,
`pa5` = '" . $_REQUEST['pa5'] . "' ,
`pa6` = '" . $_REQUEST['pa6'] . "' ,
`pa7` = '" . $_REQUEST['pa7'] . "' ,
`pa8` = '" . $_REQUEST['pa8'] . "' ,
`ppa1` = '" . $_REQUEST['ppa1'] . "' ,
`ppa2` = '" . $_REQUEST['ppa2'] . "' ,
`ppa3` = '" . $_REQUEST['ppa3'] . "' ,
`ppa4` = '" . $_REQUEST['ppa4'] . "' ,
`ppa5` = '" . $_REQUEST['ppa5'] . "' ,
`ppa6` = '" . $_REQUEST['ppa6'] . "' ,
`ppa7` = '" . $_REQUEST['ppa7'] . "' ,
`ppa8` = '" . $_REQUEST['ppa8'] . "'  WHERE `id_h1_postural_anterior_nino` = '" . $_REQUEST['id_h1_postural_anterior_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_postural_anterior_nino = 'new';
$sql = "SELECT * from h1_postural_anterior_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_postural_anterior_nino = $row['id_h1_postural_anterior_nino'];

    $fecha_plano_ant = $row['fecha_plano_ant'];
    $examinador_plano_ant = $row['examinador_plano_ant'];
    $cab_n1 = $row['cab_n1'];
    $cab_l1 = $row['cab_l1'];
    $cab_m1 = $row['cab_m1'];
    $cab_s1 = $row['cab_s1'];
    $cab_n1d = $row['cab_n1d'];
    $cab_l1d = $row['cab_l1d'];
    $cab_m1d = $row['cab_m1d'];
    $cab_s1d = $row['cab_s1d'];
    $cab_n2 = $row['cab_n2'];
    $cab_l2 = $row['cab_l2'];
    $cab_m2 = $row['cab_m2'];
    $cab_s2 = $row['cab_s2'];
    $cab_n2d = $row['cab_n2d'];
    $cab_l2d = $row['cab_l2d'];
    $cab_m2d = $row['cab_m2d'];
    $cab_s2d = $row['cab_s2d'];
    $h1 = $row['h1'];
    $h2 = $row['h2'];
    $h3 = $row['h3'];
    $h4 = $row['h4'];
    $h1d = $row['h1d'];
    $h2d = $row['h2d'];
    $h3d = $row['h3d'];
    $h4d = $row['h4d'];
    $hh1 = $row['hh1'];
    $hh2 = $row['hh2'];
    $hh3 = $row['hh3'];
    $hh4 = $row['hh4'];
    $hh1d = $row['hh1d'];
    $hh2d = $row['hh2d'];
    $hh3d = $row['hh3d'];
    $hh4d = $row['hh4d'];
    $t1 = $row['t1'];
    $t2 = $row['t2'];
    $t3 = $row['t3'];
    $t4 = $row['t4'];
    $t1d = $row['t1d'];
    $t2d = $row['t2d'];
    $t3d = $row['t3d'];
    $t4d = $row['t4d'];
    $tt1 = $row['tt1'];
    $tt2 = $row['tt2'];
    $tt3 = $row['tt3'];
    $tt4 = $row['tt4'];
    $tt1d = $row['tt1d'];
    $tt2d = $row['tt2d'];
    $tt3d = $row['tt3d'];
    $tt4d = $row['tt4d'];
    $a1 = $row['a1'];
    $a2 = $row['a2'];
    $a3 = $row['a3'];
    $a4 = $row['a4'];
    $a5 = $row['a5'];
    $a6 = $row['a6'];
    $a7 = $row['a7'];
    $a8 = $row['a8'];
    $aa1 = $row['aa1'];
    $aa2 = $row['aa2'];
    $aa3 = $row['aa3'];
    $aa4 = $row['aa4'];
    $aa5 = $row['aa5'];
    $aa6 = $row['aa6'];
    $aa7 = $row['aa7'];
    $aa8 = $row['aa8'];
    $p1 = $row['p1'];
    $p2 = $row['p2'];
    $p3 = $row['p3'];
    $p4 = $row['p4'];
    $p5 = $row['p5'];
    $p6 = $row['p6'];
    $p7 = $row['p7'];
    $p8 = $row['p8'];
    $pp1 = $row['pp1'];
    $pp2 = $row['pp2'];
    $pp3 = $row['pp3'];
    $pp4 = $row['pp4'];
    $pp5 = $row['pp5'];
    $pp6 = $row['pp6'];
    $pp7 = $row['pp7'];
    $pp8 = $row['pp8'];
    $pel1 = $row['pel1'];
    $pel2 = $row['pel2'];
    $pel3 = $row['pel3'];
    $pel4 = $row['pel4'];
    $pel5 = $row['pel5'];
    $pel6 = $row['pel6'];
    $pel7 = $row['pel7'];
    $pel8 = $row['pel8'];
    $r1 = $row['r1'];
    $r2 = $row['r2'];
    $r3 = $row['r3'];
    $r4 = $row['r4'];
    $r5 = $row['r5'];
    $r6 = $row['r6'];
    $r7 = $row['r7'];
    $r8 = $row['r8'];
    $rr1 = $row['rr1'];
    $rr2 = $row['rr2'];
    $rr3 = $row['rr3'];
    $rr4 = $row['rr4'];
    $rr5 = $row['rr5'];
    $rr6 = $row['rr6'];
    $rr7 = $row['rr7'];
    $rr8 = $row['rr8'];
    $pi1 = $row['pi1'];
    $pi2 = $row['pi2'];
    $pi3 = $row['pi3'];
    $pi4 = $row['pi4'];
    $pi5 = $row['pi5'];
    $pi6 = $row['pi6'];
    $pi7 = $row['pi7'];
    $pi8 = $row['pi8'];
    $f1 = $row['f1'];
    $f2 = $row['f2'];
    $f3 = $row['f3'];
    $f4 = $row['f4'];
    $f5 = $row['f5'];
    $f6 = $row['f6'];
    $f7 = $row['f7'];
    $f8 = $row['f8'];
    $ff1 = $row['ff1'];
    $ff2 = $row['ff2'];
    $ff3 = $row['ff3'];
    $ff4 = $row['ff4'];
    $ff5 = $row['ff5'];
    $ff6 = $row['ff6'];
    $ff7 = $row['ff7'];
    $ff8 = $row['ff8'];
    $fff1 = $row['fff1'];
    $fff2 = $row['fff2'];
    $fff3 = $row['fff3'];
    $fff4 = $row['fff4'];
    $fff5 = $row['fff5'];
    $fff6 = $row['fff6'];
    $fff7 = $row['fff7'];
    $fff8 = $row['fff8'];
    $fd1 = $row['fd1'];
    $fd2 = $row['fd2'];
    $fd3 = $row['fd3'];
    $fd4 = $row['fd4'];
    $fd5 = $row['fd5'];
    $fd6 = $row['fd6'];
    $fd7 = $row['fd7'];
    $fd8 = $row['fd8'];
    $pa1 = $row['pa1'];
    $pa2 = $row['pa2'];
    $pa3 = $row['pa3'];
    $pa4 = $row['pa4'];
    $pa5 = $row['pa5'];
    $pa6 = $row['pa6'];
    $pa7 = $row['pa7'];
    $pa8 = $row['pa8'];
    $ppa1 = $row['ppa1'];
    $ppa2 = $row['ppa2'];
    $ppa3 = $row['ppa3'];
    $ppa4 = $row['ppa4'];
    $ppa5 = $row['ppa5'];
    $ppa6 = $row['ppa6'];
    $ppa7 = $row['ppa7'];
    $ppa8 = $row['ppa8'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_postural_anterior_nino1").click(function() {
            $("#open-h1_postural_anterior_nino1").show();
            $(this).hide();
            $("#content-h1_postural_anterior_nino1").hide('slow');
        });

        $("#open-h1_postural_anterior_nino1").click(function() {
            $("#close-h1_postural_anterior_nino1").show();
            $(this).hide();
            $("#content-h1_postural_anterior_nino1").show('slow');
        });

    });

</script>
<fieldset id="h1_postural_anterior_nino1">
    <legend align="left"> <div class="arrow-c" id="close-h1_postural_anterior_nino1"></div> <div class="arrow-o" id="open-h1_postural_anterior_nino1" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Examen postural plano anterior</font></legend>
    <div id="content-h1_postural_anterior_nino1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_postural_anterior_nino1" id="guardar_h1_postural_anterior_nino1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_postural_anterior_nino1" name="form_h1_postural_anterior_nino1" action="<?php echo @$action_form_h1_postural_anterior_nino1 ?>#h1_postural_anterior_nino1" method="post">

            <input type="hidden" id="id_h1_postural_anterior_nino" name="id_h1_postural_anterior_nino" value="<?php echo @$id_h1_postural_anterior_nino ?>" />

            <table  border="0" class="data" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td colspan="11"><br />
                        FECHA:
                        <input type="text" class="input_txt valid" id="fecha_plano_ant" name="fecha_plano_ant" value="<?php echo @$fecha_plano_ant; ?>" />                           
                        EXAMINADOR
                        <input type="text" class="input_txt valid" id="examinador_plano_ant" name="examinador_plano_ant" value="<?php echo @$examinador_plano_ant; ?>" />                                  </td>
                </tr>
                <tr>
                    <td colspan="11"><p>                              IZQUIERDA                                              DERECHA</p></td>
                </tr>
                <tr>
                    <td colspan="11"><p>                         N    L    M      S                                   N    L       M    S</p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="2" align="center"><p align="center">CABEZA</p></td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_n1" name="cab_n1" value="<?php echo @$cab_n1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_l1" name="cab_l1" value="<?php echo @$cab_l1; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_m1" name="cab_m1" value="<?php echo @$cab_m1; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_s1" name="cab_s1" value="<?php echo @$cab_s1; ?>" />
                        </p></td>
                    <td width="185"><p align="center">INCLINACIONES LATERALES</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_n1d" name="cab_n1d" value="<?php echo @$cab_n1d; ?>" />
                        </p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_l1d" name="cab_l1d" value="<?php echo @$cab_l1d; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_m1d" name="cab_m1d" value="<?php echo @$cab_m1d; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_s1d" name="cab_s1d" value="<?php echo @$cab_s1d; ?>" />
                        </p></td>
                    <td width="179" rowspan="2"><p align="center">CABEZA</p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_n2" name="cab_n2" value="<?php echo @$cab_n2; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_l2" name="cab_l2" value="<?php echo @$cab_l2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_m2" name="cab_m2" value="<?php echo @$cab_m2; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_s2" name="cab_s2" value="<?php echo @$cab_s2; ?>" />
                        </p></td>
                    <td width="185"><p align="center">ROTACIONES</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_n2d" name="cab_n2d" value="<?php echo @$cab_n2d; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_l2d" name="cab_l2d" value="<?php echo @$cab_l2d; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_m2d" name="cab_m2d" value="<?php echo @$cab_m2d; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="cab_s2d" name="cab_s2d" value="<?php echo @$cab_s2d; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="2" align="center"><p align="center">HOMBROS</p></td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h1" name="h1" value="<?php echo @$h1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h2" name="h2" value="<?php echo @$h2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h3" name="h3" value="<?php echo @$h3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h4" name="h4" value="<?php echo @$h4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">ELEVADOS</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h1d" name="h1d" value="<?php echo @$h1d; ?>" />
                        </p></td>
                    <td width="38" valign="top">
                        <p><input type="text" class="input_txt valid" id="h2d" name="h2d" value="<?php echo @$h2d; ?>" /></p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h3d" name="h3d" value="<?php echo @$h3d; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="h4d" name="h4d" value="<?php echo @$h4d; ?>" />
                        </p></td>
                    <td width="179" rowspan="2"><p align="center">HOMBROS<u></u></p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh1" name="hh1" value="<?php echo @$hh1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh2" name="hh2" value="<?php echo @$hh2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh3" name="hh3" value="<?php echo @$hh3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh4" name="hh4" value="<?php echo @$hh4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">DESCENDIDOS</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh1d" name="hh1d" value="<?php echo @$hh1d; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh2d" name="hh2d" value="<?php echo @$hh2d; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh3d" name="hh3d" value="<?php echo @$hh3d; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="hh4d" name="hh4d" value="<?php echo @$hh4d; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="2" align="center">TORAX</td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="t1" name="t1" value="<?php echo @$t1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="t2" name="t2" value="<?php echo @$t2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="t3" name="t3" value="<?php echo @$t3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="t4" name="t4" value="<?php echo @$t4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">APLANADO</p></td>
                    <td width="32" valign="top"><p>
                <input type="text" class="input_txt valid" id="t1d" name="t1d" value="<?php echo @$t1d; ?>" />
                </p></td>
                <td width="38" valign="top"><p>
                        <input type="text" class="input_txt valid" id="t2d" name="t2d" value="<?php echo @$t2d; ?>" />
                    </p></td>
                <td width="32" valign="top"><p>
                        <input type="text" class="input_txt valid" id="t3d" name="t3d" value="<?php echo @$t3d; ?>" />
                    </p></td>
                <td width="66" valign="top"><p>
                        <input type="text" class="input_txt valid" id="t4d" name="t4d" value="<?php echo @$t4d; ?>" />
                    </p></td>
                <td width="179" rowspan="2"><p align="center">TORAX </p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt1" name="tt1" value="<?php echo @$tt1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt2" name="tt2" value="<?php echo @$tt2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt3" name="tt3" value="<?php echo @$tt3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt4" name="tt4" value="<?php echo @$tt4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">EXCAVADO</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt1d" name="tt1d" value="<?php echo @$tt1d; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt2d" name="tt2d" value="<?php echo @$tt2d; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt3d" name="tt3d" value="<?php echo @$tt3d; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="tt4d" name="tt4d" value="<?php echo @$tt4d; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="2" align="center">ABDOMEN</td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a1" name="a1" value="<?php echo @$a1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a2" name="a2" value="<?php echo @$a2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a3" name="a3" value="<?php echo @$a3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a4" name="a4" value="<?php echo @$a4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">PROTRUIDO</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a5" name="a5" value="<?php echo @$a5; ?>" />
                        </p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a6" name="a6" value="<?php echo @$a6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a7" name="a7" value="<?php echo @$a7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="a8" name="a8" value="<?php echo @$a8; ?>" />
                        </p></td>
                    <td width="179" rowspan="2"><p align="center">ABDOMEN </p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa1" name="aa1" value="<?php echo @$aa1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa2" name="aa2" value="<?php echo @$aa2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa3" name="aa3" value="<?php echo @$aa3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa4" name="aa4" value="<?php echo @$aa4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">CAÍDO</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa5" name="aa5" value="<?php echo @$aa5; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa6" name="aa6" value="<?php echo @$aa6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa7" name="aa7" value="<?php echo @$aa7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa8" name="aa8" value="<?php echo @$aa8; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="3" align="center"><p align="center">PELVIS</p></td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p1" name="p1" value="<?php echo @$p1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p2" name="p2" value="<?php echo @$p2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p3" name="p3" value="<?php echo @$p3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p4" name="p4" value="<?php echo @$p4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">ELEVADAS</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p5" name="p5" value="<?php echo @$p5; ?>" />
                        </p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p6" name="p6" value="<?php echo @$p6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p7" name="p7" value="<?php echo @$p7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="p8" name="p8" value="<?php echo @$p8; ?>" />
                        </p></td>
                    <td width="179" rowspan="3"><p align="center">PELVIS</p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp1" name="pp1" value="<?php echo @$pp1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp2" name="pp2" value="<?php echo @$pp2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp3" name="pp3" value="<?php echo @$pp3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp4" name="pp4" value="<?php echo @$pp4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">DESCENDIDAS</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp5" name="pp5" value="<?php echo @$pp5; ?>" />
                        </p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp6" name="pp6" value="<?php echo @$pp6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp7" name="pp7" value="<?php echo @$pp7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pp8" name="pp8" value="<?php echo @$pp8; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel1" name="pel1" value="<?php echo @$pel1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel2" name="pel2" value="<?php echo @$pel2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel3" name="pel3" value="<?php echo @$pel3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel4" name="pel4" value="<?php echo @$pel4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">ROTADAS</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel5" name="pel5" value="<?php echo @$pel5; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel6" name="pel6" value="<?php echo @$pel6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel7" name="pel7" value="<?php echo @$pel7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pel8" name="pel8" value="<?php echo @$pel8; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="2" align="center"><p>RODILLAS</p></td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r1" name="r1" value="<?php echo @$r1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r2" name="r2" value="<?php echo @$r2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r3" name="r3" value="<?php echo @$r3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r4" name="r4" value="<?php echo @$r4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">RODILLAS EN VARO</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r5" name="r5" value="<?php echo @$r5; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r6" name="r6" value="<?php echo @$r6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r7" name="r7" value="<?php echo @$r7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="r8" name="r8" value="<?php echo @$r8; ?>" />
                        </p></td>
                    <td width="179" rowspan="2"><p>RODILLAS</p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr1" name="rr1" value="<?php echo @$rr1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr2" name="rr2" value="<?php echo @$rr2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr3" name="rr3" value="<?php echo @$rr3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr4" name="rr4" value="<?php echo @$rr4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">RODILLAS EN VALGO</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr5" name="rr5" value="<?php echo @$rr5; ?>" />
                        </p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr6" name="rr6" value="<?php echo @$rr6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr7" name="rr7" value="<?php echo @$rr7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="rr8" name="rr8" value="<?php echo @$rr8; ?>" />
                        </p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" align="center"><p>PIERNAS</p></td>
                    <td width="28" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi1" name="pi1" value="<?php echo @$pi1; ?>" />
                        </p></td>
                    <td width="33" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi2" name="pi2" value="<?php echo @$pi2; ?>" />
                        </p></td>
                    <td width="65" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi3" name="pi3" value="<?php echo @$pi3; ?>" />
                        </p></td>
                    <td width="35" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi4" name="pi4" value="<?php echo @$pi4; ?>" />
                        </p></td>
                    <td width="185"><p align="center">TORSIÓN     TIBIAL</p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi5" name="pi5" value="<?php echo @$pi5; ?>" />
                            &nbsp;</p></td>
                    <td width="38" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi6" name="pi6" value="<?php echo @$pi6; ?>" />
                        </p></td>
                    <td width="32" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi7" name="pi7" value="<?php echo @$pi7; ?>" />
                        </p></td>
                    <td width="66" valign="top"><p>
                            <input type="text" class="input_txt valid" id="pi8" name="pi8" value="<?php echo @$pi8; ?>" />
                        </p></td>
                    <td width="179"><p>PIERNAS</p></td>
                </tr>
                <tr class="text_small">
                    <td width="129" rowspan="6" align="center"><p>PIES</p></td>
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="f1" name="f1" value="<?php echo @$f1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="f2" name="f2" value="<?php echo @$f2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="f3" name="f3" value="<?php echo @$f3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="f4" name="f4" value="<?php echo @$f4; ?>" /></td>
                    <td width="185"><p align="center">PRONADOS</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="f5" name="f5" value="<?php echo @$f5; ?>" />
                        &nbsp;</td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="f6" name="f6" value="<?php echo @$f6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="f7" name="f7" value="<?php echo @$f7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="f8" name="f8" value="<?php echo @$f8; ?>" /></td>
                    <td width="179" rowspan="6"><p>PIES</p></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="ff1" name="ff1" value="<?php echo @$ff1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="ff2" name="ff2" value="<?php echo @$ff2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="ff3" name="ff3" value="<?php echo @$ff3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="ff4" name="ff4" value="<?php echo @$ff4; ?>" /></td>
                    <td width="185"><p align="center">SUPINADOS</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="ff5" name="ff5" value="<?php echo @$ff5; ?>" /></td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="ff6" name="ff6" value="<?php echo @$ff6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="ff7" name="ff7" value="<?php echo @$ff7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="ff8" name="ff8" value="<?php echo @$ff8; ?>" /></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="fff1" name="fff1" value="<?php echo @$fff1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="fff2" name="fff2" value="<?php echo @$fff2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="fff3" name="fff3" value="<?php echo @$fff3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="fff4" name="fff4" value="<?php echo @$fff4; ?>" /></td>
                    <td width="185"><p>DEDOS EN MARTILLO</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="fff5" name="fff5" value="<?php echo @$fff5; ?>" /></td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="fff6" name="fff6" value="<?php echo @$fff6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="fff7" name="fff7" value="<?php echo @$fff7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="fff8" name="fff8" value="<?php echo @$fff8; ?>" /></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="fd1" name="fd1" value="<?php echo @$fd1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="fd2" name="fd2" value="<?php echo @$fd2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="fd3" name="fd3" value="<?php echo @$fd3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="fd4" name="fd4" value="<?php echo @$fd4; ?>" /></td>
                    <td width="185"><p>HALLUX VALGUS</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="fd5" name="fd5" value="<?php echo @$fd5; ?>" /></td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="fd6" name="fd6" value="<?php echo @$fd6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="fd7" name="fd7" value="<?php echo @$fd7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="fd8" name="fd8" value="<?php echo @$fd8; ?>" /></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="pa1" name="pa1" value="<?php echo @$pa1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="pa2" name="pa2" value="<?php echo @$pa2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="pa3" name="pa3" value="<?php echo @$pa3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="pa4" name="pa4" value="<?php echo @$pa4; ?>" /></td>
                    <td width="185"><p>ANTEPIE HACIA FUERA</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="pa5" name="pa5" value="<?php echo @$pa5; ?>" />
                        &nbsp;</td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="pa6" name="pa6" value="<?php echo @$pa6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="pa7" name="pa7" value="<?php echo @$pa7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="pa8" name="pa8" value="<?php echo @$pa8; ?>" /></td>
                </tr>
                <tr class="text_small">
                    <td width="28" valign="top"><input type="text" class="input_txt valid" id="ppa1" name="ppa1" value="<?php echo @$ppa1; ?>" /></td>
                    <td width="33" valign="top"><input type="text" class="input_txt valid" id="ppa2" name="ppa2" value="<?php echo @$ppa2; ?>" /></td>
                    <td width="65" valign="top"><input type="text" class="input_txt valid" id="ppa3" name="ppa3" value="<?php echo @$ppa3; ?>" /></td>
                    <td width="35" valign="top"><input type="text" class="input_txt valid" id="ppa4" name="ppa4" value="<?php echo @$ppa4; ?>" /></td>
                    <td width="185"><p>ANTEPIE HACIA DENTRO</p></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="ppa5" name="ppa5" value="<?php echo @$ppa5; ?>" /></td>
                    <td width="38" valign="top"><input type="text" class="input_txt valid" id="ppa6" name="ppa6" value="<?php echo @$ppa6; ?>" /></td>
                    <td width="32" valign="top"><input type="text" class="input_txt valid" id="ppa7" name="ppa7" value="<?php echo @$ppa7; ?>" /></td>
                    <td width="66" valign="top"><input type="text" class="input_txt valid" id="ppa8" name="ppa8" value="<?php echo @$ppa8; ?>" /></td>
                </tr>
            </table>



            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>