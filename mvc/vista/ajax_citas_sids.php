<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

$sqlUsuario = "SELECT identificacion,nombre1,nombre2,apellido1,apellido2 FROM `paciente` WHERE historia  = {} ";

$return = '';
if (isset($_REQUEST['opcion'])) {

    $GLOBALS['raiz'] = '../../';

    include ($raiz . "mvc/control/utils.php");
    include ($raiz . "mvc/persistencia/conexion.php");

    $conexion = new Conexion();

    //municipios de un departamento
    if ($_REQUEST['opcion'] == 1) {

        $sql_p = "Select p.*,i.cantidad_pacientes,i.tiempo_consulta from proceso as p inner join itinerario as i
                            on p.id_itinerario = i.id_itinerario
                            where p.id_proceso = " . $_REQUEST['id_proceso'];
        $result_p = $conexion->EjecutarQuery($sql_p);
        while ($row_p = mysql_fetch_array($result_p)) {
            //echo $row_p['cantidad_pacientes'];

            $return .= "<h3>" . $row_p['nombre'] . " (" . $row_p['cantidad_pacientes'] . " x " . $row_p['tiempo_consulta'] . "')</h3>";

            $sql = "Select * from sesion where id_itinerario= " . $row_p['id_itinerario'] . " order by flujo asc ";
            $result = $conexion->EjecutarQuery($sql);

            $sql_u = '';
            if ($_REQUEST['id_usuario'] == '') {

                $sql_u = "select u.* from rol as r inner join usuario as u on r.id_rol = u.id_rol inner join usuario_proceso as up on u.id_usuario = up.id_usuario where up.id_proceso=" . $_REQUEST['id_proceso'] . " and up.estado='ACTIVO' and r.nombre='USUARIO' and u.estado='ACTIVO' order by u.registro_medico asc";
            } else {

                $sql_u = "select u.* from rol as r inner join usuario as u on r.id_rol = u.id_rol inner join usuario_proceso as up on u.id_usuario = up.id_usuario where up.id_proceso=" . $_REQUEST['id_proceso'] . " and up.estado='ACTIVO' and r.nombre='USUARIO' and u.estado='ACTIVO' and u.id_usuario=" . $_REQUEST['id_usuario'] . " order by u.registro_medico asc";
            }

            //echo $sql_u;
            $result_u = $conexion->EjecutarQuery($sql_u);
            $array_us = array();
            while ($row_u = mysql_fetch_array($result_u)) {

                $array_us[] = $row_u;
            }

            $return .= "<table border='0' class='data' cellpading='0' cellspacing='0' >";

            $return.='<tr class="row1">';
            $return.='<th>Horario</th>';

            foreach ($array_us as $row_us) {
                $return.='<th ><div title="' . $row_us['registro_medico'] . ' : ' . $row_us['nombre'] . ' ' . $row_us['apellido'] . '">' . $row_us['registro_medico'] . ' - ' . $row_us['nombre'] . '</div></th>';
            }

            $return.='</tr>';

            while ($row = mysql_fetch_array($result)) {
                $return .= "<tr >";
                $style = 'row2';
                if ($row['tipo'] == 2) {
                    $style = 'row3';
                }

                $return .="<td class='$style'>" . substr($row['hora_inicio'], 0, 5) . "/" . substr($row['hora_fin'], 0, 5) . "</td>";

                $bool = true;

                foreach ($array_us as $row_u) {



                    if ($row['tipo'] == 1) {

                        if ($bool) {
                            $style_c = 'row1';
                            $bool = false;
                        } else {
                            $style_c = 'row2x';
                            $bool = true;
                        }
                        $style_c_2 = $style_c;

                        if ($row_p['cantidad_pacientes'] == 1) {


                            $msg = "LIBRE";
                            $msg_e = $msg;
                            $sql_b_c = "Select * from cita where 
                                                id_usuario=" . $row_u['id_usuario'] . " and 
                                                estado <> 'CANCELADO' and
                                                fecha='" . $_REQUEST['fecha'] . "' and
                                                id_proceso<>" . $_REQUEST['id_proceso'] . " and
                                                ((fecha_hora_inicio >='" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "' and
                                                fecha_hora_fin <='" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "') or
                                                (fecha_hora_inicio <='" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "' and
                                                fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "') or
                                                (fecha_hora_inicio <'" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "' and
                                                fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "'))";

                            /* if($row['id_sesion']==97 && $row_u['id_usuario']==197){
                              echo $sql_b_c;
                              } */

                            $result_b_c = $conexion->EjecutarQuery($sql_b_c);
                            $bool_b_c = false;
                            while ($row_c = mysql_fetch_array($result_b_c)) {

                                //echo $sqlUsuario = str_replace('{}',$row_c['id_paciente'], $sqlUsuario);

                                $msg = $row_c['estado']; //"PROGRAMADO";
                                $style_c = 'programado_o';
                                $bool_b_c = true;
                            }
                            $id_cita = 0;
                            $fecha_hora_limite = '0000-00-00 00:00:00';
                            //aqui->
                            if (!$bool_b_c) {
                                $sql_c = "Select * from cita where
                                                id_proceso=" . $_REQUEST['id_proceso'] . " and
                                                id_usuario=" . $row_u['id_usuario'] . " and 
                                                fecha='" . $_REQUEST['fecha'] . "' and 
                                                id_sesion = '" . $row['id_sesion'] . "' 
                                                order by id_cita desc";

                                $result_c = $conexion->EjecutarQuery($sql_c);
                                $bool_r = false;

                                $row_pa = null;
                                while ($row_c = mysql_fetch_array($result_c)) {
                                    $id_cita = $row_c['id_cita'];
                                    $fecha_hora_limite = $row_c['fecha_hora_limite'];
                                    if ($row_c['estado'] == 'PROGRAMADO') {
                                        $style_c = 'programado';
                                    } else if ($row_c['estado'] == 'PROCESO') {
                                        $style_c = 'proceso';
                                    } else if ($row_c['estado'] == 'FINALIZADO') {
                                        $style_c = 'finalizado';
                                    } else if ($row_c['estado'] == 'CANCELADO') {
                                        $style_c = 'cancelado';
                                    }

                                    //echo $sqlUsuario= str_replace('{}',$row_c['id_paciente'], $sqlUsuario);
                                    $sql_pa = "Select * from paciente where historia = " . $row_c['id_paciente'];
                                    $result_pa = $conexion->EjecutarQuery($sql_pa);
                                    while ($row_pa = mysql_fetch_array($result_pa)) {
                                        $msg_e = "<label title='{$row_pa['identificacion']} - {$row_pa['nombre1']} {$row_pa['apellido1']}'>{$row_pa['nombre1']} {$row_pa['apellido1']}</label>";
                                        true;
                                        break;
                                    }


                                    $bool_r = true;
                                    $msg = $row_c['estado'];

                                    break;
                                }
                            }
                            $col = '';
                            $click = '';
                            $date_now = (Date("Y-m-d H:i:s"));
                            $date_s = ($_REQUEST['fecha'] . ' ' . $row['hora_fin']);
                            //echo $date_s  . ' -  ' . $date_now .'<br>';
                            if ($date_s >= $date_now) {
                                //echo 'e1 <br>';
                                if (!$bool_r && !$bool_b_c) {
                                    //$col = 'colspan="2"';
                                    $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                } else {

                                    if (!$bool_b_c) {
                                        if ($msg == 'PROGRAMADO') {
                                            $click = "onclick='cancel(" . $id_cita . "," . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                        } else if ($msg == 'CANCELADO') {
                                            $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                        }
                                    }
                                }
                            }

                            $return .= "<td class='$style_c' $col align='center' style='cursor:pointer' $click>$msg_e</td>";
                        } else {
                            $msg = "LIBRE";
                            $msg_e = $msg;
                            $sql_b_c = "Select * from cita where 
                                                    id_usuario=" . $row_u['id_usuario'] . " and 
                                                    estado <> 'CANCELADO' and
                                                    fecha='" . $_REQUEST['fecha'] . "' and
                                                    id_proceso<>" . $_REQUEST['id_proceso'] . " and
                                                    ((fecha_hora_inicio >='" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "' and
                                                    fecha_hora_fin <='" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "') or
                                                    (fecha_hora_inicio <='" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "' and
                                                    fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row['hora_inicio'] . "') or
                                                    (fecha_hora_inicio <'" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "' and
                                                    fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row['hora_fin'] . "'))";

                            /* if($row['id_sesion']==97 && $row_u['id_usuario']==197){
                              echo $sql_b_c;
                              } */

                            $result_b_c = $conexion->EjecutarQuery($sql_b_c);
                            $bool_b_c = false;
                            while ($row_c = mysql_fetch_array($result_b_c)) {
                                $msg = $row_c['estado']; //"PROGRAMADO";
                                $style_c = 'programado_o';
                                $bool_b_c = true;
                            }


                            if (!$bool_b_c) {

                                $msg = "LIBRE";
                                $msg_e = $msg;
                                $id_cita = 0;
                                $fecha_hora_limite = '0000-00-00 00:00:00';
                                $sql_c = "Select * from cita where
                                                id_proceso=" . $_REQUEST['id_proceso'] . " and
                                                id_usuario=" . $row_u['id_usuario'] . " and 
                                                fecha='" . $_REQUEST['fecha'] . "' and 
                                                id_sesion = '" . $row['id_sesion'] . "'
                                                order by id_cita desc
                                                limit 0," . $row_p['cantidad_pacientes'];

                                $result_c = $conexion->EjecutarQuery($sql_c);
                                $bool_r = false;

                                /*                                 * ***** */

                                $table_cupos = "<table width='100%' class='table_data' cellpading='0' cellspacing='0'>";

                                $sql_citas = "";

                                for ($i = 0; $i < $row_p['cantidad_pacientes']; $i++) {
                                    $style_c = $style_c_2;
                                    $msg = "LIBRE";
                                    $msg_e = $msg;
                                    $style_fn = '';
                                    if (($i + 1) == $row_p['cantidad_pacientes']) {
                                        $style_fn = "fn";
                                    }

                                    /*                                     * *** */
                                    $bool_r = false;
                                    $row_c = mysql_fetch_array($result_c);
                                    if ($row_c) {

                                        $row_pa = null;
                                        $id_cita = $row_c['id_cita'];
                                        $fecha_hora_limite = $row_c['fecha_hora_limite'];
                                        if ($row_c['estado'] == 'PROGRAMADO') {
                                            $style_c = 'programado';
                                        } else if ($row_c['estado'] == 'PROCESO') {
                                            $style_c = 'proceso';
                                        } else if ($row_c['estado'] == 'FINALIZADO') {
                                            $style_c = 'finalizado';
                                        } else if ($row_c['estado'] == 'CANCELADO') {
                                            $style_c = 'cancelado';
                                        }


                                        $sql_pa = "Select * from paciente where historia = " . $row_c['id_paciente'];
                                        $result_pa = $conexion->EjecutarQuery($sql_pa);
                                        while ($row_pa = mysql_fetch_array($result_pa)) {
                                            $msg_e = "<label title='{$row_pa['identificacion']} - {$row_pa['nombre1']} {$row_pa['apellido1']}'>{$row_pa['nombre1']} {$row_pa['apellido1']}</label>";
                                            true;
                                            break;
                                        }


                                        $bool_r = true;
                                        $msg = $row_c['estado'];
                                    }

                                    $click = '';
                                    $date_now = (Date("Y-m-d H:i:s"));
                                    $date_s = ($_REQUEST['fecha'] . ' ' . $row['hora_fin']);
                                    //echo $date_s . ' - ' . $date_now.'<br>';
                                    if ($date_s >= $date_now) {
                                        if (!$bool_r && !$bool_b_c) {
                                            $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                        } else {

                                            if (!$bool_b_c) {
                                                if ($msg == 'PROGRAMADO') {

                                                    $click = "onclick='cancel(" . $id_cita . "," . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                                } else if ($msg == 'CANCELADO') {

                                                    $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row_p['id_dependencia'] . ")'";
                                                }
                                            }
                                        }
                                    }

                                    /*                                     * *** */

                                    $table_cupos.="<tr $click style='cursor:pointer'>";
                                    $table_cupos.="<td class='$style_c $style_fn' align='center'>";
                                    $table_cupos.=$msg_e;
                                    $table_cupos.='</td>';
                                    $table_cupos.='</tr>';
                                }

                                $table_cupos .= '</table>';
                            } else {

                                $table_cupos = $msg;
                            }

                            $return .= "<td class='$style_c' align='center'  >$table_cupos</td>";
                        }
                    } else {

                        $return .= "<td class='row3' ></td>";
                    }
                }


                $return .="</tr>";
                //break;
            }

            $return .= "</table>";

            break;
        }


        echo @$return;
    } else if ($_REQUEST['opcion'] == 2) {

        //print_r($_REQUEST);

        $fecha_hoy = Date("Y-m-d H:i:s");
        $return = '<div id="tabs">';
        $return .= '<ul>';
        $return .= '<li><a href="#tabs-x" id="tabs-0" onclick="open_tab(0)">Citas</a></li>';
        $sql = "select * from dependencia 
                        where id_dependencia in ( Select distinct(p.id_dependencia) from 
                        usuario_proceso as up inner join proceso as p on up.id_proceso = p.id_proceso
                        where up.id_usuario=" . $_REQUEST['id_usuario'] . " and up.estado='ACTIVO' )";

        $result = $conexion->EjecutarQuery($sql);
        $array_row = array();

        while ($row = mysql_fetch_array($result)) {
            $array_row[] = $row;
            $return .= '<li><a href="#tabs-' . $row['id_dependencia'] . '" id="tab' . $row['id_dependencia'] . '" onclick="open_tab(' . $row['id_dependencia'] . ')">' . $row['nombre'] . '</a></li>';
        }

        $return .= '</ul>';

        /*         * ********************************* */
        $return .= '<div id="tabs-x" class="content_tab_i" >';

        $where = '';
        if (@$_REQUEST['ocancel'] == 'true') {
            $where = " and c.estado<>'CANCELADO' ";
        }

        $sql = "Select c.*,s.hora_inicio,s.hora_fin,p.*,pr.nombre as proceso
                        from paciente as p inner join  cita as c
                        on p.historia = c.id_paciente inner join sesion as s
                        on c.id_sesion = s.id_sesion inner join proceso as pr
                        on c.id_proceso = pr.id_proceso
                        where c.id_usuario=" . $_REQUEST['id_usuario'] . " 
                        and c.fecha='" . $_REQUEST['fecha'] . "' $where
                        order by c.fecha_hora_inicio asc";

        $result_c = $conexion->EjecutarQuery($sql);
        $id_cita = '';
        $fecha_hora_limite = '0000-00-00 00:00:00';
        $style_c = '';

        $return .= '<table border="0" cellspacing="0" cellpading="0" class="data" width="100%">';
        $return .= '<tr class="row1">';

        $return .= '<th>Area</th>';
        $return .= '<th>Estado</th>';
        $return .= '<th>Hora</th>';
        $return .= '<th>Historia</th>';
        $return .= '<th>Identificacion</th>';
        $return .= '<th>Paciente</th>';

        $return .= '</tr>';

        while ($row_c = mysql_fetch_array($result_c)) {
            $click = "";
            $id_cita = $row_c['id_cita'];
            $fecha_hora_limite = $row_c['fecha_hora_limite'];
            if ($row_c['estado'] == 'PROGRAMADO') {
                $style_c = 'programado';
                $fecha_cita = $row_c['fecha_hora_fin'];
                if ($_REQUEST['acc'] == 1) { //&& ($fecha_cita >= $fecha_hoy)) {
                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                    //$diff = Utils::getCountHours($fecha_cita, $fecha_hora_ya);
                    $fecha_hora_ya = Utils::addIntervalDateHours($fecha_hora_ya, '+ 2', 'Hours');
                    $diff = Utils::getCountHours3($fecha_cita, $fecha_hora_ya);
                    //echo $diff . '<-- aqui v<br>';
                    //if ($diff <= Utils::$_horas_limite_cita) {
                    if ($diff <= 0) {
                        $click = "onclick=\"verificar_cita('" . $row_c['identificacion'] . "',$id_cita)\" style='cursor:pointer;'";
                    } else {
                        $click = "onclick=\"alert('No puede iniciar cita antes de la fecha y hora establecida')\" style='cursor:no-drop;'";
                    }
                } else {
                    //cancel cita list
                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                    $diff = Utils::getCountHours($fecha_cita, $fecha_hora_ya);
                    if ($diff <= Utils::$_horas_limite_cita) {
                        $click = "onclick='cancel(" . $id_cita . "," . $row_c['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_c['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\",\"" . $row_c['id_dependencia'] . "\")'";
                    }
                }
            } else if ($row_c['estado'] == 'PROCESO') {
                $style_c = 'proceso';
                if ($_REQUEST['acc'] == 1) {
                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                    $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                    if ($diff <= Utils::$_horas_limite_cita) {
                        $click = "onclick='init_cita($id_cita,\"$diff\")'";
                    } else {
                        $style_c = 'proceso_n';
                        $click = "onclick='open_not_proceso(\"$diff\")'";
                    }
                }
            } else if ($row_c['estado'] == 'FINALIZADO') {
                $style_c = 'finalizado';
                if ($_REQUEST['acc'] == 1) {
                    $click = "onclick='init_cita($id_cita,\"$diff\")'";
                }
            } else if ($row_c['estado'] == 'CANCELADO') {
                $style_c = 'cancelado';
            }

            $return .= '<tr class="' . $style_c . '" ' . $click . ' >';
            $return .= '<td align="center">' . $row_c['proceso'] . '</td>';
            $return .= '<td align="center">' . $row_c['estado'] . '</td>';
            $return .= '<td align="center">' . $_REQUEST['fecha'] . ' (' . substr($row_c['hora_inicio'], 0, 5) . '/' . substr($row_c['hora_fin'], 0, 5) . ')</td>';
            $return .= '<td align="center">' . $row_c['historia'] . '</td>';
            $return .= '<td align="center">' . $row_c['identificacion'] . '</td>';
            $return .= '<td align="center">' . $row_c['nombre1'] . ' ' . $row_c['apellido1'] . ' ' . $row_c['apellido2'] . '</td>';
            $return .= '</tr>';
        }


        $return .= '</table>';
        $return .= '</div>';


        foreach ($array_row as $row) {

            $return .= '<div id="tabs-' . $row['id_dependencia'] . '" class="content_tab_i" >';

            $return .= '<table border="0" cellpading="0" cellspacing="0" width="100%"><tr valign="top">';


            $sql = "Select distinct(id_itinerario) from itinerario
                            where id_itinerario in (select p.id_itinerario 
                            from proceso as p
                            where p.id_dependencia = " . $row['id_dependencia'] . ")";

            $result_i = $conexion->EjecutarQuery($sql);
            while ($row_i_x = mysql_fetch_array($result_i)) {
                $return .= "<td>";

                $return .= "<table border='0' cellpading='0' cellspacing='0' class='data' width='100%' >";
                $return .= "<tr class='row1'>";
                $return .= "<th>Horario</th>";

                $sql = "Select p.*,i.cantidad_pacientes from proceso as p
                                inner join usuario_proceso as up 
                                on p.id_proceso = up.id_proceso 
                                inner join itinerario as i on p.id_itinerario = i.id_itinerario
                                where up.id_usuario=" . $_REQUEST['id_usuario'] . "
                                and up.estado='ACTIVO'
                                and p.id_itinerario = " . $row_i_x['id_itinerario'] . "
                                and p.id_dependencia = " . $row['id_dependencia'] . "
                                order by p.nombre asc";
                //echo "<br>";


                $result_p_i = $conexion->EjecutarQuery($sql);
                $array_p_i = array();
                while ($row_pi = mysql_fetch_array($result_p_i)) {
                    $array_p_i[] = $row_pi;
                    $return .= "<th>" . $row_pi['nombre'] . "</th>";
                }

                $return .= "</tr>";

                $sql = "select * from sesion 
                                where id_itinerario =" . $row_i_x['id_itinerario'] . " 
                                order by flujo asc";

                $result_s_i = $conexion->EjecutarQuery($sql);

                while ($row_s_i = mysql_fetch_array($result_s_i)) {
                    $return .= "<tr>";
                    if ($row_s_i['tipo'] == 1) {
                        $bool = true;
                        $return .= "<td class='row2' align='center' >" . substr($row_s_i['hora_inicio'], 0, 5) . '/' . substr($row_s_i['hora_fin'], 0, 5) . "</td>";
                        foreach ($array_p_i as $row_pi) {
                            if ($bool) {
                                $style_c = 'row1';
                                $bool = false;
                            } else {
                                $style_c = 'row2x';
                                $bool = true;
                            }
                            $style_c_2 = $style_c;

                            $msg = "LIBRE";
                            $msg_e = $msg;
                            $sql_b_c = "Select * from cita where 
                                                id_usuario=" . $_REQUEST['id_usuario'] . " and 
                                                estado <> 'CANCELADO' and
                                                fecha='" . $_REQUEST['fecha'] . "' and
                                                id_proceso<>" . $row_pi['id_proceso'] . " and
                                                ((fecha_hora_inicio >='" . $_REQUEST['fecha'] . " " . $row_s_i['hora_inicio'] . "' and
                                                fecha_hora_fin <='" . $_REQUEST['fecha'] . " " . $row_s_i['hora_fin'] . "') or
                                                (fecha_hora_inicio <='" . $_REQUEST['fecha'] . " " . $row_s_i['hora_inicio'] . "' and
                                                fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row_s_i['hora_inicio'] . "') or
                                                (fecha_hora_inicio <'" . $_REQUEST['fecha'] . " " . $row_s_i['hora_fin'] . "' and
                                                fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row_s_i['hora_fin'] . "'))";

                            $result_b_c = $conexion->EjecutarQuery($sql_b_c);
                            $bool_b_c = false;
                            while ($row_ci = mysql_fetch_array($result_b_c)) {
                                $msg = $row_ci['estado']; //"PROGRAMADO";
                                $style_c = 'programado_o';
                                $bool_b_c = true;
                            }

                            $click = '';
                            if (!$bool_b_c) {
                                if ($row_pi['cantidad_pacientes'] == 1) {
                                    $click = '';
                                    $id_cita = 0;
                                    $fecha_hora_limite = '0000-00-00 00:00:00';
                                    if (!$bool_b_c) {
                                        $sql_cita = "Select * from cita where
                                                id_proceso=" . $row_pi['id_proceso'] . " and
                                                id_usuario=" . $_REQUEST['id_usuario'] . " and 
                                                fecha='" . $_REQUEST['fecha'] . "' and 
                                                id_sesion = '" . $row_s_i['id_sesion'] . "' 
                                                order by id_cita desc ";

                                        $result_cita = $conexion->EjecutarQuery($sql_cita);
                                        $bool_r = false;

                                        $row_pa = null;
                                        while ($row_ci = mysql_fetch_array($result_cita)) {
                                            $id_cita = $row_ci['id_cita'];
                                            $fecha_hora_limite = $row_ci['fecha_hora_limite'];

                                            if ($row_ci['estado'] == 'PROGRAMADO') {
                                                $style_c = 'programado';
                                            } else if ($row_ci['estado'] == 'PROCESO') {
                                                $style_c = 'proceso';
                                            } else if ($row_ci['estado'] == 'FINALIZADO') {
                                                $style_c = 'finalizado';
                                            } else if ($row_ci['estado'] == 'CANCELADO') {
                                                $style_c = 'cancelado';
                                            }


                                            $sql_pa = "Select * from paciente where historia = " . $row_ci['id_paciente'];
                                            $result_pa = $conexion->EjecutarQuery($sql_pa);
                                            while ($row_pa = mysql_fetch_array($result_pa)) {
                                                $msg_e = "<label title='{$row_pa['identificacion']} - {$row_pa['nombre1']} {$row_pa['apellido1']}'>{$row_pa['nombre1']} {$row_pa['apellido1']}</label>";
                                                $identificacion_paciente = $row_pa['identificacion'];
                                                break;
                                            }


                                            $bool_r = true;
                                            $msg = $row_ci['estado'];

                                            break;
                                        }
                                        /*                                         * *** */

                                        $click = '';
                                        $date_now = (Date("Y-m-d H:i:s"));
                                        $date_s = ($_REQUEST['fecha'] . ' ' . $row_s_i['hora_fin']);
                                        $fecha_cita = $row_s_i['fecha_hora_fin'];
                                        $fecha_cita = $date_s;
                                        //echo $date_s . ' - ' . $date_now.'<br>';
                                        if ($date_s >= $date_now) {
                                            if (!$bool_r && !$bool_b_c) {
                                                if ($_REQUEST['acc'] == 0) {
                                                    $click = "onclick='save_agenda(" . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                }
                                            } else {

                                                if (!$bool_b_c && $bool_r) {
                                                    if ($msg == 'PROGRAMADO') {
                                                        if ($_REQUEST['acc'] == 0) {
                                                            $click = "onclick='cancel(" . $id_cita . "," . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                        } else if ($_REQUEST['acc'] == 1) {

                                                            //echo 'fechas : '.$fecha_cita.' - '.$fecha_hora_ya.'<br>';
                                                            $fecha_hora_ya = Utils::addIntervalDateHours($fecha_hora_ya, '+ 2', 'Hours');
                                                            $diff = Utils::getCountHours3($fecha_cita, $fecha_hora_ya);
                                                            //echo $diff.'<--- auiii <br>';
                                                            //if ($diff <= Utils::$_horas_limite_cita) {
                                                            if ($diff <= 0) {
                                                                $click = "onclick=\"verificar_cita('" . $identificacion_paciente . "',$id_cita)\" style='cursor:pointer;'";
                                                            } else {
                                                                $click = "onclick=\"alert('No puede iniciar cita antes de la fecha y hora establecida')\" style='cursor:no-drop;'";
                                                            }

                                                            //$click = "onclick=\"verificar_cita('$identificacion_paciente',$id_cita)\"";
                                                        }
                                                    } else if ($msg == 'CANCELADO') {
                                                        if ($_REQUEST['acc'] == 0) {
                                                            $click = "onclick='save_agenda(" . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                        }
                                                    } else if ($msg == 'PROCESO') {
                                                        if ($_REQUEST['acc'] == 1) {
                                                            $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                            $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                                                            if ($diff <= Utils::$_horas_limite_cita) {
                                                                $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                            } else {
                                                                $style_c = 'proceso_n';
                                                                $click = "onclick='open_not_proceso(\"$diff\")''";
                                                            }
                                                        }
                                                    } else if ($msg == 'FINALIZADO') {
                                                        if ($_REQUEST['acc'] == 1) {
                                                            $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                        }
                                                    }
                                                }
                                            }
                                        } else {
                                            if ($msg == 'PROGRAMADO') {
                                                $style_c = 'programado';
                                                if ($_REQUEST['acc'] == 1) { //&& ($fecha_cita >= $fecha_hoy)) {
                                                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                    $diff = Utils::getCountHours($fecha_cita, $fecha_hora_ya);
                                                    if ($diff <= Utils::$_horas_limite_cita) {

                                                        //aqui bug1 <----
                                                        $click = "onclick=\"verificar_cita('" . $identificacion_paciente . "',$id_cita)\" style='cursor:pointer;'";
                                                        
                                                    }
                                                }
                                            } else if ($msg == 'PROCESO') {
                                                if ($_REQUEST['acc'] == 1) {
                                                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                    $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                                                    if ($diff <= Utils::$_horas_limite_cita) {
                                                        $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                    } else {
                                                        $style_c = 'proceso_n';
                                                        $click = "onclick='open_not_proceso(\"$diff\")'";
                                                    }
                                                }
                                            } else if ($msg == 'FINALIZADO') {
                                                if ($_REQUEST['acc'] == 1) {
                                                    $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                }
                                            }
                                        }

                                        /*                                         * *** */
                                    }
                                } else {
                                    //'opciones de 5';
                                    
                                    $style_c = $style_c_2;
                                    $msg = "LIBRE";
                                    $msg_e = $msg;
                                    $id_cita = 0;
                                    $fecha_hora_limite = '0000-00-00 00:00:00';
                                    $sql_c = "Select * from cita where
                                                id_proceso=" . $row_pi['id_proceso'] . " and
                                                id_usuario=" . $_REQUEST['id_usuario'] . " and 
                                                fecha='" . $_REQUEST['fecha'] . "' and 
                                                id_sesion = '" . $row_s_i['id_sesion'] . "'
                                                order by id_cita desc
                                                limit 0," . $row_pi['cantidad_pacientes'];

                                    $result_c = $conexion->EjecutarQuery($sql_c);
                                    $bool_r = false;

                                    /*                                     * ***** */

                                    $table_cupos = "<table width='100%' class='table_data' cellpading='0' cellspacing='0'>";

                                    $sql_citas = "";

                                    for ($i = 0; $i < $row_pi['cantidad_pacientes']; $i++) {
                                        $click = '';
                                        $style_c_x = $style_c_2;
                                        $msg = "LIBRE";
                                        $msg_e = $msg;
                                        $style_fn = '';
                                        if (($i + 1) == $row_pi['cantidad_pacientes']) {
                                            $style_fn = "fn";
                                        }

                                        /*                                         * *** */
                                        $bool_r = false;
                                        $row_c = mysql_fetch_array($result_c);
                                        if ($row_c) {
                                            $row_pa = null;
                                            $id_cita = $row_c['id_cita'];
                                            $fecha_hora_limite = $row_c['fecha_hora_limite'];
                                            if ($row_c['estado'] == 'PROGRAMADO') {
                                                $style_c_x = 'programado';
                                            } else if ($row_c['estado'] == 'PROCESO') {
                                                $style_c_x = 'proceso';
                                            } else if ($row_c['estado'] == 'FINALIZADO') {
                                                $style_c_x = 'finalizado';
                                            } else if ($row_c['estado'] == 'CANCELADO') {
                                                $style_c_x = 'cancelado';
                                            }


                                            $sql_pa = "Select * from paciente where historia = " . $row_c['id_paciente'];
                                            $result_pa = $conexion->EjecutarQuery($sql_pa);
                                            while ($row_pa = mysql_fetch_array($result_pa)) {
                                                $msg_e = "<label title='{$row_pa['identificacion']} - {$row_pa['nombre1']} {$row_pa['apellido1']}'>{$row_pa['nombre1']} {$row_pa['apellido1']}</label>";
                                                $identificacion_paciente = $row_pa['identificacion'];
                                                break;
                                            }


                                            $bool_r = true;
                                            $msg = $row_c['estado'];
                                        }

                                        $click = '';
                                        $date_now = (Date("Y-m-d H:i:s"));
                                        $date_s = ($_REQUEST['fecha'] . ' ' . $row_s_i['hora_fin']);
                                        $fecha_cita = $row_s_i['fecha_hora_fin'];
                                        $fecha_cita = $date_s;
                                        //echo $date_s . ' - ' . $date_now.' - 2<br>';
                                        if ($date_s >= $date_now) {
                                            if (!$bool_r && !$bool_b_c) {
                                                if ($_REQUEST['acc'] == 0) {
                                                    $click = "onclick='save_agenda(" . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                }
                                            } else {

                                                if (!$bool_b_c && $bool_r) {
                                                    if ($msg == 'PROGRAMADO') {
                                                        if ($_REQUEST['acc'] == 0) {
                                                            $click = "onclick='cancel(" . $id_cita . "," . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                        } else if ($_REQUEST['acc'] == 1) {
                                                            //echo 'fechas : '.$fecha_cita.' - '.$fecha_hora_ya.'<br>';
                                                            $fecha_hora_ya = Utils::addIntervalDateHours($fecha_hora_ya, '+ 2', 'Hours');
                                                            $diff = Utils::getCountHours3($fecha_cita, $fecha_hora_ya);
                                                            //echo $diff.'<--- auiii <br>';
                                                            //if ($diff <= Utils::$_horas_limite_cita) {
                                                            if ($diff <= 0) {
                                                                $click = "onclick=\"verificar_cita('" . $identificacion_paciente . "',$id_cita)\" style='cursor:pointer;'";
                                                            } else {
                                                                $click = "onclick=\"alert('No puede iniciar cita antes de la fecha y hora establecida')\" style='cursor:no-drop;'";
                                                            }
                                                            //$click = "onclick=\"verificar_cita('$identificacion_paciente',$id_cita)\"";
                                                        }
                                                    } else if ($msg == 'CANCELADO') {
                                                        if ($_REQUEST['acc'] == 0) {
                                                            $click = "onclick='save_agenda(" . $row_pi['id_proceso'] . "," . $_REQUEST['id_usuario'] . "," . $row_s_i['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\"," . $row['id_dependencia'] . ")'";
                                                        }
                                                    } else if ($msg == 'PROCESO') {
                                                        if ($_REQUEST['acc'] == 1) {
                                                            $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                            $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                                                            if ($diff <= Utils::$_horas_limite_cita) {
                                                                $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                            } else {
                                                                $style_c_x = 'proceso_n';
                                                                $click = "onclick='open_not_proceso(\"$diff\")'";
                                                            }
                                                        }
                                                    } else if ($msg == 'FINALIZADO') {
                                                        if ($_REQUEST['acc'] == 1) {
                                                            $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                        }
                                                    }
                                                }
                                            }
                                        } else {

                                            if ($msg == 'PROGRAMADO') {
                                                $style_c = 'programado';
                                                if ($_REQUEST['acc'] == 1) { //&& ($fecha_cita >= $fecha_hoy)) {
                                                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                    $diff = Utils::getCountHours($fecha_cita, $fecha_hora_ya);
                                                    if ($diff <= Utils::$_horas_limite_cita) {
                                                        $fecha_hora_ya = Utils::addIntervalDateHours($fecha_hora_ya, '+ 2', 'Hours');
                                                        $diff = Utils::getCountHours3($fecha_cita, $fecha_hora_ya);
                                                        //echo $diff.'<--- auiii <br>';
                                                        //if ($diff <= Utils::$_horas_limite_cita) {
                                                        if ($diff <= 0) {
                                                            $click = "onclick=\"verificar_cita('" . $row_c['identificacion'] . "',$id_cita)\" style='cursor:pointer;'";
                                                        } else {
                                                            $click = "onclick=\"alert('No puede iniciar cita antes de la fecha y hora establecida')\" style='cursor:no-drop;'";
                                                        }
                                                        //$click = "onclick=\"verificar_cita('" . $row_c['identificacion'] . "',$id_cita)\" style='cursor:pointer;'";
                                                    }
                                                }
                                            } else if ($msg == 'PROCESO') {
                                                if ($_REQUEST['acc'] == 1) {
                                                    $fecha_hora_ya = Date("Y-m-d H:i:s");
                                                    $diff = Utils::getCountHours($fecha_hora_limite, $fecha_hora_ya);
                                                    if ($diff <= Utils::$_horas_limite_cita) {
                                                        $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                    } else {
                                                        $style_c_x = 'proceso_n';
                                                        $click = "onclick='open_not_proceso(\"$diff\")'";
                                                    }
                                                }
                                            } else if ($msg == 'FINALIZADO') {
                                                if ($_REQUEST['acc'] == 1) {
                                                    $click = "onclick='init_cita($id_cita,\"$diff\")'";
                                                }
                                            }
                                        }

                                        /*                                         * *** */

                                        $table_cupos.="<tr $click style='cursor:pointer'>";
                                        $table_cupos.="<td class='$style_c_x $style_fn' align='center'>";
                                        $table_cupos.=$msg_e;
                                        $table_cupos.='</td>';
                                        $table_cupos.='</tr>';
                                    }

                                    $table_cupos .= '</table>';

                                    $msg = $table_cupos;
                                    $click = "";
                                }
                            }
                            $return .= "<td class='$style_c' align='center' $click style='cursor:pointer'>$msg_e</td>";
                        }
                    } else {
                        $return .= "<td class='row3' align='center' >" . substr($row_s_i['hora_inicio'], 0, 5) . '/' . substr($row_s_i['hora_fin'], 0, 5) . "</td>";
                        foreach ($array_p_i as $row_pi) {
                            $return .= "<td class='row3' align='center' ></td>";
                        }
                    }
                    $return .= "</tr>";
                }


                $return .= "</table>";

                $return .= "</td>";
            }

            $return .= '</table></tr>';

            $return .= '</div>';
        }

        $return .= '</div>';


        echo $return;
    } else if ($_REQUEST['opcion'] == 3) {
        $sql = "Select * from paciente where identificacion=" . $_REQUEST['identificacion_p'];
        $result_p = $conexion->EjecutarQuery($sql);
        $row = mysql_fetch_array($result_p);

        $return .= '<div id="tabs-x" class="content_tab_" >';
        $return .= '<h3>Historia ' . $row['historia'] . ' | ' . $row['identificacion'] . ' - ' . $row['nombre1'] . ' ' . $row['nombre2'] . ' ' . $row['apellido1'] . ' ' . $row['apellido2'] . '</h3>';

        $sql = "Select c.*,s.hora_inicio,s.hora_fin,u.nombre,u.apellido,u.registro_medico,pr.nombre as proceso
                        from usuario as u inner join  cita as c
                        on u.id_usuario = c.id_usuario inner join sesion as s
                        on c.id_sesion = s.id_sesion inner join proceso as pr
                        on c.id_proceso = pr.id_proceso
                        where c.id_paciente=" . $row['historia'] . " 
                        and c.fecha='" . $_REQUEST['fecha'] . "' 
                        order by c.fecha_hora_inicio asc";


        $result_c = $conexion->EjecutarQuery($sql);
        $id_cita = '';
        $fecha_hora_limite = '0000-00-00 00:00:00';
        $style_c = '';

        $return .= '<table border="0" cellspacing="0" cellpading="0" class="data" width="100%">';
        $return .= '<tr class="row1">';

        $return .= '<th>Area</th>';
        $return .= '<th>Estado</th>';
        $return .= '<th>Hora</th>';
        $return .= '<th>Registro medico</th>';
        $return .= '<th>Profesional</th>';

        $return .= '</tr>';

        while ($row_c = mysql_fetch_array($result_c)) {
            $click = "";
            $id_cita = $row_c['id_cita'];
            $fecha_hora_limite = $row_c['fecha_hora_limite'];
            if ($row_c['estado'] == 'PROGRAMADO') {
                $style_c = 'programado';
            } else if ($row_c['estado'] == 'PROCESO') {
                $style_c = 'proceso';
            } else if ($row_c['estado'] == 'FINALIZADO') {
                $style_c = 'finalizado';
            } else if ($row_c['estado'] == 'CANCELADO') {
                $style_c = 'cancelado';
            }

            $return .= '<tr class="' . $style_c . '" ' . $click . ' >';
            $return .= '<td align="center">' . $row_c['proceso'] . '</td>';
            $return .= '<td align="center">' . $row_c['estado'] . '</td>';
            $return .= '<td align="center">' . $_REQUEST['fecha'] . ' (' . substr($row_c['hora_inicio'], 0, 5) . '/' . substr($row_c['hora_fin'], 0, 5) . ')</td>';
            $return .= '<td align="center">' . $row_c['registro_medico'] . '</td>';
            $return .= '<td align="center">' . $row_c['nombre'] . ' ' . $row_c['apellido'] . '</td>';
            $return .= '</tr>';
        }


        $return .= '</table>';
        $return .= '</div>';

        echo $return;
    }
}
?>
