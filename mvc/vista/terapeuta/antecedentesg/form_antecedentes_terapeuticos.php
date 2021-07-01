<?php
if (isset($_REQUEST['guardar_antecedente_terapeutico']) && isset($_REQUEST['id_cita'])) {
    
    if ($_REQUEST['id_antecedentes_terapeuticos'] == 'new') {
               
        $sql = "INSERT INTO `antecedentes_terapeuticos` 
                ( `id_proceso`, `id_usuario`,
                 `historia`, `fonoaudiologia_edad_ingreso`, 
                 `fonoaudiologia_observacion`, `fonoaudiologia_no_evaluable`, 
                 `fisioterapia_edad_ingreso`, `fisioterapia_observacion`, 
                 `fisioterapia_no_evaluable`, `terapia_ocupacional_edad_ingreso`, 
                 `terapia_ocupacional_observacion`, `terapia_ocupacional_no_evaluable`, 
                 `otros_antecedentes`) VALUES 
                 ('" . $_REQUEST['id_proceso'] . "', '" . $_SESSION['id_usuario'] . "', '" . $_REQUEST['historia'] . "',
                 '".$_REQUEST['fonoaudiologia_edad_ingreso']."', '".$_REQUEST['fonoaudiologia_observacion']."', '".$_REQUEST['fonoaudiologia_no_evaluable']."',
                 '".$_REQUEST['fisioterapia_edad_ingreso']."', '".$_REQUEST['fisioterapia_observacion']."', '".$_REQUEST['fonoaudiologia_edad_ingreso']."',
                 '".$_REQUEST['terapia_ocupacional_edad_ingreso']."', '".$_REQUEST['terapia_ocupacional_observacion']."', '".$_REQUEST['terapia_ocupacional_no_evaluable']."', 
                 '".$_REQUEST['otros_antecedentes']."')";
    
        
    } else if ($_REQUEST['id_antecedentes_terapeuticos'] != '') {
       
       $sql = "Update antecedentes_terapeuticos set
                
                 `id_proceso` = '" . $_REQUEST['id_proceso'] . "', 
                 `id_usuario` = '" . $_SESSION['id_usuario'] . "',
                 `fonoaudiologia_edad_ingreso` = '" . $_REQUEST['fonoaudiologia_edad_ingreso'] . "',  
                 `fonoaudiologia_observacion` = '" . $_REQUEST['fonoaudiologia_observacion'] . "',  
                 `fonoaudiologia_no_evaluable`  = '" . $_REQUEST['fonoaudiologia_no_evaluable'] . "',  
                 `fisioterapia_edad_ingreso` = '" . $_REQUEST['fisioterapia_edad_ingreso'] . "',  
                 `fisioterapia_observacion` = '" . $_REQUEST['fisioterapia_observacion'] . "',  
                 `fisioterapia_no_evaluable` = '" . $_REQUEST['fisioterapia_no_evaluable'] . "',  
                 `terapia_ocupacional_edad_ingreso` = '" . $_REQUEST['terapia_ocupacional_edad_ingreso'] . "',  
                 `terapia_ocupacional_observacion` = '" . $_REQUEST['terapia_ocupacional_observacion'] . "',  
                 `terapia_ocupacional_no_evaluable` = '" . $_REQUEST['terapia_ocupacional_no_evaluable'] . "',  
                 `otros_antecedentes`  = '" . $_REQUEST['otros_antecedentes'] . "'
                
                where 
                
                id_antecedentes_terapeuticos = ".$_REQUEST['id_antecedentes_terapeuticos']."
                    
                ";
    }
    
    $conexion->EjecutarQuery($sql);
}

