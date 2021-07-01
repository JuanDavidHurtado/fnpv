<?php
$array_id_servicios = array();
$identificacion = @$_REQUEST['identificacion'];


$content = 'new';


if(@$_REQUEST['id_contratacion'] !='' ){

    $content = 'edit';
}


if (@$_REQUEST['acc'] == 'new') {


    $msg = "(Registro exitoso)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Registro exitoso!.</div>
            </p>';
    $date = Date('Y-m-d');
     //echo '<h1>entro nuevo</h1>';
     $sql = "INSERT INTO contratacion (
                `id_contratacion`,
                `id_contrato`,
                `tarifa`,
                `estado`,
                `id_cup`
                ) VALUES (
                NULL,
                '" . $_REQUEST['id_contrato'] . "' ,
                '" . $_REQUEST['tarifa'] . "' ,
                '" . $_REQUEST['estado'] . "' ,
                '" . $_REQUEST['id_cup'] . "'
                ) ";
    $result = $conexion->EjecutarQuery(($sql));

    
    $sql_max = 'select max(id_contratacion) as id from contratacion';
    $result_max = $conexion->EjecutarQuery($sql_max);
    $row_max = mysql_fetch_array($result_max);

    // ponemos el contenedor en editar
    $content = 'edit';

    @$_REQUEST['id_contratacion'] = $row_max['id'];

    //echo @$_REQUEST['id_contratacion'] ;
    
} else if (@$_REQUEST['acc'] == 'edit') {
    

    $msg = "(Cambios guardados)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Cambios guardados!.</div>
            </p>';
    
      //echo '<h1>entro editar</h1>';

    $sql = "UPDATE contratacion set
            `tarifa` = '" . $_REQUEST['tarifa'] . "' ,
            `estado` = '" . $_REQUEST['estado'] . "' ,
            `id_cup` = '" . $_REQUEST['id_cup'] . "' WHERE `id_contratacion` = '" . @$_REQUEST['id_contratacion'] . "' ;";

    $result = $conexion->EjecutarQuery(($sql));
   
}

//busco el ultimo con el id_max

//echo "aaaa".$sql;


if(@$_REQUEST['id_contratacion'] !='' ){
    
        
     $sql2 = "select * from contratacion
                        where id_contratacion='" . @$_REQUEST['id_contratacion'] . "' ";
         $result2 = $conexion->EjecutarQuery($sql2);
         $row = mysql_fetch_array($result2);

}else{

         $sql2 = "select * from contrato
            where id_contrato='" . $_REQUEST['id_contrato'] . "' ";
         $result2 = $conexion->EjecutarQuery($sql2);
         $row = mysql_fetch_array($result2);

}




       if ($row) {

             
            $id_contratacion =  @$_REQUEST['id_contratacion'];
            $id_contrato = $row['id_contrato'];
            $tarifa = $row['tarifa'];
            $estado = $row['estado'];
            $id_cup = $row['id_cup'];

            $sqlr2 = "Select * from contrato where id_contrato='" . $id_contrato . "' ";
            $resultr2 = $conexion->EjecutarQuery($sqlr2);
            $rowr2 = mysql_fetch_array($resultr2);
            $nombre_contrato = $rowr2['nombre_contrato'];

            //traer cup
            $sqlr = "Select * from cups where id_cups='" . $row['id_cup'] . "' ";
            $resultr = $conexion->EjecutarQuery($sqlr);
            $rowr = mysql_fetch_array($resultr);
            $nombre_cup = $rowr['nombre'];
        }


       
        ?>
            

<?php echo @$msg ?>

            <script>



                function mostrar(){
                    alert(document.getElementById('lista_pregunta').value)
                }


                function style_() {
                    $("#ui-datepicker-div").css('z-index', '100000');
                }

                $(function() {


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
                            id_contrato:{required: true},

                            tarifa: {required: true},
                            id_cup: {required: true}

                        },
                        messages: {

                            tarifa: {required: 'Ingrese tarifa'},
                            id_cup: {required: 'Seleccione un cup'}


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
                    <col width="107" />
                    <col width="83" />
                    <col width="95" />
                    <col width="83" />
                    <col width="111" />
                    <col width="83" />
                    <tr height="19">
                        <td colspan="6" height="19"><div align="center">Formulario de Agregar Cup</div></td>
                    </tr>
                    <tr height="19">
                        <td width="163" height="19">N Contrato</td>
                        <td colspan="5"><input type="hidden" class="input_txt valid" id="id_contratacion" name="id_contratacion" value="<?php echo @$id_contratacion; ?>" />
                            <input type="text" class="input_txt valid" id="nombre_contrato" name="nombre_contrato" value="<?php echo @$nombre_contrato; ?>"  readonly="true"/>    </td>
                    </tr>

                    <tr height="19">
                        <td height="19">Seleccione Cup</td>
                        <td width="179"><select id='id_cup' class="input_txt" name='id_cup' value="<?php echo @$id_cup; ?>">
                                <option value='0'>Seleccione</option>
<?php
            //consulta para el cup

            $cup = $id_cup;
            $sel = '';
            $ret = '';
            $sqlr = "Select * from cups";
            $resultr = $conexion->EjecutarQuery($sqlr);

            while ($rowr = mysql_fetch_array($resultr)) {
                $nombre_cup = $rowr['nombre'];
                if ($cup == $rowr['id_cups'])
                    $sel = "selected='selected'";

                echo "<option value='" . $rowr['id_cups'] . "' $sel>" . $nombre_cup . "</option>";
                $sel = "";
            }
?>
                </select></td>
            <td width="119">Tarifa Cup</td>
            <td colspan="3"><input type="text" class="input_txt valid" id="tarifa" name="tarifa" value="<?php echo @$tarifa; ?>" /></td>
        </tr>
    </table>



    <button id="guardar">Guardar</button>
</form>
