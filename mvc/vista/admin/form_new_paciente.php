<?php
$array_id_servicios = array();
$identificacion = @$_REQUEST['identificacion'];

if (@$_REQUEST['acc'] == 'new') {
    
    $msg = "(Registro exitoso)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Registro exitoso!.</div>
            </p>';
    $date = Date('Y-m-d');
    $sql = "INSERT INTO `paciente` (`historia`, 
                    `fecha_apertura`, 
                    `tipo_id`, 
                    `identificacion`, 
                    `nombre1`, 
                    `nombre2`, 
                    `apellido1`, 
                    `apellido2`, 
                    `depto_n`, 
                    `municipio_n`, 
                    `fecha_n`, 
                    `sexo`, 
					`domicilio`, 
                    `depto`, 
                    `municipio`, 
                    `zonaresidencia`, 
                    `telefono`, 
                    `id_eps`, 
                    `tipoafiliacion`, 
                    `acudiente_nombre`, 
                    `acudiente_edad`, 
                    `acudiente_telefono`, 
                    `acudiente_direccion`,
                    `acudiente_nombre2`, 
                    `acudiente_edad2`, 
                    `acudiente_telefono2`, 
                    `acudiente_direccion2`,
                    `con_quien_vive`,
                    `id_estrato`,
                    `id_tipo_vivienda`,
                    `grupo_sanguineo`,
                    `ocupacion`, `raza`,
                    `tipo_parentesco`,
                    `escolaridad`,
                    `id_regimen`
                      ) VALUES (NULL, '$date', '" . $_REQUEST['tipo_id'] . "', '" . $_REQUEST['identificacion'] . "',
                    '" . $_REQUEST['nombre1'] . "', '" . $_REQUEST['nombre2'] . "', 
                    '" . $_REQUEST['apellido1'] . "', '" . $_REQUEST['apellido2'] . "', 
                    '" . $_REQUEST['depto_n'] . "', '" . $_REQUEST['municipio_n'] . "', 
                    '" . $_REQUEST['fecha_n'] . "', '" . $_REQUEST['sexo'] . "', '" . $_REQUEST['domicilio'] . "', 
                    '" . $_REQUEST['depto'] . "', '" . $_REQUEST['municipio'] . "', '" . $_REQUEST['zonaresidencia'] . "', '" . $_REQUEST['telefono'] . "', 
                    '" . $_REQUEST['id_eps'] . "', '" . $_REQUEST['tipoafiliacion'] . "', '" . $_REQUEST['acudiente_nombre'] . "', 
                    '" . $_REQUEST['acudiente_edad'] . "', '" . $_REQUEST['acudiente_telefono'] . "', '" . $_REQUEST['acudiente_direccion'] . "',
                    '" . $_REQUEST['acudiente_nombre2'] . "', '" . $_REQUEST['acudiente_edad2'] . "', '" . $_REQUEST['acudiente_telefono2'] . "', '" . $_REQUEST['acudiente_direccion2'] . "',
                    '','','','','" . $_REQUEST['ocupacion'] . "','" . $_REQUEST['raza'] . "','" . $_REQUEST['tipo_parentesco'] . "','" . $_REQUEST['escolaridad'] . "','" . $_REQUEST['id_regimen'] . "' )";

    $result = $conexion->EjecutarQuery(($sql));

    $historia = 0;
    $sql_h = "Select historia from paciente where identificacion='" . $_REQUEST['identificacion'] . "'";
    $result_h = $conexion->EjecutarQuery($sql_h);
    $row_h = mysql_fetch_array($result_h);
    $historia = $row_h['historia'];

    $sql_delete_s = "Delete from paciente_servicio where id_paciente = " . $historia;
    $conexion->EjecutarQuery($sql_delete_s);

    $array_id_servicios_ = explode(',', $_REQUEST['id_servicio_publico_']);
    foreach ($array_id_servicios_ as $id_servicio) {
        $sql_i = "INSERT INTO  `paciente_servicio` (
                    `id_paciente_servicio` ,
                    `id_paciente` ,
                    `id_servicio`
                    )
                    VALUES (
                    NULL ,  '$historia',  '$id_servicio'
                    );";

        $conexion->EjecutarQuery($sql_i);
    }
} else if (@$_REQUEST['acc'] == 'edit') {

    $msg = "(Cambios guardados)";
    $msg = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Cambios guardados!.</div>
            </p>';
    $sql = "UPDATE  `paciente` SET
                `tipo_id` =  '" . $_REQUEST['tipo_id'] . "',
                `identificacion` =  '" . $_REQUEST['identificacion'] . "',
                `nombre1` =  '" . $_REQUEST['nombre1'] . "',
                `nombre2` =  '" . $_REQUEST['nombre2'] . "',
                `apellido1` =  '" . $_REQUEST['apellido1'] . "',
                `apellido2` =  '" . $_REQUEST['apellido2'] . "',
                `depto_n` =  '" . $_REQUEST['depto_n'] . "',
                `municipio_n` =  '" . $_REQUEST['municipio_n'] . "',
                `fecha_n` =  '" . $_REQUEST['fecha_n'] . "',
                `sexo` =  '" . $_REQUEST['sexo'] . "',
                `domicilio` =  '" . $_REQUEST['domicilio'] . "',
                `depto` =  '" . $_REQUEST['depto'] . "',
                `municipio` =  '" . $_REQUEST['municipio'] . "',
                `zonaresidencia` =  '" . $_REQUEST['zonaresidencia'] . "',
                `telefono` =  '" . $_REQUEST['telefono'] . "',
                `id_eps` =  '" . $_REQUEST['id_eps'] . "',
                `tipoafiliacion` =  '" . $_REQUEST['tipoafiliacion'] . "',
                `acudiente_nombre` =  '" . $_REQUEST['acudiente_nombre'] . "',
                `acudiente_edad` =  '" . $_REQUEST['acudiente_edad'] . "',
                `acudiente_telefono` =  '" . $_REQUEST['acudiente_telefono'] . "',
                `acudiente_direccion` =  '" . $_REQUEST['acudiente_direccion'] . "',
                `acudiente_nombre2` =  '" . $_REQUEST['acudiente_nombre2'] . "',
                `acudiente_edad2` =  '" . $_REQUEST['acudiente_edad2'] . "',
                `acudiente_telefono2` =  '" . $_REQUEST['acudiente_telefono2'] . "',
                `acudiente_direccion2` =  '" . $_REQUEST['acudiente_direccion2'] . "',
                `con_quien_vive` = '" . $_REQUEST['con_quien_vive'] . "',
                `id_estrato` = '" . $_REQUEST['id_estrato'] . "',
                `id_tipo_vivienda` = '" . $_REQUEST['id_tipo_vivienda'] . "',
                `grupo_sanguineo` = '" . $_REQUEST['grupo_sanguineo'] . "',
                `raza` = '" . $_REQUEST['raza'] . "',
                `tipo_parentesco` = '" . $_REQUEST['tipo_parentesco'] . "',
                `escolaridad` = '" . $_REQUEST['escolaridad'] . "',
                `id_regimen` = '" . $_REQUEST['id_regimen'] . "',
                `ocupacion` = '" . $_REQUEST['ocupacion'] . "'
                 WHERE  `paciente`.`historia` =" . $_REQUEST['historia'] . ";";


    $result = $conexion->EjecutarQuery(($sql));

    $historia = $_REQUEST['historia'];

    $sql_delete_s = "Delete from paciente_servicio where id_paciente = " . $historia;
    $conexion->EjecutarQuery($sql_delete_s);

    $array_id_servicios_ = explode(',', $_REQUEST['id_servicio_publico_']);
    foreach ($array_id_servicios_ as $id_servicio) {
        $sql_i = "INSERT INTO  `paciente_servicio` (
                    `id_paciente_servicio` ,
                    `id_paciente` ,
                    `id_servicio`
                    )
                    VALUES (
                    NULL ,  '$historia',  '$id_servicio'
                    );";

        $conexion->EjecutarQuery($sql_i);
    }
}

