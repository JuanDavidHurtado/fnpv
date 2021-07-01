<?php
if (isset($_REQUEST['guardar_h1_postural_posterior_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_postural_posterior_nino'] == 'new') {

        $sql = "INSERT INTO h1_postural_posterior_nino (
`id_h1_postural_posterior_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`cabeza11`,
`cabeza12`,
`cabeza13`,
`cabeza14`,
`cabeza15`,
`cabeza16`,
`cabeza17`,
`cabeza18`,
`cabeza21`,
`cabeza22`,
`cabeza23`,
`cabeza24`,
`cabeza25`,
`cabeza26`,
`cabeza27`,
`cabeza28`,
`cabeza31`,
`cabeza32`,
`cabeza33`,
`cabeza34`,
`cabeza35`,
`cabeza36`,
`cabeza37`,
`cabeza38`,
`hombro11`,
`hombro12`,
`hombro13`,
`hombro14`,
`hombro15`,
`hombro16`,
`hombro17`,
`hombro18`,
`hombro21`,
`hombro22`,
`hombro23`,
`hombro24`,
`hombro25`,
`hombro26`,
`hombro27`,
`hombro28`,
`esca11`,
`esca12`,
`esca13`,
`esca14`,
`esca15`,
`esca16`,
`esca17`,
`esca18`,
`esca21`,
`esca22`,
`esca23`,
`esca24`,
`esca25`,
`esca26`,
`esca27`,
`esca28`,
`esca31`,
`esca32`,
`esca33`,
`esca34`,
`esca35`,
`esca36`,
`esca37`,
`esca38`,
`colum11`,
`colum12`,
`colum13`,
`colum14`,
`colum15`,
`colum16`,
`colum17`,
`colum18`,
`colum21`,
`colum22`,
`colum23`,
`colum24`,
`colum25`,
`colum26`,
`colum27`,
`colum28`,
`colum31`,
`colum32`,
`colum33`,
`colum34`,
`colum35`,
`colum36`,
`colum37`,
`colum38`,
`pelvis11`,
`pelvis12`,
`pelvis13`,
`pelvis14`,
`pelvis15`,
`pelvis16`,
`pelvis17`,
`pelvis18`,
`pelvis21`,
`pelvis22`,
`pelvis23`,
`pelvis24`,
`pelvis25`,
`pelvis26`,
`pelvis27`,
`pelvis28`,
`pelvis31`,
`pelvis32`,
`pelvis33`,
`pelvis34`,
`pelvis35`,
`pelvis36`,
`pelvis37`,
`pelvis38`,
`rodi11`,
`rodi12`,
`rodi13`,
`rodi14`,
`rodi15`,
`rodi16`,
`rodi17`,
`rodi18`,
`rodi21`,
`rodi22`,
`rodi23`,
`rodi24`,
`rodi25`,
`rodi26`,
`rodi27`,
`rodi28`,
`pierna1`,
`pierna2`,
`pierna3`,
`pierna4`,
`pierna5`,
`pierna6`,
`pierna7`,
`pierna8`,
`pies11`,
`pies12`,
`pies13`,
`pies14`,
`pies15`,
`pies16`,
`pies17`,
`pies18`,
`pies21`,
`pies22`,
`pies23`,
`pies24`,
`pies25`,
`pies26`,
`pies27`,
`pies28`,
`pies31`,
`pies32`,
`pies33`,
`pies34`,
`pies35`,
`pies36`,
`pies37`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`pies38`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['cabeza11'] . "' ,
'" . $_REQUEST['cabeza12'] . "' ,
'" . $_REQUEST['cabeza13'] . "' ,
'" . $_REQUEST['cabeza14'] . "' ,
'" . $_REQUEST['cabeza15'] . "' ,
'" . $_REQUEST['cabeza16'] . "' ,
'" . $_REQUEST['cabeza17'] . "' ,
'" . $_REQUEST['cabeza18'] . "' ,
'" . $_REQUEST['cabeza21'] . "' ,
'" . $_REQUEST['cabeza22'] . "' ,
'" . $_REQUEST['cabeza23'] . "' ,
'" . $_REQUEST['cabeza24'] . "' ,
'" . $_REQUEST['cabeza25'] . "' ,
'" . $_REQUEST['cabeza26'] . "' ,
'" . $_REQUEST['cabeza27'] . "' ,
'" . $_REQUEST['cabeza28'] . "' ,
'" . $_REQUEST['cabeza31'] . "' ,
'" . $_REQUEST['cabeza32'] . "' ,
'" . $_REQUEST['cabeza33'] . "' ,
'" . $_REQUEST['cabeza34'] . "' ,
'" . $_REQUEST['cabeza35'] . "' ,
'" . $_REQUEST['cabeza36'] . "' ,
'" . $_REQUEST['cabeza37'] . "' ,
'" . $_REQUEST['cabeza38'] . "' ,
'" . $_REQUEST['hombro11'] . "' ,
'" . $_REQUEST['hombro12'] . "' ,
'" . $_REQUEST['hombro13'] . "' ,
'" . $_REQUEST['hombro14'] . "' ,
'" . $_REQUEST['hombro15'] . "' ,
'" . $_REQUEST['hombro16'] . "' ,
'" . $_REQUEST['hombro17'] . "' ,
'" . $_REQUEST['hombro18'] . "' ,
'" . $_REQUEST['hombro21'] . "' ,
'" . $_REQUEST['hombro22'] . "' ,
'" . $_REQUEST['hombro23'] . "' ,
'" . $_REQUEST['hombro24'] . "' ,
'" . $_REQUEST['hombro25'] . "' ,
'" . $_REQUEST['hombro26'] . "' ,
'" . $_REQUEST['hombro27'] . "' ,
'" . $_REQUEST['hombro28'] . "' ,
'" . $_REQUEST['esca11'] . "' ,
'" . $_REQUEST['esca12'] . "' ,
'" . $_REQUEST['esca13'] . "' ,
'" . $_REQUEST['esca14'] . "' ,
'" . $_REQUEST['esca15'] . "' ,
'" . $_REQUEST['esca16'] . "' ,
'" . $_REQUEST['esca17'] . "' ,
'" . $_REQUEST['esca18'] . "' ,
'" . $_REQUEST['esca21'] . "' ,
'" . $_REQUEST['esca22'] . "' ,
'" . $_REQUEST['esca23'] . "' ,
'" . $_REQUEST['esca24'] . "' ,
'" . $_REQUEST['esca25'] . "' ,
'" . $_REQUEST['esca26'] . "' ,
'" . $_REQUEST['esca27'] . "' ,
'" . $_REQUEST['esca28'] . "' ,
'" . $_REQUEST['esca31'] . "' ,
'" . $_REQUEST['esca32'] . "' ,
'" . $_REQUEST['esca33'] . "' ,
'" . $_REQUEST['esca34'] . "' ,
'" . $_REQUEST['esca35'] . "' ,
'" . $_REQUEST['esca36'] . "' ,
'" . $_REQUEST['esca37'] . "' ,
'" . $_REQUEST['esca38'] . "' ,
'" . $_REQUEST['colum11'] . "' ,
'" . $_REQUEST['colum12'] . "' ,
'" . $_REQUEST['colum13'] . "' ,
'" . $_REQUEST['colum14'] . "' ,
'" . $_REQUEST['colum15'] . "' ,
'" . $_REQUEST['colum16'] . "' ,
'" . $_REQUEST['colum17'] . "' ,
'" . $_REQUEST['colum18'] . "' ,
'" . $_REQUEST['colum21'] . "' ,
'" . $_REQUEST['colum22'] . "' ,
'" . $_REQUEST['colum23'] . "' ,
'" . $_REQUEST['colum24'] . "' ,
'" . $_REQUEST['colum25'] . "' ,
'" . $_REQUEST['colum26'] . "' ,
'" . $_REQUEST['colum27'] . "' ,
'" . $_REQUEST['colum28'] . "' ,
'" . $_REQUEST['colum31'] . "' ,
'" . $_REQUEST['colum32'] . "' ,
'" . $_REQUEST['colum33'] . "' ,
'" . $_REQUEST['colum34'] . "' ,
'" . $_REQUEST['colum35'] . "' ,
'" . $_REQUEST['colum36'] . "' ,
'" . $_REQUEST['colum37'] . "' ,
'" . $_REQUEST['colum38'] . "' ,
'" . $_REQUEST['pelvis11'] . "' ,
'" . $_REQUEST['pelvis12'] . "' ,
'" . $_REQUEST['pelvis13'] . "' ,
'" . $_REQUEST['pelvis14'] . "' ,
'" . $_REQUEST['pelvis15'] . "' ,
'" . $_REQUEST['pelvis16'] . "' ,
'" . $_REQUEST['pelvis17'] . "' ,
'" . $_REQUEST['pelvis18'] . "' ,
'" . $_REQUEST['pelvis21'] . "' ,
'" . $_REQUEST['pelvis22'] . "' ,
'" . $_REQUEST['pelvis23'] . "' ,
'" . $_REQUEST['pelvis24'] . "' ,
'" . $_REQUEST['pelvis25'] . "' ,
'" . $_REQUEST['pelvis26'] . "' ,
'" . $_REQUEST['pelvis27'] . "' ,
'" . $_REQUEST['pelvis28'] . "' ,
'" . $_REQUEST['pelvis31'] . "' ,
'" . $_REQUEST['pelvis32'] . "' ,
'" . $_REQUEST['pelvis33'] . "' ,
'" . $_REQUEST['pelvis34'] . "' ,
'" . $_REQUEST['pelvis35'] . "' ,
'" . $_REQUEST['pelvis36'] . "' ,
'" . $_REQUEST['pelvis37'] . "' ,
'" . $_REQUEST['pelvis38'] . "' ,
'" . $_REQUEST['rodi11'] . "' ,
'" . $_REQUEST['rodi12'] . "' ,
'" . $_REQUEST['rodi13'] . "' ,
'" . $_REQUEST['rodi14'] . "' ,
'" . $_REQUEST['rodi15'] . "' ,
'" . $_REQUEST['rodi16'] . "' ,
'" . $_REQUEST['rodi17'] . "' ,
'" . $_REQUEST['rodi18'] . "' ,
'" . $_REQUEST['rodi21'] . "' ,
'" . $_REQUEST['rodi22'] . "' ,
'" . $_REQUEST['rodi23'] . "' ,
'" . $_REQUEST['rodi24'] . "' ,
'" . $_REQUEST['rodi25'] . "' ,
'" . $_REQUEST['rodi26'] . "' ,
'" . $_REQUEST['rodi27'] . "' ,
'" . $_REQUEST['rodi28'] . "' ,
'" . $_REQUEST['pierna1'] . "' ,
'" . $_REQUEST['pierna2'] . "' ,
'" . $_REQUEST['pierna3'] . "' ,
'" . $_REQUEST['pierna4'] . "' ,
'" . $_REQUEST['pierna5'] . "' ,
'" . $_REQUEST['pierna6'] . "' ,
'" . $_REQUEST['pierna7'] . "' ,
'" . $_REQUEST['pierna8'] . "' ,
'" . $_REQUEST['pies11'] . "' ,
'" . $_REQUEST['pies12'] . "' ,
'" . $_REQUEST['pies13'] . "' ,
'" . $_REQUEST['pies14'] . "' ,
'" . $_REQUEST['pies15'] . "' ,
'" . $_REQUEST['pies16'] . "' ,
'" . $_REQUEST['pies17'] . "' ,
'" . $_REQUEST['pies18'] . "' ,
'" . $_REQUEST['pies21'] . "' ,
'" . $_REQUEST['pies22'] . "' ,
'" . $_REQUEST['pies23'] . "' ,
'" . $_REQUEST['pies24'] . "' ,
'" . $_REQUEST['pies25'] . "' ,
'" . $_REQUEST['pies26'] . "' ,
'" . $_REQUEST['pies27'] . "' ,
'" . $_REQUEST['pies28'] . "' ,
'" . $_REQUEST['pies31'] . "' ,
'" . $_REQUEST['pies32'] . "' ,
'" . $_REQUEST['pies33'] . "' ,
'" . $_REQUEST['pies34'] . "' ,
'" . $_REQUEST['pies35'] . "' ,
'" . $_REQUEST['pies36'] . "' ,
'" . $_REQUEST['pies37'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['pies38'] . "'
) ";
    } else if ($_REQUEST['id_h1_postural_posterior_nino'] != '') {

        $sql = "UPDATE h1_postural_posterior_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`cabeza11` = '" . $_REQUEST['cabeza11'] . "' ,
`cabeza12` = '" . $_REQUEST['cabeza12'] . "' ,
`cabeza13` = '" . $_REQUEST['cabeza13'] . "' ,
`cabeza14` = '" . $_REQUEST['cabeza14'] . "' ,
`cabeza15` = '" . $_REQUEST['cabeza15'] . "' ,
`cabeza16` = '" . $_REQUEST['cabeza16'] . "' ,
`cabeza17` = '" . $_REQUEST['cabeza17'] . "' ,
`cabeza18` = '" . $_REQUEST['cabeza18'] . "' ,
`cabeza21` = '" . $_REQUEST['cabeza21'] . "' ,
`cabeza22` = '" . $_REQUEST['cabeza22'] . "' ,
`cabeza23` = '" . $_REQUEST['cabeza23'] . "' ,
`cabeza24` = '" . $_REQUEST['cabeza24'] . "' ,
`cabeza25` = '" . $_REQUEST['cabeza25'] . "' ,
`cabeza26` = '" . $_REQUEST['cabeza26'] . "' ,
`cabeza27` = '" . $_REQUEST['cabeza27'] . "' ,
`cabeza28` = '" . $_REQUEST['cabeza28'] . "' ,
`cabeza31` = '" . $_REQUEST['cabeza31'] . "' ,
`cabeza32` = '" . $_REQUEST['cabeza32'] . "' ,
`cabeza33` = '" . $_REQUEST['cabeza33'] . "' ,
`cabeza34` = '" . $_REQUEST['cabeza34'] . "' ,
`cabeza35` = '" . $_REQUEST['cabeza35'] . "' ,
`cabeza36` = '" . $_REQUEST['cabeza36'] . "' ,
`cabeza37` = '" . $_REQUEST['cabeza37'] . "' ,
`cabeza38` = '" . $_REQUEST['cabeza38'] . "' ,
`hombro11` = '" . $_REQUEST['hombro11'] . "' ,
`hombro12` = '" . $_REQUEST['hombro12'] . "' ,
`hombro13` = '" . $_REQUEST['hombro13'] . "' ,
`hombro14` = '" . $_REQUEST['hombro14'] . "' ,
`hombro15` = '" . $_REQUEST['hombro15'] . "' ,
`hombro16` = '" . $_REQUEST['hombro16'] . "' ,
`hombro17` = '" . $_REQUEST['hombro17'] . "' ,
`hombro18` = '" . $_REQUEST['hombro18'] . "' ,
`hombro21` = '" . $_REQUEST['hombro21'] . "' ,
`hombro22` = '" . $_REQUEST['hombro22'] . "' ,
`hombro23` = '" . $_REQUEST['hombro23'] . "' ,
`hombro24` = '" . $_REQUEST['hombro24'] . "' ,
`hombro25` = '" . $_REQUEST['hombro25'] . "' ,
`hombro26` = '" . $_REQUEST['hombro26'] . "' ,
`hombro27` = '" . $_REQUEST['hombro27'] . "' ,
`hombro28` = '" . $_REQUEST['hombro28'] . "' ,
`esca11` = '" . $_REQUEST['esca11'] . "' ,
`esca12` = '" . $_REQUEST['esca12'] . "' ,
`esca13` = '" . $_REQUEST['esca13'] . "' ,
`esca14` = '" . $_REQUEST['esca14'] . "' ,
`esca15` = '" . $_REQUEST['esca15'] . "' ,
`esca16` = '" . $_REQUEST['esca16'] . "' ,
`esca17` = '" . $_REQUEST['esca17'] . "' ,
`esca18` = '" . $_REQUEST['esca18'] . "' ,
`esca21` = '" . $_REQUEST['esca21'] . "' ,
`esca22` = '" . $_REQUEST['esca22'] . "' ,
`esca23` = '" . $_REQUEST['esca23'] . "' ,
`esca24` = '" . $_REQUEST['esca24'] . "' ,
`esca25` = '" . $_REQUEST['esca25'] . "' ,
`esca26` = '" . $_REQUEST['esca26'] . "' ,
`esca27` = '" . $_REQUEST['esca27'] . "' ,
`esca28` = '" . $_REQUEST['esca28'] . "' ,
`esca31` = '" . $_REQUEST['esca31'] . "' ,
`esca32` = '" . $_REQUEST['esca32'] . "' ,
`esca33` = '" . $_REQUEST['esca33'] . "' ,
`esca34` = '" . $_REQUEST['esca34'] . "' ,
`esca35` = '" . $_REQUEST['esca35'] . "' ,
`esca36` = '" . $_REQUEST['esca36'] . "' ,
`esca37` = '" . $_REQUEST['esca37'] . "' ,
`esca38` = '" . $_REQUEST['esca38'] . "' ,
`colum11` = '" . $_REQUEST['colum11'] . "' ,
`colum12` = '" . $_REQUEST['colum12'] . "' ,
`colum13` = '" . $_REQUEST['colum13'] . "' ,
`colum14` = '" . $_REQUEST['colum14'] . "' ,
`colum15` = '" . $_REQUEST['colum15'] . "' ,
`colum16` = '" . $_REQUEST['colum16'] . "' ,
`colum17` = '" . $_REQUEST['colum17'] . "' ,
`colum18` = '" . $_REQUEST['colum18'] . "' ,
`colum21` = '" . $_REQUEST['colum21'] . "' ,
`colum22` = '" . $_REQUEST['colum22'] . "' ,
`colum23` = '" . $_REQUEST['colum23'] . "' ,
`colum24` = '" . $_REQUEST['colum24'] . "' ,
`colum25` = '" . $_REQUEST['colum25'] . "' ,
`colum26` = '" . $_REQUEST['colum26'] . "' ,
`colum27` = '" . $_REQUEST['colum27'] . "' ,
`colum28` = '" . $_REQUEST['colum28'] . "' ,
`colum31` = '" . $_REQUEST['colum31'] . "' ,
`colum32` = '" . $_REQUEST['colum32'] . "' ,
`colum33` = '" . $_REQUEST['colum33'] . "' ,
`colum34` = '" . $_REQUEST['colum34'] . "' ,
`colum35` = '" . $_REQUEST['colum35'] . "' ,
`colum36` = '" . $_REQUEST['colum36'] . "' ,
`colum37` = '" . $_REQUEST['colum37'] . "' ,
`colum38` = '" . $_REQUEST['colum38'] . "' ,
`pelvis11` = '" . $_REQUEST['pelvis11'] . "' ,
`pelvis12` = '" . $_REQUEST['pelvis12'] . "' ,
`pelvis13` = '" . $_REQUEST['pelvis13'] . "' ,
`pelvis14` = '" . $_REQUEST['pelvis14'] . "' ,
`pelvis15` = '" . $_REQUEST['pelvis15'] . "' ,
`pelvis16` = '" . $_REQUEST['pelvis16'] . "' ,
`pelvis17` = '" . $_REQUEST['pelvis17'] . "' ,
`pelvis18` = '" . $_REQUEST['pelvis18'] . "' ,
`pelvis21` = '" . $_REQUEST['pelvis21'] . "' ,
`pelvis22` = '" . $_REQUEST['pelvis22'] . "' ,
`pelvis23` = '" . $_REQUEST['pelvis23'] . "' ,
`pelvis24` = '" . $_REQUEST['pelvis24'] . "' ,
`pelvis25` = '" . $_REQUEST['pelvis25'] . "' ,
`pelvis26` = '" . $_REQUEST['pelvis26'] . "' ,
`pelvis27` = '" . $_REQUEST['pelvis27'] . "' ,
`pelvis28` = '" . $_REQUEST['pelvis28'] . "' ,
`pelvis31` = '" . $_REQUEST['pelvis31'] . "' ,
`pelvis32` = '" . $_REQUEST['pelvis32'] . "' ,
`pelvis33` = '" . $_REQUEST['pelvis33'] . "' ,
`pelvis34` = '" . $_REQUEST['pelvis34'] . "' ,
`pelvis35` = '" . $_REQUEST['pelvis35'] . "' ,
`pelvis36` = '" . $_REQUEST['pelvis36'] . "' ,
`pelvis37` = '" . $_REQUEST['pelvis37'] . "' ,
`pelvis38` = '" . $_REQUEST['pelvis38'] . "' ,
`rodi11` = '" . $_REQUEST['rodi11'] . "' ,
`rodi12` = '" . $_REQUEST['rodi12'] . "' ,
`rodi13` = '" . $_REQUEST['rodi13'] . "' ,
`rodi14` = '" . $_REQUEST['rodi14'] . "' ,
`rodi15` = '" . $_REQUEST['rodi15'] . "' ,
`rodi16` = '" . $_REQUEST['rodi16'] . "' ,
`rodi17` = '" . $_REQUEST['rodi17'] . "' ,
`rodi18` = '" . $_REQUEST['rodi18'] . "' ,
`rodi21` = '" . $_REQUEST['rodi21'] . "' ,
`rodi22` = '" . $_REQUEST['rodi22'] . "' ,
`rodi23` = '" . $_REQUEST['rodi23'] . "' ,
`rodi24` = '" . $_REQUEST['rodi24'] . "' ,
`rodi25` = '" . $_REQUEST['rodi25'] . "' ,
`rodi26` = '" . $_REQUEST['rodi26'] . "' ,
`rodi27` = '" . $_REQUEST['rodi27'] . "' ,
`rodi28` = '" . $_REQUEST['rodi28'] . "' ,
`pierna1` = '" . $_REQUEST['pierna1'] . "' ,
`pierna2` = '" . $_REQUEST['pierna2'] . "' ,
`pierna3` = '" . $_REQUEST['pierna3'] . "' ,
`pierna4` = '" . $_REQUEST['pierna4'] . "' ,
`pierna5` = '" . $_REQUEST['pierna5'] . "' ,
`pierna6` = '" . $_REQUEST['pierna6'] . "' ,
`pierna7` = '" . $_REQUEST['pierna7'] . "' ,
`pierna8` = '" . $_REQUEST['pierna8'] . "' ,
`pies11` = '" . $_REQUEST['pies11'] . "' ,
`pies12` = '" . $_REQUEST['pies12'] . "' ,
`pies13` = '" . $_REQUEST['pies13'] . "' ,
`pies14` = '" . $_REQUEST['pies14'] . "' ,
`pies15` = '" . $_REQUEST['pies15'] . "' ,
`pies16` = '" . $_REQUEST['pies16'] . "' ,
`pies17` = '" . $_REQUEST['pies17'] . "' ,
`pies18` = '" . $_REQUEST['pies18'] . "' ,
`pies21` = '" . $_REQUEST['pies21'] . "' ,
`pies22` = '" . $_REQUEST['pies22'] . "' ,
`pies23` = '" . $_REQUEST['pies23'] . "' ,
`pies24` = '" . $_REQUEST['pies24'] . "' ,
`pies25` = '" . $_REQUEST['pies25'] . "' ,
`pies26` = '" . $_REQUEST['pies26'] . "' ,
`pies27` = '" . $_REQUEST['pies27'] . "' ,
`pies28` = '" . $_REQUEST['pies28'] . "' ,
`pies31` = '" . $_REQUEST['pies31'] . "' ,
`pies32` = '" . $_REQUEST['pies32'] . "' ,
`pies33` = '" . $_REQUEST['pies33'] . "' ,
`pies34` = '" . $_REQUEST['pies34'] . "' ,
`pies35` = '" . $_REQUEST['pies35'] . "' ,
`pies36` = '" . $_REQUEST['pies36'] . "' ,
`pies37` = '" . $_REQUEST['pies37'] . "' ,
`pies38` = '" . $_REQUEST['pies38'] . "' WHERE `id_h1_postural_posterior_nino` = '" . $_REQUEST['id_h1_postural_posterior_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_postural_posterior_nino = 'new';
$sql = "SELECT * from h1_postural_posterior_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_postural_posterior_nino = $row['id_h1_postural_posterior_nino'];

    $cabeza11 = $row['cabeza11'];
    $cabeza12 = $row['cabeza12'];
    $cabeza13 = $row['cabeza13'];
    $cabeza14 = $row['cabeza14'];
    $cabeza15 = $row['cabeza15'];
    $cabeza16 = $row['cabeza16'];
    $cabeza17 = $row['cabeza17'];
    $cabeza18 = $row['cabeza18'];
    $cabeza21 = $row['cabeza21'];
    $cabeza22 = $row['cabeza22'];
    $cabeza23 = $row['cabeza23'];
    $cabeza24 = $row['cabeza24'];
    $cabeza25 = $row['cabeza25'];
    $cabeza26 = $row['cabeza26'];
    $cabeza27 = $row['cabeza27'];
    $cabeza28 = $row['cabeza28'];
    $cabeza31 = $row['cabeza31'];
    $cabeza32 = $row['cabeza32'];
    $cabeza33 = $row['cabeza33'];
    $cabeza34 = $row['cabeza34'];
    $cabeza35 = $row['cabeza35'];
    $cabeza36 = $row['cabeza36'];
    $cabeza37 = $row['cabeza37'];
    $cabeza38 = $row['cabeza38'];
    $hombro11 = $row['hombro11'];
    $hombro12 = $row['hombro12'];
    $hombro13 = $row['hombro13'];
    $hombro14 = $row['hombro14'];
    $hombro15 = $row['hombro15'];
    $hombro16 = $row['hombro16'];
    $hombro17 = $row['hombro17'];
    $hombro18 = $row['hombro18'];
    $hombro21 = $row['hombro21'];
    $hombro22 = $row['hombro22'];
    $hombro23 = $row['hombro23'];
    $hombro24 = $row['hombro24'];
    $hombro25 = $row['hombro25'];
    $hombro26 = $row['hombro26'];
    $hombro27 = $row['hombro27'];
    $hombro28 = $row['hombro28'];
    $esca11 = $row['esca11'];
    $esca12 = $row['esca12'];
    $esca13 = $row['esca13'];
    $esca14 = $row['esca14'];
    $esca15 = $row['esca15'];
    $esca16 = $row['esca16'];
    $esca17 = $row['esca17'];
    $esca18 = $row['esca18'];
    $esca21 = $row['esca21'];
    $esca22 = $row['esca22'];
    $esca23 = $row['esca23'];
    $esca24 = $row['esca24'];
    $esca25 = $row['esca25'];
    $esca26 = $row['esca26'];
    $esca27 = $row['esca27'];
    $esca28 = $row['esca28'];
    $esca31 = $row['esca31'];
    $esca32 = $row['esca32'];
    $esca33 = $row['esca33'];
    $esca34 = $row['esca34'];
    $esca35 = $row['esca35'];
    $esca36 = $row['esca36'];
    $esca37 = $row['esca37'];
    $esca38 = $row['esca38'];
    $colum11 = $row['colum11'];
    $colum12 = $row['colum12'];
    $colum13 = $row['colum13'];
    $colum14 = $row['colum14'];
    $colum15 = $row['colum15'];
    $colum16 = $row['colum16'];
    $colum17 = $row['colum17'];
    $colum18 = $row['colum18'];
    $colum21 = $row['colum21'];
    $colum22 = $row['colum22'];
    $colum23 = $row['colum23'];
    $colum24 = $row['colum24'];
    $colum25 = $row['colum25'];
    $colum26 = $row['colum26'];
    $colum27 = $row['colum27'];
    $colum28 = $row['colum28'];
    $colum31 = $row['colum31'];
    $colum32 = $row['colum32'];
    $colum33 = $row['colum33'];
    $colum34 = $row['colum34'];
    $colum35 = $row['colum35'];
    $colum36 = $row['colum36'];
    $colum37 = $row['colum37'];
    $colum38 = $row['colum38'];
    $pelvis11 = $row['pelvis11'];
    $pelvis12 = $row['pelvis12'];
    $pelvis13 = $row['pelvis13'];
    $pelvis14 = $row['pelvis14'];
    $pelvis15 = $row['pelvis15'];
    $pelvis16 = $row['pelvis16'];
    $pelvis17 = $row['pelvis17'];
    $pelvis18 = $row['pelvis18'];
    $pelvis21 = $row['pelvis21'];
    $pelvis22 = $row['pelvis22'];
    $pelvis23 = $row['pelvis23'];
    $pelvis24 = $row['pelvis24'];
    $pelvis25 = $row['pelvis25'];
    $pelvis26 = $row['pelvis26'];
    $pelvis27 = $row['pelvis27'];
    $pelvis28 = $row['pelvis28'];
    $pelvis31 = $row['pelvis31'];
    $pelvis32 = $row['pelvis32'];
    $pelvis33 = $row['pelvis33'];
    $pelvis34 = $row['pelvis34'];
    $pelvis35 = $row['pelvis35'];
    $pelvis36 = $row['pelvis36'];
    $pelvis37 = $row['pelvis37'];
    $pelvis38 = $row['pelvis38'];
    $rodi11 = $row['rodi11'];
    $rodi12 = $row['rodi12'];
    $rodi13 = $row['rodi13'];
    $rodi14 = $row['rodi14'];
    $rodi15 = $row['rodi15'];
    $rodi16 = $row['rodi16'];
    $rodi17 = $row['rodi17'];
    $rodi18 = $row['rodi18'];
    $rodi21 = $row['rodi21'];
    $rodi22 = $row['rodi22'];
    $rodi23 = $row['rodi23'];
    $rodi24 = $row['rodi24'];
    $rodi25 = $row['rodi25'];
    $rodi26 = $row['rodi26'];
    $rodi27 = $row['rodi27'];
    $rodi28 = $row['rodi28'];
    $pierna1 = $row['pierna1'];
    $pierna2 = $row['pierna2'];
    $pierna3 = $row['pierna3'];
    $pierna4 = $row['pierna4'];
    $pierna5 = $row['pierna5'];
    $pierna6 = $row['pierna6'];
    $pierna7 = $row['pierna7'];
    $pierna8 = $row['pierna8'];
    $pies11 = $row['pies11'];
    $pies12 = $row['pies12'];
    $pies13 = $row['pies13'];
    $pies14 = $row['pies14'];
    $pies15 = $row['pies15'];
    $pies16 = $row['pies16'];
    $pies17 = $row['pies17'];
    $pies18 = $row['pies18'];
    $pies21 = $row['pies21'];
    $pies22 = $row['pies22'];
    $pies23 = $row['pies23'];
    $pies24 = $row['pies24'];
    $pies25 = $row['pies25'];
    $pies26 = $row['pies26'];
    $pies27 = $row['pies27'];
    $pies28 = $row['pies28'];
    $pies31 = $row['pies31'];
    $pies32 = $row['pies32'];
    $pies33 = $row['pies33'];
    $pies34 = $row['pies34'];
    $pies35 = $row['pies35'];
    $pies36 = $row['pies36'];
    $pies37 = $row['pies37'];
    $pies38 = $row['pies38'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_postural_posterior_nino").click(function() {
            $("#open-h1_postural_posterior_nino").show();
            $(this).hide();
            $("#content-h1_postural_posterior_nino").hide('slow');
        });

        $("#open-h1_postural_posterior_nino").click(function() {
            $("#close-h1_postural_posterior_nino").show();
            $(this).hide();
            $("#content-h1_postural_posterior_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_postural_posterior_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_postural_posterior_nino"></div> <div class="arrow-o" id="open-h1_postural_posterior_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Examen postural plano posterior</font></legend>
    <div id="content-h1_postural_posterior_nino">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_postural_posterior_nino" id="guardar_h1_postural_posterior_nino" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_postural_posterior_nino" name="form_h1_postural_posterior_nino" action="<?php echo @$action_form_h1_postural_posterior_nino ?>#h1_postural_posterior_nino" method="post">

            <input type="hidden" id="id_h1_postural_posterior_nino" name="id_h1_postural_posterior_nino" value="<?php echo @$id_h1_postural_posterior_nino ?>" />

           
            <table  border="0" class="data text_small" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td width="636" colspan="11"><br />
                        IZQUIERDA                                           EXAMINADOR                           DERECHA </td>
                </tr>
                <tr>
                    <td width="636" colspan="11"><p align="center">IZQUIERDA                                                  DERECHA </p></td>
                </tr>
                <tr>
                    <td width="636" colspan="11"><p>                            N    L    M       S                                                N    L      M    S </p></td>
                </tr>
                <tr>
                    <td width="112" rowspan="3"><p> CABEZA</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza11" name="cabeza11" value="<?php echo @$cabeza11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza12" name="cabeza12" value="<?php echo @$cabeza12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza13" name="cabeza13" value="<?php echo @$cabeza13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza14" name="cabeza14" value="<?php echo @$cabeza14; ?>" /></td>
                    <td width="169"><p>INCLINACIONES LATERALES</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza15" name="cabeza15" value="<?php echo @$cabeza15; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza16" name="cabeza16" value="<?php echo @$cabeza16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza17" name="cabeza17" value="<?php echo @$cabeza17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza18" name="cabeza18" value="<?php echo @$cabeza18; ?>" /></td>
                    <td width="117" rowspan="3"><p>CABEZA</p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza21" name="cabeza21" value="<?php echo @$cabeza21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza22" name="cabeza22" value="<?php echo @$cabeza22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza23" name="cabeza23" value="<?php echo @$cabeza23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza24" name="cabeza24" value="<?php echo @$cabeza24; ?>" /></td>
                    <td width="169"><p>ROTACIONES</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza25" name="cabeza25" value="<?php echo @$cabeza25; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza26" name="cabeza26" value="<?php echo @$cabeza26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza27" name="cabeza27" value="<?php echo @$cabeza27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza28" name="cabeza28" value="<?php echo @$cabeza28; ?>" /></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza31" name="cabeza31" value="<?php echo @$cabeza31; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza32" name="cabeza32" value="<?php echo @$cabeza32; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza33" name="cabeza33" value="<?php echo @$cabeza33; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="cabeza34" name="cabeza34" value="<?php echo @$cabeza34; ?>" /></td>
                    <td width="169"><p>ACORTAMIENTO DEL CUELLO</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza35" name="cabeza35" value="<?php echo @$cabeza35; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza36" name="cabeza36" value="<?php echo @$cabeza36; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza37" name="cabeza37" value="<?php echo @$cabeza37; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="cabeza38" name="cabeza38" value="<?php echo @$cabeza38; ?>" /></td>
                </tr>
                <tr>
                    <td width="112" rowspan="2"><p>HOMBROS</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro11" name="hombro11" value="<?php echo @$hombro11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro12" name="hombro12" value="<?php echo @$hombro12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro13" name="hombro13" value="<?php echo @$hombro13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro14" name="hombro14" value="<?php echo @$hombro14; ?>" /></td>
                    <td width="169"><p>ELEVADOS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro15" name="hombro15" value="<?php echo @$hombro15; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro16" name="hombro16" value="<?php echo @$hombro16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro17" name="hombro17" value="<?php echo @$hombro17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro18" name="hombro18" value="<?php echo @$hombro18; ?>" /></td>
                    <td width="117" rowspan="2"><p>HOMBROS<u></u></p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro21" name="hombro21" value="<?php echo @$hombro21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro22" name="hombro22" value="<?php echo @$hombro22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro23" name="hombro23" value="<?php echo @$hombro23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="hombro24" name="hombro24" value="<?php echo @$hombro24; ?>" /></td>
                    <td width="169"><p>DESCENDIDOS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro25" name="hombro25" value="<?php echo @$hombro25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro26" name="hombro26" value="<?php echo @$hombro26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro27" name="hombro27" value="<?php echo @$hombro27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="hombro28" name="hombro28" value="<?php echo @$hombro28; ?>" /></td>
                </tr>
                <tr>
                    <td width="112" rowspan="3"><p>ESCAPULAS</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca11" name="esca11" value="<?php echo @$esca11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca12" name="esca12" value="<?php echo @$esca12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca13" name="esca13" value="<?php echo @$esca13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca14" name="esca14" value="<?php echo @$esca14; ?>" /></td>
                    <td width="169"><p>ALADAS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca15" name="esca15" value="<?php echo @$esca15; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca16" name="esca16" value="<?php echo @$esca16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca17" name="esca17" value="<?php echo @$esca17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca18" name="esca18" value="<?php echo @$esca18; ?>" /></td>
                    <td width="117" rowspan="3"><p>ESCAPULAS </p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca21" name="esca21" value="<?php echo @$esca21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca22" name="esca22" value="<?php echo @$esca22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca23" name="esca23" value="<?php echo @$esca23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca24" name="esca24" value="<?php echo @$esca24; ?>" /></td>
                    <td width="169"><p>DESCENDIDAS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca25" name="esca25" value="<?php echo @$esca25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca26" name="esca26" value="<?php echo @$esca26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca27" name="esca27" value="<?php echo @$esca27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca28" name="esca28" value="<?php echo @$esca28; ?>" /></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca31" name="esca31" value="<?php echo @$esca31; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca32" name="esca32" value="<?php echo @$esca32; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca33" name="esca33" value="<?php echo @$esca33; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="esca34" name="esca34" value="<?php echo @$esca34; ?>" /></td>
                    <td width="169"><p>ELEVADAS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca35" name="esca35" value="<?php echo @$esca35; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca36" name="esca36" value="<?php echo @$esca36; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca37" name="esca37" value="<?php echo @$esca37; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="esca38" name="esca38" value="<?php echo @$esca38; ?>" /></td>
                </tr>
                <tr>
                    <td width="112" rowspan="3"><p>COLUMNA</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum11" name="colum11" value="<?php echo @$colum11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum12" name="colum12" value="<?php echo @$colum12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum13" name="colum13" value="<?php echo @$colum13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum14" name="colum14" value="<?php echo @$colum14; ?>" /></td>
                    <td width="169"><p>ESCOLIOSIS CERVICAL</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum15" name="colum15" value="<?php echo @$colum15; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum16" name="colum16" value="<?php echo @$colum16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum17" name="colum17" value="<?php echo @$colum17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum18" name="colum18" value="<?php echo @$colum18; ?>" /></td>
                    <td width="117" rowspan="3"><p>COLUMNA</p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum21" name="colum21" value="<?php echo @$colum21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum22" name="colum22" value="<?php echo @$colum22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum23" name="colum23" value="<?php echo @$colum23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum24" name="colum24" value="<?php echo @$colum24; ?>" /></td>
                    <td width="169"><p>ESCOLIOSIS DORSAL</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum25" name="colum25" value="<?php echo @$colum25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum26" name="colum26" value="<?php echo @$colum26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum27" name="colum27" value="<?php echo @$colum27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum28" name="colum28" value="<?php echo @$colum28; ?>" /></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum31" name="colum31" value="<?php echo @$colum31; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum32" name="colum32" value="<?php echo @$colum32; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum33" name="colum33" value="<?php echo @$colum33; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="colum34" name="colum34" value="<?php echo @$colum34; ?>" /></td>
                    <td width="169"><p>ESCOLIOSIS LUMBAR</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum35" name="colum35" value="<?php echo @$colum35; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum36" name="colum36" value="<?php echo @$colum36; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum37" name="colum37" value="<?php echo @$colum37; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="colum38" name="colum38" value="<?php echo @$colum38; ?>" /></td>
                </tr>
                <tr>
                    <td width="112" rowspan="3"><p>PELVIS</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis11" name="pelvis11" value="<?php echo @$pelvis11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis12" name="pelvis12" value="<?php echo @$pelvis12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis13" name="pelvis13" value="<?php echo @$pelvis13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis14" name="pelvis14" value="<?php echo @$pelvis14; ?>" /></td>
                    <td width="169"><p>ELEVADAS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis" name="pelvis" value="<?php echo @$pelvis15; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis2" name="pelvis20" value="<?php echo @$pelvis16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis3" name="pelvis19" value="<?php echo @$pelvis17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis4" name="pelvis10" value="<?php echo @$pelvis18; ?>" /></td>
                    <td width="117" rowspan="3"><p>PELVIS</p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis21" name="pelvis21" value="<?php echo @$pelvis21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis22" name="pelvis22" value="<?php echo @$pelvis22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis23" name="pelvis23" value="<?php echo @$pelvis23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis24" name="pelvis24" value="<?php echo @$pelvis24; ?>" /></td>
                    <td width="169"><p>DESCENDIDAS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis5" name="pelvis9" value="<?php echo @$pelvis25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis6" name="pelvis8" value="<?php echo @$pelvis26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis7" name="pelvis7" value="<?php echo @$pelvis27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis8" name="pelvis6" value="<?php echo @$pelvis28; ?>" /></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis31" name="pelvis31" value="<?php echo @$pelvis31; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis32" name="pelvis32" value="<?php echo @$pelvis32; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis33" name="pelvis33" value="<?php echo @$pelvis33; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pelvis34" name="pelvis34" value="<?php echo @$pelvis34; ?>" /></td>
                    <td width="169"><p>PLIEGUES GLUTEOS CAIDOS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis9" name="pelvis5" value="<?php echo @$pelvis35; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis10" name="pelvis4" value="<?php echo @$pelvis36; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis19" name="pelvis3" value="<?php echo @$pelvis37; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pelvis20" name="pelvis2" value="<?php echo @$pelvis38; ?>" /></td>
                </tr>
                <tr>
                    <td width="112" rowspan="2"><p>RODILLAS</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi11" name="rodi11" value="<?php echo @$rodi11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi12" name="rodi12" value="<?php echo @$rodi12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi13" name="rodi13" value="<?php echo @$rodi13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi14" name="rodi14" value="<?php echo @$rodi14; ?>" /></td>
                    <td width="169"><p>RODILLAS EN VARO</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi15" name="rodi15" value="<?php echo @$rodi15; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi16" name="rodi16" value="<?php echo @$rodi16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi17" name="rodi17" value="<?php echo @$rodi17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi18" name="rodi18" value="<?php echo @$rodi18; ?>" /></td>
                    <td width="117" rowspan="2"><p>RODILLAS</p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi21" name="rodi21" value="<?php echo @$rodi21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi22" name="rodi22" value="<?php echo @$rodi22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi23" name="rodi23" value="<?php echo @$rodi23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="rodi24" name="rodi24" value="<?php echo @$rodi24; ?>" /></td>
                    <td width="169"><p>RODILLAS EN VALGO</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi25" name="rodi25" value="<?php echo @$rodi25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi26" name="rodi26" value="<?php echo @$rodi26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi27" name="rodi27" value="<?php echo @$rodi27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="rodi28" name="rodi28" value="<?php echo @$rodi28; ?>" /></td>
                </tr>
                <tr>
                    <td width="112"><p>PIERNAS</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pierna1" name="pierna1" value="<?php echo @$pierna1; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pierna2" name="pierna2" value="<?php echo @$pierna2; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pierna3" name="pierna3" value="<?php echo @$pierna3; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pierna4" name="pierna4" value="<?php echo @$pierna4; ?>" /></td>
                    <td width="169"><p>ROTACION TIBIAL</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pierna5" name="pierna5" value="<?php echo @$pierna5; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pierna6" name="pierna6" value="<?php echo @$pierna6; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pierna7" name="pierna7" value="<?php echo @$pierna7; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pierna8" name="pierna8" value="<?php echo @$pierna8; ?>" /></td>
                    <td width="117"><p>PIERNAS</p></td>
                </tr>
                <tr>
                    <td width="112" rowspan="3"><p>PIES</p></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies11" name="pies11" value="<?php echo @$pies11; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies12" name="pies12" value="<?php echo @$pies12; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies13" name="pies13" value="<?php echo @$pies13; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies14" name="pies14" value="<?php echo @$pies14; ?>" /></td>
                    <td width="169"><p>PRONADOS</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies15" name="pies15" value="<?php echo @$pies15; ?>" />
                        &nbsp;</td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies16" name="pies16" value="<?php echo @$pies16; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies17" name="pies17" value="<?php echo @$pies17; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies18" name="pies18" value="<?php echo @$pies18; ?>" /></td>
                    <td width="117" rowspan="3"><p>PIES</p></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies21" name="pies21" value="<?php echo @$pies21; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies22" name="pies22" value="<?php echo @$pies22; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies23" name="pies23" value="<?php echo @$pies23; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies24" name="pies24" value="<?php echo @$pies24; ?>" /></td>
                    <td width="169"><p>CALCANEO VALGO</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies25" name="pies25" value="<?php echo @$pies25; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies26" name="pies26" value="<?php echo @$pies26; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies27" name="pies27" value="<?php echo @$pies27; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies28" name="pies28" value="<?php echo @$pies28; ?>" /></td>
                </tr>
                <tr>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies31" name="pies31" value="<?php echo @$pies31; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies32" name="pies32" value="<?php echo @$pies32; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies33" name="pies33" value="<?php echo @$pies33; ?>" /></td>
                    <td width="30" valign="top"><input type="text" class="input_txt valid" id="pies34" name="pies34" value="<?php echo @$pies34; ?>" /></td>
                    <td width="169"><p>EQUINO</p></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies35" name="pies35" value="<?php echo @$pies35; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies36" name="pies36" value="<?php echo @$pies36; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies37" name="pies37" value="<?php echo @$pies37; ?>" /></td>
                    <td width="29" valign="top"><input type="text" class="input_txt valid" id="pies38" name="pies38" value="<?php echo @$pies38; ?>" /></td>
                </tr>
            </table>

            <p>&nbsp;</p>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>