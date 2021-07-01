<?php
if (isset($_REQUEST['guardar_vinicial'])) {

    if (@$_REQUEST['id_valoracion_inicial'] == 'new') {
        $sql_vini = "INSERT INTO `valoracion_inicial` 
                        (
                        `id_valoracion_inicial`, 
                        `id_vinicial`, 
                         `historia`,`id_cita`, `id_usuario`, 
                         `diagnostico_principal`, 
                         `diagnostico_dx1`, 
                         `diagnostico_dx2`, 
                         `diagnostico_dx3`,

                         `fin_consulta`,
                         `tipo_diagnostico`,
                         `causa_externa`,


                         `valoracion_inicial`, 
                         `fecha`, 
                         `numero_sesiones`) 
                  VALUES (NULL, 
                          '" . @$_REQUEST['id_vinicial'] . "', 
                          '" . @$_REQUEST['historia'] . "', 
                          '" . @$_REQUEST['id_cita'] . "', 
                          '" . $_SESSION['id_usuario'] . "', 
                          '" . @$_REQUEST['c_principal'] . "', 
                          '" . @$_REQUEST['c_dx1'] . "', 
                          '" . @$_REQUEST['c_dx2'] . "', 
                          '" . @$_REQUEST['c_dx3'] . "',

                          '" . @$_REQUEST['tipo_consulta'] . "',
                          '" . @$_REQUEST['tipo_diagnostico'] . "',
                          '" . @$_REQUEST['causa_externa'] . "',



                          '" . strtoupper(@$_REQUEST['valoracion']) . "', 
                          '" . Date('Y-m-d') . "', 
                          '" . @$_REQUEST['numero_sesiones'] . "');";
        
    } else if (@$_REQUEST['id_valoracion_inicial'] != '') {
        $sql_vini = "UPDATE  `valoracion_inicial` 
           SET  `diagnostico_principal` =  '" . @$_REQUEST['c_principal'] . "',
                `diagnostico_dx1` =  '" . @$_REQUEST['c_dx1'] . "',
                `diagnostico_dx2` =  '" . @$_REQUEST['c_dx2'] . "',
                `diagnostico_dx3` =  '" . @$_REQUEST['c_dx3'] . "',

                `fin_consulta` =  '" . @$_REQUEST['tipo_consulta'] . "',
                `tipo_diagnostico` =  '" . @$_REQUEST['tipo_diagnostico'] . "',
                `causa_externa` =  '" . @$_REQUEST['causa_externa'] . "',

                `valoracion_inicial` =  '" . @$_REQUEST['valoracion'] . "',
                `numero_sesiones` =  '" . @$_REQUEST['numero_sesiones'] . "' 
                 WHERE  `id_valoracion_inicial` =" . @$_REQUEST['id_valoracion_inicial'];
    }
    $conexion->EjecutarQuery($sql_vini);
}

