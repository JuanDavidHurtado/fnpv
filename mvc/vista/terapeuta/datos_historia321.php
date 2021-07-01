<?php
//echo $_REQUEST['id_dependencia'].'| '.$_REQUEST['id_proceso'].'<br>';
if (isset($_REQUEST['guardar_evolucion']) && isset($_REQUEST['id_cita']) && @$_REQUEST['id_formulario'] != 0) {

    if ($_REQUEST['id_evolucion'] == 'new') {

       $sql = "INSERT INTO evolucion (
                                `id_evolucion`,
                                `id_proceso`,
                                `id_usuario`,
                                `historia`,
                                `id_vinicial`,
                                `id_cita`,
                                `evolucion`,
                                `flujo`,
                                `id_formulario`,
                                `id_revaloracion`,
                                `nota_extra`
                                ) VALUES (
                                NULL,
                                '".$_REQUEST['id_proceso']."' ,
                                '".$_REQUEST['id_usuario']."' ,
                                '".$_REQUEST['historia']."' ,
                                '".$_REQUEST['id_vinicial']."' ,
                                '".$_REQUEST['id_cita']."' ,
                                '".$_REQUEST['evolucion']."' ,
                                '".$_REQUEST['flujo']."' ,
                                '".$_REQUEST['id_formulario']."' ,
                                '".$_REQUEST['id_revaloracion']."' ,
                                '".$_REQUEST['nota_extra']."'
                                ) ";
    } else if ($_REQUEST['id_evolucion'] != '') {

        $sql = "UPDATE evolucion set `evolucion` = '" . $_REQUEST['evolucion'] . "', `nota_extra`='" . $_REQUEST['nota_extra'] . "'
        WHERE `id_evolucion` = '" . $_REQUEST['id_evolucion'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
?>
<script>

    function hideShow(id) {
        if (parseInt(id) === 4) {
            $("#tabs-1 button").hide();
            $("#tabs-1 .egreso").show();
        } else if (parseInt(id) === 1) {
            $("#tabs-1 .egreso").hide();
            $("#tabs-1 button").show();
        }
    }

    function saveTab(id) {
        localStorage.setItem('tab', id);
        hideShow(parseInt(id));
    }

    $(function() {

        $("#tabs").tabs({
            active: 2
        });
        var ftab = localStorage.getItem('tab');
        if (parseInt(ftab) > 0) {
            $("#tabs").tabs({selected: parseInt(ftab)});
        }
        hideShow(parseInt(ftab));
    });

</script>
<style>

    #content_welcome{
        height: 600px;
        height: auto;
    }

    .content_tab{
        min-height: 600px;
        height: auto;

    }

    .content_tab_i{
        min-height: 600px;
        height: auto;
    }

    .content_itinerarios {
        overflow:auto;
        width: 100%;
        min-height: 600px;
        height: auto;
        position: relative;
    }

    .arrow-c {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-c.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
    }

    .arrow-o {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-o.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
        display: none;
    }

    .egreso {
        <?php
        if (isset($_REQUEST['id_cita'])) {
            echo 'display: none;';
        }
        ?>
    }

</style> 
<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <?php

  
    echo "<h3>" . @$_REQUEST['proceso'] . @$_REQUEST['historia'] . " : " . @$_REQUEST['nombre1'] . " " . @$_REQUEST['nombre2'] . " " . @$_REQUEST['apellido1'] . " " . @$_REQUEST['apellido2'] . "</h3>";

//form para modificar informacion del paciente
    @$_REQUEST['identificacion'] = @$_REQUEST['identificacion'] != '' ? @$_REQUEST['identificacion'] : $row['identificacion_p'];
    ?>

    <div id="tabs">
        <ul class="no_print">
            <li><a onclick="saveTab(0)" href="#tabs-0">Informacion general</a></li>
            <li><a onclick="saveTab(1)" href="#tabs-1">Valoracion inicial</a></li>
            <li><a onclick="saveTab(2)" href="#tabs-2">Evoluciones</a></li>
            <li><a onclick="saveTab(3)" href="#tabs-3">Archivos notas</a></li>
            <li><a onclick="saveTab(4)" href="#tabs-4">Aspiración de secreciones</a></li>
            <li><a onclick="saveTab(5)" href="#tabs-5">Registro de Glucometría</a></li>
            <li><a onclick="saveTab(6)" href="#tabs-6">Registro de Cateterismo Vesical</a></li>
            <li><a onclick="saveTab(7)" href="#tabs-7">Registro de Oximetría</a></li>
            <li><a onclick="saveTab(8)" href="#tabs-8">Seguimiento de Heridas</a></li>
            <li><a onclick="saveTab(9)" href="#tabs-9">Control de Líquidos</a></li>
            <li><a onclick="saveTab(10)" href="#tabs-10">Formula Medica</a></li>
            <li><a onclick="saveTab(11)" href="#tabs-11">Signos Vitales</a></li>
            <li><a onclick="saveTab(12)" href="#tabs-12">Notas de Enfermeria</a></li>
            <li><a onclick="saveTab(13)" href="#tabs-13">Barthel</a></li>
           
             <li><a onclick="saveTab(14)" href="#tabs-14">Escala Actividad Karnofsky</a></li>
              <li><a onclick="saveTab(15)" href="#tabs-15">Aplicación de medicamentos</a></li>

                <?php
                    if ($_REQUEST['id_proceso'] == 51){
                 ?>
                    <li><a onclick="saveTab(16)" href="#tabs-16">Procedimientos</a></li>
                 <?PHP
                    }
                 ?>   


            <?php
            if (isset($_REQUEST['id_cita'])) {
                ?>
                <li><a onclick="saveTab(4)" href="#tabs-1">Valoracion de egreso</a></li>
                <?php
            }
            ?>


        </ul>
        <div id="tabs-2">
            <?php
            /* Formulario para evolucion******************************************** */
            if ($_REQUEST['id_dependencia'] == 2) {
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/include_evolucion_neuro.php');
            } else {
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/include_evolucion.php');
            }/* */
            ?>
        </div>
        <div id="tabs-0">
            <?php
            /* Formulario paciente ******************************************** */
            include ($GLOBALS['raiz'] . 'mvc/vista/terapeuta/form_paciente.php'); /* */


            ?>
        </div>
        <div id="tabs-1">
            <?php
            $_REQUEST['id_revaloracion'] = 0;

            /* Valoracion inicial ******************************************** */

             //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/escala/escala_abreviada.php');
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/citologia_1.php');
           // include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pos/pos.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia_in.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');

 include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/crecimiento_desarrollo.php');
