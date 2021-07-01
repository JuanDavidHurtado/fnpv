<?php

$fecha_hora = Date('Ymd-His');

$zip = new ZipArchive();
$destino = "../../files/backup/bk-files-fisioterapiadelcauca-$fecha_hora.zip";
$origen = "../../files/users/firmas/9f15dd77bf.png";

if ($zip->open($destino, ZIPARCHIVE::CREATE) !== TRUE) {
    die("Error al crear el archivo");
}


$zip->addFile($origen, basename($origen));

$zip->close();


if (!isset($GLOBALS['raiz'])) {
    $raiz_l = "C:/xampp/htdocs/fisioterapia2/";
    require_once($raiz_l . "mvc/control/utils.php");
    require_once($raiz_l . "mvc/persistencia/conexion.php");
    $conexion = new Conexion();
} else {

    $raiz_l = '../../';
}

$tipo = 'FILES';

ECHO $sql = "INSERT INTO `fisioterapiadelcauca`.`backup` (`id_backup`, `file`, `fecha`, `tipo`) VALUES (NULL, '".basename($destino)."', '" . Date("Y-m-d H:i:s") . "', '$tipo');";
$conexion->EjecutarInsert($sql);
?>
