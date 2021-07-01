<style>

    #text_welcome {
        position: relative;

    }

    .dependencia_{
        display: none;
    }



</style>



    <style>
        #content_welcome {

            position: absolute;
            top:0px;
            font-size: 16px;
            padding: 8px;
            min-width: 689px;
            width: auto;
            left: 65px;

            max-height: 725px;
            height: auto;

            background-color: rgba(0,0,0,0.5);
            border: 1px solid #000;

        }



    </style>

    <img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
    <div id="content_welcome">
        <br>
        <div class="welcome">
            CUPS <?php echo @$msg; ?>
        </div>

        <div id="text_welcome">

    <?php
   // @$action_form_paciente = 'index.php?option=ver_paciente&verificar';

    include ($GLOBALS['raiz'] . 'mvc/vista/admin/cups/form_new_cups.php');
    ?>

     </div>
    </div>