$ident = '';
$sql = "select * from paciente where identificacion='" . $_REQUEST['identificacion'] . "' ";

$result = $conexion->EjecutarQuery($sql);
$row = false;

while ($row = mysql_fetch_array($result)) {
    break;
}
$content = '';
if ($row) {

    $ident = '?acc=' . $_REQUEST['identificacion'];

    $content = "edit";
    $historia = $row['historia'];
    $identificacion = $row['identificacion'];
    $tipo_id = $row['tipo_id'];
    $nombre1 = $row['nombre1'];
    $nombre2 = $row['nombre2'];
    $apellido1 = $row['apellido1'];
    $apellido2 = $row['apellido2'];
    $fecha_n = $row['fecha_n'];
    $domicilio = $row['domicilio'];
    $telefono = $row['telefono'];
    $depto_n = $row['depto_n'];
    $municipio_n = $row['municipio_n'];
    $depto = $row['depto'];
    $municipio = $row['municipio'];
    $acudiente_nombre = $row['acudiente_nombre'];
    $acudiente_edad = $row['acudiente_edad'];
    $acudiente_telefono = $row['acudiente_telefono'];
    $acudiente_direccion = $row['acudiente_direccion'];
    $acudiente_nombre2 = $row['acudiente_nombre2'];
    $acudiente_edad2 = $row['acudiente_edad2'];
    $acudiente_telefono2 = $row['acudiente_telefono2'];
    $acudiente_direccion2 = $row['acudiente_direccion2'];
    $zonaresidencia = $row['zonaresidencia'];
    $id_eps = $row['id_eps'];
    $tipoafiliacion = $row['tipoafiliacion'];
    $sexo = $row['sexo'];
    $edad = Utils::edad($fecha_n);
    $id_regimen = $row['id_regimen'];
    $id_estrato = $row['id_estrato'];
    $con_quien_vive = $row['con_quien_vive'];
    $id_tipo_vivienda = $row['id_tipo_vivienda'];
    $ocupacion = $row['ocupacion'];
    $raza = $row['raza'];
    $tipo_parentesco = $row['tipo_parentesco'];
  $escolaridad = $row['escolaridad'];


    if ($row['grupo_sanguineo'] == 'AB+') {
        @$checked_gs_1 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'AB-') {
        @$checked_gs_2 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'A+') {
        @$checked_gs_3 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'A-') {
        @$checked_gs_4 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'B+') {
        @$checked_gs_5 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'B-') {
        @$checked_gs_6 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'O+') {
        @$checked_gs_7 = ' selected="selected" ';
    }
    if ($row['grupo_sanguineo'] == 'O-') {
        @$checked_gs_8 = ' selected="selected" ';
    }

    $sql_s = "Select id_servicio from paciente_servicio where id_paciente=" . $historia;
    $result_s = $conexion->EjecutarQuery($sql_s);
    while ($row_s = mysql_fetch_array($result_s)) {

        $array_id_servicios[] = $row_s['id_servicio'];
    }
} else {
    //echo "registrar";  
    $content = "new";
}
?>
<style>

    #_m, #_n_m, .l_eps {
        <?php
        $style_d = 'none';
        if ($content == 'edit') {
            $style_d = 'block';
        }

        echo "display: $style_d;";
        ?>

    }

    #acudiente {

        display: none;
    }

