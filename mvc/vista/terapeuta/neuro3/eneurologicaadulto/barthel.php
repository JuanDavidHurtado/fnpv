<?php
if (isset($_REQUEST['guardar_escala_barthel']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_escala_barthel'] == 'new') {

       $sql = "INSERT INTO escala_barthel (
`id_escala_barthel`,
`c_t_independiente`,
`c_ayuda`,
`c_dependiente`,
`l_independiente`,
`l_dependiente`,
`v_independiente`,
`v_ayuda`,
`v_dependiente`,
`ar_independiente`,
`ar_dependiente`,
`de_continecial`,
`de_ocacional`,
`de_incontinencia`,
`mi_continencia`,
`mi_epidodio`,
`mi_incontinencia`,
`san_independiente`,
`san_ayuda`,
`san_dependiente`,
`tra_independiente`,
`tra_minima`,
`tra_ayuda`,
`tra_dependiente`,
`dea_independiente`,
`dea_ayuda`,
`dea_silla`,
`dea_dependiente`,
`esc_independiente`,
`esc_ayuda`,
`esc_dependiente`,
`barthel_resultado`,
`barthel_observacion`,
`id_proceso`,
`id_usuario`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`historia`
) VALUES (
NULL,
'" . $_REQUEST['c_t_independiente'] . "' ,
'" . $_REQUEST['c_ayuda'] . "' ,
'" . $_REQUEST['c_dependiente'] . "' ,
'" . $_REQUEST['l_independiente'] . "' ,
'" . $_REQUEST['l_dependiente'] . "' ,
'" . $_REQUEST['v_independiente'] . "' ,
'" . $_REQUEST['v_ayuda'] . "' ,
'" . $_REQUEST['v_dependiente'] . "' ,
'" . $_REQUEST['ar_independiente'] . "' ,
'" . $_REQUEST['ar_dependiente'] . "' ,
'" . $_REQUEST['de_continecial'] . "' ,
'" . $_REQUEST['de_ocacional'] . "' ,
'" . $_REQUEST['de_incontinencia'] . "' ,
'" . $_REQUEST['mi_continencia'] . "' ,
'" . $_REQUEST['mi_epidodio'] . "' ,
'" . $_REQUEST['mi_incontinencia'] . "' ,
'" . $_REQUEST['san_independiente'] . "' ,
'" . $_REQUEST['san_ayuda'] . "' ,
'" . $_REQUEST['san_dependiente'] . "' ,
'" . $_REQUEST['tra_independiente'] . "' ,
'" . $_REQUEST['tra_minima'] . "' ,
'" . $_REQUEST['tra_ayuda'] . "' ,
'" . $_REQUEST['tra_dependiente'] . "' ,
'" . $_REQUEST['dea_independiente'] . "' ,
'" . $_REQUEST['dea_ayuda'] . "' ,
'" . $_REQUEST['dea_silla'] . "' ,
'" . $_REQUEST['dea_dependiente'] . "' ,
'" . $_REQUEST['esc_independiente'] . "' ,
'" . $_REQUEST['esc_ayuda'] . "' ,
'" . $_REQUEST['esc_dependiente'] . "' ,
'" . $_REQUEST['barthel_resultado'] . "' ,
'" . $_REQUEST['barthel_observacion'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['id_usuario'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['historia'] . "'
) ";
    } else if ($_REQUEST['id_escala_barthel'] != '') {

       $sql = "UPDATE escala_barthel set
`c_t_independiente` = '" . $_REQUEST['c_t_independiente'] . "' ,
`c_ayuda` = '" . $_REQUEST['c_ayuda'] . "' ,
`c_dependiente` = '" . $_REQUEST['c_dependiente'] . "' ,
`l_independiente` = '" . $_REQUEST['l_independiente'] . "' ,
`l_dependiente` = '" . $_REQUEST['l_dependiente'] . "' ,
`v_independiente` = '" . $_REQUEST['v_independiente'] . "' ,
`v_ayuda` = '" . $_REQUEST['v_ayuda'] . "' ,
`v_dependiente` = '" . $_REQUEST['v_dependiente'] . "' ,
`ar_independiente` = '" . $_REQUEST['ar_independiente'] . "' ,
`ar_dependiente` = '" . $_REQUEST['ar_dependiente'] . "' ,
`de_continecial` = '" . $_REQUEST['de_continecial'] . "' ,
`de_ocacional` = '" . $_REQUEST['de_ocacional'] . "' ,
`de_incontinencia` = '" . $_REQUEST['de_incontinencia'] . "' ,
`mi_continencia` = '" . $_REQUEST['mi_continencia'] . "' ,
`mi_epidodio` = '" . $_REQUEST['mi_epidodio'] . "' ,
`mi_incontinencia` = '" . $_REQUEST['mi_incontinencia'] . "' ,
`san_independiente` = '" . $_REQUEST['san_independiente'] . "' ,
`san_ayuda` = '" . $_REQUEST['san_ayuda'] . "' ,
`san_dependiente` = '" . $_REQUEST['san_dependiente'] . "' ,
`tra_independiente` = '" . $_REQUEST['tra_independiente'] . "' ,
`tra_minima` = '" . $_REQUEST['tra_minima'] . "' ,
`tra_ayuda` = '" . $_REQUEST['tra_ayuda'] . "' ,
`tra_dependiente` = '" . $_REQUEST['tra_dependiente'] . "' ,
`dea_independiente` = '" . $_REQUEST['dea_independiente'] . "' ,
`dea_ayuda` = '" . $_REQUEST['dea_ayuda'] . "' ,
`dea_silla` = '" . $_REQUEST['dea_silla'] . "' ,
`dea_dependiente` = '" . $_REQUEST['dea_dependiente'] . "' ,
`esc_independiente` = '" . $_REQUEST['esc_independiente'] . "' ,
`esc_ayuda` = '" . $_REQUEST['esc_ayuda'] . "' ,
`esc_dependiente` = '" . $_REQUEST['esc_dependiente'] . "' ,
`barthel_resultado` = '" . $_REQUEST['barthel_resultado'] . "' ,
`barthel_observacion` = '" . $_REQUEST['barthel_observacion'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' WHERE `id_escala_barthel` = '" . $_REQUEST['id_escala_barthel'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_escala_barthel = 'new';
$sql = "SELECT * from escala_barthel WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "'  ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_escala_barthel = $row['id_escala_barthel'];
    $c_t_independiente = $row['c_t_independiente'];
    $c_ayuda = $row['c_ayuda'];
    $c_dependiente = $row['c_dependiente'];
    $l_independiente = $row['l_independiente'];
    $l_dependiente = $row['l_dependiente'];
    $v_independiente = $row['v_independiente'];
    $v_ayuda = $row['v_ayuda'];
    $v_dependiente = $row['v_dependiente'];
    $ar_independiente = $row['ar_independiente'];
    $ar_dependiente = $row['ar_dependiente'];
    $de_continecial = $row['de_continecial'];
    $de_ocacional = $row['de_ocacional'];
    $de_incontinencia = $row['de_incontinencia'];
    $mi_continencia = $row['mi_continencia'];
    $mi_epidodio = $row['mi_epidodio'];
    $mi_incontinencia = $row['mi_incontinencia'];
    $san_independiente = $row['san_independiente'];
    $san_ayuda = $row['san_ayuda'];
    $san_dependiente = $row['san_dependiente'];
    $tra_independiente = $row['tra_independiente'];
    $tra_minima = $row['tra_minima'];
    $tra_ayuda = $row['tra_ayuda'];
    $tra_dependiente = $row['tra_dependiente'];
    $dea_independiente = $row['dea_independiente'];
    $dea_ayuda = $row['dea_ayuda'];
    $dea_silla = $row['dea_silla'];
    $dea_dependiente = $row['dea_dependiente'];
    $esc_independiente = $row['esc_independiente'];
    $esc_ayuda = $row['esc_ayuda'];
    $esc_dependiente = $row['esc_dependiente'];
    $barthel_resultado = $row['barthel_resultado'];
    $barthel_observacion = $row['barthel_observacion'];
    $id_proceso = $row['id_proceso'];
    $id_usuario = $row['id_usuario'];
    $id_historia = $row['id_historia'];
    break;
}
?>
<script>

    $(function() {

        $("#close-escala_barthel").click(function() {
            $("#open-escala_barthel").show();
            $(this).hide();
            $("#content-escala_barthel").hide('slow');
        });

        $("#open-escala_barthel").click(function() {
            $("#close-escala_barthel").show();
            $(this).hide();
            $("#content-escala_barthel").show('slow');
        });

    });

