<?php
if (isset($_REQUEST['guardar_rto_sistema_prioceptivo']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_sistema_prioceptivo'] == 'new') {

        $sql = "INSERT INTO rto_sistema_prioceptivo (
        `id_rto_sistema_prioceptivo`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `secuencia_dmotor`,
        `secuencia_dsecuencia`,
        `secuencia_dno`,
        `movimientos_dmotor`,
        `movimientos_dsecuencia`,
        `movimientos_dno`,
        `diadoko_dmotor`,
        `diadoko_dsecuencia`,
        `diadoko_dno`,
        `flexion_dmotor`,
        `flexion_dsecuencia`,
        `flexion_dno`,
        `extension_dmotor`,
        `extension_dsecuencia`,
        `extension_dno`,
        `extension_pro_dmotor`,
        `extension_pro_dsecuencia`,
        `id_cita`,
        `id_vinicial`,
        `extension_pro_dno`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['secuencia_dmotor'] . "' ,
        '" . $_REQUEST['secuencia_dsecuencia'] . "' ,
        '" . $_REQUEST['secuencia_dno'] . "' ,
        '" . $_REQUEST['movimientos_dmotor'] . "' ,
        '" . $_REQUEST['movimientos_dsecuencia'] . "' ,
        '" . $_REQUEST['movimientos_dno'] . "' ,
        '" . $_REQUEST['diadoko_dmotor'] . "' ,
        '" . $_REQUEST['diadoko_dsecuencia'] . "' ,
        '" . $_REQUEST['diadoko_dno'] . "' ,
        '" . $_REQUEST['flexion_dmotor'] . "' ,
        '" . $_REQUEST['flexion_dsecuencia'] . "' ,
        '" . $_REQUEST['flexion_dno'] . "' ,
        '" . $_REQUEST['extension_dmotor'] . "' ,
        '" . $_REQUEST['extension_dsecuencia'] . "' ,
        '" . $_REQUEST['extension_dno'] . "' ,
        '" . $_REQUEST['extension_pro_dmotor'] . "' ,
        '" . $_REQUEST['extension_pro_dsecuencia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['extension_pro_dno'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_sistema_prioceptivo'] != '') {

        $sql = "UPDATE rto_sistema_prioceptivo set 
        `secuencia_dmotor` = '" . $_REQUEST['secuencia_dmotor'] . "' ,
        `secuencia_dsecuencia` = '" . $_REQUEST['secuencia_dsecuencia'] . "' ,
        `secuencia_dno` = '" . $_REQUEST['secuencia_dno'] . "' ,
        `movimientos_dmotor` = '" . $_REQUEST['movimientos_dmotor'] . "' ,
        `movimientos_dsecuencia` = '" . $_REQUEST['movimientos_dsecuencia'] . "' ,
        `movimientos_dno` = '" . $_REQUEST['movimientos_dno'] . "' ,
        `diadoko_dmotor` = '" . $_REQUEST['diadoko_dmotor'] . "' ,
        `diadoko_dsecuencia` = '" . $_REQUEST['diadoko_dsecuencia'] . "' ,
        `diadoko_dno` = '" . $_REQUEST['diadoko_dno'] . "' ,
        `flexion_dmotor` = '" . $_REQUEST['flexion_dmotor'] . "' ,
        `flexion_dsecuencia` = '" . $_REQUEST['flexion_dsecuencia'] . "' ,
        `flexion_dno` = '" . $_REQUEST['flexion_dno'] . "' ,
        `extension_dmotor` = '" . $_REQUEST['extension_dmotor'] . "' ,
        `extension_dsecuencia` = '" . $_REQUEST['extension_dsecuencia'] . "' ,
        `extension_dno` = '" . $_REQUEST['extension_dno'] . "' ,
        `extension_pro_dmotor` = '" . $_REQUEST['extension_pro_dmotor'] . "' ,
        `extension_pro_dsecuencia` = '" . $_REQUEST['extension_pro_dsecuencia'] . "' ,
        `extension_pro_dno` = '" . $_REQUEST['extension_pro_dno'] . "' WHERE `id_rto_sistema_prioceptivo` = '" . $_REQUEST['id_rto_sistema_prioceptivo'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_sistema_prioceptivo = 'new';
$sql = "SELECT * from rto_sistema_prioceptivo WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_sistema_prioceptivo = $row['id_rto_sistema_prioceptivo'];
    $secuencia_dmotor = $row['secuencia_dmotor'];
    $secuencia_dsecuencia = $row['secuencia_dsecuencia'];
    $secuencia_dno = $row['secuencia_dno'];
    $movimientos_dmotor = $row['movimientos_dmotor'];
    $movimientos_dsecuencia = $row['movimientos_dsecuencia'];
    $movimientos_dno = $row['movimientos_dno'];
    $diadoko_dmotor = $row['diadoko_dmotor'];
    $diadoko_dsecuencia = $row['diadoko_dsecuencia'];
    $diadoko_dno = $row['diadoko_dno'];
    $flexion_dmotor = $row['flexion_dmotor'];
    $flexion_dsecuencia = $row['flexion_dsecuencia'];
    $flexion_dno = $row['flexion_dno'];
    $extension_dmotor = $row['extension_dmotor'];
    $extension_dsecuencia = $row['extension_dsecuencia'];
    $extension_dno = $row['extension_dno'];
    $extension_pro_dmotor = $row['extension_pro_dmotor'];
    $extension_pro_dsecuencia = $row['extension_pro_dsecuencia'];
    $extension_pro_dno = $row['extension_pro_dno'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rto_sistema_prioceptivo").click(function(){
            $("#open-rto_sistema_prioceptivo").show();
            $(this).hide();
            $("#content-rto_sistema_prioceptivo").hide('slow');
        });

        $("#open-rto_sistema_prioceptivo").click(function(){
            $("#close-rto_sistema_prioceptivo").show();
            $(this).hide();
            $("#content-rto_sistema_prioceptivo").show('slow');
        });

    });

