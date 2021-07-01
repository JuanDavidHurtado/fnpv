<?php
        if(!isset($GLOBALS['raiz'])){
            $raiz_l = "C:/xampp/htdocs/fisiosalud/";
            require_once($raiz_l ."mvc/control/utils.php");
            require_once($raiz_l ."mvc/persistencia/conexion.php");
            $conexion = new Conexion();
        }
        else{

            $raiz_l = '../../';
        }

        $hours_interval = (Utils::$_horas_limite_cita * -1);
        $date_now = Date("Y-m-d H:i:s");
        $date_now = Utils::addIntervalDateHours($date_now,$hours_interval,"hour");
        
        
        echo $sql = "Update cita set estado='CANCELADO' where fecha_hora_fin < '$date_now' and estado='PROGRAMADO'";
        $conexion->EjecutarInsert($sql);
        //exec('C:\xampp\apache_start.bat');
?>
