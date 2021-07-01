<?php
if (isset($_REQUEST['guardar_antecedente_odontologico']) && isset($_REQUEST['id_cita'])) {

    $sql_up = "UPDATE  `paciente` SET  
                    `antecedente_odontologico` =  '" . $_REQUEST['antecedente_odontologico'] . "' 
                     WHERE  `paciente`.`historia` =" . $_REQUEST['historia'] . ";";

    $conexion->EjecutarQuery($sql_up);

    @$_REQUEST['antecedente_odo'] = $_REQUEST['antecedente_odontologico'];
}
?>
<script>

    $(function(){
            
        $("#form_antecedente_odontologico").validate({
            errorElement:"div",
            rules:{
                antecedente_odontologico:{required:true}
            },
            messages:{
                antecedente_odontologico:{required:"Ingrese antecedente para la sesion"}
            }
        }); 
        
        $("#close-antecedente-odont").click(function(){
            $("#open-antecedente-odont").show();
            $(this).hide();
            $("#content-antecedente-odont").hide('slow');
        });
        
        $("#open-antecedente-odont").click(function(){
            $("#close-antecedente-odont").show();
            $(this).hide();
            $("#content-antecedente-odont").show('slow');
        });
    
    });

</script>
<fieldset id="antecedente_odontologico_f">
    <legend align="left"> <div class="arrow-c" id="close-antecedente-odont"></div> <div class="arrow-o" id="open-antecedente-odont" ></div> <font>Antecedentes odontologicos</font></legend>
    <div id="content-antecedente-odont">
    <?php
    if (isset($_REQUEST['id_cita'])) {
        $button = '<button  name="guardar_antecedente_odontologico" id="guardar_antecedente_odontologico" >Guardar</button>';
    } else {
        $readonly = " readonly='readonly' ";
    }
    ?>
        <form id="form_antecedente_odontologico" name="form_antecedente_odontologico" action="<?php echo @$action_form_antecedente_odontologico ?>#antecedente_odontologico_f" method="post">
            <label>Antecendete</label>
            <br>
            <textarea <?php echo @$readonly ?> id="antecedente_odontologico" name="antecedente_odontologico" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['antecedente_odo'] ?></textarea>
            <br>
        <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>