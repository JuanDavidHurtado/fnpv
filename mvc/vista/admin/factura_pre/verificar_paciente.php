<?php
$bool_paciente = false;
$msg = '';
date_default_timezone_set('America/Bogota');

if (isset($_REQUEST['identificacion'])) {
    $sql = "Select * from paciente where identificacion = " . $_REQUEST['identificacion'];
    $result = $conexion->EjecutarQuery($sql);
    $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Paciente no encontrado!.</div>
            </p>';
    $id_paciente = $_REQUEST['identificacion'];
    while ($row = mysql_fetch_array($result)) {
        $msg = '';
        $bool_paciente = true;
        break;
    }
}

if ($bool_paciente) {

    if($_REQUEST['origen']==1){
        $hora = date("Y-m-d H:i:s");
        $hora_x = date("Y-m-d");

                // traigo la ultima factura registrada que este en estado cero y sea de laboratorio con el mismoo paciente
               // para que no me inserte una nueva cada que se actualice la pagina
                $max_factura1 = "Select max(id_factura) as id_factura from factura where id_usuario='{$_REQUEST['identificacion']}' and origen_factura=1 and fecha_de_factura='{$hora_x}' and estado=0 ";
                $result_max1 = $conexion->EjecutarQuery($max_factura1);
                $row1 = mysql_fetch_array($result_max1);
                $id_factura1=$row1['id_factura'];
					
                if($id_factura1==0){
                // crear la factura para el laboratorio
                    $sql_factura = "INSERT INTO factura (id_usuario,origen_factura,fecha,fecha_de_factura,estado)
                                          VALUES ('{$_REQUEST['identificacion']}','1','{$hora}','{$hora_x}',0)";
                    $conexion->EjecutarInsert($sql_factura);
                }
				/*  $sql_factura = "INSERT INTO factura ( id_usuario,origen_factura,fecha,estado)
                                          VALUES ('{$_REQUEST['identificacion']}','1','{$hora}',0)";
                    $conexion->EjecutarInsert($sql_factura);*/
               

    }


    ?>


    <div id="content_welcome"  >
        <br>

        <div class="welcome" align="center">
            DATOS PACIENTE <?php echo @$msg; ?>
        </div>


        <div id="text_welcome" align="center">
            <br /> 
            <?php
            include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/datos_paciente.php');

            if (@$_REQUEST['origen'] == 1) {
                //viene de laboratorio
                include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/form_facturar_lab.php');
               
            } else if (@$_REQUEST['origen'] == 0) {
                //viene de listar facturas            
          
                  
                    include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/form_facturar.php');

            } else {
                //viene de buscar facturas por paciente
                include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/listar_facturas.php');
            }
            //?id_paciente="'.$id_paciente.'"
            ?>
        </div>



    </div>

    <?php
} else {

    include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/buscar_usuario_factura.php');
}
?>