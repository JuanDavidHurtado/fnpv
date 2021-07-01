<?php

include ('../control/utils.php');
$fecha_hora1 = "2013-01-16 08:30:45";
$fecha_hora2 = "2013-01-17 09:59:45";
//$fecha_hora2 = Date("Y-m-d H:i:s");

echo $fecha_hora1.' <br> '.$fecha_hora2.'<br>';
echo "1-2<br>";
echo Utils::getCountHours($fecha_hora1,$fecha_hora2);
echo "<br>2-1<br>";
echo Utils::getCountHours($fecha_hora2,$fecha_hora1);

echo "<br>";
echo "------------------------------------";
echo "<br>";
$date_now = Date('Y-m-d H:s:i');
echo "Fecha actual ".$date_now."<br>";
$date_menos_horas = Utils::addIntervalDateHours($date_now,-48,"hour");
echo "Fecha actual -48h ".$date_menos_horas."<br>";
echo "Url :: ".Utils::$http_ruta;
?>
