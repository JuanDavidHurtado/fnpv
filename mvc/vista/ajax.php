<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

if (isset($_REQUEST['opcion'])) {

    $GLOBALS['raiz'] = '../../';

    include $raiz . "mvc/control/utils.php";
    include $raiz . "mvc/persistencia/conexion.php";

    $conexion = new Conexion();

    //municipios de un departamento
    if ($_REQUEST['opcion'] == 1) {

        $sql    = "select * from municipio where id_depto = " . $_REQUEST['id_p'];
        $result = $conexion->EjecutarQuery($sql);

        $return = '<select class="input_txt" name="municipio' . $_REQUEST['element'] . '" id="municipio' . $_REQUEST['element'] . '">';
        while ($row = mysql_fetch_array($result)) {
            $return .= "<option value='" . $row['id_municipio'] . "'>" . $row['nombre'] . "</option>";
        }
        $return .= '</select>';

        echo $return;

        //eps de los regimen registrados
    } else if ($_REQUEST['opcion'] == 200) {

        /*$json = new stdClass();
        $json->bool = true;*/

        $fecha_hoy = date('Y-m-d');

        // $fecha_hoy="2015-07-24";

        /*   $sol = (strtotime($fecha_hoy) - 3600);
        $sol =  date('Y-m-d', $sol);

        $from = $sol;
        $to = $sol;*/

        $where  = " where 1=1 and estado=0 and date(fecha) < '$fecha_hoy'";
        $sql_cc = "SELECT * FROM factura $where ";

        $resultados3 = $conexion->EjecutarQuery($sql_cc);

        $where23 = " where 1=1 and fecha < '$fecha_hoy'";
        $sql_cc1 = "delete  FROM agenda $where23 ";

        $resultados69 = $conexion->EjecutarQuery($sql_cc1);

        while ($row22 = mysql_fetch_array($resultados3)) {

            $id_factura4 = $row22['id_factura'];

            $sql = 'update  factura set id_anulador=1,  motivos="Anulada  por usuario", valor_total=0, valor_consulta=0,subtotal=0,copago=0, descuento=0, comision=0, estado=3 where id_factura = ' . $id_factura4;
            $conexion->EjecutarQuery($sql);

            /*$sql2 = 'update  factura_cup set tarifa=0,valor_t=0, cantidad=0 where id_factura = ' . $id_factura4;
        $conexion->EjecutarQuery($sql2);*/

        }

        echo $sql_cc;

        //terapeutas de los procesos
    } else if ($_REQUEST['opcion'] == 2) {

        $where = '';
        if ($_REQUEST['id_regimen'] == 6) {
            $where                  = "where id_regimen=1  or id_regimen=6 ";
            $_REQUEST['id_regimen'] = 1;
        } else {
            $where = "where id_regimen='{$_REQUEST['id_regimen']}' ";
        }

        $sql    = "select * from eps {$where}";
        $result = $conexion->EjecutarQuery($sql);

        $return = '<select class="input_txt" name="id_eps" id="id_eps">';
        while ($row = mysql_fetch_array($result)) {
            $return .= "<option value='" . $row['id_eps'] . "'>" . $row['nombre'] . "</option>";
        }
        $return .= '</select>';

        echo $return;

        //terapeutas de los procesos
    } else if ($_REQUEST['opcion'] == 89) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        if (isset($_REQUEST['queryString'])) {
            $queryString = ($_REQUEST['queryString']);
            if (strlen($queryString) > 0) {

                $query = "SELECT * FROM cups WHERE 1=1 and nombre LIKE '%$queryString%'";
                //$query2=mysql_query($query,$con);
                $query2 = $conexion->EjecutarQuery($query);
                if ($query2 != 0) {
                    while ($row = mysql_fetch_array($query2)) {

                        echo '<li  onClick="fill(this);" id="' . $row['cups'] . '&' . $row['nombre'] . '">' . $row['nombre'] . '</li>';

                    }
                } else {
                    echo 'ERROR: There was a problem with the query2.';
                }
            } else {
                // Dont do anything.
            } // There is a queryString.
        } else {
            echo 'There should be no direct access to this script!';
        }
        //
    }
    //---------------------remision-------------------------------------------------------
    else if ($_REQUEST['opcion'] == 32) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        if (isset($_REQUEST['queryString'])) {
            $queryString = ($_REQUEST['queryString']);
            if (strlen($queryString) > 0) {

                $query = "SELECT * FROM cups_remision WHERE 1=1 and nombre_remision LIKE '%$queryString%'";
                //$query2=mysql_query($query,$con);
                $query2 = $conexion->EjecutarQuery($query);
                if ($query2 != 0) {
                    while ($row = mysql_fetch_array($query2)) {

                        echo '<li  onClick="fill1(this);" id="' . $row['cod_remision'] . '  -  ' . $row['nombre_remision'] . '">' . $row['nombre_remision'] . '</li>';

                        //echo '<li  onClick="fill1(this);" id="' . $row['id_cups_remision'] . '&' . $row['nombre_remision'] . '">' . $row['nombre_remision'] . '</li>';

                    }
                } else {
                    echo 'ERROR: There was a problem with the query2.';
                }
            } else {
                // Dont do anything.
            } // There is a queryString.
        } else {
            echo 'There should be no direct access to this script!';
        }
        //----------------------Cups Ayuda Diagnostica -----------------------------------------------------------

    } else if ($_REQUEST['opcion'] == 33) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        if (isset($_REQUEST['queryString'])) {
            $queryString = ($_REQUEST['queryString']);
            if (strlen($queryString) > 0) {

                $query = "SELECT * FROM ayuda_diagnostica WHERE 1=1 and nombre_diagnostica LIKE '%$queryString%'";
                //$query2=mysql_query($query,$con);
                $query2 = $conexion->EjecutarQuery($query);
                if ($query2 != 0) {
                    while ($row = mysql_fetch_array($query2)) {

                        echo '<li  onClick="fill2(this);" id="' . $row['cod_diagnostica'] . ' - ' . $row['nombre_diagnostica'] . '">' . $row['nombre_diagnostica'] . '</li>';

                    }
                } else {
                    echo 'ERROR: There was a problem with the query2.';
                }
            } else {
                // Dont do anything.
            } // There is a queryString.
        } else {
            echo 'There should be no direct access to this script!';
        }

    } else if ($_REQUEST['opcion'] == 898) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        if (isset($_REQUEST['queryString'])) {
            $queryString = ($_REQUEST['queryString']);
            if (strlen($queryString) > 0) {

                $query = "SELECT * FROM cups WHERE 1=1 and nombre LIKE '%$queryString%'";
                //$query2=mysql_query($query,$con);
                $query2 = $conexion->EjecutarQuery($query);
                if ($query2 != 0) {
                    while ($row = mysql_fetch_array($query2)) {

                        $query5  = "SELECT * FROM contratacion WHERE 1=1  and id_cup=" . $row['id_cups'] . " and id_contrato='" . $_REQUEST['id_contrato'] . "'";
                        $query25 = $conexion->EjecutarQuery($query5);

                        while ($row5 = mysql_fetch_array($query25)) {

                            $cadena  = " where id_cups = '" . $row5['id_cup'] . "' ";
                            $sql2    = "Select * from cups  $cadena";
                            $result2 = $conexion->EjecutarQuery($sql2);
                            $row2    = mysql_fetch_array($result2);

                            echo '<li  onClick="fill(this);" id="' . $row2['id_cups'] . '&' . $row2['nombre'] . '">' . $row2['nombre'] . '</li>';

                        }

                    }
                } else {
                    echo 'ERROR: There was a problem with the query2.';
                }
            } else {
                // Dont do anything.
            } // There is a queryString.
        } else {
            echo 'There should be no direct access to this script!';
        }

    } else if ($_REQUEST['opcion'] == 3) {

        $sql    = "select u.* from rol as r inner join usuario as u on r.id_rol = u.id_rol inner join usuario_proceso as up on u.id_usuario = up.id_usuario where up.id_proceso=" . $_REQUEST['id_proceso'] . " and up.estado='ACTIVO' and r.nombre='USUARIO' and u.estado='ACTIVO' order by u.registro_medico asc";
        $result = $conexion->EjecutarQuery($sql);

        $return = '<select class="input_txt" name="id_usuario" id="id_usuario">';
        $return .= '<option value=""> [ SELECCIONAR ] </option>';
        while ($row = mysql_fetch_array($result)) {
            $return .= "<option value='" . $row['id_usuario'] . "'>" . $row['registro_medico'] . " - " . $row['nombre'] . " " . $row['apellido'] . "</option>";
        }
        $return .= '</select>';

        echo $return;

        //itinerario
    } else if ($_REQUEST['opcion'] == 4) {
        $sql_p    = "Select * from proceso where id_proceso = " . $_REQUEST['id_proceso'];
        $result_p = $conexion->EjecutarQuery($sql_p);
        while ($row_p = mysql_fetch_assoc($result_p)) {

            $sql    = "Select * from sesion where id_itinerario= " . $row_p['id_itinerario'] . " order by flujo asc ";
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

            $return = "<table border='0' class='data' cellpading='0' cellspacing='0' >";

            $return .= '<tr class="row1">';
            $return .= '<th>Horario</th>';

            foreach ($array_us as $row_us) {
                $return .= '<th colspan="2"><div title="' . $row_us['registro_medico'] . ' : ' . $row_us['nombre'] . ' ' . $row_us['apellido'] . '">' . $row_us['registro_medico'] . ' - ' . $row_us['nombre'] . ' ...</div></th>';
            }

            $return .= '</tr>';

            while ($row = mysql_fetch_array($result)) {
                $return .= "<tr >";
                $style = 'row2';
                if ($row['tipo'] == 2) {
                    $style = 'row3';
                }

                $return .= "<td class='$style'>" . substr($row['hora_inicio'], 0, 5) . "/" . substr($row['hora_fin'], 0, 5) . "</td>";

                $bool = true;

                foreach ($array_us as $row_u) {

                    if ($row['tipo'] == 1) {

                        if ($bool) {
                            $style_c = 'row1';
                            $bool    = false;
                        } else {
                            $style_c = 'row2';
                            $bool    = true;
                        }

                        $sql_c = "Select * from cita where
                                id_proceso=" . $_REQUEST['id_proceso'] . " and
                                id_usuario=" . $row_u['id_usuario'] . " and
                                fecha='" . $_REQUEST['fecha'] . "' and
                                id_sesion = '" . $row['id_sesion'] . "' ";

                        $result_c = $conexion->EjecutarQuery($sql_c);
                        $bool_r   = false;
                        $msg      = "LIBRE";
                        $row_pa   = null;
                        while ($row_c = mysql_fetch_array($result_c)) {

                            if ($row_c['estado'] == 'PROGRAMADO') {
                                $style_c = 'programado';
                            } else if ($row_c['estado'] == 'PROCESO') {
                                $style_c = 'proceso';
                            } else if ($row_c['estado'] == 'FINALIZADO') {
                                $style_c = 'finalizado';
                            } else if ($row_c['estado'] == 'CANCELADO') {
                                $style_c = 'cancelado';
                            }

                            $sql_pa    = "Select * from paciente where historia = " . $row_c['id_paciente'];
                            $result_pa = $conexion->EjecutarQuery($sql_pa);
                            while ($row_pa = mysql_fetch_array($result_pa)) {
                                true;
                                break;
                            }

                            $bool_r = true;
                            $msg    = $row_c['estado'];

                            break;
                        }

                        $col   = '';
                        $click = '';
                        if (!$bool_r) {
                            $col   = 'colspan="2"';
                            $click = "onclick='add_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\")'";
                        }

                        $return .= "<td class='$style_c' $col align='center' style='cursor:pointer' $click>$msg</td>";
                        if ($bool_r) {
                            $return .= "<td class='$style_c' align='right'><a href='#' title='" . $row_pa['nombre1'] . " " . $row_pa['nombre2'] . " " . $row_pa['apellido1'] . " " . $row_pa['apellido2'] . "'>" . $row_pa['historia'] . " - " . $row_pa['identificacion'] . " </a></td>";
                        }

                        //break;
                    } else {

                        $return .= "<td class='row3' colspan='2'></td>";
                    }
                }

                $return .= "</tr>";
                //break;
            }

            $return .= "</table>";

            break;
        }

        echo @$return;
    } else if ($_REQUEST['opcion'] == 5) {

        //print_r($_REQUEST);

        $sql_u    = "Select * from usuario where id_usuario = " . $_REQUEST['id_usuario'];
        $result_u = $conexion->EjecutarQuery($sql_u);
        $row_u    = null;
        while ($row_u = mysql_fetch_array($result_u)) {
            break;
        }

        $sql      = "Select * from proceso where id_proceso = " . $_REQUEST['id_proceso'];
        $result_p = $conexion->EjecutarQuery($sql);

        $return = "<h2>Agregar itinerario - " . $row_u['nombre'] . " " . $row_u['apellido'] . "</h2>";

        $return .= "<div id='content_itinerarios_user'><table border='0' cellspacing='0' cellpading='0' ><tr>";

        //***************

        while ($row_p = mysql_fetch_array($result_p)) {

            $return .= "<td valign='top'><table border='0' cellpading='0' cellspacing='0' class='data agenda'>";

            $return .= "<tr><th colspan='3' class='row1'>" . $row_p['nombre'] . "</th></tr>";

            $sql_s    = "Select * from sesion where id_itinerario = " . $row_p['id_itinerario'] . " order by flujo asc";
            $result_s = $conexion->EjecutarQuery($sql_s);

            while ($row_s = mysql_fetch_array($result_s)) {
                if ($row_s['tipo'] == 2) {
                    $return .= "<tr>";
                    $return .= "<td class='row3'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";
                    $return .= "<td class='row3' colspan='2'></td>";
                    $return .= "</tr>";
                } else {

                    $style_c = 'row1';
                    $bool    = false;

                    $sql_c = "Select * from cita where
                                    id_proceso=" . $_REQUEST['id_proceso'] . " and
                                    id_usuario=" . $_REQUEST['id_usuario'] . " and
                                    fecha='" . $_REQUEST['fecha'] . "' and
                                    id_sesion = '" . $row_s['id_sesion'] . "' ";

                    $result_c = $conexion->EjecutarQuery($sql_c);
                    $bool_r   = false;
                    $msg      = "LIBRE";
                    $id_cita  = 0;
                    $row_pa   = null;
                    while ($row_c = mysql_fetch_array($result_c)) {
                        $id_cita = $row_c['id_cita'];
                        if ($row_c['estado'] == 'PROGRAMADO') {
                            $style_c = 'programado';
                        } else if ($row_c['estado'] == 'PROCESO') {
                            $style_c = 'proceso';
                        } else if ($row_c['estado'] == 'FINALIZADO') {
                            $style_c = 'finalizado';
                        } else if ($row_c['estado'] == 'CANCELADO') {
                            $style_c = 'cancelado';
                        }

                        $sql_pa    = "Select * from paciente where historia = " . $row_c['id_paciente'];
                        $result_pa = $conexion->EjecutarQuery($sql_pa);
                        while ($row_pa = mysql_fetch_array($result_pa)) {
                            true;
                            break;
                        }

                        $bool_r = true;
                        $msg    = $row_c['estado'];

                        break;
                    }

                    $col   = '';
                    $click = '';
                    if (!$bool_r) {
                        $col   = 'colspan="2"';
                        $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row_s['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\")'";
                    } else {

                        if ($msg == 'PROGRAMADO') {

                            $click = "onclick='cancel(" . $id_cita . "," . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row_s['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\")'";
                        } else if ($msg == 'CANCELADO') {

                            $click = "onclick='save_agenda(" . $_REQUEST['id_proceso'] . "," . $row_u['id_usuario'] . "," . $row_s['id_sesion'] . ",\"" . $_REQUEST['fecha'] . "\")'";
                        }
                    }

                    $return .= "<tr>";
                    $return .= "<td class='row2'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";

                    $return .= "<td class='$style_c' $col align='center' style='cursor:pointer' $click >$msg</td>";
                    if ($bool_r) {
                        $return .= "<td class='$style_c' align='right'><a href='#' title='" . $row_pa['nombre1'] . " " . $row_pa['nombre2'] . " " . $row_pa['apellido1'] . " " . $row_pa['apellido2'] . "'>" . $row_pa['historia'] . " - " . $row_pa['identificacion'] . " </a></td>";
                    }

                    $return .= "</tr>";
                }
            }

            $return .= "</table></td>";

            break;
        }

        //***************

        $sql      = "Select p.* from proceso as p inner join usuario_proceso as up on p.id_proceso = up.id_proceso where up.id_proceso <> " . $_REQUEST['id_proceso'] . " and up.id_usuario=" . $_REQUEST['id_usuario'] . " and estado='ACTIVO' ";
        $result_p = $conexion->EjecutarQuery($sql);

        //***************

        while ($row_p = mysql_fetch_array($result_p)) {

            $return .= "<td valign='top'><table border='0' cellpading='0' cellspacing='0' class='data'>";

            $return .= "<tr><th colspan='3' class='row1'>" . $row_p['nombre'] . "</th></tr>";

            $sql_s    = "Select * from sesion where id_itinerario = " . $row_p['id_itinerario'] . " order by flujo asc";
            $result_s = $conexion->EjecutarQuery($sql_s);

            while ($row_s = mysql_fetch_array($result_s)) {
                if ($row_s['tipo'] == 2) {
                    $return .= "<tr>";
                    $return .= "<td class='row3'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";
                    $return .= "<td class='row3' colspan='2'></td>";
                    $return .= "</tr>";
                } else {

                    $style_c = 'row1';
                    $bool    = false;

                    $sql_c = "Select * from cita where
                                    id_proceso=" . $row_p['id_proceso'] . " and
                                    id_usuario=" . $_REQUEST['id_usuario'] . " and
                                    fecha='" . $_REQUEST['fecha'] . "' and
                                    id_sesion = '" . $row_s['id_sesion'] . "' ";

                    $result_c = $conexion->EjecutarQuery($sql_c);
                    $bool_r   = false;
                    $msg      = "LIBRE";
                    $row_pa   = null;
                    while ($row_c = mysql_fetch_array($result_c)) {

                        if ($row_c['estado'] == 'PROGRAMADO') {
                            $style_c = 'programado';
                        } else if ($row_c['estado'] == 'PROCESO') {
                            $style_c = 'proceso';
                        } else if ($row_c['estado'] == 'FINALIZADO') {
                            $style_c = 'finalizado';
                        } else if ($row_c['estado'] == 'CANCELADO') {
                            $style_c = 'cancelado';
                        }

                        $sql_pa    = "Select * from paciente where historia = " . $row_c['id_paciente'];
                        $result_pa = $conexion->EjecutarQuery($sql_pa);
                        while ($row_pa = mysql_fetch_array($result_pa)) {
                            true;
                            break;
                        }

                        $bool_r = true;
                        $msg    = $row_c['estado'];

                        break;
                    }

                    $col   = '';
                    $click = '';
                    if (!$bool_r) {
                        $col = 'colspan="2"';

                        $sql = "select * from cita where
                                             fecha='" . $_REQUEST['fecha'] . "'
                                             and id_usuario=" . $_REQUEST['id_usuario'] . "
                                             and fecha_hora_inicio BETWEEN'" . $_REQUEST['fecha'] . " " . $row_s['hora_inicio'] . "' and fecha_hora_fin='" . $_REQUEST['fecha'] . " " . $row_s['hora_fin'] . "'
                                             and fecha_hora_fin BETWEEN'" . $_REQUEST['fecha'] . " " . $row_s['hora_inicio'] . "' and fecha_hora_fin='" . $_REQUEST['fecha'] . " " . $row_s['hora_fin'] . "' <br>";

                        $click = ''; //"onclick='add_agenda(".$_REQUEST['id_proceso'].",".$row_u['id_usuario'].",".$row['id_sesion'].",".$_REQUEST['fecha'].")'";
                    }

                    $return .= "<tr>";
                    $return .= "<td class='row2'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";

                    $return .= "<td class='$style_c' $col align='center' style='' >$msg</td>";
                    if ($bool_r) {
                        $return .= "<td class='$style_c' align='right'><a href='#' title='" . $row_pa['nombre1'] . " " . $row_pa['nombre2'] . " " . $row_pa['apellido1'] . " " . $row_pa['apellido2'] . "'>" . $row_pa['historia'] . " - " . $row_pa['identificacion'] . " </a></td>";
                    }

                    $return .= "</tr>";
                }
            }

            $return .= "</table></td>";
        }

        //***************

        $return .= "</tr></table></div>";

        echo $return;
    } else if ($_REQUEST['opcion'] == 6) {

        $json       = new stdClass();
        $json->bool = false;

        $sql = "Select u.*,ti.id as tipo_id from
                                paciente as u inner join tipo_identificacion as ti
                                    on u.tipo_id = ti.id_tipo_identificacion
                                where u.identificacion=" . $_REQUEST['identificacion'];
        $result = $conexion->EjecutarQuery($sql);

        while ($row = mysql_fetch_array($result)) {

            $sql_c = "select e.*, r.nombre as regimen from
                                eps as e inner join regimen as r
                                    on e.id_regimen = r.id_regimen
                                where e.id_eps =" . $row['id_eps'] . "";
            $result_c = $conexion->EjecutarQuery($sql_c);
            $row_c    = mysql_fetch_array($result_c);

            $json->tipo_id    = $row['tipo_id'];
            $json->historia   = $row['historia'];
            $json->edad       = Utils::edad($row['fecha_n']);
            $json->nombre1    = $row['nombre1'];
            $json->nombre2    = $row['nombre2'];
            $json->apellido1  = $row['apellido1'];
            $json->apellido2  = $row['apellido2'];
            $json->fecha_n    = $row['fecha_n'];
            $json->sexo       = $row['sexo'] == 'F' ? "FEMENINO" : "MASCULINO";
            $json->domicilio  = $row['domicilio'];
            $json->telefono   = $row['telefono'];
            $json->id_eps     = $row_c['nombre'];
            $json->id_regimen = $row_c['regimen'];

            $json->bool = true;
        }

        $return = json_encode($json);
        echo $return;
    } else if ($_REQUEST['opcion'] == 7) {
        $date         = Date("Y-m-d");
        $return       = new stdClass();
        $return->bool = false;
        $return->info = $_REQUEST['identificacion_p'] . ' - ' . $_REQUEST['nombre1'] . ' ' . $_REQUEST['apellido1'];
        if ($_REQUEST['fecha'] >= $date) {

            $sql_sesion    = "Select * from sesion where id_sesion = " . $_REQUEST['id_sesion'];
            $result_sesion = $conexion->EjecutarQuery($sql_sesion);
            $row_s         = mysql_fetch_array($result_sesion);

            $fecha_hora_inicio = $_REQUEST['fecha'] . " " . $row_s['hora_inicio'];
            $fecha_hora_fin    = $_REQUEST['fecha'] . " " . $row_s['hora_fin'];

            /*             * ************************************************************************* */
            $sql_b_c = "Select * from cita
                               where
                               id_paciente = " . $_REQUEST['id_paciente'] . " and
                               estado <> 'CANCELADO' and
                               fecha='" . $_REQUEST['fecha'] . "' and
                               ((fecha_hora_inicio >='" . $_REQUEST['fecha'] . " " . $row_s['hora_inicio'] . "' and
                               fecha_hora_fin <='" . $_REQUEST['fecha'] . " " . $row_s['hora_fin'] . "') or
                               (fecha_hora_inicio <='" . $_REQUEST['fecha'] . " " . $row_s['hora_inicio'] . "' and
                               fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row_s['hora_inicio'] . "') or
                               (fecha_hora_inicio <'" . $_REQUEST['fecha'] . " " . $row_s['hora_fin'] . "' and
                               fecha_hora_fin >'" . $_REQUEST['fecha'] . " " . $row_s['hora_fin'] . "'))";

            $return->sql = $sql_b_c;

            $result_b_c = $conexion->EjecutarQuery($sql_b_c);
            $bool_c     = false;
            while ($row_b_c = mysql_fetch_array($result_b_c)) {
                $bool_c = true;
                break;
            }

            /*             * ************************************************************************* */
            if (!$bool_c) {
                $return->bool = true;

                $fecha_des = $_REQUEST['fecha_des'];

                $sql_insert_cita = "INSERT INTO `cita`
                                    (`id_proceso`, `id_usuario`, `id_paciente`, `fecha`, `fecha_hora_inicio`, `fecha_hora_fin`,`fecha_hora_limite`,`fecha_des`, `id_sesion`)
                                    VALUES ('" . $_REQUEST['id_proceso'] . "', '" . $_REQUEST['id_usuario'] . "', '" . $_REQUEST['id_paciente'] . "', '" . $_REQUEST['fecha'] . "', '$fecha_hora_inicio', '$fecha_hora_fin', '$fecha_des', '" . $_REQUEST['id_sesion'] . "')";

                $return->sql = $sql_insert_cita;
                $result_cita = $conexion->EjecutarInsert($sql_insert_cita);
                //traer la ultima cita
                $max_id_cita = "Select max(id_cita) as id_cita from cita where id_proceso='{$_REQUEST['id_proceso']}' and  id_usuario='{$_REQUEST['id_usuario']}' and id_paciente='{$_REQUEST['id_paciente']}' and fecha_hora_inicio='{$fecha_hora_inicio}' ";
                $result_max  = $conexion->EjecutarInsert($max_id_cita);
                $row         = mysql_fetch_array($result_max);
                //traer id_paciente

                $paciente   = "Select identificacion as id_pac from paciente where historia='{$_REQUEST['id_paciente']}'";
                $result_pac = $conexion->EjecutarInsert($paciente);
                $result_pac = $conexion->EjecutarInsert($paciente);
                $row_pac    = mysql_fetch_array($result_pac);
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
                    $cad_cup                = " ";
                    $_REQUEST['grupo_cups'] = split(",", $_REQUEST['grupo_cups']);

                    foreach ($_REQUEST['grupo_cups'] as $valor) {
                        if ($valor != '') {
                            $cad_cup .= "('{$row['id_cita']}', '{$valor}','{$_REQUEST['id_proceso']}','{$fecha_hora_inicio}'),";
                        }
                    }

                    $cad_cup = substr(trim($cad_cup), 0, (strlen($cad_cup) - 2)) . "";
                }

                $ejecutar_cadena = $sql_cup_cita . $cad_cup;
                $return->sql     = $ejecutar_cadena;
                $conexion->EjecutarInsert($ejecutar_cadena);

                /*                 * ******************* */
            }
        }

        echo json_encode($return);
    } else if ($_REQUEST['opcion'] == 8) {

        //print_r($_REQUEST);

        $sql_u    = "Select * from usuario where id_usuario = " . $_SESSION['id_usuario'];
        $result_u = $conexion->EjecutarQuery($sql_u);
        $row_u    = null;
        while ($row_u = mysql_fetch_array($result_u)) {
            break;
        }

        if ($_REQUEST['id_proceso'] != '') {
            $where = " and p.id_proceso = " . $_REQUEST['id_proceso'];
        }

        $return .= "<div id='content_itinerarios_user'><table border='0' cellspacing='0' cellpading='0' ><tr>";

        $sql      = "Select p.* from proceso as p inner join usuario_proceso as up on p.id_proceso = up.id_proceso where up.id_usuario=" . $_SESSION['id_usuario'] . ' and up.estado="ACTIVO" ' . @$where;
        $result_p = $conexion->EjecutarQuery($sql);

        //***************

        while ($row_p = mysql_fetch_array($result_p)) {

            $return .= "<td valign='top'><table border='0' cellpading='0' cellspacing='0' class='data'>";

            $return .= "<tr><th colspan='3' class='row1'>" . $row_p['nombre'] . "</th></tr>";

            $sql_s    = "Select * from sesion where id_itinerario = " . $row_p['id_itinerario'] . " order by flujo asc";
            $result_s = $conexion->EjecutarQuery($sql_s);

            while ($row_s = mysql_fetch_array($result_s)) {
                if ($row_s['tipo'] == 2) {
                    $return .= "<tr>";
                    $return .= "<td class='row3'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";
                    $return .= "<td class='row3' colspan='2'></td>";
                    $return .= "</tr>";
                } else {

                    $style_c = 'row1';
                    $bool    = false;

                    $sql_c = "Select * from cita where
                                    id_proceso=" . $row_p['id_proceso'] . " and
                                    id_usuario=" . $_SESSION['id_usuario'] . " and
                                    fecha='" . $_REQUEST['fecha'] . "' and
                                    id_sesion = '" . $row_s['id_sesion'] . "' ";

                    $result_c = $conexion->EjecutarQuery($sql_c);
                    $bool_r   = false;
                    $msg      = "LIBRE";
                    $row_pa   = null;
                    $id_cita  = 0;
                    while ($row_c = mysql_fetch_array($result_c)) {

                        $id_cita = $row_c['id_cita'];

                        if ($row_c['estado'] == 'PROGRAMADO') {
                            $style_c = 'programado';
                        } else if ($row_c['estado'] == 'PROCESO') {
                            $style_c = 'proceso';
                        } else if ($row_c['estado'] == 'FINALIZADO') {
                            $style_c = 'finalizado';
                        } else if ($row_c['estado'] == 'CANCELADO') {
                            $style_c = 'cancelado';
                        }

                        $sql_pa    = "Select * from paciente where historia = " . $row_c['id_paciente'];
                        $result_pa = $conexion->EjecutarQuery($sql_pa);
                        while ($row_pa = mysql_fetch_array($result_pa)) {
                            true;
                            break;
                        }

                        $bool_r = true;
                        $msg    = $row_c['estado'];

                        break;
                    }

                    $col   = '';
                    $click = '';
                    if (!$bool_r) {
                        $col = 'colspan="2"';
                    } else {
                        $click = "onclick='verificar_cita(\"" . $row_pa['identificacion'] . "\",$id_cita)'";
                    }

                    $return .= "<tr $click>";
                    $return .= "<td class='row2'>" . $row_s['hora_inicio'] . "/" . $row_s['hora_fin'] . "</td>";

                    $return .= "<td class='$style_c' $col align='center' style='' >$msg</td>";
                    if ($bool_r) {
                        $return .= "<td class='$style_c' align='right'><a href='#' title='" . $row_pa['nombre1'] . " " . $row_pa['nombre2'] . " " . $row_pa['apellido1'] . " " . $row_pa['apellido2'] . "'>" . $row_pa['historia'] . " - " . $row_pa['identificacion'] . " </a></td>";
                    }

                    $return .= "</tr>";
                }
            }

            $return .= "</table></td>";
        }

        //***************

        $return .= "</tr></table></div>";

        echo $return;
    } else if ($_REQUEST['opcion'] == 9) {

        $estado    = $_REQUEST['estado'];
        $id_cita   = $_REQUEST['id_cita'];
        $usuario_2 = $_REQUEST['usuario_2'];
        $motivo    = $_REQUEST['motivo'];
        // $fecha_cancel= date("Y-m-d");

        $sql23          = "Select * from usuario where id_usuario = '" . $usuario_2 . "' ";
        $result23       = $conexion->EjecutarQuery($sql23);
        $row23          = mysql_fetch_array($result23);
        $nombre_usuario = $row23['nombre'] . " " . $row23['apellido'];

        $fecha_cancel = date("Y-m-d H:i:s");

        $cadena_f = "Motivo:" . $motivo . " // Usuario:" . $nombre_usuario . " // Fecha:" . $fecha_cancel;

        $sql = "UPDATE  `cita` SET  `estado` =  '$estado' , `motivo` =  '$cadena_f' WHERE  `id_cita` ='$id_cita';";
        $conexion->EjecutarUpdate($sql);

    } else if ($_REQUEST['opcion'] == 10) {

        $array_term = explode(" ", $_REQUEST['term']);

        $n_term = str_replace(" ", "%", $_REQUEST['term']);

        $where = " codigo like '%$n_term%' or enfermedad like '%$n_term%'";

        foreach ($array_term as $ter) {
            $where .= " or enfermedad like '%" . $ter . "%' ";
        }

        $return = '';

        $sql    = "select * from enfermedadescie10 where $where order by codigo asc";
        $result = $conexion->EjecutarQuery($sql);

        $return .= "<table border='0' class='data' cellpading='0' cellspacing='0' width='100%'>";

        $return .= '<tr class="row1">';
        $return .= '<th width="200px">Codigo</th>';
        $return .= '<th>Enfermedad</th>';
        $return .= '<th width="150px">Opcion</th>';
        $return .= '</tr>';
        $bool_style = true;
        while ($row = mysql_fetch_array($result)) {
            $style = '';
            if ($bool_style) {
                $style = 'row2';
            } else {
                $style = 'row1';
            }
            $bool_style = !$bool_style;

            $return .= "<tr class='$style'>";
            $return .= '<td align="center">' . $row['codigo'] . '</td>';
            $return .= '<td align="left"><div id="e_' . $row['codigo'] . '">' . $row['enfermedad'] . '</div></td>';
            $return .= '<td align="center"><div onclick="poner_e(\'' . $row['codigo'] . '\')" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false"><span class="ui-button-text">Aceptar</span></div></td>';
            $return .= '</tr>';
        }
        $return .= "</table>";
        echo $return;
    } else if ($_REQUEST['opcion'] == 11) {

        $object_return              = new stdClass();
        $object_return->bool_insert = true;
        $object_return->codigo      = $_REQUEST['n_codigo'];

        $sql    = "Select * from enfermedadescie10 where codigo = '" . $_REQUEST['n_codigo'] . "' ";
        $result = $conexion->EjecutarQuery($sql);
        while ($row = mysql_fetch_array($result)) {

            $object_return->bool_insert = false;
            break;
        }

        if ($object_return->bool_insert) {
            $sql = "INSERT INTO `enfermedadescie10`
                    (`codigo`, `enfermedad`, `codcategoria`, `categoria`)
                    VALUES
                    ('" . $_REQUEST['n_codigo'] . "', '" . $_REQUEST['n_enfermedad'] . "', '', '');";
            $conexion->EjecutarQuery($sql);
        }

        echo json_encode($object_return);
    } else if ($_REQUEST['opcion'] == 12) {
        $object_return       = new stdClass();
        $object_return->bool = false;

        $sql    = "Select * from cups where cups = '" . $_REQUEST['id_cup'] . "' ";
        $result = $conexion->EjecutarQuery($sql);
        while ($row = mysql_fetch_array($result)) {

            $object_return->bool = true;
            $object_return->val  = $row['nombre'];
            //$object_return->cup = $_REQUEST['id_cup'];
            break;
        }
        echo json_encode($object_return);

        // if de la facturacion
    } else if ($_REQUEST['opcion'] == 13) {
        $object_return       = new stdClass();
        $object_return->bool = false;

        $object_return2       = new stdClass();
        $object_return2->bool = false;
        // el id_cup del request es el codigo por eso hago una nueva busqueda para traer el id rela del cup
        $sql2                  = "Select * from cups where cups = '" . $_REQUEST['id_cup'] . "' ";
        $result2               = $conexion->EjecutarQuery($sql2);
        $row2                  = mysql_fetch_array($result2);
        $id_c                  = $row2['id_cups'];
        $object_return->nombre = $row2['nombre'];
        // $object_return->val=$row2['id_cups'];

        $sql    = "Select * from contratacion where id_cup = '" . $id_c . "' and id_contrato='" . $_REQUEST['id_contrato'] . "'";
        $result = $conexion->EjecutarQuery($sql);
        while ($row = mysql_fetch_array($result)) {

            $object_return->bool   = true;
            $object_return->val    = $row['tarifa'];
            $object_return->id_cup = $row['id_cup'];
            break;
        }

        echo json_encode($object_return);
    } else if ($_REQUEST['opcion'] == 14) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        //CAMBIAR EL ID CUP POR EL NUMERO

        $sql2    = "Select * from cups where cups = '" . $_REQUEST['id_cup'] . "' ";
        $result2 = $conexion->EjecutarQuery($sql2);
        $row2    = mysql_fetch_array($result2);
        $id_c    = $row2['id_cups'];

        $sql    = "Select * from contratacion where id_cup = '" . $id_c . "' and id_contrato='" . $_REQUEST['id_contrato'] . "'";
        $result = $conexion->EjecutarQuery($sql);
        $valor  = $row['tarifa'];

        while ($row = mysql_fetch_array($result)) {
            $object_return->bool = true;
            $object_return->val  = $row['tarifa'];
            break;
        }

        $object_return->codigo_cup = $row2['cups'];
        $object_return->nombre     = $row2['nombre'];

        echo json_encode($object_return);
        //$valor = $row['tarifa'];
        //if para la lista del contrato segun la eps
    } else if ($_REQUEST['opcion'] == 15) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        $ret = " <select id='id_contrato' name='id_contrato' class='input_txt' onchange='pasar_descripcion_contrato();'>
             <option value='0'>Seleccione</option>";

        $sql     = "Select * from contrato where contratante = '" . $_REQUEST['id_eps'] . "'";
        $resultr = $conexion->EjecutarQuery($sql);

        while ($rowr = mysql_fetch_array($resultr)) {
            $object_return->bool          = true;
            $object_return->descripcion_c = $rowr['descripcion'];
            $nombre_contrato              = $rowr['nombre_contrato'];

            $ret .= "<option value='" . $rowr['id_contrato'] . "' $sel>" . $nombre_contrato . "</option>";
        }
        $ret .= "</select>";

        $object_return->codigo = $ret;

        echo json_encode($object_return);
        //$valor = $row['tarifa'];
    } else if ($_REQUEST['opcion'] == 16) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        $sql     = "Select * from contrato where id_contrato = '" . $_REQUEST['id_contrato'] . "'";
        $resultr = $conexion->EjecutarQuery($sql);
        $rowr    = mysql_fetch_array($resultr);

        $object_return->bool          = true;
        $object_return->descripcion_c = $rowr['descripcion'];
        $object_return->porcentaje    = $rowr['porcentaje'];

        echo json_encode($object_return);
        //$valor = $row['tarifa'];
    } else if ($_REQUEST['opcion'] == 17) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        $sql    = "Select * from contratacion where id_contrato='" . $_REQUEST['id_contrato'] . "'";
        $result = $conexion->EjecutarQuery($sql);

        $ret = "<select id='id_cup_2' name='id_cup_2'class='input_txt' onchange='traer_valor2();' >
                <option value='0'>Seleccione</option>";

        while ($row = mysql_fetch_array($result)) {
            $object_return->bool = true;
            $cadena              = " where id_cups = '" . $row['id_cup'] . "' ";
            $sql2                = "Select * from cups  $cadena";
            //  $sql3 .=$sql2;
            $result2 = $conexion->EjecutarQuery($sql2);
            $row2    = mysql_fetch_array($result2);
            $cups .= $row2['cups'] . "++";
            $ret .= "<option value='" . $row2['id_cups'] . "'>" . $row2['nombre'] . "</option>";
        }

        $ret .= "</select>";

        if ($object_return->bool) {
            echo $ret;
        } else {
            echo '';
        }
    } else if ($_REQUEST['opcion'] == 18) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql2    = "Select * from cups where id_cups = '" . $_REQUEST['id_cup'] . "' ";
        $result2 = $conexion->EjecutarQuery($sql2);
        $row2    = mysql_fetch_array($result2);

        $object_return->codigo_cup = $row2['cups'];
        $object_return->nombre     = $row2['nombre'];
        // $object_return->nombre2 =$sql2;

        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 19) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql2    = "Select * from cups where cups = '" . $_REQUEST['id_cup'] . "' ";
        $result2 = $conexion->EjecutarQuery($sql2);
        $row2    = mysql_fetch_array($result2);

        $object_return->id_cup = $row2['id_cups'];
        $object_return->nombre = $row2['nombre'];

        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 35) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql = "INSERT INTO h_ay_diagnostica (
                    `id_ay_diagnostica`,
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `nom_ay_diagno`
                    ) VALUES (NULL,
                    '" . $_REQUEST['id_usuario'] . "',
                    '" . $_REQUEST['id_proceso'] . "',
                    '" . $_REQUEST['historia'] . "',
                    '" . $_REQUEST['id_vinicial'] . "',
                    '" . $_REQUEST['nom_ay_diagno'] . "'
                    ) ";

        $conexion->EjecutarQuery($sql);

        // $object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 36) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql = "INSERT INTO hc_formula_medica (
                    `id_hc_formula_medica`,
                    `id_usuario`,
                    `id_historia`,
                    `id_proceso`,
                    `id_vinicial`,
                    `m_medicamento`,
                    `m_cantidad`,
                    `m_posologia`,
                    `m_via`,
                    `m_dias`,
                    fecha_formula
                    ) VALUES (NULL,
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['fechag_1x'] . "' ,
                    '" . $_REQUEST['fechag_2x'] . "' ,
                    '" . $_REQUEST['fechag_3x'] . "' ,
                    '" . $_REQUEST['fechag_4x'] . "' ,
                    '" . $_REQUEST['fechag_5x'] . "' ,
                    '" . $_REQUEST['fechag_6x'] . "'
                    ) ";

        $conexion->EjecutarQuery($sql);

        // $object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 101) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql = "INSERT INTO hc_remision (
                    `id_usuario`,
                    `id_proceso`,
                    `id_historia`,
                    `id_vinicial`,
                    `nota_remision`

                    ) VALUES (
                    '" . $_REQUEST['id_usuario'] . "' ,
                    '" . $_REQUEST['id_proceso'] . "' ,
                    '" . $_REQUEST['historia'] . "' ,
                    '" . $_REQUEST['id_vinicial'] . "' ,
                    '" . $_REQUEST['fechag_9x'] . "'
                    ) ";

        $conexion->EjecutarQuery($sql);

        // $object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 68) {

        //$object_return = new stdClass();
        //$object_return->bool = true;

        if (isset($_REQUEST['queryString'])) {
            $queryString = ($_REQUEST['queryString']);
            if (strlen($queryString) > 0) {

                $query = "SELECT * FROM medicamentos WHERE 1=1 and nombre LIKE '$queryString%'";
                //$query2=mysql_query($query,$con);
                $query2 = $conexion->EjecutarQuery($query);
                if ($query2 != 0) {
                    while ($row = mysql_fetch_array($query2)) {
                        echo '<li  onClick="fill(this);" id="' . $row['nombre'] . '" >' . $row['nombre'] . '</li>';
                        //echo '<li  onClick="fill(this);" id="'.$result[0].'&'.$result[1].'">'.$result[1].'</li>';
                    }
                } else {
                    echo 'ERROR: There was a problem with the query2.';
                }
            } else {
                // Dont do anything.
            } // There is a queryString.
        } else {
            echo 'There should be no direct access to this script!';
        }

        //  echo $res."\n";

    } else if ($_REQUEST['opcion'] == 37) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql = "delete from hc_formula_medica where id_hc_formula_medica=" . $_REQUEST['valor'];

        $conexion->EjecutarQuery($sql);

        //$object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 66) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        $sql = "delete from hc_remision where id_hc_remision=" . $_REQUEST['valor2'];

        $conexion->EjecutarQuery($sql);

        //$object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 85) {

        $object_return       = new stdClass();
        $object_return->bool = true;

        // $sql = "delete from hc_ayuda_diagnostica where id_hc_ayuda_diagnostica=" . $_REQUEST['valor1'];
        $sql = "delete from h_ay_diagnostica where id_ay_diagnostica=" . $_REQUEST['valor1'];

        $conexion->EjecutarQuery($sql);

        //$object_return->resultado=1;
        echo json_encode($object_return);

    } else if ($_REQUEST['opcion'] == 20) {
        //$object_return = new stdClass();
        //$object_return->bool = true;

        $sql2    = "Select * from cups_remision where nombre_remision = '" . $_REQUEST['nombre_remision'] . "' ";
        $result2 = $conexion->EjecutarQuery($sql2);
        $row2    = mysql_fetch_array($result2);

        $res = $row2['cod_remision'] . " " . $row2['nombre_remision'];

        echo $res . "\n";

    } else if ($_REQUEST['opcion'] == 28) {

        //$object_return = new stdClass();
        //$object_return->bool = true;

        $sql3    = "Select * from ayuda_diagnostica where id_cups_remision = '" . $_REQUEST['id_cups'] . "' ";
        $result3 = $conexion->EjecutarQuery($sql3);
        $row3    = mysql_fetch_array($result3);

        $res = $row3['id_cups_remisiony'] . " " . $row3['nombre_diagnostica'];

        echo $res . "\n";
    } else if ($_REQUEST['opcion'] == 21) {

        $object_return       = new stdClass();
        $object_return->bool = false;

        $where = " where 1=1 ";

        $cedula = trim($_REQUEST['cedula_usuario']);

        if ($cedula != '') {

            $sql_pas    = "Select * from paciente where identificacion = '" . $cedula . "' ";
            $result_pas = $conexion->EjecutarQuery($sql_pas);
            $row_pas    = mysql_fetch_array($result_pas);
            $pas        = $row_pas['historia'];

            $where .= " and id_paciente=$pas ";
        }

        $from = trim($_REQUEST['from']);
        $to   = trim($_REQUEST['to']);

        if ($from != '' && $to != '') {
            $where .= " and  date(fecha) between '$from' and '$to' ";
            $per = "Desde " . $from . " hasta " . $to;
        } else if ($from != '' && $to == '') {
            $where .= " and  date(fecha)='$from' ";
            $per = "del dia " . $from;
        } else if ($from == '' && $to != '') {
            $where .= " and  date(fecha)='$to' ";
            $per = "del dia" . $to;
        } else if ($from == '' && $to == '') {
            $paso_con = 1;
        }

        $dat = "<div id='imprimir_informe'><div id='content_result' align='center'>
        <table  border='0' cellpadding='0' cellspacing='0' class='data'>

                        <th valign='center'>FECHA</th>
                        <th valign='center'>FECHA DESEADA</th>
                        <th valign='center'>IDENTIFICACIÓN</th>
                        <th valign='center'>PACIENTE</th>
                  <th valign='center'>ENTIDAD</th>



                      </tr></tbody>";

        $datos = "";
//traer los datdos de la factura
        // $sql2 = "Select * from factura where MONTH(fecha)='mysql_datetime'";
        $sql2    = "Select * from cita $where order by fecha desc";
        $result2 = $conexion->EjecutarQuery($sql2);

        $total_f = 0;

        while ($row2 = mysql_fetch_array($result2)) {

            $fecha     = $row2['fecha'];
            $fecha_des = $row2['fecha_des'];
            $id_pacie  = $row2['id_paciente'];

            //traer datos de eps

            //traer datos de paciente
            $sql_pac    = "Select * from paciente where historia= '" . $id_pacie . "' ";
            $result_pac = $conexion->EjecutarQuery($sql_pac);
            $row_pac    = mysql_fetch_array($result_pac);
            $fecha_n    = $row_pac['fecha_n'];
            $edad       = Utils::edad($fecha_n);
            $tipo_id    = $row_pac['tipo_id'];
            $nombre1    = $row_pac['nombre1'];
            $nombre2    = $row_pac['nombre2'];
            $apellido1  = $row_pac['apellido1'];
            $apellido2  = $row_pac['apellido2'];
            $id_eps     = $row_pac['id_eps'];
            //traer tipo id

            $identificacion = $row_pac['identificacion'];
            //traer datos de cita
            $sql_eps    = "Select * from eps where id_eps = '" . $id_eps . "' ";
            $result_eps = $conexion->EjecutarQuery($sql_eps);
            $row_eps    = mysql_fetch_array($result_eps);
            $nit        = $row_eps['nit'];
            $nombre_eps = $row_eps['nombre'];
            $id_regimen = $row_eps['id_regimen'];

            $tabla .= '<tr>

                                    <td>' . $fecha . '</td>
                                    <td>' . $fecha_des . '</td>
                                         <td>' . $identificacion . '</td>
                                    <td>' . $nombre1 . " " . $nombre2 . " " . $apellido1 . " " . $apellido2 . '</td>
                                    <td>' . $nombre_eps . '</td>

                                </tr>';

        }

        echo "<br><br><center><h2>INFORME CITAS " . $per . " " . $mg . "  </h2></center><br><br>";

        $ret = $dat . $tabla . "</table><br><br></div></div>";

        if ($object_return->bool) {
            echo $ret;
        } else {
            echo '';
        }
    }
}
