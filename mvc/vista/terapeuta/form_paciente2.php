<script>
    
    $(function(){
        $("#close-form-paciente").click(function(){
            $("#open-form-paciente").show();
            $(this).hide();
            $("#content-form-paciente").hide('slow');
        });
        
        $("#open-form-paciente").click(function(){
            $("#close-form-paciente").show();
            $(this).hide();
            $("#content-form-paciente").show('slow');
        });
    })

</script>
<fieldset>
    <legend align="left"> <div class="arrow-c" id="close-form-paciente"></div> <div class="arrow-o" id="open-form-paciente" ></div> <font>Informacion Personal</font></legend>
    <div id="content-form-paciente">
        <?php
        include ($GLOBALS['raiz'] . 'mvc/vista/admin/form_new_paciente.php');
        ?>
    </div>
</fieldset>