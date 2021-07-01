<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

//print_r($_REQUEST);

if (isset($_REQUEST['opcion'])) {

    $GLOBALS['raiz'] = '../../';

    include ($raiz . "mvc/control/utils.php");
    include ($raiz . "mvc/control/calendario.php");
    include ($raiz . "mvc/persistencia/conexion.php");

    $conexion = new Conexion();

    //municipios de un departamento
    if ($_REQUEST['opcion'] == 1) {

        $where = '';
        if ($_REQUEST['id_dependencia'] != 0) {
            $where = " and p.id_dependencia='{$_REQUEST['id_dependencia']}' ";
        }

        $sqld = "Select distinct(d.id_dependencia), d.nombre from proceso as p inner join usuario_proceso as up "
                . "on p.id_proceso = up.id_proceso "
                . "inner join dependencia as d "
                . "on d.id_dependencia = p.id_dependencia "
                . "where up.id_usuario = {$_REQUEST['id_usuario']} {$where} order by d.nombre asc";


        $html = "<select name='id_proceso' class='input_txt'><option value=''>[SELECCIONAR]</option>";


        //$html .= "<optgroup label='Label'>";


        $resultd = $conexion->EjecutarQuery($sqld);

        while ($rowd = mysql_fetch_array($resultd)) {
            $html .= "<optgroup label='{$rowd['nombre']}'>";

            $where = " and p.id_dependencia='{$rowd['id_dependencia']}' ";
            $sql = "Select p.* from proceso as p inner join usuario_proceso as up "
                    . "on p.id_proceso = up.id_proceso where up.id_usuario = {$_REQUEST['id_usuario']} {$where} ";

            $result = $conexion->EjecutarQuery($sql);
            while ($row = mysql_fetch_array($result)) {
                $html.= "<option value='" . $row['id_proceso'] . "'  >" . $row['nombre'] . "</option>";
            }
        }
        $html.= "</select>";

        echo $html;
    } else
    if ($_REQUEST['opcion'] == 2) {

        $calendario = new Calendario($conexion);
        /**/
        echo " 
        
            <table>
                <tr>
                    <td>Hora inicio</td>
                    <td>{$calendario->getSelectHours('inicio')}</td>
                    <td>{$calendario->getSelectMinute('inicio')}</td>
                    <td>Hora fin</td>
                    <td>{$calendario->getSelectHours('fin')}</td>
                    <td>{$calendario->getSelectMinute('fin')}</td>
                    <td>{$calendario->getSelectAddTime('')}</td>
                    <td><button onclick='guardarItinerario()'>Guardar</button></td>
                </tr>
            </table>
        
        ";
        echo '<br><br>'; /* */
        echo $calendario->getCalendario(null, $_REQUEST['fecha']);
    } else
    if ($_REQUEST['opcion'] == 3) {

        print_r($_REQUEST);

        $arrayExplod = explode('_', $_REQUEST['date']);
        foreach ($arrayExplod as $key => $fecha) {
            if ($fecha != '') {
                $sql = "INSERT INTO `agenda` "
                        . "(`id_usuario`, `id_proceso`, `id_sede`, `id_consultorio`, `fecha`, `hora_inicio`, `hora_fin`, `intervalo`) "
                        . "VALUES "
                        . "('{$_REQUEST['id_usuario']}', '{$_REQUEST['id_proceso']}', "
                        . "'{$_REQUEST['id_sede']}', '{$_REQUEST['id_consultorio']}', "
                        . "'{$fecha}', '{$_REQUEST['hour_inicio']}:{$_REQUEST['minute_inicio']}:00', "
                        . "'{$_REQUEST['hour_fin']}:{$_REQUEST['minute_fin']}:00', '{$_REQUEST['add_time']}');";

                $result = $conexion->EjecutarQuery($sql);
                echo $sql . '<br>';
            }
            $fecha = '';
        }
    } else
    if ($_REQUEST['opcion'] == 4) {
        $calendario = new Calendario($conexion);
        echo $calendario->getCalendario(null, $_REQUEST['fecha']);
    } else
    if ($_REQUEST['opcion'] == 5) {

        $calendario = new Calendario($conexion);
        $itinerario = $calendario->getItinerioAgenda($_REQUEST['idAgenda']);
        echo $itinerario;
    } else
    if ($_REQUEST['opcion'] == 6) {


        $calendario = new Calendario($conexion);
        $itinerario = $calendario->getItinerioAgendaUser($_REQUEST['fecha']);
        echo $itinerario;
    } else
    if ($_REQUEST['opcion'] == 7) {

        $date = Date("Y-m-d");
        $return = new stdClass();
        $return->data = json_encode($_REQUEST);
        $return->bool = false;
        $return->info = $_REQUEST['identificacion_p'] . ' - ' . $_REQUEST['nombre1'] . ' ' . $_REQUEST['apellido1'];
        if ($_REQUEST['fecha'] >= $date) {



            $fecha_hora_inicio = $_REQUEST['fecha'] . " " . $_REQUEST['hora_inicio'];
            $fecha_hora_fin = $_REQUEST['fecha'] . " " . $_REQUEST['hora_fin'];

            /*             * ************************************************************************* */
            $sql_b_c = "Select * from cita  
                               where  
                               id_paciente = " . $_REQUEST['id_paciente'] . " and
                               estado <> 'CANCELADO' and
                               fecha='" . $_REQUEST['fecha'] . "' and
                               ((fecha_hora_inicio >='" . $_REQUEST['fecha'] . " " . $_REQUEST['hora_inicio'] . "' and
                               fecha_hora_fin <='" . $_REQUEST['fecha'] . " " . $_REQUEST['hora_fin'] . "') or
                               (fecha_hora_inicio <='" . $_REQUEST['fecha'] . " " . $$_REQUEST['hora_inicio'] . "' and
                               fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $_REQUEST['hora_inicio'] . "') or
                               (fecha_hora_inicio <'" . $_REQUEST['fecha'] . " " . $_REQUEST['hora_fin'] . "' and
                               fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $_REQUEST['hora_fin'] . "'))";

            $return->sql = $sql_b_c;

            $result_b_c = $conexion->EjecutarQuery($sql_b_c);
            $bool_c = false;
            while ($row_b_c = mysql_fetch_array($result_b_c)) {
                $bool_c = true;
                break;
            }

            /*             * ************************************************************************* */
            if (!$bool_c) {
                $return->bool = true;
                $sql_insert_cita = "INSERT INTO `cita` 
                                    (`id_proceso`, `id_usuario`, `id_paciente`, `fecha`, `fecha_hora_inicio`, `fecha_hora_fin`,`fecha_hora_limite`, `id_sesion`,`id_usuario_agenda`, `tipo_cita`, `id_agenda`) 
                                    VALUES ('" . $_REQUEST['id_proceso'] . "', '" . $_REQUEST['id_usuario'] . "', '" . $_REQUEST['id_paciente'] . "', '" . $_REQUEST['fecha'] . "', '$fecha_hora_inicio', '$fecha_hora_fin', '$fecha_hora_fin', '" . $_REQUEST['id_sesion'] . "','" . $_SESSION['id_usuario'] . "','" . $_REQUEST['tipo_cita'] . "', '{$_REQUEST['idAgenda']}')";

                $return->sql = $sql_insert_cita;
                $result_cita = $conexion->EjecutarInsert($sql_insert_cita);
                //traer la ultima cita
                $max_id_cita = "Select max(id_cita) as id_cita from cita where id_proceso='{$_REQUEST['id_proceso']}' and  id_usuario='{$_REQUEST['id_usuario']}' and id_paciente='{$_REQUEST['id_paciente']}' and fecha_hora_inicio='{$fecha_hora_inicio}' ";
                $result_max = $conexion->EjecutarInsert($max_id_cita);
                $row = mysql_fetch_array($result_max);
                //traer id_paciente

                $paciente = "Select identificacion as id_pac from paciente where historia='{$_REQUEST['id_paciente']}'";
                $result_pac = $conexion->EjecutarInsert($paciente);
                $result_pac = $conexion->EjecutarInsert($paciente);
                $row_pac = mysql_fetch_array($result_pac);
                // crear la factura en pendiente el id_usuario aca es el mismo id_paciente
                $sql_factura = "INSERT INTO `factura` (`id_cita`, `id_usuario`, 
                                               `id_eps`, `id_contrato`, `valor_total`, 
                                               `estado`, `origen_factura`, `fecha`, `id_proceso`)
                                      VALUES ('{$row['id_cita']}', '{$row_pac['id_pac']}',
                                                '', '', '', '0','0', '{$fecha_hora_inicio}','{$_REQUEST['id_proceso']}');";

                $conexion->EjecutarInsert($sql_factura);
                //insertar_cup


                $sql_cup_cita = "INSERT INTO `cups_cita` (`id_cita`, `id_cup`,`id_proceso`, `fecha`)
                                 VALUES ";
                $cad_cup = "";

                if ($_REQUEST['grupo_cups'] != "null") {
                    $cad_cup = " ";
                    $_REQUEST['grupo_cups'] = split(",", $_REQUEST['grupo_cups']);

                    foreach ($_REQUEST['grupo_cups'] as $valor) {
                        if ($valor != '') {
                            $cad_cup .= "('{$row['id_cita']}', '{$valor}','{$_REQUEST['id_proceso']}','{$fecha_hora_inicio}'),";
                        }
                    }

                    $cad_cup = substr(trim($cad_cup), 0, (strlen($cad_cup) - 2)) . "";
                }

                $ejecutar_cadena = $sql_cup_cita . $cad_cup;
                $return->sql = $ejecutar_cadena;
                $conexion->EjecutarInsert($ejecutar_cadena);

                /*                 * ******************* */
            }
        }

        echo json_encode($return);
    }
    if ($_REQUEST['opcion'] == 8) {
        $sql = "Delete from agenda where id='{$_REQUEST['idAgenda']}' ";
        $result = $conexion->EjecutarQuery($sql);

        $sql = "Delete from cita where id_agenda='{$_REQUEST['idAgenda']}' ";
        $result = $conexion->EjecutarQuery($sql);
    }
}
?>
