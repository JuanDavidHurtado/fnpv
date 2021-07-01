<?php
if (isset($_REQUEST['guardar_antecedentes'])) {


    $sql_up = "UPDATE  `paciente` SET  
                    `antecedentes_familiares` =  '" . $_REQUEST['antecedentes_familiares'] . "',
                    `antecedente_patologico` =  '" . $_REQUEST['antecedente_patologico'] . "',
                    `antecedente_traumatico` =  '" . $_REQUEST['antecedente_traumatico'] . "',
                    `antecedente_quirurgico` =  '" . $_REQUEST['antecedente_quirurgico'] . "',
                    `antecedente_toxico` =  '" . $_REQUEST['antecedente_toxico'] . "',
                    `antecedente_farmacologico` =  '" . $_REQUEST['antecedente_farmacologico'] . "' 
                     WHERE  `paciente`.`historia` =" . $_REQUEST['historia'] . ";";

    $conexion->EjecutarQuery($sql_up);

    @$_REQUEST['antecedentes_f'] = $_REQUEST['antecedentes_familiares'];
    @$_REQUEST['antecedente_p'] = $_REQUEST['antecedente_patologico'];
    @$_REQUEST['antecedente_t'] = $_REQUEST['antecedente_traumatico'];
    @$_REQUEST['antecedente_q'] = $_REQUEST['antecedente_quirurgico'];
    @$_REQUEST['antecedente_f'] = $_REQUEST['antecedente_farmacologico'];
    @$_REQUEST['antecedente_to'] = $_REQUEST['antecedente_toxico'];
}
?>
<script>

    $(function() {
        $("#close-form-antecedentes").click(function() {
            $("#open-form-antecedentes").show();
            $(this).hide();
            $("#content-form-antecedentes").hide('slow');
        });

        $("#open-form-antecedentes").click(function() {
            $("#close-form-antecedentes").show();
            $(this).hide();
            $("#content-form-antecedentes").show('slow');
        });
    })

</script>
<fieldset id="antecedentes">
    <legend align="left"> <div class="arrow-c" id="close-form-antecedentes"></div> <div class="arrow-o" id="open-form-antecedentes" ></div> <font>Antecedentes</font></legend>
    <div id="content-form-antecedentes">
        <form id="form_antecedentes" name="form_antecedentes" action="<?php echo @$action_form_antecedentes ?>#antecedentes" method="post">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_antecedentes" id="guardar_antecedentes" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
            <label>Familiares</label>
            <br>
            <textarea id="antecedentes_familiares" name="antecedentes_familiares" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedentes_f'] ?></textarea>
            <br>
            <font>
            Personales
            </font>

            <table border='0' cellpading="0" cellspacing="0">
                <tr>
                    <td>
                        <label>Patologicos</label>
                        <br>
                        <textarea id="antecedente_patologico" name="antecedente_patologico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_p'] ?></textarea>
                    </td>
                    <td>
                        <label>Traumaticos</label>
                        <br>
                        <textarea id="antecedente_traumatico" name="antecedente_traumatico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_t'] ?></textarea>
                    </td>

                </tr> 
                <tr>
                    <td>
                        <label>Quirurgicos</label>
                        <br>
                        <textarea id="antecedente_quirurgico" name="antecedente_quirurgico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_q'] ?></textarea>
                    </td>
                    <td>
                        <label>Toxicos</label>
                        <br>
                        <textarea id="antecedente_toxico" name="antecedente_toxico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_to'] ?></textarea>
                    </td>

                </tr>  
                <tr>
                    <td>
                        <label>Farmacologicos</label>
                        <br>
                        <textarea id="antecedente_farmacologico" name="antecedente_farmacologico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_f'] ?></textarea>
                    </td>
                    <td></td>
                </tr>  
            </table>

            <?php 
            echo $button;
            
            ?>
            <!--<button  name="guardar_antecedentes" id="guardar_antecedentes" >Guardar</button>-->

        </form>
    </div>  
</fieldset>