</style>

<?php echo @$msg ?>

<script>

    function validate_multiselect() {



        /*var result = "";
        $('#id_servicio_publico option:selected').each(function(i, item) {
            result += $(this).val() + ", ";
        });

        if (result != '') {
            $("#id_servicio_publico_").val($("#id_servicio_publico").val());

            return true;
        } else {
            alert("Seleccione Servicio");
            return false;
        }*/

    }

    function validate_tipo_ident() {
        var return_ = false;

        if ($('#tipo_id').val() == 4 || $('#tipo_id').val() == 6 || $('#tipo_id').val() == 8) {

            return_ = true;

        }

        if (return_) {
            $('#acudiente').show('slow');
        } else {
            $('#acudiente').hide('slow');
        }

        return return_;
    }

    function load_eps() {

        if ($('#id_regimen').val() != '') {
            var parameters = "opcion=2&id_regimen=" + $('#id_regimen').val();
            $.ajax({
                data: parameters,
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                success: function(data) {
                    $("#c_eps").html(data);
                    $(".l_eps").show('slow');
                }, error: function(request, error) {

                }
            });
        } else {
            $(".l_eps").hide('slow');
        }
    }

    function load_municipio(id_o, element) {
        var parameters = "opcion=1&id_p=" + $('#' + id_o).val() + "&element=" + element;
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                $("#select" + element + "_m").html(data);
                $("#" + element + "_m").show('slow');
            }, error: function(request, error) {

            }
        });

    }

    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    $(function() {

        $("#fecha_n").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth:true,
            changeYear: true, 
            yearRange : 'c-100:c+1',
        });



        $("#form_user").validate({
            errorElement: "div",
            rules: {
                identificacion: {required: true, remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-identificacion-paciente-normal.php<?php echo $ident ?>", type: "get"}},
                nombre1: {required: true},
                nombre2: {required: true},
                apellido1: {required: true},
                apellido2: {required: true},
                domicilio: {required: true},
                fecha_n: {required: true},
                telefono: {required: true},
                acudiente_nombre: {required: function() {
                        return validate_tipo_ident();
                    }},
                acudiente_edad: {required: function() {
                        return validate_tipo_ident();
                    }},
                acudiente_telefono: {required: function() {
                        return validate_tipo_ident();
                    }},
                acudiente_direccion: {required: function() {
                        return validate_tipo_ident();
                    }},
                depto_n: {required: true},
                depto: {required: true},
                id_regimen: {required: true},
                ocupacion: {required: true}
            },
            messages: {
                identificacion: {required: 'Ingrese identificacion a verificar ...', remote: 'Identificacion ya registrada'},
                nombre1: {required: 'Ingrese primer nombre'},
                nombre2: {required: 'Ingrese segundo nombre'},
                apellido1: {required: 'Ingrese primer apellido'},
                apellido2: {required: 'Ingrese segundo apellido'},
                domicilio: {required: 'Ingrese domicilio'},
                fecha_n: {required: 'Ingrese fecha nacimiento'},
                telefono: {required: 'Ingrese telefono'},
                acudiente_nombre: {required: 'Ingrese el nombre'},
                acudiente_edad: {required: 'Ingrese el edad'},
                acudiente_telefono: {required: 'Ingrese el telefono'},
                acudiente_direccion: {required: 'Ingrese el direccion'},
                depto_n: {required: 'Seleccione depto'},
                depto: {required: 'Seleccione depto'},
                id_regimen: {required: 'Seleccione regimen'},
                ocupacion: {required: 'Ingrese ocpuacion'}
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:
                //if (validate_multiselect()) {
                    form.submit();
                //}

            }
        });


<?php
if ($content == 'edit') {
    echo 'validate_tipo_ident();';
}
?>


        /*$("#id_servicio_publico").multiselect({
            'multiple': true
        });*/

    });
