<?php

session_start();
/*
  require_once ($raiz . "mvc/control/utils.php");
  require_once ($raiz . "mvc/persistencia/conexion.php");
  $conexion = new Conexion(); */

$_dir = Utils::getFtpRuta() . 'mvc/files/users/files/';

/* * ********************************************** */


$allowedExts = array("doc", "docx", "pdf");
$extension = end(explode(".", $_FILES["file"]["name"]));

if (($_FILES["file"]["size"] < 10000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {

        $new_name = Utils::genera_password(10);
        $new_name = "fl-" . $_REQUEST['historia'] . "-" . $new_name . '.' . $extension;

        if (file_exists($_dir . $new_name)) {
            $msg = " (Archivo ya existe!) ";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $_dir . $new_name);

            $sql = "INSERT INTO  `file_historia` (
                        `id_cita` ,
                        `id_usuario` ,
                        `id_proceso` ,
                        `historia` ,
                        `file` ,
                        `fecha`,
                        `nota`
                    )
                    VALUES (
                        '" . @$_REQUEST['id_cita'] . "',  
                        '" . @$_REQUEST['id_usuario'] . "',  
                        '" . @$_REQUEST['id_proceso'] . "',  
                        '" . @$_REQUEST['historia'] . "',  
                        '$new_name',  
                        '" . Date('Y-m-d H:i:s') . "',
                        '" . strtoupper(@$_REQUEST['nota']) . "'
                    );
                    ";
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

if (isset($_REQUEST['reload_url'])) {
    $reload_url = $_REQUEST['reload_url'];
    header("location: $reload_url&msg=" . $msg);
}
?>
