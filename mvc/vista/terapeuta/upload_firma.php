<?php

session_start();
$raiz = '../../../';

include ($raiz . "mvc/control/utils.php");
include ($raiz . "mvc/persistencia/conexion.php");

$conexion = new Conexion();

$_dir = $raiz . 'mvc/files/users/firmas/';

/* * ********************************************** */


$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));

if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 5000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {

        /* echo "Upload: " . $_FILES["file"]["name"] . "<br>";
          echo "Type: " . $_FILES["file"]["type"] . "<br>";
          echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
          echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>"; */

        $new_name = Utils::genera_password(10);
        $new_name = "fr-" . $_SESSION['id_usuario'] . "-" . $new_name . '.' . $extension;

        if (file_exists($_dir . $new_name)) {
            $msg = " (Archivo ya existe!) "; //$_FILES["file"]["name"] . " already exists. ";
            $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Archivo ya existe!.</div>
            </p>';
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $_dir . $new_name);

            $sql = "Update usuario set firma='$new_name' where id_usuario=" . $_SESSION['id_usuario'];
            $conexion->EjecutarQuery($sql);
            $msg = " (Archivo subido exitosamente!) "; //"Stored in: " . $_dir . $new_name;
            $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Archivo subido exitosamente!.</div>
            </p>';
        }
    }
} else {
    $msg = " (Archivo invalido!) ";
    $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Archivo invalido!.</div>
            </p>';
}

header("location: ../../../users/terapeuta/index.php?option=perfil&msg=" . $msg);
?>
