<style>

    #text_welcome {
        position: relative;
        left: 22px;
    }

    .dependencia_{
        display: none;
    }



</style>
<style>
    #content_welcome {

        position: absolute;
        top:170px;
        font-size: 16px;
        padding: 8px;
        width: 215px;
        min-height: 206px;
        height: auto;
        left: 270px;

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
        Facturar Laboratorio al siguiente Paciente
    </div>
    <br>

    <div id="text_welcome">
        <form name="form_user" id="form_user" action="index.php?option=buscar_usuario" method="post">
            <input type="hidden" value="<?php echo $hidden_val; ?>" name="type_acc" name="type_acc" />
            <table border="0" cellpading="0" cellspacing="0" >
                <tr>
                    <td>
                        <label>Identificacion</label>
                        <br>
                        <input class="input_txt" type="text" name="identificacion" id="identificacion" placeholder="Identificacion..." />
                        <input class="input_txt" type="hidden" name="origen" id="origen" value="1" />

                    </td>

                </tr>
            </table>

              <button id="guardar">Buscar y facturar</button>
        </form>
        
     
    </div>
    <br>
    <?php echo @$msg ?>
</div>
