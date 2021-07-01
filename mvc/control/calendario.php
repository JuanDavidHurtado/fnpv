<?php

/**
 * @author Williams Mendez
 * @example	$calendario = new Calendario();
  $eventos = array(5=>array(
  array(
  'evento'=>'Feria',
  'descripcion'=>"Descripcion de la Feria"
  ),
  array(
  'evento'=>'Examen',
  'descripcion'=>'Descripcion de nuestro Examen'
  )
  ),
  12=>array(
  array(
  'evento'=>'Entrega de Reportes',
  'descripcion'=>'Se describe la entrega de reportes'
  )
  )
  );
  $this->view->calendario = $calendario->getCalendario($eventos);
 * 
 *
 */
class Calendario {

    private $date;
    private $year;
    private $month;
    private $conexion;
    private $id_proceso;
    private $id_usuario;
    private $opcion;
    private $now;

    /**
     * Metodo que calcula el calendario para
     * un determinado mes de cualquier año.
     *
     * @param array	$eventos
     * @param string $date	 
     * @return string
     */
    public function __construct($con) {
        $this->now = Date('Y-m-d H:i:s');
        if ($con instanceof Conexion) {
            $this->conexion = $con;
        }
        $this->id_proceso = $_REQUEST['id_proceso'];
        $this->id_usuario = $_REQUEST['id_usuario'];
        $this->opcion = $_REQUEST['opcion'];
    }

    public function getCalendario($eventos, $date = null) {
        if (is_null($date)) {
            $this->date = date('Y-m-d');
            $fecha = split('-', date('Y-m-d'));
        } else {
            $this->date = $date;
            $fecha = split('-', $date);
        }
        $this->month = $fecha [1];
        $this->year = $fecha [0];

        $fila = 0;
        $filas = 6;
        if (!$this->esBisiesto($this->year)) {
            if ($this->month == 2) {
                $d = getdate(strtotime($this->year . '-2-1'));
                if ($d['wday'] == 0) {
                    $filas--;
                }
            }
        }

        $primerDiaMes = $this->getPrimerDia($this->year, $this->month);

        $css_c = "  
            <script>
            var date = '';
                function setStatus(obj){
                    //date = $(obj).data('date');
                    if($(obj).hasClass('seleccionado')){
                        $(obj).removeClass('seleccionado');
                    }else{
                        $(obj).addClass('seleccionado');
                    }
                    
                    //$('#fecha_').val(date);
                    //alert('Dia seleccionado, guarde el itinerario.');
                }
            </script>
            <style>
                .calendario{
                    border-collapse:collapse;
                    width:100%;
                }
                
                .calendario{
                    background-color:#fff;
                }
                
                .seleccionado{
                    background-color:rgb(148, 137, 255) !important;
                }
            </style>
        ";

        $HTML = "<table border='1' class='calendario'>
                        <tr><th colspan='7'><center>{$this->year} - {$this->month}</center></th></tr>
                            <tr>
						<th><b>Domingo</b></th>
						<th><b>Lunes</b></th>
						<th><b>Martes</b></th>
						<th><b>Miercoles</b></th>
						<th><b>Jueves</b></th>
						<th><b>Viernes</b></th>
						<th><b>Sabado</b></th>
					</tr>";
        $CantDias = $this->getDaysInMonth($this->month, $this->year);
        $DiaActual = 1;
        while ($fila < $filas) {
            $HTML .= '<tr>';
            for ($i = 0; $i < 7; $i++) {
                if (($fila == 0 && $i < $primerDiaMes) || ($DiaActual > $CantDias)) {
                    $HTML .= '<td></td>';
                } else {
                    if ($DiaActual == $fecha [2]) {
                        $HTML .= $this->setDia($DiaActual, isset($eventos [$DiaActual]) ? $eventos [$DiaActual] : null, true);
                        //$HTML .= '<td><span style="color:red;">'.$DiaActual.'</span></td>';
                    } else {
                        $HTML .= $this->setDia($DiaActual, isset($eventos [$DiaActual]) ? $eventos [$DiaActual] : null );
                        //$HTML .= '<td>'.$DiaActual.'</td>';
                    }
                    $DiaActual++;
                }
            }
            $HTML .= '</tr>';
            $fila++;
        }


        return ($css_c . $HTML . '</table>');
    }

