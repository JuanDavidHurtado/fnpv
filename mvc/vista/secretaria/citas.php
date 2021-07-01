<?php


$sql = "Select * from pasiente where pasiente_id='" . $_REQUEST['acc'] . "'";
$result = $conexion->EjecutarQuery($sql);
$row = mysql_fetch_array($result);

$hta = $row['HTA'];
$dm = $row['DM'];
$nefro = $row['Nefro'];

$fecha_base = $row['fecha_consulta'];

$add = Utils::getFechas($hta, $dm, $nefro);

/*
echo $hta . " - " . $dm . " - " . $nefro . "<br>";
echo $add[0] . " - " . $add[1] . " - " . $add[2] . "<br>";
echo $fecha_base . "<br><br>";
*/
$array_fechas = array($fecha_base);
$array_datos = array();


$fecha_1 = Utils::addIntervalDate($fecha_base, $add[0], "month");
$fecha_2 = Utils::addIntervalDate($fecha_base, $add[1], "month");
$fecha_3 = Utils::addIntervalDate($fecha_base, $add[2], "month");

$array_datos[] = array("fecha" => $fecha_1, "tipo" => "Medico General");
$array_datos[] = array("fecha" => $fecha_2, "tipo" => "Enfermeria Taller");
$array_datos[] = array("fecha" => $fecha_3, "tipo" => "Medicina interna");

for ($i = 0; $i <= 5; $i++) {
    $fecha_1 = Utils::addIntervalDate($fecha_1, $add[0], "month");
    $fecha_2 = Utils::addIntervalDate($fecha_2, $add[1], "month");
    $fecha_3 = Utils::addIntervalDate($fecha_3, $add[2], "month");


    $array_datos[] = array("fecha" => $fecha_1, "tipo" => "Medico General");
    $array_datos[] = array("fecha" => $fecha_2, "tipo" => "Enfermeria Taller");
    $array_datos[] = array("fecha" => $fecha_3, "tipo" => "Medicina interna");

    $array_fechas[] = $fecha_1;
    $array_fechas[] = $fecha_2;
    $array_fechas[] = $fecha_3;
}

sort($array_fechas);

$date_ini = $fecha_base;
$date_fn = $array_fechas[count($array_fechas) - 1];
$activationdate = date("Y-m-d", strtotime($date_ini));
$years = date("Y", strtotime($date_fn)) - date("Y", strtotime($activationdate));
$activationdate = date("Y-m-d", strtotime($date_ini));
$meses = date("m", strtotime($date_fn)) - date("m", strtotime($activationdate));
$meses_m = ($years * 12) + $meses;

$array_fechas2 = array();
$array_item = array();
$array_eventos = array();
for ($i = 0; $i <= $meses_m; $i++) {
    $fecha = Utils::addIntervalDate($fecha_base, $i, "month");
    $array_fechas2[date("Y-m", strtotime($fecha))] = $fecha;

    $año_fecha = date("Y", strtotime($fecha));
    $mes_fecha = date("m", strtotime($fecha));

    $array_items_sitas = array();
    
    

    foreach ($array_datos as $item) {
        $fecha_sita = $item['fecha'];
        $año_sita = date("Y", strtotime($fecha_sita));
        $mes_sita = date("m", strtotime($fecha_sita));
        
        if((intval($año_fecha) == intval($año_sita)) && (intval($mes_fecha) == intval($mes_sita))){
            $array_items_sitas[] = $item;
        }
    }
    $array_item[date("Y-m", strtotime($fecha))] = $array_items_sitas;
}

echo "<div style='width:400px; height:500px;overflow-y:auto;overflow-x:hidden'>";
foreach ($array_fechas2 as $key => $fecha){
    
    $item = $array_item[$key];
    $array_sitas_order = array();
    
    foreach ($item as $value) {
        $dia = date("d", strtotime($value['fecha']));
        $array_sitas_order[intval("$dia")] = array();
    }
    
    foreach ($item as $value) {
        $dia = date("d", strtotime($value['fecha']));
        $array_sitas_order[intval("$dia")][] = array('evento' => $value['tipo'],'descripcion' => $value['tipo']);
    }
    
    //print_r($array_sitas_order);
    
    echo $key;
    $calendario = new Calendario();
    echo $calendario->getCalendario($array_sitas_order,$fecha);
    echo "<br>";
}

echo "</div>";
?>
