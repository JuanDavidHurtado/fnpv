<?php
if (isset($_REQUEST['guardar_rto_percepcion_corporal']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rto_percepcion_corporal'] == 'new') {

        $sql = "INSERT INTO rto_percepcion_corporal (
        `id_rto_percepcion_corporal`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `gruesas_en_si`,
        `gruesas_en_otr`,
        `gruesas_en_la`,
        `articulares_en_si`,
        `articulares_en_otr`,
        `articulares_en_la`,
        `finas_en_si`,
        `finas_en_otr`,
        `id_cita`,
        `id_vinicial`,
        `finas_en_la`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['gruesas_en_si'] . "' ,
        '" . $_REQUEST['gruesas_en_otr'] . "' ,
        '" . $_REQUEST['gruesas_en_la'] . "' ,
        '" . $_REQUEST['articulares_en_si'] . "' ,
        '" . $_REQUEST['articulares_en_otr'] . "' ,
        '" . $_REQUEST['articulares_en_la'] . "' ,
        '" . $_REQUEST['finas_en_si'] . "' ,
        '" . $_REQUEST['finas_en_otr'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['finas_en_la'] . "' 
        ) ";
    } else if ($_REQUEST['id_rto_percepcion_corporal'] != '') {

        $sql = "UPDATE rto_percepcion_corporal set 
        `gruesas_en_si` = '" . $_REQUEST['gruesas_en_si'] . "' ,
        `gruesas_en_otr` = '" . $_REQUEST['gruesas_en_otr'] . "' ,
        `gruesas_en_la` = '" . $_REQUEST['gruesas_en_la'] . "' ,
        `articulares_en_si` = '" . $_REQUEST['articulares_en_si'] . "' ,
        `articulares_en_otr` = '" . $_REQUEST['articulares_en_otr'] . "' ,
        `articulares_en_la` = '" . $_REQUEST['articulares_en_la'] . "' ,
        `finas_en_si` = '" . $_REQUEST['finas_en_si'] . "' ,
        `finas_en_otr` = '" . $_REQUEST['finas_en_otr'] . "' ,
        `finas_en_la` = '" . $_REQUEST['finas_en_la'] . "' WHERE `id_rto_percepcion_corporal` = '" . $_REQUEST['id_rto_percepcion_corporal'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rto_percepcion_corporal = 'new';
$sql = "SELECT * from rto_percepcion_corporal WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "'  ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rto_percepcion_corporal = $row['id_rto_percepcion_corporal'];

    $gruesas_en_si = $row['gruesas_en_si'] == 1 ? ' checked="checked" ' : '';
    $gruesas_en_otr = $row['gruesas_en_otr'] == 1 ? ' checked="checked" ' : '';
    $gruesas_en_la = $row['gruesas_en_la'] == 1 ? ' checked="checked" ' : '';
    $articulares_en_si = $row['articulares_en_si'] == 1 ? ' checked="checked" ' : '';
    $articulares_en_otr = $row['articulares_en_otr'] == 1 ? ' checked="checked" ' : '';
    $articulares_en_la = $row['articulares_en_la'] == 1 ? ' checked="checked" ' : '';
    $finas_en_si = $row['finas_en_si'] == 1 ? ' checked="checked" ' : '';
    $finas_en_otr = $row['finas_en_otr'] == 1 ? ' checked="checked" ' : '';
    $finas_en_la = $row['finas_en_la'] == 1 ? ' checked="checked" ' : '';

    break;
}
?>
<script>

    $(function(){

        $("#close-rto_percepcion_corporal").click(function(){
            $("#open-rto_percepcion_corporal").show();
            $(this).hide();
            $("#content-rto_percepcion_corporal").hide('slow');
        });

        $("#open-rto_percepcion_corporal").click(function(){
            $("#close-rto_percepcion_corporal").show();
            $(this).hide();
            $("#content-rto_percepcion_corporal").show('slow');
        });

    });

</script>
<fieldset id="rto_percepcion_corporal">
    <legend align="left"> <div class="arrow-c" id="close-rto_percepcion_corporal"></div> <div class="arrow-o" id="open-rto_percepcion_corporal" ></div> <font>Valoracion terapia ocupacional - Percepcion Corporal</font></legend>
    <div id="content-rto_percepcion_corporal">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rto_percepcion_corporal" id="guardar_rto_percepcion_corporal" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rto_percepcion_corporal" name="form_rto_percepcion_corporal" action="<?php echo @$action_form_rto_percepcion_corporal ?>#rto_percepcion_corporal" method="post">

            <input type="hidden" id="id_rto_percepcion_corporal" name="id_rto_percepcion_corporal" value="<?php echo @$id_rto_percepcion_corporal ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td><b></b></td>
                    <td><b>En si mismo</b></td>
                    <td><b>En otra perrsona</b></td>
                    <td><b>En laminas</b></td>
                </tr>
                <tr class="row1">
                    <td><b>Gruesas</b></td>
                    <td><input type="checkbox" class="" id="gruesas_en_si" name="gruesas_en_si" value="1" <?php echo @$gruesas_en_si; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="gruesas_en_otr" name="gruesas_en_otr" value="1" <?php echo @$gruesas_en_otr; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="gruesas_en_la" name="gruesas_en_la" value="1" <?php echo @$gruesas_en_la; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Articulares</b></td>
                    <td><input type="checkbox" class="" id="articulares_en_si" name="articulares_en_si" value="1" <?php echo @$articulares_en_si; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="articulares_en_otr" name="articulares_en_otr" value="1" <?php echo @$articulares_en_otr; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="articulares_en_la" name="articulares_en_la" value="1" <?php echo @$articulares_en_la; ?> />
                    </td>
                </tr>
                <tr class="row1">
                    <td><b>Finas</b></td>
                    <td><input type="checkbox" class="" id="finas_en_si" name="finas_en_si" value="1" <?php echo @$finas_en_si; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="finas_en_otr" name="finas_en_otr" value="1" <?php echo @$finas_en_otr; ?> />
                    </td>
                    <td><input type="checkbox" class="" id="finas_en_la" name="finas_en_la" value="1" <?php echo @$finas_en_la; ?> />
                    </td>
                </tr>   
            </table>
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>