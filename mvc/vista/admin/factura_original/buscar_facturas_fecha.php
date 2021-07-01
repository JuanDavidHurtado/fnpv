
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
        width: 500px;
        min-height: 206px;
        height: auto;
        left: 270px;

        background-color: rgba(0,0,0,0.5);
        border: 1px solid #000;

    }


</style>

<script>


</script>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <br>
    <div class="welcome">
        Buscar Facturas
    </div>
    <br>

    <div id="text_welcome">
        <form name="form_user" id="form_user" action="index.php?option=facturas_hoy" method="post">
            <input type="hidden" value="<?php echo $hidden_val; ?>" name="type_acc" name="type_acc" />
            <table border="0" cellpading="0" cellspacing="0" >
                  <tr>
                        <td width="56"  ><div align="left"><span > Desde:</span></div></td>
                        <td width="149" ><input type="text" name="from" id="from" /></td>
                        <td width="80"  ><span ><strong>Hasta</strong></span></td>
                        <td width="180" ><input type="text" name="to" id="to" /></td>
                      </tr>
            </table>
<br />
              <center><button id="guardar">Buscar Facturas</button></center>
        </form>


    </div>
    <br>
    <?php echo @$msg ?>
</div>
