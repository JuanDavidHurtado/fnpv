<?php

echo "<h3>HISTORIA CLINICA DE INGRESO</h3><br>";

$path = $GLOBALS['raiz'] . 'mvc/vista/terapeuta/';

@$action_form_vinicial = @$action_form_paciente;

/**/
//

//if($_REQUEST['id_dependencia'] == 2)
//include ($path . 'historia_entrada/historia/form_historia_in.php');

/*seleccion de tipo de historia clinica*/
if ($_REQUEST['id_proceso'] == 55) {
    //include ($path . 'historia_entrada/historia/form_historia_desarrollo.php');
    $NN=2;
} if ($_REQUEST['id_proceso'] == 61) {
    include ($path . 'historia_entrada/historia/form_historia_crecimiento.php');
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
} else if ($_REQUEST['id_proceso'] == 58) {
    include ($path . 'historia_entrada/historia/form_historia_adulto.php');
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
} else if ($_REQUEST['id_proceso'] == 54) {
    include ($path . 'historia_entrada/historia/form_historia_visual.php');
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
} else if ($_REQUEST['id_proceso'] == 59) {
    include ($path . 'historia_entrada/historia/form_historia_citologia.php');
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
} else if ($_REQUEST['id_proceso'] == 60) {
    $NN=2;
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
    //include ($path . 'historia_entrada/historia/form_historia_planificacion.php');
}else if ($_REQUEST['id_proceso'] == 51) {
    $NN=2;
     include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
      include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/procedimientos/procedimiento.php');
}


           else if ($_REQUEST['id_proceso'] == 23){
           include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tocupacional.php');
            }
            else if ($_REQUEST['id_proceso'] == 22){
            include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tlenguaje.php');
            }
             else if ($_REQUEST['id_proceso'] == 21){   
             include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
                include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/rehabilitacion/tfisica.php');
            }



ELSE{
    include ($path . 'historia_entrada/historia/form_historia_in.php');
    include($GLOBALS['raiz'] . 'mvc/vista/terapeuta/antecedentesg/antecedentesg.php');
}

?>
