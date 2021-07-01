<?php

echo "<pre>";
print_r($_REQUEST['diente']);
echo "</pre>";

if (isset($_REQUEST['guardar_hc_odontograma']) && isset($_REQUEST['id_cita'])) {
    @$id_hc_odontograma = "new";


    $sql = "SELECT id 
                FROM `odontograma_observacion` 
                WHERE `historia` = '{$_REQUEST['historia']}'
                and `id_vinicial` = '{$_REQUEST['id_vinicial']}'";

    $result = $conexion->EjecutarQuery($sql);
    $bool = false;
    while ($row = mysql_fetch_row($result)) {
        $bool = true;
        break;
    }

    if (!$bool) {
        $sql = "INSERT INTO `odontograma_observacion` 
                    (`historia`, `id_usuario`, `id_proceso`, 
                     `id_cita`, `id_vinicial`, `id_revaloracion`, 
                     `observacion`) 
                VALUES ('{$_REQUEST['historia']}', '{$_SESSION['id_usuario']}', '{$_REQUEST['id_proceso']}',
                        '{$_REQUEST['acc_c']}', '{$_REQUEST['id_vinicial']}', '{$_REQUEST['id_revaloracion']}', 
                        '');";

        $conexion->EjecutarQuery($sql);
        //echo "No existe<br>";
    }

    $sql_update = "UPDATE  `odontograma_observacion` 
                           SET  `observacion` =  '{$_REQUEST['odontograma_observacion']}'
                         WHERE  `historia` = '{$_REQUEST['historia']}' and               
                                `id_vinicial` ='{$_REQUEST['id_vinicial']}' ";
    //echo "<br>";
    $conexion->EjecutarQuery($sql_update);

    /*     * ****************** */


    foreach ($_POST['diente'] as $diente => $posiciones) {
        $sql = "SELECT id 
                FROM `odontograma` 
                WHERE `historia` = '{$_REQUEST['historia']}'
                and `id_vinicial` = '{$_REQUEST['id_vinicial']}' 
                and `id_diente` = '{$diente}' ";

        //echo "<br>";

        $result = $conexion->EjecutarQuery($sql);
        $bool = false;
        while ($row = mysql_fetch_row($result)) {
            $bool = true;
            break;
        }

        if (!$bool) {
            $sql = "INSERT INTO `odontograma` 
                    (`historia`, `id_usuario`, `id_proceso`, 
                     `id_cita`, `id_vinicial`, `id_revaloracion`, 
                     `id_diente`) 
                VALUES ('{$_REQUEST['historia']}', '{$_SESSION['id_usuario']}', '{$_REQUEST['id_proceso']}',
                        '{$_REQUEST['acc_c']}', '{$_REQUEST['id_vinicial']}', '{$_REQUEST['id_revaloracion']}', 
                        '{$diente}');";

            $conexion->EjecutarQuery($sql);
            //echo "<br>No existe<br>";
        }

        
        /*echo "<pre>";
        print_r($posiciones);
        echo "</pre>";*/
        
        $sql_update = "UPDATE  `odontograma` 
                           SET  `estado` =  '{$estado}',
                                `posicion_0` =  '{$posiciones[0]}',
                                `posicion_1` =  '{$posiciones[1]}',
                                `posicion_2` =  '{$posiciones[2]}',
                                `posicion_3` =  '{$posiciones[3]}',
                                `posicion_4` =  '{$posiciones[4]}',
                                `posicion_5` =  '{$posiciones[5]}'
                         WHERE  `id_diente` =  '{$diente}' and
                                `historia` = '{$_REQUEST['historia']}' and               
                                `id_vinicial` ='{$_REQUEST['id_vinicial']}'
            ";
        //echo "<br>";
        $conexion->EjecutarQuery($sql_update);
    }

    /* echo "-----------";
      echo "<pre>";
      print_r($_POST['diente']);
      echo "-----------";
      print_r($_REQUEST);
      echo "</pre>"; */
}

$sql = "SELECT observacion 
               FROM `odontograma_observacion` 
               WHERE `historia` = '{$_REQUEST['historia']}'
               and `id_vinicial` = '{$_REQUEST['id_vinicial']}'";

$result_ob = $conexion->EjecutarQuery($sql);
$row1 = mysql_fetch_row($result_ob);
$observacion_odontograma = $row1[0];
?>
<script>

    $(function() {

        $("#close-hc_odontograma").click(function() {
            $("#open-hc_odontograma").show();
            $(this).hide();
            $("#content-hc_odontograma").hide('slow');
        });

        $("#open-hc_odontograma").click(function() {
            $("#close-hc_odontograma").show();
            $(this).hide();
            $("#content-hc_odontograma").show('slow');
        });

    });

</script>

