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

            position: relative;
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


    <div id="content_welcome">
        <br>
        <div class="welcome">
            FACTURACIÓN <?php echo @$msg; ?>
        </div>

        <div id="text_welcome">

    <?php
 

    include ($GLOBALS['raiz'] . 'mvc/vista/admin/factura/form_facturar.php');
    ?>

     </div>
    </div>

