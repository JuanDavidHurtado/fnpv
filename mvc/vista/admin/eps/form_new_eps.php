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
    $sql = "INSERT INTO eps (
                `id_eps`,
                `nit`,
                `nit_2`,
                `nit_3`,
                `nombre`,
                `id_regimen`,
                `telefono`,
                `direccion`,
                `tipo_entidad`
                ) VALUES (
                NULL,
                '" . $_REQUEST['nit'] . "' ,
                '" . $_REQUEST['nit_2'] . "' ,
                '" . $_REQUEST['nit_3'] . "' ,
                '" . $_REQUEST['nombre'] . "' ,
                '" . $_REQUEST['id_regimen'] . "' ,
                '" . $_REQUEST['telefono'] . "' ,
                '" . $_REQUEST['direccion'] . "' ,
                '" . $_REQUEST['tipo_entidad'] . "'
                ) ";
    $result = $conexion->EjecutarQuery(($sql));

    $sql_max = 'select max(id_eps) as id from eps';
    $result_max = $conexion->EjecutarQuery($sql_max);
    $row_max = mysql_fetch_array($result_max);
    @$_REQUEST['id_eps'] = $row_max['id'];


    // @$_REQUEST['id_eps'] = $row_max['id'];
} else if (@$_REQUEST['acc'] == 'edit') {


    //ECHO "AAAA".@$_REQUEST['id_eps'] ;

    $msg = "(Cambios guardados)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		Cambios guardados!.</div>
            </p>';

    $sql = "UPDATE eps set
                `nit` = '" . $_REQUEST['nit'] . "' ,
                `nombre` = '" . $_REQUEST['nombre'] . "' ,
                    `nit_2` = '" . $_REQUEST['nit_2'] . "' ,
                        `nit_3` = '" . $_REQUEST['nit_3'] . "' ,
                `id_regimen` = '" . $_REQUEST['id_regimen'] . "' ,
                `telefono` = '" . $_REQUEST['telefono'] . "' ,
                `direccion` = '" . $_REQUEST['direccion'] . "' ,
                `tipo_entidad` = '" . $_REQUEST['tipo_entidad'] . "'  WHERE  `id_eps` = '" . $_REQUEST['id_eps'] . "' ;";

    $result = $conexion->EjecutarQuery(($sql));
}

//echo $sql;


if (@$_REQUEST['id_eps'] != '') {
    //echo '<h1>entro</h1>';
    //$content = 'edit';
    $sql2 = "select * from eps
            where id_eps='" . @$_REQUEST['id_eps'] . "' ";
    $result2 = $conexion->EjecutarQuery($sql2);
    $row = mysql_fetch_array($result2);


    if ($row) {


        $content = 'edit';
        $id_eps = $_REQUEST['id_eps'];
        $nit = $row['nit'];
        $nit_2 = $row['nit_2'];
        $nit_3 = $row['nit_3'];
        $nombre = $row['nombre'];
        $id_regimen = $row['id_regimen'];
        $telefono = $row['telefono'];
        $direccion = $row['direccion'];
        $tipo_entidad = $row['tipo_entidad'];
    }
}
?>


<?php echo @$msg ?>

<script>



    function mostrar() {
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
                nit: {required: true},
                nombre: {required: true},
                telefono: {required: true},
                direccion: {required: true},
                tipo_entidad: {required: true},
                id_regimen: {required: true}

            },
            messages: {
                nit: {required: 'Ingrese plan de Nit '},
                nombre: {required: 'Ingrese nombre'},
                telefono: {required: 'Ingrese telefono'},
                direccion: {required: 'Ingrese direccion'},
                tipo_entidad: {required: 'Seleccione tipo de entidad'},
                id_regimen: {required: 'Seleccione regimen'}


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
    <input type="hidden" name="id_eps" id="acc" value="<?php echo @$id_eps; ?>" />



    <table cellspacing="0" cellpadding="0" border="1">
      
        <tr height="19">
            <td colspan="4" height="19"><div align="center">Formulario EPS</div></td>
        </tr>

        <tr height="19">
            <td width="163" height="19">NIT</td>
            <td width="189"><input type="text" class="input_txt valid" id="nit_3" name="nit_3" value="<?php echo @$nit_3; ?>" /></td>


            <td width="109">&nbsp;</td>
           
        </tr>

        <tr height="19">
            <td width="163" height="19">Codigo 1</td>
            <td width="189"><input type="text" class="input_txt valid" id="nit" name="nit" value="<?php echo @$nit; ?>" /></td>
           

            <td width="109">Nombre</td>
            <td width="188"><input type="text" class="input_txt valid" id="nombre" name="nombre" value="<?php echo @$nombre; ?>" /></td>
        </tr>

        <tr height="19">
             <td width="163" height="19">Codigo 2</td>
            <td width="189"><input type="text" class="input_txt valid" id="nit_2" name="nit_2" value="<?php echo @$nit_2; ?>" /></td>
           
            <td>Tipo Entidad</td>    <td>

                <select id='id_regimen' name='id_regimen' >
                    <option value='0'>Seleccione</option>
<?php
//consulta para el cup

$cup = $tipo_entidad;
$sel = '';
$ret = '';
$sqlr = "Select * from regimen";
$resultr = $conexion->EjecutarQuery($sqlr);

while ($rowr = mysql_fetch_array($resultr)) {
    $nombre_ent = $rowr['nombre'];
    if ($id_regimen == $rowr['id_regimen'])
        $sel = "selected='selected'";

    echo "<option value='" . $rowr['id_regimen'] . "' $sel>" . $nombre_ent . "</option>";
    $sel = "";
}
?>
                </select>


            </td>




        </tr>
        <tr height="19">
            <td height="19">Telefono</td>
            <td><input type="text" class="input_txt valid" id="telefono" name="telefono" value="<?php echo @$telefono; ?>" /></td>
             <td height="19">Direccion</td>
            <td><input type="text" class="input_txt valid" id="direccion" name="direccion" value="<?php echo @$direccion; ?>" /></td>
        </tr>
    </table>



    <button id="guardar">Guardar</button>
</form>
