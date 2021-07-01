<?php
$array_id_servicios = array();
$identificacion = @$_REQUEST['identificacion'];

if (@$_REQUEST['acc'] == 'new') {
    echo "a";
   
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
                `ocupacion` = '" . $_REQUEST['ocupacion'] . "'
                 WHERE  `paciente`.`historia` =" . $_REQUEST['historia'] . ";";

    //$result = $conexion->EjecutarQuery(strtoupper($sql));

    $historia = $_REQUEST['historia'];

    $sql_delete_s = "Delete from paciente_servicio where id_paciente = " . $historia;
    //$conexion->EjecutarQuery($sql_delete_s);

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
$sql = "select p.*, e.id_regimen
            from paciente as p inner join eps as e on p.id_eps = e.id_eps 
            where p.identificacion='" . $_REQUEST['identificacion'] . "' ";

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

        #content_welcome {

            position:relative;
            top:0px;
            font-size: 16px;
             background-color: rgba(0,0,0,0.5);
            border: 1px solid #000;
        }

        #text_welcome {
            left: 22px;
            position: relative;
        }

    .dependencia_{
        display: none;
    }



</style>


<?php echo @$msg ?>


<br />

    <input type="hidden" name="acc" id="acc" value="<?php echo $content; ?>" />
    <input type="hidden" name="historia" id="historia" value="<?php echo @$historia; ?>" />
    <table border="0" cellpading="0" cellspacing="0">
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
                    <label>Estrato<br />
                    </label>
                    <select class="input_txt" name="id_estrato" id="id_estrato" >
                      <?php
                    $sql = "select * from  estrato";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = '';
                        if ($row['id_estrato'] == @$id_estrato) {
                            $style_s = 'selected';
                        }
                        echo "<option value='" . $row['id_estrato'] . "' $style_s >" . $row['estrato'] . "</option>";
                    }
                    ?>
                    </select>
                    <br>
                    <input class="input_txt" type="hidden" name="historia" id="historia" readonly="readonly" value="<?php echo @$historia ?>" />
                   
                    <?php
}
?></td>
            <td>
                <?php
                if ($content == 'edit') {
                    ?>
                    <label>Edad</label>
                    <br>
                    <input class="input_txt" type="text" name="edad" id="edad" readonly="readonly" value="<?php echo @$edad ?>" />
    <?php
}
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
                    $sql = "Select * from acto";
                    $result = $conexion->EjecutarQuery($sql);
                    while ($row = mysql_fetch_array($result)) {
                        $style_s = "";
                        if ($row['id_acto'] == @$depto_n) {
                            $style_s = "selected";
                        }
                        echo "<option value='" . $row['id_acto'] . "' $style_s >" . $row['nombre'] . "</option>";
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
                <label>Depto recidencia</label>
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
                    <label>Municipio recidencia</label>
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
                <select class="input_txt" name="id_regimen" id="id_regimen" onchange="load_eps()" >
                    <option value=""> [ SELECCIONAR ] </option>
                    <?php
                    $sql = "select * from regimen order by nombre asc";
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
                <div class="l_eps">
                    <label>EPS</label>
                    <br>
                    <div id="c_eps">
                        <?php
                        if ($content == 'edit') {

                            $sql = "select * from eps where true";
                            $result = $conexion->EjecutarQuery($sql);

                            $return = '<select class="input_txt" name="id_eps_2" id="id_eps_2">';
                            while ($row = mysql_fetch_array($result)) {
                                $style_s = "";
                                if ($row['id_eps'] == @$id_eps) {
                                    $style_s = "selected";
                                }
                                $return .= "<option value='" . $row['id_eps'] . "' $style_s >" . $row['nombre'] . "</option>";
                            }
                            $return .= '</select>';

                            echo $return;
                        }
                        ?>
                    </div>
                </div>            </td>
            <td>
                <div class="l_eps">
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
                                $style_s = "selected='selected'";
                            }
                            echo "<option value='" . $row['id'] . "' $style_s >" . $row['nombre'] . "</option>";
                        }
                        ?>
                    </select>
                </div>            </td>
        </tr>
    </table>
    <br />

