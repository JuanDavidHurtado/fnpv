<?php
$location = '';
if (isset($_REQUEST['finalizar'])) {

    $sql = "Update cita set estado='FINALIZADO' where id_cita=" . $_REQUEST['id_cita'];
    $conexion->EjecutarQuery($sql);
    $location = 'window.location.replace("index.php?option=agenda")';
}
?>
<script>

    $(function(){
            
        $("#form_final").validate({
            errorElement:"div",
            rules:{
                nota:{required:true}
            },
            messages:{
                nota:{required:"Ingrese nota para finalizar"}
            }
        }); 
        
        
<?php
echo $location;
?>
        
    
    });

</script>
<fieldset id="fin_sesion" class="no_print">
    <legend align="left"><font>Finalizar sesion</font></legend>
    <form id="form_final" name="form_final" action="<?php echo @$action_form_finalizar ?>#fin_sesion" method="post">

        <label>
            <?php
            $fecha_hora_ya = Date("Y-m-d H:i:s");
            $diff = Utils::getCountHours(@$_REQUEST['fecha_hora_limite'], $fecha_hora_ya);
            $total_horas_restantes = (Utils::$_horas_limite_cita - $diff);
            ?>
            Info: Recuerde que solo cuenta <?php echo Utils::$_horas_limite_cita ?> horas para finalizar la sesion desde el momento en que inicia el proceso, 
            actualmente le queda <?php echo $total_horas_restantes ?> horas para finalizar.
        </label>
        <br>        
        <button  name="finalizar" id="finalizar" >Aceptar</button>

    </form>
</fieldset>