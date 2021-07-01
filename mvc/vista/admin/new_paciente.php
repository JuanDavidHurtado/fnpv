<style>

    #text_welcome {
        position: relative;

    }

    .dependencia_{
        display: none;        
    }



</style>

<?php
if (!isset($_REQUEST['verificar'])) {
    ?>
    <style>
        #content_welcome {

            position: absolute;
            top:170px;
            font-size: 16px;
            padding: 8px;
            width: 215px;
            height: 206px;
            left: 270px;

            background-color: rgba(0,0,0,0.5);
            border: 1px solid #000;

        }
        #text_welcome {
            left: 22px;
        }


    </style>

    <script>

        $(function() {

            $("#form_user").validate({
                errorElement: "div",
                rules: {
                    identificacion: {required: true, number: true}
                },
                messages: {
                    identificacion: {required: 'Ingrese identificacion a verificar ...'}
                }
            });

        })
    </script>

    <img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
    <div id="content_welcome">
        <br>
        <div class="welcome">
            Verificar paciente
        </div>
        <br>
        <div id="text_welcome">
            <form name="form_user" id="form_user" action="index.php?option=ver_paciente&verificar" method="post">
                <input type="hidden" value="<?php echo $hidden_val; ?>" name="type_acc" name="type_acc" />
                <table border="0" cellpading="0" cellspacing="0" >            
                    <tr>                
                        <td>
                            <label>Identificacion</label>
                            <br>
                            <input class="input_txt" type="text" name="identificacion" id="identificacion" placeholder="Identificacion..." />
                        </td>

                    </tr>
                </table>

                <button id="guardar">Verificar</button>
            </form>
        </div>
    </div>

    <?php
} else {
    ?>

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
            Paciente <?php echo @$msg; ?>
        </div>

        <div id="text_welcome">

    <?php
    @$action_form_paciente = 'index.php?option=ver_paciente&verificar';

    include ($GLOBALS['raiz'] . 'mvc/vista/admin/form_new_paciente.php');
    ?>

        </div>
    </div>


            <?php
        }
        ?>
