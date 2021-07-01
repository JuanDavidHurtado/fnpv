<style>
    #content_welcome {

        position: absolute;
        top:100px;
        font-size: 14px;
        padding: 8px;
        width: 313px;
        max-height: 455px;
        overflow-y: auto;
        left: 230px;
        
        background-color: rgba(0,0,0,0.5);
        border: 1px solid #000;

    }

   
</style>

<script>
    $(function(){
        
        $("#form_user").validate({  
            errorElement:"div",
            rules: {  
                identificacion:{required: true}
            },
            messages: {  
                identificacion:{required:'Ingrese identificacion a verificar ...'}                
            }  
        }); 
        
    })
</script>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <br>
    <div class="welcome">
        Generando Backup
    </div>
    <br>
    <div id="text_welcome">
        <?php

        if(!isset($GLOBALS['raiz'])){
            $raiz_l = "E:/xampp/htdocs/siempree/";
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

        ?>
    </div>
</div>