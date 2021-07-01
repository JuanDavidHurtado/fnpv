<style>
    
    #content_welcome {

        position: relative;
        top:-368px;
        font-size: 16px;
        background-color: rgba(0,0,0,0.3);
        padding: 8px;
        width: 380px;
        height: 290px;
        left: 180px;

    }
    
</style>
<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <div class="welcome">
        Contactenos !!!
    </div>
    <div id="text_welcome">
        <div id="contactenos" class="Estilo2">
            <table  border="0" align="center" cellpadding="5" cellspacing="0">
                <tbody>
                    <tr>
                        <td valing='top'>
                            <label for="nombre">Nombre</label>
                            <br>
                            <input class="input_txt" name="nombre" type="text" id="nombre" size="33" placeholder="Ingresa tu nombre" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td valing='top'>
                            <label for="nombre">Correo</label>
                            <br>
                            <input class="input_txt" name="email" type="email" id="email" size="33" placeholder="xxxxx@dominio.com" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td valing='top'>
                            <label for="comentario">Comentario</label>
                            <br>
                            <textarea class="input_txt" name="comentario" id="comentario" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button>Enviar</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>
