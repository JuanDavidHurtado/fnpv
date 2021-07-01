<?php
if (isset($_REQUEST['guardar_antecedente_escolar']) && isset($_REQUEST['id_cita'])) {

  if ($_REQUEST['id_antecedentes_escolares'] == 'new') {

        $sql = "INSERT INTO `antecedentes_escolares` (
            `id_antecedentes_escolares`, `id_proceso`, `id_usuario`, 
            `historia`, `ninguno`, `preescolar`, `primaria`, 
            `secundaria`, `tecnico`, `tecnologo`, `profecional`, 
            `edad_inicio_escolar`, `observaciones_antecedentes_escolares`) 
            VALUES (
            NULL, '" . $_REQUEST['id_proceso'] . "', '" . $_SESSION['id_usuario'] . "', '" . $_REQUEST['historia'] . "',
            '" . $_REQUEST['ninguno'] . "', '" . $_REQUEST['preescolar'] . "', 
            '" . $_REQUEST['primaria'] . "', '" . $_REQUEST['secundaria'] . "', 
            '" . $_REQUEST['tecnico'] . "', '" . $_REQUEST['tecnologo'] . "',
            '" . $_REQUEST['profecional'] . "', '" . $_REQUEST['edad_inicio_escolar'] . "', '" . $_REQUEST['observaciones_antecedentes_escolares'] . "')";
        
    } else if ($_REQUEST['id_antecedentes_escolares'] != '') {

        $sql = "Update antecedentes_escolares set
                
                 `id_proceso` = '" . $_REQUEST['id_proceso'] . "', 
                 `id_usuario` = '" . $_SESSION['id_usuario'] . "',
                 `ninguno` = '" . $_REQUEST['ninguno'] . "',  
                 `preescolar` = '" . $_REQUEST['preescolar'] . "',  
                 `primaria` = '" . $_REQUEST['primaria'] . "',  
                 `secundaria` = '" . $_REQUEST['secundaria'] . "',  
                 `tecnico` = '" . $_REQUEST['tecnico'] . "',  
                 `tecnologo` = '" . $_REQUEST['tecnologo'] . "',  
                 `profecional` = '" . $_REQUEST['profecional'] . "',  
                 `edad_inicio_escolar` = '" . $_REQUEST['edad_inicio_escolar'] . "', 
                 `observaciones_antecedentes_escolares` = '" . $_REQUEST['observaciones_antecedentes_escolares'] . "'
                 
                where 
                
                id_antecedentes_escolares = " . $_REQUEST['id_antecedentes_escolares'] . "
                    
                ";
    }

    $conexion->EjecutarQuery($sql);
}

$id_antecedentes_escolares = 'new';
$sql_select = "Select * from  antecedentes_escolares where historia = " . $_REQUEST['historia'];
$result = $conexion->EjecutarQuery($sql_select);
while ($row_select = mysql_fetch_array($result)) {

    $id_antecedentes_escolares = $row_select['id_antecedentes_escolares'];
    $check_ninguno = $row_select['ninguno']==1?" checked='checked' ":"";
    $check_preescolar = $row_select['preescolar']==1?" checked='checked' ":"";
    $check_primaria = $row_select['primaria']==1?" checked='checked' ":"";
    $check_secundaria = $row_select['secundaria']==1?" checked='checked' ":"";
    $check_tecnico = $row_select['tecnico']==1?" checked='checked' ":"";
    $check_tecnologo = $row_select['tecnologo']==1?" checked='checked' ":"";
    $check_profecional = $row_select['profecional']==1?" checked='checked' ":"";
    $edad_inicio_escolar = $row_select['edad_inicio_escolar'];
    $observaciones_antecedentes_escolares = $row_select['observaciones_antecedentes_escolares'];

    break;
}
?>
<script>

    $(function(){
            
        $("#form_antecedente_escolar").validate({
            errorElement:"div",
            rules:{
                antecedente_odontologico:{required:true}
            },
            messages:{
                antecedente_odontologico:{required:"Ingrese antecedente para la sesion"}
            }
        }); 
        
        $("#close-antecedente-escolar").click(function(){
            $("#open-antecedente-escolar").show();
            $(this).hide();
            $("#content-antecedente-escolar").hide('slow');
        });
        
        $("#open-antecedente-escolar").click(function(){
            $("#close-antecedente-escolar").show();
            $(this).hide();
            $("#content-antecedente-escolar").show('slow');
        });
    
    });

</script>
<fieldset id="antecedente_escolar">
    <legend align="left"> <div class="arrow-c" id="close-antecedente-escolar"></div> <div class="arrow-o" id="open-antecedente-escolar" ></div> <font>Antecedentes escolares</font></legend>
    <div id="content-antecedente-escolar">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button  name="guardar_antecedente_escolar" id="guardar_antecedente_escolar" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_antecedente_escolar" name="form_antecedente_escolar" action="<?php echo @$action_form_antecedente_escolar ?>#antecedente_escolar" method="post">

            <input type="hidden" id="id_antecedentes_escolares" name="id_antecedentes_escolares" value="<?php echo @$id_antecedentes_escolares ?>" />

            <table width="200" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td valign="top">Ninguno</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_ninguno ?> id="ninguno" name="ninguno" value="1" /></td>
                    <td valign="top">Preescolar</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_preescolar ?> id="preescolar" name="preescolar" value="1" /></td>
                    <td valign="top">Primaria</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_primaria ?> id="primaria" name="primaria" value="1" /></td>
                    <td valign="top">Secundaria</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_secundaria ?> id="secundaria" name="secundaria" value="1" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top">Tecnico</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_tecnico ?> id="ninguno" name="tecnico" value="1" /></td>
                    <td valign="top">Tecnologo</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_tecnologo ?> id="ninguno" name="tecnologo" value="1" /></td>
                    <td valign="top">Profecional</td>
                    <td valign="top"><input type="checkbox" <?php echo @$check_profecional ?> id="ninguno" name="profecional" value="1" /></td>
                    <td valign="top">Edad inicio</td>
                    <td valign="top"><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" value="<?php echo @$edad_inicio_escolar ?>" id="edad_inicio_escolar" name="edad_inicio_escolar" /></td>
                </tr>
                <tr class="row1">
                    <td colspan="8">Observaciones<br>
                    <textarea class="input_txt valid" id="observaciones_antecedentes_escolares" name="observaciones_antecedentes_escolares"  ><?php echo @$observaciones_antecedentes_escolares ?></textarea>
                    </td>
                </tr>
            </table>

            </table>

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>