    /**
     * Le da formato a un cada dia en el calendario,
     * tomando en cuenta si hay algun evente para 
     * el dia en cuestion
     *
     * @param Integer $dia
     * @param array $eventos
     * @param bool $esHoy
     * @return string
     */
    private function setDia($dia, $eventos, $esHoy = false) {
        $ev = '';
        if ($esHoy) {
            $estiloEventos = 'color:red; font-size:10px;';
            //$estiloDia = 'background:yellow; font-size:9px;';
            $estiloDia = 'font-size:10px;';
        } else {
            $estiloEventos = '';
            $estiloDia = 'background:rgb(233, 232, 243); font-size:10px;';
        }

        $itinerario_dia = $this->getItinerioDia($this->id_usuario, $this->id_proceso, "{$this->year}-{$this->month}-{$dia}");
        $click = $this->opcion != 4 ? "onclick='setStatus(this)'" : "";
        $html = "<td align='left' valign='top'   style='$estiloDia; width:30px; height:30px; font-weight:bold;' ><div style='cursor:pointer'><center data-date='{$this->year}-{$this->month}-{$dia}' $click >$dia</center></div>{$itinerario_dia}</td>";

        return $html;
    }

    public function getItinerioAgendaUser($fecha) {

        $bool_data = false;
        $itinerario_dia = '';
        $sql = "Select a.*, u.nombre, u.identificacion, p.nombre as proceso, s.nombre as sede, c.nombre as consultorio "
                . "from agenda as a "
                . "inner  join usuario as u "
                . "on a.id_usuario = u.id_usuario "
                . "inner join proceso as p "
                . "on a.id_proceso = p.id_proceso "
                . "inner join sede as s "
                . "on a.id_sede = s.id_sede "
                . "inner join consultorio as c "
                . "on a.id_consultorio = c.id_consultorio "
                . "where a.fecha='{$fecha}' "
                . "and a.id_usuario='{$this->id_usuario}' ";

        //echo "<br>";


        $result = $this->conexion->EjecutarQuery($sql);

        $hora_i = 0;
        $minuto_i = 0;
        $hora_f = 0;
        $minuto_f = 0;
        $intervalo = 0;
        $id_proceso_agenda = 0;
        $rows = null;
        $fecha = '';

        while ($row = mysql_fetch_array($result)) {

            $this->id_usuario = $row['id_usuario'];
            $hora_i = $row['hora_inicio'];
            $hora_f = $row['hora_fin'];
            $fecha = $row['fecha'];
            $intervalo = $row['intervalo'];
            $id_proceso_agenda = $row['id_proceso'];
            $rows[] = $row;

            $bool_data = true;
            //break;
        }

        $table = '';
        foreach ($rows as $rowx) {



            $table .= "<table border='1' class='data' style='border-collapse:collapse; font-size:10px;width:100%; background-color:#fff'>";

            $table .= "<tr ><td colspan='2'>AGENDA DE : {$fecha}</td></tr>";

            $table .= "<tr ><td colspan='3' >PROFESIONAL: {$rowx['identificacion']} - {$rowx['nombre']}</td>";
            $table .= "<td colspan='2'>PROCESO: {$rowx['proceso']}</td>";
            $table .= "<td colspan=''>SEDE: {$rowx['sede']}</td>";
            $table .= "<td colspan=''>CONSULTORIO:<br> {$rowx['consultorio']}</td></tr>";

            $table .= "<tr>"
                    . "<th width='60'>HORA</th>"
                    . "<th>PACIENTE</th>"
                    . "<th>EPS</th>"
                    . "<th>CUPS</th>"
                    . "<th>TIPO</th>"
                    . "<th>AGENDO</th>"
                    . "<th>ESTADO</th>"
                    . "<th>FACTURADO</th>"
                    . "</tr>";




            $hora_i = $this->addMinutes($rowx['hora_inicio'], 0);
            while (strtotime($hora_i) < strtotime($rowx['hora_fin'])) {
                $hora_ii = $this->addMinutes($hora_i, $intervalo);
                $statusHorario = $this->getStatusHorario($rowx['fecha'], $hora_i, $rowx['hora_fin'], $rowx['id_proceso']);

                $sql = "Select u.*,c.tipo_cita  from cita as c "
                        . "inner join usuario as u "
                        . "on u.id_usuario = c.id_usuario_agenda "
                        . "where c.id_cita= '{$statusHorario['id_cita']}'";

                $resultu = $this->conexion->EjecutarQuery($sql);
                $rowu = mysql_fetch_array($resultu);

                $sql = "Select p.*, e.nombre as eps from eps as e  "
                        . "inner join paciente as p "
                        . "on p.id_eps = e.id_eps "
                        . "where p.historia='{$statusHorario['id_paciente']}'";

                $resulte = $this->conexion->EjecutarQuery($sql);
                $rowe = mysql_fetch_array($resulte);




                $cups = '';
                $sql = "Select cu.* from cita as ci "
                        . 'inner join cups_cita as cc '
                        . 'on ci.id_cita = cc.id_cita '
                        . 'inner join cups as cu '
                        . 'on cc.id_cup = cu.cups '
                        . "where ci.id_cita = '{$statusHorario['id_cita']}' ";
                $resultcup = $this->conexion->EjecutarQuery($sql);

                while ($row_cup = mysql_fetch_array($resultcup)) {
                    $cups .= '-' . $row_cup['cups'] . ':' . $row_cup['nombre'] . '<br>';
                }
                       $sql_eps = "Select * from factura where id_cita = '".$statusHorario['id_cita']."' ";
                        $result_eps = $this->conexion->EjecutarQuery($sql_eps);
                        $row_eps = mysql_fetch_array($result_eps);

                        $esta_f = $row_eps['estado'];
						
                        if($esta_f==1){
                            $facturado="SI"."--".$esta_f;
                        }else {
                            $facturado="NO"."--".$esta_f;;
                        }
                        


                $table .= "<tr {$statusHorario['click']} data-time-inicio='{$rowx['fecha']} {$hora_i}' data-time-fin='{$rowx['fecha']} {$hora_ii}' {$statusHorario['data']} class='{$statusHorario['class']}'>"
                        . "<td>{$hora_i}/{$hora_ii}</td>"
                        . "<td>{$rowe['identificacion']} - {$statusHorario['label']}</td>"
                        . "<td>{$rowe['eps']}</td>"
                        . "<td>{$cups}</td>"
                        . "<td>{$rowu['tipo_cita']}</td>"
                        . "<td>{$rowu['nombre']} {$rowu['apellido']}</td>"
                        . "<td>{$statusHorario['estado']}</td>"
                         . "<td>".$facturado."</td>"
                        . "</tr>";
                ;
                $hora_i = $hora_ii;
            }

            $table .= "</table><br>";
        }

        if ($bool_data) {
            $itinerario_dia = $table;
        } else {
            $itinerario_dia = 'Not found data!';
        }

        return $itinerario_dia;
    }