if(isset($_REQUEST['id_cita'])) {
    @$_REQUEST['id_valoracion_inicial'] = 'new';
    $sql = "Select * from valoracion_inicial where id_vinicial=" . @$_REQUEST['id_vinicial'];
    $result_valoracion_i = $conexion->EjecutarQuery($sql);
    while ($row_vi = mysql_fetch_array($result_valoracion_i)) {
        
        $_REQUEST['id_usuario_x'] = $row_vi['id_usuario'];
        
        @$_REQUEST['id_valoracion_inicial'] = $row_vi['id_valoracion_inicial'];
        @$_REQUEST['valoracion'] = $row_vi['valoracion_inicial'];
        @$_REQUEST['fecha'] = $row_vi['fecha'];


        $fin_consulta=$row_vi['fin_consulta'];
        $tipo_diagnostico=$row_vi['tipo_diagnostico'];
        $causa_externa=$row_vi['causa_externa'];

        @$_REQUEST['numero_sesiones'] = $row_vi['numero_sesiones'];
        if ($row_vi['diagnostico_principal'] != '') {
            $sql = "select * from enfermedadescie10 where codigo='" . $row_vi['diagnostico_principal'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d = mysql_fetch_array($result_d);
            @$_REQUEST['c_principal'] = $row_d['codigo'];
            @$_REQUEST['i_principal'] = $row_d['enfermedad'];
        }
        if ($row_vi['diagnostico_dx2'] != '') {
            $sql = "select * from enfermedadescie10 where codigo='" . $row_vi['diagnostico_dx1'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d = mysql_fetch_array($result_d);
            @$_REQUEST['c_dx1'] = $row_d['codigo'];
            @$_REQUEST['i_dx1'] = $row_d['enfermedad'];
        }
        if ($row_vi['diagnostico_dx2'] != '') {
            $sql = "select * from enfermedadescie10 where codigo='" . $row_vi['diagnostico_dx2'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d = mysql_fetch_array($result_d);
            @$_REQUEST['c_dx2'] = $row_d['codigo'];
            @$_REQUEST['i_dx2'] = $row_d['enfermedad'];
        }
        if ($row_vi['diagnostico_dx3'] != '') {
            $sql = "select * from enfermedadescie10 where codigo='" . $row_vi['diagnostico_dx3'] . "'";
            $result_d = $conexion->EjecutarQuery($sql);
            $row_d = mysql_fetch_array($result_d);
            @$_REQUEST['c_dx3'] = $row_d['codigo'];
            @$_REQUEST['i_dx3'] = $row_d['enfermedad'];
        }
        ?>

        <script>
            function setValues(){
                $("#id_valoracion_inicial").val('<?php echo @$_REQUEST['id_valoracion_inicial'] ?>');
                $("#valoracion").val('<?php echo @$_REQUEST['valoracion']; ?>');
                $("#fecha").val('<?php echo @$_REQUEST['fecha'] ?>');
                $("#numero_sesiones").val('<?php echo @$_REQUEST['numero_sesiones']; ?>');
                    
                $("#c_principal").val('<?php echo @$_REQUEST['c_principal'] ?>');
                $("#i_principal").val('<?php echo @$_REQUEST['i_principal']; ?>');
                    
                $("#c_dx1").val('<?php echo @$_REQUEST['c_dx1'] ?>');
                $("#i_dx1").val('<?php echo @$_REQUEST['i_dx1']; ?>');
                    
                $("#c_dx2").val('<?php echo @$_REQUEST['c_dx2'] ?>');
                $("#i_dx2").val('<?php echo @$_REQUEST['i_dx2']; ?>');
                    
                $("#c_dx3").val('<?php echo @$_REQUEST['c_dx3'] ?>');
                $("#i_dx3").val('<?php echo @$_REQUEST['i_dx3']; ?>');
            }
                
                
        </script>

        <?php
        break;
    }
}
?>
<script>

    function search_enfermedad(){
        
        var parameters = "opcion=10&term="+$("#b_enfermedad").val();
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                $("#enfermedades").html(data);          
            },error:function(request,error){

            }
        });
        
    }
    
    function save_enfermedad(){
    
        var parameters = "opcion=11&n_enfermedad="+$("#n_enfermedad").val()+"&n_codigo="+$("#n_codigo").val();;
        $.ajax({
            data: parameters, 
            type: "POST",
            dataType: "json", 
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                $("#n_enfermedad, #n_codigo").val('');
                $("#b_enfermedad").val(data.codigo);
                search_enfermedad();
                if(data.bool_insert){
                    alert('Enfermedad registrada');
                }else{
                    alert('Enfermedad no registrada');
                }   
            },error:function(request,error){

            }
        });
    
    }
    
    function poner_e(cod){
        $("#c_"+id_cod).val(cod);
        $("#i_"+id_cod).val($("#e_"+cod).html());
        $("#dialog-enfermedades").dialog('close');
    }

    $(function(){
            
        $("#form_vinicial").validate({
            errorElement:"div",
            rules:{
                c_principal:{required:true},
                i_principal:{required:true},
                valoracion:{required:true}
            },
            messages:{
                c_principal:{required:"Requerido"},
                i_principal:{required:"El diagnostico principal es necesario"},
                valoracion:{required:"La valoracion es necesaria"}
            }
        }); 
        
        $("#form_buscar_enfermedad").validate({
            errorElement:"div",
            rules:{
                b_enfermedad:{required:true}
            },
            messages:{
                b_enfermedad:{required:"Requerido"}
            },
            submitHandler: function(form) {
                search_enfermedad();
            }
        });  
        
        
        $("#form_registrar_enfermedad").validate({
            errorElement:"div",
            rules:{
                n_codigo:{required:true},
                n_enfermedad:{required:true}
            },
            messages:{
                n_codigo:{required:"Requerido"},
                n_enfermedad:{required:"Requerido"}
            },
            submitHandler: function(form) {
                save_enfermedad();
            }
        });
        
        $("#close-form-vinicial").click(function(){
            $("#open-form-vinicial").show();
            $(this).hide();
            $("#content-form-vinicial").hide('slow');
        });
        
        $("#open-form-vinicial").click(function(){
            $("#close-form-vinicial").show();
            $(this).hide();
            $("#content-form-vinicial").show('slow');
        });
        
        $("#principal,#dx1,#dx2,#dx3").click(function(){
            id_cod = $(this).attr('id');
            $("#dialog-enfermedades").dialog('open');
            
        });
        
        $("#dialog-enfermedades").dialog({
            position: ['top', 30],
            resizable: false,
            modal:true,
            autoOpen:false,
            show: "blind",
            hide: "explode",
            width:1080,
            height:650,
            open:function(){
                
            },
            close:function(){
                $("#b_enfermedad, #n_enfermedad, #n_codigo").val('');
                $("#enfermedades").html(''); 
            },
            buttons: {
                Cerrar: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    
        try{
            setValues();
        }catch(e){
            console.log('Error al cargar valores');
        }
    
    });
    
    var id_cod = '';

</script>
<fieldset id="valoracion_inicial">
    <legend align="left"> <div class="arrow-c" id="close-form-vinicial"></div> <div class="arrow-o" id="open-form-vinicial" ></div> <font>Diagnostico</font></legend>
    <div id="content-form-vinicial">
        <?php
        if (isset($_REQUEST['id_cita'])) {
            ?>
            <form id="form_vinicial" name="form_vinicial" action="<?php echo @$action_form_vinicial ?>#valoracion_inicial" method="post">

                <input type="hidden" id="id_valoracion_inicial" name="id_valoracion_inicial" value="<?php echo @$_REQUEST['id_valoracion_inicial'] ?>" />
                <table border='0' cellpading="0" cellspacing="0">
                    <tr height="30px">
                        <td valign="top" width="80px">Diagnostico</td>
                        <td valign="top">Codigo</td>
                        <td valign="top">Nombre</td>
                        <td valign="top"></td>
                    </tr>
                    <tr>
                        <td valign="top">Principal</td>
                        <td valign="top"><input readonly="readonly" style="min-width: 50px; max-width: 50px" class="input_txt" type="text" name="c_principal" id="c_principal" /></td>
                        <td valign="top"><input readonly="readonly" style="min-width: 350px; max-width: 350px" class="input_txt" type="text" name="i_principal" id="i_principal" /></td>
                        <td valign="top">
                           <div id="principal"  class="no_print ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false"><span class="ui-button-text">Buscar</span></div>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">Dx 1</td>
                        <td valign="top"><input readonly="readonly" style="min-width: 50px; max-width: 50px" class="input_txt" type="text" name="c_dx1" id="c_dx1" /></td>
                        <td valign="top"><input readonly="readonly" style="min-width: 350px; max-width: 350px" class="input_txt" type="text" name="i_dx1" id="i_dx1" /></td>
                        <td valign="top">
                            <div id="dx1" class="no_print ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false"><span class="ui-button-text">Buscar</span></div>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">Dx 2</td>
                        <td valign="top"><input readonly="readonly" style="min-width: 50px; max-width: 50px" class="input_txt" type="text" name="c_dx2" id="c_dx2" /></td>
                        <td valign="top"><input readonly="readonly" style="min-width: 350px; max-width: 350px" class="input_txt" type="text" name="i_dx2" id="i_dx2" /></td>
                        <td valign="top">
                            <div id="dx2" class="no_print ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false"><span class="ui-button-text">Buscar</span></div>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">Dx 3</td>
                        <td valign="top"><input readonly="readonly" style="min-width: 50px; max-width: 50px" class="input_txt" type="text" name="c_dx3" id="c_dx3" /></td>
                        <td valign="top"><input readonly="readonly" style="min-width: 350px; max-width: 350px" class="input_txt" type="text" name="i_dx3" id="i_dx3" /></td>
                        <td valign="top">
                            <div id="dx3" class="no_print ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" aria-disabled="false"><span class="ui-button-text">Buscar</span></div>
                        </td>
                    </tr>


                </table>


                    Tipo de Consulta:   <select id='tipo_consulta' class="input_txt " name='tipo_consulta'>
                    <option value='0' >Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr = "Select * from fin_consulta";
                    $resultr = $conexion->EjecutarQuery($sqlr);

                    while ($rowr = mysql_fetch_array($resultr)) {
                         $nombre = $rowr['nombre'];
                        if ($fin_consulta == $rowr['nombre'])
                          $sel = "selected='selected'";

                        echo "<option value='" . $rowr['nombre'] . "' $sel>" . $nombre . "</option>";
                        $sel = "";
                    }
                    ?>
                     </select> <br />

           Tipo de Diagnostico:

  <select id='tipo_diagnostico' class="input_txt " name='tipo_diagnostico'>
                    <option value='0' >Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr1 = "Select * from tipo_diagnostico";
                    $resultr1 = $conexion->EjecutarQuery($sqlr1);

                    while ($rowr1 = mysql_fetch_array($resultr1)) {
                         $nombre1 = $rowr1['nombre'];
                        if ($tipo_diagnostico == $rowr1['nombre'])
                         $sel1 = "selected='selected'";

                        echo "<option value='" . $rowr1['nombre'] . "' $sel1>" . $nombre1 . "</option>";
                        $sel1 = "";
                    }
                    ?>
           </select>

            <br />
           Causa Externa:
            <select id='causa_externa' class="input_txt " name='causa_externa'>
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr2 = "Select * from causa_externa";
                    $resultr2 = $conexion->EjecutarQuery($sqlr2);

                    while ($rowr2 = mysql_fetch_array($resultr2)) {
                         $nombre2 = $rowr2['nombre'];
                        if ($tipo_diagnostico == $rowr2['nombre'])
                          $sel2 = "selected='selected'";
                    

                        echo "<option value='" . $rowr2['nombre'] . "' $sel2>" . $nombre2 . "</option>";
                        $sel2 = "";
                    }
                    ?>
            </select>

           <br>

                <table>


                    <!--
                    <tr>
                        <td>
                            <label>Numero de sesiones</label>
                            <br>
                            <select id="numero_sesiones" name="numero_sesiones" class="input_txt">
                                <php
                                
                                for($i = 1; $i <= 50; $i++ ){
                                    
                                    echo "<option value='{$i}'>{$i}</option>";
                                    
                                }
                                
                                ?>
                            </select>
                        </td>  
                        <td>
                            <label>Fecha</label>
                            <br>
                            <input class="input_txt" type="text" name="fecha_vinicial" id="fecha_vinicial" readonly="" value="<?php echo Date('Y-m-d') ?>" />
                        </td>
                    </tr> -->
                     <!--
                     <tr>
                        <td colspan="2">
                            <label>Plan de manejo</label>
                            <br>
                            <textarea id="plan_manejo" name="plan_manejo" class="input_txt_area" rows="3" cols="50"><?php ?></textarea>        
                        </td>
                    </tr>
                    -->
                    <tr>
                        <td colspan="2">
                            <label>Observación</label>
                            <br>
                            <textarea id="valoracion" name="valoracion" class="input_txt_area" rows="3" cols="50"><?php ?></textarea>        
                        </td>
                    </tr>

                </table>

                 
            <br />
             <br />
                <button  name="guardar_vinicial" id="guardar_vinicial" >Guardar</button>
            </form><br>
            <?php
        }
        ?>

        <div id="content_notas">


            <?php
      
            $sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido 
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where id_vinicial=" . $_REQUEST['id_vinicial'] . " and  vi.historia='" . @$_REQUEST['historia'] . "'";    
        
            $resultados = $conexion->EjecutarQuery($sql);
            $total_registros = mysql_num_rows($resultados);
            $sql_search = $sql . " ORDER BY vi.fecha DESC ";
            $resultados = $conexion->EjecutarQuery($sql_search);         

            echo "<table width='80%' border='0' cellpadding='0' cellspacing='0' class='data'>";
            echo "<tbody><tr class='t_head'>
                        <th valign='left' width='50px'>Cita</th>
                       
                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='' width='70px'>Fecha</th>
                        <th valign=''>Diagnostico</th>
                        <th valign=''>Observacion</th>
                        <th valign=''>plan_manejo</th>
                      </tr></tbody>";
            $contador = 0;
            if ($total_registros) {
                $bool_style = true;
                while ($row_f = mysql_fetch_array($resultados)) {


                    if ($bool_style) {
                        $style_file_table = "row1";
                    } else {
                        $style_file_table = "row2";
                    }
                    $bool_style = !$bool_style;


                    $diagnostico = '';
                    if ($row_f['diagnostico_principal'] != '') {
                        $sql = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_principal'] . "'";
                        $result_d = $conexion->EjecutarQuery($sql);
                        $row_d = mysql_fetch_array($result_d);
                        $diagnostico .= $row_d['codigo'] . "-" . $row_d['enfermedad'];
                    }
                    if ($row_f['diagnostico_dx1'] != '') {
                        $sql = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx1'] . "'";
                        $result_d = $conexion->EjecutarQuery($sql);
                        $row_d = mysql_fetch_array($result_d);
                        $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
                    }
                    if ($row_f['diagnostico_dx2'] != '') {
                        $sql = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx2'] . "'";
                        $result_d = $conexion->EjecutarQuery($sql);
                        $row_d = mysql_fetch_array($result_d);
                        $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
                    }
                    if ($row_f['diagnostico_dx3'] != '') {
                        $sql = "select * from enfermedadescie10 where codigo='" . $row_f['diagnostico_dx3'] . "'";
                        $result_d = $conexion->EjecutarQuery($sql);
                        $row_d = mysql_fetch_array($result_d);
                        $diagnostico .= "<br>" . $row_d['codigo'] . "-" . $row_d['enfermedad'];
                    }

                    echo "<tr class='$style_file_table'>";

                    $sesion = $row_f['id_cita'];
                    if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
                        $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
                    }

                    echo "<td align='right'>" . $sesion . "</td>";
                    
                    echo "<td align='center'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";
                    echo "<td align='center'>" . $row_f['fecha'] . "</td>";
                    echo "<td align='left'>" . $diagnostico . "</td>";
                    echo "<td align='left'>" . $row_f['valoracion_inicial'] . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<font color='darkgray'>(sin resultados)</font>";
            }
            echo "</table>";         
               
              ?>
        </div>

    </div>
</fieldset>


<div id="dialog-enfermedades" title="Lista de enfermedades">
    <form id="form_buscar_enfermedad" action="#">
        <label>Codigo o enfermedad para buscar</label><br>
        <input style="min-width: 250px; max-width: 250px" class="input_txt" type="text" name="b_enfermedad" id="b_enfermedad" /> <button id="buscar_enfermedad">Buscar</button>
    </form>
    <div id="enfermedades">

    </div>
    <br>
    <form id="form_registrar_enfermedad" action="#">
        <label>Registrar enfermedad</label>
        <table border="0" cellspacing="0" cellpading='0'>
            <tr>
                <td valign="top">
                    <label>Codigo</label><br>
                    <input style="min-width: 50px; max-width: 50px" class="input_txt" type="text" name="n_codigo" id="n_codigo" />
                </td>
                <td valign="top">
                    <label>Enfermedad</label><br>
                    <input style="min-width: 250px; max-width: 250px" class="input_txt" type="text" name="n_enfermedad" id="n_enfermedad" />
                </td>
                <td valign="top">

                    <button id="guardar_enfermedad">Guardar</button>
                </td>
            </tr>
        </table>       

    </form>
</div>