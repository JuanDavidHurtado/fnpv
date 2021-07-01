<?php
$array_id_servicios = array();
$identificacion = @$_REQUEST['identificacion'];


$content = 'new';

if (@$_REQUEST['acc'] == 'new') {
    
    $msg = "(Registro exitoso)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro exitoso!.</div>
            </p>';
    $date = Date('Y-m-d');
    $sql = "INSERT INTO contrato (
                    `id_contrato`,
                    `nombre_contrato`,
                    `fecha`,
                    `porcentaje`,
                    `plan`,
                    `fecha_in`,
                    `fecha_out`,
                    `valor`,
                    `poliza`,
                    `contratante`,
                    `tipo`,
                    `estado`,
                    `descripcion`
                    ) VALUES (
                    NULL,
                    '" . $_REQUEST['nombre_contrato'] . "' ,
                    '" . $_REQUEST['fecha'] . "' ,
                    '" . $_REQUEST['porcentaje'] . "' ,
                    '" . $_REQUEST['plan'] . "' ,
                    '" . $_REQUEST['fecha_in'] . "' ,
                    '" . $_REQUEST['fecha_out'] . "' ,
                    '" . $_REQUEST['valor'] . "' ,
                    '" . $_REQUEST['poliza'] . "' ,
                    '" . $_REQUEST['contratante'] . "' ,
                    '" . $_REQUEST['tipo'] . "' ,
                    '" . $_REQUEST['estado'] . "' ,
                    '" . $_REQUEST['descripcion'] . "'
                    ) ";
    $result = $conexion->EjecutarQuery(($sql));

    $sql_max = 'select max(id_contrato) as id from contrato';
    $result_max = $conexion->EjecutarQuery($sql_max);
    $row_max = mysql_fetch_array($result_max);
    @$_REQUEST['id_contrato'] = $row_max['id'];
    
}elseif (@$_REQUEST['acc'] == 'edit') {

    $msg = "(Cambios guardados)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Cambios guardados!.</div>
            </p>';

    $sql = "UPDATE contrato set
            `nombre_contrato` = '" . $_REQUEST['nombre_contrato'] . "' ,
            `fecha` = '" . $_REQUEST['fecha'] . "' ,
            `porcentaje` = '" . $_REQUEST['porcentaje'] . "' ,
            `plan` = '" . $_REQUEST['plan'] . "' ,
            `fecha_in` = '" . $_REQUEST['fecha_in'] . "' ,
            `fecha_out` = '" . $_REQUEST['fecha_out'] . "' ,
            `valor` = '" . $_REQUEST['valor'] . "' ,
            `poliza` = '" . $_REQUEST['poliza'] . "' ,
            `contratante` = '" . $_REQUEST['contratante'] . "' ,
            `tipo` = '" . $_REQUEST['tipo'] . "' ,
            `estado` = '" . $_REQUEST['estado'] . "' ,
            `descripcion` = '" . $_REQUEST['descripcion'] . "' WHERE `id_contrato` = '" . $_REQUEST['id_contrato'] . "' ;";

    $result = $conexion->EjecutarQuery(($sql));
}


if (@$_REQUEST['id_contrato'] != '') {
    //echo '<h1>entro</h1>';
    $sql2 = "select * from contrato
            where id_contrato='" . $_REQUEST['id_contrato'] . "' ";

    $result2 = $conexion->EjecutarQuery($sql2);
    $row = mysql_fetch_array($result2);


    if ($row) {

        $content = 'edit';
        $id_contrato = $row['id_contrato'];
        $nombre_contrato = $row['nombre_contrato'];
        $fecha = $row['fecha'];
        $porcentaje = $row['porcentaje'];
        $plan = $row['plan'];
        $fecha_in = $row['fecha_in'];
        $fecha_out = $row['fecha_out'];
        $valor = $row['valor'];
        $poliza = $row['poliza'];
        $contratante = $row['contratante'];
        $tipo = $row['tipo'];
        $estado = $row['estado'];
        $descripcion = $row['descripcion'];
        $paso1=1;
    }
}
?>


<?php echo @$msg ?>

<script>

//function cambiar_lista(){