</script>
<fieldset id="escala_barthel">
    <legend align="left"> <div class="arrow-c" id="close-escala_barthel"></div> <div class="arrow-o" id="open-escala_barthel" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - ABC</font></legend>
    <div id="content-escala_barthel">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_escala_barthel" id="guardar_escala_barthel" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_escala_barthel" name="form_escala_barthel" action="<?php echo @$action_form_escala_barthel ?>#escala_barthel" method="post">

            <input type="hidden" id="id_escala_barthel" name="id_escala_barthel" value="<?php echo @$id_escala_barthel ?>" />

            <H2>ESCALA DE BARTHEL</H2>
            
            <table width="786"  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="142">PARAMETRO</td>
                    <td width="361">SITUACION DEL PACIENTE</td>
                    <td width="173">PUNTAJE</td>
                </tr>
                <tr>
                    <td rowspan="3">COMER</td>
                    <td width="449" valign="top"><p align="left">Totalmente independiente </p></td>
                    <td><input type="text" class="input_txt valid" id="c_t_independiente" name="c_t_independiente" value="<?php echo @$c_t_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Necesita ayuda para cortar carne, el pan, etc.</p></td>
                    <td><input type="text" class="input_txt valid" id="c_ayuda" name="c_ayuda" value="<?php echo @$c_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="c_dependiente" name="c_dependiente" value="<?php echo @$c_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="2">LAVARSE</td>
                    <td width="449" valign="top"><p align="left">Independiente: entra y sale solo del baño  </p></td>
                    <td><input type="text" class="input_txt valid" id="l_independiente" name="l_independiente" value="<?php echo @$l_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="l_dependiente" name="l_dependiente" value="<?php echo @$l_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="3">VESTIRSE</td>
                    <td width="449" valign="top"><p align="left">Independiente: capaz de ponerse y de quitarse la    ropa, abotonarse, atarse los zapatos  </p></td>
                    <td><input type="text" class="input_txt valid" id="v_independiente" name="v_independiente" value="<?php echo @$v_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Necesita ayuda </p></td>
                    <td><input type="text" class="input_txt valid" id="v_ayuda" name="v_ayuda" value="<?php echo @$v_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="v_dependiente" name="v_dependiente" value="<?php echo @$v_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="2">ARREGLARSE</td>
                    <td width="449" valign="top"><p align="left">Independiente para lavarse la cara, las manos,    peinarse, afeitarse, maquillarse, etc. </p></td>
                    <td><input type="text" class="input_txt valid" id="ar_independiente" name="ar_independiente" value="<?php echo @$ar_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="ar_dependiente" name="ar_dependiente" value="<?php echo @$ar_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="3">DEPOSICION (última semana)</td>
                    <td width="449" valign="top"><p align="left">Continencia normal  </p></td>
                    <td><input type="text" class="input_txt valid" id="de_continecial" name="de_continecial" value="<?php echo @$de_continecial; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Ocasionalmente algún episodio de incontinencia, o    necesita ayuda para administrarse supositorios o lavativas</p></td>
                    <td><input type="text" class="input_txt valid" id="de_ocacional" name="de_ocacional" value="<?php echo @$de_ocacional; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Incontinencia</p></td>
                    <td><input type="text" class="input_txt valid" id="de_incontinencia" name="de_incontinencia" value="<?php echo @$de_incontinencia; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="3">MICCION (última semana)</td>
                    <td width="449" valign="top"><p align="left">Continencia normal, o es capaz de cuidarse de la    sonda si tiene una puesta </p></td>
                    <td><input type="text" class="input_txt valid" id="mi_continencia" name="mi_continencia" value="<?php echo @$mi_continencia; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Un episodio diario como máximo de incontinencia, o    necesita ayuda para cuidar de la sonda </p></td>
                    <td><input type="text" class="input_txt valid" id="mi_epidodio" name="mi_epidodio" value="<?php echo @$mi_epidodio; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Incontinencia</p></td>
                    <td><input type="text" class="input_txt valid" id="mi_incontinencia" name="mi_incontinencia" value="<?php echo @$mi_incontinencia; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="3">USO DEL SANITARIO</td>
                    <td width="449" valign="top"><p align="left">Independiente para ir al cuarto de aseo, quitarse y    ponerse la ropa...  </p></td>
                    <td><input type="text" class="input_txt valid" id="san_independiente" name="san_independiente" value="<?php echo @$san_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Necesita ayuda para ir al retrete, pero se limpia    solo</p></td>
                    <td><input type="text" class="input_txt valid" id="san_ayuda" name="san_ayuda" value="<?php echo @$san_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="san_dependiente" name="san_dependiente" value="<?php echo @$san_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="4">TRASLADOS</td>
                    <td width="449" valign="top"><p align="left">Independiente para ir del sillón a la cama  </p></td>
                    <td><input type="text" class="input_txt valid" id="tra_independiente" name="tra_independiente" value="<?php echo @$tra_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Mínima ayuda física o supervisión para hacerlo </p></td>
                    <td><input type="text" class="input_txt valid" id="tra_minima" name="tra_minima" value="<?php echo @$tra_minima; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Necesita gran ayuda, pero es capaz de mantenerse    sentado solo </p></td>
                    <td><input type="text" class="input_txt valid" id="tra_ayuda" name="tra_ayuda" value="<?php echo @$tra_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="tra_dependiente" name="tra_dependiente" value="<?php echo @$tra_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="4">DEAMBULACION</td>
                    <td width="449" valign="top"><p align="left">Independiente, camina solo 50 metros  </p></td>
                    <td><input type="text" class="input_txt valid" id="dea_independiente" name="dea_independiente" value="<?php echo @$dea_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Necesita ayuda física    o supervisión para caminar 50 metros </p></td>
                    <td><input type="text" class="input_txt valid" id="dea_ayuda" name="dea_ayuda" value="<?php echo @$dea_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Independiente en silla de ruedas sin ayuda </p></td>
                    <td><input type="text" class="input_txt valid" id="dea_silla" name="dea_silla" value="<?php echo @$dea_silla; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="dea_dependiente" name="dea_dependiente" value="<?php echo @$dea_dependiente; ?>" /></td>
                </tr>
                <tr>
                    <td rowspan="3">ESCALONES</td>
                    <td width="449" valign="top"><p align="left">Independiente para bajar y subir escaleras  </p></td>
                    <td><input type="text" class="input_txt valid" id="esc_independiente" name="esc_independiente" value="<?php echo @$esc_independiente; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" valign="top"><p align="left">Necesita ayuda física o supervisión para hacerlo </p></td>
                    <td><input type="text" class="input_txt valid" id="esc_ayuda" name="esc_ayuda" value="<?php echo @$esc_ayuda; ?>" /></td>
                </tr>
                <tr>
                    <td width="449" height="29" valign="top"><p>Dependiente</p></td>
                    <td><input type="text" class="input_txt valid" id="esc_dependiente" name="esc_dependiente" value="<?php echo @$esc_dependiente; ?>" /></td>
                </tr>
            </table>
            <br>
            RESULTADO:<br>
            <textarea class="input_txt valid" id="barthel_resultado" name="barthel_resultado"><?php echo @$barthel_resultado; ?></textarea>
            <br>
            OBSERVACIÓN:<br>
            <textarea class="input_txt valid" id="barthel_observacion" name="barthel_observacion"><?php echo @$barthel_observacion; ?></textarea>
            <br>
            <p><strong>PUNTUACION (silla de ruedas sobre 90)</strong></p>
            <table border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="158" valign="top"><br />
                        <strong>RESULTADO</strong></td>
                    <td width="233" valign="top"><p align="center"><strong>GRADO DE    DEPENDENCIA</strong></p></td>
                </tr>
                <tr>
                    <td width="158" valign="top"><p align="center"><strong>&lt;</strong><strong>20</strong></p></td>
                    <td width="233" valign="top"><p align="center"><strong>total</strong></p></td>
                </tr>
                <tr>
                    <td width="158" valign="top"><p align="center"><strong>20 – 35</strong></p></td>
                    <td width="233" valign="top"><p align="center"><strong>Grave</strong></p></td>
                </tr>
                <tr>
                    <td width="158" valign="top"><p align="center"><strong>40 – 55</strong></p></td>
                    <td width="233" valign="top"><p align="center"><strong>Moderado</strong></p></td>
                </tr>
                <tr>
                    <td width="158" valign="top"><p align="center"> <strong>&gt;  60</strong></p></td>
                    <td width="233" valign="top"><p align="center"><strong>Leve</strong></p></td>
                </tr>
                <tr>
                    <td width="158" valign="top"><p align="center"><strong>100</strong></p></td>
                    <td width="233" valign="top"><p align="center"><strong>Independiente</strong></p></td>
                </tr>
            </table>
            <br>
            <br>

            <input type="hidden" class="input_txt valid" id="id_escala_barthel" name="id_escala_barthel" value="<?php echo @$id_escala_barthel; ?>" />

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>