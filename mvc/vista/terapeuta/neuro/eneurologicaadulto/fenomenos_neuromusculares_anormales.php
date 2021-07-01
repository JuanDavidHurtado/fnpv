 <?php
if (isset($_REQUEST['guardar_ner_fuerza_musculares1']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_ner_fuerza_musculares'] == 'new') {

        $sql = "INSERT INTO ner_fuerza_musculares (
`id_ner_fuerza_musculares`,
`id_usuario`,
`historia`,
`f1`,
`f2`,
`f3`,
`f4`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`id_proceso`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['f1'] . "' ,
'" . $_REQUEST['f2'] . "' ,
'" . $_REQUEST['f3'] . "' ,
'" . $_REQUEST['f4'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['id_proceso'] . "' 
) ";
    } else if ($_REQUEST['id_ner_fuerza_musculares'] != '') {

        $sql = "UPDATE ner_fuerza_musculares set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['historia'] . "' ,
`f1` = '" . $_REQUEST['f1'] . "' ,
`f2` = '" . $_REQUEST['f2'] . "' ,
`f3` = '" . $_REQUEST['f3'] . "' ,
`f4` = '" . $_REQUEST['f4'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "'
 WHERE `id_ner_fuerza_musculares` = '" . $_REQUEST['id_ner_fuerza_musculares'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_ner_fuerza_musculares = 'new';
$sql = "SELECT * from ner_fuerza_musculares WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_ner_fuerza_musculares = $row['id_ner_fuerza_musculares'];
    
    $f1 = $row['f1'];
    $f2 = $row['f2'];
    $f3 = $row['f3'];
    $f4 = $row['f4'];
    
    break;
}
?>
<script>

    $(function() {

        $("#close-ner_fuerza_musculares1").click(function() {
            $("#open-ner_fuerza_musculares1").show();
            $(this).hide();
            $("#content-ner_fuerza_musculares1").hide('slow');
        });

        $("#open-ner_fuerza_musculares1").click(function() {
            $("#close-ner_fuerza_musculares1").show();
            $(this).hide();
            $("#content-ner_fuerza_musculares1").show('slow');
        });

    });

</script>
<fieldset id="ner_fuerza_musculares1">
    <legend align="left"> <div class="arrow-c" id="close-ner_fuerza_musculares1"></div> <div class="arrow-o" id="open-ner_fuerza_musculares1" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Fenomenos neuromusculares anormales</font></legend>
    <div id="content-ner_fuerza_musculares1">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button name="guardar_ner_fuerza_musculares1" id="guardar_ner_fuerza_musculares1" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form class="" id="form_ner_fuerza_musculares1" name="form_ner_fuerza_musculares1" action="<?php echo @$action_form_ner_fuerza_musculares1 ?>#ner_fuerza_musculares1" method="post">

            <input type="hidden" id="id_ner_fuerza_musculares" name="id_ner_fuerza_musculares" value="<?php echo @$id_ner_fuerza_musculares ?>" />

            Ninguno: <input type="text" class="input_txt valid" id="f1" name="f1" value="<?php echo @$f1; ?>" /> Navaja: <input type="text" class="input_txt valid" id="f2" name="f2" value="<?php echo @$f2; ?>" /> Tubo de Plomo: <input type="text" class="input_txt valid" id="f3" name="f3" value="<?php echo @$f3; ?>" /> Rueda Dentada: <input type="text" class="input_txt valid" id="f4" name="f4" value="<?php echo @$f4; ?>" />
            
            <br>
            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>