//         include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/historia_print.php');
            //echo "Aqui <--- agregar nuevos";
          
           //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php');
             //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/escala/escala_abreviada.php');
            
            if ($_REQUEST['id_proceso'] == 34){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/crecimiento_desarrollo.php');
            }
            if ($_REQUEST['id_proceso'] == 36){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/desarrollo_joven.php');
            }
            if ($_REQUEST['id_proceso'] == 37){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/deteccion_45.php');
            }
            if ($_REQUEST['id_proceso'] == 54){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/agudeza_visual.php');
            }
            if ($_REQUEST['id_proceso'] == 39){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/citologia_1.php');
            }
            if ($_REQUEST['id_proceso'] == 40){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/planificacion_familiar.php');
            }
            
            //Servicios
            if ($_REQUEST['id_proceso'] == 41){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/odontologia.php');
            }if ($_REQUEST['id_proceso'] == 42){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/rejilla.php');
            }if ($_REQUEST['id_proceso'] == 43){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/pir.php');
            }if ($_REQUEST['id_proceso'] == 44){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/cac.php');
            }

        
            /*echo "CAC";
             *
             *     if ($_REQUEST['id_proceso'] == 34){
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php');
            }
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/cac.php');
            
            echo "HC";
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc.php');
            
            echo "PIR";
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/pir.php');

            echo "ODONTOLOGIA";
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/odontologia.php');

            echo "REJILLA";
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/rejilla.php');*/

            ?>
        </div>
        <div id="tabs-3" class="no_print">
            <?php
            /* Valoracion datos generales ******************************************** */
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/sesiong.php'); /* */
            ?>
        </div>


        <div id="tabs-4" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/asp_secreciones.php'); /* */
            ?>
        </div>

         <div id="tabs-5" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/glucometria.php'); /* */
            ?>
        </div>

         <div id="tabs-6" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/vesical.php'); /* */
            ?>
        </div>

         <div id="tabs-7" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/oximetria.php'); /* */
            ?>
        </div>

         <div id="tabs-8" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/heridas.php'); /* */
            ?>
        </div>


         <div id="tabs-9" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/liquidos.php'); /* */
            ?>
        </div>


         <div id="tabs-10" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/medicamentos.php'); /* */
            ?>
        </div>

         <div id="tabs-11" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/signos_v.php'); /* */
            ?>
        </div>

          <div id="tabs-12" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/notas_en.php'); /* */
            ?>
        </div>

          <div id="tabs-13" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/fr_barthel_2.php'); /* */
            ?>
        </div>
        
          <div id="tabs-14" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/fr_karnofsky.php'); /* */
            ?>
        </div>

        <div id="tabs-15" class="no_print">
            <?php
            /* Valoracion datos secreciones ******************************************** */
            //include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/medicamentos_aplicacion.php'); /* */
            ?>
        </div>

         
            
             

            
              <?php
                    if ($_REQUEST['id_proceso'] == 51){
                 ?>
                    <div id="tabs-16" class="no_print">
              <?php
                    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php');
               ?>
                     </div>
              <?php
                    }

               ?>
      





    </div>

    <div id="firma_usuario">

        <?php
        $id_usuario = $_REQUEST['id_usuario_x'];
        $sql = "Select firma from usuario where id_usuario='{$id_usuario}'";
        $resultf = $conexion->EjecutarQuery($sql);
        $rowf = mysql_fetch_array($resultf);
        $firma = 'avatar_anonimo.png';
        if (@$rowf['firma'] != '') {
            $firma = $rowf['firma'];
        }
        ?>
        <img id="file_firma" src="http://localhost/fisiosalud/mvc/files/users/firmas/<?php echo $firma; ?>" width="320" height="100">

    </div>

    <br>
    <br>
    <a href='#' onclick='imprSelec("imprimir_historia", true)' class="no_print">Imprimir</a>
</div>