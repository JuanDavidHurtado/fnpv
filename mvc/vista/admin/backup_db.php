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

        require_once ($raiz_l."mvc/control/BackupDatabase.php");


        $backupDatabase = new Backup_Database(Utils::$server, Utils::$user_name, Utils::$user_name_password, Utils::$database);
        $backupDatabase->setLog(true);
        $file_backup = $backupDatabase->backupTables('*', $raiz_l.'mvc/files/backup/');
        $status = $file_backup ? 'OK' : 'KO';
        echo "<br /><br />Backup result: ".$status;

        $tipo = 'SQL';

        $sql = "INSERT INTO `backup` (`id_backup`, `file`, `fecha`, `tipo`) VALUES (NULL, '$file_backup', '".Date("Y-m-d H:i:s")."', '$tipo');";
        $conexion->EjecutarInsert($sql);
        //exec('C:\xampp\apache_start.bat');
?>