    public function getItinerioAgenda($idAgenda) {


        $bool_data = false;
        $itinerario_dia = '';
        $sql = "Select a.*, u.nombre, u.identificacion, p.nombre as proceso, s.nombre as sede, c.nombre as consultorio "
                . "from agenda as a "
                . "inner  join usuario as u "
                . "on a.id_usuario = u.id_usuario "
                . "inner join proceso as p "
                . "on a.id_proceso = p.id_proceso "
                . "inner join sede as s "
                . "on a.id_sede = s.id_sede "
                . "inner join consultorio as c "
                . "on a.id_consultorio = c.id_consultorio "
                . "where a.id='{$idAgenda}' ";

        //echo "<br>";


        $result = $this->conexion->EjecutarQuery($sql);

        $hora_i = 0;
        $minuto_i = 0;
        $hora_f = 0;
        $minuto_f = 0;
        $intervalo = 0;
        $id_proceso_agenda = 0;
        $rowx = null;
        $fecha = '';
        $idAgenda = 0;

        while ($row = mysql_fetch_array($result)) {

            $this->id_usuario = $row['id_usuario'];
            $hora_i = $row['hora_inicio'];
            $hora_f = $row['hora_fin'];
            $fecha = $row['fecha'];
            $intervalo = $row['intervalo'];
            $id_proceso_agenda = $row['id_proceso'];
            $rowx = $row;

            $bool_data = true;
            break;
        }



        $table = "<table border='1' style='border-collapse:collapse; font-size:10px;width:100%; background-color:#fff'>";

        $table .= "<tr ><td colspan='2'>AGENDA DE : {$fecha}</td></tr>";

        $table .= "<tr ><td colspan='3' >PROFESIONAL: {$rowx['identificacion']} - {$rowx['nombre']}</td>";
        $table .= "<td colspan='2'>PROCESO: {$rowx['proceso']}</td>";
        $table .= "<td colspan=''>SEDE: {$rowx['sede']}</td>";
        $table .= "<td colspan=''>CONSULTORIO:<br> {$rowx['consultorio']}</td></tr>";

        $table .= "<tr>"
                . "<th width='60'>HORA</th>"
                . "<th>PACIENTE</th>"
                 . "<th>TELEFONO</th>"
                . "<th>EPS</th>"
                . "<th>CUPS</th>"
                . "<th>TIPO</th>"
                . "<th>AGENDO</th>"
                . "<th>ESTADO</th>"
                . "<th>CANCELACION</th>"
                . "</tr>";




        $hora_i = $this->addMinutes($hora_i, 0);
        while (strtotime($hora_i) < strtotime($hora_f)) {
            $hora_ii = $this->addMinutes($hora_i, $intervalo);
            $statusHorario = $this->getStatusHorario($fecha, $hora_i, $hora_f, $id_proceso_agenda, $rowx['id']);

            $sql = "Select u.*,c.tipo_cita,c.motivo  from cita as c "
                    . "inner join usuario as u "
                    . "on u.id_usuario = c.id_usuario_agenda "
                    . "where c.id_cita= '{$statusHorario['id_cita']}'";

            $resultu = $this->conexion->EjecutarQuery($sql);
            $rowu = mysql_fetch_array($resultu);

            $sql = "Select p.*, e.nombre as eps from eps as e  "
                    . "inner join paciente as p "
                    . "on p.id_eps = e.id_eps "
                    . "where p.historia='{$statusHorario['id_paciente']}'";

            $resulte = $this->conexion->EjecutarQuery($sql);
            $rowe = mysql_fetch_array($resulte);

            $cups = '';
            $sql = "Select cu.* from cita as ci "
                    . 'inner join cups_cita as cc '
                    . 'on ci.id_cita = cc.id_cita '
                    . 'inner join cups as cu '
                    . 'on cc.id_cup = cu.cups '
                    . "where ci.id_cita = '{$statusHorario['id_cita']}' ";
            $resultcup = $this->conexion->EjecutarQuery($sql);

            while ($row_cup = mysql_fetch_array($resultcup)) {
                $cups .= '-' . $row_cup['cups'] . ':' . $row_cup['nombre'] . '<br>';
            }


            $table .= "<tr {$statusHorario['click']} data-time-inicio='{$fecha} {$hora_i}' data-time-fin='{$fecha} {$hora_ii}' {$statusHorario['data']} class='{$statusHorario['class']}'>"
                    . "<td>{$hora_i}/{$hora_ii}</td>"
                    . "<td>{$rowe['identificacion']} - {$statusHorario['label']}</td>"
                    . "<td>{$rowe['telefono']}</td>"
                      . "<td>{$rowe['eps']}</td>"
                    
                    . "<td>{$cups}</td>"
                    . "<td>{$rowu['tipo_cita']}</td>"
                    . "<td>{$rowu['nombre']} {$rowu['apellido']}</td>"
                    . "<td>{$statusHorario['estado']}</td>"
                    . "<td>{$rowu['motivo']}</td>"
                    . "</tr>";
            ;
            $hora_i = $hora_ii;
        }

        $table .= "</table>";

        if ($bool_data) {
            $itinerario_dia = $table;
        } else {
            $itinerario_dia = 'Not found data!';
        }

        return $itinerario_dia;
    }