<fieldset id="hc_odontograma">
    <legend align="left"> <div class="arrow-c" id="close-hc_odontograma"></div> <div class="arrow-o" id="open-hc_odontograma" ></div> 
        <font>Odontología</font></legend>
    <div id="content-hc_odontograma">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_hc_odontograma" id="guardar_hc_odontograma" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_hc_odontograma" name="form_hc_odontograma" action="<?php echo @$action_form_hc_odontograma ?>#hc_odontograma" method="post">


            <div align="center">

                <input type="hidden" class="input_txt valid" id="id_hc_odontograma" name="id_hc_odontograma" value="<?php echo @$id_hc_odontograma; ?>" />
                ODONTOGRAMA

                <BR>
            </div>

            <?php
            Utils::getTableOdontograma();
            ?>

            <!-- *** inicio odontograma *** -->

            <div id="vestibular">

                <table>
                    <tr>
                        <td colspan="16" ><center>Vestibular</center></td>
                    </tr>
                    <tr>
                        <td><?php Utils::getDiente(18, $conexion); ?></td>
                        <td><?php Utils::getDiente(17, $conexion); ?></td>
                        <td><?php Utils::getDiente(16, $conexion); ?></td>
                        <td><?php Utils::getDiente(15, $conexion); ?></td>
                        <td><?php Utils::getDiente(14, $conexion); ?></td>
                        <td><?php Utils::getDiente(13, $conexion); ?></td>
                        <td><?php Utils::getDiente(12, $conexion); ?></td>
                        <td><?php Utils::getDiente(11, $conexion); ?></td>
                        <td><?php Utils::getDiente(21, $conexion); ?></td>
                        <td><?php Utils::getDiente(22, $conexion); ?></td>
                        <td><?php Utils::getDiente(23, $conexion); ?></td>
                        <td><?php Utils::getDiente(24, $conexion); ?></td>
                        <td><?php Utils::getDiente(25, $conexion); ?></td>
                        <td><?php Utils::getDiente(26, $conexion); ?></td>
                        <td><?php Utils::getDiente(27, $conexion); ?></td>
                        <td><?php Utils::getDiente(28, $conexion); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php Utils::getDiente(55, $conexion); ?></td>
                        <td><?php Utils::getDiente(54, $conexion); ?></td>
                        <td><?php Utils::getDiente(53, $conexion); ?></td>
                        <td><?php Utils::getDiente(52, $conexion); ?></td>
                        <td><?php Utils::getDiente(51, $conexion); ?></td>
                        <td><?php Utils::getDiente(61, $conexion); ?></td>
                        <td><?php Utils::getDiente(62, $conexion); ?></td>
                        <td><?php Utils::getDiente(63, $conexion); ?></td>
                        <td><?php Utils::getDiente(64, $conexion); ?></td>
                        <td><?php Utils::getDiente(65, $conexion); ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" ><center>Derecho</center></td>
                    <td colspan="10" ><center>Linguales</center></td>
                    <td colspan="3" ><center>Izquierdo</center></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php Utils::getDiente(85, $conexion); ?></td>
                        <td><?php Utils::getDiente(84, $conexion); ?></td>
                        <td><?php Utils::getDiente(83, $conexion); ?></td>
                        <td><?php Utils::getDiente(82, $conexion); ?></td>
                        <td><?php Utils::getDiente(81, $conexion); ?></td>
                        <td><?php Utils::getDiente(71, $conexion); ?></td>
                        <td><?php Utils::getDiente(72, $conexion); ?></td>
                        <td><?php Utils::getDiente(73, $conexion); ?></td>
                        <td><?php Utils::getDiente(74, $conexion); ?></td>
                        <td><?php Utils::getDiente(75, $conexion); ?></td>

                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?php Utils::getDiente(48, $conexion); ?></td>
                        <td><?php Utils::getDiente(47, $conexion); ?></td>
                        <td><?php Utils::getDiente(46, $conexion); ?></td>
                        <td><?php Utils::getDiente(45, $conexion); ?></td>
                        <td><?php Utils::getDiente(44, $conexion); ?></td>
                        <td><?php Utils::getDiente(43, $conexion); ?></td>
                        <td><?php Utils::getDiente(42, $conexion); ?></td>
                        <td><?php Utils::getDiente(41, $conexion); ?></td>
                        <td><?php Utils::getDiente(31, $conexion); ?></td>
                        <td><?php Utils::getDiente(32, $conexion); ?></td>
                        <td><?php Utils::getDiente(33, $conexion); ?></td>
                        <td><?php Utils::getDiente(34, $conexion); ?></td>
                        <td><?php Utils::getDiente(35, $conexion); ?></td>
                        <td><?php Utils::getDiente(36, $conexion); ?></td>
                        <td><?php Utils::getDiente(37, $conexion); ?></td>
                        <td><?php Utils::getDiente(38, $conexion); ?></td>

                    </tr>
                    <tr>
                        <td colspan="16" ><center>Vestibular</center></td>
                    </tr>
                </table>
            </div>
            <br>
            <label>Estadistica</label>
            <br>
            <div id="estadistica">
                
            </div>
            <br>
            <label>Observacion</label>
            <br>
            <textarea name="odontograma_observacion" id="odontograma_observacion"><?php echo @$observacion_odontograma; ?></textarea>
            <br>

            <?php echo @$button ?>

            <!-- *** fin odontograma *** -->

        </form>
    </div>
    <a href='#' onclick='imprSelec("content-hc_odontograma", true)' class="no_print">Imprimir</a>
</fieldset>
