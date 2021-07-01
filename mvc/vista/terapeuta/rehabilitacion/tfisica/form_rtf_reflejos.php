<?php
if (isset($_REQUEST['guardar_rtf_reflejos']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_rtf_reflejos'] == 'new') {

        $sql = "INSERT INTO rtf_reflejos (
            `id_rtf_reflejos`,
            `id_proceso`,
            `id_usuario`,
            `historia`,
            `patalear_derecho`,
            `patalear_izquierdo`,
            `aquiliano_derecho`,
            `aquiliano_izquierdo`,
            `bicipital_derecho`,
            `bicipital_izquierdo`,
            `tricipital_derecho`,
            `tricipital_izquierdo`,
            `estilo_radical_derecho`,
            `id_cita`,
            `id_vinicial`,
            `estilo_radical_izquierdo`
            ) VALUES (
            NULL,
            '" . $_REQUEST['id_proceso'] . "' ,
            '" . $_SESSION['id_usuario'] . "' ,
            '" . $_REQUEST['historia'] . "' ,
            '" . $_REQUEST['patalear_derecho'] . "' ,
            '" . $_REQUEST['patalear_izquierdo'] . "' ,
            '" . $_REQUEST['aquiliano_derecho'] . "' ,
            '" . $_REQUEST['aquiliano_izquierdo'] . "' ,
            '" . $_REQUEST['bicipital_derecho'] . "' ,
            '" . $_REQUEST['bicipital_izquierdo'] . "' ,
            '" . $_REQUEST['tricipital_derecho'] . "' ,
            '" . $_REQUEST['tricipital_izquierdo'] . "' ,
            '" . $_REQUEST['estilo_radical_derecho'] . "' ,
            '" . $_REQUEST['id_cita'] . "' ,
            '" . $_REQUEST['id_vinicial'] . "' ,
            '" . $_REQUEST['estilo_radical_izquierdo'] . "' 
            ) ";
    } else if ($_REQUEST['id_rtf_reflejos'] != '') {

        $sql = "UPDATE rtf_reflejos set 
        `id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
        `id_usuario` = '" . $_REQUEST['id_usuario'] . "' ,
        `historia` = '" . $_REQUEST['historia'] . "' ,
        `patalear_derecho` = '" . $_REQUEST['patalear_derecho'] . "' ,
        `patalear_izquierdo` = '" . $_REQUEST['patalear_izquierdo'] . "' ,
        `aquiliano_derecho` = '" . $_REQUEST['aquiliano_derecho'] . "' ,
        `aquiliano_izquierdo` = '" . $_REQUEST['aquiliano_izquierdo'] . "' ,
        `bicipital_derecho` = '" . $_REQUEST['bicipital_derecho'] . "' ,
        `bicipital_izquierdo` = '" . $_REQUEST['bicipital_izquierdo'] . "' ,
        `tricipital_derecho` = '" . $_REQUEST['tricipital_derecho'] . "' ,
        `tricipital_izquierdo` = '" . $_REQUEST['tricipital_izquierdo'] . "' ,
        `estilo_radical_derecho` = '" . $_REQUEST['estilo_radical_derecho'] . "' ,
        `estilo_radical_izquierdo` = '" . $_REQUEST['estilo_radical_izquierdo'] . "' WHERE `id_rtf_reflejos` = '" . $_REQUEST['id_rtf_reflejos'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}

$id_rtf_reflejos = 'new';
$sql = "SELECT * from rtf_reflejos WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_rtf_reflejos = $row['id_rtf_reflejos'];
    $patalear_derecho = $row['patalear_derecho'];
    $patalear_izquierdo = $row['patalear_izquierdo'];
    $aquiliano_derecho = $row['aquiliano_derecho'];
    $aquiliano_izquierdo = $row['aquiliano_izquierdo'];
    $bicipital_derecho = $row['bicipital_derecho'];
    $bicipital_izquierdo = $row['bicipital_izquierdo'];
    $tricipital_derecho = $row['tricipital_derecho'];
    $tricipital_izquierdo = $row['tricipital_izquierdo'];
    $estilo_radical_derecho = $row['estilo_radical_derecho'];
    $estilo_radical_izquierdo = $row['estilo_radical_izquierdo'];
    break;
}
?>
<script>

    $(function(){

        $("#close-rtf-reflejos").click(function(){
            $("#open-rtf-reflejos").show();
            $(this).hide();
            $("#content-rtf-reflejos").hide('slow');
        });
        
        $("#open-rtf-reflejos").click(function(){
            $("#close-rtf-reflejos").show();
            $(this).hide();
            $("#content-rtf-reflejos").show('slow');
        });
    
    });

</script>
<fieldset id="rtf-reflejos">
    <legend align="left"> <div class="arrow-c" id="close-rtf-reflejos"></div> <div class="arrow-o" id="open-rtf-reflejos" ></div> <font>Valoracion terapia fisica - Reflejos</font></legend>
    <div id="content-rtf-reflejos">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_rtf_reflejos" id="guardar_rtf_reflejos" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_rtf_reflejos" name="form_rtf_reflejos" action="<?php echo @$action_form_reflejos ?>#rtf-reflejos" method="post">

            <input type="hidden" id="id_rtf_reflejos" name="id_rtf_reflejos" value="<?php echo @$id_rtf_reflejos ?>" />

            <table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td>Reflejo</td>
                    <td>Derecho</td>
                    <td>Izquierdo</td>
                </tr>
                <tr class="row1">
                    <td>Patelar</td>
                    <td>
                        <input type="text" class="input_txt valid" id="patalear_derecho" name="patalear_derecho" value="<?php echo @$patalear_derecho; ?>" />
                    </td>
                    <td>
                        <input type="text" class="input_txt valid" id="patalear_izquierdo" name="patalear_izquierdo" value="<?php echo @$patalear_izquierdo; ?>" />

                    </td>
                </tr>

                <tr class="row1">
                    <td>Alquilano</td>
                    <td><input type="text" class="input_txt valid" id="aquiliano_derecho" name="aquiliano_derecho" value="<?php echo @$aquiliano_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="aquiliano_izquierdo" name="aquiliano_izquierdo" value="<?php echo @$aquiliano_izquierdo; ?>" />
                    </td>
                </tr>

                <tr class="row1">
                    <td>Bicipital</td>
                    <td><input type="text" class="input_txt valid" id="bicipital_derecho" name="bicipital_derecho" value="<?php echo @$bicipital_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="bicipital_izquierdo" name="bicipital_izquierdo" value="<?php echo @$bicipital_izquierdo; ?>" />
                    </td>
                </tr>

                <tr class="row1">
                    <td>Tricipital</td>
                    <td><input type="text" class="input_txt valid" id="tricipital_derecho" name="tricipital_derecho" value="<?php echo @$tricipital_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="tricipital_izquierdo" name="tricipital_izquierdo" value="<?php echo @$tricipital_izquierdo; ?>" />
                    </td>
                </tr>

                <tr class="row1">
                    <td>Estilo radical</td>
                    <td><input type="text" class="input_txt valid" id="estilo_radical_derecho" name="estilo_radical_derecho" value="<?php echo @$estilo_radical_derecho; ?>" />
                    </td>
                    <td><input type="text" class="input_txt valid" id="estilo_radical_izquierdo" name="estilo_radical_izquierdo" value="<?php echo @$estilo_radical_izquierdo; ?>" />
                    </td>
                </tr>





            </table>



            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>