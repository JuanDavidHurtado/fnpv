
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

<script type="text/javascript">

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
        Buscar reporte de facturas
    </div>
    <br>

    <div id="text_welcome">
        <form name="form_user" id="form_user" action="index.php?option=mostrar_informe" method="post">

            <input type="hidden" value="<?php echo $hidden_val; ?>" name="type_acc" id="type_acc">
            <table border="0" cellpading="0" cellspacing="0">
              <tr>
                    <td width="56"><div align="left"><span>Identificación:</span></div></td>
                    <td width="149">
                        <input type="text" name="cedula_usuario" class="input_txt fecha valid" id="cedula_usuario"  value="">
                    </td></tr>
                  <tr>
                     <td width="56"><div align="left"><span>EPS</span></div></td>
                            <td width="149">
                              <select id='eps' class="input_txt " name='eps' onchange="">
                 				   <option value='0' selected="selected">Todas</option>
                    		<?php
                    			//traer lista eps

									$ret = '';
									$sqlr = "Select * from eps";
									$resultr = $conexion->EjecutarQuery($sqlr);

									while ($rowr = mysql_fetch_array($resultr)) {
										$nombre_eps = $rowr['nombre'];


										echo "<option value='" . $rowr['id_eps'] . "' $sel>" . $nombre_eps . "</option>";
										$sel = "";
									}
                   			 ?>
                </select>
                 </tr>

                 <tr>
                     <td width="56"><div align="left"><span>Regimen</span></div></td>
                            <td width="149">
                              <select id='id_regimen' class="input_txt " name='id_regimen' onchange="">
                 				   <option value='0' selected="selected">Todas</option>
                    		<?php
                    			//traer lista regimen

                                                $sqlnn = "select * from regimen order by nombre asc";
                                                $resultnn = $conexion->EjecutarQuery($sqlnn);
                                                while ($rownn = mysql_fetch_array($resultnn)) {

                                                    echo "<option value='" . $rownn['id_regimen'] . "' $style_s >" . $rownn['nombre'] . "</option>";
                                                }
                    ?>
                </select>
                 </tr>
                 <tr>
                     
                        <tr>
                               <td width="56"><div align="left"><span>Tipo informe</span></div></td>
                              <td><select id='id_tipo' class="input_txt " name='id_tipo' >

                                                            <option value='0'selected>Normal</option>
                                                            <option value='1'>Valor</option>

                                    </select></td>
	  </tr>

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
<!--Proceso<br />

                <select class="input_txt" name="id_proceso" id="id_proceso" >
                  <option selected="selected" value="0"> Ninguno </option>
                  <?php
                        /*$sql31 = "select * from  proceso group by nombre";
                        $result31 = $conexion->EjecutarQuery($sql31);
                        while ($row31 = mysql_fetch_array($result31)) {
                            $style_s31 = '';                            
                            echo "<option value='" . $row31['id_proceso'] . "' $style_s31 >" . $row31['nombre'] . "</option>";
                        }*/
                        ?>
                </select>-->

              <center><button id="guardar">Buscar reporte</button></center>
        </form>


    </div>
    <br>
    <?php echo @$msg ?>
</div>