$id_antecedentes_terapeuticos = 'new';
$sql_select = "Select * from  antecedentes_terapeuticos where historia = " . $_REQUEST['historia'];
$result = $conexion->EjecutarQuery($sql_select);
while ($row_select = mysql_fetch_array($result)) {
    
    $id_antecedentes_terapeuticos = $row_select['id_antecedentes_terapeuticos'];
    $fonoaudiologia_edad_ingreso = $row_select['fonoaudiologia_edad_ingreso'];
    $fonoaudiologia_observacion = $row_select['fonoaudiologia_observacion'];
    $fonoaudiologia_no_evaluable = $row_select['fonoaudiologia_no_evaluable'];
    $fisioterapia_edad_ingreso = $row_select['fisioterapia_edad_ingreso'];
    $fisioterapia_observacion = $row_select['fisioterapia_observacion'];
    $fisioterapia_no_evaluable = $row_select['fisioterapia_no_evaluable'];
    $terapia_ocupacional_edad_ingreso = $row_select['terapia_ocupacional_edad_ingreso'];
    $terapia_ocupacional_observacion = $row_select['terapia_ocupacional_observacion'];
    $terapia_ocupacional_no_evaluable = $row_select['terapia_ocupacional_no_evaluable'];
    $otros_antecedentes = $row_select['otros_antecedentes'];

    break;
}
?>
<script>

    $(function(){
            
        $("#form_antecedente_terapeutico").validate({
            errorElement:"div",
            rules:{
                antecedente_odontologico:{required:true}
            },
            messages:{
                antecedente_odontologico:{required:"Ingrese antecedente para la sesion"}
            }
        }); 
        
        $("#close-antecedente-terapeutico").click(function(){
            $("#open-antecedente-terapeutico").show();
            $(this).hide();
            $("#content-antecedente-terapeutico").hide('slow');
        });
        
        $("#open-antecedente-terapeutico").click(function(){
            $("#close-antecedente-terapeutico").show();
            $(this).hide();
            $("#content-antecedente-terapeutico").show('slow');
        });
    
    });

</script>
<fieldset id="antecedente_terapeutico">
    <legend align="left"> <div class="arrow-c" id="close-antecedente-terapeutico"></div> <div class="arrow-o" id="open-antecedente-terapeutico" ></div> <font>Antecedentes terapeuticos</font></legend>
    <div id="content-antecedente-terapeutico">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            $button = '<button  name="guardar_antecedente_terapeutico" id="guardar_antecedente_terapeutico" >Guardar</button>';
        } else {
            $readonly = " readonly='readonly' ";
        }
        ?>
        <form id="form_antecedente_terapeutico" name="form_antecedente_terapeutico" action="<?php echo @$action_form_antecedente_terapeutico ?>#antecedente_terapeutico" method="post">

            <input type="hidden" id="id_antecedentes_terapeuticos" name="id_antecedentes_terapeuticos" value="<?php echo @$id_antecedentes_terapeuticos ?>" />
            <table width="200" border="0" cellspacing="0" cellpadding="0" class="data">
                <tr class="row1">
                    <td valign="top">Servicio</td>
                    <td valign="top">Edad Ingreso</td>
                    <td valign="top">Observacion</td>
                    <td valign="top">No evaluable</td>
                </tr>
                <tr class="row1">
                    <td valign="top" >Fonoaudiologia</td>
                    <td valign="top" ><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="gateo_edad" name="fonoaudiologia_edad_ingreso" value="<?php echo @$fonoaudiologia_edad_ingreso ?>" /></td>
                    <td valign="top" ><textarea class="input_txt valid" id="gateo_observacion" name="fonoaudiologia_observacion" ><?php echo @$fonoaudiologia_observacion ?></textarea></td>
                    <td valign="top" ><input type="text" class="input_txt valid" id="gateo_edad" name="fonoaudiologia_no_evaluable" value="<?php echo @$fonoaudiologia_no_evaluable ?>" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top" >Fisioterapia</td>
                    <td valign="top" ><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="gateo_edad" name="fisioterapia_edad_ingreso" value="<?php echo @$fisioterapia_edad_ingreso ?>" /></td>
                    <td valign="top" ><textarea class="input_txt valid" id="gateo_observacion" name="fisioterapia_observacion" ><?php echo @$fisioterapia_observacion ?></textarea></td>
                    <td valign="top" ><input type="text" class="input_txt valid" id="gateo_edad" name="fisioterapia_no_evaluable" value="<?php echo @$fisioterapia_no_evaluable ?>" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top" >Terapia ocupacional</td>
                    <td valign="top" ><input type="text" style="min-width: 50px; max-width: 50px" class="input_txt valid" id="gateo_edad" name="terapia_ocupacional_edad_ingreso" value="<?php echo @$terapia_ocupacional_edad_ingreso ?>" /></td>
                    <td valign="top" ><textarea class="input_txt valid" id="gateo_observacion" name="terapia_ocupacional_observacion" ><?php echo @$terapia_ocupacional_observacion ?></textarea></td>
                    <td valign="top" ><input type="text" class="input_txt valid" id="gateo_edad" name="terapia_ocupacional_no_evaluable" value="<?php echo @$terapia_ocupacional_no_evaluable ?>" /></td>
                </tr>
                <tr class="row1">
                    <td valign="top" >Otros(Cuales)</td>
                    <td valign="top" colspan="3" ><textarea class="input_txt valid" id="otros_antecedentes" name="otros_antecedentes"  ><?php echo @$otros_antecedentes ?></textarea></td>
                </tr>
            </table>

            <?php echo @$button ?>
        </form><br>
    </div>
</fieldset>