</script>
<fieldset id="rto_sistema_prioceptivo">
    <legend align="left"> <div class="arrow-c" id="close-rto_sistema_prioceptivo"></div> <div class="arrow-o" id="open-rto_sistema_prioceptivo" ></div> <font>Valoracion terapia ocupacional - Sistema Prioceptivo</font></legend>
    <div id="content-rto_sistema_prioceptivo">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_sistema_prioceptivo" id="guardar_rto_sistema_prioceptivo" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_sistema_prioceptivo" name="form_rto_sistema_prioceptivo" action="<?php echo @$action_form_rto_sistema_prioceptivo ?>#rto_sistema_prioceptivo" method="post">

            <input type="hidden" id="id_rto_sistema_prioceptivo" name="id_rto_sistema_prioceptivo" value="<?php echo @$id_rto_sistema_prioceptivo ?>" />


            <table width="700" height="138" border="0" cellpadding="0" cellspacing="0" class="data">
                <tr class="row1">
                    <th colspan="2" scope="col">Secuenciamiento</th>
                    <th width="184" scope="col">Deficit de planeamiento motor</th>
                    <th width="166" scope="col">Deficit de secuenciamiento</th>
                    <th width="158" scope="col">No Eval</th>
                </tr>
                <tr class="row1">
                    <td width="76" rowspan="6"><b>Pruebas postulares</b></td>
                    <td width="116"><b>Secuencias ritmicas</b></td>
                    <td><input type="text" class="input_txt valid" id="secuencia_dmotor" name="secuencia_dmotor" value="<?php echo @$secuencia_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="secuencia_dsecuencia" name="secuencia_dsecuencia" value="<?php echo @$secuencia_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="secuencia_dno" name="secuencia_dno" value="<?php echo @$secuencia_dno; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Movimientos digitales puros</b></td>
                    <td><input type="text" class="input_txt valid" id="movimientos_dmotor" name="movimientos_dmotor" value="<?php echo @$movimientos_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="movimientos_dsecuencia" name="movimientos_dsecuencia" value="<?php echo @$movimientos_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="movimientos_dno" name="movimientos_dno" value="<?php echo @$movimientos_dno; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Diadoko sinesias</b></td>
                    <td><input type="text" class="input_txt valid" id="diadoko_dmotor" name="diadoko_dmotor" value="<?php echo @$diadoko_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="diadoko_dsecuencia" name="diadoko_dsecuencia" value="<?php echo @$diadoko_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="diadoko_dno" name="diadoko_dno" value="<?php echo @$diadoko_dno; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Flexion supino contra gravedad</b></td>
                    <td><input type="text" class="input_txt valid" id="flexion_dmotor" name="flexion_dmotor" value="<?php echo @$flexion_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="flexion_dsecuencia" name="flexion_dsecuencia" value="<?php echo @$flexion_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="flexion_dno" name="flexion_dno" value="<?php echo @$flexion_dno; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Extension de brazos</b></td>
                    <td><input type="text" class="input_txt valid" id="extension_dmotor" name="extension_dmotor" value="<?php echo @$extension_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="extension_dsecuencia" name="extension_dsecuencia" value="<?php echo @$extension_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="extension_dno" name="extension_dno" value="<?php echo @$extension_dno; ?>" />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Extension prono gravedad</b></td>
                    <td><input type="text" class="input_txt valid" id="extension_pro_dmotor" name="extension_pro_dmotor" value="<?php echo @$extension_pro_dmotor; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="extension_pro_dsecuencia" name="extension_pro_dsecuencia" value="<?php echo @$extension_pro_dsecuencia; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="extension_pro_dno" name="extension_pro_dno" value="<?php echo @$extension_pro_dno; ?>" />
                    </td>
                </tr>
            </table>



            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>