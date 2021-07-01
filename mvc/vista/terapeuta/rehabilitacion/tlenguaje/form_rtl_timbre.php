<?php
if (isset($_REQUEST['guardar_rtl_timbre']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtl_timbre'] == 'new') {

        $sql = "INSERT INTO rtl_timbre (
        `id_rtl_timbre`,
        `id_proceso`,
        `id_usuario`,
        `historia`,
        `id_cita`,
        `id_vinicial`,
        `t9_timbre`
        ) VALUES (
        NULL,
        '" . $_REQUEST['id_proceso'] . "' ,
        '" . $_SESSION['id_usuario'] . "' ,
        '" . $_REQUEST['historia'] . "' ,
        '" . $_REQUEST['id_cita'] . "' ,
        '" . $_REQUEST['id_vinicial'] . "' ,
        '" . $_REQUEST['t9_timbre'] . "' 
        ) ";
    } else if ($_REQUEST['id_rtl_timbre'] != '') {

        $sql = "UPDATE rtl_timbre set 
        `t9_timbre` = '" . $_REQUEST['t9_timbre'] . "' WHERE `id_rtl_timbre` = '" . $_REQUEST['id_rtl_timbre'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_rtl_timbre = 'new';
$sql = "SELECT * from rtl_timbre WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtl_timbre = $row['id_rtl_timbre'];

    if ($row['t9_timbre'] == 1)
        $t9_timbre_1 = " checked='checked' ";
    if ($row['t9_timbre'] == 2)
        $t9_timbre_2 = " checked='checked' ";
    if ($row['t9_timbre'] == 3)
        $t9_timbre_3 = " checked='checked' ";
    if ($row['t9_timbre'] == 4)
        $t9_timbre_4 = " checked='checked' ";
    if ($row['t9_timbre'] == 5)
        $t9_timbre_5 = " checked='checked' ";
    if ($row['t9_timbre'] == 6)
        $t9_timbre_6 = " checked='checked' ";




    break;
}
?>
<script>

    $(function(){

        $("#close-rtl_timbre").click(function(){
            $("#open-rtl_timbre").show();
            $(this).hide();
            $("#content-rtl_timbre").hide('slow');
        });

        $("#open-rtl_timbre").click(function(){
            $("#close-rtl_timbre").show();
            $(this).hide();
            $("#content-rtl_timbre").show('slow');
        });

    });

</script>
<fieldset id="rtl_timbre">
    <legend align="left"> <div class="arrow-c" id="close-rtl_timbre"></div> <div class="arrow-o" id="open-rtl_timbre" ></div> <font>Valoracion terapia lenguaje - Timbre</font></legend>
    <div id="content-rtl_timbre">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_rtl_timbre" id="guardar_rtl_timbre" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtl_timbre" name="form_rtl_timbre" action="<?php echo @$action_form_rtl_timbre ?>#rtl_timbre" method="post">

            <input type="hidden" id="id_rtl_timbre" name="id_rtl_timbre" value="<?php echo @$id_rtl_timbre ?>" />

            Estridente <input type="radio" class="" id="" name="t9_timbre" value="1" <?php echo @$t9_timbre_1; ?> />,
            Ronco <input type="radio" class="" id="" name="t9_timbre" value="2" <?php echo @$t9_timbre_2; ?> />,
            Carrasposo <input type="radio" class="" id="" name="t9_timbre" value="3" <?php echo @$t9_timbre_3; ?> />,
            Opaco <input type="radio" class="" id="" name="t9_timbre" value="4" <?php echo @$t9_timbre_4; ?> />,
            Soplado <input type="radio" class="" id="" name="t9_timbre" value="5" <?php echo @$t9_timbre_5; ?> />,
            Disfonico <input type="radio" class="" id="" name="t9_timbre" value="6" <?php echo @$t9_timbre_6; ?> />


            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>