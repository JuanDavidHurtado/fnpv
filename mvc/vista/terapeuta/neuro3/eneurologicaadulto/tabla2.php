<?php
if (isset($_REQUEST['guardar_tabla2']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_tabla2'] == 'new') {

        $sql = "INSERT INTO tabla2 (
`id_tabla2`,
`id_usuario`,
`id_proceso`,
`historia`,
`tb1`,
`tb2`,
`tb3`,
`tb4`,
`tb5`,
`tb6`,
`tb7`,
`tb8`,
`tb9`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`tb10`
) VALUES (
NULL,
'" . $_REQUEST['id_usuario'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['tb1'] . "' ,
'" . $_REQUEST['tb2'] . "' ,
'" . $_REQUEST['tb3'] . "' ,
'" . $_REQUEST['tb4'] . "' ,
'" . $_REQUEST['tb5'] . "' ,
'" . $_REQUEST['tb6'] . "' ,
'" . $_REQUEST['tb7'] . "' ,
'" . $_REQUEST['tb8'] . "' ,
'" . $_REQUEST['tb9'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['tb10'] . "' 
) ";
    } else if ($_REQUEST['id_tabla2'] != '') {

        $sql = "UPDATE tabla2 set 
`id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`tb1` = '" . $_REQUEST['tb1'] . "' ,
`tb2` = '" . $_REQUEST['tb2'] . "' ,
`tb3` = '" . $_REQUEST['tb3'] . "' ,
`tb4` = '" . $_REQUEST['tb4'] . "' ,
`tb5` = '" . $_REQUEST['tb5'] . "' ,
`tb6` = '" . $_REQUEST['tb6'] . "' ,
`tb7` = '" . $_REQUEST['tb7'] . "' ,
`tb8` = '" . $_REQUEST['tb8'] . "' ,
`tb9` = '" . $_REQUEST['tb9'] . "' ,
`tb10` = '" . $_REQUEST['tb10'] . "' WHERE `id_tabla2` = '" . $_REQUEST['id_tabla2'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_tabla2 = 'new';
$sql = "SELECT * from tabla2 WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_tabla2 = $row['id_tabla2'];
    
    $tb1 = $row['tb1'];
    $tb2 = $row['tb2'];
    $tb3 = $row['tb3'];
    $tb4 = $row['tb4'];
    $tb5 = $row['tb5'];
    $tb6 = $row['tb6'];
    $tb7 = $row['tb7'];
    $tb8 = $row['tb8'];
    $tb9 = $row['tb9'];
    $tb10 = $row['tb10'];
    break;
}
?>
<script>

    $(function() {

        $("#close-tabla2").click(function() {
            $("#open-tabla2").show();
            $(this).hide();
            $("#content-tabla2").hide('slow');
        });

        $("#open-tabla2").click(function() {
            $("#close-tabla2").show();
            $(this).hide();
            $("#content-tabla2").show('slow');
        });

    });

</script>
<fieldset id="tabla2">
    <legend align="left"> <div class="arrow-c" id="close-tabla2"></div> <div class="arrow-o" id="open-tabla2" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Asia impairtment scale</font></legend>
    <div id="content-tabla2">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_tabla2" id="guardar_tabla2" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_tabla2" name="form_tabla2" action="<?php echo @$action_form_tabla2 ?>#tabla2" method="post">

            <input type="hidden" id="id_tabla2" name="id_tabla2" value="<?php echo @$id_tabla2 ?>" />
            <style>
                .sin_ul ul li {
                    list-style: none;
                }
            </style>
            <table width="900" border="0" class="data">
                <tr>
                    <td width='300'><h3>Muscle grading</h3></td>
                    <td width='350'><h3>Asia impairtment scale</h3></td>
                    <td><h3>Steps in classification</h3></td>
                </tr>
                <tr >
                    <td valign='top'>
                        <ol>
                            <li>Total paralysis</li>
                            <li>Palpable or visible contraction</li>
                            <li>Active movement, full range of
                                motion, gravity eliminated</li>
                            <li>Active movement, full range of
                                motion, against gravity</li>
                            <li>Active movement, full range of
                                motion, against gravity and provides some
                                resistance</li>
                            <li>Active movement, full range of
                                motion, against gravity and provides normal
                                resistance</li>
                            <li>Muscle able to exert, in ecaminer's judgement,
                                sufficient resistance to be considered normal if
                                identifiable inhibiting factors were not present</li>
                        </ol>
                        NT not testable. Patient unable to realiably exert effort or 
                        muscle unavaible for testing due to factors such as immobilization,
                        pain on effort or contracture.
                    </td>
                    <td valign='top' class="sin_ul">

                        <ul class="text_small">
                            <li>
                                <input type="text" class="input_txt valid" id="tb1" name="tb1" value="<?php echo @$tb1; ?>" />
                                <strong>A = Complete:</strong>
                                No motor or sensory funtion is preserved
                                in the sacral segments S4-S5.
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb2" name="tb2" value="<?php echo @$tb2; ?>" />
                                <strong>B = Incomplete:</strong>
                                Sensory but not motor function is preserved below
                                the neurological lever and includes the 
                                sacral segments S4-S5.
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb3" name="tb3" value="<?php echo @$tb3; ?>" />
                                <strong>C = Incomplete:</strong>
                                Motor function is preserved below the neurologicla
                                level, and more than half of key muscles below
                                the neurological level have a muscle grade less than 3.
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb4" name="tb4" value="<?php echo @$tb4; ?>" />
                                <strong>D = Incomplete:</strong>
                                Motor function is preserved below the neurological
                                level, and at least half of key muscles below
                                the neurological level have a muscle grade of 3
                                or more.
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb5" name="tb5" value="<?php echo @$tb5; ?>" />
                                <strong>E = Normal:</strong>
                                Motor and  sensory function are normal.
                            </li>
                        </ul>
                        <h3>Clinical Syndromes (Optional)</h3>
                        <ul class="text_small">
                            <li>
                                <input type="text" class="input_txt valid" id="tb6" name="tb6" value="<?php echo @$tb6; ?>" />
                                Central Cord
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb7" name="tb7" value="<?php echo @$tb7; ?>" />
                                Brown-Sequard
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb8" name="tb8" value="<?php echo @$tb8; ?>" />
                                Anterior Cord
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb9" name="tb9" value="<?php echo @$tb9; ?>" />
                                Conus Medullaris
                            </li>
                            <li>
                                <input type="text" class="input_txt valid" id="tb10" name="tb10" value="<?php echo @$tb10; ?>" />
                                Cauda Equina
                            </li>
                        </ul>

                    </td>
                    <td valign='top'>
                        The following order is recommended in determining the
                        clasification of individuals whith SCI.
                        <ol>
                            <li><strong>Determine sensoty levels for right and left sides.</strong></li>
                            <li><strong>Determine motor levels for right and left sides. </strong>
                                Note: in regions where there is no myotome to test,
                                the motor level is presumed to be the same as the 
                                sensory level.
                            </li>
                            <li><strong>Determine the single neurological level</strong>
                                This is the lowest segment where motor and sensory function
                                is normal on both sides, and is the most cephalad of the sensoty
                                and motor levels detemined in steps 1 and 2.
                            </li>
                            <li><strong>Determine whether the injury is Complete or Incomplete 
                                    (sacral sparing)</strong>
                                If voluntaru anal contraction = No AND all S4-5 sensory scores = 0
                                AND any anal sensation = NO, then injury is COMPLETE.
                                Otherwise injury is incomplete.
                            </li>
                            <li><strong>Determine ASIA Impairment Scale (AIS) Grade:</strong></li>
                        </ol>
                        <strong>If sensation and motor function is normal in all segments, AIS = E</strong>
                        Note: AIS E is used in follow up testing when an individual with a documented SCI
                        has recovered normal function. If at initial testing ni deficits are found, the 
                        individual is neurologically intact; the ASIA Impainment Scale does not apply.
                    </td>
                </tr>
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>