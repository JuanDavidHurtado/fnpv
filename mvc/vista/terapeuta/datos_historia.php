<?php

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
`id_formulario`
) VALUES (
NULL,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['evolucion'] . "' ,
'" . $_REQUEST['id_formulario'] . "'
) ";
    } else if ($_REQUEST['id_evolucion'] != '') {

        $sql = "UPDATE evolucion set
`evolucion` = '" . $_REQUEST['evolucion'] . "'  WHERE `id_evolucion` = '" . $_REQUEST['id_evolucion'] . "' ;";
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



  function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    $(function() {

        // calendarios de historia clinica

         $("#embarazo_24").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });

        $("#embarazo_25").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_26").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_27").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_28").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_29").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_30").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
          $("#embarazo_42").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });
         $("#embarazo_32").datepicker({
            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd"
        });

        // fin calendarios



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

<script type="text/javascript">

    function imprSelec3(nombre)
    {
        var ficha = document.getElementById(nombre);
        var ventimp = window.open(' ', 'ventana1', 'popimpr');

        var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
        content += '<title>http://190.146.87.72/fnpv </title>';
        content += ficha.innerHTML;

        ventimp.document.write(content);
        ventimp.document.close();
        ventimp.print();
       // history.back();

    }


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
        float: left;@$_REQUEST['identificacion'] = $row['identificacion'];
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

//echo @$_REQUEST['identificacion'].' aquiiiiiii';
 ?>


    <input type="hidden" id="id_cita" name="id_cita" value="<?php echo $_REQUEST['id_cita']; ?>" />


    <div id="tabs">
        <ul class="no_print">
            <li><a onclick="saveTab(0)" href="#tabs-0">Informacion general</a></li>
            <li><a onclick="saveTab(1)" href="#tabs-1">Valoracion inicial</a></li>
             <li><a onclick="saveTab(19)" href="#tabs-19">Diagnostico</a></li>

            <li><a onclick="saveTab(10)" href="#tabs-10">Formula Medica</a></li>

            <li><a onclick="saveTab(69)" href="#tabs-69">Remisión</a></li>

            <li><a onclick="saveTab(12)" href="#tabs-12">Ayudas Diagnosticas</a></li>

        <li><a onclick="saveTab(50)" href="#tabs-50">Imprimir</a></li>

     <li><a onclick="saveTab(2)" href="#tabs-2">Finalizar Cita</a></li>



            <?php
if (isset($_REQUEST['id_cita'])) {
    // <li><a onclick="saveTab(4)" href="#tabs-1">Valoracion de egreso</a></li> <li><a onclick="saveTab(17)" href="#tabs-17">hc_clap</a></li>
    $FF = 1;
    ?>

                <?php
}
?>


        </ul>

         <div id="tabs-19">
            <?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php';

?>
        </div>

         <div id="tabs-50">
            <?php

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/imprimir.php';

?>
        </div>

        <div id="tabs-2">
            <?php
/* Formulario para evolucion******************************************** */

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/finalizacion.php';
/*
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
include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/form_paciente.php'; /* */

?>
        </div>
        <div id="tabs-1">
            <?php
$_REQUEST['id_revaloracion'] = 0;

/* Valoracion inicial ******************************************** */

// include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pos/pos.php');
if ($_REQUEST['id_proceso'] == 70) {
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/hc_acudiente.php';
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia_in.php';
}

if ($_REQUEST['id_proceso'] == 63) {
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php';
}

if ($_REQUEST['id_proceso'] == 76) {
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_embarazo.php';
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_embarazo_2.php';
}
if ($_REQUEST['id_proceso'] == 74) {
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/planificacion_familiar.php';
    
}
if ($_REQUEST['id_proceso'] == 73) {
    include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/crecimiento_desarrollo.php';
    
}