    public function getItinerioDia($id_usuario, $id_proceso, $fecha) {

        $where_usuario = '';
        if ($id_usuario != '') {
            $where_usuario = "a.id_usuario='{$id_usuario}'";
        }

        $where_proceso = '';
        if ($id_proceso != '') {
            $where_proceso = "a.id_proceso = '{$id_proceso}'";
        }

        $where = '';
        if ($where_usuario != '' && $where_proceso == '') {
            $where = $where_usuario;
        } else if ($where_usuario == '' && $where_proceso != '') {
            $where = $where_proceso;
        } else {
            $where = "({$where_usuario} and {$where_proceso})";
        }


        $bool_data = false;
        $itinerario_dia = '';
        $sql = "Select a.*, u.nombre, u.identificacion, p.nombre as proceso, s.nombre as sede, c.nombre as consultorio "
                . "from agenda as a "
                . "inner  join usuario as u "
                . "on a.id_usuario = u.id_usuario "
                . "inner join proceso as p "
                . "on a.id_proceso = p.id_proceso "
                . "inner join sede as s "
                . "on a.id_sede = s.id_sede "
                . "inner join consultorio as c "
                . "on a.id_consultorio = c.id_consultorio "
                . "where {$where} and "
                . "a.fecha = '{$fecha}' "
                . "order by a.hora_inicio asc ";

        //echo $sql . "<br>";


        $result = $this->conexion->EjecutarQuery($sql);

        $hora_i = 0;
        $minuto_i = 0;
        $hora_f = 0;
        $minuto_f = 0;
        $intervalo = 0;
        $id_proceso_agenda = 0;
        $rowx = null;


        while ($row = mysql_fetch_array($result)) {

            $a_hora_i[] = $row['hora_inicio'];
            $a_hora_f[] = $row['hora_fin'];
            $a_intervalo[] = $row['intervalo'];
            $a_id_proceso_agenda[] = $row['id_proceso'];
            $a_rowx[] = $row;

            $bool_data = true;
        }

        $table = "";
        foreach ($a_rowx as $key => $rowx) {
            $idAgenda = $rowx['id'];
            $hora_i = $rowx['hora_inicio'];
            $hora_f = $rowx['hora_fin'];
            $fecha_a = $rowx['fecha'];
            $intervalo = $rowx['intervalo'];
            $id_proceso_agenda = $rowx['id_proceso'];

            $table .= "<table id='agenda{$rowx['id']}' border='1' style='border-collapse:collapse; font-size:10px;width:100%; background-color:#fff'>";

            $table .= "<tr ><th colspan='2'>{$rowx['identificacion']} - {$rowx['nombre']}</th></tr>";
            $table .= "<tr ><th colspan='2'>{$rowx['proceso']}</th></tr>";
            $table .= "<tr ><th colspan='2'>{$rowx['sede']}</th></tr>";
            $table .= "<tr ><th colspan='2'>{$rowx['consultorio']}</th></tr>";

            $sql = "Select count(*) as cantidad from cita where id_agenda='{$idAgenda}'";
            $result = $this->conexion->EjecutarQuery($sql);
            $rowcant = mysql_fetch_array($result);
            $cantidad = $rowcant['cantidad'];

            //echo $cantidad.' <= cantidad';
            //Opcion para borrar agenda
            $borrar = $this->opcion != 4 && ((Utils::compareDate("{$fecha_a} {$hora_f}", $this->now) > 0) || ($cantidad == 0)) ? "| <button class='button2' onclick='borrarAageda({$rowx['id']})' >BORRAR</button>" : "";

            $table .= "<tr ><th colspan='2'><button class='button2' onclick='detalleAgenda({$rowx['id']})' >DETALLE</button> {$borrar}</th></tr>";


            $table .= "<tr>"
                    . "<th width='60'>Hora</th>"
                    . "<th>Estado</th>"
                    . "</tr>";




            $hora_i = $this->addMinutes($hora_i, 0);
            while (strtotime($hora_i) < strtotime($hora_f)) {
                $hora_ii = $this->addMinutes($hora_i, $intervalo);
                $statusHorario = $this->getStatusHorario($fecha, $hora_i, $hora_ii, $id_proceso_agenda, $rowx['id']);

                $table .= "<tr {$statusHorario['click']} data-time-inicio='{$fecha} {$hora_i}' data-time-fin='{$fecha} {$hora_ii}' {$statusHorario['data']} class='{$statusHorario['class']}'>"
                        . "<td>{$hora_i}/{$hora_ii}</td>"
                        . "<td>{$statusHorario['label']}</td>"
                        . "</tr>";

                $hora_i = $hora_ii;
            }

            $table .= "</table><br>";
        }



        if ($bool_data) {
            $itinerario_dia = $table;
        } else {
            $itinerario_dia = '';
        }

        return $itinerario_dia;
    }

