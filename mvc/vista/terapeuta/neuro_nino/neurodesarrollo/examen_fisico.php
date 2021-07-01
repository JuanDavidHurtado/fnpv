<?php
if (isset($_REQUEST['guardar_h1_inicio_nino1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_inicio_nino'] == 'new') {

        $sql = "INSERT INTO h1_inicio_nino (
`id_h1_inicio_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`ini_piel`,
`ini_cabeza`,
`ini_cintura`,
`ini_columna`,
`ini_caja`,
`ini_abdomen`,
`ini_cinturap`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`ini_mmii`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['ini_piel'] . "' ,
'" . $_REQUEST['ini_cabeza'] . "' ,
'" . $_REQUEST['ini_cintura'] . "' ,
'" . $_REQUEST['ini_columna'] . "' ,
'" . $_REQUEST['ini_caja'] . "' ,
'" . $_REQUEST['ini_abdomen'] . "' ,
'" . $_REQUEST['ini_cinturap'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['ini_mmii'] . "' 
) ";
    } else if ($_REQUEST['id_h1_inicio_nino'] != '') {

        $sql = "UPDATE h1_inicio_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`ini_piel` = '" . $_REQUEST['ini_piel'] . "' ,
`ini_cabeza` = '" . $_REQUEST['ini_cabeza'] . "' ,
`ini_cintura` = '" . $_REQUEST['ini_cintura'] . "' ,
`ini_columna` = '" . $_REQUEST['ini_columna'] . "' ,
`ini_caja` = '" . $_REQUEST['ini_caja'] . "' ,
`ini_abdomen` = '" . $_REQUEST['ini_abdomen'] . "' ,
`ini_cinturap` = '" . $_REQUEST['ini_cinturap'] . "' ,
`ini_mmii` = '" . $_REQUEST['ini_mmii'] . "'  WHERE `id_h1_inicio_nino` = '" . $_REQUEST['id_h1_inicio_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_inicio_nino = 'new';
$sql = "SELECT * from h1_inicio_nino WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_inicio_nino = $row['id_h1_inicio_nino'];
    
    $ini_piel = $row['ini_piel'];
    $ini_cabeza = $row['ini_cabeza'];
    $ini_cintura = $row['ini_cintura'];
    $ini_columna = $row['ini_columna'];
    $ini_caja = $row['ini_caja'];
    $ini_abdomen = $row['ini_abdomen'];
    $ini_cinturap = $row['ini_cinturap'];
    $ini_mmii = $row['ini_mmii'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_inicio_nino1").click(function() {
            $("#open-h1_inicio_nino1").show();
            $(this).hide();
            $("#content-h1_inicio_nino1").hide('slow');
        });

        $("#open-h1_inicio_nino1").click(function() {
            $("#close-h1_inicio_nino1").show();
            $(this).hide();
            $("#content-h1_inicio_nino1").show('slow');
        });

    });

</script>
<fieldset id="h1_inicio_nino1">
    <legend align="left"> <div class="arrow-c" id="close-h1_inicio_nino1"></div> <div class="arrow-o" id="open-h1_inicio_nino1" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Examen fisico</font></legend>
    <div id="content-h1_inicio_nino1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h1_inicio_nino1" id="guardar_h1_inicio_nino1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h1_inicio_nino1" name="form_h1_inicio_nino1" action="<?php echo @$action_form_h1_inicio_nino1 ?>#h1_inicio_nino1" method="post">

            <input type="hidden" id="id_h1_inicio_nino" name="id_h1_inicio_nino" value="<?php echo @$id_h1_inicio_nino ?>" />

            <ol start="2" type="1">
                <ol start="1" type="a">
                    <li><strong>Piel        y anexos:
                            <input type="text" class="input_txt valid" id="ini_piel" name="ini_piel" value="<?php echo @$ini_piel; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="2" type="a">
                    <li><strong>Cabeza        y cuello:
                            <input type="text" class="input_txt valid" id="ini_cabeza" name="ini_cabeza" value="<?php echo @$ini_cabeza; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="3" type="a">
                    <li><strong>Cintura        escapular:
                            <input type="text" class="input_txt valid" id="ini_cintura" name="ini_cintura" value="<?php echo @$ini_cintura; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="4" type="a">
                    <li><strong>Columna:
                            <input type="text" class="input_txt valid" id="ini_columna" name="ini_columna" value="<?php echo @$ini_columna; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="5" type="a">
                    <li><strong>Caja        torácica:
                            <input type="text" class="input_txt valid" id="ini_caja" name="ini_caja" value="<?php echo @$ini_caja; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="6" type="a">
                    <li><strong>Abdomen:
                            <input type="text" class="input_txt valid" id="ini_abdomen" name="ini_abdomen" value="<?php echo @$ini_abdomen; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="7" type="a">
                    <li><strong>Cintura        pélvica:
                            <input type="text" class="input_txt valid" id="ini_cinturap" name="ini_cinturap" value="<?php echo @$ini_cinturap; ?>" />
                        </strong></li>
                </ol>
            </ol>
            <ol start="2" type="1">
                <ol start="8" type="a">
                    <li><strong>MMII:
                            <input type="text" class="input_txt valid" id="ini_mmii" name="ini_mmii" value="<?php echo @$ini_mmii; ?>" />
                        </strong></li>
                </ol>
            </ol>
            
            <br>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>