</script>

<form name="form_user" id="form_user" action="<?php echo @$action_form_paciente ?>" method="post">
    <input type="hidden" name="acc" id="acc" value="<?php echo $content; ?>" />
    <input type="hidden" name="historia" id="historia" value="<?php echo @$historia; ?>" />
    <table border="0" cellpading="0" cellspacing="0" >            
        <tr>                
            <td>
                <label>Identificacion</label>
                <br>
                <input class="input_txt" type="text" name="identificacion" id="identificacion" placeholder="Identificacion..." value="<?php echo @$identificacion ?>" />            </td>
            <td>
                <label>Tipo</label>
                <br>
                <select class="input_txt" name="tipo_id" id="tipo_id" onchange="validate_tipo_ident()"  >
                    <?php
                    $sql = "select * from tipo_identificacion order by id_tipo_identificacion asc";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id_tipo_identificacion'] == @$tipo_id) {
                            $style_s = "selected";
                        }

                        echo "<option value='" . $row['id_tipo_identificacion'] . "' $style_s >" . $row['identificacion'] . "</option>";
                    }
                    ?>
                </select>            </td>
            <td>
                <?php
                if ($content == 'edit') {
                    ?>
                    <label><br />
                    </label>
                   <!-- <select class="input_txt" name="id_estrato" id="id_estrato" >
                      <?php/*
                    $sql = "select * from  estrato";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = '';
                        if ($row['id_estrato'] == @$id_estrato) {
                            $style_s = 'selected';
                        }
                        echo "<option value='" . $row['id_estrato'] . "' $style_s >" . $row['estrato'] . "</option>";
                    }*/
                    ?>
                    </select>-->
                    <br>
                    <input class="input_txt" type="hidden" name="historia" id="historia" readonly="readonly" value="<?php echo @$historia ?>" />
                   
                    <?php
}
?></td>
            <td>
                <?php
                /*
                if ($content == 'edit') {
                    ?>
                    <label>Edad</label>
                    <br>
                    <input class="input_txt" type="text" name="edad" id="edad" readonly="readonly" value="<?php echo @$edad ?>" />
    <?php
}*/
?>            </td>                             
        </tr>
        <tr>

            <td>
                <label>Primer nombre</label>
                <br>
                <input class="input_txt" type="text" name="nombre1" id="nombre1" placeholder="Primer nombre..." value="<?php echo @$nombre1 ?>"/>            </td>
            <td>
                <label>Segundo nombre</label>
                <br>
                <input class="input_txt" type="text" name="nombre2" id="nomnbre2" placeholder="Segundo nombre..." value="<?php echo @$nombre2 ?>" />            </td>                
            <td>
                <label>Primer apellido</label>
                <br>
                <input class="input_txt" type="text" name="apellido1" id="apellido1" placeholder="Primmer apellido..." value="<?php echo @$apellido1 ?>"/>            </td>                
            <td>
                <label>Segundo apellido</label>
                <br>
                <input class="input_txt" type="text" name="apellido2" id="apellido2" placeholder="Identificacion..." value="<?php echo @$apellido2 ?>" />            </td>
        </tr>
        <tr>

            <td>
                <label>Fecha nacimiento</label>
                <br>
                <input class="input_txt" type="text" onfocus="style_()" readonly="readonly" name="fecha_n" id="fecha_n" placeholder="Fecha nacimiento..." value="<?php echo @$fecha_n ?>" />            </td>
            <td>
                <label>Sexo</label>
                <br>
                <select class="input_txt" name="sexo" id="sexo" >
