<?php
if (isset($_REQUEST['guardar_h1_neurologico_nino']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h1_neurologico_nino'] == 'new') {

         $sql = "INSERT INTO h1_neurologico_nino (
`id_h1_neurologico_nino`,
`id_usuario`,
`historia`,
`id_proceso`,
`n_aparente`,
`n_cabeza_cu`,
`n_cintura`,
`n_torax`,
`n_abdomen`,
`n_columna`,
`n_extre_supe`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`n_extre_info`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['n_aparente'] . "' ,
'" . $_REQUEST['n_cabeza_cu'] . "' ,
'" . $_REQUEST['n_cintura'] . "' ,
'" . $_REQUEST['n_torax'] . "' ,
'" . $_REQUEST['n_abdomen'] . "' ,
'" . $_REQUEST['n_columna'] . "' ,
'" . $_REQUEST['n_extre_supe'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['n_extre_info'] . "'
) ";
    } else if ($_REQUEST['id_h1_neurologico_nino'] != '') {

        $sql = "UPDATE h1_neurologico_nino set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`n_aparente` = '" . $_REQUEST['n_aparente'] . "' ,
`n_cabeza_cu` = '" . $_REQUEST['n_cabeza_cu'] . "' ,
`n_cintura` = '" . $_REQUEST['n_cintura'] . "' ,
`n_torax` = '" . $_REQUEST['n_torax'] . "' ,
`n_abdomen` = '" . $_REQUEST['n_abdomen'] . "' ,
`n_columna` = '" . $_REQUEST['n_columna'] . "' ,
`n_extre_supe` = '" . $_REQUEST['n_extre_supe'] . "' ,
`n_extre_info` = '" . $_REQUEST['n_extre_info'] . "' WHERE `id_h1_neurologico_nino` = '" . $_REQUEST['id_h1_neurologico_nino'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h1_neurologico_nino = 'new';
$sql = "SELECT * from h1_neurologico_nino WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h1_neurologico_nino = $row['id_h1_neurologico_nino'];

    $n_aparente = $row['n_aparente'];
    $n_cabeza_cu = $row['n_cabeza_cu'];
    $n_cintura = $row['n_cintura'];
    $n_torax = $row['n_torax'];
    $n_abdomen = $row['n_abdomen'];
    $n_columna = $row['n_columna'];
    $n_extre_supe = $row['n_extre_supe'];
    $n_extre_info = $row['n_extre_info'];
    break;
}
?>
<script>

    $(function() {

        $("#close-h1_neurologico_nino").click(function() {
            $("#open-h1_neurologico_nino").show();
            $(this).hide();
            $("#content-h1_neurologico_nino").hide('slow');
        });

        $("#open-h1_neurologico_nino").click(function() {
            $("#close-h1_neurologico_nino").show();
            $(this).hide();
            $("#content-h1_neurologico_nino").show('slow');
        });

    });

</script>
<fieldset id="h1_neurologico_nino">
    <legend align="left"> <div class="arrow-c" id="close-h1_neurologico_nino"></div> <div class="arrow-o" id="open-h1_neurologico_nino" ></div> <font>Valoracion fisioterapia de neurodesarrollo - Evaluacion por sistemas</font></legend>
    <div id="content-h1_neurologico_nino">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_h1_neurologico_nino" id="guardar_h1_neurologico_nino" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_h1_neurologico_nino" name="form_h1_neurologico_nino" action="<?php echo @$action_form_h1_neurologico_nino ?>#h1_neurologico_nino" method="post">

            <input type="hidden" id="id_h1_neurologico_nino" name="id_h1_neurologico_nino" value="<?php echo @$id_h1_neurologico_nino ?>" />


            <input type="hidden" class="input_txt valid" id="id_h1_neurologico_nino" name="id_h1_neurologico_nino" value="<?php echo @$id_h1_neurologico_nino; ?>" />

            <strong>C. NEUROLÓGICO:</strong>
            <p><strong>TONO: </strong></p>
            <ul type="disc">
                <li><strong>aparente
                        <input type="text" class="input_txt valid" id="n_aparente" name="n_aparente" value="<?php echo @$n_aparente; ?>" />
                    </strong></li>
            </ul>
            <ul type="disc">
                <li><strong>Real       (según aswhorth modificado):</strong></li>
            </ul>
            <ul>
                <ul>
                    <li><strong>Cabeza y  cuello:
                            <input type="text" class="input_txt valid" id="n_cabeza_cu" name="n_cabeza_cu" value="<?php echo @$n_cabeza_cu; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Cintura  escapular:
                            <input type="text" class="input_txt valid" id="n_cintura" name="n_cintura" value="<?php echo @$n_cintura; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Tórax:
                            <input type="text" class="input_txt valid" id="n_torax" name="n_torax" value="<?php echo @$n_torax; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Abdomen:
                            <input type="text" class="input_txt valid" id="n_abdomen" name="n_abdomen" value="<?php echo @$n_abdomen; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Columna:
                            <input type="text" class="input_txt valid" id="n_columna" name="n_columna" value="<?php echo @$n_columna; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Extremidades  superiores:
                            <input type="text" class="input_txt valid" id="n_extre_supe" name="n_extre_supe" value="<?php echo @$n_extre_supe; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <ul>
                <ul>
                    <li><strong>Extremidades  inferiores:
                            <input type="text" class="input_txt valid" id="n_extre_info" name="n_extre_info" value="<?php echo @$n_extre_info; ?>" />
                        </strong></li>
                </ul>
            </ul>
            <table  border="0" class="data" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="884" valign="top"><p align="left"><strong>0:</strong> Tono muscular    normal.<br />
                            <strong>1:</strong> Hipertonía leve. Aumento en el tono muscular con    “detención” en el movimiento pasivo de la   <br />
                            extremidad, mínima resistencia en menos de la mitad de su arco de    movimiento.<br />
                            <strong>2:</strong> Hipertonía moderada. Aumento del tono muscular    durante la mayor parte del arco de, pero<br />
                            movimiento puede moverse    pasivamente con facilidad la parte afectada.<br />
                            <strong>3:</strong> Hipertonía intensa. Aumento prominente del tono    muscular, con dificultad para efectuar los<br />
                            movimientos pasivos.<br />
                            <strong>4:</strong> Hipertonía extrema. La parte afectada permanece    rígida, tanto para la flexión como para la <br />
                            extensión.</p></td>
                </tr>
            </table>

            <br>
<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>