    /**
     * Busca que dia de la semana cae el primer dia de un mes
     * de cualquier año en formato numerico, esto es, un numero
     * del 0-6, siendo Domingo el dia 0 y sabado el dia 6
     *
     * @param Integer $year
     * @param Integer $month
     * @return Integer
     */
    private function getPrimerDia($year, $month) {
        $d = getdate(strtotime($year . '-' . $month . '-1'));
        return $d ['wday'];
    }

    /**
     * Calcular los dias que tiene cualquier mes, cualquier año 
     */
    private function getDaysInMonth($month, $year) {
        $days = null;
        if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12)
            $days = 31;
        elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11)
            $days = 30;
        else if ($month == 2) {
            if ($this->esBisiesto($year))
                $days = 29;
            else
                $days = 28;
        }
        return $days;
    }

    /**
     * Calcula si el año es bisiesto
     *
     * @param Integer $Year
     * @return boolean
     */
    private function esBisiesto($Year) {
        if ((($Year % 4) == 0) && (($Year % 100) != 0) || (($Year % 400) == 0))
            return true;
        else
            return false;
    }

    public function getSelectHours($id) {
        $html = "<select id='hour_{$id}' name='hour_{$id}'>";
        for ($i = 0; $i <= 23; $i++) {
            $html .= "<option value='{$i}'>{$i}</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public function getSelectMinute($id) {
        $html = "<select id='minute_{$id}' name='minute_{$id}'>";
        for ($i = 0; $i <= 59; $i++) {
            $html .= "<option value='{$i}'>{$i}</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public function getSelectAddTime($id) {
        $html = "<select id='add_time{$id}' name='add_time{$id}'>";
        for ($i = 5; $i <= 60; $i = $i + 5) {
            $html .= "<option value='{$i}'>{$i} Minutos</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public function addMinutes($horaInicial, $minutoAnadir) {

        $segundos_horaInicial = strtotime($horaInicial);

        $segundos_minutoAnadir = $minutoAnadir * 60;

        $nuevaHora = date("H:i", $segundos_horaInicial + $segundos_minutoAnadir);

        return $nuevaHora;
    }

    public function getStatusHorario($fecha, $horai, $horaf, $id_proceso, $id_agenda) {
        $infoCita = null;

        $fechaInit = date($fecha . ' ' . $horai);
        $fechaEnd = date($fecha . ' ' . $horaf);
        $sql = "Select c.*, p.nombre1 as nombrep, p.apellido1 as apellidop,p.identificacion as identificacion from cita as c inner join
                paciente as p on c.id_paciente = p.historia where 
                c.id_proceso='{$id_proceso}' and 
                c.id_usuario='{$this->id_usuario}' and 
                c.fecha_hora_inicio = '{$fechaInit}' order by c.id_cita desc";

        $infoCita['sql'] = $sql;
        $click1 = "onclick='save_agenda(\"{$id_proceso}\",\"{$this->id_usuario}\",\"id_sesion\",\"{$fecha}\",\"hidden\",\"{$horai}\",\"{$horaf}\",\"{$id_agenda}\")'";
        $infoCita['click'] = $click1;

        $result = $this->conexion->EjecutarQuery($sql);

        /** / echo $sql;
          echo "<br><br>"; /* */
        while ($row = mysql_fetch_array($result)) {

            $infoCita['id_cita'] = $row['id_cita'];
            $infoCita['id_paciente'] = $row['id_paciente'];

            $infoCita['estado'] = $row['estado'];

            $infoCita['click'] = "onclick='verificar_cita(\"{$row['identificacion']}\",{$row['id_cita']})'";

            if ($row['estado'] == 'PROGRAMADO') {

                if ($this->opcion != 6) {
                    $infoCita['click'] = "onclick='cancel(\"{$row['id_cita']}\",\"{$id_proceso}\",\"{$this->id_usuario}\")'";
                }

                $infoCita['class'] = $row['estado'];
                $infoCita['label'] = $row['nombrep'] . ' ' . $row['apellidop'];
                $infoCita['data'] = "data-id='" . $row['id_cita'] . "'";
            } else if ($row['estado'] == 'CANCELADO') {
                //$infoCita['click'] = "onclick='changeMes(this,\"CANCELADO\")'";
                $infoCita['click'] = $click1;
                $infoCita['class'] = $row['estado'];
                $infoCita['label'] = $row['estado'];
                $infoCita['data'] = "data-id='" . $row['id_cita'] . "'";
            } else if ($row['estado'] == 'PROCESO') {
                if ($this->opcion != 6) {
                    $infoCita['click'] = "";
                }
                $infoCita['class'] = $row['estado'];
                $infoCita['label'] = $row['nombrep'] . ' ' . $row['apellidop'];
            } else if ($row['estado'] == 'FINALIZADO') {
                if ($this->opcion != 6) {
                    $infoCita['click'] = "";
                }
                $infoCita['class'] = $row['estado'];
                $infoCita['label'] = $row['nombrep'] . ' ' . $row['apellidop'];
            }
            $infoCita['class'] = ' ' . $infoCita['class'];
            $infoCita['label'] = ' <label>' . $infoCita['label'] . '</label>';

            //$infoCita['label'] = $sql;
            break;
        }

        //$infoCita['label'] = $sql;


        return $infoCita;
    }

}

?>