<?PHP
$style_f = @$sexo == 'F' ? 'selected' : '';
$style_m = @$sexo == 'M' ? 'selected' : '';
?>
                    <option value="F" <?php echo $style_f ?> >FEMENINO</option>
                    <option value="M" <?php echo $style_m ?>>MASCULINO</option>
                </select>            </td>
            <td>
                <label>Depto nacimiento</label>
                <br>
                <select id="depto_n" name="depto_n" class="input_txt" onchange="load_municipio(this.id, '_n')">
                    <option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from departamento";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id'] == @$depto_n) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>            </td>
            <td>
                <div id='_n_m'>
                    <label>Municipio nacimiento</label>
                    <br>
                    <div id="select_n_m">

                        <?php
                        if ($content == 'edit') {

                            $sql = "select * from municipio where id_depto = " . $depto_n;
                            $result = $conexion->EjecutarQuery($sql);

                            $return = '<select class="input_txt" name="municipio_n" id="municipio_n">';
                            while ($row = mysql_fetch_array($result)) {
                                $style_s = "";
                                if ($row['id_municipio'] == @$municipio_n) {
                                    $style_s = "selected";
                                }
                                $return .= "<option value='" . $row['id_municipio'] . "' $style_s >" . $row['nombre'] . "</option>";
                            }
                            $return .= '</select>';

                            echo $return;
                        }
                        ?>
                    </div>
                </div>            </td>
        </tr>
        <tr>
            <td>
                <label>Domicilio</label>
                <br>
                <input class="input_txt" type="text" name="domicilio" id="domicilio" placeholder="Domicilio..." value="<?php echo @$domicilio ?>" />            </td>
            <td>
                <label>Telefono</label>
                <br>
                <input class="input_txt" type="text" name="telefono" id="telefono" placeholder="Telefono..." value="<?php echo @$telefono ?>" />            </td>

			<td>
                <label>Depto residencia</label>
                <br>
                <select id="depto" name="depto" class="input_txt" onchange="load_municipio(this.id, '')">
                    <option value=""> [ SELECCIONAR ]</option>
                    <?php
                    $sql = "Select * from departamento";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id'] == @$depto) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id'] . "' $style_s>" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>            </td>
            <td>
                <div id='_m'>
                    <label>Municipio residencia</label>
                    <br>
                    <div id="select_m">

                        <?php
                        if ($content == 'edit') {

                            $sql = "select * from municipio where id_depto = " . $depto;
                            $result = $conexion->EjecutarQuery($sql);

                            $return = '<select class="input_txt" name="municipio" id="municipio">';
                            while ($row = mysql_fetch_array($result)) {
                                $style_s = "";
                                if ($row['id_municipio'] == @$municipio) {
                                    $style_s = "selected";
                                }
                                $return .= "<option value='" . $row['id_municipio'] . "' $style_s >" . $row['nombre'] . "</option>";
                            }
                            $return .= '</select>';

                            echo $return;
                        }
                        ?>
                    </div>
                </div>            </td>
        </tr>
        <tr>
            <td>
                <label>Zona residencial</label>
                <br>
                <select class="input_txt" name="zonaresidencia" id="zonaresidencia" >
                    <?php
                    $sql = "select * from tipozona";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = '';
                        if ($row['id'] == @$zonaresidencia) {
                            $style_s = 'selected';
                        }
                        echo "<option value='" . $row['id'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>            </td>
            <td>
                <label>REGIMEN</label>
                <br>
                <select class="input_txt" name="id_regimen" id="id_regimen" onchange="" >
                    <option value=""> [ SELECCIONAR ] </option>
                    <?php
                    $sql = "select * from regimen where 1=1 order by nombre asc";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = '';
                        if ($row['id_regimen'] == @$id_regimen) {
                            $style_s = 'selected';
                        }
                        echo "<option value='" . $row['id_regimen'] . "' $style_s >" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>            </td>
            <td>
               
                    <label>EPS</label>
                    <br>
                 <select class="input_txt" name="id_eps" id="id_eps">
                     <option value=""> [ SELECCIONAR ] </option>
                        <?php
                       

                            $sql = "select * from eps where 1=1 ";
                            $result = $conexion->EjecutarQuery($sql);

                            $return = '';
                            while ($row = mysql_fetch_array($result)) {
                                $style_s = "";
                                if ($row['id_eps'] == @$id_eps) {
                                    $style_s = "selected";
                                }
                               echo "<option value='" . $row['id_eps'] . "' $style_s >" . $row['nombre'] . "</option>";
                            }
                            

                        
                        ?>
                  </select>
            </td>
            <td>
              
                    <label>Tipo afiliacion</label>
                    <br>
                    <select class="input_txt" name="tipoafiliacion" id="tipoafiliacion" >
                        <option> [ NINGUNO ] </option>
                        <?php
                        $sql = "select * from  tipoafiliacion order by nombre asc";
                        $result = $conexion->EjecutarQuery($sql);
                        while ($row = mysql_fetch_array($result)) {
                            $style_s = '';
                            if ($row['id'] == @$tipoafiliacion) {
                                $style_s = 'selected';
                            }
                            echo "<option value='" . $row['id'] . "' $style_s >" . $row['nombre'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
        </tr>
        <tr>
            <td>
                <label></label>
                <label>Raza<br />
              </label>
               
                <select class="input_txt" name="raza" id="raza" >
                  <option selected="selected" value="1"> Mestizo </option>
                  <?php
                        $sql3 = "select * from  raza order by nombre asc";
                        $result3 = $conexion->EjecutarQuery($sql3);
                        while ($row3 = mysql_fetch_array($result3)) {
                            $style_s3 = '';
                            if ($row3['id'] == @$raza) {
                                $style_s3 = 'selected';
                            }
                            echo "<option value='" . $row3['id'] . "' $style_s3 >" . $row3['nombre'] . "</option>";
                        }
                        ?>
                </select>
 <br>
                <select class="input_txt" name="grupo_sanguineo" id="grupo_sanguineo" style="display:none">
                    <option value="AB+" <?php echo @$checked_gs_1 ?> >AB+</option>
                    <option value="AB-" <?php echo @$checked_gs_2 ?> >AB-</option>
                    <option value="A+" <?php echo @$checked_gs_3 ?> >A+</option>
                    <option value="A-" <?php echo @$checked_gs_4 ?> >A-</option>
                    <option value="B+" <?php echo @$checked_gs_5 ?> >B+</option>
                    <option value="B-" <?php echo @$checked_gs_6 ?> >B-</option>
                    <option value="O+" <?php echo @$checked_gs_7 ?> >O+</option>
                    <option value="O-" <?php echo @$checked_gs_8 ?> >O-</option>
                </select></td>
				<td>
                <label>Estado civil</label>
                <br>
                <input class="input_txt" type="text" name="estado civil" id="estado civil" placeholder="estado civil..." value="<?php echo @$estado ?>" />            </td>
            <td>

                <label></label>
                <label>Escolaridad<br />
                </label>
                <select class="input_txt" name="escolaridad" id="escolaridad" >
                  <option selected="selected" value="0"> Primaria </option>
                  <?php
                        $sql31 = "select * from  escolaridad order by nombre asc";
                        $result31 = $conexion->EjecutarQuery($sql31);
                        while ($row31 = mysql_fetch_array($result31)) {
                            $style_s31 = '';
                            if ($row31['id'] == @$escolaridad) {
                                $style_s31 = 'selected';
                            }
                            echo "<option value='" . $row31['id'] . "' $style_s31 >" . $row31['nombre'] . "</option>";
                        }
                        ?>
                </select>
          <br></td>
            <td>

                <label></label>
              <br>
                <select class="input_txt" name="id_tipo_vivienda" id="id_tipo_vivienda" style="display:none" >
                    <?php
                    $sql = "select * from  tipo_vivienda";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = '';
                        if ($row['id_tipo_vivienda'] == @$id_tipo_vivienda) {
                            $style_s = 'selected';
                        }
                        echo "<option value='" . $row['id_tipo_vivienda'] . "' $style_s >" . $row['tipo'] . "</option>";
                    }
                    ?>
                </select></td>
            <td>
                <div style="display:none">
                    <label></label>
                    <input type="hidden" value="" id="id_servicio_publico_" name="id_servicio_publico_" />
                    <br>
                    <select class="input_txt" name="id_servicio_publico" id="id_servicio_publico" multiple="multiple"  >
                        <?PHP
                        $sql = "Select * from servicio_publico order by servicio asc";
                        $result = $conexion->EjecutarQuery($sql);
                        while ($row = mysql_fetch_array($result)) {
                            foreach ($array_id_servicios as $id_servicio) {
                                $style_servicio = '';
                                if ($id_servicio == $row['id_servicio_publico']) {
                                    $style_servicio = " selected='selected' ";
                                    break;
                                }
                            }
                            echo "<option value='" . $row['id_servicio_publico'] . "' $style_servicio >" . $row['servicio'] . "</option>";
                        }
                        ?>
                    </select>
              </div>            </td>
        </tr>
    </table>
<br>

    <label>Ocupacion</label>
    <br>
    <textarea id="ocupacion" name="ocupacion" class="input_txt_area" rows="3" cols="50"><?php echo @$ocupacion ?></textarea>
    <br>

    <font>
    Acudientes
    </font>
    <div id="acudiente">

        <table>
            <tr>

                <td>
                    <label>Nombre</label>
                    <br>
                    <input class="input_txt" type="text" name="acudiente_nombre" id="acudiente_nombre" placeholder="Nombre..." value="<?php echo @$acudiente_nombre ?>" />                    
                </td>
                <td>
                    <label>Edad</label>
                    <br>
                    <input class="input_txt" type="text" name="acudiente_edad" id="acudiente_edad" placeholder="Edad..." value="<?php echo @$acudiente_edad ?>" />
                </td>                
                <td>
                    <label>Telefono</label>
                    <br>
                    <input class="input_txt" type="text" name="acudiente_telefono" id="acudiente_telefono" placeholder="Telefono..." value="<?php echo @$acudiente_telefono ?>" />
                </td>                
                <td>
                    <label>Direccion</label>
                    <br>
                    <input class="input_txt" type="text" name="acudiente_direccion" id="acudiente_direccion" placeholder="Direccion..." value="<?php echo @$acudiente_direccion ?>" />
                </td>

            </tr>
        </table>

    </div>



    <table>

        <tr>

            <td>
                <label>Nombre</label>
                <br>
                <input class="input_txt" type="text" name="acudiente_nombre2" id="acudiente_nombre2" placeholder="Nombre..." value="<?php echo @$acudiente_nombre2 ?>" />                    
            </td>
            <td>
              <label>Tipo parentesco</label>
                <br>
            
                <select class="input_txt" name="tipo_parentesco" id="tipo_parentesco" >
                  <option> [ NINGUNO ] </option>
                  <?php
                        $sql5 = "select * from  tipo_parentesco order by nombre asc";
                        $result5 = $conexion->EjecutarQuery($sql5);
                        while ($row5 = mysql_fetch_array($result5)) {
                            $style_s5 = '';
                            if ($row5['id'] == @$tipo_parentesco) {
                                $style_s5 = 'selected';
                            }
                            echo "<option value='" . $row5['id'] . "' $style_s5 >" . $row5['nombre'] . "</option>";
                        }
                        ?>
                </select>
               </td>                
            <td>
                <label>Telefono</label>
                <br>
                <input class="input_txt" type="text" name="acudiente_telefono2" id="acudiente_telefono2" placeholder="Telefono..." value="<?php echo @$acudiente_telefono2 ?>" />
            </td>                
            <td>
                <label>Direccion</label>
                <br>
                <input class="input_txt" type="text" name="acudiente_direccion2" id="acudiente_direccion2" placeholder="Direccion..." value="<?php echo @$acudiente_direccion2 ?>" />
            </td>

        </tr>

    </table>
    <label></label>
<br>

<textarea id="con_quien_vive" style="display:none" name="con_quien_vive" class="input_txt_area" rows="3" cols="50"><?php echo @$con_quien_vive ?></textarea>
    <br>
    <button id="guardar">Guardar</button>
</form>
