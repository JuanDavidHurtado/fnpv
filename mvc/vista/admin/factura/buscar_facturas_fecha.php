
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
    $(function() {

        var dates = $('#from, #to').datepicker({
            dateFormat: 'yy-mm-dd',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            onSelect: function(selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate";
                var instance = $(this).data("datepicker");
                var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
    }); // creacion jquery


    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

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
                    <td width="56"><div align="left"><span>NUMERO FACTURA:</span></div></td>
                    <td width="149">
                        <input type="text" name="num_factura" class="input_txt fecha valid" id="num_factura"  value="">
                    </td></tr>
                <tr>
                     <td width="56"><div align="left"><span>Estado facturas:</span></div></td>
                            <td width="149">
                                <select name="estado_factura" id="estado_factura" class="input_txt fecha valid" >
                                  <option value="4" selected="selected">Todas</option>
                                  <option value="1">Finalizadas</option>
                                  <option value="0">Pendientes</option>
                                  <option value="3">Anuladas</option>
                                </select>     </td>
                 </tr>
                     <tr>
                    <td width="56"  ><div align="left"><span > Desde:</span></div></td>
                    <td width="149" >
                        <input type="text" name="from" id="from" class="input_txt fecha valid" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d'); ?>">
                    </td>
                    <td width="80"  ><span ><strong>Hasta</strong></span></td>
                    <td width="180" >
                        <input type="text" name="to" id="to" class="input_txt fecha valid" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d'); ?>">
                    </td>
                </tr>
            </table>
<br />
              <center><button id="guardar">Buscar Facturas</button></center>
        </form>

        

    </div>
    <br>
    <?php echo @$msg ?>
</div>
