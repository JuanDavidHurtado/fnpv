<?php
if (isset($_REQUEST['guardar_h2_patrones3']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_h2_patrones'] == 'new') {

        $sql = "INSERT INTO h2_patrones (
`id_h2_patrones`,
`id_usuario`,
`historia`,
`id_proceso`,
`aa_b`,
`aa_r`,
`aa_m`,
`ad_b`,
`ad_r`,
`ad_m`,
`ce_b`,
`ce_r`,
`ce_m`,
`en_b`,
`en_r`,
`en_m`,
`den_b`,
`den_r`,
`den_m`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`patro_obser4`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['aa_b'] . "' ,
'" . $_REQUEST['aa_r'] . "' ,
'" . $_REQUEST['aa_m'] . "' ,
'" . $_REQUEST['ad_b'] . "' ,
'" . $_REQUEST['ad_r'] . "' ,
'" . $_REQUEST['ad_m'] . "' ,
'" . $_REQUEST['ce_b'] . "' ,
'" . $_REQUEST['ce_r'] . "' ,
'" . $_REQUEST['ce_m'] . "' ,
'" . $_REQUEST['en_b'] . "' ,
'" . $_REQUEST['en_r'] . "' ,
'" . $_REQUEST['en_m'] . "' ,
'" . $_REQUEST['den_b'] . "' ,
'" . $_REQUEST['den_r'] . "' ,
'" . $_REQUEST['den_m'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['patro_obser4'] . "'
) ";
    } else if ($_REQUEST['id_h2_patrones'] != '') {

        $sql = "UPDATE h2_patrones set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`aa_b` = '" . $_REQUEST['aa_b'] . "' ,
`aa_r` = '" . $_REQUEST['aa_r'] . "' ,
`aa_m` = '" . $_REQUEST['aa_m'] . "' ,
`ad_b` = '" . $_REQUEST['ad_b'] . "' ,
`ad_r` = '" . $_REQUEST['ad_r'] . "' ,
`ad_m` = '" . $_REQUEST['ad_m'] . "' ,
`ce_b` = '" . $_REQUEST['ce_b'] . "' ,
`ce_r` = '" . $_REQUEST['ce_r'] . "' ,
`ce_m` = '" . $_REQUEST['ce_m'] . "' ,
`en_b` = '" . $_REQUEST['en_b'] . "' ,
`en_r` = '" . $_REQUEST['en_r'] . "' ,
`en_m` = '" . $_REQUEST['en_m'] . "' ,
`den_b` = '" . $_REQUEST['den_b'] . "' ,
`den_r` = '" . $_REQUEST['den_r'] . "' ,
`den_m` = '" . $_REQUEST['den_m'] . "' ,
`patro_obser4` = '" . $_REQUEST['patro_obser4'] . "' 
 WHERE `id_h2_patrones` = '" . $_REQUEST['id_h2_patrones'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_h2_patrones = 'new';
$sql = "SELECT * from h2_patrones WHERE `historia` = '" . $_REQUEST['historia'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_h2_patrones = $row['id_h2_patrones'];
    $aa_b = $row['aa_b'];
    $aa_r = $row['aa_r'];
    $aa_m = $row['aa_m'];
    $ad_b = $row['ad_b'];
    $ad_r = $row['ad_r'];
    $ad_m = $row['ad_m'];
    $ce_b = $row['ce_b'];
    $ce_r = $row['ce_r'];
    $ce_m = $row['ce_m'];
    $en_b = $row['en_b'];
    $en_r = $row['en_r'];
    $en_m = $row['en_m'];
    $den_b = $row['den_b'];
    $den_r = $row['den_r'];
    $den_m = $row['den_m'];
    $patro_obser4 = $row['patro_obser4'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-h2_patrones3").click(function() {
            $("#open-h2_patrones3").show();
            $(this).hide();
            $("#content-h2_patrones3").hide('slow');
        });

        $("#open-h2_patrones3").click(function() {
            $("#close-h2_patrones3").show();
            $(this).hide();
            $("#content-h2_patrones3").show('slow');
        });

    });

</script>
<fieldset id="h2_patrones3">
    <legend align="left"> <div class="arrow-c" id="close-h2_patrones3"></div> <div class="arrow-o" id="open-h2_patrones3" ></div> <font>Valoracion terapia ocupacional neurorehabilitacion - Percepcion Espacial</font></legend>
    <div id="content-h2_patrones3">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_h2_patrones3" id="guardar_h2_patrones3" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_h2_patrones3" name="form_h2_patrones3" action="<?php echo @$action_form_h2_patrones3 ?>#h2_patrones3" method="post">

            <input type="hidden" id="id_h2_patrones" name="id_h2_patrones" value="<?php echo @$id_h2_patrones ?>" />


            <table  border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="227"><p align="center">&nbsp;</p></td>
                    <td width="227"><p align="center">BUENA</p></td>
                    <td width="227"><p align="center">REGULAR</p></td>
                    <td width="227"><p align="center">MALA</p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Arriba  -     Abajo</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa_b" name="aa_b" value="<?php echo @$aa_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa_r" name="aa_r" value="<?php echo @$aa_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="aa_m" name="aa_m" value="<?php echo @$aa_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Adelante  -  Atrás</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ad_b" name="ad_b" value="<?php echo @$ad_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ad_r" name="ad_r" value="<?php echo @$ad_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ad_m" name="ad_m" value="<?php echo @$ad_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Cerca   -     Lejos</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ce_b" name="ce_b" value="<?php echo @$ce_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ce_r" name="ce_r" value="<?php echo @$ce_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="ce_m" name="ce_m" value="<?php echo @$ce_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Encima  -     Debajo</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="en_b" name="en_b" value="<?php echo @$en_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="en_r" name="en_r" value="<?php echo @$en_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="en_m" name="en_m" value="<?php echo @$en_m; ?>" />
                        </p></td>
                </tr>
                <tr>
                    <td width="227" valign="top"><p>Dentro -   Fuera.</p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="den_b" name="den_b" value="<?php echo @$den_b; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="den_r" name="den_r" value="<?php echo @$den_r; ?>" />
                        </p></td>
                    <td width="227" valign="top"><p>
                            <input type="text" class="input_txt valid" id="den_m" name="den_m" value="<?php echo @$den_m; ?>" />
                        </p></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>OBSERVACIONES:
                <input type="text" class="input_txt valid" id="patro_obser4" name="patro_obser4" value="<?php echo @$patro_obser4; ?>" />
            </p>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>