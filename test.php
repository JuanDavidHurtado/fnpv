<?php
/*
include "mvc/control/calendario.php";

$calendario = new Calendario();
$eventos = array(5 => array(
        array(
            'evento' => 'Feria',
            'descripcion' => "Descripcion de la Feria"
        ),
        array(
            'evento' => 'Examen',
            'descripcion' => 'Descripcion de nuestro Examen'
        )
    ),
    12 => array(
        array(
            'evento' => 'Entrega de Reportes',
            'descripcion' => 'Se describe la entrega de reportes'
        )
    )
);
echo $calendario->getCalendario($eventos);
 * 
 */

echo "http://" . $_SERVER["SERVER_NAME"].'<br>';
$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
echo "<b>$url_actual</b>";

echo "<br><br>";

echo "<br>Server: ".$_SERVER["SERVER_NAME"]."<br>";
echo md5($_SERVER["SERVER_NAME"])."<br>";


?>