/*

if ($_REQUEST['id_proceso'] == 61){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/crecimiento_desarrollo.php');
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/escala/aiepi.php');
//  include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/escala/escala_abreviada.php');

}
else if ($_REQUEST['id_proceso'] == 55){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/desarrollo_joven.php');
}
else if ($_REQUEST['id_proceso'] == 58){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/deteccion_45.php');
}
else if ($_REQUEST['id_proceso'] == 54){

include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/agudeza_visual.php');
}
else if ($_REQUEST['id_proceso'] == 59){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/citologia_1.php');
}
else if ($_REQUEST['id_proceso'] == 62){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_embarazo.php');
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_clap.php');
}
else if ($_REQUEST['id_proceso'] == 60){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/planificacion_familiar.php');
}

//Servicios
if ($_REQUEST['id_proceso'] == 42){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/rejilla.php');
}if ($_REQUEST['id_proceso'] == 43){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/pir.php');
}if ($_REQUEST['id_proceso'] == 44){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/cac.php');
}
 */

// para homecare

/*if ($_REQUEST['id_proceso'] == 23){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tocupacional.php');
}
if ($_REQUEST['id_proceso'] == 22){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tlenguaje.php');
}
if ($_REQUEST['id_proceso'] == 21){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tfisica.php');
}*/

/* if ($_REQUEST['id_proceso'] == 34){
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php');
}*/

/*echo "CAC";
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/cac.php');

echo "HC";
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc.php');

echo "PIR";
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/pir.php');

echo "ODONTOLOGIA";
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/odontologia.php');

echo "REJILLA";
include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/rejilla.php');
 *
<div id="tabs-3" class="no_print">
<php

include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/sesiong/sesiong.php');
>
</div>

 */

?>
        </div>

 <div id="tabs-10" class="no_print">
            <?php
/* Valoracion datos secreciones ******************************************** */
//include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');
include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/hc_formula_medica.php';
//  include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/medicamentos_aplicacion.php'); /*
//
//
?>
        </div>

   <div id="tabs-69" class="no_print">
            <?php
/* Valoracion datos secreciones ******************************************** */
//include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/remision/remision.php';
?>
        </div>


   <div id="tabs-12" class="no_print">
            <?php
/* Valoracion datos secreciones ******************************************** */
//include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/historia_entrada/historia/barthel.php');

include $GLOBALS['raiz'] . 'mvc/vista/terapeuta/formularios/hc_ayuda_diagnostica.php';
?>
        </div>


<!--
      <div id="tabs-11" class="no_print">
            <php

             include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/crecimiento_desarrollo.php');

            ?>
        </div>


         <div id="tabs-12" class="no_print">
            ?php

              include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/desarrollo_joven.php');

            ?>
        </div>

        <div id="tabs-13" class="no_print">
            <php

            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/deteccion_45.php');

            ?>
        </div>

        <div id="tabs-14" class="no_print">
            <php


                  include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/agudeza_visual.php');
            ?>
        </div>

        <div id="tabs-15" class="no_print">
            <php

                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/citologia_1.php');

            ?>
        </div>

        <div id="tabs-16" class="no_print">
            <php


            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_grafica.php');


            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_embarazo.php');

                    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/hc_embarazo_2.php');

            ?>
        </div>



        <div id="tabs-18" class="no_print">
            <php

                 include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/pyp/hc/planificacion_familiar.php');

            ?>
        </div>
-->
        <div id="tabs-19" class="no_print">
            <?php

?>
        </div>


    </div>

    <div id="firma_usuario">

        <?php
$id_usuario = $_REQUEST['id_usuario_x'];
$sql        = "Select firma from usuario where id_usuario='{$id_usuario}'";
$resultf    = $conexion->EjecutarQuery($sql);
$rowf       = mysql_fetch_array($resultf);
$firma      = 'avatar_anonimo.png';
if (@$rowf['firma'] != '') {
    $firma = $rowf['firma'];
}
?>
        <img id="file_firma" src="http://localhost/fisiosalud/mvc/files/users/firmas/<?php echo $firma; ?>" width="320" height="100">

    </div>

    <br>
    <br>
      <!--   <a href='#' onclick='imprSelec3("imprimir_historia_ocula", true)' class=''>Imprimir historia</a>
    <!--<a href='#' onclick='imprSelec("content_welcome", true)' class="no_print">Imprimir</a>-->

</div>