//}


    function mostrar() {
        alert(document.getElementById('lista_pregunta').value)
    }


    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    $(function() {

           var paso=<?php echo @$_REQUEST['id_contrato']; ?>;
           var paso2=<?php echo $contratante ?>;

            if (paso!=""){
                      $('#contratante').val(paso2);
             }
             

        $(".fecha").datepicker({
            changeMonth: true,
            numberOfMonths: 3,
            minDate: '2014-01-21',
            dateFormat: "yy-mm-dd"
        });



        /*
         $("#fecha_in").datepicker({
         dateFormat: "yy-mm-dd",
         changeMonth: true,
         changeYear: true
         });
         
         $("#fecha_out").datepicker({
         dateFormat: "yy-mm-dd",
         changeMonth: true,
         changeYear: true
         });
         
         $("#fecha").datepicker({
         dateFormat: "yy-mm-dd",
         changeMonth: true,
         changeYear: true
         });*/


        $("#form_contratacion").validate({
            errorElement: "div",
            rules: {
                id_contrato: {required: true},
                plan: {required: true},
                poliza: {required: true},
                fecha_in: {required: true},
                fecha: {required: true},
                fecha_out: {required: true},
                contratante: {required: true},
                porcentaje: {required: true},
                descripcion: {required: true},
                estado: {required: true},
                tipo: {required: true},
                valor: {required: true}
            },
            messages: {
                id_contrato: {required: 'Ingrese identificacion a verificar ...'},
                plan: {required: 'Ingrese plan de beneficio '},
                poliza: {required: 'Ingrese póliza'},
                fecha_in: {required: 'Ingrese fecha de inicio'},
                fecha: {required: 'Seleccione fecha'},
                fecha_out: {required: 'Seleccione fecha de terminación'},
                contratante: {required: 'Ingrese entidad contratante'},
                porcentaje: {required: 'Ingrese valor porcentaje'},
                descripcion: {required: 'Ingrese descripción'},
                estado: {required: 'Seleccione estado'},
                tipo: {required: 'Ingrese tipo'},
                valor: {required: 'Ingrese valor contrato'}

            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:
                if (validate_multiselect()) {
                    //form.submit();
                }

            }
        });


<?php
if ($content == 'edit') {
    echo 'validate_tipo_ident();';
}
?>


        $("#id_servicio_publico").multiselect({
            'multiple': true
        });

    });

     
</script>



<form id="form_contratacion" name="form_contratacion" action="<?php echo @$action_form_contratacion ?>#contratacion" method="post">
    <input type="hidden" name="acc" id="acc" value="<?php echo $content; ?>" />



    <table cellspacing="0" cellpadding="0" border="1">

        <tr height="19">
            <td colspan="6" height="19"><div align="center">Formulario de contrato</div></td>
        </tr>
        <tr height="19">
            <td width="163" height="19">N Contrato</td>
            <td width="189"><input type="hidden" class="input_txt valid" id="id_contrato" name="id_contrato" value="<?php echo @$id_contrato; ?>" />
                <input type="text" class="input_txt valid" id="nombre_contrato" name="nombre_contrato" value="<?php echo @$nombre_contrato; ?>" />    </td>
            <td width="109">Fecha</td>
            <td width="188"><input onclick="style_()" type="text" class="input_txt valid fecha" id="fecha" name="fecha" value="<?php echo @$fecha; ?>" /></td>
            <td width="239">Estado</td>
            <td width="168"><input type="text" class="input_txt valid " id="estado" name="estado" value="<?php echo @$estado; ?>" /></td>
        </tr>
        <tr height="19">
            <td height="19">Plan de beneficio</td>
            <td><input type="text" class="input_txt valid" id="plan" name="plan" value="<?php echo @$plan; ?>" /></td>
            <td>Fecha inicio</td>
            <td><input onclick="style_()" type="text" class="input_txt valid fecha" id="fecha_in" name="fecha_in" value="<?php echo @$fecha_in; ?>" /></td>
            <td>Fecha finalización</td>
            <td><input onclick="style_()" type="text" class="input_txt valid fecha" id="fecha_out" name="fecha_out" value="<?php echo @$fecha_out; ?>" /></td>
        </tr>
        <tr height="19">
            <td height="19">Póliza</td>
            <td><input type="text" class="input_txt valid" id="poliza" name="poliza" value="<?php echo @$poliza; ?>" /></td>
            <td>Contratante</td>
            <td><input type="hidden" class="input_txt valid" id="contratante_2" name="contratante_2" value="<?php echo @$contratante; ?>" />

                <select id='contratante' class="input_txt " name='contratante' onchange="">
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps

							$ret = '';
							$sqlr = "Select * from eps";
							$resultr = $conexion->EjecutarQuery($sqlr);

							while ($rowr = mysql_fetch_array($resultr)) {
								$nombre_eps = $rowr['nombre'];
								//if ($cup == $rowr['cups'])
								//  $sel = "selected='selected'";

								echo "<option value='" . $rowr['id_eps'] . "' $sel>" . $nombre_eps . "</option>";
								$sel = "";
							}
                    ?>
                </select>

            
            </td>


            <td>Tipo</td>
            <td><input type="text" class="input_txt valid" id="tipo" name="tipo" value="<?php echo @$tipo; ?>" /></td>
        </tr>
        <tr height="19">
            <td height="19">Porcentaje de descuento</td>
            <td><input type="text" class="input_txt valid" id="porcentaje" name="porcentaje" value="<?php echo @$porcentaje; ?>" /></td>
            <td>Valor contratado</td>
            <td><input type="text" class="input_txt valid" id="valor" name="valor" value="<?php echo @$valor; ?>" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr height="19">
            <td height="19">Descripción</td>
            <td colspan="5"><input type="text" class="input_txt valid" id="descripcion" name="descripcion" value="<?php echo @$descripcion; ?>" /></td>
        </tr>
    </table>



    <button id="guardar">Guardar</button>
</form>
